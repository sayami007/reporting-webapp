<!DOCTYPE html>
<html>

<head>
    <title>Editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    body{
        background:#ceecff;
    }
</style>
</head>

<body>
    <section>
        <div class="container">
            <div>
                <h1>Edit Supervisor</h1>
            </div>
            <?php echo form_open('edit/editSupervisor')?>
            <table class="table table-hover">
                <tr>
                    <th></th>
                    <th> Old Record</th>
                    <th> New Record</th>
                </tr>
                <?php foreach($v as $va):?>
                 <tr>
                    <td>Supervisor Id</td>
                    <td>
                        <?php echo $va->supervisorId;?>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="supervisorId" value="<?php echo $va->supervisorId;?>" readonly/>
                        
                    </td>
                </tr>
                <tr>
                    <td>Supervisor Name</td>
                    <td>
                        <?php echo $va->supervisorName;?>
                    </td>
                    <td>
                        <input type="text" class="form-control" value="<?php echo $va->supervisorName;?>" readonly/>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <?php echo $va->supervisorPhone;?>
                    </td>
                    <td> <input type="number" id="supervisorPhone" class="form-control" maxlength="10"  name="supervisorPhone" placeholder="supervisorPhone" /></td>
                </tr>
                <tr>
                    <td>User ID Name</td>
                    <td>
                        <?php echo $va->usernameText;?>
                    </td>
                    <td> <input type="text" class="form-control" id="usernameText" name="usernameText" placeholder="usernameText" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <?php echo $va->passwordText;?>
                    </td>
                    <td> <input type="text" class="form-control" id="passwordText" name="passwordText" placeholder="passwordText" /></td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>
                        <?php echo $va->districtId;?>
                    </td>
                    <td>
                     <select class="form-control" id="districtId" name="districtId">
                <?php foreach($district as $dis):?>
                     <option value="<?php echo $dis->districtId;?>"><?php echo $dis->districtId . ') '.$dis->districtName;?></option>
                <?php endforeach;?>
        </select>
                    
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="validate" type="submit" class="btn btn-success" name="Submit" value="Update"/></td>
                    <td><input type="reset" class="btn btn-danger" name="Reset"/></td>
                </tr>
                <?php endforeach;?>
            </table>
            <?php echo form_close();?>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#validate').click(function(){
                if($('#supervisorPhone').val().length != 10){
                     alert("Phone number error.");
                     return false;
                }else{
                    if($('#usernameText').val().length <= 0){
                       alert("Username text error.");
                       return false;
                     }else{
                         if($('#passwordText').val().length < 8){
                            alert('Password Values less than 8. Please Check.');
                            return false;
                       }else{
                           return true;
                       }
                     }
                }
            })
        });    
    </script>
</body>

</html>