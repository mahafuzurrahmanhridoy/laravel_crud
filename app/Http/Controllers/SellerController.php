<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use App\Http\Requests\SellerStoreRequest;
use App\Http\Requests\SellerUpdateRequest;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::latest()->paginate(10);
        // dd($sellers);
        return view('admin.pages.sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellerStoreRequest $request)
    {

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/sellerimages', $imageName);
        
        Seller::create([
            'shopname' => $request->shopname,
            'location' => $request->location,
            'image' => $imageName,
        ]);


        return redirect()->route('sellers.index')->withStatus('Shop Added Successfully');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sellers = Seller::findOrFail($id);
        return view('admin.pages.sellers.show', compact('sellers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sellers = Seller::findOrFail($id);
        return view('admin.pages.sellers.edit', compact('sellers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SellerUpdateRequest $request, string $id)
    {
        try {
            $sellers = Seller::findOrFail($id);
            $sellers->update([
                'shopname' => $request->shopname,
                'location' => $request->location,
            ]);
            return redirect()->route('sellers.index')->withStatus('Seller Updated Successfully');
        } catch (QueryException $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Seller::destroy($id);
        return redirect()->route('sellers.index')->withStatus('Shop Deleted Successfully');
    }
}
