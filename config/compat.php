<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Compat Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور compat — همهٔ کلیدهای مستندشده در `docs/03-engines/compat.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/compat.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('COMPAT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('COMPAT_PREFIX', 'compat:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('COMPAT_LOG_CHANNEL', 'compat'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];