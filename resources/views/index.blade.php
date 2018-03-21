@extends('layouts.uikit')

@section('styles_include')

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">

<style tyle="text/css">

  .header-image {
    background-size: cover;
    background-position: left center;
    background-image: url('{{ asset('images/homepage/bridge.png') }}');
    filter: grayscale(100%) brightness(120%);
    grid-column: 1 / -1;
    grid-row: 1 / -1;
  }

  #intro-img {
    order: 0;
    overflow: hidden;
    background-size: 86%;
    background-position: center;
    background-repeat: no-repeat;
    transform: translateY(-2%);
    background-image: url('{{ asset('images/laptop/laptop3.png') }}');
  }

</style>
<link href="{{ asset('css/homepage/homepage.css') }}" rel="stylesheet">
<link href="{{ asset('css/homepage/homepage.lg.css') }}" rel="stylesheet">
<link href="{{ asset('css/homepage/homepage.md.css') }}" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

@endsection

@section('content')
<div id="nusku-header">
    <div class="header-image"></div>
    
    <div class="header-container red-border reveal-left">
    </div>
    
    <div class="header-container header-text reveal-right">
      <h2>Introducing</h2>
      <h1>CryptoBridge<span>TM</span></h1>
      <p class="para para1">Our patent-pending proprietary software. CryptoBridge, is the nexus that aggregates premier cryptocurrency exchanges and in&shy;dexes for your customers, in real&shy;-time</p>
      <p class="para">The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select crypto&shy;currency exchanges and most at&shy;tractive live prices &#8211;&#8211; only available via the ibinex trading platform.</p>
    </div>
    
    <div class="header-input reveal-right">
      <input type="text" placeholder="Type your email">
      <button class="uk-button uk-button-danger">REQUEST A DEMO</button>
    </div>
    


  </div>

                  
      <div id="nusku-intro" class="uk-grid uk-grid1 reveal-up">
            <div id="intro-content" class="uk-width-1-2 intro-padding">
                <h2 id="intro-title">Ibinex - The Gateway to your Own Customized Cryptocurrency Ecosystem</h2>
                <p class="para para2">With an in-depth understanding of evolving blockchain technology and cryptocurrency development. Ibinex invite you to engage with a fully-customizeable, private, institutional white label platform. Trail-blazing turnkey solutions to merge with your own web-based platform. Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
            </div>
            <div id="intro-img" class="uk-width-1-2 intro-padding uk-padding-remove-left">
                
            </div>
      </div>
      
    <div>
        <h2 id="feature-header" class="uk-text-center padding1 reveal-up">Exchange your Way with Ibinex.</h2>
        <h2 id="feature-header2" class="uk-text-center uk-text-center1 reveal-up">Your Turn-Key Solution Includes:</h2>
      
        <div class="uk-section padding padding1 uk-grid-collapse uk-child-width-1-2@s uk-grid-match" uk-grid>
            <div>
                
                <div class="uk-padding1 border1 border2 uk-text-left reveal-left" >
                   <img src="{{ asset('images/homepage/picture/picture1.png') }}" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Tailored Front End content website
                   </h3>
                  <p class="para para3">
                    Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand. The Ibinex solution showcases enhanced practically and performance driven features.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding1 border2 reveal-right">
                   <img src="{{ asset('images/homepage/picture/picture2.png') }}" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Full CRM &amp; Back Office Solution
                   </h3>
                  <p class="para para3">
                    The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account &amp; money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.
                  </p>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding1 border1 border2 reveal-left">
                   <img src="{{ asset('images/homepage/picture/picture4.png') }}" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Aggregated Liquidity Exchange
                   </h3>
                  <p class="para para3">
                    Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding1 border2 reveal-right">
                    <img src="{{ asset('images/homepage/picture/picture3.png') }}" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Complete Processing solution
                   </h3>
                  <p class="para para3">
                    With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilities for your exchange to thrive in maximum liquidity.
                  </p>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding1 border1 reveal-left">
                    <img src="{{ asset('images/homepage/picture/picture5.png') }}" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Compliant Banking Custodian service
                   </h3>
                  <p class="para para3">
                    Ibinex is the first ever cryptocurrency exchange platform the world that has a finance transaction license. We can offer fully-compliant and licensed custodian processing and accounts, or you can choose to operate with your own custodian. Ibinex is licensed to facilitate payments via swipe-and-transmit from FIAT to a base currency. This preferred solution is unavailable to the bigger cryptocurrency exchanges, and is only offered by Ibinex.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding1 reveal-right">
                    <img src="{{ asset('images/homepage/picture/picture6.png') }}" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Hosted in a secure private cloud environment
                   </h3>
                  <p class="para para3">
                    Security is a 360 degree operation, with the Ibinex platform guarded 24/7 in a private cloud and crypto-based funds held in shielded cold wallets. Cyber security experts maintain and defend the platform, while cold wallets containing funds are impregnable, offline, and safely out of unathorised reach.
                  </p>
                </div>
            </div>
        </div>
    </div>

    <div id="nusku-video" class="uk-background-muted padding-video">
        <div id="nusku-video-cov">
            <img src="{{ asset('images/homepage/video/video.png') }}" class="video-img reveal-right">
        </div>
        <div id="nusku-video-title">
          <h2 id="nusku-video-p" class="reveal-left">
            Our<span> vision.</span>
          </h2>
      </div>
    </div>

    <div class="legal-container">
        <p id="legal-p" class="reveal-up para">Learn more about Ibinex</p>
        <h2 id="legal-h2" class="uk-margin-remove-top reveal-up">Technical Papers &amp; Legal Circular</h2>
        <div class="uk-text-center media-padding" uk-grid>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="uk-padding-remove brochure">
                    <img src="{{ asset('images/homepage/brochure/brochure1.png') }}" class="">
                    <span style="color:#2f3f5d">Business Model</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="brochure uk-padding-remove">
                    <img src="{{ asset('images/homepage/brochure/brochure2.png') }}" class="">
                    <span style="color:#a97862">One Page Brochure</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="brochure uk-padding-remove">
                    <img src="{{ asset('images/homepage/brochure/brochure3.png') }}" class="">
                    <span style="color:#a55e5a">Custodian Guidelines</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="brochure uk-padding-remove">
                    <img src="{{ asset('images/homepage/brochure/brochure4.png') }}" class="">
                    <span style="color:#718159">Pricing Model</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="brochure uk-padding-remove">
                    <img src="{{ asset('images/homepage/brochure/brochure5.png') }}" class="">
                    <span style="color:#8255a7">Terms &amp; Conditions</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove fade">
                <div class="brochure uk-padding-remove">
                    <img src="{{ asset('images/homepage/brochure/brochure6.png') }}" class="">
                    <span style="color:#4c5e84">KYC &amp; AML Requirements</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
        </div>
    </div>

    <div id="demo" class="carousel-slide mobile-carousel">
          <p id="legal-p" class="reveal-up para">Learn more about Ibinex</p>
          <h2 id="legal-h2" class="uk-margin-remove-top reveal-up">Technical Papers &amp; Legal Circular</h2>
          <!-- The slideshow -->
          <button class="arrow-left"><i class="fas fa-angle-left fa-3x"></i></button>
          <button class="arrow-right"><i class="fas fa-angle-right fa-3x"></i></button>
          <div class="carousel-inner">
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure1.png') }}" class="">
                    <span style="color:midnightblue">Business Model</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure2.png') }}" class="">
                    <span style="color:sienna">One Page Brochure</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure3.png') }}" class="">
                    <span style="color:brown">Custodian Guidlines</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure4.png') }}" class="">
                    <span style="color:darkolivegreen">Pricing Model</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure5.png') }}" class="">
                    <span style="color:darkslateblue">Terms &amp; Conditions</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="">
                <div class="brochure brochure1">
                    <img src="{{ asset('images/homepage/brochure/brochure6.png') }}" class="">
                    <span style="color:darkslategray">KYC &amp; AML Requirements</span>
                    <span>PDF - 1.3 MB</span>
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
      </div>
       
