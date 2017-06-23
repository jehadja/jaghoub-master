## Install

Using Composer

```
composer require Jaghoub/izitools
```

Add the service provider to `config/app.php`

```php
Jaghoub\izitools\izitoolsServiceProvider::class,
```

Optionally include the Facade in `config/app.php` if you'd like.

```php
'izitools' => Jaghoub\izitools\Facades\izitools::class,
```


## Usage

### Basic

From your application, call the `flash` method with a message and type.

```php
izitools()->izime('modal', [
  'title'=> 'my title',
  'subtitle'=>'my subtitle',
```

Within a view, you can now check if a flash message exists and output it.

```php
@if (notify()->ready())
         {{ izime()->type() }}
    </div>
@endif
```

### Options

You can pass additional options to the `izime` method, which are then easily accessible within your view.

```php
notify()->flash('modal', [
  'title'=> 'my title',
  'subtitle'=>'my subtitle',  
  etc..
]);
```

Then, in your view.

```javascript
 // will put later
@endif
```

## Built With
* [izimodal](http://izimodal.marcelodolce.com/) - jQueryIZIMODAL v1.5.0
* [izitosat](http://izitoast.marcelodolce.com/) - IZITOAST v1.1.2

> The above example uses izimodal,izitosat but the flexibily of izitools means you can easily use it with any JavaScript alert solution.

## Issues and contribution

Just submit an issue or pull request through GitHub. Thanks!
