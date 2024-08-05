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
         * {
            font-family: Poppins;
        }
        body {
            margin: 0;
            padding: 2px;
        }
        .main2 {
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
        }
        .main {
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            padding: 10px;
        }
        .right {
            flex: 90%;
            border-radius: 10px;
        }
        .left {
            flex: 10%;
            background-color: whitesmoke;
            box-shadow: 2px 0 0 0 rgba(0, 0, 0, 0.3);
            border-radius: 0px 0px 0px 10px;
        }
        .div_register {
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 10px 20px 30px 10px;
            border-radius: 0px 0px 10px 0px;
        }
        .univ {
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            border-radius: 10px;
            margin: 0px 8px 0px 8px;
        }
        .main1 {
            background-image: url("r2.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            border-radius: 10px 10px 0px 0px;
            padding: 30px;
            color: white;
            text-align: center;
        }
        h1 {
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
        .tabs {
            padding: 0;
            font-size: 25px;
            margin-bottom: 0;
        }
        .tabs_option {
            display: block;
            margin: 0;
            padding: 0;
            padding: 12px 16px;
        }
        a.tabsclass {
            text-decoration: none;
            color: rgb(7, 110, 62);
            font-weight: 500;
            margin-bottom: 10px;
            font-size: 18px;
            padding: 12px 16px;
        }
        a.tabsclass:hover {
            color: rgb(232, 232, 232);
        }
        .tabs_selected {
            background-image: url('r2.png');
            color: white;
            padding: 12px 16px;
        }
    </style>
</head>
<body>
    <?php
        $currentpage = basename($_SERVER['REQUEST_URI']);
        include_once('nav.php');
    ?>
    <div class="univ">
        <div class="main1">
            Students Fee Management System
        </div>
        <div class="main2">
            <div class="left">
                <ul class="tabs">
                    <li class="tabs_option">
                        <a href="admin.php" class="tabsclass">View ></a>
                    </li>
                    <li class="tabs_option tabs_selected">
                        <a href="insert.php"class="tabsclass">Insert ></a>
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
    </div>
</body>
</html>
