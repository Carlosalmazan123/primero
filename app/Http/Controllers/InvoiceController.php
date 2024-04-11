<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
     // Mostrar todas las facturas
     public function index()
     {
         $invoices = Invoice::all();
         return view('invoice_index', compact('invoices'));
     }
 
     // Mostrar el formulario para crear una nueva factura
     public function create()
     {
         return view('invoice_create');
     }
 
     // Almacenar una nueva factura en la base de datos
     public function store(Request $request)
     {
         $request->validate([
             'cliente' => 'required|array',
             'codigo' => 'required|array',
             'fecha' => 'required|date',
             'total' => 'required|numeric',
         ]);
 
         Invoice::create($request->all());
 
         return redirect()->route('invoices.index')->with('success', 'Factura creada exitosamente.');
     }

     public function show($id)
{
    $invoice = Invoice::findOrFail($id);
    return view('invoice_show', compact('invoice'));
}
}
