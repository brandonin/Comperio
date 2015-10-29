<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DojoSquad : Welcome</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
    <!-- Materalize Icon Font Set -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript">

$(window).load(function() {
  $("#background").fullBg();
});
            // $('#maincontent').runJqueryPlugin();
    </script>
​<style type="text/css">
.fullBg {
  position: fixed;
  top: 0;
  left: 0;
  overflow: hidden;

}
#maincontent {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 50;
  width:100%;
  height: auto;
}
#background{
  opacity: 1;
  box-shadow: #888888;
}
form {
  margin-top: 130px;
  margin-left: 270px;
  width: 300px;

}
nav{
  background-color: black;
}
</style>
  </head>
  <body>
<img src="<?php echo base_url("user_guide/_images/login_cover.jpg"); ?>" alt="" id="background" />
 <div id="maincontent">
  <nav class="nav-wrapper">
    <ul class="center">
      <li><h4 class="brand-logo center">Comperio</h4></li>
    </ul>
    <ul class="right">
      <li class="margin_right"><a href="/" class="right hide-on-med-and-down waves-effect waves-light btn-large">Sign Up</a></li>
    </ul>
    </nav>
    <div class="container">
​    <?php 
    if($this->session->flashdata("login_errors"))
    {
      echo ($this->session->flashdata("login_errors"));
    }  ?>
        <div class="row">
          <div class="col s6">
            <div class="row">
              <form action="/mains/login_user" method="post">
                <div class="row">
                  <div class="input-field">
                    <i class="material-icons prefix">person_pin</i>
                    <input id="input_text" type="email" name="email" length="20">
                    <label for="input_text">Email Address:</label>
                  </div>
                </div> <!-- End of full name row -->
​
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="input_text" type="password" name="password" length="20">
                  <label for="input_text">Password:</label>
                </div>
              </div> <!-- End of full name row -->
            </div>
            <div class="row col offset-s10 col s6">
              <button class="btn waves-effect waves-light" type="submit" name="action">Login
                <i class="material-icons right">send</i>
              </button>
            </div> <!-- End of register button row -->
            </form>
          </div>
        </div>
      </div> <!-- End of form row -->
​
    </div> <!-- End of container DIV -->
​
  </body>
</html>