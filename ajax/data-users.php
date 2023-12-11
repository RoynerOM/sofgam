<?php
require_once "../controllers/curl.controller.php";
require_once "../controllers/template.controller.php";
class DatatableController
{
    public function data()
    {
        if (!empty($_POST)) {
            /*=============================================
            Capturando y organizando las variables POST de DT
            =============================================*/
            $draw = $_POST["draw"]; //Contador utilizado por DataTables para garantizar que los retornos de Ajax de las solicitudes de procesamiento del lado del servidor sean dibujados en secuencia por DataTables 
            $orderByColumnIndex = $_POST['order'][0]['column']; //Índice de la columna de clasificación (0 basado en el índice, es decir, 0 es el primer registro)
            $orderBy = $_POST['columns'][$orderByColumnIndex]["data"]; //Obtener el nombre de la columna de clasificación de su índice
            $orderType = $_POST['order'][0]['dir']; // Obtener el orden ASC o DESC
            $start  = $_POST["start"]; //Indicador de primer registro de paginación.
            $length = $_POST['length']; //Indicador de la longitud de la paginación.
            /*=============================================
            El total de registros de la data
            =============================================*/
            $url = "users?select=id_user&linkTo=rol_user&equalTo=default";
            $method = "GET";
            $fields = array();
            $response = CurlController::request($url, $method, $fields);
            if ($response->status == 200) {
                $totalData = $response->total;
            } else {
                echo '{"data": []}';
                return;
            }
            /*=============================================
           	Búsqueda de datos
            =============================================*/
            $select = "id_user,displayname_user,email_user,username_user,date_created_user";
            $url = "users?select=" . $select . "&linkTo=rol_user&equalTo=default";
            $data = CurlController::request($url, $method, $fields)->results;
            $recordsFiltered = $totalData;
            /*============================================
            Cuando la data viene vacía
            =============================================*/
            if (empty($data)|| $data == "Not Found") {
                echo '{"data": []}';
                return;
            }
            /*=============================================
            Construimos el dato JSON a regresar
            =============================================*/
            $dataJson = '{
            	"Draw": ' . intval($draw) . ',
            	"recordsTotal": ' . $totalData . ',
            	"recordsFiltered": ' . $recordsFiltered . ',
            	"data": [';
            /*=============================================
            Recorremos la data
            =============================================*/
            foreach ($data as $key => $value) {
                $displayname_user = $value->displayname_user;
                $username_user = $value->username_user;
                $email_user = $value->email_user;
                $date_created_user = $value->date_created_user;
                $dataJson .= '{ 
            		"id_user":"' . ($start + $key + 1) . '",
            		"displayname_user":"' . $displayname_user . '",
            		"username_user":"' . $username_user . '",
            		"email_user":"' . $email_user . '",
            		"date_created_user":"' . $date_created_user . '"
            	},';
            }
            $dataJson = substr($dataJson, 0, -1); // este substr quita el último caracter de la cadena, que es una coma, para impedir que rompa la tabla
            $dataJson .= ']}';
            echo $dataJson;
        }
    }
}
/*=============================================
Activar función DataTable
=============================================*/
$data = new DatatableController();
$data->data();
