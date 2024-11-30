<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});

// (9) Route Controller (route yang sering digunakan)
Route::get('/blog', [BlogController::class, 'index']);


// -------------------------------------------------------------------------------------------------------------------------------------

// (1) Route View Get
// Route::get('/blog', function (){
//     return view('blog');
// });

// (2) Route View lebih singkat (tanpa get dan return hanya menampilkan saja tanpa ambil/mengoper data)
// Route::view('/blog', 'blog');

// (3) Route View Get dengan mengoper data dari variabel data atau key
// Route::get('/blog', function (){
    //     return view('blog', ['data' => 'test123']);
    // });

// (4) Route View singkat dengan mengoper data
// Route::view('/blog', 'blog', ['data' => 'test123']);

// (5) Route View Get mengambil data dari database query
// Route::get('/blog', function (){
//         $profile = 'aku programer baru';
//         return view('blog', ['data' => $profile]);
//     })->name('blog');

// NB: kelemahan syntax singkat pada route view adalah tidak bisa mengambil data dynamic/manggil data dari database. hanya bisa static.

// (6) Route View Parameter Dynamic
// Route::get('/blog/{id}', function($id){
//     return 'ini adalah blog page '.$id;
// });

// (7) Route yang sering digunakan, yaitu Request dimana fungsinya utk update data atau create data untuk ditangkap saat input
// Route::get('/blog/{id}', function(Request $request){
//     return 'ini adalah blog page '.$request->id;
// });

// (8) Named Route, samain dengan end pointnya, gunanya untuk redirect dengan catatan kita menginisialisasi halaman redirect menggunaan named route yang benar
// Route::get('/blog/{id}', function(Request $request){
//     // anggap kita update data dan sudah berhasil
//     return redirect()->route('blog');
// });



