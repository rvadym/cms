<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 19:02
 */
namespace rvadym\cms;
class Page_CMS extends \Page {
    function init() {
        parent::init();
        $this->add('rvadym\cms\Initiator');
    }

    function page_index() {
        $this->add('View')->set("This is CMS page");
        $crud = $this->add('rvadym\cms\CRUD_CMS');
        $crud->setModel($m = $this->add('rvadym\cms\Model_CMS'));
    }
    function page_edit() {
        $this->add('View')->set("This is CMS edit page");
    }

}