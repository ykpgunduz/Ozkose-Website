<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Özköse, Özköse Group, Özköse İnşaat, Ahmet Özköse, inşaat, turizm, madencilik, restorasyon, gıda, gayrimenkul">
<meta name="description" content="İnşaat, turizm, madencilik, restorasyon, gıda ve gayrimenkul sektörlerinde yılların tecrübesi ve uzman ekibimizle hizmet sunuyoruz." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Özköse Group | Gayrimenkul</title>
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png') }}">
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
                                    <a class="home-link" href="/" title="Özköse" rel="home">
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
                                            <li><a href="/">Ana sayfa</a></li>
                                            <li><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
                                            <li class="active"><a href="{{ route('gayrimenkul') }}">Hizmetlerimiz</a></li>
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

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Özköse Group Olarak Sunduğumuz Hizmetler</h1>
                            </div><!-- /.page-title-captions -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main services-main-top">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <li><a href="{{ route('insaat') }}"> İnşaat </a></li>
                                <li><a href="{{ route('gida') }}"> Gıda </a></li>
                                <li><a href="{{ route('madencilik') }}"> Madencilik </a></li>
                                <li><a href="{{ route('turizm') }}">Turizm </a></li>
                                <li><a href="{{ route('restorasyon') }}"> Restorasyon </a></li>
                                <li class="active"><a href="{{ route('gayrimenkul') }}"> Gayrimenkul </a></li>
                            </ul>
                        </aside>
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">İletişim Bilgileri</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="fa fa-map-marker"></i>Bebek Mahallesi<br>Küçük Bebek Caddesi<br>No: 43/1 Beşiktaş/İstanbul</li>
                                <li><i class="ti ti-alarm-clock"></i>Pazartesi-Cuma<br>09:00-17:00</li>
                                <li><i class="fa fa-phone"></i><a href="tel:+902122577226">+90 (212) 257 72 26</a></li>
                                <li><i class="fa fa-print"></i><a href="fax:+902122577226">Fax: 0212 257 72 26</a></li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:iletisim@ozkosegroup.com" target="_blank">iletisim@ozkosegroup.com</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-9 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <h4>Gayrimenkul Hizmeti</h4>
                                <div class="mb-35">
                                    <p>Gayrimenkul hizmeti, satış, kiralama ve yatırım danışmanlığı gibi alanlarda müşterilerimize destek sağlamayı amaçlar. Geniş bir gayrimenkul portföyü ile müşterilerimize çeşitli seçenekler sunarak, ihtiyaçlarına uygun mülkleri bulmalarını sağlıyoruz. Profesyonel danışmanlarımız, gayrimenkul konusunda müşterilerimize en iyi hizmeti sunmak için çalışıyor. Yatırım, satış ve kiralama konularında uzman desteği ile müşterilerimizin gayrimenkul ihtiyaçlarına çözüm üretiyoruz.</p>
                                    <p>Müşteri memnuniyetini ön planda tutarak, güvenilir satış ve kiralama işlemleri gerçekleştiriyoruz. Kaliteli hizmet anlayışımızla müşterilerimize güven veriyor ve gayrimenkul süreçlerini kolaylaştırıyoruz. Ayrıca, gayrimenkulünüzün değerini belirlemek ve doğru fiyatlandırma stratejileri oluşturmak için pazar analizi yapıyoruz. Doğru değerleme ile satış veya kiralama sürecinizi daha verimli hale getiriyoruz.</p>
                                    <p>Gayrimenkul ihtiyaçlarınızı ve projelerinizi bizimle paylaşarak, size en iyi hizmeti sunmak için buradayız.</p>                              
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="ttm_single_image-wrapper mb-35">
                                        <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/hizmetler/gayrimenkul-hizmeti-1.jpg') }}" alt="Proje Görseli">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ttm_single_image-wrapper mb-35">
                                        <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/hizmetler/gayrimenkul-hizmeti-2.jpg') }}" alt="Proje Görseli">
                                    </div>
                                </div>
                            </div>
                            <!-- acadion -->
                            <div class="accordion mb-35">
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey active">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Geniş Portföy</a></div>
                                    <div class="toggle-content">
                                        <p>Müşterilerimize geniş bir gayrimenkul portföyü sunarak, ihtiyaçlarına uygun mülkleri bulmalarını sağlıyoruz. Konut, iş yeri, arsa gibi çeşitli gayrimenkul seçenekleri sunmaktayız.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Profesyonel Danışmanlık</a></div>
                                    <div class="toggle-content">
                                        <p>Deneyimli ve uzman danışmanlarımız, müşterilerimize gayrimenkul konusunda en iyi danışmanlık hizmetini sunmayı hedefliyor. Yatırım, satış ve kiralama konularında destek sağlıyoruz.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Kaliteli Hizmet</a></div>
                                    <div class="toggle-content">
                                        <p>Müşterilerimizin memnuniyetini ön planda tutarak, kaliteli gayrimenkul hizmetleri sunuyoruz. Güvenilir satış ve kiralama işlemleri ile müşterilerimize güven veriyoruz.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Pazar Analizi ve Değerleme</a></div>
                                    <div class="toggle-content">
                                        <p>Gayrimenkulünüzün değerini belirlemek ve doğru fiyatlandırma stratejileri oluşturmak için pazar analizi yapıyoruz. Doğru değerleme ile satış veya kiralama sürecinizi daha verimli hale getiriyoruz.</p>
                                    </div>
                                </div><!-- toggle end -->
                            </div><!-- acadion end-->                                                                               
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


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
    <script src="{{ asset('js/numinate.min6959.js?ver=4.9.3"></script>
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
