window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".page4-textboxUp", {
        scrollTrigger: ".page4-textboxUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".page4-cardRight", {
        scrollTrigger: ".page4-cardRight",
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1.2,
        ease: "power2.out",
    });

    gsap.from(".page4-cardLeft", {
        scrollTrigger: ".page4-cardLeft",
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
