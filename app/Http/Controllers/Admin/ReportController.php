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
            ->select('saat_khab','saat_bidari','neshat_dar_sahar','tedad_goldan_tabiee' , 'name_masoul_motahel')->get();


        //date now
        $data['date'] = jDateTime::strftime('Y-m-d', strtotime($date));


            $lists = array();
            foreach ($kols as $kol)
            {
                array_push($lists , $kol);
            }



        //saat_khab
        $saat_khabs = array_column($lists, 'saat_khab');
        $saat_khabss = array();
        foreach ($saat_khabs as $khab)
        {
            array_push($saat_khabss , $khab);
        }
        $data['saat_khab'] = implode(',' , $saat_khabss);



        //saat_bidari
        $saat_bidaris = array_column($lists, 'saat_bidari');
        $saat_bidariss = array();
        foreach ($saat_bidaris as $bidaris)
        {
            array_push($saat_bidariss , $bidaris);
        }
        $data['saat_bidari'] = implode(',' , $saat_bidariss);




        //neshat_dar_sahar
        $neshat_dar_sahars = array_unique(array_column($lists, 'neshat_dar_sahar'));

        $neshat_dar_saharss = array();
        foreach ($neshat_dar_sahars as $dar_sahar)
        {
            array_push($neshat_dar_saharss , $dar_sahar);
        }

        $neshat_dar_sahar = implode(',' , $neshat_dar_saharss);

        $data['neshat_dar_sahar'] = rtrim($neshat_dar_sahar,',');

        dd($data['neshat_dar_sahar']);


        //tedad_goldan_tabiee
        $tedad_goldan_tabiees = array_column($lists, 'tedad_goldan_tabiee');
            $tedad_tabiees = array();
            foreach ($tedad_goldan_tabiees as $tabiee)
            {
                array_push($tedad_tabiees , $tabiee);
            }
        $data['tedad_goldan_tabiee'] = implode(',' , $tedad_tabiees);


        //name_masoul_motahel
        $name_masoul_motahels = array_column($lists, 'name_masoul_motahel');
        $name_masouls = array();
        foreach ($name_masoul_motahels as $masoul_motahel)
        {
            array_push($name_masouls , $masoul_motahel);
        }
        $data['name_masoul_motahel'] = implode(',' , $name_masouls);

















        return view('admin.report.user' , compact('orders' , 'data'));






        //shamsi to convert miladi
        /*$v = Verta::parse($request->date_now);
        $dt = $v->DateTime();*/
        //dd($t);
    }

}
