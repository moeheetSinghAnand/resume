


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
    // $('#datatable1').DataTable();
    // $('#contact-table1').DataTable();
    $(document).on('submit', '#index-page-form', function (e) {
        e.preventDefault();

        let user_email = $('#user-email').val()
        let user_password = $('#user-password').val()

        if (user_email !== "" && user_password !== "") {
            $.ajax({
                url: "crud/auth/login.php",
                type: "POST",
                dataType: "json",
                data: {
                    email: user_email,
                    password: user_password
                },
                success: function (response) {
                    if (response.status) {
                        alert("Login successful!");
                        window.location.href = "dashboard.php";
                    } else {
                        alert("Login failed: " + response.error);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                    alert("Something went wrong");
                }
            });
        } else {
            alert("Please enter both email and password.");
        }
    });


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

    // registration 
    $(document).on('submit', '#user-registration', function (e) {
        e.preventDefault();

        let first_name = $('#firstname').val();
        let last_name = $('#lastname').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmation = $('#confirm-password').val();

        if (first_name !== "" && last_name !== "" && email !== "" && password !== "" && confirmation !== "") {
            if (password === confirmation) {
                if (password.length < 8 || password.length > 32) {
                    alert("Password must be between 8 and 32 characters.");

                }

                $.ajax({
                    type: 'POST',
                    url: 'crud/auth/registration.php',
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
                            alert("Registration successful");
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

});

// function deleteButton() {
//     Swal.fire({
//         title: "Are you sure?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!"
//     }).then((result) => {
//         if (result.isConfirmed) {
//             Swal.fire({
//                 title: "Deleted!",
//                 text: "This record has been deleted",
//                 icon: "success"
//             });
//         }
//     });
// }

function deleteButton(id, table, name) {
    let type = table.split('_')[0];
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this " + type + "! : " + name,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "crud/master/delete.php",   // 👈 PHP script for delete
                type: "POST",
                data: { id: id, table: table },
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        Swal.fire("Deleted!", "This record has been deleted", "success");
                        // reload table or remove row
                        // $("#row" + id).remove();
                        location.reload();
                    } else {
                        Swal.fire("Error!", response.error, "error");
                    }
                },
                error: function () {
                    Swal.fire("Error!", "Something went wrong.", "error");
                }
            });
        }
    });
}

$(document).on('click', '.edit-category-btn', function () {
    let categoryId = $(this).data('category-id');
    $("#editCategoryId").val(categoryId);
    let categoryName = $(this).closest('tr').children().eq(1).text();
    $("#editCategoryName").val(categoryName);
    $('#editCategoryModal').modal('show');
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
    let extraSkillId = $(this).data('extra-skill-id');
    $("#editExtraSkillId").val(extraSkillId);
    let extraSkillname = $(this).closest('tr').children().eq(1).text();
    $("#editExtraSkillName").val(extraSkillname);
    $('#editExtraSkillModal').modal('show');
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
    let planName = $(this).closest('tr').children().eq(1).text();
    $("#editPlanName").val(planName);
    $('#editPlanModal').modal('show');
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
    let langName = $(this).closest('tr').children().eq(1).text();
    $("#editLangName").val(langName);
    $('#editLangModal').modal('show');
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
    let qualificationName = $(this).closest('tr').children().eq(1).text();
    $("#editQualificationName").val(qualificationName);
    $('#editQualificationModal').modal('show');
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
    let skillListName = $(this).closest('tr').children().eq(1).text();
    $("#editSkillListName").val(skillListName);
    $('#editSkillListModal').modal('show');
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
    let programmingSkillName = $(this).closest('tr').children().eq(1).text();
    $("#editProgrammingSkillName").val(programmingSkillName);
    $('#editProgrammingSkillListModal').modal('show');
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
    let designationName = $(this).closest('tr').children().eq(1).text();
    $("#editDesignationName").val(designationName);
    $('#editDesignationModal').modal('show');
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

// profiles form
$(document).on('submit', '#profile-reg', function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let formData = new FormData(form);
    $.ajax({
        url: 'crud/profile/registration.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (response) {
            console.log(response);
            if (response.status === 'success') {
                alert("Registration successful!");
                form.reset();
            } else {
                alert("Error: " + error);
            }
        },
        // error: function (xhr, status, error) {
        //     // console.error("AJAX error:", error);
        //     alert("Error: " + response.error);
        // }
    });
});




