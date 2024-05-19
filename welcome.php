<?php include_once('header.php'); ?>
<?php include_once('nav.php'); ?>

    <div class="container">

        <?php

            if (!isset($_SESSION['userid'])) {
                header("Location: signin.php");
            }

            include_once("config/Database.php");
            include_once("class/UserLogin.php");

            $connectDB = new Database();
            $db = $connectDB->getConnection();

            $user = new UserLogin($db);

            //กรณีมีผู้ใช้loginเข้าใช้ระบบ
            if (isset($_SESSION['userid'])) {
                $userid = $_SESSION['userid'];
                //การเรียนใช้และส่งค่าไป
                $userData = $user->userData($userid);
            }
        ?>

        <h1 class="display-4">Welcome User, <?php echo $userData['name'];   ?> </h1>
        <p>Your email:, <?php echo $userData['email'];   ?></p>

    </div>

<?php include_once('footer.php'); ?>