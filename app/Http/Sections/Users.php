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
use App\Role;
/**
 * Class Users
 *
 * @property \App\Models\User $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Users extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    protected $title = 'Пользователи';
    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
       /*  $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o'); */
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
     


            $display = AdminDisplay::datatablesAsync()
            ->with('roles')
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns([
                AdminColumn::link('name', 'Username'),
                AdminColumn::email('email', 'Email')->setWidth('150px'),
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
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Username')->required(),
            AdminFormElement::password('password', 'Password')->required()->addValidationRule('min:6'),
            AdminFormElement::text('email', 'E-mail')->required()->addValidationRule('email'),
            AdminFormElement::multiselect('roles', 'Roles', Role::class)->setDisplay('name'),
        ])->setHtmlAttribute('enctype', 'multipart/form-data');
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
  

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
