# api-vue
For this project I follow these tasks.
1. First created the git repository
2. Clone the repo in my local machine
3. Created laravel project named "backend" and also created frontend using "vue-js"
4. Configured the laravel project for API
5. Install passport for authorization and configure the database "mySql"


## Backend setup
Run the following command

```
cd backend
```
```
cp .env.example .env
```

set the database, user and password
```
composer install
```
```
php artisan key:generate
```
```
php artisan migrate
```
```
php artisan serve
```

api will be 
http://localhost:8000/api/

## frontend setup
```
npm install
```

### Compiles and minifies for production
```
npm run build
```

### Compiles and hot-reloads for development
```
npm run serve
```


