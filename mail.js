

var a = '@'


//not empty usuario
function validarusuario() {
    var mail = document.getElementById('inputEmail3').value;
    
    if (mail == ""){
        alert('Complete el campo Email');
    }else{
        validararroba();
    }
}
document.getElementById('entrarmodal').addEventListener('click', validarusuario);

//valida arroba
function validararroba() {
   var mail = document.getElementById('inputEmail3').value;
    if (mail.includes(a) ) {
    console.log('Campo Email validado.');
    }
    else {
    alert('El campo Email debe contener @');
    }
    }  
   
    
//not empty clave
function validarpass() {
    var pass = document.getElementById('inputPassword3').value;
    
    if (pass == ""){
        alert('Complete el campo Contraseña');
    }else{
        console.log('Aceptado')
        
    }
}
document.getElementById('entrarmodal').addEventListener('click', validarpass);

