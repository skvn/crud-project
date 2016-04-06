<?php namespace App\Models\Crud;

use Skvn\Crud\Models\CrudModel;

class ContestBase extends CrudModel{



	protected $table = 'contest';
		public $timestamps = false;
	
	public function __construct(array $attributes = array())
	{
	                    parent::__construct($attributes);
    }//


    public static function boot()
    {
                        parent::boot();
    }

    

}
