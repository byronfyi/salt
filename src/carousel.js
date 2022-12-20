import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

const carousel = () => {
    var splide = new Splide( '.splide', {
      type   : 'loop',
      perPage: 3,
      perMove: 1,
    } );

    console.log(splide);

    splide.mount();
}

export default carousel;
