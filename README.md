# ProcessWire 3.x Default Site Profile

## Multi-language version

The multi-language version of the default site profile is identical to the 
intermediate default site profile except that it is set up with multiple 
languages (of course) and a few other minor things.

In any given site, there is going to be some static text for things like buttons, 
auto-generated headlines and such. We can make these translatable by surrounding 
that text in a `__('your text here')` function. Once you've done that, you can 
translate that text per-language in ProcessWire's admin (Setup > Languages), 
and output values will be automatically changed depending on the language. 
There are also a couple of other variations on this function, used for certain 
situations. Here's an example of them all: 

~~~~~
// This makes 'text' translatable  
__('text');

// Same as above, but with a specific context
// useful if the same term appears in multiple places
_x('text', 'context');

// For when we need singular and plural translation
_n('singular', 'plural', $count);
~~~~~

For more about making your static text translatable see our documentation on 
[code internationalization](https://processwire.com/docs/multi-language-support/code-i18n/).

The only other thing different about the multi-language default site profile is that 
it contains some additional code in the `_main.php` file for navigation that lets you 
view the page in each language. You'll see this near the top of the `_main.php` file.

See also: [Introduction to the Default site profile](https://processwire.com/docs/tutorials/default-site-profile/)

## To install

Depending on your version of ProcessWire, you may already have this site profile
included with the core, in which case you do not need to download it. If you find
that you do not already have it, follow the instructions below: 

- To use this site profile, you must first have a copy of ProcessWire that has 
  not yet gone through the installation process. 

- Copy the files from this repository into a `/site-languages/` directory in your
  web root (or wherever ProcessWire’s `install.php` file is located). 

- Open the URL where you've copied ProcessWire's files to in your web browser. 
  The installer should start, and when it asks you what site profile you want to
  install, you should see this profile there. Select it and continue installation.


