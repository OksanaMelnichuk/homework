<?php

$str='asdffhh, yff-dde. khgdsGfchjjjgf ffhvdxgh.';
    
//№1 разбить строки текста по пробелам
var_dump(explode(' ',$str));

//№2 разбить строку на фрагменты по 10 символов
var_dump(str_split($str,10));

//№3 объединить массив в строку с помощью дефисоф
$arr = ['asdd','qweer','zxccv'];
var_dump(implode('-',$arr));

//№4 удалить точку в конце строки
var_dump(rtrim($str,'.'));

//№5 удалить все точки в строке
var_dump(str_replace('.','',$str));

//№6 получить 5последних символов в строке
var_dump(substr($str,-5));

//№7 перепутать символы в строке
var_dump(str_shuffle($str));

//№8 дополнить строку до 100символов пробелами
var_dump(str_pad($str,100));

//№9 заменить все пробелы на дефисы
var_dump(strtr($str,' ','-'));

//№10 перевернуть строку
var_dump(strrev($str));
