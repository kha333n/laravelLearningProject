<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    function upload(Request $request)
    {
        $file = $request->file('file');
        $file->move(public_path('images'), $file->getClientOriginalName());
        return response()->json(['success' => $file->getClientOriginalName()]);
    }
}
