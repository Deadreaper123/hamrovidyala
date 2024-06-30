<?php include('header.php') ?>

<section class="bg-light vh-100 d-flex">
  <div class="col-3 m-auto">
    <div class="card">
      <div class="card-body">
        <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
          <i class="fa fa-user text-light fa-3x m-auto"></i>
        </div>
        <h3 class="text-center mt-3">Admin Login</h3>
        <form action="actions/login.php" method="POST">
          <input type="hidden" name="role" value="admin">
          <div class="md-form">
            <input type="text" id="username" name="username" class="form-control" required>
            <label for="email">Username</label>
          </div>
          <div class="md-form">
            <input type="password" id="password" name="password" class="form-control" required>
            <label for="password">Your Password</label>
          </div>
          <div class="text-center">
            <button class="btn btn-secondary" name="login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php') ?>
