<?php
$optionName = filter_input(INPUT_GET, 'optionName');
$mass = [];
if(strcasecmp ($optionName, "Язык") == 0){
    array_push($mass, "Английский", "Русский", "Украинский");
}
if(strcasecmp ($optionName, "Жанр") == 0){
    array_push($mass, "Комедия", "Фантастика", "Ужасы", "Боевик", "Мелодрама", "Мистика", "Детектив");
}
if(strcasecmp ($optionName, "Год") == 0){
    array_push($mass, "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020");
}
if(strcasecmp ($optionName, "Месяц") == 0){
    array_push($mass, "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
}
if(strcasecmp ($optionName, "Оценка") == 0){
    array_push($mass, "1", "2", "3", "4", "5");
}
echo json_encode($mass);
?>