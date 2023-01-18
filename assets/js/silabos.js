    var accion;
    var table;
    
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    $(document).ready(function() {

        $.ajax({
            url: "ajax/silabos.ajax.php",
            type: "POST",
            data: {
                'accion': 1
            }, //1: LISTAR PRODUCTOS
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
            }
        });

        //SOLICITUD AJAX PARA CARGAR SELECT DE CATEGORIAS
        // $.ajax({
        //     url: "ajax/categorias.ajax.php",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     dataType: 'json',
        //     success: function(respuesta) {

        //         var options = '<option selected value="0">Seleccione una categoría</option>';

        //         for (let index = 0; index < respuesta.length; index++) {
        //             options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
        //         }

        //         $("#selCategoriaReg").html(options);
        //     }
        // });
        
        /*===================================================================*/
        // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
        /*===================================================================*/
        table = $("#tblSilabos").DataTable({

            // dom: 'Bfrtip',
            // buttons: [{
            //         text: 'Agregar Producto',
            //         className: 'addNewRecord',
            //         action: function(e, dt, node, config) {
            //             $("#mdlGestionarProducto").modal('show');
            //             accion = 2; //registrar
            //         }
            //     },
            //     'excel', 'print', 'pageLength'
            // ],
            // pageLength: [5, 10, 15, 30, 50, 100],
            // pageLength: 10,
            ajax: {
                url: "ajax/silabos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {'accion': 1}, //1: LISTAR PRODUCTOS
            },
            // responsive: {
            //     details: {
            //         type: 'column'
            //     }
            // },
            columnDefs: [
                // {
                //     targets: 0,
                //     orderable: false,
                //     className: 'control'
                // },
                {
                    targets: 1,
                    visible: false
                },
                {
                    targets: 3,
                    visible: false
                },
                // {
                //     targets: 3,
                //     createdCell: function(td, cellData, rowData, row, col){
                //         if(parseFloat(rowData[9]) <= parseFloat(rowData[10])){
                //             $(td).parent().css('background','#FF5733')
                //         }
                //     }
                // },
                {
                    targets: 5,
                    visible: false
                },
                {
                    targets: 7,
                    visible: false
                },
                // {
                //     targets: 9,
                //     visible: false
                // },
                {
	                "targets": 9,
	            	"sortable": false,
	            	"render": function (data, type, full, meta){

	            	if(data == 1){
						return "<center><span class='badge badge-danger'>Pendiente</span></center>"
	            	}else if(data==2){
						return "<div class='bg-warning color-palette text-center'>ACTIVO</div>" 
	            	}
	            	
	            	}
	            },
                {
                    targets: 10,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            " <button type='button' class='btn btn-warning btnEditar' data-target='#modal' data-toggle='modal'  title='Editar'>" +
                            " <i class='fa-solid fa-pencil'></i>" + "</button>" +
                            " <button type='button' class='btn btn-danger btnEliminar'  title='Eliminar'>" +
                            " <i class='fa fa-trash'></i>" + "</button>" +
                            " </center>";
                    }
            },
                
            ],
            columns: [
                {"data": "id_asignacion"},
                {"data": "id_materia"},
                {"data": "nombre_materia"},
                {"data": "id_profesor"},
                {"data": "apellidos_profesor"},
                {"data": "id_periodo"},
                {"data": "semestre_modulo"},
                {"data": "id_horario"},
                {"data": "horario"},
                {"data": "id_micro"} 
            ],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
        /*===================================================================*/
        // $("#iptCodigoBarras").keyup(function(){
        //     table.column($(this).data('index')).search(this.value).draw();
        // })

        // $("#iptCategoria").keyup(function(){
        //     table.column($(this).data('index')).search(this.value).draw();
        // })

        // $("#iptProducto").keyup(function(){
        //     table.column($(this).data('index')).search(this.value).draw();
        // })

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
        /*===================================================================*/
        // $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function(){
        //     table.draw();
        // })

        // $.fn.dataTable.ext.search.push(

        //     function(settings, data, dataIndex){

        //         var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
        //         var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());

        //         var col_venta = parseFloat(data[7]);

        //         if((isNaN(precioDesde) && isNaN(precioHasta)) ||
        //             (isNaN(precioDesde) && col_venta <=  precioHasta) ||
        //             (precioDesde <= col_venta && isNaN(precioHasta)) ||
        //             (precioDesde <= col_venta && col_venta <= precioHasta)){
        //                 return true;
        //         }

        //         return false;
        //     }
        // )

        /*===================================================================*/
        // EVENTO PARA LIMPIAR INPUTS DE CRITERIOS DE BUSQUEDA
        /*===================================================================*/
        // $("#btnLimpiarBusqueda").on('click',function(){
            
        //     $("#iptCodigoBarras").val('')
        //     $("#iptCategoria").val('')
        //     $("#iptProducto").val('')
        //     $("#iptPrecioVentaDesde").val('')
        //     $("#iptPrecioVentaHasta").val('')

        //     table.search('').columns().search('').draw();
        // })

        // $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

        //     $("#validate_codigo").css("display", "none");
        //     $("#validate_categoria").css("display", "none");
        //     $("#validate_descripcion").css("display", "none");
        //     $("#validate_precio_compra").css("display", "none");
        //     $("#validate_precio_venta").css("display", "none");
        //     $("#validate_stock").css("display", "none");
        //     $("#validate_min_stock").css("display", "none");

        //     $("#iptCodigoReg").val("");
        //     $("#selCategoriaReg").val(0);
        //     $("#iptDescripcionReg").val("");
        //     $("#iptPrecioCompraReg").val("");
        //     $("#iptPrecioVentaReg").val("");
        //     $("#iptUtilidadReg").val("");
        //     $("#iptStockReg").val("");
        //     $("#iptMinimoStockReg").val("");

        // })

        // $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function() {
        //     calcularUtilidad();
        // });

        // $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function() {
        //     calcularUtilidad();
        // });



    })


    // CALCULA LA UTILIDAD
    // function calcularUtilidad() {

    //     var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
    //     var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
    //     var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;
    //     $("#iptUtilidadReg").val(Utilidad.toFixed(2));

    // }

    // function formSubmitClick() {

    //     //validar ingreso de campos o inputs


    //     Swal.fire({
    //         title: 'Está seguro de registrar el producto?',
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Si, deseo registrarlo!',
    //         cancelButtonText: 'Cancelar',
    //     }).then((result) => {

    //         if (result.isConfirmed) {

    //             var datos = new FormData();

    //             datos.append("accion", accion);
    //             datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
    //             datos.append("id_categoria_producto", $("#selCategoriaReg").val()); //id_categoria_producto
    //             datos.append("descripcion_producto", $("#iptDescripcionReg").val()); //descripcion_producto
    //             datos.append("precio_compra_producto", $("#iptPrecioCompraReg").val()); //precio_compra_producto
    //             datos.append("precio_venta_producto", $("#iptPrecioVentaReg").val()); //precio_venta_producto
    //             datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
    //             datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
    //             datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val()); //minimo_stock_producto  
    //             datos.append("ventas_producto", 0); //ventas_producto
    //             // datos.append("fecha_actualizacion_producto");//fecha_actualizacion_producto

    //             $.ajax({
    //                 url: "ajax/silabos.ajax.php",
    //                 method: "POST",
    //                 data: datos,
    //                 cache: false,
    //                 contentType: false,
    //                 processData: false,
    //                 dataType: 'json',
    //                 success: function(respuesta) {
    //                      console.log(respuesta)

    //                     if (respuesta == "ok") {
                            
    //                         Toast.fire({
    //                             icon: 'success',
    //                             title: 'El producto se registró correctamente'
    //                         });

    //                         table.ajax.reload();

    //                         $("#mdlGestionarProducto").modal('hide');

    //                         $("#iptCodigoReg").val("");
    //                         $("#selCategoriaReg").val(0);
    //                         $("#iptDescripcionReg").val("");
    //                         $("#iptPrecioCompraReg").val("");
    //                         $("#iptPrecioVentaReg").val("");
    //                         $("#iptUtilidadReg").val("");
    //                         $("#iptStockReg").val("");
    //                         $("#iptMinimoStockReg").val("");

    //                     } else {
    //                         Toast.fire({
    //                             icon: 'error',
    //                             title: 'El producto no se pudo registrar'
    //                         });
    //                     }

    //                 }
    //             });

    //         }
    //     })
    // }