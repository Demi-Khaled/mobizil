<?php
require_once('db_conn.php');

$phone1 = $_GET['phone1'];
$phone2 = $_GET['phone2'];

$query = "SELECT * FROM compare WHERE Model = '$phone1'";
$result = mysqli_query($conn, $query);

$phoneSpecs = array();

while ($row = mysqli_fetch_assoc($result)) {
    $phoneSpecs[$phone1] = array(
        'model' => $row['Model'],
        'display' => $row['Display'],
        'processor' => $row['Processor'],
        'ram' => $row['RAM'],
        'storage' => $row['Storage'],
        'camera' => $row['Camera'],
        'battery' => $row['Battery'],
        'os' => $row['Operating_System']
    );
}

$query = "SELECT * FROM compare WHERE Model = '$phone2'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $phoneSpecs[$phone2] = array(
        'model' => $row['Model'],
        'display' => $row['Display'],
        'processor' => $row['Processor'],
        'ram' => $row['RAM'],
        'storage' => $row['Storage'],
        'camera' => $row['Camera'],
        'battery' => $row['Battery'],
        'os' => $row['Operating_System']
    );
}

mysqli_close($conn);
?>

<html>
<head>
    <title>Phone Comparison</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<a href="test.html"><img src="./imegs/vector-logout-sign-icon.jpg" width="50px" height="50px" alt="logout"></a>    
<h1>Phone Comparison</h1>
    <div id="phoneComparison"></div>

    <script>
        const phone1 = '<?php echo $phone1; ?>';
        const phone2 = '<?php echo $phone2; ?>';
        const phoneSpecs = <?php echo json_encode($phoneSpecs); ?>;

        function displayComparison() {
            const comparisonContainer = document.getElementById("phoneComparison");
            const comparisonHTML = `
                <table>
                    <tr>
                        <th>Specifications</th>
                        <th>${phone1}</th>
                        <th>${phone2}</th>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>${phoneSpecs[phone1].model}</td>
                        <td>${phoneSpecs[phone2].model}</td>
                    </tr>
                    <tr>
                        <td>Display</td>
                        <td>${phoneSpecs[phone1].display}</td>
                        <td>${phoneSpecs[phone2].display}</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td>${phoneSpecs[phone1].processor}</td>
                        <td>${phoneSpecs[phone2].processor}</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>${phoneSpecs[phone1].ram}</td>
                        <td>${phoneSpecs[phone2].ram}</td>
                    </tr>
                    <tr>
                        <td>Storage</td>
                        <td>${phoneSpecs[phone1].storage}</td>
                        <td>${phoneSpecs[phone2].storage}</td>
                    </tr>
                    <tr>
                        <td>Camera</td>
                        <td>${phoneSpecs[phone1].camera}</td>
                        <td>${phoneSpecs[phone2].camera}</td>
                    </tr>
                    <tr>
                        <td>Battery</td>
                        <td>${phoneSpecs[phone1].battery}</td>
                        <td>${phoneSpecs[phone2].battery}</td>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>${phoneSpecs[phone1].os}</td>
                        <td>${phoneSpecs[phone2].os}</td>
                    </tr>
                    
                </table>
            `;
            comparisonContainer.innerHTML = comparisonHTML;
        }

        displayComparison();
    </script>
</body>
</html>