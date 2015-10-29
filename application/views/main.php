<html class="box-shadow">
<head>
  <title></title>
      <!-- Compiled and minified CSS -->
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


$(document).ready(function() {
  $('select').material_select();
});
$(window).load(function() {
  $("#background").fullBg();
});
            // $('#maincontent').runJqueryPlugin();
    </script>
<style>
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
form {
  margin-top: 130px;
  width: 300px;
  margin-left: 450px;
}
#background{
  opacity: 1;
  box-shadow: #888888;
}
/*.shadow {
    position: absolute;
    width: 100%;
    height: 
    100%;
    box-shadow: inset 3px 3px 10px 0 #000000;
    border-radius: 20px;
    top: 0;
    left: 0;
}*/
nav{
  background-color: black;
}
.input-field label {
     color: #000;
     }

</style>


</head>
<body>
<img src="<?php echo base_url("user_guide/_images/cover.jpg"); ?>" alt="" id="background" />
<div id="maincontent">
  <nav class="nav-wrapper">
    <ul class="center">
      <li><h4 class="brand-logo center">Comperio</h4></li>
    </ul>
    <ul class="right">
      <li class="margin_right"><a href="/mains/login_page" class="right hide-on-med-and-down waves-effect waves-light btn-large">Log In</a></li>
    </ul>
  </nav>
      <div class="row">
        <div class="col s6">
          <div class="row">
            <form action="/mains/register_user" method="post">
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">person_pin</i>
                  <input id="name" type="text" name="name" class="validate" length="30">
                  <label for="name" data-error="Name must not contain numbers.">Name:</label>
                </div>
              </div> <!-- End of full name row -->
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" name="email" length="30" class="validate">
                  <label for="email"  data-error="Email already in use." >Email Address:</label>
                </div>
              </div> <!-- End of email row -->
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">lock_outline</i>
                  <input id="password" type="password" name="password" class="validate">
                  <label for="password">Password:</label>
                </div>
              </div> <!-- End of password row -->
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input id="input_password2" type="password" name="confirm_password" class="validate">
                  <label for="input_password2">Confirm Password:</label>
                </div>
              </div> <!-- End of confirm pass row -->
              <div class="row">
                <div class="input-field">
                  <i class="material-icons prefix">perm_contact_calendar</i>
                  <input id="age" type="text" name="age">
                  <label for ="age">Age:</label>
                </div>
              </div> <!-- End of birthday row -->
              <div class="row col offset-s3">
                <button class="btn waves-effect waves-light" type="submit" name="action">register
                  <i class="material-icons right">send</i>
                </button>
              </div> <!-- End of register button row -->
            </form>
          </div>
        </div> <!-- col div -->
    </div>
</div>
<!-- </div> -->

</body>
</html>