document.addEventListener("DOMContentLoaded", function () {
    const kalimat = [
        "KREATIFMU",
        "PERIKLANAN",
        "ARSITEKTUR",
        "KRIYA",
        "PENERBITAN",
        "DESAIN PRODUK",
        "DESAIN INTERIOR",
        "FASHION",
        "FILM ANIMASI DAN VIDEO",
        "FOTOGRAFI",
        "SENI RUPA",
        "SENI PERTUNJUKAN",
        "MUSIK",
        "PENERBITAN",
        "TELEVISI DAN RADIO",
        "KULINER",
        "APLIKASI",
        "PENGEMBANGAN GAME",
    ];

    const textContainer = document.getElementById("text-container");
    let indexKalimat = 0;

    function ketikTeks(teks, callback) {
        let i = 0;
        textContainer.textContent = "";

        function ketik() {
            if (i < teks.length) {
                textContainer.textContent += teks.charAt(i);
                i++;
                gsap.delayedCall(0.1, ketik); // jeda ketik per huruf
            } else {
                gsap.delayedCall(2, callback); // jeda setelah kalimat selesai
            }
        }

        ketik();
    }

    function mulaiAnimasi() {
        ketikTeks(kalimat[indexKalimat], () => {
            indexKalimat = (indexKalimat + 1) % kalimat.length;
            mulaiAnimasi(); // lanjut ke kalimat berikutnya
        });
    }

    mulaiAnimasi();
});
