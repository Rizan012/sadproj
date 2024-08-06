<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userunpaid Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
        *{
            font-family: Poppins;
        }
        body{
            margin: 0;
            padding: 10px;
            background-color: rgb(243, 243, 243);
	        background-image:url("r2.png");    
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%; 
        }
        

        .main{
            background-color: white;
            display: grid;
            grid-template-columns: 1000px 1fr;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);

        }

        .img_logo1{
            width: 900px;
            object-fit: center;

        }

        .div_write{
            color: rgb(83, 83, 83);
        }

        .welcome{
            margin-top: 100px;
            font-size: 54px;
            font-weight: bold;
        }

        .para{
            font-size: 28px;
        }
        .sec{
            color:rgb(1,98,53);
            margin-top: 60px;
        }
        .epay{
            margin-bottom: 30px;
        }
        .epaylink{
            color: orangered;
        }
    </style>
</head>
<body >
    <?php
        include_once('nav.php');
    ?>

    <div class="main">
        <div class="div_logo">
            <img src="logo.png" class="img_logo1">
        </div>

        <div class="div_write">
            <h1 class="welcome">
                Welcome User_name,
            </h1>
            <p class="para">
                You have yet to pay your fees. Click on the following link for your payment. Thank you!!
            </p>

            <p class="epay">
                Payment via E-pay : <a href="" class="epaylink">E-pay link</a>
            </p>

            <a href="https://sagarmatha.edu.np" class="sec">To visit our website</a>
            
        </div>

    </div>

    
</body>
</html>