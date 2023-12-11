<?php
class TemplateController
{

    /*=============================================
	Array de vistas
	=============================================*/
    private static array $views;

    /*=============================================
	Inicializar el constructor y el array de vistas
	=============================================*/
    public function __construct()
    {
        self::$views = array(
            '/' => 'views/pages/home/index.php',
            
            '/login' => 'views/pages/login/index.php',
            '/logout' => 'views/pages/logout/index.php',

            '/users' => 'views/pages/users/index.php',
            '/users_new' => 'views/pages/users/actions/new.php',
            '/users_edit' => 'views/pages/users/actions/edit.php',

            '/admins' => 'views/pages/admins/index.php',
            '/admins_new' => 'views/pages/admins/actions/new.php',
            '/admins_edit' => 'views/pages/admins/actions/edit.php',

            '/realizada' => 'views/pages/accion/index.php',
            '/realizada_new' => 'views/pages/accion/actions/new.php',
            '/realizada_edit' => 'views/pages/accion/actions/edit.php',

            '/adaptacion' => 'views/pages/adaptacion/index.php',
            '/adaptacion_new' => 'views/pages/adaptacion/actions/new.php',
            '/adaptacion_edit' => 'views/pages/adaptacion/actions/edit.php',

            '/labor_seguimiento' => 'views/pages/conservacion_proteccion/index.php',
            '/labor_seguimiento_new' => 'views/pages/conservacion_proteccion/actions/new.php',
            '/labor_seguimiento_edit' => 'views/pages/conservacion_proteccion/actions/edit.php',

            '/educacion_externa' => 'views/pages/educacion_ambiental/index.php',
            '/educacion_externa_new' => 'views/pages/educacion_ambiental/actions/new.php',
            '/educacion_externa_edit' => 'views/pages/educacion_ambiental/actions/edit.php',

            '/ahorro_consumo_combustible' => 'views/pages/combustible_fosiles/ahorro_consumo_combustible/index.php',
            '/ahorro_consumo_combustible_new' => 'views/pages/combustible_fosiles/ahorro_consumo_combustible/actions/new.php',
            '/ahorro_consumo_combustible_edit' => 'views/pages/combustible_fosiles/ahorro_consumo_combustible/actions/edit.php',

            '/consumo_combustible' => 'views/pages/combustible_fosiles/consumo_combustible/index.php',
            '/consumo_combustible_new' => 'views/pages/combustible_fosiles/consumo_combustible/actions/new.php',
            '/consumo_combustible_edit' => 'views/pages/combustible_fosiles/consumo_combustible/actions/edit.php',

            '/educacion_ambiental' => 'views/pages/combustible_fosiles/educacion_ambiental/index.php',
            '/educacion_ambiental_new' => 'views/pages/combustible_fosiles/educacion_ambiental/actions/new.php',
            '/educacion_ambiental_edit' => 'views/pages/combustible_fosiles/educacion_ambiental/actions/edit.php',

            '/inventario_vehiculo' => 'views/pages/combustible_fosiles/inventario_vehiculo/index.php',
            '/inventario_vehiculo_new' => 'views/pages/combustible_fosiles/inventario_vehiculo/actions/new.php',
            '/inventario_vehiculo_edit' => 'views/pages/combustible_fosiles/inventario_vehiculo/actions/edit.php',

            '/compra_sostenible' => 'views/pages/compras_sostenible/compra_sostenible/index.php',
            '/compra_sostenible_new' => 'views/pages/compras_sostenible/compra_sostenible/actions/new.php',
            '/compra_sostenible_edit' => 'views/pages/compras_sostenible/compra_sostenible/actions/edit.php',

            // '/educacion_ambiental' => 'views/pages/compras_sostenible/educacion_ambiental/index.php',
            // '/educacion_ambiental_new' => 'views/pages/compras_sostenible/educacion_ambiental/actions/new.php',
            // '/educacion_ambiental_edit' => 'views/pages/compras_sostenible/educacion_ambiental/actions/edit.php',

            '/sustitucion_producto' => 'views/pages/compras_sostenible/sustitucion_producto/index.php',
            '/sustitucion_producto_new' => 'views/pages/compras_sostenible/sustitucion_producto/actions/new.php',
            '/sustitucion_producto_edit' => 'views/pages/compras_sostenible/sustitucion_producto/actions/edit.php',

            '/gestion_ambiental' => 'views/pages/contaminante_atmosferico/gestion_ambiental/index.php',
            '/gestion_ambiental_new' => 'views/pages/contaminante_atmosferico/gestion_ambiental/actions/new.php',
            '/gestion_ambiental_edit' => 'views/pages/contaminante_atmosferico/gestion_ambiental/actions/edit.php',

            '/mantenimiento_equipo_refrigeracion' => 'views/pages/contaminante_atmosferico/mantenimiento_equipo_refrigeracion/index.php',
            '/mantenimiento_equipo_refrigeracion_new' => 'views/pages/contaminante_atmosferico/mantenimiento_equipo_refrigeracion/actions/new.php',
            '/mantenimiento_equipo_refrigeracion_edit' => 'views/pages/contaminante_atmosferico/mantenimiento_equipo_refrigeracion/actions/edit.php',

            '/producto_contaminante_atmosferico' => 'views/pages/contaminante_atmosferico/producto_contaminante_atmosferico/index.php',
            '/producto_contaminante_atmosferico_new' => 'views/pages/contaminante_atmosferico/producto_contaminante_atmosferico/actions/new.php',
            '/producto_contaminante_atmosferico_edit' => 'views/pages/contaminante_atmosferico/producto_contaminante_atmosferico/actions/edit.php',

            '/ahorro_consumo_electricidad' => 'views/pages/energia_electrica/ahorro_consumo_electricidad/index.php',
            '/ahorro_consumo_electricidad_new' => 'views/pages/energia_electrica/ahorro_consumo_electricidad/actions/new.php',
            '/ahorro_consumo_electricidad_edit' => 'views/pages/energia_electrica/ahorro_consumo_electricidad/actions/edit.php',

            '/consumo_mensual_electricidad' => 'views/pages/energia_electrica/consumo_mensual_electricidad/index.php',
            '/consumo_mensual_electricidad_new' => 'views/pages/energia_electrica/consumo_mensual_electricidad/actions/new.php',
            '/consumo_mensual_electricidad_edit' => 'views/pages/energia_electrica/consumo_mensual_electricidad/actions/edit.php',

            // '/educacion_ambiental' => 'views/pages/energia_electrica/educacion_ambiental/index.php',
            // '/educacion_ambiental_new' => 'views/pages/energia_electrica/educacion_ambiental/actions/new.php',
            // '/educacion_ambiental_edit' => 'views/pages/energia_electrica/educacion_ambiental/actions/edit.php',

            '/aumento_de_generacion_residuos' => 'views/pages/gestion_residuos_solidos/aumento_de_generacion_de_residuos/index.php',
            '/aumento_de_generacion_residuos_new' => 'views/pages/gestion_residuos_solidos/aumento_de_generacion_de_residuos/actions/new.php',
            '/aumento_de_generacion_residuos_edit' => 'views/pages/gestion_residuos_solidos/aumento_de_generacion_de_residuos/actions/edit.php',

            // '/educacion_ambiental' => 'views/pages/gestion_residuos_solidos/educacion_ambiental/index.php',
            // '/educacion_ambiental_new' => 'views/pages/gestion_residuos_solidos/educacion_ambiental/actions/new.php',
            // '/educacion_ambiental_edit' => 'views/pages/gestion_residuos_solidos/educacion_ambiental/actions/edit.php',

            '/reduccion_de_consumo' => 'views/pages/gestion_residuos_solidos/reduccion_de_consumo/index.php',
            '/reduccion_de_consumo_new' => 'views/pages/gestion_residuos_solidos/reduccion_de_consumo/actions/new.php',
            '/reduccion_de_consumo_edit' => 'views/pages/gestion_residuos_solidos/reduccion_de_consumo/actions/edit.php',

            '/residuos' => 'views/pages/gestion_residuos_solidos/residuos/index.php',
            '/residuos_new' => 'views/pages/gestion_residuos_solidos/residuos/actions/new.php',
            '/residuos_edit' => 'views/pages/gestion_residuos_solidos/residuos/actions/edit.php',

            '/reduccion_de_residuos' => 'views/pages/gestion_residuos_solidos/reduccion_de_residuos/index.php',
            '/reduccion_de_residuos_new' => 'views/pages/gestion_residuos_solidos/reduccion_de_residuos/actions/new.php',
            '/reduccion_de_residuos_edit' => 'views/pages/gestion_residuos_solidos/reduccion_de_residuos/actions/edit.php',

            '/ahorro_consumo_agua' => 'views/pages/recurso_hidrico/ahorro_consumo_agua/index.php',
            '/ahorro_consumo_agua_new' => 'views/pages/recurso_hidrico/ahorro_consumo_agua/actions/new.php',
            '/ahorro_consumo_agua_edit' => 'views/pages/recurso_hidrico/ahorro_consumo_agua/actions/edit.php',

            '/consumo_agua_potable' => 'views/pages/recurso_hidrico/consumo_agua_potable/index.php',
            '/consumo_agua_potable_new' => 'views/pages/recurso_hidrico/consumo_agua_potable/actions/new.php',
            '/consumo_agua_potable_edit' => 'views/pages/recurso_hidrico/consumo_agua_potable/actions/edit.php',

            // '/educacion_ambiental' => 'views/pages/recurso_hidrico/educacion_ambiental/index.php',
            // '/educacion_ambiental_new' => 'views/pages/recurso_hidrico/educacion_ambiental/actions/new.php',
            // '/educacion_ambiental_edit' => 'views/pages/recurso_hidrico/educacion_ambiental/actions/edit.php',

            // '/educacion_ambiental' => 'views/pages/tratamiento_aguas_residuales/educacion_ambiental/index.php',
            // '/educacion_ambiental_new' => 'views/pages/tratamiento_aguas_residuales/educacion_ambiental/actions/new.php',
            // '/educacion_ambiental_edit' => 'views/pages/tratamiento_aguas_residuales/educacion_ambiental/actions/edit.php',
            
            '/sistemas_tratamientos' => 'views/pages/tratamiento_aguas_residuales/sistemas_tratamientos/index.php',
            '/sistemas_tratamientos_new' => 'views/pages/tratamiento_aguas_residuales/sistemas_tratamientos/actions/new.php',
            '/sistemas_tratamientos_edit' => 'views/pages/tratamiento_aguas_residuales/sistemas_tratamientos/actions/edit.php',
        );
    }

