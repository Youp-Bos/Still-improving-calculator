<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculator.php" method="GET">
        <h1>Calculator</h1>
        <input type="number" name="numberone" id="">
        <a>First number</a>
        <h1></h1>
        <input type="number" name="numbertwo" id="">
        <a>Second Number</a>
        <?php
        switch ($_GET["submit"]) {
            case "Add":
                $totaal = $_GET["numberone"] + $_GET["numbertwo"];
                echo $totaal;
                break;
            case "Subtract":
                $totaal = $_GET["numberone"] - $_GET["numbertwo"];
                echo $totaal;
                break;
            case "Multiply":
                $totaal = $_GET["numberone"] * $_GET["numbertwo"];
                echo $totaal;
                break;
            case "Divide":
                $totaal = $_GET["numberone"] / $_GET["numbertwo"];
                echo $totaal;
                break;
            case "Modulo":
                $totaal = $_GET["numberone"] % $_GET["numbertwo"];
                echo $totaal;
                break;
        }
        ?>
        <input type="submit" name="submit" value="Add">
        <input type="submit" name="submit" value="Subtract">
        <input type="submit" name="submit" value="Multiply">
        <input type="submit" name="submit" value="Divide">
        <input type="submit" name="submit" value="Modulo">
    </form>
</body>

</html>