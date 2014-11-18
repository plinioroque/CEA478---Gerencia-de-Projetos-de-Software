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

        // help_desk_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'help_desk_homepage')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/chamada')) {
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

                // definir_prioridade
                if (0 === strpos($pathinfo, '/chamadas/admin') && preg_match('#^/chamadas/admin/(?P<id>[^/]++)/definirPrioridade$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'definir_prioridade')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadasController::prioridadeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/chamadacategoria')) {
                // chamadacategoria
                if (rtrim($pathinfo, '/') === '/chamadacategoria') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chamadacategoria');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::indexAction',  '_route' => 'chamadacategoria',);
                }

                // chamadacategoria_show
                if (preg_match('#^/chamadacategoria/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::showAction',));
                }

                // chamadacategoria_new
                if ($pathinfo === '/chamadacategoria/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::newAction',  '_route' => 'chamadacategoria_new',);
                }

                // chamadacategoria_create
                if ($pathinfo === '/chamadacategoria/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chamadacategoria_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::createAction',  '_route' => 'chamadacategoria_create',);
                }
                not_chamadacategoria_create:

                // chamadacategoria_edit
                if (preg_match('#^/chamadacategoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::editAction',));
                }

                // chamadacategoria_update
                if (preg_match('#^/chamadacategoria/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chamadacategoria_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::updateAction',));
                }
                not_chamadacategoria_update:

                // chamadacategoria_delete
                if (preg_match('#^/chamadacategoria/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chamadacategoria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadacategoria_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaCategoriaController::deleteAction',));
                }
                not_chamadacategoria_delete:

            }

            if (0 === strpos($pathinfo, '/chamadalocal')) {
                // chamadalocal
                if (rtrim($pathinfo, '/') === '/chamadalocal') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chamadalocal');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::indexAction',  '_route' => 'chamadalocal',);
                }

                // chamadalocal_show
                if (preg_match('#^/chamadalocal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::showAction',));
                }

                // chamadalocal_new
                if ($pathinfo === '/chamadalocal/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::newAction',  '_route' => 'chamadalocal_new',);
                }

                // chamadalocal_create
                if ($pathinfo === '/chamadalocal/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chamadalocal_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::createAction',  '_route' => 'chamadalocal_create',);
                }
                not_chamadalocal_create:

                // chamadalocal_edit
                if (preg_match('#^/chamadalocal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::editAction',));
                }

                // chamadalocal_update
                if (preg_match('#^/chamadalocal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chamadalocal_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::updateAction',));
                }
                not_chamadalocal_update:

                // chamadalocal_delete
                if (preg_match('#^/chamadalocal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chamadalocal_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadalocal_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaLocalController::deleteAction',));
                }
                not_chamadalocal_delete:

            }

            if (0 === strpos($pathinfo, '/chamadastatus')) {
                // chamadastatus
                if (rtrim($pathinfo, '/') === '/chamadastatus') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chamadastatus');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::indexAction',  '_route' => 'chamadastatus',);
                }

                // chamadastatus_show
                if (preg_match('#^/chamadastatus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::showAction',));
                }

                // chamadastatus_new
                if ($pathinfo === '/chamadastatus/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::newAction',  '_route' => 'chamadastatus_new',);
                }

                // chamadastatus_create
                if ($pathinfo === '/chamadastatus/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chamadastatus_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::createAction',  '_route' => 'chamadastatus_create',);
                }
                not_chamadastatus_create:

                // chamadastatus_edit
                if (preg_match('#^/chamadastatus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::editAction',));
                }

                // chamadastatus_update
                if (preg_match('#^/chamadastatus/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chamadastatus_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::updateAction',));
                }
                not_chamadastatus_update:

                // chamadastatus_delete
                if (preg_match('#^/chamadastatus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chamadastatus_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadastatus_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaStatusController::deleteAction',));
                }
                not_chamadastatus_delete:

            }

            if (0 === strpos($pathinfo, '/chamadanivel')) {
                // chamadanivel
                if (rtrim($pathinfo, '/') === '/chamadanivel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chamadanivel');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::indexAction',  '_route' => 'chamadanivel',);
                }

                // chamadanivel_show
                if (preg_match('#^/chamadanivel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::showAction',));
                }

                // chamadanivel_new
                if ($pathinfo === '/chamadanivel/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::newAction',  '_route' => 'chamadanivel_new',);
                }

                // chamadanivel_create
                if ($pathinfo === '/chamadanivel/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chamadanivel_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::createAction',  '_route' => 'chamadanivel_create',);
                }
                not_chamadanivel_create:

                // chamadanivel_edit
                if (preg_match('#^/chamadanivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::editAction',));
                }

                // chamadanivel_update
                if (preg_match('#^/chamadanivel/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chamadanivel_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::updateAction',));
                }
                not_chamadanivel_update:

                // chamadanivel_delete
                if (preg_match('#^/chamadanivel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chamadanivel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadanivel_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ChamadaNivelController::deleteAction',));
                }
                not_chamadanivel_delete:

            }

        }

        if (0 === strpos($pathinfo, '/relatorios')) {
            // relatorios
            if (rtrim($pathinfo, '/') === '/relatorios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'relatorios');
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::indexAction',  '_route' => 'relatorios',);
            }

            // relatorios_show
            if (preg_match('#^/relatorios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::showAction',));
            }

            // relatorios_new
            if ($pathinfo === '/relatorios/new') {
                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::newAction',  '_route' => 'relatorios_new',);
            }

            // relatorios_create
            if ($pathinfo === '/relatorios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_relatorios_create;
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::createAction',  '_route' => 'relatorios_create',);
            }
            not_relatorios_create:

            // relatorios_edit
            if (preg_match('#^/relatorios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::editAction',));
            }

            // relatorios_update
            if (preg_match('#^/relatorios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_relatorios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::updateAction',));
            }
            not_relatorios_update:

            // relatorios_delete
            if (preg_match('#^/relatorios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_relatorios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'relatorios_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\RelatoriosController::deleteAction',));
            }
            not_relatorios_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuarioclasse')) {
                // usuarioclasse
                if (rtrim($pathinfo, '/') === '/usuarioclasse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuarioclasse');
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::indexAction',  '_route' => 'usuarioclasse',);
                }

                // usuarioclasse_show
                if (preg_match('#^/usuarioclasse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::showAction',));
                }

                // usuarioclasse_new
                if ($pathinfo === '/usuarioclasse/new') {
                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::newAction',  '_route' => 'usuarioclasse_new',);
                }

                // usuarioclasse_create
                if ($pathinfo === '/usuarioclasse/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuarioclasse_create;
                    }

                    return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::createAction',  '_route' => 'usuarioclasse_create',);
                }
                not_usuarioclasse_create:

                // usuarioclasse_edit
                if (preg_match('#^/usuarioclasse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::editAction',));
                }

                // usuarioclasse_update
                if (preg_match('#^/usuarioclasse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuarioclasse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::updateAction',));
                }
                not_usuarioclasse_update:

                // usuarioclasse_delete
                if (preg_match('#^/usuarioclasse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuarioclasse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarioclasse_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioClasseController::deleteAction',));
                }
                not_usuarioclasse_delete:

            }

            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

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
            // cliente_home
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/home/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cliente_home');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_home')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::homeAction',));
            }

            // abrir_chamada
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/abrirChamada/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'abrir_chamada');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abrir_chamada')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::abrirChamadaAction',));
            }

            // minhas_chamadas
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/minhasChamadas$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'minhas_chamadas')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::minhasChamadasAction',));
            }

            // todas_chamadas
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/todasChamadas$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todas_chamadas')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::todasChamadasAction',));
            }

            // busca
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/todasChamadas/busca$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'busca')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\BuscaChamadosController::buscaAction',));
            }

            // todas_chamadas_admin
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/todasChamadasAdmin$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todas_chamadas_admin')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::todasChamadasAdminAction',));
            }

            // admin_home
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/homeAdmin/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_home');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_home')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::homeAdminAction',));
            }

            // sem_prioridade
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/chamadas/admin/semPrioridade/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sem_prioridade');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sem_prioridade')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::semPrioridadeAction',));
            }

            // chamadas_em_aberto
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/chamadas/admin/emAberto$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_em_aberto')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::emAbertoAction',));
            }

            // chamadas_em_andamento
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/chamadas/admin/emAndamento$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_em_andamento')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::emAndamentoAction',));
            }

            // chamadas_finalizadas
            if (preg_match('#^/helpdesk/(?P<userId>[^/]++)/chamadas/admin/finalizadas$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chamadas_finalizadas')), array (  '_controller' => 'Icea\\CEA478\\HelpDeskBundle\\Controller\\ClienteController::finalizadasAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
