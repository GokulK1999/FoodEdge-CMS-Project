<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    use HasFactory;
    protected $table = 'invoices'; // Specify the table name if it differs
    protected $fillable = [
        'invoice_number', 'total_amount', 'created_at', 'updated_at', 'name', 'item', 'totalPaid', 'description', 'status'
    ];
//
}
