<?php
  require_once 'header.php';
  $login = "";
  $surname = "";
  $name = "";
  $middle_name = "";
  $phone = "";
  $email = "";
  $birthday = "";
  $password = "";
  $password_rep = "";
  $section_select = "";
  $section_name = "";
  $report_check = "";
  $remember_password = FALSE;
  $snm = "";
  $divisions_array = array();
  
  if (isset($_POST['save_profile'])){
	$login = $_POST['login'];
	$surname = $_POST['surname'];
	$name = $_POST['name'];
	$middle_name = $_POST['middle_name'];
	$snm = sprintf("%s %s %s", $surname, $name, $middle_name);
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$password = $_POST['password'];
	$password_rep = $_POST['password_rep'];
	if(isset($_POST['report_check'])){
		$report_title = $_POST['report_title'];
	}
	else{
		$report_title = "Докладчиком не является";
	}
	if(isset($_POST['section_select'])){
		$section_select = $_POST['section_select'];
		$divisions_array = get_file_array($division_file);
		$section_name = $divisions_array[$section_select];
	}
	if(isset($_POST['remember_password'])){
		$remember_password = TRUE;
	}
	else{
		$remember_password = FALSE;
	}
}

?>

<div class="container">
  <h2>Профиль пользователя</h2>         
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Параметр</th>
        <th>Значение</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Логин</td>
        <td><?php echo $login ?></td>
      </tr>
      <tr>
        <td>Фамилия Имя Отчество</td>
        <td><?php echo $snm ?></td>
      </tr>
      <tr>
        <td>Контактный телефон</td>
        <td><?php echo $phone ?></td>
      </tr>
      <tr>
        <td>Электронная почта</td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td>Дата рождения</td>
        <td><?php echo $birthday ?></td>
      </tr>
      <tr>
        <td>Секция конференции</td>
        <td><?php echo $section_name ?></td>
      </tr>
      <tr>
        <td>Тема доклада</td>
        <td><?php echo $report_title ?></td>
      </tr>
      <?php
      	if($remember_password){
			echo "<tr>
        			<td>Пароль</td>
        			<td>$password</td>
      			</tr>";
		}
      ?>
    </tbody>
  </table>
</div>

<?php
  require_once 'footer.php';
?>