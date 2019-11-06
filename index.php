<?php
$speed_of_sound = 333;
$max_db = 120;
$db = 120;
$db_decr = 6;
$p = '';
$my_position = rand(1, 100);

for ($dist = 1; $db > 0; $dist *= 2) {
    $db -= 6;
    $sec = round($dist / $speed_of_sound);
    $p .= "Po $sec ($dist m.): $db db <br>";
    if ($db >= 90) {
        if ($my_position < $dist) {
            $situacija = 'keisiu';
            $img = 'https://i.ytimg.com/vi/C2JZfV61K78/hqdefault.jpg';
        } else {
            $situacija = 'nekeisiu';
            $img = 'https://n.nordstrommedia.com/id/sr3/9f3cfffc-3b05-4393-b515-e10b05dcacc0.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=1660&h=2546';
        }
    }
}

$h1 = 'Griaustinio zona';
$h3 = "Stovedamas $my_position m. nuo griaustinio, $situacija kelniu";
?>
<html>
    <body>
        <h1><?php print $h1; ?></h1>
        <p><?php print $p; ?></p>
        <h3><?php print $h3; ?></h3>
        <img src="<?php print $img; ?>">
    </body>
</html>