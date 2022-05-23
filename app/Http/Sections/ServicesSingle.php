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
use App\Models\Services;
/**
 * Class ServicesSingle
 *
 * @property \App\Models\ServicesSingle $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class ServicesSingle extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Услуги';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-laptop-file');
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
         
          
            AdminColumn::text('TitleService_oz', 'Название'),
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
               
                  
                    AdminFormElement::image('ServiceImg_ru', 'Изображение услуги'),
                    AdminFormElement::text('TitleService_ru', 'Название услуги'),
                    AdminFormElement::wysiwyg('SubTitleService_ru', 'Краткое описание услуги'),
                   

                    AdminFormElement::html('<hr>'),
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::wysiwyg('BlockOneService_ru', 'Первый блок услуги'),
                    AdminFormElement::wysiwyg('BlockTwoService_ru', 'Второй блок услуги'),
                    AdminFormElement::image('BlockTwoImgService_ru', 'Изображение второго блока'),
                    AdminFormElement::wysiwyg('BlockThreeService_ru', 'Третий блок услуги'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::select('MainService_ru', 'Главная услуга', Services::class)->setDisplay('ServiceTitle_ru'),
                AdminFormElement::number('ServiceNumber_ru', 'Порядковый номер')->unique(),
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
                  
                    AdminFormElement::image('ServiceImg_oz', 'Изображение услуги'),
                    AdminFormElement::text('TitleService_oz', 'Название услуги'),
                    AdminFormElement::text('SubTitleService_oz', 'Краткое описание услуги'),
                   

                    AdminFormElement::html('<hr>'),
               
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::text('BlockOneService_oz', 'Первый блок услуги'),
                    AdminFormElement::text('BlockTwoService_oz', 'Второй блок услуги'),
                    AdminFormElement::text('BlockTwoImgService_oz', 'Изображение второго блока'),
                    AdminFormElement::text('BlockThreeService_oz', 'Третий блок услуги'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::select('MainService_oz', 'Главная услуга', Services::class)->setDisplay('ServiceTitle_oz'),
                AdminFormElement::number('ServiceNumber_oz', 'Порядковый номер')->unique(),
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
                  
                    AdminFormElement::image('ServiceImg_en', 'Изображение услуги'),
                    AdminFormElement::text('TitleService_en', 'Название услуги'),
                    AdminFormElement::text('SubTitleService_en', 'Краткое описание услуги'),
                   


                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')
                ->addColumn([
                    AdminFormElement::text('BlockOneService_en', 'Первый блок услуги'),
                    AdminFormElement::text('BlockTwoService_en', 'Второй блок услуги'),
                    AdminFormElement::text('BlockTwoImgService_en', 'Изображение второго блока'),
                    AdminFormElement::text('BlockThreeService_en', 'Третий блок услуги'),
                    AdminFormElement::html('<hr>'),
                    
                ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::select('MainService_en', 'Главная услуга', Services::class)->setDisplay('ServiceTitle_en'),
                AdminFormElement::number('ServiceNumber_en', 'Порядковый номер')->unique(),
            ]))->setLabel('EN');
            return $tab;
        });


        $form = AdminForm::card()->addBody([
            $tabs
           
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
