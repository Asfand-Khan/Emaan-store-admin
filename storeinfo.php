<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Store Info</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-outline-primary mb-3">
                    <a href="./create-product.php">Create Store</a>
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Store Name</th>
                        <th>Logo</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>About Us</th>
                        <th>Facebook Link</th>
                        <th>Instagram Link</th>
                        <th>Twitter Link</th>
                        <th>Create Date & Time</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_storeinfo");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['info_storename']; ?></td>
                            <td><?php echo $row['info_storelogo']; ?></td>
                            <td><?php echo $row['info_storeaddress']; ?></td>
                            <td><?php echo $row['info_storedesc']; ?></td>
                            <td><?php echo $row['info_storefb']; ?></td>
                            <td><?php echo $row['info_storeinsta']; ?></td>
                            <td><?php echo $row['info_storetwt']; ?></td>
                            <td><?php echo $row['created_At']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/category/delete-store.php?id=<?php echo $row['info_storename']; ?>">Delete</a></button>
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