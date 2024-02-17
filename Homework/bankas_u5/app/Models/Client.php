<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'akId',
    ];

    protected static $sorts = [
        '' => 'Nerūšiuota',
        'name_asc' => 'Pavardė (A-Z)',
        'name_desc' => 'Pavardė (Z-A)',
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public function ibans()
    {
        return $this->hasMany(Iban::class);
    }
}
