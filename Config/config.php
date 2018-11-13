<?php

/**
 * Este archivo se encargara de contener e inicializar todas las variables de configuracion que va a utilizar el sistema
 *
 * @author iberlot
 * @version 20141106
 *
 */
header ('Content-Type: text/html;charset=utf-8');

date_default_timezone_set ('America/Buenos_Aires');

session_start ();

$host = 'localhost';
$username = 'u626436671_cdsk';
$password = 'JuliaMatilde';
$database = 'u626436671_cdsk';
$titulo = 'CdSK';

$configured = 1;
$logging = TRUE;
$logfile = 'log.txt';
$allowcommands = TRUE;
$debug = "0";
$debugfile = 'debug.txt';

// Base de datos
// Parametros para editar <<<<<
DEFINE (DB_HOST, $host);
DEFINE (DB_USER, $username);
DEFINE (DB_PASS, $password);
DEFINE (DB_BASE, $database);
DEFINE (PAGE_TITLE, $titulo);

$Path = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/CdSK/';

// includes
require_once ($Path . "classes/class_abm.php");
require_once ($Path . "classes/class_db.php");
require_once ($Path . "classes/class_paginado.php");
require_once ($Path . "classes/class_orderby.php");
require_once ($Path . "classes/class_validar.php");
// require_once($Path."classes/funciones_comunes.php");

// conexi�n
$db = new class_db (DB_HOST, DB_USER, DB_PASS, DB_BASE, "utf8");
$db->mostrarErrores = true;
$db->connect ();
?>