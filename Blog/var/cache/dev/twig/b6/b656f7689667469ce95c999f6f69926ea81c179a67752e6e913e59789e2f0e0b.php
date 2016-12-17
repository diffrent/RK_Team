<?php

/* gallery/gallery.html.twig */
class __TwigTemplate_973be2bf368050d27fa8c3d55fa90086bf5a559e9d6512a89bb63812b045220b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gallery/gallery.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c9d658d2096987c41f2faa01a5236c35dfb91f17a352ff18e8ac2f2e7566ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c9d658d2096987c41f2faa01a5236c35dfb91f17a352ff18e8ac2f2e7566ab->enter($__internal_46c9d658d2096987c41f2faa01a5236c35dfb91f17a352ff18e8ac2f2e7566ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gallery/gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c9d658d2096987c41f2faa01a5236c35dfb91f17a352ff18e8ac2f2e7566ab->leave($__internal_46c9d658d2096987c41f2faa01a5236c35dfb91f17a352ff18e8ac2f2e7566ab_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2683196f51d1aa7853f368c66151709e590b89e293a171a5ac10966a3535026c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2683196f51d1aa7853f368c66151709e590b89e293a171a5ac10966a3535026c->enter($__internal_2683196f51d1aa7853f368c66151709e590b89e293a171a5ac10966a3535026c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gallery.css"), "html", null, true);
        echo "\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"http://cdn.jssor.com/script/jssor.slider-21.1.6.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function (\$) {

            var jssor_1_SlideshowTransitions = [
                {\$Duration:1200,x:0.3,\$During:{\$Left:[0.3,0.7]},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$SlideOut:true,\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$During:{\$Left:[0.3,0.7]},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$SlideOut:true,\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$During:{\$Top:[0.3,0.7]},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$SlideOut:true,\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$During:{\$Top:[0.3,0.7]},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$SlideOut:true,\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Cols:2,\$During:{\$Left:[0.3,0.7]},\$ChessMode:{\$Column:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Cols:2,\$SlideOut:true,\$ChessMode:{\$Column:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Rows:2,\$During:{\$Top:[0.3,0.7]},\$ChessMode:{\$Row:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Rows:2,\$SlideOut:true,\$ChessMode:{\$Row:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Cols:2,\$During:{\$Top:[0.3,0.7]},\$ChessMode:{\$Column:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$Cols:2,\$SlideOut:true,\$ChessMode:{\$Column:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Rows:2,\$During:{\$Left:[0.3,0.7]},\$ChessMode:{\$Row:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$Rows:2,\$SlideOut:true,\$ChessMode:{\$Row:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,y:0.3,\$Cols:2,\$Rows:2,\$During:{\$Left:[0.3,0.7],\$Top:[0.3,0.7]},\$ChessMode:{\$Column:3,\$Row:12},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,y:0.3,\$Cols:2,\$Rows:2,\$During:{\$Left:[0.3,0.7],\$Top:[0.3,0.7]},\$SlideOut:true,\$ChessMode:{\$Column:3,\$Row:12},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:3,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:3,\$SlideOut:true,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$OutCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:12,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:12,\$SlideOut:true,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$OutCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2}
            ];

            var jssor_1_options = {
                \$AutoPlay: true,
                \$SlideshowOptions: {
                    \$Class: \$JssorSlideshowRunner\$,
                    \$Transitions: jssor_1_SlideshowTransitions,
                    \$TransitionsOrder: 1
                },
                \$ArrowNavigatorOptions: {
                    \$Class: \$JssorArrowNavigator\$
                },
                \$ThumbnailNavigatorOptions: {
                    \$Class: \$JssorThumbnailNavigator\$,
                    \$Cols: 10,
                    \$SpacingX: 8,
                    \$SpacingY: 8,
                    \$Align: 360
                }
            };

            var jssor_1_slider = new \$JssorSlider\$(\"jssor_1\", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.\$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 930);
                    jssor_1_slider.\$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            \$(window).bind(\"load\", ScaleSlider);
            \$(window).bind(\"resize\", ScaleSlider);
            \$(window).bind(\"orientationchange\", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <meta charset=\"UTF-8\">
    <title>Gallery</title>
</head>

<div class=\"main\">
    <div class=\"one\">
        <div class=\"gallery-content\">
            <h3>Галерия</h3>
            <div id=\"jssor_1\" style=\"position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;\">
                <!-- Loading Screen -->
                <div data-u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
                    <div style=\"filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;\"></div>
                    <div style=\"position:absolute;display:block;background:url('../../../../web/gallery/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;\"></div>
                </div>
                <div data-u=\"slides\" style=\"cursor: default; position: relative; top: 0px; left: 0px; width: 930px; height: 356px; overflow: hidden;\">
                    <div data-p=\"144.50\">
                        <img data-u=\"image\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/01.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-01.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/02.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-02.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/03.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-03.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <a data-u=\"any\" href=\"http://www.jssor.com\" style=\"display:none\">Image Gallery</a>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/04.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-04.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/05.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-05.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/06.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-06.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/07.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-07.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/08.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-08.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/09.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-09.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/10.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-10.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/11.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-11.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/12.jpg"), "html", null, true);
        echo "\"/>
                        <img data-u=\"thumb\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery/thumb-12.jpg"), "html", null, true);
        echo "\"/>
                    </div>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u=\"thumbnavigator\" class=\"jssort01\" style=\"position:absolute;left:0px;bottom:0px;width:800px;height:100px;\" data-autocenter=\"1\">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u=\"slides\" style=\"cursor: default;\">
                        <div data-u=\"prototype\" class=\"p\">
                            <div class=\"w\">
                                <div data-u=\"thumbnailtemplate\" class=\"t\"></div>
                            </div>
                            <div class=\"c\"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u=\"arrowleft\" class=\"jssora05l\" style=\"top:158px;left:15px;width:40px;height:40px;\"></span>
                <span data-u=\"arrowright\" class=\"jssora05r\" style=\"top:158px;right:15px;width:40px;height:40px;\"></span>
            </div>
            <!-- #endregion Jssor Slider End -->
        </div>
    </div>
</div>
";
        
        $__internal_2683196f51d1aa7853f368c66151709e590b89e293a171a5ac10966a3535026c->leave($__internal_2683196f51d1aa7853f368c66151709e590b89e293a171a5ac10966a3535026c_prof);

    }

    public function getTemplateName()
    {
        return "gallery/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 138,  244 => 137,  238 => 134,  234 => 133,  228 => 130,  224 => 129,  218 => 126,  214 => 125,  208 => 122,  204 => 121,  198 => 118,  194 => 117,  188 => 114,  184 => 113,  178 => 110,  174 => 109,  168 => 106,  164 => 105,  157 => 101,  153 => 100,  147 => 97,  143 => 96,  137 => 93,  133 => 92,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset('css/gallery.css') }}\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"http://cdn.jssor.com/script/jssor.slider-21.1.6.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function (\$) {

            var jssor_1_SlideshowTransitions = [
                {\$Duration:1200,x:0.3,\$During:{\$Left:[0.3,0.7]},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$SlideOut:true,\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$During:{\$Left:[0.3,0.7]},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$SlideOut:true,\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$During:{\$Top:[0.3,0.7]},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$SlideOut:true,\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$During:{\$Top:[0.3,0.7]},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$SlideOut:true,\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Cols:2,\$During:{\$Left:[0.3,0.7]},\$ChessMode:{\$Column:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Cols:2,\$SlideOut:true,\$ChessMode:{\$Column:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Rows:2,\$During:{\$Top:[0.3,0.7]},\$ChessMode:{\$Row:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Rows:2,\$SlideOut:true,\$ChessMode:{\$Row:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:0.3,\$Cols:2,\$During:{\$Top:[0.3,0.7]},\$ChessMode:{\$Column:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,y:-0.3,\$Cols:2,\$SlideOut:true,\$ChessMode:{\$Column:12},\$Easing:{\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,\$Rows:2,\$During:{\$Left:[0.3,0.7]},\$ChessMode:{\$Row:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:-0.3,\$Rows:2,\$SlideOut:true,\$ChessMode:{\$Row:3},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,y:0.3,\$Cols:2,\$Rows:2,\$During:{\$Left:[0.3,0.7],\$Top:[0.3,0.7]},\$ChessMode:{\$Column:3,\$Row:12},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,x:0.3,y:0.3,\$Cols:2,\$Rows:2,\$During:{\$Left:[0.3,0.7],\$Top:[0.3,0.7]},\$SlideOut:true,\$ChessMode:{\$Column:3,\$Row:12},\$Easing:{\$Left:\$Jease\$.\$InCubic,\$Top:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:3,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:3,\$SlideOut:true,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$OutCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:12,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$InCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2},
                {\$Duration:1200,\$Delay:20,\$Clip:12,\$SlideOut:true,\$Assembly:260,\$Easing:{\$Clip:\$Jease\$.\$OutCubic,\$Opacity:\$Jease\$.\$Linear},\$Opacity:2}
            ];

            var jssor_1_options = {
                \$AutoPlay: true,
                \$SlideshowOptions: {
                    \$Class: \$JssorSlideshowRunner\$,
                    \$Transitions: jssor_1_SlideshowTransitions,
                    \$TransitionsOrder: 1
                },
                \$ArrowNavigatorOptions: {
                    \$Class: \$JssorArrowNavigator\$
                },
                \$ThumbnailNavigatorOptions: {
                    \$Class: \$JssorThumbnailNavigator\$,
                    \$Cols: 10,
                    \$SpacingX: 8,
                    \$SpacingY: 8,
                    \$Align: 360
                }
            };

            var jssor_1_slider = new \$JssorSlider\$(\"jssor_1\", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.\$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 930);
                    jssor_1_slider.\$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            \$(window).bind(\"load\", ScaleSlider);
            \$(window).bind(\"resize\", ScaleSlider);
            \$(window).bind(\"orientationchange\", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <meta charset=\"UTF-8\">
    <title>Gallery</title>
</head>

<div class=\"main\">
    <div class=\"one\">
        <div class=\"gallery-content\">
            <h3>Галерия</h3>
            <div id=\"jssor_1\" style=\"position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;\">
                <!-- Loading Screen -->
                <div data-u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
                    <div style=\"filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;\"></div>
                    <div style=\"position:absolute;display:block;background:url('../../../../web/gallery/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;\"></div>
                </div>
                <div data-u=\"slides\" style=\"cursor: default; position: relative; top: 0px; left: 0px; width: 930px; height: 356px; overflow: hidden;\">
                    <div data-p=\"144.50\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/01.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-01.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/02.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-02.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/03.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-03.jpg') }}\"/>
                    </div>
                    <a data-u=\"any\" href=\"http://www.jssor.com\" style=\"display:none\">Image Gallery</a>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/04.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-04.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/05.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-05.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/06.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-06.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/07.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-07.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/08.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-08.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/09.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-09.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/10.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-10.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/11.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-11.jpg') }}\"/>
                    </div>
                    <div data-p=\"144.50\" style=\"display: none;\">
                        <img data-u=\"image\" src=\"{{ asset('gallery/12.jpg') }}\"/>
                        <img data-u=\"thumb\" src=\"{{ asset('gallery/thumb-12.jpg') }}\"/>
                    </div>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u=\"thumbnavigator\" class=\"jssort01\" style=\"position:absolute;left:0px;bottom:0px;width:800px;height:100px;\" data-autocenter=\"1\">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u=\"slides\" style=\"cursor: default;\">
                        <div data-u=\"prototype\" class=\"p\">
                            <div class=\"w\">
                                <div data-u=\"thumbnailtemplate\" class=\"t\"></div>
                            </div>
                            <div class=\"c\"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u=\"arrowleft\" class=\"jssora05l\" style=\"top:158px;left:15px;width:40px;height:40px;\"></span>
                <span data-u=\"arrowright\" class=\"jssora05r\" style=\"top:158px;right:15px;width:40px;height:40px;\"></span>
            </div>
            <!-- #endregion Jssor Slider End -->
        </div>
    </div>
</div>
{% endblock %}
";
    }
}
