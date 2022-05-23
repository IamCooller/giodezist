<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}]);

$config = array_merge(config('translation-manager.route'), ['namespace' => 'Barryvdh\TranslationManager']);
Route::group($config, function($router)
{
    $router->get('view/{groupKey?}', 'Controller@getView')->where('groupKey', '.*');
    $router->get('/{groupKey?}', 'Controller@getIndex')->where('groupKey', '.*');
    $router->post('/add/{groupKey}', 'Controller@postAdd')->where('groupKey', '.*');
    $router->post('/edit/{groupKey}', 'Controller@postEdit')->where('groupKey', '.*');
    $router->post('/groups/add', 'Controller@postAddGroup');
    $router->post('/delete/{groupKey}/{translationKey}', 'Controller@postDelete')->where('groupKey', '.*');
    $router->post('/import', 'Controller@postImport');
    $router->post('/find', 'Controller@postFind');
    $router->post('/locales/add', 'Controller@postAddLocale');
    $router->post('/locales/remove', 'Controller@postRemoveLocale');
    $router->post('/publish/{groupKey}', 'Controller@postPublish')->where('groupKey', '.*');
    $router->post('/translate-missing', 'Controller@postTranslateMissing');
});