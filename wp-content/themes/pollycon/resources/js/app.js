import sal from '../../node_modules/sal.js/dist/sal';
import Swiper, { Navigation, Controller, EffectCards, EffectFade } from 'swiper';
import 'swiper/css/navigation';


function init() {
  sal();
  colorSchemeChecker();
}

function colorSchemeChecker() {
  const colorScheme = localStorage.getItem('colorScheme');
  colorScheme !== null ? colorSchemeSetter(colorScheme) : colorSchemeSetter(null);
}

function colorSchemeSetter(colorScheme) {
  const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
  if (colorScheme === 'dark') {
    localStorage.setItem('colorScheme', 'dark');
    document.body.classList.add('dark');
  } else if(darkModeMediaQuery.matches && colorScheme === null) {
    localStorage.setItem('colorScheme', 'dark');
    document.body.classList.add('dark');
  } else {
    localStorage.setItem('colorScheme', 'light');
    document.body.classList.remove('dark');
  }
}

// DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
      init();
      
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
      (!entries[0].isIntersecting) ? document.body.classList.remove('footer-in-view') : document.body.classList.add('footer-in-view');
    }
    const observer = new window.IntersectionObserver(handler)
    observer.observe(footer)
})

// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

class ToggleSwitch extends HTMLElement {
  constructor() {
    super();
    this.input = this.querySelector('.theme__toggle');
    this.input?.addEventListener('click', this.toggle.bind(this));
  }
  toggle() {
    this.input.checked ? console.log('Checked') : console.log('Unchecked');
  }
}

customElements.define('theme-toggle', ToggleSwitch);


