# Testing Flyer Model

#### Display $flyer result from memory

```php
    $flyer = factory('App\Flyer')->make();
```


#### Persist $flyer to database *Store*

```php
$flyer = factory('App\Flyer')->create();
$flyer->photos()->create(['photo' => 'foo.jpg']);
$flyer
$flyer->photos
$flyer->delete()
```

#### Testing get
**Get First one.**
```php
App\Flyer::with('photos')->first()
```
**Get all of them**
```
App\Flyer::with('photos')->get()
```