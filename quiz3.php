<?php include_once('logged_header.php'); ?>
    <?php 
            $score = $this->input->post('score');
            //echo $score;
    ?>
    <div class="container">
        <!--opening of form -->
        <form class="form-inline" method="post" action="<?php echo base_url('user/resultdisplay3');?>">
            <?php 
                if ( count($questions3) ): //counter loop
            ?>
                <?php foreach($questions3 as $row): ?>                
                    <?php //$ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->correct_answer);
                        $ans_array = array(
                        array($row->choice1, $row->alttext1),
                        array($row->choice2, $row->alttext2),
                        array($row->choice3, $row->alttext3),
                        array($row->correct_answer, $row->correctalt)
                        ); 
                        //to shuffle the radio button options 
                        shuffle($ans_array); ?>
                        <div class="form-group">
                            <!--displays quiz question with its particular database id-->
                            <h1><?=$row->question_ID?>.<?=$row->questions?><br/></h1>
                            <!--for radio button option 1 in image form-->
                            <div class="col-xs-6 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[0][0]); ?>" alt="<?= $ans_array[0][1]?>" class="img-responsive" style="height:280px;width:360px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[0][0]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 2 in image form-->
                            <div class="col-xs-6 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[1][0]); ?>" alt="<?= $ans_array[1][1]?>" class="img-responsive" style="height:280px;width:360px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[1][0]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 3 in image form-->
                            <div class="col-xs-6 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[2][0]); ?>" alt="<?= $ans_array[2][1]?>" class="img-responsive" style="height:280px;width:360px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[2][0]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 3 in image form-->
                            <div class="col-xs-6 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[3][0]); ?>" alt="<?= $ans_array[3][1]?>" class="img-responsive" style="height:280px;width:360px;" />
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[3][0]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                        </div>
                <!--end of foreach statement-->
                <?php endforeach; ?>
            <!--end of if statement-->
            <?php endif; ?> 
            <br/><br/></br>
            <div class="form-group">
                <input type="hidden" name="score" value="<?=$score?>" />
                <!--submits value to user controller in result_display function-->
                <input type="submit" value="Submit" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>
    <br><br>
<?php include_once('logged_footer.php'); ?>