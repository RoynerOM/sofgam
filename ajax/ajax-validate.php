<?php

require_once "../controllers/curl.controller.php";

class ValidateController
{
    public $data;
    public $table;
    public $suffix;
    public function dataRepeat()
    {
        $url = $this->table . "?select=" . $this->suffix . "&linkTo=" . $this->suffix . "&equalTo=" . $this->data;
        $method = "GET";
        $fields = array();
        $response = CurlController::request($url, $method, $fields);
        echo $response->status;
    }
}
if (isset($_POST["data"])) {
    $validate = new ValidateController();
    $validate->data = $_POST["data"];
    $validate->table = $_POST["table"];
    $validate->suffix = $_POST["suffix"];
    $validate->dataRepeat();
}
