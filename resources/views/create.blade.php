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

        <form id="formku" method="POST" action="{{  url('bunga')}}">
            {{ csrf_field() }}
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <table style="font-style: oblique; font-weight: bold; margin-left: 140px;" class="mx-auto">
                <tr>
                    <td width="150">Kode</td>
                    <td width="30">:</td>
                    <td width="550">
                        <input type="text" name="kode" size="5" class="required" minlength="1" style="width: 80%" placeholder="Kode Bunga" />
                    </td>
                </tr>
                <tr>
                    <td width="150">Nama</td>
                    <td width="30">:</td>
                    <td width="550">
                        <input type="text" name="nama" size="50" class="required" minlength="3" style="width: 80%" placeholder="Nama Bunga">
                    </td>
                </tr>
                <tr>
                    <td width="150">Jenis</td>
                    <td width="30">:</td>
                    <td width="550">
                        <select class="js-example-basic-single" name="jenis" style="width: 80%">
                            <option value="">-- Pilih Jenis --</option>
                            <option>Bucket</option>
                            <option>Tangkai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="150">Harga</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="harga" size="50" class="required" minlength="3" style="width: 80%" placeholder="Harga" /></td>
                </tr>
                <tr>
                    <td width="150">Keterangan</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="keterangan" size="100" class="required" minlength="3" style="width: 80%" placeholder="Keterangan" /></td>
                </tr>
                <tr>
                    <td width="150">Stok</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="stok" size="5" class="required" minlength="1" style="width: 80%" placeholder="Stok Bunga" /></td>
                </tr>
                <tr>
                    <td width="150"></td>
                    <td width="30"></td>
                    <td width="550">
                        <input class="button" type="submit" value="Simpan" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@stop

@section('footer')
<div id="footer">
</div>
@stop