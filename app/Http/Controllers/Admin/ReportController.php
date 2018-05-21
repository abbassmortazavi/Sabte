<?php

namespace App\Http\Controllers\Admin;

use App\Sabte;
use App\User;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\jDate;
use Morilog\Jalali\jDateTime;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.report.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function findUser(Request $request)
    {

        $date = jDateTime::createCarbonFromFormat('Y-m-d',$request->date_now)->toDateString();


        $orders = DB::table('sabtes')
            ->where('user_id' , $request->user_id)
            ->where('tarikh_sabt' , $date)
           ->select(DB::raw('SUM(ba_hozore2) as ba_hozore2 , SUM(madrese_elmiye) as madrese_elmiye , SUM(tedade_hafezin) as tedade_hafezin '))
           ->first();

        $kols = DB::table('sabtes')
            ->where('user_id' , $request->user_id)
            ->where('tarikh_sabt' , $date)
            ->select('name_masoul_motahel' , 'name_semmat_madou')->get();

        foreach ($kols as $kol)
        {
            dd($kol);//test baraye commit
        }

        return view('admin.report.user' , compact('orders' , 'kols'));

        //shamsi to convert miladi
        /*$v = Verta::parse($request->date_now);
        $dt = $v->DateTime();*/
        //dd($t);
    }

}
