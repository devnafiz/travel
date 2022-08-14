<?php

use App\Models\Language;



if (!function_exists('selected_lang')) {

    function selected_lang()
    {

        $lang = Language::firstWhere('lang_code', '=', session()->get('changed_language') ?? config('translatable.fallback_locale'));

        return $lang;

    }

}