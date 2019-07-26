# CoreUIViews


## Installation

### Depends on `laravel-packager`

To install:
```bash
$ composer require jeroen-g/laravel-packager --dev
```

### Package install
Via Composer

Add to composer.json
```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/molbal/laravel-coreui-views"
        }
    ],
```

then

``` bash
$ composer require molbal/coreuiviews
```

### Publish assets from packages to public

``` bash
$ php artisan vendor:publish
```

## Usage

### In your views:

```php
@extends('coreui-static::admin')
```


### Available Section & Yield tags (_by [Jenry Ollivierre](https://github.com/JenryOllivierre/Laravel-Coreui-Static-Admin-Theme)_)

#### Header Section & Yield Tags
- `@yield('browser-title')` : Dynamically change browser title
- `@section('fonts') : add` more fonts
- `@section('header-stylesheets')` : add more stylesheets
- `@yield('custom-styles')` : add custom css to head section
- `@yield('header-js')` : add javascript code to head section
- `@yield('header-scripts')` : add javascript files to head section

#### Body Yield Tags
- `@yield('content')` : add content to the page

#### Footer Section & Yield Tags
- `@yield('footer-js')` : add javascript code to foot section
- `@section('footer-scripts')` : add more javascript files to foot

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Pushing changes

```bash
$ php artisan packager:publish molbal CoreUIViews https://github.com/molbal/laravel-coreui-views
```

## Credits

- [CoreUI](https://coreui.io) for the admin design
- [Jenry Ollivierre](https://github.com/JenryOllivierre/Laravel-Coreui-Static-Admin-Theme) for the laravel reference implementation, and documentation




