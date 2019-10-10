<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	   	<title>User Home</title>
	   	<meta charset="UTF-8">
	   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<style>
			body {
			  font-family: Arial, Helvetica, sans-serif;
			}
			.flip-card {
			  background-color: transparent;
			  width: 280px;
			  height: 280px;
			  border: 1px solid #f1f1f1;
			  perspective: 1000px;
			}

			.flip-card-inner {
			  position: relative;
			  width: 100%;
			  height: 100%;
			  text-align: center;
			  -webkit-transition: transform 4.0s;
			  -webkit-transform-style: preserve-3d;
			  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
			}

			.flip-card:hover .flip-card-inner {
			  -webkit-transform: rotateY(180deg);
			}

			.flip-card-front, .flip-card-back {
			  position: absolute;
			  width: 100%;
			  height: 100%;
			  -webkit-backface-visibility: hidden;
			}

			.flip-card-front {
			  background-color: #bbb;
			  color: black;
			}

			.flip-card-back {
			  background-color: #2980b9;
			  color: white;
			  -webkit-transform: rotateY(180deg);
			}
		</style>
	</head>
	<body>
   		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
		  		<div class="navbar-header">
			    	<a class="navbar-brand" href="<?php echo base_url('home'); ?>">WCFID</a>
			    </div>
			    <!--<div class="navbar-header">
			      	<a class="navbar-brand" href="<?php echo base_url('loggedhome'); ?>">
			      		<img class="img-responsive" alt="WCFID" src="application/assets/images/logo.png" alt="Chania" style="width:20%; height:100%">
			      	</a>-->
			    <ul class="nav navbar-nav">
			    	<!--<li><a href="<?php echo base_url('home'); ?>">ABOUT US</a></li>
			    	<li><a href="<?php echo base_url('home/magazines');?>">MAGAZINES</a></li>-->
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
    				<li><a href="#"><span class="userid"><?php echo $this->session->userdata('email') ?></a></li>
    				<li><a href="<?= base_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
    			</ul>
		 	</div>
		</nav>
