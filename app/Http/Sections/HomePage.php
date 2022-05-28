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
use SleepingOwl\Admin\Navigation\Page;

/**
 * Class HomePage
 *
 * @property \App\Models\HomePage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class HomePage extends Section implements Initializable
{
     /**
     * @var string
     */
    protected $title = 'Главная страница';

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-server')->setPriority(0)->setAccessLogic(function (Page $page) {
            return auth()->user()->isHomeAdmin();
        });
    }


    /**
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

                
                AdminFormElement::image('background_ru', 'Главный фон'),
                AdminFormElement::text('MainTitle_ru', 'Главный заголовок'),
                AdminFormElement::wysiwyg('achievement_ru', 'Достижения на главной'),
                AdminFormElement::text('servicesTitle_ru', 'Заголовок услуг'),
                AdminFormElement::wysiwyg('about_ru', 'О компании'),
                AdminFormElement::image('aboutImg_ru', 'Изображения "о компании"'),
                AdminFormElement::text('ProjectsTitle_ru', 'Заголовок ВЫПОЛНЕННЫЕ ПРОЕКТЫ'),
                AdminFormElement::text('NewsTitle_ru', 'Заголовок "Новости"'),
                AdminFormElement::text('ContactTitle_ru', 'Заголовок "Контакты"'),
                AdminFormElement::wysiwyg('ContactPhone_ru', 'Телефоны в контактах'),
                AdminFormElement::wysiwyg('ContactGraph_ru', 'График работы в контактах'),
                AdminFormElement::text('ContactAddress_ru', 'Адрес в контактах'),
                AdminFormElement::wysiwyg('ContactMap_ru', 'Карта в контактах'),

      
            ]))->setLabel('RU');

            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                
                AdminFormElement::image('background_oz', 'Главный фон'),
                AdminFormElement::text('MainTitle_oz', 'Главный заголовок'),
                AdminFormElement::wysiwyg('achievement_oz', 'Достижения на главной'),
                AdminFormElement::text('servicesTitle_oz', 'Заголовок услуг'),
                AdminFormElement::wysiwyg('about_oz', 'О компании'),
                AdminFormElement::image('aboutImg_oz', 'Изображения "о компании"'),
                AdminFormElement::text('ProjectsTitle_oz', 'Заголовок ВЫПОЛНЕННЫЕ ПРОЕКТЫ'),
                AdminFormElement::text('NewsTitle_oz', 'Заголовок "Новости"'),
                AdminFormElement::text('ContactTitle_oz', 'Заголовок "Контакты"'),
                AdminFormElement::wysiwyg('ContactPhone_oz', 'Телефоны в контактах'),
                AdminFormElement::wysiwyg('ContactGraph_oz', 'График работы в контактах'),
                AdminFormElement::text('ContactAddress_oz', 'Адрес в контактах'),
                AdminFormElement::wysiwyg('ContactMap_oz', 'Карта в контактах'),

              
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
            
                AdminFormElement::image('background_en', 'Главный фон'),
                AdminFormElement::text('MainTitle_en', 'Главный заголовок'),
                AdminFormElement::wysiwyg('achievement_en', 'Достижения на главной'),
                AdminFormElement::text('servicesTitle_en', 'Заголовок услуг'),
                AdminFormElement::wysiwyg('about_en', 'О компании'),
                AdminFormElement::image('aboutImg_en', 'Изображения "о компании"'),
                AdminFormElement::text('ProjectsTitle_en', 'Заголовок ВЫПОЛНЕННЫЕ ПРОЕКТЫ'),
                AdminFormElement::text('NewsTitle_en', 'Заголовок "Новости"'),
                AdminFormElement::text('ContactTitle_en', 'Заголовок "Контакты"'),
                AdminFormElement::wysiwyg('ContactPhone_en', 'Телефоны в контактах'),
                AdminFormElement::wysiwyg('ContactGraph_en', 'График работы в контактах'),
                AdminFormElement::text('ContactAddress_en', 'Адрес в контактах'),
                AdminFormElement::wysiwyg('ContactMap_en', 'Карта в контактах'),
                
             
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
    public function onCreate()
    {
        return $this->onEdit(null);
    }
  
}
