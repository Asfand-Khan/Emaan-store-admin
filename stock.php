<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Stock</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Stock</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-outline-primary mb-3">
                    <a href="./create-stock.php">Create Stock</a>
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Stock Id</th>
                        <th>Stock Details</th>
                        <th>Stock Level</th>
                        <th>Variant</th>
                        <th>Create Date & Time</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_stock");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['stock_id']; ?></td>
                            <td><?php echo $row['stock']; ?></td>
                            <td><?php echo $row['stock_level']; ?></td>
                            <td><?php echo $row['variant_id']; ?></td>
                            <td><?php echo $row['created_At']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/category/delete-stock.php?id=<?php echo $row['prod_id']; ?>">Delete</a></button>
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