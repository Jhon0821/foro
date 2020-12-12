function validacionform(){

    var user=document.getElementById('user');
    var clave=document.getElementById('contraseña');
    var nombre=document.getElementById('txtnombre');
    var apellido=document.getElementById('apellido');
    var tipo=document.getElementById('tipo');
    var nacionalidad=document.getElementById('nacionalidad');


    if(user.value==''){
        document.getElementById('erroruser').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        user.focus();
        return false;
    }else{
        document.getElementById('erroruser').innerHTML='';
    }
    if(clave.value==''){
        document.getElementById('errorcon').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        clave.focus();
        return false;
    }else{
        document.getElementById('errorcon').innerHTML='';
    }
    if(nombre.value==''){
        document.getElementById('errornombre').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        nombre.focus();
        return false;
    }else{
        document.getElementById('errornombre').innerHTML='';
    }
    if(apellido.value==''){
        document.getElementById('errorapellido').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        apellido.focus();
        return false;
    }else{
        document.getElementById('errorapellido').innerHTML='';
    }
    if(tipo.selectedIndex==0){
        document.getElementById('errortipo').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        tipo.focus();
        return false;
    }else{
        document.getElementById('errortipo').innerHTML='';
    }
    if(nacionalidad.selectedIndex==0){
        document.getElementById('errornacionalidad').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        nacionalidad.focus();
        return false;
    }else{
        document.getElementById('errornacionalidad').innerHTML='';
    }
    
    
    return true; 
}

function validausuario(){
    var usuario=document.getElementById('usuario');
    var password=document.getElementById('password');

    if(usuario.value==''){
        document.getElementById('errorusuario').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        usuario.focus();
        return false; 
    }else{
        document.getElementById('errorusuario').innerHTML='';
    }
    if(password.value==''){
        document.getElementById('errorpass').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        password.focus();
        return false; 
    }else{
        document.getElementById('errorpass').innerHTML='';
    }

    return true; 
}


function validacionU(){
    var nombreusu=document.getElementById('usuario');
    var fecha=document.getElementById('fecha'); 
    var mensaje=document.getElementById('mensaje'); 

    if(nombreusu.value==''){
        document.getElementById('errorusu').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        nombreusu.focus(); 
        return false; 

    }else{
        document.getElementById('errorusu').innerHTML='';
    }

    if(fecha.value==''){
        document.getElementById('errorfecha').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        fecha.focus(); 
        return false; 

    }else{
        document.getElementById('errorfecha').innerHTML='';
    }
    if(mensaje.value==''){
        document.getElementById('errormensaje').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        mensaje.focus(); 
        return false; 

    }else{
        document.getElementById('errormensaje').innerHTML='';
    }
    return true; 
}

function validarA(){

    var usu=document.getElementById('usuario');
    var fecha=document.getElementById('fecha');
    var mensaje=document.getElementById('mensaje');
    if(usu.value==''){
        document.getElementById('errorU').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        usu.focus(); 
        return false; 

    }else{
        document.getElementById('errorU').innerHTML='';
    }
    if(fecha.value==''){
        document.getElementById('errorF').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        fecha.focus(); 
        return false; 

    }else{
        document.getElementById('errorF').innerHTML='';
    }
    if(mensaje.value==''){
        document.getElementById('errorM').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        mensaje.focus(); 
        return false; 

    }else{
        document.getElementById('errorM').innerHTML='';
    }
        return true;
}


function validacrearU(){
    var usuario=document.getElementById('usuario');
    var contraseña=document.getElementById('clave');
    var nombre=document.getElementById('Nombre');
    var apellido=document.getElementById('apellido');
    var tipo=document.getElementById('tipo');
    var estado=document.getElementById('estado');

    if(usuario.value==''){
        document.getElementById('error-usuario').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        usuario.focus(); 
        return false; 

    }else{
        document.getElementById('error-usuario').innerHTML='';
    }
    if(contraseña.value==''){
        document.getElementById('error-contraseña').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        contraseña.focus(); 
        return false; 

    }else{
        document.getElementById('error-contraseña').innerHTML='';
    }
    if(nombre.value==''){
        document.getElementById('error-nombre').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        nombre.focus(); 
        return false; 

    }else{
        document.getElementById('error-nombre').innerHTML='';
    }
    if(apellido.value==''){
        document.getElementById('error-apellido').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        apellido.focus(); 
        return false; 

    }else{
        document.getElementById('error-apellido').innerHTML='';
    }
    if(tipo.selectedIndex==0){
        document.getElementById('error-tipo').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        tipo.focus(); 
        return false; 

    }else{
        document.getElementById('error-tipo').innerHTML='';
    }
    if(estado.selectedIndex==0){
        document.getElementById('error-estado').innerHTML='<font color =#ff000> El Campo es Obligatorio(*)<font>';
        estado.focus(); 
        return false; 

    }else{
        document.getElementById('error-estado').innerHTML='';
    }

    return true;

 
}



