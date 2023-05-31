<?php

require('connect.php');
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
} 
//check error from query
function dbCheckErr($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}
//query to get data from one table
function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($params)) {
        $i = 0;
        foreach($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckErr($query);
    return [$query->fetchAll(), $query];
}
//query to get one row from one table
function selectOne($table, $params = []) {
    $query = selectAll($table, $params)[1];
    $query->execute();
    dbCheckErr($query);
    return $query->fetch();
}
//insert in table
function insert($table, $arrData) {
    global $pdo;
    $colls = implode(', ', array_keys($arrData));
    $val = ":" . implode(', :', array_keys($arrData));
    $sql = "INSERT INTO $table ($colls) VALUES ($val)";
    $query = $pdo->prepare($sql);
    $query->execute($arrData);
    dbCheckErr($query);
<<<<<<< HEAD
=======
    return $pdo->lastInsertId();
>>>>>>> 5c2c480 (добавлена обработка формы регистрации)
}
//update in table
function update($table, $id, $arrData) {
    global $pdo;
    $update = '';
    $i = 0;
    foreach ($arrData as $key => $value) {
        if ($i === 0) {
            $update = $update . $key . ' = ' . ":" . $key;
            $i++;
        } else {
            $update = $update . ", " . $key . ' = ' . ":" . $key;
            $i++; 
        }
    }

    $sql = "UPDATE $table SET $update where id = $id";
    // tt($sql);
    // exit();
    $query =$pdo->prepare($sql);
    $query->execute($arrData);
    dbCheckErr($query);
}
<<<<<<< HEAD

//delete in table
function delete($table, $id) {
    global $pdo;
    $sql = "DELETE FROM $table  where id = $id";
    $query =$pdo->prepare($sql);
    $query->execute();
    dbCheckErr($query);
}

$arrData = [
    'admin' => '1',
    'username' => '12903kl4',
    'email' => 'ujds@m',
    'password' => 'd123dfd43ghj'
];
tt(update('users', 1, $arrData));
delete('users',19);
tt(selectAll('users'));
=======
$arrData = [
    'admin' => '0',
    'username' => '12903sdfkl4',
    'email' => 'ujds@fsadm',
    'password' => 'dsf234123dfd43ghj'
];
update('users', 5, $arrData);
>>>>>>> 5c2c480 (добавлена обработка формы регистрации)


