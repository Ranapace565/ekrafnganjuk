window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    //text animation
    gsap.from(".page1-textboxLeft", {
        scrollTrigger: ".page1-textboxLeft",
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".page1-textboxRight", {
        scrollTrigger: ".page1-textboxRight",
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".page1-textboxUp", {
        scrollTrigger: ".page1-textboxUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    //button animation
    gsap.from(".page1-buttonUp", {
        scrollTrigger: ".page1-buttonUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    //Card Image animation
    gsap.from(".page1-cardLeft", {
        scrollTrigger: ".page1-cardLeft",
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });

    // svg animation
    gsap.from(".page1-svgUp", {
        scrollTrigger: ".page1-svgUp",
        // opacity: 0,
        y: -10,
        duration: 1,
        delay: 1,
        repeat: -1,
        repeatDelay: 1,
        yoyo: true,
        ease: "power2.out",
    });

    gsap.from(".page1-svgFloat", {
        scrollTrigger: ".page1-svgFloat",
        // opacity: 0,
        y: -20,
        duration: 1.5,
        delay: 1,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".page1-svgFloat2", {
        scrollTrigger: ".page1-svgFloat2",
        // opacity: 0,
        y: -20,
        duration: 1.5,
        delay: 1.5,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".page1-svgFloat3", {
        scrollTrigger: ".page1-svgFloat3",
        // opacity: 0,
        y: -20,
        duration: 1.5,
        delay: 2,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".page1-svgRotate", {
        scrollTrigger: ".page1-svgRotate",
        // opacity: 0,
        // y: -20,
        rotation: 15,
        transformOrigin: "50% 100%",
        duration: 1,
        delay: 2,
        repeat: -1,
        repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".page1-svgRotate2", {
        scrollTrigger: ".page1-svgRotate2",
        // opacity: 0,
        // y: -20,
        rotation: -5,
        transformOrigin: "0% 50%",
        duration: 1.5,
        delay: 2,
        repeat: -1,
        repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });
});
