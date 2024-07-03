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
