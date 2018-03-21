@extends('layouts.uikit')

@section('styles_include')
<link href="{{ asset('css/why-ibinex/why-ibinex.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="main-grid">
  <div class="section1st">
    <div class="display section1st-text1 header1">
       <h2 class="header-section">We fuse innovation with accessibility as blockchain technology evolves.</h2>
       <p class="subgrid-text">We seek to revolutionise the way that exchange owners create their platforms and raise the standard of marketplace excellence by incorporating our cutting-edge technology, delivered with practicality and a host of unique benefits, only enjoyed by merging with the ibinex ecosystem.</p>
    </div>
    <div class="display bgcolor uk-light section1st-text2">
      <div class="section1st-data header2"><h2 class="header-section">We are an ecosystem with vision.</h2>
      <p>As the gateway to your own custo&shy;misable cryptocurrency ecosys&shy;tem, our vision is to equip you with the tools to create and operate your cryptocurrency exchange, your way.</p></div>
    </div>
    <div  class="pageImage" ><img src="{{ asset('images/why-ibinex/homepage_why.png') }}" alt=""></div>
  </div>
  <div class="section2">
    <div class="title-section2 mainPadding">
      <h2 class="">Why you should exchange your way with Ibinex:</h2>
      <p>Our strategy is underpinned by the 4 core strengths of Ibinex:</p>
    </div>
    <div class="section2-text mainPadding" style="border-bottom: 1px solid #e5e5e5;">
       <div class="text text-border" style="padding-right: 15%; border-right: 1px solid #e5e5e5;">
           <div class="text-content-left">
             <div class="uk-animation-toggle imgSection2">
               <img src="{{ asset('images/why-ibinex/icons/1.png') }}" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            <p>Commitment to techno&shy;logical innovation, through out patent-pend&shy;ing proprietary software, Cryptobridge<sup>TM</sup></p>
           </div>
        </div>
        <div class="text text-padding" style="padding-left: 18.5%;">
             <div class="text-content-right">
              <div class="uk-animation-toggle imgSection2">
                 <img src="{{ asset('images/why-ibinex/icons/2.png') }}" alt="" width="40" height="40" style="margin-bottom: 15px;" class="uk-animation-shake"/>
              </div>
              <p>Trailblazing of complete and customisable white label platform solutions</p>
            </div>
        </div>
        <div class="text text-border" style="padding-right: 15%; border-right: 1px solid #e5e5e5;  padding-bottom: 5%;">
           <div class="text-content-left">
             <div class="uk-animation-toggle imgSection2">
               <img src="{{ asset('images/why-ibinex/icons/3.png') }}" alt="" width="40" height="40" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            <p>Offering unprecedented custodian service with our industry's first finance transaction license</p>
          </div>
        </div>
        <div class="text text-padding"  style="padding-left: 18.5%; padding-bottom: 5%;">
           <div class="text-content-right">
             <div class="uk-animation-toggle imgSection2">
               <img src="{{ asset('images/why-ibinex/icons/4.png') }}" alt="" width="40" height="40" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            <p>Providing a full-spectrum payment processing infrastructure to revolutionise liquidity for your exchange</p>
          </div>
        </div>
    </div>
    <div class="section2-text2 mainPadding">
       <div class="text2">
        <p>This vision of a balanced yet pioneering approach to blockchain technology software and white label platform turnkey solutions, aim  to maximise liquidity both whitin your own exchange and the wider pool of burgeoning cryptocurrency markets internationally, creating a natural funnel with a self-feeding ecosystem of buyers and sellers.</p>
     </div>
    </div>
  </div>
</div>
@endsection

@section('scripts_include')
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script>
    $(window).on("load", function(){
      window.sr = ScrollReveal();
      sr.reveal('.text-content-left', {origin: 'left', distance: '200px', opacity: 0, duration: 2000});
      sr.reveal('.text-content-right', {origin: 'right', distance: '200px', opacity: 0, duration: 2000});
//       sr.reveal('.header1', {origin: 'left', distance: '200px', opacity: 0, duration: 1500, delay:500});
//       sr.reveal('.header2', {origin: 'left', distance: '200px', opacity: 0, duration: 1500, delay:500});
      sr.reveal('.text2', {opacity: 0, duration: 1500, delay:500});
    });
  </script>
@endsection


