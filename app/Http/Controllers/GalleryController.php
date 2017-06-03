<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index()
    {
        return view("gallery/gallery");
    }

    function showGallery($id)
    {

        $dir = "img/gallery/" . $id;
        if (!is_dir($dir)) {
            return view('errors.404');
        }
        if (!is_dir($dir)) {
            return view('errors.404');
        }
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        $images = preg_grep('/\.jpg$/i', $files);

        return view('gallery/showGallery', compact("id", "images"));
    }
}
