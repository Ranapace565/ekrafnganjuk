window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".page5-textboxUp", {
        scrollTrigger: ".page5-textboxUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".page5-cardUp", {
        scrollTrigger: ".page5-cardUp",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    gsap.from(".page5-cardUp13", {
        scrollTrigger: ".page5-cardUp13",
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1.3,
        ease: "power2.out",
    });

    const toggleBtnArtikel = document.getElementById("toggleButtonArtikel");

    toggleBtnArtikel.addEventListener("click", () => {
        gsap.from(".page5-cardUp13-2", {
            scrollTrigger: ".page5-cardUp13-2",
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 1.3,
            ease: "power2.out",
        });
    });

    const toggleBtnEvent = document.getElementById("toggleButtonEvent");

    toggleBtnEvent.addEventListener("click", () => {
        gsap.from(".page5-cardUp13-3", {
            scrollTrigger: ".page5-cardUp13-3",
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 1.3,
            ease: "power2.out",
        });
    });
});
