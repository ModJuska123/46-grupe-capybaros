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
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Iban $iban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iban $iban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIbanRequest $request, Iban $iban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iban $iban)
    {
        //
    }
}
