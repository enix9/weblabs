<?php

$dir = 'html';
$n = 2;

function glossary($directory, $n){

    $result = array();
    $formMas = array();
    $final = array();
    $files = scandir($directory, 1);

    for($i=0;$i<count($files)-2;$i++){

        $content = file_get_contents($directory . '/' . $files[$i]);
        $content = strip_tags($content);

        $content = mb_strtolower($content);
        $content = trim($content);
        $arrWords = $parts = preg_split('/\s+/', $content);
        $uqWords = array_unique($arrWords);

        foreach ($uqWords as $word){
            $flag = false;
            // Если нужны только осмысленные слова удалить комменты if (будет искать слова более 3 букв)
            #if(strlen($word) > 4){
                for($k=0;$k<count($result);$k++){
                    if($result[$k]['word'] == $word){
                        $result[$k]['link'] = $result[$k]['link'] . $directory . '/' . $files[$i] . ';<br>';
                        array_push($formMas, $result[$k]);
                        $flag = true;
                    }
                }
                if(!$flag) {
                    array_push($result, array('word' => $word,
                        'link' => $directory . '/' . $files[$i] . ';<br>'));
                }
            #}
        }
    }

    for($i=0;$i<count($formMas);$i++){
        if(mb_substr_count($formMas[$i]['link'], ';') >= $n){
            array_push($final, $formMas[$i]);
        }
    }

    return $final;
}

// Вызываем функцию
$res = glossary($dir, $n);
sort($res);

?>
<head>
    <title> Лабораторная 3 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<h1 class="ml-3 mt-3"> Все найденные слова: </h1>
<ul class="list-group ml-3 mt-3">
<?php for($i=0;$i<count($res);$i++){
    echo '<div class="list-group-item w-25 items">' . $res[$i]['word'] . '</div><div class="links">' . $res[$i]['link'] . '</div>';
} ?>
</ul>

