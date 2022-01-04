<?php

namespace App\Http\Controllers;

use App\Models\JenisKucing;
use Illuminate\Http\Request;

class KucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeniskucing = JenisKucing::latest()->paginate(5);
  
        return view('jeniskucing.index',compact('jeniskucing'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeniskucing.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'url_gambar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'desc_singkat' => 'required',
        ]);
  
        JenisKucing::create($request->all());
   
        return redirect()->route('jeniskucing.index')
                        ->with('success','Data Jenis Kucing created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(JenisKucing $jeniskucing)
    {
        return view('jeniskucing.show',compact('jeniskucing'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisKucing $jeniskucing)
    {
        return view('jeniskucing.edit',compact('jeniskucing'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisKucing $jeniskucing)
    {
        $request->validate([
            'url_gambar' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'desc_singkat' => 'required',
        ]);
  
        $jeniskucing->update($request->all());
  
        return redirect()->route('jeniskucing.index')
                        ->with('success','Data Jenis Kucing updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisKucing $jeniskucing)
    {
        $jeniskucing->delete();
  
        return redirect()->route('jeniskucing.index')
                        ->with('success','Data Jenis Kucing deleted successfully');
    }
}