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
        <h1>Results</h1>
        <?php
        $servername = "sql310.epizy.com";
        $username = "epiz_26517649";
        $password = "5oDroaSSRSv";
        $dbname = "epiz_26517649_sd";
        $sql = "SELECT uid, name, degree, date FROM Certificates where UID='".$_GET["uid"]."';";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<b>UID:</b> " . $row["uid"]. "<br> <b>Name:</b> " . $row["name"]. "<br><b>Degree:</b> " . $row["degree"]. "<br><b>Date:</b> " . $row["date"];
            echo "<br><h1 style='color:green;'>Verified Certificate</h1>";
        }
        } else {
        echo "No record found for given UID";
        echo "<br><a href='verify.html'>Go back</a>";
        }
        $conn->close();
        ?>
        </div>
    </body>
</html>