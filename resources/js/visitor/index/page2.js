window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    //text animation
    gsap.from(".page2-textboxDown", {
        scrollTrigger: ".page2-textboxDown",
        opacity: 0,
        y: -50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // gsap.from(".page2-textboxUp", {
    //     scrollTrigger: ".page2-textboxUp",
    //     opacity: 0,
    //     y: 50,
    //     duration: 1,
    //     delay: 0.5,
    //     ease: "power2.out",
    // });

    gsap.from(".page2-textboxUp-08", {
        scrollTrigger: ".page2-textboxUp-08",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });

    //button animation
    gsap.from(".page2-buttonLeft", {
        scrollTrigger: ".page2-buttonLeft",
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });

    //Card Image SVG animation
    gsap.from(".page2-cardRight", {
        scrollTrigger: ".page2-cardRight",
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
