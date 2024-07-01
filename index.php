
<?php include('header.php'); 

?>



<div class="py-5 shadow" style="background:linear-gradient(-45deg, #3923a7 50%, transparent 50%)">
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3 font-weight-bold">Admission Open for 2023-2024</h1>
                <h3>Admission is now open for the academic year 2023-2024. Join us as we embark on a journey of learning and growth together!
                </h3>
                <a href="tel:9818606623" class="btn btn-lg btn-primary">Call Us</a>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg">
                    <div class="card-body py-5">
                        <h3>Inquiry Form</h3>
                        <form action="https://formspree.io/f/xgvweore" method="post">
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
                            <div class="md-form">
                                <input type="text" id="class" class="form-control" name="class">
                                <label for="class">Class</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <textarea name="message" id="message" class="form-control md-textarea" rows="3" name="message"></textarea>
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
                    <p>Welcome to "Hamro Vidyalaya", a project based on the School Management System (SMS). In today's education system, the quality of education plays a crucial role in the country's development. Many educational organizations are striving to improve their systems, and effective management of school resources using current technology is a key aspect of this improvement.
                        Our project aims to facilitate continuous communication between the principal, teachers, parents, and students. To achieve this, we have developed a website that caters to the needs of all users. For students, the website allows them to view their grades, communicate with the principal and teachers for complaints, recommendations, or absence permissions, and stay updated with school news and posts from other users.
                        </p>
                    <p>For administrators and principals, the system provides full control, enabling them to add new parents, teachers, and students along with their respective subjects. Teachers can input and edit grades for their subjects and have direct communication with students and parents. Parents have access to their children's grades without the ability to edit them and can directly communicate with teachers and the principal. </p>
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
                <p>"Our system empowers administrators with full control to manage parent, teacher, and student profiles and their subjects. Teachers can efficiently input and edit grades, fostering direct communication with students and parents. Parents enjoy transparent access to their children's grades and direct communication channels with teachers and principals."</p>
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


<!-- Footer -->
  <footer class="py-5" style="background:url(./assets/img/background.png) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#000000bb">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4">
                  <h5>Useful Links</h5>

                    <ul class="fa-ul ml">
                      <li><a href="about-us.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
                      <li><a href="index.php" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
                      <li><a href="mailto:info@hamrovidyalaya.com" class="text-light"><i class="fa-li fa fa-angle-right"></i>Contact Us</a></li>
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
                      <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                      </svg> Address: Lalitpur, Nepal</p>
                      <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                      </svg>  Phone: +01XXXXXXX</p>
                        <a href="mailto:info@hamrovidyalaya.com" class="text-light">
                            <i class="fa fa-envelope"></i> Email Us</a>
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
>>>>>>> e620b4c8eb4bef7f80c818c5adfb90b13e5e49a1
