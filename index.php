<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="src/Style/style.css">
    <title>ComedyCorner</title>
</head>

<body>
    <div class="container">
        <img src="src/imgs/Logo.jpg" alt="Comedy Corner">
        <h1>How many Jokes do you want to hear?</h1>
        <form action="src/view/apiView.php">
            <input id="count" type="number" name="count" min="1" max="20" value="1" />
            <button type="submit" name="submit" value="enter">Submit</button> <!-- Button submit user joke count then load the API View -->
        </form>

    </div>
</body>

</html>


<!-- Thanks for checking out my application :D -->