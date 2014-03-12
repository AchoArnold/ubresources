<!DOCTYPE html>
<html>
  <head>
    <title>UBresources</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../stylesheet/vendor/normalize.min.css" rel="stylesheet" media="screen">
    <link href="../stylesheet/vendor/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../stylesheet/vendor/rondo_fonts.min.css" rel="stylesheet" media="screen">
    <link href="../stylesheet/ui_style.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="./javascript/vendor/html5shiv.min.js"></script>
    <script src="./javascript/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
      <nav class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">UB Resources</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div class="col-md-12">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="I want to search this site for">
              </div>
              <button type="submit" class="btn  btn-info"><span class="glyphicon glyphicon-search"></span> </button>
            </form>
            <div>
              <ul class="nav navbar-nav navbar-right" role="social">
                <li><a href="#"><span aria-hidden="true" class="icon-facebook"></span></a></li>
                <li><a href="#"><span aria-hidden="true" class="icon-twitter"></span></a></li>
              </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </div>
        </nav>
      </header>
      <!-- Docs page layout -->
      <section class="bs-header" id="content">
        <div class="container">
          <h1>Support</h1>
          <p>Our goal is to provide friendly and responsive support. Please submit your request below and we will get back to you as soon as possible!</p>
        </div>
      </section>
      <section class="container">
        <section class="row">
          <div class="col-md-3">
             <div class="list-group side-nav">
            <a href="../gist/" class="list-group-item">Gist</a>
            <a href="../time-tables/" class="list-group-item">Time Tables</a>
            <a href="../past-questions/" class="list-group-item">Past Questions</a>
            <a href="../gpa-calc/" class="list-group-item">GPA Calculator</a>
            <a href="../course-outline/" class="list-group-item">Course Outline</a>
            <a href="../links" class="list-group-item">Useful Links</a>
            <a href="../contribute" class="list-group-item">Contribute</a>
            <a href="./" class="list-group-item active"><span class="badge"><span class="glyphicon glyphicon-hand-right"></span></span>Support</a>
          </div>
          </div>
          <div class="main-content">
            <div class="col-md-9">
              <div class="alert alert-danger">
                <?php
                if(isset($_POST['Email_Address'])) {
                
                include 'freecontactformsettings.php';
                
                function died($error) {
                echo "Sorry, but there were errors found with the form you submitted. ";
                echo "These errors appear below.<br /><p style=\"color:red;\"><br />";
                echo  $error. "</p>";
                echo "<br />";
                echo "<a class=\"btn btn-danger\" href=\"../support/index.html\">Go Back and fix these errors</a>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        echo "</section>";
      echo "</section>";
      echo " </body>";
      die();
      }
      
      if(!isset($_POST['Full_Name']) ||
      !isset($_POST['Email_Address']) ||
      !isset($_POST['Telephone_Number']) ||
      !isset($_POST['Your_Message'])
      ) {
      died('Sorry, there appears to be a problem with your form submission.');
      }
      
      $full_name = $_POST['Full_Name']; // required
      $email_from = $_POST['Email_Address']; // required
      $telephone = $_POST['Telephone_Number']; // not required
      $comments = $_POST['Your_Message']; // required
      $error_message = "";
      
      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
      if(preg_match($email_exp,$email_from)==0) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
      }
      if(strlen($full_name) < 2) {
      $error_message .= 'Your Name does not appear to be correct.<br />';
      }
      if(strlen($comments) < 2) {
      $error_message .= 'The Message you entered do not appear to be valid.<br />';
      }
    
      
      if(strlen($error_message) > 0) {
      died($error_message);
      }
      $email_message = "Form details below.\r\n";
      
      function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:");
      return str_replace($bad,"",$string);
      }
      
      $email_message .= "Full Name: ".clean_string($full_name)."\r\n";
      $email_message .= "Email: ".clean_string($email_from)."\r\n";
      $email_message .= "Telephone: ".clean_string($telephone)."\r\n";
      $email_message .= "Message: ".clean_string($comments)."\r\n";
      
      $headers = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);
      header("Location: $thankyou");
      ?>
      <script>  window.location.replace('<?php echo $thankyou;?>')</script>
      <?php
      }
      die();
      ?>
    </html>