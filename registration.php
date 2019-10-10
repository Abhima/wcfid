<?php include('home_header.php'); ?>
    <div class="container">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
                        <h1 class="page-header">
                             Registration
                        </h1>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div style="font-size:160%" class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                 </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Please fill in your required details!</h2>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                        <?php echo form_open('home/adduser', ['class'=>'form-horizontal']); ?>
                                            <div style="font-family:arial; font-size:160%;" class="form-group" >
                                                <label>&nbsp First Name</label>
                                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required="required">                        
                                            </div>
                                            <div style="font-family:arial; font-size:160%;" class="form-group">
                                                <label>&nbsp Middle Name</label>
                                                <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                                            </div>
                                            <div style="font-family:arial; font-size:160%;" class="form-group">
                                                <label>&nbsp Last Name</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                            </div>
                                            <div style="font-family:arial; font-size:160%;" class="form-group">
                                                <label>&nbsp Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="abc@example.com" required="required">
                                                <span id="email_result"></span>
                                                <br />
                                            </div>
                                            <div style="font-family:arial; font-size:160%;" class="form-group">
                                                <label>&nbsp Password</label>
                                                <input type="password" id="here2" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <input type="submit" name="SubmitUser" id="submit" class="btn btn-lg btn-primary" value="Save User"/>
                                            <br/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('home_footer.php'); ?>