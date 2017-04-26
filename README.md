# sample_oa
## About

This sample_oa project is only used for study.write by php,used laravel framework and metronic template

## Deploy

```shell
git clone https://github.com/popwalker/sample_oa.git

cd sample_oa
chmod +w -R storage
chmod +w -R bootstrap/cache

echo local > .env

composer install

cd public
php -S 0.0.0.0:8000
```

Now the server was launched,visit `http://localhost:8000`,we will see the result.
