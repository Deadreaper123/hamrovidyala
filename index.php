<?php include('header.php'); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="index.php"><b>HAMROVIDYALAYA</b></a>
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
                <a class="nav-link" href="#">Contact Us</a>
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
                <a href="#" class="btn btn-lg btn-primary">Call to Action</a>
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

<!-- About Us -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2 class="font-weight-bold">About <br> HAMROVIDYALAYA</h2>
                <div class="pr-5">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis voluptates maiores consectetur, sunt nisi? Commodi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam dolore magni laudantium?</p>
                </div>
                <a href="about-us.php" class="btn btn-secondary">Know More</a>
            </div>
            <div class="col-lg-6" style="background:url('./assets/img/background.png') no-repeat center center/cover;"></div>
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

<!-- Our Programme section start here....... -->

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="font-weight-bold text-center mb-4">Our Programme</h2>
        <div id="programmeCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#programmeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#programmeCarousel" data-slide-to="1"></li>
                <li data-target="#programmeCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/sliding/slide1.jpg" class="d-block w-100" alt="Programme 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 1</h5>
                        <p>Description for Programme 1.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sliding/slide2.jpg" class="d-block w-100" alt="Programme 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 2</h5>
                        <p>Description for Programme 2.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sliding/slide3.jpg" class="d-block w-100" alt="Programme 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 3</h5>
                        <p>Description for Programme 3.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sliding/slide4.jpg" class="d-block w-100" alt="Programme 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 4</h5>
                        <p>Description for Programme 4.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sliding/slide5.jpg" class="d-block w-100" alt="Programme 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 5</h5>
                        <p>Description for Programme 5.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/sliding/slide6.jpg" class="d-block w-100" alt="Programme 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Programme 6</h5>
                        <p>Description for Programme 6.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#programmeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#programmeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- Our Programme section End here...... -->



<!-- Achievements -->
<section class="py-5 text-white" style="background:#3923a7">
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
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <h2 class="font-weight-bold">What People Say</h2>
        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border rounded">
                    <div class="p-3 text-center">
                        <span class="fa-3x" style="opacity: 0.2;">❝</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus minus magni pariatur. Aut odio possimus iure cum ipsam ex nesciunt praesentium sint et qui accusantium, labore fugit, debitis quas cupiditate!
                    </div>
                </div>
                <div class="text-center mt-n2">
                    <img src="assets/img/placeholder.jpg" alt="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
            <div class="col-6">
                <div class="border rounded">
                    <div class="p-3 text-center">
                        <span class="fa-3x" style="opacity: 0.2;">❝</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus minus magni pariatur. Aut odio possimus iure cum ipsam ex nesciunt praesentium sint et qui accusantium, labore fugit, debitis quas cupiditate!
                    </div>
                </div>
                <div class="text-center mt-n2">
                    <img src="assets/img/placeholder.jpg" alt="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0 font-weight-bold">Name of Candidate</h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
  <footer class="py-5" style="background:url(./assets/img/background.png) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#000000bb">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4">
                  <h5>Useful Links</h5>

                    <ul class="fa-ul ml">
                      <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
                      <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                      <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                  <h5>Social Links</h5>

                    <div>
                      <a href="" class="text-light"><i class="fab fa-facebook-f fa-2x"></i></a>
                      <a href="" class="text-light"><i class="fab fa-twitter fa-2x"></i></a>
                      <a href="" class="text-light"><i class="fab fa-instagram fa-2x"></i></a>
                      <a href="" class="text-light"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </div>
                </div>

                <div class="col-lg-2">
                  <h5>Contact </h5>
                    <div>
                      <p>Address: Lalitpur, Nepal</p>
                      <p>Phone: +01XXXXXXX</p>
                      <p>Email: info@hamrovidyalaya</p>
                        <a href="mailto:info@hamrovidyalaya.com" class="text-light">
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <section class="py-2 bg-dark text-light">
    <div class="container-fluid text-center">
        &copy; 2024 All Rights Reserved. <a href="#" class="text-light">HAMROVIDYALAYA</a>
        <br>
        Developer: Krishna & Kritish
    </div>
</section>



<?php include('footer.php'); ?>
