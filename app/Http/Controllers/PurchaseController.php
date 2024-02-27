<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;


class PurchaseController extends Controller
{
    //
    public function index()
    {
        return view('purchase.index', ['purchases' => Purchase::all()]);
    }

    public function create()
    {
        return view('purchase.create');
    }

    public function store(Request $request)
    {
        Purchase::create($request->all());

        return redirect()->route('purchase.index')->with('sucess', 'Purchase created successfully');
    }

    public function show(Purchase $purchase)
    {
        return view('purchase.show', ['purchases' => $purchase]);
    }

    public function edit(Purchase $purchase)
    {
        return view('purchase.edit', ['purchase' => $purchase]);
    }

    public function update(Request $request, Purchase $purchase)
    {
        $purchase->update($request->all());

        return redirect()->route('purchase.index')->with('sucess', 'Purchase updated successfully');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchase.index')->with('sucess', 'Purchase deleted successfully');
    }
}
