@extends('admin.master')

@section('style')
    <link href="/css/persianDatepicker-dark.css" rel="stylesheet">
    <link href="/css/prism.min.css" rel="stylesheet">
    <script src="/js/prism.min.js"></script>
@endsection

@section('content')
    <h1>گزارش گیری</h1>

    <form action="{{ route('findUser') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select name="user_id" class="form-control" id="sel1" style="width: 35%;">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <input type="text" name="date_now" placeholder="dark" id="pdpDark" class="form-control" />
            <input type="text" name="date_last" placeholder="dark" id="pdpDark1" class="form-control" />

        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>

@endsection


@section('script')
    <script src="/js/persianDatepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#pdpDark").persianDatepicker({ theme: "dark" , formatDate: "YYYY-0M-0D" });
            $("#pdpDark1").persianDatepicker
            (
                { theme: "dark",formatDate: "YYYY/0M/DD hh:mm:ss" }
            );
        });
    </script>
@endsection