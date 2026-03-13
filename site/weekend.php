<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Banca EA | Loteria Semanal</title>
	<link rel="stylesheet" href="../asset/css/dtl.css" />
    <link rel="stylesheet" href="../asset/css/foundation.css" />
    <link href='../asset/css/animate.css' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script> 
    <script src="../asset/js/funciones.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
    <script src="./include/js/fire.js"></script>
	
</head>
<body class="weekend">
    <div class="body_cont row">
   
        <section>
        	<div class="cont_out">
            <div class="cont_in">
                <!--Columna Izquierda -->
                <div class="large-6 columns izquierda"> 
                	<div class="legend_ttl rojo_grad rds30 animated slideInUp"><span id="leyenda"><?php include("include/fecha_act_site.html"); ?></span></div>
                               
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico ny"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_hoy_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="ny_hoy_t_2"></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_hoy_t_3"></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico real"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInLeft">
                                <b class="numbIn"><span id="lr_hoy_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInRight">
                                <b class="numbIn"><span id="lr_hoy_t_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInLeft">
                                <b class="numbIn"><span id="lr_hoy_t_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_hoy_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="na_hoy_t_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_hoy_t_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                   <!--====| TANDA NOCHE |====-->
                   <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico loteka"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><span id="lk_hoy_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInRight">
                                <b class="numbIn"><span id="lk_hoy_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><span id="lk_hoy_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico ny"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_hoy_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="ny_hoy_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_hoy_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_hoy_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="na_hoy_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_hoy_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico leisa"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><span id="qp_hoy_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInRight">
                                <b class="numbIn"><span id="qp_hoy_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><span id="qp_hoy_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="legend_T">TARDE</div>
                    <div class="legend_N">NOCHE</div>
                </div>
                <!--//Columna Izquierda -->
                
                
                <!--===========| DIA ANTERIOR |=========-->
                <!--Columna Derecha -->
                <div class="large-6 columns derecha"> 
                	<div class="legend_ttl azul_grad rds30 animated slideInUp"><?php include("include/fecha_ayer_site.html"); ?></div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico ny"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_ayer_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="ny_ayer_t_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_ayer_t_3"></span></b>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico real"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInLeft">
                                <b class="numbIn"><span id="lr_ayer_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInRight">
                                <b class="numbIn"><span id="lr_ayer_t_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInLeft">
                                <b class="numbIn"><span id="lr_ayer_t_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_ayer_t_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="na_ayer_t_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_ayer_t_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--====| TANDA NOCHE |====--> 
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico loteka"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><span id="lk_ayer_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInRight">
                                <b class="numbIn"><span id="lk_ayer_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><span id="lk_ayer_n_3"></span></b>
                            </div>
                        </div>
                    </div> 
                               
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico ny"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_ayer_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="ny_ayer_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="ny_ayer_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_ayer_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><span id="na_ayer_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><span id="na_ayer_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico leisa"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><span id="qp_ayer_n_1"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInRight">
                                <b class="numbIn"><span id="qp_ayer_n_2"></span></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><span id="qp_ayer_n_3"></span></b>
                            </div>
                        </div>
                    </div>
                                      
                </div>
                <!--//Columna Derecha -->        
            </div>
            </div>
        </section>
    </div>  
<!--    <script src="../asset/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script> -->
  </body>
</html>