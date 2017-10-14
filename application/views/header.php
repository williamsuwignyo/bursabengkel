<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libraries/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libraries/mdb/css/mdb.min.css">
  <link rel="stylesheet" href="assets/libraries/mdb/css/style.css">

	<script src="assets/libraries/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/libraries/popper/popper.min.js"></script>
  <script src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>

	<title>bursabengkel.com</title>
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background: rgba(0,0,0,0.7);">
    <div class="text-center">
      <a class="navbar-brand" href="home"><font style="color:red;font-weight:900;">bursa</font>bengkel.com</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">
        <!--<li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>-->
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit" style="background:transparent;border-style:none;"><i class="fa fa-search text-white"></i></button>
      </form>
      <button type="button" class="btn bg-dark" data-toggle="modal" data-target="#loginModal" style="background:transparent;border-style:none;">Login</button>
      <a href="" class="btn btn-success">Sign Up</a>
    </div>
  </nav>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="username" class="form-control-label">Username:</label>
              <input type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
              <label for="password" class="form-control-label">Password:</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>