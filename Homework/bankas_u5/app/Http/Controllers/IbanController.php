<?php

namespace App\Http\Controllers;

use App\Models\Iban;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIbanRequest;
use App\Http\Requests\UpdateIbanRequest;

class IbanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $ibans = Iban::all();

      return view('ibans.index',['ibans' => $ibans,]);
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

        return redirect()->route('ibans-index');
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

       return redirect()->route('ibans-index');
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

        return redirect()->route('ibans-index');
    }
}
