@extends('admin.master')


@section('content')
    <h1>نمایش گزارش کاربر</h1>



    <div class="row">
        <div class="col-sm-12">
                <span class="float-right">
                    تاریخ گزارش
                    <span></span>
                 </span>
        </div>
    </div>


        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        <label for="usr" style="direction: rtl;float: right;">مدرسه علمیه:</label>
                        <input type="text" class="form-control" name="madrese_elmiye" id="usr"
                               style="width: 65%; float: right;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        <label for="usr" style="direction: rtl;float: right;">شهر:</label>
                        <input type="text" class="form-control" name="shahr" id="usr"
                               style="width: 65%; float: right;">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        <label for="usr" style="direction: rtl;float: right;">استان:</label>
                        <input type="text" class="form-control" name="ostan" id="usr"
                               style="width: 65%; float: right;">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">گروه های همیاران تربیتی</h3>
            </div>
            <div class="col-md-9">

                {{--بیداری در سحر--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">بیداری در سحر:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت بیداری:</label>
                        <input type="text" class="form-control" name="saat_bidari" id="usr"
                               style="width: 20%; float: left;" value="">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت خواب:</label>
                        <input type="text" class="form-control" name="saat_khab" id="usr"
                               style="width: 20%; float: left;" value="">
                    </div>
                </div>

                {{--ایجاد نشاط درسحر--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">نشاط در سحر:</label>

                    <div class="form-group">
                        <label for="usr">دمنوش:</label>
                        <input type="text" class="form-control" name="damNosh" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['damNosh'])){{ $data['damNosh']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">چای:</label>
                        <input type="text" class="form-control" name="chai" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['chai'])){{ $data['chai']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">آبجوش:</label>
                        <input type="text" class="form-control" name="abJosh" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['abJosh'])){{ $data['abJosh']}}@endif">
                    </div>
                </div>


                {{--برنامه صبحگاهی و صبحانه--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">برنامه صبحگاهی و صبحانه:</label>

                    <div class="form-group">
                        <label for="usr">صبحانه:</label>
                        <input type="text" class="form-control" name="sobhanee" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['sobhanee'])){{ $data['sobhanee']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">نرمش:</label>
                        <input type="text" class="form-control" name="narMesh" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['narMesh'])){{ $data['narMesh']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">دعای امام زمان:</label>
                        <input type="text" class="form-control" name="doa" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['doa'])){{ $data['doa']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">قرائت قرآن:</label>
                        <input type="text" class="form-control" name="gharaat" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['gharaat'])){{ $data['gharaat']}}@endif">
                    </div>

                </div>



                {{--اعیاد و عزا داری ها(داخل مدرسه)--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">اعیاد و عزا داری ها(داخل مدرسه):</label>

                    <div class="form-group">
                        <label for="usr">جشن ولادت حضرت زینب(س):</label>
                        <input type="text" class="form-control" name="jashne_zeynab" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['jashne_zeynab'])){{ $data['jashne_zeynab']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">جلسه شهادت حضرت زهرا(س):</label>
                        <input type="text" class="form-control" name="shahadate_zahra" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['shahadate_zahra'])){{ $data['shahadate_zahra']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">جشن پیروزی انقلاب اسلامی:</label>
                        <input type="text" class="form-control" name="jashne_piruzi" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['jashne_piruzi'])){{ $data['jashne_piruzi']}}@endif">
                    </div>
                </div>





                {{--اعیاد و عزا داری ها(خارج مدرسه)--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">اعیاد و عزا داری ها(خارج مدرسه):</label>

                    <div class="form-group">
                        <label for="usr">جشن ولادت حضرت زینب(س):</label>
                        <input type="text" class="form-control" name="jashne_zeynab1" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['jashne_zeynab1'])){{ $data['jashne_zeynab1']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">جلسه شهادت حضرت زهرا(س):</label>
                        <input type="text" class="form-control" name="shahadate_zahra1" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['shahadate_zahra1'])){{ $data['shahadate_zahra1']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">شرکت گروهی طلاب در راهپیمایی 22بهمن:</label>
                        <input type="text" class="form-control" name="jashne_piruzi1" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['jashne_piruzi1'])){{ $data['jashne_piruzi1']}}@endif">
                    </div>
                </div>




                {{--بصیرت دشمن شناسی و حفظ روحیه ی انقلابی--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">بصیرت دشمن شناسی و حفظ روحیه ی انقلابی:</label>

                    <div class="form-group">
                        <label for="usr">روزنامه:</label>
                        <input type="text" class="form-control" name="magazine" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['magazine'])){{ $data['magazine']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">پخش اخبار:</label>
                        <input type="text" class="form-control" name="pakhshe_akhbar" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['pakhshe_akhbar'])){{ $data['pakhshe_akhbar']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">پخش کلیپ های بصیرتی:</label>
                        <input type="text" class="form-control" name="pakhshe_clip" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['pakhshe_clip'])){{ $data['pakhshe_clip']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">تکبیرات بعداز نماز:</label>
                        <input type="text" class="form-control" name="takbir" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['takbir'])){{ $data['takbir']}}@endif">
                    </div>
                </div>


                {{--شام طلاب--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">شام طلاب:</label>

                    <div class="form-group">
                        <label for="usr">گروهی اجرا می شود:</label>
                        <input type="text" class="form-control" name="gorohi" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['gorohi'])){{ $data['gorohi']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">فردی اجرا می شود:</label>
                        <input type="text" class="form-control" name="fardi" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['fardi'])){{ $data['fardi']}}@endif">
                    </div>
                </div>


                {{--حضور ناظر شب--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">حضور ناظر شب:</label>

                    <div class="form-group">
                        <label for="usr">طلبه:</label>
                        <input type="text" class="form-control" name="talabe" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['talabe'])){{ $data['talabe']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">استاد:</label>
                        <input type="text" class="form-control" name="ostad" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['ostad'])){{ $data['ostad']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">معاون:</label>
                        <input type="text" class="form-control" name="moaven" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['moaven'])){{ $data['moaven']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">مدیر:</label>
                        <input type="text" class="form-control" name="modir" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['modir'])){{ $data['modir']}}@endif">
                    </div>
                </div>


                {{--اسلحه--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">اسلحه:</label>

                    <div class="form-group">
                        <label for="usr">میدان تیر:</label>
                        <input type="text" class="form-control" name="meydan_tir" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['meydan_tir'])){{ $data['meydan_tir']}}@endif">
                    </div>

                    <div class="form-group">
                        <label for="usr">آموزش اسلحه:</label>
                        <input type="text" class="form-control" name="amuzeshe_aslahe" id="usr"
                               style="width: 20%; float: left;" value="@if(isset($data['amuzeshe_aslahe'])){{ $data['amuzeshe_aslahe']}}@endif">
                    </div>

                </div>















              {{--  --}}{{--برنامه صبحگاهی و صبحانه--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">برنامه صبحگاهی و صبحانه:</label>
                    <input type="text" class="form-control" name="saat_khab" id="usr"
                           style="width: 20%; float: left;" value="{{ $data['barname_sobhgahi_sobhane'] }}">
                </div>

                --}}{{--حفظ و ارتقا فضای سبز--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">حفظ و ارتقا فضای سبز:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد گلدان های طبیعی:</label>
                        <input type="text" class="form-control" name="tedad_goldan_tabiee" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->tedad_goldan_tabiee }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد درختان:</label>
                        <input type="text" class="form-control" name="tedad_derakhtan" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->tedad_derakhtan }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">مساحت تولید سبزیجات:</label>
                        <input type="text" class="form-control" name="masahat_tolid_sabzijat" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->masahat_tolid_sabzijat }}">
                    </div>
                </div>

                --}}{{--نظم و نظافت کلاس ها--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">نظم و نظافت کلاس ها:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصدنظافت کلاس ها:</label>
                        <input type="text" class="form-control" name="darsad_nezafat_dar_class" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->darsad_nezafat_dar_class }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">روزهای نظافت:</label>
                        <input type="text" class="form-control" name="rozhaye_nezafat" id="usr"
                               style="width: 20%; float: left;" value="{{ $data['rozhaye_nezafat'] }}">
                    </div>
                </div>

                --}}{{--نظم و اداره کتابخانه--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">نظم و اداره کتابخانه:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت کار کتابخانه:</label>
                        <input type="text" class="form-control" name="saat_kar_ketabkhune" id="usr"
                               style="width: 20%; float: left;" value="{{ $data['saat_kar_ketabkhune'] }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصد نظم:</label>
                        <input type="text" class="form-control" name="darsad_nazm" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->darsad_nazm }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصد نظافت:</label>
                        <input type="text" class="form-control" name="darsad_nezafat" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->darsad_nezafat }}">
                    </div>
                </div>

                --}}{{--پذیرایی از مهمانان--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">پذیرایی از مهمانان:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد مهمانان این ماه:</label>
                        <input type="text" class="form-control" name="tedad_mehmanan_in_mah" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->tedad_mehmanan_in_mah }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصد رضایت مهمانان از پذیرایی:</label>
                        <input type="text" class="form-control" name="darsad_rezayat_mehmanan" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->darsad_rezayat_mehmanan }}">
                    </div>
                </div>

                --}}{{--هیئت طلاب خوابگاهی--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">هیئت طلاب خوابگاهی:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام مسئول هیئت:</label>
                        <input type="text" class="form-control" name="name_masoul_khabgah" id="usr"
                               style="width: 20%; float: left;" value="{{ $data['name_masoul_khabgah'] }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد جلسات این ماه:</label>
                        <input type="text" class="form-control" name="tedad_jalasat_in_mah_khabgah" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->tedad_jalasat_in_mah_khabgah }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">شماره همراه:</label>
                        <input type="text" class="form-control" name="tell_khabgah" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                --}}{{--هیئت طلاب متهل--}}{{--
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="margin-bottom: 30px;direction: rtl;">هیئت طلاب متهل:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام مسئول هیئت:</label>
                        <input type="text" class="form-control" name="name_masoul_motahel" id="usr"
                               style="width: 20%; float: left;" value="{{ $data['name_masoul_motahel'] }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد جلسات این ماه:</label>
                        <input type="text" class="form-control" name="tedad_jalasat_motahel" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">شماره همراه:</label>
                        <input type="text" class="form-control" name="tell_motahel" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                --}}{{--اعیاد و عزا داری ها(داخل مدرسه)--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">اعیاد و عزا داری ها(داخل مدرسه):</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جشن ولادت حضرت زینب(س)"
                                      style="float: none !important;margin-right: 0px !important;">جشن ولادت حضرت
                            زینب(س) </label>
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جلسه شهادت حضرت زهرا(س)"
                                      style="float: none !important;margin-right: 0px !important;">جلسه شهادت
                            حضرت زهرا(س)</label>
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جشن پیروزی انقلاب اسلامی"
                                      style="float: none !important;margin-right: 0px !important;">جشن پیروزی
                            انقلاب اسلامی</label>
                    </div>
                </div>

                --}}{{--اعیاد و عزا داری ها(خارج مدرسه)--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">اعیاد و عزا داری ها(خارج مدرسه):</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="ayad_kharej[]" value="جشن ولادت حضرت زینب(س)"
                                      style="float: none !important;margin-right: 0px !important;">جشن ولادت حضرت
                            زینب(س) </label>
                        <label><input type="checkbox" name="ayad_kharej[]" value="جلسه شهادت حضرت زهرا(س)"
                                      style="float: none !important;margin-right: 0px !important;">جلسه شهادت
                            حضرت زهرا(س)</label>
                        <label><input type="checkbox" name="ayad_kharej[]" value="شرکت گروهی طلاب در راهپیمایی 22بهمن"
                                      style="float: none !important;margin-right: 0px !important;">شرکت
                            گروهی طلاب در راهپیمایی 22بهمن</label>
                    </div>
                </div>

                --}}{{--بصیرت دشمن شناسی و حفظ روحیه ی انقلابی--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">بصیرت دشمن شناسی و حفظ روحیه ی
                        انقلابی:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="basirat[]" value="روزنامه"
                                      style="float: none !important;margin-right: 0px !important;">روزنامه</label>
                        <label><input type="checkbox" name="basirat[]" value="پخش اخبار"
                                      style="float: none !important;margin-right: 0px !important;">پخش اخبار</label>
                        <label><input type="checkbox" name="basirat[]" value="پخش کلیپ های بصیرتی"
                                      style="float: none !important;margin-right: 0px !important;">پخش کلیپ های
                            بصیرتی</label>
                        <label><input type="checkbox" name="basirat[]" value="تکبیرات بعداز نماز"
                                      style="float: none !important;margin-right: 0px !important;">تکبیرات بعداز
                            نماز</label>
                    </div>
                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام و شخصیت سیاسی مدعو :</label>
                        <input type="text" class="form-control" name="name_semmat_madou" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                --}}{{--شام طلاب--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="direction: rtl;">شام طلاب:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="sham_tolab[]" value="فردی اجرا می شود"
                                      style="float: none !important;margin-right: 0px !important;">فردی اجرا می شود
                        </label>
                        <label><input type="checkbox" name="sham_tolab[]" value="گروهی اجرا می شود"
                                      style="float: none !important;margin-right: 0px !important;"> گروهی اجرا می
                            شود</label>
                    </div>
                </div>

            </div>
        </div>

        --}}{{--برنامه شمیم احکام--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برنامه شمیم احکام</h3>
            </div>
            <div class="col-md-9">

                --}}{{--برنامه شمیم احکام--}}{{--
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">برنامه شمیم احکام:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد روزهای انجام شده:</label>
                        <input type="text" class="form-control" name="tedad_ruzhaye_anjam_shode" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">موضوع این ماه:</label>
                        <input type="text" class="form-control" name="mozo_in_mah" id="usr"
                               style="width: 20%; float: left;" value="">
                    </div>
                </div>
            </div>
        </div>

        --}}{{--درس اخلاق عمومی--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">درس اخلاق عمومی</h3>
            </div>
            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">

                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">نام و شماره همراه استاد:</label>
                                <input type="text" class="form-control" name="name_tell_ostade1" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">موضوع هفته اول:</label>
                                <input type="text" class="form-control" name="mozo_hafte1" id="usr"
                                       style="width: 58%; float: left;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">

                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">نام و شماره همراه استاد:</label>
                                <input type="text" class="form-control" name="name_tell_ostade2" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">موضوع هفته اول:</label>
                                <input type="text" class="form-control" name="mozo_hafte2" id="usr"
                                       style="width: 58%; float: left;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">

                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">نام و شماره همراه استاد:</label>
                                <input type="text" class="form-control" name="name_tell_ostade3" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">موضوع هفته اول:</label>
                                <input type="text" class="form-control" name="mozo_hafte3" id="usr"
                                       style="width: 58%; float: left;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">

                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">نام و شماره همراه استاد:</label>
                                <input type="text" class="form-control" name="name_tell_ostade4" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">موضوع هفته اول:</label>
                                <input type="text" class="form-control" name="mozo_hafte4" id="usr"
                                       style="width: 58%; float: left;" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">

                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">نام و شماره همراه استاد:</label>
                                <input type="text" class="form-control" name="name_tell_ostade5" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">موضوع هفته اول:</label>
                                <input type="text" class="form-control" name="mozo_hafte5" id="usr"
                                       style="width: 58%; float: left;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        --}}{{--حضور ناظر شب--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">حضور ناظر شب</h3>
            </div>
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="checkbox" style="float: right;">
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]" value="مدیر"
                                                                  style="float: none !important;margin-right: 0px !important;">مدیر
                        </label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]"
                                                                  value="معاون"
                                                                  style="float: none !important;margin-right: 0px !important;">معاون</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]"
                                                                  value="استاد"
                                                                  style="float: none !important;margin-right: 0px !important;">استاد</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]"
                                                                  value="طلبه"
                                                                  style="float: none !important;margin-right: 0px !important;">طلبه</label>
                    </div>
                </div>
            </div>
        </div>

        --}}{{--قرائت قرآن روزانه--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">قرائت قرآن روزانه</h3>
            </div>
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد قاری در هر روز:</label>
                        <input type="text" class="form-control" name="tedad_ghari_dar_ruz" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد صفحات قرائت شده در هر روز:</label>
                        <input type="text" class="form-control" name="tedade_safhate_gharat_shode" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>
            </div>
        </div>

        --}}{{--ورزش عمومی طلاب--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">ورزش عمومی طلاب</h3>
            </div>
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد برگزاری شنا:</label>
                        <input type="text" class="form-control" name="tedad_bargozari_shena" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام ورزش عمومی:</label>
                        <input type="text" class="form-control" name="name_varzesh_umumi" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد ساعات در هفته:</label>
                        <input type="text" class="form-control" name="tedad_saat_dar_hafte" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>
            </div>
        </div>

        --}}{{--برگزاری آموزش دفاعی--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برگزاری آموزش دفاعی</h3>
            </div>
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تاریخ برگزاری نیم سال اول:</label>
                        <input type="text" class="form-control" name="tarikh_bargozari_nimsale_aval" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نوع مراسم معنوی:</label>
                        <input type="text" class="form-control" name="noe_maraseme_manavi" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 72px;">
                    <div class="checkbox">
                        <label style="margin-right: 20px;"><input type="checkbox" name="aslahe[]" value="آموزش اسلحه">آموزش
                            اسلحه </label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="aslahe[]" value="میدان تیر">میدان
                            تیر</label>
                    </div>
                </div>
            </div>
        </div>

        --}}{{--برنامه انس با قرآن و عترت--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برنامه انس با قرآن و عترت</h3>
            </div>
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد هفته های اجرا شده:</label>
                        <input type="text" class="form-control" name="tedad_haftehaye_ejra_shode" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد حافظین:</label>
                        <input type="text" class="form-control" name="tedade_hafezin" id="usr"
                               style="width: 20%; float: left;" value="{{ $orders->tedade_hafezin }}">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد تولیدات فرهنگی:</label>
                        <input type="text" class="form-control" name="tedade_tolidate_farhangi" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 72px;">
                    <div class="checkbox">
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="نصب تصاویر"
                                                                  style="float: none !important;margin-right: 0px !important;">نصب
                            تصاویر</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="شعر"
                                                                  style="float: none !important;margin-right: 0px !important;">شعر</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]"
                                                                  value="داستان"
                                                                  style="float: none !important;margin-right: 0px !important;">داستان</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]"
                                                                  value="مقاله"
                                                                  style="float: none !important;margin-right: 0px !important;">مقاله</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="کلیپ"
                                                                  style="float: none !important;margin-right: 0px !important;">کلیپ</label>
                    </div>
                </div>
            </div>
        </div>

        --}}{{--محفل انس و وعظ--}}{{--
        <div class="row">
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">محفل انس و وعظ</h3>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">باحضور:</label>
                                <input type="text" class="form-control" name="ba_hozore1" id="usr"
                                       style="width: 58%; float: left;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">تاریخ برگزاری جلسه اول:</label>
                                <input type="text" class="form-control" name="tarikh_bargozari_jalase1" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">باحضور:</label>
                                <input type="text" class="form-control" name="ba_hozore2" id="usr"
                                       style="width: 58%; float: left;" value="{{ $orders->ba_hozore2 }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 72px;">
                            <div class="form-group">
                                <label for="usr" style="direction: rtl;">تاریخ برگزاری جلسه دوم:</label>
                                <input type="text" class="form-control" name="tarikh_bargozari_jalase2" id="usr"
                                       style="width: 58%; float: left;">
                            </div>

                        </div>
                    </div>--}}
                </div>
            </div>
        </div>

@endsection

@section('script')
    {{--<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.bundle.min') }}"></script>--}}
@endsection