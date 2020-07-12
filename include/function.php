<?php
include('db.php');

function schowProduct($product):string{
    $result = '';
    $temp= file_get_contents(__DIR__.'/../blocks/product.php');
    $search = array(
        '{{name}}',
        '{{description}}',
        '{{brand}}',
        '{{sell}}'
    );
    foreach ($product as $row) {
        $replace = array(
            $row['name'],
            $row['description'],
            $row['brand'],
            $row['sell']
        );
        $result.= str_replace($search,$replace,$temp);
    }
    return $result;
}

    function access():bool{
        global $db;
        if (isset($_SESSION['id'])) {
            $user = $db->select('users',['status'],['id'=>$_SESSION['id']])[0];
            if (isset($user['status']) and $user['status'] == 'ok') {
                return TRUE;
            }else {
                return FALSE;
            }
        }
    }

