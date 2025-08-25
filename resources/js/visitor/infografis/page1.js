window.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // text animation
    gsap.from(".infografisPage1-textboxUp", {
        scrollTrigger: {
            trigger: ".infografisPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    gsap.from(".infografisPage1-textboxRight", {
        scrollTrigger: {
            trigger: ".infografisPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1,
        ease: "power2.out",
    });

    gsap.from(".infografisPage1-textboxRight12", {
        scrollTrigger: {
            trigger: ".infografisPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 1.2,
        ease: "power2.out",
    });

    // card animation
    gsap.from(".infografisPage1-cardUp", {
        scrollTrigger: {
            trigger: ".infografisPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 1.5,
        ease: "power2.out",
    });

    gsap.from(".infografisPage1-cardLeft", {
        scrollTrigger: {
            trigger: ".infografisPage1",
            // markers: true, // opsional untuk debug
        },
        opacity: 0,
        x: -50,
        y: 30,
        duration: 1,
        delay: 1.2,
        ease: "power2.out",
    });

    const svg = document.querySelector("#myCustomSVG");
    if (!svg) return;

    gsap.from(svg, {
        y: -10,
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
    });

    const cards = document.querySelectorAll(".card-hover");

    cards.forEach((card) => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, {
                y: -10,
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out",
                // boxShadow: "0 8px 20px rgba(0,0,0,0.2)",
            });
        });

        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                y: 0,
                scale: 1,
                duration: 0.3,
                ease: "power2.out",
                // boxShadow: "0 4px 12px rgba(0,0,0,0.1)",
            });
        });
    });
});
