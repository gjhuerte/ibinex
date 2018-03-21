
<div class="navbar">
  <!-- topmost navigation -->
  <div class="media-larger-devices">
    <nav class="contact-info-navbar">
      <div class="contact-info-navbar-child">

        <ul class="contact-info-navbar-nav">
          <li>
            <a href="#">
              <div style="color: #112C58;">
                <i class="fas fa-phone" data-fa-transform="flip-h" style="margin-right: 5px;"></i> 1-800-972-3981
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="live-chat-green">
                <i class="fas fa-comments" style="margin-right: 5px;"></i> Live Chat
              </div>
            </a>
          </li>
        </ul>

        <div>
          <form>
            <button class="button-telegram-blue">
              <i class="far fa-paper-plane"></i>  <span style="padding-left: 9px;padding-right: 9px;">join our telegram community</span>
            </button>
          </form>
        </div>

      </div>
    </nav>
  </div>
  <!-- topmost navigation -->

    <!--  navigation bar icon on smaller devices  -->
    <div class="media-smaller-devices">
      <!--   navigation bar icon at smaller devices   -->
      <ul class="navigation-navbar-sm">
        <li>
          <a class="" href="">
            <img src="{{ asset('images/ibinex-logo.png') }}" class="expand">
          </a>
        </li>

        <li>
          <button class="btn-invisible" id="hamburger-navbar-sm">
            <i class="fas fa-bars"></i>
          </button>
        </li>

      </ul>
      <!--   navigation bar icon at smaller devices   -->
    </div>
    <!--  navigation bar icon on smaller devices  -->

  <!-- nav for different pages -->
  <nav class="media-larger-devices navigation-navbar" id="base-navbar-sm">

    <!--  navigation bar on medium to large devices  -->
    <div class="navigation-navbar-child">
      <div class="navbar-logo-main">
        <a href="{{ url('/') }}">
          <img src="{{ asset('images/ibinex-logo.png') }}" alt="Ibinex Logo" width="70%" height="70%">
        </a>
      </div>

      <ul class="navigation-navbar-child-nav">

        <li>
          <a href="{{ url('/') }}">
              Home
          </a>
        </li>
        <li>
          <a href="{{ url('why-ibinex') }}">
              Why Ibinex
          </a>
        </li>
        <li>
          <a href="{{ url('pricing') }}">
              Pricing
          </a>
        </li>
        <li>
          <a href="{{ url('services') }}">
              Services
          </a>
        </li>
        <li>
          <a href="{{ url('about-us') }}">
              About Us
          </a>
        </li>
        <li>
          <a href="{{ url('security') }}">
              Security
          </a>
        </li>
        <li>
          <a href="#">
              Legal
          </a>
        </li>
        <li>
          <a href="{{ url('contact-us') }}">
              Contact Us
          </a>
        </li>
      </ul>

      <div class="navbar-nav-button-live-demo">
        <form>
          <button class="button-live-demo-blue">Live Demo</button>
        </form>
      </div>

    </div>
    <!--  navigation bar on medium to large devices  -->
  </nav>
  <!-- nav for different pages -->

  <!-- nav for different currencies -->
  <nav class="navbar-currency">
    <div class="navbar-currency-child">

      <ul class="navbar-currency-child-nav">
        <li>
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>

        <li class="show-on-smaller-devices">
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>

        <li class="show-on-smaller-devices">
          <a href="">
            <div class="label-white">ETH/USD
              <div class="label-decreasing"> 697.00</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">DASH/USD
              <div class="label-increasing"> 957.34</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">XPR/USD
              <div class="label-decreasing"> 1.89</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">LTC/USD
              <div class="label-increasing"> 209.20</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">BTC/USD
              <div class="label-increasing"> 2,455.00</div>
            </div>
          </a>
        </li>

        <li>
          <a href="">
            <div class="label-white">BH/USD
              <div class="label-increasing"> 12,455.00</div>
            </div>
          </a>
        </li>
      </ul>

    </div>
  </nav>
  <!-- nav for different currencies -->
</div>

<script type="text/javascript">
  navbar_button = document.getElementById('hamburger-navbar-sm')
  navbar_button.addEventListener('click', function(){
    display_type = document.getElementById('base-navbar-sm');
    if(display_type.style.display == 'block')
    {
      $('#base-navbar-sm').slideUp(400)
    }else
    {
      $('#base-navbar-sm').slideDown(400)
    }
  })
</script>