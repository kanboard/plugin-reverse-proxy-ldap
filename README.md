Reverse-Proxy Authentication plugin with LDAP support for Kanboard
==================================================================

[![Build Status](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap.svg?branch=master)](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap)

Authenticate users with Reverse-Proxy method but populate user information from the LDAP directory.

Author
------

- Frédéric Guillot
- License MIT

Installation
------------

- Create a folder **plugins/ReverseProxyLdap** or uncompress the latest archive in the folder **plugins**
- Copy all files under this directory

Configuration
-------------

- You must have [LDAP configured in proxy mode in Kanboard](http://kanboard.net/documentation/ldap-authentication)
- [Reverse-Proxy server configured correctly](http://kanboard.net/documentation/reverse-proxy-authentication), the config parameter `REVERSE_PROXY_USER_HEADER` must be defined
- You **don't need** to set to `true` those constants: `LDAP_AUTH` and `REVERSE_PROXY_AUTH`
