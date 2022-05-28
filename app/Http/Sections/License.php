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
 * Class License
 *
 * @property \App\Models\License $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class License extends Section
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Лицензии';

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
        return $this->fireEdit(1);
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
                AdminFormElement::text('licenseTitle_ru', 'Заголовок'),
                AdminFormElement::html('<hr>'),


                AdminFormElement::files('licensePhotos_ru', 'Изображения'),
            ]))->setLabel('RU');
            return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('keywords_oz', 'Keywords'),

                AdminFormElement::text('licenseTitle_oz', 'Заголовок'),

                AdminFormElement::html('<hr>'),

                AdminFormElement::files('licensePhotos_oz', 'Изображения'),
            ]))->setLabel('OZ');
            return $tab;
        });

        $tabs->setTabs(function ($id) {
            $tab = [];
            $tab[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),


                AdminFormElement::text('licenseTitle_en', 'Заголовок'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::files('licensePhotos_en', 'Изображения'),
            ]))->setLabel('EN');
            return $tab;
        });


        $form = AdminForm::card()->addBody([
            $tabs,

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
