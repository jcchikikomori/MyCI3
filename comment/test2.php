<?php
public function check(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $response = "";
        // Manipulation Here
        if($username == 'toper'){

            if($password == '123123'){
                $response = 'correct';
            }else{
                $response = 'incorrect';
            }
        }else{
            $response = 'incorrect';
        }
        print_r($response);

    }
?>
