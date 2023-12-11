<?php
class MedidaController
{
    /*=============================================
	Creación accion
	=============================================*/
    public function create()
    {
        if (isset($_POST["nombre"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';
            /*=============================================
			Validamos la sintaxis de los campos
			=============================================*/
            if (
                preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["nombre"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["descripcion"]) &&
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["objetivo"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["meta"]) &&
                preg_match('/^[0-9]{1,}$/', $_POST["indicador"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["presupuesto"])
            ) {
                /*=============================================
				Agrupamos la información 
				=============================================*/
                $data = array(
                    "nombre" => trim($_POST["nombre"]),
                    "descripcion" => trim($_POST["descripcion"]),
                    "objetivo" => trim($_POST["objetivo"]),
                    "meta" => trim($_POST["meta"]),
                    "indicador" => trim($_POST["indicador"]),
                    "plazo" => trim($_POST["plazo"]),
                    "presupuesto" => trim($_POST["presupuesto"]),
                    "fecha_crea" => date("Y-m-d")
                );
                /*=============================================
				Solicitud a la API
				=============================================*/
                $url = "adaptaciones?token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("Exitosamente", "El registro fue creado exitosamente.", "/adaptacion");
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/adaptacion");
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
        if (isset($_POST["idMedida"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';

            if ($id == $_POST["idMedida"]) {
                $url = "adaptaciones?linkTo=id&equalTo=" . $id;
                $method = "GET";
                $fields = array();
                $response = CurlController::request($url, $method, $fields);
                if ($response->status == 200) {
                    /*=============================================
					Validamos la sintaxis de los campos
					=============================================*/
                    if (
                        preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["nombre"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["descripcion"]) &&
                        preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["objetivo"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["meta"]) &&
                        preg_match('/^[0-9]{1,}$/', $_POST["indicador"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["presupuesto"])
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
                        $data = "nombre=". trim($_POST["nombre"])."&descripcion=". trim($_POST["descripcion"])."&objetivo=". trim($_POST["objetivo"])."&meta=". trim($_POST["meta"])."&indicador=". trim($_POST["indicador"])."&plazo=". trim($_POST["plazo"])."&presupuesto=". trim($_POST["presupuesto"]);
                        /*=============================================
						Solicitud a la API
						=============================================*/
                        $url = "adaptaciones?id=" . $id . "&nameId=id&token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/adaptacion");
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
