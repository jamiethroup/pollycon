<?php get_header(); ?>

<div class="">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

<?php get_template_part( 'template-parts/acf', 'hero' ); ?>
<?php get_template_part( 'template-parts/acf', 'introduction' ); ?>
<section class="container mx-auto px-6 max-w-7xl pt-0 mb-10">
        <div class="project-block px-6 md:px-0 py-10 md:py-40 flex flex-col md:grid md:grid-cols-12 md:gap-10">
					<div class=" image">
						<figure
							data-sal="slide-up"
							data-sal-delay="200"
							data-sal-duration="500"
							data-sal-easing="ease-out-back"
						>
						<img src="<?= get_template_directory_uri() ?>/img/loulouimages.png" alt="Jamie and Lucy">
						</figure>
					</div>
          <div
            class="text"
            data-sal="slide-up"
            data-sal-delay="200"
            data-sal-duration="500"
            data-sal-easing="ease-out-back"
          >
          <span>
            <span class='rounded-pill'>Development</span>
          </span>
            <h4>Lou Lou Images</h4>
            <p class='font-outfit text-base max-w-sm leading-normal mt-4 font-light text-neutral-500'>
						Creating an unique design for a Birmingham based studio
						</p>
          </div>
        </div>
        <div class="project-block px-6 md:px-0 py-10 md:py-40 flex flex-col md:grid md:grid-cols-12 md:gap-10">
					<div class=" image">
						<figure
							data-sal="slide-up"
							data-sal-delay="200"
							data-sal-duration="500"
							data-sal-easing="ease-out-back"
						>
						<img src="<?= get_template_directory_uri() ?>/img/loulouimages.png" alt="Jamie and Lucy">
						</figure>
					</div>
          <div
            class="text"
            data-sal="slide-up"
            data-sal-delay="200"
            data-sal-duration="500"
            data-sal-easing="ease-out-back"
          >
          <span>
            <span class='rounded-pill'>Development</span>
          </span>
            <h4>Lou Lou Images</h4>
            <p class='font-outfit text-base max-w-sm leading-normal mt-4 font-light text-neutral-500'>
						Creating an unique design for a Birmingham based studio
						</p>
          </div>
        </div>
    </section>


<section class="container mx-auto px-6 max-w-7xl pt-0 mb-10 md:pb-20">
	<div class='px-6 py-20 md:px-0 grid md:grid-cols-12 md:gap-10'>
		<div class="col-span-12 text-center">
			<h5 
			class='font-outfit uppercase font-light tracking-wide'
			data-sal="slide-up"
			data-sal-delay="200"
			data-sal-duration="500"
			data-sal-easing="ease-out-back"
			>
				Other Clients
			</h5>
			<h3 
			class='text-gray-800 text-3xl mt-4 mx-auto mb-20'
			data-sal="slide-up"
			data-sal-delay="700"
			data-sal-duration="500"
			data-sal-easing="ease-out-back"
			>
			That I&rsquo;ve worked with during my career
			</h3>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="100"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="300"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="500"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="100"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="300"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="500"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="100"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
		<div class="col-span-6 md:col-span-3">
				<figure
					data-sal="slide-up"
					data-sal-delay="300"
					data-sal-duration="200"
					data-sal-easing="ease-out-back"
				>
				<img src="<?= get_template_directory_uri() ?>/img/clients/beis.webp" alt="Jamie and Lucy">
				</figure>
		</div>
	</div>
</section>



<section class="container mx-auto px-6 pt-0 mb-10 md:py-10">
	<div class="flex flex-col-reverse md:grid md:grid-cols-12 pt-40">
		<div class="col-span-8 md:col-span-6">
			<div class="about-content-swiper swiper cursor-pointer">
				<div class="swiper-wrapper">
					<div class='swiper-slide'>
						<h4 class='mt-10 font-cormorant text-xl'>About Me</h4>
						<h2 class="mt-4 max-w-lg font-outfit font-bold text-4xl text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="350">Married to Lucy</h2>
						<p class="mt-4 max-w-lg mb-20 md:mb-0 font-light text-base text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="650">
							As cliche as it sounds, we we childhood sweethearts, we just didn't know it until our twenties. Married
							since 2021, we have been through a lot together and I couldn't be happier to be by her side.
						</p>
					</div>
					<div class='swiper-slide'>
						<h4 class='mt-10 font-cormorant text-xl'>About Me</h4>
						<h2 class="mt-4 max-w-lg font-outfit font-bold text-4xl text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="350">Father to Emily, Poppy and Conor</h2>
						<p class="mt-4 max-w-lg mb-20 md:mb-0 font-light text-base text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="650">
							I know for a fact that if it wasn't for my kids I wouldn't be where I am today. They are my rock and my
							inspiration. I love spending time with them and watching them grow.
						</p>
					</div>
					<div class='swiper-slide'>
						<h4 class='mt-10 font-cormorant text-xl'>About Me</h4>
						<h2 class="mt-4 max-w-lg font-outfit font-bold text-4xl text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="350">Dog and Cat Dad to Link and Zelda</h2>
						<p class="mt-4 max-w-lg mb-20 md:mb-0 font-light text-base text-neutral-900 dark:text-white"
							data-sal="slide-up" data-sal-delay="650">
							50% of the time they're fighting, 50% of the time they're sleeping and I won't go into detail on where
							their names came from.
						</p>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
		<div class="col-span-12 md:col-span-6">
			<div class="about-card-swiper swiper overflow-visible">
				<div class="swiper-wrapper">
					<div class='swiper-slide p-4'>
						<img src="<?= get_template_directory_uri() ?>/img/jamie-lucy.webp" alt="Jamie and Lucy">
					</div>
					<div class='swiper-slide p-4'>
						<img src="<?= get_template_directory_uri() ?>/img/jamie-kids.webp" alt="Jamie and Lucy">
					</div>
					<div class='swiper-slide p-4'>
						<img src="<?= get_template_directory_uri() ?>/img/zelda-link.webp" alt="Jamie and Lucy">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- TO DO - Modal -->
<section class="flex flex-wrap p-4 h-full items-center hidden">

	<button type="button"
		class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full"
		@click="showModal = true">Open modal</button>

	<!--Overlay-->
	<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
		:class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
		<!--Dialog-->
		<div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal"
			@click.away="showModal = false" x-transition:enter="ease-out duration-300"
			x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
			x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
			x-transition:leave-end="opacity-0 scale-90">

			<!--Title-->
			<div class="flex justify-between items-center pb-3">
				<p class="text-2xl font-bold">Simple Modal!</p>
				<div class="cursor-pointer z-50" @click="showModal = false">
					<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
						viewBox="0 0 18 18">
						<path
							d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
						</path>
					</svg>
				</div>
			</div>

			<!-- content -->
			<p>Modal content can go here</p>
			<p>...</p>
			<p>...</p>
			<p>...</p>
			<p>...</p>

			<!--Footer-->
			<div class="flex justify-end pt-2">
				<button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
					@click="alert('Additional Action');">Action</button>
				<button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
					@click="showModal = false">Close</button>
			</div>


		</div>
		<!--/Dialog -->
	</div><!-- /Overlay -->

</section>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
