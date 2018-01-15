<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dinkes</title>
    <meta name="description" content="Website Dinkes">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <link href="css/css_profile.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php include('navbar.php');?>

 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style="width:23.5%; background-color : black; height : 100vh; z-index : -1; margin-top: -20px; position: fixed; " >
            
        </div>
    </div>
 </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $("#myBtn").click(function(){
                    $("#myModal").modal();
                });
            });
        </script>

</body>
</html>