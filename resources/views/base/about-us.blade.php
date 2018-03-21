@extends('layouts.uikit')

@section('styles_include')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<link rel="stylesheet" href="{{ asset('css/about-us/about-us.css') }}" />
<link rel="stylesheet" href="{{ asset('css/about-us/about-us.sm.css') }}" />
<link rel="stylesheet" href="{{ asset('css/about-us/about-us.md.css') }}" />
<link rel="stylesheet" href="{{ asset('css/about-us/about-us.lg.css') }}" />
<style type="text/css">
	#banner-img{
	    order: 0;
	    width: 45%;
	    overflow: hidden;
	    background-size: cover;
	    background-position: center;
	    background-image: url('{{ asset('images/about-us/about-banner.jpg') }}');
	}
</style>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
@endsection

@section('content')
<div id="ibx-banner" class="uk-grid">
    <div id="banner-content" class="uk-width-3-5">
		<div class="uk-scrollspy-inview">
        	<span id="banner-title">Transparency</span>
			<div id="banner-inner">
				<p>
					Ibinex is a collaboration of pioneers. With decades of combined experience within the finance, 
					technology, cyber security and SaaS worlds, today we are proud to work with over 60 of the leading
					exchanges for hundreds of cryptocurrencies.
				</p>
				<p>
					We channel our extensive industry knowledge and vision into the live and developing cryptocurrency 
					arena, to provide you with premium solutions for you to create tailored exchange platforms with our 
					seasoned experience as your competitive edge.
				</p>
				<p>
					We are trusted by thousands of customers world-wide daily as their white-label exchange platform, and 
					pride ourselves on exhibiting the very highest standards of transparency and professionalism.
				</p>
				<p>
					Ibinex is defined by our dedication to unifying trading standards in the cryptocurrency world, increasing 
					accountability, integrity and excellence in service.
				</p>
			</div>
		</div>
    </div>
    <div id="banner-img" class="uk-width-2-5"></div>
</div>
<div id="ibx-media">
	<div id="media-inner">
		<span id="media-title" class="reveal-up">Ibinex media coverage</span>
		<div id="media-cov">
			<img src="{{ asset('images/about-us/media/media1.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media2.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media3.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media4.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media5.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media6.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media7.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media8.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media9.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media10.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media11.png') }}" class="media-logo reveal-up" />
			<img src="{{ asset('images/about-us/media/media12.png') }}" class="media-logo reveal-up" />
		</div>
	</div>
</div>
<div id="ibx-team">
    <div id="ibx-exec" class="reveal-up">
        <div id="exec-team" class="exec-half reveal-right">
            <span id="exec-title-1" class="exec-header">Executive team</span>
            <span id="exec-title-2" class="exec-header">The people behind iBinex.</span>
            <span id="exec-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat.
            </span>
        </div>
		<div id="exec-list">
			<div id="exec-album" class="reveal-left">
				<div id="exec-images">
					<img class="exec-img exec-cards" src="{{ asset('images/about-us/exec/exec1.png') }}"/>
					<img class="exec-img exec-cards" src="{{ asset('images/about-us/exec/exec2.png') }}"/>
					<img class="exec-img exec-cards" src="{{ asset('images/about-us/exec/exec3.png') }}"/>
				</div>
			</div>
            <div id="exec-slideshow" class="reveal-right">
				<div class="exec-div-slick slick-track">
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">Matthew Novinski</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-in">
								<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
								<a class="exec-links" href="">Linkedin Profile</a>
							</span>
							<span class="exec-cv">
								<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
								<a class="exec-links" href="">Download CV</a>
							</span>
						</div>
					</div>
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">John Whirlpool</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-in">
								<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
								<a class="exec-links" href="">Linkedin Profile</a>
							</span>
							<span class="exec-cv">
								<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
								<a class="exec-links" href="">Download CV</a>
							</span>
						</div>
					</div>
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">Rion Pronelle</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-in">
								<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
								<a class="exec-links" href="">Linkedin Profile</a>
							</span>
							<span class="exec-cv">
								<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
								<a class="exec-links" href="">Download CV</a>
							</span>
						</div>
					</div>
				</div>
				<div id="arrow-box">
					<a id="exec-prev" class="exec-arrows" href="#" data-uk-slideshow-item="previous">&#x2190;</a>
					<a id="exec-next" class="exec-arrows" href="#" data-uk-slideshow-item="next">&#x2192;</a>
				</div>
			</div>
		</div>
    </div>
    <div id="ibx-board">
        <hr id="ibx-divider"/>
		<span class="board-title board-web-title reveal-up">Advisory <span class="board-italic">Board</span></span>
        <span class="board-title board-mobile-title reveal-up">Ibinex Advisory Board</span>
		<div id="board-box">
			<div id="board-list">
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board1.png') }}" class="board-img" />
					<span class="board-name exec-header">Jeremy Corbein</span>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board2.png') }}" class="board-img" />
					<span class="board-name exec-header">Jimmy Fallon</span>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board3.png') }}" class="board-img" />
					<span class="board-name exec-header">Stephen Colbert</span>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board4.png') }}" class="board-img" />
					<span class="board-name exec-header">Artem Kushik</span>
					<span class="board-rank">Business Analyst, Credit Agricole CIB</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board1.png') }}" class="board-img" />
					<span class="board-name exec-header">Jeremy Corbein</span>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board2.png') }}" class="board-img" />
					<span class="board-name exec-header">Jimmy Fallon</span>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board3.png') }}" class="board-img" />
					<span class="board-name exec-header">Stephen Colbert</span>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="{{ asset('images/about-us/board/board4.png') }}" class="board-img" />
					<span class="board-name exec-header">Artem Kushik</span>
					<span class="board-rank">Business Analyst, Credit Agricole CIB</span>
				</div>
			</div>
			<div id="board-arrow-box">
				<a id="board-prev" class="board-arrows" href="#" uk-icon="icon: chevron-left; ratio: 2"></a>
				<a id="board-next" class="board-arrows" href="#" uk-icon="icon: chevron-right; ratio: 2"></a>
			</div>
		</div>
    </div>
</div>
@endsection

@section('scripts_include')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('js/about-us/about-us.js') }}"></script>
@endsection