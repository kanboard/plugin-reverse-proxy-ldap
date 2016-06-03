Reverse-Proxy Authentication plugin with LDAP support for Kanboard
==================================================================

[![Build Status](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap.svg?branch=master)](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap)

Authenticate users with Reverse-Proxy method but populate user information from the LDAP directory.

Author
------

- Frédéric Guillot
- License MIT

Requirements
------------

- Kanboard >= 1.0.29
- Kanboard configured to use LDAP
- Your web server must be configured as reverse-proxy

Installation
------------

You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/ReverseProxyLdap`
3. Clone this repository into the folder `plugins/ReverseProxyLdap`

Note: Plugin folder is case-sensitive.

Configuration
-------------

- You must have [LDAP configured in proxy mode in Kanboard](https://kanboard.net/documentation/ldap-authentication)
- [Reverse-Proxy server configured correctly](https://kanboard.net/documentation/reverse-proxy-authentication), the config parameter `REVERSE_PROXY_USER_HEADER` must be defined
- You **don't need** to set to `true` those constants: `LDAP_AUTH` and `REVERSE_PROXY_AUTH`
