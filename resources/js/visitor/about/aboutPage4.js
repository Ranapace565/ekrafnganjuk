window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".aboutpage4-textboxUp", {
        scrollTrigger: {
            trigger: ".aboutPage4",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".aboutpage4-textboxUp12", {
        scrollTrigger: {
            trigger: ".aboutPage4",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 2,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".aboutpage4-textboxRight15", {
        scrollTrigger: {
            trigger: ".aboutPage4",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 2,
        ease: "power2.out",
    });

    gsap.from(".aboutpage4-svgFloat", {
        scrollTrigger: ".aboutpage4-svgFloat",
        // opacity: 0,
        y: -20,
        duration: 1.5,
        delay: 1,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".aboutpage4-svgFloat2", {
        scrollTrigger: ".aboutpage4-svgFloat2",
        // opacity: 0,
        y: -10,
        duration: 1.5,
        delay: 1.5,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".aboutpage4-svgFloat3", {
        scrollTrigger: ".aboutpage4-svgFloat3",
        // opacity: 0,
        y: -10,
        duration: 1.5,
        delay: 2.5,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.from(".aboutpage4-svgFloat4", {
        scrollTrigger: ".aboutpage4-svgFloat4",
        // opacity: 0,
        y: -10,
        duration: 1.5,
        delay: 2,
        repeat: -1,
        // repeatDelay: 0.5,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.to(".aboutpage4-svgScale", {
        // strokeDashoffset: 0,
        scale: 1.1,
        duration: 2,
        // delay: 2,
        transformOrigin: "center",
        ease: "power2.inOut",
        stagger: {
            each: 0.5,
            repeat: -1,
            repeatDelay: 0.5,
            yoyo: true,
        },
    });
});
