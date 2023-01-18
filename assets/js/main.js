$('#formLogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());    
    var password =$.trim($("#password").val());    

    if(usuario.length == "" || password == ""){
    Swal.fire({
        type:'warning',
        title:'Debe ingresar un usuario o contraseña',
        confirmButtonColor:'#b7040f'
    });
    return false; 
    }else{
        $.ajax({
            url:"utils/database/login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario, password:password}, 
            success:function(data){               
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario o contraseña incorrecta',
                        confirmButtonColor:'#b7040f'
                    });
                }else{
                    window.location.href = "starter.php";                   
                }
            }    
        });
    }     
});