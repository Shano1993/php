<?php

// time()
$timestamp = time();
echo "Le timestamp d'aujourd'hui est $timestamp" . "<br>";

// mktime()
$timestamp = mktime(20,12,30,12,25,2020);
echo "Le timestamp du 25 décembre 2020 à 20h12 et 30 secondes était de: $timestamp";

// strtotime()

$time1 = strtotime('2019/01/25 08:30:00');
$time2 = strtotime('next friday');
$time3 = strtotime('+1 day');
$time4 = strtotime('-1 day');
$time5 = strtotime('+1 week 2 days 4 hours 2 seconds');

echo $time1 . "<br>";
echo $time2 . "<br>";
echo $time3 . "<br>";
echo $time4 . "<br>";
echo $time5 . "<br>";

// dates forme littérale
$date = getdate();
foreach ($date as $unit => $value) {
    echo "$unit --> $value <br>";
}

$today = date("Y-m-d H:i:s");
echo $today . "<br>";

// comparer des dates
$date1 = "2010-01-15";
$date2 = "2020-12-14";

if ($date1 < $date2) {
    echo "$date1 est inférieur à $date2 <br>";
}
else {
    echo "$date1 est supérieur à $date2 <br>";
}

$date1 = "2010-01-15";
$date2 = "2020/12/14";

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

if ($timestamp1 > $timestamp2) {
    echo "$date1 est supérieur à $date2 <br>";
}
else {
    echo "$date1 est inférieur à $date2 <br>";
}

// vérifier une date
$day = 01;
$month = 13;
$year = 2021;

if (checkdate($month, $day, $year)) {
    echo "La date est valide <br>";
}
else {
    echo "La date n'est pas valide <br>";
}

// objet Datetime
$dateTime = new DateTime('2021-01-20');
echo $dateTime->format('Y-m-d H:i:s') . "<br>";
echo $dateTime->format('d/m/y') . "<br>";

$dateTime = new DateTime();
$dateTime->setTimestamp(1271802325);
echo $dateTime->format('Y-m-d H:i:s') . "<br>";





