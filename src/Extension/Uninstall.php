<?php

namespace Admin\Extend\AdminAuditNotifications\Extension;

use Admin\Core\UnInstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminAuditNotifications\Extension
 */
class Uninstall extends UnInstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {

    }
}
