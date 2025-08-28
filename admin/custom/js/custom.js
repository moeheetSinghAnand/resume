$(document).ready(function () {
    $('#datatable').DataTable();
    $('#contact-table1').DataTable();
});

 function deleteButton() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Deleted!",
                text: "This record has been deleted",
                icon: "success"
            });
        }
    });
}
