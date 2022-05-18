<?php

namespace App\Http\Controllers;

use App\kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = kecamatan::latest()->paginate(5);

        return view('backend.kecamatan.index',compact('kecamatan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('backend.kecamatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kecamatan = new kecamatan([
            'province' => $request->get('province'),
            'kota' => $request->get('kota'),
            'kelurahan' => $request->get('kelurahan'),
            'kecamatan' => $request->get('kecamatan'),
        ]);

        $kecamatan->save();
        return redirect()->route('kecamatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = kecamatan::find($id);
        return view('backend.kecamatan.edit',compact('kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kecamatan = kecamatan::find($id);
        $kecamatan->province = $request->get('province');
        $kecamatan->kota = $request->get('kota');
        $kecamatan->kelurahan = $request->get('kelurahan');
        $kecamatan->kecamatan = $request->get('kecamatan');

        $kecamatan->save();
        return redirect()->route('kecamatan.index')
                        ->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan = kecamatan::find($id);
        $kecamatan->delete();

        return redirect()->route('kecamatan.index')
                        ->with('success','Data deleted successfully');
    }
}
