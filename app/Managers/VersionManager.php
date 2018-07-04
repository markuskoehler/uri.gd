<?php
/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 04.07.2018
 * Time: 19:31
 */

namespace App\Managers;

class VersionManager
{
    public function getVersion($prefix = '') {
        return $prefix . $this->parseJson()->version;
    }

    private function parseJson() {
        $json = file_get_contents(base_path('version.json'));
        $decoded_json = json_decode($json);
        return $decoded_json;
    }
}