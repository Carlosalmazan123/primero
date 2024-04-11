<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table="invoices";
    protected $primariKey="id";
    protected $guarded=["id"];
   

    protected $casts = [
        'cliente' => 'array',
        "codigo"=> "array",
    ];
}
