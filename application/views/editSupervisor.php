<!DOCTYPE html>
<html>

<head>
    <title>Editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    <td> <input type="number" class="form-control" name="supervisorPhone" placeholder="supervisorPhone" /></td>
                </tr>
                <tr>
                    <td>User ID Name</td>
                    <td>
                        <?php echo $va->usernameText;?>
                    </td>
                    <td> <input type="text" class="form-control" name="usernameText" placeholder="usernameText" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <?php echo $va->passwordText;?>
                    </td>
                    <td> <input type="text" class="form-control" name="passwordText" placeholder="passwordText" /></td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>
                        <?php echo $va->districtId;?>
                    </td>
                    <td> <input type="number" class="form-control" name="districtId" placeholder="District" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="Submit" value="Update"/></td>
                    <td><input type="reset" class="btn btn-danger" name="Reset"/></td>
                </tr>
                <?php endforeach;?>
            </table>
            <?php echo form_close();?>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>