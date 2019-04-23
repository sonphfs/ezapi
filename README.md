# ezapi

Laravel package provide ezapi =)))

### Installation
To install ezapi , simply

  $composer require "sonphfs/ezapi"

### Setting
Add a new line to the `providers` array:

  Sonphfs\Ezapi\EzApiServiceProvider::class,

Run:  
  
  php artisan migrate

Run:

  php artisan db:seed

### API

* GET /api/v1/articles
* GET /api/v1/articles/2
* POST /api/v1/articles/
* POST /api/v1/articles/2
* DELETE /api/v1/articles/2
  
