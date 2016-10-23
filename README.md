# render

Outputs an html5 document with a title and a body. UTF-8 encoding is assumed.

## Installation

Install it via composer:

```
composer require flsouto/render
```

## Usage

Pass the page's title and body as arguments to the render function:

```
<?php
require_once('vendor/autoload.php');
render('HTML5 Boilerplate', 'This is just a test');

```

Output:

```
<!DOCTYPE html>
<html>
	<head>
		<title>Testing the Lib</title>
		<meta charset="UTF-8">
	</head>
	<body>
		This is just a test 
	</body>
</html>

```

## Using closures

The content doesn't need to be a string. Instead, you can provide a callback that generates the content:

```
<?php
require_once('vendor/autoload.php');
render('HTML5 Boilerplate', function(){
	return "This is a test";
});

```

Will produce the same html output as above.

### Return or Output?

Your callback can either return the content or print something out. 
This is good because you can use alternative markup syntax inside a closure:

```
<?php
require_once('vendor/autoload.php');
render('HTML5 Boilerplate', function(){?>
	
	<div id="main">
		<h1>Example</h1>		
		<b>Output some markup</b>
	</div>

<?php });
```

Output:

```
<html>
	<head>
		<title>HTML5 Boilerplate</title>
		<meta charset="UTF-8">
	</head>
	<body>	
	<div id="main">
		<h1>Example</h1>		
		<b>Output some markup</b>
	</div>
	</body>
</html>
```

# Extending this Library

This is good enough to get you started quickly. However, as your project becomes more complex and you need to further customize the document, let's say, add some extra meta tags or change the document's charset, then you will need something different. What can you do after you have several pages relying on the implementation of the simplistic render function? Here is what you do: you copy the function from the vendor directory to your project's (it's really just one file/function), change the implementation as desired and then remove this package from your composer installation. Done.