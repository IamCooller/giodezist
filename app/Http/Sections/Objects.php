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
 * Class Objects
 *
 * @property \App\Models\Objects $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Objects extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Объекты';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fas fa-archive');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('ObjectNumber_oz', 'Порядковый номер')->setHtmlAttribute('class', 'text-center'),
         
          
            AdminColumn::text('TitleObject_oz', 'Название'),
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
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Порядковый номер и Название появляется после заполнения формы на Узбекском языке</div>')
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
                    AdminFormElement::image('ObjectImg_ru', 'Изображение'),
                    AdminFormElement::text('TitleObject_ru', 'Название'),
                    AdminFormElement::text('SubTitleObject_ru', 'Краткое описание'),
                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::wysiwyg('ContentObject_ru', 'Контент'),
                    AdminFormElement::images('PhotosObject_ru', 'Галерея'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::number('ObjectNumber_ru', 'Порядковый номер'),
                AdminFormElement::checkbox('footer_ru', 'Показывать в футере'),
                
            ]))->setLabel('RU');
                return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_oz', 'Title'),
                    AdminFormElement::text('description_oz', 'Description'),
                    AdminFormElement::text('keywords_oz', 'Keywords'),
                  
                    AdminFormElement::image('ObjectImg_oz', 'Изображение'),
                    AdminFormElement::text('TitleObject_oz', 'Название'),
                    AdminFormElement::text('SubTitleObject_oz', 'Краткое описание'),
                   

                    AdminFormElement::html('<hr>'),
               
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::wysiwyg('ContentObject_oz', 'Контент'),
                    AdminFormElement::images('PhotosObject_oz', 'Галерея'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::number('ObjectNumber_oz', 'Порядковый номер'),
                AdminFormElement::checkbox('footer_oz', 'Показывать в футере'),
            ]))->setLabel('OZ');
            return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('title_en', 'Title'),
                    AdminFormElement::text('description_en', 'Description'),
                    AdminFormElement::text('keywords_en', 'Keywords'),
                  

                    AdminFormElement::image('ObjectImg_en', 'Изображение'),
                    AdminFormElement::text('TitleObject_en', 'Название'),
                    AdminFormElement::text('SubTitleObject_en', 'Краткое описание'),

                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::wysiwyg('ContentObject_en', 'Контент'),
                    AdminFormElement::images('PhotosObject_en', 'Галерея'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::number('ObjectNumber_en', 'Порядковый номер'),
                AdminFormElement::checkbox('footer_en', 'Показывать в футере'),
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
