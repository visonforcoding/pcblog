<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-6-7 16:42:18 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Apps\Backend\Controllers;

use Apps\Backend\Controllers\BaseController;
use Utils\Util;
use Models\Apothegm;

class ApothegmController extends BaseController {

    public function listAction() {
        $this->view->setVars(array(
        ));
    }

    public function addAction() {
          if ($this->request->isPost()) {
            $apothegm = new Apothegm();
            $apothegm->content = $this->request->get('content');
            $apothegm->source = $this->request->get('source');
            $apothegm->status = $this->request->get('status');
            $apothegm->ctime = date('Y-m-d H:i:s');
            if ($apothegm->save() != FALSE) {
                return $this->response->setJsonContent(array('status' => 1, 'info' => '添加成功', 'url' => '/admin/blog/blogList'));
            } else {
                $errorMessages = $apothegm->getMessages();
                $info = $errorMessages[0]->getMessage();
                return $this->response->setJsonContent(array('status' => 0, 'info' => $info, 'url' => '/admin/blog/blogList'));
            }
        }
        $this->view->setVars(array(
        ));
    }

}
