window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".eventDetail-footer-textboxRight", {
        scrollTrigger: {
            trigger: ".eventDetail-footer-textboxRight",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".eventDetail-footer-textboxRight2", {
        scrollTrigger: {
            trigger: ".eventDetail-footer-textboxRight2",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });
});
