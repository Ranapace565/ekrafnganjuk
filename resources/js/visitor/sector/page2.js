window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // card animation
    gsap.from(".sectorPage2-textBoxUp", {
        scrollTrigger: {
            trigger: ".sectorPage2-textBoxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".sectorPage2-cardUp", {
        scrollTrigger: {
            trigger: ".sectorPage2-cardUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
