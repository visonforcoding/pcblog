{% extends "layout/base.volt" %}
{% block javascript %}
    <!-- ueditor -->
    <script src="/plugins/ueditor/ueditor.config.js" ></script>
    <script src="/plugins/ueditor/ueditor.all.js" ></script>
    <script href="/plugins/ueditor/lang/zh-cn/zh-cn.js" ></script>    
{% endblock %}
{% block main %}
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">博文修改</span>
            </div>
            <div class="widget-content form-container">
                <form id="validate-1" class="form-vertical" method="post">
                    <div class="control-group">
                        <label class="control-label">标题 <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="title"  class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">父节点<span class="required">*</span></label>
                        <div class="controls">
                            <select id="input01" name="category" class="span12">
{#                                <option value="0">顶级</option>#}
                                {% for cat in catlist %}
                                    <option value="{{cat['id']}}" >{{cat['html']}}{{cat['name']}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">引言</label>
                        <div class="controls">
                            <textarea class="span12" name="guide" id="input05" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">封面</label>
                        <div class="controls">
                            <div id="tdimgcover" style="display: inline-block">
                                <div class="showImg" style="height:163px;">
                                    <div id="discover" class="showImgC">
                                    </div>
                                    <div id="btnimgcover">
                                        <input type="button" style="width: 133px;" class="btn btn-primary" id="coverBtn" value="上传图片" />
                                    </div>
                                    <input type="hidden" name="cover" id="cover"  />
                                </div>
                                <script id="covereditor"></script>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">内容</label>
                        <div class="controls">
                            <!-- 加载编辑器的容器 -->
                            <script id="container" name="content" type="text/plain"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container');
                            </script>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">seo关键字<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="keywords"  class="span12">
                        </div>
                    </div>
                              <div class="control-group">
                        <label class="control-label" for="input05">seo描述</label>
                        <div class="controls">
                            <textarea class="span12" name="description" id="input05" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="确认" class="btn btn-primary pull-right">
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
    <script>
      $(function () {
                         /*图片上传*/
                                                        $(function () {
                                                            initImageUpload('covereditor', 'cover', 'discover', 'coverBtn');
                                                        });
                                                        $("#validate-1").validate({
                                                            rules: {
                                                                title: {
                                                                    required: true
                                                                },
                                                                guide: {
                                                                    required: true
                                                                },
                                                                keywords: {
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