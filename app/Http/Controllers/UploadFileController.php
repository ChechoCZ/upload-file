<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class UploadFileController extends Controller
{

	public function show() {

		$countFiles = DB::table('upload_files')->count();
		$uploads = DB::table('upload_files')->get();
    	return view('welcome', compact('uploads', 'countFiles'));

	}

    public function store(Request $request) {

    	$img = $request->file('img');
    	$img->move('uploads', $img->getClientOriginalName());
    	$img_path = '/uploads/' . $img->getClientOriginalName();

    	UploadFile::create([
    		'img' => $img_path
    	]);

    	return redirect('/');
    }
}