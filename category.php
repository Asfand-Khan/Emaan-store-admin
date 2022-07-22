<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Categories</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <form class="d-flex py-3" action="./api/category/create-category.php" method="POST">
            <input class="form-control me-2" type="text" name="category" placeholder="Enter category">
            <button class="btn btn-outline-primary" type="submit" name="categorybtn">Create</button>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>S.No</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $select = mysqli_query($con, "Select * from es_category");
                    while ($row = mysqli_fetch_array($select)) {
                    ?>
                        <tr>
                            <td><?php echo $row['cat_id']; ?></td>
                            <td><?php echo $row['cat_name']; ?></td>
                            <td>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="./api/category/delete-category.php?id=<?php echo $row['cat_id']; ?>">Delete</a></button>
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