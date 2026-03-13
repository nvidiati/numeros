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
	
</head>
<body class="weekend">
<script src="https://www.gstatic.com/firebasejs/3.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyD84pBnMW3et58mEPiCYZiyMuRmiRi1Bb8",
    authDomain: "project-693128520333444136.firebaseapp.com",
    databaseURL: "https://project-693128520333444136.firebaseio.com",
    storageBucket: "project-693128520333444136.appspot.com",
    messagingSenderId: "991794841202"
  };
  firebase.initializeApp(config);
  var Firebase = firebase.database();

  //FORMATENADO FECHA //
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth()+1; //January is 0!
    var yyyy = hoy.getFullYear();

    hoy = mm+'/'+dd+'/'+yyyy;

    var date = new Date();
    date.setDate(date.getDate() - 1);
    var da = date.getDate();
    var ma = date.getMonth()+1; //January is 0!
    var yyya = date.getFullYear();

   var ayer = ma+'/'+da+'/'+yyya;
  
  ////////--LOTERIAS DE AYER--////////

 //New York Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_ayer_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_ayer_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_ayer_t_3").innerHTML = respuesta.third;
  });

   //Loteria Real Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"LOTERIAL REALt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("lr_ayer_t_1").innerHTML = respuesta.first;
    document.getElementById("lr_ayer_t_2").innerHTML = respuesta.second;
    document.getElementById("lr_ayer_t_3").innerHTML = respuesta.third;
  });

   //Nacional Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"NACIONALt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("na_ayer_t_1").innerHTML = respuesta.first;
    document.getElementById("na_ayer_t_2").innerHTML = respuesta.second;
    document.getElementById("na_ayer_t_3").innerHTML = respuesta.third;
  });

   //Loteka Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"LOTEKAn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("lk_ayer_n_1").innerHTML = respuesta.first;
    document.getElementById("lk_ayer_n_2").innerHTML = respuesta.second;
    document.getElementById("lk_ayer_n_3").innerHTML = respuesta.third;
  });

     //New York Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"NEW YORKn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_ayer_n_1").innerHTML = respuesta.first;
    document.getElementById("ny_ayer_n_2").innerHTML = respuesta.second;
    document.getElementById("ny_ayer_n_3").innerHTML = respuesta.third;
  });

     //Nacional Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"NACIONALn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("na_ayer_n_1").innerHTML = respuesta.first;
    document.getElementById("na_ayer_n_2").innerHTML = respuesta.second;
    document.getElementById("na_ayer_n_3").innerHTML = respuesta.third;
  });

       //Super Real Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ayer +"QUINIELA PALEn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("qp_ayer_n_1").innerHTML = respuesta.first;
    document.getElementById("qp_ayer_n_2").innerHTML = respuesta.second;
    document.getElementById("qp_ayer_n_3").innerHTML = respuesta.third;
  });

////////--FIN LOTERIAS DE AYER--////////
////////--LOTERIAS DE HOY--////////

 //New York Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_hoy_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_hoy_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_hoy_t_3").innerHTML = respuesta.third;
  });

   //Loteria Real Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"LOTERIAL REALt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("lr_hoy_t_1").innerHTML = respuesta.first;
    document.getElementById("lr_hoy_t_2").innerHTML = respuesta.second;
    document.getElementById("lr_hoy_t_3").innerHTML = respuesta.third;
  });

   //Nacional Ayer Tarde
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"NACIONALt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("na_hoy_t_1").innerHTML = respuesta.first;
    document.getElementById("na_hoy_t_2").innerHTML = respuesta.second;
    document.getElementById("na_hoy_t_3").innerHTML = respuesta.third;
  });

   //Loteka Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"LOTEKAn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("lk_hoy_n_1").innerHTML = respuesta.first;
    document.getElementById("lk_hoy_n_2").innerHTML = respuesta.second;
    document.getElementById("lk_hoy_n_3").innerHTML = respuesta.third;
  });

     //New York Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"NEW YORKn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_hoy_n_1").innerHTML = respuesta.first;
    document.getElementById("ny_hoy_n_2").innerHTML = respuesta.second;
    document.getElementById("ny_hoy_n_3").innerHTML = respuesta.third;
  });

     //Nacional Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"NACIONALn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("na_hoy_n_1").innerHTML = respuesta.first;
    document.getElementById("na_hoy_n_2").innerHTML = respuesta.second;
    document.getElementById("na_hoy_n_3").innerHTML = respuesta.third;
  });

       //Super Real Ayer Noche
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(hoy +"QUINIELA PALEn").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("qp_hoy_n_1").innerHTML = respuesta.first;
    document.getElementById("qp_hoy_n_2").innerHTML = respuesta.second;
    document.getElementById("qp_hoy_n_3").innerHTML = respuesta.third;
  });
////////--LOTERIAS DE HOY--////////
</script>

    <div class="body_cont row" style="margin-top:50px;">
   
        <section>
        	<div class="cont_out">
            <div class="cont_in">
                <!--Columna Izquierda -->
                <div class="large-6 columns izquierda"> 
                	<div class="legend_ttl rojo_grad rds30 animated slideInUp"><?php include("include/fecha_act_site.html"); ?></div>
                               
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
                                <b class="numbIn"><?php echo $row_Dia_Actual_Real['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Real['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltrel  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Real['tercer']; ?></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional['tercer']; ?></b>
                            </div>
                        </div>
                    </div>
                    
                   <!--====| TANDA NOCHE |====-->
                   <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico loteka"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Loteka['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Loteka['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ltk  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Loteka['tercer']; ?></b>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico ny"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_NY_nch['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_NY_nch['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_NY_nch['tercer']; ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico nacional"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional_nch['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional_nch['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt ncn  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Nacional_nch['tercer']; ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="row mB clearfix">
                        <div class="large-6 columns bg_grisVl lg_ico leisa"></div>
                        <div class="large-6 columns numb_col">
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Leisa['primer']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInRight">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Leisa['segundo']; ?></b>
                            </div>
                            <div class="medium-4 large-4 columns numb_Lt leis  animated fadeInLeft">
                                <b class="numbIn"><?php echo $row_Dia_Actual_Leisa['tercer']; ?></b>
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
                	<div class="legend_ttl azul_grad rds30 animated slideInUp"><?php include("include/fecha_ayer_site.php"); ?></div>
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
    <script src="../asset/js/foundation.min.js"></script>
   <script>
      $(document).foundation();
    </script>
  </body>
</html>