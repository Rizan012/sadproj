<?php
    require_once("entrycheck_admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
        *{
            font-family: Poppins;
        }
        body{
            margin: 0;
            padding: 2px;
            background-color: #F3F3F3 ;
        }

        .main2{
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            
        }

        .right{
            flex:90%;
            border-radius: 10px;

        }
        .left{
            flex:10%;
            background-color: whitesmoke;
            box-shadow: 2px 0 0 0 rgba(0, 0, 0, 0.3);
            border-radius: 0px 0px 0px 10px;
        }
        

        .div_info{
            background-color: white;
            display: flex;
            flex-direction: column; 
            padding: 10px 6px 20px 6px;
            margin-top:0;

        }
       
 
        .enter {
            padding: 10px 40px 10px 40px;
            background-image: url('r2.png');
            border: none;
            border-radius: 20px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            float: right;
            transition: opacity 0.25s;
        }
        .enter:hover{
            cursor: pointer;
            opacity: 0.5;
        }
        .enter:active{
            cursor: pointer;
            opacity: 0.3;
        }
        .insert{
            margin-right: 20px;
            border: none;
            border-bottom:2px solid grey;
            font-size: 18px;
        }
        .table_div{
            background-color: whitesmoke;
        }
        

        table.large {
            width: 100%;
            border-collapse: collapse;
            /* text-align: center; */
        }

        table.large th, 
        table.large td {
            border: 1px solid #ddd; 
            /* light gray color */
            padding: 8px;
            text-align: left;
        }

        table.large th {
            background-color: white;

            /* very light color */
        }

        table.large .large1 td {
            height: 200px; /* Set a large height for the row */
            background-color: white;
        }
        h1{
           
            margin-bottom: 40px;

            margin-left: 10px;
            font-weight: bold;
            color: #016235;
        }
        .div_edit{
            background-color: white;
            display: flex;
            flex-direction: column; 
            padding: 10px 6px 20px 6px;
            border-radius: 0px 0px 10px 0px;
            margin-top:0;
        }

        .register_top{
            flex: 1;
            font-size: 30px;
            margin-top: 10px;
        }
        .register_topic{
            margin-left: 10px;
        }

        <?php if(empty($_POST["edit"])){echo"
            .register_top{ pointer-events: none; color:grey}
            .register_bottom{ pointer-events: none;  color:grey}";
        }?>

        .register_bottom{
            flex: 5;
            display: flex;
            margin-top: 8px;
            margin-bottom: 60px;
            
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

        a.tabs_selected{
            background-image: url('r2.png');
            color:white;
            padding:12px 16px 12px 16px;
        }
        .notice{
            font-size:20px;
            color:red;
            font-style:italic;
        }
        .univ{
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            border-radius: 10px;
            margin: 0px 8px 0px 8px;

        }
        .main1{
            background-image:url("r2.png");    
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;        
            border-radius: 10px 10px 0px 0px;
            padding: 30px;
            color: white;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php $currentpage=basename($_SERVER['REQUEST_URI']);
        include_once('nav.php');
    ?>
    <div class="univ">
        <div class="main1">
            Students Fee Management System
        </div>

        <div class="main2">
            <div class="left">
                <ul class="tabs">
                    <li class="tabs_option tabs_selected">
                        <a href="admin.php" class="tabsclass">View ></a>
                    </li>
                    <li class="tabs_option ">
                        <a href="insert.php"class="tabsclass">Insert ></a>
                    </li>
            </div>

        

            <div class="right">
                <div class="div_info">

                    <div class="div_table">

                        <h1>Students Details</h1>

                        <table class="large" border="1px" cellpadding="1px" cellspacing="1px" width="100%">
                            <tr>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Batch</th>
                                <th>Fee</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <tr class="large1">
                                <td>Name</td>
                                <td>Rollno</td>
                                <td>Batch</td>
                                <td>Fee</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </table>
                    </div>  
                
                </div>

                <div class="div_edit">
                    <div class="register_top">
                            <?php if(empty($_POST["edit"])){echo'
                                <p class="notice">
                                    *Only available while editing info.
                                </p>';
                        }?>
                            <p class="register_topic">
                                Edit Student Information :
                            </p>
                        
                        </div>
                    <hr>
                    
                    <div class="register_bottom">
                        
                        <form action="">
                            <label for="">Name :</label>
                            <input type="text" name="" class="insert">
                            <label for="">Roll Number :</label>
                            <input type="text" name="" class="insert">
                            <label for="">Phone Number :</label>
                            <input type="text" name="" class="insert">
                            <label for="">DOB :</label>
                            <input type="date" name="" class="insert">
                            <label for="">Address :</label>
                            <input type="text" name="" class="insert">
                        </form>

                        <input type="submit" class="enter">
                    </div> 

                </div>
            </div>
        </div>
        
    </div>
    
     
</body>
</html>
