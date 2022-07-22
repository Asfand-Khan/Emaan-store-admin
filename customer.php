<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');

?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Customers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Customers</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-outline-primary mb-3">
                    <a href="./create-user.php">Create Customer</a>
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Customer Id</th>
                        <th>Customer Email</th>
                        <th>Customer Password</th>
                        <th>Customer Name</th>
                        <th>Customer Mobile</th>
                        <th>Customer Gender</th>
                        <th>Customer Address</th>
                        <th>Customer Image</th>
                        <th>Customer Status</th>
                        <th>Create Date</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_customer");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['cus_id']; ?></td>
                            <td><?php echo $row['cus_email']; ?></td>
                            <td><?php echo $row['cus_password']; ?></td>
                            <td><?php echo $row['cus_name']; ?></td>
                            <td><?php echo $row['cus_mobile']; ?></td>
                            <td><?php echo $row['cus_gender']; ?></td>
                            <td><?php echo $row['cus_address']; ?></td>
                            <td><?php echo $row['cus_src']; ?></td>
                            <td><?php echo $row['cus_status']; ?></td>
                            <td><?php echo $row['created_At']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/customer/delete-customer.php?id=<?php echo $row['cus_id']; ?>">Delete</a></button>
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