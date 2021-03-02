<?php

require 'db.php';

$crops = R::getAll('SELECT * FROM reg.crop;');
$i = 1;

?>

<head>
    <title> Лабораторная работа 4 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="mt-3 ml-3">
    <h1 class="mb-4"> Виды урожая </h1>
    <div style="width: 15%">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Вид урожая</th>
                <th scope="col">Количество урожая(кг)</th>
                <th scope="col">Год посадки</th>
                <th scope="col">Год сбора</th>
                <th scope="col">Компания</th>
            </tr>
            </thead>
            <tbody>
                <?php for($i=0;$i<count($crops);$i++){
                    echo '<tr><th scope="row">'. strval($i+1) .'</th><td>'. $crops[$i]['CropName'] .'</td><td>'.
                                                                                $crops[$i]['CropCount'] .'</td><td>'.
                                                                                $crops[$i]['PlantingYear'] .'</td><td>'.
                                                                                $crops[$i]['HarvestYear'] .'</td><td>'.
                                                                                $crops[$i]['PlantingCompany'] .'</td></tr>';
                } ?>
            </tbody>
        </table>
    </div>
    <div style="width: 15%;">
        <a href="lab4_add.php" class="btn btn-primary"> Добавить </a>
    </div>
</div>

