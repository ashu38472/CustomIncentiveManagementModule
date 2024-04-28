<?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $sale = $_POST['sale'];

        $sql="UPDATE employee SET sale = $sale where id=$id";

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
        <title>Incentive Calculater</title>
        <link rel="stylesheet" href="cal.css">
    </head>
    <body>
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="nav-bar">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
                
                <button class="btn-logout">Logout</button>
            </nav>
        </header>
        <div class="container">
            <h1>Update <span>(Sale)</span></h1>
            <form class="form" id="form" method="post">
                <div class="input">
                    <label for="id">Employee ID</label>
                    <input id="id" name="id" type="number" placeholder="id" required>
                </div>
                <div class="input">
                    <label for="sale">New Sale</label>
                    <input id="sale" name="sale" type="number" placeholder="id" required>
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

