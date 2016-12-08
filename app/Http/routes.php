<?php
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
],
function()
{
    Route::controllers((['password' => 'backend\LoginCtrl']));
    Route::get('login', ['as' => 'login.index', 'uses' => 'backend\LoginCtrl@index']);
    Route::get('login/{provider?}', 'backend\LoginCtrl@auth');
    Route::post('login', ['as' => 'do.login', 'uses' => 'backend\LoginCtrl@doLogin']);
    Route::get('logout', function() {
        Auth::logout();
        return redirect('/'.getLang().'/login');
    });

    // Backend Route
    Route::group(['prefix' => 'backend'], function() {
        // Route Products
        Route::group(['namespace' => 'backend\Products'], function() {

            Route::resource('product', 'ProductCtrl');
            Route::resource('category', 'CategoryCtrl');
            Route::resource('image', 'ImageCtrl');
            Route::post('meta/product', ['as' => 'backend.product.meta', 'uses' => 'ProductCtrl@metaProduct']);
        });

        // Route Category
        Route::group(['namespace' => 'backend\Category'], function() {
            Route::resource('category', 'CategoryCtrl');
        });

        // News Route
        Route::group(['namespace' => 'backend\News'], function() {
            Route::resource('news', 'NewsCtrl');
        });

        // Menu Route
        Route::group(['namespace' => 'backend\Menu'], function() {
            Route::resource('menu', 'MenuCtrl');
        });

        // Page Route
        Route::group(['namespace' => 'backend\Page'], function() {
            Route::resource('page', 'PageCtrl');
        });

        // User route
        Route::group(['namespace' => 'backend\Users'], function() {
            Route::resource('user', 'UserCtrl');
            Route::resource('role', 'RoleCtrl');
            Route::get('permission', ['as' => langRouteName('perm'), 'uses' => 'RoleCtrl@getPerm']);
            Route::post('permission', ['as' => langRouteName('perm.post'), 'uses' => 'RoleCtrl@storePerm']);
        });

        // Options Route
        Route::group(['namespace' => 'backend\Options'], function() {
            Route::controller('options', 'OptionsCtrl');
        });

        // Widget Route
        Route::group(['namespace' => 'backend\Widget'], function() {
            Route::resource('slideshow', 'SlideshowCtrl');
        });
    });
    
    // API route
    Route::group(['prefix' => 'api'], function() {
        Route::group(['namespace' => 'backend\Products'], function() {
            Route::get('product', ['as' => 'api.product', 'uses' => 'ProductCtrl@getProduct']);
            Route::get('category', ['as' => 'api.category', 'uses' => 'CategoryCtrl@getCat']);
            Route::post('category', ['as' => 'api.postcat', 'uses' => 'CategoryCtrl@getCat']);
        });

        Route::group(['namespace' => 'backend\Category'], function() {
            Route::get('category', ['as' => langRouteName('api.category'), 'uses' => 'CategoryCtrl@getCat']);
            Route::post('category', ['as' => langRouteName('api.postcat'), 'uses' => 'CategoryCtrl@getCat']);
            Route::get('getcategory', ['as' => langRouteName('api.getcategory'), 'uses' => 'CategoryCtrl@getSelectCat']);
        });

        Route::group(['namespace' => 'backend\Page'], function() {
            Route::get('page/{position}', ['as' => langRouteName('api.page'), 'uses' => 'PageCtrl@getPage']);
            Route::post('page', ['as' => langRouteName('api.postpage'), 'uses' => 'PageCtrl@getPage']);
        });

        Route::group(['namespace' => 'backend\Menu'], function() {
            Route::get('menu/{position}', ['as' => langRouteName('api.menu'), 'uses' => 'MenuCtrl@getMenu']);
            Route::post('menu', ['as' => langRouteName('api.postmenu'), 'uses' => 'MenuCtrl@getMenu']);
        });
        Route::group(['namespace' => 'backend\News'], function() {
            Route::get('news', ['as' => langRouteName('api.news'), 'uses' => 'NewsCtrl@getNews']);
        });
        Route::group(['namespace' => 'backend\Widget'], function() {
            Route::get('slideshow', ['as' => langRouteName('api.slideshow'), 'uses' => 'SlideshowCtrl@getSlide']);
            Route::post('slideshow', ['as' => langRouteName('api.postslideshow'), 'uses' => 'SlideshowCtrl@getSlide']);
            Route::get('image', ['as' => langRouteName('api.image'), 'uses' => 'SlideshowCtrl@getImage']);
            Route::get('addimage', ['as' => langRouteName('api.addimage'), 'uses' => 'SlideshowCtrl@addImage']);
            Route::post('storeimage', ['as' => langRouteName('api.storeimage'), 'uses' => 'SlideshowCtrl@storeImage']);
            Route::get('editimage', ['as' => langRouteName('api.editimage'), 'uses' => 'SlideshowCtrl@editImage']);
            Route::delete('deleteimage', ['as' => langRouteName('api.deleteimage'), 'uses' => 'SlideshowCtrl@deleteImage']);
        });
        Route::group(['namespace' => 'backend\Users'], function() {
            Route::get('user', ['as' => langRouteName('api.user'), 'uses' => 'UserCtrl@getUser']);
        });
    });
    
    Route::group(['namespace' => 'Front'], function() {
        Route::get('/', 'PageCtrl@index');
        Route::post('/', 'PageCtrl@index');
        Route::group(['prefix' => 'customer'], function() {
            Route::get('login', 'PageCtrl@postcheckout');
            Route::get('account', 'PageCtrl@getAccount');
            Route::post('register', ['as' => 'customer.register', 'uses' => 'PageCtrl@registerAccount']);
            Route::post('login', ['as' => 'customer.login', 'uses' => 'PageCtrl@login']);
            Route::Post('account', 'PageCtrl@updateAccount');
        });
        Route::get('/{kumis}', 'PageCtrl@show');
        Route::post('/{kumis}', 'PageCtrl@show');
    });
});


