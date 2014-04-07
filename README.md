Smelt.
======

Smelt is Sass & Susy-based WordPress RWD-construction kit.

The intention is to provide minimalist, solid and unobtrusive tools for WordPress parent-theme development, that enhance speed of development, adherance to conventions, and ease of long-term maintainability.


Smelt is both the naked theme that is the file-structure and few included files, and Ore, a submodule which contains most of the functionality, including:
* BEM-style SCSS %placeholders for commonly used patterns and helpers including grids and navigation; placeholders to stay DRY and because scss placeholders add no weight unless used.
* WordPress template-partials and functions that can be included and used at well.


How to use:
--------
* If you aren't already, familiarize yourself with the Sass-family and get your development environment setup.
* Download complete directory to your local machine / or fork & clone from github
* Change theme folder name and theme information in style.scss, and start developing!
* Update the ore submodule for new functionality.


NOTE: Smelt won't work with
Smelt is an accumulation of my personal practices, and more than its practical use it also serves as my learning document and reminders to myself.


General philosophy
-------
* Do as little as possible. http://alistapart.com/column/do-as-little-as-possible
* Object oriented CSS
* No "Relying on device dimensions". Breakpoints and tweakpoints! http://bradfrostweb.com/blog/post/five-responsive-web-design-pitfalls-to-avoid/


Key Components
-------
* Built with Sass, Compass and Susy
* normalize.scss - tweaking HIGHLY encouraged!
* HTML5shiv for enabling of HTML5 elements in IE
* Respond.js for media queries in IE
* 

Key Practices
-------
HTML
* HTML5, with thoughtful use of appropriate elements
* Clean selectors

CSS
* No styling of IDs
* No styling on elements, only style on classes
* CSSWizardry best practices: https://github.com/csswizardry/CSS-Guidelines
** Notably OOCSS: separation of structure and skin in selectors.
* Font sizing: http://csswizardry.com/2012/02/pragmatic-practical-font-sizing-in-css/

Grids
* Built with Susy Next
* Some common breakpoints added to build from

Images
Responsive images
- mobile version (cropped to product), regular version (1x) and retina version (2x). What script/service to use?
* And how to have wordpress allow 2/3 featured images (assuming cropping is important, which seems likely)
** HiSRC / Adaptive Images two good options.
** maybe picture fill, for the different images (art direciton)
SOLUTION: http://archive.keirwhitaker.com/archive/automatic-responsive-images-in-wordpress/  


SEO



File structure
* Only main .php files in root. All reuseable .php in components
* All scss in /sass, organized according to MVCSS (http://mvcss.github.io/). All styles compiled to style.css in root

Misc
* 20 snippets from HTML5Boilerplate - http://www.1stwebdesigner.com/design/snippets-html5-boilerplate/


Installation & hacking
-------
* clone and pull repo
* edit gemfile for latest/appropriate versions of components
* install ruby, get bundler, navigate to dir and use bundler install
* be sure to get latest html5shiv, respond.js, normalize.scss
*



Extra inspiration (not added)
-------
* Modular scale for key numbers. http://modularscale.com/ or https://github.com/Team-Sass/modular-scale
* Static site generation with WP Super Cache: http://wordpress.org/plugins/wp-super-cache/
* Use of Forge for easier navigation of dev environments. http://forge.thethemefoundry.com/





*** RWD SPECIFIC STUFF ***
Summary: http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/  
HOW TO RESTRICT MEDIA QUERIES so phones DONT GET DESKTOP VERSION?



STOP IPHONE SIMULATOR IMAGE RESIZING 


ACCOMODATE IHPONE AND IPAD, especially RETINA! big aprt of target group.


WHAT ABOUT TOUCH/CURSOR?

*still necessary or legacy?


remember META VIEWPORT

