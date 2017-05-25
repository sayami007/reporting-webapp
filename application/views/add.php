<!DOCTYPE html>
<html>
    <head>
        <title>Add Supervisor</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">G1K Dashboard</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url().'admin';?>">Home</a></li>
                    <li class="active"><a>Add</a></li>
                    <li><a href="<?php echo base_url().'edit';?>">Edit</a></li>
                </ul>
            </div>
        </nav>
        <section>



        <div class="container">
        <h1>Add Supervisor</h1>
        <div class="form-horizontal">
         <?php echo form_open('edit/addSupervisor')?>

        <div class="form-group">
            <label class="control-label col-xs-3" for="supervisorId">Supervisor Id:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="supervisorId" name="supervisorId" value="<?php echo $id; ?>" readonly >
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="supervisorName">Supervisor Full Name:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="supervisorName" name="supervisorName" placeholder="Full Name" >
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="supervisorPhone">Phone Number</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" id="supervisorPhone" name="supervisorPhone" maxlength="10" placeholder="98xxxxxxxx" >
            </div>
        </div>


         <div class="form-group">
            <label class="control-label col-xs-3" for="usernameText">Username:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="usernameText" name="usernameText" placeholder="Username" >
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="passwordText">Password:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="passwordText" name="passwordText" placeholder="Enter Password" >
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-xs-3" for="confirmPassword">Confirm Password:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="confirmPasswordText" name="confirmPassword" placeholder="Confirm Password" >
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="districtId">District:</label>
            <div class="col-xs-9">
        <select class="form-control" id="districtId" name="districtId">
                <?php foreach($district as $dis):?>
                     <option value="<?php echo $dis->districtId;?>"><?php echo $dis->districtId . ') '.$dis->districtName;?></option>
                <?php endforeach;?>
        </select>
        </div>
      </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
              <input type="submit" id="submit" class="btn btn-success" value="Submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
        </div>


    <?php echo form_close();?>
    </div>
</div>
        </section>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <!-- <script>
         $(document).ready(function(){
             $('#submit').click(function(){
               var passwordText = $('#passwordText').val();
               var confirmPasswordText = $('#confirmPasswordText').val();

               if($('#supervisorId').val() == null){
                alert("Supervisor Id is empty");
                 return false;
               }else{
                 if($('#supervisorName').val().length <= 0){
                   alert("Supervisor name error.");
                   return false;
                 }else{
                   if($('#supervisorPhone').val().length != 10){
                     alert("Phone number error.");
                     return false;
                   }else{
                     if($('#usernameText').val().length <= 0){
                       alert("Username text error.");
                       return false;
                     }else{
                       if(passwordText.length < 8){
                         alert('Password Values less than 8. Please Check.');
                         return false;
                       }else{
                         if(passwordText != confirmPasswordText){
                         alert('Password Values are not equal. Please Check.');
                         return false;
                       }else{
                         return true;
                       }
                     }
                   }
                 }
               }
             }
             });
          });
          </script> -->
    </body>
</html>
