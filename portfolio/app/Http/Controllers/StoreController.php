<?php

namespace App\Http\Controllers;

use App\Store;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    public function index(Store $store)
    {
         return view('stores/index')->with(['stores' => $store->getPaginateByLimit()]);
    }

    public function show(Store $store)
    {
        return view('stores/show')->with(['store' => $store]);
    }
    
    public function create()
    {
        return view('stores/create');
    }
    
    public function store(StoreRequest $request, Store $store)
    {
        $input = $request['store'];
        $store->fill($input)->save();
        return redirect('/stores/' . $store->id);
    }
    
    public function edit(Store $store)
    {
        return view('stores/edit')->with(['store' => $store]);
    }
    
    public function update(StoreRequest $request, Store $store)
    {
        $input_store = $request['store'];
        $store->fill($input_store)->save();
        return redirect('/stores/' . $store->id);
    }
    
    public function delete(Store $store)
    {
        $store->delete();
        return redirect('/stores');
    }
}
