// Initialize Firebase
  var config = {
    apiKey: "###########################",
    authDomain: "project-693128520333444136.firebaseapp.com",
    databaseURL: "http://bancaea-23f52.firebaseio.com",
    storageBucket: "project-693128520333444136.appspot.com",
    messagingSenderId: "991794841202"
  };
  firebase.initializeApp(config);
  var Firebase = firebase.database();


    //////// ULTIMO DOMINGO ////////
    var ultDom;
    var ultLun;
    var ultMar;
    var ultMie;
    var ultJue;
    var ultVie;
    var ultSab;

    var f = new Date();
    switch (f.getDay()) {
/////////// EN CASO DE SER DOMINGO ///////////
      case 0:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER LUNES ///////////
    case 1:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER MARTES ///////////
    case 2:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER MIERCOLES ///////////
    case 3:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER JUEVES ///////////
    case 4:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER VIERNES ///////////
    case 5:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
        break;
/////////// EN CASO DE SER SABADO ///////////
    case 6:
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultSab = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultVie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultJue = lm+'/'+ld+'/'+lyyy;          
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMie = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultMar = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultLun = lm+'/'+ld+'/'+lyyy;
                f.setDate(f.getDate() - 1);      
        var ld = f.getDate();
        var lm = f.getMonth()+1; //January is 0!
        var lyyy = f.getFullYear();
          var ultDom = lm+'/'+ld+'/'+lyyy;
    }

//////////////////////////////////
/////      ULTIMO DOMINGO    /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_dom_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_dom_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_dom_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryDomingo();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_dom_t_1").innerHTML = "";
      document.getElementById("ny_dom_t_2").innerHTML = "";
      document.getElementById("ny_dom_t_3").innerHTML = "";
    }
  });

  function masLoteryDomingo(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_dom_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_dom_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_dom_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_dom_t_1").innerHTML = respuesta.first;
        document.getElementById("na_dom_t_2").innerHTML = respuesta.second;
        document.getElementById("na_dom_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_dom_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_dom_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_dom_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_dom_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_dom_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_dom_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_dom_n_1").innerHTML = respuesta.first;
        document.getElementById("na_dom_n_2").innerHTML = respuesta.second;
        document.getElementById("na_dom_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultDom + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_dom_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_dom_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_dom_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////      ULTIMO LUNES      /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_lun_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_lun_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_lun_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryLunes();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_lun_t_1").innerHTML = "";
      document.getElementById("ny_lun_t_2").innerHTML = "";
      document.getElementById("ny_lun_t_3").innerHTML = "";
    }
  });

  function masLoteryLunes(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_lun_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_lun_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_lun_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_lun_t_1").innerHTML = respuesta.first;
        document.getElementById("na_lun_t_2").innerHTML = respuesta.second;
        document.getElementById("na_lun_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_lun_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_lun_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_lun_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_lun_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_lun_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_lun_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_lun_n_1").innerHTML = respuesta.first;
        document.getElementById("na_lun_n_2").innerHTML = respuesta.second;
        document.getElementById("na_lun_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultLun + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_lun_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_lun_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_lun_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////      ULIMO MARTES     /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_mar_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_mar_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_mar_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryMartes();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_mar_t_1").innerHTML = "";
      document.getElementById("ny_mar_t_2").innerHTML = "";
      document.getElementById("ny_mar_t_3").innerHTML = "";
    }
  });

  function masLoteryMartes(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_mar_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_mar_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_mar_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_mar_t_1").innerHTML = respuesta.first;
        document.getElementById("na_mar_t_2").innerHTML = respuesta.second;
        document.getElementById("na_mar_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_mar_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_mar_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_mar_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_mar_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_mar_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_mar_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_mar_n_1").innerHTML = respuesta.first;
        document.getElementById("na_mar_n_2").innerHTML = respuesta.second;
        document.getElementById("na_mar_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMar + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_mar_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_mar_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_mar_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////    ULIMO MIERCOLES     /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_mie_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_mie_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_mie_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryMiercoles();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_mie_t_1").innerHTML = "";
      document.getElementById("ny_mie_t_2").innerHTML = "";
      document.getElementById("ny_mie_t_3").innerHTML = "";
    }
  });

  function masLoteryMiercoles(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_mie_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_mie_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_mie_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_mie_t_1").innerHTML = respuesta.first;
        document.getElementById("na_mie_t_2").innerHTML = respuesta.second;
        document.getElementById("na_mie_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_mie_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_mie_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_mie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_mie_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_mie_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_mie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_mie_n_1").innerHTML = respuesta.first;
        document.getElementById("na_mie_n_2").innerHTML = respuesta.second;
        document.getElementById("na_mie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultMie + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_mie_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_mie_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_mie_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////      ULTIMO JUEVES     /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_jue_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_jue_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_jue_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryJueves();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_jue_t_1").innerHTML = "";
      document.getElementById("ny_jue_t_2").innerHTML = "";
      document.getElementById("ny_jue_t_3").innerHTML = "";
    }
  });

  function masLoteryJueves(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_jue_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_jue_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_jue_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_jue_t_1").innerHTML = respuesta.first;
        document.getElementById("na_jue_t_2").innerHTML = respuesta.second;
        document.getElementById("na_jue_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_jue_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_jue_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_jue_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_jue_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_jue_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_jue_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_jue_n_1").innerHTML = respuesta.first;
        document.getElementById("na_jue_n_2").innerHTML = respuesta.second;
        document.getElementById("na_jue_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultJue + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_jue_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_jue_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_jue_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////     ULTIMO VIERNES     /////
//////////////////////////////////
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_vie_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_vie_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_vie_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoteryViernes();

    }else{
      //Si no hay numeros para mostrar
        document.getElementById("ny_vie_t_1").innerHTML = "";
        document.getElementById("ny_vie_t_2").innerHTML = "";
        document.getElementById("ny_vie_t_3").innerHTML = "";
    }
  });

  function masLoteryViernes(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_vie_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_vie_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_vie_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_vie_t_1").innerHTML = respuesta.first;
        document.getElementById("na_vie_t_2").innerHTML = respuesta.second;
        document.getElementById("na_vie_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_vie_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_vie_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_vie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_vie_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_vie_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_vie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_vie_n_1").innerHTML = respuesta.first;
        document.getElementById("na_vie_n_2").innerHTML = respuesta.second;
        document.getElementById("na_vie_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultVie + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_vie_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_vie_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_vie_n_3").innerHTML = respuesta.third;
      });
  }

