<?php require_once 'header.php'; ?> 
<!-- body start -->

<body data-menu-color="light" data-sidebar="default">
    <!-- Begin page -->
    <div id="app-layout">

        <!-- Topbar Start -->
        <?php include 'topbar.php'; ?>
        <!-- end Topbar -->
        <!-- Left Sidebar Start -->
        <?php include 'left_sidebar.php'; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Contacts</h4>
                        </div>
                    </div>

                    <div class="card mt-3 skill-card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Contacts</h5>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered nowrap" id="contact-table1">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone No</th>
                                            <th scope="col">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>john@example.com</td>
                                            <td>9876543210</td>
                                            <td>Hello, I want to know more.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="alert-container mt-3"></div>

                        </div>
                    </div>

                </div>
            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
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
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php require_once 'footer.php'; ?>
</body>
</html>
