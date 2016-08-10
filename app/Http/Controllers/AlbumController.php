<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

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


	public function getCrearAlbum()
	{
		return 'Formilario de crear Albums';
	}
	 public function postCrearAlbum()
	 {
return 'almacenando foto';

	 }
	public function getActualizarAlbum()
	{
		return 'Formilario de Actualizar Albums';
	}
	 public function postActualizarAlbum()
	 {
return 'Actualizar foto';

	 }
	 	public function getEliminarAlbum()
	{
		return 'Formilario de eliminar Albums';
	}
	 public function postEliminarAlbum()
	 {
return 'eliminar Album';

	 }
	 public function missingMethod($parameters = array())
	{
		abort(404);
	}

}