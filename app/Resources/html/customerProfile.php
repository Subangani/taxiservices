<!DOCTYPE html>
<html lang="en">
<head>
    <link href="StyleBootStrap.css" type="text/css" rel="stylesheet">
    <link href="Styles.css" type="text/css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Customer Profile</title>
    <style>
        body
        {
            background-image: url("banner.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100%;
            opacity: 1.0;
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
            color: #b55820;
            font-size:25px;
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

        form {
            position: absolute;
            right: 80%;
            font-size: 18px;
            color: #b5060b;
            opacity: 1.0;

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
<br>
<form id="ServiceRequest" action="customerRequest.php" method="post">
    Start Location :<br><input type="text" value="" ><br><br>
    End Location :<br><input type="text" value=""><br><br>
    Phone : <br> <input type= "tel" value=""><br><br>
    maximum Payment :<br><input type="number" value=""><br><br>

    <button id="sub">Submit</button>
</form>

<div class="footer" style="float:bottom;">
    <h4>A.</h4>
</div>
</body>
</html>