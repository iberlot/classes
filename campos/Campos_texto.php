<?php
require_once 'class_campo.php';

// require_once '../funciones.php';

/**
 *
 * @author iberlot
 *
 */
class Campos_texto extends class_campo
{

	/**
	 * Constructor de la clase.
	 * Puede recibir un array con los datos a inicializar. Utiliza el constructor padre y en caso de corresponder carga los propios.
	 *
	 * @param array $array
	 */
	public function __construct($array = array())
	{
		if (isset ($array) and !empty ($array))
		{
			parent::__construct ($array);
		}
		else
		{
			parent::__construct ();
		}
	}

	public function generar_elemento_form_update()
	{
		return "<input type='text' name='" . $this->campo . "' id='" . $this->campo . "' " . $this->autofocus . " class='input-text " . $this->getAtrRequerido () . "' " . $this->getAtrDisabled () . " value='" . $this->getValor () . "' " . $this->establecerMaxLeng () . " " . $this->establecerHint () . " " . $this->getAdicionalInput () . "/> \n";
	}
}

?>