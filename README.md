# A simple byte conversion utility

```
$converter = new ByteConverter();

// convert to bytes
$converter->getBytes('1b'); 	// 1
$converter->getBytes('1k');		// 1024
$converter->getBytes('1m');		// 1048576
$converter->getBytes('1g');		// 1073741824

// convert to kilobytes
$converter->getKBytes('1b');	// 
$converter->getKBytes('1k');	// 
$converter->getKBytes('1m');	// 
$converter->getKBytes('1g');	// 

// convert to megabytes
$converter->getMBytes('1b');	// 
$converter->getMBytes('1k');	// 
$converter->getMBytes('1m');	// 
$converter->getMBytes('1g');	// 

// convert to gigabytes
$converter->getGBytes('1b');	// 
$converter->getGBytes('1k');	// 
$converter->getGBytes('1m');	// 
$converter->getGBytes('1g');	//  

```