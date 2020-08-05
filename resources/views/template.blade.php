<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toko Bunga Florista</title>
    <meta name="description" content="Toko Bunga Florista | Toko Berbagai Jenis Bunga Di Semarang" />
    <meta name="keywords" content="Toko, Bunga, Semarang, Hadiah, Wisuda, Pernikahan, Flower, Florist" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">

    <style type="text/css">
        .konten {
            margin-top: 20px;
            margin-left: 350px;
            margin-right: 15px;
            color: black;
            font-family: calibri;
            font-size: 20px;
            font-weight: none;
        }

        .komentar {
            position: center;
            margin-top: 20px;
            margin-left: 340px;
            margin-right: 15px;
            color: gray;
            font-family: calibri;
            font-size: 14px;
            font-weight: none;
            border: 1px solid;
            width: 700px;
            height: 260px;
            overflow: scroll;
        }
    </style>

</head>
<header>
    <div class="container">
        <div class="row">
            <div class="logo span3">
                <a class="brand" href="{{ url('index') }}"><img src="/img/floristalogo.png" alt="Logo" width="70%" height="70%"></a>
            </div>
            <div class="span9">
                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="{{ url('index') }}">Home</a></li>
                                @if(Session::has('admin'))
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar Bunga<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('lihat_bunga?jenis=Semua') }}">Semua</a></li>
                                        <li><a href="{{ url('lihat_bunga?jenis=Bucket') }}">Bucket</a></li>
                                        <li><a href="{{ url('lihat_bunga?jenis=Tangkai') }}">Tangkai</a></li>
                                    </ul>
                                </li>
                                @endif
                                <li><a href="{{ url('testimoni') }}">Testimonial</a></li>
                                <!-- <li><a href="detail.php">Cart</a></li>-->
                                <li><a href="{{ url('about_us') }}">About Us</a></li>

                                @if(Session::has('admin') || Session::has('user'))
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, {{$user->name}} <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('logout') }}">Log out</a></li>
                                    </ul>
                                </li>
                                @endif
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('login') }}">Customer</a></li>
                                        <li><a href="{{ url('login_admin') }}">Admin</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    @yield('main')

    @yield('footer')

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</body>

<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <h3>Toko Bunga Online Florista</h3>
                    <p>
                        Melayani penjualan bunga berbagai jenis dengan pembayaran via transfer dan Cash On Delivery/COD (khusus wilayah Semarang).
                    </p>
                </div>
                <div class="span3">
                    <h3>Info Florista</h3>
                    Diskon 10% pembelian minimal Rp.350.000<br />
                    Free ongkir dengan pembayaran COD, khusus Semarang!<br />
                    Hubungi via whatsapp : <a href="https://api.whatsapp.com/send?phone=6285694984803&text=Hallo%20Hakko%20Blogs%20Saya%20Mau%20Order%20warnasol%20Versi%20pro%20nya&source=&data=">0856 949 848 03</a><br />
                    Website : <a href="https://www.florista.com">www.florista.com</a>
                </div>
                <div class="span6">
                    <h3>Follow Us!</h3>
                    <ul class="social-grid">
                        <li>
                            <div class="social-item">
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-twitter">
                                            <a href="http://twitter.com"></a>
                                        </div>
                                        <div class="social-info-back social-twitter-hover">
                                            <a href="http://twitter.com"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-linkedin">
                                            <a href="http://facebook.com"></a>
                                        </div>
                                        <div class="social-info-back social-linkedin-hover">
                                            <a href="http://facebook.com"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-dribbble">
                                            <a href="http://dribble.com"></a>
                                        </div>
                                        <div class="social-info-back social-dribble-hover">
                                            <a href="http://dribble.com"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="social-item">
                                <div class="social-info-wrap">
                                    <div class="social-info">
                                        <div class="social-info-front social-flickr">
                                            <a href="http://flickr.com"></a>
                                        </div>
                                        <div class="social-info-back social-flickr-hover">
                                            <a href="http://flickr.com"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="container">
            <p>
                Copyright &copy; 2020
            </p>
        </div>
    </div>
</footer>

</html>