$(document).ready(function(){

    $("#form_carga_silabos").on('submit',function(e){

        e.preventDefault();

        /*===================================================================*/
        //VALIDAR QUE SE SELECCIONE UN ARCHIVO
        /*===================================================================*/
        if($("#fileSilabos").get(0).files.length == 0){
            Swal.fire({
                position:'center',
                icon:'warning',
                title: 'Debe seleccionar un archivo.',
                showConfirmButton: false,
                timer: 2500
            })
        }else{

            /*===================================================================*/
            //VALIDAR QUE EL ARCHIVO SELECCIONADO SEA EN EXTENSION XLS O XLSX
            /*===================================================================*/
            var extensiones_permitidas = [".xls",".xlsx"];
            var input_file_silabos = $("#fileSilabos");
            var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:])+(" + extensiones_permitidas.join('|') + ")$");

            if(!exp_reg.test(input_file_silabos.val().toLowerCase())){
                Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'Debe seleccionar un archivo con formato .xls o .xlsx',
                    showConfirmButton: false,
                    timer: 2500
                })

                return false;
            }

            var datos = new FormData($(form_carga_silabos)[0]);

            $("#btnCargar").prop("disabled",true);
            $("#img_carga").attr("style","display:block");
            $("#img_carga").attr("style","width:200px");
            
            $.ajax({
                url:"ajax/silabos.ajax.php",
                type: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success:function(respuesta){
                    if(respuesta > 0){
                        Swal.fire({
                            position:'center',
                            icon:'success',
                            title: 'Se registraron ' + respuesta  + ' silabos correctamente!',
                            showConfirmButton: false,
                            timer: 2500
                        })

                        $("#btnCargar").prop("disabled",false);
                        $("#img_carga").attr("style","display:none");
                    }else{
                        Swal.fire({
                            position:'center',
                            icon:'error',
                            title: 'Se presento un error al momento de realizar el registro de silabos!',
                            showConfirmButton: false,
                            timer: 2500
                        })

                        $("#btnCargar").prop("disabled",false);
                        $("#img_carga").attr("style","display:none");

                    }
                }
            });

        }
    })

})