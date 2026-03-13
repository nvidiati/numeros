// JavaScript Document
HideOrShow = function(obj,AllowShow){
	if (AllowShow)
     	$(obj).show();
		else $(obj).hide();
};

EnabledDisabled = function(obj,Enable){
    var listSelect =$(obj).find("select");		
    listSelect.each(function() {
        if (!Enable){
    		$(this).attr("disabled","disabled");
            $(this).parent().addClass("selectdisabled");
		} else {
			$(this).removeattr("disabled");
            $(this).parent().removeClass("selectdisabled");
			}
		});     		
	
	};
	
	
$(function() {
	  //enable_cb();
	  $("#ckbNY").click(enable_cb_ny);
	  $("#ckbReal").click(enable_cb_real);
	  $("#ckbLei").click(enable_cb_lei);
	  $("#ckbLtk").click(enable_cb_ltk);
	  $("#ckbNYnch").click(enable_cb_ny_nch);
	  $("#ckbNacnch").click(enable_cb_nac_nch);
	  $("#ckbNac").click(enable_cb_nac);
});

function enable_cb_ny() {
	
	  if (this.checked) {
		  
		$("#NewYork select.clear_input").removeAttr("disabled");
		$("#NewYork div.numb_Lt ").removeClass("selectdisabled");
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioNY").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#NewYork select.clear_input').val('');		
		$("#NewYork div.numb_Lt").addClass("selectdisabled");
		$("#NewYork select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioNY").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}
function enable_cb_real() {
	
	  if (this.checked) {
		  
		$("#Lreal select.clear_input").removeAttr("disabled");
		$("#Lreal div.numb_Lt ").removeClass("selectdisabled");
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioRL").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#Lreal select.clear_input').val('');		
		$("#Lreal div.numb_Lt").addClass("selectdisabled");
		$("#Lreal select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioRL").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}
function enable_cb_nac() {
	
	  if (this.checked) {
		  
		$("#Lnacional select.clear_input").removeAttr("disabled");
		$("#Lnacional div.numb_Lt ").removeClass("selectdisabled");
		
		$(".btn_pbl_fuera_horarioNC").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#Lnacional select.clear_input').val('');		
		$("#Lnacional div.numb_Lt").addClass("selectdisabled");
		$("#Lnacional select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioNC").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}
function enable_cb_lei() {
	
	  if (this.checked) {
		  
		$("#lei_nch select.clear_input").removeAttr("disabled");
		$("#lei_nch div.numb_Lt ").removeClass("selectdisabled");
		
		$(".btn_pbl_fuera_horarioLEI").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#lei_nch select.clear_input').val('');		
		$("#lei_nch div.numb_Lt").addClass("selectdisabled");
		$("#lei_nch select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioLEI").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}
function enable_cb_ltk() {
	
	  if (this.checked) {
		  
		$("#Lloteka_nch select.clear_input").removeAttr("disabled");
		$("#Lloteka_nch div.numb_Lt ").removeClass("selectdisabled");
		
		$(".btn_pbl_fuera_horarioLTK").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#Lloteka_nch select.clear_input').val('');		
		$("#Lloteka_nch div.numb_Lt").addClass("selectdisabled");
		$("#Lloteka_nch select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioLTK").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}
function enable_cb_ny_nch() {
	
	  if (this.checked) {
		  
		$("#Lny_nch select.clear_input").removeAttr("disabled");
		$("#Lny_nch div.numb_Lt ").removeClass("selectdisabled");
		$(".btn_pbl_fuera_horarioNYnch").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#Lny_nch select.clear_input').val('');		
		$("#Lny_nch div.numb_Lt").addClass("selectdisabled");
		$("#Lny_nch select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioNYnch").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}

function enable_cb_nac_nch() {
	
	  if (this.checked) {
		  
		$("#nac_nch select.clear_input").removeAttr("disabled");
		$("#nac_nch div.numb_Lt ").removeClass("selectdisabled");
		$(".btn_pbl_fuera_horarioNCnch").show("slow");
		$("a.radius.button.success.left").hide("fast");
	  } else {
		  
		var remove = '';
		$('#nac_nch select.clear_input').val('');		
		$("#nac_nch div.numb_Lt").addClass("selectdisabled");
		$("#nac_nch select.clear_input").attr("disabled", true);
		
		//Boton publicar
		$(".btn_pbl_fuera_horarioNCnch").hide("fast");
		$("a.radius.button.success.left").show("slow");
	  }
}

