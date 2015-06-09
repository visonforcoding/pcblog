<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-3-11 22:36:03 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Models;

class Blogcat extends \Phalcon\Mvc\Model {

    public function getSource() {
        return 'cwp_blogcat';
    }

    public function initialize() {
        $this->hasMany("id", "Models\Blog", "category_id",array(
            'alias'=>'Blogs'
        ));
    }

}
