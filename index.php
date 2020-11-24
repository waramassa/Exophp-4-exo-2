<?php
 $test1 = 'Le carré de 4 est';
 $test2 = 'Bien entendu seize';

function concatenation($para1, $para2){
    return $para1 .' '. $para2;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo concatenation('Bonjour', 'Wara'); ?>
</div>
<div><?php echo concatenation($test1, $test2); ?>
</div>
    
</body>
</html>