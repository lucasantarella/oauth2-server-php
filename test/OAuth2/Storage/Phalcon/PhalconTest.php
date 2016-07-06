<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 7/1/2016
 * Time: 2:08 PM
 */

namespace OAuth2\Storage\Phalcon;


use OAuth2\Storage\BaseTest;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Di;
use Phalcon\Escaper;
use Phalcon\Mvc\Model\Manager;
use Phalcon\Mvc\Model\MetaData\Memory;
use Phalcon\Mvc\Url;

class PhalconTest extends BaseTest
{
    private $di;

    public function testPhalconDataStorage()
    {
        $this->setUp();

        if (!extension_loaded('phalcon')) {
            $this->markTestSkipped("Phalcon not loaded! Skipping Phalcon tests...");
            return;
        }

        $storage = new Phalcon($this->di);
        $this->assertNotNull($storage->getClientDetails('oauth_test_client'));
    }

    /**
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        if (!extension_loaded('phalcon')) {
            $this->markTestSkipped("Phalcon not loaded! Skipping Phalcon tests...");
            return;
        }

        // Reset the DI container
        Di::reset();

        // Instantiate a new DI container (this would automatically be created in a normal Phalcon install)
        $di = new Di();
        $di->set(
            'url',
            function () {
                $url = new Url();
                $url->setBaseUri('/');
                return $url;
            }
        );

        $di->set(
            'escaper',
            function () {
                return new Escaper();
            }
        );

        $di->set('db', function () {
            return new Mysql(array(
                "host" => "localhost",
                "username" => "root",
                "password" => "",
                "dbname" => "oauth2_server_php",
            ));
        });

        $di->set(
            'modelsManager',
            function () {
                return new Manager();
            }
        );

        $di->set(
            'modelsMetadata',
            function () {
                return new Memory();
            }
        );

        $this->di = $di;
    }

}