<?php include('header.php') ?>

<section class="bg-light vh-100 d-flex">
  <div class="col-3 m-auto">
    <div class="card">
      <div class="card-body">
        <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
          <i class="fa fa-user text-light fa-3x m-auto"></i>
        </div>
        <form id="roleForm">
          <div class="form-group">
            <label for="role">Select Role</label>
            <select id="role" name="role" class="form-control">
              <option value="admin">Admin</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
            </select>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary" onclick="redirectToLogin()">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  function redirectToLogin() {
    var role = document.getElementById('role').value;
    if (role === 'admin') {
      window.location.href = 'adminlogin.php';
    } else if (role === 'student') {
      window.location.href = 'studentlogin.php';
    } else if (role === 'teacher') {
      window.location.href = 'teacherlogin.php';
    }
  }
</script>

<?php include('footer.php') ?>
