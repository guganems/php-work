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

        #sidebar{
            width: 300px;
            height: 400px;
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
        <img src="admin_logo.png" alt="adminLogo" id="adminLogo"/><br /> This is admin panel, please proceed with caution!

    </div>

    <div id="sidebar">
        <ul>
            <li>Add Data</li>
            <li>Delete Data</li>
            <li>Update Data</li>
            <a href="https://www.facebook.com/needletipson" target="_blank" style="color: black; text-decoration: none;"><li>Developer</li></a>
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