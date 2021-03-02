<?php
    require 'db.php';

    if(isset($_POST['add_crop'])){
        $cropName = $_POST['CropName'];
        $cropCount = $_POST['CropCount'];
        $plantingYear = $_POST['PlantingYear'];
        $harvestYear = $_POST['HarvestYear'];
        $company = $_POST['Company'];
        R::exec("INSERT INTO Crop (CropName, CropCount, PlantingYear, HarvestYear, PlantingCompany) VALUES ('$cropName', $cropCount, $plantingYear, $harvestYear, '$company')");
        header("Refresh : 0");
        header("Location: /lab4.php");
        exit;
    }

?>


<head>
    <title> Лабораторная работа 4 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="ml-3 mt-3" style="width: 15%;">
    <h3 class="mb-3"> Введите данные: </h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="inputFirstName"> Вид урожая </label>
            <input type="text" name="CropName" class="form-control" id="inputCropName" required>
            <div class="invalid-feedback">
                Введите вид
            </div>
        </div>
        <div class="form-group">
            <label for="inputSecondName"> Количество урожая(кг) </label>
            <input type="number" name="CropCount" class="form-control" id="inputCropCount" required>
            <div class="invalid-feedback">
                Введите количество
            </div>
        </div>
        <div class="form-group">
            <label for="inputGroup"> Год посадки </label>
            <input type="number" name="PlantingYear" class="form-control" id="inputPlantingYear" required>
            <div class="invalid-feedback">
                Введите год посадки
            </div>
        </div>
        <div class="form-group">
            <label for="inputGroup"> Год сбора </label>
            <input type="number" name="HarvestYear" class="form-control" id="inputHarvestYear" required>
            <div class="invalid-feedback">
                Введите год сбора
            </div>
        </div>
        <div class="form-group">
            <label for="inputPoints"> Компания </label>
            <input type="text" name="Company" class="form-control" id="inputCompany" required>
            <div class="invalid-feedback">
                Введите компанию
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="add_crop" class="btn btn-success"> Добавить </button>
        </div>
    </form>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
