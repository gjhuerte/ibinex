@extends('layouts.uikit')

@section('styles_include')
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /*     font-family: 'Lato', sans-serif; */
    }

    #nusku-header {
        display: grid;
        grid-template-columns: 1fr 1.5fr 1.5fr 2fr;
        grid-template-rows: 5rem auto 5rem;

    }

    .header-image {
        background-size: cover;
        background-position: left center;
        background-image: url(assets/images/bridge.png);
        filter: grayscale(100%) brightness(70%);
        grid-column: 1 / -1;
        grid-row: 1 / -1;
    }

    .header-container.red-border {
        grid-column: 2 / span 1;
        grid-row: 2 / span 1;
        border: 15px solid maroon;
        z-index: 1;
        filter: opacity(60%);
        border-radius: 0 30px 0 0;
        margin-left: 1.5rem;
    }

    .header-container.header-text {
        grid-column: 2 / span 2;
        grid-row: 2 / span 1;
        z-index: 2;
        padding: 15% 0 10% 15%;
    }
    .header-container.header-text p,
    .header-container.header-text h1,
    .header-container.header-text h2 {
        color: whitesmoke;
        font-size: var(--paragraph-17px);
        font-weight: 500;
    }

    .header-container.header-text h2 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 3.5625rem;
        font-style: italic;
        margin-bottom: 0;
    }

    .header-container.header-text h1 {
        margin-top: 0;
        font-weight: 700;
        font-size: 6.25rem;
        font-style: italic;

    }

    .header-container.header-text > h1 > span {
        font-size: 1.75rem;
        vertical-align: super;
        font-weight: 700;
    }

    .header-input {
        grid-column: 3 / span 1;
        grid-row: 2 / span 1;
        z-index: 3;
        display: grid;
        grid-template-columns: 1fr auto;
        grid-template-rows: 1fr auto;
        padding: 0 0 2rem 2rem;
    }

    .header-input > button,
    .header-input > input {
        background-color: #c81824;
        border:none;
        outline: none;
        color: white;
        padding: 15px 10px 15px 10px;
        font-size: 0.75rem;
        font-weight: 500;
        margin: 0;
        grid-column: 2 / span 1;
        grid-row: 2 / span 1;
        line-height: 10px;
        border-radius: 0 5px 5px 0;

    }
    .header-input > input {
        background-color: white;
        color: black;
        grid-column: 1 / span 1;
        border-radius: 5px 0 0 5px;

    }

    .uk-h2, h2 {
        font-size: var(--heading-40px);
        line-height: 1.3;
        font-family: 'Montserrat', sans-serif;
    }
    .para {
        font-size: var(--paragraph-17px);
        font-family: 'Montserrat', sans-serif;
    }

    #nusku-video {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 2fr;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    #nusku-video-title {
        color: #1A1A1A;
        font-weight: bold;
        padding-top: 7%;
        background: white;
        transform: translateX(-50px);
    }

    #nusku-video-p {
        line-height: 300px;
        vertical-align: middle;
        text-align: center;
        font-weight: 900;
        font-size: var(--landing-heading-70px);
    }

    #nusku-video-p span {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-weight: 600;
    }

    #nusku-video-cov {
        text-align: center;
        padding: 70px 0;
        transform: translateX(50px);
        z-index: 99;
    }


    nusku-video-content {
        grid-column: 2;
        vertical-align: middle;
        line-height: 90px;
    }

    .video-img {
        box-shadow: 0 15px 69px -14px black;
    }

    #nusku-intro {
        box-sizing: border-box;
        min-height: 50vh;
        display: flex;
        background-color: #f8f8f8;
        padding-left: 5%;
        padding-right: 5%;
    }

    #intro-title {
        font-weight: 800;
    }

    #intro-img {
        order: 0;
        overflow: hidden;
        background-size: 75%;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url(assets/images/laptop3.png);
    }

    #intro-content {
        order: 1;
        padding: 10% 12% 10% 0;
    }

    #feature-header,
    #feature-header2{
        font-weight: 800;
        font-size: var(--heading-30px);
        margin: 10px;
    }


    #legal-p {
        /*     font-size: 13px; */
        font-weight: bold;
        text-align: center;
        padding-top: 5%;
    }

    #legal-h2 {
        font-weight: bold;
        text-align: center;
        padding-bottom: 6%;
        font-weight: 800;

    }

    #legal-btn {
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        /*     font-family: Arial; */
        color: #1a7182;
        font-size: 9px;
        font-weight: bold;
        background: #12d5b7;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        transform: translatex(10px);
        border: none;
        transition: all 0.5s;
    }

    #legal-btn:hover {
        background-color: #1a7182;
        color: black;
        cursor: pointer;
    }

    #nusku-media {

    }

    #nusku-media-title {
        color: #1A1A1A;
        font-weight: bold;
        text-align: center;
        padding: 5% 10%;
        padding-bottom: 0;
        font-size: var(--heading-30px);
        font-weight: 700;
    }

    #nusku-media-cov {
        padding: 5% 5%;
        text-align: center;
    }

    .nusku-media-logo {
        display: inline-block;
        margin: 0px 9px;
        height: 60px;
        /*     width: 150px; */
    }

    .imgHeight {
        height: 100vh;
    }

    .about {
        background-color: #F0F8FF;
    }

    .img1 {
        filter: grayscale(100%);
    }

    .padding {
        padding-left: 20%;
        padding-right: 20%;
    }

    .padding-video {
        padding-left: 15%;
        padding-right: 15%;
    }

    .padding1 {
        padding-top: 40px;
    }

    .media-padding {
        padding-left: 19%;
        padding-right: 17%;
        padding-bottom: 6%;
    }

    .border1 {
        border-right: 1px solid #f8f8f8;
    }

    .border2 {
        border-bottom: 1px solid #f8f8f8;
    }

    .uk-text-center1 {
        margin-top: 0px;
    }

    .coolors {
        color: #203771;
        font-weight: 700;
        font-size: var(--paragraph-title-22px);
    }

    .uk-grid1 {
        margin-left: 0;
    }

    .uk-padding1 {
        padding: 15px;
    }

    .container-div {
        display: none;
    }

    .carousel {
        display: none;
    }

    .mobile-carousel {
        display: none;
    }

    .brochure img {
        width: 70%;
    }

    .brochure {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        justify-items: center;
        grid-gap: 5px;
    }

    .brochure button {
        grid-column: 2 / span 1;
    }

    .brochure span,
    .brochure img{
        grid-column: 1 / -1;
    }

    .brochure span:nth-child(2) {
        font-weight: 700;
        transform: translatex(10px);
    }

    .brochure span:nth-child(3) {
        font-size: 0.9rem;
        transform: translatex(10px);
    }

    @media only screen and (min-width: 768px) and (max-width : 1024px) {
        /* For tablet: */
        #nusku-header {
            grid-template-columns: 0.5fr 1.5fr 1.5fr 0.5fr;
        }
        .arrow-left,
        .arrow-right {
            position: relative;
            top: 400px;
        }
        .padding,
        .padding-video {
            padding-left: 0%;
            padding-right: 0%;
        }
    }

    @media only screen and (max-width: 768px) {
        .mobile-carousel {
            display: block;
        }
        /* For mobile phones: */
        [class*="uk-width-"] {
            width: 100%;
        }

        #nusku-header {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
        }
        .header-container.header-text {
            grid-column: 1 / -1;
            grid-row: 1 / span 1;
            padding: 20px;
            padding-top: 5rem;
        }
        .header-input {
            grid-column: 1 / -1;
            grid-row: 2 / span 1;
            display: grid;
            grid-template-columns: auto 1fr;
            padding: 0;
        }

        .header-input > input,
        .header-container.red-border {
            display: none;
        }

        .header-input > button {
            grid-column: 1 / span 1;
            font-size: 0.9rem;
            padding: 18px 10px 18px 10px;
            margin-bottom: 2rem;
            margin-left: 1.5rem;
            border-radius: 5px;
        }

        .header-container.header-text h1 {
            font-size: 2.6rem;
        }

        .header-container.header-text > h1 > span {
            font-size: 1rem;
        }

        .header-container.header-text h2 {
            font-size: 1.9rem;
        }

        .header-container.header-text p {
            font-size: 1rem;
            font-weight: 500;
            text-align: justify;
        }

        #intro-img {
            margin-top: 20px;
            background-size: contain;
        }

        .coolors {
            font-size: 150%;
        }

        #nusku-video-p {
            font-weight: 800;
        }

        #nusku-video-p span {
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-weight: 800;
        }

        #nusku-video {
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: auto auto;
            padding-top: 8%;
            padding-bottom: 8%;
        }

        #nusku-video-title {
            color: #1A1A1A;
            font-weight: bold;
            padding-top: 7%;
            background: #f7f8fa;
            transform: translateX(0);
            padding-bottom: 10%;
        }

        #nusku-video-p {
            line-height: 0;
            vertical-align: middle;
            text-align: center;
            font-size: 45px;

        }

        #nusku-video-cov {
            text-align: center;
            padding: 70px 0;
            transform: translateX(0);
            z-index: 99;
        }


        nusku-video-content {
            grid-column: 2;
            vertical-align: middle;
            line-height: 90px;
        }

        .video-img {
            box-shadow: 0 0px 0px 0px white;
        }

        #nusku-media-title {
            color: #1A1A1A;
            font-weight: bold;
            text-align: center;
            padding: 10% 10%;
            padding-bottom: 0;
        }

        .media-padding {
            padding-left: 19%;
            padding-right: 17%;
            padding-bottom: 10%;
        }

        .legal-container {
            display: none;
        }


        #legal-btn {
            -webkit-border-radius: 28;
            -moz-border-radius: 28;
            border-radius: 28px;
            /*     font-family: Arial; */
            color: #1a7182;
            font-size: 13px;
            font-weight: bold;
            background: #12d5b7;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
            /*     transform: translatex(10px); */
            border: none;
            display: flex;
            margin: 0 auto;
            margin-bottom: 20%;
        }

        #legal-p {
            /*     font-size: 13px; */
            font-weight: 600;
            text-align: center;
            padding-top: 15%;
            font-size: 140%;
        }

        #feature-header {
            font-weight: bold;
            padding: 20% 0% 0% 0%;
            font-weight: 900;
            font-family: 'Arial';
        }

        #feature-header2 {
            font-weight: bold;
            padding: 0% 0% 0% 0%;
            font-weight: 900;
            font-family: 'Arial';
        }


        #legal-h2 {
            /*     font-weight: bold; */
            font-size: 180%;
            text-align: center;
            /*     font-family: 'Arial'; */
            padding: 0% 5% 10% 5%;
        }

        .header-image {
            background-position: 80% 0%;
        }
        p {
            text-align: justify;
        }

        .nusku-media-logo {
            margin-bottom: 15px;
            height: auto;
        }
        .padding,
        .padding-video {
            padding-left: 0%;
            padding-right: 0%;
        }

        #intro-content{
            order: 0;
            padding: 20% 0% 0% 0%;
        }
        #intro-img{
            order: 1;
            min-height: 20em;
        }

        #intro-title {
            font-weight: 900;
            /*             font-family: 'Arial'; */
            font-size: 2.1rem;
            padding: 0% 7% 0% 0%;
        }

        .intro-padding{
            padding-bottom: 3%;
        }

        .border1 {
            border-right: 0;
        }

        .border2 {
            border-bottom: 0;
        }

        .uk-padding1 {
            padding: 15px;
        }
        .arrow-left,
        .arrow-right {
            position: relative;
            top: 200px;
            left: 10px;
            border: 0;
            background-color: transparent;
            z-index: 10;
        }

        .arrow-right {
            float: right;
            left: -10px;
        }


    }
