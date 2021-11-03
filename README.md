<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## PagerDuty credentials

To check where the notifications are being pushed please log in as: 
- username: dijax40105@cyadp.com
- password: integrationsample
in PagerDuty
- Then under the service ``Laravel test service`` you could find the incidents

## How to test it

I have created a API route ``/send-notification`` where the notification is sent.

In the home page there is a link to go to this route. 

## Main files added

- I added a file App/Notifications/NotificationTester where the channel and the message from
the third party library are created.
- There is an App/Http/Controllers/NotificationController with the method of the created route
- The route was added on the routes/web.php file