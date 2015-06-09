<?php

namespace Models;

class Users extends \Phalcon\Mvc\Model {

    public function getSource() {
        return 'cwp_user';
    }

    public function initialize() {
        $this->hasMany("id", "Models\Blog", "user_id");
    }

}
