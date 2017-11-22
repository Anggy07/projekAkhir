<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TConstruction : Web Platform penyedia jasa kontraktor bagi pemilik proyek</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<script>
    function popup() {
        alert("Terima kasih telah melakukan pemesanan, silahkan menunggu persetujuan kontraktor");
    }
</script>
<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <ul class="clearfix">
                        <li><strong>Jam Buka Kerja </strong>: Senin - Sabtu Pukul 8 Pagi sampai 10 Malam</li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right">
                    <ul class="clearfix">
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Kebijakan</a></li>
                        <li><a href="contact.html">Kontak</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- Header Top End -->

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="" title="Economy"></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>(0355) 531533</strong></li>
                                <li><a href="#">TConstruction@gmail.com</a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                            <ul>
                                <li><strong>TConstruction Inc.</strong></li>
                                <li>Jember, Jawa Timur</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="social-links-one">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Header-Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="i{{url('/')}}">Beranda</a></li>
                                <!-- <li class="current dropdown"><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Homepage One</a></li>
                                    <li><a href="index-2.html">Homepage Two</a></li>
                                </ul>
                            </li> -->
                                <li><a href="about-us.html">Tentang</a></li>
                                <!-- <li><a href="team-grid.html">Our Team</a></li>
                            <!--<li class="dropdown"><a href="about-us.html">About Us</a>-->
                                <!--<ul>-->
                                <!--<li><a href="about-us.html">About Us</a></li>-->
                                <!--<li class="dropdown"><a href="#">Our Team</a>-->
                                <!--<ul>-->
                                <!--<li><a href="team-grid.html">Team Grid View</a></li>-->
                                <!--<li><a href="team-list.html">Team List View</a></li>-->
                                <!--<li><a href="team-single.html">Single Member</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <li class="dropdown"><a href="#">Servis</a>
                                    <!-- <ul>
                                    <li><a href="services.html">Services Style One</a></li>
                                    <li><a href="services-2.html">Services Style Two</a></li>
                                    <li><a href="single-service.html">Single Service</a></li>
                                </ul>
                            </li>
                            <!--<li class="dropdown"><a href="#">Pages</a>-->
                                    <!--<ul>-->
                                    <!--<li><a href="faq.html">Faqs</a></li>-->
                                    <!--<li><a href="error-page.html">404 Page</a></li>-->
                                    <!--<li><a href="projects.html">Projects</a></li>-->
                                    <!--</ul>-->
                                    <!--</li>-->
                                <li class="dropdown"><a href="#">Proyek</a>
                                    <ul>
                                        <li><a href="projects.html">Portofilio Proyek</a></li>
                                        <li><a href="single-project.html">Detail Proyek</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Toko</a>
                                    <ul>
                                        <li><a href="shop.html">Supplier Barang</a></li>
                                        <!--<li><a href="shop-single.html">Detail Barang</a></li> <-->
                                        <li><a href="shopping-cart.html">Keranjang Belanja</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <!--<li class="dropdown"><a href="#">Blog</a>-->
                                <!--<ul>-->
                                <!--<li><a href="blog.html">Blog Classic</a></li>-->
                                <!--<li><a href="blog-three-column.html">Blog Three Column</a></li>-->
                                <!--<li><a href="blog-single.html">Blog Single</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <li><a href="contact.html">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="get-btn"><a href="/login" class="theme-btn appt-btn">MASUK</a></div>

                </div>
            </div>
        </div>


        <!--Bounce In Header-->
        <div class="bounce-in-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{url('/')}}" class="img-responsive"><img src="images/logo-small.png" alt=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{url('/')}}">Beranda</a></li>
                                <li><a href="about-us.html">Tentang</a></li>
                                <!--  <li><a href="team-grid.html">Our Team</a></li> <-->
                                <li class="dropdown"><a href="#">Servis</a>
                                    <!-- <ul>
                                    <li><a href="services.html">Services Style One</a></li>
                                    <li><a href="services-2.html">Services Style Two</a></li>
                                    <li><a href="single-service.html">Single Service</a></li>
                                </ul> <-->
                                </li>
                                <li class="dropdown"><a href="#">Proyek</a>
                                    <ul>
                                        <li><a href="projects.html">Portofolio Proyek</a></li>
                                        <li><a href="single-project.html">Detail Proyek</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Toko</a>
                                    <ul>
                                        <li><a href="shop.html">Supllier Kami</a></li>
                                        <!-- <li><a href="shop-single.html">Detail Barang</a></li> <-->
                                        <li><a href="shopping-cart.html">Keranjang Belanja</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

            </div>
        </div>

    </header>
    <!--End Main Header -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <div class="sec-title">
                <h1>Detail Proyek</h1>
            </div>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
        <div class="auto-container">
            <div class="bread-crumb text-center"><a href="{{url('/')}}">Beranda</a> / <a href="projects.html">Proyek</a> / <a href="#" class="current">Detail Proyek</a></div>
        </div>
    </div>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <!--Tabs Box-->
        <div class="auto-container tabs-box">
            <div class="row clearfix">

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!--Sidebar Widget / Styled Nav-->
                        <div class="widget sidebar-widget styled-nav">
                            <nav class="nav-outer">
                                <!--Tab Buttons-->
                                <ul class="tab-buttons">
                                    <li class="tab-btn active-btn" data-tab="#project-one">We offer commitment at all levels of building project, from preparing.</li>
                                    <li class="tab-btn" data-tab="#project-two">We offer commitment at all levels of building project, from preparing.</li>
                                    <li class="tab-btn" data-tab="#project-three">We offer commitment at all levels of building project, from preparing.</li>
                                    <li class="tab-btn" data-tab="#project-four">We offer commitment at all levels of building project, from preparing.</li>
                                    <li class="tab-btn" data-tab="#project-five">We offer commitment at all levels of building project, from preparing.</li>
                                    <li class="tab-btn" data-tab="#project-six">We offer commitment at all levels of building project, from preparing.</li>
                                </ul>
                            </nav>
                        </div>


                        {{--<!--Sidebar Widget / Downloads-->--}}
                        {{--<div class="widget sidebar-widget downloads">--}}
                            {{--<h3>Our Brochure</h3>--}}
                            {{--<div class="text">Our 2016 financial prospectus brochure for easy to read guide all of the services offered.</div>--}}
                            {{--<ul>--}}
                                {{--<li><a href="#">Download PDF</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        <!--Sidebar Widget / Contact Widget-->
                        <div class="widget sidebar-widget contact-widget">
                            <h3>Ada Pertanyaan??<br>Hubungi Kami:</h3>
                            <div class="phone-numbers">
                                (0355) 531533
                            </div>
                            <h3>untuk lebih detai</h3>
                        </div>

                    </aside>
                </div>
                <!--End Sidebar-->

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Single Project-->
                    <section class="project-single">
                        <!--Tabs Content-->
                        <div class="tabs-content">

                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="project-one">

                                <!--Masonry-->
                                <div class="default-masonry images-group main-image clearfix">
                                    <figure class="masonry-item"><a href="images/gallery/9.jpg" class="lightbox-image"><img src="images/gallery/9.jpg" alt=""></a></figure>
                                    <!-- <figure class="masonry-item"><a href="images/gallery/10.jpg" class="lightbox-image"><img src="images/gallery/10.jpg" alt=""></a></figure>
                                    <figure class="masonry-item"><a href="images/gallery/11.jpg" class="lightbox-image"><img src="images/gallery/11.jpg" alt=""></a></figure>
                               <-->
                                </div>

                                <h2 class="project-title">Detail Spesifikasi Proyek</h2>
                                <!--Default Text Block-->
                                <div class="default-text-block">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>
                                            <th>Spesifikasi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Nama Rumah</td>
                                            <td>Rumah Seri L25</td>
                                        </tr>
                                        <tr>
                                            <td>Kamar Tidur</td>
                                            <td>6 Kamar</td>
                                        </tr>
                                        <tr>
                                            <td>Kamar Mandi</td>
                                            <td>3 Kamar</td>
                                        </tr>
                                        <tr>
                                            <td>Luas Tanah</td>
                                            <td>30 m2</td>
                                        </tr>
                                        <tr>
                                            <td>Luas Bangunan</td>
                                            <td>28 m2</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Lantai</td>
                                            <td>2 lantai</td>
                                        </tr>
                                        <tr>
                                            <td>Garasi</td>
                                            <td>1 Garasi</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#basicModal">Pesan Sekarang</a>

                                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Formulir Pengajuan</h4>
                                            </div>

                                            <div class="modal-body">
                                                <form action="" method="POST" role="form" onsubmit="popup()">

                                                    <div class="form-group">
                                                        <label for="">Alamat Proyek</label>
                                                        <input type="text" class="form-control" id="" placeholder="Alamat Proyek">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tanggal Pembangunan</label>
                                                        <input type="date" class="form-control" id="" placeholder="Tanggal Pembangunan">
                                                    </div>
                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="">Isi 3</label>--}}
                                                        {{--<input type="text" class="form-control" id="" placeholder="Isi 3">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="">Isi 4</label>--}}
                                                        {{--<input type="text" class="form-control" id="" placeholder="Isi 4">--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label for="">Isi 5</label>--}}
                                                        {{--<input type="text" class="form-control" id="" placeholder="Isi 5">--}}
                                                    {{--</div>--}}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Ajukan</button>

                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{--<hr class="padd-bott-40">--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}
                                    {{--<div class="default-title">--}}
                                        {{--<h2>Challange</h2>--}}
                                    {{--</div>--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu esta dolor prima consequat id est ei cum ferri volumu scaevola amet vistla soluta labore, tota dicit communepro cu, mei at vero dicunt. Eum at enim putant petentium.</p>--}}
                                            {{--</div>--}}
                                            {{--<br>--}}
                                            {{--<ul class="dotted-list-style">--}}
                                                {{--<li>--}}
                                                    {{--<h4>Improve sales and operations and production planning:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu olta prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore tota dicit .</p>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<h4>Optimize the supply for perfect order planning:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu dolor prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore qco rbaish la vista.</p>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<h4>Determine the right inventory level:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu dolor prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore, tota dicit .</p>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}

                                        {{--</div>--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-7.jpg" alt=""></figure>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}

                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-8.jpg" alt=""></figure>--}}
                                        {{--</div>--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="default-title">--}}
                                                {{--<h2>Solution</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu est prima consequat id est ei cum ferri volumu scaevola amet vi soluta iut labore, tota dicit communepro cu mei verdicunt. Eum dolor enim putant petentium. an vim munere placerat.</p>--}}
                                                {{--<p>intellegam at, at falli dolorum est, eum quot adipiscing ea. Sed te persius inermis vulputate. Pro ad wisi dolor amet dummy text.</p>--}}
                                            {{--</div>--}}

                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}
                                    {{--<div class="default-title">--}}
                                        {{--<h2>Result</h2>--}}
                                    {{--</div>--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu esta dolor prima consequat id est ei cum ferri volumu scaevola amet vistla soluta labore, tota dicit communepro cu.</p>--}}
                                                {{--<p><em>Here are some list of result:</em></p>--}}
                                            {{--</div>--}}

                                            {{--<ul class="#">--}}
                                                {{--<li>Lowered the risk of back-order by 95%</li>--}}
                                                {{--<li>Reduced lead time by 43%</li>--}}
                                                {{--<li>Increased stock for finished goods by 10%</li>--}}
                                                {{--<li>Decreased variability by 50%</li>--}}
                                            {{--</ul>--}}

                                        {{--</div>--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-9.jpg" alt=""></figure>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<!--End Tab-->--}}

                            {{--<!--Tab-->--}}
                            {{--<div class="tab" id="project-two">--}}

                                {{--<!--Masonry-->--}}
                                {{--<div class="default-masonry images-group main-image clearfix">--}}
                                    {{--<figure class="masonry-item"><a href="images/gallery/9.jpg" class="lightbox-image"><img src="images/gallery/9.jpg" alt=""></a></figure>--}}
                                    {{--<figure class="masonry-item"><a href="images/gallery/10.jpg" class="lightbox-image"><img src="images/gallery/10.jpg" alt=""></a></figure>--}}
                                    {{--<figure class="masonry-item"><a href="images/gallery/11.jpg" class="lightbox-image"><img src="images/gallery/11.jpg" alt=""></a></figure>--}}
                                {{--</div>--}}

                                {{--<h2 class="project-title">Demand as transportation services as commerce</h2>--}}
                                {{--<!--Default Text Block-->--}}
                                {{--<div class="default-text-block">--}}
                                    {{--<p><strong>Lorem ipsum dolor sit amet, per ei erat nonumy dissentias, qui dicat gloriatur in. Veniam iriure equidem mel no. Impedit periculis cum ea, has qualisque prodesset at. Mea ex mandamus pericula, elitr libris insolens ex. </strong></p>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius, prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore, tota dicit commune pro cu, mei at vero dicunt. Eum at enim putant petentium, an vim munere placerat. Has impetus intellegam at, at falli dolorum est, eum quot adipiscing ea. Sed te persius inermis vulputate. Pro ad wisi.</p>--}}
                                {{--</div>--}}

                                {{--<hr class="padd-bott-40">--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}
                                    {{--<div class="default-title">--}}
                                        {{--<h2>Challange</h2>--}}
                                    {{--</div>--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu esta dolor prima consequat id est ei cum ferri volumu scaevola amet vistla soluta labore, tota dicit communepro cu, mei at vero dicunt. Eum at enim putant petentium.</p>--}}
                                            {{--</div>--}}
                                            {{--<br>--}}
                                            {{--<ul class="dotted-list-style">--}}
                                                {{--<li>--}}
                                                    {{--<h4>Improve sales and operations and production planning:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu olta prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore tota dicit .</p>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<h4>Optimize the supply for perfect order planning:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu dolor prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore qco rbaish la vista.</p>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<h4>Determine the right inventory level:</h4>--}}
                                                    {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu dolor prima consequat id est, ei cum ferri volumus scaevola. Ei vis soluta labore, tota dicit .</p>--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}

                                        {{--</div>--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-7.jpg" alt=""></figure>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}

                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-8.jpg" alt=""></figure>--}}
                                        {{--</div>--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="default-title">--}}
                                                {{--<h2>Solution</h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu est prima consequat id est ei cum ferri volumu scaevola amet vi soluta iut labore, tota dicit communepro cu mei verdicunt. Eum dolor enim putant petentium. an vim munere placerat.</p>--}}
                                                {{--<p>intellegam at, at falli dolorum est, eum quot adipiscing ea. Sed te persius inermis vulputate. Pro ad wisi dolor amet dummy text.</p>--}}
                                            {{--</div>--}}

                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<!--Default Two Column-->--}}
                                {{--<div class="default-two-column">--}}
                                    {{--<div class="default-title">--}}
                                        {{--<h2>Result</h2>--}}
                                    {{--</div>--}}
                                    {{--<div class="row clearfix">--}}
                                        {{--<!--Text Column-->--}}
                                        {{--<div class="column text-column col-md-7 col-sm-6 col-xs-12">--}}
                                            {{--<div class="text">--}}
                                                {{--<p>Lorem ipsum dolor sit amet, per et soluta mucius vetu esta dolor prima consequat id est ei cum ferri volumu scaevola amet vistla soluta labore, tota dicit communepro cu.</p>--}}
                                                {{--<p><em>Here are some list of result:</em></p>--}}
                                            {{--</div>--}}

                                            {{--<ul class="#">--}}
                                                {{--<li>Lowered the risk of back-order by 95%</li>--}}
                                                {{--<li>Reduced lead time by 43%</li>--}}
                                                {{--<li>Increased stock for finished goods by 10%</li>--}}
                                                {{--<li>Decreased variability by 50%</li>--}}
                                            {{--</ul>--}}

                                        {{--</div>--}}
                                        {{--<!--Image Column-->--}}
                                        {{--<div class="column image-column col-md-5 col-sm-6 col-xs-12">--}}
                                            {{--<figure class="image-box"><img src="images/resource/project-image-9.jpg" alt=""></figure>--}}
                                        {{--</div>--}}

                                    </div>
                                </div>

                            </div>
                            <!--End Tab-->

                        </div>
                    </section>

                </div>
                <!--End Content Side-->



            </div>
        </div>
    </div>


    <!--Parallax Section-->
    <section class="parallax-style-two" style="background-image:url(images/parallax/image-2.jpg);">
        <div class="auto-container">
            <div class="text-center">
                <h2>Untuk Pertanyaan Lebih Lanjut</h2>
                <div class="text">Silahkan tekan Langganan dan Kontak</div>
                <a href="contact.html" class="theme-btn btn-style-one">Kontak Kami</a>
                <a href="#" class="theme-btn btn-style-two">Langganan</a>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Two 4th column-->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <div class="logo"><a href="index.html"><img src="images/logo-2.png" class="img-responsive" alt=""></a></div>
                                    <div class="text">
                                        <p>TConstuction Inc. Jember</p>
                                    </div>

                                    <ul class="contact-info">
                                        <li><span class="icon fa fa-map-marker"></span>Jl. Sudirman No. 45</li>
                                        <li><span class="icon fa fa-phone"></span>(+62 823 3384 970)</li>
                                        <li><span class="icon fa fa-envelope-o"></span>TConstruction@gmail.com</li>
                                    </ul>

                                    <div class="social-links-two clearfix">
                                        <a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                        <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a>
                                        <a href="#" class="linkedin img-circle"><span class="fa fa-linkedin"></span></a>
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <h2>Akses Cepat</h2>
                                    <ul>
                                        <li><a href="{{url('/')}}">Beranda</a></li>
                                        <li><a href="about-us.html">Tentang Kami</a></li>
                                        <li><a href="services.html">Servis</a></li>
                                        <li><a href="projects.html">Proyek</a></li>
                                        <li><a href="shop.html">Toko</a></li>
                                        <li><a href="contact.html">Hubungi Kami</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->



                    <!--Footer Column-->
                    <div class="col-lg-4 col-sm-6 col-xs-12 column">
                        <div class="footer-widget links-widget">
                            <h2>Kategori Populer</h2>
                            <ul class="popular-tags margin-top-30">
                                <li><a href="#" title="BUILD">BANGUN</a></li>
                                <li><a href="#" title="DESIGN">DESAIN</a></li>
                                <li><a href="#" title="FLOORING">LANTAI</a></li>
                                <li><a href="#" title="PAINTING">RUMAH</a></li>
                                <li><a href="#" title="PAVERS">PAVING</a></li>
                                <li><a href="#" title="PLUMBING">KONTRUKSI</a></li>
                                <li><a href="#" title="RENOVATION">RENOVASI</a></li>
                                <li><a href="#" title="REPAIRS">REPARASI</a></li>
                                <li><a href="#" title="SOLAR SYSTEMS">TAMAN</a></li>
                                <li><a href="#" title="TILING">GARASI</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!--Two 4th column End-->

        </div>


        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <!--Copyright-->
                <div class="copyright text-center">Copyright 2017 &copy; TConstruction Inc.</div>
            </div>
        </div>

    </footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-arrow-ascendant-point
"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

</html>