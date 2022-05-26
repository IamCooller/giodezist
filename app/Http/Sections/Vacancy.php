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
 * Class Vacancy
 *
 * @property \App\Models\Vacancy $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Vacancy extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title="Вакансии";

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa-solid fa-people-carry-box');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('title_oz')->setLabel('Заголовок'),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Заголовок регистрации появляется после заполнения формы на Узбекском языке</div>')
        ->setPlacement('card.footer');
        $display->paginate(15);

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {

        $tabs = AdminDisplay::tabbed();


        $tabs->setTabs(function ($id) {
            $tabsRU = [];
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_ru', 'Заголовок'),
                AdminFormElement::textarea('subtitle_ru', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_ru', 'Описание'),
                
              
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::textarea('subtitle_oz', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_oz', 'Описание'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::textarea('subtitle_en', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_en', 'Описание'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs, 
            new  FormElements([
                ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Заголовок обязателен!</div>')
            ])
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
