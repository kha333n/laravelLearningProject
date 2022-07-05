<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file->move(public_path().'/files', $file->getClientOriginalName());

            session()->flash('success', 'File Uploaded Successfully');

            //Just testing...
        }

        return redirect('upload');
    }
}
