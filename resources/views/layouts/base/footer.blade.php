<style>
    .teal-dark {
        color: #04293D;
    }

    .teal-darker {
        color: #041C2C;
    }

    .bg-teal-dark {
        background-color: #04293D;
    }

    .footer-upper {
        list-style-type: none;
        padding-bottom: 1%;
        margin-bottom: 0;
        border: none;
    }

    .give-us-a-call {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 1fr;
    }

    .give-us-a-call > * {
        grid-column: 2 / span 1;
        grid-row: 1 / span 1;
        padding: 7% 0%;
        margin: 0;
        align-items: center;
        color: #D0D4D7;
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 5px;
    }

    .company-information {
        display: grid;
        grid-template-columns: 1fr 3.5fr 1fr;
        grid-template-rows: 1fr;
    }

    .company-information-child {
        grid-column: 2 / span 1;
    }

    .company-information-list {
        float: left;
        list-style-type: none;
        padding-right: 0;
        font-size: 12px;
    }

    .company-information-list > li:not(.footer-header-color) {
        margin: 6px 0;
    }

    .company-information-list > li:not(.footer-header-color) > a{
        font-size: 9.5px;
        font-weight: 500;
    }

    .bg-teal-darker {
        background-color: #041C2C;
    }

    .footer-header-color {
        color: #767F88;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer-nav > li :not(.footer-header-color) {
        color: #F3F6F4;
        text-decoration: none;
    }

    .company-information-list > li :not(.footer-header-color) {
        color: #F3F6F4;
        text-decoration: none;
        font-size: 10px;
        font-weight: 600;
        margin-bottom: 1px;
    }

    .footer-lower {
        border: none;
        display: grid;
        grid-template-columns: 1fr 3fr 1fr;
        grid-template-rows: auto;
    }

    .footer-lower-child {
        grid-column: 2 / span 1;
        grid-row: 1 / span 1;
        display: grid;
        grid-template-columns: 1fr 2fr 2fr;
        padding-top: 3%;
    }

    .footer-lower-image-logo {
        grid-column: 1 / span 1;
        align-self: center;
    }

    .footer-lower-offices-information {
        grid-column: 2 / span 1;
        grid-row: 1 / span 1;
        padding: 7% 7% 0 7%;
    }

    .footer-lower-offices > ul > li{
        margin: 5% 0;
    }

    .list-unstyled {
        padding: 0;
        list-style-type: none;
    }

    .footer-lower-additional-information{
        padding: 7%;
        grid-column: 3 / span 1;
        grid-row: 1 / span 1;
    }

    div.footer-lower-disclosure {
        grid-column: 1 / span 3;
        grid-row: 2 / span 1;
        font-size: 9px;
        font-weight: 600;
        margin: 0;
    }

    div.footer-lower-disclosure > p {
        margin: 0 0 5% 0;
        text-align: justify;
    }

    .footer-lower-offices > .list-unstyled > li {
        font-size: 10px;
    }

    .footer-lower-offices > .list-unstyled > li:first-child {
        padding-top: 20px;
    }

    .footer-lower-offices > .list-unstyled > li > a {
        color: #FEFFFD;
        font-weight: 500;
        margin: 20px 0;
    }

    .footer-header-color-light {
        font-size: 11px;
        font-weight: 700;
        color: #45525B;
    }

    .button-red-1 {
        color: white;
        background-color: #C81824;
        border: none;
        border-radius: 0% 5px 5px 0%;
        /*     padding: 7%; */
        font-size: 75%;
        text-transform: uppercase;
        grid-column: 2 / span 1;
    }

    .footer-input-submit {
        background-color: white;
        color: black;
        border-radius: 5px 0 0 5px;
        padding: 7%;
        border: none;
        font-size: 10px;
        grid-column: 1 / span 1;
    }

    .input-group {
        display: grid;
        grid-template-columns: 2fr 1fr;
        padding: 5% 0 2% 0;
    }

    .clear-padding-left {
        padding-left: 0;
    }

    .footer-contact-logo {
        margin-top: 10px;
    }

    .footer-contact-logo > img {
        width: 10%;
        height: 10%;
    }

    @media (min-width: 992px) {
        .padding-medium {
            padding-left: 15%;
            padding-right: 10%;
        }

        .footer-lower-offices {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr;
        }

        .footer-lower-offices {
            display: grid;
            grid-template-columns: 1fr 1fr ;
        }
    }

    @media (max-width: 992px) {
        .give-us-a-call-number {
            display: block;

        }

        ul.footer-upper {
            padding-left: 0;
        }

        .company-information {
            display: flex;
        }

        ul.company-information-list {
            clear: both;
            grid-column: 1 / span 1;
        }

        .company-information-list {
            padding-left: 20%;
        }

        .footer-lower {
            display: block;
        }

        .footer-lower-child {
            display: block;
        }

        .footer-lower-image-logo {
            padding-top: 20px;
        }

        .footer-website-logo {
            width: 50%;
            height: 50%;
            transform: translatex(45%);
            align-content: center;
            align-items: center;
            align-self: center;
        }

        .footer-lower-additional-information {
            padding-bottom: 0;
        }

        .footer-lower-disclosure {
            display: block;
            padding: 0 20px 20px 20px;
        }

        .button-red-1 {
            padding: 4%;
        }

        .footer-input-submit {
            padding: 4%;
        }
    }
