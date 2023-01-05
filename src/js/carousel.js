import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

const carousel = () => {
    var splide = new Splide( '.splide', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      gap: '1em',
      focus: 'center',
    } );

    console.log(splide);

    splide.mount();
}

export default carousel;
