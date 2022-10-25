let scrollpos = window.scrollY;
const header = document.querySelector(".header");
const offsetHeight = 240;

const addClassOnScroll = (className) => header.classList.add(className);
const removeClassOnScroll = (className) => header.classList.remove(className);

window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

function handleScroll() {
    scrollpos = window.scrollY;

    if (scrollpos >= offsetHeight) {
        addClassOnScroll('header--light');
    } else {
        removeClassOnScroll('header--light');
    }
}

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
