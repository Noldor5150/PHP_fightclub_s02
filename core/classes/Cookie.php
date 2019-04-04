<?php

namespace Core;

class Cookie extends Core\Abstracts\Cookie {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function delete(): void {
        
    }

    public function exists(): bool {

        if (isset($_COOKIE[$this->name])) {
            return true;
        }
        return false;
    }

     public function read(): array {
        if ($this->exists()) {
            $cookie = $_COOKIE[$this->name];
            if (json_decode($cookie)) {
                return json_decode($cookie, true);
            } else {
                trigger_error("Nepaejo", E_WARNING);
                return [];
            }
        } else {
            return [];
        }
    }

    public function save($data, $expires_in = 3600): void {
        $cookie = json_encode($data);
        setcookie($this->name, $cookie, time()+$expires_in);
    }

    
    
    public function delete() {
        setcookie($this->name, '', time() - 3600, '/');
    }
}
