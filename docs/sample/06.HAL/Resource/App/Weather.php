<?php

namespace MyVendor\MyApp\Resource\App;

use BEAR\Resource\ResourceObject;
use BEAR\Resource\Annotation\Embed;

class Weather extends ResourceObject
{
    public $links = [
        'tomorrow' => 'app://self/weather/tomorrow'
    ];

    public function onGet($date)
    {
        $this['today'] = "the weather of {$date} is sunny";

        return $this;
    }
}