<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-3-11 22:36:03 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Models;

class Blog extends \Phalcon\Mvc\Model {

    public function getSource() {
        return 'cwp_blog';
    }

    public function initialize() {
        $this->belongsTo("category_id", "Models\Blogcat", "id",array(
            'alias'=>'blogcat'
        ));
        $this->belongsTo("user_id", "Models\Users", "id",array(
            'alias'=>'author'
        ));
    }
    

}
