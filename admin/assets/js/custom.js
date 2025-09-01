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
            url: "crud/master/category_types.php",
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
            url: "crud/master/designation_types.php",
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
            url: "crud/master/plan_types.php",
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
            url: "crud/master/programming_skill_types.php",
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
            url: "crud/master/language_types.php",
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
            url: "crud/master/extra_skill_types.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Extra Skill added!");
                    //  toastr.success('Operation completed successfully!', 'Success');
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
            url: "crud/master/skill_list_types.php",
            type: "POST",
            dataType: "json",
            data: { name: name },
            success: function (response) {
                if (response.status === "success") {
                    alert("Skill List added!");
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
    $('#datatable').DataTable();
    $('#datatable1').DataTable();
    $('#contact-table1').DataTable();
    $(document).on('submit', '#qualificationForm', function (e) {
        e.preventDefault();

        let name = $('#qualificationName').val();

        if (name !== "") {
            $.ajax({
                url: "crud/master/qualification_types.php",
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

    $(document).on('submit', '#editqualificationModal', function (e) {
        e.preventDefault();

        let name = $('#editQualificationName')

        if (name !== "") {
            $.ajax({
                url: "crud/master/qualification_types.php",
                type: "POST",
                dataType: "json",
                data: { name: name },
                success: function (response) {
                    if (response.status === "success") {
                        //alert("Qualification edited!");
                        //  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        //                     A simple primary alert—check it out!
                        //                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  
                        //                     </button>
                        //                 </div>
                        location.reload();
                    }
                    else {
                        alert("Error: " + response.error);
                    }
                }
            })
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


// function editButton(id, url) {
//     $.ajax({
//         url: url,
//         type: "POST",
//         dataType: "json",
//         data: { id: id },
//         success: function (response) {
//             if (response.status === "success") {
//                 alert("Edited Successfully!");
//                 location.reload();
//             }
//             else {
//                 alert("Error: " + response.error);
//             }
//         }
//     })
// }

$(document).on('click', '.edit-category-btn', function () {
    let categoryId = $(this).data('category-id');
    $("#editCategoryId").val(categoryId);
});

$(document).on('submit', '#editCategoryForm', function (e) {
    e.preventDefault();
    let name = $('#editCategoryName').val();
    let id = $('#editCategoryId').val();
    $.ajax({
        url: "crud/master/category_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name
        },
        success: function (response) {
            if (response.status === "success") {
                alert("Category Edited!");
                location.reload();
                // $('#categoryModal').modal('hide'); 
                // $('#categoryModal')[0].reset();
            }
            else {
                alert("Error: " + response.error);
            }
        }
    });

});


$(document).on('click', '.edit-extraskill-btn', function () {
    let extraSkillId = $(this).data('extra-skil-id');
    $("#editExtraSkillId").val(extraSkillId);
});


$(document).on('submit', '#editExtraSkillForm', function (e) {
    e.preventDefault();
    let name = $('#editExtraSkillName').val();
    let id = $('#editExtraSkillId').val();
    $.ajax({
        url: "crud/master/extra_skill_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name
        },
        success: function (response) {
            if (response.status === "success") {
                alert("Extra Skill Edited!");
                location.reload();
                // $('#categoryModal').modal('hide'); 
                // $('#categoryModal')[0].reset();
            }
            else {
                alert("Error: " + response.error);
            }
        }
    });
});


$(document).on('click', '.edit-plan-btn', function () {
    let planId = $(this).data('plan-id');
    $("#editPlanId").val(planId);
});

$(document).on('submit', '#editPlanForm', function (e) {
    e.preventDefault();
    let name = $('#editPlanName').val();
    let id = $('#editPlanId').val();
    $.ajax({
        url: "crud/master/plan_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name
        },
        success: function (response) {
            if (response.status === "success") {
                alert("Plan Edited!");
                location.reload();
                // $('#categoryModal').modal('hide'); 
                // $('#categoryModal')[0].reset();
            }
            else {
                alert("Error: " + response.error);
            }
        }
    });
});


$(document).on('click', '.edit-lang-btn', function () {
    let langId = $(this).data('lang-id');
    $("#editLangId").val(langId);
});

$(document).on('submit', '#editLangForm', function (e) {
    e.preventDefault();
    let name = $('#editLangName').val();
    let id = $('#editLangId').val();
    $.ajax({
        url: "crud/master/language_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name
        },
        success: function (response) {
            if (response.status === "success") {
                alert("Language Edited!");
                location.reload();
                // $('#categoryModal').modal('hide'); 
                // $('#categoryModal')[0].reset();
            }
            else {
                alert("Error: " + response.error);
            }
        }
    });
});

$(document).on('click', '.edit-qualification-btn', function () {
    let qualificationId = $(this).data('qualification-id'); // Changed from lang-id
    $("#editQualificationId").val(qualificationId);
});

$(document).on('submit', '#editQualificationForm', function (e) {
    e.preventDefault();
    let name = $('#editQualificationName').val();
    let id = $('#editQualificationId').val();
    $.ajax({
        url: "crud/master/qualification_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name,

        },
        success: function (response) {
            if (response.status === "success") {
                alert("Qualification Edited!");
                location.reload();
            } else {
                alert("Error: " + response.error);
            }
        }
    });
});


$(document).on('click', '.skill-list-btn', function () {
    let skillListId = $(this).data('skilllist-id'); // Changed from lang-id
    $("#editSkillListId").val(skillListId);
});

$(document).on('submit', '#editSkillListForm', function (e) {
    e.preventDefault();
    let name = $('#editSkillListName').val();
    let id = $('#editSkillListId').val();
    $.ajax({
        url: "crud/master/skill_list_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name,

        },
        success: function (response) {
            if (response.status === "success") {
                alert("Skilllist Edited!");
                location.reload();
            } else {
                alert("Error: " + response.error);
            }
        }
    });
});

$(document).on('click', '.programming-skill-btn', function () {
    let programmingSkillId = $(this).data('programmingskill-id'); // Changed from lang-id
    $("#editProgrammingSkillId").val(programmingSkillId);
});

$(document).on('submit', '#editProgrammingSkillForm', function (e) {
    e.preventDefault();
    let name = $('#editProgrammingSkillName').val();
    let id = $('#editProgrammingSkillId').val();
    $.ajax({
        url: "crud/master/programming_skill_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name,

        },
        success: function (response) {
            if (response.status === "success") {
                alert("Programming Skill Edited!");
                location.reload();
            } else {
                alert("Error: " + response.error);
            }
        }
    });
});

$(document).on('click', '.edit-designation-btn', function () {
    let designationId = $(this).data('designation-id'); // Changed from lang-id
    $("#editDesignationId").val(designationId);
});

$(document).on('submit', '#editDesignationForm', function (e) {
    e.preventDefault();
    let name = $('#editDesignationName').val();
    let id = $('#editDesignationId').val();
    $.ajax({
        url: "crud/master/designation_types.php",
        type: "POST",
        dataType: "json",
        data: {
            id: id,
            name: name,

        },
        success: function (response) {
            if (response.status === "success") {
                alert("Designation Edited!");
                location.reload();
            } else {
                alert("Error: " + response.error);
            }
        }
    });
});