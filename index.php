<?php
include_once "autoload.php";
$form = new Form();
$div = new Div();
$form->append($div);
$div->setAttribute('id', 'test');
$span = $div->append(new Element("span"));
$span->append('allo');
$radio = $div->append(new InputCheckbox("wow", "cool"));
$radio->label = "Wow!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $form; ?>
</body>
</html>