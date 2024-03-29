<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

if (!function_exists('invalid_class')) {
    /**
     * Check for the existence of an error message and return a class name
     *
     * @param  string  $key
     * @return string
     */
    function invalid_class($key, $preset = null)
    {
        $errors = session()->get('errors') ?: new \Illuminate\Support\ViewErrorBag;
        $invalidClass = $preset ? 'border-red-500' : 'is-invalid';
        return $errors->has($key) ? $invalidClass : '';
    }
}


if (!function_exists('invalid_feedback')) {
    /**
     * Check if the route is active or not
     *
     * @param  string  $key
     * @return string
     */
    function invalid_feedback($key)
    {
        $key = str_replace(['\'', '"'], '', $key);
        $errors = session()->get('errors') ?: new \Illuminate\Support\ViewErrorBag;
        if ($message = $errors->first($key)) {
            return '<?= <div class="invalid-feedback">' . $message . '</div>; ?';
        }
    }
}

if (!function_exists('setActive')) {
    /**
     * Check if the route is active or not
     *
     * @param  string  $key
     * @return string
     */
    function setActive($path, $active = 'active')
    {
        return Request::routeIs($path) ? $active : '';
    }
}

if (!function_exists('siteName')) {
    function siteName()
    {
        return appSettings('site_name', config('app.name'));
    }
}

// if(!function_exists('tagline')){
//     function tagline()
//     {
//         return settings('tagline');
//     }
// }

if (!function_exists('siteLogoUrl')) {
    function siteLogoUrl()
    {
        if (appSettings()->get('site_logo')) {
            return asset('storage/' . appSettings()->get('site_logo'));
        }
        return asset('assets/images/fhiol-logo.png');
    }
}

if (!function_exists('faviconUrl')) {
    function faviconUrl()
    {
        if (appSettings()->get('favicon')) {
            return asset('storage/' . appSettings()->get('favicon'));
        }
        return;
    }
}

if (!function_exists('priceUnit')) {
    function priceUnit()
    {
        return appSettings()->get('price_unit', 'Rs.');
    }
}

// Get the page Url By Slug
if (!function_exists('getPageUrlBySlug')) {
    function getPageUrlBySlug($slug)
    {
        if (!$slug) {
            return url('/');
        }
        return route('frontend.pages.show', $slug);
    }
}

if (!function_exists('image_placeholder_url')) {
    function image_placeholder_url()
    {
        return '/assets/images/image-placeholder.png';
    }
}

if (!function_exists('get_uploads_url')) {
    function get_uploads_url($path = null)
    {
        if (!$path) {
            return null;
        }
        return Storage::url($path);
    }
}

if (!function_exists('notification_email_receiver')) {
    function notification_email_receiver()
    {
        return 'sales@tilganga.org';
    }
}
