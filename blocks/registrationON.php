<?php
include ("header.php");
?>
<?php
//Форма регистрации пользователей
    // require "db.php";
    //$data=$_POST;
    /*if (isset($data['do_signup'])) {
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
        }*/
        //Проверка существует ли уже в базе пользователь с таким именем, логинои с паролем
        /*if (R:: count('users', "name=?", array($data['name'])) >0) {
            $errors[] = 'Пользователь с таким именем уже существует';
        }
        if (R:: count('users', "login=?", array($data['login'])) >0) {
            $errors[] = 'Пользователь с таким логином уже существует';
        }
        if (R:: count('users', "email=?", array($data['email'])) >0) {
            $errors[] = 'Пользователь с таким email уже существует';
        }*/
        //проверка на логин и пароль закончена
        /*if (empty ($errors)) {
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
        }*/
    //}
?>
<?php
$data=$_POST;
 if (isset($data['button'])) {
  $data ->insert (
    'users',
    [
        "name"=> $data ['name'],
        "login"=>$data ['login'],
        "email"=> $data ['email'],
        "password"=> $data ['password'],
        "password_2"=> $data ['password_2'],
    ]
    );
 }

if (isset($data)) {
  echo "Эта переменная определена, поэтому меня и напечатали.";
}
?>
<div>
<link rel="stylesheet" href="/blocks/css/style.css">
  </div>
  <div class="align">

    <div class="grid">
  
      <form action="/module.categiry.php" method="POST" class="form login">
  
        <header class="login__header">
          <h3 class="login__title">Регистрация</h3>
        </header>
  
        <div class="login__body">
  
          <div class="form__field">
          <input required type="text" name="name" placeholder="Ваше имя" value="<?php echo @$data ['name'];?>">
          </div>
  
          <div class="form__field">
          <input required type="text" name="login" placeholder="Ваш логин" value="<?php echo @$data ['login'];?>">
          </div> 

          <div class="form__field">
          <input required type="text" name="email" placeholder="Ваш имейл" value="<?php echo @$data ['email'];?>">
          </div>

          <div class="form__field">
          <input required type="password" name="password" placeholder="Ваш пароль" value="<?php echo @$data ['password'];?>">
          </div>

          <div class="form__field">
          <input required type="password" name="password_2" placeholder="Введите пароль еще раз" value="<?php echo @$data ['password_2'];?>">
          </div>






          <div class="login__footer">  
          <input type="submit" name="button" value="Зарегистрироваться">
  
          <!--<p class="href"><a href="module/signup.php">Еще не зарегистрированы?</a></p>-->
          </div>
  
        </div>
  
        <!--<footer class="login__footer">-->
          <!--<input type="submit" value="Вход">-->
  
          <!--<p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>-->
        <!--</footer>-->
  
      </form>
  
    </div>
  </div>
    <?php
include ("footer.php");
?>
<?php
 //print_r $data;


?>


<!--<form action="/login/signup.php" method="POST">
<p>
<p><strong>Ваше имя:</strong></p>
<input type="text" name="name" value="<?php// echo @$data ['name'];?>">
</p>
<p>
<p><strong>Ваш логин:</strong></p>
<input type="text" name="login" value="<?php// echo @$data ['login'];?>">
</p>
<p><strong>Ваш email:</strong></p>
<input type="email" name="email" value="<?php// echo @$data ['email'];?>">
</p>
<p><strong>Ваш пароль:</strong></p>
<input type="password" name="password" value="<?php// echo @$data ['password'];?>">
</p>
<p><strong>Введите ваш пароль еще раз:</strong></p>
<input type="password" name="password_2" value="<?php// echo @$data ['password_2'];?>">
</p>
<p><button type="submit" name="do_signup">Зарегистрироваться</button></p>
<p><button type="submit" formaction="/">На главную</button></p>
</form>--?





















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