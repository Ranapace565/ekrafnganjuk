window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".aboutpage3-textboxUp", {
        scrollTrigger: {
            trigger: ".aboutpage3-textboxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".aboutpage3-textboxUp12", {
        scrollTrigger: {
            trigger: ".aboutpage3-textboxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 2,
        ease: "power2.out",
    });

    gsap.from(".aboutpage3-textboxUp15", {
        scrollTrigger: {
            trigger: ".aboutpage3-textboxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 2.5,
        ease: "power2.out",
    });

    // card image svg animation
    gsap.from(".aboutpage3-cardUp", {
        scrollTrigger: {
            trigger: ".aboutpage3-cardUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".aboutpage3-cardLeft", {
        scrollTrigger: {
            trigger: ".aboutpage3-cardUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    gsap.to(".aboutpage3-card", {
        scrollTrigger: {
            trigger: ".aboutpage3-card",
            // markers: true, // opsional untuk debug
        },
        // opacity: 0,
        x: 10,
        // y: 10,
        rotation: 5,
        transformOrigin: "center",
        repeat: -1,
        yoyo: true,
        duration: 1,
        delay: 1,
        ease: "sine.inOut",
        // ease: "power2.out",
    });

    gsap.to(".aboutpage3-card2", {
        scrollTrigger: {
            trigger: ".aboutpage3-card2",
            // markers: true, // opsional untuk debug
        },
        // opacity: 0,
        // x: 20,
        // y: 10,
        rotation: -10,
        transformOrigin: "center",
        repeat: -1,
        yoyo: true,
        duration: 1,
        delay: 1,
        ease: "sine.inOut",
        // ease: "power2.out",
    });
});
