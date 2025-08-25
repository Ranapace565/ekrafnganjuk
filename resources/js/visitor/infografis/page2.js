window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".infografisPage2-textboxUp12", {
        scrollTrigger: {
            trigger: ".infografisPage2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 1.2,
        ease: "power2.out",
    });

    gsap.from(".infografisPage2-textboxUp15", {
        scrollTrigger: {
            trigger: ".infografisPage2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".infografisPage2-textboxUp18", {
        scrollTrigger: {
            trigger: ".infografisPage2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 1.8,
        ease: "power2.out",
    });

    gsap.from(".infografisPage2-textboxUp2", {
        scrollTrigger: {
            trigger: ".infografisPage2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 2,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".infografisPage2", {
        scrollTrigger: {
            trigger: ".infografisPage2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // gsap.from(".infografisPage2-cardUp", {
    //     scrollTrigger: {
    //         trigger: ".infografisPage2-cardUp",
    //         // markers: true, // opsional untuk debug
    //     },
    //     opacity: 0,
    //     y: 50,
    //     duration: 1,
    //     delay: 1,
    //     ease: "power2.out",
    // });
});
