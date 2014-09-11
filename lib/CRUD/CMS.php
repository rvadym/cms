<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:38
 */
namespace rvadym\cms;
class CRUD_CMS extends \CRUD {
    public $grid_class='rvadym\\cms\\Grid_CMS';
    public $form_class='rvadym\\cms\\Form_CMS';
    function init() {
        parent::init();
        $this->add('rvadym\cms\Initiator');
    }
}