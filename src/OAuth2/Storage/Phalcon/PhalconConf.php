<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 7/5/2016
 * Time: 12:05 PM
 */

namespace OAuth2\Storage\Phalcon;

class PhalconConf
{
    private $client_table;
    private $access_token_table;
    private $refresh_token_table;
    private $code_table;
    private $user_table;
    private $jwt_table;
    private $jti_table;
    private $scope_table;
    private $public_key_table;

    /**
     * PhalconConf constructor.
     * @param array $config
     * @throws \UnexpectedValueException
     */
    public function __construct($config)
    {
        if (
            isset($config['client_table']) &&
            isset($config['access_token_table']) &&
            isset($config['refresh_token_table']) &&
            isset($config['code_table']) &&
            isset($config['user_table']) &&
            isset($config['jwt_table']) &&
            isset($config['jti_table']) &&
            isset($config['scope_table']) &&
            isset($config['public_key_table'])
        ) {
            $this->setClientTable($config['client_table']);
            $this->setAccessTokenTable($config['access_token_table']);
            $this->setRefreshTokenTable($config['refresh_token_table']);
            $this->setCodeTable($config['code_table']);
            $this->setUserTable($config['user_table']);
            $this->setJwtTable($config['jwt_table']);
            $this->setJtiTable($config['jti_table']);
            $this->setScopeTable($config['scope_table']);
            $this->setPublicKeyTable($config['public_key_table']);
        } else {
            throw new \UnexpectedValueException('Config array must contain all keys!');
        }
    }


    /**
     * @return mixed
     */
    public function getClientTable()
    {
        return $this->client_table;
    }

    /**
     * @param mixed $client_table
     */
    public function setClientTable($client_table)
    {
        $this->client_table = $client_table;
    }

    /**
     * @return mixed
     */
    public function getAccessTokenTable()
    {
        return $this->access_token_table;
    }

    /**
     * @param mixed $access_token_table
     */
    public function setAccessTokenTable($access_token_table)
    {
        $this->access_token_table = $access_token_table;
    }

    /**
     * @return mixed
     */
    public function getRefreshTokenTable()
    {
        return $this->refresh_token_table;
    }

    /**
     * @param mixed $refresh_token_table
     */
    public function setRefreshTokenTable($refresh_token_table)
    {
        $this->refresh_token_table = $refresh_token_table;
    }

    /**
     * @return mixed
     */
    public function getCodeTable()
    {
        return $this->code_table;
    }

    /**
     * @param mixed $code_table
     */
    public function setCodeTable($code_table)
    {
        $this->code_table = $code_table;
    }

    /**
     * @return mixed
     */
    public function getUserTable()
    {
        return $this->user_table;
    }

    /**
     * @param mixed $user_table
     */
    public function setUserTable($user_table)
    {
        $this->user_table = $user_table;
    }

    /**
     * @return mixed
     */
    public function getJwtTable()
    {
        return $this->jwt_table;
    }

    /**
     * @param mixed $jwt_table
     */
    public function setJwtTable($jwt_table)
    {
        $this->jwt_table = $jwt_table;
    }

    /**
     * @return mixed
     */
    public function getJtiTable()
    {
        return $this->jti_table;
    }

    /**
     * @param mixed $jti_table
     */
    public function setJtiTable($jti_table)
    {
        $this->jti_table = $jti_table;
    }

    /**
     * @return mixed
     */
    public function getScopeTable()
    {
        return $this->scope_table;
    }

    /**
     * @param mixed $scope_table
     */
    public function setScopeTable($scope_table)
    {
        $this->scope_table = $scope_table;
    }

    /**
     * @return mixed
     */
    public function getPublicKeyTable()
    {
        return $this->public_key_table;
    }

    /**
     * @param mixed $public_key_table
     */
    public function setPublicKeyTable($public_key_table)
    {
        $this->public_key_table = $public_key_table;
    }


}