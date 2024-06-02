// Daftar barang, harga, dan jumlahnya
const daftarBarang = [
    { nama: 'Barang A', harga: 10000, jumlah: 5 },
    { nama: 'Barang B', harga: 15000, jumlah: 3 },
    { nama: 'Barang C', harga: 20000, jumlah: 2 }
  ];
  
  // Fungsi untuk menghitung total harga pembelian barang
  function hitungTotalHarga() {
    let totalHarga = 0;
    for (let i = 0; i < daftarBarang.length; i++) {
      totalHarga += daftarBarang[i].harga * daftarBarang[i].jumlah;
    }
    const totalHargaText = document.getElementById('totalHargaText');
    totalHargaText.textContent = 'Total harga pembelian adalah: Rp ' + totalHarga.toLocaleString();
  }
  