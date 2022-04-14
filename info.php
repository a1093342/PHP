<?php
$Uname=$_POST["Uname"];
$Umail=$_POST["Umail"];
$Uphone=$_POST["Uphone"];
$Gender=$_POST["Gender"];
$food=$_POST["food"];
$date=$_POST["date"];
$Uid=$_POST["Uid"];
$foodsize=count($food);
$size=$_POST["size"];
$ticket=$_POST["ticket"];
$comment=$_POST["comment"];
$comment=strip_tags($comment);
$comment=nl2br($comment);

$uphoto=$_FILES["uphoto"];
//$foods=implode(",",$food);

echo "<h1>墾丁三日游</h1>";
echo "<b>your name is :</b>".$Uname."先生/小姐<br/>";
echo "<b>your email is :</b>".$Umail."<br/>";
echo "<b>your phone number is :</b>".$Uphone."<br/>";
echo "<b>Your birthday is :</b>".$date."<br/>";
echo "<b>Yoyr ID is :</b>".$Uid."<br/>";
if($Gender=="1"){
    echo"<b>Your gender is :</b>male<br/>";
}elseif($Gender=="2"){
    echo"<b>Your gender is :</b>female<br/>";
}else{
    echo"<b>You raather not to say your gender</b><br/>";
}

echo "<b>Your favourite food:</b>";

for($i=0;$i<$foodsize;$i++){
    if($i==0){
        echo $food[$i];
    }else{
        echo ",".$food[$i];
    }

}

echo "<br/><b>Your size :</b>".$size."<br/>";
echo "<b>Ammount of ticket :</b>".$ticket."<br/>";
echo "<b>comment :</b>".$comment."<br/>";

echo $_FILES["uphoto"]["name"]."<br/>";
echo $_FILES["uphoto"]["tmp_name"]."<br/>";
echo $_FILES["uphoto"]["size"]."<br/>";
echo $_FILES["uphoto"]["type"]."<br/>";

if(copy($_FILES["uphoto"]["tmp_name"], $_FILES["uphoto"]["name"])){
    echo "success";
}else{
    echo "failed";
}


?>