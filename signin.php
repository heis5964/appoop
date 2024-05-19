<?php include_once('nav.php'); ?>
<?php include_once('header.php'); ?>

    <div class="container">
        <h1 class="display-4">Login Page</h1>


    <form action="" method="post">
        <div class="my-3">
            <label for="email address" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Enter your email">
        </div>
        <div class="my-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" aria-describedby="password" placeholder="Enter your password">
        </div>
        <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
    </form>

    <p class="my-3">Do not have an account? go to <a href="signup.php">Sign Up</a> Page</p>
    

    <hr>
    <a href="index.php" class="btn btn-secondary">Go back</a>
    </div>

    

<?php include_once('footer.php'); ?>