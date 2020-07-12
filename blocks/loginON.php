<?php
include ("header.php");
?>
<?php
    if (isset($_POST['login'])) {
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
    }
?>
<div>
<link rel="stylesheet" href="/blocks/css/style.css">
  </div>
  <div class="align">

    <div class="grid">
  
      <form action="/" method="POST" class="form login">
  
        <header class="login__header">
          <h3 class="login__title">Войти</h3>
        </header>
  
        <div class="login__body">
  
          <div class="form__field">
          <input required type="text" name="login" placeholder="Введите свой логиин">
          </div>
  
          <div class="form__field">
          <input required type="password" name="password" placeholder="А сюда свой пароль">
          </div>  
          <div class="login__footer">  
          <input type="submit" value="Вход">
  
          <p class="href"><a href="registrationON.php">Еще не зарегистрированы?</a></p>
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
print_r ($_POST);
if (isset($_POST)) {
  echo "Эта переменная определена, поэтому меня и напечатали.";
}
if (empty($_POST)) {
  echo "переменная не пуста";

  echo ("$_POST ('login')");
}

?>



<?php
$server = 'localhost';
$user = 'root';
$password = 'root';
$dblink = mysqli_connect($server, $user, $password);
if($dblink)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');

$database = 'dbbase';
$selected = mysqli_select_db($database, $dblink);
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');
?>











    <?php
include ("footer.php");
?>