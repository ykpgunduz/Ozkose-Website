<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Özköse, Özköse Group, Özköse İnşaat, Ahmet Özköse, inşaat, turizm, madencilik, restorasyon, gıda, gayrimenkul, hakkımızda, şirket tarihçesi, Bera Yapı">
<meta name="description" content="Özköse Group hakkında bilgiler. 1993'ten bu yana inşaat sektöründe hizmet veren köklü firmamızın 30 yıllık tecrübesi." />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Özköse Group" />
<meta name="robots" content="index, follow" />

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Hakkımızda - Özköse Group" />
<meta property="og:description" content="Özköse Group hakkında bilgiler. 1993'ten bu yana inşaat sektöründe hizmet veren köklü firmamızın 30 yıllık tecrübesi." />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ asset('images/ekip.jpg') }}" />
<meta property="og:locale" content="tr_TR" />
<meta property="og:site_name" content="Özköse Group" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Hakkımızda - Özköse Group" />
<meta name="twitter:description" content="Özköse Group hakkında bilgiler. 1993'ten bu yana inşaat sektöründe hizmet veren köklü firmamızın 30 yıllık tecrübesi." />
<meta name="twitter:image" content="{{ asset('images/ekip.jpg') }}" />

<title>Özköse Group | Hakkımızda</title>
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
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
    "@type": "Organization",
    "name": "Özköse Group",
    "description": "1993'ten bu yana inşaat sektöründe hizmet veren köklü firma",
    "foundingDate": "1993",
    "url": "{{ route('anasayfa') }}",
    "logo": "{{ asset('images/ozkose-logo.png') }}",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "TR"
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
                                            <li class="active"><a href="{{ route('hakkimizda') }}">Hakkımızda</a></li>
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

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Özköse Group Hakkında</h1>
                            </div><!-- /.page-title-captions -->
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- about-section -->
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/ekip.jpg') }}" alt="Özköse Group Ekibi">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-20">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>ÖZKÖSE GROUP'A HOŞGELDİNİZ</h5>
                                    <h2 class="title">30 Yıllık Tecrübemizle Hizmetinizdeyiz</h2>
                                </div>
                            </div><!-- section title end -->
                            <p class="mb-30">Firmamız Bera Yapı İnşaat adıyla 1993 yılında Malatya'da Merhum Yalçın Özköse tarafından kurulmuştur. Kurulduğumuz günden bu yana, ulaştırma projelerinden baraj ve isale hattı projelerine, bina ve spor kompleks projelerinden endüstri tesislerinin altyapı projelerine ve geri dönüşüm fabrikalarına kadar birçok projeyi başarıyla tamamladık. Her projede benimsediğimiz temel ilke, müşterilerimize en yüksek kalitede hizmet sunmak ve projeleri zamanında ve bütçeye uygun bir şekilde teslim etmektir. Geniş bir coğrafyada büyük ulaşım ve yatırım projeleri gerçekleştiren firmamız, yenilikçi ve sürdürülebilir bir gelecek hedeflemekte olup, bu doğrultuda dinamik yatırımları ile hızlı bir şekilde büyümeye devam etmektedir. Bera Yapı İnşaat'ın bugüne kadar elde ettiği başarılar, geleceğe olan inancımızı ve hedeflerimizi daha da güçlendirmektedir.</p>
                            <!-- <p>Özköse Group | CEO : Ahmet Özköse</p> -->
                            <span><img style="width: 170px; margin-top: -38px;" src="{{ asset('images/imza.png') }}" alt="ttm_single_image-wrapper"></span>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>

        <!-- about-section -->
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-20">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">6 Şubat Depremi</h2>
                                </div>
                            </div><!-- section title end -->
                                <p class="mb-30">6 Şubat'ta meydana gelen ve Malatya'mızı derinden etkileyen deprem sonrasında, Özköse Group olarak yardım ve desteklerimizi sürdürmekteyiz. Depremin yarattığı yıkımın ardından, Malatya'nın yeniden ayağa kalkması için çeşitli yardım faaliyetleri organize ederek, depremzedelerin yanında olmaya devam ediyoruz. Bu süreçte, acil ihtiyaçların karşılanması ve kalıcı çözümler üretilmesi adına, barınma, gıda, sağlık ve eğitim gibi temel konularda desteğimizi esirgemiyoruz. Yönetim Kurulu Başkanımız Ahmet Özköse'nin liderliğinde, yardımlarımızı hızlı ve etkili bir şekilde ulaştırarak, Malatya'nın tekrar güçlü bir şekilde ayağa kalkması için çalışıyoruz. Yardım ve destek faaliyetlerimiz, sadece depremin hemen ardından değil, uzun vadeli projelerle de devam edecektir.</p>
                                <p>Amacımız, Malatya'nın ve depremden etkilenen diğer bölgelerin normal yaşam koşullarına en kısa sürede dönmesini sağlamaktır. Bu doğrultuda, sosyal sorumluluk bilinciyle hareket ederek, toplumumuzun her zaman yanında olmaya devam edeceğiz. Başkanımız Ahmet Özköse'nin ve Özköse Group'un bu özverili çalışmaları, toplumumuzun birlik ve dayanışma içinde daha güçlü olmasına katkı sağlamaktadır. Yardımlarımızın ve projelerimizin, Malatya'mız ve ülkemiz için hayırlı olmasını diliyoruz.</p>
                            <!-- <p>Özköse Group | CEO : Ahmet Özköse</p> -->
                            <span><img style="width: 160px;" src="{{ asset('images/imza.png') }}" alt="ttm_single_image-wrapper"></span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/deprem.jpg') }}" alt="6 Şubat Depremi Yardım Çalışmaları">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                </div><!-- row end-->
            </div>
        </section>

        <!-- about-section -->
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <img style="border-radius: 10px;" class="img-fluid" src="{{ asset('images/ihsan-koca.jpg') }}" alt="İhsan Koca ile Görüşme">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-20">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">Deprem Felaketi Sonrası Görüşme ve Projelerimiz</h2>
                                </div>
                            </div><!-- section title end -->
                            <p class="mb-30">Türkiye'yi derinden etkileyen depremin ardından, Malatya'da yaşanan sorunları değerlendirmek ve çözüm yolları bulmak amacıyla önemli bir toplantı gerçekleştirdik. Bu anlamlı görüşme; Malatya Milletvekilimiz İhsan Koca, Özköse Group adına ben Ahmet Özköse tarafından düzenlendi. Depremin etkileri sadece fiziksel yıkımla sınırlı kalmamış, aynı zamanda toplumsal ve ekonomik alanda da derin yaralar açmıştır. Bu süreçte, Malatya'da yaşanan sıkıntıları ve ihtiyaçları yerinde tespit ederek, daha etkili ve hızlı çözümler üretebilmek için Milletvekilimiz İhsan Koca ile bir araya geldik. Görüşmemizde, öncelikli olarak depremzedelerin barınma, sağlık, eğitim ve geçim gibi temel ihtiyaçlarını ele aldık. Özellikle barınma konusunda yaşanan sıkıntıların giderilmesi için kısa vadeli ve uzun vadeli çözümler üzerinde durduk. Çadır ve konteyner kentlerin yanı sıra, kalıcı konut projelerinin hızlandırılması gerektiğini vurguladık. Toplantının sonunda, Malatya'nın yeniden inşa sürecinde birlik ve beraberlik içinde hareket etmenin, dayanışma ruhunun önemini vurguladık. Milletvekilimiz İhsan Koca'nın da desteğiyle, Malatya'nın eski günlerine kavuşması için var gücümüzle çalışacağımızı belirttik. Bu anlamlı görüşmenin sonuçlarının, Malatyamız için hayırlı olmasını temenni ediyor, depremde hayatını kaybeden vatandaşlarımıza Allah'tan rahmet, yaralılarımıza acil şifalar diliyoruz. Bu zor günleri hep birlikte aşacağımıza olan inancımız tamdır.</p>
                            <p>Özköse Group | CEO : Ahmet Özköse</p>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>

       <!-- about-section -->
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <!-- First Card -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="card" style="border: none;">
                            <img style="width: 500px; height: 500px; object-fit: cover; border-radius: 10px;" class="card-img-top img-fluid" src="{{ asset('images/bulent-tufekci.jpg') }}" alt="Third Image">
                            <div class="card-body">
                                <h5 class="card-title">Sayın Bülent Tüfekçi</h5>
                                <p class="card-text">Önceki dönem Gümrük ve Ticaret Bakanı olarak görev yapmış ve şu an da Malatya Milletvekili olan Sayın Bülent Tüfekçi ile verimli istişarelerde bulunduk. Kendisine Özköse Group adına teşekkürlerimizi sunarız.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Second Card -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="card" style="border: none;">
                            <img style="width: 500px; height: 500px; object-fit: cover; border-radius: 10px;" class="card-img-top img-fluid" src="{{ asset('images/mehmet-fendoglu.jpg') }}" alt="First Image">
                            <div class="card-body">
                                <h5 class="card-title">Sayın Mehmet Fendoğlu</h5>
                                <p class="card-text">Malatya Milletvekili Sayın Mehmet Fendoğlu'na, Gazi Meclis'teki kabulleri için teşekkürlerimizi sunarız. Kendisine Özköse Group adına minnettarız.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Third Card -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="card" style="border: none;">
                            <img style="width: 500px; height: 500px; object-fit: cover; border-radius: 10px;" class="card-img-top img-fluid" src="{{ asset('images/abdurrahman-babacan.jpg') }}" alt="Second Image">
                            <div class="card-body">
                                <h5 class="card-title">Sayın Abdurrahman Babacan</h5>
                                <p class="card-text">Malatya Milletvekili Sayın Abdurrahman Babacan ile Malatya hakkında verimli istişarelerde bulunduk. Kendisine Özköse Group adına teşekkürlerimizi sunarız.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>

        <!--services-box-section-->
        <section class="ttm-row services-box-section bg-img12 clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-flag-alt-2"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Hikayemiz</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Firmamız Bera Yapı İnşaat adıyla 1993 yılında Malatya'da Merhum Yalçın Özköse tarafından kurulmuştur. Kuruluşumuzdan bu yana, ulaştırma projelerinden baraj ve bina projelerine kadar birçok projeyi başarıyla tamamladık. Müşterilerimize en yüksek kalitede hizmet sunarak projeleri zamanında ve bütçeye uygun şekilde teslim etmeyi ilke edindik. Yenilikçi ve sürdürülebilir bir gelecek hedefleyen Özköse Yapı İnşaat, dinamik yatırımları ile hızlı bir şekilde büyümeye devam etmektedir.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-bag"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Misyonumuz</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Özköse Group olarak misyonumuz, yenilikçi ve sürdürülebilir projelerle topluma değer katmak, müşterilerimize en yüksek kalitede hizmet sunmak ve çalışanlarımıza güvenli ve ilham verici bir çalışma ortamı sağlamaktır. Her projede, müşterilerimizin beklentilerini aşmayı, çevreye duyarlı çözümler üretmeyi ve sektördeki lider konumumuzu korumayı hedefliyoruz. İlkelerimiz doğrultusunda, tüm projelerimizi zamanında, istenilen kalitede ve öngörülen bütçede tamamlamayı taahhüt ediyoruz.
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-eye"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Vizyonumuz</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Vizyonumuz, inşaat sektöründe yenilikçi ve sürdürülebilir çözümler sunarak global bir marka olmak, geniş coğrafyalarda büyük ulaşım ve yatırım projelerine imza atmak ve sektördeki lider konumumuzu daha da güçlendirmektir. Geleceğe yönelik dinamik yatırımlarımızla hızlı bir şekilde büyümeye devam ederken, teknolojik gelişmeleri yakından takip ederek ve sürekli kendimizi geliştirerek, sektördeki en güvenilir ve en kaliteli hizmet sağlayıcılarından biri olmayı amaçlıyoruz.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- services-box-section end -->


        <!-- fid-section -->
        <section class="ttm-row fid2-section bg-img13 ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes clearfix" style="margin-bottom: 100px;">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row ttm-facts-colum-sep">
                    <div class="col-md-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-light-bulb"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "215"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >215
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Başarılı Projeler<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-paint-roller"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "123"
                                            data-interval         = "5"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >123
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Tecrübeli Ekibimiz<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-star"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "3245"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >3245
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Memnun Kişi<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-cup"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "35"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                        >35
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Zorlu Çözümler<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fid-section end -->

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
