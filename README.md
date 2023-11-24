## Load deps

```bash
docker run --rm --interactive --tty -v $PWD:/app composer install
```


## Generate components classes

```bash
# Load API
wget https://github.com/lenra-io/api/releases/latest/download/load-api.sh -O - -q | bash
# generate Components
php vendor/bin/jane generate --config-file "config/jane/components.php"
```

## Run unit tests

```bash
./vendor/bin/phpunit test
```