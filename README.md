# Byte

A simple byte conversion utility to make conversion of byte values easier! It is built for PHP 5.3+.

[![Build Status](https://travis-ci.org/jschaedl/Byte.png)](https://travis-ci.org/jschaedl/Byte) 
[![Latest Unstable Version](https://poser.pugx.org/jschaedl/Byte/v/stable.png)](https://packagist.org/packages/jschaedl/Byte) 
[![Latest Unstable Version](https://poser.pugx.org/jschaedl/Byte/v/unstable.png)](https://packagist.org/packages/jschaedl/Byte) 
[![Total Downloads](https://poser.pugx.org/jschaedl/byte/downloads.png)](https://packagist.org/packages/jschaedl/byte) 
[![Dependencies Status](https://d2xishtp1ojlk0.cloudfront.net/d/13270245)](http://depending.in/jschaedl/Byte)

---

## Installation

Install the library using composer. Add the following to your ```composer.json```:

```
"require": {
        "jschaedl/byte": "dev-master"
}
```

And run the composer install command in terminal.

```
sudo composer.phar install
```

## Usage example

```
<?php
	$converter = new \Byte\ByteConverter();

	// convert to bytes
	$converter->getBytes('1b'); 	// 1
	$converter->getBytes('1k');		// 1024
	$converter->getBytes('1m');		// 1048576
	$converter->getBytes('1g');		// 1073741824

	// convert to kilobytes
	$converter->getKBytes('1b');	// 0.0009765625
	$converter->getKBytes('1k');	// 1
	$converter->getKBytes('1m');	// 1024
	$converter->getKBytes('1g');	// 1048576

	// convert to megabytes
	$converter->getMBytes('1b');	// 0.00000095367431640625
	$converter->getMBytes('1k');	// 0.0009765625
	$converter->getMBytes('1m');	// 1
	$converter->getMBytes('1g');	// 1024

	// convert to gigabytes
	$converter->getGBytes('1b');	// 0.00000000093132257461548
	$converter->getGBytes('1k');	// 0.00000095367431640625
	$converter->getGBytes('1m');	// 0.0009765625
	$converter->getGBytes('1g');	// 1 

```

## Author

[Jan Schädlich](https://github.com/jschaedl)

## License

MIT Public License



[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/jschaedl/byte/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

