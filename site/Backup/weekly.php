<?php require_once('../Connections/ealeaman_admin.php'); ?>
<?php include("../asset/funciones.php"); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

/*
* FECHA ACTUAL MENOS 4 HORAS
*/
mysql_select_db($database_ealeaman_admin, $ealeaman_admin);
$fechaActu = "SELECT DATE_ADD(NOW(), INTERVAL -4 HOUR)";
$fechaActual = mysql_query($fechaActu, $ealeaman_admin) or die(mysql_error());
$row_fechaActual = mysql_fetch_assoc($fechaActual);

$fchActual = explode(" ", $row_fechaActual['DATE_ADD(NOW(), INTERVAL -4 HOUR)']);
$fchActual_0 = $fchActual[0]; 
//echo $fchActual_0;

/*
* DIA ACTUAL MENOS 4 HORAS
*/
mysql_select_db($database_ealeaman_admin, $ealeaman_admin);
$diaActu = "SELECT WEEKDAY('$fchActual_0')";
$diaActual = mysql_query($diaActu, $ealeaman_admin) or die(mysql_error());
$row_diaActual = mysql_fetch_assoc($diaActual);

$dActual = explode(" ", $row_diaActual["WEEKDAY('$fchActual_0')"]);
$dActual_0 = $dActual[0]; 

/*
* FIN
*/

$loteria_weekly_Dia_Semana = "";
if (isset($_POST[''])) {
  $loteria_weekly_Dia_Semana = $_POST[''];
}

$ciclo_weekly_Dia_Semana = "";
if (isset($_POST[''])) {
  $ciclo_weekly_Dia_Semana = $_POST[''];
}

$dsemana_weekly_Dia_Semana = "";
if (isset($_POST[''])) {
  $dsemana_weekly_Dia_Semana = $_POST[''];
}

