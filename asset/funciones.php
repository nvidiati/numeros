<?php 
/*function dia_anterior($fecha) 
{ 
    $sol = (strtotime($fecha) - 3600); 
   //return date('Y-m-d', $sol); 
    return strftime(" %A %#d, %B %Y", $sol);
} 

$fch = date('Y-m-d');  
echo dia_anterior($fch); 
*/
date_default_timezone_set('America/Santo_Domingo');
setlocale(LC_TIME, 'spanish', 'UTF-8');

//Variables reutilizables
$dia_actual = date('w');
// Para activar Columna del semanario
 $hoy = date('w');
 
//echo $hoy;
switch (TRUE){
	
//Lunes	
case ($hoy == 1):
$hoy_act = "ln";
$hoy_acth = "lnh";
break;

//Martes	
case ($hoy == 2):
$hoy_act = "mt";
$hoy_acth = "mth";
break;

//Miercoles	
case ($hoy == 3):
$hoy_act = "mc";
$hoy_acth = "mch";
break;

//Jueves	
case ($hoy == 4):
$hoy_act = "jv";
$hoy_acth = "jvh";
break;

//Viernes	
case ($hoy == 5):
$hoy_act = "vn";
$hoy_acth = "vnh";
break;

//Sabado	
case ($hoy == 6):
$hoy_act = "sb";
$hoy_acth = "sbh";
break;

//Domingo	
case ($hoy == 0):
$hoy_act = "dg";
$hoy_acth = "dgh";
break;

 }


function switchDays($nomLot,$horario){
	$lot=$nomLot;
	$hora=$horario;
	for($i = 0; $i < 7; $i++){                          
		echo "<li>";
 		if($i == 0 && $hora == "t"): echo "<b>T</b>"; endif;
 		if($i == 0 && $hora == "n"): echo "<b>N</b>"; endif;
       	switch ($i) {
        	case 0:
        		$t1 = $lot."_dom_t_1";
        		$t2 = $lot."_dom_t_2";
        		$t3 = $lot."_dom_t_3";

        		$n1 = $lot."_dom_n_1";
        		$n2 = $lot."_dom_n_2";
        		$n3 = $lot."_dom_n_3";
        		break;
        	
        	case 1:
        		$t1 = $lot."_lun_t_1";
        		$t2 = $lot."_lun_t_2";
        		$t3 = $lot."_lun_t_3";

        		$n1 = $lot."_lun_n_1";
        		$n2 = $lot."_lun_n_2";
        		$n3 = $lot."_lun_n_3";
        		break;

        	case 2:
        		$t1 = $lot."_mar_t_1";
        		$t2 = $lot."_mar_t_2";
        		$t3 = $lot."_mar_t_3";

        		$n1 = $lot."_mar_n_1";
        		$n2 = $lot."_mar_n_2";
        		$n3 = $lot."_mar_n_3";
        		break;

        	case 3:
        		$t1 = $lot."_mie_t_1";
        		$t2 = $lot."_mie_t_2";
        		$t3 = $lot."_mie_t_3";

        		$n1 = $lot."_mie_n_1";
        		$n2 = $lot."_mie_n_2";
        		$n3 = $lot."_mie_n_3";
        		break;

        	case 4:
        		$t1 = $lot."_jue_t_1";
        		$t2 = $lot."_jue_t_2";
        		$t3 = $lot."_jue_t_3";

        		$n1 = $lot."_jue_n_1";
        		$n2 = $lot."_jue_n_2";
        		$n3 = $lot."_jue_n_3";
        		break;
        	case 5:
        		$t1 = $lot."_vie_t_1";
        		$t2 = $lot."_vie_t_2";
        		$t3 = $lot."_vie_t_3";

        		$n1 = $lot."_vie_n_1";
        		$n2 = $lot."_vie_n_2";
        		$n3 = $lot."_vie_n_3";
        		break;

        	case 6:
        		$t1 = $lot."_sab_t_1";
        		$t2 = $lot."_sab_t_2";
        		$t3 = $lot."_sab_t_3";

        		$n1 = $lot."_sab_n_1";
        		$n2 = $lot."_sab_n_2";
        		$n3 = $lot."_sab_n_3";
        		break;
        }	

        if ($hora == "t"){
        ?>
		<div class="numb"><span id="<?php echo $t1; ?>"></span></div>
		<div class="numb"><span id="<?php echo $t2; ?>"></span></div>
		<div class="numb"><span id="<?php echo $t3; ?>"></span></div>	
		</li>
		<?php
        }elseif ($hora == "n"){
        ?>
		<div class="numb"><span id="<?php echo $n1; ?>"></span></div>
		<div class="numb"><span id="<?php echo $n2; ?>"></span></div>
		<div class="numb"><span id="<?php echo $n3; ?>"></span></div>	
		</li>
        <?php
        }else {
        	echo "Hubo un problema con la tanda de la loteria";
        }
        ?>
 

<?php    }


}	 
?>
