<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:38
 */
namespace rvadym\cms;
class CRUD_CMS extends \CRUD {

    public $grid_class  = 'rvadym\\cms\\Grid_CMS';
    public $form_class  = 'rvadym\\cms\\Form_CMS';
    public $edit_url    = './edit';
    public $entity_name = 'HTML Block';

    private $allow_add_original  = true;
    private $allow_edit_original = true;

    function init() {
        $this->allow_add_original = $this->allow_add;
        $this->allow_add = false;
        $this->allow_edit_original = $this->allow_edit;
        $this->allow_edit = false;
        parent::init();
        $this->add('rvadym\cms\Initiator');

        // redirect on edit
        if ($this->allow_edit_original && $_GET['edit']) {
            $this->js()->univ()->redirect($this->app->url($this->edit_url,array('id'=>$_GET['edit'])))->execute();
        }

        // Add button
        if ($this->allow_add_original) {
            $this->add_button = $this->grid->addButton('Add '.$this->entity_name);
            $this->add_button->js('click')->univ()->redirect($this->edit_url);
        }
    }

    public function setModel($model, $fields = null, $grid_fields = null) {
        $m = parent::setModel($model,$fields,$grid_fields);
        if ($this->allow_edit_original) {
            if ($this->grid) {
                $this->grid->addColumn('button','edit');
            }
        }

        if ($this->form) {
            if ($this->form->add_submit_button) {
                $this->form->addSubmit($this->submit_button_text);
            }
            if ($this->form->submit_check) {
                $this->form->onSubmit(array($this,'checkSubmit'));
            }
        }

        return $m;
    }
}