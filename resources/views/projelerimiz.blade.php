<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Özköse, Özköse Group, Özköse İnşaat, Ahmet Özköse, inşaat, turizm, madencilik, restorasyon, gıda, gayrimenkul, projeler, başarılı projeler">
<meta name="description" content="Özköse Group'un başarıyla tamamladığı projeler. Villa inşaatları, restorasyon işleri ve özel mimari projelerimizi keşfedin." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Özköse Group" />
<meta name="robots" content="index, follow" />
<title>Projelerimiz - Özköse Group</title>

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Projelerimiz - Özköse Group" />
<meta property="og:description" content="Özköse Group'un başarıyla tamamladığı projeler. Villa inşaatları, restorasyon işleri ve özel mimari projelerimizi keşfedin." />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ asset('images/proje-nilufer-villa/after-1.JPG') }}" />
<meta property="og:locale" content="tr_TR" />
<meta property="og:site_name" content="Özköse Group" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Projelerimiz - Özköse Group" />
<meta name="twitter:description" content="Özköse Group'un başarıyla tamamladığı projeler. Villa inşaatları, restorasyon işleri ve özel mimari projelerimizi keşfedin." />
<meta name="twitter:image" content="{{ asset('images/proje-nilufer-villa/after-1.JPG') }}" />

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Projelerimiz - Özköse Group",
  "description": "Özköse Group'un başarıyla tamamladığı projeler. Villa inşaatları, restorasyon işleri ve özel mimari projelerimizi keşfedin.",
  "url": "{{ url()->current() }}",
  "mainEntity": {
    "@type": "ItemList",
    "name": "Özköse Group Projeleri",
    "itemListElement": [
      {
        "@type": "CreativeWork",
        "name": "Villa Restorasyonu - Beşiktaş",
        "description": "Nilufer Villa restorasyon projesi",
        "image": "{{ asset('images/proje-nilufer-villa/after-1.JPG') }}"
      },
      {
        "@type": "CreativeWork", 
        "name": "Ahi Kent Villaları - Eyüp",
        "description": "Ahi Kent Villaları inşaat projesi",
        "image": "{{ asset('images/ahikent-villalari.jpg') }}"
      },
      {
        "@type": "CreativeWork",
        "name": "Sapanca Villa İnşaatı",
        "description": "Sapanca villa inşaat projesi",
        "image": "{{ asset('images/proje-sapanca/foto16.jpg') }}"
      }
    ]
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Ana Sayfa",
        "item": "{{ route('anasayfa') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Projelerimiz",
        "item": "{{ url()->current() }}"
      }
    ]
  }
}
</script>

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/color-switcher.css') }}" >
<link id="switcher-color" href="{{ asset('css/colors/default-color.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
</head>

