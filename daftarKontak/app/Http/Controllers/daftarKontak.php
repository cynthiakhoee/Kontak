<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarKontak as daftarKontakModel;
use App\Repositories\daftarKontakInterface;

class daftarKontak extends Controller
{
    private $daftarKontakRepo;

    public function __construct(daftarKontakInterface $repo){
        $this->daftarKontakRepo = $repo;
    }

    public function index() {
        $daftarKontaks= $this->daftarKontakRepo->all();
        return view('daftarKontak.index',
            ['daftarkontaks'=>$daftarKontaks]);
    }

    public function new_form() {
        return view('daftarKontak.new');
    }

    public function save(Request $request) {
        $nama= ($request->input('nama'));
        $telepon=$request->input('telepon');
        $email=$request->input('email');
        $alamat=$request->input('alamat');
       $this->daftarKontakRepo->create($nama,$telepon,$email,$alamat);
        return redirect(route('daftarKontakIndex'));
    }

    public function detail(int $id) {
        $daftarKontak = $this->daftarKontakRepo->get($id);
        return view('daftarKontak.detail',
            ['daftarKontak'=>$daftarKontak]);
    }
    public function edit(int $id) {
        $daftarKontak = $this->daftarKontakRepo->get($id);
        return view('daftarKontak.edit',
            ['daftarKontak'=>$daftarKontak]);
    }

    public function update(Request $request, int $id) {
        $daftarKontak=new daftarKontakModel();
        $daftarKontak->nama= $request->input('nama');
        $daftarKontak->telepon=$request->input('telepon');
        $daftarKontak->email=$request->input('email');
        $daftarKontak->alamat=$request->input('alamat');
        $this->daftarKontakRepo->update($id, $daftarKontak);
        return redirect(route('daftarKontakIndex'));
    }

    public function delete(int $id) {
        $this->daftarKontakRepo->delete($id);
        return redirect(route('daftarKontakIndex'));
    }

    public function search(Request $request){
        $search= $request->search;
        $daftarKontak = $this->daftarKontakRepo->search($search);
        return view('daftarKontak.index', ['daftarkontaks'=>$daftarKontak]);
    }
}


