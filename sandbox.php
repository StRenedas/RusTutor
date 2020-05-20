<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    


</head>
<body>
    <form action="dnd.php" method="post">
    <!--    DRAGGABLE   -->
    <p class="wordplace" draggable = "true" style = "border: 1px solid black; width: 100px;" value = "kek">ONE</p>
    <p class="wordplace" draggable = "true" style = "border: 1px solid black; width: 100px;" name = '2'>TWO</p>
    <p class="wordplace" draggable = "true" style = "border: 1px solid black; width: 100px;" name = '3'>THREE</p>
    <p class="wordplace" draggable = "true" style = "border: 1px solid black; width: 100px;" name = '4'>FOUR</p>
    <p class="wordplace" draggable = "true" style = "border: 1px solid black; width: 100px;" name = '5'>FIVE</p>


    <!--    DROPPLACES  -->
    <input class="dropplace" style="width: 500px; border:2px solid red; border-radius: 10px; height: 30px;" name = "first" value = "kok">fasd
    <p class="dropplace" style="width: 500px; border:2px solid red; border-radius: 10px; height: 30px;"></p>
    <p class="dropplace" style="width: 500px; border:2px solid red; border-radius: 10px; height: 30px;"></p>
    <p class="dropplace" style="width: 500px; border:2px solid red; border-radius: 10px; height: 30px;"></p>
    <p class="dropplace" style="width: 500px; border:2px solid red; border-radius: 10px; height: 30px;"></p>
    <button type="submit" name = "dndsubmit">go</button>
    </form>
    <script src="dnd.js"></script>
</body>
</html>