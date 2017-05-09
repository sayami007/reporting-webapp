<!DOCTYPE html>
<html>

<head>
    <title>
        Edit File
    </title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <?php echo form_open('edit/makeEdit') ?>
                <select id="supervisor" class="selectpicker" name="value">
                 <?php foreach($supervisor as $sup):?>
                 <option><?php echo $sup->supervisorId.') '. $sup->supervisorName ;?></option>
                <?php endforeach;?>
                <input type="submit" name="submit"/>
                <?php echo  form_close();?>
                 </select>
            </div>
        </div>
    </section>

    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'/assets/js/jquery.js'?>"></script>
    <script src="<?php echo base_url().'/assets/js/edit.js'?>"></script>
</body>

</html>