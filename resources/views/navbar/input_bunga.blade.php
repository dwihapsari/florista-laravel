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
            @csrf
            <table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
                <tr>
                    <td width="150">Kode</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="kode" size="5" class="required" minlength="1" placeholder="Kode Bunga" /></td>
                </tr>
                <tr>
                    <td width="150">Nama</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="nama" size="50" class="required" minlength="3" placeholder="Nama Bunga" /></td>
                </tr>
                <tr>
                    <td width="150">Jenis</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="jenis" size="50" class="required" minlength="3" placeholder="Jenis Bunga" /></td>
                </tr>
                <tr>
                    <td width="150">Harga</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="harga" size="50" class="required" minlength="3" placeholder="Harga" /></td>
                </tr>
                <tr>
                    <td width="150">Keterangan</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="keterangan" size="100" class="required" minlength="3" placeholder="Keterangan" /></td>
                </tr>
                <tr>
                    <td width="150">Stok</td>
                    <td width="30">:</td>
                    <td width="550"><input type="text" name="stok" size="5" class="required" minlength="1" placeholder="Stok Bunga" /></td>
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