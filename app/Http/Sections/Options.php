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
 * Class Options
 *
 * @property \App\Models\Options $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Options extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Настройки';

    /**
     * @var string
     */
    protected $alias;
  

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-hammer')->setTitle('Настройки');
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
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {

        $tabs = AdminDisplay::tabbed();

      

        $tabs->setTabs(function ($id) {
            $tabsRU = [];
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_ru', 'Номер телефона в шапке'),
                AdminFormElement::wysiwyg('tel2_ru', 'Номер телефона в подвале'),
                AdminFormElement::text('email_ru', 'E-mail в шапке'),
                AdminFormElement::text('email2_ru', 'E-mail в подвале'),
    
                AdminFormElement::wysiwyg('address_ru', 'Адрес в подвале'),
                AdminFormElement::file('logo_ru', 'Логотип'),

          
           
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_oz', 'Номер телефона в шапке'),
                AdminFormElement::wysiwyg('tel2_oz', 'Номер телефона в подвале'),
                AdminFormElement::text('email_oz', 'E-mail в шапке'),
                AdminFormElement::text('email2_oz', 'E-mail в подвале'),
    
                AdminFormElement::wysiwyg('address_oz', 'Адрес в подвале'),
                AdminFormElement::file('logo_oz', 'Логотип'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_en', 'Номер телефона в шапке'),
                AdminFormElement::wysiwyg('tel2_en', 'Номер телефона в подвале'),
                AdminFormElement::text('email_en', 'E-mail в шапке'),
                AdminFormElement::text('email2_en', 'E-mail в подвале'),
    
                AdminFormElement::wysiwyg('address_en', 'Адрес в подвале'),
                AdminFormElement::file('logo_en', 'Логотип'),
                
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
        AdminFormElement::text('email_form', 'E-mail для форм'),
      
       ]);

      
   
    return $form;



    
    }

    
}
