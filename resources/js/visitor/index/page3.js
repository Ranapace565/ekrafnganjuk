window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".page3textRight", {
        scrollTrigger: ".page3textRight",
        opacity: 0,
        x: -50,
        duration: 2,
        delay: 1,
        ease: "power2.out",
    });

    gsap.from(".page3textRight-15", {
        scrollTrigger: ".page3textRight-15",
        opacity: 0,
        x: -50,
        duration: 2,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".page3-textUp", {
        scrollTrigger: ".page3-textUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    // button animation
    gsap.from(".page3-buttonUp", {
        scrollTrigger: ".page3-buttonUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card image animation
    gsap.from(".page3-cardUp", {
        scrollTrigger: ".page3-cardUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".page3-cardUp-1", {
        scrollTrigger: ".page3-cardUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
