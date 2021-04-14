<template>
  <div id="index">
    <main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title"> {{ $t('welcome.title') }} </h2>
				<p class="col-12 text-center"> {{ $t('welcome.desc') }} </p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">{{ $t('nav.pizza') }}</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">{{ $t('nav.salad') }}</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">{{ $t('nav.noodle') }}</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" v-for="gallery in galleryes" :key="gallery.title">
						<figure>
							<img :src="`${gallery.img.src}`" :alt="`${gallery.img.alt}`" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">{{ gallery.title }}</h4>
								<p class="tm-gallery-description">{{ gallery.description }}</p>
								<p class="tm-gallery-price">{{ gallery.price }}</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->

			</div>

			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="/img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
							<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
							<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</main>
  </div>
</template>

<script>
export default {
  data(){
    return {
      galleryes: [
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/01.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/02.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/03.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/04.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/05.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/06.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/07.jpg",
            alt: "Image"
          }
        },
        {
          title: "Fusce dictum finibus",
          description: "Fusce dictum finibus",
          price: "$15",
          img:{
            src: "/img/gallery/08.jpg",
            alt: "Image"
          }
        },
      ]
    }
  }
}
</script>

<style>

</style>