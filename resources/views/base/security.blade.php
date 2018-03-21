@extends('layouts.uikit')

@section('styles_include')

<style>
   .border1 p, .border2 p {
        color: #6F8197; 
        word-spacing: 1px;
        font-size: var( --paragraph-17px);
        font-weight: 600;
    }
   h6 {
      font-size: 11.5px;
      word-spacing: 1px;
   }

  #title{
    font-weight: 800;
    font-size: var(--heading-40px);
  }
  #title1{
      font-weight: 700;
      font-size: var(--heading-40px);
  }
  #banner-width h6{
    font-size: var(--paragraph-17px);
    font-weight: 600;
  }
  .firstColumn-second h3{
        margin-bottom: 16%;
  }
   .border1{
      border-right: 0px solid #aaa;
    }
    .border2{
      border-bottom: 0;
    }
    #funds-tech{
      padding: 80px 20% 15px;
    }
    #banner-width{
      padding: 50px 20% 90px 20%;
    }
    @media only screen and (max-width : 480px) {  
       #banner-width{
         padding: 50px 5% 90px 5%;
         text-align: center;
         margin: 0;
        }
      #banner-width h6 {
        font-weight: 500;
      }
      .border1 p, .border2 p {
        font-weight: 500;
      }
      #title1{
        font-style: normal!important;
      }
       .header-h6{
        padding: 0;
       }
       #funds-tech{
        padding: 30px 5% 90px 5%;
        margin: 0;
        padding-bottom: 10px;
      }
      .firstColumn-second{
        padding: 0;
      }
      .secondColumn-second{
        padding: 0;
      }
      .firstColumn-third,
      .secondColumn-third{
        padding: 0;
      }
    } 
  </style>
@endsection

@section('content')
<!-- =================================================FIRST SECTION========================================= -->
<div class="uk-section uk-light uk-padding-large uk-panel uk-text-center@s uk-card-body uk-grid-small" id='banner-width' style="background-color:#152C58;">
    <h3 id="title1" class="header-banner" style="font-style:italic;">Security</h3>
    <h6 class="header-h6">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br>           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br> aliquip           ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum <br> dolore eu           fugiat nulla pariatur.
    </h6>
</div>


<!-- ===============================================SECOND SECTION========================================== -->
<div class="uk-section uk-grid-small uk-child-width-1-2@s uk-grid-match uk-grid" id='funds-tech' data-uk-grid-margin>
    <!--  FIRST COLUMN  -->
    <div class="uk-first-column firstColumn-second" >
        <div class="border1 border2 uk-text-left">
            <h3 id="title" class="header-SecondSection">Protection of Funds</h3>
            <p class="uk-text-justify secondSection-p-left">
                The protection of your crypto-funds is of paramount importance to us. For this reason, we take the                     ultimate lengths to ensure your funds remain safe at all times.
            </p>
            <p class="uk-text-justify secondSection-p-left">
                As an indication of the high protective standards we hold, Ibinex has been granted the status of                       fully-licensed, fully-compliant and as a regulated custodian and account processor.
            </p> 
            <p class="uk-text-justify secondSection-p-left">
                We are the first cryptocurrency exchange platform to hold this mantle and offer exclusive payment                     solutions. As such, we must demonstrate a consistent level of regulatory compliance in order to retain                 this professional distinction, a title of which we are immensely proud.
            </p>
        </div>
    </div>
    <!--  2ND COLUMN  -->
    <div class="secondColumn-second">
        <div class="border2">
            <h3 id="title" class="header-SecondSection">Encryption and Technologies</h3>
            <p class="uk-text-justify uk-text-top secondSection-p-right">
            A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no                   encryption technology stone unturned, and has implemented the highest level of SSL security into the                   platform, complete with the most solid and secure technologies.
            </p>
            <p class="uk-text-justify secondSection-p-right">
            We ensure that no weak links exist to threaten the stability and core security of Ibinex for our                       customers. Threats are neutralised before they present themselves - we take no chances and anticipate                 potential breaches before they arise, entirely removingtheir potential before they ever eventuate.
            </p>
        </div>
    </div> 
  
<!--  END OF 2ND COLUMN  -->
</div>


<!-- =================================================THIRD SECTION======================================== -->
<div class="uk-background-muted uk-section uk-grid-small uk-child-width-1-2@s uk-grid-match uk-grid thirdSection" id='funds-tech' data-uk-grid-margin>
  
      <!--     FIRST COLUMN   -->          
      <div class="uk-first-column firstColumn-third">
          <div class="border1 border2 uk-text-left">
              <h3 id="title">Information Security</h3>
              <p class="uk-text-justify">
                Our platform is a 24/7 guarded operation, with all crypto-based funds held in cold-wallets, shielded                   by our own team of cyber security experts who work around the clock to ensure all funds are safe and                   untouchable by unauthorized seekers.
              </p>
          </div>
      </div>

      <!--     SECOND COLUMN   -->
      <div class="secondColumn-third">
          <div class="border2">
              <h3 id="title">Privacy </h3>
              <p class="uk-text-justify">
              Security and confidentiality are of the utmost importance for our clients, and you can learn more about               our completely transparent Regulations and Privacy Policy, to have complete peace of mind and confidence      in Ibinex.
              </p>
          </div>
      </div>
</div>

@endsection

@section('scripts_include')
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script>
   $(window).on("load", function(){
    window.sr = ScrollReveal({ mobile: false });
    sr.reveal('.header-banner', { opacity: 0, duration: 2000});
    sr.reveal('.header-h6', { opacity: 0, duration: 2000});
    sr.reveal('.header-SecondSection', { opacity: 0, duration: 2000});
    sr.reveal('.thirdSection', { opacity: 0, duration: 2000});
    sr.reveal('.secondSection-p-left', {origin: 'left', opacity: 0, duration: 1500,distance: '2000px'});
    sr.reveal('.secondSection-p-right', {origin: 'right', opacity: 0, duration: 1500,distance: '2000px'});
   });
  </script>
@endsection
