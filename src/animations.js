import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const initAnimations = () => {
  paralax();
  transitions();
  mouse();
}

function paralax() {
  let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

  gsap.utils.toArray('.paralax').forEach((section, i) => {
    section.bg = section.querySelector('.paralax-bg');
    
    // the first image (i === 0) should be handled differently because it should start at the very top.
    // use function-based values in order to keep things responsive
    gsap.fromTo(section.bg, {
      backgroundPosition: () => i ? `50% ${-window.innerHeight * getRatio(section)}px` : '50% 0px'
    }, {
      backgroundPosition: () => `50% ${window.innerHeight * (0.25 - getRatio(section))}px`,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        start: () => i ? 'top bottom' : 'top top', 
        end: 'bottom top',
        scrub: true,
        invalidateOnRefresh: true // to make it responsive
      }
    });
  });
}

function transitions() {
  gsap.from('.t1 span', {
    stagger: 0.15,
    opacity: 0,
    y: 40,
  });

  gsap.from('.t2', {
    scrollTrigger: '.t2',
    stagger: 0.15,
    delay: 0.15,
    opacity: 0,
    y: 40,
  });

  gsap.from('.t3-a', {
    scrollTrigger: '.t3-a',
    delay: 0.15,
    opacity: 0,
    x: -400,
  });

  gsap.from('.t3-b', {
    scrollTrigger: '.t3-b',
    delay: 0.15,
    opacity: 0,
    x: 400,
  });

  gsap.from('.t4', {
    scrollTrigger: {
      trigger: '.t4',
      start: 'bottom bottom',
      end: 'end 100px',
      scrub: 1,
    },
    x: -400,
    ease: 'none',
    duration: 3,
  });

  gsap.from('.t5', {
    scrollTrigger: '.t5',
    delay: 0.15,
    opacity: 0,
    x: -400,
  });

  gsap.from('.t6', {
    scrollTrigger: '.t6',
    stagger: 0.15,
    delay: 0.15,
    opacity: 0,
    y: 40,
  });
}

function mouse() {
  gsap.set('.ball', { xPercent: -50, yPercent: -50 });

  let xTo = gsap.quickTo('.ball', 'x', {duration: 0.6, ease: 'power3'}),
      yTo = gsap.quickTo('.ball', 'y', {duration: 0.6, ease: 'power3'});

  window.addEventListener('mousemove', e => {
    xTo(e.pageX);
    yTo(e.pageY);
  });

  const nav = document.querySelector('.header__nav');
  const ball = document.querySelector('.ball');

  nav.addEventListener('mouseover', (e) => {
    ball.style.visibility = 'visible';
    ball.style.opacity = 1;
    const link = e.target.closest('a');
    if (link) {
      ball.style.backgroundImage = `url('/images/${link.dataset.image}.jpg')`;
    }
  });

  nav.addEventListener('mouseleave', (e) => {
    ball.style.visibility = 'hidden';
    ball.style.opacity = 0;
  });


  // special thanks to Blake Bowen for most of the code.

  // quickTo() version, new in version 3.10.0: https://codepen.io/GreenSock/pen/xxpbORN?editors=0010
}

export default initAnimations;
