<?php

namespace Apps\Frontend\Controllers;

use Models\Blog as Blog;
use Utils\Page;

class BlogController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        return $this->response->redirect('/login');
    }

    /**
     *  博文页
     */
    public function blogReadAction() {
        $blog_id = $this->dispatcher->getParam("blog_id");
        $blog = Blog::findFirst($blog_id);
        if (empty($blog)) {
            $this->dispatcher->forward(array(
                'controller' => 'errors',
                'action' => 'show404'
            ));
        }
        $blog->hits = $blog->hits+1;
        $blog->save();
        $blog_time_d = date('d', strtotime($blog->ctime));
        $blog_time_m = date('M', strtotime($blog->ctime));
        $this->view->pick("blog/read");
        $this->view->setVars(array(
            'blog' => $blog,
            'time_d' => $blog_time_d,
            'time_m' => $blog_time_m
        ));
    }

    public function blogListAction() {
        $cat_id = $this->dispatcher->getParam("cat_id");
        if(!empty($cat_id)){
            $where = "category_id = '$cat_id'";
        }
        $blog_total_rs =$this->modelsManager->createBuilder()
                ->from('Models\Blog')
                ->where($where)
                ->getQuery()
                ->execute();
        $blog_total = count($blog_total_rs);
        $page = new Page($blog_total, 5, 3);
        $page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '上一页', 'down' => '下一页', 'GoTo' => '确定');
        $page->pageType = '%first%%up%%numberF%%omitEA%%E%%down%%ending%';
        $blogs = $this->modelsManager->createBuilder()
                ->from('Models\Blog')
                ->where($where)
                ->orderBy('ctime desc')
                ->limit($page->pageSize, $page->pageStart)
                ->getQuery()
                ->execute();
        $pageShow = $page->pageShow();
        $this->view->pick('blog/blog_list');
        $this->view->setVars(array(
            'blogs' => $blogs,
            'nav' => $pageShow
        ));
    }

}
