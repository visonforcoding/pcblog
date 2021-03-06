{% extends "layout/base.volt" %}
{% block main %}
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">添加节点</span>
            </div>
            <div class="widget-content form-container">
                <form id="validate-1" class="form-horizontal" method="post">
                    <div class="control-group">
                        <label class="control-label">节点名称 <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="Name" value="{{cur_menu.name}}" class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">父节点<span class="required">*</span></label>
                        <div class="controls">
                            <select id="input01" name="Pid" class="span12">
                                <option value="0">顶级</option>
                                {% for menu in menus %}
                                    <option value="{{menu.id}}" {% if cur_menu.pid == menu.id %} selected="selected"{% endif %}>{{menu.html}}{{menu.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">路径<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="Node" value="{{cur_menu.node}}" class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">样式</label>
                        <div class="controls">
                            <input type="text" name="Class" value="{{cur_menu.class}}" class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">排序</label>
                        <div class="controls">
                            <input type="text" name="Rank" value="{{cur_menu.rank}}" class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">备注</label>
                        <div class="controls">
                            <textarea class="span12" name="Remark"  id="input05" rows="3">{{cur_menu.remark}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">是否显示在菜单</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="1" name="IsMenu" data-label-on="ON" 
                                       {% if cur_menu.isMenu == 1 %}checked {% endif %}      data-label-off="OFF" checked>
                                显示
                            </label>
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="0" name="IsMenu" data-label-on="ON" 
                                       {% if cur_menu.isMenu == 0 %}checked {% endif %}   data-label-off="OFF">
                                不显示
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">状态</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="1" name="Status" data-label-on="ON" 
                                       data-label-off="OFF"  {% if cur_menu.status == 1 %}checked {% endif %}>
                                启用
                            </label>
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="0" name="Status" data-label-on="ON" 
                                       {% if cur_menu.status == 0 %}checked {% endif %}     data-label-off="OFF">
                                禁用
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Validate Me" class="btn btn-primary pull-right">
                    </div>
                </form>
            </div>

        </div>
    </div>
{% endblock %}
{% block script %}
    <!-- Bootstrap FileInput -->
    <!--<script src="custom-plugins/bootstrap-fileinput.min.js></script>-->

    <!-- Select2 -->
    <script src="/plugins/select2/select2.min.js" type="text/javascript"></script>

    <!-- Validation -->
    <script src="/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/plugins/validate/localization/messages_zh.js" type="text/javascript"></script>
    <!-- Demo Scripts -->
    <script>
        $(function () {
            $("#validate-1").validate({
                rules: {
                    Name: {
                        required: true
                    },
                    Path: {
                        required: true
                    },
                },
                invalidHandler: function (form, validator) {
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        var message = errors == 1
                                ? 'You missed 1 field. It has been highlighted'
                                : 'You missed ' + errors + ' fields. They have been highlighted';
                        $("#da-ex-val1-error").html(message).show();
                    } else {
                        $("#da-ex-val1-error").hide();
                    }
                },
                submitHandler: function (form) {
                    $.ajax({
                        type: $(form).attr('method'),
                        url: $(form).attr('action'),
                        data: $(form).serialize(),
                        dataType: 'json',
                        success: function (msg) {
                            if (typeof msg === 'object') {
                                if (msg.status) {
                                    alert(msg.info);
                                    window.location.href = msg.url;
                                } else {
                                    $.msgbox(msg.info, {type: "error"});
                                }
                            }
                        }
                    });
                    return false; // required 
                }
            });

        });
    </script>
{% endblock %}