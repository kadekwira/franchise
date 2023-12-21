

$('#search').on('keyup', function() {
  search()
})


$('#add').on('click', function(e) {
  e.preventDefault();
  const id = $('#id_product').val()
  const jumlah = $('#jumlah').val()
  const harga = $('#harga').html()
  add(id, jumlah,harga);
})



function search() {
  const field = $('#list-group');
  var keyword = $('#search').val();
  $('#list-group').css('display', 'block');
  if(keyword.length <= 0){
    field.html('');
  }else{
    $.post(config.routes.search, {
            _token: $('meta[name="csrf-token"]').attr('content'),
            keyword: keyword
        },
        function(data) {
          listGroups(data.products)
        });
  }
  }
function set(id) {
  $.post(config.routes.searchID, {
          _token: $('meta[name="csrf-token"]').attr('content'),
          keyword: id
      },
      function(data) {
         $('#list-group').css('display', 'none');
          $('#satuan').attr('readonly', false);
          $('#jumlah').attr('readonly', false);
          $('#stock').html(data.products.stock);
          $('#nama_product').html(data.products.nama_product + '-' + data.products.varian);
          $('#satuan').val(data.products.satuan);
          $('#harga').html('Rp. '+data.products.harga_jual.toLocaleString());
          $('#jumlah').val(1);
          $('#jumlah').prop('max', data.products.stock);
          $('#jumlah').prop('max', data.products.stock);
          $('#id_product').val(data.products.id);
          $('#satuan').attr('readonly', true);
      });
}

function add(id, jumlah, harga) {
  $.ajax({
      type: "POST",
      url: config.routes.getData,
      data: {
          _token: $('meta[name="csrf-token"]').attr('content'),
          product_id: id,
          jumlah: jumlah,
          harga: harga,
          total:0
      },
      success: function(data) {
          window.location.reload();
      }
  })
}

function listGroups(datas){
  let htmlView = '';
  
  const field = $('#list-group');
  let length = datas.length;
  if(length>0){
    for(let i = 0; i < length; i++){
        htmlView +='<li class="list-group-item list-group-item-action" id="barang" onclick="set('+ datas[i].id+')">'+datas[i].nama_product+"-"+datas[i].varian+'</li>'
    }
  }else{
    htmlView+='<li class="list-group-item">No Data</li>'
  }

  field.html(htmlView)


}

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

const harga_jual = document.getElementById("harga_jual");

harga_jual.addEventListener("keyup", function(e) {
  harga_jual.value = formatRupiah(this.value, "Rp. ");
});


