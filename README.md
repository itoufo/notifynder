Notifynder 3.2 - Laravel 5
==========================

[![GitHub release](https://img.shields.io/github/release/Itoufo/Notifynder.svg?style=flat-square)](https://github.com/Itoufo/Notifynder/releases)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/Itoufo/Notifynder/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/Itoufo/Notifynder.svg?style=flat-square)](https://github.com/Itoufo/Notifynder/issues)
[![Total Downloads](https://img.shields.io/packagist/dt/Itoufo/notifynder.svg?style=flat-square)](https://packagist.org/packages/Itoufo/notifynder)

[![Travis branch](https://img.shields.io/travis/Itoufo/Notifynder/master.svg?style=flat-square)](https://travis-ci.org/Itoufo/Notifynder/branches)
[![StyleCI](https://styleci.io/repos/18425539/shield)](https://styleci.io/repos/18425539)
[![Scrutinizer Build](https://img.shields.io/scrutinizer/build/g/Itoufo/Notifynder.svg?style=flat-square)](https://scrutinizer-ci.com/g/Itoufo/Notifynder/?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/Itoufo/Notifynder.svg?style=flat-square)](https://scrutinizer-ci.com/g/Itoufo/Notifynder/?branch=master)
[![Code Climate](https://img.shields.io/codeclimate/github/Itoufo/Notifynder.svg?style=flat-square)](https://codeclimate.com/github/Itoufo/Notifynder)
[![Code Climate](https://img.shields.io/codeclimate/issues/github/Itoufo/Notifynder.svg?style=flat-square)](https://codeclimate.com/github/Itoufo/Notifynder/issues)

[![Slack Team](https://img.shields.io/badge/slack-notifynder-orange.svg?style=flat-square)](https://notifynder.slack.com)
[![Slack join](https://img.shields.io/badge/slack-join-green.svg?style=social)](https://notifynder.signup.team)

Version 4 is under development and we recommend to use this version for new projects. We won't add new features to v3.

Notifynder is designed to manage notifications in a powerful and easy way.
With the flexibility that Notifynder offer, It provide a complete API to work with your notifications,
such as storing, retriving, and organise your codebase to handle hundreds of notifications.
You get started in a couple of minutes to "enable" notifications in your Laravel Project.

Compatible DBs: **MySql** - **PostgresSql** - **Sqlite**

Documentation: **[Notifynder Wiki](https://github.com/Itoufo/Notifynder/wiki)**

- - -

## Installation ##

### Step 1 ###

Add it on your `composer.json`

    "Itoufo/notifynder": "^3.2"

and run 

    composer update

or run

    composer require Itoufo/notifynder


### Step 2 ###

Add the following string to `config/app.php`

**Providers array:**

    Itoufo\Notifynder\NotifynderServiceProvider::class,

**Aliases array:**

    'Notifynder' => Itoufo\Notifynder\Facades\Notifynder::class,


### Step 3 ###

#### Migration ####

Publish the migration as well as the configuration of notifynder with the following command:

    php artisan vendor:publish --provider="Itoufo\Notifynder\NotifynderServiceProvider"

Run the migration

    php artisan migrate

### Quick Usage ###

Set up category of notification, think about it as the
body of the notification:

    php artisan notifynder:create:category "user.following" "{from.username} started to follow you"

To send a notification with notifynder, that's all
you have to do.

```php
Notifynder::category('user.following')
            ->from($from_user_id)
            ->to($to_user_id)
            ->url('http://www.yourwebsite.com/page')
            ->send();
```

**Retrieving Notifications**

```php
// @return Collection
Notifynder::getAll($user_id,$limit,$paginateBool);
```

**Reading Notifications:**
```php
// @return number of notifications read
Notifynder::readAll($user_id);
```

To know more, such as the advance usage of Notifynder Visit the **[Notifynder Wiki](https://github.com/Itoufo/Notifynder/wiki)**.

#### Contributors ####

Thanks for everyone who contributed to Notifynder and a special thanks for the most active contributors

- [Gummibeer](https://github.com/Gummibeer)
