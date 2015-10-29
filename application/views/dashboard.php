<html>
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
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style>
			.nav-wrapper {
				background-color: black;
			}
			.side-nav {
				color: #000;
			}
​
			header, main, footer {
		    padding-left: 240px;
		  }
​
		  @media only screen and (max-width : 992px) {
		    header, main, footer {
		      padding-left: 0;
		    }
		  }
​
			.thumbs {
				vertical-align: 50px;
				position: relative;
			}
		iframe {
			height: 100%;
			width: 100%;
		}
		.clicked {
			color: orange;
		}
		</style>
		<script>
		$('.button-collapse').sideNav({
				menuWidth: 200, // Default is 240
				edge: 'left', // Choose the horizontal origin
				closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
			}
		);
		$(function() {
		$(".thumbs").click(function(){
			$(this).toggleClass('clicked');
		});
	});

		</script>
</head>
<body>

	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="/sessions/dashboard">Science</a></li>
	  <li class="divider"></li>
	  <li><a href="/sessions/dashboard">Math</a></li>
	  <li class="divider"></li>
	  <li><a href="/sessions/dashboard">Art</a></li>
	  <li class="divider"></li>
	  <li><a href="/sessions/dashboard">History</a></li>
	  <li class="divider"></li>
	  <li><a href="/sessions/dashboard">College</a></li>
	  <li class="divider"></li>
	</ul>
  <nav>
    <div class="nav-wrapper">
      <a href="/sessions/dashboard" class="brand-logo center">Comperio</a>
      <ul class="left hide-on-med-and-down">
      	<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Your Topics<i class="material-icons right">arrow_drop_down</i></a></li>
      	<li><a href="#"><i class="material-icons thumbs">thumb_down</i></a></li>
        <li><div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      	<li><a href="#"><i class="material-icons thumbs">thumb_up</i></a></li>
        <li><a href="/sessions/logout">Log Out</a></li>
      </ul>
    </div>
  </nav>
  <iframe src="<?= $links['link']?>">
  <p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>