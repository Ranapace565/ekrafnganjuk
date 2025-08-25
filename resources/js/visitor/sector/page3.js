window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // card animation
    gsap.from(".sectorPage3-textBoxUp", {
        scrollTrigger: {
            trigger: ".sectorPage3-textBoxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 10,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".sectorPage3-cardUp", {
        scrollTrigger: {
            trigger: ".sectorPage3-cardUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
