<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-5-26 22:14:33 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Apps\Backend\Controllers;

class BaseController extends \Phalcon\Mvc\Controller {

    /**
     * 控制器初始化方法 检测登录
     */
    public function initialize(){
         if (!$this->session->has('admin')) {
            $this->view->disable();
            $this->response->redirect('admin/index/login');
            $this->flash->error('请先登录！');
        }
    }

}
