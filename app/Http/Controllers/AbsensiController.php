<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Acara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{

    public function __construct()
    {
        $this->middleware('role')->except('store' , 'create');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::all();
        //dd($cast);
        
        return view('admin.absensi.index', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acara = Acara::all();
        return view('users.absensi.tambah', compact('acara'));
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
            'acara_id' => 'required',
            'keterangan' => 'required'
        ]);
        $absensi = new Absensi();

        $absensi->acara_id = $request->input('acara_id');
        $absensi->user_id = auth()->user()->id;
        $absensi->keterangan = $request->input('keterangan');
        $absensi->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $absensi = Absensi::find($id);
        $users = User::find($absensi->user_id);
        $acara = Acara::find($absensi->acara_id);
        return view('admin.absensi.detail',compact('absensi', 'users', 'acara'));
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi = Absensi::find($id);
        return view('admin.absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            'acara_id'=> 'required',
            'keterangan'=> 'required'
        ]);

        $absensi = Absensi::find($id);
        
        $absensi->acara_id = $request->input('acara_id');
        $absensi->user_id = auth()->user()->id;
        $absensi->keterangan = $request->input('keterangan');
        $absensi->save();
        return redirect('/absensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Absensi::find($id)->delete();
        return redirect('/absensi');
    }
}
