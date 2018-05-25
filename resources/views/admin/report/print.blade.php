@extends('admin.master')


@section('content')
    <h1>نمایش گزارش کاربر</h1>



    <div class="row">
        <div class="col-sm-12">
                <span class="float-right">
                    تاریخ گزارش
                    <span>{{ $data['date'] }}</span>
                 </span>
            <span class="float-left print">
                <a class="btn btn-default printPage">پرینت اطلاعات</a>
            </span>
        </div>
    </div>




    {{--<div class="row" style="margin-bottom: 40px;">
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

            --}}{{--بیداری در سحر--}}{{--
            <div class="form-group" style="margin-top: 72px;">
                <label for="usr" style="margin-bottom: 30px;direction: rtl;">بیداری در سحر:</label>

                <div class="form-group">
                    <label for="usr" style="direction: rtl;">ساعت بیداری:</label>
                    <input type="text" class="form-control" name="saat_bidari" id="usr"
                           style="width: 20%; float: left;" value="{{ $data['saat_bidari'] }}">
                </div>

                <div class="form-group">
                    <label for="usr" style="direction: rtl;">ساعت خواب:</label>
                    <input type="text" class="form-control" name="saat_khab" id="usr"
                           style="width: 20%; float: left;" value="{{ $data['saat_khab'] }}">
                </div>
            </div>

            --}}{{--ایجاد نشاط درسحر--}}{{--
            <div class="form-group" style="margin-top: 72px;">
                <label for="usr" style="direction: rtl;">نشاط در سحر:</label>
                <input type="text" class="form-control" name="saat_khab" id="usr"
                       style="width: 20%; float: left;" value="{{ $data['neshat_dar_sahar'] }}">
            </div>

            --}}{{--برنامه صبحگاهی و صبحانه--}}{{--
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
                           style="width: 20%; float: left;">
                </div>

                <div class="form-group">
                    <label for="usr" style="direction: rtl;">درصد رضایت مهمانان از پذیرایی:</label>
                    <input type="text" class="form-control" name="darsad_rezayat_mehmanan" id="usr"
                           style="width: 20%; float: left;">
                </div>
            </div>

            --}}{{--هیئت طلاب خوابگاهی--}}{{--
            <div class="form-group" style="margin-bottom: 72px;">
                <label for="usr" style="margin-bottom: 30px;direction: rtl;">هیئت طلاب خوابگاهی:</label>

                <div class="form-group">
                    <label for="usr" style="direction: rtl;">نام مسئول هیئت:</label>
                    <input type="text" class="form-control" name="name_masoul_khabgah" id="usr"
                           style="width: 20%; float: left;">
                </div>

                <div class="form-group">
                    <label for="usr" style="direction: rtl;">تعداد جلسات این ماه:</label>
                    <input type="text" class="form-control" name="tedad_jalasat_in_mah_khabgah" id="usr"
                           style="width: 20%; float: left;">
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
                </div>
            </div>
        </div>
    </div>--}}

@endsection

@section('script')
    <script src="{{ asset('js/jQuery.print.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.print').click(function () {
                $('.printPage').print();
            });
        });
    </script>
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.bundle.min') }}"></script>--}}
@endsection