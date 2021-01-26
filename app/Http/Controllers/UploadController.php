<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->file('file')->store('teste');
        dd($request->file('file'), $request->all());
    }
}
