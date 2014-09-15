# ATK4 CMS Addon

## Description
This add-on adds basic CMS functionality to your project based on TinyMCE javascript editor. 
This add-on requires <a href="https://github.com/rvadym/tinymce">rvadym/tinymce</a> add-on to be installed.

## Installation

* Clone add-on to add-on directory of your project.
* Clone <a href="https://github.com/rvadym/tinymce">rvadym/tinymce</a> add-on  add-on directory of your project.
* Run migration file.
* Add add-ons location to project pathfinder
      
        Frontend.php
        
        $this->pathfinder->addLocation(array(
            'addons'=>array('../addons')
        ))->setBasePath($this->pathfinder->base_location->getPath());


## Usage

### Simple usage with default Page

    class page_content extends rvadym\cms\Page_CMS {}

This will add CRUD functionality with Form on dedicated page. 

### Custom page

You can add CRUD manually on your page.

    $this->add('rvadym\cms\CRUD_CMS');

And you can customise many things in add-on.

    $this->add('rvadym\cms\CRUD_CMS',array(
         'grid_class'  => 'rvadym\cms\Grid_CMS'   // change to your own Grid inherited from add-on Grid
         'form_class' => 'rvadym\cms\Form_CMS'   // change to your own Form inherited from add-on Form
         'edit_url'       => './edit';             // url to page with Form
         'entity_name' => 'HTML Block';                     
    ));

### Custom Form

There are few settings to customise Form


* <code>$html_field_name</code> - use this parameter to set name of field to be used with WYSIWYG editor
* <code>$submit_button_text</code> - form submit button text
* <code>$success_message</code> - Success message after form is saved
* <code>$go_to_grid</code> - tells if site should be redirected to Grid page or stay on same page after form has been saved
* <code>$to_grid_url</code> - url to page with Grid


## To be done

* Two editors - WYSIWYG or Markup
* Fileupload