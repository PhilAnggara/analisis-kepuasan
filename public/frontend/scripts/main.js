AOS.init({
  once: true,
  delay: 50,
  // duration: 600
});

function hapusData(id, title, text) {
  Swal.fire({
    title: title,
    text: text,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#435EBE',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById(`hapus-${id}`).submit();
    }
  })
}

function keluar() {
  Swal.fire({
    title: 'Keluar?',
    text: "Tekan tombol Keluar di bawah ini untuk mengakhiri sesi anda!",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#435EBE',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Keluar!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById('keluar').submit();
    }
  })
}