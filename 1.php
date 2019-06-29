<?php
header("Content-Type: application/json; charset=UTF-8");
function identity($name,$age,$address,$hobbies,$is_married,$list_school,$skills,$interest_in_coding){
    $arr['name'] = $name;
    $arr['age'] = $age;
    $arr['address'] = $address;
    $arr['hobbies'] = $hobbies;
    $arr['is_married'] = $is_married;
    $arr['list_school'] = $list_school;
    $arr['skills'] = $skills;
    $arr['interest_in_coding'] = $interest_in_coding;
    return json_encode($arr);
}
$name = 'Moh Minhajul Mubarok';
$age = 21;
$address = "Desa Sekaran Kecamatan Gunungpati Kota Semarang";
$hobbies = "menonton youtube";
$is_married = false;

$list_school[0]['name'] = 'SMK N 1 Rembang';
$list_school[0]['year_in'] = '2013';
$list_school[0]['year_out'] = '2016';
$list_school[0]['major'] = 'TKJ';
$list_school[1]['name'] = 'SMP N 1 Sulang';
$list_school[1]['year_in'] = '2010';
$list_school[1]['year_out'] = '2013';
$list_school[1]['major'] = null;
$list_school = json_decode(json_encode($list_school));

$skills[0]['skill_name'] = "Front End";
$skills[0]['level'] = 'Advanced';
$skills[1]['skill_name'] = "Back End";
$skills[1]['level'] = 'Advanced';
$skills = json_decode(json_encode($skills));

$interest_in_coding = True;
echo identity($name,$age,$address,$hobbies,$is_married,$list_school,$skills,$interest_in_coding);

?>