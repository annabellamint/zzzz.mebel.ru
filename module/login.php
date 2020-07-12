<?php
    /*if (isset($_POST['login'])) {
        $errors = array();
        $user = $db->select('users','*',['name'=>$_POST['login']])[0]; //если вытаскиваешь с базы 1 элемент то добавив [0] убирается 1 уровень массива
        if ($user) {
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION = $user;
                header('Location: /category');
            }else {
                $errors[] = 'Неверно введен пароль';
            } 
        }else {
            $errors[] = 'Пользователь с таким логином не найден';
        }
        if ( ! empty ($errors)) {
            echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
        }
    }*/

    //$data=$_POST;
    // if (isset ($data['do_login'])) {
    //     $errors = array();
    //     $user = R:: findOne ('users', 'login=?', array($data['login']));
    //     if ($user) {
    //         //var_dump($user);
    //         //логин существует, проверяем пароль
    //         if (password_verify($data['password'], $user->password)) {
    //             //все хорошо, логиним пользователя
    //             $_SESSION ['logged_user'] = $user;
    //             echo '<div style="color:green;">Вы авторизованы</br> Можете перейти на <a href="/">главную</a> страницу</div><hr>';
    //         }
    //     else {
    //         $errors[] = 'Неверно введен пароль';
    //     }
    //     }
    //     else {
    //         $errors[] = 'Пользователь с таким логином не найден';
    //     }
    //     if ( ! empty ($errors)) {
    //         echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
    //     }
    // }
?>
<form method="POST">
<p>
<p><strong>Логин:</strong></p>
<input required type="text" name="login" placeholder="Введите свой логиин">
</p>
<p><strong>Пароль:</strong></p>
<input required type="password" name="password" placeholder="А сюда свой пароль">
</p>
<p><button type="submit">Вход</button></p>
</form>