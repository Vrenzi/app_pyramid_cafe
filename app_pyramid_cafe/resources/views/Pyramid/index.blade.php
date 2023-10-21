@extends('layouts.pyramid')

@section('container')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(https://cdn.cpdonline.co.uk/wp-content/uploads/2021/11/28121921/Food-Safety-Guide-for-Coffee-Shops.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>Best Coffee Shop in</h1>
						<h1>Ciater!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-about" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
				<style></style>
			</div>s
			<div class="col-md-5 col-md-push-1 animate-box">
				<div class="section-heading">
					<h2>The Restaurant</h2>
					<p>Mau ngumpul-ngumpul asik bersama teman-teman di cafe dengan nyaman dan menu makanan yang lezat dan murah? Datang langsung aja ke Pyramid Coffee yang ada di Ruko Nusaloka BSD, Blok RH No. 1 Sektor 14.6, BSD CITY. Dijamin nuansanya bikin betah berlama-lama di sana.</p>
					<p><a href="/about" class="btn btn-primary btn-outline">Our History</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-featured-menu" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box">
				<h2>Today's Coffee</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Ketika kamu melakukan sesuatu, jangan terburu-buru. Nikmatilah apa yang ada dihadapanmu. Sama halnya dengan meminum kopi.. Jadi apalagi yang kamu tunggu? buruan dipesan kopinya!</p>
					</div>
				</div>
			</div>
			@foreach ($all as $index => $item)
			@if($index % 2 == 0)
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
				<div class="fh5co-item">
					<img src="{{ asset('storage/images/' . $item->picture) }}" class="img-responsive" alt="{{ asset('storage\app\public\images' . $item->picture) }}">
					<h3>{{ $item->name }}</h3>
					<span class="fh5co-price">{{ $item->price }}<sup></sup></span>
					<p></p>
				</div>
			</div>
			@else
			<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
				<div class="fh5co-item margin_top">
					<img src="{{ asset('storage/images/' . $item->picture) }}" class="img-responsive" alt="{{ asset('storage\app\public\images' . $item->picture) }}">
					<h3>{{ $item->name }}</h3>
					<span class="fh5co-price">{{ $item->price }}<sup></sup></span>
					<p></p>
				</div>
			</div>
			@endif
			@endforeach
			</div>
		</div>
	</div>
</div>

<div id="fh5co-slider" class="fh5co-section animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-6 animate-box">
				<div class="fh5co-heading">
					<h2>Our Best <em>&amp;</em> Pastry</h2>
					<p>Apa rasanya menikmati secangkir kopi tanpa sepotong pastry yang lezat? Ayo, jangan lupa pesan pastry kita!</p>
				</div>
			</div>
			<div class="col-md-6 col-md-push-1 animate-box">
				<aside id="fh5co-slider-wrwap">
				<div class="flexslider">
					<ul class="slides">
					@foreach ($all as $item)
					<li style="background-image: url('{{ asset('storage/images/' . $item->picture) }}')">
						   <div class="overlay-gradient"></div>
						   <div class="container-fluid">
							   <div class="row">
								   <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
									   <div class="slider-text-inner">
										   <div class="desc">
												<h2>{{ $item->name }}</h2>
												<p>{{ $item->price }}</p>
												<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </li>
					   @endforeach		   	
					  </ul>
				  </div>
			</aside>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-blog" class="fh5co-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2>Events</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#" class="blog-bg" style="background-image: url(https://cdn.cpdonline.co.uk/wp-content/uploads/2021/11/28121921/Food-Safety-Guide-for-Coffee-Shops.jpg);"></a>
					<div class="blog-text">
						<span class="posted_on">Feb. 15th 2016</span>
						<h3><a href="#">Photoshoot On The Street</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="stuff">
							<li><i class="icon-heart2"></i>1.2K</li>
							<li><i class="icon-eye2"></i>1.5K</li>
							<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
						</ul>
					</div> 
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#" class="blog-bg" style="background-image: url(images/gallery_2.jpeg);"></a>
					<div class="blog-text">
						<span class="posted_on">Feb. 15th 2016</span>
						<h3><a href="#">Surfing at Philippines</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="stuff">
							<li><i class="icon-heart2"></i>1.2K</li>
							<li><i class="icon-eye2"></i>2K</li>
							<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
						</ul>
					</div> 
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#" class="blog-bg" style="background-image: url(images/gallery_3.jpeg);"></a>
					<div class="blog-text">
						<span class="posted_on">Feb. 15th 2016</span>
						<h3><a href="#">Focus On Uderwater</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="stuff">
							<li><i class="icon-heart2"></i>1.2K</li>
							<li><i class="icon-eye2"></i>2K</li>
							<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
						</ul>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br>
	
</div>

<!-- Book Table -->

	



@endsection