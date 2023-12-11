/*=============================================
Función para Notie Alert
=============================================*/

function fncNotie(type, text) {
  notie.alert({
    type: type,
    text: text,
    time: 10,
  });
}

/*=============================================
Función Sweetalert
=============================================*/

function fncSweetAlert(type, text, url) {
  switch (type) {
    /*=============================================
		Cuando ocurre un error
		=============================================*/

    case "error":
      if (url == null) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "_top");
          }
        });
      }

      break;

    /*=============================================
		Cuando es correcto
		=============================================*/

    case "success":
      if (url == null) {
        Swal.fire({
          icon: "success",
          title: "Success",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "success",
          title: "Success",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "_top");
          }
        });
      }

      break;

    /*=============================================
		Cuando estamos precargando
		=============================================*/

    case "loading":
      Swal.fire({
        allowOutsideClick: false,
        icon: "info",
        text: text,
      });
      Swal.showLoading();

      break;

    /*=============================================
		Cuando necesitamos cerrar la alerta suave
		=============================================*/

    case "close":
      Swal.close();

      break;

    /*=============================================
		Cuando solicitamos confirmación
		=============================================*/

    case "confirm":
      return new Promise((resolve) => {
        Swal.fire({
          text: text,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          cancelButtonText: "Cancel",
          confirmButtonText: "Yes, delete!",
        }).then(function (result) {
          resolve(result.value);
        });
      });

      break;
  }
}

/*=============================================
Función Material Preload
=============================================*/

function matPreloader(type) {
  var preloader = new $.materialPreloader({
    position: "top",
    height: "5px",
    col_1: "#159756",
    col_2: "#da4733",
    col_3: "#3b78e7",
    col_4: "#fdba2c",
    fadeIn: 200,
    fadeOut: 200,
  });

  if (type == "on") {
    preloader.on();
  }

  if (type == "off") {
    $(".load-bar-container").remove();
  }
}

/*=============================================
Función para formatear Inputs
=============================================*/

function fncFormatInputs() {
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
}
