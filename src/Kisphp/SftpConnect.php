<?php

namespace Kisphp;

class SftpConnect
{
    /**
     * @var resource
     */
    protected $con;

    /**
     * @param ConfigInterface $config
     */
    public function __construct(ConfigInterface $config)
    {
        $this->con = ssh2_connect($config->getHost(), $config->getPort());
        ssh2_auth_password($this->con, $config->getUsername(), $config->getPassword());

        ssh2_sftp($this->con);
    }

    /**
     * @param string $localPath
     * @param string $remotePath
     * @param int $permissions
     *
     * @return bool
     */
    public function sendFile($localPath, $remotePath, $permissions = 0644)
    {
        return ssh2_scp_send($this->con, $localPath, $remotePath, $permissions);
    }

    /**
     * @param string $remotePath
     * @param string $localPath
     *
     * @return bool
     */
    public function receiveFile($remotePath, $localPath)
    {
        return ssh2_scp_recv($this->con, $remotePath, $localPath);
    }
}
