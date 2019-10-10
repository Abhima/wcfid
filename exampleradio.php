//view
<!DOCTYPE html>
   <html>
     <head>   
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
       <script>
          $(document).ready(function(){
            $(":radio").click(function(){
               $('#region').val('Choose region');
               $('#school').val('Choose region');
               $('#teacher').val('Choose school');
               $('#class').val('Choose class');
               $('#class_divisions').val('Choose division');
            });
          });

          function showHide(self, show){

             $(".all_teachers_show, .toggle, .school,  .teacher_school, .teacher, .class, .teacher_class").hide();
    
             if (show)
                 $('.toggle').show();
             else
                 $('.toggle').hide();
             $(":radio").prop('checked',false);
             $(self).prop('checked',true);
          }
         
          function show(yes, no){
             if (no)
                 $('.school').show();
             else
                 $('.school').hide();
             $("region").prop('checked',false);
             $(yes).prop('checked',true);
          }
         
          function school_show(yes, no){
     
           if(document.getElementById("radio1").checked===true){
              document.getElementById('class_label').innerHTML = 'Class:*';
             if (no)
                   $('.teacher').show();
               else
                   $('.teacher').hide();
               $("school").prop('checked',false);
               $(yes).prop('checked',true);
          }
          
           if(document.getElementById("radio2").checked===true){
               document.getElementById('class_label').innerHTML = 'Class teacher:*';
             if (no)
                 $('.class').show();
             else
                 $('.class').hide();
             $("school").prop('checked',false);
             $(yes).prop('checked',true);

            }
          }
        
          function class_show(yes, no){
         
           if (no)
                 $('.class').show();
             else
                 $('.class').hide();
             $("teacher").prop('checked',false);
             $(yes).prop('checked',true);
          }
         
          function teachers_show(yes, no){
           $(".toggle, .all_teachers_show,  .school,  .teacher_school, .teacher, .class, .teacher_class").hide();
             if (no)
                 $('.all_teachers_show').show();
             else
                 $('.all_teachers_show').hide();
             $(":radio").prop('checked',false);
             $(yes).prop('checked',true);
          }    
     </script>   
     <script>
           $(document).ready(function() {
               $('#region').change(function() {
                   var url = "<?= base_url() ?>index.php/home/get_schools";
                   var postdata = {region: $('#region').val()};
                   $.post(url, postdata, function(result) {
                       var $school_sel = $('#school');
                       $school_sel.empty();
                       $school_sel.append("<option>Choose region</option>");
                       var schools_obj = JSON.parse(result);
                       $.each(schools_obj, function(key, val) {
                           var option = '<option  value="' + val.school_id + '">' + val.school_name + '</option>';
                           $school_sel.append(option);
                       });
                   });
               });
           });
     </script>  
     <script>
           $(document).ready(function() {
               $('#school').change(function() {
                   var url = "<?= base_url() ?>index.php/home/get_teachers";
                   var postdata = {school: $('#school').val()};
                   $.post(url, postdata, function(result) {
                       var $teacher_sel = $('#teacher');
                       $teacher_sel.empty();
                       $teacher_sel.append("<option>Choose school</option>");
                       var teachers_obj = JSON.parse(result);
                       $.each(teachers_obj, function(key, val) {
                           var option = '<option value="' + val.user_id + '">' + val.username + '</option>';
                           $teacher_sel.append(option);
                       });
                   });
               });
           });
     </script>
     
     </head>
        <?php
            echo validation_errors();
            echo "<div class='container'>";
            echo form_open();
            echo "<table border = '0' >";
            echo "<tr><td><label>  Username:* </label></td><td>";
            
            $data=array(
               'name' => 'username',
               'class' => form_error('username') ? 'error' : '',
               'value' => set_value('username')
            );

            echo form_input($data);
            echo "</td></tr>";
            echo "<tr><td><label> Password:* </label></td><td>";

            $data=array(
               'name' => 'password',
               'class' => form_error('password') ? 'error' : ''
            );
            echo form_password($data);
            echo "<tr><td><label>  Choose role:* </label> </td><td>";
            
            <input type="radio" name="role_id[]" onClick='showHide(this, true)' id="radio1"  value="1" />

            <?php echo " Student ";
                $data=array(
                'name' => 'role_id[]',
                'value' => '2',
                'id' => 'radio2',
                'onclick' => 'showHide(this, true)'
                );
                
                echo form_radio($data);
                echo " Teacher ";

                $data=array(
                  'name' => 'role_id[]',
                  'value' => "5",
                  'id' => 'radio5',
                  'onclick' => 'teachers_show(this, true)'
                );
               echo form_radio($data);
               echo " Coord. ";
               echo "</td></tr>";
               echo "<tr class='toggle' style='display:none;' ><td><label>  Region:*  </label></td><td>";
            ?>


            <select name='region'   id='region' onChange='show(this, true)'>
              <option <?php echo set_select('region'); ?>>Choose region</option>
                <?php foreach ($regions as $row) { ?>
                  <option name='region' value= "<?= $row->region ?>"><?= $row->region ?></option>
                <?php } ?>
            </select>

            <?php
              echo "</td></tr>";
              echo "<tr class='school' style='display:none;' ><td><label> School:*  
                </label></td><td>";  
            ?>
            
            <select id="school" name="school[]"  onChange='school_show(this, true)'>
              <option <?php echo set_select('school[]'); ?>>Choose region</option>
            </select>

           <?php echo "</td></tr>";
              echo "<tr class='teacher' style='display:none;' onChange='class_show(this, true)'><td><label>  Teacher:* 
              </label> </td><td>";
           
              echo '<select id="teacher"  name="teacher[]">';
            ?>
           
                <option <?php echo set_select('teacher'); ?>>Choose school</option>
              </select>  
              </td></tr>
                <?php
                  echo "<tr class='class'  style='display:none;'><td>  <label  id='class_label'> Клас:* </label> </td><td>";
                ?>
            <select name='class[]'  id='class'>
              <option <?php echo set_select('class[]'); ?>>Choose class</option>
              <?php foreach ($classes as $row) { ?>
                 <option value= "<?= $row->id ?>"><?= $row->class_id ?></option>
              <?php } ?>
            </select> 
          
            <select name='class_divisions[]'  id='class_divisions'>
              <option <?php echo set_select('class_divisions[]'); ?>>Choose division</option>
              <?php foreach ($class_divisions as $row) { ?>
                  <option value= "<?= $row->id ?>"><?= $row->division ?></option>
              <?php } ?>
            </select>   
            </td></tr>

          <?php
            echo "<tr class='all_teachers_show' style='display:none;'><td><label>  Teachers:*  </label></td><td>";
          ?>
          
          <?php foreach ($all_teachers_show as $row) { ?>
          
              <input type="checkbox" id='all_teachers_show' <?php echo set_checkbox('all_teachers_show[]'); ?> name="all_teachers_show[]"
                value="<?= $row->user_id ?>"><?= $row->username ?>
          <?php } 

          echo "</td></tr>";
          echo "</div>";
          echo "</table><br/>";
          
          $data=array(
              "name" => 'mysubmit',
              'class' => 'btn btn-success ',
              'id' => 'reg',
              'value' => 'Register'
          );
          echo form_submit($data);
        ?>
     </form>

