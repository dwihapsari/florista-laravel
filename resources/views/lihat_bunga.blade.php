@extends('template')

@section('main')
<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Data Bunga</h2>
        </div>
    </div>
</div>

<center>
    <div id="container-md">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="text-align: center">Kode</th>
                    <th style="text-align: center">Nama</th>
                    <th style="text-align: center">Jenis</th>
                    <th style="text-align: center">Harga</th>
                    <th style="text-align: center">Keterangan</th>
                    <th style="text-align: center">Stok</th>
                    <th style="text-align: center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bunga_list as $bunga)
                <tr>
                    <td style="text-align: center">{{ $bunga->kode }}</td>
                    <td style="text-align: center">{{ $bunga->nama }}</td>
                    <td style="text-align: center">{{ $bunga->jenis }}</td>
                    <td style="text-align: center">{{ $bunga->harga }}</td>
                    <td style="text-align: center">{{ $bunga->keterangan }}</td>
                    <td style="text-align: center">{{ $bunga->stok }}</td>
                    <td style="text-align: center">
                        <div class="box-button"> {{ link_to('bunga/'.$bunga->id, 'Detail',['class' => 'btn btn-success btn-sm']) }}</div>
                        <div class="box-button"> {{ link_to('bunga/'.$bunga->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }} </div>
                        <div class="box-button">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['FloristaController@destroy',$bunga->id]]) !!}
                            {!! Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-bottom">
            <strong style="text-align: center;">
                Jumlah Bunga : {{ $jumlah_bunga }}
            </strong>
        </div>

        <div class="bottom-nav">
            <div>
                <a href="create" class="btn btn-primary">Tambah Bunga</a>
            </div>
        </div>

    </div>
</center>
@endsection

@section('footer')
<div id="footer">
</div>
@endsection