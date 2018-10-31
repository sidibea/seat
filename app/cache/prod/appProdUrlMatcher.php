<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // nb_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nb_main_homepage');
            }

            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'nb_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/app')) {
            // nb_main_dasboard
            if ($pathinfo === '/app/dashboard') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nb_main_dasboard;
                }

                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::dashboardAction',  '_route' => 'nb_main_dasboard',);
            }
            not_nb_main_dasboard:

            // nb_main_search
            if ($pathinfo === '/app/search') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::searchAction',  '_route' => 'nb_main_search',);
            }

            // nb_main_recharge
            if ($pathinfo === '/app/recharge') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::rechargeAction',  '_route' => 'nb_main_recharge',);
            }

            // nb_main_custInfo
            if (0 === strpos($pathinfo, '/app/custInfo') && preg_match('#^/app/custInfo/(?P<travel>[^/]++)/(?P<dateJ>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_custInfo')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::custInfoAction',));
            }

            // nb_main_booking
            if ($pathinfo === '/app/booking') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::bookingAction',  '_route' => 'nb_main_booking',);
            }

            // nb_main_confirm
            if (0 === strpos($pathinfo, '/app/confirmed') && preg_match('#^/app/confirmed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_confirm')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::confirmedAction',));
            }

            // nb_main_print
            if ($pathinfo === '/app/print') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::printAction',  '_route' => 'nb_main_print',);
            }

            // nb_main_reservation
            if ($pathinfo === '/app/my-booking') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::mybookingsAction',  '_route' => 'nb_main_reservation',);
            }

            // nb_main_history
            if ($pathinfo === '/app/history') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::historyAction',  '_route' => 'nb_main_history',);
            }

            // nb_main_recharge_compte
            if ($pathinfo === '/app/account-recharge') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::accountrechargeAction',  '_route' => 'nb_main_recharge_compte',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'NB\\UsersBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // change_password
        if ($pathinfo === '/changer-mot-de-passe') {
            return array (  '_controller' => 'NB\\UsersBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'change_password',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fos_user_resetting_request
        if ($pathinfo === '/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if ($pathinfo === '/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if ($pathinfo === '/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/reset') && preg_match('#^/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/registration')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/registration') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/registration/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/registration/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/registration/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/registration/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/registration/confirmed') {
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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
