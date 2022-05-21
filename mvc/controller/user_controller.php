<?php
    include_once('../model/user.php');

    class UserController{
        
        public function getUsers(){
            include_once('../db/db_connection.php');
            $users = [];

            $query = 'SELECT * FROM users';
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)){
                $user = new User();
                $user->setId($row['id']);
                $user->setUsername($row['username']);
                $user->setEmail($row['email']);
                $user->setPassword(md5($row['password'])); // md5 to hash the password

                array_push($users, $user);
            }
            return $users;
        }

        public function getSpecificUser($userId){
            
        }

        public function insertUser(){
        }

        public function updateUser($userId){

        }

        public function deleteUser($userId){

        }


    }