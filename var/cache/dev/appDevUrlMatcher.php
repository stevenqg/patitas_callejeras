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

        if (0 === strpos($pathinfo, '/service')) {
            // pc_fundation_webservice
            if (0 === strpos($pathinfo, '/service/events') && preg_match('#^/service/events/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_fundation_webservice')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\ServiceController::serviceAction',));
            }

            // pc_fundation_webservice_2
            if (preg_match('#^/service/(?P<nomUs>[^/]++)/(?P<apllUs>[^/]++)/(?P<dirUs>[^/]++)/(?P<telUs>[^/]++)/(?P<emailUs>[^/]++)/(?P<passUs>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_fundation_webservice_2')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\ServiceController::registerAction',));
            }

            // pc_fundation_webservice_3
            if (preg_match('#^/service/(?P<nomM>[^/]++)/(?P<espM>[^/]++)/(?P<genM>[^/]++)/(?P<razM>[^/]++)/(?P<edaM>[^/]++)/(?P<colM>[^/]++)/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_fundation_webservice_3')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\ServiceController::registerPetAction',));
            }

            // pc_fundation_webservice_4
            if (0 === strpos($pathinfo, '/service/login') && preg_match('#^/service/login/(?P<emailUs>[^/]++)/(?P<passUs>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_fundation_webservice_4')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\ServiceController::loginAction',));
            }

            // pc_fundation_webservice_5
            if (0 === strpos($pathinfo, '/service/report/add') && preg_match('#^/service/report/add/(?P<lat>[^/]++)/(?P<lon>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_fundation_webservice_5')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\ServiceController::addReportAction',));
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

        // pc_fundation_eventos
        if ($pathinfo === '/eventos') {
            return array (  '_controller' => 'PC\\FundationBundle\\Controller\\MainController::eventosAction',  '_route' => 'pc_fundation_eventos',);
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
            if (0 === strpos($pathinfo, '/user/add') && preg_match('#^/user/add/(?P<petId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_user_encuesta')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\UserController::addAction',));
            }

            // pc_user_create
            if (0 === strpos($pathinfo, '/user/create') && preg_match('#^/user/create/(?P<petId>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_user_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_user_create')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\UserController::createAction',));
            }
            not_pc_user_create:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // pc_administrator_index
            if ($pathinfo === '/admin') {
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
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pc_administrator_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_update')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::updateAction',));
            }
            not_pc_administrator_update:

            if (0 === strpos($pathinfo, '/admin/control')) {
                // pc_administrator_control
                if ($pathinfo === '/admin/control') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::controlAction',  '_route' => 'pc_administrator_control',);
                }

                // pc_administrator_control_add
                if (0 === strpos($pathinfo, '/admin/control/add') && preg_match('#^/admin/control/add/(?P<sterilizationId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_control_add')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::controladdAction',));
                }

                // pc_admininstrator_control_create
                if (0 === strpos($pathinfo, '/admin/control/create') && preg_match('#^/admin/control/create/(?P<sterilizationId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_admininstrator_control_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admininstrator_control_create')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createControlAction',));
                }
                not_pc_admininstrator_control_create:

            }

            if (0 === strpos($pathinfo, '/admin/jornadacenso')) {
                // pc_admin_jornada_censo
                if ($pathinfo === '/admin/jornadacenso/view') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensoAction',  '_route' => 'pc_admin_jornada_censo',);
                }

                // pc_admin_jornada_censo_mas
                if (0 === strpos($pathinfo, '/admin/jornadacenso/mas') && preg_match('#^/admin/jornadacenso/mas/(?P<meetingId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_jornada_censo_mas')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensomasAction',));
                }

                // pc_admin_jornada_censo_addcollaborator
                if (0 === strpos($pathinfo, '/admin/jornadacenso/addcollaborator') && preg_match('#^/admin/jornadacenso/addcollaborator/(?P<meetingId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_jornada_censo_addcollaborator')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::addcollaboratorAction',));
                }

                // pc_admin_jornada_censo_create_collaborator
                if (0 === strpos($pathinfo, '/admin/jornadacenso/createcollaborator') && preg_match('#^/admin/jornadacenso/createcollaborator/(?P<meetingId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_admin_jornada_censo_create_collaborator;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_jornada_censo_create_collaborator')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createCollabAction',));
                }
                not_pc_admin_jornada_censo_create_collaborator:

                // pc_admin_jornada_censo_edit
                if ($pathinfo === '/admin/jornadacenso/edit') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensoeditAction',  '_route' => 'pc_admin_jornada_censo_edit',);
                }

                if (0 === strpos($pathinfo, '/admin/jornadacenso/a')) {
                    if (0 === strpos($pathinfo, '/admin/jornadacenso/agregar')) {
                        // pc_admin_jornada_censo_agregar
                        if (preg_match('#^/admin/jornadacenso/agregar/(?P<meetingId>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_jornada_censo_agregar')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadacensodatosAction',));
                        }

                        // pc_admin_jornada_censo_registrar
                        if ($pathinfo === '/admin/jornadacenso/agregar') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_pc_admin_jornada_censo_registrar;
                            }

                            return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::registrarcensoAction',  '_route' => 'pc_admin_jornada_censo_registrar',);
                        }
                        not_pc_admin_jornada_censo_registrar:

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

            if (0 === strpos($pathinfo, '/admin/esteriliza')) {
                // pc_admin_jornada_esterilizacion
                if ($pathinfo === '/admin/esterilizacion') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::jornadaesterilizaAction',  '_route' => 'pc_admin_jornada_esterilizacion',);
                }

                // pc_admin_esterilizacion
                if (0 === strpos($pathinfo, '/admin/esteriliza/mas') && preg_match('#^/admin/esteriliza/mas/(?P<meetingId>[^/]++)/(?P<controlAt>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_esterilizacion')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::esterilizacionAction',));
                }

                if (0 === strpos($pathinfo, '/admin/esterilizacion')) {
                    // pc_admin_esterilizacion_add
                    if (0 === strpos($pathinfo, '/admin/esterilizacion/add') && preg_match('#^/admin/esterilizacion/add/(?P<meetingId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_esterilizacion_add')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::esterilizacionAddAction',));
                    }

                    // pc_admin_esterilizacion_update_list
                    if (0 === strpos($pathinfo, '/admin/esterilizacion/update') && preg_match('#^/admin/esterilizacion/update/(?P<petId>[^/]++)/(?P<meetingId>[^/]++)/(?P<controlAt>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_esterilizacion_update_list')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::esterilizacionUpdateAction',));
                    }

                    // pc_admin_esterilizacion_create
                    if ($pathinfo === '/admin/esterilizacion/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pc_admin_esterilizacion_create;
                        }

                        return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createesterilizacionAction',  '_route' => 'pc_admin_esterilizacion_create',);
                    }
                    not_pc_admin_esterilizacion_create:

                }

            }

            if (0 === strpos($pathinfo, '/admin/adopcion')) {
                // pc_admin_adopt_pet
                if (rtrim($pathinfo, '/') === '/admin/adopcion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pc_admin_adopt_pet');
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::adopcionviewAction',  '_route' => 'pc_admin_adopt_pet',);
                }

                // pc_admin_adopt_pet_info
                if ($pathinfo === '/admin/adopcion/info') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::adopcioninfoAction',  '_route' => 'pc_admin_adopt_pet_info',);
                }

                // pc_admin_adopt_pet_edit
                if ($pathinfo === '/admin/adopcion/edit') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::adopcioneditAction',  '_route' => 'pc_admin_adopt_pet_edit',);
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

                // pc_admin_pet_photo
                if ($pathinfo === '/admin/pet/photo') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::uploadAction',  '_route' => 'pc_admin_pet_photo',);
                }

                // pc_admin_pet_solicitudes
                if ($pathinfo === '/admin/pet/solicitudes') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::solicitudesAction',  '_route' => 'pc_admin_pet_solicitudes',);
                }

                // pc_admin_aceptar_solicitud
                if (0 === strpos($pathinfo, '/admin/pet/aceptar') && preg_match('#^/admin/pet/aceptar/(?P<solicitudId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_aceptar_solicitud')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::solaceptarAction',));
                }

                // pc_admin_pendiente_solicitud
                if (0 === strpos($pathinfo, '/admin/pet/pendiente') && preg_match('#^/admin/pet/pendiente/(?P<solicitudId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_pendiente_solicitud')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::solpendienteAction',));
                }

                // pc_admin_rechazar_solicitud
                if (0 === strpos($pathinfo, '/admin/pet/rechazar') && preg_match('#^/admin/pet/rechazar/(?P<solicitudId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_rechazar_solicitud')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::solrechazarAction',));
                }

                // pc_admin_pet_solicitudes_date
                if (0 === strpos($pathinfo, '/admin/pet/solicitud/date') && preg_match('#^/admin/pet/solicitud/date/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_admin_pet_solicitudes_date')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::solicituddateAction',));
                }

            }

            // pc_admin_adoptada_pet
            if ($pathinfo === '/admin/adoptada/pet') {
                return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::mascotadoptadaAction',  '_route' => 'pc_admin_adoptada_pet',);
            }

            if (0 === strpos($pathinfo, '/admin/recepcion')) {
                // pc_admin_donativ_recepcion
                if ($pathinfo === '/admin/recepcion') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::recepcionAction',  '_route' => 'pc_admin_donativ_recepcion',);
                }

                // pc_admin_donativ_recepcion_add
                if ($pathinfo === '/admin/recepcion/add') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::recepcionaddAction',  '_route' => 'pc_admin_donativ_recepcion_add',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/donativ')) {
                // pc_admin_donativ_add
                if ($pathinfo === '/admin/donativ/add') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::donativoaddAction',  '_route' => 'pc_admin_donativ_add',);
                }

                // pc_admin_donativ_create
                if ($pathinfo === '/admin/donativ/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_admin_donativ_create;
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::createDonativeAction',  '_route' => 'pc_admin_donativ_create',);
                }
                not_pc_admin_donativ_create:

                // pc_admin_donativ
                if ($pathinfo === '/admin/donativ') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::donativosAction',  '_route' => 'pc_admin_donativ',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/eventos')) {
                // pc_administrator_eventos
                if ($pathinfo === '/admin/eventos') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventosAction',  '_route' => 'pc_administrator_eventos',);
                }

                // pc_administrator_eventos_add
                if ($pathinfo === '/admin/eventos/add') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventosaddAction',  '_route' => 'pc_administrator_eventos_add',);
                }

                // pc_administrator_eventos_create
                if ($pathinfo === '/admin/eventos/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_administrator_eventos_create;
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventocreateAction',  '_route' => 'pc_administrator_eventos_create',);
                }
                not_pc_administrator_eventos_create:

                // pc_administrator_evento_edit
                if (0 === strpos($pathinfo, '/admin/eventos/edit') && preg_match('#^/admin/eventos/edit/(?P<eventId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_evento_edit')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventoeditAction',));
                }

                // pc_administrator_evento_update
                if (0 === strpos($pathinfo, '/admin/eventos/update') && preg_match('#^/admin/eventos/update/(?P<eventId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pc_administrator_evento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_evento_update')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventUpdateAction',));
                }
                not_pc_administrator_evento_update:

                // pc_administrator_evento_delete
                if (0 === strpos($pathinfo, '/admin/eventos/delete') && preg_match('#^/admin/eventos/delete/(?P<eventId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_evento_delete')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::eventoDeleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/credito')) {
                // pc_administrator_credito_add
                if ($pathinfo === '/admin/creditoadd') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::creditoaddAction',  '_route' => 'pc_administrator_credito_add',);
                }

                // pc_administrator_credito_create
                if ($pathinfo === '/admin/credito/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_administrator_credito_create;
                    }

                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::registrarCreditoAction',  '_route' => 'pc_administrator_credito_create',);
                }
                not_pc_administrator_credito_create:

                if (0 === strpos($pathinfo, '/admin/creditos')) {
                    // pc_administrator_creditos
                    if ($pathinfo === '/admin/creditos') {
                        return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::creditoinfoAction',  '_route' => 'pc_administrator_creditos',);
                    }

                    // pc_administrator_creditos_cancelar
                    if (0 === strpos($pathinfo, '/admin/creditos/cancel') && preg_match('#^/admin/creditos/cancel/(?P<creditId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_administrator_creditos_cancelar')), array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::cancelarCreditoAction',));
                    }

                }

                // pc_administrator_credito_fin
                if ($pathinfo === '/admin/creditofin') {
                    return array (  '_controller' => 'PC\\FundationBundle\\Controller\\AdminController::creditofinAction',  '_route' => 'pc_administrator_credito_fin',);
                }

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
