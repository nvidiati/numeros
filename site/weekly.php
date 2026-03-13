<?php 

include("../asset/funciones.php"); 

// API PARA CAPTURA DE WEEKLY
$input = 'http://api.screenshotlayer.com/api/capture?access_key=8e326b7ae49fd593d8fdb35784373644&url=http://estevezalemancbea.com/front_numb/site/weekly.php&viewport=1440x900&width=1024&secret_key=ac88477f5a88c4c3d02ecec3f6945b4b&format=PNG&ttl=86400';
$output = 'include/screenshot.png';
file_put_contents($output, file_get_contents($input));

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Banca EA | Semanario</title>
	<link rel="stylesheet" href="../asset/css/dtl.css" />
	<link rel="stylesheet" href="../asset/css/foundation.css" />
    <link href='../asset/css/animate.css' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
    <script src="../asset/js/funciones.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
    <script src="./include/js/weeklyFire.js"></script>
    
</head>
<body class="weekly">
    <div class="body_cont row">
    
        <section>
        	<div class="cont_out">
            <div class="cont_in">
                <!--Columna Izquierda --> 
                <!--div class="legend_ttl rojo_grad rds30 animated slideInUp">SEMANARIO<br>
                
</div-->
                           
                <div class="row clearfix animated zoomIn ">
               		<div class="<?php echo $hoy_acth;?>">
                            <ul class="head_sm">
                                <li> </li>
                                <li class="azul_grad_osc">DOMINGO</li>
                                <li class="azul_grad_osc">LUNES</li>
                                <li class="azul_grad_osc">MARTES</li>
                                <li class="azul_grad_osc">MIERCOLES</li>
                                <li class="azul_grad_osc">JUEVES</li>
                                <li class="azul_grad_osc">VIERNES</li>
                                <li class="azul_grad_osc">SABADO</li>
                                
                            </ul>
                    	</div>
                    	<div class="<?php echo $hoy_act;?>">
                        	
                            <ul  class=" verde result_weekly ">
                            	
                                <li class=" bg_grisVl lg_ico ny"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("ny","t"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                            <ul class=" amar result_weekly">
                                <li class="bg_grisVl lg_ico real"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("lr","t"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                            <ul  class=" verde result_weekly">
                                <li class=" bg_grisVl lg_ico nacional"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("na","t"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                            
                            <!--========| Loterias Noche |=============-->
                            
                            <ul class=" azul result_weekly">
                                <li class="bg_grisVl lg_ico loteka"></li>
                    
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("lk","n"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul> 
                            <ul  class=" verde result_weekly">
                                <li class="bg_grisVl lg_ico ny"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("ny","n"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                            <ul  class=" verde result_weekly">
                                <li class="bg_grisVl lg_ico nacional"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("na","n"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                            <ul class=" rojo result_weekly">
                                <li class="bg_grisVl lg_ico leisa"></li>
                                <!--// LLAMA FUNCION CASE  //-->
                                <?php switchDays("qp","n"); ?>
                                <!--// LLAMA FUNCION CASE  //-->
                            </ul>
                    </div>                
                </div>    
            </div>
            </div>
        </section>
    </div>
<img id="screenshot" src="include/screenshot.png" width="100%">
    
   <script src="../asset/js/foundation.min.js"></script>
   <script>
      $(document).foundation();
    </script>
  </body>
</html>