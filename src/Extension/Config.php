<?php

namespace Admin\Extend\AdminAuditNotifications\Extension;

use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminAuditNotifications\Observers\AuditModelObserver;
use OwenIt\Auditing\Models\Audit;

/**
 * Class Config
 * @package Admin\Extend\AdminAuditNotifications\Extension
 */
class Config extends ConfigExtensionProvider {

    public function boot()
    {
        Audit::observe(AuditModelObserver::class);

        parent::boot();
    }
}
