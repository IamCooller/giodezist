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
 * Class Services
 *
 * @property \App\Models\Services $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Services extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Главные услуги';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-bus');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        
        $columns = [
            AdminColumn::text('ServiceNumber_oz', 'Порядковый номер')->setHtmlAttribute('class', 'text-center'),
         
          
            AdminColumn::text('ServiceTitle_oz', 'Название'),
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
                AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('ServiceTitle_ru', 'Название услуги'),
                    AdminFormElement::html('<hr>'),
                    AdminFormElement::number('ServiceNumber_ru', 'Порядковый номер'),
                ], 'col-xs-12 col-sm-6 col-md-4 col-lg-4')
                ->addColumn([
                    AdminFormElement::image('ServiceImg_ru', 'Изображение'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-8 col-lg-8'),
           
            ]))->setLabel('RU');
                return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::columns()
            ->addColumn([
                AdminFormElement::text('ServiceTitle_oz', 'Название услуги'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::number('ServiceNumber_oz', 'Порядковый номер'),
            ], 'col-xs-12 col-sm-6 col-md-4 col-lg-4')
            ->addColumn([
                AdminFormElement::image('ServiceImg_oz', 'Изображение'),
                AdminFormElement::html('<hr>'),
                
            ], 'col-xs-12 col-sm-6 col-md-8 col-lg-8'),
            ]))->setLabel('OZ');
            return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::text('ServiceTitle_en', 'Название услуги'),
                    AdminFormElement::html('<hr>'),
                    AdminFormElement::number('ServiceNumber_en', 'Порядковый номер'),
                ], 'col-xs-12 col-sm-6 col-md-4 col-lg-4')
                ->addColumn([
                    AdminFormElement::image('ServiceImg_en', 'Изображение'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-8 col-lg-8'),
                
            ]))->setLabel('EN');
            return $tab;
        });


        $form = AdminForm::card()->addBody([
            $tabs,
            new  FormElements([
                ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Название обязателен!</div>')
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
