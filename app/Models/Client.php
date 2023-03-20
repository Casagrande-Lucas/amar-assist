<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'document', 'type_document', 'contact', 'client_status'];

    /**
     * Get the clients document.
     *
     * @param  string  $value
     * @return string
     */
    public function getDocumentAttribute($value)
    {
        if(strlen($value) == 11) {
            $parte1 = substr($value, 0, 3);
            $parte2 = substr($value, 3, 3);
            $parte3 = substr($value, 6, 3);
            $parte4 = substr($value, 9, 2);
         
            return $parte1 . '.' . $parte2 . '.' . $parte3 . '-' . $parte4;
        } else {
            $parte1 = substr($value, 0, 2);
            $parte2 = substr($value, 2, 3);
            $parte3 = substr($value, 5, 3);
            $parte4 = substr($value, 8, 4);
            $parte5 = substr($value, 12, 2);
         
            return $parte1 . '.' . $parte2 . '.' . $parte3 . '/' . $parte4 . '-' . $parte5;
        }
    }

    /**
     * Get the clients document.
     *
     * @param  string  $value
     * @return string
     */
    public function getContactAttribute($value)
    {
        if(strlen($value) == 11) {
            $parte1 = substr($value, 0, 2);
            $parte2 = substr($value, 2, 1);
            $parte3 = substr($value, 3, 4);
            $parte4 = substr($value, 7, 4);
        
            return '(' . $parte1 . ')' . $parte2 . $parte3 . '-' . $parte4;
        } else {
            $parte1 = substr($value, 0, 2);
            $parte2 = substr($value, 2, 4);
            $parte3 = substr($value, 6, 4);
        
            return '(' . $parte1 . ')' . $parte2 . '-' . $parte3;
        }
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
