<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('role')->except('index' , 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $adm = User::count();
        $acrs = Acara::count();
        $son = Acara::where('date', '>=', Carbon::now())->count();
        if ($request->has('search')) {
            $acr = Acara::where('name','LIKE','%'.$request->search.'%')->get();
        }else{
            $adm = User::count();
            $acrs = Acara::count();
            $son = Acara::where('date', '>=', Carbon::now())->count();
            $acr = Acara::all();
            return view('admin.acara.index', compact('acr', 'adm', 'acrs', 'son'));
        }
        return view('admin.acara.index', compact('acr', 'adm', 'acrs', 'son'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'image' => 'required',
            'name' => 'required',
            'date' => 'required',
            'desc' => 'required'
        ]);

        $acr = new Acara();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $file->move('storage\acara_images', $ext);
            $acr->image = $ext;
        }

        $acr->name = $request->input('name');
        $acr->date = $request->input('date');
        $acr->desc = $request->input('desc');
        $acr->save();
        return redirect()->route('acara.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acr = Acara::find($id);
        return view('admin.acara.detail_acara', compact('acr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acr = Acara::find($id);
        return view('admin.acara.edit_acara', compact('acr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'date' => 'required',
            'desc' => 'required'
        ]);

        $acr = Acara::find($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalName();
            $file->move('storage\acara_images', $ext);
            $acr->image = $ext;
        }

        $acr->name = $request->input('name');
        $acr->date = $request->input('date');
        $acr->desc = $request->input('desc');
        $acr->save();
        return redirect()->route('acara.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Acara::find($id)->delete();
        return redirect()->route('acara.index');
    }
}
