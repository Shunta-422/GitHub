<?php
$dsn = '********';
$usr = '********';
$passwd = '************';

try {
    $db = new PDO($dsn, $usr, $passwd);
    // print '接続に成功しました。';
} catch (PDOException $e) {
    die("接続エラー:{$e->getMessage()}");
    exit;
}

$sql = "SELECT * FROM sampledb WHERE num = 0";

$db_list = array();
if($result = $db->query($sql)){

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $db_list = array(
            'string' => $row['string']
        );
    }

    $result = null;
}

$pdo = null;

header('Content_type: application/json');
echo json_encode($db_list);