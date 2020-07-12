<?php if ( isset ($_SESSION['id']) ) : ?>
	Авторизован! <br/>
	Привет, <?php echo $_SESSION['login']; ?>!<br/>

	<a href="/login/logout.php">Выйти</a>

<?php else : ?>
Вы не авторизованы<br/>
<p><button><a href="/log">Авторизация</a></button></p>
<p><button><a href="/signup">Регистрация</a></button></p>
<?php endif; ?>