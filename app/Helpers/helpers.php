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

/**
 * shortens the supplied text after last word
 * @param string $string
 * @param int $max_length
 * @param string $end_substitute text to append, for example "..."
 * @param boolean $html_linebreaks if LF entities should be converted to <br />
 * @return string
 */
function mb_word_wrap($string, $max_length, $end_substitute = null, $html_linebreaks = true) {

    if($html_linebreaks) $string = preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
    $string = strip_tags($string); //gets rid of the HTML

    if(empty($string) || mb_strlen($string) <= $max_length) {
        if($html_linebreaks) $string = nl2br($string);
        return $string;
    }

    if($end_substitute) $max_length -= mb_strlen($end_substitute, 'UTF-8');

    $stack_count = 0;
    while($max_length > 0){
        $char = mb_substr($string, --$max_length, 1, 'UTF-8');
        if(preg_match('#[^\p{L}\p{N}]#iu', $char)) $stack_count++; //only alnum characters
        elseif($stack_count > 0) {
            $max_length++;
            break;
        }
    }
    $string = mb_substr($string, 0, $max_length, 'UTF-8').$end_substitute;
    if($html_linebreaks) $string = nl2br($string);

    return $string;
}

/**
 * @param array $array
 * @return string
 */
function SetAttr($array = []) {
    $html = '';
    $html .= '<span>';
    foreach ($array as $attr) {
        $html .= '<label>' . ucwords($attr->name) . '</label>';
        $html .= '<select class="item_' . $attr->name . '" name="' . $attr->name . '">';
        $values = explode(',', $attr->values);
        foreach ($values as $val) {
            $html .= '<option value=' . $val . '>' . $val . '</option>';
        }
        $html .= '</select>';
    }
    $html .='</span>';
    return $html;
}