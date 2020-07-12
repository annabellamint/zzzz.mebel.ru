<?php
//Форма регистрации пользователей
    // require "db.php";
    $data=$_POST;
    if (isset($data['do_signup'])) {
        //здесь регистрируем
        
        $arrors = array ();
        if (trim ($data['name']) ==''){
            $errors[] = 'Введите ваше имя!';
        }
        if (trim ($data['login']) ==''){
            $errors[] = 'Введите логин!';
        }
        if (trim ($data['email']) ==''){
            $errors[] = 'Введите email!';
        }
        if ($data['password'] ==''){
            $errors[] = 'Введите пароль!';
        }
        if ($data['password_2'] != $data['password']){
            $errors[] = 'Повторный пароль введен неверно!';
        }
        //Проверка существует ли уже в базе пользователь с таким именем, логинои с паролем
        if (R:: count('users', "name=?", array($data['name'])) >0) {
            $errors[] = 'Пользователь с таким именем уже существует';
        }
        if (R:: count('users', "login=?", array($data['login'])) >0) {
            $errors[] = 'Пользователь с таким логином уже существует';
        }
        if (R:: count('users', "email=?", array($data['email'])) >0) {
            $errors[] = 'Пользователь с таким email уже существует';
        }
        //проверка на логин и пароль закончена
        if (empty ($errors)) {
            //все хорошо, регистрируем
            $user = R::dispense('users');//Данная команда создает сама таблицу в БД с названием users
            $user -> name = $data ['name'];//Добавили новый столбец в таблицу в БД, здесь прописали куда добавлять данные. Если сами не создаем столбец в БД, а только пишем здесь оно не работает
            $user -> login = $data ['login'];
            $user -> email = $data ['email'];
            $user -> password = password_hash ($data ['password'], PASSWORD_DEFAULT);
            $user -> acess = "user";
            //$user -> join_date = time ();
            R:: store($user);
            echo '<div style="color:green;">Вы успешно зарегистрированы</div><hr>';
        }
        else {
            echo '<div style="color:red;">' . array_shift($errors) . '</div><hr>';
        }
    }
?>

<form action="/login/signup.php" method="POST">
<p>
<p><strong>Ваше имя:</strong></p>
<input type="text" name="name" value="<?php echo @$data ['name'];?>">
</p>
<p>
<p><strong>Ваш логин:</strong></p>
<input type="text" name="login" value="<?php echo @$data ['login'];?>">
</p>
<p><strong>Ваш email:</strong></p>
<input type="email" name="email" value="<?php echo @$data ['email'];?>">
</p>
<p><strong>Ваш пароль:</strong></p>
<input type="password" name="password" value="<?php echo @$data ['password'];?>">
</p>
<p><strong>Введите ваш пароль еще раз:</strong></p>
<input type="password" name="password_2" value="<?php echo @$data ['password_2'];?>">
</p>
<p><button type="submit" name="do_signup">Зарегистрироваться</button></p>
<p><button type="submit" formaction="/">На главную</button></p>
</form>