<?php

namespace App\Http\Controllers\Admin;

use App\Sabte;
use App\User;
use Barryvdh\DomPDF\PDF;
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

        /*$date = jDateTime::createCarbonFromFormat('Y-m-d',$request->date_now)->toDateString();


        $timestemp = $request->date_now;

        $month = Carbon::createFromFormat('Y-m-d H:i:s' , $timestemp)->month;*/
        $startDate = jDateTime::createCarbonFromFormat('Y-m-d',$request->startDate)->toDateString();
        $endDate = jDateTime::createCarbonFromFormat('Y-m-d',$request->endDate)->toDateString();

        $kols = DB::table('sabtes')
            ->where('user_id' , $request->user_id)
            ->whereBetween('tarikh_sabt' , array($startDate , $endDate))
            ->select('neshat_dar_sahar' , 'barname_sobhgahi_sobhane')->get()->toArray();


        //$neshat_dar_sahars = array_count_values($neshat_dar_sahar);

       // $key = array_search('آبجوش', array_column($kols, 'neshat_dar_sahar'));


        //neshat_dar_sahar
        $neshat_dar_sahars = array_column($kols, 'neshat_dar_sahar');
        $neshat_dar_sahar = array();
        foreach ($neshat_dar_sahars as $dar_sahar)
        {
            array_push($neshat_dar_sahar , $dar_sahar);
        }
        $neshat_dar_saharss = implode(',' ,$neshat_dar_sahar);
        $neshat_dar_sahars = explode(',' , $neshat_dar_saharss);
        $neshat_dar_saharsss = array_count_values($neshat_dar_sahars);
        foreach ($neshat_dar_saharsss as $key=>$value)
        {
            switch ($key){
                case "آبجوش":
                    //$abjosh = $value;
                    $data['abJosh'] = $value;
                    break;
                case "چای":
                    //$chai = $value;
                    $data['chai'] = $value;
                    break;
                case "دمنوش":
                    //$damNosh = $value;
                    $data['damNosh'] = $value;
                    break;
            }
        }




        //barname_sobhgahi_sobhane
        $barname_sobhgahi_sobhanes = array_column($kols, 'barname_sobhgahi_sobhane');
        $barname_sobhgahi_sobhane = array();
        foreach ($barname_sobhgahi_sobhanes as $sobhane)
        {
            array_push($barname_sobhgahi_sobhane , $sobhane);
        }
        $barname_sobhgahi_sobhanes = implode(',' ,$barname_sobhgahi_sobhane);
        $barname_sobhgahi_sobhaness = explode(',' , $barname_sobhgahi_sobhanes);
        $barname_sobhgahi_sobhanesss = array_count_values($barname_sobhgahi_sobhaness);
        foreach ($barname_sobhgahi_sobhanesss as $key1=>$value1)
        {

            switch ($key1){
                case "نرمش":
                    //$narmesh = $value1;
                    $data['narMesh'] = $value1;
                    break;
                case "صبحانه":
                    //$sobhanee = $value1;
                    $data['sobhanee'] = $value1;
                    break;
                case "دعای امام زمان":
                    //$doa = $value1;
                    $data['doa'] = $value1;
                    break;
                case "قرائت قرآن":
                    //$doa = $value1;
                    $data['gharaat'] = $value1;
                    break;
            }
        }











