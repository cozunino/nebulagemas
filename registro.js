


var a = '@'


//not empty email
function validarusuario() {
    var mail = document.getElementById('email').value;
    
    if (mail == ""){
        alert('Complete el campo Email');
    }else{
        validararroba();
    }
}
document.getElementById('entrarmodalreg').addEventListener('click', validarusuario);

//valida arroba
function validararroba() {
   var mail = document.getElementById('email').value;
    if (mail.includes(a) ) {
    console.log('Campo Email validado.');
    }
    else {
    alert('El campo Email debe contener @');
    }
    }  
   
    
//validar pass
function validarpass() {
    var pass = document.getElementById('contrasena').value;
    
    if (pass == ""){
        alert('Complete el campo Contraseña');
    }else{
        validarpass1();
        
    }
}

document.getElementById('entrarmodalreg').addEventListener('click', validarpass);

//verificar que el pass sea el mismo en los dos campos
function validarpass1() {
    var pass = document.getElementById('contrasena').value;
    var pass1 = document.getElementById('contrasena1').value;
    
    if (pass1 == pass){
        console.log('Aceptado');
    }else{
        alert('La contraseña no coincide');
        
    }
}


document.getElementById('entrarmodalreg').addEventListener('click', validarpass1);

//validar nombre
function validarnombre() {
    var nombre = document.getElementById('nombre').value;
    
    if (nombre == ""){
        alert('Complete el campo Nombre');
    }else{
        console.log('Aceptado')
        
    }
}

document.getElementById('entrarmodalreg').addEventListener('click', validarnombre);

//valida apellido
function validarapellido() {
    var pass = document.getElementById('apellido').value;
    
    if (apellido == ""){
        alert('Complete el campo Apellido');
    }else{
        console.log('Aceptado')
        
    }
}

document.getElementById('entrarmodalreg').addEventListener('click', validarapellido);

//valida telefono
function validartel() {
    var tel = document.getElementById('telefono').value;
    
    if (tel == ""){
        alert('Complete el campo Telefono');
    }else{
        console.log('Aceptado');
        
    }
}

document.getElementById('entrarmodalreg').addEventListener('click', validartel);

//valida domicilio
function validardom() {
    var dom = document.getElementById('direccion').value;
    
    if (dom == ""){
        alert('Complete el campo Domicilio');
    }else{
        console.log('Aceptado');
        
    }
}

document.getElementById('entrarmodalreg').addEventListener('click', validardom);


