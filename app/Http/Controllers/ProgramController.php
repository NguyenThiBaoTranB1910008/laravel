<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use Session;
use DB;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    function index()
    {   
        $pj = DB::table('programs')->get();
        return view('home')->with(['pj' => $pj]);
    }

}