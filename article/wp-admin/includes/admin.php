<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 15-7-11
 * Time: 上午1:29
 */
if(file_exists(WP_CORE_DIR . '/admin/admin.php')){
    require_once WP_CORE_DIR . '/admin/admin.php';
} else {
    require __DIR__.'/!admin.php';
}
