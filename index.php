<?php include('header.php'); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"><b>HAMROVIDYALAYA</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact US</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown">
        <?php if (isset($_SESSION['login'])) { ?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i>Account
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="/hamrovidyalaya/admin/dashboard.php">Dashboard</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
        <?php } else { ?>
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>User login</a>
        <?php } ?>

      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<div class="py-5 shadow" style="background:linear-gradient(-45deg, #3923a7 50%, transparent 50%)">
  <div class="container-fluid my-2">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h1 class="display-3 font-weight-bold">Admission Open for 2023-2024</h1>
        <p class="py-lg-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aperiam similique error, <br> iste molestiae dignissimos odit voluptat</p>
        <a href="" class="btn btn-lg btn-primary">Call to Action</a>
      </div>
      <div class="col-lg-6">
        <div class="col-lg-8 mx-auto card shadow-lg">
          <div class="card-body py-5">
            <h3>Inquiry Form</h3>
            <form action="" method="post">
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="form1" class="form-control" name="name">
                <label for="form1">Your Name</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <input type="email" id="email" class="form-control" name="email">
                <label for="email">Your Email</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="mobile" class="form-control" name="mobile">
                <label for="mobile">Your Mobile</label>
              </div>
              <!-- Material input -->
              <div class="md-form">
                <textarea name="message" id="message" class="form-control md-textarea" rows="3"></textarea>
                <label for="message">Your Query</label>
              </div>
              <button class="btn btn-primary btn-block" type="submit">Submit Form</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About us -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h2 class="font-weight-bold">About <br> hamrovidyalaya</h2>
        <div class="pr-5">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis voluptates maiores consectetur, sunt nisi? Commodi.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam dolore magni laudantium?</p>
        </div>
        <a href="about-us.php" class="btn btn-secondary">Know More</a>
      </div>
      <div class="col-lg-6" style="background:url(./assets/img/background.png)"></div>
    </div>
  </div>
</section>
<style>
  .course-image {
    width: 100%;
    height: 170px !important;
    object-fit: cover;
    object-position: center;
  }
</style>   



<!-- Achievements -->
<section class="py-5 text-white" style="background:#3923a7">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pr-5">
          <h2>Achievements</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, commodi laboriosam. Ullam aliquam dicta officiis accusamus.</p>
          <img src="./assets/img/class1.jpg" alt="" class="img-fluid rounded">
        </div>
        <div class="col-lg-6 my-auto">
          <div class="row">
            <div class="col-lg-6 text-center py-3">
              <h1 class="display-3 font-weight-bold">90%</h1>
              <h6 class="font-weight-bold">Success Rate</h6>
            </div>
            <div class="col-lg-6 text-center py-3">
              <h1 class="display-3 font-weight-bold">500+</h1>
              <h6 class="font-weight-bold">Passed Out</h6>
            </div>
            <div class="col-lg-6 text-center py-3">
              <h1 class="display-3 font-weight-bold">20+</h1>
              <h6 class="font-weight-bold">Teachers</h6>
            </div>
            <div class="col-lg-6 text-center py-3">
              <h1 class="display-3 font-weight-bold">50+</h1>
              <h6 class="font-weight-bold">Courses</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- something else... -->

  <section class="py-5">
    <div class="container">
      <h2 class="font-weight-bold">What People Says</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-6">
          <div class="border rounded">
            <div class="p-3 text-center">
                  <span class="fa-3x" style="opacity: 0.2;">❝
              </span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus minus magni pariatur. Aut odio possimus iure cum ipsam ex nesciunt praesentium sint et qui accusantium, labore fugit, debitis quas cupiditate!
            </div>
            
          </div>
          <div>
            <div class="text-center mt-n2">
          <img src="assets/img/placeholder.jpg" alt="rounded-circle border" width="100" height="100">
            <h6 class="mb.0 font-weight-bold">Name of Candidate</h6>
            <p><i>Designation</i></p>
        </div>
            </div>
        </div>
            </div>
      </section>




      
      <!-- Footer section start here............. -->
      <footer class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.</p>
            </div>
            <div class="col-lg-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Address: Lalitpur, Nepal</li>
                    <li>Phone: +01XXXXXXX</li>
                    <li>Email: hamrovidyalaya@info.com</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5>Follow Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="py-3 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                    <p class="mb-0 text-center" >&copy; <?php echo date("Y"); ?> hamrovidyalaya. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- Footer section end -->




<?php include('footer.php'); ?>
