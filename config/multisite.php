<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Multisite
    |--------------------------------------------------------------------------
    |
    | Allows the creation of multiple site definitions in the same installation.
    | Disabling this will lock any existing site definitions.
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Multisite Features
    |--------------------------------------------------------------------------
    |
    | Use multisite for the features defined below. Be sure to clear the application
    | cache after modifying these settings.
    |
    |  - cms_maintenance_setting - Maintenance Mode Settings are unique for each site
    |  - backend_mail_setting - Mail Settings are unique for each site
    |  - system_asset_combiner - Asset combiner cache keys are unique to the site
    |
    | There are also some known vendor implementations.
    |
    |  - rainlab_googleanalytics_setting - Google Analytics for each site
    |  - responsiv_campaign_message - Mailing list campaigns for each site
    |
    */

    'features' => [
        'cms_maintenance_setting' => false,
        'backend_mail_setting' => false,
        'system_asset_combiner' => false,

        // Vendor
        'rainlab_googleanalytics_setting' => false,
        'responsiv_campaign_message' => false,
    ],

];
