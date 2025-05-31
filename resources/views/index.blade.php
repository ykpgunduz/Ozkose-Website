<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Özköse, Özköse Group, Özköse İnşaat, Ahmet Özköse, inşaat, turizm, madencilik, restorasyon, gıda, gayrimenkul, ana sayfa, proje geliştirme">
    <meta name="description" content="İnşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul sektörlerinde yılların tecrübesi ve uzman ekibimizle hizmet sunuyoruz." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Özköse Group" />
    <meta name="robots" content="index, follow" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Özköse Group - İnşaat, Turizm, Madencilik, Restorasyon Hizmetleri" />
    <meta property="og:description" content="İnşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul sektörlerinde yılların tecrübesi ve uzman ekibimizle hizmet sunuyoruz." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('images/ekip.jpg') }}" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:site_name" content="Özköse Group" />
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Özköse Group - İnşaat, Turizm, Madencilik, Restorasyon Hizmetleri" />
    <meta name="twitter:description" content="İnşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul sektörlerinde yılların tecrübesi ve uzman ekibimizle hizmet sunuyoruz." />
    <meta name="twitter:image" content="{{ asset('images/ekip.jpg') }}" />
    
    <title>Özköse Group</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/color-switcher.css') }}" >
    <link id="switcher-color" href="{{ asset('css/colors/default-color.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Özköse Group",
        "description": "İnşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul sektörlerinde hizmet veren şirket",
        "foundingDate": "1993",
        "url": "{{ route('anasayfa') }}",
        "logo": "{{ asset('images/ozkose-logo.png') }}",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "TR"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+90-212-257-72-26",
            "contactType": "customer service"
        },
        "sameAs": [
            "{{ route('anasayfa') }}"
        ]
    }
    </script>
</head>

