<header>
<<<<<<< HEAD
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a href=  <? = $_SERVER["HTTP_REFERER"] ?>
          <img id ="logotipo" src="imgs/Logotipo.png" width="120" height="120" title="INICIO"/>
        </a>
      </div>
    </nav>






=======
    <a href="<?=$_SERVER["HTTP_REFERER"]?>">
    	<img id ="logotipo" src="imgs/Logotipo.png" width="120" height="120" title="INICIO"/>
    </a>
    <?php
    	//if(isset($_SESSION['user'])) echo "->".$_SESSION['user'];
   ?>
    <h3>Titulo del header.</h3>


</header>
