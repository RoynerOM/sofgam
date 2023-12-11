var page;
var text = "html";

function execDatatable(text) {
  /*=============================================
  Validamos tabla de administradores
  =============================================*/

  if ($(".tableAdmins").length > 0) {
    var url =
      "ajax/data-admins.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id_user" },
      { data: "displayname_user" },
      { data: "username_user" },
      { data: "email_user" },
      { data: "date_created_user" },
      { data: "actions", orderable: false },
    ];

    page = "admins";
  }

  /*=============================================
  Validamos tabla de usuarios
  =============================================*/

  if ($(".tableUsers").length > 0) {
    var url =
      "ajax/data-users.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id_user" },
      { data: "displayname_user" },
      { data: "username_user" },
      { data: "email_user" },
      { data: "date_created_user" },
    ];

    page = "users";
  }

  /*=============================================
  Validamos tabla de acciones realizadas
  =============================================*/

  if ($(".tableRealizadas").length > 0) {
    var url =
      "ajax/data-realizada.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "modulo" },
      { data: "tipo" },
      { data: "accion" },
      { data: "realizada" },
      { data: "imagen" },
      { data: "acciones" },
    ];

    page = "realizada";
  }

  /*=============================================
  Validamos tabla de medidas de adaptación
  =============================================*/

  if ($(".tableAdaptacion").length > 0) {
    var url =
      "ajax/data-medida.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "objetivo" },
      { data: "meta" },
      { data: "plazo" },
      { data: "presupuesto" },
      { data: "acciones" },
    ];

    page = "adaptacion";
  }

  /*=============================================
  Validamos tabla de labor de seguimiento
  =============================================*/

  if ($(".tableLaborSeguimiento").length > 0) {
    var url =
      "ajax/data-seguimiento.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "fecha_seguimiento" },
      { data: "imagen" },
      { data: "acciones" },
    ];

    page = "labor_seguimiento";
  }

  /*=============================================
  Validamos tabla de educación externa
  =============================================*/

  if ($(".tableEducacionExterna").length > 0) {
    var url =
      "ajax/data-educacion-externa.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "cantidad_seccion" },
      { data: "cantidad_participante" },
      { data: "acciones" },
    ];

    page = "educacion_externa";
  }

  /*===================================================
  Validamos tabla de ahorro de consumo de combustible
  ====================================================*/

  if ($(".tableAhorroConsumoCombustible").length > 0) {
    var url =
      "ajax/data-ahorro-consumo-combustible.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "activo" },
      { data: "consumo_anterior" },
      { data: "consumo_actual" },
      { data: "ahorro" },
      { data: "acciones" },
    ];

    page = "ahorro_consumo_combustible";
  }

  /*===================================================
  Validamos tabla de consumo de combustible
  ====================================================*/

  if ($(".tableConsumoCombustible").length > 0) {
    var url =
      "ajax/data-consumo-combustible.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "tipo" },
      { data: "enero" },
      { data: "febrero" },
      { data: "marzo" },
      { data: "abril" },
      { data: "mayo" },
      { data: "junio" },
      { data: "julio" },
      { data: "agosto" },
      { data: "septiembre" },
      { data: "octubre" },
      { data: "noviembre" },
      { data: "diciembre" },
      { data: "total" },
      { data: "acciones" },
    ];

    page = "consumo_combustible";
  }

  /*===================================================
  Validamos tabla de educación ambiental
  ====================================================*/

  if ($(".tableEducacionAmbiental").length > 0) {
    var url =
      "ajax/data-educacion-ambiental.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "modulo" },
      { data: "actividad" },
      { data: "fecha" },
      { data: "tipo" },
      { data: "modalidad" },
      { data: "acciones" },
    ];

    page = "educacion_ambiental";
  }

  /*===================================================
  Validamos tabla de inventario vehicular
  ====================================================*/

  if ($(".tableInventarioVehiculo").length > 0) {
    var url =
      "ajax/data-inventario-vehiculo.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "activo" },
      { data: "equipo" },
      { data: "marca" },
      { data: "anio" },
      { data: "tipo" },
      { data: "acciones" },
    ];

    page = "inventario_vehiculo";
  }

  /*===================================================
  Validamos tabla de inventario vehicular
  ====================================================*/

  if ($(".tableSistemaTratamiento").length > 0) {
    var url =
      "ajax/data-sistema-tratamiento.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "fecha_crea" },
      { data: "acciones" },
    ];

    page = "sistemas_tratamientos";
  }

  /*===================================================
  Validamos tabla de ahorro de consumo de agua
  ====================================================*/

  if ($(".tableAhorroConsumoAgua").length > 0) {
    var url =
      "ajax/data-ahorro-consumo-agua.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "mes" },
      { data: "consumo_anterior" },
      { data: "consumo_actual" },
      { data: "ahorro" },
      { data: "acciones" },
    ];

    page = "ahorro_consumo_agua";
  }

  /*===================================================
  Validamos tabla de consumo de agua potable
  ====================================================*/

  if ($(".tableConsumoAgua").length > 0) {
    var url =
      "ajax/data-consumo-agua.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "area" },
      { data: "enero" },
      { data: "febrero" },
      { data: "marzo" },
      { data: "abril" },
      { data: "mayo" },
      { data: "junio" },
      { data: "julio" },
      { data: "agosto" },
      { data: "septiembre" },
      { data: "octubre" },
      { data: "noviembre" },
      { data: "diciembre" },
      { data: "total" },
      { data: "acciones" },
    ];

    page = "consumo_agua_potable";
  }

  /*===================================================
  Validamos tabla de compra sostenible
  ====================================================*/

  if ($(".tableCompraSostenible").length > 0) {
    var url =
      "ajax/data-compra-sostenible.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "uso" },
      { data: "aporte" },
      { data: "acciones" },
    ];

    page = "compra_sostenible";
  }

  /*===================================================
  Validamos tabla de sustitución de producto
  ====================================================*/

  if ($(".tableSustitucionProducto").length > 0) {
    var url =
      "ajax/data-sustitucion-producto.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "producto_antiguo" },
      { data: "producto_nuevo" },
      { data: "acciones" },
    ];

    page = "sustitucion_producto";
  }

  /*===================================================
  Validamos tabla de ahorro de consumo electrico
  ====================================================*/

  if ($(".tableAhorroConsumoElectricidad").length > 0) {
    var url =
      "ajax/data-ahorro-consumo-electricidad.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "mes" },
      { data: "consumo_anterior" },
      { data: "consumo_actual" },
      { data: "ahorro" },
      { data: "acciones" },
    ];

    page = "ahorro_consumo_electricidad";
  }

  /*===================================================
  Validamos tabla de consumo de electrico
  ====================================================*/

  if ($(".tableConsumoElectricidad").length > 0) {
    var url =
      "ajax/data-consumo-electricidad.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "area" },
      { data: "enero" },
      { data: "febrero" },
      { data: "marzo" },
      { data: "abril" },
      { data: "mayo" },
      { data: "junio" },
      { data: "julio" },
      { data: "agosto" },
      { data: "septiembre" },
      { data: "octubre" },
      { data: "noviembre" },
      { data: "diciembre" },
      { data: "total" },
      { data: "acciones" },
    ];

    page = "consumo_mensual_electricidad";
  }

  /*===================================================
  Validamos tabla de mantenimiento de equipo de refrigeración
  ====================================================*/

  if ($(".tableMantenimiento").length > 0) {
    var url =
      "ajax/data-mantenimiento.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "tipo" },
      { data: "periodicidad" },
      { data: "responsable" },
      { data: "acciones" },
    ];

    page = "mantenimiento_equipo_refrigeracion";
  }

  /*===================================================
  Validamos tabla de gestión ambiental
  ====================================================*/

  if ($(".tableGestionAmbiental").length > 0) {
    var url =
      "ajax/data-gestion-ambiental.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "null" },
    ];

    page = "gestion_ambiental";
  }

  /*===================================================
  Validamos tabla de productos contaminantes atmosfericos
  ====================================================*/

  if ($(".tableProductoContaminante").length > 0) {
    var url =
      "ajax/data-productos-contaminantes.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "actividad" },
      { data: "contaminacion" },
      { data: "presentacion" },
      { data: "consumo_anterior" },
      { data: "consumo_actual" },
      { data: "acciones" },
    ];

    page = "producto_contaminante_atmosferico";
  }

  /*===================================================
  Validamos tabla de residuos
  ====================================================*/

  if ($(".tableResiduos").length > 0) {
    var url =
      "ajax/data-residuos.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "tipo" },
      { data: "nombre" },
      { data: "descripcion" },
      { data: "acciones" },
    ];

    page = "residuos";
  }

  /*===================================================
  Validamos tabla de reducción de consumo
  ====================================================*/

  if ($(".tableReduccionConsumo").length > 0) {
    var url =
      "ajax/data-reduccion-consumo.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "nombre" },
      { data: "consumo_anterior" },
      { data: "consumo_actual" },
      { data: "ahorro" },
      { data: "acciones" },
    ];

    page = "reduccion_de_consumo";
  }

  /*===================================================
  Validamos tabla de reducción de consumo
  ====================================================*/

  if ($(".tableReduccionResiduos").length > 0) {
    var url =
      "ajax/data-reduccion-residuos.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "tipo" },
      { data: "generacion_anterior" },
      { data: "generacion_actual" },
      { data: "reduccion" },
      { data: "acciones" },
    ];

    page = "reduccion_de_residuos";
  }

  /*===================================================
  Validamos tabla de aumento de generación de residuos
  ====================================================*/

  if ($(".tableAumentoGeneracionResiduos").length > 0) {
    var url =
      "ajax/data-aumento-generacion-residuos.php?text=" +
      text +
      "&between1=" +
      $("#between1").val() +
      "&between2=" +
      $("#between2").val() +
      "&token=" +
      localStorage.getItem("token_user");

    var columns = [
      { data: "id" },
      { data: "tipo" },
      { data: "generacion_anterior" },
      { data: "generacion_actual" },
      { data: "reduccion" },
      { data: "acciones" },
    ];

    page = "aumento_de_generacion_residuos";
  }

  /*=============================================
  Ejecutamos DataTable
  =============================================*/
  var adminsTable = $("#adminsTable").DataTable({
    responsive: true,
    lengthChange: true,
    aLengthMenu: [
      [5, 20, 50, 100, 1000],
      [5, 20, 50, 100, 1000],
    ],
    autoWidth: true,
    processing: true,
    serverSide: true,
    order: [[0, "desc"]],
    ajax: {
      url: url,
      type: "POST",
    },
    columns: columns,

    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
    },

    buttons: [
      { extend: "copy", className: "btn-dark" },
      { extend: "csv", className: "btn-dark" },
      { extend: "excel", className: "btn-dark" },
      { extend: "pdf", className: "btn-dark", orientation: "landscape" },
      { extend: "print", className: "btn-dark" },
      { extend: "colvis", className: "btn-dark" },
    ],

    fnDrawCallback: function (oSettings) {
      if (oSettings.aoData.length == 0) {
        $(".dataTables_paginate").hide();
        $(".dataTables_info").hide();
      }
    },
  });

  if (text == "flat") {
    $("#adminsTable").on("draw.dt", function () {
      setTimeout(function () {
        adminsTable
          .buttons()
          .container()
          .appendTo("#adminsTable_wrapper .col-md-6:eq(0)");
      }, 100);
    });
  }
}

