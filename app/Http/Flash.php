<?php
/**
 * Global flash messages.
 *
 * Helper class to help invoke notifications in a easier way.
 *
 * Author: Simon Assouline
 * Created: 29/02/16 - 5:12 PM
 *
 * @copyright Copyright (c) $YEAR. SIACOM  - All Rights Reserved
 *  Unauthorized copying of this file, via any medium is strictly prohibited.
 */

namespace LaravelExamples\Http;

class Flash {
    /*   Completed
     * ==============
     * $flash->message('my message');
     * $flash->error('message');
     * $flash->aside('message');
     * $flash->overlay('message');
     * $flash->success('message');
     */

    /**
     * @param $title
     * @param $message
     * @param $alert
     */
    public function create($title, $message, $alert, $key = 'flash_message')
    {
        session()->flash($key,  [
            'title'   => $title,
            'message' => $message,
            'alert'   => $alert
        ]);
    }

    /**
     * @param $title
     * @param $message
     */
    public function info($title, $message) {
        return $this->create($title, $message, 'info');
    }

    /**
     * @param $title
     * @param $message
     */
    public function success($title, $message) {
        return $this->create($title, $message, 'success');
    }

    /**
     * @param $title
     * @param $message
     */
    public function error($title, $message) {
        return $this->create($title, $message, 'error');
    }

    /**
     * @param $title
     * @param $message
     */
    public function warning($title, $message) {
        return $this->create($title, $message, 'warning');
    }

    /**
     * @param $title
     * @param $message
     * @param string $level
     */
    public function overlay($title, $message, $alert = 'success') {
        return $this->create($title, $message, $alert, 'flash_message_overlay');
    }


}