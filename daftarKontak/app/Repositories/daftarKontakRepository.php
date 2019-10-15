<?php
namespace App\Repositories;
use App\daftarKontak ;

class daftarKontakRepository implements daftarKontakInterface{
    public function create(string $nama,string $telepon, string $email, string $alamat){
        $newdaftarKontak= new daftarKontak;
        $newdaftarKontak->nama=$nama;
        $newdaftarKontak->telepon=$telepon;
        $newdaftarKontak->email=$email;
        $newdaftarKontak->alamat=$alamat;
        $newdaftarKontak->save();

    }

    public function all(){
        return daftarKontak::all();
    }

    public function get(int $id){
        return daftarKontak::findOrFail($id);
        
    }
    public function update(int $id, daftarKontak $data){
        $daftarKontak= $this->get($id);
        $daftarKontak->nama = $data->nama;
        $daftarKontak->telepon = $data->telepon;
        $daftarKontak->email=$data->email;
        $daftarKontak->alamat=$data->alamat;
        $daftarKontak->save();
    }
    public function delete(int $id){
        $daftarKontak= $this->get($id);
        $daftarKontak->delete();
        
    }
    public function search(string $search){
            $daftarKontak=daftarKontak::where('nama','like',"%".$search."%")->get();
            return $daftarKontak;
        
    }
}


?>