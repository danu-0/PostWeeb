function swal(pesan) {
  Swal.fire({
    toast: true,
    position: "top-end",
    icon: pesan.toLowerCase().includes("berhasil") ? "success" : "error",
    title: pesan,
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
  });
}

function hapus(href) {
  Swal.fire({
    title: "Apakah Anda Yakin?",
    text: "Data Akan dihapus",
    icon: "warning",
    showCancelButton: true,
    customClass: {
      confirmButton: "btn btn-primary me-4",
      cancelButton: "btn btn-danger",
    },
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Tidak",
    buttonsStyling: false,
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
}



  document.addEventListener('DOMContentLoaded', function() {
    const addButton = document.querySelectorAll('.btn-add');

    addButton.forEach(button => {
      button.addEventListener('click', function() {
        // Lakukan sesuatu saat tombol ditambahkan
        // Contoh: console.log('Tambahkan ke keranjang');
        // Anda perlu menambahkan fungsi untuk menyimpan data produk yang dipilih.
      });
    });
  });
