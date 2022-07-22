<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');

?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-outline-primary mb-3">
                    <a href="./create-user.php">Create User</a>
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>User Image</th>
                        <th>Create Date</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_User");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['user_username']; ?></td>
                            <td><?php echo $row['user_email']; ?></td>
                            <td><?php echo $row['user_password']; ?></td>
                            <td><?php echo $row['user_src']; ?></td>
                            <td><?php echo $row['createdAt']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/user/delete-user.php?id=<?php echo $row['user_id']; ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</main>

<?php include('./footer.php') ?>