//controller

switch($this->input->post('role_id')) {
  case 1:
     //validation-rules for fields that are related to role_id 1
    break;
  case 2:
     //validation-rules for fields that are related to role_id 2
    break;
  case 5:
     //validation-rules for fields that are related to role_id 5
    break;
  default:
     //do nothing
} 
public function register()
   {
       
       $this->form_validation->set_rules('first_name', 'First name', 'trim|required');
       $this->form_validation->set_rules('last_name', 'Last name', 'trim|required'); 
       $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[12]|is_unique[users.username]');
       $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]'); 
       $this->form_validation->set_rules('password2', 'Confirm password', 'trim|required|matches[password]');  
       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
       $this->form_validation->set_rules('location', 'Location', 'trim|required');
       $this->form_validation->set_rules('school[]', 'School', 'required');
       $this->form_validation->set_rules('class[]', 'Class', 'required');
       $this->form_validation->set_rules('role_id', 'Role', 'required');
       $this->form_validation->set_rules('class_divisions[]', 'Class division', 'required');
       $this->form_validation->set_rules('region', 'Region', 'required');
       $this->form_validation->set_rules('teacher[]', 'Teacher', 'required');
       $this->form_validation->set_rules('all_teachers_show', 'All teachers', 'required');
    
       if ($this->form_validation->run()==FALSE)
       {
           $this->signup();
       }
       else 
       {  
           if( $this->user_model->register())
           {
               $data['dynamic_view'] = 'success_reg'; 
               $this->load->view('templates/main',$data);
           }
           else
           {
               $this->load->model('user_model');   
               $data['dynamic_view'] = 'register_form'; 
               $data['regions'] = $this->user_model->regions_show();
               $data['classes'] = $this->user_model->classes_show();
               $data['school_show'] = $this->user_model->school_show();
               $data['class_divisions'] = $this->user_model->class_divisions_show();
               $data['all_teachers_show'] = $this->user_model->all_teachers_show();
               $this->load->view('templates/main',$data);
           }   
       }
   }