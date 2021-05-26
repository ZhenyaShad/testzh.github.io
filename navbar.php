<?php

?>
 <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
  	<img src="bird.jpg" alt="Logo" style="width:40px;">
  </a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Главная</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Страница сообщений 1</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Выпадающее меню
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Ссылка 1</a>
        <a class="dropdown-item" href="#">Ссылка 2</a>
        <a class="dropdown-item" href="#">Ссылка 3</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enterModal">Вход</button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#regModal">Регистрация</button></a>
    </li>
  </ul>
</nav> 