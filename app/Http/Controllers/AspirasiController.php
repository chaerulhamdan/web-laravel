<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('role')->except('store' , 'create_aspirasi');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $aspirasi = Aspirasi::all();
        //dd($cast);
        
        return view('admin.aspirasi.index', compact('aspirasi','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_aspirasi()
    {
        return view('users.aspirasi.tambah');
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
            'judul'=> 'required',
            'isi'=> 'required'
        ]);
        $aspirasi = new Aspirasi();

        $aspirasi->judul = $request->input('judul');
        $aspirasi->isi = $request->input('isi');
        $aspirasi->user_id = auth()->user()->id;
        $aspirasi->save();

        return redirect()->route('aspirasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $users = User::all();
        $aspirasi = Aspirasi::where('id', $id)->first();
        return view('admin.aspirasi.detail', compact('users', 'aspirasi'));

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('aspirasi')->where('id', $id)->delete();
        return redirect('/aspirasi');
    }
}


