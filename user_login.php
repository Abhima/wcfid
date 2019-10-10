<?php include('home_header.php'); ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
       <!-- Metis Menu Plugin JavaScript -->

    </head>
    <body>
        <div align="center" id="container" class="wrapper">
          <br /><br /><br />  
            <?php echo form_open('login/verifylogin', ['class'=>'form-horizontal']); ?>
              <div class="form-signin">
                  <h1 class="form-signin-heading"> </h1>
                  <div class="form-group">
                      <img src="<?php echo base_url('application/assets/images/cover.jpg'); ?>" class="img-responsive" alt="Representation of WCFID" style="width:18%; height:15%"/>
                      <img src="<?php echo base_url('application/assets/images/logo.png'); ?>" class="img-responsive" alt="WCFID logo" style="width:10%; height:15%"/>
                  </div>
                  <?php if ($error = $this->session->flashdata('error')): ?>
                    <div style="width:450px;" class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                  <?php endif; ?>
                  <div style="width:450px;" class="form-group">
                      <label style="margin-top:-1.5%; width:150px;" for="email" class="control-label col-sm-2">
                        <span class="glyphicon glyphicon-user"></span> Email
                      </label>
                      <?php echo form_input(['name'=>'email', 'class'=>'form-control', 'placeholder'=>'Email', 'value'=>set_value('email'),'required autofocus']); ?>
                  </div>
                  <div>
                    <?php echo form_error('email'); ?>
                  </div>
                  <div style="width:450px;" class="form-group">
                      <label style="margin-top:-1.5%; width:150px;" for="password" class="control-label col-sm-2">
                        <span class="glyphicon glyphicon-lock"></span> Password
                      </label>
                      <?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'required']); ?>
                  </div>
                  <div>
                    <?php echo form_error('password'); ?>
                  </div>  
                  <div class="form-group">
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-primary btn-lg']); ?>
                  </div>
              </div>
            </form>
        </div>
<?php include('home_footer.php'); ?>