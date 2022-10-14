<!DOCTYPE html>
<html>
<head></head>
<body>
<p>username: <?php echo $_POST['username']?></p>
<p>age: <?php echo $_POST['age']?></p>

<p>num1: <?php echo $_POST['num1']?></p>
<p>num2: <?php echo $_POST['num2']?></p>
sum: <?php
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    echo $n1 + $n2;
    ?>
</body>
</html>
