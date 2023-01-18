$(document).ready(function(){
    var accion="";
    var Toast = Swal.mixin({
        toast:true,
        position: 'top-end',
        showConfirmButton:false,
        timer: 3000
    });
    var tabla = $("#tblMaterias").DataTable({
        "ajax":{
            "url": "ajax/materias.ajax.php",
            "type": "POST",
            "dataSrc": ""
        },
        // "dom": "Bfrtilp",
        // "buttons": [
        //     {
        //         "extend": "excelHtml5",
        //         "text": "<i class='fas fa-file-excel'></i>",
        //         "titleAttr": "Exportar a Excel",
        //         "className": "btn btn-success"
        //     },
        //     {
        //         "extend": "pdfHtml5",
        //         "text": "<i class='fas fa-file-pdf'></i>",
        //         "titleAttr": "Exportar a PDF",
        //         "className": "btn btn-danger"
        //     },
        //     {
        //         "extend": "print",
        //         "text": "<i class='fa fa-print'></i>",
        //         "titleAttr": "Imprimir",
        //         "className": "btn btn-info"
        //     },
        //     "colvis"  
        // ],
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
                "collection": "Colección",
                "colvisRestore": "Restaurar visibilidad",
                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                "copySuccess": {
                    "1": "Copiada 1 fila al portapapeles",
                    "_": "Copiadas %ds fila al portapapeles"
                },
                "copyTitle": "Copiar al portapapeles",
                "csv": "CSV",
                "excel": "Excel",
                "pageLength": {
                    "-1": "Mostrar todas las filas",
                    "_": "Mostrar %d filas"
                },
                "pdf": "PDF",
                "print": "Imprimir",
                "renameState": "Cambiar nombre",
                "updateState": "Actualizar",
                "createState": "Crear Estado",
                "removeAllStates": "Remover Estados",
                "removeState": "Remover",
                "savedStates": "Estados Guardados",
                "stateRestore": "Estado %d"
            },
            "autoFill": {
                "cancel": "Cancelar",
                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                "fillHorizontal": "Rellenar celdas horizontalmente",
                "fillVertical": "Rellenar celdas verticalmentemente"
            },
            "decimal": ",",
            "searchBuilder": {
                "add": "Añadir condición",
                "button": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "clearAll": "Borrar todo",
                "condition": "Condición",
                "conditions": {
                    "date": {
                        "after": "Despues",
                        "before": "Antes",
                        "between": "Entre",
                        "empty": "Vacío",
                        "equals": "Igual a",
                        "notBetween": "No entre",
                        "notEmpty": "No Vacio",
                        "not": "Diferente de"
                    },
                    "number": {
                        "between": "Entre",
                        "empty": "Vacio",
                        "equals": "Igual a",
                        "gt": "Mayor a",
                        "gte": "Mayor o igual a",
                        "lt": "Menor que",
                        "lte": "Menor o igual que",
                        "notBetween": "No entre",
                        "notEmpty": "No vacío",
                        "not": "Diferente de"
                    },
                    "string": {
                        "contains": "Contiene",
                        "empty": "Vacío",
                        "endsWith": "Termina en",
                        "equals": "Igual a",
                        "notEmpty": "No Vacio",
                        "startsWith": "Empieza con",
                        "not": "Diferente de",
                        "notContains": "No Contiene",
                        "notStartsWith": "No empieza con",
                        "notEndsWith": "No termina con"
                    },
                    "array": {
                        "not": "Diferente de",
                        "equals": "Igual",
                        "empty": "Vacío",
                        "contains": "Contiene",
                        "notEmpty": "No Vacío",
                        "without": "Sin"
                    }
                },
                "data": "Data",
                "deleteTitle": "Eliminar regla de filtrado",
                "leftTitle": "Criterios anulados",
                "logicAnd": "Y",
                "logicOr": "O",
                "rightTitle": "Criterios de sangría",
                "title": {
                    "0": "Constructor de búsqueda",
                    "_": "Constructor de búsqueda (%d)"
                },
                "value": "Valor"
            },
            "searchPanes": {
                "clearMessage": "Borrar todo",
                "collapse": {
                    "0": "Paneles de búsqueda",
                    "_": "Paneles de búsqueda (%d)"
                },
                "count": "{total}",
                "countFiltered": "{shown} ({total})",
                "emptyPanes": "Sin paneles de búsqueda",
                "loadMessage": "Cargando paneles de búsqueda",
                "title": "Filtros Activos - %d",
                "showMessage": "Mostrar Todo",
                "collapseMessage": "Colapsar Todo"
            },
            "select": {
                "cells": {
                    "1": "1 celda seleccionada",
                    "_": "%d celdas seleccionadas"
                },
                "columns": {
                    "1": "1 columna seleccionada",
                    "_": "%d columnas seleccionadas"
                },
                "rows": {
                    "1": "1 fila seleccionada",
                    "_": "%d filas seleccionadas"
                }
            },
            "thousands": ".",
            "datetime": {
                "previous": "Anterior",
                "next": "Proximo",
                "hours": "Horas",
                "minutes": "Minutos",
                "seconds": "Segundos",
                "unknown": "-",
                "amPm": [
                    "AM",
                    "PM"
                ],
                "months": {
                    "0": "Enero",
                    "1": "Febrero",
                    "10": "Noviembre",
                    "11": "Diciembre",
                    "2": "Marzo",
                    "3": "Abril",
                    "4": "Mayo",
                    "5": "Junio",
                    "6": "Julio",
                    "7": "Agosto",
                    "8": "Septiembre",
                    "9": "Octubre"
                },
                "weekdays": [
                    "Dom",
                    "Lun",
                    "Mar",
                    "Mie",
                    "Jue",
                    "Vie",
                    "Sab"
                ]
            },
            "editor": {
                "close": "Cerrar",
                "create": {
                    "button": "Nuevo",
                    "title": "Crear Nuevo Registro",
                    "submit": "Crear"
                },
                "edit": {
                    "button": "Editar",
                    "title": "Editar Registro",
                    "submit": "Actualizar"
                },
                "remove": {
                    "button": "Eliminar",
                    "title": "Eliminar Registro",
                    "submit": "Eliminar",
                    "confirm": {
                        "_": "¿Está seguro que desea eliminar %d filas?",
                        "1": "¿Está seguro que desea eliminar 1 fila?"
                    }
                },
                "error": {
                    "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                },
                "multi": {
                    "title": "Múltiples Valores",
                    "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                    "restore": "Deshacer Cambios",
                    "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                }
            },
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "stateRestore": {
                "creationModal": {
                    "button": "Crear",
                    "name": "Nombre:",
                    "order": "Clasificación",
                    "paging": "Paginación",
                    "search": "Busqueda",
                    "select": "Seleccionar",
                    "columns": {
                        "search": "Búsqueda de Columna",
                        "visible": "Visibilidad de Columna"
                    },
                    "title": "Crear Nuevo Estado",
                    "toggleLabel": "Incluir:"
                },
                "emptyError": "El nombre no puede estar vacio",
                "removeConfirm": "¿Seguro que quiere eliminar este %s?",
                "removeError": "Error al eliminar el registro",
                "removeJoiner": "y",
                "removeSubmit": "Eliminar",
                "renameButton": "Cambiar Nombre",
                "renameLabel": "Nuevo nombre para %s",
                "duplicateError": "Ya existe un Estado con este nombre.",
                "emptyStates": "No hay Estados guardados",
                "removeTitle": "Remover Estado",
                "renameTitle": "Cambiar Nombre Estado"
            }
        
        },
        // "columnDefs":[
        //     {
        //         "targets": 3,
        //         "sortable": false,
        //         "render": function(data, type, full, meta){
        //             return "<center>" +
        //                     " <button type='button' class='btn btn-warning' data-toggle='modal'  title='Editar'>"
        //                     + " <i class='fa-solid fa-pencil'></i>" + "</button>"
        //                     + " <button type='button' class='btn btn-danger'  title='Eliminar'>"
        //                     + " <i class='fa fa-trash'></i>" + "</button>" +
        //                     " </center>";
        //         }
        //     }
        // ],
            "columns":[
                {"data": "id_materia"},
                {"data": "codigo_materia"},
                {"data": "nombre_materia"},
                {"defaultContent":"<center><button type='button' class='btn btn-warning btnEditar' data-target='#modal' data-toggle='modal'  title='Editar'><i class='fa-solid fa-pencil'></i> </button> <button type='button' class='btn btn-danger btnEliminar'  title='Eliminar'><i class='fa fa-trash'> </i> </button></center>"}
            ]

    });

    $("#btnNuevo").on('click', function(){
        accion= "agregar";
        if ($("#btnAgregar").hasClass("btn-warning")) {
            $(".header-color-nuevo").css("background-color", "");
            $(".modal-title").text("Nueva Materia");
            $("#btnAgregar .button-text").text(" Agregar");	
            $('#btnAgregar').removeClass('btn-warning');
            $("#btnAgregar").addClass('btn-success');
            $("#btnAgregar").find("i").removeClass("fa-pen-to-square");
            $("#btnAgregar").find("i").addClass("fa-user-plus");
            $('.line').removeClass('underedit');
            $('.line').addClass('underline');
            $('.barra').removeClass('labele');
            $('.barra').addClass('label');  
        }
        $("#formNuevo").trigger("reset");
    });
    
    $('#tblMaterias tbody').on('click', '.btnEliminar', function(){
        var e = tabla.row($(this).parents('tr')).data();
        var id_materia = e["id_materia"];

        var src = new FormData();
            src.append('accion','delete');
            src.append('id_materia',id_materia);

            swal.fire({

                title: "¿Esta seguro de eliminar esta materia?",
                text: "Una vez eliminado no podra recuperarlo!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(r => {

                if(r.value)  {                    

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/materias.ajax.php",
                        method: "POST",
                        data: src,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta){                            
                            tabla.ajax.reload(null,false);                            
                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });
                        }
                    })
                }
                else{
                }

            })
    });

    $('#tblMaterias tbody').on('click','.btnEditar',function(){
        var row = tabla.row($(this).parents('tr')).data();
            accion = "editar";
            $(".header-color-nuevo").css("background-color", "rgb(255 193 7 / 56%)");
            $(".modal-title").text("Editar Materia");
            $("#btnAgregar .button-text").text(" Editar");	
            $('#btnAgregar').removeClass('btn-success');
            $("#btnAgregar").addClass('btn-warning');
            $("#btnAgregar").find("i").removeClass("fa-user-plus");
            $("#btnAgregar").find("i").addClass("fa-pen-to-square");
            $('.line').removeClass('underline');
            $('.line').addClass('underedit');
            $('.barra').removeClass('label');
            $('.barra').addClass('labele');
            $("#id_materia").val(row["id_materia"]);
            $("#codigo_materia").val(row["codigo_materia"]);
            $("#nombre").val(row["nombre_materia"]);
    });

    $(".input-nuevo").on("keypress", function(event) {
        if (event.which === 13) {
        $("#btnAgregar").click();
        }
    });

    $("#btnAgregar").on('click', function() {
        var input2 = $("#codigo_materia").val().trim();
        var input = $("#nombre").val().trim();
        
        if (input == "" || input2== "") {
            Swal.fire({
                title: '¡Error!',
                text: 'Completa todos los campos requeridos',
                icon: 'error',         
                confirmButtonText: "OK",
                confirmButtonColor: '#b7040f',
                })
        }else{
            var id_materia = $("#id_materia").val(),
            codigo_materia = $("#codigo_materia").val(),
            nombre_materia = $("#nombre").val();

                var datos = new FormData();
                datos.append('id_materia', id_materia);
                datos.append('codigo_materia', codigo_materia);
                datos.append('nombre_materia', nombre_materia);
                datos.append('accion', accion);
        Swal.fire({
            title: '¡Confirmar!',
            text: '¿Estas seguro que deseas ' + accion + ' la materia?',
            icon: 'warning',         
            showCancelButton: true,
            confirmButtonText: "Sí, " + accion,
            confirmButtonColor: '#b7040f',
            cancelButtonText: "Cancelar",
            cancelButtonColor: '#454d5e'
        }).then(resultado => {
            if (resultado.value) {
                $.ajax({
                    url: "ajax/materias.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {

                        $("#modal").modal('hide');
                        tabla.ajax.reload(null, false);
                        $("#id_carrera").val("");
                        $("#codigo_materia").val("");
                        $("#nombre").val("");
                        Toast.fire({
                            icon: 'success',
                            title: resp
                        })
                    }
                });
            } else {

            }
        });
        }
    });
})

