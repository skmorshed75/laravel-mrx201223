<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seoproperties')->where('pagename','=','projects')->first(); //Show SEO Properties from database
        return view("pages.projects",['seo' => $seo]);
        //return view("pages.projects");
    }

    function projectData(Request $request){
        //sleep(5);
        return DB::table('projects')->get();
    }
}
