<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:10
 */
namespace rvadym\cms;
class Form_CMS extends \Form {
    function init() {
        parent::init();
        $this->add('rvadym\cms\Initiator');
    }
}