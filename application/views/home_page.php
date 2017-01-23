<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
	.text-muted{
		text-align: justify;
    		text-justify: inter-word;
	}
  </style>
  <title><?php echo $title; ?></title>
  <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url() ?>/assets/css/agency.css" rel="stylesheet">
</head>
<body id="page-top" class="index">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top" style="padding: 0;
        background: url(<?php echo base_url() ?>/img/logo.png) no-repeat !important;padding: 0;margin-left: 0;width: 123px;height: 99px;"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right" style="margin-right: -15px;
        margin-top: 20px;font-size: 19px;">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#about" style="color:orange;text-shadow:2px 2px #4f9fd8 ">About</a>
          </li>
          <li>
            <a id="myBtn" href='#' style="color:orange;text-shadow:2px 2px #4f9fd8;">Get Started</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class="intro-text" style="padding-top: 459px;">
      <div class="intro-heading"> Welcome To Soft Skills Development!</div>
    </div>
  </header>
  <style>
  .section-heading{
    color:#4f9fd8;
  }
  .service-heading{
    color:#4f9fd8;
  }
  </style>
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading" style='color:#4f9fd8'>Why Take this Quiz?</h2>
        </div>
      </div>
      <br></br>
      <div class="row text-center">
        <div class="col-md-4">
          <img src = "<?php echo base_url() ?>/img/stress_handling.jpg" class='img-circle' width=200 height=160>
          <h4 class="service-heading">Stress Handling </h4>
          <p class="text-muted">It is important to tackle the causes of stress in the workplace as stress at work can lead to problems for the individual, working relationships and the overall working environment.
 </p>
        </div>
        <div class="col-md-4">
          <img src = "<?php echo base_url() ?>/img/responsiveness.png" class='img-circle ' width=200 height=160>
          <h4 class="service-heading">Responsiveness</h4>
          <p class="text-muted">A lack of responsiveness is a common underlying problem that businesses struggle with. If you know the person, and the inquiry is reasonable, you should respond. Responsiveness is especially important amongst those within your company.
</p>
        </div>
        <div class="col-md-4">
          <img src = "<?php echo base_url() ?>/img/communication.png" class='img-circle ' width=200 height=160>
          <h4 class="service-heading">Communication</h4>
          <p class="text-muted">Communication through body language and presentation are crucial for successful work environments and client meetings. Mastering communication skills will lead to a more confident and effective employee.</p>
        </div><br><br>
        <div class="col-md-4 col-md-offset-2">
          <img src = "<?php echo base_url() ?>/img/grooming.gif" class='img-circle ' width=200 height=160>
          <h4 class="service-heading">Grooming</h4>
          <p class="text-muted">To be able to function and fit in in today’s society, you must make sure your personal grooming is up to standard. First impressions being positive are crucial for productive meetings and tasks with clients and first impressions are often made based on appearances. 

</p>
        </div>
        <div class="col-md-4">
          <img src = "<?php echo base_url() ?>/img/delegation.jpg" class='img-circle ' width=200 height=160>
          <h4 class="service-heading">Delegation</h4>
          <p class="text-muted">Delegation is important because employees can focus their work on what they are best at, thus maximizing employee potential on projects tasks. This ensures that employees gain new knowledge, which can be utilized in the future.
</p>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Get Started!</h2>  
          <button href="#" id="myBtn2" class="btn btn-xl" style= "margin-top: 30px;"> Take the Quiz </button>         
        </div>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">About</h2>
        </div>
      </div>     
      <div class="col-lg-8 col-lg-offset-2 " style="margin-left: 7%;width: 86%;">
        <p class="large text-muted" style="text-align: justify;">The Soft Skills Development primarily aims at assessing and identifying the soft skill needs of IT employees required to make presentations, interact with international clients, and have business acumen along with their technical skills. The Test proposes a series of questions that helps in identifying an employee’s needed area of improvement. The questions will be in multiple choice form, and the user shall select the option that they think is best. Once the quiz is completed, the results will indicate which soft skills area the employee needs improvement on. Furthermore, training videos will be provided. This project was managed and developed through collaboration of students from Drexel University, Philadelphia, Pennsylvania, USA and Amity University Uttar Pradesh, India.</p>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class='col-md-3'><input id="baseurl" type="hidden" value="<?php echo base_url() ?>" /></div>
        <div class="col-md-6">
          <span class="copyright">Copyright &copy; Verve Systems</span>
        </div>
        <div class='col-md-3'></div>
      </div>
    </div>
  </footer>
  <script src="<?php echo base_url() ?>/assets/js/jQuery3.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/agency.js"></script>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class='m_home'><span class="glyphicon glyphicon-lock"></span> Get Started!</h4>
          <h4 class='m_new'><span class="glyphicon glyphicon-lock"></span> Register for the Quiz!</h4>
        </div>
        <div class="modal-body m_home ">
          <?php echo form_open('home_controller/validate',array('id'=>'submitUser')); ?>
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Email Address</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter email address" required>
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password"  class="form-control" id="pass" name="pass" placeholder="Enter password" />
            </div>
            <button type="submit" class="btn btn-default btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Login</button>
          <?php echo form_close(); ?>
        </div>
        <div class="modal-body m_new">
          <form id="add_new_user" method="post" autocomplete="off">
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Email Address</label><a href='#' class='btn btn-link' data-toggle="tooltip" title="Please enter a valid email address in order to continue(example@domain.com)" id='help'>(?)</a>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your company email address(required)" required />
              <b><p class='text-success' id="check_text"></p></b>
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label><a href='#' class='btn btn-link' data-toggle="tooltip" title="Password must contain atleast 8 characters">(?)</a>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password(minimum 6 characters)" required minlength=6>
              <b><span id="result"></span></b>
            </div>
            <!--<div class="form-group">
              <label for="cpassword"><span class="glyphicon glyphicon-eye-open"></span>  Confirm Password</label>
              <input type="password" class="form-control" placeholder= "Re-Enter Password" id="cpassword" name="cpassword" required minlength=6>
              <b><span id="result_match"></span></b>
            </div> -->
            <button type="submit" id="begin" class="btn btn-default btn-info btn-block" disabled><span class="glyphicon glyphicon-ok"></span> BEGIN</button>
          <?php echo form_close(); ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p class="m_home" id="new_user">New to the application? <a  href="#">Proceed here</a></p>
          <p><a class="m_new" id="go_back"  href="#">Go back</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
