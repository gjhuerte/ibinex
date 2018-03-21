@extends('layouts.uikit')

@section('styles_include')
<link href="{{ asset('css/contact-us/contact-us.css') }}" rel="stylesheet" />
<link href="{{ asset('css/contact-us/contact-us.sm.css') }}" rel="stylesheet" />
<link href="{{ asset('css/contact-us/contact-us.md.css') }}" rel="stylesheet" />
<link href="{{ asset('css/contact-us/contact-us.lg.css') }}" rel="stylesheet" />
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
<script src="{{ asset('js/contact-us/contact-us.js') }}"></script>
@endsection