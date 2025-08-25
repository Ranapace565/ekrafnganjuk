document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("sliderContainer");
    const track = document.getElementById("sliderTrack");

    if (!container || !track) return;

    // Scroll speed (px per frame)
    let speed = 0.5;
    let isPaused = false;

    // Duplikat isi agar seamless looping
    track.innerHTML += track.innerHTML;

    // Function loop scroll
    function scrollSlider() {
        if (!isPaused) {
            container.scrollLeft += speed;

            // Loop ulang saat sudah setengah scroll
            if (container.scrollLeft >= track.scrollWidth / 2) {
                container.scrollLeft = 0;
            }
        }

        requestAnimationFrame(scrollSlider);
    }

    // Hover = pause, leave = jalan lagi
    container.addEventListener("mouseenter", () => {
        isPaused = true;
    });

    container.addEventListener("mouseleave", () => {
        isPaused = false;
    });

    scrollSlider();
});
