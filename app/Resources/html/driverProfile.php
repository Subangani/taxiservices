<!DOCTYPE html>
<html lang="en">
<head>
    <link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
    <link href="Styles.css" type="text/css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Driver Profile</title>
    <style>
        body
        {
            background-image: url("banner.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
            opacity: 0.5;
        }
        h1
        {
            font-size:50px;
            color: #fffffd;
            margin:2% 5% 2% 5%;
            text-shadow: 2px 2px black;
            background-color:black;
            text-align: center;
            opacity:0.85;
        }
        h2
        {
            color: #b51c34;
            font-size:30px;
            text-shadow: 1px 1px black;
            right: 10%;
            
        }
        h3
        {
            color:#B5B5B3;
            font-size:20px;
            margin:1% 1% 1% 1%;
            text-shadow: 1px 1px black;
            text-align:center;
        }
        h4
        {
            color: white;
            font-size:15px;
            margin:0% 0% 0% 0%;
        }
        legend
        {
            margin:0% 0% 0% 10%;
        }
        div.footer
        {
            opacity:0.5;
            background-color:black;
            position:absolute;
            bottom:0%;
            right:2%;
            margin: 0px 0px 0px 0px;
        }
        </style>

</head>
<body>
<div>
    <?php
    //include 'connection.php';
    //$USER=my_sql_(mysql_query("SELECT * FROM user WHERE UserId = '$_POST[UID]'"));
    echo "<h2 > You are logged in as USERNAME</h2>";
    ?>
</div>


<div class="footer" style="float:bottom;">
    <h4>A.</h4>
</div>
</body>
</html>