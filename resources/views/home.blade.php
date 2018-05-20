<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <h1 class="text-info text-center">
                    بسمه تعالی
                </h1>
                <h3 class="text-center">
                    فرم گزارش 1 ماهانه دستورالعمل عمومی سطح (1،2،3)
                </h3>
                <h4 class="text-center" style="font-size: 16px;">
                    طرح جامع تربیتی مدارس علمیه بلند مدت(23دی تا آخر بهمن 96)
                </h4>
                <a class="btn btn-danger" href="{{ route('logout') }}">خروج</a>
                @if(Auth::user()->level == "admin")
                    <a class="btn btn-warning" href="{{ route('panel') }}">پنل مدیریت</a>
                @endif
                @if(Session::has('create'))
                    <div class="alert-primary">
                        {{ Session::get('create') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <form action="{{ route('sabte.store') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-12">
                <span class="float-right">
                    تاریخ شروع نیم سال دوم
                    <span>1397/00/00</span>
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
            <div class="col-md-9">

                {{--بیداری در سحر--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">بیداری در سحر:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت بیداری:</label>
                        <input type="text" class="form-control" name="saat_bidari" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت خواب:</label>
                        <input type="text" class="form-control" name="saat_khab" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                {{--ایجاد نشاط درسحر--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">نشاط در سحر:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="neshat_dar_sahar[]" value="دمنوش">دم نوش</label>
                        <label><input type="checkbox" name="neshat_dar_sahar[]" value="آبجوش">آبجوش</label>
                        <label><input type="checkbox" name="neshat_dar_sahar[]" value="چای">چای</label>
                    </div>
                </div>

                {{--برنامه صبحگاهی و صبحانه--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">برنامه صبحگاهی و صبحانه:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="barname_sobhgahi_sobhane[]" value="قرائت قرآن">قرائت قرآن
                        </label>
                        <label><input type="checkbox" name="barname_sobhgahi_sobhane[]" value="نرمش">نرمش</label>
                        <label><input type="checkbox" name="barname_sobhgahi_sobhane[]" value="دعای امام زمان">دعای امام
                            زمان</label>
                        <label><input type="checkbox" name="barname_sobhgahi_sobhane[]" value="صبحانه">صبحانه</label>
                    </div>
                </div>

                {{--حفظ و ارتقا فضای سبز--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">حفظ و ارتقا فضای سبز:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد گلدان های طبیعی:</label>
                        <input type="text" class="form-control" name="tedad_goldan_tabiee" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد درختان:</label>
                        <input type="text" class="form-control" name="tedad_derakhtan" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساخت تولید سبزیجات:</label>
                        <input type="text" class="form-control" name="masahat_tolid_sabzijat" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                {{--نظم و نظافت کلاس ها--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">نظم و نظافت کلاس ها:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصدنظافت کلاس ها:</label>
                        <input type="text" class="form-control" name="darsad_nezafat_dar_class" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">روزهای نظافت:</label>
                        <input type="text" class="form-control" name="rozhaye_nezafat" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                {{--نظم و اداره کتابخانه--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">نظم و اداره کتابخانه:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">ساعت کار کتابخانه:</label>
                        <input type="text" class="form-control" name="saat_kar_ketabkhune" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصد نظم:</label>
                        <input type="text" class="form-control" name="darsad_nazm" id="usr"
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">درصد نظافت:</label>
                        <input type="text" class="form-control" name="darsad_nezafat" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                {{--پذیرایی از مهمانان--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">پذیرایی از مهمانان:</label>

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

                {{--هیئت طلاب خوابگاهی--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">هیئت طلاب خوابگاهی:</label>

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

                {{--هیئت طلاب متهل--}}
                <div class="form-group" style="margin-bottom: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">هیئت طلاب متهل:</label>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام مسئول هیئت:</label>
                        <input type="text" class="form-control" name="name_masoul_motahel" id="usr"
                               style="width: 20%; float: left;">
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

                {{--اعیاد و عزا داری ها(داخل مدرسه)--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">اعیاد و عزا داری ها(داخل مدرسه):</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جشن ولادت حضرت زینب(س)">جشن ولادت حضرت
                            زینب(س) </label>
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جلسه شهادت حضرت زهرا(س)">جلسه شهادت
                            حضرت زهرا(س)</label>
                        <label><input type="checkbox" name="ayad_dakhel[]" value="جشن پیروزی انقلاب اسلامی">جشن پیروزی
                            انقلاب اسلامی</label>
                    </div>
                </div>

                {{--اعیاد و عزا داری ها(خارج مدرسه)--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">اعیاد و عزا داری ها(خارج مدرسه):</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="ayad_kharej[]" value="جشن ولادت حضرت زینب(س)">جشن ولادت حضرت
                            زینب(س) </label>
                        <label><input type="checkbox" name="ayad_kharej[]" value="جلسه شهادت حضرت زهرا(س)">جلسه شهادت
                            حضرت زهرا(س)</label>
                        <label><input type="checkbox" name="ayad_kharej[]" value="شرکت گروهی طلاب در راهپیمایی 22بهمن">شرکت
                            گروهی طلاب در راهپیمایی 22بهمن</label>
                    </div>
                </div>

                {{--بصیرت دشمن شناسی و حفظ روحیه ی انقلابی--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">بصیرت دشمن شناسی و حفظ روحیه ی
                        انقلابی:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="basirat[]" value="روزنامه">روزنامه</label>
                        <label><input type="checkbox" name="basirat[]" value="پخش اخبار">پخش اخبار</label>
                        <label><input type="checkbox" name="basirat[]" value="پخش کلیپ های بصیرتی">پخش کلیپ های
                            بصیرتی</label>
                        <label><input type="checkbox" name="basirat[]" value="تکبیرات بعداز نماز">تکبیرات بعداز
                            نماز</label>
                    </div>
                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">نام و شخصیت سیاسی مدعو :</label>
                        <input type="text" class="form-control" name="name_semmat_madou" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                {{--شام طلاب--}}
                <div class="form-group" style="margin-top: 72px;">
                    <label for="usr" style="float: right;direction: rtl;">شام طلاب:</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="sham_tolab[]" value="فردی اجرا می شود">فردی اجرا می شود
                        </label>
                        <label><input type="checkbox" name="sham_tolab[]" value="گروهی اجرا می شود">گروهی اجرا می
                            شود</label>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">گروه های همیاران تربیتی</h3>
            </div>
        </div>

        {{--برنامه شمیم احکام--}}
        <div class="row">
            <div class="col-md-9">

                {{--برنامه شمیم احکام--}}
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
                               style="width: 20%; float: left;">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برنامه شمیم احکام</h3>
            </div>
        </div>

        {{--درس اخلاق عمومی--}}
        <div class="row">
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
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">درس اخلاق عمومی</h3>
            </div>
        </div>

        {{--حضور ناظر شب--}}
        <div class="row">
            <div class="col-md-9">
                <div class="form-group" style="margin-top: 72px;">

                    <div class="checkbox" style="float: right;">
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]" value="مدیر">مدیر
                        </label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]" value="معاون">معاون</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]" value="استاد">استاد</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="nazere_shab[]" value="طلبه">طلبه</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">حضور ناظر شب</h3>
            </div>
        </div>

        {{--قرائت قرآن روزانه--}}
        <div class="row">
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
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">قرائت قرآن روزانه</h3>
            </div>
        </div>

        {{--ورزش عمومی طلاب--}}
        <div class="row">
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
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">ورزش عمومی طلاب</h3>
            </div>
        </div>

        {{--برگزاری آموزش دفاعی--}}
        <div class="row">
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
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برگزاری آموزش دفاعی</h3>
            </div>
        </div>

        {{--برنامه انس با قرآن و عترت--}}
        <div class="row">
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
                               style="width: 20%; float: left;">
                    </div>

                    <div class="form-group">
                        <label for="usr" style="direction: rtl;">تعداد تولیدات فرهنگی:</label>
                        <input type="text" class="form-control" name="tedade_tolidate_farhangi" id="usr"
                               style="width: 20%; float: left;">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 72px;">
                    <div class="checkbox">
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="نصب تصاویر">نصب
                            تصاویر</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="شعر">شعر</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]"
                                                                  value="داستان">داستان</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]"
                                                                  value="مقاله">مقاله</label>
                        <label style="margin-right: 20px;"><input type="checkbox" name="ons[]" value="کلیپ">کلیپ</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">برنامه انس با قرآن و عترت</h3>
            </div>
        </div>

        {{--محفل انس و وعظ--}}
        <div class="row">
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
                                       style="width: 58%; float: left;">
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
            <div class="col-md-3">
                <h3 class="text-info" style="font-size: 20px;">محفل انس و وعظ</h3>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">ثبت اطلاعات</button>
    </form>
</div>


<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min') }}"></script>
</body>
</html>
