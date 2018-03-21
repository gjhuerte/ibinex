@extends('layouts.uikit')

@section('styles_include')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="{{ asset('css/services/services.css') }}">
@endsection

@section('content')
<div class="uk-section uk-section-default red" style="background-color: #C11722; padding-bottom: 6.5%">
    <div class="uk-container">
      <h3 class="animated red-h3" id="animated1" style="padding-top: 0.4%; padding-bottom: 2.5%;"><em style="color: #fff;">Services</em></h3>
        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
            <div class="redpcontents">
                <p class="animated fadeInLeft red1p" style="margin-top: -0.8%; margin-bottom: 2%;">Ibinex services are all characterised by high-level innovation made practical for your personalised exchange integration.</p>
                <p class="animated fadeInRight" style="margin-top: 0%;">Our ecosystem of services compromises of the following units:</p>  
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey1" style="background-color: #F7F7F7; padding-top: 0; margin-bottom: -6.5%;">
    <div class="uk-container imageCont">
        <div class="uk-margin-remove-top uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="imgtop">
                <img class="laptopimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/5356c1f9ac7989278c2052fb77b370fb/platform-laptop.png" style="position: relative; top: 13.2%; height: 100%; margin-left: 8.5%; max-width: 200%; width: 143.4%;" alt="macbook">
            </div>
            <div class="uk-margin platformp-content" style="padding-top: 6.5%; padding-left: 2%;">
                <h3 class="animated fadeInRight grey1h3">Platform</h3>
                <p class="pratform-content-p" style="color: #6B7C93;">Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:</p>
                <ul class="uk-list uk-list-space" id="pl_list" style="margin-top: -2%; margin-left: 1%;">
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Tailor-made private, institutional while label infrastructure</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Fully-customisable front-end website</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Completely integrated web-based trading platform</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Flexible front-end user trading</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Performance-driven features</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Secure private cloud hosting</li>
                  <li class="platform-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Total compatibility with your own branding deck</li>
                </ul>
            </div>
            <div class="imgbttm">
                <img class="laptopimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/5356c1f9ac7989278c2052fb77b370fb/platform-laptop.png" alt="macbook">
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white1">
    <div class="uk-container uk-margin crmsection">
        <div class="uk-grid-match uk-child-width-1-2@m uk-margin-xlarge-top crmsection1"   uk-grid>
            <div class="crm-one" style="margin-left: 15.8%; margin-top: -4.5%;">
                <h3 class="crm-title">CRM/Back Office</h3>
                <p class="crm-content-p">The Ibinex solution unites the front-end and platform with a full back office suit including CRM with:</p>
                <ul class="uk-margin uk-list uk-list-space" id="pl_list">
                  <li class="uk-margin-small-top crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> KYC/AML documentation collection</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Documentation verification</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Account and money management</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Optimised back-office administrative workflow</li>
                  <li class="crm-li"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="17" height="17" viewBox="0 0 252 252" style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#11d5b9"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#0b112f"></path></g></g></g></svg> Enhanced UI/UX</li>
                </ul>
            </div>
            <div class="crm">
                <p style="margin-bottom: -134%;"><img class="crmimage" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/58b870772ce4f99e05237aa42f18cdbb/crm-back.png" style="position: relative; top: -60%; left: 104%; max-width: 117%; height: 74%; margin-left: -3%;" alt="windows"></p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-primary uk-light gradientcrypto">
    <div class="uk-container gc-cotainer">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="uk-inline gradientcrypto-img">
                <p><img src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/04c8654a3ae5429e6e914cbda971a9f8/cryptobridge.png" class="uk-align-center cblogo" alt="CryptoBridge&trade;"></p>
            </div>
            <div class="uk-margin gradientcrypto-content" style="padding-top: 1.3%; position: relative; left: -1%;">
                <h3 class="uk-margin-remove-bottom" style="padding-bottom: 2%;">CryptoBridge&trade;</h3>
                <p class="uk-margin-xlarge-bottom">Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite, CryptoBridge&trade;. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through CryptoBridge&trade; by Ibinex.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white2">
    <div class="uk-container creditcardsection">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid style="margin-top: -4%;">
            <div class="uk-margin cc-content" style="position: relative; left: 15.5%; margin-top: -8.7%;">
                <h3 class="uk-margin-large-top cc-title" style="margin-bottom: 0%;">Credit Card Processing</h3>
                <p class="uk-margin-small-top cc-first-p">We offer full spectrum payment processing for cryptocurrencies, and a complete selection that is unavailable elsewhere. Exchanging your way with Ibinex means experiencing a whole new world of payment options including: credit cards, debit cards, wire transfers, alternative payments, hosted wallets and cold wallets.</p>
                <p style="margin-top: -30%; position: relative; top: 3%;">
                  <img class="" src="{{ asset('images/services/icons/visa.svg') }}" alt="cards" data-tilt >
                  <img class="imageleft mastercard" src="{{ asset('images/services/icons/master-card.svg') }}" alt="cards" data-tilt >
                  <img class="imageleft discover" src="{{ asset('images/services/icons/credit-card.svg') }}" alt="cards" data-tilt >
                  <img class="imageleft dinnersclub" src="{{ asset('images/services/icons/dinners-club.svg') }}" alt="cards" data-tilt >
                  <br>
                
                    <img class="amexpress" src="{{ asset('images/services/icons/american-express.svg') }}" alt="cards" data-tilt >
                    <img class="imageleft paypal" src="{{ asset('images/services/icons/paypal.svg') }}" alt="cards" data-tilt >
                    <img class="imageleft maestro" src="{{ asset('images/services/icons/maestro.svg') }}" alt="cards" data-tilt >

                </p>
            </div>
            <div class="uk-margin phone">
              <p><img class="phoneimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/23e46f532ad13d99fa6810dbef622156/First-Option-Services_Desktop_(1)-min.png" alt="iphonex" style="margin-bottom: -16%; width: 72.5%; margin-left: 14%; padding-top: 8%; height: 118%;"></p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey2" style="background-color: #FBFBFB; padding-bottom: 0%; padding-top: 0%; margin-bottom: 0%;">
    <div class="uk-container custodiansection" style="margin-bottom: -0.4%;">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div class="custodian">
                <p><img class="custodianimg" src="https://trello-attachments.s3.amazonaws.com/5aa235b5bb90fe7896adf2cb/5aa544a347846c77df15d9f4/870456d77b7a7525d39fe55b27cdd354/custodian-accounts.jpg" style="height: 99.1%; width: 82%; position: relative; left: 20%;" alt="Man"></p>
            </div>
            <div class="uk-margin custodian-two" style="color: #6B7C93; padding-left: 3.3%;">
                <h3 class="custodian-title">Custodian Accounts</h3>
                <div class="custodian-p-content">
                  <p class="custodian-p-1">Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license. We are proud to be the first to offer you:</p>
                  <p class="custodian-p">Fully-compliant and licensed custodian proceeding and accounts</p>  
                  <p class="custodian-p">The choice to instead select a custodian of your choice</p>
                  <p class="custodian-p">Payments via swipe-and-transmit from FIAT to base currency</p>
                  <p class="uk-margin-xlarge-bottom custodian-p">A raft of other custodian account options unavailable elsewhere</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts_include')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script>
