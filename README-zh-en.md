# laravel-form-creator
`laravel-admin` is administrative interface builder for laravel which can help you build CRUD backends just with few lines of code. Form builder for Laravel 5 inspired by Symfony's form builder. With help of Laravels FormBuilder class creates forms that can be easy modified  and reused. By default it supports Bootstrap 3.

## Requirements

- PHP >= 7.0.0
- Laravel >= 5.5.0
- Fileinfo PHP Extension

## Installation

This package requires PHP 7+ and Laravel 5.5, for old versions please refer to [1.4](https://laravel-admin.org/docs/v1.4/#/)

First, install laravel 5.5, and make sure that the database connection settings are correct.

```shell
composer require encore/laravel-admin
```

Then run these commands to publish assets and config：

```shell
php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
```

After run command you can find config file in `config/admin.php`, in this file you can change the install directory,db connection or table names.

At last run following command to finish install.

```shell
php artisan admin:install
```

Open `http://localhost/admin/` in browser,use username `admin` and password `admin` to login.

## Configurations

The file `config/admin.php` contains an array of configurations, you can find the default configurations in there.

## Extensions

| Extension                                                    | Description                                                  | laravel-admin |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------- |
| [helpers](https://github.com/laravel-admin-extensions/helpers) | Several tools to help you in development                     | ~1.5          |
| [media-manager](https://github.com/laravel-admin-extensions/media-manager) | Provides a web interface to manage local files               | ~1.5          |
| [api-tester](https://github.com/laravel-admin-extensions/api-tester) | Help you to test the local laravel APIs                      | ~1.5          |
| [scheduling](https://github.com/laravel-admin-extensions/scheduling) | Scheduling task manager for laravel-admin                    | ~1.5          |
| [redis-manager](https://github.com/laravel-admin-extensions/redis-manager) | Redis manager for laravel-admin                              | ~1.5          |
| [backup](https://github.com/laravel-admin-extensions/backup) | An admin interface for managing backups                      | ~1.5          |
| [log-viewer](https://github.com/laravel-admin-extensions/log-viewer) | Log viewer for laravel                                       | ~1.5          |
| [config](https://github.com/laravel-admin-extensions/config) | Config manager for laravel-admin                             | ~1.5          |
| [reporter](https://github.com/laravel-admin-extensions/reporter) | Provides a developer-friendly web interface to view the exception | ~1.5          |
| [wangEditor](https://github.com/laravel-admin-extensions/wangEditor) | A rich text editor based on [wangeditor](http://www.wangeditor.com/) | ~1.6          |
| [summernote](https://github.com/laravel-admin-extensions/summernote) | A rich text editor based on [summernote](https://summernote.org/) | ~1.6          |
| [china-distpicker](https://github.com/laravel-admin-extensions/china-distpicker) | 一个基于[distpicker](https://github.com/fengyuanchen/distpicker)的中国省市区选择器 | ~1.6          |
| [simplemde](https://github.com/laravel-admin-extensions/simplemde) | A markdown editor based on [simplemde](https://github.com/sparksuite/simplemde-markdown-editor) | ~1.6          |
| [phpinfo](https://github.com/laravel-admin-extensions/phpinfo) | Integrate the `phpinfo` page into laravel-admin              | ~1.6          |
| [php-editor](https://github.com/laravel-admin-extensions/php-editor)   [python-editor](https://github.com/laravel-admin-extensions/python-editor)   [js-editor](https://github.com/laravel-admin-extensions/js-editor)  [css-editor](https://github.com/laravel-admin-extensions/css-editor)  [clike-editor](https://github.com/laravel-admin-extensions/clike-editor) | Several programing language editor extensions based on code-mirror | ~1.6          |
| [star-rating](https://github.com/laravel-admin-extensions/star-rating) | Star Rating extension for laravel-admin                      | ~1.6          |
| [json-editor](https://github.com/laravel-admin-extensions/json-editor) | JSON Editor for Laravel-admin                                | ~1.6          |
| [grid-lightbox](https://github.com/laravel-admin-extensions/grid-lightbox) | Turn your grid into a lightbox & gallery                     | ~1.6          |
| [daterangepicker](https://github.com/laravel-admin-extensions/daterangepicker) | Integrates daterangepicker into laravel-admin                | ~1.6          |
| [material-ui](https://github.com/laravel-admin-extensions/material-ui) | Material-UI extension for laravel-admin                      | ~1.6          |
| [sparkline](https://github.com/laravel-admin-extensions/sparkline) | Integrates jQuery sparkline into laravel-admin               | ~1.6          |
| [chartjs](https://github.com/laravel-admin-extensions/chartjs) | Use Chartjs in laravel-admin                                 | ~1.6          |
| [echarts](https://github.com/laravel-admin-extensions/echarts) | Use Echarts in laravel-admin                                 | ~1.6          |
| [simditor](https://github.com/laravel-admin-extensions/simditor) | Integrates simditor full-rich editor into laravel-admin      | ~1.6          |
| [cropper](https://github.com/laravel-admin-extensions/cropper) | A simple jQuery image cropping plugin.                       | ~1.6          |
| [composer-viewer](https://github.com/laravel-admin-extensions/composer-viewer) | A web interface of composer packages in laravel.             | ~1.6          |
| [data-table](https://github.com/laravel-admin-extensions/data-table) | Advanced table widget for laravel-admin                      | ~1.6          |

## Contributors

This project exists thanks to all the people who contribute. [[Contribute](https://github.com/z-song/laravel-admin/blob/master/CONTRIBUTING.md)].



## Backers

Thank you to all our backers! 🙏 [[Become a backer](https://opencollective.com/laravel-admin#backer)]



## Sponsors

Support this project by becoming a sponsor. Your logo will show up here with a link to your website. [[Become a sponsor](https://opencollective.com/laravel-admin#sponsor)]



## Other

`laravel-admin` based on following plugins or services:

[Laravel](https://laravel.com/)

[AdminLTE](https://adminlte.io/)

[Datetimepicker](http://eonasdan.github.io/bootstrap-datetimepicker/)

[font-awesome](http://fontawesome.io)

[moment](http://momentjs.com/)

## License

`laravel-admin` is licensed under [The MIT License (MIT)](https://github.com/z-song/laravel-admin/blob/master/LICENSE).

