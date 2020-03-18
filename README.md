# laravel-form-creator
laravel-form-creator 是基于 laravel 编写的表单生成器，它能够快速生成form表单界面。包含但不限于：输入框、下拉选择框、复选框、单选框、文本框、html编辑框等元素以及省市区三级联动、时间选择、日期选择、颜色选择、文件/图片上传等功能。

## 组件优势

- 可自定义元素属性和元素值
- 支持第三方前端框架嵌入
- 支持第三方脚本组件嵌入
- 支持元素分组和样式分组 

## 安装流程

- Composer
- PHP >= 7.0.0
- Laravel >= 5.5.0

## 安装流程

系统环境需要 PHP 7及以上版本、Laravel 5.5及以上版本。

首先, 安装 Laravel 5.5，确保 key 已经生成数据库连接配置正确。

```shell
composer require chyis/laravel-form-creator
```

然后运行如下命令发布资源引入资源库：

```shell
php artisan vendor:publish --provider="Chyis\LaravelFormCreator\FormCreatorProvider"
```

At last run following command to finish install.

```shell
php artisan admin:install
```



## 使用方法

在程序中引入类库后即可使用 Form 类来生成。

```php
<?php

namespace App\Http\Controllers\Web;

class TestFormController extends Controller
{

    public function showCreatForm1()
    {
        Form::create(['name'=>'', 'action'=>''], function(){
            
        	});
        return view('test.formCreate')
            ->with('Form', $formHtml);
    }
    
    public function showCreatForm2()
    {
        Form::create(['name'=>'', 'action'=>'']);
        Form::group('user-data', function(){
            Form::input('username', '默认用户名', ['class'=>'form-control', 'id'=>'username', 'placeholder'=>'请输入用户名']);
            Form::select('cityID', [1=>'美术',2=>'音乐'], 1, ['class'=>'form-control', 'id'=>'cityID']);
        	});
        Form::input('order_number', '默认用户名', ['class'=>'form-control', 'id'=>'order_number', 'placeholder'=>'请输入订单数量']);
        
        $formHtml = Form::make();
        
        return view('test.formCreate')
            ->with('Form', $formHtml);
    }
}
```

访问页面最终产生的HTML如下：

```html
<form id="mainForm" method="post" action="" class="site-form">
    <input type="hidden" name="_token" value="nv6kCbwI3iprDPksKxh4fose01FNRM9N5yJ5CWYN">
    <div class="form-group">
    	<label for="username">用户名</label>
    	<input type="text" class="form-control" name="username" id="username" value="默认用户名" disabled="disabled" />
    </div>
</form>
```

选择生成独立模板的话会产生如下HTML:

```html
<form id="mainForm" method="post" action="" class="site-form">
    {{csrf_field()}}
    <div class="form-group">
    	<label for="username">用户名</label>
    	<input type="text" class="form-control" name="username" id="username" value="{{$loginUser->user_name}}" disabled="disabled" />
    </div>
</form>
```



## 元素生成表

| 函数/方法 | 生成内容 | 版本 |
| --------- | -------- | ---- |
|           |          |      |
|           |          |      |
|           |          |      |
|           |          |      |





## 许可证

`laravel-form-creator` is licensed under [The MIT License (MIT)](https://github.com/chyis/laravel-form-creator/blob/master/LICENSE).