$('.cblogo').tilt({
    glare: true,
    maxGlare: .5
})
</script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
$(document).ready(function(){
  $(window).on("load", function() {
    $( "#animated1" ).addClass( "fadeInDown" );
    $( "#animated2" ).addClass( "fadeInLeft" );
    $( "#animated3" ).addClass( "fadeInRight" );
    window.sr = ScrollReveal({ mobile: true });
    sr.reveal('.pratform-content-p', { duration: 2000 });
    sr.reveal('.platform-li', { duration: 3000}, {container: '.platform-content' }, 300);

    sr.reveal('.crm-title', { origin: 'left' }, { duration: 3000}, 600);
    sr.reveal('.crm-content-p', { origin: 'left'}, {duration: 3000 }, 600);
    sr.reveal('.crm-li', { origin: 'left' }, { duration: 3000}, {container: '.crm-one' }, 600);

    sr.reveal('.cc-title', { origin: 'left' }, { duration: 4000});
    sr.reveal('.cc-first-p', { origin: 'left'}, {duration: 4000 }, 600);
    sr.reveal('.visa', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.mastercard', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.discover', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.dinnersclub', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.amexpress', { origin: 'bottom' }, { duration: 9000}, 3000);
    sr.reveal('.paypal', { origin: 'top' }, { duration: 9000}, 3000);
    sr.reveal('.maestro', { origin: 'bottom' }, { duration: 9000}, 3000);

    sr.reveal('.custodian-title', { origin: 'right' }, { duration: 4000});
    sr.reveal('.custodian-p', { duration: 3000}, {container: '.custodian-two' }, 300);
  });
});
@endsection