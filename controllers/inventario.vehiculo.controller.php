<?php
class InventarioVehiculoController
{
    /*=============================================
	Creación accion
	=============================================*/
    public function create()
    {
        if (isset($_POST["activo"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';
            /*=============================================
			Validamos la sintaxis de los campos
			=============================================*/
            if (
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["activo"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["equipo"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["marca"]) &&
                preg_match('/^[0-9]{1,}$/', $_POST["anio"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["tipo"])
            ) {
                /*=============================================
				Agrupamos la información 
				=============================================*/
                $data = array(
                    "activo" => trim($_POST["activo"]),
                    "equipo" => trim($_POST["equipo"]),
                    "marca" => trim($_POST["marca"]),
                    "anio" => trim($_POST["anio"]),
                    "tipo" => trim($_POST["tipo"]),
                    "fecha_crea" => date("Y-m-d")
                );
                /*=============================================
				Solicitud a la API
				=============================================*/
                $url = "inventarios_vehiculo?token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("Exitosamente", "El registro fue creado exitosamente.", "/inventario_vehiculo");
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/inventario_vehiculo");
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
        if (isset($_POST["idInventarioVehiculo"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';

            if ($id == $_POST["idInventarioVehiculo"]) {
                $url = "inventarios_vehiculo?linkTo=id&equalTo=" . $id;
                $method = "GET";
                $fields = array();
                $response = CurlController::request($url, $method, $fields);
                if ($response->status == 200) {
                    /*=============================================
					Validamos la sintaxis de los campos
					=============================================*/
                    if (
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["activo"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["equipo"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["marca"]) &&
                        preg_match('/^[0-9]{1,}$/', $_POST["anio"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["tipo"])
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
                        $data = "activo=".trim($_POST["activo"])."&equipo=".trim($_POST["equipo"])."&marca=".trim($_POST["marca"])."&anio=".trim($_POST["anio"])."&tipo=".trim($_POST["tipo"]);
                        /*=============================================
						Solicitud a la API
						=============================================*/
                        $url = "inventarios_vehiculo?id=" . $id . "&nameId=id&token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/inventario_vehiculo");
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
