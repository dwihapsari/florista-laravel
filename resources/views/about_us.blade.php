@extends('template')

@section('main')
<!-- start: Slider -->
<div id="page-title">
    <div id="page-title-inner">
        <!-- start: Container -->
        <div class="container">
            <h2><i class="ico-stats ico-white"></i>Profil</h2>
        </div>
        <!-- end: Container  -->
    </div>
</div>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" margin="10px">
    <div class="container">
        <center><img src="img/imgwin/wall-02.jpg" alt="" style="object-fit: cover"></center>
    </div>
</div>
<!-- End Jumbotron -->

<div id="wrapper">
    <!--start: Container -->
    <div class="container blockquote">
        <!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->
        <blockquote style="font-size: medium;">
            <b></b>
            <br />
            <b>Toko Bunga FLORISTA </b> adalah Toko Bunga yang berlokasi di perum Graha Asri Jl.Graha Sapta Asri, Tembalang.
            <br /><br /> <b>Toko Bunga FLORISTA</b> menerima pesanan bouquet untuk berbagai acara seperti pernikahan, kelulusan, belasungkawa, dan buket untuk orang tersayang.
            <br /> Pesan sekarang melalui website.
            Sebarkan kebahagiaan, tanpa halangan :)
        </blockquote>


        <start: Row -->
            <div class="row">

                <!-- start: Icon Boxes -->
                <div class="icons-box-vert-container">

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-ok ico-color circle-color big"></i>
                            <div class="icons-box-vert-info">
                                <h3>Pengiriman Cepat</h3>
                                <p>Toko Bunga FLORISTA siap mengirim bouquet Anda secara gratis dengan radius maksimal 5 KM.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box-->

                    <!-- start: Icon Box Start -->
                    <div class="span6">
                        <div class="icons-box-vert">
                            <i class="ico-cup  ico-white circle-color-full big-color"></i>
                            <div class="icons-box-vert-info">
                                <h3>Harga Terjangkau</h3>
                                <p>Toko Bunga FLORISTA menggunakan bunga dari kebun tetangga sehingga aman dan murah.</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- end: Icon Box -->

                </div>
                <!-- end: Icon Boxes -->
                <div class="clear"></div>
            </div>
            <!-- end: Row -->

            <hr>

    </div>
    <!--end: Container-->

</div>
<!-- end: Wrapper  -->
@endsection