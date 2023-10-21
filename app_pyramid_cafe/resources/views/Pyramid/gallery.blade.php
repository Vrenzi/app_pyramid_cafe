@extends('layouts.pyramid')

@section('container')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
						<h1>See <em>Our</em> Gallery</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<style>
	#fh5co-gallery .fh5co-heading h2 {
  margin-bottom: 50px;
}
</style>

<div id="fh5co-gallery" class="fh5co-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 fh5co-heading animate-box text-center">
				<h2>Our Gallery</h2>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_1.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_2.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-6 col-sm-6 fh5co-gallery_item">
				<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_4.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
			</div>

			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_6.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_7.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-6 col-sm-6 fh5co-gallery_item">
				<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_9.jpeg);" data-trigger="zoomerang"></div>
			</div>

			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_1.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_2.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-6 col-sm-6 fh5co-gallery_item">
				<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_4.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
			</div>

			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_6.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-3 col-sm-3 fh5co-gallery_item">
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_7.jpeg);" data-trigger="zoomerang"></div>
				<div class="fh5co-bg-img" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
			</div>
			<div class="col-md-6 col-sm-6 fh5co-gallery_item">
				<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_9.jpeg);" data-trigger="zoomerang"></div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
	Zoomerang
  .config({
	maxHeight: 600,
	maxWidth: 900,
	bgColor: '#000',
	bgOpacity: .85
  })
  .listen('[data-trigger="zoomerang"]')
</script>

@endsection