    /*=============================================
	Mostrar vista en la plantilla
	=============================================*/
    public static function returnView(string $routes = "/")
    {
        $route = @self::$views[$routes];
        $route = $route === "" || $route === null ? "views/pages/home/index.php" : $route;
        include($route);
    }

    /*=============================================
	Ruta del sistema administrativo
	=============================================*/
    static public function path()
    {
        return "http://adminsystem.com/";
    }

    /*=============================================
	Traemos la Vista Principal de la plantilla
	=============================================*/
    public function index()
    {
        include "views/template.php";
    }

    /*=============================================
	Ruta para las imágenes del sistema
	=============================================*/
    static public function srcImg()
    {
        return "http://adminsystem.com/";
    }

    /*=============================================
	Devolver la imagen del MP
	=============================================*/
    static public function returnImg($id, $picture, $method)
    {
        if ($method == "direct") {
            if ($picture != null) {
                return TemplateController::srcImg() . "views/img/users/" . $id . "/" . $picture;
            } else {

                return TemplateController::srcImg() . "views/img/users/default/default.png";
            }
        } else {

            return $picture;
        }
    }

    /*=============================================
	Función para mayúscula inicial
	=============================================*/
    static public function capitalize($value)
    {
        $value = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
        return $value;
    }

    /*=============================================
	Función Limpiar HTML
	=============================================*/
    static public function htmlClean($code)
    {
        $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $replace = array('>', '<', '\\1');
        $code = preg_replace($search, $replace, $code);
        $code = str_replace("> <", "><", $code);

        return $code;
    }

}