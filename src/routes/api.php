<?php

Route::get('/', 'IndexController')->name('index');

Route::get('/{key}.json', 'ShowController')->name('show');
