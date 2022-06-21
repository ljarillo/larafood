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

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function (){

        /**
         * Product x Category
         */
        Route::get('products/{id}/category/{idCategory}/detach', 'CategoryProductController@detachCategoriesProduct')
            ->name('products.categories.detach');
        Route::post('products/{id}/categories', 'CategoryProductController@attachCategoriesProduct')
            ->name('products.categories.attach');
        Route::any('products/{id}/categories/create', 'CategoryProductController@categoriesAvailable')
            ->name('products.categories.available');
        Route::get('products/{id}/categories', 'CategoryProductController@categories')
            ->name('products.categories');
        Route::get('categories/{id}/products', 'CategoryProductController@products')
            ->name('categories.products');

        /**
         * Routes Products
         */
        Route::any('products/search', 'ProductController@search')->name('products.search');
        Route::resource('products', 'ProductController');

        /**
         * Routes Categories
         */
        Route::any('categories/search', 'CategoryController@search')->name('categories.search');
        Route::resource('categories', 'CategoryController');

        /**
         * Routes Users
         */
        Route::any('users/search', 'UserController@search')->name('users.search');
        Route::resource('users', 'UserController');

        /**
         * Plans x Profile
         */
        Route::get('plans/{id}/profile/{idProfile}/detach', 'ACL\PlanProfileController@detachProfilesPlan')
            ->name('plans.profiles.detach');
        Route::post('plans/{id}/profiles', 'ACL\PlanProfileController@attachProfilesPlan')
            ->name('plans.profiles.attach');
        Route::any('plans/{id}/profiles/create', 'ACL\PlanProfileController@profilesAvailable')
            ->name('plans.profiles.available');
        Route::get('plans/{id}/profiles', 'ACL\PlanProfileController@profiles')
            ->name('plans.profiles');
        Route::get('profiles/{id}/plans', 'ACL\PlanProfileController@plans')
            ->name('profiles.plans');


        /**
         * Profiles x Permissions
         */
        Route::get('profiles/{id}/permission/{idPermission}/detach', 'ACL\PermissionProfileController@detachPermissionsProfile')
            ->name('profiles.permissions.detach');
        Route::post('profiles/{id}/permissions', 'ACL\PermissionProfileController@attachPermissionsProfile')
            ->name('profiles.permissions.attach');
        Route::any('profiles/{id}/permissions/create', 'ACL\PermissionProfileController@permissionsAvailable')
            ->name('profiles.permissions.available');
        Route::get('profiles/{id}/permissions', 'ACL\PermissionProfileController@permissions')
            ->name('profiles.permissions');
        Route::get('permissions/{id}/profiles', 'ACL\PermissionProfileController@profiles')
            ->name('permissions.profiles');

        /**
         * Routes Permissions
         */
        Route::any('permissions/search', 'ACL\PermissionsController@search')->name('permissions.search');
        Route::resource('permissions', 'ACL\PermissionsController');

        /**
         * Routes Profiles
         */
        Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'ACL\ProfileController');

        /**
         * Routes Details Plans
         */
        Route::resource('plans/{url}/details', DetailPlanController::class);

        /**
         * Routes Plans
         */
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::resource('plans', 'PlanController');

        /**
         * Home Dashborad
         */
        Route::get('/', 'PlanController@index')->name('admin.index');
});


/**
 * Site
 */
Route::get('/plan/{url}', 'Site\SiteController@plan')->name('plan.subscription');
Route::get('/', 'Site\SiteController@index')->name('site.home');

/**
 * Auth Routes
 */
Auth::routes();
