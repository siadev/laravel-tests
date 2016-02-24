<?php

namespace App\Http;

class Flash {

    public function create($title, $message, $alert)
    {
        session()->flash('flash_message',  [
            'title'   => $title,
            'message' => $message,
            'alert'   => $alert
        ]);
    }

    public function info($title, $message) {
        return $this->create($title, $message, 'info');
    }

    public function success($title, $message) {
        return $this->create($title, $message, 'success');
    }

    public function error($title, $message) {
        return $this->create($title, $message, 'error');
    }

    public function warning($title, $message) {
        return $this->create($title, $message, 'warning');
    }



    /*    todo
     * ==============
     * $flash->message('my message');
     * $flash->error('message');
     * $flash->aside('message');
     * $flash->overlay('message');
     * $flash->sucecess('message');
     */
}