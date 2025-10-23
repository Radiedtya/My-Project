<?php

use Illuminate\Support\Facades\Route;

// panggil controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;

// Route::get('page', [PageController::class, 'home']);
// Route::get('post', [PostsController::class,'tampil']);

Route::resource('post', PostsController::class);
Route::resource('biodata', BiodatasController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('telepon', TeleponController::class);
Route::resource('game', GameController::class);
Route::resource('product', ProductController::class);
Route::resource('kelas', KelasController::class);
Route::resource('murid', MuridController::class);


Route::get('/daftarcrud', function () {
    return view('daftarcrud');
})->name('daftarcrud');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// route yang mengambil semua method yang ada pada controller



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// latihan
// Route::get('/about', function () {
//     return 'Selamat Datang di halaman about';
// });
// Route::get('/profile', function () {
//     return 'Selamat Datang di halaman profile';
// });


// tampilkan data ke view blade
// Route::get('/siswa', function () {
//     $siswa = Siswa::all();
//     return view('siswa', compact('siswa'));
// });





// contoh CRUD product 
// Route::get('/product', function () {
    // menampilkan semua data (READ)
    // $product = Product::all();
    // return $product; // jika ingin melihat isi data saja
    // return view('product'); // jika ingin langsung masuk ke halaman folder view/product.blade.php

    // menambah record di product (CREATE)
    // $product = new Product; // instansiasi model product
    // $product->name        = 'Dimsum Mentai'; // nama dari product yang dibuat
    // $product->description = 'Makanan khas Bandung'; // deskripsi yang dibuat
    // $product->price       = 30000; // price yang dibuat
    // $product->stock       = 100; // stok yang dibuat
    // $product->save(); // simpan ke database
    // return $product;  // kembalikan nilai product dan jangan lupa refresh browser 
                      // jika ingin di menambahkan lagi tinggal ganti saja  nama, deskripsi, price, dan stock nya
                      // dan refresh kembali
                      // Note : jika direfresh artinya ditambahkan, ingat!

    
    // merubah record di product (UPDATE) berdasarkan id
    // $product = Product::find(1); // ganti si no 1 jadi id yang ingin di ganti
    // $product->name        = "Laptop Asus"; // nama baru
    // $product->description = "laptop gaming terbaik"; // deskripsi baru
    // $product->price       = 10000000; // harga baru
    // $product->stock       = 10; // stock baru
    // $product->save(); // simpan perubahan
    // return $product;  // kembalikan nilai product dan jangan lupa refresh browser 
                      // jika ingin di rubah lagi tinggal ganti saja  nama, deskripsi, price, dan stock nya
                      // dan refresh kembali
                      // Note : jika direfresh artinya diubah, ingat!


    // menghapus record di product (DELETE) berdasarkan id
    // $product = Product::find(1); // ganti si no 1 jadi id yang ingin di hapus
    // $product->delete(); // hapus record
    // return $product; // kembalikan nilai product dan jangan lupa refresh browser 
                     // jika ingin di hapus lagi tinggal ganti saja id nya
                     // dan refresh kembali
                     // Note : jika direfresh artinya dihapus, ingat!
// });







// Route::get('/post', function () {
//     // menampilkan semua data
//     $post = Post::all();
//     return view('post', compact('post'));

//     // merubah record
//     // berdasarkan id 
//     $post = Post::find(1);
//     $post->title = 'Menjadi teman yang baik';
//     $post->save();
//     return $post;

//     // menghapus record
//     // berdasarkan id
//     $post = Post::find(1);
//     $post->delete();
//     return $post;

//     // menambah record
//     $post = new post;
//     $post->title = 'Menjadi teman yang baik';
//     $post->content = 'adalah hal positif';
//     $post->save();
//     return $post;
// });








// Route::get('/biodatasiswa', function () {
//     // tampilkan semua data
//     $biodata = Biodata::all();
//     return view('biodata', compact('biodata'));

    // tambah data
    // $biodata = new biodata;
    // $biodata->nama_lengkap  = 'Galang';
    // $biodata->jenis_kelamin = 'L';
    // $biodata->tanggal_lahir = '2008-01-01';
    // $biodata->tempat_lahir  = 'Bandung';
    // $biodata->agama         = 'Islam';
    // $biodata->alamat        = 'TKI';
    // $biodata->telepon       = '0812345678910';
    // $biodata->email         = 'galang@gmail.com';
    // $biodata->save();
    // return $biodata;

    // ubah data berdasarkan id
    // $biodata = Biodata::find(13);
    // $biodata->nama_lengkap  = 'Ipat';
    // $biodata->jenis_kelamin = 'L';
    // $biodata->tanggal_lahir = '2009-01-01';
    // $biodata->tempat_lahir  = 'Bandung';
    // $biodata->agama         = 'Islam';
    // $biodata->alamat        = 'Rancamanyar';
    // $biodata->telepon       = '0812345678910';
    // $biodata->email         = 'ipat@gmail.com';
    // $biodata->save();
    // return $biodata;
// });





















// routing dengan parameter
// Route::get('/biodata/{namaLengkap}/{tanggalLahir}/{jenisKelamin}/{tempatLahir}/{alamat}/{agama}/{telepon}', function ($namaLengkap,$tanggalLahir,$jenisKelamin,$tempatLahir,$alamat,$agama,$telepon) {
//     return "<h1>Biodata</h1>".
//             "Nama Lengkap : $namaLengkap <br>".
//             "Tanggal Lahir: $tanggalLahir<br>".
//             "Jenis Kelamin: $jenisKelamin<br>".
//             "Tempat Lahir : $tempatLahir<br>".
//             "Alamat       : $alamat<br>".
//             "Agama        : $agama<br>".
//             "Telepon      : $telepon";
// });
// Route::get('/hitung/{bilangan1}/{bilangan2}', function($bilangan1, $bilangan2){
//     return "Bilangan 1 : $bilangan1<br>".
//            "Bilangan 2 : $bilangan2<br>".
//            "Hasil      : ". $hasil = $bilangan1 + $bilangan2;
// });

// Route::get("/hitungPersegi/{sisi}", function ($sisi){
//     return "<h3>Hitung Persegi</h3>".
//            "Sisi  :" . $sisi. "<br>".
//            "Hasil :". $hasilPergsegi = $sisi * $sisi;
// });

// Route::get("/hitungPersegiPanjang/{panjang}/{lebar}", function ($panjang, $lebar){
//     return "<h3>Hitung Persegi Panjang</h3>".
//            "Panjang :" . $panjang. "<br>".
//            "Lebar   :" . $lebar. "<br>".
//            "Hasil   :". $hasilPergsegiPanjang = $panjang * $lebar;
// });

// Route::get("/hitungSegitiga/{alas}/{tinggi}", function($alas, $tinggi){
//     return "<h3>Hitung Segitiga</h3>".
//            "Alas   : " . $alas . "<br>".
//            "Tinggi : " . $tinggi . "<br>".
//            "Hasil  : " . $hasilSegitiga = 0.5 * $alas * $tinggi;
// });

// Route::get("/hitungLingkaran/{jari}", function($jari){
//     return "<h3>Hitung Lingkaran</h3>".
//            "Jari-jari  :" . $jari . "<br>".
//            "Hasil      :" . $hasilLingkaran = 3.14 * ($jari * $jari);
// });

// Route::get("/kafe/{nama}/{notlpn}/{tgl}/{jenis}/{menu}/{jumlah}", function($nama, $notlpn, $tgl, $jenis, $menu, $jumlah){
//     // logic menu
//     $harga = 0;
//     if ( $jenis == "makanan" ) {
//         if ( $menu == "Batagor" ) {
//             $harga = 20000;
//         } elseif ( $menu == "Seblak" ) {
//             $harga = 10000;
//         } elseif ( $menu == "Pentol" ) {
//             $harga = 15000;
//         } else {
//             echo "Jenis Makanan Tidak Ada !";
//         }
//     } elseif ( $jenis == "minuman" ) {
//         if ( $menu == "Kopi" ) {
//             $harga = 5000;
//         } elseif ( $menu == "Jus" ) {
//             $harga = 10000;
//         } elseif ( $menu == "Thai Tea" ) {
//             $harga = 15000;
//         } else {
//             echo "Jenis Minuman Tidak Ada !";
//         }
//     } else {
//         echo "Jenis Tidak Ada !";
//     }
//     // hitung total
//     $total = $harga * $jumlah;
//     // logic diskon 10%
//     if ( $total > 50000 ) {
//         $diskon = $total * 0.1;
//     }else {
//         $diskon = 0;
//     }

//     return "<h5>~ Assalaam Coffe ~</h5> "     .
//            "======================="  . "<br>".
//            "Nama Pemesan : $nama"     . "<br>".
//            "No Telepon   : $notlpn"   . "<br>".
//            "Tanggal Beli : $tgl"      . "<br>".
//            "Jenis        : $jenis"    . "<br>".
//            "Menu         : $menu"     . "<br>".
//            "Harga        : $harga"    . "<br>".
//            "Jumlah       : $jumlah"   . "<br>".
//            "------------------------" . "<br>".
//            "Total        : ". $total  . "<br>".
//            "Diskon 10%   : ". $diskon . "<br>".
//            "------------------------" . "<br>".
//            "Total Bayar  : ". $totalBayar = $total - $diskon;
// });























// routing view dengan mengirim array
// Route::get("halaman1", function () {
//     $nama = ["Radit", "Davin", "Jihad", "Ilman", "Rakha", "Fadil", "Jauf", "Rehan", "Reihan", "Fakhri"];
//     return view("tampil1", compact("nama"));
// });
// Route::get("halaman2", function () {
//     $hobi = ["Makan", "Menyanyi", "Nongki", "Masak", "Main Game", "Membaca Komik", "Membaca Novel", "Nonton anime", "Nonton drama", "Nonton Film"];
//     return view("tampil2", compact("hobi"));
// });
// Route::get("halaman3", function () {
//     $cita2 = ["Polisi", "TNI", "Pilot", "Masinis", "Programmer", "Owner Perusahaan", "Pengacara", "Nahkoda", "Pembalap", "Pembuat Komik"];
//     return view("tampil3", compact("cita2"));
// });


// Route::get('/data', function () {
//     $data = [
//         [
//             'nama'  => 'Laptop', 
//             'harga' => 15000000
//         ],

//         [
//             'nama'  => 'HP',
//             'harga' => 5000000
//         ],

//         [
//             'nama'  => 'Tablet',
//             'harga' => 3000000
//         ],
//     ];

//     // kirim array ke view
//     return view('data', ['barang' => $data]);
// });


Auth::routes();

// fallback route (jika route tidak ditemukan)
Route::fallback(function () {
    return view('notfound');
});
