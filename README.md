Reverse-Proxy Authentication plugin with LDAP support for Kanboard
==================================================================

[![Build Status](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap.svg?branch=master)](https://travis-ci.org/kanboard/plugin-reverse-proxy-ldap)

Authenticate users with the reverse-proxy method but populate user information from the LDAP directory.

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

- You must have [LDAP authentication configured in Kanboard](https://docs.kanboard.org/en/1.2.2/admin_guide/ldap_authentication.html)
- [Reverse-Proxy server configured correctly](https://docs.kanboard.org/en/1.2.2/admin_guide/reverse_proxy_authentication.html), the config parameter `REVERSE_PROXY_USER_HEADER` must be defined
- You don't need to set the constant `LDAP_AUTH`
- The constant `REVERSE_PROXY_AUTH` must not be set or set to `false`
- The LDAP authentication can be configured in anonymous or proxy mode
