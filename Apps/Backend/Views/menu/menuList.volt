{% extends "layout/base.volt" %}
    {% block main %}
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">节点</span>
                <a href="{{ url('admin/menu/menuAdd')}}" class="btn"><i class="icol-add"></i> 添加节点</a>
            </div>
            <div class="widget-content table-container">
                <table id="demo-dtable-02" class="table table-striped">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>路径</th>
                            <th>样式</th>
                            <th>是否显示菜单</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for menu in menus %}    
                        <tr>
                            <td>{{menu['html']}}{{menu['name']}}</td>
                            <td>{{menu['node']}}</td>
                            <td>{{menu['class']}}</td>
                            <td>{{menu['is_menu']}}</td>
                            <td>{{menu['status']}}</td>
                            <td class="action-col">
                                <span class="btn-group">
                                    <a href="{:U('user/access_config',array('role_id'=>$v['Id']))}" title="查看拥有权限" class="btn btn-small"><i class="icon-search"></i></a>
                                    <a href="/admin/menu/menuEdit?id={{menu['id']}}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a  menu_id="{{menu['id']}}" class="del-button btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                    {% endfor %}
                    <tfoot>
                        <tr>
                            <th>Country</th>
                            <th>Death rate</th>
                            <th>Population aged 0-14</th>
                            <th>Population aged 15-64</th>
                            <th>Population aged 65++</th>
                        </tr>
                    </tfoot>
                </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
{% block script %}
    <script>
        $(function () {
            $('.del-button').on('click', function (e) {
                var $obj = $(this);
                $.msgbox("你确定要删除这条记录?", {
                    type: "confirm",
                    buttons: [
                        {type: "submit", value: "是的"},
                        {type: "cancel", value: "取消"}
                    ]
                }, function (result) {
                    if (result === '是的') {
                        var menu_id = $obj.attr('menu_id');
                        $.ajax({
                            url: "/admin/menu/menuDel",
                            type: 'post',
                            dataType: 'json',
                            data: {'menu_id': menu_id},
                            success: function (msg) {
                                $.msgbox(msg.info);
                                window.location.reload();
                            }
                        });
                    }
                }
                );

            });

        });
      </script>
{% endblock %}
