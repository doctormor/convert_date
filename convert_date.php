<?php

function changeDate($date){
    //ใช้ Function explode ในการแยกไฟล์ ออกเป็น  Array
    $get_date = explode("-",$date);
    //กำหนดชื่อเดือนใส่ตัวแปร $month
        $month = array("01"=>"ม.ค.","02"=>"ก.พ","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
    //month
    $get_month = $get_date["1"];
     
    //year    
    $year = $get_date["0"]+543;
     
    return $get_date["2"]." ".$month[$get_month]." ".$year;
     
    }

echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y-m-d");
echo "<br>";
echo "Date Now : ".strtotime("now"), "\n<br/>";                            // 1401875993
echo strtotime("2020-08-09 10:45:58"), "\n";                            // 1401875993
echo strtotime("10 September 2000"), "\n";      // 968518800
echo strtotime("+1 day"), "\n";                         // 1401962393
echo strtotime("+1 week"), "\n";                      // 1402480793
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";  // 1402667995
echo strtotime("next Thursday"), "\n";              // 1401901200
echo strtotime("last Monday"), "\n";                 // 1401642000
echo "<br>";
echo strtotime("01/02/2020"), "\n";                 // 1401642000
echo "<br>";
$strYear = date("Y",strtotime("2563-09-08 10:32:45"))-543;
echo "thai date convert : ".$strYear, "\n";      

echo "<br><br>";
//$time = strtotime("now");
$time = strtotime("8/9/2020, 10:52:49 AM");
echo $time."<br>";
$newformat = date("Y-m-d H:i:s", $time);
echo $newformat; // 2011-02-01

echo "<br><br>";
$time = strtotime("01/02/2011");
$newformat = date("Y-m-d", $time);
echo $newformat; // 2011-01-02

echo "<br><br>";
echo "This time from db : ".date("m-d-Y","1599243006");

echo "<br>---------------------------------------------------------<br>";
$date = new DateTime(); //2020-08-09 10:45:58
echo $date->format('U = Y-m-d H:i:s') . "\n";
echo "<br>---------------------------------------------------------<br>";
$date->setTimestamp(296758800);
echo "This time : ".$date->format('U = Y-m-d H:i:s') . "\n";
echo "<br>---------------------------------------------------------<br>";
$date->setTimestamp(296784000);
echo "This time now : ".$date->format('U = Y-m-d H:i:s') . "\n";
echo "<br>---------------------------------------------------------<br>";


echo "<br><br>";
$date = "01/10/2563";
$dateArr = explode('/',$date);
$dateThai = ($dateArr[2]-543).'-'.$dateArr[1].'-'.$dateArr['0'];
echo "<pre>";
echo "<u><strong>เป็นวันที่ พ.ศ. เป็น ค.ศ.</strong></u><br>";
echo "วันที่แบบ ค.ศ. ".$date."<br><br>";
print_r($dateArr);
echo "<br>วันที่แบบ พ.ศ. ".$dateThai;
echo "</pre>";
echo "<hr/>";


echo "time Stamp : ".strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";


//การเรียกใช้งาน Function
echo changeDate("วันที่ไทย : ".$dateThai);

?>