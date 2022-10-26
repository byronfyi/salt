let scrollpos = window.scrollY;
const header = document.querySelector(".header");
const offsetHeight = 240;

const addClassOnScroll = (className) => header.classList.add(className);
const removeClassOnScroll = (className) => header.classList.remove(className);

const btn = document.querySelector('[data-toggle]');
const targetId = btn.getAttribute('aria-controls');
const target = document.querySelector(`#${targetId}`);

setTimeout(function() {
    const instagram = document.querySelector('.eapps-link');
    instagram.style.display = 'none'
}, 2000);

function toggleCollapse(e) {
    (this.getAttribute('aria-expanded') === 'true')
        ? this.setAttribute('aria-expanded', 'false')
        : this.setAttribute('aria-expanded', 'true')

    this.classList.toggle('active');

    target.classList.toggle('show');
    document.body.classList.toggle('menu-active');
}

function handleScroll() {
    scrollpos = window.scrollY;

    if (scrollpos >= offsetHeight) {
        addClassOnScroll('header--light');
    } else {
        removeClassOnScroll('header--light');
    }
}

btn.addEventListener('click', toggleCollapse);
window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);

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
