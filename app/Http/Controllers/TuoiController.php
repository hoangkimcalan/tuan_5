<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TuoiController extends Controller
{
    public function index()
    {
        return view('tinh-tuoi');
    }

    public function calculateAge(Request $request)
    {
        $nguoi1 = $request->input('nguoi1');
        $nguoi2 = $request->input('nguoi2');

        $ngaySinh1 = Carbon::parse($request->input('ngay_sinh1'));
        $ngaySinh2 = Carbon::parse($request->input('ngay_sinh2'));

        $tuoiNguoi1 = $ngaySinh1->age;
        $tuoiNguoi2 = $ngaySinh2->age;

        $soNgayChenhLech = $ngaySinh1->diffInDays($ngaySinh2);

        return view('kq-tinh-tuoi', compact('tuoiNguoi1', 'tuoiNguoi2', 'soNgayChenhLech'));
    }
}
