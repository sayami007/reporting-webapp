<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">G1K Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
                <li><a href="<?php echo base_url().'edit';?>">Edit</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container">
            <h1>User List</h1>
            <table class="table table-striped" border="1">
                <tr>
                    <th>
                        Supervisor Id
                    </th>
                    <th>
                        Supervisor Name
                    </th>

                    <th>
                        Supervisor Phonenumber
                    </th>

                    <th>
                        District
                    </th>

                    <th>
                        Username
                    </th>
                </tr>
                <?php foreach($value as $val):?>
                <tr>
                    <td>
                        <?php echo $val->supervisorId;?>
                    </td>
                       <td>
                        <?php echo $val->supervisorName;?>
                    </td>
                    <td>
                        <?php echo $val->supervisorPhone;?>
                    </td>
                    <td>
                        <?php echo $val->districtName;?>
                    </td>
                    <td>
                        <?php echo $val->usernameText;?>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </section>

</body>

</html>