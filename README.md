# Kirby Collage

This plugin provides a gallery Kirbytext tag for [Kirby 2 CMS](http://www.getkirby.com) implementing the collage image galleries of [Collage Plus](http://collageplus.edlea.com)

# Installation
1. Download [Kirby Collage](https://github.com/distantnative/kirby-gallery/zipball/master/)
2. Copy the `site/plugins/gallery` directory to `site/plugins/`
3. Copy the `assets/gallery` directory to `assets/`
4. Add CSS link to your header:
```php
// site/snippets/header.php
echo css('assets/gallery/gallery.css');
```
5. Add the following JS links to your header:
```php
// site/snippets/header.php
echo js('//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'); // if jQuery isn't included already
echo js('assets/gallery/jquery.collagePlus.min.js');
echo js('assets/gallery/gallery.js');
```

# Usage
Use `(gallery: IMAGENAME|IMAGENAME|IMAGENAME)` inside your Kirbytext:
```
(gallery: forrest.jpg|IMG_673.jpg|lake.png)
```

You can also use the following for a gallery of all images of that page:
```
(gallery: all)
```

You can also use the following for a gallery of all images EXCEPT THE FIRST of that page:
```
(gallery: all-nofirst)
```
