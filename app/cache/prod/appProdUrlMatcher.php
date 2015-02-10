<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/loginsocial')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/loginsocial') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/loginsocial/service') && preg_match('#^/loginsocial/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/loginsocial/registration') && preg_match('#^/loginsocial/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/loginsocial/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            // facebook_login
            if ($pathinfo === '/loginsocial/check-facebook') {
                return array('_route' => 'facebook_login');
            }

            // facebook_log
            if ($pathinfo === '/loginsocial/facebook') {
                return array('_route' => 'facebook_log');
            }

            // google_login
            if ($pathinfo === '/loginsocial/check-google') {
                return array('_route' => 'google_login');
            }

            // google_log
            if ($pathinfo === '/loginsocial/google') {
                return array('_route' => 'google_log');
            }

        }

        if (0 === strpos($pathinfo, '/annonces')) {
            // front_service_homepage
            if (preg_match('#^/annonces/(?P<titre>[^/\\-]++)\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_service_homepage')), array (  '_controller' => 'front\\ServiceBundle\\Controller\\DefaultController::showAction',));
            }

            // liste_annonce
            if (preg_match('#^/annonces(?:/(?P<page>\\d+)(?:/(?P<region>\\d+)(?:/(?P<ville>\\d+)(?:/(?P<categorie>\\d+)(?:/(?P<service>\\d+)(?:/(?P<search>[^/]++)(?:/(?P<orderby>prix|titre|dateCreation)(?:/(?P<desc>asc|desc))?)?)?)?)?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_annonce')), array (  '_controller' => 'front\\ServiceBundle\\Controller\\DefaultController::listeAction',  'region' => 0,  'ville' => 0,  'categorie' => 0,  'service' => 0,  'search' => '_',  'orderby' => 'dateCreation',  'page' => 1,  'desc' => 'desc',));
            }

        }

        // Filtre
        if (0 === strpos($pathinfo, '/orderby') && preg_match('#^/orderby(?:/(?P<page>\\d+)(?:/(?P<region>\\d+)(?:/(?P<ville>\\d+)(?:/(?P<categorie>\\d+)(?:/(?P<service>\\d+)(?:/(?P<search>[^/]++)(?:/(?P<orderby>prix|titre|dateCreation)(?:/(?P<desc>asc|desc))?)?)?)?)?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Filtre')), array (  '_controller' => 'front\\ServiceBundle\\Controller\\DefaultController::filtreAction',  'region' => 0,  'ville' => 0,  'categorie' => 0,  'service' => 0,  'search' => '_',  'orderby' => 'dateCreation',  'page' => 1,  'desc' => 'desc',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/annonce')) {
                // ajoutannonce
                if ($pathinfo === '/annonce/ajout') {
                    return array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::ajoutAction',  '_route' => 'ajoutannonce',);
                }

                // listecommentaires
                if ($pathinfo === '/annonce/liste_commentaires') {
                    return array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::commentairesAction',  '_route' => 'listecommentaires',);
                }

                // annonce_ville
                if ($pathinfo === '/annonce/annonce_ville') {
                    return array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::ajaxAction',  '_route' => 'annonce_ville',);
                }

                // annonce_liste
                if ($pathinfo === '/annonce/mes_annonce') {
                    return array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::listeAction',  '_route' => 'annonce_liste',);
                }

                // reactiver_annonce
                if (0 === strpos($pathinfo, '/annonce/reactiver_annonce') && preg_match('#^/annonce/reactiver_annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reactiver_annonce')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::reactiverAction',));
                }

                // annuler_annonce
                if (0 === strpos($pathinfo, '/annonce/annuler_annonce') && preg_match('#^/annonce/annuler_annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuler_annonce')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::annulerAction',));
                }

                // edit_annonce
                if (0 === strpos($pathinfo, '/annonce/editer_annonce') && preg_match('#^/annonce/editer_annonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_annonce')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::editerAction',));
                }

                if (0 === strpos($pathinfo, '/annonce/delete')) {
                    if (0 === strpos($pathinfo, '/annonce/deletephoto')) {
                        // deletephoto1
                        if (0 === strpos($pathinfo, '/annonce/deletephoto1') && preg_match('#^/annonce/deletephoto1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletephoto1')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::delete1Action',));
                        }

                        // deletephoto2
                        if (0 === strpos($pathinfo, '/annonce/deletephoto2') && preg_match('#^/annonce/deletephoto2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletephoto2')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::delete2Action',));
                        }

                        // deletephoto3
                        if (0 === strpos($pathinfo, '/annonce/deletephoto3') && preg_match('#^/annonce/deletephoto3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletephoto3')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::delete3Action',));
                        }

                        // deletephoto4
                        if (0 === strpos($pathinfo, '/annonce/deletephoto4') && preg_match('#^/annonce/deletephoto4/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletephoto4')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::delete4Action',));
                        }

                    }

                    // deletecomment
                    if (0 === strpos($pathinfo, '/annonce/deletecomment') && preg_match('#^/annonce/deletecomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletecomment')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::deletecommentAction',));
                    }

                }

                // luscomment
                if (0 === strpos($pathinfo, '/annonce/luscomment') && preg_match('#^/annonce/luscomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'luscomment')), array (  '_controller' => 'front\\AnnonceBundle\\Controller\\AnnonceController::luscommentAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/page')) {
                    if (0 === strpos($pathinfo, '/admin/page/news')) {
                        // news
                        if (rtrim($pathinfo, '/') === '/admin/page/news') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'news');
                            }

                            return array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
                        }

                        // news_show
                        if (preg_match('#^/admin/page/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::showAction',));
                        }

                        // news_new
                        if ($pathinfo === '/admin/page/news/new') {
                            return array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::newAction',  '_route' => 'news_new',);
                        }

                        // news_create
                        if ($pathinfo === '/admin/page/news/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_news_create;
                            }

                            return array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::createAction',  '_route' => 'news_create',);
                        }
                        not_news_create:

                        // news_edit
                        if (preg_match('#^/admin/page/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_edit')), array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::editAction',));
                        }

                        // news_update
                        if (preg_match('#^/admin/page/news/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_news_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_update')), array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::updateAction',));
                        }
                        not_news_update:

                        // news_delete
                        if (preg_match('#^/admin/page/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_news_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'admin\\PageBundle\\Controller\\NewsController::deleteAction',));
                        }
                        not_news_delete:

                    }

                    // page_contact
                    if ($pathinfo === '/admin/page/contact') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\DefaultController::contactAction',  '_route' => 'page_contact',);
                    }

                    // page_accueil
                    if ($pathinfo === '/admin/page/accueil') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'page_accueil',);
                    }

                    // marketing
                    if ($pathinfo === '/admin/page/marketing') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\DefaultController::marketingAction',  '_route' => 'marketing',);
                    }

                    // SLider
                    if ($pathinfo === '/admin/page/slider') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\SliderController::listeAction',  '_route' => 'SLider',);
                    }

                    // footer
                    if ($pathinfo === '/admin/page/footer') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\DefaultController::footerAction',  '_route' => 'footer',);
                    }

                    // Partenaire
                    if ($pathinfo === '/admin/page/partenaire') {
                        return array (  '_controller' => 'admin\\PageBundle\\Controller\\PartenaireController::listeAction',  '_route' => 'Partenaire',);
                    }

                    // suppr_slider
                    if (0 === strpos($pathinfo, '/admin/page/suppr') && preg_match('#^/admin/page/suppr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppr_slider')), array (  '_controller' => 'admin\\PageBundle\\Controller\\SliderController::supprAction',));
                    }

                    // suppr_partenaire
                    if (0 === strpos($pathinfo, '/admin/page/Psuppr') && preg_match('#^/admin/page/Psuppr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppr_partenaire')), array (  '_controller' => 'admin\\PageBundle\\Controller\\PartenaireController::supprAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/loc')) {
                    if (0 === strpos($pathinfo, '/admin/loc/ville')) {
                        // ville
                        if (rtrim($pathinfo, '/') === '/admin/loc/ville') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'ville');
                            }

                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville',);
                        }

                        // ville_show
                        if (preg_match('#^/admin/loc/ville/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::showAction',));
                        }

                        // ville_new
                        if ($pathinfo === '/admin/loc/ville/new') {
                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                        }

                        // ville_create
                        if ($pathinfo === '/admin/loc/ville/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ville_create;
                            }

                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::createAction',  '_route' => 'ville_create',);
                        }
                        not_ville_create:

                        // ville_ajax
                        if ($pathinfo === '/admin/loc/ville/ville_ajax') {
                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::ajaxAction',  '_route' => 'ville_ajax',);
                        }

                        // ville_edit
                        if (preg_match('#^/admin/loc/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::editAction',));
                        }

                        // ville_update
                        if (preg_match('#^/admin/loc/ville/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_ville_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_update')), array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::updateAction',));
                        }
                        not_ville_update:

                        // ville_delete
                        if (preg_match('#^/admin/loc/ville/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_ville_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'admin\\LocBundle\\Controller\\VilleController::deleteAction',));
                        }
                        not_ville_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/loc/region')) {
                        // region
                        if (rtrim($pathinfo, '/') === '/admin/loc/region') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'region');
                            }

                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::indexAction',  '_route' => 'region',);
                        }

                        // region_show
                        if (preg_match('#^/admin/loc/region/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_show')), array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::showAction',));
                        }

                        // AjaxRegion
                        if ($pathinfo === '/admin/loc/region/ajax') {
                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::ajaxAction',  '_route' => 'AjaxRegion',);
                        }

                        // region_new
                        if ($pathinfo === '/admin/loc/region/new') {
                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::newAction',  '_route' => 'region_new',);
                        }

                        // region_create
                        if ($pathinfo === '/admin/loc/region/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_region_create;
                            }

                            return array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::createAction',  '_route' => 'region_create',);
                        }
                        not_region_create:

                        // region_edit
                        if (preg_match('#^/admin/loc/region/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_edit')), array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::editAction',));
                        }

                        // region_update
                        if (preg_match('#^/admin/loc/region/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_region_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_update')), array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::updateAction',));
                        }
                        not_region_update:

                        // region_delete
                        if (preg_match('#^/admin/loc/region/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_region_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_delete')), array (  '_controller' => 'admin\\LocBundle\\Controller\\RegionController::deleteAction',));
                        }
                        not_region_delete:

                    }

                    // admin_loc_homepage
                    if (0 === strpos($pathinfo, '/admin/loc/hello') && preg_match('#^/admin/loc/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_loc_homepage')), array (  '_controller' => 'admin\\LocBundle\\Controller\\DefaultController::indexAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ref')) {
                    if (0 === strpos($pathinfo, '/admin/ref/service')) {
                        // service
                        if (rtrim($pathinfo, '/') === '/admin/ref/service') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'service');
                            }

                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service',);
                        }

                        // service_show
                        if (preg_match('#^/admin/ref/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::showAction',));
                        }

                        // service_new
                        if ($pathinfo === '/admin/ref/service/new') {
                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
                        }

                        // service_create
                        if ($pathinfo === '/admin/ref/service/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_service_create;
                            }

                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::createAction',  '_route' => 'service_create',);
                        }
                        not_service_create:

                        // service_edit
                        if (preg_match('#^/admin/ref/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::editAction',));
                        }

                        // service_update
                        if (preg_match('#^/admin/ref/service/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_service_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_update')), array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::updateAction',));
                        }
                        not_service_update:

                        // service_delete
                        if (preg_match('#^/admin/ref/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_service_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'admin\\RefBundle\\Controller\\ServiceController::deleteAction',));
                        }
                        not_service_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/ref/categorie')) {
                        // categorie
                        if (rtrim($pathinfo, '/') === '/admin/ref/categorie') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'categorie');
                            }

                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
                        }

                        // categorie_show
                        if (preg_match('#^/admin/ref/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::showAction',));
                        }

                        // categorie_new
                        if ($pathinfo === '/admin/ref/categorie/new') {
                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                        }

                        // categorie_create
                        if ($pathinfo === '/admin/ref/categorie/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_categorie_create;
                            }

                            return array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
                        }
                        not_categorie_create:

                        // categorie_edit
                        if (preg_match('#^/admin/ref/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::editAction',));
                        }

                        // categorie_update
                        if (preg_match('#^/admin/ref/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_categorie_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::updateAction',));
                        }
                        not_categorie_update:

                        // categorie_delete
                        if (preg_match('#^/admin/ref/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_categorie_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'admin\\RefBundle\\Controller\\CategorieController::deleteAction',));
                        }
                        not_categorie_delete:

                    }

                    // admin_ref_homepage
                    if (rtrim($pathinfo, '/') === '/admin/ref') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_ref_homepage');
                        }

                        return array (  '_controller' => 'admin\\RefBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_ref_homepage',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/user')) {
                    // addUser
                    if ($pathinfo === '/admin/user/ajout') {
                        return array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::ajoutAction',  '_route' => 'addUser',);
                    }

                    // deleteUser
                    if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::deleteAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/user/e')) {
                        // editUser
                        if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::editAction',));
                        }

                        // etatUser
                        if (0 === strpos($pathinfo, '/admin/user/etat') && preg_match('#^/admin/user/etat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'etatUser')), array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::etatAction',));
                        }

                    }

                    // listeUser
                    if ($pathinfo === '/admin/user/liste') {
                        return array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::listeAction',  '_route' => 'listeUser',);
                    }

                    // otherUser
                    if ($pathinfo === '/admin/user/utilisateur') {
                        return array (  '_controller' => 'admin\\UserBundle\\Controller\\DefaultController::otherAction',  '_route' => 'otherUser',);
                    }

                }

            }

        }

        // accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueil');
            }

            return array (  '_controller' => 'front\\AccueilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'front\\AccueilBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        // quisommesnous
        if ($pathinfo === '/quisommesnous') {
            return array (  '_controller' => 'front\\AccueilBundle\\Controller\\DefaultController::quisommesnousAction',  '_route' => 'quisommesnous',);
        }

        // monprofile
        if ($pathinfo === '/monprofile') {
            return array (  '_controller' => 'front\\AccueilBundle\\Controller\\DefaultController::profileAction',  '_route' => 'monprofile',);
        }

        // newslettre
        if ($pathinfo === '/newslettre') {
            return array (  '_controller' => 'front\\AccueilBundle\\Controller\\FrontController::newslettreAction',  '_route' => 'newslettre',);
        }

        // admin_general_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_general_homepage');
            }

            return array (  '_controller' => 'admin\\GeneralBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_general_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
