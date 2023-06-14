<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;700&family=Outfit:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header hidden>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>
	<header class="absolute z-50 top-0 left-0 w-full">
  <div class="container max-w-7xl mx-auto grid grid-cols-12 py-6 px-6">
    <div class="col-span-6 md:col-span-2"><a href="/">
        <div class="hidden">Pollycon</div><svg class="w-8" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
          fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 35 50">
          <path class="fill-white" fill="#0d2f3f" fill-rule="nonzero"
            d="M28.761 19.633c-1.5 1.82-3.607 2.743-6.26 2.743H7.564v23.042H3.75V18.61h18.113c1.585 0 2.973-.618 3.91-1.74.79-.948 1.226-2.219 1.226-3.578 0-2.786-1.921-5.668-5.136-5.668H3.75V3.75h18.752c5.746 0 8.363 4.925 8.363 9.5 0 2.47-.747 4.737-2.104 6.383m-17.448 6.494h3.25v19.29h-3.25v-19.29ZM22.502 0H0v11.376h21.863c1.01 0 1.386 1.176 1.386 1.917 0 .476-.13.905-.356 1.176-.14.168-.4.392-1.03.392H0v34.2h18.314V26.127h4.188c3.772 0 6.937-1.421 9.153-4.11 1.91-2.314 2.96-5.428 2.96-8.767C34.615 6.666 30.454 0 22.502 0">
          </path>
        </svg>
      </a></div>
    <div class="col-span-6 flex items-center justify-end md:hidden"><label for="check"><input type="checkbox"
          id="check"><span></span><span></span><span></span></label></div>
    <div class="hidden md:col-span-10 md:flex items-center justify-end">
      <nav>
        <ul class="flex items-center flex-1 gap-8">
          <li><a class="font-outfit text-white block text-sm hover:-translate-y-0.5 duration-150 font-medium"
              href="/">Home</a></li>
          <li><a class="font-outfit text-white block text-sm hover:-translate-y-0.5 duration-150 font-medium"
              href="/about">About</a></li>
          <li><a class="font-outfit text-white block text-sm hover:-translate-y-0.5 duration-150 font-medium"
              href="/words">Words</a></li>
          <li><a class="font-outfit text-white block text-sm hover:-translate-y-0.5 duration-150 font-medium"
              href="/work">Work</a></li>
          <li><a
              class="contact-link border border-white text-white flex items-center gap-1 rounded-full py-1.5 px-3 -ml-3 font-outfit text-sm duration-150 ease-in-out hover:bg-black hover:text-white font-medium"
              href="mailto:hello@pollycon.co.uk?subject=Contact from Pollycon Website"><span>Contact</span><svg
                class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path class="fill-white"
                  d="M19.47 31a2 2 0 0 1-1.8-1.09l-4-7.57a1 1 0 0 1 1.77-.93l4 7.57L29 3.06 3 12.49l9.8 5.26 8.32-8.32a1 1 0 0 1 1.42 1.42l-8.85 8.84a1 1 0 0 1-1.17.18L2.09 14.33a2 2 0 0 1 .25-3.72l25.91-9.48a2 2 0 0 1 2.62 2.62l-9.48 25.91A2 2 0 0 1 19.61 31Z"
                  data-name="Layer 45"></path>
              </svg></a></li>
        </ul>
      </nav>
			<theme-toggle>
				<label for="theme" class="theme">
					<span class="theme__toggle-wrap">
						<input id="theme" class="theme__toggle" type="checkbox" role="switch" name="theme" value="dark">
						<span class="theme__fill"></span>
						<span class="theme__icon">
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
							<span class="theme__icon-part"></span>
						</span>
					</span>
				</label>
			</theme-toggle>
    </div>
  </div>
</header>
	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
