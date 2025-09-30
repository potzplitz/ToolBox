<?php

class Startseite {
    public function __construct() {
        echo urldecode(INS['message']);
    }
}