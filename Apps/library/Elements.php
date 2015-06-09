<?php

use Phalcon\Mvc\User\Component;
use Models\Blogcat;
use Models\Menu;
use Utils\Util;
use Models\Apothegm;
/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Component {

    private $_headerMenu = array(
        'navbar-left' => array(
            'index' => array(
                'caption' => '首页',
                'action' => 'index'
            ),
            'blog' => array(
                'caption' => '博文',
                'action' => 'blogList'
            ),
            'about' => array(
                'caption' => '关于',
                'action' => 'index'
            ),
            'contact' => array(
                'caption' => '联系我们',
                'action' => 'index'
            ),
        ),
        'navbar-right' => array(
            'session' => array(
                'caption' => '登录/注册',
                'action' => 'index'
            ),
        )
    );
    private $_tabs = array(
        'Invoices' => array(
            'controller' => 'invoices',
            'action' => 'index',
            'any' => false
        ),
        'Companies' => array(
            'controller' => 'companies',
            'action' => 'index',
            'any' => true
        ),
        'Products' => array(
            'controller' => 'products',
            'action' => 'index',
            'any' => true
        ),
        'Product Types' => array(
            'controller' => 'producttypes',
            'action' => 'index',
            'any' => true
        ),
        'Your Profile' => array(
            'controller' => 'invoices',
            'action' => 'profile',
            'any' => false
        )
    );

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu() {

        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="current-menu-item">';
                } else {
                    echo '<li>';
                }
                echo $this->tag->linkTo($controller . '/' . $option['action'], $option['caption']);
                echo '</li>';
            }
        }
    }

    /**
     * Returns menu tabs
     */
    public function getTabs() {
        $controllerName = $this->view->getControllerName();
        $actionName = $this->view->getActionName();
        echo '<ul class="nav nav-tabs">';
        foreach ($this->_tabs as $caption => $option) {
            if ($option['controller'] == $controllerName && ($option['action'] == $actionName || $option['any'])) {
                echo '<li class="active">';
            } else {
                echo '<li>';
            }
            echo $this->tag->linkTo($option['controller'] . '/' . $option['action'], $caption), '<li>';
        }
        echo '</ul>';
    }

    public function getBlogRight() {
        $blogcats = $this->modelsManager->createBuilder()
                ->columns(array('Models\Blogcat.id','Models\Blogcat.name','sum(1) as num'))
                ->from('Models\Blogcat')
                ->leftJoin('Models\Blog','Models\Blogcat.id = Models\Blog.category_id')
                ->groupBy('Models\Blogcat.name')
                ->getQuery()
                ->execute();
        $apothegm = Apothegm::findFirst(array(
            "status = '1'",
            'order'=>'ctime'
        ));
        echo '<ul>';
        echo ' <li class="block">
        <h4>每日一说</h4>';
        echo $apothegm->content.'</br>';
        echo '<span style="float:right">------'.date('Y-m-d',strtotime($apothegm->ctime)).'</span>';
        echo  '</li>';
        echo '<li class="block">';
        echo '<h4>分类</h4>';
        echo '<ul>';
        foreach ($blogcats as $cat) {
            echo '<li class="cat-item">'
            . '<a href="' . $cat->id . '" title="title">' . $cat->name . '<span class="post-counter"> ('.$cat->num.')</span></a></li>';
        }
        echo '</ul>';
        echo '</li>';
        echo '</ul>';
    }

    public function getAdminMenu() {

        $menus = Menu::find(array(
                    "is_menu = '1'",
                    "status = '1'",
                    "order" => 'rank'
                ))->toArray();
        $util = new Util();
        $menus = $util->getMenu($menus);
        foreach ($menus as $key => $menu) {
            $controllerName = strtolower($this->view->getControllerName());
            foreach ($menu['child'] as $k => $v) {
                if (strpos(strtolower($v['node']), $controllerName) !== FALSE) {
                    echo '<li class="active">';
                    break;
                } else {
                    echo  '<li>';
                }
            }
            if ($menu['pid'] == '0') {
                echo '<span class="Table"><i class="' . $menu['class'] . '"></i><span class="nav-title">' . $menu['name'] . '</span></span>';
            }
            echo '<ul class="inner-nav">';
            if (isset($menu['child'])) {
                foreach ($menu['child'] as $k => $v) {
                    if (strpos(strtolower($v['node']), strtolower($this->view->getActionName())) !== FALSE) {
                        echo '<li class="active">';
                    } else {
                        echo '<li>';
                    }
                    echo '<a href="' . $v['node'] . '"><i class="' . $v['class'] . '"></i>' . $v['name'] . '</a></li>';
                }
            }
            echo '</ul>';
            echo '</li>';
        }
    }

}
