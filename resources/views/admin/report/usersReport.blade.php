@extends('admin.master')


@section('content')
    <h1>نمایش گزارش کلی کاربر</h1>



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






                </div>
            </div>
        </div>

@endsection

@section('script')
    {{--<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.bundle.min') }}"></script>--}}
@endsection