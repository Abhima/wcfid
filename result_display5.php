<?php include_once('logged_header.php'); ?>
<?php 
$score = $this->input->post('score');?>
  	<div class="container">
      <h1>Results!</h1>
       <?php $score; ?>
        <!--defining various arrays-->
        <?php $array1= array(); ?>
        <?php $array2= array(); ?>
        <?php $array3= array(); ?>
        <?php $array4= array(); ?>
        <?php $array5= array(); ?>
        <?php $array6= array(); ?>
        <?php $array7= array(); ?>
        <?php $array8= array(); ?>

        <!--assigning variable checks as checkans in foreach loop-->
        <?php foreach($checks as $checkans) { ?>
        <!--pushing $checkans value into array1-->
        <?php array_push($array1, $checkans); } ?>
          <!--assigning variable results as res in foreach loop-->
          <?php foreach($results as $res) { ?>
              <!--pushing $res value into various array's -->
              <?php array_push($array2, $res->correct_answer);
                    array_push($array3, $res->question_ID);
                    array_push($array4, $res->questions);
                    array_push($array5, $res->choice1);
                    array_push($array6, $res->choice2);
                    array_push($array7, $res->choice3);
                    array_push($array8, $res->correctalt); 
          } ?>

          	<?php for ($x=0; $x <1; $x++) { ?>
              	<form class="form-inline" method="post" action="<?php echo base_url('user/quiz6');?>">
						<div>
	                      	<!--displays quiz question with its particular database id-->
	                      	<div><h1 style="font-family:arial; font-size:180%;"><?=$array3[$x]?>. <?=$array4[$x]?></h1></div>
	                      	<br>
		                    <?php if ($array1[$x]!=base64_encode($array2[$x])) { ?>
		                          <!--shows danger alert box along with choosen image when the answer is incorrect-->
		                          <div class="col-xs-5 alert alert-danger" style="height:350px;width:450px;">
                                  <h2 style="font-family:arial; font-size:160%;"><strong> Oops!</strong> Wrong Answer.</h2>
		                              <img src="data:image/jpeg;base64,<?php echo $array1[$x]; ?>" alt="This is a wrong answer" class="img-responsive" style="height:250px;width:450px;" >
		                          </div>
                              <div class="col-xs-1"></div>
		                          <!--shows correct answer in alert box along with correct answer image when the answer is incorrect-->
		                          <div class="col-xs-5 alert alert-info" style="height:350px;width:450px;">
                                  <h2 style="font-family:arial; font-size:160%;"><strong> No problem!</strong> This is the right answer.</h2>
		                              <img src="data:image/jpeg;base64,<?php echo base64_encode($array2[$x]); ?>" alt="<?php echo $array8[$x]; ?> is a correct answer" class="img-responsive" style="height:250px;width:450px;" >
		                          </div>
		                          <?php $score = (int)$score + 0; ?>
		                    <?php } else { ?>
		                          <!--shows success alert box along with correct answer image when the answer is correct-->
		                          <div class="alert alert-success" style="height:350px;width:450px;">
                                  <h2 style="font-family:arial; font-size:160%;"><strong> Well done!</strong> You answered it right.</h2>
		                              <img src="data:image/jpeg;base64,<?php echo $array1[$x]; ?>" alt="<?php echo $array8[$x]; ?> is the right answer." class="img-responsive" style="height:250px;width:450px;" >
		                          </div>   
                              <?php $score = (int)$score + 1; ?> 
                    	</div>
	        <?php 
	                    } 
	        } ?>
		            <input type="hidden" name="score" value="<?=$score?>" />
                <input type="hidden" name="userid" value="<?php echo $this->session->userdata('email') ?>"/>   
		            <br><br>
		            <div class="col-md-6">
		                <button type="submit" name="action" value="submit" class="btn btn-primary btn-lg"> Next </button>
		            </div>
		      	</form>
  	</div>
  	<br><br>
<?php include_once('logged_footer.php'); ?> 