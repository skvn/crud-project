<?php namespace App\Models\Crud;

use Skvn\Crud\Models\CrudModel;

class DynoNewsBase extends CrudModel{



	protected $table = 'dyno_news';
	
	public function __construct(array $attributes = array())
	{
	                    parent::__construct($attributes);
    }//


    public static function boot()
    {
                        parent::boot();
    }

    

}
