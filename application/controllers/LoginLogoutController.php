<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginLogoutController extends CI_Controller {

    public $upload;
    public $LoginModel;

    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index() {
        $this->load->view('log-in');
    }

    public function login() {
        if ($this->input->is_ajax_request()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $user = $this->LoginModel->get_user_by_email($email);
    
            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata([
                    'donor_logged_in' => true,
                    'was_logged_in' => true,
                    'donor_id'        => $user->donor_id,
                    'donor_email'     => $user->email
                ]);
    
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'success',
                        'message' => 'Login successful!'
                    ]));
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'error',
                        'message' => 'Invalid email or password.'
                    ]));
            }
        } else {
            show_404();
        }
    }

    public function logout() {
        $this->session->unset_userdata(['donor_logged_in', 'donor_id', 'donor_email']);
    
        // Prevent back navigation to use cache
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        redirect('RegistrationFormController/index'); // Redirect to homepage or login page
    }

    public function volunteerLogin() {
        if ($this->input->is_ajax_request()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $volunteer = $this->LoginModel->get_volunteer_by_email($email);
    
            if ($volunteer && password_verify($password, $volunteer->password)) {
                $this->session->set_userdata([
                    'volunteer_logged_in' => true,
                    'volunteer_was_logged_in' => true,
                    'volunteer_id'        => $volunteer->vol_id,
                    'volunteer_email'     => $volunteer->email
                ]);
    
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'success',
                        'message' => 'Login successful!'
                    ]));
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'status' => 'error',
                        'message' => 'Invalid email or password.'
                    ]));
            }
        } else {
            show_404();
        }
    }

    public function volunteerLogout() {
        $this->session->unset_userdata(['volunteer_logged_in', 'volunteer_id', 'volunteer_email']);
    
        // Prevent back navigation to use cache
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        redirect('HomeController/index'); // Redirect to homepage or login page
    }
    
}