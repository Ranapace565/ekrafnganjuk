window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".eventDetail-search-textboxRight", {
        scrollTrigger: {
            trigger: ".eventDetail-search-textboxRight",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".eventDetail-search-textboxRight2", {
        scrollTrigger: {
            trigger: ".eventDetail-search-textboxRight2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 2.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".eventDetail-search-textboxRight2", {
        scrollTrigger: {
            trigger: ".eventDetail-search-textboxRight2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 2,
        ease: "power2.out",
    });

    gsap.from(".eventDetail-search-textboxRight3", {
        scrollTrigger: {
            trigger: ".eventDetail-search-textboxRight2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
