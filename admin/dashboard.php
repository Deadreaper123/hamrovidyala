<?php
session_start();
include('config.php');

if (!isset($_SESSION['username'])) {
    header('Location: ../accountrole.php');
    exit();
}
include('header.php');
?>

<style>
/* Custom styles for info box text, number, and icons */
.info-box-text {
    font-size: 1.2rem;
}

.info-box-number {
    font-size: 2rem;
    font-weight: bold;
}

.info-box-icon {
    height: 100px;
    font-size: 3rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.row {
    justify-content: center; /* Center horizontally */
}

.info-box {
    display: flex;
    align-items: center; /* Center vertically */
    justify-content: center;
    text-align: center;
    width: 100%;
    color: #fff; /* Text color to ensure visibility */
}

.info-box.bg-info {
    background-color: #33b5e5 !important;
}

.info-box.bg-danger {
    background-color: #ff3547 !important;
}

.info-box.bg-success {
    background-color: #00c851 !important;
}
.manage {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.options-s, .options-t {
    display: flex;
    justify-content: center;
}

.manage > div {
    background-color: #f8f9fa; /* Light background for manage boxes */
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgb(0, 0, 0); /* Shadow for boxes */
}

.manage-student{
  background-color: #33b5e5 !important;
}
.manage-teacher{
  background-color: #ff3547 !important;
}
.manage-student, .manage-teacher {
  color: white;
  width: 100%;
  margin: 0 10px;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}
.add-s, .view-s, .add-t, .view-t {
  padding: 10px;
  margin: 10px;
  border-radius: 5px;
  cursor: pointer;
  background-color: #4dc0b8;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.add-s:hover, .view-s:hover, .add-t:hover, .view-t:hover {
  background-color: #2d958e;
  transform: scale(1.05);
  animation: ease-in-out;
}
a{
  color: white;
}
.no-decoration{
  text-decoration: none;
}
a:hover{
  color: white;
}
</style>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-info">
          <span class="info-box-icon elevation-1"><i class="fas fa-graduation-cap"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Students</span>
            <span class="info-box-number">300</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3 bg-danger">
          <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Teachers</span>
            <span class="info-box-number">30</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3 bg-success">
          <span class="info-box-icon elevation-1"><i class="fa-solid fa-chalkboard"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Classes</span>
            <span class="info-box-number">12</span>
          </div>
        </div>
      </div>
    </div>
    <div class="manage">
      <div class="manage-student"><h2>Manage Students</h2>
        <!-- options for view and add -->
      <div class="options-s">
        <div class="add-s">
          <a href="add_student.php" id="no-decoration">Add Student</a>
        </div>
        <div class="view-s">
          <a href="view_student.php" id="no-decoration">View Student Options</a>
        </div>

      </div>
      
      </div>
      <div class="manage-teacher"><h2>Manage Teachers</h2>
        <!-- options for view and add -->
      <div class="options-t">
        <div class="add-t">
          <a href="add_teacher.html" id="no-decoration">Add Teacher</a>
        </div>
        <div class="view-t">
          <a href="view_teacher.html" id="no-decoration">View Teacher Options</a>
        </div>
      </div>

      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