function LoadData($loteria, $ciclo, $database_ealeaman_admin, $ealeaman_admin){
	
	$loteria_weekly_Dia_Semana = $loteria;
	$ciclo_weekly_Dia_Semana = $ciclo;
	
	mysql_select_db($database_ealeaman_admin, $ealeaman_admin);
	$query_Dia_Semana = sprintf("SELECT * FROM dias WHERE dias.id_ciclo = %s AND dias.id_loteria = %s ORDER BY dias.id_dia DESC",
	GetSQLValueString($ciclo_weekly_Dia_Semana, "int"),
	GetSQLValueString($loteria_weekly_Dia_Semana, "int"));
	$Dia_Semana = mysql_query($query_Dia_Semana, $ealeaman_admin) or die(mysql_error());
	
	//$row_Dia_Semana = mysql_fetch_assoc($Dia_Semana);
	$totalRows_Dia_Semana = mysql_num_rows($Dia_Semana);
		
	
	return $Dia_Semana;
	
}
function LoadDataAct($loteria, $ciclo, $database_ealeaman_admin, $ealeaman_admin){
	
	$loteria_weekly_Dia_Semana = $loteria;
	$ciclo_weekly_Dia_Semana = $ciclo;
	
	mysql_select_db($database_ealeaman_admin, $ealeaman_admin);
	$fechaActu = "SELECT DATE_ADD(NOW(), INTERVAL -4 HOUR)";
	$fechaActual = mysql_query($fechaActu, $ealeaman_admin) or die(mysql_error());
	$row_fechaActual = mysql_fetch_assoc($fechaActual);
	
	$fchActual = explode(" ", $row_fechaActual['DATE_ADD(NOW(), INTERVAL -4 HOUR)']);
	$fchActual_0 = $fchActual[0]; 
		//CURRENT_DATE() xxx> Para Local
		//'$fchActual_0' xxx> para el servidor
		
	$query_Dia_Semana = sprintf("SELECT * FROM dias WHERE fecha = '$fchActual_0' AND  dias.id_ciclo = %s AND dias.id_loteria = %s ORDER BY dias.id_dia DESC",
	GetSQLValueString($ciclo_weekly_Dia_Semana, "int"),
	GetSQLValueString($loteria_weekly_Dia_Semana, "int"));
	$Dia_SemanaAct = mysql_query($query_Dia_Semana, $ealeaman_admin) or die(mysql_error());
	
	//$row_Dia_Semana = mysql_fetch_assoc($Dia_Semana);
	$totalRows_Dia_Semana = mysql_num_rows($Dia_SemanaAct);
	
	return $Dia_SemanaAct;
}

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
	<script src="../asset/js/vendor/modernizr.js"></script>
    <script src="../asset/js/funciones.js"></script>
    
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
                                 <?php 
					$dn = date('w'); 				
					$Dia_Semana = LoadData(1,1, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(1,1, $database_ealeaman_admin, $ealeaman_admin);
					//$dActual_0
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
                                  	<?php if($i == 0): ?>
                                		<b>T</b>
                               		 <?php endif ?>
                                         
                                     	<?php 
							 
                                                        if($i == $dn){ 
								//echo date("Y-m-d H:i:s");
								 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
							     
								       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
										<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
									<?php break; endif ?>
									
								<?php }//end while 
                                                        } 
                                                        else
                                                        {
                                                        
								while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
							     
								       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
										<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
									<?php break; endif ?>
									
								<?php }	//end while 2
                                                        }
						?> 
                                </li>
                                 <?php } ?>
                            </ul>
                            <ul class=" amar result_weekly">
                                <li class="bg_grisVl lg_ico real"></li>
                                 <?php 
								
					$Dia_Semana = LoadData(3,1, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(3,1, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
						
				?>
                                <li>
						<?php if($i == 0): ?>
                                                        <b>T</b>
                                                <?php endif ?>
                                                <?php 
							 
                                                        if($i == $dn){ 
							
								 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
							     
								       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
										<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
									<?php break; endif ?>
									
								<?php }//end while 
                                                        } 
                                                        else
                                                        {
                                                        
								while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
							     
								       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
										<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
										<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
									<?php break; endif ?>
									
								<?php }	//end while 2
                                                        }
						?> 
                                </li>
                                 <?php } ?>
                            </ul>
                            <ul  class=" verde result_weekly">
                                <li class=" bg_grisVl lg_ico nacional"></li>
                                 <?php 
								
					$Dia_Semana = LoadData(2,1, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(2,1, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
						 <?php if($i == 0): ?>
                                                	<b>T</b>
                                                <?php endif ?>
                                     <?php 
						
						if($i == $dn){ 
						
							 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
									<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }//end while 
						} 
						else
						{
						
							while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
									<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }	//end while 2
						}
					?> 
                                </li>
                                 <?php } ?>
                            </ul>
                            
                            <!--========| Loterias Noche |=============-->
                            
                            <ul class=" azul result_weekly">
                                <li class="bg_grisVl lg_ico loteka"></li>
                                 <?php 
								
					$Dia_Semana = LoadData(5,2, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(5,2, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
						 <?php if($i == 0): ?>
                                                	<b>N</b>
                                                <?php endif ?>
                                     <?php 
						
						if($i == $dn){ 
						
							 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
									<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }//end while 
						} 
						else
						{
						
							while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
									<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }	//end while 2
						}
					?> 
                                </li>
                                 <?php } ?>
                            </ul> 
                            <ul  class=" verde result_weekly">
                                <li class="bg_grisVl lg_ico ny"></li>
                                <?php 
								
					$Dia_Semana = LoadData(1,2, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(1,2, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
						 <?php if($i == 0): ?>
                                                	<b>N</b>
                                                <?php endif ?>
                                     <?php 
						
						if($i == $dn){ 
						
							 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
									<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }//end while 
						} 
						else
						{
						
							while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
									<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }	//end while 2
						}
					?> 
                                </li>
                                 <?php } ?>
                            </ul>
                            <ul  class=" verde result_weekly">
                                <li class="bg_grisVl lg_ico nacional"></li>
                                <?php 
								
					$Dia_Semana = LoadData(2,2, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(2,2, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
						 <?php if($i == 0): ?>
                                                	<b>N</b>
                                                <?php endif ?>
                                     <?php 
						
						if($i == $dn){ 
						
							 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
									<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }//end while 
						} 
						else
						{
						
							while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
									<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }	//end while 2
						}
					?> 
                                </li>
                                 <?php } ?>
                            </ul>
                            <ul class=" rojo result_weekly">
                                <li class="bg_grisVl lg_ico leisa"></li>
                                <?php 
								
					$Dia_Semana = LoadData(4,2, $database_ealeaman_admin, $ealeaman_admin);
					$Dia_SemanaAct = LoadDataAct(4,2, $database_ealeaman_admin, $ealeaman_admin);
					
					for($i = 0; $i < 7; $i++){
						mysql_data_seek($Dia_Semana, 0);
						mysql_data_seek($Dia_SemanaAct, 0);
				?>
                                <li>
						 <?php if($i == 0): ?>
                                                	<b>N</b>
                                                <?php endif ?>
                                     <?php 
						
						if($i == $dn){ 
						
							 while ($row_Dia_Semana = mysql_fetch_assoc($Dia_SemanaAct)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana'] && $i == $dn): ?>
									<div class="numb"><?php  echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }//end while 
						} 
						else
						{
						
							while ($row_Dia_Semana = mysql_fetch_assoc($Dia_Semana)) {  ?>
						     
							       <?php if($i == $row_Dia_Semana['DiaSemana']): ?>
									<div class="numb"><?php echo $row_Dia_Semana['primer']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['segundo']; ?></div>
									<div class="numb"><?php echo $row_Dia_Semana['tercer']; ?></div>
								<?php break; endif ?>
								
							<?php }	//end while 2
						}
					?> 
                                </li>
                                 <?php } ?>
                            </ul>
                    </div>                
                </div>    
            </div>
            </div>
        </section>
    </div>
    
    <script src="../asset/js/foundation.min.js"></script>
   <script>
      $(document).foundation();
    </script>
  </body>
</html>
<?php
mysql_free_result($Dia_Semana);
?>