@extends('layouts.uikit')

@section('styles_include')
    <style>
        .display {
            display: grid;
        }
        .main-grid{
            display: grid;
            grid-template-rows: auto;
        }

        .mainPadding{
            padding-left: 20%;
            padding-right: 20%;
        }

        .section1st{
            display: grid;
            padding-top: 3%;
            grid-template-rows: 0.65fr 0.35fr 0.4fr 0.3fr;
            grid-template-columns: 1fr 1.7fr 1.3fr 0.7fr 0.3fr;
        }
        .section1st-text1{
            display: grid;
            grid-column: 2 / span 2;
            grid-row: 1 / 3;
            grid-template-columns: 2.2fr 1fr 1.2fr;
            grid-template-rows: 0.1fr auto;

        }
        .section1st-text1 .header-section{
            grid-column: 1 / -2;
            grid-row: 1;
        }
        .subgrid-text{
            grid-row: 2;
            font-size: var(--paragraph-17px);
            font-weight: 500;
            color: #728298;
        }

        .section1st-text2{
            display: grid;
            grid-column: 1 / span 5;
            grid-row: 3 / span 2;
            grid-template-columns: 1fr 1.7fr 1.3fr 1fr;
        }

        .section1st-data{
            grid-column: 2;
            grid-row: 3 / -1;
        }
        .section1st-data h2,
        .section1st-data p{
            color: white;
        }
        .section1st-data p{
            font-size: var(--paragraph-17px);
            font-weight: 500;

        }

        .pageImage{

            /*     display: inline-block; */
            grid-row: 2 / span 2;
            grid-column: 3 / span 2;
            align-self: center;
            transform: translate(0, -25px);
        }

        .section2{
            padding-top: 5%;
            grid-template-rows: auto;
            display: grid;
            padding-bottom: 5%;
        }
        .title-section2 h2{
            font-weight: 800;
            font-size: var(--heading-40px);
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
        }
        .text2{
            padding: 0 20%;
        }

        .title-section2,
        .text2  {
            display: grid;
            text-align: center;
        }
        .title-section2 p{
            font-weight: 500;
            color: #728298;
            font-size: var(--paragraph-17px)
        }


        .section2-text{
            grid-template-rows: auto;
            grid-template-columns: 2fr 2fr;
            display: grid;
        }

        .section2-text .text {
            padding-top: 10%;
        }
        .header-section{
            font-weight: 800;
            font-size: var(--heading-40px);
            color: #2c3339;
        }

        .header-section,
        .section2-text2{
            padding-top: 5%;
        }

        .float-image{
            top: -166px;
            right: 10%;
        }
        .bgcolor{
            background-color: #142c5a;
        }

        .padding-top {
            padding-top: 10%;
        }
        .text2 p{
            font-size: var(--paragraph-17px);
            font-weight: 500;
            color: #728298;
        }
        .text p{
            margin: 0;
            font-size: var(--landing-article-title-20px);
            font-weight: 500;
            color: #728298;
        }
        @media only screen and (min-width : 1780px) and (max-width : 1925px){
            .pageImage{
                transform: translate(0, -35px);
            }
        }
        @media only screen and (min-width : 1421px) and (max-width : 1779px){
            .section1st{
                grid-template-rows: 0.5fr 0.35fr 0.4fr 0.2fr;
            }
            .pageImage{
                transform: translate(0, -35px);
            }
        }

        @media only screen and (min-width : 482px) and (max-width : 872px){
            .section1st{
                grid-template-rows: 1fr 0.35fr 0.4fr 0.5fr;
            }
            .pageImage{
                transform: translate(0, -16px);
            }
        }
        @media only screen and (min-width : 873px) and (max-width : 944px){
            .section1st{
                grid-template-rows: 1fr 0.35fr 0.4fr 0.5fr;
            }
            .pageImage{
                transform: translate(0, -17px);
            }
        }

        @media only screen and (min-width : 945px) and (max-width : 1042px){
            .section1st{
                grid-template-rows: 1fr 0.35fr 0.4fr 0.5fr;
            }
            .pageImage{
                transform: translate(0, -18px);
            }
        }
        @media only screen and (min-width : 1043px) and (max-width : 1365px){
            .section1st{
                grid-template-rows: 0.6fr 0.35fr 0.4fr 0.5fr;
            }
            .pageImage{
                transform: translate(0, -24px);
            }
        }

        @media only screen and (max-width : 480px) {
            .mainPadding{
                padding-left: 5%;
                padding-right: 5%;
            }
            .section1st {
                grid-template-rows: auto 9rem auto;
                grid-template-columns: 1fr;
                display: grid;
            }
            .section1st-text1 {
                grid-template-columns: auto;
                display: grid;
                grid-row: 1;
                grid-column: auto;
                margin: 0 5% 0;
            }
            .section1st-text2{
                display: grid;
                grid-column: 1;
                grid-row: 3;
                grid-template-columns: 1fr;
                padding: 115px 5% 50px;
            }
            .subgrid-text,
            .section1st-data p{
                text-align: justify;
                font-size: 19px;

            }

            .section1st-data{
                grid-column: 1;
                grid-row: 1;
            }
            .bgcolor{
                /*     background-color: #142c5a; */
                background: linear-gradient(to right, #142c5a , #134093);
            }
            .pageImage{

                /*     display: inline-block; */
                grid-row: 2;
                grid-column: 1;
                align-self: center;
                transform: translate(0, 58px);
            }
            .title-section2 {
                display: grid;
                text-align: left;
            }
            .section2-text{
                grid-template-rows: auto;
                grid-template-columns: 1fr;
                display: grid;
                border-bottom: none!important;
            }
            .text-padding{
                padding-left: 0!important;
                border-right: 0px solid!important;
            }
            .text-border{
                padding-left: 0!important;
                border-right: 0px solid!important;
                padding-right: 0!important;
            }
            .text2{
                text-align: left;
                padding: 0 0;
            }
            .text2 p{
                text-align: left;
            }


        }
    </style>
@endsection

@section('content')
    <div class="main-grid">
        <div class="section1st">
            <div class="display section1st-text1 header1">
                <h2 class="header-section">We fuse innovation with accessibility as blockchain technology evolves</h2>
                <p class="subgrid-text">We seek to revolutionise the way that exchange owners create their platforms and raise the standard of marketplace excellence by incorporating our cutting-edge technology, delivered with practicality and a host of unique benefits, only enjoyed by merging with the ibinex ecosystem.</p>
            </div>
            <div class="display bgcolor uk-light section1st-text2">
                <div class="section1st-data header2"><h2 class="header-section">We are an ecosystem with vision</h2>
                    <p>As the gateway to your own customisable cryptocurrency ecosystem, our vision is to equip you with the tools to create and operate your cryptocurrency exchange, your way.</p></div>
            </div>
            <div  class="pageImage" ><img src="assets/images/homepage_why.png" alt=""></div>
        </div>
        <div class="section2">
            <div class="title-section2 mainPadding">
                <h2 class="">Why you should exchange your way with Ibinex:</h2>
                <p>Our strategy is underpinned by the 4 core strengths of Ibinex:</p>
            </div>
            <div class="section2-text mainPadding" style="border-bottom: 1px solid #e5e5e5;">
                <div class="text text-border" style="padding-right: 15%; border-right: 1px solid #e5e5e5;">
                    <div class="text-content-left">
                        <div class="uk-animation-toggle">
                            <img src="assets/images/1.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
                        </div>
                        <p>Commitment to technological innovation, through out patent-pending proprietary software, Cryptobridge<sup>TM</sup></p>
                    </div>
                </div>
                <div class="text text-padding" style="padding-left: 15%;">
                    <div class="text-content-right">
                        <div class="uk-animation-toggle">
                            <img src="assets/images/2.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
                        </div>
                        <p>Trailblazing of complete and customisable white label platform solutions</p>
                    </div>
                </div>
                <div class="text text-border" style="padding-right: 15%; border-right: 1px solid #e5e5e5;  padding-bottom: 5%;">
                    <div class="text-content-left">
                        <div class="uk-animation-toggle">
                            <img src="assets/images/3.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
                        </div>
                        <p>Offering unprecedented custodian service with our industry's first finance transaction license</p>
                    </div>
                </div>
                <div class="text text-padding"  style="padding-left: 15%; padding-bottom: 5%;">
                    <div class="text-content-right">
                        <div class="uk-animation-toggle">
                            <img src="assets/images/4.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
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
        window.sr = ScrollReveal();
        sr.reveal('.text-content-left', {origin: 'left', distance: '200px', opacity: 0, duration: 2000});
        sr.reveal('.text-content-right', {origin: 'right', distance: '200px', opacity: 0, duration: 2000});
        sr.reveal('.header1', {origin: 'left', distance: '200px', opacity: 0, duration: 1500, delay:500});
        sr.reveal('.header2', {origin: 'left', distance: '200px', opacity: 0, duration: 1500, delay:500});
        sr.reveal('.text2', {opacity: 0, duration: 1500, delay:500});
    </script>
@endsection