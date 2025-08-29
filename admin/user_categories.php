<?php
require_once 'header.php';
require_once 'dbconfig.php';
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
                            <h4 class="fs-18 fw-semibold m-0">Categories</h4>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                <i class="ri-add-line"></i> Add
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- <tr>
                                                        <th scope="row">1</th>
                                                        <td>Web templates</td>
                                                        <td>
                                                            <button class="btn btn-outline-primary btn-sm me-2"
                                                                data-bs-toggle="modal" data-bs-target="#editButton"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button class="btn  btn-outline-danger btn-sm"
                                                                onclick="deleteButton()"><i
                                                                    class="ri-delete-bin-6-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Logos</td>
                                                        <td>
                                                            <button class="btn btn-outline-primary btn-sm me-2"
                                                                data-bs-toggle="modal" data-bs-target="#editButton"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button class="btn  btn-outline-danger btn-sm"
                                                                onclick="deleteButton()"><i
                                                                    class="ri-delete-bin-6-line"></i></button>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Drawings</td>
                                                        <td>
                                                            <button class="btn btn-outline-primary btn-sm me-2"
                                                                data-bs-toggle="modal" data-bs-target="#editButton"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button class="btn  btn-outline-danger btn-sm"
                                                                onclick="deleteButton()"><i
                                                                    class="ri-delete-bin-6-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Web Templates</td>
                                                        <td>
                                                            <button class="btn btn-outline-primary btn-sm me-2"
                                                                data-bs-toggle="modal" data-bs-target="#editButton"><i
                                                                    class="ri-pencil-line"></i></button>
                                                            <button class="btn  btn-outline-danger btn-sm"
                                                                onclick="deleteButton()"><i
                                                                    class="ri-delete-bin-6-line"></i></button>
                                                        </td>
                                                    </tr> -->
                                                    <?php
                                                        $select = "SELECT * FROM `categories`";
                                                        $result = mysqli_query($conn, $select);
                                                        if ($result && $result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {

                                                    ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $row['id']; ?></th>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td>
                                                                    <button class="btn btn-outline-primary btn-sm me-2"
                                                                        data-bs-toggle="modal" data-bs-target="#editButton"><i
                                                                            class="ri-pencil-line"></i></button>
                                                                    <button class="btn  btn-outline-danger btn-sm"
                                                                        onclick="deleteButton()"><i
                                                                            class="ri-delete-bin-6-line"></i></button>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

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

        <!-- Add Modal  -->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="padding:9px 9px;">
                        <h5 class="modal-title">Add</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>

                    </div>
                    <form id="categoryForm">
                        <div class="modal-body">
                            <label for="categoryName" class="mb-2">Category</label>
                            <input class="form-control mb-3" type="text" placeholder="category" id="categoryName"
                                name="categoryName" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editButton" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="padding:9px 9px;">
                        <h5 class="modal-title">Edit</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>

                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <label for="categoryName" class="mb-2">Category</label>
                            <input class="form-control mb-3" type="text" placeholder="category" id="editcategoryName"
                                name="editcategoryName" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button" value="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="deleteButton" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <label for="categoryName" class="mb-2">Category Name</label>
                            <input class="form-control mb-3" type="text" placeholder="category name"
                                id="deletecategoryName" name="deletecategoryName" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="button" value="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        require_once 'footer.php';
        ?>
</body>

</html>