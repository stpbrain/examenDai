

function funcCrearBDSolicitud(){
	console.log("entre a la funcion de crear bd");
	var param = {
		"url": "control/valida.php",
		"method": "POST",
		"data": {"validaBD":"porfavor"}
	};
	$.ajax(param).done(function(datos){


		$("#alerta").addClass("alert-success");
		$("#alerta").html(datos);
		$("#alerta").fadeIn();

		//solamente una vez cuando pasen 3 seg
		setTimeout(function(){
			$("#alerta").fadeOut();
		},5000);

		console.log(datos);
	})


	console.log("terminando ejecucion");

}