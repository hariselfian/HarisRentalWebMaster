<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BarangSewaan;

class BarangSewaanController extends Controller
{
    public function index(){
        // dd($request->all());die();
        $barangsewaan = BarangSewaan::all();
        return response()->json([
            'success' => 1,
            'message' => 'Get Barang Sewaan Berhasil',
            'barangsewaans' => $barangsewaan
        ]);
    }
}
