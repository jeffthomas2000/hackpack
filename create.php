<html>
    <head>
        <title>(Prototype)</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Student Database</h1>
        <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="verify.html">Verify</a></li>
            <li><a href="admin.html">Administrator Login</a></li>
        </ul>
        <div id="content">
        <?php
        $servername = "sql310.epizy.com";
        $username = "epiz_26517649";
        $password = "5oDroaSSRSv";
        $dbname = "epiz_26517649_sd";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO Certificates VALUES('".$_POST["uid"]."','".$_POST["name"]."','".$_POST["degree"]."','".$_POST["date"]."');";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
        </div>
    </body>
</html>