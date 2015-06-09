<?php

namespace Apps\Frontend\Controllers;

use Models\Blogcat;
use Models\Blog;

class IndexController extends \Phalcon\Mvc\Controller {

    public function indexAction() {

        $blogcats = Blogcat::find();
        $blogs = Blog::find();

     
//        $this->response->redirect('http://www.baidu.com');
//        exit();
//        $this->log->log("日志注入测试");
//        $log = \Phalcon\DI::getDefault()->getLogger();
//         $log->log('日志注入测试');
//        $logger = new FileAdapter("../apps/log/test.log");
//        $logger->log("This is a message");
//        $logger->log("This is an error", \Phalcon\Logger::ERROR);
//        $logger->error("This is another error");

        $this->view->setVars(array(
            'catList' => $blogcats,
            'blogList' => $blogs
        ));
    }

}
