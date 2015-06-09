<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-6-7 16:44:37 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Apps\Backend\Controllers;

use Models\Blog;
use Models\Menu;
use Apps\Backend\Controllers\BaseController;
use Utils\Util;

class MenuController extends BaseController {

    public function menuListAction() {
        $menu_list = Menu::find();
        $menu_list = $menu_list->toArray();
        $util = new Util();
        $menu_format_list = $util->tree($menu_list);
        $this->view->setVars(array(
            'menus' => $menu_format_list
        ));
    }
    
    
    public function menuAddAction(){
         $menu_list = Menu::find();
        $menu_list = $menu_list->toArray();
        $util = new Util();
        $menu_format_list = $util->tree($menu_list);
        if ($this->request->isPost()) {
            $menu = new Menu();
            $menu->name = $this->request->getPost('Name');
            $menu->node = $this->request->getPost('Node');
            $menu->pid = $this->request->getPost('Pid');
            $menu->class = $this->request->getPost('Class');
            $menu->is_menu = $this->request->getPost('IsMenu');
            $menu->remark = $this->request->getPost('Remark');
            $menu->rank = intval($this->request->getPost('Rank'));
            $menu->status = $this->request->getPost('Status');
            if ($menu->save() != FALSE) {
                return $this->response->setJsonContent(array('status' => 1, 'info' => '添加成功', 'url' => '/admin/blog/blogList'));
            } else {
                $errorMessages = $menu->getMessages();
                $info = $errorMessages[0]->getMessage();
                return $this->response->setJsonContent(array('status' => 0, 'info' => $info, 'url' => '/admin/blog/blogList'));
            }
        }
        $this->view->setVars(array(
             'menus' => $menu_format_list
        ));
    }

}
