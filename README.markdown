Using this code could not be simpler, just `cd` into the root of your site, and do this:

``` bash
git clone https://github.com/brdrck/SOPA-PIPA-Blackout.git sopa
```

then, open up your `index.php` (the one at the root of your site) and add this code to the top:

``` php
<?php
date_default_timezone_set('UTC');
if(mktime(5, 0, 0, 1, 18, 2012) < time() && time() < mktime(5, 0, 0, 1, 19, 2012)) {
	header("Location: /sopa/");
	die();
}
?>
```

That's it!