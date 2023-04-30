<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    static private $data = array(
        ['npm' => 21310002, 'name' => 'lukman', 'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['npm' => 21310034, 'name' => 'ikan',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['npm' => 21310017, 'name' => 'cinta',  'gender' => 'Perempuan', 'alamat' => 'Bogor'],
        ['npm' => 21310069, 'name' => 'cecep',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
        ['npm' => 21310025, 'name' => 'puput',  'gender' => 'Perempuan', 'alamat' => 'Bogor'],
        ['npm' => 21310001, 'name' => 'konli',  'gender' => 'Laki-Laki', 'alamat' => 'Bogor'],
    );
    public  function index() {
        return view('home', [
            'data' => self::$data
        ]);
    }
}