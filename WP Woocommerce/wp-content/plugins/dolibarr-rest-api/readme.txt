=== Dolibarr REST API ===
Contributors: opendsi
Tags: wordpress, plugin, template
Requires at least: 4.0
Tested up to: 4.9.8
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin helper to connect to the Dolibarr (free ERP) REST API.

== Description ==

WordPress plugin helper to connect to the Dolibarr ERP/CRM REST API. Connect to Dolibarr through the REST API to send your contacts, WooCommerce products or any data that will fit in your ERP/CRM.
This plugin has got no interface. You will only get notified in case the Dolibarr API is not correctly configured from the WordPress admin "Plugins" screen.
This plugin provides a simple tool for developers to use in their own plugin to connect to the Dolibarr REST API.

== Installation ==

Installing "Dolibarr REST API" can be done either by searching for "Dolibarr REST API" via the "Plugins > Add New" screen in your WordPress dashboard, or by using the following steps:

1. Download the plugin via WordPress.org
2. Upload the ZIP file through the 'Plugins > Add New > Upload' screen in your WordPress dashboard
3. Activate the plugin through the 'Plugins' menu in WordPress

Dolibarr configuration steps:

1. Activate the REST API for Dolibarr: go to menu _Home > Setup > Modules/Applications_ and activate the _API/Web services (REST server)_.
2. Generate and copy the admin user API key: go to menu _Home > Users & groups_, select your admin user in the list. Once on the User card, click the _Modify_ button and generate and copy the _Key for API_ (see screenshot). Click the _Save_ button.

WordPress configuration steps:
1. Add the Dolibarr URL and your admin user API key to the `wp-config.php` file. Here is an example:
```
define( 'DOLIBARR_REST_API_URL', 'https://my-dolibarr.com/' );
define( 'DOLIBARR_REST_API_USER_KEY', 'M1e57FZ69D0ophaizqTRsNB6lQ3d0EA6' );
```

== Frequently Asked Questions ==

= Does this plugin depend on any others? =

No, but it depends on a working instance of the [Dolibarr ERP](https://www.dolibarr.org/), accessible from the network.


= Does this create new database tables? =

No. There are no new database tables with this plugin.


= Does this load additional JS or CSS files ? =

No. This plugin does not load additional CSS or JS files.


= What does this plugin do? =

This plugin is useless on its own. It should be combined with another plugin that actually interacts with the Dolibarr REST API (agenda, contacts, third parties, expense, clients, products, etc.).


= How can I disable the request cache? =

GET requests can be cached if explicitely stated (see the controller PHP code). Call the page adding `&disable_cache=1` to the URL to disable cache.


== Changelog ==

= 1.0.0 =
* 2018-11-28
* Initial release
