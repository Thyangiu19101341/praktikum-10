<?php
namespace App\Http\controllers;
use Illuminate\Http\Request;
use App\Models\kategoti;

public function index()
{
    //Menampilkan data tabel kategori 
    $KData = kategori ::get();
    $JRek  = kategori ::count();

    return view('praktikum10.tugas1',compact('KData','JRek'));
}