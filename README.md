# Kirby Robots.txt

Kirby plugin that handles the `robots.txt` functionality as described [here](http://www.robotstxt.org/robotstxt.html).

## Installation

1. Put all files and folders into a new plugin folder `site/plugins/robotstxt`
1. You should now have a `Robots.txt` page in your panel and a (virtual) robots.txt file in the root of your site (yoursite.com/robots.txt)

### Note

If you have caching enabled, you will WANT to ignore the robots.txt from being cached.
Do this by setting/updating the `cache.ignore` option in your config:

```php
c::set('cache.ignore', array(
  'robotstxt'
));
```

Also remember to exclude the robots.txt from your XML sitemap, if you use it.
