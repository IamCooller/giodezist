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
 * Class Departaments
 *
 * @property \App\Models\Departaments $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Departaments extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Отделы";

    /**
     * @var string
     */
    protected $alias;



    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            
            AdminColumn::image('departamentsImg_oz', 'Изображение'),
            AdminColumn::text('publish_at', 'Дата публикации')->setHtmlAttribute('class', 'text-center'),     
            AdminColumn::text('departamentsTitle_oz', 'Заголовок'),
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
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Изображение, Заголовок появляется после заполнения формы на Узбекском языке</div>')
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
                  
                    AdminFormElement::text('departamentsTitle_ru', 'Заголовок'),
                    AdminFormElement::textarea('departamentsSubTitle_ru', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                 
                    AdminFormElement::image('departamentsImg_ru', 'Главное изображение'),
                    AdminFormElement::wysiwyg('departamentsContent_ru', 'Контент'),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::files('departamentsPhotos_ru', 'Изображения'),
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
                
                    AdminFormElement::text('departamentsTitle_oz', 'Заголовок'),
                    AdminFormElement::textarea('departamentsSubTitle_oz', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                   
                    AdminFormElement::image('departamentsImg_oz', 'Главное изображение'),
                    AdminFormElement::wysiwyg('departamentsContent_oz', 'Контент'),
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::files('departamentsPhotos_oz', 'Изображения'),
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
                 
                    AdminFormElement::text('departamentsTitle_en', 'Заголовок'),
                    AdminFormElement::textarea('departamentsSubTitle_en', 'Под заголовок'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    
                    AdminFormElement::image('departamentsImg_en', 'Главное изображение'),
                    AdminFormElement::wysiwyg('departamentsContent_en', 'Контент'),
                    
                    
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::files('departamentsPhotos_en', 'Изображения'),
            ]))->setLabel('EN');
            return $tab;
        });


        $form = AdminForm::card()->addBody([
            $tabs,
            AdminFormElement::date('publish_at', 'Дата публикации')->setCurrentDate(),
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
