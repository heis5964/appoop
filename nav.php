<nav class="navbar navbar-expand-lg bg-light">
  <!-- <div class="container-fluid"> -->
  <div class="container">
    <a class="navbar-brand" href="index.php">LoginRegisOOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <!-- //ถ้ามีการloginเข้ามา -->
        <?php if (isset($_SESSION['userid'])) { ?>
            <li class="nav-item">
              <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="signin.php">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="signup.php">Sign Up</a>
            </li>
        <?php } ?>
      </ul>


    </div>
  </div>
</nav>