<?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nights = $_POST['nights'];
        $destination = $_POST['destination'];
        $location = $_POST['location'];
        $amenites = $_POST['amenites'];

        $sql = "UPDATE  holidaypackages 
                        SET     DurationInNights = '$nights', 
                                Destination = '$destination',  
                                Amenities = '$amenites',
                                Location = '$location'  
                        WHERE   PackageID = '$id'";


        $result = mysqli_query($con,$sql);
        
        if($result){
            header('location:/main/main.php');
        }else{
            echo die(mysqli_error($con));
        }
    }else{
?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Holiday Package</title>
        <link rel="stylesheet" href="pack.css">
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
        <div class="container">
            <h1>Update <span>(Holiday Packages)</span></h1>
            <form class="form" id="form" method="post">
                <div class="input">
                    <label for="id">Package ID</label>
                    <input id="id" name="id" type="number" placeholder="id" required>
                </div>
                <div class="input">
                    <label for="nights">Number of nights</label>
                    <input id="nights" name="nights" type="number" placeholder="nights" required>
                </div>
                <div class="input">
                    <label for="destination">Destination</label>
                    <input id="destination" name="destination" type="text" placeholder="destination" required>
                </div>
                <div class="input">
                    <label for="location">Location</label>
                    <input id="location" name="location" type="text" placeholder="location" required>
                </div>
                <div class="input">
                    <label for="amenites">Amenites</label>
                    <input id="amenites" name="amenites" type="text" placeholder="amenites" required>
                </div>
                <div class="button">
                    <button class="submit" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
        <script src="/logout.js" type="Module"></script>  
    </body>
    </html>

<?php
    }
?>

