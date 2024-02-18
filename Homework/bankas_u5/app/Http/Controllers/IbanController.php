<?php

namespace App\Http\Controllers;

use App\Models\Iban;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIbanRequest;
use App\Http\Requests\UpdateIbanRequest;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class IbanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $clients = Client::orderBy('name')->get();


        $sorts = Iban::getSorts();
        $sortBy = $request->query('sort', '');
        $perPageSelect = Iban::getPerPageSelect();
        $perPage = (int) $request->query('per_page', 0);
        $clientId = (int) $request->query('client_id', 0);

        $ibans = Iban::query();

        if ($clientId > 0) {
            $ibans = $ibans->where('client_id', $clientId);
        }

        $ibans = match($sortBy) {
            'balance_asc' => $ibans->orderBy('balance'),
            'balance_desc' => $ibans->orderByDesc('balance'),
            default => $ibans,
        };

        if($perPage > 0) {
            $ibans = $ibans->paginate($perPage)->withQueryString();
        } else {
            $ibans = $ibans->get();
        }

      return view('ibans.index', [
        'ibans' => $ibans,
        'sorts' => $sorts,
        'sortBy' => $sortBy,
        'perPageSelect' => $perPageSelect,
        'perPage' => $perPage,
        'clients' => $clients,
        'clientId' => $clientId,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();

        return view('ibans.create', ['clients' => $clients,]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIbanRequest $request)
    {
        Iban::create($request->all());

        return redirect()->route('ibans-index')->with('ok', 'Sąskaita sėkmingai sukurta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Iban $iban)
    {
       return view('ibans.show', [

        'iban' => $iban,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iban $iban)
    {
        $clients = Client::all();

        return view('ibans.edit', [
            'iban' => $iban,
            'clients' => $clients,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIbanRequest $request, Iban $iban)
    {
        // dd($request->addfunds);
        
        $iban->balance =  $iban->balance + $request->addfunds - $request->reducefunds;

        $iban->update($request->all());

       return redirect()->route('ibans-index')->with('ok', 'Sąskaita sėkmingai pakooreguota');
    }

    /**
     * Confirm remove the specified resource from storage.
     */
    public function delete(Iban $iban)
    {
        return view('ibans.delete', [
            'iban' => $iban,
        ]);
    
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iban $iban)
    {
        $iban->delete();

        return redirect()->route('ibans-index')->with('info', 'Sąskaita sėkmingai ištrinta');
    }
}
