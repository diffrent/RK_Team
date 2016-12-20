<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/about')) {
                // about_create
                if ($pathinfo === '/about/create') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\AboutController::createAction',  '_route' => 'about_create',);
                }

                // about_view
                if (preg_match('#^/about/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'about_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\AboutController::viewAction',));
                }

                // about_edit
                if (0 === strpos($pathinfo, '/about/edit') && preg_match('#^/about/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'about_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\AboutController::editabout',));
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/category')) {
                    // admin_category_all
                    if (rtrim($pathinfo, '/') === '/admin/category') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_category_all');
                        }

                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::indexAction',  '_route' => 'admin_category_all',);
                    }

                    // admin_category_edit
                    if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::editAction',));
                    }

                    // admin_category_delete
                    if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::deleteAction',));
                    }

                    // admin_category_create
                    if ($pathinfo === '/admin/category/create') {
                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user')) {
                    // admin_users_all
                    if (rtrim($pathinfo, '/') === '/admin/user') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_users_all');
                        }

                        return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::indexAction',  '_route' => 'admin_users_all',);
                    }

                    // admin_user_edit
                    if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::editAction',));
                    }

                    // admin_user_delete
                    if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\Admin\\UserController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/article')) {
                // article_create
                if ($pathinfo === '/article/create') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::create',  '_route' => 'article_create',);
                }

                // article_view
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::viewArticle',));
                }

                // article_edit
                if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::editArticle',));
                }

                // article_delete
                if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ArticleController::delete',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/comment')) {
                // comment_create
                if (0 === strpos($pathinfo, '/comment/create') && preg_match('#^/comment/create/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_create')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CommentController::create',));
                }

                // comment_delete
                if (0 === strpos($pathinfo, '/comment/delete') && preg_match('#^/comment/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\CommentController::deleteComment',));
                }

            }

            if (0 === strpos($pathinfo, '/contacts')) {
                // contacts_create
                if ($pathinfo === '/contacts/create') {
                    return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ContactsController::createAction',  '_route' => 'contacts_create',);
                }

                // contacts_view
                if (preg_match('#^/contacts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ContactsController::viewAction',));
                }

                // contacts_edit
                if (0 === strpos($pathinfo, '/contacts/edit') && preg_match('#^/contacts/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contacts_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\ContactsController::editcontacts',));
                }

            }

        }

        // blog_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_blog_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_index');
            }

            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::indexAction',  '_route' => 'blog_index',);
        }
        not_blog_index:

        // church_gallery
        if ($pathinfo === '/gallery') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_church_gallery;
            }

            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\HomeController::gallery',  '_route' => 'church_gallery',);
        }
        not_church_gallery:

        if (0 === strpos($pathinfo, '/message')) {
            // message_create
            if ($pathinfo === '/message/create') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\MessageController::create',  '_route' => 'message_create',);
            }

            // message_delete
            if (0 === strpos($pathinfo, '/message/delete') && preg_match('#^/message/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\MessageController::deleteMessage',));
            }

        }

        // messages_index
        if ($pathinfo === '/admin/messages') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_messages_index;
            }

            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\MessageController::indexAction',  '_route' => 'messages_index',);
        }
        not_messages_index:

        if (0 === strpos($pathinfo, '/log')) {
            // security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
            }

            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/statistics')) {
            // statistics_create
            if ($pathinfo === '/statistics/create') {
                return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\StatisticsController::createAction',  '_route' => 'statistics_create',);
            }

            // statistics_view
            if (preg_match('#^/statistics/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'statistics_view')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\StatisticsController::viewAction',));
            }

            // statistics_edit
            if (0 === strpos($pathinfo, '/statistics/edit') && preg_match('#^/statistics/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'statistics_edit')), array (  '_controller' => 'SoftUniBlogBundle\\Controller\\StatisticsController::editStatistics',));
            }

        }

        // user_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::registerAction',  '_route' => 'user_register',);
        }

        // user_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'SoftUniBlogBundle\\Controller\\UserController::profileAction',  '_route' => 'user_profile',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
