function tambahkanReview() {
    const namaInput = document.getElementById("nama");
    const komentarInput = document.getElementById("komentar");
    const daftarUlasan = document.getElementById("daftarUlasan");

    const nama = namaInput.value;
    const komentar = komentarInput.value;

    if (nama && komentar) {
        // Buat elemen div untuk menampilkan review
        const reviewDiv = document.createElement("div");
        reviewDiv.classList.add("mb-4");

        // Buat elemen nama pengguna
        const namaElem = document.createElement("h3");
        namaElem.classList.add("text-lg", "font-semibold");
        namaElem.textContent = nama;

        // Buat elemen ulasan
        const ulasanElem = document.createElement("div");
        ulasanElem.classList.add("mb-2");
        ulasanElem.innerHTML = `<p>${komentar}</p>`;

        // Tambahkan elemen nama dan ulasan ke div review
        reviewDiv.appendChild(namaElem);
        reviewDiv.appendChild(ulasanElem);

        // Tambahkan div review ke daftar ulasan
        daftarUlasan.appendChild(reviewDiv);

        // Mengosongkan field input
        namaInput.value = "";
        komentarInput.value = "";
    }
}

// Menambahkan event listener untuk tombol "Kirim Komentar"
const kirimKomentarButton = document.getElementById("kirimKomentarButton");
kirimKomentarButton.addEventListener("click", tambahkanReview);

// Menambahkan event listener untuk tombol "Tambah Keranjang"
const tambahKeranjangButton = document.getElementById("tambahKeranjangButton");
const quantityInput = document.getElementById("quantity");
let keranjangCount = 0;
tambahKeranjangButton.addEventListener("click", function () {
    const jumlahTiket = parseInt(quantityInput.value);
    if (!isNaN(jumlahTiket) && jumlahTiket > 0) {
        keranjangCount += jumlahTiket;
        alert(`Ditambahkan ${jumlahTiket} tiket ke keranjang!`);
        quantityInput.value = "";
        // Update teks total barang di keranjang
        const totalBarang = document.getElementById("totalBarang");
        totalBarang.textContent = `Total Barang di Keranjang: ${keranjangCount}`;
    } else {
        alert("Masukkan jumlah tiket yang valid.");
    }
});