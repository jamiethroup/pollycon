/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import Alpine from 'alpinejs'
import sal from 'sal.js'
import Swiper, { Navigation, Controller, EffectCards, EffectFade } from 'swiper';
import 'swiper/css/navigation';
 
window.Alpine = Alpine
 
Alpine.start()
sal();  

// DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  const aboutCardSlider = new Swiper('.about-card-swiper', {
    modules: [Controller, EffectCards],
    effect: 'cards',
    controller: {}
  });
  
  const aboutSliderContent = new Swiper('.about-content-swiper', {
    modules: [Navigation,Controller, EffectFade],
    controller: {
      control: aboutCardSlider
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  // After the aboutSliderContent is initialized, assign the controller to the aboutCardSlider
  aboutCardSlider.controller.control = aboutSliderContent;
  
    // Variables
    const footer = document.querySelector('footer');
    const handler = (entries) => {
      (!entries[0].isIntersecting) ? document.body.classList.remove('dark') : document.body.classList.add('dark');
    }
    const observer = new window.IntersectionObserver(handler)
    observer.observe(footer)
})