</style>
@endsection

@section('content')
<div id="nusku-header">
    <div class="header-image"></div>

    <div class="header-container red-border reveal-left">
    </div>

    <div class="header-container header-text reveal-right">
        <h2>Introducing</h2>
        <h1>CryptoBridge<span>TM</span></h1>
        <p class="para">Our patent-pending proprietary software. CryptoBridge, is the nexus that aggregates premier cryptocurrency exchanges and indexes for your customers, in real-time</p>
        <p class="para">The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select cryptocurrency exchanges and most attractive live prices-only available via the ibinex trading platform.</p>
    </div>

    <div class="header-input reveal-right">
        <input type="text" placeholder="Type your email">
        <button class="uk-button uk-button-danger">REQUEST A DEMO</button>
    </div>



</div>


<div id="nusku-intro" class="uk-grid uk-grid1 reveal-up">
    <div id="intro-content" class="uk-width-1-2 intro-padding">
        <h2 id="intro-title">Ibinex - The Gateway to your Own Customized Cryptocurrency Ecosystem</h2>
        <p class="para">With an in-depth understanding of evolving blockchain technology and cryptocurrency development. Ibinex invite you to engage with a fully-customizeable, private, institutional white label platform. Trail-blazing turnkey solutions to merge with your own web-based platform. Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
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
                <img src="assets/images/picture1.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Tailored Front End content website
                </h3>
                <p class="para">
                    Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand. The Ibinex solution showcases enhanced practically and performance driven features.
                </p>
            </div>
        </div>
        <div>
            <div class="uk-padding1 border2 reveal-right">
                <img src="assets/images/picture2.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Full CRM &amp; Back Office Solution
                </h3>
                <p class="para">
                    The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account &amp; money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.
                </p>
            </div>
        </div>
    </div>

    <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
        <div>
            <div class="uk-padding1 border1 border2 reveal-left">
                <img src="assets/images/picture4.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Aggregated Liquidity Exchange
                </h3>
                <p class="para">
                    Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.
                </p>
            </div>
        </div>
        <div>
            <div class="uk-padding1 border2 reveal-right">
                <img src="assets/images/picture3.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Complete Processing solution
                </h3>
                <p class="para">
                    With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilities for your exchange to thrive in maximum liquidity.
                </p>
            </div>
        </div>
    </div>

    <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
        <div>
            <div class="uk-padding1 border1 reveal-left">
                <img src="assets/images/picture5.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Compliant Banking Custodian service
                </h3>
                <p class="para">
                    Ibinex is the first ever cryptocurrency exchange platform the world that has a finance transaction license. We can offer fully-compliant and licensed custodian processing and accounts, or you can choose to operate with your own custodian. Ibinex is licensed to facilitate payments via swipe-and-transmit from FIAT to a base currency. This preferred solution is unavailable to the bigger cryptocurrency exchanges, and is only offered by Ibinex.
                </p>
            </div>
        </div>
        <div>
            <div class="uk-padding1 reveal-right">
                <img src="assets/images/picture6.png" class="">
                <h3 class="coolors uk-margin-remove-top">
                    Hosted in a secure private cloud environment
                </h3>
                <p class="para">
                    Security is a 360 degree operation, with the Ibinex platform guarded 24/7 in a private cloud and crypto-based funds held in shielded cold wallets. Cyber security experts maintain and defend the platform, while cold wallets containing funds are impregnable, offline, and safely out of unathorised reach.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="nusku-video" class="uk-background-muted padding-video">
    <div id="nusku-video-cov">
        <img src="assets/images/video.png" class="video-img reveal-right">
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
                <img src="assets/images/brochure1.png" class="">
                <span style="color:midnightblue">Business Model</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="uk-width-1-3 uk-padding-remove fade">
            <div class="brochure uk-padding-remove">
                <img src="assets/images/brochure2.png" class="">
                <span style="color:sienna">One Page Brochure</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="uk-width-1-3 uk-padding-remove fade">
            <div class="brochure uk-padding-remove">
                <img src="assets/images/brochure3.png" class="">
                <span style="color:brown">Custodian Guidlines</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="uk-width-1-3 uk-padding-remove fade">
            <div class="brochure uk-padding-remove">
                <img src="assets/images/brochure4.png" class="">
                <span style="color:darkolivegreen">Pricing Model</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="uk-width-1-3 uk-padding-remove fade">
            <div class="brochure uk-padding-remove">
                <img src="assets/images/brochure5.png" class="">
                <span style="color:darkslateblue">Terms &amp; Conditions</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="uk-width-1-3 uk-padding-remove fade">
            <div class="brochure uk-padding-remove">
                <img src="assets/images/brochure6.png" class="">
                <span style="color:darkslategray">KYC &amp; AML Requirements</span>
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
            <div class="brochure">
                <img src="assets/images/brochure1.png" class="">
                <span style="color:midnightblue">Business Model</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="">
            <div class="brochure">
                <img src="assets/images/brochure2.png" class="">
                <span style="color:sienna">One Page Brochure</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="">
            <div class="brochure">
                <img src="assets/images/brochure3.png" class="">
                <span style="color:brown">Custodian Guidlines</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="">
            <div class="brochure">
                <img src="assets/images/brochure4.png" class="">
                <span style="color:darkolivegreen">Pricing Model</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="">
            <div class="brochure">
                <img src="assets/images/brochure5.png" class="">
                <span style="color:darkslateblue">Terms &amp; Conditions</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
        <div class="">
            <div class="brochure">
                <img src="assets/images/brochure6.png" class="">
                <span style="color:darkslategray">KYC &amp; AML Requirements</span>
                <span>PDF - 1.3 MB</span>
                <button id="legal-btn">DOWNLOAD</button>
            </div>
        </div>
    </div>

</div>


<div id="nusku-media" class="uk-background-muted ">
    <h2 id="nusku-media-title" class="reveal-up">Ibinex Media Coverage</h2>
    <div id="nusku-media-cov">
        <img src="assets/images/media1.png" class="nusku-media-logo reveal-up">
        <img src="assets/images/media2.png" class="nusku-media-logo reveal-up">
        <img src="assets/images/media3.png" class="nusku-media-logo reveal-up">
        <img src="assets/images/media4.png" class="nusku-media-logo reveal-up">
        <img src="assets/images/media5.png" class="nusku-media-logo reveal-up">
        <img src="assets/images/media6.png" class="nusku-media-logo reveal-up">
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
        window.sr = ScrollReveal({opacity: 0, duration: 800, delay:300});
        sr.reveal('.reveal-up');
        sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
        sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
        sr.reveal('.fade',{distance:'0'});
    })
</script>
@endsection