<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    * Function to load route files automatically from routers folder
*/

foreach (scandir(dirname(__FILE__)) as $dir) {
    $dirname = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir;
    if (is_dir($dirname) && !in_array($dir, [".", ".."])) {
        if ($handler = opendir($dirname)) {
            while (false != ($file = readdir($handler))) {
                if (!in_array($file, [".", ".."])) {
                    $file_route = $dir . DIRECTORY_SEPARATOR . $file;
                    include_once $file_route;
                }
            }
            closedir($handler);
        }
    }
}