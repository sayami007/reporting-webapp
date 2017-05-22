<!DOCTYPE html>
<html>

<head>
    <title>Editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container-fluid">
            <table class="table table-hover">
                <tr>
                    <th></th>
                    <th> Old Record</th>
                    <th> New Record</th>
                </tr>
                <?php foreach($v as $va):?>
                <tr>
                    <td>Supervisor Name</td>
                    <td>
                        <?php echo $va->supervisorName;?>
                    </td>
                    <td>
                        <?php echo $va->supervisorName;?>
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
                    <td> <input type="password" class="form-control" name="passwordText" placeholder="passwordText" /></td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>
                        <?php echo $va->districtId;?>
                    </td>
                    <td> <input type="number" class="form-control" name="passwordText" placeholder="passwordText" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">Submit</button></td>
                    <td><button class="btn btn-danger">Reset</button></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>