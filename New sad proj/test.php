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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #016235;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .main {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .nav {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            padding: 20px;
        }

        .tabs {
            list-style: none;
            padding: 0;
        }

        .tabs_option {
            margin-bottom: 10px;
        }

        .tabsclass {
            text-decoration: none;
            color: #016235;
            font-weight: 500;
            font-size: 18px;
            display: block;
            padding: 12px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .tabsclass:hover {
            background-color: rgba(1, 98, 53, 0.1);
        }

        #tabs_selected {
            background-color: #016235;
            color: white;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #016235;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container .enter {
            width: 100%;
            padding: 12px 0;
            background-color: #016235;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container .enter:hover {
            background-color: #014421;
        }

        @media (min-width: 768px) {
            .main {
                flex-direction: row;
            }

            .nav {
                width: 200px;
            }

            .content {
                padding: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="main">
            <div class="nav">
                <ul class="tabs">
                    <li class="tabs_option" <?php if ($currentpage === "admin.php") { ?> id="tabs_selected" <?php } ?>>
                        <a href="admin.php" class="tabsclass" <?php if ($currentpage === "admin.php") { ?> id="tabs_selected" <?php } ?>>View</a>
                    </li>
                    <li class="tabs_option" <?php if ($currentpage === "insert.php") { ?> class="tabs_selected" <?php } ?>>
                        <a href="insert.php" class="tabsclass" <?php if ($currentpage === "insert.php") { ?> class="tabs_selected" <?php } ?>>Insert</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <h1>Students Details</h1>
                <table class="large">
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
                        <td><i class="fas fa-edit"></i></td>
                        <td><i class="fas fa-trash"></i></td>
                    </tr>
                </table>
                <div class="form-container">
                    <h2>Edit Student Information</h2>
                    <?php if (empty($_POST["edit"])) { ?>
                        <p class="notice">*Only available while editing info.</p>
                    <?php } ?>
                    <form action="" method="post">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="insert">
                        <label for="rollno">Roll Number</label>
                        <input type="text" id="rollno" name="rollno" class="insert">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="insert">
                        <label for="dob">DOB</label>
                        <input type="date" id="dob" name="dob" class="insert">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="insert">
                        <input type="submit" value="Submit" class="enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
