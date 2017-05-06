<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_invoice_item extends Model
{
    protected $table = 'client_invoice_items';
    protected $fillable = ['client_invoice_id', 'quantity', 'description', 'price'];

    public function invoice()
    {
        return $this->hasOne(Client_invoice::class);
    }
}
