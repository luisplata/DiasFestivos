# luisplata/festivos-colombia

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Libreria para calcular si una fecha es festivo en el pais de colombia

## Install

Via Composer

``` bash
$ composer require luisplata/festivos-colombia
```

## Usage

``` php
$festivos = new luisplata\Festivos();
echo $festivos->esFestivo(25, 12);
```

## Change log

Por favor mirar el archivo CHANGELOG.md para mas información

## Contributing

Para contribuir pueden clonar el repositorio y hacer un pull request para adicionarlo al fuente

## Credits

- [luisplata][https://luisplata.github.io]
- [Danny Rios][http://blog.iguazoft.com/festivos-de-colombia-en-php/]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/luisplata/festivos-colombia.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/luisplata/festivos-colombia/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/luisplata/festivos-colombia.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/luisplata/festivos-colombia.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/luisplata/festivos-colombia.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/luisplata/festivos-colombia
[link-travis]: https://travis-ci.org/luisplata/festivos-colombia
[link-scrutinizer]: https://scrutinizer-ci.com/g/luisplata/festivos-colombia/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/luisplata/festivos-colombia
[link-downloads]: https://packagist.org/packages/luisplata/festivos-colombia
[link-author]: https://github.com/luisplata
[link-contributors]: ../../contributors
