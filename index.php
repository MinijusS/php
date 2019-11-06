<?php
$days = 365;
$pack_price = 3.50;
$count_ttl = 0;
$time_per_cig = 5;

for ($d = 0; $d < $days; $d++) {
    $today = date('N', strtotime("+$d day"));
    if ($today >= 1 && $today <= 5) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    } elseif ($today == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } elseif ($today == 7) {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    }
}

$price_ttl = ceil($count_ttl / 20) * $pack_price;
$time_total = round($count_ttl * $time_per_cig / 60);

$h1 = 'Mano dumu skaiciuokle';
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl eur.";
$h3 = "Viso traukdamas prastovesiu $time_total valandu";
?>
<html>
    <head>
        <style>
            .bg-border {
                border: 2px solid black;
                margin: 10px;
            }
            .bg-image {
                height: 40px;
                width: 40px;
                background-image: url('https://www.wileyonmedia.com/files/2016/08/cig.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                display:inline-block;
            }

        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <?php for ($b = 0; $b < floor($count_ttl / 20); $b++) : ?>
            <div class="bg-border">
                <?php for ($c = 0; $c < 20; $c++) : ?>
                    <div class="bg-image"></div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <?php if($count_ttl % 20 != 0) : ?>
        <div class="bg-border"> 
            <?php for ($b = 0; $b < $count_ttl % 20; $b++) : ?>
                <div class="bg-image"></div>
            <?php endfor; ?>
        </div>
        <?php endif; ?>
    </body>
</html>