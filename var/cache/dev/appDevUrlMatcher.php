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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pc_fundation_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pc_fundation_homepage');
            }

            return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::indexAction',  '_route' => 'pc_fundation_homepage',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // pc_fundation_comedogs
            if ($pathinfo === '/index/comedogs') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::comedogsAction',  '_route' => 'pc_fundation_comedogs',);
            }

            // pc_fundation_tapitas
            if ($pathinfo === '/index/tapitas') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::tapitasAction',  '_route' => 'pc_fundation_tapitas',);
            }

            // pc_fundation_adoptar
            if ($pathinfo === '/index/adoptar') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::adoptarAction',  '_route' => 'pc_fundation_adoptar',);
            }

            // pc_fundation_index
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::indexAction',  '_route' => 'pc_fundation_index',);
            }

        }

        // pc_fundation_nosotros
        if ($pathinfo === '/nosotros') {
            return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::nosotrosAction',  '_route' => 'pc_fundation_nosotros',);
        }

        // pc_fundation_encuesta
        if ($pathinfo === '/encuesta') {
            return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::encuestaAction',  '_route' => 'pc_fundation_encuesta',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // pc_user_encuesta
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\UserController::addAction',  '_route' => 'pc_user_encuesta',);
            }

            // pc_user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_user_create;
                }

                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\UserController::createAction',  '_route' => 'pc_user_create',);
            }
            not_pc_user_create:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // pc_administrator_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pc_administrator_index');
                }

                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::indexAction',  '_route' => 'pc_administrator_index',);
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                // pc_administrator_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::loginAction',  '_route' => 'pc_administrator_login',);
                }

                // pc_administrator_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::logoutAction',  '_route' => 'pc_administrator_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/pet')) {
                // pc_administrator_pet_add
                if ($pathinfo === '/admin/pet/add') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::addpetAction',  '_route' => 'pc_administrator_pet_add',);
                }

                // pc_administrator_pet_create
                if ($pathinfo === '/admin/pet/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_administrator_pet_create;
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createpetAction',  '_route' => 'pc_administrator_pet_create',);
                }
                not_pc_administrator_pet_create:

            }

            // pc_administrator_add
            if ($pathinfo === '/admin/add') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::addAction',  '_route' => 'pc_administrator_add',);
            }

            // pc_administrator_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_administrator_create;
                }

                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createAction',  '_route' => 'pc_administrator_create',);
            }
            not_pc_administrator_create:

            // pc_administrator_edit
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_edit')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::editAction',));
            }

            // pc_administrator_update
            if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_update')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/admin/jornadacenso')) {
                // pc_admin_jornada_censo
                if ($pathinfo === '/admin/jornadacenso/view') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensoAction',  '_route' => 'pc_admin_jornada_censo',);
                }

                // pc_admin_jornada_censo_mas
                if ($pathinfo === '/admin/jornadacenso/mas') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensomasAction',  '_route' => 'pc_admin_jornada_censo_mas',);
                }

                // pc_admin_jornada_censo_edit
                if ($pathinfo === '/admin/jornadacenso/edit') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensoeditAction',  '_route' => 'pc_admin_jornada_censo_edit',);
                }

                if (0 === strpos($pathinfo, '/admin/jornadacenso/a')) {
                    // pc_admin_jornada_censo_agregar
                    if ($pathinfo === '/admin/jornadacenso/agregar') {
                        return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensodatosAction',  '_route' => 'pc_admin_jornada_censo_agregar',);
                    }

                    // pc_admin_jornada_censo_add
                    if ($pathinfo === '/admin/jornadacenso/add') {
                        return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensoaddAction',  '_route' => 'pc_admin_jornada_censo_add',);
                    }

                }

                // pc_admin_jornada_censo_create
                if ($pathinfo === '/admin/jornadacenso/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_admin_jornada_censo_create;
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensocreateAction',  '_route' => 'pc_admin_jornada_censo_create',);
                }
                not_pc_admin_jornada_censo_create:

            }

            // pc_admin_adopt_pet
            if (rtrim($pathinfo, '/') === '/admin/adopcion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pc_admin_adopt_pet');
                }

                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::adopcionviewAction',  '_route' => 'pc_admin_adopt_pet',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
