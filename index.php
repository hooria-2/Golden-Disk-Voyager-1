<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .line {
            width: 2px;
            height: 2px;
            position: relative;
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 734px;
            height: 100%;
            flex-wrap: wrap;
            transform: rotate(-90deg) rotateY(180deg);
        }
        .line div{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
            $array = explode("\n", file_get_contents('sample-data.txt'));
            for ($i=0; $i < count($array); $i++){
                $color=intval(round(floatval($array[$i])))*(-1)*3;
                $hex = str_pad(dechex($color), 2, "0", STR_PAD_LEFT);
                
                echo '<div class="line">
                    <div style="background:#'.$hex.$hex.$hex.'"></div>
                </div>';

            }
        ?>
</div>
</body>
</html>