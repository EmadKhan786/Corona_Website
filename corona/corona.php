
<?php
$data = file_get_contents('https://api.covid19api.com/summary');
/* API is given */
$coronadata = jason_decode($data);

echo "<pre>";
print_r($coronadata);





?>
