<?php

namespace App\Controllers;

use App\Models\ModUsers;


class User extends BaseController
{

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if ($return) :
            $content  = $this->view('templates/normal-header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else :
            echo view('templates/normal-header', $vars);
            echo view($template_name, $vars);
            echo view('templates/footer', $vars);
        endif;
    }

    public function index()
    {
        return redirect()->to(site_url('/signin'));;
    }

    public function register()
    {
        $session = \Config\Services::session();


        helper('form');
        $session = \Config\Services::session();
        $data['message'] = $session->getFlashdata('message');
        echo view('templates/normal-header');
        echo view('authentication/signup', $data);
        echo view('templates/footer');
    }

    public function presenterregister()
    {
        $session = \Config\Services::session();
        helper('form');
        $session = \Config\Services::session();
        $data['message'] = $session->getFlashdata('message');
        echo view('templates/normal-header');
        echo view('authentication/presenter-signup', $data);
        echo view('templates/footer');
    }

    public function exhibitorregister()
    {
        $session = \Config\Services::session();
        helper('form');
        $session = \Config\Services::session();
        $data['message'] = $session->getFlashdata('message');
        echo view('templates/normal-header');
        echo view('authentication/exhibitor-signup', $data);
        echo view('templates/footer');
    }



    public function newuser()
    {

        $myvalues = $this->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'u_email' => 'required',
                'u_password' => 'required',
            ]
        );
        if (!$myvalues) {
            $this->register();
        } else {
            $myrequest = \Config\Services::request();
            $session = \Config\Services::session();

            $users = new ModUsers();
            helper('text');
            $data['u_fname'] = $myrequest->getPost('first_name');
            $data['u_lname'] = $myrequest->getPost('last_name');
            if ($myrequest->getPost('form_name') == "presenter") {
                $data['u_role'] = "presenter";
                $data['presenter_description'] = $myrequest->getPost('presenter_description');
                $data['presentation_title'] = $myrequest->getPost('presentation_title');
                $data['presentation_checkbox1'] = implode(',', $myrequest->getPost('click-here-to-confirm'));
                $data['presentation_checkbox2'] = implode(',', $myrequest->getPost('click-here-to-confirm_19'));
            } elseif ($myrequest->getPost('form_name') == "exhibitor") {
                $data['u_role'] = "exhibitor";
                $data['exhibitor_checkbox'] = implode(',', $myrequest->getPost('choose-one'));
            } elseif ($myrequest->getPost('form_name') == "attendee") {
                $data['u_role'] = "attendee";
            } else {
                $data['u_role'] = "attendee";
            }

            $data['u_email'] = $myrequest->getPost('u_email');
            $data['u_phone'] = $myrequest->getPost('u_phone');
            $data['job_title'] = $myrequest->getPost('job_title');
            $data['company_name'] = $myrequest->getPost('company_name');
            $data['company_website'] = $myrequest->getPost('company_website');
            $data['what_brought_you'] = $myrequest->getPost('what_brought_you');
            $data['u_password'] = $myrequest->getPost('password');
            $data['u_password'] = hash('md5', $data['u_password']);
            $data['u_link'] = random_string('alnum', 20);
            $data['username'] = $myrequest->getPost('username');


            $message = "Please activate the account " . anchor('user/activate/' . $data['u_link'], 'Activate Now', '');
            $checkAlreadyUser = $users->where('u_email', $data['u_email'])->findAll();
            if (count($checkAlreadyUser) > 0) {
                $session->setFlashdata('message', 'This email: ' . $data['u_email'] . ' already exist.');
                if ($myrequest->getPost('form_name') == "presenter") {
                    return redirect()->to(site_url('user/presenterregister'));
                } elseif ($myrequest->getPost('form_name') == "exhibitor") {
                    return redirect()->to(site_url('user/exhibitorregister'));
                } elseif ($myrequest->getPost('form_name') == "attendee") {
                    return redirect()->to(site_url('user/attendeeregister'));
                } else {
                    return redirect()->to(site_url('user/attendeeregister'));
                }

                //echo 'the email is already exist.';
            } else {

                $myNewUser = $users->insert($data);
                if ($myNewUser) {
                    $email = \Config\Services::email();
                    $email->setFrom('ci4signup@shakzee.co', 'Activate the account');
                    $email->setTo($data['u_email']);
                    $email->setSubject('Activate the account ');
                    $email->setMessage($message);
                    $email->send();
                    $email->printDebugger(['headers']);
                    return redirect()->to(site_url('home'));
                } else {
                    $session->setFlashdata('message', 'We have successfully create the account but we can\'t send you the email right now.');
                    return redirect()->to(site_url('home'));
                }
            }
            //die();


        }
    }

    public function activate($linkHere)
    {
        //echo $linkHere;
        $session = \Config\Services::session();
        $user = new ModUsers();
        $checkUserLink = $user->where('u_link', $linkHere)->findAll();
        if (count($checkUserLink) > 0) {
            $data['u_status'] = 1;
            $data['u_link'] = $checkUserLink[0]['u_link'] . 'ok';
            $activateUser = $user->update($checkUserLink[0]['u_id'], $data);
            if ($activateUser) {
                $session->setFlashdata('message', 'We have successfully activate your account.');
                return redirect()->to(site_url('user/newuser'));
            } else {
                $session->setFlashdata('message', 'Your link is not available in the system, please check your email address and try again.');
                return redirect()->to(site_url('user/newuser'));
            }
        } else {
            $session->setFlashdata('message', 'Something went wrong.');
            return redirect()->to(site_url('user/newuser'));
        }
        // var_dump($checkUserLink);
    }

    public function signin()
    {
        $session = \Config\Services::session();
        $data['message'] = $session->getFlashdata('message');
        helper('form');
        echo view('templates/normal-header');
        echo view('authentication/signin', $data);
        echo view('templates/footer');
    }

    public function checkuser()
    {
        $myrequest = \Config\Services::request();
        $session = \Config\Services::session();

        $myvalues = $this->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        if (!$myvalues) {
            $this->signin();
        } else {
            $users = new ModUsers();
            helper('text');
            $data['u_email'] = $myrequest->getPost('email');
            $data['u_password'] = $myrequest->getPost('password');
            $data['u_password'] = hash('md5', $data['u_password']);
            $allUsers = $users->where('u_email', $data['u_email'])->findAll();
            if (count($allUsers) > 0) {
                if ($data['u_password'] == $allUsers[0]['u_password']) {
                    $sessionData['u_id'] = $allUsers[0]['u_id'];
                    $sessionData['u_fname'] = $allUsers[0]['u_fname'];
                    $sessionData['u_email'] = $allUsers[0]['u_email'];
                    $sessionData['u_date'] = $allUsers[0]['u_date'];
                    $sessionData['u_updated'] = $allUsers[0]['u_updated'];
                    $sessionData['u_status'] = $allUsers[0]['u_status'];
                    $sessionData['u_role'] = $allUsers[0]['u_role'];
                    $session->set($sessionData);
                    if ($session->get('u_id')) {
                        return  redirect()->to(site_url('home'));
                    } else {
                        $session->setFlashdata('message', 'You can\'t signin, please try again.');
                        return redirect()->to(site_url('user/signin'));
                    }
                } else {
                    $session->setFlashdata('message', 'The password is invalid, please check your password.');
                    return redirect()->to(site_url('user/signin'));
                }
            } else {
                $session->setFlashdata('message', 'The user is not available in the system.');
                return redirect()->to(site_url('user/signin'));
            }
        }
    }

    public function signout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(site_url('/home'));
    }
}//class here