//////////////////////////////////
/////      ULTIMO SABADO     /////
////////////////////////////////// 
  Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "NEW YORKt").on('child_added', function(snapshot){
    var respuesta = snapshot.val();
    document.getElementById("ny_sab_t_1").innerHTML = respuesta.first;
    document.getElementById("ny_sab_t_2").innerHTML = respuesta.second;
    document.getElementById("ny_sab_t_3").innerHTML = respuesta.third;

    if (respuesta.first.length > 0) {
      //Si hay numeros para mostrar
      masLoterySabado();

    }else{
      //Si no hay numeros para mostrar
      document.getElementById("ny_sab_t_1").innerHTML = "";
      document.getElementById("ny_sab_t_2").innerHTML = "";
      document.getElementById("ny_sab_t_3").innerHTML = "";
    }
  });

  function masLoterySabado(){

      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "LOTERIAL REALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lr_sab_t_1").innerHTML = respuesta.first;
        document.getElementById("lr_sab_t_2").innerHTML = respuesta.second;
        document.getElementById("lr_sab_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "NACIONALt").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_sab_t_1").innerHTML = respuesta.first;
        document.getElementById("na_sab_t_2").innerHTML = respuesta.second;
        document.getElementById("na_sab_t_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "LOTEKAn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("lk_sab_n_1").innerHTML = respuesta.first;
        document.getElementById("lk_sab_n_2").innerHTML = respuesta.second;
        document.getElementById("lk_sab_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "NEW YORKn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("ny_sab_n_1").innerHTML = respuesta.first;
        document.getElementById("ny_sab_n_2").innerHTML = respuesta.second;
        document.getElementById("ny_sab_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "NACIONALn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("na_sab_n_1").innerHTML = respuesta.first;
        document.getElementById("na_sab_n_2").innerHTML = respuesta.second;
        document.getElementById("na_sab_n_3").innerHTML = respuesta.third;
      });
      Firebase.ref("lotteryNumbers").orderByChild("filter3").equalTo(ultSab + "QUINIELA PALEn").on('child_added', function(snapshot){
        var respuesta = snapshot.val();
        document.getElementById("qp_sab_n_1").innerHTML = respuesta.first;
        document.getElementById("qp_sab_n_2").innerHTML = respuesta.second;
        document.getElementById("qp_sab_n_3").innerHTML = respuesta.third;
      });
  }