@extends('admin.master')

@section('style')
    <link href="/css/persianDatepicker-dark.css" rel="stylesheet">
    <link href="/css/prism.min.css" rel="stylesheet">
    <script src="/js/prism.min.js"></script>
@endsection

@section('content')
    <h1>گزارش گیری</h1>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 100px;">
            <form action="{{ route('findUser') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="sel1" style="float: right;padding-left: 15px;">کاربر مورد نظر خود را از روی لیست انتخاب کنید:</label>
                    <select name="user_id" class="form-control" id="sel1" style="width: 17%;float: right;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <label for="sel1" style="float: right;padding-left: 15px;">تاریخ مورد نظر خود را انتخاب کنید:</label>
                    <input type="text" name="date_now" placeholder="dark" id="pdpDark" class="form-control" style="width: 20%;">
                    {{--<input type="text" name="date_last" placeholder="dark" id="pdpDark1" class="form-control" />--}}

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-left">
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('print') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="sel1" style="float: right;padding-left: 15px;">کاربر مورد نظر خود را از روی لیست انتخاب کنید:</label>
                    <select name="user_id" class="form-control" id="sel1" style="width: 17%;float: right;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <label for="sel1" style="float: right;padding-left: 15px;">تاریخ مورد نظر خود را انتخاب کنید:</label>
                    <input type="text" name="date_now" placeholder="dark" id="pdpDark1" class="form-control" style="width: 20%;">
                    {{--<input type="text" name="date_last" placeholder="dark" id="pdpDark1" class="form-control" />--}}

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-left">
                </div>
            </form>
        </div>
    </div>


@endsection


@section('script')
    <script src="/js/persianDatepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#pdpDark").persianDatepicker({ theme: "dark" , formatDate: "YYYY-0M-0D" });
            $("#pdpDark1").persianDatepicker({ theme: "dark",formatDate: "YYYY-0M-0D" });
        });
    </script>
@endsection