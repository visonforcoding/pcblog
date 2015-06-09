<?php

namespace Apps\Backend\Controllers;
use Models\Users;
use Models\Menu;

class IndexController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        if (!$this->session->has("admin")) {
            $this->dispatcher->forward(array('controller' => 'index', 'action' => 'login'));
        }
        
    }

    public function loginAction() {
        if ($this->request->isPost() == true) {
            $username = $this->request->get('_username');
            $password = $this->request->get('_password');
            $user = Users::findFirstByUsername($username);
            if ($user) {
                if ($this->security->checkHash($password, $user->password)) {
                    //设置session
                    $this->session->set('admin',$user);
                   $this->view->disable();
                   $this->response->redirect('admin/index/index');
                }else{
                    $this->flash->error('密码验证错误！');
                }
            }else{
                $this->flash->error('用户不存在！');
            }
        }
        $this->view->setVars(array(
        ));
    }

}
