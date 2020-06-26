<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\merchandise;

class MerchandiseController extends Controller
{
    public function indexAdmin(){
    //Mengambil data dari tabel merchandise
    $merchandise = DB::table('merchandise')->get();

    //Mengirim data merchandise ke view index
    return view('admin/merchandise', ['merchandise' => $merchandise]);
    }

    public function indexUser(){
        //Mengambil data dari tabel merchandise
        $merchandise = DB::table('merchandise')->get();
    
        //Mengirim data merchandise ke view index
        return view('user/merchandise', ['merchandise' => $merchandise]);
        }

    public function tambah_merchan(){
        //Memanggil view tambah
        return view('admin/merchandise_tambah');
    }

    public function submit_merchan(Request $request){
        // $this->validate($request,['image'=>'required|file|image']);

        // $file = $request->file('image');

        // $nama_file = time()."_".$file->getClientOriginalName();

        // $tujuan_upload = 'data_file';

        // $file->move($tujuan_upload,$nama_file);


		$merchandise = DB::table('merchandise')->get();
        //Insert data ke tabel merchandise
        DB::table('merchandise')->insert([
            'id' => $request->id,
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'deskripsi'=>$request->deskripsi,
            // 'image' => $nama_file
        ]);

        return redirect('/admin/merchandise');
    }

    public function edit_merchan($id){
        //Mengambil data merchandise berdasarkan id yang dipilih
        $merchandise = DB::table('merchandise')->where('id', $id)->get();
        return view('admin/merchandise_edit', ['merchandise' => $merchandise]);
    }
   
    public function update_merchan(Request $request){
        //Update data merchandise
        DB::table('merchandise')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama'=>$request->nama,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'deskripsi'=>$request->deskripsi,
        ]);

        return redirect('/admin/merchandise');
    }

    public function hapus_merchan($id){
        //Menghapus data merchandise berdasarkan id yang dipilih
        DB::table('merchandise')->where('id', $id)->delete();

        return redirect('/admin/merchandise');
    }

    public function lihat_merchan_admin($id){
        $merchandise = DB:: table('merchandise')->where('id', $id)->get();

        return view('admin/merchandise_lihat', ['merchandise'=> $merchandise]);
    }

    public function lihat_merchan_user($id){
        $merchandise = DB:: table('merchandise')->where('id', $id)->get();

        return view('user/merchandise_lihat', ['merchandise'=> $merchandise]);
    }
}
