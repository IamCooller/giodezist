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
use App\Models\TabDocuments;
/**
 * Class Documents
 *
 * @property \App\Models\Documents $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Documents extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Документы';

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
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('tab_oz')->setLabel('# Таблица'),
            AdminColumn::link('regist_oz')->setLabel('Дата регистрации'),
            AdminColumn::link('title_oz')->setLabel('Заголовок'),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Заголовок,Таблица, Дата регистрации появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::file('file_ru', 'Документ'),
                AdminFormElement::text('title_ru', 'Заголовок'),
                AdminFormElement::date('regist_ru', 'Дата регистрации')->setFormat('Y/m/d'),
                AdminFormElement::text('number_ru', 'Номер'),
              
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_oz', 'Документ'),
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::date('regist_oz', 'Дата регистрации')->setFormat('Y/m/d'),
                AdminFormElement::text('number_oz', 'Номер'),
                AdminFormElement::select('tab_oz', 'Таблица',[
                    'Законы РУз'=>'Законы РУз',
                    'Кодексы РУз'=>'Кодексы РУз',
                    'Постановления Президента РУЗ'=>'Постановления Президента РУЗ',
                    'Указы Президента РУз'=>'Указы Президента РУз', 
                    'Распоряжения Президента' =>'Распоряжения Президента',
                    'Постановления Кабинета Министров РУз'=>'Постановления Кабинета Министров РУз',
                    'Приказы Узбекгидроэнерго'=>'Приказы Узбекгидроэнерго',
                    'Ведомственные акты'=>'Ведомственные акты',
                
                    'О лицензировании'=>'О лицензировании']),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_en', 'Документ'),
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::date('regist_en', 'Дата регистрации')->setFormat('Y/m/d'),
                AdminFormElement::text('number_en', 'Номер'),
                AdminFormElement::select('tab_en', 'Таблица',[
                    'Законы РУз'=>'Законы РУз',
                    'Кодексы РУз'=>'Кодексы РУз',
                    'Постановления Президента РУЗ'=>'Постановления Президента РУЗ',
                    'Указы Президента РУз'=>'Указы Президента РУз', 
                    'Распоряжения Президента' =>'Распоряжения Президента',
                    'Постановления Кабинета Министров РУз'=>'Постановления Кабинета Министров РУз',
                    'Приказы Узбекгидроэнерго'=>'Приказы Узбекгидроэнерго',
                    'Ведомственные акты'=>'Ведомственные акты',
                 
                    'О лицензировании'=>'О лицензировании']),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs,
            AdminFormElement::number('count', 'Нумерация'),
            AdminFormElement::select('service_id', 'Главная услуга', TabDocuments::class)->setDisplay('TablicenseTitle_ru')->required(),
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
