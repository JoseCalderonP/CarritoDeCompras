window.onload=function(){

  var modal = document.getElementById('id01');

  window.onclick = function(event){
    if(event.target == modal){
      modal.style.display = "none";
    }
  }

  document.getElementById("busqueda").onkeyup= function() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("busqueda")[0];
    filter = input.value.toUpperCase();
    table = document.getElementById("miTabla");
    tr = table.getElementsByTagName("tr");
    console.log(tr);

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  consulta("../admin/php/ConsultaCats.php?opt=table","tablaCats");
  consulta("../admin/php/opCats.php?opt=select","opCats");

  function consulta(filePHP, idHTML){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        document.getElementById(idHTML).innerHTML = this.responseText;
      }
    };
    xhttp.open("GET",filePHP,true);
    xhttp.send();
  }

  //Subir Imagen
  function subirImg(){
    var img = $('#imgCat').files[0];
    var formData = new FormData();
    formData.append("fileToUpload", img);

    $.ajax({
      url: "uploadImg.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response){
        console.log("Imagen subida correctamente")
      },
      error: function(jqXHR, textStatus, errorMessage){
        console.log(errorMessage);
      }
      });
  }
  //Fin Subir Imagen
  document.getElementById("altaCatBto").addEventListener("click", insertarCat);
  
  function insertarCat(e){
    e.preventDefault();
    let formAltaCat = document.querySelector('#formAltaCat');
    let datos = new FormData(formAltaCat);
    datos.append('ajax',2);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        consulta("../admin/php/ConsultaCats.php?opt=table","tablaCats");
        document.getElementById("msjBox").style.display = "inline-block";
        document.getElementById("mensaje").innerHTML = "Categoria agregada correctamente";
        document.getElementById('id01').style.display='none';
        subirImg();
      }
    };
    xhttp.open("POST", "../admin/php/altaCat.php", true);
    xhttp.send(datos);
  }

  document.getElementById("btoEliminarCat").addEventListener("click", eliminarCat);
  
  function eliminarCat(e){
    e.preventDefault();
    let formBajaCat = document.querySelector('#formBajaCat');
    let datos = new FormData(formBajaCat);
    datos.append('ajax',2);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        consulta("../admin/php/ConsultaCats.php?opt=table","tablaCats");
        document.getElementById("msjBox").style.display = "inline-block";
        document.getElementById("mensaje").innerHTML = "Categoria Eliminada correctamente";
        document.getElementById('id01').style.display='none';
      }
    };
    xhttp.open("POST", "../admin/php/eliminarCat.php", true);
    xhttp.send(datos);
  }
}

