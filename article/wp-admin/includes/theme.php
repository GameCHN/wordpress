<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 15-7-20
 * Time: 下午5:33
 */

if(is_file(WP_CORE_DIR.'/admin/theme.php')){
    require_once WP_CORE_DIR . '/admin/theme.php';
} else {
    require_once __DIR__.'/!theme.php';
}