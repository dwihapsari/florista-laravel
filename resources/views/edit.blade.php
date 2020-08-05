@extends('template')

@section('main')
<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Input Bunga</h2>
        </div>
    </div>
</div>

<div id="wrapper">
    <div class="container">
        <center>
            <div class="title" style="margin-left: 1px;">
                <h3>Masukan data bunga.</h3>
            </div>
        </center>
        {!! Form::model($bunga, ['method' => 'PATCH', 'action' => ['FloristaController@update', $bunga->id]]) !!}
        <table style="font-style: oblique; font-weight: bold; margin-left: 140px;" class="mx-auto">
            <tr>
                <td width="150">Kode</td>
                <td width="30">:</td>
                <td width="550">
                    <input type="text" name="kode" value="{{$bunga->kode}}" size="5" class="required" minlength="1" style="width: 80%" placeholder="Kode Bunga" />
                </td>
            </tr>
            <tr>
                <td width="150">Nama</td>
                <td width="30">:</td>
                <td width="550">
                    <input type="text" name="nama" size="50" value="{{$bunga->nama}}" class="required" minlength="3" style="width: 80%" placeholder="Nama Bunga">
                </td>
            </tr>
            <tr>
                <td width="150">Jenis</td>
                <td width="30">:</td>
                <td width="550">
                    <select class="js-example-basic-single" name="jenis" value="{{$bunga->jenis}}" style="width: 80%">
                        <option>Bucket</option>
                        <option>Tangkai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="150">Harga</td>
                <td width="30">:</td>
                <td width="550"><input type="text" name="harga" value="{{$bunga->harga}}" size="50" class="required" minlength="3" style="width: 80%" placeholder="Harga" /></td>
            </tr>
            <tr>
                <td width="150">Keterangan</td>
                <td width="30">:</td>
                <td width="550"><input type="text" name="keterangan" value="{{$bunga->keterangan}}" size="100" class="required" minlength="3" style="width: 80%" placeholder="Keterangan" /></td>
            </tr>
            <tr>
                <td width="150">Stok</td>
                <td width="30">:</td>
                <td width="550"><input type="text" name="stok" value="{{$bunga->stok}}" size="5" class="required" minlength="1" style="width: 80%" placeholder="Stok Bunga" /></td>
            </tr>
            <tr>
                <td width="150"></td>
                <td width="30"></td>
                <td width="550">
                    <input class="button" type="submit" value="Simpan" />
                </td>
            </tr>
        </table>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('footer')
<div id="footer">
</div>
@stop