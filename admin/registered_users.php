<?php
require_once 'header.php';
?>

<body data-menu-color="light" data-sidebar="default">
  <div id="app-layout">
    <?php include 'topbar.php'; ?>
    <?php include 'left_sidebar.php'; ?>

    <div class="content-page">
      <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
          <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
              <h4 class="fs-18 fw-semibold m-0">Users</h4>
            </div>
            <div class="text-end">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userForm">
                <i class="ri-add-line"></i> Add
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-body">

                  <div class="row g-3">
                    <div class="col-12">
                      <!-- removed .table-responsive -->
                      <table id="datatable1" class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Street</th>
                            <th scope="col">Pincode</th>
                            <th scope="col">Country</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="row">1</td>
                            <td>Arter</td>
                            <td>Carter</td>
                            <td>Artur Carter</td>
                            <td>arter_carter666</td>
                            <td>artercarter@gmail.com</td>
                            <td>780771142653</td>
                            <td>12 toronto street</td>
                            <td>A1A1A1</td>
                            <td>Canada</td>
                            <td class="text-center">
                              <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-info btn-sm me-1" title="View">
                                  <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal"
                                  data-bs-target="#editButton" title="Edit">
                                  <i class="ri-edit-2-line"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm" onclick="deleteButton()" title="Delete">
                                  <i class="ri-delete-bin-6-line"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td scope="row">2</td>
                            <td>Mohit</td>
                            <td>Anand</td>
                            <td>Mohit Anand</td>
                            <td>mohit_anand666</td>
                            <td>anandmohitsingh@gmail.com</td>
                            <td>780771142453</td>
                            <td>Phulwari Shareef</td>
                            <td>805105</td>
                            <td>India</td>
                            <td class="text-center">
                              <div class="d-flex justify-content-center">
                                <button class="btn btn-outline-info btn-sm me-1" title="View">
                                  <i class="ri-eye-line"></i>
                                </button>
                                <button class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal"
                                  data-bs-target="#editButton" title="Edit">
                                  <i class="ri-edit-2-line"></i>
                                </button>
                                <button class="btn btn-outline-danger btn-sm" onclick="deleteButton()" title="Delete">
                                  <i class="ri-delete-bin-6-line"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div> <!-- end card-body -->
              </div> <!-- end card-->
            </div> <!-- end col -->
          </div> <!-- end row -->
        </div>
      </div>
    </div>

    <!-- Modals remain unchanged... -->

</div> 
<?php
require_once 'footer.php';
?> 
</body>
</html>
