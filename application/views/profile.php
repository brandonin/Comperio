<html>
<head>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>" />
	<title></title>
</head>
<body>
<a href="/mains/dashboard" class="col-sm-offset-9"> Home</a><a href="/mains/logout" class="col-sm-offset-1"> Log out </a>
<h4><?= $info['alias']?>'s Profile</h4>
<h4><?= $info['name']?></h4>
<h4>Email Address: <?= $info['email']?></h4>
<!-- 
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
 -->
</body>
</html>