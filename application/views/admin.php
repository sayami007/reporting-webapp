<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    body{
        background:#ceecff;
    }
</style>

<body>

<nav class="navbar navbar-default">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand">G1K Dashboard</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a>Home</a></li>
        <li><a href="<?php echo base_url().'add';?>">Add</a></li>
        <li><a href="<?php echo base_url().'edit';?>">Edit</a></li>
    </ul>
  </div>
</div>
</nav>

<section>
        <div class="container">
            <h1>List of Supervisors</h1>
            <div class="col-xs-12">
            <table class="table table-striped" border="1">
                <tr>
                    <th>
                        Supervisor Id
                    </th>
                    <th>
                        Person Name
                    </th>

                    <th>
                        Contact Number
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
        </div>
    </section>


</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(this).toggleClass("active");
			  });
		});
    </script>
</html>