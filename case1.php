<?php

function count_variable($word){
    $word_arr = str_split($word);
    $abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $found = array_intersect($abjad, $word_arr);
    $count = array_count_values($word_arr);

    $result = [];
    foreach ($found as $item){
        $result[$item] = $count[$item];
    }

    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case1</title>
</head>
<body>
    <form action="<?php $PHP_SELF?>" method="post">
        <P>
            String: <br> <br>
            <input type="text" name="string" id="">
        </P>
        <p>
            <button type="submit">Count</button>
        </p>
    </form>

    <?php if ($_POST && isset($_POST['string'])): ?>
        <?php foreach (count_variable($_POST['string']) as $letter => $total): ?>
                <h2><?php echo $letter ?> <?php echo $total ?></h2>
        <?php endforeach ?>
    <?php endif ?>
    
</body>
</html>