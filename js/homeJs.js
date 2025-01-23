let dis = 0;
document.addEventListener('click', function event(){
        
        if (dis === 1){
            dis = 0
            document.getElementById("dmenu").style.display='none';
        }})

function identify(){

}

function svar(){
        const form0 = document.getElementsByClassName('Form');
        const form = Array.from(form0);
        form.forEach(form => {
            
form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que se recargue la página
    
            // Obtener todos los campos del formulario
            const formData = new FormData(form);
            const dataArr = [];
    
            // Convertir los datos del formulario a un arreglo de objetos
            for (let [key, value] of formData.entries()) {
                dataArr.push({ [key]: value });
            }
            console.log(dataArr);
            
            $.ajax({


                url: 'http://localhost/kemp2.0/routes/registerNewPositionRoute.php',
                type: 'POST',
                contentType: 'application/json', 
                data: JSON.stringify({ data: dataArr }),
                success: function(response) {
                    if (response['status']="success"){
                        // event.target.closest("tr").remove();
                        alert("Datos agragados correctamente");
                        console.log(response);
                    }else{
                        alert("ha ocurrido un error");
                        console.log(response);
                    }
                    
                },
                                      

                error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Hubo un problema con la solicitud AJAX.');
                }
            });


        });
    
        })
        
    
    
    
}
        
            
        

        

function delData (){    
        // Escuchar los clics en los botones de eliminar
        document.querySelectorAll(".delico").forEach((boton) => {
            boton.addEventListener("click", (event) => {
                let id = event.target.dataset.id; // Obtener el ID desde el atributo data-idzzz

                // Confirmar eliminación
                 if (confirm("Deseas eliminar este puesto?") === true){
                  $.ajax({
                        url: 'http://localhost/kemp2.0/routes/fDeletePositionRoute.php',
                        type: 'POST',
                        data: { id: id },
                        success: function(response) {
                        console.log('Respuesta del servidor:', response);
                        alert(response.message);
                        if (response['status']==="success"){
                            // event.target.closest("tr").remove();
                            ShowPosition();
                        }
                        
                        },
                        

                        error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Hubo un problema con la solicitud AJAX.');
                        }
                    });
                 }
             
                
            });
        });
    
}



function dmenu(){
    if (dis === 0){
        document.getElementById("dmenu").style.display='block';
        setTimeout( function ff(){
            dis = dis + 1;
        }, 100)
        
    }else{
        document.getElementById("dmenu").style.display='none';
        dis = dis - 1;
        
    }

}    

function show1 (){
    document.getElementById('fmsg').style.display = 'none';
    var add = document.getElementsByClassName('hr');
    var emp = document.getElementsByClassName('dr');
            for (var i = 0; i < add.length; i++) {
                add[i].style.display='none';
}
for (var i = 0; i < emp.length; i++) {
    emp[i].style.display='block';
    emp[i].style.text_decoration='none';
}
}
function show2 (){
    document.getElementById('fmsg').style.display = 'none';
    var add = document.getElementsByClassName('hr');
    var emp = document.getElementsByClassName('dr');
            for (var i = 0; i < add.length; i++) {
                add[i].style.display='block';
}
for (var i = 0; i < emp.length; i++) {
    emp[i].style.display='none';
    emp[i].style.text_decoration='block';
}
}
let tbl = 0;
function showNewPositionForm(){

    var xhr = new XMLHttpRequest();
    
    // Configurar la solicitud AJAX
    xhr.open("POST", "http://localhost/kemp2.0/routes/ShowNewPositionFormRoute.php", true); // Reemplaza "tuArchivo.php" con el nombre de tu archivo PHP
    
    // Establecer el encabezado de la solicitud
    
    // Definir la función que se ejecutará cuando se reciba una respuesta
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Aquí puedes manejar la respuesta del servidor
    // document.getElementById('vbody').style.display = 'none';
            
            console.log(xhr.responseText);
            document.getElementById("tables").innerHTML = xhr.responseText; // Mostrar la respuesta en un elemento de la página
            svar();
            
        }
    };
    
    // Enviar la solicitud con los datos (si es necesario)
    // xhr.open("GET",URL);
    xhr.send();
    
}

function ShowPosition() {
    

    // Crear una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Configurar la solicitud AJAX
    xhr.open("POST", "http://localhost/kemp2.0/routes/ShowPositionTableRoute.php", true); // Reemplaza "tuArchivo.php" con el nombre de tu archivo PHP
    
    // Establecer el encabezado de la solicitud
    
    // Definir la función que se ejecutará cuando se reciba una respuesta
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Aquí puedes manejar la respuesta del servidor
    // document.getElementById('vbody').style.display = 'none';
            
            console.log(xhr.responseText);
            document.getElementById("tables").innerHTML = xhr.responseText; // Mostrar la respuesta en un elemento de la página
            delData();
        }
    };
    
    // Enviar la solicitud con los datos (si es necesario)
    // xhr.open("GET",URL);
    xhr.send();
    

}

function bactoPosition(event){
    event.preventDefault();
    if (confirm("Si vuelve antes de guardar perdera los datos escritos en este formulario")){
        ShowPosition();
    }

} 
function logOutMs(){
    alert("Cerrando sesion");
}
// open tables




// close tables 