</style>

<div class="footer">
    <ul class="footer-upper bg-teal-dark">
        <li class="give-us-a-call">
            <!--  upper header  -->
            <h4>GIVE US A CALL: <span class="give-us-a-call-number"> 1-800-972-3981</span></h4>
            <!--  upper header  -->
        </li>
        <!--  upper header additional navigation  -->
        <li class="company-information">
            <div class="company-information-child">
                <!--  why ibinex    -->
                <ul class="company-information-list why-ibinex clear-padding-left" style="margin-top: 20px;">
                    <li class="footer-header-color">Why Ibinex?</li>
                    <li><a href="#">Our Vision</a></li>
                </ul>
                <!--  why ibinex    -->
                <!--  pricing    -->
                <ul class="company-information-list">
                    <li class="footer-header-color">Pricing</li>
                    <li><a href="#">Platform Pricing</a></li>
                    <li><a href="#">Liquidity Fee's</a></li>
                </ul>
                <!--  pricing    -->
                <!--  services    -->
                <ul class="company-information-list">
                    <li class="footer-header-color">Services</li>
                    <li><a href="#">Platform</a></li>
                    <li><a href="#">CRM / BackOffice</a></li>
                    <li><a href="#">Cryptobridge</a></li>
                    <li><a href="#">Credit Card Processing</a></li>
                    <li><a href="#">Custodian Accounts</a></li>
                </ul>
                <!--  services    -->
                <!--  security    -->
                <ul class="company-information-list">
                    <li class="footer-header-color">Security</li>
                    <li><a href="#">Protection of Funds</a></li>
                    <li><a href="#">Encryption Technologies</a></li>
                    <li><a href="#">Information Security</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                <!--  security    -->
                <!--   legal   -->
                <ul class="company-information-list">
                    <li class="footer-header-color">Legal</li>
                    <li><a href="#">Regulation</a></li>
                    <li><a href="#">AML &amp KYC</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Marketing and Guidelines</a></li>
                    <li><a href="#">Licensing</a></li>
                    <li><a href="#">Entry Requirements</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <!--   legal   -->
                <!--   about ibinex   -->
                <ul class="company-information-list footer-header-color">
                    <li class="footer-header-color">About Ibinex</li>
                    <li><a href="#">Transparency</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Executive Team</a></li>
                    <li><a href="#">Advisory Board</a></li>
                    <li><a href="#">Roadmap</a></li>
                </ul>
                <!--   about ibinex   -->
            </div>
        </li>
        <!--  upper header additional navigation  -->
    </ul>

    <!-- contact details -->
    <div class="footer-lower bg-teal-darker">
        <div class="footer-lower-child">
            <div class="footer-lower-image-logo">
                <img class="footer-website-logo" src="assets/images/ibinex-logo-white.png" alt="Website Logo" >
            </div>
            <!--  Ibinex Offices    -->
            <div class="footer-lower-offices-information">
                <h4 class="footer-header-color-light" style="margin-bottom: 0px;">
                    IBINEX OFFICES
                </h4>
                <!--   offices     -->
                <div class="footer-lower-offices">
                    <ul class="list-unstyled">
                        <li><a href="#">Ibinex Officials</a></li>
                        <li><a href="#">315 W 36th Street</a></li>
                        <li><a href="#">New York, NY</a></li>
                        <li><a href="#">Office: 1-800-972-3981</a></li>
                        <li><a href="#">contact@ibinex.com</a></li>
                    </ul>

                    <ul class="list-unstyled" style="margin-top: 0px; margin-bottom: 0px;">
                        <li><a href="#">iBinex Technologies</a></li>
                        <li><a href="#">Ha-Tidhar Street 15</a></li>
                        <li><a href="#">Ra'anana, Israel</a></li>
                        <li><a href="#">Office: 1-809-457257</a></li>
                        <li><a href="#">md@ibinex.com</a></li>
                    </ul>
                </div>
                <!--   offices     -->
            </div>
            <!--  Ibinex Offices    -->
            <!--   contacts     -->
            <div class="footer-lower-additional-information">
                <ul class="list-unstyled">
                    <li class="footer-header-color-light">SIGN UP TO OUR NEWSLETTER</li>
                    <li>
                        <form class="">
                            <div class="input-group">
                                <input class="footer-input-submit" type="email" placeholder="Insert your email">
                                <button class="button-red-1 uk-button uk-button-danger" type="button">Submit</button>
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="footer-header-color-light">
                        FIND US ONLINE
                    </li>
                    <li class="footer-contact-logo">
                        <img src="assets/images/logo/facebook-logo.png">
                        <img src="assets/images/logo/twitter-logo.png">
                        <img src="assets/images/logo/whatsapp-logo.png">
                        <img src="assets/images/logo/messenger-logo.png">
                        <img src="assets/images/logo/skype-logo.png">
                        <img src="assets/images/logo/telegram-logo.png">
                        <img src="assets/images/logo/youtube-logo.png">
                        <img src="assets/images/logo/viber-logo.png">
                    </li>
                </ul>
            </div>
            <!--   contacts     -->
            <div class="footer-lower-disclosure">
                <p>
                    Risk Disclosure: ibinex FInancials (ibinex.com) will not accept any liability for loss or damage as a result of reliance on the information contained within this website including data, quotes, charts and buy/sell signals. Please be fully informed regarding
                    the risks and costs associated with trading the cryptocurrency markets, it is one of the riskiest investment forms possible. Trading or investing in cryptocurrencies carries with it potential risks. Prices of cryptocurrencies are extremely volatile
                    and may be affected by external factors such as financial, regulatory or politiical events. Cryptocurrencies are not suitable for all investors. Before deciding to trade foreign exchange or any other carefully consider your investment objectives,
                    level of experience, and risk appetite. Ibinex Financials would like to remind you that the data contained in this website is not necessarily real-time nor accurate. Cryptocurrence prices are not provided by exchanges but rather by market makers,
                    and so prices may not be accurate and may differ from the actual market price, meaning prices are indicative and not appropriate for trading purposes. Therefor Ibinex doesn't bear any responsibility for any trading losses you might incur as a result
                    of using this data.
                </p>
            </div>
        </div>
    </div>
    <!-- contact details -->
</div>

