// Mengambil elemen display dari HTML
const display = document.getElementById('display');

/**
 * Fungsi untuk menambahkan nilai (angka atau operator) ke layar display.
 * @param {string} value - Nilai yang akan ditambahkan.
 */
function appendToDisplay(value) {
    display.value += value;
}

/**
 * Fungsi untuk membersihkan seluruh isi layar display.
 */
function clearDisplay() {
    display.value = '';
}

/**
 * Fungsi untuk menghapus karakter terakhir dari layar display.
 */
function deleteLast() {
    display.value = display.value.slice(0, -1);
}

/**
 * Fungsi untuk menghitung hasil dari ekspresi matematika di layar.
 * Menggunakan try-catch untuk menangani error (misal: pembagian dengan nol).
 */
function calculateResult() {
    try {
        // eval() akan mengevaluasi string sebagai kode JavaScript.
        // Ini adalah cara sederhana untuk kalkulator, tetapi bisa berisiko 
        // jika input tidak terkontrol.
        const result = eval(display.value);
        display.value = result;
    } catch (error) {
        // Jika terjadi error saat perhitungan, tampilkan "Error".
        display.value = 'Error';
    }
}