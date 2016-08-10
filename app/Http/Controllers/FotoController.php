<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

public function getIndex()
{
return 'mostrando fotos del usuario';
}
  
	public function getCrearFoto()
	{
		return 'Formilario de crear fotos';
	}
	 public function postCrearFoto()
	 {
return 'almacenando foto';

	 }
	public function getActualizarFoto()
	{
		return 'Formilario de Actualizar fotos';
	}
	 public function postActualizarFoto()
	 {
return 'Actualizar foto';

	 }
	 	public function getEliminarFoto()
	{
		return 'Formilario de eliminar fotos';
	}
	 public function postEliminarFoto()
	 {
return 'eliminar foto';

	 }
	 public function missingMethod($parameters = array())
	{
		abort(404);
	}

}