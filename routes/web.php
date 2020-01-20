<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('courses', 'CoursesController');
Route::resource('lesson_units', 'Lesson_unitsController');
Route::resource('concepts', 'ConceptsController');
Route::resource('learning_objects', 'Learning_objectsController');
Route::resource('moodle_courses', 'MoodleCoursesController');
Route::resource('moodle_concepts', 'MoodleConceptsController');
Route::resource('course_modules', 'CourseModulesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/moodle_courses/{course}/showconcepts', 'MoodleCoursesController@showconcepts');
Route::get('/moodle_courses/{course}/concepts', 'MoodleCoursesController@concepts');

Route::get('{course}/moodle_concepts/create', 'MoodleConceptsController@create');
Route::post('{/moodle_concepts', 'MoodleConceptsController@store');

Route::get('/moodle_courses/{course}/course_modules', 'CourseModulesController@index');

Route::put('{/course_modules/storemodules', 'CourseModulesController@storemodules');


Route::get('/courses/{course}/showlessons', 'CoursesController@showlessons');
Route::get('/courses/{course}/lessons', 'CoursesController@lessons');

Route::get('{course}/lesson_units/create', 'Lesson_unitsController@create');
Route::get('/lesson_units/{lesson_unit}/showconcepts', 'Lesson_unitsController@showconcepts');
Route::get('/lesson_units/{lesson_unit}/concepts', 'Lesson_unitsController@concepts');

Route::get('{lesson_unit}/concepts/create', 'ConceptsController@create');
Route::post('{/concepts', 'ConceptsController@store');
Route::get('/concepts/{concept}/addlearningobjects', 'ConceptsController@addLOs');
Route::post('/concepts_learning_objects', 'ConceptsController@concept_learning_object');

//Route::get('{lesson_unit}/learning_objects/create', 'Learning_objectsController@create');
Route::get('/courses/{course}/learning_objects/create', 'Learning_objectsController@create');
//Route::get('/lesson_units/{lesson_unit}/showlearningobjects', 'Learning_objectsController@showlearningobjects');
Route::post('{/learning_objects', 'Learning_objectsController@store');

Route::resource('quizs','quizController');


