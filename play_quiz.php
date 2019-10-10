<?php include_once('logged_header.php'); ?>
    <div class="container">
        <h1>Test Yourself!</h1>
        <BR>
        <!--opening of form -->
        <form class="form-inline" method="post" action="<?php echo base_url('user/resultdisplay');?>">
            <?php 
                if ( count($questions) ): //counter loop
            ?>
                <?php foreach($questions as $row): ?>                
                    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->correct_answer);
                    //to shuffle the radio button options 
                    shuffle($ans_array); ?>
                        <div class="form-group">
                            <!--displays quiz question with its particular database id-->
                            <p style="font-family:arial; font-size:120%;"><?=$row->question_ID?>.<?=$row->questions?><br/></p>
                            <!--for radio button option 1 in image form-->
                            <div class="col-xs-5 col-sm-4 col-md-3 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[0]); ?>" alt="test1" class="img-responsive" style="height:200px;width:400px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[0]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 2 in image form-->
                            <div class="col-xs-5 col-sm-4 col-md-3 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[1]); ?>" class="img-responsive" style="height:200px;width:400px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[1]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 3 in image form-->
                            <div class="col-xs-5 col-sm-4 col-md-3 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[2]); ?>" class="img-responsive" style="height:200px;width:400px;"/>
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[2]); ?>" />
                                    <i class="glyphicon glyphicon-ok hidden"></i>
                                </label>
                            </div>
                            <!--for radio button option 3 in image form-->
                            <div class="col-xs-5 col-sm-4 col-md-3 nopad text-center">
                                <label class="image-radio">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($ans_array[3]); ?>" class="img-responsive" style="height:200px;width:400px;" />
                                    <input type="radio" name="selected_ID<?=$row->question_ID?>"  value="<?php echo base64_encode($ans_array[3]); ?>" />
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
                <!--submits value to user controller in result_display function-->
                <input type="submit" value="Submit" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>
    <br><br>
<?php include_once('logged_footer.php'); ?>