import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const animations = () => {
  let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

  gsap.utils.toArray(".paralax").forEach((section, i) => {
    section.bg = section.querySelector(".paralax-bg");
    
    // the first image (i === 0) should be handled differently because it should start at the very top.
    // use function-based values in order to keep things responsive
    gsap.fromTo(section.bg, {
      backgroundPosition: () => i ? `50% ${-window.innerHeight * getRatio(section)}px` : "50% 0px"
    }, {
      backgroundPosition: () => `50% ${window.innerHeight * (0.25 - getRatio(section))}px`,
      ease: "none",
      scrollTrigger: {
        trigger: section,
        start: () => i ? "top bottom" : "top top", 
        end: "bottom top",
        scrub: true,
        invalidateOnRefresh: true // to make it responsive
      }
    });
  });

  gsap.from(".t1 span", {
    stagger: 0.15,
    opacity: 0,
    y: 40,
  });

  gsap.from(".t2", {
    scrollTrigger: '.t2',
    stagger: 0.15,
    delay: 0.15,
    opacity: 0,
    y: 40,
  });

  gsap.from(".t3-a", {
    scrollTrigger: '.t3-a',
    delay: 0.15,
    opacity: 0,
    x: -400,
  });

  gsap.from(".t3-b", {
    scrollTrigger: '.t3-b',
    delay: 0.15,
    opacity: 0,
    x: 400,
  });

  gsap.from(".t4", {
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

  gsap.from(".t5", {
    scrollTrigger: '.t5',
    delay: 0.15,
    opacity: 0,
    x: -400,
  });

  gsap.from(".t6", {
    scrollTrigger: '.t6',
    stagger: 0.15,
    delay: 0.15,
    opacity: 0,
    y: 40,
  });
}

export default animations;
