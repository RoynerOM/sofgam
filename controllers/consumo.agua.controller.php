<?php
class ConsumoAguaController
{
    /*=============================================
	Creación accion
	=============================================*/
    public function create()
    {
        if (isset($_POST["area"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';
            /*=============================================
			Validamos la sintaxis de los campos
			=============================================*/
            if (
                preg_match('/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["area"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["enero"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["febrero"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["marzo"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["abril"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["mayo"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["junio"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["julio"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["agosto"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["septiembre"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["octubre"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["noviembre"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["diciembre"]) &&
                preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["total"])
            ) {
                /*=============================================
				Agrupamos la información 
				=============================================*/
                $data = array(
                    "area" => trim($_POST["area"]),
                    "nise" => trim($_POST["nise"]),
                    "anio" => trim($_POST["anio"]),
                    "enero" => trim($_POST["enero"]),
                    "febrero" => trim($_POST["febrero"]),
                    "marzo" => trim($_POST["marzo"]),
                    "abril" => trim($_POST["abril"]),
                    "mayo" => trim($_POST["mayo"]),
                    "junio" => trim($_POST["junio"]),
                    "julio" => trim($_POST["julio"]),
                    "agosto" => trim($_POST["agosto"]),
                    "septiembre" => trim($_POST["septiembre"]),
                    "octubre" => trim($_POST["octubre"]),
                    "noviembre" => trim($_POST["noviembre"]),
                    "diciembre" => trim($_POST["diciembre"]),
                    "total" => trim($_POST["total"]),
                    "fecha_crea" => date("Y-m-d")
                );
                /*=============================================
				Solicitud a la API
				=============================================*/
                $url = "consumos_agua_potable?token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("Exitosamente", "El registro fue creado exitosamente.", "/consumo_agua_potable");
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/consumo_agua_potable");
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
        if (isset($_POST["idConsumoAgua"])) {
            echo '<script>
				matPreloader("on");
				fncSweetAlert("loading", "Cargando...", "");
			</script>';

            if ($id == $_POST["idConsumoAgua"]) {
                $url = "consumos_agua_potable?linkTo=id&equalTo=" . $id;
                $method = "GET";
                $fields = array();
                $response = CurlController::request($url, $method, $fields);
                if ($response->status == 200) {
                    /*=============================================
					Validamos la sintaxis de los campos
					=============================================*/
                    if (
                        preg_match('/^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/', $_POST["area"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["enero"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["febrero"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["marzo"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["abril"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["mayo"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["junio"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["julio"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["agosto"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["septiembre"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["octubre"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["noviembre"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["diciembre"]) &&
                        preg_match('/^[0-9]+(\.[0-9]{1,2})$/', $_POST["total"])
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
                        $data = "area=".trim($_POST["area"])."&nise=".trim($_POST["nise"])."&anio=".trim($_POST["anio"])."&enero=".trim($_POST["enero"])."&febrero=".trim($_POST["febrero"])."&marzo=".trim($_POST["marzo"])."&abril=".trim($_POST["abril"])."&mayo=".trim($_POST["mayo"])."&junio=".trim($_POST["junio"])."&julio=".trim($_POST["julio"])."&agosto=".trim($_POST["agosto"])."&septiembre=".trim($_POST["septiembre"])."&octubre=".trim($_POST["octubre"])."&noviembre=".trim($_POST["noviembre"])."&diciembre=".trim($_POST["diciembre"])."&total=".trim($_POST["total"]);
                        /*=============================================
						Solicitud a la API
						=============================================*/
                        $url = "consumos_agua_potable?id=" . $id . "&nameId=id&token=" . $_SESSION["admin"]->token_user;
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
								fncSweetAlert("success", "El registro fue creado exitosamente.", "/consumo_agua_potable");
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
