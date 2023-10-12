<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #000;
            scroll-behavior: smooth;
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        th {
            color: black;
            text-align: center;
            -webkit-animation: glow 5s ease-in-out infinite alternate;
            -moz-animation: glow 5s ease-in-out infinite alternate;
            animation: glow 5s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }

        .small {
            width: 5rem;
        }

        .right {
            border-right: 1px solid transparent;
            border-right-color: red;
            border-left: 1px solid transparent;
            border-left-color: red;
            margin: 10px;
            border-radius: 7.5rem;
        }

        .margin-4 {
            margin: 0 27.5vw
        }

        input,
        select {
            background: #333;
            border: none;
        }

        .notice {
            border-right: 2px solid transparent;
            border-right-color: red;
            border-left: 2px solid transparent;
            border-left-color: red;
            padding: 0px 10vw;
            border-radius: 7.5rem;
        }

        table,
        tr,
        td,
        th {
            border: 1px solid red;
            background: #111;
            text-align: center;
        }



        table,
        tr,
        td {
            border: 1px solid red;
            background: #111;
            text-align: center;
            color: #555;
        }

        .show1 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        

        .container {
            margin-top: 40vh;
        }

        

    </style>
    <script>
        function toggleMode() {
            var element = document.body;
            var btn = document.getElementById("bt1");
            element.classList.toggle("light-mode");
            btn.classList.toggle("btn-bw");
            if(btn.innerHTML == "Dark"){
                btn.innerHTML ="Light "
            }else{
                btn.innerHTML ="Dark"
            }
            
        }
    </script>
</head>

<body>
    <div class="container">
    <button onclick="toggleMode()" class="btn-1" id="bt1" type="submit">Light</button>
        <div class="row">
            <div class="col right">
                <center>
                    <form action="data.php" method="GET">
                        <h2 class="glow">Search</h2>
                        <input type="tel" id="lecture" class="form-control-sm small" name="lecture"
                            placeholder="Lecture no." maxlength="2" min="0" max="40" value="0">
                        <input type="tel" id="semester" name="semester" class="form-control-sm small"
                            placeholder="Semester" maxlength="2" min="0" max="08" value="0">

                        <select class="form-control-sm" name="subject" id="subject">
                            <option value="*" selected>All</option>
                            <option value="CSW2">CSW2</option>
                            <option value="AD2">AD2</option>
                            <option value="ALA">ALA</option>
                            <option value="COA">COA</option>
                            <option value="UHV">UHV</option>
                        </select>

                        <select class="form-control-sm" name="month" id="month">
                            <option value="*" selected>All</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>

                        <input type="number" id="date" name="date" class="form-control-sm small" placeholder="Date"
                            maxlength="2" min="0" max="31" value="0">
                        <br>
                        <br>
                        <input type="text" name="keywords" id="keywords" class="form-control-sm medium"
                            placeholder="keywords">
                        <br>
                        <br>
                        <input type="submit" value="Find">
                    </form>
                </center>
            </div>

            <div class="col right">
                <center>
                    <form action="data.php" method="POST">
                        <h2>Update</h2>
                        <input type="text" class="form-control-sm medium" id="uid" name="uid" placeholder="Unique ID">
                        <input type="text" class="form-control-sm small" id="page" name="page_no"
                            placeholder="Page No.">
                        <br>
                        <br>
                        <input type="text" name="keywords" id="keywords" class="form-control-sm medium"
                            placeholder="keywords">
                        <br>
                        <br>
                        <input type="submit" value="Add" name="update_button">
                    </form>
                </center>
            </div>
        </div>
        <div class="row right margin-4">
            <center>
                <form action="data.php" method="POST">
                    <h2>Delete</h2>
                    <input type="text" class="form-control-sm medium" id="uid" name="uid" placeholder="Unique ID">
                    <br>
                    <br>
                    <input type="submit" value="Delete" name="delete_button">
                </form>
            </center>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <br>
    <div class="notice">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "xxxxxxxx";
        $db_name = "study_material";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $sql = 'SELECT * FROM index_page';
            $array = [];
            if ($_GET["lecture"] != 0 && $_GET["lecture"] <= 8 && $_GET["lecture"] > 0) {
                if (strlen($_GET["lecture"]) != 2) {
                    array_push($array, " class_no = 0" . $_GET['lecture']);
                } else
                    array_push($array, " class_no = " . $_GET['lecture']);
            }

            if ($_GET["semester"] != 0 && $_GET["semester"] <= 8 && $_GET["semester"] > 0) {
                if (strlen($_GET["semester"]) != 2) {
                    array_push($array, " semester = 0" . $_GET['semester']);

                } else
                    array_push($array, " semester = " . $_GET['semester']);
            }

            if ($_GET["subject"] != '*') {
                array_push($array, ' subject_name = "' . $_GET['subject'] . '"');
            }

            if ($_GET["month"] != '*') {
                array_push($array, " month_no = " . $_GET['month']);
            }

            if ($_GET["date"] != 0 && $_GET["date"] <= 31 && $_GET["date"] > 0) {
                if (strlen($_GET["date"]) != 2) {
                    array_push($array, " date_no = 0" . $_GET['date']);
                } else
                    array_push($array, " date_no = " . $_GET['date']);
            }

            if ($_GET["keywords"] != "") {
                array_push($array, ' keywords like "%' . $_GET['keywords'] . '%"');
            }
            if (count($array) != 0)
                $sql = $sql . " WHERE ";
            for ($i = 0; $i < count($array); $i++) {
                if ($i != 0)
                    $sql = $sql . " AND ";
                $sql = $sql . $array[$i];
            }
            echo $sql;
            echo "</br>";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<div class= 'table'><table border=2><tr><th>
                UId</th><th>
                lecture</th><th>
                semester</th><th>
                subject</th><th>
                month</th><th>
                date</th><th>
                page nos</th><th>
                keywords</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $val) {
                        echo '<td><div class="show1">' . $val . "</td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "No results found...";
            }
            echo "</table></div>";
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['update_button'])) {
                $uid = $_POST['uid'];
                $subject = "";
                if (strlen($uid) == 11)
                    $subject = substr($uid, 4, 3);
                else
                    $subject = substr($uid, 4, 4);
                $sql = 'INSERT INTO index_page (UId,class_no,semester,	subject_name,	month_no,	date_no,	page_no, keywords) 
                VALUES ("' . $_POST['uid'] . '",' . substr($_POST['uid'], 0, 2) . ' ,' . substr($_POST['uid'], 2, 2) . ' ,"' . $subject . '" ,' . substr($_POST['uid'], -4, 2) . ' ,' . substr($_POST['uid'], -2, 2) . ',"' . $_POST["page_no"] . '","' . $_POST["keywords"] . '")';
                echo $sql;
                $result = $conn->query($sql);
            } else if (isset($_POST['delete_button'])) {
                $sql = 'DELETE FROM index_page WHERE UId = "' . $_POST['uid'] . '"';
                echo $sql;
                $result = $conn->query($sql);
            }
        }
        ?>
    </div>