// Backend Route
Route::group(['prefix' => 'backend'], function() {
    // Route Products
    Route::group(['namespace' => 'backend\Products'], function() {

        Route::resource('product', 'ProductCtrl');
        Route::resource('category', 'CategoryCtrl');
        Route::resource('image', 'ImageCtrl');
        Route::post('meta/product', ['as' => 'backend.product.meta', 'uses' => 'ProductCtrl@metaProduct']);
    });

    // Route Category
    Route::group(['namespace' => 'backend\Category'], function() {
        Route::resource('category', 'CategoryCtrl');
    });

    // News Route
    Route::group(['namespace' => 'backend\News'], function() {
        Route::resource('news', 'NewsCtrl');
    });

    // Menu Route
    Route::group(['namespace' => 'backend\Menu'], function() {
        Route::resource('menu', 'MenuCtrl');
    });

    // Page Route
    Route::group(['namespace' => 'backend\Page'], function() {
        Route::resource('page', 'PageCtrl');
    });

    // User route
    Route::group(['namespace' => 'backend\Users'], function() {
        Route::resource('user', 'UserCtrl');
        Route::resource('role', 'RoleCtrl');
        Route::get('permission', ['as' => 'perm', 'uses' => 'RoleCtrl@getPerm']);
        Route::post('permission', ['as' => 'perm.post', 'uses' => 'RoleCtrl@storePerm']);
    });

    // Widget Route
    Route::group(['namespace' => 'backend\Widget'], function() {
        Route::resource('slideshow', 'SlideshowCtrl');
    });
    
    // Options Route
    Route::group(['namespace' => 'backend\Options'], function() {
        Route::controller('options', 'OptionsCtrl');
    });
});

Route::get('img/{path}', function(League\Glide\Server $server, Illuminate\Http\Request $request){
    $server->outputImage($request);
})->where('path','.+');

Route::group(['namespace' => 'Front'], function() {
    Route::get('/', 'PageCtrl@index');
    Route::post('/', 'PageCtrl@index');
    Route::group(['prefix' => 'customer'], function() {
        Route::get('login', 'PageCtrl@postcheckout');
        Route::get('account', 'PageCtrl@getAccount');
        Route::post('register', ['as' => 'customer.register', 'uses' => 'PageCtrl@registerAccount']);
        Route::post('login', ['as' => 'customer.login', 'uses' => 'PageCtrl@login']);
        Route::Post('account', 'PageCtrl@updateAccount');
    });
    Route::get('/{kumis}', 'PageCtrl@show');
    Route::post('/{kumis}', 'PageCtrl@show');
});