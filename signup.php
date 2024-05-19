<?php include_once('nav.php'); ?>
<?php include_once('header.php'); ?>

    <div class="container">
        <h1 class="display-4">Register Page</h1>


    <form action="" method="post">
        <div class="my-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" aria-describedby="name" placeholder="Enter your name">
        </div>
        <div class="my-3">
            <label for="email address" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" aria-describedby="email" placeholder="Enter your email">
        </div>
        <div class="my-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" aria-describedby="password" placeholder="Enter your password">
        </div>
        <div class="my-3">
            <label for="confirm password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" aria-describedby="confirm password" placeholder="Confirm your password">
        </div>
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
    </form>

    <p class="my-3">Already have an account? go to <a href="signin.php">Sign In</a> Page</p>
    
    <hr>
    <a href="index.php" class="btn btn-secondary">Go back</a>
    </div>    

<?php include_once('footer.php'); ?>