<body class="ttm-one-page-site">

    <!--page start-->
    <div class="page">

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
                                            <li class="active"><a href="{{ route('anasayfa') }}">Ana sayfa</a></li>
                                            <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                                            <li><a href="{{ route('insaat') }}">Hizmetlerimiz</a></li>
                                            <li><a href="{{ route('projelerimiz') }}">Projelerimiz</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
        </header><!--header end-->

        <section class="video-slider">
            <div class="custom-bannerVideo" id="slideShow">
                <video id="video1" src="{{ asset('img/video1.mp4') }}" autoplay muted loop playsinline class="active" data-loaded="true"></video>
                <video id="video2" src="{{ asset('img/video2.mp4') }}" autoplay muted loop playsinline data-loaded="false"></video>
                <video id="video3" src="{{ asset('img/video3.mp4') }}" autoplay muted loop playsinline data-loaded="false"></video>
                <video id="video4" src="{{ asset('img/video4.mp4') }}" autoplay muted loop playsinline data-loaded="false"></video>
                <video id="video5" src="{{ asset('img/video5.mp4') }}" autoplay muted loop playsinline data-loaded="false"></video>
                <video id="video6" src="{{ asset('img/video6.mp4') }}" autoplay muted loop playsinline data-loaded="false"></video>
            </div>
            <div class="overlay"></div> <!-- Karartı efekti için overlay -->
            <div class="custom-container">
                <div class="custom-content">
                    <div class="custom-bannerText" id="slideShowText">
                        <div class="active">
                            <h2>İnşaat</h2>
                            <p>Yılların tecrübesi ve uzman ekibimizle, her türlü inşaat projesinde yanınızdayız. Dayanıklı, estetik ve fonksiyonel yapılar inşa ederek, geleceğe güvenle bakmanızı sağlıyoruz. Hayallerinizi gerçeğe dönüştürüyoruz.</p>
                        </div>
                        <div>
                            <h2>Turizm</h2>
                            <p>Turizm sektöründe sunduğumuz kaliteli hizmetlerle, size ve sevdiklerinize unutulmaz tatil deneyimleri yaşatıyoruz. Otel, tur ve gezi planlamaları ile her anınızı özel kılıyoruz. Dünyanın güzelliklerini birlikte keşfedelim.</p>
                        </div>
                        <div>
                            <h2>Madencilik</h2>
                            <p>Madencilik sektöründe, çevre dostu yöntemlerle doğal kaynakları çıkarıyor ve işliyoruz. Güvenlik ve verimliliği ön planda tutarak, sektörün ihtiyaçlarına uygun çözümler üretiyoruz. Geleceğe değer katıyoruz.</p>
                        </div>
                        <div>
                            <h2>Restorasyon</h2>
                            <p>Tarihi ve kültürel mirasımızı koruma konusunda uzmanız. Restorasyon projelerimizle, eski yapıları aslına uygun şekilde yenileyerek, gelecek nesillere aktarılmasını sağlıyoruz. Değerlerimizi yaşatıyoruz.</p>
                        </div>
                        <div>
                            <h2>Gıda</h2>
                            <p>Gıda sektöründe, taze ve doğal ürünlerle sağlıklı beslenmeyi destekliyoruz. Güvenilir üretim süreçlerimiz ve lezzetli ürünlerimizle, sofralarınıza mutluluk katıyoruz. Doğanın en güzel hediyelerini sizlere sunuyoruz.</p>
                        </div>
                        <div>
                            <h2>Gayrimenkul</h2>
                            <p>Gayrimenkul sektöründe, konforlu ve modern yaşam alanları sunuyoruz. Satış, kiralama ve danışmanlık hizmetlerimizle, size en uygun gayrimenkul çözümlerini sağlıyoruz. Hayalinizdeki evi bulmanıza yardımcı oluyoruz.</p>
                        </div>
                    </div>
                </div>
                <ul class="custom-controls">
                    <li onclick="prevSlide();"><img src="{{ asset('img/left.png') }}" alt="sol" /></li>
                    <li onclick="nextSlide();"><img src="{{ asset('img/right.png') }}" alt="sağ" /></li>
                </ul>
            </div>
        </section>
        
    <!--site-main start-->
    <div class="site-main">

        <!--about2-section-->
        <section id="about" class="ttm-row about2-section break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-5">
                            <!-- <img class="img-fluid" src="{{ asset('images/single-img-two.png') }}" alt="Proje Görseli"> -->
                            <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/ekip.jpg') }}" alt="Ekibimiz">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="pt-20">
                            <div class="row">
                                <div class="col-lg-4 max-content">
                                    <div class="highlight-text">
                                        <h2 style="user-select: none;">1993</h2>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <!-- section title -->
                                    <div class="section-title with-desc mt-10 pb-10 clearfix">
                                        <div class="title-header">
                                            <h5>30 YILLIK TECRÜBE</h5>
                                            <h2 class="title">Başarı Hikayemiz</h2>
                                        </div>
                                    </div><!-- section title end -->
                                </div>
                            </div>
                            <p>Müşterilerimizin konforunu sağlamak ve en hızlı, en uygun fiyatlı yardımı sunmak için çalışıyoruz. Kalite ve güvenlik konularında kendimize güveniyoruz; bu yüzden yaptığımız işlerin arkasında duruyoruz. İşimize ev bakımı konusunda uzmanlaşmış bir şirket olarak başladık ve başarılı çalışmalarımız sonucunda hizmet yelpazemizi genişlettik. Şimdi, eksiksiz hizmet anlayışımızla daha geniş bir alanda insanlara yardımcı olmanın gururunu yaşıyoruz. Müşterilerimize en iyi kaynakları sunarak onlara destek olmaktan mutluluk duyuyoruz.
                            </p>
                            <!-- row-->
                            <div class="row ttm-fid-row-wrapper">
                                <div class="col-md-4 col-sm-4">
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-briefcase"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "70"
                                                        data-interval         = "1"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                    >250</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Başarılı Projeler</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-user"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "120"
                                                        data-interval         = "1"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                    >120</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Memnun Kişiler</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-cup"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "25"
                                                        data-interval         = "1"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                    >25</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Yılların Tecrübesi</h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- about-section end -->

        <!-- service-section -->
        <section id="services" class="ttm-row services3-section bg-img4 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5>Sunduğumuz Hizmetler</h5>
                                <h2 class="title">Hangi Hizmete İhtiyacınız Var?</h2>
                            </div>
                            <div class="title-desc">Özköse Group olarak ihtiyacınız olabilecek bazı hizmetleri aşağıda listeledik. Eğer bu hizmetlerden birine ihtiyacınız varsa bizimle iletişime geçebilirsiniz.</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="blog-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/restorasyon-hizmeti.jpg') }}" alt="Restorasyon">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('restorasyon') }}" tabindex="-1">Restorasyon Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Eski binaların ve yapıların restorasyonu ve korunması konularında uzmanız. Bizimle iletişime geçerek, restorasyon ihtiyaçlarınızı ve projelerinizi paylaşabilirsiniz. Size en iyi hizmeti sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('restorasyon') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/insaat-hizmeti-1.jpg') }}" alt="İnşaat">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('insaat') }}" tabindex="-1">İnşaat Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Konutlar, ticari yapılar ve endüstriyel tesisler gibi çeşitli projelerde inşaat hizmeti sunmaktayız. Bizimle iletişime geçerek, inşaat ihtiyaçlarınızı ve projelerinizi paylaşabilirsiniz. Size en iyi hizmeti sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('insaat') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/gida-hizmeti-1.jpg') }}" alt="Gıda">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('gida') }}" tabindex="-1">Gıda Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Özellikle kuru meyve ihracatında uzmanız ve dünya pazarlarına en kaliteli ürünleri sunmaktayız. Bizimle iletişime geçerek, gıda ihtiyaçlarınızı ve projelerinizi paylaşabilirsiniz. Size en iyi hizmeti sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('gida') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/madencilik-hizmeti-1.jpg') }}" alt="Madencilik">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('madencilik') }}" tabindex="-1">Madencilik Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Altın, kömür, demir gibi farklı maden türlerinin çıkarılmasında hizmet sunmaktayız. Madencilik ihtiyaçlarınızı ve projelerinizi bizimle paylaşabilirsiniz, size en iyi hizmeti en hızlı şekilde sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('madencilik') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/turizm-hizmeti-1.jpg') }}" alt="Turizm">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('turizm') }}" tabindex="-1">Turizm Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Turistik turlar, konaklama düzenlemeleri ve etkinlik organizasyonları gibi çeşitli hizmetler sunmaktayız. Turizm ihtiyaçlarınızı ve projelerinizi bizimle paylaşarak, size en iyi hizmeti sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('turizm') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/hizmetler/gayrimenkul-hizmeti-1.jpg') }}" alt="Gayrimenkul">
                            </div>
                            <div class="ttm-box-bottom-content box-shadow2">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{ route('gayrimenkul') }}" tabindex="-1">Gayrimenkul Hizmeti</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Müşteri memnuniyetini ön planda tutarak, güvenilir satış ve kiralama işlemleri gerçekleştiriyoruz. Gayrimenkul ihtiyaçlarınızı ve projelerinizi bizimle paylaşarak, size en iyi hizmeti sunmak için buradayız.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15" href="{{ route('gayrimenkul') }}">DETAYLI BİLGİ<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-40 mb-35 text-center">
                            <h6 class="ttm-textcolor-grey">Eğer aradığınız hizmeti bulamadıysanız endişelenmeyin. <strong><a class="ttm-textcolor-dark" href="{{ route('insaat') }}">Tüm hizmetleri keşfedin</a></strong></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services-section end-->

        <!--company-template-section-->
        <section id="projects" class="ttm-row company-template-section bg-img10 ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- template-content -->
                        <div class="template-content text-center ttm-bg ttm-bgcolor-skincolor pt-40 pb-15 mt_130 res-991-mt-0">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-darkgrey ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-rounded mb-15"> 
                                    <i class="flaticon-handyman-tools"></i>
                                </div>
                                <div class="section-title title-style-center_text without-sep-line clearfix">
                                    <div class="title-header">
                                        <h5>BAŞARIYLA TAMAMLANDI</h5>
                                        <h2 class="title">Bazı Projelerimiz</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- template-content end -->
                    </div>
                    <div class="col-md-3"></div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-bgcolor-white pl-15 pr-15 pt-15 pb-15">
                            <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img style="width: 100%; height: 300px;  object-fit: cover;" class="img-fluid" src="{{ asset('images/ahikent-villalari.jpg') }}" alt="Ahikent Villaları"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="ttm-box-view-content-inner">
                                                <div class="featured-content featured-content-portfolio">
                                                    <span class="category">
                                                        <a href="{{ route('ahikent-villalari') }}">Eyüp, İstanbul | 2010</a>
                                                    </span>
                                                    <h2 class="featured-title"><a href="{{ route('ahikent-villalari') }}">Ahikent Villaları</a></h2>
                                                </div>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div><!-- featured-imagebox -->
                                </div>
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img style="width: 100%; height: 300px;  object-fit: cover;" class="img-fluid" src="{{ asset('images/proje-sapanca/model1.JPG') }}" alt="Sapanca Projesi"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="ttm-box-view-content-inner">
                                                <div class="featured-content featured-content-portfolio">
                                                    <span class="category">
                                                        <a href="{{ route('sapanca-villa-insaati') }}">Sapanca, Sakarya | 2022</a>
                                                    </span>
                                                    <h2 class="featured-title"><a href="{{ route('sapanca-villa-insaati') }}">Müstakil Villa İnşaatı</a></h2>
                                                </div>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div><!-- featured-imagebox -->
                                </div>
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img style="width: 100%; height: 300px;  object-fit: cover;" class="img-fluid" src="{{ asset('images/proje-trabya/model2.jpg') }}" alt="Trabya Projesi"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="ttm-box-view-content-inner">
                                                <div class="featured-content featured-content-portfolio">
                                                    <span class="category">
                                                        <a href="{{ route('tarabya-selma-turkes-kosku') }}">Sarıyer, İstanbul | 2023 - 2024</a>
                                                    </span>
                                                    <h2 class="featured-title"><a href="{{ route('tarabya-selma-turkes-kosku') }}">Selma Türkeş Köşkü</a></h2>
                                                </div>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div><!-- featured-imagebox -->
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- template-content -->
                        <div class="template-content text-center ttm-bg ttm-bgcolor-skincolor pt-55 pb-80 res-991-pb-50">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-15 res-991-mb-0" href="{{ route('projelerimiz') }}">TÜM PROJELERİMİZ</a>
                            </div>
                        </div><!-- template-content end -->
                    </div>
                    <div class="col-md-3"></div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- company-template end -->

        <!--processbox-section-->
        <section class="ttm-row processbox-section break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5>NASIL ÇALIŞIYORUZ?</h5>
                                <h2 class="title">4 Adımda Size Yardımcı Olalım</h2>
                            </div>
                            <div class="title-desc">Bu süreçte doğru kararlar alabilmek için uzman danışmanlık hizmeti almak önemlidir.</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div><!-- row end-->
                <div class="row"><!-- row -->
                    <div class="col-lg-12">
                        <div class="ttm-processbox-wrapper">
                            <div class="ttm-processbox">
                                <div class="ttm-box-image">
                                    <img class="img-fluid" style="padding: 30px;" src="{{ asset('images/adim1.svg') }}" alt="Adım 1">
                                    <div class="process-num">
                                        <span class="number">01</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title"><h5>İhtiyaç Duyulan Hizmet</h5></div>
                                    <div class="ttm-box-description">İlk adım olarak, ihtiyaç duyulan hizmetleri belirlemek önemlidir. Bu aşamada, mevcut konut durumu, bütçe ve tercihler göz önünde bulundurularak doğru hizmetler seçilmelidir.</div>
                                </div>
                            </div>
                            <div class="ttm-processbox">
                                <div class="ttm-box-image">
                                    <img style="padding: 45px;" class="img-fluid" src="{{ asset('images/adim2.svg') }}" alt="Adım 2">
                                    <div class="process-num">
                                        <span class="number">02</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title"><h5>Profesyonel Danışmanlık</h5></div>
                                    <div class="ttm-box-description">Bizim gibi uzmanlar, size uygun hizmeti seçme, finansal planlama ve yasal süreçler konusunda destek sunarak süreci kolaylaştırır.</div>
                                </div>
                            </div>
                            <div class="ttm-processbox">
                                <div class="ttm-box-image">
                                    <img style="padding: 30px;" class="img-fluid" src="{{ asset('images/adim3.svg') }}" alt="Adım 3">
                                    <div class="process-num">
                                        <span class="number">03</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title"><h5>Detaylı Planlama</h5></div>
                                    <div class="ttm-box-description">Detaylı bir planlama yapmak başarılı bir sonuç için önemlidir. Bütçe planlaması, konutun fiziki durumu ve gerekli işlemlerin zamanlaması gibi konuları içeren detaylı bir plan, sürecin sorunsuz ilerlemesini sağlar.</div>
                                </div>
                            </div>
                            <div class="ttm-processbox">
                                <div class="ttm-box-image">
                                    <img style="padding: 30px;" class="img-fluid" src="{{ asset('images/adim4.svg') }}" alt="Adım 4">
                                    <div class="process-num">
                                        <span class="number">04</span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title"><h5>Harekete Geçme</h5></div>
                                    <div class="ttm-box-description">Belirlenen plan doğrultusunda harekete geçerek süreci tamamlamak için son adımdır. Gerekli tüm işlemleri titizlikle takip ederek, sizin için en uygun hizmeti; profesyonel bir şekilde uzman ekibimizle başarıyla tamamlarız.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--processbox-section end-->

        <section class="ttm-row testimonial2-section bg-img4 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title title-style-center_text pb-90 clearfix">
                            <div class="title-header">
                                <h5>GÖRÜŞLER</h5>
                                <h2 class="title">Bizden Hizmet Alanlar</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row res-991-mlr-15">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="col-bg-img-four ttm-col-bgimage-yes pb-20">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content ttm-textcolor-white">
                                <div class="testimonial-slide owl-carousel mt_60" data-item="1" data-nav="false" data-dots="false" data-auto="false">
                                    
                                    <div class="testimonials style2"> 
                                        <div class="testimonial-content">
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img">
                                                    <img class="img-center" src="{{ asset('images/user.png') }}" alt="Kullanıcı">
                                                </div>
                                            </div>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <blockquote>Restorasyon projemizde Özköse Yapı İnşaat'ın uzman ekibiyle çalışmak büyük bir şanstı. Binamızın tarihi dokusunu koruyarak modern bir görünüme kavuşturdular. Ekip çalışmaları ve kaliteli hizmetleri için teşekkür ederiz.</blockquote>
                                            <div class="testimonial-caption">
                                                <h6>Yaren Özsoy</h6>
                                                <label>İzmir</label>
                                            </div>
                                        </div>
                                    </div><!-- testimonials end -->
                                    
                                    <div class="testimonials style2"> 
                                        <div class="testimonial-content">
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img">
                                                    <img class="img-center" src="{{ asset('images/user.png') }}" alt="Kullanıcı">
                                                </div>
                                            </div>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <blockquote>Gayrimenkul yatırımı yaparken, karşılaştığım zorlukları bu firma sayesinde aştım. Uzman danışmanlarının yönlendirmeleri ve analizleri sayesinde doğru kararlar aldım.</blockquote>
                                            <div class="testimonial-caption">
                                                <h6>Recep Ünal</h6>
                                                <label>Ankara</label>
                                            </div>
                                        </div>
                                    </div><!-- testimonials end -->
                                    
                                    <div class="testimonials style2">
                                        <div class="testimonial-content">
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img">
                                                    <img class="img-center" src="{{ asset('images/user.png') }}" alt="Kullanıcı">
                                                </div>
                                            </div>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div> 
                                            <blockquote>Özköse İnşaat, projemizi zamanında ve istediğimiz kalitede tamamladı. Profesyonel yaklaşımları ve işlerindeki titizlikleri sayesinde güvenilir bir iş çıkardılar. İnşaat hizmetleri için tercih ettiğimiz için memnunuz.</blockquote>
                                            <div class="testimonial-caption">
                                                <h6>Emrecan Özçelik</h6>
                                                <label>İstanbul</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
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
    <script src="{{ asset('js/slider.js') }}"></script>
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
    <!-- Javascript end-->
</body>
</html>
