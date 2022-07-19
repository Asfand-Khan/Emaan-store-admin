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
                <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-outline-primary mb-3">
                    <a href="./create-product.php">Create Product</a>
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Product Id</th>
                        <th>Product Title</th>
                        <th>Product S.desc</th>
                        <th>Product Price</th>
                        <th>Product Unit</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_product");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['prod_id']; ?></td>
                            <td><?php echo $row['prod_title']; ?></td>
                            <td><?php echo $row['prod_desc']; ?></td>
                            <td><?php echo $row['prod_price']; ?></td>
                            <td><?php echo $row['prod_unit']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/category/delete-product.php?id=<?php echo $row['prod_id']; ?>">Delete</a></button>
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