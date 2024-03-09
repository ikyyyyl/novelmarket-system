<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }

    public function create(){
        return view('suppliers.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'sname' => 'required',
            'contactnum' => 'required',
            'address' => 'required',
            'prod_id' => 'required|exists:products,id'
        ]);
    
        $newSupplier = Supplier::create($data);

        return redirect(route('supplier.index'));
    }

    public function edit(Supplier $supplier){
        return view('suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Supplier $supplier, Request $request){
        $data = $request->validate([
            'sname' => 'required',
            'contactnum' => 'required',
            'address' => 'required',
            'prod_id' => 'required|exists:products,id'
        ]);

        $supplier->update($data);

        return redirect(route('supplier.index'))->with('success', 'Supplier Updated Successfully');

    }

    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect(route('supplier.index'))->with('success', 'Supplier Deleted Successfully');

    }
    
}
