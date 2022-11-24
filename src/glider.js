import 'glider-js/glider.css';
import Glider from "glider-js";

const glider = () => {
    new Glider(document.querySelector('.glider-main'), {
        slidesToShow: 1.25,
        slidesToScroll: 1,
        draggable: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.5,
                }
            }
        ]
    });

    new Glider(document.querySelector('.glider-whats-on'), {
        slidesToShow: 1.25,
        slidesToScroll: 1,
        draggable: true,
        arrows: {
            prev: '.whats-on-prev',
            next: '.whats-on-next'
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.5,
                }
            }
        ]
    });

    new Glider(document.querySelector('.glider-salt-beer'), {
        slidesToShow: 1.25,
        slidesToScroll: 1,
        draggable: true,
        arrows: {
            prev: '.salt-beer-prev',
            next: '.salt-beer-next'
        },
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.5,
                }
            }
        ]
    });
}

export default glider;
