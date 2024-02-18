<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::all();
        $sorts = Client::getSorts();          //pasiimti sortus iš clientControler
        $sortBy = $request->query('sort', '');
        $perPageSelect = Client::getPerPageSelect();
        $perPage = (int) $request->query('per_page', 0);

        $clients = Client::query();

        $clients = match($sortBy) {
            'name_asc' => $clients->orderBy('surname'),
            'name_desc' => $clients->orderByDesc('surname'),
            default => $clients,
        };

        if($perPage > 0) {
            $clients = $clients->paginate($perPage)->withQueryString();
        } else {
            $clients = $clients->get();
        }

        // $clients = $clients->paginate(8);   //puslapiavimas

        return view('clients.index', [
            'clients' => $clients,
            'sorts' => $sorts,
            'sortBy' => $sortBy,
            'perPageSelect' => $perPageSelect,
            'perPage' => $perPage,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('clients-index')->with('ok', 'Sukurtas naujas klientas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.show', [
            'client' => $client,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
            return view('clients.edit', [
            'client' => $client,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients-index')->with('ok', 'Kliento duomenys atnaujinti');
    }
    /**
     * Confirm remove the specified resource in storage.
     */
    public function delete(Client $client)
    {
        return view('clients.delete', [
            'client' => $client
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients-index')->with('info', 'Kliento duomenys ištrinti');
    }
}
