<?php

namespace App\Http\Controllers;

use App\Models\JenisKucing;
use Illuminate\Http\Request;

class HomeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $homey    = JenisKucing::when($request->keyword, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        $homey->appends($request->only('keyword'));

        return view('homey.welcome', compact('homey'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisKucing  $jenisKucing
     * @return \Illuminate\Http\Response
     */
    public function show(JenisKucing $homey)
    {
        return view('homey.show', compact('homey'));
    }
}
