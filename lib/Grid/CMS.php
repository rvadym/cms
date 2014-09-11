<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:38
 */
namespace rvadym\cms;
class Grid_CMS extends \Grid {
    function init() {
        parent::init();
        $this->add('rvadym\cms\Initiator');
    }
}