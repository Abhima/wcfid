<?php include_once('logged_header.php'); ?>
  <div class="container">
      <h1>Results!</h1>
        <!--create $scre as a variable and assign value as 0-->
        <?php $score= 0; ?>
        <!--defining various arrays-->
        <?php $array1= array(); ?>
        <?php $array2= array(); ?>
        <?php $array3= array(); ?>
        <?php $array4= array(); ?>
        <?php $array5= array(); ?>
        <?php $array6= array(); ?>
        <?php $array7= array(); ?>
        <!--<?php $array8= array(); ?>-->

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
                    //array_push($array8, $res->correct_answer); 
          } ?>

          <?php for ($x=0; $x <6; $x++) { ?>
              <form class="form-inline" method="post" action="<?php echo base_url('user/addscore');?>">
                  <div class="form-group">
                      <!--displays quiz question with its particular database id-->
                      <div style="width:200px;"><?=$array3[$x]?>.<?=$array4[$x]?></div>
                    <?php if ($array1[$x]!=base64_encode($array2[$x])) { ?>
                          <!--shows danger alert box along with choosen image when the answer is incorrect-->
                          <div class="col-xs-3 alert alert-danger" style="height:250px;width:200px;"><strong> Oops!</strong> Wrong Answer.
                              <img src="data:image/jpeg;base64,<?php echo $array1[$x]; ?>" alt="This is a wrong answer" class="img-responsive" style="height:150;width:150px;" >
                          </div>
                          <!--shows correct answer in alert box along with correct answer image when the answer is incorrect-->
                          <div class="col-xs-3 alert alert-info" style="height:250px;width:200px;"><strong> No problem!</strong> This is the right answer.
                              <img src="data:image/jpeg;base64,<?php echo base64_encode($array2[$x]); ?>" alt="This is a correct answer" calt="This is a wrong answer" lass="img-responsive" style="height:150px;width:150px;" >
                          </div>
                          <?php $score = $score + 0; ?>
                    <?php } else { ?>
                          <!--shows success alert box along with correct answer image when the answer is correct-->
                          <div class="alert alert-success" style="height:250px;width:200px;"><strong> Well done!</strong> You answered it right.
                              <img src="data:image/jpeg;base64,<?php echo $array1[$x]; ?>" alt="This is a right answer" class="img-responsive" style="height:150px;width:150px;" >
                          </div>
                          <?php $score = $score + 1; ?>
                    </div>
          <?php 
                    } 
          } ?>
                <h1>Your Score: <?=$score?>/6</h1>
                <input type="hidden" name="score" value="<?=$score?>" />
                <input type="hidden" name="userid" value="<?php echo $this->session->userdata('email') ?>"/>
                <!--<div style="width:450px;" class="form-group">
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Play Again', 'class'=>'btn btn-primary btn-lg']); ?>
                </div>-->     
                <div class="btn-group">
                    <button type="submit" name="action" value="submit" class="btn btn-primary btn-lg"> Play Again </button>
                    <button type="submit" name="action" value="saveScore" class="btn btn-default btn-lg"> Save Score </button>
                </div>
              </form>
  </div>
  <br><br>
<?php include_once('logged_footer.php'); ?>