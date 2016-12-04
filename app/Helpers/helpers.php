<?php
/**
 * Backend menu active.
 *
 * @param $path
 * @param string $active
 *
 * @return string
 */
function setActive($path, $active = 'active')
{
    if (is_array($path)) {
        foreach ($path as $k => $v) {
            $path[$k] = getLang().'/'.$v;
        }
    } else {
        $path = getLang().'/'.$path;
    }

    return call_user_func_array('Request::is', (array) $path) ? $active : '';
}

/**
 * @return mixed
 */
function getLang()
{
    return LaravelLocalization::getCurrentLocale();
}

/**
 * @param null $url
 *
 * @return mixed
 */
function langURL($url = null)
{
    //return LaravelLocalization::getLocalizedURL(getLang(), $url);
    if(getLang()==config('app.fallback_locale')){
        return url($url);
    }
    return url(getLang().$url);
}

/**
 * @param $route
 * @param array $parameters
 *
 * @return mixed
 */
function langRoute($route, $parameters = array())
{
    if(getLang()==config('app.fallback_locale')){
        return URL::route($route, $parameters);
    }
    return URL::route(getLang().'.'.$route, $parameters);
}

/**
 * @param $route
 *
 * @return mixed
 */
function langRedirectRoute($route)
{
    if(getLang()==config('app.fallback_locale')){
        return Redirect::route($route);
    }
    return Redirect::route(getLang().'.'.$route);
}
/**
 * 
 * @param type $route
 * @return type
 */
function langRouteName($route, $de = '.')
{
    if(getLang()==config('app.fallback_locale')){
        return $route;
    }
    return getLang().$de.$route;
}