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
 * Class Structure
 *
 * @property \App\Models\Structure $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Structure extends Section implements Initializable
{
    /**
    * @var bool
    */
   protected $checkAccess = false;

   /**
    * @var string
    */
   protected $title = 'Структура';

   /**
    * @var string
    */
   protected $alias;

   /**
    * Initialize class.
    */
   public function initialize()
   {
       $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-id-badge');
   }

   /**
    * @param array $payload
    *
    * @return DisplayInterface
    */
   public function onDisplay($payload = [])
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
           
           $tab = [];
           $tab[] = AdminDisplay::tab(AdminForm::elements([
               AdminFormElement::text('title_ru', 'Title'),
               AdminFormElement::text('description_ru', 'Description'),
               AdminFormElement::text('keywords_ru', 'Keywords'),
                                           
                 
                   AdminFormElement::text('structureTitle_ru', 'Заголовок'),
                   AdminFormElement::html('<hr>'),
            
                
                   AdminFormElement::image('structureImg_ru', 'Структура'),
                   AdminFormElement::wysiwyg('structureContent_ru', 'Контент'),
                   
                   AdminFormElement::html('<hr>'),
                   
              
           ]))->setLabel('RU');
               return $tab;
       });

       $tabs->setTabs(function ($id) {
           $tab = [];
           $tab[] = AdminDisplay::tab(AdminForm::elements([
               AdminFormElement::text('title_oz', 'Title'),
               AdminFormElement::text('description_oz', 'Description'),
               AdminFormElement::text('keywords_oz', 'Keywords'),
                                     
               
                   AdminFormElement::text('structureTitle_oz', 'Заголовок'),
                   AdminFormElement::html('<hr>'),
             
                  
                   AdminFormElement::image('structureImg_oz', 'Структура'),
                   AdminFormElement::wysiwyg('structureContent_oz', 'Контент'),
                   
                   AdminFormElement::html('<hr>'),
                   
            
           ]))->setLabel('OZ');
           return $tab;
       });

       $tabs->setTabs(function ($id) {
           $tab = [];
           $tab[] = AdminDisplay::tab(AdminForm::elements([
               AdminFormElement::text('title_en', 'Title'),
               AdminFormElement::text('description_en', 'Description'),
               AdminFormElement::text('keywords_en', 'Keywords'),

             
                   AdminFormElement::text('structureTitle_en', 'Заголовок'),
                   AdminFormElement::html('<hr>'),
             
                   
                   AdminFormElement::image('structureImg_en', 'Структура'),
                   AdminFormElement::wysiwyg('structureContent_en', 'Контент'),
                   
                   
                   AdminFormElement::html('<hr>'),
                   
           
           ]))->setLabel('EN');
           return $tab;
       });


       $form = AdminForm::card()->addBody([
           $tabs,
         
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
