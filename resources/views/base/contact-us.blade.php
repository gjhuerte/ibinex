@extends('layouts.uikit')

@section('styles_include')
<style>


    .contact-us-background{
        background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
        background-size: cover;
        background-position: 50% 50%;
        background-color: #edeef2;
        padding-top:20%;
    }

    .header-text {
        font-size:1.8em;
        font-size: var(--heading-40px);
        font-weight: 900;
    }

    .support-header{
        padding-bottom:6%;
    }

    .support-text{
        padding-right:5%;
    }

    .intro-text-top{
        color: #728298;
        font-size: var( --paragraph-17px);
        font-weight: 600;
    }
    .intro-text-top li span svg{
        margin-right: 10px;
    }

    .intro-text-bottom{
        color: #173d54;
        font-size: 0.8em;
        color: #728298;
        font-size: var( --paragraph-17px);
        font-weight: 600;
    }

    .text-holder{
        margin-left:16%;
        max-width: 38%;
    }

    .right{
        height:100vh;
        background-color: #b71c1c;
        position:relative;
    }

    .white-form{
        width:42%;
        background-color: whitesmoke;
        margin-left:12%;
        margin-top:-23%;
        margin-bottom: 15%;
        padding:5%;
    }

    div#contact-us-form{
        background-color:#b71c1c !important;
    }

    .bottom-text-left{
        padding-bottom:50px;
        max-width:368px;
        float:right;
        padding-top:77px;
        font-weight:500;
    }


    .label{
        font-size:0.7em;
    }


    #contact-us-form .white-form .form-input, #contact-us-form .white-form .form-textarea{
        border-radius: 5px;
        -webkit-box-shadow: 0px 1px 2px -2px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 1px 2px -2px rgba(0,0,0,0.75);
        box-shadow: 0px 1px 2px -2px rgba(0,0,0,0.75);
    }

    .form-button{
        border-radius: 5px;
        background-color: #142c5a;
        color:whitesmoke;
        font-weight: 900;
    }

    .form-textarea{
        height:150px;
        max-height: 200px;

    }




    .ext{
        background-color: #b71c1c;
        height:10vh;
        border: 1px solid black;
    }

    .hidden{
        visibility:hidden;
    }



    @media only screen and (max-width: 1024px){
        .text-holder{
            margin-left:0%;
            max-width: 47%;
            margin-top:27%;
        }
    }

    @media only screen and (max-width: 768px){
        .text-holder{
            max-width: 54%;
            margin-top:27%;
        }

        #contact-us-form .white-form{
            width:65%;
            background-color: whitesmoke;
            margin-top:-23%;
            margin-bottom: 15%;
            padding:5%;
        }
    }


    @media only screen and (max-width: 639px){
        .contact-us-background{
            background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
            background-size: 191%;
            background-position: top left;
        }

        .text-holder{
            max-width: 100%;
            margin-top:40%;
            height:auto;
            padding-bottom:20px;
        }

        .bottom-text-left{
            padding-bottom:133px ;
            max-width:100%;
            font-weight:500;
            padding-top: 0px;
        }

        .white-form{
            width:100%;
            background-color: #FFFFFF !important;
        }

        div#contact-us-form{
            background-color: #FFFFFF !important;
        }
        .intro-text-top li span svg{
            margin-right: 10px;
        }
        .intro-text-top{
            font-weight: 500;
        }
        .intro-text-bottom{
            font-weight: 500;
        }
        .white-form {
            width: 90%!important;
            margin-left: 0;
        }
        .form-textarea {
            height: 100%;
        }
        .form-button{
            padding: 6px 75px;
        }

    }

</style>
@endsection

@section('content')
<div class="uk-section-default">
    <div class="uk-section uk-background-cover contact-us-background">
        <div class="uk-container">

            <div class="uk-grid-match uk-child-width-1@m" uk-grid>
                <div id="get-started" class="text-holder">
                    <h1 class="uk-text-bold header-text">Get Started</h1>
                    <p class="uk-text-bold uk-text-justify intro-text-top">
                        We invite you to experience the Ibinex demo here, which will help you to conceptualise
                        the possibilities of personalisation for your own exchange.
                        <br><br>
                        The next step is to contact us to discuss on-boarding. It is a simple process which you can
                        learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                    </p>

                    <ul class="uk-list uk-text-bold uk-text-justify intro-text-top">
                        <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                           width="20" height="20"
                           viewBox="0 0 252 252"
                           style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Local Escrow deposit(reserve only, no payment)</li>
                        <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                           width="20" height="20"
                           viewBox="0 0 252 252"
                           style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Letter of Intent</li>
                        <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                           width="20" height="20"
                           viewBox="0 0 252 252"
                           style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Proof of Escrow deposit</li>
                    </ul>

                    <p class="uk-list uk-text-bold uk-text-justify intro-text-top">
                        Please note that due to high demand, the current on-boarding timeframe is 4 months.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="uk-grid-collapse uk-child-width-expand@s bottom-section" uk-grid uk-grid>
    <div>
        <div class="uk-background-default uk-padding">
            <div class="bottom-text-left">
                <h1 class="uk-text-bold uk-text-justify header-text support-header">Support</h1>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                    Contact and feedback are integral to the Ibinex way,
                    enabling us to cater to your needs and requirements
                    effectively and efficiently.
                </p>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                    For support regarding any aspect of the Ibinex
                    platform, your use of this website or your own
                    exchange integration, please contact us with your
                    enquiry for personalised customer service.
                </p>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                    We will endeavour to respond to you as promptly as
                    possible.
                </p>
            </div>
        </div>
    </div>
    <div id="contact-us-form">
        <div class="white-form">
            <form>
                <div class="uk-margin">
                    <label class="uk-text-left uk-text-bold label">Full Name</label>
                    <input class="uk-input uk-form-width-large form-input form" spellcheck="false" type="text">
                </div>
                <div class="uk-margin">
                    <label class="uk-text-left uk-text-bold label">Email Address</label>
                    <input class="uk-input uk-form-width-large form-input form" spellcheck="false" type="email">
                </div>

                <div class="uk-margin">
                    <label class="uk-text-left uk-text-bold label">Subject</label>
                    <input class="uk-input uk-form-width-large  form-input form" type="text">
                </div>

                <div class="uk-margin">
                    <label class="uk-text-left uk-text-bold label">Message</label>
                    <textarea class="uk-input uk-form-width-large form-textarea form" rows="6" cols="50"></textarea>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary uk-button-medium form-button form">SEND</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts_include')
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
    $(window).on("load", function(){
        window.sr = ScrollReveal({ mobile: true });

        sr.reveal('.header-text', { /* Animates the top introduction header */

            origin: 'left',
            distance: '200px',
            opacity: 0
        });

        sr.reveal('.intro-text-top', { /* Animates the introduction paragraph at the top */

            origin: 'left',
            opacity: 0,
            duration: 500,
            distance: '200px',
            delay: 250
        },100);

        sr.reveal('.intro-text-bottom', { /* Animates the introduction paragraph at the bottom */
            origin: 'bottom',
            opacity: 0,
            duration: 500,
            distance: '200px',
            delay: 250
        },100);

        sr.reveal('.white-form', { /* Animates the form */
            origin: 'right',
            opacity: 0,
            duration: 500,
            distance: '500px',
            delay: 400
        });

        sr.reveal('.form', { /* Animates the form */
            origin: 'bottom',
            opacity: 0,
            duration: 500,
            distance: '100px',
            delay: 450
        },50);
    });




</script>
@endsection