<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function user(){
        $json = Http::get('https://vigenesia.org/api/user')->json();
        return response()->json($json);
    }
    public function motivasi(){
        $json = Http::get('https://vigenesia.org/api/Get_motivasi')->json();
        return response()->json($json);
    }
    public function registrasi(){
        $json = Http::withBody(json_encode([
            "name" => 'megaaaaaaaa',
            "profesi" => 'mahasiswi', 
            "email" => 'megaaa123@gmail.com', 
            "password" => '12345']), 'application/x-www-form-urlencoded')
            ->post('https://vigenesia.org/api/registrasi')->json();
        return response()->json($json);                      
    }
    public function login(){
        $json = Http::withBody(json_encode([
            "email" => 'megaaa123@gmail.com',
            "password" => '12345']), 'application/x-www-form-urlencoded')
            ->post('https://vigenesia.org/api/login')->json();
            return response()->json($json);
    }
    public function postmotivasi(){
        $json = Http::withBody(json_encode([
            "isi_motivasi" => 'semangat',
            "iduser"    => '289'
        ]), 'application/x-www-form-urlencoded')
        ->post('https://vigenesia.org/api/dev/POSTmotivasi')->json();
        return response()->json($json);
    }
}