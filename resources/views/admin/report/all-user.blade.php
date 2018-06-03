@extends('admin.master')

@section('content')
    <h1 class="text-info">Users all</h1>

    <form action="{{ route('usersReport') }}" method="post">
        {{ csrf_field() }}
        @foreach($users as $user)
            <div class="checkbox">
                <label><input type="checkbox" name="allUser[]" value="{{ $user->id }}">{{ $user->name }}</label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-info">ارسال</button>
    </form>


@endsection