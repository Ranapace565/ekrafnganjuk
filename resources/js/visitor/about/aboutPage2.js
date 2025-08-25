window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".aboutpage2-textboxUp", {
        scrollTrigger: {
            trigger: ".aboutpage2-textboxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    //card animation
    gsap.from(".aboutpage2-cardUp", {
        scrollTrigger: {
            trigger: ".aboutpage2-cardUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.8,
        ease: "power2.out",
    });

    gsap.from(".aboutpage2-cardUp2", {
        scrollTrigger: {
            trigger: ".aboutpage2-cardUp2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
