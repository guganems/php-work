<html lang="en-US">
<head>
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            border: 0;
        }

        ul li {
            padding: 20px;
            border-bottom: 2px solid grey;
        }

        ul li:hover{
            background: #c0392b;
            color: white;
        }

        .center{
            text-align: center;
        }
        .center > div{
            margin-left: auto;
            margin-right: auto;
        }

        #header{
            width: 100%;
            height: 120px;
            background: black;
            color: white;
        }

        #sidemenu{
            width: 300px;
            height: 500px;
            background: #27ae60;
            float: left;
        }

        #data{
            height: 700px;
            background: #c0392b;
            color: white;
            font-family: Helvetica, serif;
            font-size: 25px;
        }

        #adminLogo{
            background: white;
            color: black;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div id="header" class="center">
        <img src="admin_logo.png" alt="adminLogo" id="adminLogo"/>
        <h3>Welcome to Admin Panel</h3>

    </div>

    <div id="sidemenu">
        <ul>
            <a href="add.php" target="_blank"><li>Add</a></li>
            <a href="delete.php" target="_blank"><li>Delete</a></li>
            <a href="update.php" target="_blank"><li>Update</a></li>
            <a href="search.php" target="_blank"><li>Search</a></li>
            <a href="join.php" target="_blank"><li>View Sold Items</a></li>
            <a href="index2.php" target="_blank"><li>Log off</a></li>
            <a href="developers.php" target="_blank"><li>Developers</li></a>
        </ul>
    </div>

    <div id="data"><br />
        <div class="center">
            <h3>Hello</h3>
            <p>I am Guga</p>
        </div>
    </div>

</body>
</html>