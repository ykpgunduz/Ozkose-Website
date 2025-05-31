<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Özköse, Özköse Group, Özköse İnşaat, Ahmet Özköse, inşaat, turizm, madencilik, restorasyon, gıda, gayrimenkul, köşk restorasyonu, tarihi restorasyon">
<meta name="description" content="Tarabya Selma Türkeş Köşkü restorasyon projesi. Özköse Group'un başarıyla tamamladığı tarihi yapı restorasyon çalışması." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Özköse Group" />
<meta name="robots" content="index, follow" />

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Tarabya Selma Türkeş Köşkü Restorasyonu - Özköse Group" />
<meta property="og:description" content="Tarabya Selma Türkeş Köşkü restorasyon projesi. Özköse Group'un başarıyla tamamladığı tarihi yapı restorasyon çalışması." />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ asset('images/proje-trabya/model1.jpg') }}" />
<meta property="og:locale" content="tr_TR" />
<meta property="og:site_name" content="Özköse Group" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Tarabya Selma Türkeş Köşkü Restorasyonu - Özköse Group" />
<meta name="twitter:description" content="Tarabya Selma Türkeş Köşkü restorasyon projesi. Özköse Group'un başarıyla tamamladığı tarihi yapı restorasyon çalışması." />
<meta name="twitter:image" content="{{ asset('images/proje-trabya/model1.jpg') }}" />

<title>Tarabya Selma Türkeş Köşkü Restorasyonu - Özköse Group</title>
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

