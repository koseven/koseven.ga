---
layout: api
class: HTML
---
<h1>HTML</h1>
extends <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>
<br />
<p>
<i><p>HTML helper class. Provides generic methods for generating various HTML
tags and making output HTML safe.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Helpers</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>copyright</dt>
<dd>(c) Kohana Team</dd>
<dt>license</dt>
<dd>https://koseven.ga/LICENSE.md</dd>
</dl>
<br />
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<em>None</em>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-attribute_order">$attribute_order</a>
</li>
<li>
<a href="#property-strict">$strict</a>
</li>
<li>
<a href="#property-windowed_urls">$windowed_urls</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#anchor">anchor()</a>
</li>
<li>
<a href="#attributes">attributes()</a>
</li>
<li>
<a href="#chars">chars()</a>
</li>
<li>
<a href="#entities">entities()</a>
</li>
<li>
<a href="#file_anchor">file_anchor()</a>
</li>
<li>
<a href="#image">image()</a>
</li>
<li>
<a href="#mailto">mailto()</a>
</li>
<li>
<a href="#script">script()</a>
</li>
<li>
<a href="#style">style()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-attribute_order'><small>public static</small>  <span class='blue'>array</span> $attribute_order</h4>
</dt>
<dd>
 <p>preferred order of attributes</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(28)</span> <span>(
    0 => <small>string</small><span>(6)</span> "action"
    1 => <small>string</small><span>(6)</span> "method"
    2 => <small>string</small><span>(4)</span> "type"
    3 => <small>string</small><span>(2)</span> "id"
    4 => <small>string</small><span>(4)</span> "name"
    5 => <small>string</small><span>(5)</span> "value"
    6 => <small>string</small><span>(4)</span> "href"
    7 => <small>string</small><span>(3)</span> "src"
    8 => <small>string</small><span>(5)</span> "width"
    9 => <small>string</small><span>(6)</span> "height"
    10 => <small>string</small><span>(4)</span> "cols"
    11 => <small>string</small><span>(4)</span> "rows"
    12 => <small>string</small><span>(4)</span> "size"
    13 => <small>string</small><span>(9)</span> "maxlength"
    14 => <small>string</small><span>(3)</span> "rel"
    15 => <small>string</small><span>(5)</span> "media"
    16 => <small>string</small><span>(14)</span> "accept-charset"
    17 => <small>string</small><span>(6)</span> "accept"
    18 => <small>string</small><span>(8)</span> "tabindex"
    19 => <small>string</small><span>(9)</span> "accesskey"
    20 => <small>string</small><span>(3)</span> "alt"
    21 => <small>string</small><span>(5)</span> "title"
    22 => <small>string</small><span>(5)</span> "class"
    23 => <small>string</small><span>(5)</span> "style"
    24 => <small>string</small><span>(8)</span> "selected"
    25 => <small>string</small><span>(7)</span> "checked"
    26 => <small>string</small><span>(8)</span> "readonly"
    27 => <small>string</small><span>(8)</span> "disabled"
)</span></pre></dd>
<dt>
<h4 id='property-strict'><small>public static</small>  <span class='blue'>boolean</span> $strict</h4>
</dt>
<dd>
 <p>use strict XHTML mode?</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-windowed_urls'><small>public static</small>  <span class='blue'>boolean</span> $windowed_urls</h4>
