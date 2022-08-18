window.onload = function(){
	document.getElementById("loginBto").addEventListener("click", consulta);

		function consulta(e){
			e.preventDefault();
			let formData = document.querySelector('#loginForm');
			let datos = new FormData(formData);
			datos.append('ajax', 2);

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('loginSession').innerHTML = this.responseText;
				}
			};
			xhttp.open("POST", "admin/php/login.php", true);
			xhttp.send(datos);
	}
}