<?php
namespace App\Repositories;
use App\daftarKontak;

interface daftarKontakInterface{
    public function create(string $nama,string $telepon, string $email, string $alamat);
    public function all();
    public function get(int $id);
    public function update(int $id, daftarKontak $data);
    public function delete(int $id);
    public function search(string $search);
}
?>