<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//basic route
Route::get('about',function () {
    return 'ini halaman about';
});

Route::get('profile',function (){
    return view('profile');
});

// route parameter (ditandai-> {})
Route::get('produk/{namaProduk}', function ($a){
    return 'Saya membeli <b>'. $a . '</b>';
});

Route::get('beli/{barang}/{jumlah}', function($a,$b){
    return view('beli',compact('a','b'));
});

// route optional parameter
Route::get('kategori/{namaKategori?}',function($nama = null){
    if ($nama) {
        return 'Anda Memilih kategori : ' . $nama;
    } else {
        return 'Anda Belum Memilih kategori!';
    }
    
});

Route::get('promo/{barang?}/{kode?}',function($a = null,$b = null){
    return view('promo',compact('a','b'));
});