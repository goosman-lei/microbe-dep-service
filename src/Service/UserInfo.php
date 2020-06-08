<?php
namespace MicrobeDep\Service;
class UserInfo extends \Microbe\Service {
    public function getInfo($name) {
        return [
            'id'    => 1,
            'name'  => $name,
            'sayhi' => 'Hello, ' . $name,
            'age'   => 20,
        ];
    }
}