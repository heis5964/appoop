<?php include_once('nav.php'); ?>
<?php include_once('header.php'); ?>

    <div class="container">
        <h1 class="my-3">Register Page</h1>

        <?php    
            include_once("config/Database.php");
            include_once("class/UserRegister.php");
            include_once("class/Utils.php");

            $connectDB = new Database();
            $db = $connectDB->getConnection();

            //สร้างตัวแปร
            $user = new UserRegister($db);

            //เรียกใช้alert bootstrap
            $bs = new Bootstrap();

            //ตรวจสอบการส่งค่า
            if (isset($_POST['signup'])) {
                $user->setName($_POST['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->setConfirmPassword($_POST['confirm_password']);

                //ตรวจสอบเงื่อนไข ถ้าpasswordไม่ตรงกัน
                if (!$user->validatePassword()) {
                    // echo "<div class='alert alert-danger' role='alert'>Password do not match</div>";
                    $bs->displayAlert("Password do not match", "danger");
                }

                //ตรวจสอบเงื่อนไข ความยาวของรหัสผ่าน
                if (!$user->checkPasswordLength()) {
                    // echo "<div class='alert alert-danger' role='alert'>Password must be at least 6 characters long.</div>";
                    $bs->displayAlert("Password must be at least 6 characters long.", "danger");
                }

                //ตรวจสอบเงื่อน emailซ้ำ
                if ($user->checkEmail()) {
                    // echo "<div class='alert alert-danger' role='alert'>This email is already exists try another.</div>";
                    $bs->displayAlert("This email is already exists try another.", "danger");
                }

                //เรียกใช้ฟังก์ชั่นในการนำข้อมูลลงฐานข้อมูล
                if ($user->createUser()) {
                    // echo "<div class='alert alert-success' role='alert'>
                    //     User Created Successfully.
                    // </div>";
                    $bs->displayAlert("User Created Successfully.", "success");
                } else {
                    // echo "<div class='alert alert-danger' role='alert'>
                    //     Failed to created a user.
                    // </div>";
                    $bs->displayAlert("Failed to created a user.", "danger");
                }
            }

        ?>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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