<?php

namespace App\Models;

class User {
    private $cedula;
    private $full_name;
    private $email;
    private $phone_number;
    private $country;
    private $city;
    private $dist_code;

    public function getCedula() {
        return $this->cedula;
    }
    public function getName() {
        return $this->full_name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone_number;
    }
    public function getCountry() {
        return $this->country;
    }
    public function getCity() {
        return $this->city;
    }
    public function getDist_code() {
        return $this->dist_code;
    }

    public function __construct($ced, $name, $email, $phone, $country, $city, $code) {
        $this->cedula = $ced;
        $this->full_name = $name;
        $this->email = $email;
        $this->phone_number = $phone;
        $this->country = $country;
        $this->city = $city;
        $this->dist_code = $code;
    }

}