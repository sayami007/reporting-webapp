<!DOCTYPE html>
<html>

<head>
    <title>
        Edit File
    </title>
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
                <li><a href="<?php echo base_url().'add';?>">Add</a></li>
                <li class="active"><a>Edit</a></li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="container">

            <div class="row">
                <select class="form-control" id="supervisor" class="selectpicker" name="value">
                 <?php foreach($supervisor as $sup):?>
                    <option id="value">
                        <?php echo $sup->supervisorId.') '. $sup->supervisorName ;?>
                    </option>
                 <?php endforeach;?>
                </select>
            </div>
            <br/>
            <div class="row">
                <button  id="submit" class="btn btn-success"> Edit </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete </button>
            </div>
            <br/>
        </div>
    </section>
    <section>
        <div id="view">
        </div>

        <div id="modal">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you really want to delete the supervisor ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="delete" class="btn btn-default" data-dismiss="modal">Yes</button>
                            <button type="button" id="delete" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'/assets/js/jquery.js'?>"></script> 
    <script>
    $(document).ready(function(){
        $('#submit').click(function(){
            var id =  $('#supervisor').val();
            var ids = "";
            for(count=0;count<id.length;count++){
                if($.isNumeric(id[count]))
                    ids = ids + id[count]; 
            }
            console.log(ids);
            var value = "<?php echo base_url()?>" + "edit/makeEdit?id="+ids;
            console.log(value);
            $('#view').load(value);
        });

        $('#delete').click(function(){
            var id =  $('#supervisor').val();
            var ids = "";
            for(count=0;count<id.length;count++){
                if($.isNumeric(id[count]))
                    ids = ids + id[count]; 
            }
            var value = "<?php echo base_url()?>" + "edit/deleteSupervisor?id="+ids;
            $('#view').load(value);
        });
    });


    </script>

</body>

</html>