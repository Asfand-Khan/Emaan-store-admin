<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Brands</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Brands</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <form class="d-flex py-3" action="./api/create-brand.php" method="POST">
            <input class="form-control me-2" type="text" name="brand" placeholder="Enter Brand">
            <button class="btn btn-outline-primary" type="submit" name="brandbtn">Create</button>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Brand Id</th>
                        <th>Brand Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_brand");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['brand_id']; ?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/delete_brand.php?id=<?php echo $row['brand_id']; ?>">Delete</a></button>
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