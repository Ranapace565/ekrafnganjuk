window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".eventPage1-textBoxUp", {
        scrollTrigger: {
            trigger: ".eventPage1-textBoxUp",
            // start: "top 2%",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 20,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".eventPage1-cardRight", {
        scrollTrigger: {
            trigger: ".eventPage1-cardRight",
            start: "top 2%",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -20,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".eventPage1-cardUp", {
        scrollTrigger: {
            trigger: ".eventPage1-cardUp",
            // start: "top 2%",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 20,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
