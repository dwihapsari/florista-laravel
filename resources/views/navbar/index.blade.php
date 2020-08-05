@extends('template')

@section('main')
<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Home</h2>
        </div>
    </div>
</div>

<div id="index">
    <h2>Halaman Index</h2>
    <p>Hi, {{$user->name}}</p>
    <p>Ini halaman index</p>
</div>
@stop

@section('footer')
<div id="footer">
</div>
@stop