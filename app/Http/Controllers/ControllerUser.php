<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index (Request $request) {
        return 'Hello, from lumen! We got your request from endpoint: ' . $request->path();
    }

    public function tambahUser()
    {
        Users::create([
            'name' => 'Azzam Wicaksono',
            'email' => 'azzamw@gmail.com',
            'password' => 'BESARSEMUA'
        ]);
        return 'data telah berhasil ditambahkan';
    }

    public function hello()
    {
        $data['status'] = 'Success';
        $data['message'] = 'Hello, from lumen!';
        return (new Response($data, 201))->header('Content-Type', 'application/json');
    }

    public function updateDataNama(Request $request, $id)
    {
        $post = Users::whereId($id)->update([
            'name' => $request->input('name')
        ]);

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Nama Berhasil Diupdate!',
                'data' => $post
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diupdate!',
            ], 400);
         }

        }

    public function updateDataEmail(Request $request, $id)
    {
            $post = Users::whereId($id)->update([
                'email' => $request->input('email')
            ]);
    
            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Email Berhasil Diupdate!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal Diupdate!',
                ], 400);
             }
    
    }

    public function updateDataPassword(Request $request, $id)
    {
            $post = Users::whereId($id)->update([
                'password'=> $request->input('password')
            ]);
    
            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password Berhasil Diupdate!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal Diupdate!',
                ], 400);
        }
    
    } 

    public function updateDataSemua(Request $request, $id)
    {
            $post = Users::whereId($id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password'=> $request->input('password')
            ]);
    
            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Diupdate!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal Diupdate!',
                ], 400);
        }
    
    } 
}




