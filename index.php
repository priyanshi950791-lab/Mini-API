<!--priyanshi950791@email.com -->

<!DOCTYPE html>
<html>
<head>
    <title>Mini API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Mini API Project</h2>

<form method="GET">
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Get Greeting</button>
</form>

<?php
if(isset($_GET['name']))
{
    $name = htmlspecialchars($_GET['name']);

    try
    {
        $url = "http://localhost/mini-api/api/greet.php?name=".$name;

        $json = file_get_contents($url);

        if($json === FALSE)
        {
            throw new Exception("API Error");
        }

        $data = json_decode($json, true);

        echo "<h3>".$data["message"]."</h3>";
    }
    catch(Exception $e)
    {
        echo "<p>Something went wrong.</p>";
    }
}
?>

</body>
</html>
