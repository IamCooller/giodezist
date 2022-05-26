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
use SleepingOwl\Admin\Form\FormElements;

/**
 * Class News
 *
 * @property \App\Models\News $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class News extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title="Новости";

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-newspaper');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            
            AdminColumn::image('NewsImg_oz', 'Изображение'),
            AdminColumn::text('published_oz', 'Дата')->setHtmlAttribute('class', 'text-center'),     
            AdminColumn::text('NewsTitle_oz', 'Заголовок'),
        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Дата,Изображение, Заголовок появляется после заполнения формы на Узбекском языке</div>')
        ->setPlacement('card.footer');

        $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
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
                  
                    AdminFormElement::text('NewsTitle_ru', 'Название'),
                    AdminFormElement::textarea('NewsSubTitle_ru', 'Краткое описание'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                 
                    AdminFormElement::image('NewsImg_ru', 'Изображение'),
                    AdminFormElement::date('published_ru', 'Дата')->setCurrentDate(),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::wysiwyg('NewsContent_ru', 'Контент'),
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
                
                    AdminFormElement::text('NewsTitle_oz', 'Название'),
                    AdminFormElement::textarea('NewsSubTitle_oz', 'Краткое описание'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                   
                    AdminFormElement::image('NewsImg_oz', 'Изображение'),
                    AdminFormElement::date('published_oz', 'Дата')->setCurrentDate(),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::wysiwyg('NewsContent_oz', 'Контент'),
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
                 
                    AdminFormElement::text('NewsTitle_en', 'Название'),
                    AdminFormElement::textarea('NewsSubTitle_en', 'Краткое описание'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    
                    AdminFormElement::image('NewsImg_en', 'Изображение'),
                    AdminFormElement::date('published_en', 'Дата')->setCurrentDate(),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::wysiwyg('NewsContent_en', 'Контент'),
            ]))->setLabel('EN');
            return $tab;
        });


        $form = AdminForm::card()->addBody([
            $tabs,
            new  FormElements([
                ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Заголовок обязателен!</div>')
            ])
           
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
