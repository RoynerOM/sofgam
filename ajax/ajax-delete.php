<?php
require_once "../controllers/curl.controller.php";
class DeleteController
{
    public $idItem;
    public $table;
    public $suffix;
    public $token;
    // public $deleteFile;
    public function dataDelete()
    {
        /* $security = explode("~", base64_decode($this->idItem));
        if ($security[1] == $this->token) {
            $fields = array(
                // "deleteFile" => $this->deleteFile
            );
            $picture = CurlController::requestFile($fields);
            if ($picture == "ok") { */
                // $url = $this->table . "?id=" . $security[0] . "&nameId=id_" . $this->suffix . "&token=" . $this->token . "&table=users&suffix=user";
                if ($this->table == "users") {
                    $url = $this->table . "?id=" . $this->idItem . "&nameId=id_" . $this->suffix . "&token=" . $this->token . "&table=" . $this->table . "&suffix=user";
                } else {
                    $url = $this->table . "?id=" . $this->idItem . "&nameId=id&token=" . $this->token;
                }
                $method = "DELETE";
                $fields = array();
                $response = CurlController::request($url, $method, $fields);
                echo $response->status;
            /* }
        } else {
            echo 404;
        } */
    }
}

if (isset($_POST["idItem"])) {
    $validate = new DeleteController();
    $validate->idItem = $_POST["idItem"];
    $validate->table = $_POST["table"];
    $validate->suffix = $_POST["suffix"];
    $validate->token = $_POST["token"];
    // $validate->deleteFile = $_POST["deleteFile"];
    $validate->dataDelete();
}
