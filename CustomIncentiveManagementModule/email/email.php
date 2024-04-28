<?php
    include 'connection.php';

    if (isset($_POST['submit'])) {

        $forBasic = $_POST['forBasic'];
        $forStandard = $_POST['forStandard'];
        $forPremium = $_POST['forPremium'];

        $sub = "Incentive and Holiday Package for Achieving Targets!";
        $header = "";

        $sql = "SELECT * FROM employee";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // $row = mysqli_fetch_assoc($result);
                $name = $row["Name"];
                $to = $row["E-mail"];
                // $to = "ashu38472@gmail.com";
                $incentive = "";
                $bonus = "";
                $package = "";
                $sale = $row["sale"];
                if($sale>=10000 && $sale<20000){
                    $incentive = $sale*1.5/100 ;
                    $bonus = "None";
                    $holidayPack = "No";                    
                }
                else if($sale>=20000 && $sale<30000){
                    $incentive = $sale*3/100 ;
                    $bonus = "None";
                    $holidayPack = "No";
                }
                else if($sale>=30000 && $sale<50000){
                    $incentive = $sale*3.5/100 ;
                    $bonus = "$1000";
                    $holidayPack = "No";
                }
                else if($sale>=50000){
                    $incentive = $sale*5/100 ;
                    $bonus = "None";
                    $holidayPack = "Yes";
                }else{
                    $incentive = "" ;
                    $bonus = "None";
                    $holidayPack = "Yes";
                }

                if($sale>=50000 && $sale<$forStandard){
                    $holidayPack = "Basic";
                }else if($sale<$forPremium && $sale>=$forStandard){
                    $holidayPack = "Standard";
                }else if($sale>=$forPremium){
                    $holidayPack = "Standard";
                }

                $massage = "Dear $name,

                I hope this message finds you well and in good spirits!
                
                I'm delighted to share some exciting news with you all. As a token of appreciation for your hard work, dedication, and outstanding performance, we're thrilled to announce an exclusive Incentive and Holiday Package for all employees who achieve their targets!
                
                Here's what you can look forward to:
                
                Incentive : $$incentive
                Bonus : $bonus
                Holiday Package: $holidayPack


                Once again, congratulations to each and every one of you on your achievements. Your accomplishments are instrumental in driving our success, and we couldn't be prouder of your efforts.
                
                Thank you for your continued hard work and dedication. Here's to many more successes together!
                
                Best regards,
                
                Ashu Sah
                From Sales
                +91-9755890023";

                if (mail($to,$sub,$massage,$header)) {
                    header('location:/main/main.php');
                }else{
                    echo 'Mail sendind failed';
                }
            }
        }
    }else{
?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Incentive Calculater</title>
        <link rel="stylesheet" href="email.css">
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
            <h1>Send email<span>(all)</span></h1>
            <form class="form" id="form" method="post">
                <div class="input">
                    <label for="id">For Basic</label>
                    <input id="forBasic" name="forBasic" type="number" placeholder="sale more than" required>
                </div>
                <div class="input">
                    <label for="forStandard">For Standard</label>
                    <input id="forStandard" name="forStandard" type="number" placeholder="sale more than" required>
                </div>
                <div class="input">
                    <label for="forPremium">For Premium</label>
                    <input id="forPremium" name="forPremium" type="number" placeholder="sale more than" required>
                </div>
                <div class="button">
                    <button class="submit" type="buttom" name="submit">Send</button>
                </div>
            </form>
        </div>
        <script src="/logout.js" type="Module"></script>  
    </body>
    </html>

<?php
    }
?>