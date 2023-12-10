<?php

namespace App\Http\Controllers\API;

use App\Models\Landingpage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MolenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Landingpage::getLandingpage()->paginate(5);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'id_perusahaan'=> '',
            'foto' => '',
            'kategori' => 'required',
            'harga' => 'required',
            'nama_bengkel' => 'required',
            'lokasi' => 'required',
            'jam_buka' => '',
            'jam_tutup' => '',
        ]);
        try{
            $filename = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/landingpages',$filename);
            $validasi['foto']=$path;
            $response = Landingpage::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data'=>$response
            ]);
        } catch(\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi=$request->validate([
            'id_perusahaan'=> '',
            'foto' => '',
            'kategori' => 'required',
            'harga' => 'required',
            'nama_bengkel' => 'required',
            'lokasi' => 'required',
            'jam_buka' => '',
            'jam_tutup' => '',
        ]);
        try{
            if($request->file('foto')){
                $filename = time().$request->file('foto')->getClientOriginalName();
                $path = $request->file('foto')->storeAs('uploads/landingpages',$filename);
                $validasi['foto']=$path;
            }
            $response = Landingpage::find($id);
            $response -> update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data'=>$response
            ]);
        } catch(\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data=Landingpage::find($id);
            $data->delete();
            return response()->json([
                'success'=>true,
                'message'=>'success'
        ]);
        }catch(\Exception $e){
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
    }
}
