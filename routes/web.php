<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/key', function () {
//     return Str::random(32);
// });

// $router->get('/date', function () use ($router) {
//     $date = Carbon::now();
//     return response()->json([
//         'Time'=> $date->toDateTimeImmutable()
//         ]);
// }); 
    

// $router->get('/get', function () {
//     return 'GET';
// });

// $router->post('/test', function (Request $request) {
//     $jari =  $request->input('jari');
//     $luasLingkaran = 3.14*$jari*$jari;
//     return response()->json([
//     'Luas Lingkaran'=> $luasLingkaran
//     ]);
// });

// $router->put('/put', function () {
//     return 'PUT';
// });
// $router->patch('/patch', function () {
//     return 'PATCH';
// });
// $router->delete('/delete', function () {
//     return 'DELETE';
// });

// $router->options('/options', function () {
//     return 'OPTIONS';
// });

// $router->post('/coba', function () {
//     return 'OPTIONS';
// });

    // $router->get('/user/{id}', function ($id) {
    //     return 'User Id = ' . $id;
    // });

    // $router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    //     return 'Post ID = ' . $postId . ' Comments ID = ' . $commentId;
    // });

    // $router->get('/users[/{userId}]', function ($userId = null) {
    //     return $userId === null ? 'Data semua users' : 'Data user dengan id ' . $userId;
    // });

    // $router->get('/auth/login', ['as' => 'route.auth.login', function () {
    //     return 'ini halaman login';
    // }]);

    // $router->get('/profile', function (Request $request) {
    //     if ($request->isLoggedIn == null) {
    //     return redirect()->route('route.auth.login');
    //     }
    //     return 'ini halaman profile';
    // });

    // $router->group(['prefix' => 'users'], function () use ($router) {
    //     $router->get('/', function () { 
    //     return "GET /users";
    //     });
        
    //     $router->get('/mahasiswa', function () {
    //         return 'GET /users/mahasiswa';
    //     });
    // });

    // $router->get('/admin/home/', ['middleware' => 'age', function () {
    //     return 'Dewasa';
    //     }]);
    //     $router->get('/fail', function () {
    //         return 'Dibawah umur';
    //     });

    // $router->get('/', ['uses' => 'ControllerMHS@index']);
    // $router->get('/tambahuser', ['uses' => 'ControllerMHS@tambahMHS']);
    // $router->get('/listMahasiswaBelumBayarUKT', ['uses' => 'ControllerMHS@belumBayar']);
    // $router->get('/listMahasiswaSudahBayarUKT', ['uses' => 'ControllerMHS@cekBayar']);
    // $router->get('/cekPembayaranMahasiswa/{nim}', ['uses' => 'ControllerMHS@cekMHS']);
    // $router->post('/cekKRS', 'ControllerMHS@KRS');

    $router->get('/195150701111016', ['uses' => 'ControllerUser@index']);
    $router->get('/tambah', ['uses' => 'ControllerUser@tambahUser']);
    $router->get('/hello', ['uses' => 'ControllerUser@hello']);



    $router->put('/updateDataSemua/{id}', 'ControllerUser@updateDataSemua');
    $router->put('/updateDataNama/{id}', 'ControllerUser@updateDataNama');
    $router->put('/updateDataEmail/{id}', 'ControllerUser@updateDataEmail');
    $router->put('/updateDataPassword/{id}', 'ControllerUser@updateDataPassword');

    