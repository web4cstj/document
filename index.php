<?php
namespace Web4cstj\Document;

include_once "vendor/autoload.php";
$form = new Form();
$div = new Div();
$form->append($div);
$div->setAttribute('id', 'test');
$span = $div->append(new Element("span"));
$span->append('allo');
$radio = $div->append(new InputCheckbox("wow", "cool"));
$radio->label = "Wow!";
$select = new Select("select", [1,2,3,4,5], 3);
$select->setLabel("monselect");
$input = new Input("aaa", "bbb");
$input->setLabel("Ccc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <?php echo $form; ?>
    <?php echo $select; ?>
    <?php echo $input; ?>
</body>
</html>