</dt>
<dd>
 <p>automatically target external URLs to a new window?</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="anchor"><small>public static</small>  anchor(<small>string</small> <span class="param" title="URL or URI string">$uri</span> [, <small>string</small> <span class="param" title="Link text">$title</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="HTML anchor attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol to pass to URL::base()">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index page">$index</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Create HTML link anchors. Note that the title is not escaped, to allow
HTML elements within links (images, etc).</p>

<pre><code>echo HTML::anchor('/user/profile', 'My Profile');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small>required</small> - URL or URI string</li>
<li>
 <span class="blue">string </span><strong> $title</strong> <small> = <small>NULL</small></small> - Link text</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - HTML anchor attributes</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to pass to URL::base()</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> TRUE</small> - Include the index page</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a>, <a href="#site">URL::site</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function anchor($uri, $title = NULL, array $attributes = NULL, $protocol = NULL, $index = TRUE)
{
	if ($title === NULL)
	{
		// Use the URI as the title
		$title = $uri;
	}

	if ($uri === &#039;&#039;)
	{
		// Only use the base URL
		$uri = URL::base($protocol, $index);
	}
	else
	{
		if (strpos($uri, &#039;://&#039;) !== FALSE OR strncmp($uri, &#039;//&#039;, 2) == 0)
		{
			if (HTML::$windowed_urls === TRUE AND empty($attributes[&#039;target&#039;]))
			{
				// Make the link open in a new window
				$attributes[&#039;target&#039;] = &#039;_blank&#039;;
			}
		}
		elseif ($uri[0] !== &#039;#&#039; AND $uri[0] !== &#039;?&#039;)
		{
			// Make the URI absolute for non-fragment and non-query anchors
			$uri = URL::site($uri, $protocol, $index);
		}
	}

	// Add the sanitized link to the attributes
	$attributes[&#039;href&#039;] = $uri;

	return &#039;&lt;a&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$title.&#039;&lt;/a&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="attributes"><small>public static</small>  attributes([ <small>array</small> <span class="param" title="Attribute list">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Compiles an array of HTML attributes into an attribute string.
Attributes will be sorted using HTML::$attribute_order for consistency.</p>

<pre><code>echo '&lt;div'.HTML::attributes($attrs).'&gt;'.$content.'&lt;/div&gt;';
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Attribute list</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function attributes(array $attributes = NULL)
{
	if (empty($attributes))
		return &#039;&#039;;

	$sorted = [];
	foreach (HTML::$attribute_order as $key)
	{
		if (isset($attributes[$key]))
		{
			// Add the attribute to the sorted list
			$sorted[$key] = $attributes[$key];
		}
	}

	// Combine the sorted attributes
	$attributes = $sorted + $attributes;

	$compiled = &#039;&#039;;
	foreach ($attributes as $key =&gt; $value)
	{
		if ($value === NULL)
		{
			// Skip attributes that have NULL values
			continue;
		}

		if (is_int($key))
		{
			// Assume non-associative keys are mirrored attributes
			$key = $value;

			if ( ! HTML::$strict)
			{
				// Just use a key
				$value = FALSE;
			}
		}

		// Add the attribute key
		$compiled .= &#039; &#039;.$key;

		if ($value OR HTML::$strict)
		{
			// Add the attribute value
			$compiled .= &#039;=&quot;&#039;.HTML::chars($value).&#039;&quot;&#039;;
		}
	}

	return $compiled;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="chars"><small>public static</small>  chars(<small>string</small> <span class="param" title="String to convert">$value</span> [, <small>boolean</small> <span class="param" title="Encode existing entities">$double_encode</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Convert special characters to HTML entities. All untrusted content
should be passed through this method to prevent XSS injections.</p>

<pre><code>echo HTML::chars($username);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - String to convert</li>
<li>
 <span class="blue">boolean </span><strong> $double_encode</strong> <small> = <small>bool</small> TRUE</small> - Encode existing entities</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function chars($value, $double_encode = TRUE)
{
	return htmlspecialchars( (string) $value, ENT_QUOTES, Kohana::$charset, $double_encode);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="entities"><small>public static</small>  entities(<small>string</small> <span class="param" title="String to convert">$value</span> [, <small>boolean</small> <span class="param" title="Encode existing entities">$double_encode</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Convert all applicable characters to HTML entities. All characters
that cannot be represented in HTML with the current character set
will be converted to entities.</p>

<pre><code>echo HTML::entities($username);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - String to convert</li>
<li>
 <span class="blue">boolean </span><strong> $double_encode</strong> <small> = <small>bool</small> TRUE</small> - Encode existing entities</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function entities($value, $double_encode = TRUE)
{
	return htmlentities( (string) $value, ENT_QUOTES, Kohana::$charset, $double_encode);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="file_anchor"><small>public static</small>  file_anchor(<small>string</small> <span class="param" title="Name of file to link to">$file</span> [, <small>string</small> <span class="param" title="Link text">$title</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="HTML anchor attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol to pass to URL::base()">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index page">$index</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Creates an HTML anchor to a file. Note that the title is not escaped,
to allow HTML elements within links (images, etc).</p>

<pre><code>echo HTML::file_anchor('media/doc/user_guide.pdf', 'User Guide');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - Name of file to link to</li>
<li>
 <span class="blue">string </span><strong> $title</strong> <small> = <small>NULL</small></small> - Link text</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - HTML anchor attributes</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to pass to URL::base()</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Include the index page</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function file_anchor($file, $title = NULL, array $attributes = NULL, $protocol = NULL, $index = FALSE)
{
	if ($title === NULL)
	{
		// Use the file name as the title
		$title = basename($file);
	}

	// Add the file link to the attributes
	$attributes[&#039;href&#039;] = URL::site($file, $protocol, $index);

	return &#039;&lt;a&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$title.&#039;&lt;/a&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="image"><small>public static</small>  image(<small>string</small> <span class="param" title="File name">$file</span> [, <small>array</small> <span class="param" title="Default attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol to pass to URL::base()">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index page">$index</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Creates a image link.</p>

<pre><code>echo HTML::image('media/img/logo.png', array('alt' =&gt; 'My Company'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - File name</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Default attributes</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to pass to URL::base()</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Include the index page</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function image($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
{
	if (strpos($file, &#039;://&#039;) === FALSE AND strncmp($file, &#039;//&#039;, 2) AND strncmp($file, &#039;data:&#039;, 5))
	{
		// Add the base URL
		$file = URL::site($file, $protocol, $index);
	}

	// Add the image link
	$attributes[&#039;src&#039;] = $file;

	return &#039;&lt;img&#039;.HTML::attributes($attributes).&#039; /&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="mailto"><small>public static</small>  mailto(<small>string</small> <span class="param" title="Email address to send to">$email</span> [, <small>string</small> <span class="param" title="Link text">$title</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="HTML anchor attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Creates an email (mailto:) anchor. Note that the title is not escaped,
to allow HTML elements within links (images, etc).</p>

<pre><code>echo HTML::mailto($address);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $email</strong> <small>required</small> - Email address to send to</li>
<li>
 <span class="blue">string </span><strong> $title</strong> <small> = <small>NULL</small></small> - Link text</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - HTML anchor attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function mailto($email, $title = NULL, array $attributes = NULL)
{
	if ($title === NULL)
	{
		// Use the email address as the title
		$title = $email;
	}

	return &#039;&lt;a href=&quot;&amp;#109;&amp;#097;&amp;#105;&amp;#108;&amp;#116;&amp;#111;&amp;#058;&#039;.$email.&#039;&quot;&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$title.&#039;&lt;/a&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="script"><small>public static</small>  script(<small>string</small> <span class="param" title="File name">$file</span> [, <small>array</small> <span class="param" title="Default attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol to pass to URL::base()">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index page">$index</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Creates a script link.</p>

<pre><code>echo HTML::script('media/js/jquery.min.js');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - File name</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Default attributes</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to pass to URL::base()</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Include the index page</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function script($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
{
	if (strpos($file, &#039;://&#039;) === FALSE AND strncmp($file, &#039;//&#039;, 2))
	{
		// Add the base URL
		$file = URL::site($file, $protocol, $index);
	}

	// Set the script link
	$attributes[&#039;src&#039;] = $file;

	// Set the script type
	$attributes[&#039;type&#039;] = &#039;text/javascript&#039;;

	return &#039;&lt;script&#039;.HTML::attributes($attributes).&#039;&gt;&lt;/script&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="style"><small>public static</small>  style(<small>string</small> <span class="param" title="File name">$file</span> [, <small>array</small> <span class="param" title="Default attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol to pass to URL::base()">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index page">$index</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTML'>Kohana_HTML</a>)</small></h3>
<div class='description'><p>Creates a style sheet link element.</p>

<pre><code>echo HTML::style('media/css/screen.css');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - File name</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Default attributes</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to pass to URL::base()</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Include the index page</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function style($file, array $attributes = NULL, $protocol = NULL, $index = FALSE)
{
	if (strpos($file, &#039;://&#039;) === FALSE AND strncmp($file, &#039;//&#039;, 2))
	{
		// Add the base URL
		$file = URL::site($file, $protocol, $index);
	}

	// Set the stylesheet link
	$attributes[&#039;href&#039;] = $file;

	// Set the stylesheet rel
	$attributes[&#039;rel&#039;] = empty($attributes[&#039;rel&#039;]) ? &#039;stylesheet&#039; : $attributes[&#039;rel&#039;];

	// Set the stylesheet type
	$attributes[&#039;type&#039;] = &#039;text/css&#039;;

	return &#039;&lt;link&#039;.HTML::attributes($attributes).&#039; /&gt;&#039;;
}</code>
</pre>
</div>
</div>
</div>