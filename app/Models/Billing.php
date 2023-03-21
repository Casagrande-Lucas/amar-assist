<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;
    
    protected $fillable = ['type_billing', 'amount', 'amount_fine', 'billing_status'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
