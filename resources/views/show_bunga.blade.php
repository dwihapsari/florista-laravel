@extends('template')

@section('main')
<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Detail Bunga</h2>
        </div>
    </div>
</div>

<table class="table table-striped">
    <tr>
        <td class="span3">Kode</td>
        <td class="span3">{{ $bunga -> kode }}</td>
    </tr>
    <tr>
        <td class="span3">Nama Bunga</td>
        <td class="span3">{{ $bunga -> nama }}</td>
    </tr>
    <tr>
        <td class="span3">Jenis</td>
        <td class="span3">{{ $bunga -> jenis }}</td>
    </tr>
    <tr>
        <td class="span3">Harga</td>
        <td class="span3">{{ $bunga -> harga }}</td>
    </tr>
    <tr>
        <td class="span3">Keterangan</td>
        <td class="span3">{{ $bunga -> keterangan }}</td>
    </tr>
    <tr>
        <td class="span3">Stok</td>
        <td class="span3">{{ $bunga -> stok }}</td>
    </tr>
</table>
@endsection

@section('footer')
<div id="footer">
</div>
@endsection