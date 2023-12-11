<?php
class AccionController
{
    /*=============================================
	Creación accion
	=============================================*/
    public function create()
    {
        if (isset($_POST["modulo"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';
            /*=============================================
			Validamos la sintaxis de los campos
			=============================================*/
            if (
                preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["modulo"]) &&
                preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["tipo"]) &&
                preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["accion"]) &&
                preg_match('/^[0-9]{1,}$/', $_POST["realizadas"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["descripcion"])
            ) {
                /*=============================================
				Agrupamos la información 
				=============================================*/
                $data = array(
                    "modulo" => trim($_POST["modulo"]),
                    "tipo" => trim($_POST["tipo"]),
                    "accion" => trim($_POST["accion"]),
                    "fecha_accion" => trim($_POST["fecha_accion"]),
                    "realizadas" => trim($_POST["realizadas"]),
                    "descripcion" => trim($_POST["descripcion"]),
                    "imagen" => NULL,
                    "fecha_crea" => date("Y-m-d")
                );
                /*=============================================
				Solicitud a la API
				=============================================*/
                $url = "acciones_realizadas?token=" . $_SESSION["admin"]->token_user;
                $method = "POST";
                $fields = $data;
                $response = CurlController::request($url, $method, $fields);
                /*=============================================
				Respuesta de la API
				=============================================*/
                if ($response->status == 200) {
                    /*=============================================
					Tomamos el ID
					=============================================*/
                    $id = $response->results->lastId;
                    /*=============================================
					Validamos y creamos la imagen en el servidor
					=============================================*/
                    /* if (isset($_FILES["picture"]["tmp_name"]) && !empty($_FILES["picture"]["tmp_name"])) { */
                    /* $fields = array(
                            "file" => $_FILES["picture"]["tmp_name"],
                            "type" => $_FILES["picture"]["type"],
                            "folder" => "users/" . $id,
                            "name" => $id,
                            "width" => 300,
                            "height" => 300
                        );
                        $picture = CurlController::requestFile($fields); */
                    /*=============================================
						Solicitud a la API
						=============================================*/
                    /* $url = "users?id=" . $id . "&nameId=id_user&token=" . $_SESSION["admin"]->token_user . "&table=users&suffix=user";
                        $method = "PUT";
                        $fields = 'picture_user=' . $picture;
                        $response = CurlController::request($url, $method, $fields);
                        if ($response->status == 200) {
                            echo '<script>
								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("Cerrar", "", "");
								fncSweetAlert("Exitosamente", "El registro fue creado exitosamente.", "/realizada");
							</script>';
                        } */
                    /* } else { */
                    /* echo '<script>
							fncFormatInputs();
							matPreloader("off");
							fncSweetAlert("Cerrar", "", "");
							fncNotie(3, "Error guardando la imagen.");
						</script>'; */
                    /* } */
                    echo '<script>
								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("close", "", "");
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/realizada");
							</script>';
                }
            } else {
                echo '<script>
					fncFormatInputs();
					matPreloader("off");
					fncSweetAlert("close", "", "");
					fncNotie(3, "Error de sintaxis del campo.");
				</script>';
            }
        }
    }
    /*=============================================
	Edición accion
	=============================================*/
    public function edit($id)
    {
        if (isset($_POST["idAccion"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';

            if ($id == $_POST["idAccion"]) {
                $url = "acciones_realizadas?linkTo=id&equalTo=" . $id;
                $method = "GET";
                $fields = array();
                $response = CurlController::request($url, $method, $fields);
                if ($response->status == 200) {
                    /*=============================================
					Validamos la sintaxis de los campos
					=============================================*/
                    if (
                        preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["modulo"]) &&
                        preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["tipo"]) &&
                        preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["accion"]) &&
                        preg_match('/^[0-9]{1,}$/', $_POST["realizadas"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["descripcion"])
                    ) {
                        /*=============================================
						Validar cambio imagen
						=============================================*/
                        /* if (isset($_FILES["picture"]["tmp_name"]) && !empty($_FILES["picture"]["tmp_name"])) {
                            $fields = array(
                                "file" => $_FILES["picture"]["tmp_name"],
                                "type" => $_FILES["picture"]["type"],
                                "folder" => "users/" . $id,
                                "name" => $id,
                                "width" => 300,
                                "height" => 300
                            );
                            $picture = CurlController::requestFile($fields);
                        } else {
                            $picture = $response->results[0]->picture_user;
                        } */
                        /*=============================================
						Agrupamos la información 
						=============================================*/
                        $data = "modulo=". trim($_POST["modulo"]) ."&tipo=". trim($_POST["tipo"]) . "&accion=". trim($_POST["accion"]) . "&fecha_accion=". trim($_POST["fecha_accion"]) . "&realizadas=". trim($_POST["realizadas"]) . "&descripcion=". trim($_POST["descripcion"]);
                        /*=============================================
						Solicitud a la API
						=============================================*/
                        $url = "acciones_realizadas?id=" . $id . "&nameId=id&token=" . $_SESSION["admin"]->token_user;
                        $method = "PUT";
                        $fields = $data;
                        $response = CurlController::request($url, $method, $fields);
                        /*=============================================
						Respuesta de la API
						=============================================*/
                        if ($response->status == 200) {
                            echo '<script>
								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("close", "", "");
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/realizada");
							</script>';
                        } else {
                            echo '<script>
								fncFormatInputs();
								matPreloader("off");
								fncSweetAlert("close", "", "");
								fncNotie(3, "Error editando el registro.");
							</script>';
                        }
                    } else {
                        echo '<script>
							fncFormatInputs();
							matPreloader("off");
							fncSweetAlert("close", "", "");
							fncNotie(3, "Error de sintaxis del campo.");
						</script>';
                    }
                } else {
                    echo '<script>
						fncFormatInputs();
						matPreloader("off");
						fncSweetAlert("close", "", "");
						fncNotie(3, "Error editando el registro.");
					</script>';
                }
            } else {
                echo '<script>
					fncFormatInputs();
					matPreloader("off");
					fncSweetAlert("close", "", "");
					fncNotie(3, "Error editando el registro.");
				</script>';
            }
        }
    }
}
