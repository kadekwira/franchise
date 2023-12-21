const harga_pokok = document.getElementById("harga_pokok");
const harga_jual = document.getElementById("harga_jual");


harga_pokok.addEventListener("keyup", function(e) {
  harga_pokok.value = formatRupiah(this.value, "Rp. ");
});
harga_jual.addEventListener("keyup", function(e) {
  harga_jual.value = formatRupiah(this.value, "Rp. ");
});




/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
