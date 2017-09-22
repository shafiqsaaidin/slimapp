# slimapp
This is a RESTful api built with the SlimPHP framework and uses MySQL for storage.

### Installation
- `$ composer require slim/slim "^3.0"`
- Create database or import from sql/slimapp.sql
- Edit db/config params

### Usage 
- Test the setup file `http://localhost/slimapp/public/index.php/hello/world`

### API Endpoint
- `$ GET /api/customers`
- `$ GET /api/customer/{id}`
- `$ POST /api/customer/add`
- `$ PUT /api/customer/update/{id}`
- `$ DELETE /api/customer/delete/{id}`

### Example
![Imgur](https://i.imgur.com/WLGP6vD.png)
