<?php

namespace App\Http\Controllers;

use App\Models\JenisKucing;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class KucingController extends Controller
{

    /**
     * Membuat sebuah fungsi untuk mengaktifkan sessions 
     * pada halaman Jenis Kucing
     */

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        /**
         * Melakukan Pengecekan Session pada Jenis Kucing
         */

        $data = $request->session()->has('auth');
        if ($data) {
            return view('auth.login');
        }

        // $jeniskucing = JenisKucing::latest()->paginate(5);

        // return view('jeniskucing.index', compact('jeniskucing'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

        $pagination  = 5;
        $jeniskucing    = JenisKucing::when($request->keyword, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $jeniskucing->appends($request->only('keyword'));

        return view('jeniskucing.index', compact('jeniskucing'))
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
            'url_gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('url_gambar')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['url_gambar'] = "$profileImage";
        }

        JenisKucing::create($input);

        return redirect()->route('jeniskucing.index')
            ->with('success', 'Data Jenis Kucing berhasil dibuat!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(JenisKucing $jeniskucing)
    {
        return view('jeniskucing.show', compact('jeniskucing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisKucing $jeniskucing)
    {
        return view('jeniskucing.edit', compact('jeniskucing'));
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
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('url_gambar')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['url_gambar'] = "$profileImage";
        } else {
            unset($input['url_gambar']);
        }

        $jeniskucing->update($input);

        return redirect()->route('jeniskucing.index')
            ->with('success', 'Data Jenis Kucing berhasil diperbarui!');
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
            ->with('success', 'Data Jenis Kucing berhasil dihapus!');
    }
}
