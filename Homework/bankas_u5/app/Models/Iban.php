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
    
    protected static $sorts = [
        'no_sort' => 'Nerūšiuota',
        'balance_asc' => 'Likutis (A-Z)',
        'balance_desc' => 'Likutis (Z-A)',
    ];

    protected static $perPageSelect = [
        0 => 'Visi',
        3 => 3,
        11 => 11,
        13 => 13,
        17 => 17,
        29 => 29,
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public static function getPerPageSelect()
    {
        return self::$perPageSelect;
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