<!-- Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Project",
    "name": "Tarabya Selma Türkeş Köşkü Restorasyonu",
    "description": "Tarihi köşkün profesyonel restorasyon projesi",
    "provider": {
        "@type": "Organization",
        "name": "Özköse Group",
        "url": "{{ route('anasayfa') }}"
    },
    "image": "{{ asset('images/proje-trabya/model1.jpg') }}"
}
</script>
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
                                        <img id="logo-img" class="img-center" src="{{ asset('images/ozkose-logo.png') }}" alt="Özköse Group Logosu">
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
                                            <li><a href="/">Ana sayfa</a></li>
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
                                <h1 class="title">Trabya Selma Türkeş Köşkü</h1>
                            </div><!-- /.page-title-captions -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-pf-single-content-wrapper-innerbox -->
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image mt-100">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                        <div class="portfolio-img-slide owl-carousel owl-theme owl-loaded mt_70" data-item="1" data-nav="false" data-dots="false" data-auto="true">
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/model1.jpg') }}" alt="Tarabya Köşkü Model 1">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto1.jpg') }}" alt="Tarabya Köşkü Foto 1">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto2.jpg') }}" alt="Tarabya Köşkü Foto 2">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto3.jpg') }}" alt="Tarabya Köşkü Foto 3">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto4.jpg') }}" alt="Tarabya Köşkü Foto 4">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto5.jpg') }}" alt="Tarabya Köşkü Foto 5">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto6.jpg') }}" alt="Tarabya Köşkü Foto 6">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto7.jpg') }}" alt="Tarabya Köşkü Foto 7">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto8.jpg') }}" alt="Tarabya Köşkü Foto 8">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto9.jpg') }}" alt="Tarabya Köşkü Foto 9">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto10.jpg') }}" alt="Tarabya Köşkü Foto 10">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto11.jpg') }}" alt="Tarabya Köşkü Foto 11">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto12.jpg') }}" alt="Tarabya Köşkü Foto 12">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto13.jpg') }}" alt="Tarabya Köşkü Foto 13">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto14.jpg') }}" alt="Tarabya Köşkü Foto 14">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto15.jpg') }}" alt="Tarabya Köşkü Foto 15">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto16.JPG') }}" alt="Tarabya Köşkü Foto 16">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto17.JPG') }}" alt="Tarabya Köşkü Foto 17">
                                            </div>
                                            <div class="post-image">
                                                <img style="width: 500px; height: 500px; object-fit: cover;" src="{{ asset('images/proje-trabya/foto18.JPG') }}" alt="Tarabya Köşkü Foto 18">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ttm-pf-single-detail-box res-991-mt-30">
                                        <div class="ttm-portfolio-title">
                                            <h2 class="ttm-pf-detailbox-title">Proje Detayı</h2>
                                        </div>
                                        <div class="ttm-pf-detailbox">
                                            <ul class="ttm-pf-detailbox-list">
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-briefcase"></i>
                                                    <span class="ttm-pf-left-details">Proje İsmi </span>
                                                    <span class="ttm-pf-right-details">Selma Türkeş Köşkü</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-user"></i>
                                                    <span class="ttm-pf-left-details">Müşteri </span>
                                                    <span class="ttm-pf-right-details">Selma Türkeş</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-bookmark-o"></i>
                                                    <span class="ttm-pf-left-details">Kategori </span>
                                                    <span class="ttm-pf-right-details">İnşaat</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-calendar"></i>
                                                    <span class="ttm-pf-left-details">Tarih </span>
                                                    <span class="ttm-pf-right-details">2023 - 2024</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span class="ttm-pf-left-details">Süre  </span>
                                                    <span class="ttm-pf-right-details">2 Yıl</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-map-marker"></i>
                                                    <span class="ttm-pf-left-details">Konum </span>
                                                    <span class="ttm-pf-right-details">Trabya, Sarıyer/İstanbul</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-pf-single-content-wrapper-innerbox end-->
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Proje Hakkında</h4>
                        <p>Selma Türkeş Köşkü İnşaatı projemiz, Tarabya, Sarıyer/İstanbul'da yer alan ve 1979 yılında ünlü mimar Prof. Sedat Hakkı Erdem tarafından tasarlanmış bir köşkün yeniden inşasını kapsamaktadır. Koruma Kurulu kararı ile başlatılan bu proje, tarihi yapının özgün mimari değerlerini koruyarak modern yaşam standartlarına uygun hale getirilmesini amaçlamaktadır. 2023 yılında başladığımız bu proje, 2024 yılında da devam etmektedir.</p>
                        <p>Projeye başlarken, köşkün tarihi ve mimari değerlerini göz önünde bulundurarak, titiz ve özenli bir inşaat çalışması yürütmeyi hedefledik. Köşkün mevcut durumunu tespit ederek, gerekli güçlendirme ve yeniden inşa çalışmalarını planladık. Bu süreçte, köşkün orijinal dokusunu ve mimari özelliklerini korumaya büyük önem verdik. İnşaat sürecinde, köşkün yapısal elemanları güçlendirilerek, modern tekniklerle uyumlu hale getirildi. Özellikle depreme dayanıklılığı artırmak için temel ve taşıyıcı sistemlerde kapsamlı çalışmalar yapıldı. Aynı zamanda, köşkün estetik ve tarihi özelliklerini koruyarak, modern ve konforlu bir yaşam alanı oluşturmak amacıyla detaylı bir iç mekan tasarımı gerçekleştirildi.</p>
                        <p>İç mekan tasarımında, tarihi dokuyu yansıtan ve modern konforu sağlayan bir yaklaşım benimsendi. Açık planlı ve geniş yaşam alanları oluşturularak, doğal ışık kullanımına özen gösterildi. Tarihi ve doğal malzemeler tercih edilerek, köşkün özgün atmosferi korunurken, modern yaşam standartlarına uygun hale getirildi. Selma Türkeş Köşkü İnşaatı projesi, tarihi bir yapının, özgünlüğünü koruyarak modern ve kullanışlı bir yaşam alanına dönüştürülmesi sürecinde büyük bir başarı örneği olma yolunda ilerlemektedir. Projemiz, hem estetik hem de işlevsellik açısından mükemmel bir sonuç ortaya koyarak, tarihi yapının geleceğe taşınmasına katkı sağlamaktadır.</p>
                        <div class="pt-15 clearfix">
                            <div class="social-icons circle social-hover text-right">
                                <ul class="list-inline mb-0">
                                    <li class="social-instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tttm-pf-single-related-wrapper -->
                <div class="row ttm-pf-single-related-wrapper">
                    <div class="col-lg-12">
                        <h3 class="ttm-pf-single-related-title">Diğer Projelerimiz</h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img class="img-fluid" src="{{ asset('images/ahikent-villalari.jpg') }}" alt="Ahıkent Villaları Projesi"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Ahi Kent Villaları | İstanbul, Türkiye" data-rel="prettyPhoto" href="{{ asset('images/ahikent-villalari.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('ahikent-villalari') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a>Eyüp | İstanbul</a>
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
                                    <a href="#"> <img class="img-fluid" src="{{ asset('images/proje-trabya/model2.jpg') }}" alt="Tarabya Köşkü Model 2"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Selma Türkeş Köşkü | İstanbul, Türkiye" data-rel="prettyPhoto" href="{{ asset('images/proje-trabya/model2.jpg') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('tarabya-selma-turkes-kosku') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a>Sarıyer | İstanbul</a>
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
                                    <a href="#"> <img style="height: 235px;" class="img-fluid" src="{{ asset('images/proje-sapanca/model1.JPG') }}" alt="Sapanca Villa Projesi"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="İstanbul, Türkiye" data-rel="prettyPhoto" href="{{ asset('images/proje-sapanca/model1.JPG') }}"><i class="ti ti-search"></i></a>
                                        <a href="{{ route('sapanca-villa-insaati') }}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a>Sapanca | Sakarya</a>
                                </span>
                                <h2 class="featured-title"><a href="{{ route('sapanca-villa-insaati') }}">Müstakil Lüx Villa</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6"></div>
                </div>
                <!-- tttm-pf-single-related-wrapper end-->
            </div>
        </section>

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="second-footer ttm-textcolor-white">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                       <div class="widget clearfix">
                           <div class="footer-logo">
                               <img id="footer-logo-img" class="img-center" src="{{ asset('images/footer-logo.png') }}" alt="Özköse Group Footer Logo">
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
