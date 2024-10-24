<?php

namespace App\Http\Controllers;

class AnimalController extends Controller{

    public function index(){
        echo "Menampilkan seluruh data hewan";
    }

    public function store(){
        echo "Menambahkan hewan baru";
    }
    public function update($id){
        echo "Mengupdate data hewan id $id";
    }

    public function destroy($id){
        echo "Menghapus data hewan id $id";
    }

}