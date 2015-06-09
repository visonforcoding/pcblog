<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-5-26 21:44:59 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Apps\Backend\Controllers;

use Models\Blog;
use Models\Blogcat;
use Apps\Backend\Controllers\BaseController;
use Utils\Util;

class BlogController extends BaseController {

    public function blogListAction() {
        $blogs = Blog::find();
        $this->view->setVars(array(
            'blogs' => $blogs
        ));
    }

    public function blogAddAction() {
        $blogcat = Blogcat::find(array(
        ));
        $blogCat = $blogcat->toArray();
        $util = new Util();
        $blogCat = $util->tree($blogCat);
        if ($this->request->isPost()) {
            $blog = new Blog();
            $blog->title = $this->request->getPost('title');
            $blog->category_id = $this->request->get('category');
            $blog->guide = $this->request->get('guide');
            $blog->cover = $this->request->get('cover');
            $blog->content = $this->request->get('content');
            $blog->keywords = $this->request->get('keywords');
            $blog->description = $this->request->get('description');
            $blog->user_id = $this->session->get('admin')->id;
            $blog->ctime = date('Y-m-d H:i:s');
            if ($blog->save() != FALSE) {
                return $this->response->setJsonContent(array('status' => 1, 'info' => '添加成功', 'url' => '/admin/blog/blogList'));
            } else {
                $errorMessages = $blog->getMessages();
                $info = $errorMessages[0]->getMessage();
                return $this->response->setJsonContent(array('status' => 0, 'info' => $info, 'url' => '/admin/blog/blogList'));
            }
        }
        $this->view->setVars(array(
            'catlist' => $blogCat
        ));
    }

    public function blogDelAction() {
        if ($this->request->isPost()) {
            $id = $this->request->getPost('id');
            $blog = Blog::findFirst($id);
            if ($blog) {
                if ($blog->delete()) {
                    return $this->response->setJsonContent(array('status' => 1, 'info' => '删除成功'));
                } else {
                    return $this->response->setJsonContent(array('status' => 0, 'info' => '删除失败'));
                }
            } else {
                return $this->response->setJsonContent(array('status' => 0, 'info' => '未找到该条记录'));
            }
        }
    }

    public function blogEditAction() {
        $blog_id = $this->request->get('id');
        $blog = Blog::findFirst($blog_id);
        $blogcat = Blogcat::find(array(
        ));
        $blogCat = $blogcat->toArray();
        $util = new Util();
        $blogCat = $util->tree($blogCat);
        if ($this->request->isPost()) {
            $blog->title = $this->request->getPost('title');
            $blog->category_id = $this->request->get('category');
            $blog->guide = $this->request->get('guide');
            $blog->cover = $this->request->get('cover');
            $blog->content = $this->request->get('content');
            $blog->keywords = $this->request->get('keywords');
            $blog->description = $this->request->get('description');
            $blog->user_id = $this->session->get('admin')->id;
            $blog->ctime = date('Y-m-d H:i:s');
            if ($blog->save() != FALSE) {
                return $this->response->setJsonContent(array('status' => 1, 'info' => '添加成功', 'url' => '/admin/blog/blogList'));
            } else {
                $errorMessages = $blog->getMessages();
                $info = $errorMessages[0]->getMessage();
                return $this->response->setJsonContent(array('status' => 0, 'info' => $info, 'url' => '/admin/blog/blogList'));
            }
        }
        $this->view->setVars(array(
            'catlist' => $blogCat,
            'blog'=>$blog
        ));
    }

}
