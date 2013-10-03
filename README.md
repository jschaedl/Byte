# A simple byte conversion utility

## Usage example

```
$converter = new ByteConverter();

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

