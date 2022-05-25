Installation
```
git clone git@github.com:chunshui7347/todos-api.git
cd todos-api
```

Install dependecies
```
composer install
```

Generate application key (if not already generated)
```
php artisan key:generate
```

Up the Sail (docker)
```
./vendor/bin/sail up
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

```

Run migration
```
sail artisan migrate
```
