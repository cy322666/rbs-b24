<?php

namespace App\Services\RBS;

use Illuminate\Support\Facades\Config;

class RBS
{
    /**
     * @var Xml_api
     */
    public $api;

    public function __construct()
    {
        $this->api = Xml_api::getInstance(
            Config::get('services.rbs.url'),
            Config::get('services.rbs.login'),
            Config::get('services.rbs.pass'),
        );
    }
}
