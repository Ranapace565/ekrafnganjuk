window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".eventDetail-body-textboxUp", {
        scrollTrigger: {
            trigger: ".eventDetail-body-textboxUp",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });
});
