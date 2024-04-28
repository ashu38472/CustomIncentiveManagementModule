<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Incentive Management Module</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="nav-bar">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <button class="btn-logout" >Logout</button>
        </nav>
    </header>

    <div class="hello-admin">
        <h3>Hello Admin!</h3>
        <div class="navigate">
            <button class="btn-emp-data">Employees Data</button>
            <button class="btn-update-sale">Update Employee Sale</button>
            <button class="btn-holiday-pack">Holiday Packages</button>
            <button class="btn-holiday-pack-manage">Holiday Package Management</button>
            <button class="btn-send-mail">Send Mails</button>
        </div>
    </div>

    <div class="emp-data">
        <section class="table_head">
            <h2>Employee Data</h2>
            <div class="x">x</div>
        </section>
        <section class="table_body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Total Sale</th>
                        <th>Incentive</th>
                        <th>Bonus</th>
                        <th>Holiday Package Eligibility</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        require('./connection.php');

                         // Fetch data from the database
                         $sql = "SELECT * FROM employee";
                         $result = mysqli_query($con, $sql);
                     
                         // Check if there are any rows returned
                         if (mysqli_num_rows($result) > 0) {
                             // Output data of each row
                             while ($row = mysqli_fetch_assoc($result)) {
                                 echo "<tr>";
                                    echo "<td>" . $row["Id"] . "</td>";
                                    echo "<td>" . $row["Name"] . "</td>";
                                    echo "<td>" . $row["E-mail"] . "</td>";
                                    echo "<td>" . $row["Role"] . "</td>";
                                    $sale = $row["sale"];
                                    echo "<td>" . $sale . "</td>";
                                    if($sale>=10000 && $sale<20000){
                                        echo "<td>" . $row["sale"]*1.5/100 . "</td>";
                                        echo "<td>None</td>";
                                        echo "<td>No</td>";
                                    }
                                    else if($row["sale"]>=20000 && $sale<30000){
                                        echo "<td>" . $row["sale"]*3/100 . "</td>";
                                        echo "<td>None</td>";
                                        echo "<td>No</td>";
                                    }
                                    else if($row["sale"]>=30000 && $sale<50000){
                                        echo "<td>" . $row["sale"]*3.5/100 . "</td>";
                                        echo "<td>$1000</td>";
                                        echo "<td>No</td>";
                                    }
                                    else if($row["sale"]>=50000){
                                        echo "<td>" . $row["sale"]*5/100 . "</td>";
                                        echo "<td>None</td>";
                                        echo "<td>Yes</td>";
                                    }
                                    else{
                                        echo "<td>None</td>";
                                        echo "<td>None</td>";
                                        echo "<td>No</td>";
                                    }
                                 echo "</tr>";
                             }
                         } else {
                             echo "<tr><td colspan='4'>No data found</td></tr>";
                         }
                     
                         // Close the database connection
                         mysqli_close($con);

                    ?>
                </tbody>
            </table>
        </section>
    </div>


    <div class="holi-pack">
        <section class="h-p-head">
            <h2>Holiday Packages</h2>
            <div class="x1">x</div>
        </section>
        <section class="h-p-body">
        <table class="table">
                <thead>
                    <tr>
                        <th>Package ID</th>
                        <th>Package Type</th>
                        <th>Days-Nights</th>
                        <th>Destination</th>
                        <th>Location</th>
                        <th>Amenites</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         require('./connection.php');

                         // Fetch data from the database
                         $sql = "SELECT * FROM holidaypackages";
                         $result = mysqli_query($con, $sql);
                     
                         // Check if there are any rows returned
                         if (mysqli_num_rows($result) > 0) {
                             // Output data of each row
                             while ($row = mysqli_fetch_assoc($result)) {
                                 echo "<tr>";
                                    echo "<td>" . $row["PackageID"] . "</td>";
                                    echo "<td>" . $row["PackageType"] . "</td>";
                                    echo "<td>" . $row["DurationInNights"] . "</td>";
                                    echo "<td>" . $row["Destination"] . "</td>";
                                    echo "<td>" . $row["Location"] . "</td>";
                                    echo "<td>" . $row["Amenities"] . "</td>";
                                 echo "</tr>";
                             }
                         } else {
                             echo "<tr><td colspan='4'>No data found</td></tr>";
                         }
                     
                         // Close the database connection
                         mysqli_close($con);

                    ?>
                </tbody>
            </table>
        </section>
    </div>
    <script src="main.js" type="Module"></script>
</body>
</html>