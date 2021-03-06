<?php

return [

    // All the sections for the settings page
    'sections' => [
        'app' => [
            'title' => 'General Settings',
            'descriptions' => 'Application general settings.', // (optional)
            'icon' => 'fa fa-cog', // (optional)

            'inputs' => [
                [
                    'name' => 'app_name', // unique key for setting
                    'type' => 'text', // type of input can be text, number, textarea, select, boolean, checkbox etc.
                    'label' => 'App Name', // label for input
                    // optional properties
                    'placeholder' => 'Application Name', // placeholder for input
                    'class' => 'form-control', // override global input_class
                    'style' => '', // any inline styles
                    'rules' => 'required|min:2|max:20', // validation rules for this input
                    'value' => 'QCode', // any default value
                    'hint' => 'You can set the app name here' // help block text for input
                ],
                [
                    'name' => 'logo',
                    'type' => 'image',
                    'label' => 'Upload logo',
                    'hint' => 'Must be an image and cropped in desired size',
                    'rules' => 'image|max:500',
                    'disk' => 'public', // which disk you want to upload
                    'path' => 'app', // path on the disk,
                    'preview_class' => 'thumbnail',
                    'preview_style' => 'height:40px'
                ],
                [
                    'name' => 'currency',
                    'type' => 'text',
                    'label' => 'Currency',
                    'hint' => 'Name the currency. Ex. NRs.',
                    'rules' => 'required',
                ]
            ]
        ],
    ],

    // Setting page url, will be used for get and post request
    'url' => 'settings',

    // Any middleware you want to run on above route
    'middleware' => [],

    // View settings
    // 'setting_page_view' => 'app_settings::settings_page',
    'setting_page_view' => 'app_settings.settings_page',
    'flash_partial' => 'app_settings._flash',

    // Setting section class setting
    'section_class' => 'bg-white rounded overflow-hidden shadow-sm border border-solid border-gray-200 mb-4',
    'section_heading_class' => 'flex bg-gray-200 p-3 text-gray-700 text-xl font-semibold',
    'section_body_class' => 'py-4 px-3',

    // Input wrapper and group class setting
    'input_wrapper_class' => 'my-5',
    'input_class' => 'block w-full md:w-1/2 py-2 px-3 my-1 border border-solid border-gray-600 rounded-md',
    'input_error_class' => 'has-error',
    'input_invalid_class' => 'border-red-500',
    'input_hint_class' => 'block text-small text-gray-700',
    'input_error_feedback_class' => 'text-red-500',

    // Submit button
    'submit_btn_text' => 'Save Settings',
    'submit_success_message' => 'Settings has been updated.',

    // Remove any setting which declaration removed later from sections
    'remove_abandoned_settings' => false,

    // Controller to show and handle save setting
    'controller' => '\QCod\AppSettings\Controllers\AppSettingController',

    // settings group
    'setting_group' => function() {
        // return 'user_'.auth()->id();
        return 'default';
    }
];
