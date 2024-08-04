<?php
    require_once("entrycheck_admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Insert Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
         *{
            font-family: Poppins;
        }
        body{
            margin: 0;
            padding: 2px;
            background-image:url('r2.png');

        }

        .main{
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            padding: 10px;
            
        }

        .right{
            flex:90%;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);

        }
        .left{
            flex:10%;
            background-color: white;
            margin-right: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);

        }

        .div_register {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 10px 20px 30px 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1{
           
           margin-bottom: 40px;

           margin-left: 10px;
           font-weight: bold;
           color: #016235;
       }

        .register_bottom {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .register_bottom label {
            font-size: 16px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            margin-bottom: 10px;
            display: block;
        }

        .insert {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 30px;
        }

        .enter {
            float: right;
            padding: 20px 40px 20px 40px;
            background-color: rgb(1, 98, 53);
            border: none;
            border-radius: 20px;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            align-self: center;
            margin-top: 16px;
        }

        .enter:hover {
            background-color: rgb(1, 80, 40);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .enter:active {
            opacity: 0.7;
        }

        .tabs{
            padding:0;
            font-size:25px;
            margin-bottom:0;
        }
        .tabs_option{
            display:block;
            margin:0;
            padding:0;
            padding:12px 16px 12px 16px;

        }
        a.tabsclass {
            text-decoration: none;
            color: rgb(7, 110, 62);
            font-weight: 500;
            margin-bottom: 10px;
            font-size: 18px;
            padding:12px 16px 12px 16px;
        }
        a.tabsclass:hover{
            color: rgb(232, 232, 232);            

        }

        #tabs_selected{
            background-color: rgb(7, 110, 62) ;
        }
        #tabs_selected_t{
            color: white;
        }

    </style>
</head>
<body>
    <?php $currentpage=basename($_SERVER['REQUEST_URI']);
        include_once('nav.php');
    ?>
    <div class="main">
        <div class="left">
            <ul class="tabs">
                <li class="tabs_option" <?php if($currentpage==="admin.php"){ ?> id="tabs_selected" <?php } ?>>
                    <a href="admin.php" class="tabsclass" <?php if($currentpage==="admin.php"){ ?> id="tabs_selected_t" <?php } ?>>View ></a>
                </li>

                <li class="tabs_option" <?php if($currentpage==="insert.php"){ ?> class="tabs_selected" <?php } ?>>
                <a href="insert.php" class="tabsclass" <?php if($currentpage==="insert.php"){ ?> class="tabs_selected_t" <?php } ?>>Insert ></a>

                </li>
            </ul>
        </div>

        <div class="right">
            <div class="div_register">
                <h1>Enter the Student's Information</h1>

                <div class="register_bottom">
                    <form action="">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="insert">
                        
                        <label for="roll_number">Roll Number</label>
                        <input type="text" id="roll_number" name="roll_number" class="insert">
                        
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="insert">
                        
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="insert">
                        
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="insert">
                        
                        <input type="submit" class="enter" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
