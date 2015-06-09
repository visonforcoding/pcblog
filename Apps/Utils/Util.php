<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2015-5-22 17:19:18 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Utils;

class Util {

    public function getMenu($list, $pid_key = 'pid', $id_key = 'id') {
        foreach ($list as $key => $value) {
            foreach ($list as $k => $v) {
                if ($value[$id_key] == $v[$pid_key]) {
                    $list[$key]['child'][] = $v;
                    unset($list[$k]);
                }
            }
        }
        $list = array_values($list);
        return $list;
    }

    /**
     * 无限分类的简单格式化
     * @param type $list
     * @param type $pid
     * @param type $key_val
     * @param type $pid_val
     * @param type $level
     * @param type $html
     * @return type
     */
    public function tree($list, $pid = 0, $key_val = 'id', $pid_val = 'pid', $level = 0, $html = '--') {
        $tree = array();
        foreach ($list as $v) {
            if ($v[$pid_val] == $pid) {
                $v['sort'] = $level;
                $v['html'] = str_repeat($html, $level);
                $tree[] = $v;
                $tree = array_merge($tree, self::tree($list, $v[$key_val], $key_val, $pid_val, $level + 1, $html));
            }
        }
        return $tree;
    }

}
