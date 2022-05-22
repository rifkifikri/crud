<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Buku;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuk(){
        return view('index');
    }
    public function welcome(){
        return view('welcome');
    }
    //menampilkan semua data ke halaman awal
    public function index()
    {
        //  dd(request('keyword'));
        $post =M_Buku::all();

        return view('index')->with(
            ['data' => $post]
        );
       
    }
    public function search(Request $request){
        $post =M_Buku::all();
        $keyword = $request->keyword;
        $data=M_Buku::latest();
        if($keyword){
            $post->where('judul_buku','like','%'.$keyword.'%');
            dd(request($keyword));
        }
        // dd(request('keyword'));
        return view('index')->with(
            ['data' => $post]
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    // function yang berguna untuk update data
    /**
     * Store a newly created resource in storage. atau untuk menambahkan data baru ke db
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->except(['_token']);
        M_Buku::insert($data);
        return redirect('/');
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
        $data=M_Buku::findOrFail($id);
        return view('show')->with(
            ['data' => $data]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage. untuk menambahkan data yang telah update atau edit setelah submit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item=M_Buku::findOrFail($id);
        $data = $request->except(['_token']);
        // $item->isbn = $request->input('isbn');
        // $item->judul_buku = $request->input('judul_buku');
        // $item->pengarang = $request->input('pengarang');
        // $item->penerbit = $request->input('penerbit');
        // $item->tahun_terbit = $request->input('tahun_terbit');
        // $item->cetakan = $request->input('cetakan');
        // $item->jumlah_halaman = $request->input('jumlah_halaman');
        $item ->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item=M_Buku::findOrFail($id);
        // $data = $request->except(['_token']);
        $item ->delete();
        return redirect('/');
    }
}
