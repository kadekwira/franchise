import swal from 'sweetalert';

function deleteItem(e){
  e.preventDefault();

  const id =  e.target.getAttribute;
  console.log(id);

  // const swalWithBootstrapButtons = swal.mixin({
  //     customClass: {
  //         confirmButton: 'btn btn-success',
  //         cancelButton: 'btn btn-danger'
  //     },
  //     buttonsStyling: false
  // });

  // swalWithBootstrapButtons.fire({
  //     title: 'Are you sure?',
  //     text: "You won't be able to revert this!",
  //     icon: 'warning',
  //     showCancelButton: true,
  //     confirmButtonText: 'Yes, delete it!',
  //     cancelButtonText: 'No, cancel!',
  //     reverseButtons: true
  // }).then((result) => {
  //     if (result.value) {
  //         if (result.isConfirmed){
  //             $.ajax({
  //                 type:'DELETE',
  //                 url:'{{url("/products/delete")}}/' +id,
  //                 data:{
  //                     "_token": "{{ csrf_token() }}",
  //                 },
  //                 success:function(data) {
  //                     if (data.success){
  //                         swalWithBootstrapButtons.fire(
  //                             'Deleted!',
  //                             'Your file has been deleted.',
  //                             "success"
  //                         );
  //                         $("#"+id+"").remove(); // you can add name div to remove
  //                     }

  //                 }
  //             });

  //         }

  //     } else if (
  //         result.dismiss === Swal.DismissReason.cancel
  //     ) {
  //         swalWithBootstrapButtons.fire(
  //             'Cancelled',
  //             'Your imaginary file is safe :)',
  //             'error'
  //         );
  //     }
  // });

}
