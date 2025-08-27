<?php require_once 'header.php'; ?>
<body data-menu-color="light" data-sidebar="default">
    <div id="app-layout">

        <?php include 'topbar.php'; ?>
        <?php include 'left_sidebar.php'; ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Profiles</h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">User Registration</h5>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="first-name" name="firstname"
                                            placeholder="Enter your first name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" name="last-name"
                                            placeholder="Enter your last name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="full-name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="full-name" name="full-name"
                                            placeholder="Enter your full name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="user-name" class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="user-name" name="user-name"
                                                placeholder="Enter your username" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="e-mail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="e-mail" name="e-mail"
                                            placeholder="Enter your email" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="contact_no" class="form-label">Contact No</label>
                                        <input type="number" class="form-control" id="contact_no" name="contact_no"
                                            placeholder="Enter your contact number" required>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="street" name="street"
                                            placeholder="Enter your street">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="number" class="form-control" id="pincode" name="pincode"
                                            placeholder="Enter your pincode" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option>India</option>
                                            <option>USA</option>
                                            <option>China</option>
                                        </select>
                                    </div>

                                    <div class="mt-4 d-flex justify-content-end gap-2">
                                        <button type="button" class="btn btn-danger">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Programming Skill To Enter</h5>
                        </div>
                        <div class="card-body">
                            <form id="select-form" action="skill_viewer.php" method="POST">

                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <label for="skill-type" class="form-label">Skill Type</label>
                                        <select id="skill-type" class="form-select" aria-label="Skills Selection">
                                            <option value="" selected></option>
                                            <option value="Design">web Development</option>
                                            <option value="Soft-Skills">Ui/UX Design</option>
                                            </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="skill-name" class="form-label">Service Name</label>
                                        <select id="skill-name" class="form-select" aria-label="Skill Type Selection">
                                            <option value="" selected></option>
                                            <option value="HTML5">HTML5</option>

                                        </select>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <label class="visually-hidden form-label" for="skill-measure">Percentage</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="skill-measure" min="0"
                                                max="100" placeholder="Percentage">
                                            <div class="input-group-text">%</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <button type="button" class="btn btn-success" id="addButton"
                                            onclick="addRow()">Add</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="table-responsive col-md-6">
                                        <table class="table mb-0" id="skill-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Skill Type</th>
                                                    <th scope="col">Skill Name</th>
                                                    <th scope="col">Skill Measure</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">Web Development</td>
                                                    <td scope="row">Html</th>
                                                    <td scope="row">100</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="alert-container col-md-12"></div>
                                <div class="col-md-12 mt-3 text-end">
                                    <button type="submit" class="btn btn-primary" style="display: none;"
                                        id="invisibleButton">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div> -->

                    <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile</h5>
                        </div>
                        <div class="card-body">
                            <form id="select-form" action="skill_viewer.php" method="POST">
                                <div class="row g-3 mb-5">
                                    <div class="col-md-3">
                                        <label for="user_id" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id"
                                            placeholder="Enter User ID">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="residence" class="form-label">Residence</label>
                                        <input type="text" class="form-control" id="residence" name="residence"
                                            placeholder="Enter Residence">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter City">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter State">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pincode" class="form-label">Pincode</label>
                                        <input type="number" class="form-control" id="pincode" name="pincode"
                                            placeholder="Enter Pincode">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" class="form-control" id="age" name="age"
                                            placeholder="Enter Age">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="punchline" class="form-label">Punchline</label>
                                        <input type="text" class="form-control" id="punchline" name="punchline"
                                            placeholder="Enter Punchline">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="experience" class="form-label">Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience"
                                            placeholder="Enter Experience">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="projects_completed" class="form-label">Projects Completed</label>
                                        <input type="number" class="form-control" id="projects_completed"
                                            name="projects_completed" placeholder="Enter Projects Completed">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="customer_count" class="form-label">Customer Count</label>
                                        <input type="number" class="form-control" id="customer_count" name="customer_count"
                                            placeholder="Enter Customer Count">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="award_count" class="form-label">Award Count</label>
                                        <input type="number" class="form-control" id="award_count" name="award_count"
                                            placeholder="Enter Award Count">
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <button type="button" class="btn btn-success" id="addButton"
                                            onclick="addRow()">Add</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mb-0" id="skill-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Skill Type</th>
                                                <th scope="col">Skill Name</th>
                                                <th scope="col">Skill Measure</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Web Development</td>
                                                <td>Html</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="alert-container mt-3"></div>
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary" style="display: none;"
                                        id="invisibleButton">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Services</h5>
                        </div>
                        <div class="card-body">
                            <form id="select-form" action="skill_viewer.php" method="POST">

                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <label for="skill-type" class="form-label">Service Type</label>
                                        <select id="skill-type" class="form-select" aria-label="Skills Selection">
                                            <option value="" selected></option>
                                            <option value="Design">web Development</option>
                                            <option value="Soft-Skills">Ui/UX Design</option>
                                            </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="skill-name" class="form-label">Service Name</label>
                                        <select id="skill-name" class="form-select" aria-label="Skill Type Selection">
                                            <option value="" selected></option>
                                            <option value="HTML5">HTML5</option>

                                        </select>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <label class="visually-hidden form-label" for="skill-measure">Percentage</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="skill-measure" min="0" max="100"
                                                placeholder="Percentage">
                                            <div class="input-group-text">%</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <button type="button" class="btn btn-success" id="addButton"
                                            onclick="addRow()">Add</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="table-responsive col-md-6">
                                        <table class="table mb-0" id="skill-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Skill Type</th>
                                                    <th scope="col">Skill Name</th>
                                                    <th scope="col">Skill Measure</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">Web Development</td>
                                                    <td scope="row">Html</th>
                                                    <td scope="row">100</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="alert-container col-md-12"></div>
                                <div class="col-md-12 mt-3 text-end">
                                    <button type="submit" class="btn btn-primary" style="display: none;"
                                        id="invisibleButton">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Programming Skills</h5>
                        </div>
                        <div class="card-body">
                            <form id="select-form" action="skill_viewer.php" method="POST">

                                <div class="row mb-5">
                                    <div class="col-md-3">
                                        <label for="skill-type" class="form-label">Skill Type</label>
                                        <select id="skill-type" class="form-select" aria-label="Skills Selection">
                                            <option value="" selected></option>
                                            <option value="Design">web Development</option>
                                            <option value="Soft-Skills">Ui/UX Design</option>
                                            </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="skill-name" class="form-label">Service Name</label>
                                        <select id="skill-name" class="form-select" aria-label="Skill Type Selection">
                                            <option value="" selected></option>
                                            <option value="HTML5">HTML5</option>

                                        </select>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <label class="visually-hidden form-label" for="skill-measure">Percentage</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="skill-measure" min="0" max="100"
                                                placeholder="Percentage">
                                            <div class="input-group-text">%</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <button type="button" class="btn btn-success" id="addButton"
                                            onclick="addRow()">Add</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="table-responsive col-md-6">
                                        <table class="table mb-0" id="skill-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Skill Type</th>
                                                    <th scope="col">Skill Name</th>
                                                    <th scope="col">Skill Measure</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">Web Development</td>
                                                    <td scope="row">Html</th>
                                                    <td scope="row">100</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="alert-container col-md-12"></div>
                                <div class="col-md-12 mt-3 text-end">
                                    <button type="submit" class="btn btn-primary" style="display: none;"
                                        id="invisibleButton">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Reviews</h5>
                        </div>
                        <div class="card-body">
                            <form id="review-form" action="review_viewer.php" method="POST">
                                <div class="row g-3 mb-5">
                                    <div class="col-md-3">
                                        <label for="user_id" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter User ID">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="reviewer_name" class="form-label">Reviewer Name</label>
                                        <input type="text" class="form-control" id="reviewer_name" name="reviewer_name" placeholder="Enter Reviewer Name">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="designation_id" class="form-label">Designation ID</label>
                                        <input type="text" class="form-control" id="designation_id" name="designation_id" placeholder="Enter Designation ID">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="rating" class="form-label">Rating</label>
                                        <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" placeholder="Enter Rating">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="review" class="form-label">Review</label>
                                        <textarea class="form-control" id="review" name="review" rows="3" placeholder="Enter Review"></textarea>
                                    </div>

                                    <div class="col-md-3 mt-4">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mb-0" id="review-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Reviewer Name</th>
                                                <th scope="col">Designation ID</th>
                                                <th scope="col">Review</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John Doe</td>
                                                <td>101</td>
                                                <td>Excellent service</td>
                                                <td>5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="alert-container mt-3"></div>
                            </form>
                        </div>
                    </div>
                    </div> </div> <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">
                            &copy;
                            <script>document.write(new Date().getFullYear())</script> - Made with <span
                                class="mdi mdi-heart text-danger"></span> by <a href="#!"
                                class="text-reset fw-semibold">Zoyothemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
        </div>
    <?php require_once 'footer.php'; ?>

</body>

</html>