<body class="ttm-one-page-site">

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="ttm-home" class="header ttm-header-style-classic">
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="{{ route('anasayfa') }}" title="Özköse" rel="home">
                                        <img id="logo-img" class="img-center" src="{{ asset('images/ozkose-logo.png') }}" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                        <div class="header-btn">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="{{ route('bize-ulasin') }}">Bize Ulaşın</a>
                                        </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li><a href="{{ route('anasayfa') }}">Ana sayfa</a></li>
                                            <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                                            <li><a href="{{ route('insaat') }}">Hizmetlerimiz</a></li>
                                            <li class="active"><a href="{{ route('projelerimiz') }}">Projelerimiz</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Başarıyla Tamamladığımız Projelerimiz</h1>
                            </div><!-- /.page-title-captions -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 res-991-pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2><strong>Projelerimiz</strong></h2>
                        <!-- <p class="mb-55">Below you'll see our best industrial projects.&nbsp; We are providing&nbsp;never ending customer support also provide guarantee a very high level of satisfaction for our clients.&nbsp;&nbsp;if you have a question&nbsp; don't hesitate to email us at <a href="#">info@example.com</a>&nbsp;for more details.</p> -->
                        <p class="mb-55">Özköse Group olarak, kuruluşumuzdan bu yana birçok başarılı projeye imza attık. Her bir projede müşteri memnuniyetini en üst düzeyde tutmayı ve kaliteli hizmet sunmayı ilke edindik. Çeşitli alanlarda hayata geçirdiğimiz projelerle sektörde güvenilir bir yer edindik ve bu başarılarımızı sizlerle paylaşmaktan gurur duyuyoruz. İşte başarıyla tamamladığımız bazı projelerimizi aşağıda detaylarıyla listeledik.</p>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-nilufer-villa/after-1.JPG') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Nilufer Villa | Beykoz | İstanbul" data-rel="prettyPhoto" href="{{ asset('images/proje-nilufer-villa/after-1.JPG') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('nulifer-elif-sah-villa-restorasyonu') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('nulifer-elif-sah-villa-restorasyonu') }}">Beşiktaş | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('nulifer-elif-sah-villa-restorasyonu') }}">Villa Restorasyonu</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/ahikent-villalari.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Ahi Kent Villaları" data-rel="prettyPhoto" href="{{ asset('images/ahikent-villalari.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('ahikent-villalari') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('ahikent-villalari') }}">Eyüp | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('ahikent-villalari') }}">Ahi Kent Villaları</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-sapanca/foto16.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Sapanca Villa İnşaatı" data-rel="prettyPhoto" href="{{ asset('images/proje-sapanca/foto14.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('sapanca-villa-insaati') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('sapanca-villa-insaati') }}">Sapanca | Sakarya</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('sapanca-villa-insaati') }}">Villa İnşaatı</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/beyoglu-turkhan/foto-1.png') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Türkhan Restorasyonu" data-rel="prettyPhoto" href="{{ asset('images/beyoglu-turkhan/foto-1.png') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('beyoglu-turkhan') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('beyoglu-turkhan') }}">Beyoğlu | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('beyoglu-turkhan') }}">Türkhan Restorasyonu</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-eski-eser/karakoy-eski-eser-2.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Eski Eser Yenileme" data-rel="prettyPhoto" href="{{ asset('images/proje-eski-eser/karakoy-eski-eser-2.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('yigma-yapi') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('yigma-yapi') }}">Beyoğlu | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('yigma-yapi') }}">Yığma Yapı Yenileme</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-trabya/model2.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Trabya Selma Türkeş Köşkü" data-rel="prettyPhoto" href="{{ asset('images/proje-trabya/foto18.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('tarabya-selma-turkes-kosku') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('tarabya-selma-turkes-kosku') }}">Sarıyer | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('tarabya-selma-turkes-kosku') }}">Selma Türkeş Köşkü</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{ route('mermerci-holding') }}"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-mermerci/foto1.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Mermerci Holding Villa İnşaatı" data-rel="prettyPhoto" href="{{ asset('images/proje-mermerci/foto1.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('mermerci-holding') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('mermerci-holding') }}">Sarıyer | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('mermerci-holding') }}">Mermerci Holding Villa İnşaatı</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{ route('iltekno-ofis') }}"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-iltekno/iltekno-01.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="İltek Ofis Yenileme Çalışması" data-rel="prettyPhoto" href="{{ asset('images/proje-iltekno/iltekno-01.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('iltekno-ofis') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('iltekno-ofis') }}">Şişli | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('iltekno-ofis') }}">İltekno Ofis Güçlendirmesi</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{ route('bogaz-villasi-restorasyonu') }}"> <img style="width: 400px; height: 400px;  object-fit: cover;" src="{{ asset('images/proje-sinan-cetin/foto.jpg') }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Boğaz Villası Restorasyonu" data-rel="prettyPhoto" href="{{ asset('images/proje-sinan-cetin/foto.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('bogaz-villasi-restorasyonu') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="{{ route('bogaz-villasi-restorasyonu') }}">Arnavutköy | İstanbul</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('bogaz-villasi-restorasyonu') }}">Boğaz Villası Restorasyonu</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="second-footer ttm-textcolor-white">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                       <div class="widget clearfix">
                           <div class="footer-logo">
                               <img id="footer-logo-img" class="img-center" src="{{ asset('images/footer-logo.png') }}" alt="footer-logo">
                           </div>
                           <p>Özköse Group olarak inşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul gibi bir çok alanda uzmanlaşmış köklü bir firmayız. Kaliteli hizmet ve müşteri memnuniyeti ile projelerinizi başarıyla gerçekleştiriyoruz. Deneyimli ekibimizle her zaman yanınızdayız. Daha fazla bilgi ve destek için bizimle iletişime geçebilirsiniz.</p>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                       <div class="widget widget_text clearfix">
                            <h3 class="widget-title">İletişim Bilgilerimiz</h3>
                                <div class="textwidget widget-text">
                                <h3 class="ttm-textcolor-skincolor"><a href="tel:+902122577226"><i class="fa fa-phone"> </i>  +90 (212) 257 72 26</a></h3>
                                <h3 class="ttm-textcolor-skincolor"><a href="fax:+902122577226"><i class="fa fa-print"> </i> Fax 0212 257 72 26</a></h3>
                                <p>Her türlü soru, öneri veya geri bildiriminiz için bizimle iletişime geçebilirsiniz. Size yardımcı olmaktan mutluluk duyarız. Bize hem e-posta yoluyla hem de telefon aracılığıyla ulaşabilirsiniz; hızlı ve etkili bir şekilde size dönüş yapacağız.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-15 mb-20" href="mailto:iletisim@ozkosegroup.com">Buradan E-Posta Gönderebilirsiniz</a>
                            </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                       <div class="widget widget_text clearfix">
                           <h3 class="widget-title">Çalışma Saatlerimiz</h3>
                           <div class="textwidget widget-text">
                               <div class="ttm-pricelistbox-wrapper ">
                                   <div class="ttm-timelist-block-wrapper">
                                       <ul class="ttm-timelist-block">
                                           <li>Pazartesi - Cuma <span class="service-time">09.00 - 17.00</span></li>
                                           <li>Cumartesi - Pazar<span class="service-time"><strong>Kapalı</strong></span></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="widget widget_nav_menu clearfix">
                          <h3 class="widget-title">Tüm Hizmetlerimiz</h3>
                           <ul id="menu-footer-services">
                               <li><a href="{{ route('insaat') }}">İnşaat</a></li>
                               <li><a href="{{ route('turizm') }}">Turizm</a></li>
                               <li><a href="{{ route('restorasyon') }}">Restorasyon</a></li>
                               <li><a href="{{ route('gida') }}">Gıda</a></li>
                               <li><a href="{{ route('gayrimenkul') }}">Gayrimenkul</a></li>
                               <li><a href="{{ route('madencilik') }}">Madencilik</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12 ttm-footer2-left d-flex justify-content-center">
                        <a href="https://harpysocial.com" target="_blank"><img src="{{ asset('images/harpy-logo-removebg-preview.png') }}" title="Harpy Social WebSite" alt="Harpy Social" class="harpy-social">Harpy Social © 2024</a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   <!--footer end-->

   <!--back-to-top start-->
   <a id="totop" href="#top">
       <i class="fa fa-angle-up"></i>
   </a>
   <!--back-to-top end-->
</div><!-- page end -->

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.js') }}"></script>    
    <script src="{{ asset('js/jquery-waypoints.js') }}"></script>    
    <script src="{{ asset('js/jquery-validate.js') }}"></script> 
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/numinate.min6959.js?ver=4.9.3') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('revolution/js/slider.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <!-- Javascript end-->
</body>
</html>
