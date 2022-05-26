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
 * Class Tasks
 *
 * @property \App\Models\Tasks $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Tasks extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Задачи и цели';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-list-check');
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
                AdminFormElement::columns()
                ->addColumn([                               
                  
                    AdminFormElement::text('tasksTitle_ru', 'Заголовок'),
                    AdminFormElement::wysiwyg('tasksSubTitle_ru', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                 
                    AdminFormElement::image('tasksImg_ru', 'Главное изображение'),
                    AdminFormElement::wysiwyg('tasksContent_ru', 'Контент'),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),

            ]))->setLabel('RU');
                return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::columns()
                ->addColumn([                               
                
                    AdminFormElement::text('tasksTitle_oz', 'Заголовок'),
                    AdminFormElement::wysiwyg('tasksSubTitle_oz', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                   
                    AdminFormElement::image('tasksImg_oz', 'Главное изображение'),
                    AdminFormElement::wysiwyg('tasksContent_oz', 'Контент'),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
            ]))->setLabel('OZ');
            return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::columns()
                ->addColumn([                               
                 
                    AdminFormElement::text('tasksTitle_en', 'Заголовок'),
                    AdminFormElement::wysiwyg('tasksSubTitle_en', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    
                    AdminFormElement::image('tasksImg_en', 'Главное изображение'),
                    AdminFormElement::wysiwyg('tasksContent_en', 'Контент'),
                    
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),

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
