<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iban extends Model
{
    use HasFactory;

    protected $fillable = [
        'iban_No',
        'balance',
        'client_id',
    ];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
