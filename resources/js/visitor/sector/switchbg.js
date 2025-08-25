document.addEventListener("DOMContentLoaded", function () {
    const imageElement = document.getElementById("unsplash-image");

    const unsplashImages = [
        "https://images.unsplash.com/photo-1609329007778-42630e6b1580?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1607823656011-51bfb0c9beb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1722963295917-58be5ef7536a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1680169590313-9a14f3cd8148?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://plus.unsplash.com/premium_photo-1740492284361-5816238da102?q=80&w=1934&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1506021180614-27b3f7489640?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1682506457554-b34c9682e985?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1639664701039-f747268e2243?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1618761714954-0b8cd0026356?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1576595580361-90a855b84b20?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1504609813442-a8924e83f76e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1586868538513-51335a0c5337?q=80&w=2067&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1603126004012-6b6715b9ed91?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "https://images.unsplash.com/photo-1560421683-6856ea585c78?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    ];

    // async function updateImage() {
    //     try {
    //         const url = `https://source.unsplash.com/collection/${COLLECTION_ID}/800x600?sig=${new Date().getHours()}`;
    //         imageElement.src = url;
    //     } catch (err) {
    //         console.error("Gagal memuat gambar dari Unsplash:", err);
    //     }
    // }

    // function updateImage() {
    //     const hour = new Date().getHours();
    //     const index = hour % unsplashImages.length;
    //     imageElement.src =
    //         unsplashImages[index] + "?auto=format&fit=crop&w=800&h=600";
    // }

    // updateImage();

    // setInterval(() => {
    //     updateImage();
    // }, 5 * 60 * 1000);

    // function scheduleImageUpdate() {
    //     const now = new Date();
    //     const msUntilNextFiveMinutes =
    //         5 * 60 * 1000 - (now.getTime() % (5 * 60 * 1000));

    //     setTimeout(() => {
    //         updateImage();
    //         setInterval(updateImage, 5 * 60 * 1000);
    //     }, msUntilNextFiveMinutes);
    // }

    let currentIndex = -1;

    async function updateImage() {
        const minute = new Date().getMinutes();
        const index = minute % unsplashImages.length;

        // imageElement.src = unsplashImages[index];

        if (index !== currentIndex) {
            imageElement.classList.remove("opacity-100");
            imageElement.classList.add("opacity-0");

            setTimeout(() => {
                imageElement.src = unsplashImages[index];
                imageElement.onload = () => {
                    imageElement.classList.remove("opacity-0");
                    imageElement.classList.add("opacity-100");
                };
                currentIndex = index;
            }, 1000);
        }
    }

    updateImage(); // saat halaman pertama dimuat

    // update tiap 5 menit
    setInterval(() => {
        updateImage();
    }, 60 * 1000);
});
