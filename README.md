# Kirby Robots.txt

![Version](https://img.shields.io/badge/version-1.1.0-green.svg) ![License](https://img.shields.io/badge/license-MIT-green.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-2.2%2B-red.svg)

*Version 1.1.0*

Kirby plugin that makes the `robots.txt` file editable as a page in the panel.

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ cd path/to/kirby
$ kirby plugin:install ezraverheijen/kirby-robots.txt
```

### 2. Clone or download

1. [Clone](https://github.com/ezraverheijen/kirby-robots.txt.git) or [download](https://github.com/ezraverheijen/kirby-robots.txt/archive/master.zip) this repository.
2. Unzip the archive if needed and rename the folder to `robotstxt`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/robotstxt/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/ezraverheijen/kirby-robots.txt.git site/plugins/robotstxt
```

## Setup

No additional setup needed.
You should now have a `Robots.txt` page in your panel and a (virtual) robots.txt file in the root of your site (yoursite.com/robots.txt)

## Options

If you have caching enabled, you will WANT to ignore the robots.txt from being cached.
Do this by setting/updating the `cache.ignore` option in in your `/site/config/config.php` file:

```php
c::set('cache.ignore', array(
  'robotstxt'
));
```

Also remember to exclude the robots.txt from your XML Sitemap(s), RSS Feed(s), etc.

## Changelog

**1.1.0**

- Converted plugin repository according to [Kirby Plugin Boilerplate](https://github.com/jenstornell/kirby-boiler-plugin)

**1.0.0**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.2+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/ezraverheijen/kirby-robots.txt/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Ezra Verheijen](https://github.com/ezraverheijen)