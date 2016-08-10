<?php namespace GestorImagenes;


use Illuminate\Database\Eloquent\Model;


class Usuario extends Model {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albumes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','nombre', 'descripcion', 'usuario_id'];

	//funcion que facilita ver las fotos del usuarios
	public function fotos()
	{

	return $this->hasMany('GestorImagenes\Foto');
	}


public function propietario()
{

return $this->belongsTo('GestorImagenes\Usuario');


}

}
