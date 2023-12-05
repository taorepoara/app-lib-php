<div id="top"></div>
<!--
*** This README was created with https://github.com/othneildrew/Best-README-Template
-->



<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">

<h3 align="center">App Lib for PHP based projects</h3>

  <p align="center">
    This lib integrates all the elements the app needs in order to only keep the views, listeners and resources in the app project.
    <br />
    <br />
    <a href="https://github.com/lenra-io/app-lib-php/issues">Report Bug</a>
    ·
    <a href="https://github.com/lenra-io/app-lib-php/issues">Request Feature</a>
  </p>
</div>


<!-- USAGE EXAMPLES -->
## Usage

To incorporate it into your Lenra app project, simply run the following command:
```console
composer require lenra/app
```

### Lenra API calls

To call a Lenra API from a listener, use the `Lenra\App\Api` instance provided in the . 

You can then create a document using the data API with the following code:
```php
class CustomType extends \Lenra\App\Data {
    public string $value;
    public function __construct(string $value = null) {
        $this->value = $value;
    }
}

$myDoc = $request->api->data()->coll(CustomType::class)->createDoc(new CustomType("Hello world"))->wait();
```

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please open an issue with the tag "enhancement".
Don't forget to give the project a star if you liked it! Thanks again!

### Generate components classes

A part of this lib is generated from the [Lenra API](https://github.com/lenra-io/api).
To generate the classes, run the following commands:

```bash
# Load API
wget https://github.com/lenra-io/api/releases/latest/download/load-api.sh -O - -q | bash
# generate Models
php vendor/bin/jane generate
# generate builder classes
php script/generate-classes.php
```

### Run unit tests

```bash
./vendor/bin/phpunit test
```


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the **MIT** License. See [LICENSE](./LICENSE) for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Lenra - [@lenra_dev](https://twitter.com/lenra_dev) - contact@lenra.io

Project Link: [https://github.com/lenra-io/app-lib-php](https://github.com/lenra-io/app-lib-php)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/lenra-io/app-lib-php.svg?style=for-the-badge
[contributors-url]: https://github.com/lenra-io/app-lib-php/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/lenra-io/app-lib-php.svg?style=for-the-badge
[forks-url]: https://github.com/lenra-io/app-lib-php/network/members
[stars-shield]: https://img.shields.io/github/stars/lenra-io/app-lib-php.svg?style=for-the-badge
[stars-url]: https://github.com/lenra-io/app-lib-php/stargazers
[issues-shield]: https://img.shields.io/github/issues/lenra-io/app-lib-php.svg?style=for-the-badge
[issues-url]: https://github.com/lenra-io/app-lib-php/issues
[license-shield]: https://img.shields.io/github/license/lenra-io/app-lib-php.svg?style=for-the-badge
[license-url]: https://github.com/lenra-io/app-lib-php/blob/master/LICENSE
