<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array = [[2, 4, 6, 3, 5],
    [1, 3, 9, 5, 7]
];

function checkMax($array)
{
    $max = $array[0][0];
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
            }
        }
    }
    return $max;
}

echo checkMax($array);
?>
</body>
</html>