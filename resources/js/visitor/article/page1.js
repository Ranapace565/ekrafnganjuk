window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".articelPage1-textBoxUp", {
        scrollTrigger: {
            trigger: ".articelPage1-textBoxUp",
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
    gsap.from(".articelPage1-cardDRight", {
        scrollTrigger: {
            trigger: ".articelPage1-cardDRight",
            start: "top 2%",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -20,
        duration: 1,
        delay: 0.5,
        ease: "power2.out",
    });

    gsap.from(".articelPage1-cardUp", {
        scrollTrigger: {
            trigger: ".articelPage1-cardUp",
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
