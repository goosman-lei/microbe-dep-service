<?php
namespace MicrobeDep;
class UserInfo extends \Microbe\Service {
    public function getInfo($name) {
        return [
            'id'   => 1,
            'name' => $name,
            'age'  => 19,
        ];
    }
}