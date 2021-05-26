 <?php
  require_once 'header.php';
  //$division_file = "ConferenceDivisions.txt";
  $divisions_array = array();
  
  $divisions_array = get_file_array($division_file);
  require_once 'navbar.php';
 ?>
 
 <div class="row">
  <div class="col-sm-4">
  	<?php require_once 'vertical_nav.php'; ?>
  </div>
  <div class="col-sm-8">
  	<?php require_once 'site_content.php'; ?>
  </div>
</div> 
 
<div class="modal" id="enterModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Введите логин и пароль</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
	<div class="modal-body">
      	<form action="message_page.php" class="was-validated">
    		<div class="form-group">
      			<label for="login">Логин:</label>
      			<input type="text" class="form-control" id="login" placeholder="Логин" name="login" pattern="[A-Za-z0-9_-]{3,15}" title="Может содержать латинские буквы, цифры, символы подчеркивания и тире), от 3 до 15 символов" required>
      			
    			<div class="invalid-feedback">Поле обязательно к заполнению. Может содержать латинские буквы, цифры, символы подчеркивания и тире), от 3 до 15 символов.</div>
    		</div>
    		<div class="form-group">
      			<label for="pwd">Пароль:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов" required>
      			<div class="invalid-feedback">Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов.</div>
    		</div>
    		
    		<div class="form-group form-check">
      			<label class="form-check-label">
        		<input class="form-check-input" type="checkbox" name="remember">Запомнить пароль 
      			</label>
    		</div>
    		<button type="submit" name="enter" class="btn btn-primary">Вход</button>
  		</form>
      </div>
	</div>
  </div>
</div>


<div class="modal fade" id="regModal">
	<div class="modal-dialog modal-dialog-centered">
    	<div class="modal-content">

      	<!-- Modal Header -->
      		<div class="modal-header">
        		<h4 class="modal-title">Регистрация</h4>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
      		</div>

      	<!-- Modal body -->
      		<div class="modal-body">
     
    			<form action="user_profile.php" method='post' class="was-validated">
    				<div class="form-group has-feedback">
      					<label for="login">Логин:</label>
      					<input type="text" class="form-control" id="login" placeholder="Логин" name="login" pattern="[A-Za-z0-9_-]{3,15}" title="Может содержать латинские буквы, цифры, символы подчеркивания и тире), от 3 до 15 символов"  required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению. Может содержать латинские буквы, цифры, символы подчеркивания и тире), от 3 до 15 символов</div>
    				</div>
    
    				<div class="form-group">
      					<label for="surname">Фамилия:</label>
      					<input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname" pattern="[А-Яа-яЁё]{3,15}" title="Содержит только буквы русского алфавита, длина от 3 до 15 символов"  required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
    				</div>
    
    				<div class="form-group">
      					<label for="name">Имя:</label>
      					<input type="text" class="form-control" id="name" placeholder="Имя" name="name" pattern="[А-Яа-яЁё]{3,15}" title="Содержит только буквы русского алфавита, длина от 3 до 15 символов" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
    				</div>
   
    				<div class="form-group">
      					<label for="middle_name">Отчество:</label>
      					<input type="text" class="form-control" id="middle_name" placeholder="Отчество" name="middle_name" pattern="[А-Яа-яЁё]{3,15}" title="Содержит только буквы русского алфавита, длина от 3 до 15 символов" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
   					</div>
   
   					<div class="form-group">
   	  					<label for="phone">Контактный телефон:</label>
     					<input type="tel" class="form-control" id="phone" placeholder="+70123456789" name="phone" pattern="[0-9+]{12}" title="Содержит только 11 цифр, первые 2 символа +7" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
    				</div>
    
    				<div class="form-group">
   	  					<label for="email">Адрес электронной почты:</label>
      					<input type="email" class="form-control" id="email" placeholder="Введите email" name="email" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
    				</div>
     
    				<div class="form-group">
      					<label for="birthday">Дата рождения:</label>
      					<input type="date" class="form-control" id="birthday" placeholder="Дата рождения" name="birthday">
   					</div>
   
   					<div class="form-group">
      					<label for="password">Пароль:</label>
      					<input type="password" class="form-control" id="password" placeholder="Введите пароль" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению. Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов</div>
    				</div>
   
   					<div class="form-group">  
      					<label for="password_rep">Повтор пароля:</label>
      					<input type="password" class="form-control" id="password_rep" placeholder="Повторите пароль" name="password_rep" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов" required>
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению. Содержит хотя-бы одну цифру, одну прописную букву, одну заглавную букву, не менее 6 символов</div>
    				</div>
   
    				<div class="form-group">
    					<label for="section_select">Список секций конференции:</label>
      					<select class="form-control" id="section_select" name="section_select">
      
<?php
	$selected_key = 0;
	foreach ($divisions_array as $key => $value){
		$division_name = $value;
		echo "<option value=$key ";
		if($key == $selected_key){
			echo "selected ";
		}
		echo " >$division_name</option>";
	}
?>
      </select>
    				</div>
    
    				<div class="form-group form-check">
      					<label class="form-check-label">
        					<input class="form-check-input" type="checkbox" name="report_check"  id="report_check"  onchange='report_checkChangeHandler()'>Делаю доклад 
      					</label>
    				</div>
    				
    				<div class="form-group" id="report_name_div" style="display: none;">
      					<label for="report_title">Тема доклада:</label>
      					<input type="text" class="form-control" id="report_title" placeholder="Тема доклада" name="report_title">
      					<div class="valid-feedback">Готово.</div>
      					<div class="invalid-feedback">Поле обязательно к заполнению.</div>
    				</div>
     
    				<div class="form-group form-check">
      					<label class="form-check-label">
        					<input class="form-check-input" type="checkbox" name="remember_password"> Запомнить пароль 
      					</label>
    				</div>
    				
    				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        				<button id="save_profile" name="save_profile" type="submit" class="btn btn-primary">Регистрация</button>
    				</div>
  				</form>
			</div>
		</div>
  </div>
</div>

<?php
  require_once 'footer.php';
?>

<script>
function report_checkChangeHandler(){
    var chk  = document.getElementById("report_check").checked;
    var newReport = document.getElementById("report_name_div");
    if(chk){
		newReport.style.display = "block";
	}
	else{
		newReport.style.display = "none";
	}
}
</script>