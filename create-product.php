<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                <li class="breadcrumb-item active">Create-product</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <form action="./api/product/create-product.php" method="POST" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6 col-12">
                        <label for="title" class="form-label">Product Title</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                        <div class="invalid-feedback">Please, enter title!</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="shortdesc" class="form-label">Product's Short Description</label>
                        <input type="text" name="shortdesc" class="form-control" id="shortdesc" required>
                        <div class="invalid-feedback">Please enter short description!</div>
                    </div>
                    <div class="col-12">
                        <label for="longdesc" class="form-label">Product's Long Description</label>
                        <textarea type="text" name="longdesc" class="form-control" id="longdesc" required></textarea>
                        <div class="invalid-feedback">Please, enter products's long decription!</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                        <div class="invalid-feedback">Please enter price!</div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="unit" class="form-label">Product Unit</label>
                        <input type="number" name="unit" class="form-control" id="unit" required>
                        <div class="invalid-feedback">Please, enter unit!</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="discount" class="form-label">Product Discount</label>
                        <input type="number" name="discount" class="form-control" id="discount" required>
                        <div class="invalid-feedback">Please enter discount!</div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="brand" class="form-label">Product Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" required>
                        <div class="invalid-feedback">Please, enter brand!</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="category" class="form-label">Product Category</label>
                        <input type="text" name="category" class="form-control" id="category" required>
                        <div class="invalid-feedback">Please enter category!</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                        <div class="invalid-feedback">Please insert image</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="btncreate-product">Create Product</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include('./footer.php') ?>