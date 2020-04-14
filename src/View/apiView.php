<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../Style/style.css">
    <title>ComedyCorner</title>

</head>

<header>
    
    <div class="container2">
        <img src="../imgs/Logo.jpg" alt="Comedy Corner">
    <h1>Return home and have more laughs!</h1>
        <form action="../../index.php">
            <button type="submit" name="submit" value="enter">Home</button> <!-- Button to return to home / Index.php -->
        </form>
    </div>
</header>

<body>



    <div class="jokes"> <?php include('../controller/apiController.php'); ?> </div> <!-- The API Controller is called in and will display the amount of jokes as requested -->
    


</body>

</html>
