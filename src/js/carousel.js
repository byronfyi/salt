import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

const carousel = () => {
    var drinks = new Splide( '.splide__drinks', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '1em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    var whatsOn = new Splide( '.splide__whats-on', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '1em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    var shop = new Splide( '.splide__shop', {
      type: 'loop',
      perPage: 5,
      perMove: 1,
      gap: '0.5em',
      focus: 'center',
      autoWidth: true,
      pagination: false,
    } );

    drinks.mount();
    whatsOn.mount();
    shop.mount();
}

export default carousel;
