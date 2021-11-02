@extends('layout.default')
@section('content')

    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method='post'>
            @csrf
            <p>Email</p>
            <input type="text" name="email" id="email">
            <br/><br/>
            <p>Password</p>
            <input type="password" name="password" id="password">
            <br/><br/>
            <input type="submit">
        </form>
    </div>

@stop
