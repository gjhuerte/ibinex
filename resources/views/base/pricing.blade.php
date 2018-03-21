@extends('layouts.uikit')

@section('styles_include')
<link href="{{ asset('css/pricing/pricing.css') }}" rel="stylesheet" />

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<style>
    .main-image {
      grid-column: 1 / -1;
      grid-row: 1 / -1;
      background-image: url('{{ asset('images/pricing/First-option-Pricing.jpg') }}');
      background-repeat: no-repeat;
      background-position: left top;
      background-size: cover;
    /*     filter: drop-shadow(60px 50px 50px rgba(0,0,0,0.5)); */
      height: 100%;
    }
</style>
@endsection

@section('content')

<div class="main-pricing heading heading1">
  <div class="main-image reveal-left">
  </div>
  <div class="main-text text1 reveal-right">
    <h1 class="heading">Pricing</h1>
    <p>Integration of the Ibinex turnkey cryptocurrency platform to ex&shy;change your way reguires:</p>
    <ul class="fa-ul">
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle fa-lg" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1 " style="color:black"></i></span>$150,000 "reserve only, no pay&shy;ment" deposited in a local Escrow account of your choice for 180 days.</li>
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle fa-lg" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1 " style="color:black"></i></span>Your first 90 days of Ibinex are gratis while you build your book.</li>
    </ul>
    <h1 class="heading additional-margin">Our Fees</h1>
    <p>0.1% flat-rate fee based on exchange volume with a minimum fee of $20,000 per month.</p>
    <p>Fees begin only at day 91.</p>
  </div>
</div>

<div class="main-pricing heading heading2">
  
  <div class="main-text text2 reveal-up">
    <h1 class="heading">Setup</h1>
    <p>In order to proceed with setup, we require:</p>
    <p>Your company to sign out Letter of Intent (LOI)</p>
    <p>Proof of the Escrow deposit at a bank or with an attorney of your choice.</p>
  </div>
  
  <div class="main-text text3 reveal-up">
    <h1 class="heading">Onboarding time</h1>
    <p>Please note that, due to incredibly high demand of the Ibinex exchange solutions suite, the current onboarding waiting time is 4 months</p>
    <p>We are doing our utmost to reduce time to market while retaining our trademark standard of exellence, and appreciate your interest in our innovations.</p>
    
  </div>
  
  
</div>

@endsection

@section('scripts_include')

    <script>
        $(window).on("load",function(){
          
          window.sr = ScrollReveal({ opacity: 0, duration: 800, delay:300,mobile: false });
            sr.reveal('.reveal-up');
            sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
            sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
            sr.reveal('.fade',{distance:'0'});
        })
      
    </script>

@endsection
