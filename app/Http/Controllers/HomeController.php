<?php
/**
 * Created by PhpStorm.
 * User: fonqri
 * Date: 1/24/17
 * Time: 8:40 AM
 */
namespace App\Http\Controllers;

class HomeController extends Controller
{


    function __construct()
    {
        $this->middleware('guest');
    }

    function aboutUsCo()
    {
        return view("about/aboutUsCo");
    }





    function index()
    {
        $dir = "img/projects";

        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        $images = preg_grep('/\.jpg$/i', $files);
        $images = array_merge($images, preg_grep('/\.png$/i', $files));
        $projectDescription = array_fill(0,count($images),"some  Description for this project");


        return view("home", compact("images","projectDescription"));
    }

}