/*
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


        //rozhaye_nezafat
        $rozhaye_nezafats = array_column($lists, 'rozhaye_nezafat');
        $rozhaye_nezafatss = array();
        foreach ($rozhaye_nezafats as $nezafat)
        {
            array_push($rozhaye_nezafatss , $nezafat);
        }
        $data['rozhaye_nezafat'] = implode(',' , $rozhaye_nezafatss);



        //saat_kar_ketabkhune
        $saat_kar_ketabkhunes = array_column($lists, 'saat_kar_ketabkhune');
        $saat_kar_ketabkhuness = array();
        foreach ($saat_kar_ketabkhunes as $ketabkhune)
        {
            array_push($saat_kar_ketabkhuness , $ketabkhune);
        }
        $data['saat_kar_ketabkhune'] = implode(',' , $saat_kar_ketabkhuness);



        //saat_bidari
        $saat_bidaris = array_column($lists, 'saat_bidari');
        $saat_bidariss = array();
        foreach ($saat_bidaris as $bidaris)
        {
            array_push($saat_bidariss , $bidaris);
        }
        $data['saat_bidari'] = implode(',' , $saat_bidariss);



        //name_masoul_khabgah
        $name_masoul_khabgahs = array_column($lists, 'name_masoul_khabgah');
        $name_masoul_khabgahss = array();
        foreach ($name_masoul_khabgahs as $khabgah)
        {
            array_push($name_masoul_khabgahss , $khabgah);
        }
        $khabgahs = implode(',' , $name_masoul_khabgahss);
        $khabgahsss = implode(',', array_unique(explode(',',$khabgahs)));
        $data['name_masoul_khabgah'] = rtrim($khabgahsss,',');




        //neshat_dar_sahar
        $neshat_dar_sahars = array_unique(array_column($lists, 'neshat_dar_sahar'));

        $neshat_dar_saharss = array();
        foreach ($neshat_dar_sahars as $dar_sahar)
        {
            array_push($neshat_dar_saharss , $dar_sahar);
        }

        $neshat_dar_sahar = implode(',' , $neshat_dar_saharss);

        $neshat = implode(',', array_unique(explode(',',$neshat_dar_sahar)));

        $data['neshat_dar_sahar'] = rtrim($neshat,',');


        //barname_sobhgahi_sobhane
        $barname_sobhgahi_sobhanes = array_unique(array_column($lists, 'barname_sobhgahi_sobhane'));

        $barname_sobhgahi_sobhaness = array();
        foreach ($barname_sobhgahi_sobhanes as $sobh)
        {
            array_push($barname_sobhgahi_sobhaness , $sobh);
        }

        $barname_sobhgahi_sobhane = implode(',' , $barname_sobhgahi_sobhaness);

        $sobhane = implode(',', array_unique(explode(',',$barname_sobhgahi_sobhane)));

        $data['barname_sobhgahi_sobhane'] = rtrim($sobhane,',');








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
        $name_masoul_motahelss = implode(',' , $name_masouls);
        $name_masoul = implode(',', array_unique(explode(',',$name_masoul_motahelss)));

        $data['name_masoul_motahel'] = rtrim($name_masoul,',');*/






        return view('admin.report.user' , compact('data'));






        //shamsi to convert miladi
        /*$v = Verta::parse($request->date_now);
        $dt = $v->DateTime();*/
        //dd($t);
    }

    public function printPreview(Request $request)
    {
        /*$date = jDateTime::createCarbonFromFormat('Y-m-d',$request->date_now)->toDateString();

        $orders = DB::table('sabtes')
            ->where('user_id' , $request->user_id)//
            ->where('tarikh_sabt' , $date)
            ->select(DB::raw('SUM(ba_hozore2) as ba_hozore2,SUM(darsad_nazm) as darsad_nazm,SUM(darsad_nezafat) as darsad_nezafat,SUM(darsad_nezafat_dar_class) as darsad_nezafat_dar_class,SUM(masahat_tolid_sabzijat) as masahat_tolid_sabzijat,SUM(madrese_elmiye) as madrese_elmiye,SUM(tedad_derakhtan) as tedad_derakhtan,SUM(tedade_hafezin) as tedade_hafezin,SUM(tedad_goldan_tabiee) as tedad_goldan_tabiee'))
            ->first();

        $kols = DB::table('sabtes')
            ->where('user_id' , $request->user_id)
            ->where('tarikh_sabt' , $date)
            ->select('saat_khab','saat_bidari','neshat_dar_sahar','barname_sobhgahi_sobhane','tedad_goldan_tabiee','rozhaye_nezafat','saat_kar_ketabkhune','name_masoul_motahel')->get();


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


        //rozhaye_nezafat
        $rozhaye_nezafats = array_column($lists, 'rozhaye_nezafat');
        $rozhaye_nezafatss = array();
        foreach ($rozhaye_nezafats as $nezafat)
        {
            array_push($rozhaye_nezafatss , $nezafat);
        }
        $data['rozhaye_nezafat'] = implode(',' , $rozhaye_nezafatss);



        //saat_kar_ketabkhune
        $saat_kar_ketabkhunes = array_column($lists, 'saat_kar_ketabkhune');
        $saat_kar_ketabkhuness = array();
        foreach ($saat_kar_ketabkhunes as $ketabkhune)
        {
            array_push($saat_kar_ketabkhuness , $ketabkhune);
        }
        $data['saat_kar_ketabkhune'] = implode(',' , $saat_kar_ketabkhuness);



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

        $neshat = implode(',', array_unique(explode(',',$neshat_dar_sahar)));

        $data['neshat_dar_sahar'] = rtrim($neshat,',');


        //barname_sobhgahi_sobhane
        $barname_sobhgahi_sobhanes = array_unique(array_column($lists, 'barname_sobhgahi_sobhane'));

        $barname_sobhgahi_sobhaness = array();
        foreach ($barname_sobhgahi_sobhanes as $sobh)
        {
            array_push($barname_sobhgahi_sobhaness , $sobh);
        }

        $barname_sobhgahi_sobhane = implode(',' , $barname_sobhgahi_sobhaness);

        $sobhane = implode(',', array_unique(explode(',',$barname_sobhgahi_sobhane)));

        $data['barname_sobhgahi_sobhane'] = rtrim($sobhane,',');








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
        $data['name_masoul_motahel'] = implode(',' , $name_masouls);*/





        $pdf =  PDF::loadView('admin.report.print');
        return $pdf->download('print.pdf');

    }

}
