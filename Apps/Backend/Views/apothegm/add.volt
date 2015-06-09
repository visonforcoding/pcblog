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
                        <label class="control-label">出处<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="source" class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">内容</label>
                        <div class="controls">
                            <textarea class="span12" name="content" id="input05" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">状态</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="1" name="status" data-label-on="ON" 
                                       data-label-off="OFF" checked>
                                启用
                            </label>
                            <label class="radio">
                                <input type="radio" data-provide="ibutton" value="0" name="status" data-label-on="ON" 
                                       data-label-off="OFF">
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