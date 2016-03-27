<?php

require_once 'tests/units/Base.php';

use Kanboard\Plugin\ReverseProxyLdap\Auth\ReverseProxyLdapAuth;

class ReverseProxyLdapAuthTest extends Base
{
    public function testIsValidSessionWithRemoteUserNotLowercase()
    {
        $this->container['request'] = $this
            ->getMockBuilder('\Kanboard\Core\Http\Request')
            ->setConstructorArgs(array($this->container))
            ->setMethods(array('getRemoteUser'))
            ->getMock();

        $this->container['userSession'] = $this
            ->getMockBuilder('\Kanboard\Core\User\UserSession')
            ->setConstructorArgs(array($this->container))
            ->setMethods(array('getUsername'))
            ->getMock();

        $this->container['request']
            ->expects($this->once())
            ->method('getRemoteUser')
            ->will($this->returnValue('MyUser'));

        $this->container['userSession']
            ->expects($this->once())
            ->method('getUsername')
            ->will($this->returnValue('myuser'));

        $provider = new ReverseProxyLdapAuth($this->container);
        $this->assertTrue($provider->isValidSession());
    }
}
