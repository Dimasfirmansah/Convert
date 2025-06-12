<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ConvertController extends Controller
{
    public function convert(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $images = [];

        $files = $request->file('images');
        foreach ($files as $image) {
            $data = base64_encode(file_get_contents($image));
            $type = $image->getClientMimeType();
            $images[] = "data:$type;base64,$data";
        }

        $pdf = Pdf::loadView('pdf', compact('images'));

        return $pdf->download('converted.pdf');
    }
    function index(){
        return view('index');
    }
}
