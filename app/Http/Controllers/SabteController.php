<?php

namespace App\Http\Controllers;

use App\Sabte;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SabteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //return view('welcome');
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
        $saat_bidari = $request->saat_bidari;
        $saat_khab = $request->saat_khab;
        $tedad_goldan_tabiee = $request->tedad_goldan_tabiee;
        $tedad_derakhtan = $request->tedad_derakhtan;
        $masahat_tolid_sabzijat = $request->masahat_tolid_sabzijat;
        $darsad_nezafat_dar_class = $request->darsad_nezafat_dar_class;
        $rozhaye_nezafat = $request->rozhaye_nezafat;
        $saat_kar_ketabkhune = $request->saat_kar_ketabkhune;
        $darsad_nazm = $request->darsad_nazm;
        $darsad_nezafat = $request->darsad_nezafat;
        $tedad_mehmanan_in_mah = $request->tedad_mehmanan_in_mah;
        $darsad_rezayat_mehmanan = $request->darsad_rezayat_mehmanan;
        $name_masoul_khabgah = $request->name_masoul_khabgah;
        $tedad_jalasat_in_mah_khabgah = $request->tedad_jalasat_in_mah_khabgah;
        $tell_khabgah = $request->tell_khabgah;
        $name_masoul_motahel = $request->name_masoul_motahel;
        $tedad_jalasat_motahel = $request->tedad_jalasat_motahel;
        $tell_motahel = $request->tell_motahel;
        $name_semmat_madou = $request->name_semmat_madou;
        $tedad_ruzhaye_anjam_shode = $request->tedad_ruzhaye_anjam_shode;
        $mozo_in_mah = $request->mozo_in_mah;
        $name_tell_ostade1 = $request->name_tell_ostade1;
        $mozo_hafte1 = $request->mozo_hafte1;
        $name_tell_ostade2 = $request->name_tell_ostade2;
        $mozo_hafte2 = $request->mozo_hafte2;
        $name_tell_ostade3 = $request->name_tell_ostade3;
        $mozo_hafte3 = $request->mozo_hafte3;
        $name_tell_ostade4 = $request->name_tell_ostade4;
        $mozo_hafte4 = $request->mozo_hafte4;
        $name_tell_ostade5 = $request->name_tell_ostade5;
        $mozo_hafte5 = $request->mozo_hafte5;
        $tedad_ghari_dar_ruz = $request->tedad_ghari_dar_ruz;
        $tedade_safhate_gharat_shode = $request->tedade_safhate_gharat_shode;
        $tedad_bargozari_shena = $request->tedad_bargozari_shena;
        $name_varzesh_umumi = $request->name_varzesh_umumi;
        $tedad_saat_dar_hafte = $request->tedad_saat_dar_hafte;
        $tarikh_bargozari_nimsale_aval = $request->tarikh_bargozari_nimsale_aval;
        $noe_maraseme_manavi = $request->noe_maraseme_manavi;
        $tedad_haftehaye_ejra_shode = $request->tedad_haftehaye_ejra_shode;
        $tedade_hafezin = $request->tedade_hafezin;
        $tedade_tolidate_farhangi = $request->tedade_tolidate_farhangi;
        $ba_hozore1 = $request->ba_hozore1;
        $tarikh_bargozari_jalase1 = $request->tarikh_bargozari_jalase1;
        $ba_hozore2 = $request->ba_hozore1;
        $tarikh_bargozari_jalase2 = $request->tarikh_bargozari_jalase2;
        $shahr = $request->shahr;
        $ostan = $request->ostan;
        $madrese_elmiye = $request->madrese_elmiye;
        $tarikh_sabt = Carbon::now()->toDateString();



        /*$neshat_dar_sahar1 = array();
        foreach($request->input('neshat_dar_sahar') as $value){
            array_push($neshat_dar_sahar1 , $value);
        }
        $neshat_dar_sahar = implode(',' , $neshat_dar_sahar1);*/


        $basirat = implode(',', (array) $request->basirat);
        $sham_tolab = implode(',', (array) $request->sham_tolab);
        $ayad_kharej = implode(',', (array) $request->ayad_kharej);
        $ayad_dakhel = implode(',', (array) $request->ayad_dakhel);
        $barname_sobhgahi_sobhane = implode(',', (array) $request->barname_sobhgahi_sobhane);
        $neshat_dar_sahar = implode(',', (array) $request->neshat_dar_sahar);
        $nazere_shab = implode(',', (array) $request->nazere_shab);
        $aslahe = implode(',', (array) $request->aslahe);
        $ons = implode(',', (array) $request->ons);
        $user_id = auth()->user()->id;

        $value = array(
            'user_id' => $user_id,
            'saat_bidari' => $saat_bidari,
            'saat_khab' => $saat_khab,
            'tedad_goldan_tabiee' => $tedad_goldan_tabiee,
            'tedad_derakhtan' => $tedad_derakhtan,
            'masahat_tolid_sabzijat' => $masahat_tolid_sabzijat,
            'darsad_nezafat_dar_class' => $darsad_nezafat_dar_class,
            'rozhaye_nezafat' => $rozhaye_nezafat,
            'saat_kar_ketabkhune' => $saat_kar_ketabkhune,
            'darsad_nazm' => $darsad_nazm,
            'darsad_nezafat' => $darsad_nezafat,
            'tedad_mehmanan_in_mah' => $tedad_mehmanan_in_mah,
            'darsad_rezayat_mehmanan' => $darsad_rezayat_mehmanan,
            'name_masoul_khabgah' => $name_masoul_khabgah,
            'tedad_jalasat_in_mah_khabgah' => $tedad_jalasat_in_mah_khabgah,
            'tell_khabgah' => $tell_khabgah,
            'name_masoul_motahel' => $name_masoul_motahel,
            'tedad_jalasat_motahel' => $tedad_jalasat_motahel,
            'tell_motahel' => $tell_motahel,
            'basirat' =>  $basirat,
            'neshat_dar_sahar' => $neshat_dar_sahar,
            'barname_sobhgahi_sobhane' => $barname_sobhgahi_sobhane,
            'ayad_dakhel' => $ayad_dakhel,
            'ayad_kharej' => $ayad_kharej,
            'sham_tolab' => $sham_tolab,
            'name_semmat_madou' => $name_semmat_madou,
            'tedad_ruzhaye_anjam_shode' => $tedad_ruzhaye_anjam_shode,
            'mozo_in_mah' => $mozo_in_mah,
            'name_tell_ostade1' => $name_tell_ostade1,
            'mozo_hafte1' => $mozo_hafte1,
            'mozo_hafte2' => $mozo_hafte2,
            'name_tell_ostade2' => $name_tell_ostade2,
            'mozo_hafte3' => $mozo_hafte3,
            'name_tell_ostade3' => $name_tell_ostade3,
            'mozo_hafte4' => $mozo_hafte4,
            'name_tell_ostade4' => $name_tell_ostade4,
            'mozo_hafte5' => $mozo_hafte5,
            'name_tell_ostade5' => $name_tell_ostade5,
            'nazere_shab' => $nazere_shab,
            'tedad_ghari_dar_ruz' => $tedad_ghari_dar_ruz,
            'tedade_safhate_gharat_shode' => $tedade_safhate_gharat_shode,
            'tedad_bargozari_shena' => $tedad_bargozari_shena,
            'name_varzesh_umumi' => $name_varzesh_umumi,
            'tedad_saat_dar_hafte' => $tedad_saat_dar_hafte,
            'tarikh_bargozari_nimsale_aval' => $tarikh_bargozari_nimsale_aval,
            'noe_maraseme_manavi' => $noe_maraseme_manavi,
            'aslahe' => $aslahe,
            'tedad_haftehaye_ejra_shode' => $tedad_haftehaye_ejra_shode,
            'tedade_hafezin' => $tedade_hafezin,
            'tedade_tolidate_farhangi' => $tedade_tolidate_farhangi,
            'ons' => $ons,
            'ba_hozore1' => $ba_hozore1,
            'tarikh_bargozari_jalase1' => $tarikh_bargozari_jalase1,
            'ba_hozore2' => $ba_hozore2,
            'tarikh_bargozari_jalase2' => $tarikh_bargozari_jalase2,
            'madrese_elmiye' => $madrese_elmiye,
            'ostan' => $ostan,
            'shahr' => $shahr,
            'tarikh_sabt' => $tarikh_sabt,
        );


        Sabte::create($value);
        Session::flash('create' , 'اطلاعات شما با موفیقت ثبت شده است با تشکر!!!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
