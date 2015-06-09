{# empty Twig template #}
{% extends "layout/layout.volt" %}
{% block title %}小绾的博客{% endblock %}
{% block javascript %}
{% endblock %}
{% block css %}
    <style>

    </style>
{% endblock %}
{% block main %}
    <!-- MAIN -->
    <div id="main">
        <div class="wrapper cf">
            <!-- posts list -->
            <div id="posts-list" class="cf">        
                <!-- Standard -->
                {% for blog in blogs %}
                    <article class="format-standard">
                        <div class="feature-image">
                            <a href="">
                                <img src="{{blog.cover}}" alt="Alt text" />
                            </a>
                        </div>
                        <div class="box cf">
                            <div class="entry-date"><div class="number">{{date('d',strtotime(blog.ctime))}}</div><div class="month">{{date('M',strtotime(blog.ctime))}}</div></div>
                            <div class="excerpt">
                                <a href="" class="post-heading" >{{blog.title}}</a>
                                <p>{{mb_substr(strip_tags(blog.content),0,200,'utf-8')}}......</p>
                                <p><a href="" class="learnmore">查看更多</a></p>
                            </div>
                            <div class="meta">
                                <span class="format">Post</span>
                                <span class="user"><a href="#">{% if blog.author is empty %}null{% else %}{{blog.author.username}} {% endif %}</a></span>
                                {#                                <span class="comments">16 comments</span>#}
                                <span class="tags"><a href="">{{blog.blogCat.name}}</a></span>
                            </div>
                        </div>
                    </article>
                {% endfor %}
                <!-- ENDS  Standard -->
                <!-- page-navigation -->
                <div class="page-navigation cf">
                    <ul>
                        {{nav}}
                    </ul>
                </div>
                <!--ENDS page-navigation -->
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
