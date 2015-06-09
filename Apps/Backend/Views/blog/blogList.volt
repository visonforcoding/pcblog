{% extends "layout/base.volt" %}
    {% block main %}
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">博文管理</span>
                <a href="{{url('admin/blog/blogAdd')}}" class="btn"><i class="icol-add"></i> 添加博文</a>
            </div>
            <div class="widget-content table-container">
                <table id="demo-dtable-02" class="table table-striped">
                    <thead>
                        <tr>
                            <th>标题</th>
                            <th>引言</th>
                            <th>分类</th>
                            <th>创建时间</th>
                            <th>点击量</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for blog in blogs %}    
                        <tr>
                            <td>{{blog.title}}</td>
                            <td>{{blog.guide}}</td>
                            <td>{{blog.blogcat.name}}</td>
                            <td>{{blog.ctime}}</td>
                            <td>{{blog.hits}}</td>
                            <td class="action-col">
                                <span class="btn-group">
                                    <a href="{:U('user/access_config',array('role_id'=>$v['Id']))}" title="查看拥有权限" class="btn btn-small"><i class="icon-search"></i></a>
                                    <a href="/admin/blog/blogEdit?id={{blog.id}}" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a  data-id="{{blog.id}}" class="del-button btn btn-small"><i class="icon-trash"></i></a>
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
                        var id = $obj.data('id');
                        $.ajax({
                            url: "/admin/blog/blogDel",
                            type: 'post',
                            dataType: 'json',
                            data: {'id':id},
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
