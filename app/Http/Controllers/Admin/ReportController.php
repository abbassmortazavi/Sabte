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
            ->select('neshat_dar_sahar' , 'barname_sobhgahi_sobhane' ,
                'ayad_dakhel' , 'ayad_kharej' , 'basirat' , 'sham_tolab','nazere_shab')
            ->get()
            ->toArray();


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




        //ayad_dakhel
        $ayad_dakhels = array_column($kols, 'ayad_dakhel');
        $ayad_dakhel = array();
        foreach ($ayad_dakhels as $dakhel)
        {
            array_push($ayad_dakhel , $dakhel);
        }
        $ayad_dakhelss = implode(',' ,$ayad_dakhel);
        $ayad_dakhelsss = explode(',' , $ayad_dakhelss);
        $ayad_dakhelssss = array_count_values($ayad_dakhelsss);
        foreach ($ayad_dakhelssss as $key2=>$value2)
        {

            switch ($key2){
                case "جشن ولادت حضرت زینب(س)":
                    //$narmesh = $value1;
                    $data['jashne_zeynab'] = $value2;
                    break;
                case "جلسه شهادت حضرت زهرا(س)":
                    //$sobhanee = $value1;
                    $data['shahadate_zahra'] = $value2;
                    break;
                case "جشن پیروزی انقلاب اسلامی":
                    //$doa = $value1;
                    $data['jashne_piruzi'] = $value2;
                    break;
            }
        }




        //ayad_kharej
        $ayad_kharejs = array_column($kols, 'ayad_kharej');
        $ayad_kharej = array();
        foreach ($ayad_kharejs as $kharej)
        {
            array_push($ayad_kharej , $kharej);
        }
        $ayad_kharejss = implode(',' ,$ayad_kharej);
        $ayad_kharejsss = explode(',' , $ayad_kharejss);
        $ayad_kharejssss = array_count_values($ayad_kharejsss);
        foreach ($ayad_kharejssss as $key3=>$value3)
        {

            switch ($key3){
                case "جشن ولادت حضرت زینب(س)":
                    //$narmesh = $value1;
                    $data['jashne_zeynab1'] = $value3;
                    break;
                case "جلسه شهادت حضرت زهرا(س)":
                    //$sobhanee = $value1;
                    $data['shahadate_zahra1'] = $value3;
                    break;
                case "شرکت گروهی طلاب در راهپیمایی 22بهمن":
                    //$doa = $value1;
                    $data['jashne_piruzi1'] = $value3;
                    break;
            }
        }


        //basirat
        $basirats = array_column($kols, 'basirat');
        $basiratt = array();
        foreach ($basirats as $basirat)
        {
            array_push($basiratt , $basirat);
        }
        $basiratss = implode(',' ,$basiratt);
        $basiratsss = explode(',' , $basiratss);
        $basiratssss = array_count_values($basiratsss);
        foreach ($basiratssss as $key4=>$value4)
        {

            switch ($key4){
                case "روزنامه":
                    //$narmesh = $value1;
                    $data['magazine'] = $value4;
                    break;
                case "پخش اخبار":
                    //$sobhanee = $value1;
                    $data['pakhshe_akhbar'] = $value4;
                    break;
                case "پخش کلیپ های بصیرتی":
                    //$doa = $value1;
                    $data['pakhshe_clip'] = $value4;
                    break;
                    case "تکبیرات بعداز نماز":
                    //$doa = $value1;
                    $data['takbir'] = $value4;
                    break;
            }
        }




        //sham_tolab
        $sham_tolabs = array_column($kols, 'sham_tolab');
        $sham_tolab = array();
        foreach ($sham_tolabs as $tolab)
        {
            array_push($sham_tolab , $tolab);
        }
        $sham_tolabss = implode(',' ,$sham_tolab);
        $sham_tolabsss = explode(',' , $sham_tolabss);
        $sham_tolabssss = array_count_values($sham_tolabsss);
        foreach ($sham_tolabssss as $key5=>$value5)
        {

            switch ($key5){
                case "گروهی اجرا می شود":
                    //$narmesh = $value1;
                    $data['gorohi'] = $value5;
                    break;
                case "فردی اجرا می شود":
                    //$sobhanee = $value1;
                    $data['fardi'] = $value5;
                    break;
            }
        }




        //nazere_shab
        $nazere_shabs = array_column($kols, 'nazere_shab');
        $nazere_shab = array();
        foreach ($nazere_shabs as $shab)
        {
            array_push($nazere_shab , $shab);
        }
        $nazere_shabss = implode(',' ,$nazere_shab);
        $nazere_shabsss = explode(',' , $nazere_shabss);
        $nazere_shabssss = array_count_values($nazere_shabsss);
        foreach ($nazere_shabssss as $key6=>$value6)
        {

            switch ($key6){
                case "طلبه":
                    //$narmesh = $value1;
                    $data['talabe'] = $value6;
                    break;
                case "استاد":
                    //$sobhanee = $value1;
                    $data['ostad'] = $value6;
                    break;
                case "معاون":
                    //$sobhanee = $value1;
                    $data['moaven'] = $value6;
                    break;
                case "مدیر":
                    //$sobhanee = $value1;
                    $data['modir'] = $value6;
                    break;
            }
        }



        //aslahe
        $aslahes = array_column($kols, 'aslahe');
        $aslahe = array();
        foreach ($aslahes as $aslahe)
        {
            array_push($aslahe , $aslahe);
        }
        $aslahess = implode(',' ,$aslahe);
        $aslahesss = explode(',' , $aslahess);
        $aslahessss = array_count_values($aslahesss);
        foreach ($aslahessss as $key7=>$value7)
        {

            switch ($key7){
                case "میدان تیر":
                    //$sobhanee = $value1;
                    $data['meydan_tir'] = $value7;
                    break;
                case "آموزش اسلحه":
                    //$narmesh = $value1;
                    $data['amuzeshe_aslahe'] = $value7;
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

    public function usersAll()
    {
        $users = User::all();
        return view('admin.report.all-user' , compact('users'));
    }

    public function usersReport(Request $request)
    {
        $kols = Sabte::whereIn('user_id' , $request->allUser)->select('user_id','neshat_dar_sahar' , 'barname_sobhgahi_sobhane')->get()->toArray();



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


        return view('admin.report.usersReport' , compact('data'));
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
