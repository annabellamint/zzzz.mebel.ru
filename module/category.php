<?php

if (access()) {
    $cat = $db->select('category', ['id', 'name']);
    $form = "<form method='post'>";
    $form .= "<select name='category'>";
    $form .= "<option>Выберите категорию:</option>";
    foreach ($cat as $row) {
        $form .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    $form .= "</select>";
    $form .= "<p><input type='submit' value='Выбрать' name='button'></p>";
    $form .= "</form>";
    echo $form;

    if (isset($_POST['category'])) {
        $product = $db->select('catalog', '*', ['category' => $_POST['category']]);
        echo schowProduct($product);
    } else {
        $product = $db->select('catalog', '*');
        echo schowProduct($product);
    }
}else {
    header('Location: /');
}


// Добавление записей
/*$result = $db->insert (
    'user',
    [
        "name"=> "Test",
        "email"=> "Test",
        "login"=> "Test",
        "pass"=> "12345",
        "acess"=> "user",
    ]
    );
    //echo $result;
    print_r ($db->error());*/
    

// Редактирование записей
    /*$result = $db->update (
        'user',
        [
            "name"=> "Test11",
            "email"=> "Test",
            "login"=> "Test",
            "pass"=> "12345",
            "acess"=> "user",
        ],
        [
            'id'=>11
        ]
        );
        echo $result;
        print_r ($db->error());*/
    
// Удаление записей
    /*$result = $db->delete ('user',
    [
        'id'=>11
    ]
    )*/
?>
