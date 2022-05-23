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
 * Class Translation
 *
 * @property \App\Models\Fragment $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Translation extends Section implements Initializable{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Переводы';

    /**
     * Initialize class.
     */
    public function initialize()
    {
       
        $this->addToNavigation()->setIcon('fa fa-indent')->setPriority(9999);
        $this->setAccessLogic(function() {
            return auth()->user()->isSuperAdmin();
        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
       /*  $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('key')->setLabel('Ключ')->setWidth('400px'),
            AdminColumn::link('text')->setLabel('Текст')->setWidth('400px'),
            AdminColumn::text('lang')->setLabel('Открыт/Закрыт')->setHtmlAttribute('class', 'text-muted'),
        ]);

        $display->paginate(15);

        return $display; */
        return redirect('/admin/translations');
        
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
       /*  return AdminForm::panel()
        ->addBody(
            AdminFormElement::text('key', 'Ключ')->required()->unique(),
            AdminFormElement::text('text', 'Перевод'),
            AdminFormElement::select('lang', 'Язык', ['ru' => 'Русский', 'oz' => 'Узбекский', 'en' => 'Английский']),
        );
         */
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
    
    public function onDelete($id)
    {
        
    }
}