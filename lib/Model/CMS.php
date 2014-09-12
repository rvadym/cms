<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 18:54
 */
namespace rvadym\cms;
class Model_CMS extends \SQL_Model {
    public $table='rvadym_cms';

    function init() {
        parent::init();
        $this->add('rvadym\cms\Initiator');
        $this->addField('name')->required('required');
        $this->addField('spot')->required('required');
        $this->addField('html')->type('text');
        $this->addField('is_enabled')->type('boolean');
    }

}