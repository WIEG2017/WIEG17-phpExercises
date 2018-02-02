<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post example</title>
</head>
<body>
    <?php
        echo "What was gotten: <br/>";
        print_r( $_GET );
        echo "<br/>";
        echo "What was posted: <br/>";
        print_r( $_POST );
        echo "<br/>";
        echo "How the request looks like: <br/>";
        print_r( $_REQUEST );
        echo "<br/>";
        echo "What kind of request was this: <br/>";
        print_r( $_SERVER["REQUEST_METHOD"] );
        
        $products = array(
            "fiskespö" => "Fin fint fiskespö, bra skick",
            "hoj" => array("title" => "min hoj", "description" => "Gamal hoj, går bra i nedförsbackar")
        );
        
        $productKey = $_GET['product'];

        ?>
        <br/>
        <br/>
        <h1><?php echo $products[$productKey]["title"] ?></h1>
        <p><?php echo $products[$productKey]["description"] ?></p>
        <br/>
        <br/>
        <br/>
        <br/>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<b>Tack för att du skickade ditt formulär.</b>";
            }
        ?>
        <br/>
        <a href="/forms/index.php">Gå till sidan med GET</a>
        <form method="POST" action="/forms/index.php">
            <input type="text" name="username"/>
            <input type="password" name="password"/>
            <input type="hidden" value="mitt gömda värde" name="myKey"/>
            <button type="submit">Skicka formuläret med POST</button>
        </form>
</body>
</html>