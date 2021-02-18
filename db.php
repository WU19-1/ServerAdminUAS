<?php
echo "hello world<br>";
$link = mysqli_connect("172.18.0.2","trucorp2","trucorpdatabase","trucorp");
if (!$link){
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}
echo "Sukses: Koneksi telah terbuat!" . PHP_EOL;
echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;

$res = $link->query("SELECT * FROM users");
$count = 0;

while($row = $res->fetch_assoc()){
	echo $row["id"] . " - " . $row["name"] . " - " . $row["office"] . "<br>";
	$count = $count + 1;
}

echo "Total users : $count";

mysqli_close($link);
?>