</div>

<div id="nusku-media" class="uk-background-muted ">
    <h2 id="nusku-media-title" class="reveal-up"><span>Ibinex</span> <span class="span-med">m</span>edia <span class="span-cov">c</span>overage</h2>      
    <div id="nusku-media-cov">
        <img src="{{ asset('images/about-us/media/media1.png') }}" class="nusku-media-logo reveal-up">
        <img src="{{ asset('images/about-us/media/media2.png') }}" class="nusku-media-logo reveal-up">
        <img src="{{ asset('images/about-us/media/media3.png') }}" class="nusku-media-logo reveal-up">
        <img src="{{ asset('images/about-us/media/media4.png') }}" class="nusku-media-logo reveal-up">
        <img src="{{ asset('images/about-us/media/media5.png') }}" class="nusku-media-logo reveal-up">
        <img src="{{ asset('images/about-us/media/media6.png') }}" class="nusku-media-logo reveal-up">
    </div>
</div>
@endsection

@section('scripts_include')
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
      $('.carousel-inner').slick({
      infinite: true,
      speed: 500,
      cssEase: 'linear',
      prevArrow :'.arrow-left',
      nextArrow :'.arrow-right',
    });   
  });
  $(window).on("load",function(){
      window.sr = ScrollReveal({opacity: 0, duration: 800, delay:300, mobile: false});
         sr.reveal('.reveal-up');
         sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
         sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
         sr.reveal('.fade',{distance:'0'});
   })
</script>
@endsection