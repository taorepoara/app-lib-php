## Load deps

```bash
docker run --rm --interactive --tty -v $PWD:/app composer install
```


## Generate components classes

```bash
# Load API
wget https://github.com/lenra-io/api/releases/latest/download/load-api.sh -O - -q | bash
# generate Models
php vendor/bin/jane generate --config-file "config/jane/components.php"
# generate builder classes
php script/generate-classes.php
```

## Run unit tests

```bash
./vendor/bin/phpunit test
```