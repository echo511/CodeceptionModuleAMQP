<?php

namespace Echo511\CodeceptionModuleAMQP;

use Codeception\Module\AMQP as AMQP_MODULE;

/**
 * Codeception AMPQ module.
 * @author Nikolas Tsiongas <ntsiongas@gmail.com>
 */
class AMQP extends AMQP_MODULE
{


    /**
     * Change AMPQ credentials and reinitialize connection.
     * @param string $host
     * @param string $username
     * @param string $password
     * @param string $port
     * @param string $vhost
     * @param bool $cleanup
     */
    public function changeAMQPcredentials($host = null, $username = null, $password = null, $port = null, $vhost = null, $cleanup = null)
    {
        if ($host !== null) {
            $this->config['host'] = $host;
        }
        if ($username !== null) {
            $this->config['username'] = $username;
        }
        if ($password !== null) {
            $this->config['password'] = $password;
        }
        if ($port !== null) {
            $this->config['port'] = $port;
        }
        if ($vhost !== null) {
            $this->config['vhost'] = $vhost;
        }
        if ($cleanup !== null) {
            $this->config['cleanup'] = $cleanup;
        }
        $this->_initialize();
    }
}
