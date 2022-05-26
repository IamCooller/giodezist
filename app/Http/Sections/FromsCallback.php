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
use App\Models\FormsCallback as FromsCallbackModel;
/**
 * Class FromsCallback
 *
 * @property \App\Models\FromsCallback $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class FromsCallback extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

   /**
     * @var string
     */
    protected $title = 'Обратная связь';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $countNews = FromsCallbackModel::where('status', FromsCallbackModel::NEW_STATUS)->count();
        $this->addToNavigation()->setIcon('fa fa-anchor')->setPriority(99);
        if($countNews) {
            $this->addToNavigation()->setIcon('fa fa-anchor')->setPriority(99)->addBadge(new \SleepingOwl\Admin\Navigation\Badge($countNews));
        }
    }
    

    /**
     * @return DisplayInterface
     */
    public function onDisplay(FromsCallbackModel $model)
    {
 
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('tel')->setLabel('Телефон'),
            AdminColumn::link('name')->setLabel('ФИО'),
            AdminColumn::link('email')->setLabel('Email'),
            AdminColumn::link('form')->setLabel('Форма'),
            AdminColumn::link('created_at')->setLabel('Время'),
            AdminColumn::custom('status', function($model){
                return $model::getListStatus()[$model->status];
            })->setLabel('Статус')
        ]);

        
    
        $display->paginate(15);

        return $display;


    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {

        
        $elements =[];
        $model = $this->getModelValue();
        if($model == null){
            $form = AdminForm::form()->setElements([    
            
                AdminFormElement::text('tel')->setLabel('Телефон'),
                AdminFormElement::text('name')->setLabel('ФИО'),
                AdminFormElement::text('email')->setLabel('Email'),
                AdminFormElement::textarea('subject')->setLabel('Сообщение'),
                AdminFormElement::text('vacancy')->setLabel('Вакансия'),
                AdminFormElement::file('file')->setLabel('Резюме'),
                AdminFormElement::text('service')->setLabel('Услуга'),
                AdminFormElement::text('index')->setLabel('Индекс'),
                AdminFormElement::text('form')->setLabel('Форма')
            ]);
            return $form;
        }
        if($model->tel){
        $elements[]=
            AdminFormElement::text('tel')->setLabel('Телефон');
        }
        if($model->email){
            $elements[]=    
                AdminFormElement::text('email')->setLabel('Email');
        }
        if($model->form){
            $elements[]=    
                AdminFormElement::text('form')->setLabel('Форма');
        }
        if($model->index){
            $elements[]=    
                AdminFormElement::text('index')->setLabel('Индекс');
        }
            
        if($model->service){
            $elements[]=    
                AdminFormElement::text('service')->setLabel('Услуга');
        }
        if($model->file){
            $elements[]=    
                AdminFormElement::file('file')->setLabel('Резюме');
        }
        if($model->subject){
            $elements[]=    
                AdminFormElement::textarea('subject')->setLabel('Сообщение');
        }
        if($model->name){
            $elements[]=    
                AdminFormElement::text('name')->setLabel('ФИО');
        }
        if($model->vacancy){
            $elements[]=    
                AdminFormElement::text('vacancy')->setLabel('Вакансия');
        }
        $elements[] = AdminFormElement::select('status', 'Статус', FromsCallbackModel::getListStatus());
        $form = AdminForm::form()->setElements($elements);
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