execDatatable(text);

/*=============================================
Ejecutar reporte 
=============================================*/

function reportActive(event) {
  if (event.target.checked) {
    $("#adminsTable").dataTable().fnClearTable();
    $("#adminsTable").dataTable().fnDestroy();

    setTimeout(function () {
      execDatatable("flat");
    }, 200);
  } else {
    $("#adminsTable").dataTable().fnClearTable();
    $("#adminsTable").dataTable().fnDestroy();

    setTimeout(function () {
      execDatatable("html");
    }, 200);
  }
}

/*=============================================
Rango de fechas
=============================================*/

$("#daterange-btn").daterangepicker(
  {
    locale: {
      format: "YYYY-MM-DD",
      separator: " - ",
      applyLabel: "Aplicar",
      cancelLabel: "Cancelar",
      fromLabel: "Desde",
      toLabel: "Hasta",
      customRangeLabel: "Rango Personalizado",
      daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
      monthNames: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
      ],
      firstDay: 1,
    },

    ranges: {
      Hoy: [moment(), moment()],
      Ayer: [moment().subtract(1, "days"), moment().subtract(1, "days")],
      "Últimos 7 días": [moment().subtract(6, "days"), moment()],
      "Últimos 30 días": [moment().subtract(29, "days"), moment()],
      "Este mes": [moment().startOf("month"), moment().endOf("month")],
      "Últimos mes": [
        moment().subtract(1, "month").startOf("month"),
        moment().subtract(1, "month").endOf("month"),
      ],
      "Este año": [moment().startOf("year"), moment().endOf("year")],
      "Últimos año": [
        moment().subtract(1, "year").startOf("year"),
        moment().subtract(1, "year").endOf("year"),
      ],
    },

    /* ranges: {
      "Today": [ moment(), moment() ],
      "Yesterday": [ moment().subtract(1, "days"), moment().subtract(1, "days") ],
      "Last 7 Days": [ moment().subtract(6, "days"), moment() ],
      "Last 30 Days": [ moment().subtract(29, "days"), moment() ],
      "This Month": [ moment().startOf("month"), moment().endOf("month") ],
      "Last Month": [ moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month"), ],
      "This Year": [ moment().startOf("year"), moment().endOf("year") ],
      "last Year": [ moment().subtract(1, "year").startOf("year"), moment().subtract(1, "year").endOf("year"), ],
    }, */

    startDate: moment($("#between1").val()),
    endDate: moment($("#between2").val()),
  },
  function (start, end) {
    window.location =
      page +
      "?start=" +
      start.format("YYYY-MM-DD") +
      "&end=" +
      end.format("YYYY-MM-DD");
  }
);

/*=============================================
Eliminar registro
=============================================*/

$(document).on("click", ".removeItem", function () {
  var idItem = $(this).attr("idItem");
  var table = $(this).attr("table");
  var suffix = $(this).attr("suffix");
  var deleteFile = $(this).attr("deleteFile");
  var page = $(this).attr("page");

  fncSweetAlert("confirm", "¿Esta seguro de eliminar el registro?", "").then(
    (resp) => {
      if (resp) {
        var data = new FormData();
        data.append("idItem", idItem);
        data.append("table", table);
        data.append("suffix", suffix);
        data.append("token", localStorage.getItem("token_user"));
        data.append("deleteFile", deleteFile);

        $.ajax({
          url: "ajax/ajax-delete.php",
          method: "POST",
          data: data,
          contentType: false,
          cache: false,
          processData: false,
          success: function (response) {
            if (response == 200) {
              fncSweetAlert(
                "success",
                "El registro ha sido eliminado exitosamente",
                "/" + page
              );
            } else {
              fncNotie(3, "Error eliminando el registro");
            }
          },
        });
      }
    }
  );
});
