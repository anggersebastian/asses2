<?php

namespace App\Http\Controllers;

use App\kecamatan;
use Excel;
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

    public function kecamatanImport(Request $request){
        if($request->hasFile('kecamatan')){
            $path = $request->file('kecamatan')->getRealPath();
            $data = Excel::load($path)->get();
            if($data->count()){

                foreach ($data as $key => $value) {
                    //print_r($value);
                    $kecamatan_list[] = ['province' => $value->province, 'kota' => $value->kota, 'kelurahan' => $value->kelurahan, 'kecamatan' => $value->kecamatan,];
                }
                if(!empty($kecamatan_list)){
                    kecamatan::insert($kecamatan_list);
                    
                }
            }
        }else{
            return view('kecamatan.index');
        }
        return view('kecamatan.index');
    } 


    public function kecamatanExport($type){
        $kecamatan = kecamatan::select('province','kota','kelurahan', 'kecamatan')->get()->toArray();
        return Excel::create('kecamatan', function($excel) use ($kecamatan) {
            $excel->sheet('kecamatan Details', function($sheet) use ($kecamatan)
            {
                $sheet->fromArray($kecamatan);
            });
        })->download($type);
    }
}
