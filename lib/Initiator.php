<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:46
 */
namespace rvadym\cms;
class Initiator extends \AbstractController {

    function init() {
        parent::init();
        if(isset($this->app->rvadym_cms) && is_object($this->app->rvadym_cms)) {
            // do nothing
        } else {
            $this->app->rvadym_cms = $this;
        }
    }

}