<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <!-- <button class="btn btn-outline-primary mb-3">
                    <a href="./create-product.php">Create Product</a>
                </button> -->
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Order Details</th>
                        <th>Quantity</th>
                        <th>Shipping Address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Discount</th>
                        <th>Net Amount</th>
                        <th>Total</th>
                        <th>Delivery Status</th>
                        <th>Delivery Charges</th>
                        <th>Payment Mode</th>
                        <th>Order Date & Time</th>
                        <th>Actions</th>
                    </tr>
                  
                </table>
            </div>
        </div>
    </section>
</main>

<?php include('./footer.php') ?>