<?php
@include 'connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Scanner</title>
    <link rel="stylesheet" href="style_qr.css">
</head>
<body>
    <script src="qrjavascript.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .result {
            background-color: green;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .col {
            padding: 30px;
            text-align: center;
        }

        #reader {
            width: 500px;
        }

        h4 {
            margin-bottom: 10px;
        }

        #checkres {
            margin-top: 20px;
        }

        #checkres input {
            width: calc(70% - 10px);
            padding: 10px;
            box-sizing: border-box;
            margin-top: 10px;
            font-size: 16px;
        }

        #checkres button {
            width: 30%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: inherit;
            cursor: default;
        }
    </style>

    <div class="row">
        <div class="col">
            <div id="reader"></div>
        </div>
        <div class="col">
            <h4>SCAN RESULT</h4>
            <div id="result">Result Here</div>

            <form action="" method="post">
                <div id="checkres">
                <input type="text" id="resultInput" name="checkresult" hidden placeholder="Enter the text obtained from qr code">
                <button type="submit" id="resultButton" name="check" hiddden ></button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['check'])) {
        $check_result = $_POST['checkresult'];
        $sql = "SELECT * FROM products WHERE pqr = '$check_result'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            header("Location: successful.php");
        } else {
            header("Location: unsuccessful.php");
        }
    }
    ?>

    <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            document.getElementById('resultInput').value = qrCodeMessage;
            document.getElementById('resultButton').click();
            
        }

        function onScanError(errorMessage) {
            //handle scan error
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

        function submitResult() {
            // Implement the logic to handle the submitted result
            var inputResult = document.querySelector('#checkresult input').value;
            console.log("Submitted Result:", inputResult);
            // You can perform additional actions like sending data to the server
        }
    </script>
</body>
</html>
