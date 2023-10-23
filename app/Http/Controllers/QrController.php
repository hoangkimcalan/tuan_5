<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
  public function index()
  {
    return view('qrcode');
  }

  public function show(Request $request)
  { {
      $data = [
        'Full name' => $request->input('name'),
        'MSSV' => $request->input('mssv'),
      ];

      return view('showqr', ['data' => $data]);
    }
  }
}
