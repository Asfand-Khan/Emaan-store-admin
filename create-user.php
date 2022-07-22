<?php
include('./header.php');
include('./sidebar.php');
include('./api/config.php');
?>

<script>
function myFunction() {
  var x = document.getElementById("userpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                <li class="breadcrumb-item active">Create-User</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <form action="./api/user/create-user.php" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                    <div class="col-md-6 col-12">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" id="title" required>
                        <div class="invalid-feedback">Please, enter Username!</div>
                    </div>
                    <br>
                    <div class="col-md-6 col-12">
                        <label for="useremail" class="form-label">User Email</label>
                        <input type="Email" name="useremail" class="form-control" id="useremail" required>
                        <div class="invalid-feedback">Please enter Email Address</div>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="userpass" class="form-label">User Password</label>
                        <input type="password" name="userpass" class="form-control" id="userpass" required></input>
                        <input type="checkbox" onclick="myFunction()" style="margin-top:10px; padding-top:10px;"> Show Password
                        <div class="invalid-feedback">Please, enter Password</div>
                    </div>

                    <div class="col-md-6 col-12">
                        <label for="image" class="form-label">User Image</label>
                        <input type="file" name="image" class="form-control" id="image" required>
                        <div class="invalid-feedback">Please insert image</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="btncreate-product">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include('./footer.php') ?>