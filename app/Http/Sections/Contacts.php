<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Section;

/**
 * Class Contacts
 *
 * @property \App\Models\Contacts $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Contacts extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title='Контакты';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fas fa-address-book');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay()
    {
 

        return $this->fireEdit(1);


    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    

    public function onEdit($id)
    {


        $tabs = AdminDisplay::tabbed();

    

       

        $tabs->setTabs(function ($id) {
            $tabsRU = [];
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_ru', 'Title'),
                AdminFormElement::text('description_ru', 'Description'),
                AdminFormElement::text('keywords_ru', 'Keywords'),

                AdminFormElement::text('Contacttitle_ru', 'Заголовок'),
                AdminFormElement::wysiwyg('Contacttel_ru', 'Телефон'),
                AdminFormElement::wysiwyg('Contactgraphs_ru', 'График работы'),

                AdminFormElement::textarea('Contactaddress_ru', 'Адрес'),
                AdminFormElement::wysiwyg('Contactmap_ru', 'Карта'),
                AdminFormElement::html('<hr>'),
      
            ]))->setLabel('RU');

            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                
                AdminFormElement::text('Contacttitle_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('Contacttel_oz', 'Телефон'),
                AdminFormElement::wysiwyg('Contactgraphs_oz', 'График работы'),

                AdminFormElement::textarea('Contactaddress_oz', 'Адрес'),
                AdminFormElement::wysiwyg('Contactmap_oz', 'Карта'),
                AdminFormElement::html('<hr>'),

              
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
            
                AdminFormElement::text('Contacttitle_en', 'Заголовок'),
                AdminFormElement::wysiwyg('Contacttel_en', 'Телефон'),
                AdminFormElement::wysiwyg('Contactgraphs_en', 'График работы'),

                AdminFormElement::textarea('Contactaddress_en', 'Адрес'),
                AdminFormElement::wysiwyg('Contactmap_en', 'Карта'),
                AdminFormElement::html('<hr>'),
             
            ]))->setLabel('EN'); 
            return $tabsRU;
        });
      
  

      

        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([

          

       ]);
      
   
    return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}



