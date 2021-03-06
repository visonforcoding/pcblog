{% extends "layout/layout.volt" %}
{% block title %}小绾的博客{% endblock %}
{% block javascript %}
    <!-- ueditor -->
    <link href="/public/plugins/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css')}}" rel="stylesheet" type="text/css" />  
    <script src="/public/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js')}}" ></script>
    <script>
        $(function () {
            SyntaxHighlighter.all();
        })
    </script>
{% endblock %}
{% block css %}
    <style>
        .wrapper {
            width: 1020px;
        }
        #posts-list {
            width: 720px;
        }
        #posts-list article .box {
            background: #F8F5F2;
        }
        #posts-list article .box .excerpt {
            float: none;
            width: 100%;
        }
        #posts-list article .box {
            padding-right: 20px;
        }
    </style>{% endblock %}
    {% block main %}
        <!-- MAIN -->
        <div id="main">
            <div class="wrapper cf">
                <!-- masthead -->
                {#  <div class="masthead cf">
                      OUR BLOG
                  </div>#}
                <!-- ENDS masthead -->
                <!-- posts list -->
                <div id="posts-list" class="cf">        	
                    <!-- Standard -->
                    <article class="format-standard">
                        {#  <div class="feature-image">
                              <img src="{{blog.cover}}" alt="Alt text" />
                          </div>#}
                        <div class="box cf">
                            <div class="entry-date"><div class="number">{{time_d}}</div><div class="month">{{time_m}}</div></div>
                            <div class="excerpt">
                                <div class="post-heading" >{{blog.title}}</div>
                                <div class="post-bar">
                                    <span class="icon-user"><a href="#"> {{blog.author.username}}</a></span>
                                    <span class="icon-tag"><a href="#"> {{blog.blogcat.name}}</a></span>
                                    <span class="icon-calendar"><a href="#"> {{blog.ctime}}</a></span>
                                </div>
                                <div class="entry-content">
                                    {{blog.content}}
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ENDS  Standard -->
                    <!-- comments list -->
                    <div id="comments-wrap">
                        <!-- 多说评论框 start -->
                        <div class="ds-thread" data-thread-key="{{blog.id}}" data-title="{{blog.title}}" data-url="http://sfblog/blog/single-{{blog.id}}"></div>
                        <!-- 多说评论框 end -->
                        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                        <script type="text/javascript">
                            var duoshuoQuery = {short_name: "caowenpeng1990"};
                            (function () {
                                var ds = document.createElement('script');
                                ds.type = 'text/javascript';
                                ds.async = true;
                                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                                ds.charset = 'UTF-8';
                                (document.getElementsByTagName('head')[0]
                                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                            })();
                        </script>
                        <!-- 多说公共JS代码 end -->
                    </div>
                    <!-- ENDS Respond -->
                </div>
                <!-- ENDS posts list -->
                <!-- sidebar -->
                <aside id="sidebar">
                    {{elements.getBlogRight() }}
                </aside>
                <!-- ENDS sidebar -->


            </div><!-- ENDS WRAPPER -->
        </div>
        <!-- ENDS MAIN -->

    {% endblock %}
