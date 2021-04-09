<html>
<head>
  <title>Матчинг игр</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/waiting_style.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- <link href="css/menu_style.css" rel="stylesheet" type="text/css" media="screen" /> -->
  
<?php

  if(!isset($_COOKIE['user'])) {
  header('Location: https://victoriouspleasanttrial.lekasnet.repl.co/waiting_false.php');
  }
?>  

</head>



<body>
  <div class="header">

    <?php 

      if (isset($_COOKIE['user'])) echo '    <div class="btn-group">
      <a class="button1" id="" href="index.php">←</a>

      </div>';

    ?>

    <?php

      if (isset($_COOKIE['user'])) echo "<p class='wtext'>Здравствуйте, <a class='wetext' href='#'>".$_COOKIE['user']."</a>! готовы поиграть? <a class='button' href='/redirect_t.php'>Выйти</a></p>";
      else echo "<a class='button' id='button' href='/login.php'>Войдите</a>";

    ?>
    
  </div>

  <div class="main">
    <div class="wait-menu">
      <p>Игроков онлайн:     14743</p>
      <p>Игроков в поиске:   712</p>
      <p>Ваш номер очереди:  #P3</p>
    </div>
    <div class="cssload-container">
	    <div class="cssload-whirlpool"></div>
    </div>
  </div>


</body>
</html>