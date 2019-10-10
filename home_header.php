<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Home</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			  	<div class="container-fluid">
				    <div class="navbar-header">
				      	<a class="navbar-brand" href="<?php echo base_url('home');?>">WCFID</a>
				    </div>
				    <ul class="nav navbar-nav">
				    	<!--<li><a href="<?php echo base_url('home');?>">ABOUT US</a></li>-->
				    	<li><a href="<?php echo base_url('home/magazines');?>">LAWS AND RESPONSIBILITY</a></li>
				    	<!--<li><a href="<?php echo base_url('login/index');?>">ABA TRAINING</a></li>-->
					    <li class="dropdown">
				    		<a class="dropdown-toggle" data-toggle="dropdown" href="#">LEARN HERE
				    			<span class="caret"></span>
				    		</a>
				    		<ul class="dropdown-menu">
				    			<li><a href="<?= base_url('user/dashboard') ?>">TAKE QUIZ</a></li>
	          					<li><a href="<?= base_url('user/displaylevel') ?>">ABA TRAINING</a></li>
	          				</ul>
				    	</li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
	    				<li><a href="<?php echo base_url('home/adduser');?>"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
	    				<li><a href="<?php echo base_url('login/index');?>"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
	    			</ul>
			 	</div>
			</nav>