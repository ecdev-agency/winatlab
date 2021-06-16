<?php
defined( 'ABSPATH' ) || exit;

/**
 * Phone Strip Tags
 * @phone_replace()
 * @str
 */
function phone_replace($str) {
    $out = preg_replace('/[^0-9]/', '', $str);
    return $out;
}

/**
 * @param $url
 * @return array|mixed|string|string[]
 */
function languageUrl($url) {

    $domain = get_option('siteurl');
    $currentLang = wpm_get_language();

    if( $currentLang <> 'fr' ) :
        $url_end = str_replace( $domain, '', $url );
        $url = $domain . '/' . $currentLang . $url_end;
    endif;

    echo $url;

}