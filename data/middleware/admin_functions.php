<?php
    include_once("../backend/get_most_frequently_sold.php");
    include_once("../backend/get_most_distinct_customers.php");
    include_once("../backend/get_biggest_spenders.php");
    include_once("../backend/get_best_zip_codes.php");
    include_once("../backend/get_average_per_type.php");


    if (isset($_POST["execute-function"])) {
        $function_name = $_POST["admin-function"];
        $starting_date = $_POST["starting-date"];
        $ending_date = $_POST["ending-date"];

        echo "<table>";

        if ($function_name == "most-frequently-sold") {
            $res = get_most_frequently_sold($starting_date, $ending_date);

            echo "<tr>";
                echo "<th>Product ID</th>";
                echo "<th>Product Name</th>";
                echo "<th>Units Sold</th>";
            echo "</tr>";

            foreach ($res as $row) {
                echo "<tr>";
                    echo "<td>" . $row["ProductId"] . "</td>";
                    echo "<td>" . $row["PName"] . "</td>";
                    echo "<td>" . $row["NumSales"] . "</td>";
                echo "</tr>";
            }
        } else if ($function_name == "most-distinct-customers") {
            $res = get_most_distinct_customers($starting_date, $ending_date);

            echo "<tr>";
                echo "<th>Product ID</th>";
                echo "<th>Product Name</th>";
                echo "<th>Number of Unique Customers</th>";
            echo "</tr>";

            foreach ($res as $row) {
                echo "<tr>";
                    echo "<td>" . $row["ProductId"] . "</td>";
                    echo "<td>" . $row["PName"] . "</td>";
                    echo "<td>" . $row["NumCustomers"] . "</td>";
                echo "</tr>";
            }
        } else if ($function_name == "biggest-spenders") {
            $res = get_biggest_spenders($starting_date, $ending_date);

            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Total Money Spent</th>";
            echo "</tr>";

            foreach ($res as $row) {
                echo "<tr>";
                    echo "<td>" . $row["FName"] . "</td>";
                    echo "<td>" . $row["LName"] . "</td>";
                    echo "<td>" . $row["TotalSpent"] . "</td>";
                echo "</tr>";
            }
        } else if ($function_name == "best-zip-codes") {
            $res = get_best_zip_codes($starting_date, $ending_date);

            echo "<tr>";
                echo "<th>Zip Code</th>";
                echo "<th>Number of Shipments</th>";
            echo "</tr>";

            foreach ($res as $row) {
                echo "<tr>";
                    echo "<td>" . $row["Zip"] . "</td>";
                    echo "<td>" . $row["NumShipments"] . "</td>";
                echo "</tr>";
            }
        } else {
            $res = get_average_per_type($starting_date, $ending_date);

            echo "<tr>";
                echo "<th>Product Type</th>";
                echo "<th>Average Price</th>";
            echo "</tr>";

            foreach ($res as $row) {
                echo "<tr>";
                    echo "<td>" . $row["PType"] . "</td>";
                    echo "<td>" . $row["AvgPrice"] . "</td>";
                echo "</tr>";
            }
        }

        echo "</table>";
    }
?>