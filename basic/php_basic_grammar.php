<?
$colleagues = array(“다솜”, “수빈”);
$work_day = 2;

while($work_day <= 30){
    if($work_day == 30) echo ‘치킨’ . ’이닭!’;
    else echo ‘자린’ . ’고비..’;
    $work_day += 1;
}
foreach($colleagues as $colleague) echo $colleague;
?>

<html>
   <head>
      <title>php</title>
   </head>
   <body>
      <?echo “echoTest”; ?>
   </body>
</html>

