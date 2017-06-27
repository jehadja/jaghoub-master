## Install

Using Composer

```
composer require jaghoub/izitools:dev-master
```

Add the service provider to `config/app.php`

```php
jaghoub\izitools\izitoolsServiceProvider::class,
```

Optionally include the Facade in `config/app.php` if you'd like.

```php
'izitools' => jaghoub\izitools\Facades\izitools::class,
```


## Usage

### Basic

From your application, call the `izime` method with a options and type.

```php
izitools::izime('tosat', [
 'title'=> 'Welcome to laravel Website Test !',
 'message'=>'is simply dummy text of the printing and typesetting industry. ',
 'color'=>'green',
 'position'=>'center'
]);

---
or
---

izitools::izime('modal', [
 'title'=> 'Welcome to laravel Website Test !',
 'iframe'=>true,
 'iframeHeight'=>800,
 'iframeURL'=>'http://izimodal.dolce.ninja'
]);


```

Within a view, you can now check if a flash message exists and output it.

```php
@if (izitools::ready())

         {{ izitools::type() }}
@endif
```

### Options

You can pass additional options to the `izime` method, which are then easily accessible within your view.

```php
izitools::izime('modal', [
 'title'=> 'Welcome to laravel Website Test !',
 etc ...
]);
```

Then, in your view.

```javascript
@if (izitools::ready())
     <script>
     $(document).ready(function(){

 @if (izitools::type() =='tosat')
 iziToast.show({
{!! izitools::options() !!}
  });

 @elseif(izitools::type() =='modal')
$("#modal").iziModal({
 {!! izitools::options() !!}
});

   $('#modal').iziModal('open');
 @else

 iziToast.show({
     title: 'this option not Available',
     message: 'this packages include only modal and tosat type please select one of them while sending data',
     color:'red'
 });
 @endif

     });
      </script>
@endif
@endif
```

> its not suggested to use {!! !!} method on real app it will allow the attack of XSS unless you are sure about data will be pushed .

```
'better user the method izitools::option("option_name")'
```

## Built With
* [izimodal](http://izimodal.marcelodolce.com/) - jQueryIZIMODAL v1.5.0
* [izitosat](http://izitoast.marcelodolce.com/) - IZITOAST v1.1.2

> The above example uses izimodal,izitosat but the flexibily of izitools means you can easily use it with any JavaScript alert solution.

## Issues and contribution

Just submit an issue or pull request through GitHub. Thanks!
