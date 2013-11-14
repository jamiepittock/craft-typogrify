# Craft Typogrify

Craft Typogrify prettifies your web typography by preventing ugly quotes and 'widows' and providing CSS hooks to style some special cases.

## Installation

* Place the **typogrify** folder inside your **craft/plugins/** folder.
* Go to **settings/plugins** and install typogrify

## Usage

The plugin adds a number of new Twig filters.

### Amp

Wraps apersands in HTML with `<span class="amp">` so they can be styled with CSS.

    {{ content|amp }}

Or:

    {% filter amp %}
    	<p>Your text here</p>
    {% endfilter %}

### Caps

Wraps multiple capital letters in `<span class="caps">` so they can be styled with CSS. 

    {{ content|caps }}

Or:

    {% filter caps %}
    	<p>Your text here</p>
    {% endfilter %}

### Dash

Puts a `&thinsp;` before and after an `&ndash` or `&mdash;`.

    {{ content|dash }}

Or:

    {% filter dash %}
    	<p>Your text here</p>
    {% endfilter %}

### Initial Quotes

Wraps initial quotes in `class="dquo"` for double quotes or `class="quo"` for single quotes.

    {{ content|initial_quotes }}

Or:

    {% filter initial_quotes %}
    	<p>Your text here</p>
    {% endfilter %}

### Smartypants

Applies smarty pants to curl quotes.

    {{ content|smartypants }}

Or:

    {% filter smartypants %}
    	<p>Your text here</p>
    {% endfilter %}

### Widont

Replaces the space between the last two words in a string with `&nbsp;`.

    {{ content|widont }}

Or:

    {% filter widont %}
    	<p>Your text here</p>
    {% endfilter %}

### Typogrify

The super filter. Applies all of the above in one go.

    {{ content|typogrify }}

Or:

    {% filter typogrify %}
    	<p>Your text here</p>
    {% endfilter %}

## Credits

* The original Django filters: http://static.mintchaos.com/projects/typogrify/
* PHP port of Typogrify
* PHP Smartypants: http://www.michelf.com/projects/php-smartypants/