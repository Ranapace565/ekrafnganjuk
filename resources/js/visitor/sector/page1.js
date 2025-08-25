window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // card animation
    gsap.from(".sectorPage1-cardDown", {
        scrollTrigger: {
            trigger: ".sectorPage1-cardDown",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: -20,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });
});