function addRowProgrammingSkill() {
    let skillNameSelect = document.getElementById('programming-skill-name');
    let selectedOption = skillNameSelect.options[skillNameSelect.selectedIndex];
    let skillName = selectedOption.text;
    let optionId = selectedOption.value; // better than using .id
    let skillMeasure = document.getElementById('programming-skill-measure').value;

    if (!optionId || !skillMeasure) {
        alert("Please select a Programming Skill and enter efficiency.");
        return;
    }

    let tableBody = document.querySelector('#profile-prog tbody');
    let rowCount = tableBody.rows.length + 1;
    let tr = tableBody.insertRow();

    tr.innerHTML = `
        <td scope="row">${rowCount}</td>
        <td>
            ${skillName}
            <input type="hidden" name="ps-ids[]" value="${optionId}">
        </td>
        <td>
            <input type="number" name="ps-measures[]" value="${skillMeasure}" class="form-control">
        </td>
          
    `;
    skillNameSelect.value = '';
    document.getElementById('programming-skill-measure').value = '';
}

$(document).on('submit', '#profile-prog', function (e) {
    e.preventDefault();

    let skillIds = [];
    $('input[name="ps-ids[]"]').each(function () { // no idea 
        skillIds.push(this.value);
    });

    let skillMeasures = [];
    $('input[name="ps-measures[]"]').each(function () { // no idea
        skillMeasures.push(this.value);
    });

    $.ajax({
        url: 'crud/profile/programming_skills.php',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify({ ids: skillIds, measures: skillMeasures }),
        success: function (response) {
            if (response.success) {
                alert('Skill submitted successfully!');
            }
            else {
                alert('Error: ' + response.message);
            }
        },
        error: function (err) {
            alert(err.value);
        }
    });

});



function addRowLanguage() {
    let skillNameSelect = document.getElementById('language-name');
    let selectedOption = skillNameSelect.options[skillNameSelect.selectedIndex];
    let skillName = selectedOption.text;
    let optionId = selectedOption.value;
    let skillMeasure = document.getElementById('language-measure').value;

    if (!optionId || !skillMeasure) {
        alert("Please select a language and enter efficiency.");
        return;
    }

    let tableBody = document.querySelector('#profile-lang tbody');
    let rowCount = tableBody.rows.length + 1;
    let tr = tableBody.insertRow();

    tr.innerHTML = `
        <td scope="row">${rowCount}</td>
        <td>
            ${skillName}
            <input type="hidden" name="lang-ids[]" value="${optionId}">
        </td>
        <td>
            <input type="number" name="lang-measures[]" value="${skillMeasure}" class="form-control" style="width:80px;">
        </td>
    `;

    // Reset the input fields
    skillNameSelect.value = '';
    document.getElementById('language-measure').value = '';
}

$(document).on('submit', '#profile-lang', function (e) {
    e.preventDefault();

    let skillIds = [];
    $('input[name="lang-ids[]"]').each(function () { // no idea 
        skillIds.push(this.value);
    });

    let skillMeasures = [];
    $('input[name="lang-measures[]"]').each(function () { // no idea
        skillMeasures.push(this.value);
    });

    $.ajax({
        url: 'crud/profile/languages.php',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify({ ids: skillIds, measures: skillMeasures }),
        success: function (response) {
            if (response.success) {
                alert('Language submitted successfully!');
            }
            else {
                alert('Error: ' + response.message);
            }
        },
        error: function (err) {
            alert(err.value);
        }
    });
});

// $(document).on('submit', '#profile-lang', function (e) {
//     e.preventDefault();

//     let skillIds = $('input[name="lang-ids[]"]').map(function () { return $(this).val(); }).get();
//     let skillMeasures = $('input[name="lang-measures[]"]').map(function () { return $(this).val(); }).get();

//     $.ajax({
//         url: 'crud/profile/languages.php',
//         type: 'POST',
//         data: { 'lang-ids': skillIds, 'lang-measures': skillMeasures },
//         success: function (response) {
//             alert('Language submitted successfully!');
//         },
//         error: function (err) {
//             console.log(err);
//         }
//     });
// })



// function addRowLanguage() {
//     let skillNameSelect = document.getElementById('language-name');
//     let selectedOption = skillNameSelect.options[skillNameSelect.selectedIndex];
//     let skillName = selectedOption.text;
//     let optionId = selectedOption.value;
//     let skillMeasure = document.getElementById('language-measure').value;
//     document.getElementById('language-id').value = optionId;

//     if (!optionId || !skillMeasure) {
//         alert("Please select a Language and enter efficiency.");
//         return;
//     }

