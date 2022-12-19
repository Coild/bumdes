<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function pengelola(Request $req) {
        $data = $req->all(); 
        $data == null ? [] : $data;  
        return view('fitur.pengelola', ['data' => $data]);
    } 

    public function akun(Request $req) {
        return view('fitur.akun');
    } 

    public function pemasok(Request $req) {
        return view('fitur.pemasok');
    } 

    public function detilpemasok(Request $req) {
        return view('fitur.detil.pemasok');
    } 

    public function dashboard(Request $req) {
        return view('fitur.dashboard');
    } 

    public function datausaha(Request $req) {
        return view('fitur.datausaha');
    } 
}
