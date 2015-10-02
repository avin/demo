<?php

Route::get('demo', 'Avin\Demo\Http\DemoController@index');

Route::get('demo/test', function () {
    return 'Test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('demo/view', function () {
    return view('avin-demo::index');
});

Route::get('demo/config', function () {
    return config('avin-demo.main.hello').config('avin-demo.main.world');
});

Route::get('demo/model', function () {
    dd(\Avin\Demo\Models\Item::get());
});