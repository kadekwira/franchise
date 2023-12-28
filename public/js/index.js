const qty3 = document.getElementById('qty3');
const harga3 = document.getElementById('harga3');
const total3 = document.getElementById('total3');
const btnPaket3 = document.getElementById('btnPaket3');
const paket3_user = document.getElementById('paket3_user');
const paket3_val = document.getElementById('paket3_val');
const _token = document.getElementById('_token');



const qty2 = document.getElementById('qty2');
const harga2 = document.getElementById('harga2');
const total2 = document.getElementById('total2');
const btnPaket2 = document.getElementById('btnPaket2');
const paket2_user = document.getElementById('paket2_user');
const paket2_val = document.getElementById('paket2_val');

const qty1 = document.getElementById('qty1');
const harga1 = document.getElementById('harga1');
const total1 = document.getElementById('total1');
const btnPaket1 = document.getElementById('btnPaket1');
const paket1_user = document.getElementById('paket1_user');
const paket1_val = document.getElementById('paket1_val');






qty3.addEventListener('keyup',(e)=>{
  let total = toNumber(harga3.value) * e.target.value
  total3.value =rupiah(total.toString(),'Rp. ')
})
qty2.addEventListener('keyup',(e)=>{
  let total = toNumber(harga2.value) * e.target.value
  total2.value =rupiah(total.toString(),'Rp. ')
})
qty1.addEventListener('keyup',(e)=>{
  let total = toNumber(harga1.value) * e.target.value
  total1.value =rupiah(total.toString(),'Rp. ')
})



function toNumber(str) {
  let result =  str.match(/\d/g);
  result = result.join("");
  return parseInt(result)
}

function rupiah(angka, prefix){
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
  split   		= number_string.split(','),
  sisa     		= split[0].length % 3,
  rupiah     		= split[0].substr(0, sisa),
  ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if(ribuan){
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}


btnPaket3.addEventListener('click', function(e) {
  const total = toNumber(total3.value)
  e.preventDefault()
  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
  $.ajax({
    type: "POST",
    url: '/admin/penjualan',
    dataType: 'JSON',
    data: {
      'user_id':paket3_user.value,
      'paket' :paket3_val.value,
      'qty':qty3.value,
      'total':total,

    },success:function(response)
    {
      if(response.status=="Sukses"){
         window.location.href="/"
         alert(response.pesan)
      }
    },
  })

})
btnPaket2.addEventListener('click', function(e) {
  const total = toNumber(total2.value)
  e.preventDefault()
  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
  $.ajax({
    type: "POST",
    url: '/admin/penjualan',
    dataType: 'JSON',
    data: {
      'user_id':paket2_user.value,
      'paket' :paket2_val.value,
      'qty':qty2.value,
      'total':total,

    },success:function(response)
    {
      if(response.status=="Sukses"){
         window.location.href="/"
         alert(response.pesan)
      }
    },
  })

})
btnPaket1.addEventListener('click', function(e) {
  const total = toNumber(total1.value)
  e.preventDefault()
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $.ajax({
    type: "POST",
    url: '/admin/penjualan',
    dataType: 'JSON',
    data: {
      'user_id':paket1_user.value,
      'paket' :paket1_val.value,
      'qty':qty1.value,
      'total':total,

    },success:function(response)
    {
      if(response.status=="Sukses"){
         window.location.href="/"
         alert(response.pesan)
      }
    },
  })

})

