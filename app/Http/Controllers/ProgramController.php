<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use Carbon\Carbon;
use DateTime;
use Session;
use DB;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    protected $listYear;
    function index(Request $request)
    {   
        $this->listYear = [];
        $date = "";
        $schedule = Program::query();
        $get_all_user = $schedule->get();
        $listMonth = [];

        foreach ($get_all_user as $item) {
            $date = Carbon::parse($item->date)->format('Y');
            if(!in_array($date, $this->listYear)){
                array_push( $this->listYear,$date);
            }
        };
        return view('login')->with('get_all_user',$get_all_user)->with('year',$this->listYear)->with('month',$listMonth);
    }

    function getMonth(Request $request)
    {   
        // if ($request->ajax()) {
        //     $schedule = Program::query();
        //     $get_all_user = $schedule->get();
        //     $listMonth = [];
        //     // $listYear = [];

        //     foreach ($get_all_user as $item) {
        //         $year = Carbon::parse($item->date)->format('Y');
        //         $month = Carbon::parse($item->date)->format('m');
        //         if($request->year = $year){
        //             array_push( $listMonth,$month);
        //         }
        //     };

        //     foreach ($this->listYear as $item) {
        //         echo ($item);
        //     };
        //     // return view('login')->with('get_all_user',$get_all_user)->with('year',$this->listYear)->with('month',$listMonth);
        // }
    }

    function filter (Request $request){
        if ($request->ajax()) {
            $output = '';
            if($request->filter)
                $products =  Program::orderBy('idUser', $request->filter)->get();
            else if($request->date)
                $products =  Program::orderBy('date', $request->date)->get();
            if ($products) {
                foreach ($products as $item) {
                    $output .= '<tr>
                    <th scope="row">' . $item -> idUser . '</th>
                    <td>' . $item -> id . '</td>
                    <td>' . $item -> date . '</td>
                  </tr>';
                }
            }
            return Response($output);
        }
    }
}