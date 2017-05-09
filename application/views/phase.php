<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
 
</head>



<body>
   <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">G1K Dashboard</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url().'admin';?>">Home</a></li>
                <li class="active"><a>Phase</a></li>
                <li><a href="">Events</a></li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="container">
            <ul class="collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header">First Phase</div>
                    <div class="collapsible-body">
                        <table class="table table-striped" border="1">  
                            <tr>
                                <td>Question 1</td>
                                <td>Question 2</td>
                                <td>Question 3</td>
                                <td>Question 4</td>
                            </tr>
                            <tr>
                                <td>Answer 1</td>
                                <td>Answer 2</td>
                                <td>Answer 3</td>
                                <td>Answer 4</td>
                            </tr>

                        </table>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header">Second Phase</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header">Third Phase</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header">Fourth Phase</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">

    </script>
    <script src="<?php echo base_url().'assets/js/materialize.js';?>">

    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

</body>

</html>