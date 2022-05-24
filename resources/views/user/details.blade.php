<button type="button" onclick="history.back();">Back</button>
<br>
<?php

$g_id= $_GET['search'];
$s_id="";
$s_name="";
$s_age="";
$s_gender="";
foreach($user as $users){
    if($users->id==$g_id){
        $s_id=$users->id;
        $s_name=$users->name;
        $s_age=$users->age;
        $s_gender=$users->gender;
    }
}
$arr= array(
    'id' => $s_id,
    'name' => $s_name,
    'age' => $s_age,
    'gender' => $s_gender
);
print json_encode($arr);
?>



