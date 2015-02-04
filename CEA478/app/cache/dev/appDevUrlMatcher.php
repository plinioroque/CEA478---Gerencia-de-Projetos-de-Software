<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/chamadas')) {
            // chamadas
            if (rtrim($pathinfo, '/') === '/chamadas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chamadas');
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::indexAction',  '_route' => 'chamadas',);
            }

            // chamadas_show
            if (preg_match('#^/chamadas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::showAction',));
            }

            // chamadas_new
            if ($pathinfo === '/chamadas/new') {
                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::newAction',  '_route' => 'chamadas_new',);
            }

            // chamadas_create
            if ($pathinfo === '/chamadas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_chamadas_create;
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::createAction',  '_route' => 'chamadas_create',);
            }
            not_chamadas_create:

            // chamadas_edit
            if (preg_match('#^/chamadas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::editAction',));
            }

            // chamadas_update
            if (preg_match('#^/chamadas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_chamadas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::updateAction',));
            }
            not_chamadas_update:

            // chamadas_delete
            if (preg_match('#^/chamadas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_chamadas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::deleteAction',));
            }
            not_chamadas_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/chamada')) {
                if (0 === strpos($pathinfo, '/admin/chamadacategoria')) {
                    // chamadacategoria
                    if (rtrim($pathinfo, '/') === '/admin/chamadacategoria') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'chamadacategoria');
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::indexAction',  '_route' => 'chamadacategoria',);
                    }

                    // chamadacategoria_show
                    if (preg_match('#^/admin/chamadacategoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::showAction',));
                    }

                    // chamadacategoria_new
                    if ($pathinfo === '/admin/chamadacategoria/new') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::newAction',  '_route' => 'chamadacategoria_new',);
                    }

                    // chamadacategoria_create
                    if ($pathinfo === '/admin/chamadacategoria/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_chamadacategoria_create;
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::createAction',  '_route' => 'chamadacategoria_create',);
                    }
                    not_chamadacategoria_create:

                    // chamadacategoria_edit
                    if (preg_match('#^/admin/chamadacategoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::editAction',));
                    }

                    // chamadacategoria_update
                    if (preg_match('#^/admin/chamadacategoria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_chamadacategoria_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::updateAction',));
                    }
                    not_chamadacategoria_update:

                    // chamadacategoria_delete
                    if (preg_match('#^/admin/chamadacategoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_chamadacategoria_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::deleteAction',));
                    }
                    not_chamadacategoria_delete:

                }

                if (0 === strpos($pathinfo, '/admin/chamadalocal')) {
                    // chamadalocal
                    if (rtrim($pathinfo, '/') === '/admin/chamadalocal') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'chamadalocal');
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::indexAction',  '_route' => 'chamadalocal',);
                    }

                    // chamadalocal_show
                    if (preg_match('#^/admin/chamadalocal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::showAction',));
                    }

                    // chamadalocal_new
                    if ($pathinfo === '/admin/chamadalocal/new') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::newAction',  '_route' => 'chamadalocal_new',);
                    }

                    // chamadalocal_create
                    if ($pathinfo === '/admin/chamadalocal/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_chamadalocal_create;
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::createAction',  '_route' => 'chamadalocal_create',);
                    }
                    not_chamadalocal_create:

                    // chamadalocal_edit
                    if (preg_match('#^/admin/chamadalocal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::editAction',));
                    }

                    // chamadalocal_update
                    if (preg_match('#^/admin/chamadalocal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_chamadalocal_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::updateAction',));
                    }
                    not_chamadalocal_update:

                    // chamadalocal_delete
                    if (preg_match('#^/admin/chamadalocal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_chamadalocal_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::deleteAction',));
                    }
                    not_chamadalocal_delete:

                }

                if (0 === strpos($pathinfo, '/admin/chamadastatus')) {
                    // chamadastatus
                    if (rtrim($pathinfo, '/') === '/admin/chamadastatus') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'chamadastatus');
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::indexAction',  '_route' => 'chamadastatus',);
                    }

                    // chamadastatus_show
                    if (preg_match('#^/admin/chamadastatus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::showAction',));
                    }

                    // chamadastatus_new
                    if ($pathinfo === '/admin/chamadastatus/new') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::newAction',  '_route' => 'chamadastatus_new',);
                    }

                    // chamadastatus_create
                    if ($pathinfo === '/admin/chamadastatus/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_chamadastatus_create;
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::createAction',  '_route' => 'chamadastatus_create',);
                    }
                    not_chamadastatus_create:

                    // chamadastatus_edit
                    if (preg_match('#^/admin/chamadastatus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::editAction',));
                    }

                    // chamadastatus_update
                    if (preg_match('#^/admin/chamadastatus/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_chamadastatus_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::updateAction',));
                    }
                    not_chamadastatus_update:

                    // chamadastatus_delete
                    if (preg_match('#^/admin/chamadastatus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_chamadastatus_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::deleteAction',));
                    }
                    not_chamadastatus_delete:

                }

                if (0 === strpos($pathinfo, '/admin/chamadanivel')) {
                    // chamadanivel
                    if (rtrim($pathinfo, '/') === '/admin/chamadanivel') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'chamadanivel');
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::indexAction',  '_route' => 'chamadanivel',);
                    }

                    // chamadanivel_show
                    if (preg_match('#^/admin/chamadanivel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::showAction',));
                    }

                    // chamadanivel_new
                    if ($pathinfo === '/admin/chamadanivel/new') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::newAction',  '_route' => 'chamadanivel_new',);
                    }

                    // chamadanivel_create
                    if ($pathinfo === '/admin/chamadanivel/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_chamadanivel_create;
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::createAction',  '_route' => 'chamadanivel_create',);
                    }
                    not_chamadanivel_create:

                    // chamadanivel_edit
                    if (preg_match('#^/admin/chamadanivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::editAction',));
                    }

                    // chamadanivel_update
                    if (preg_match('#^/admin/chamadanivel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_chamadanivel_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::updateAction',));
                    }
                    not_chamadanivel_update:

                    // chamadanivel_delete
                    if (preg_match('#^/admin/chamadanivel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_chamadanivel_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::deleteAction',));
                    }
                    not_chamadanivel_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/relatorios')) {
                // relatorios
                if (rtrim($pathinfo, '/') === '/admin/relatorios') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'relatorios');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::indexAction',  '_route' => 'relatorios',);
                }

                // relatorios_show
                if (preg_match('#^/admin/relatorios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::showAction',));
                }

                // relatorios_new
                if ($pathinfo === '/admin/relatorios/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::newAction',  '_route' => 'relatorios_new',);
                }

                // relatorios_create
                if ($pathinfo === '/admin/relatorios/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_relatorios_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::createAction',  '_route' => 'relatorios_create',);
                }
                not_relatorios_create:

                // relatorios_edit
                if (preg_match('#^/admin/relatorios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::editAction',));
                }

                // relatorios_update
                if (preg_match('#^/admin/relatorios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_relatorios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::updateAction',));
                }
                not_relatorios_update:

                // relatorios_delete
                if (preg_match('#^/admin/relatorios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_relatorios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::deleteAction',));
                }
                not_relatorios_delete:

            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                if (0 === strpos($pathinfo, '/admin/usuarioclasse')) {
                    // usuarioclasse
                    if (rtrim($pathinfo, '/') === '/admin/usuarioclasse') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'usuarioclasse');
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::indexAction',  '_route' => 'usuarioclasse',);
                    }

                    // usuarioclasse_show
                    if (preg_match('#^/admin/usuarioclasse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::showAction',));
                    }

                    // usuarioclasse_new
                    if ($pathinfo === '/admin/usuarioclasse/new') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::newAction',  '_route' => 'usuarioclasse_new',);
                    }

                    // usuarioclasse_create
                    if ($pathinfo === '/admin/usuarioclasse/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_usuarioclasse_create;
                        }

                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::createAction',  '_route' => 'usuarioclasse_create',);
                    }
                    not_usuarioclasse_create:

                    // usuarioclasse_edit
                    if (preg_match('#^/admin/usuarioclasse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::editAction',));
                    }

                    // usuarioclasse_update
                    if (preg_match('#^/admin/usuarioclasse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_usuarioclasse_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::updateAction',));
                    }
                    not_usuarioclasse_update:

                    // usuarioclasse_delete
                    if (preg_match('#^/admin/usuarioclasse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_usuarioclasse_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::deleteAction',));
                    }
                    not_usuarioclasse_delete:

                }

                // usuario
                if (rtrim($pathinfo, '/') === '/admin/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_show
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::showAction',));
                }

                // usuario_new
                if ($pathinfo === '/admin/usuario/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_create
                if ($pathinfo === '/admin/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_edit
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::editAction',));
                }

                // usuario_update
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_usuario_delete:

            }

        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\LoginController::login_checkAction',  '_route' => 'login_check',);
        }

        if (0 === strpos($pathinfo, '/helpdesk')) {
            // home
            if (rtrim($pathinfo, '/') === '/helpdesk/home') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home');
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::homeAction',  '_route' => 'home',);
            }

            // abrir_chamada
            if (rtrim($pathinfo, '/') === '/helpdesk/abrirChamada') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'abrir_chamada');
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::abrirChamadaAction',  '_route' => 'abrir_chamada',);
            }

            // minhas_chamadas
            if ($pathinfo === '/helpdesk/minhasChamadas') {
                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::minhasChamadasAction',  '_route' => 'minhas_chamadas',);
            }

            if (0 === strpos($pathinfo, '/helpdesk/todasChamadas')) {
                // todas_chamadas
                if ($pathinfo === '/helpdesk/todasChamadas') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::todasChamadasAction',  '_route' => 'todas_chamadas',);
                }

                // busca
                if ($pathinfo === '/helpdesk/todasChamadas/busca') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\BuscaChamadosController::buscaAction',  '_route' => 'busca',);
                }

            }

            if (0 === strpos($pathinfo, '/helpdesk/chamadas')) {
                // sem_prioridade
                if (rtrim($pathinfo, '/') === '/helpdesk/chamadas/semPrioridade') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sem_prioridade');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\AdminController::semPrioridadeAction',  '_route' => 'sem_prioridade',);
                }

                // definir_prioridade
                if (0 === strpos($pathinfo, '/helpdesk/chamadas/definirPrioridade') && preg_match('#^/helpdesk/chamadas/definirPrioridade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'definir_prioridade')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::definirPrioridadeAction',));
                }

                if (0 === strpos($pathinfo, '/helpdesk/chamadas/emA')) {
                    // chamadas_em_aberto
                    if ($pathinfo === '/helpdesk/chamadas/emAberto') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\AdminController::emAbertoAction',  '_route' => 'chamadas_em_aberto',);
                    }

                    // chamadas_em_andamento
                    if ($pathinfo === '/helpdesk/chamadas/emAndamento') {
                        return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\AdminController::emAndamentoAction',  '_route' => 'chamadas_em_andamento',);
                    }

                }

                // chamadas_finalizadas
                if ($pathinfo === '/helpdesk/chamadas/finalizadas') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\AdminController::finalizadasAction',  '_route' => 'chamadas_finalizadas',);
                }

            }

        }

        // sair
        if ($pathinfo === '/sair') {
            return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\LoginController::sairAction',  '_route' => 'sair',);
        }

        if (0 === strpos($pathinfo, '/helpdesk')) {
            // finalizar_chamada_edit
            if (0 === strpos($pathinfo, '/helpdesk/finalizarChamado') && preg_match('#^/helpdesk/finalizarChamado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finalizar_chamada_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::finalizarEditAction',));
            }

            // finalizar_chamada
            if (0 === strpos($pathinfo, '/helpdesk/chamados/finalizar') && preg_match('#^/helpdesk/chamados/finalizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'finalizar_chamada')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::finalizarAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
