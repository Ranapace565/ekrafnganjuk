window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".aboutpage1-textboxUp", {
        scrollTrigger: {
            trigger: ".aboutPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".aboutpage1-textboxUp1", {
        scrollTrigger: {
            trigger: ".aboutPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });

    gsap.from(".aboutpage1-textboxUp15", {
        scrollTrigger: {
            trigger: ".aboutPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".aboutpage1-cardRight", {
        scrollTrigger: {
            trigger: ".aboutPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
