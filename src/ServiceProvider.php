<?php

namespace Admin\Extend\AdminAuditNotifications;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminAuditNotifications\Extension\Config;
use Admin\Extend\AdminAuditNotifications\Extension\Install;
use Admin\Extend\AdminAuditNotifications\Extension\Navigator;
use Admin\Extend\AdminAuditNotifications\Extension\Uninstall;
use Admin\Extend\AdminAuditNotifications\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminAuditNotifications
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static $name = "bfg/admin-audit-notifications";

    /**
     * Extension call slug
     * @var string
     */
    static $slug = "bfg_admin_audit_notifications";

    /**
     * Extension description
     * @var string
     */
    public static $description = "The audit notifications for bfg admin";

    /**
     * @var string
     */
    protected $navigator = Navigator::class;

    /**
     * @var string
     */
    protected $install = Install::class;

    /**
     * @var string
     */
    protected $uninstall = Uninstall::class;

    /**
     * @var string
     */
    protected $permissions = Permissions::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected $config = Config::class;
}

