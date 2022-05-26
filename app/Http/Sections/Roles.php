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
 * Class Roles
 *
 * @property \App\Models\Role $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Roles extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;
    /**
     * @var string
     */
    protected $title = 'Права';

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
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        /* $this->addToNavigation($priority = 500, function() {
            return \App\Role::count();
        }); */
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()
            ->with('users')
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns([
                AdminColumn::text('id', '#')->setWidth('30px'),
                AdminColumn::link('display_name', 'display_name')->setWidth('100px'),
                AdminColumn::text('name', 'Name')
            ])->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('display_name', 'display_name')->required(),
            AdminFormElement::text('name', 'name')->required()
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
