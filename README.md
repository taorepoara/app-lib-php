## Load deps

```bash
docker run --rm --interactive --tty -v $PWD:/app composer install
```


## Generate components classes

```bash
# Load API
wget https://github.com/lenra-io/api/releases/latest/download/load-api.sh -O - -q | bash
# generate JSON Components
php vendor/bin/jane generate --config-file "config/jane/components.json.php"
# generate Lenra Components
php vendor/bin/jane generate --config-file "config/jane/components.lenra.php"
```