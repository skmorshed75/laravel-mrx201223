<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        $seo = DB::table('seoproperties')->where('pagename','=','contact')->first(); //Show SEO Properties from database
        return view("pages.contact",['seo' => $seo]);
        //return view("pages.contact");
    }

    function contactRequest(Request $request){
        return DB::table('contacts')->insert($request->input());
    }
}
