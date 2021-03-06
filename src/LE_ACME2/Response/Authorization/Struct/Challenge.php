<?php

namespace LE_ACME2\Response\Authorization\Struct;

class Challenge {

    const STATUS_PENDING = 'pending';
    const STATUS_VALID = 'valid';

    public $type;
    public $status;
    public $url;
    public $token;

    public function __construct($type, $status, $url, $token) {

        $this->type = $type;
        $this->status = $status;
        $this->url = $url;
        $this->token = $token;
    }
}