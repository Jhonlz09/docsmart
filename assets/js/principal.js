//Obtener datos de la tabla : 




document.addEventListener("DOMContentLoaded", eventoTabla);
function eventoTabla() {
    const tabla = document.querySelector(".selectorTabla");

    tabla.addEventListener("click", function guardarId(e) {
        e.preventDefault();

        const seleccion = e.target;
        const editarNombre = document.querySelector("#edit-nombre");
        const editarCodigo = document.querySelector("#edit-codigo");
        const inputId = document.querySelector("#edit-Id");

        //Si es que el click selecciono el boton
        if (seleccion.classList.contains("button__editar--b")) {
            const fila = seleccion.parentElement.parentElement;
            const id = fila.children[0].textContent;
            const codigo = fila.children[1].textContent;
            const nombre = fila.children[2].textContent;
        

            editarNombre.value = nombre;
            inputId.value = id;
            editarCodigo.value = codigo;

        } else if (seleccion.classList.contains("fa-pencil")) {
            const fila = seleccion.parentElement.parentElement.parentElement;
            const id = fila.children[0].textContent;
            const nombre = fila.children[2].textContent;
            const codigo = fila.children[1].textContent;


            editarNombre.value = nombre;
            inputId.value = id;
            editarCodigo.value = codigo;

        }
    });
}





$(document).ready(function () {
    $("tr #deleteProfe").click(function (e) {
        e.preventDefault();
        var id_profesor = $(this).parent().find('#id_profesor').val();
        swal({
            title: "Esta Seguro de Eliminar?",
            text: "Una vez eliminado no podra recuperarlo!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sí, Eliminar!",
            cancelButtonText: "No, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
                function (isConfirm) {
                    if (isConfirm) {
                        eliminarProfesor(id_profesor);
                        swal("Eliminado!", "El profesor se ha eliminado con exito", "success");
                        setTimeout(function () {
                            parent.location.href = "profesorControlador?accion=listar";
                        }, 1800);
                    } else {
                        swal("Cancelado", "Cancelaste la eliminación", "error");
                    }
                });
    });

    function eliminarProfesor(id_profesor) {
        var url = "profesorControlador?accion=eliminarProfesor&id_profesor=" + id_profesor;
        console.log("eliminado");
        $.ajax({
            type: 'POST',
            url: url,
            async: true,
            success: function (r) {

            }
        });
    }
});

$(function () {
    tabla = $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "language": {"url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"}

    });
});




$(document).on("click", "#btnNuevo", function () {
    $("#formNuevo").trigger("reset");
});