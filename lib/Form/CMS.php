<?php
/**
 * Created by PhpStorm.
 * User: vadym
 * Date: 11/09/14
 * Time: 17:10
 */
namespace rvadym\cms;
class Form_CMS extends \Form {

    // form configuration
    public $html_field_name    = 'html';
    public $submit_button_text = 'Save';
    public $success_message    = 'Saved!';
    public $go_to_grid   = true;
    public $to_grid_url  = '..';

    // tinymce configuration
    public $tinymce_theme      = 'advanced';
    public $tinymce_height     = '700';
    public $tinymce_language   = 'en';  // en|ru

    function init() {
        parent::init();
        $this->add('rvadym\\cms\\Initiator');
        $this->add('rvadym\\tinymce\\Controller_TinyMCE');
    }
    function setModel($model, $actual_fields = UNDEFINED) {
        parent::setModel($model,$actual_fields);

        if ($e = $this->hasElement($this->html_field_name)) {
            if (is_a($e,'Form_Field')) {
                $this->TinyMCE->addEditorTo(
                    $this->getElement($this->html_field_name),
                    array(
                        'theme'    => $this->tinymce_theme,
                        'height'   => $this->tinymce_height,
                        'language' => $this->tinymce_language,
                    )
                );
            }
        }

        $this->addSubmit($this->submit_button_text);
        $this->onSubmit(array($this,'checkSubmit'));
    }
    function checkSubmit() {
        $this->save();

        $succss_js = array(
            $this->js()->univ()->successMessage($this->success_message)
        );

        if ($this->go_to_grid) {
            $succss_js[] = $this->js()->univ()->redirect($this->to_grid_url);
        }

        $this->js(null,$succss_js)->execute();
    }
}