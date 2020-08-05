@extends('template')

@section('main')
<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Buku Tamu</h2>
        </div>
    </div>
</div>

<div id="wrapper">
    <div class="container">
        <center>
            <div class="title" style="margin-left: 1px;">
                <h3>Isi Testimonial untuk mendapatkan update produk terbaru kami.</h3>
            </div>
        </center>

        <form id="formku" method="POST" action="{{  url('testi')}}">
            @csrf
            <table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
                <tr>
                    <td width="150">Nama</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="nama" size="30" class="required" minlength="3" placeholder="Nama Anda" /></td>
                </tr>
                <tr>
                    <td width="150">Email</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="email" size="30" class="required email" minlength="3" placeholder="Alamat Email" /></td>
                </tr>
                <tr>
                    <td width="150">Komentar</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="komentar" size="30" class="required" minlength="3" placeholder="Komentar Anda " /></td>
                </tr>
                <tr>
                    <td width="150"></td>
                    <td width="30"></td>
                    <td width="550">
                        <input class="button" type="submit" value="Kirim" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="komentar">
        @foreach($testi as $test)
        <div class="span12">
            <p style="font-weight: bold;">{{$test->nama}}</p>
            <p>{{$test->email}}</p>
            <p>{{$test->komentar}}</p>
            <p>{{$test->created_at}}</td>
        </div>
        <br>
        @endforeach
    </div>
</div>
@stop

@section('footer')
<div id="footer">
</div>
@stop