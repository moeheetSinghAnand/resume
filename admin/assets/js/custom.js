$(document).on('submit', '#user-registration', function (e) {
    e.preventDefault();

    let first_name = $('#firstname').val();
    let last_name = $('#lastname').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let confirmation = $('#confirm-password').val();

    if (first_name !== "" && last_name !== "" && email !== "" && password !== "" && confirmation !== "") {
        if (password === confirmation) {

            $.ajax({
                type: 'POST',
                url: 'insert_registration.php',
                dataType: "json",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    email: email,
                    password: password
                },
                success: function (response) {
                    console.log(response);
                    if (response.status == 'success') {
                        alert("Login successful");
                        console.log('check');
                    }
                    else {
                        alert("Error" + response.error);
                    }
                },

            });
        }
        else {
            alert("Passwords don't match");
        }
    }
    else {
        alert("Please Fill in all the fields");
    }

});

$(document).on('submit', '#categoryForm', function (e) {
    e.preventDefault();
    let name = $('#categoryName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/categories.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Category added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});


$(document).on('submit', '#designationForm', function (e) {
    e.preventDefault();

    let name = $('#designationName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/designations.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Designation added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});

$(document).on('submit', '#planForm', function (e) {
    e.preventDefault();

    let name = $('#planName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/plans.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Plan added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});

$(document).on('submit', '#programmingSkillsForm', function (e) {
    e.preventDefault();

    let name = $('#programmingSkillName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/programming_skills.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Programming Skill added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});

$(document).on('submit', '#languageForm', function (e) {
    e.preventDefault();

    let name = $('#languageName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/languages.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Language added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});


$(document).on('submit', '#addonForm', function (e) {
    e.preventDefault();

    let name = $('#addonName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/addons.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Addon added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});


// $(document).on('submit', '#qualificationForm', function (e) {
//     e.preventDefault();

//     let name = $('#qualificationName').val();

//     if (name !== "") {
//         $.ajax({
//             url: "crud/master/qualifications.php",
//             type: "POST",
//             dataType: "json",
//             data: { name: name },
//             success: function (response) {
//                 if (response.status === "success") {
//                     alert("Qualification added!");
//                     location.reload();
//                     // $('#categoryModal').modal('hide'); 
//                     // $('#categoryModal')[0].reset();
//                 }
//                 else {
//                     alert("Error: " + response.error);
//                 }
//             }
//         });
//     }
// });

$(document).on('submit', '#serviceForm', function (e) {
    e.preventDefault();

    let name = $('#serviceName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/services.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Services added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});


$(document).ready(function () {
    $('#datatable1').DataTable();
    $('#contact-table1').DataTable();

    $(document).on('submit', '#qualificationForm', function (e) {
    e.preventDefault();

    let name = $('#qualificationName').val();

    if (name !== "") {
        $.ajax({
            url: "crud/master/qualifications.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Qualification added!");
                    location.reload();
                    // $('#categoryModal').modal('hide'); 
                    // $('#categoryModal')[0].reset();
                }
                else {
                    alert("Error: " + response.error);
                }
            }
        });
    }
});
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
