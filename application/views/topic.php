<html>
<head>
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
	<style>
		.nav-wrapper {
			background-color: black;
		}
	</style>
​
	</head>
	<body>
		<nav class="nav-wrapper">
		    <ul class="center">
		      <li><h4 class="brand-logo center">Comperio</h4></li>
		    </ul>
		    <ul class="right">
		      <li class="margin_right"><a href="/sessions/logout" class="right hide-on-med-and-down waves-effect waves-light btn-large">Log Out</a></li>
		    </ul>
	    </nav>
​
	<div class="container">
		<div class="row">
			<div class="col s10">
				<h4>What would you like to learn today, <?= $users['name']; ?>?</h4>
			</div>
		</div> <!-- End of row DIV -->
		<div class="row">
			<div class="col s12">
					<form action="/sessions/store_interest" method="post">
						<div class="col s3">
						<?php 
						for($i=0;$i<count($interests);$i++)
						{ ?>
							<p>
						    	<input type="checkbox" class="filled-in" id="filled-in-box_<?=$i ?>" name="interest_<?=$i?>" value="<?= $interests[$i]['id']?>" />
						    	<label for="filled-in-box_<?=$i?>"><?= $interests[$i]['interest']?></label>
						    </p>
						<?php }
						?>
						</div>
						<div class="col s3">
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">French</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Art History</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Environmental Science</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Nutrition</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Geography</label>
						    </p>
						</div>
						<div class="col s3">
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">English</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Literature</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Poetry</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Statistics</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Asia</label>
						    </p>
						</div>
						<div class="col s3">
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Computer Science</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Engineering</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Games</label>
						    </p>
						    <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Universities</label>
						    </p>			
							 <p>
						      <input type="checkbox" disabled="disabled" />
						      <label for="test7">Evolution</label>
						    </p>
						</div>
						<div class="row col s3">
			                <button class="btn waves-effect waves-light" type="submit" name="action">register
				                <i class="material-icons right">send</i>
			                </button>
			            </div> <!-- End of register button row -->
					</form>
			</div>
		</div>
​
	</div> <!-- End of container DIV -->
</body>
</html>