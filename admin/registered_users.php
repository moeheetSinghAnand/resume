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
                    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#userForm">
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
                            <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
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
                                            <td scope="row">Arter</td>
                                            <td scope="row">Carter</td>
                                            <td scope="row">Artur Carter</td>
                                            <td scope="row">arter_carter666</td>
                                            <td scope="row">artercarter@gmail.com</td>
                                            <td scope="row">780771142653</td>  
                                            <td scope="row">12 toronto street</th>
                                            <td scope="row">A1A1A1</td>
                                            <td scope="row">Canada</td>
                                           
                                        <td scope="row" class="text-center">
  <div class="d-flex justify-content-center">
    <button class="btn btn-outline-info btn-sm me-1"  title="View">
      <i class="ri-eye-line"></i>
    </button>
    <button class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editButton" title="Edit">
      <i class="ri-edit-2-line"></i>
    </button>
    <button class="btn btn-outline-danger btn-sm" onclick="deleteButton()" title="Delete">
      <i class="ri-delete-bin-6-line"></i>
    </button>
  </div>
</td>>                    
                                        </tr>
                                           <tr>
                                            <td scope="row">2</td>
                                            <td scope="row">Mohit</td>
                                            <td scope="row">Anand</td>
                                            <td scope="row">Mohit Anand</td>
                                            <td scope="row">mohit_anand666</td>
                                            <td scope="row">anandmohitsingh@gmail.com</td>
                                               <td scope="row">780771142453</td> 
                                             <td scope="row">Phulwari Shareef</th>
                                            <td scope="row">805105</td>
                                            <td scope="row">India</td>
                                            <td scope="row" class="text-center">
  <div class="d-flex justify-content-center">
    <button class="btn btn-outline-info btn-sm me-1" title="View">
      <i class="ri-eye-line"></i>
    </button>
    <button class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editButton" title="Edit">
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
                        </div>
              
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
</div>
</div>
</div>

<div class="modal fade" id="userForm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header" style="padding:9px 9px;">
        <h5 class="modal-title">Add</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form method="post">
        <div class="modal-body">
          <div class="row g-1">
            
            <div class="col-6 mb-2">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first-name" name="firstname" placeholder="Enter your first name" required>
            </div>

            <div class="col-6 mb-2">
              <label for="last-name" class="form-label">Last name</label>
              <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter your last name" required>
            </div>

            <div class="col-6 mb-2">
              <label for="user-name" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="user-name" name="user-name" placeholder="Enter your username" required>
              </div>
            </div>

            <div class="col-6 mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>

            <div class="col-6 mb-2">
              <label for="e-mail" class="form-label">Email</label>
              <input type="email" class="form-control" id="e-mail" name="e-mail" placeholder="Enter your email" required>
            </div>

            <div class="col-6 mb-2">
              <label for="street" class="form-label">Street</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Enter your street">
            </div>

            <div class="col-6 mb-2">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" required>
                <option selected disabled value="">Choose...</option>
                <option>India</option>
                <option>USA</option>
                <option>China</option>
              </select>
            </div>

            <div class="col-6 mb-2">
              <label for="pincode" class="form-label">Pincode</label>
              <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter your pincode" required>
            </div>

            <div class="col-6 mb-2">
              <label for="telegram" class="form-label">Telegram</label>
              <input type="text" class="form-control" id="telegram" name="telegram" placeholder="Enter your tele" required>
            </div>

            <div class="col-6 mb-2">
              <label for="personal_no" class="form-label">Personal No</label>
              <input type="number" class="form-control" id="personal_no" name="personal_no" placeholder="Enter your personal number" required>
            </div>

            <div class="col-6 mb-2">
              <label for="support_no" class="form-label">Support No</label>
              <input type="number" class="form-control" id="support_no" name="support_no" placeholder="Enter your support number" required>
            </div>

            <div class="col-6 mb-2">
              <label for="office_no" class="form-label">Office No</label>
              <input type="number" class="form-control" id="office_no" name="office_no" placeholder="Enter your office number" required>
            </div>
          </div> 
        </div>

        <div class="modal-footer">
          <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="modal fade" id="editButton" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header" style="padding:9px 9px;">
        <h5 class="modal-title">Edit</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form method="post">
        <div class="modal-body">
          <div class="row g-1">
            
            <div class="col-6 mb-2">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first-name" name="firstname" placeholder="Enter your first name" required>
            </div>

            <div class="col-6 mb-2">
              <label for="last-name" class="form-label">Last name</label>
              <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter your last name" required>
            </div>

            <div class="col-6 mb-2">
              <label for="user-name" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="user-name" name="user-name" placeholder="Enter your username" required>
              </div>
            </div>

            <div class="col-6 mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>

            <div class="col-6 mb-2">
              <label for="e-mail" class="form-label">Email</label>
              <input type="email" class="form-control" id="e-mail" name="e-mail" placeholder="Enter your email" required>
            </div>

            <div class="col-6 mb-2">
              <label for="street" class="form-label">Street</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Enter your street">
            </div>

            <div class="col-6 mb-2">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" required>
                <option selected disabled value="">Choose...</option>
                <option>India</option>
                <option>USA</option>
                <option>China</option>
              </select>
            </div>

            <div class="col-6 mb-2">
              <label for="pincode" class="form-label">Pincode</label>
              <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter your pincode" required>
            </div>

            <div class="col-6 mb-2">
              <label for="telegram" class="form-label">Telegram</label>
              <input type="text" class="form-control" id="telegram" name="telegram" placeholder="Enter your tele" required>
            </div>

            <div class="col-6 mb-2">
              <label for="personal_no" class="form-label">Personal No</label>
              <input type="number" class="form-control" id="personal_no" name="personal_no" placeholder="Enter your personal number" required>
            </div>

            <div class="col-6 mb-2">
              <label for="support_no" class="form-label">Support No</label>
              <input type="number" class="form-control" id="support_no" name="support_no" placeholder="Enter your support number" required>
            </div>

            <div class="col-6 mb-2">
              <label for="office_no" class="form-label">Office No</label>
              <input type="number" class="form-control" id="office_no" name="office_no" placeholder="Enter your office number" required>
            </div>
          </div> 
        </div>

        <div class="modal-footer">
          <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div

       

<?php 
    require_once 'footer.php'; 
?>
</body>
</html>