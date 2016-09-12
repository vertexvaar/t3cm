<?php

// You should always contain this line.
// If you skip them, you might have an information disclosure about your server paths. (Because of "Class not found")
if (!defined('TYPO3_MODE') || TYPO3_MODE !== 'BE') {
    die;
}

// Create an anonymous function to limit the scope of your variables.
// Invoke this funtion directly with call_user_func and pass the $_EXTKEX variable
call_user_func(
    function ($extKey) {

        // Register an extbase backend module through the API
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            // This will determine the final class name of your controller! Here are some examples
            // In2code.t3cm => In2code\\T3cm  <- "t3cm" is the value of $extKey respectively your EXT-Folder
            // In2code.T3cm => In2code\\T3cm
            // In2code.T3_cm => In2code\\T3Cm <- underscores make the next char uppercase
            'In2code.' . $extKey,
            // Main module name. One of "web", "file", "tools", "system" or custom
            'web',
            // Name of your module. Historically that would be "m1". You can choose any name
            'socken',
            // Position of your module. e.g. "top" or "after:layout" (after "Page" Module)
            'after:layout',
            // allowed controllers and its actions.
            [
                // First entry is the default controller, first string value is the default action
                'Socken' => 'waschen, gewaschen',
            ],
            // additional configuration for the backend
            [
                // icon if your backend module. You can use the IconFactory here.
                // Icon-API is not available as of TYPO3 7.6.10
                'icon' => 'EXT:backend/ext_icon.png',
                // language file with labels for your module.
                // Should contain "mlang_labels_tablabel", "mlang_labels_tabdescr", "mlang_tabs_tab"
                'labels' => 'EXT:backend/Resources/Private/Language/locallang_mod.xlf',
                // access control for your module. default is admin only.
                // set to user,group if you want to set access via backend user/group rights administration
                'access' => 'user,group',
                // 'extRelPath' defaults to your classes folder. Do not change it.
            ]
        );
    },
    // pass the extkey to the function
    $_EXTKEY
);
