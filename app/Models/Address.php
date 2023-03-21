<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = ['postal_code', 'address_line1', 'city', 'state', 'client_id'];

    /**
     * Get the clients document.
     *
     * @param  string  $value
     * @return string
     */
    public function getPostalCodeAttribute($value)
    {
        $parte1 = substr($value, 0, 5);
        $parte2 = substr($value, 5, 3);
        return $parte1 . '-' . $parte2;
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
