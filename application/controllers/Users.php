<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends My_Controller {

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]', array(
            'min_length' => 'Your username is less than 3 characters shank7',
        ));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]', array(
            'min_length' => 'Your password is less than 3 characters shank7',
        ));
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]', array(
            'matches' => 'ektb el passwords zy b3d ya 7mar',
        ));


        if ( $this->form_validation->run() == FALSE ){
            $data = array(
                'errors' => validation_errors(),
            );

            $this->session->set_flashdata($data);
            redirect('home');
        }
        else {
            $login_username = $this->input->post('username');
            $login_password = $this->input->post('password');

            $this->load->model('User_Model');
            $user_id = $this->User_Model->login_user($login_username, $login_password);

            if ( $user_id ){
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $login_username,
                    'logged_in' => TRUE,
                );

                $this->session->set_userdata($user_data);
                redirect('home/index');
            }
            else {
                redirect('home/index');
            }
        }
    }

}