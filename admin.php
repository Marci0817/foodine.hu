<?php
    session_start();
    include('dbConnection.php');
    $sql = "SELECT perm_level FROM users WHERE username = ?";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $_SESSION["username"]);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($perm_level_check);
    $stmt->fetch();
    $stmt->close();

    if($perm_level_check == 0){
        header("location: index.php");
    }
    if(isset($_GET["search"])){
        $search_value = base64_encode($_GET["search"]);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Foodine</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!--<link rel='stylesheet' type='text/css' media='screen' href='css/profile.css'> -->
        <link rel = "icon" href ="img/logo2.png" type = "image/x-icon">  
        <style>
            #tartalom1{
                margin-left: 10%;
                margin-right: 10%;
                margin-top: 2%;
                margin-bottom: 5%;
            }
            a:active, a:hover, a:visited, a:link {
                text-decoration: none; color: black; 
            }
            @media only screen and (max-width: 768px) {
                #tartalom1{
                    margin-left: 3%;
                    margin-right: 3%;
                    margin-top: 5%;
                }
            }
        </style>   
    </head>
    <body>
        <?php include("navbar.php");?>
        <div id="tartalom1">
            <h3>Moderáció</h3>
            <hr>
            <?php 
            if(isset($_GET["search"])){
                $query = "SELECT * FROM recept WHERE receptnev='$search_value' DESC ";
            }else{
                $query = "SELECT * FROM recept ORDER BY id DESC ";
            }
            
            $result = mysqli_query($db, $query); 
            if(mysqli_num_rows($result) > 0)  
            {  
                while($row = mysqli_fetch_array($result))  
                {  
            ?>  
            <div class="media">
                <img src="uploads/<?php echo $row["img"];?>" class="mr-3" alt="HIBA" width="64px" height="64px">
                <div class="media-body">
                    <h5 class="mt-0"><?php echo base64_decode($row["receptnev"]);?></h5>
                    <p> 
                        <b>Receptnev ID:</b> <?php echo $row["id"];?> <b>Account ID:</b> <?php echo $row["account_id"];?>
                    
                    </p>
                </div>
            </div>
            <br>
            <?php  
                }  
            }  
            ?>  
        </div>
    </body>
</html>