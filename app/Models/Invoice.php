<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceFactory> */
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'due_date',
        'product_id',
        'quantity',
        'price',
        'total',
        'status'
    ];

    /**
     * Get the user that owns the Invoice
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