//     let tableBody = document.querySelector('#profile-lang tbody');
//     let rowCount = tableBody.rows.length + 1;
//     let tr = tableBody.insertRow();

//     tr.innerHTML = `
//         <td scope="row">${rowCount}</td>
//         <td>
//             ${skillName}
//             <input type="hidden" name="lang-ids[]" value="${optionId}">
//         </td>
//         <td>
//             <input type="number" name="lang-measures[]" value="${skillMeasure}" class="form-control"  style="width:20px;>
//         </td>
//     `;

//     skillNameSelect.value = '';
//     document.getElementById('language-measure').value = '';
// }




function addRowProject() {

    let projectTypeSelect = document.getElementById('project-category')
    let selectedProject = projectTypeSelect.options[projectTypeSelect.selectedIndex];
    let projectName = selectedProject.text;
    let projectId = selectedProject.value;

    let projectTitle = document.getElementById('project-title');
    let projectDescription = document.getElementById('project-desc');
    let fileName = document.getElementById('file_name').files[0].name;
    document.getElementById('project-id').value = projectId;
    let tableBody = document.querySelector('#profile-proj tbody');
    let rowCount = tableBody.rows.length + 1;
    let tr = tableBody.insertRow();
    tr.innerHTML = `
    <td scope="row">${rowCount}</td>
    <td>
        ${projectName}
    </td>
    <td>
        <input type="text" name="proj-titles[]" value="${projectTitle.value}" class="form-control">
    </td>
    <td>
        <input type="text" name="proj-descriptions[]" value="${projectDescription.value}" class="form-control">
    </td>
    
        <td>${fileName}</td>
        <input type="hidden" name="proj-ids[]" value="${projectId}">
        <input type="hidden" name="file-names[]" value="${fileName}">
    `;
    projectTypeSelect.value = '';
    projectTitle.value = '';
    projectDescription.value = '';
    fileName.value = '';
}


$(document).on('submit', '#profile-proj', function (e) {
    e.preventDefault(); // Make sure to prevent default form submission

    let formData = new FormData(this); // Collect all form inputs automatically

    $.ajax({
        url: 'crud/profile/projects.php',
        type: 'POST',
        data: formData,
        processData: false, // Needed for FormData
        contentType: false, // Needed for FormData
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert('Project submitted successfully!');
            } else {
                alert('Error: ' + response.message);
            }
        },
        error: function (err) {
            alert(err.value);
        }
    });
});

function addRowExtraSkill() {
    let extraSkillTypeSelect = document.getElementById('extra-skill')
    let selectedExtraSkill = extraSkillTypeSelect.options[extraSkillTypeSelect.selectedIndex];
    let extraSkillName = selectedExtraSkill.text;
    let extraSkillId = selectedExtraSkill.value;

    let tableBody = document.querySelector('#profile-extra-skill tbody');
    let rowCount = tableBody.rows.length + 1;
    let tr = tableBody.insertRow();
    tr.innerHTML = `
        <td scope="row">${rowCount}</td>
        <td>${extraSkillName}</td>
        <input type="hidden" name="extra-skill-ids[]" value="${extraSkillId}">
    `;
    extraSkillTypeSelect.value = ''
}

function addRowQualification() {
    let qualificationTypeSelect = document.getElementById('qualification');
    let selectedQualification = qualificationTypeSelect.options[qualificationTypeSelect.selectedIndex];
    let qualificationName = selectedQualification.text;
    let qualificationId = selectedQualification.value;
    let startDate = document.getElementById('start-date').value;
    let endDate = document.getElementById('end-date').value;
    let description = document.getElementById('qualification-description').value;
    let certifcation = document.getElementById('certification').value;
    let fileName = document.getElementById('qfile-name').value;

    let tableBody = document.querySelector('#profile-qual tbody');
    let rowCount = tableBody.rows.length + 1;
    let tr = tableBody.insertRow();
    tr.innerHTML = `
        <td scope="row">?${rowCount}</td>
        <td>${qualificationName}</td>
        <td>${startDate}</td>
        <td>${endDate}</td>
        <td>${description}</td>
        <td>${certifcation}</td>
        <td>${fileName}</td>
        <input type="hidden" name="qualification-ids[]" value="${extraSkillId}">

    `;
    qualificationTypeSelect.value = '';
    document.getElementById('start-date').value = '';
    document.getElementById('end-date').value = '';
    document.getElementById('qualification-description').value = '';
    document.getElementById('certification').value = '';
    document.getElementById('qfile-name').value = '';
}

