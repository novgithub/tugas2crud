<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blogger;

class PagesController extends Controller
{
    public function index()
    {
        //$model = DB::table('blogger')->get();
        $model = Blogger::all();
        return view('index' , ['model' => $model]);
    }

    
}
