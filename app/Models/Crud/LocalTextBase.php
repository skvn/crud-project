<?php namespace App\Models\Crud;

use Skvn\Crud\Models\CrudModel;
use Skvn\Crud\Traits\AttachmentTrait;
use Skvn\Crud\Models\CrudFile;
use Skvn\Crud\Traits\InlineImgTrait;
class LocalTextBase extends CrudModel{

    use  AttachmentTrait, InlineImgTrait {
        AttachmentTrait::boot as attachBoot;        InlineImgTrait::boot as inlineImgBoot;    }


	protected $table = 'local_text';
		public $timestamps = false;
	
	public function __construct(array $attributes = array())
	{
	            $this->setAttach('docs',['multi'=>1]);
                        $this->setInlineImgCols(["body"]);
                parent::__construct($attributes);
    }//


    public static function boot()
    {
        self::attachBoot();
                self::inlineImgBoot();
                parent::boot();
    }

            public function docs()
    {
         return $this->belongsToMany('\Skvn\Crud\Models\CrudFile', 'crud_file_local_text');
    }
        

}
