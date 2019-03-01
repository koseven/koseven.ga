---
layout: api
class: Kohana_Form
---
<h1>Kohana_Form</h1>
<p>
<i><p>Form helper class. Unless otherwise noted, all generated HTML will be made
safe using the <a href="#chars">HTML::chars</a> method. This prevents against simple XSS
attacks that could otherwise be triggered by inserting HTML characters into
form fields.</p>
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
<em>None</em>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#button">button()</a>
</li>
<li>
<a href="#checkbox">checkbox()</a>
</li>
<li>
<a href="#close">close()</a>
</li>
<li>
<a href="#file">file()</a>
</li>
<li>
<a href="#hidden">hidden()</a>
</li>
<li>
<a href="#image">image()</a>
</li>
<li>
<a href="#input">input()</a>
</li>
<li>
<a href="#label">label()</a>
</li>
<li>
<a href="#open">open()</a>
</li>
<li>
<a href="#password">password()</a>
</li>
<li>
<a href="#radio">radio()</a>
</li>
<li>
<a href="#select">select()</a>
</li>
<li>
<a href="#submit">submit()</a>
</li>
<li>
<a href="#textarea">textarea()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="button"><small>public static</small>  button(<small>string</small> <span class="param" title="Input name">$name</span> , <small>string</small> <span class="param" title="Input value">$body</span> [, <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a button form input. Note that the body of a button is NOT escaped,
to allow images and other HTML to be used.</p>

<pre><code>echo Form::button('save', 'Save Profile', array('type' =&gt; 'submit'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $body</strong> <small>required</small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
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
<code class="language-php">public static function button($name, $body, array $attributes = NULL)
{
	// Set the input name
	$attributes[&#039;name&#039;] = $name;

	return &#039;&lt;button&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$body.&#039;&lt;/button&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="checkbox"><small>public static</small>  checkbox(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>string</small> <span class="param" title="Input value">$value</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Checked status">$checked</span> <small>= <small>bool</small> FALSE</small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a checkbox form input.</p>

<pre><code>echo Form::checkbox('remember_me', 1, (bool) $remember);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Input value</li>
<li>
 <span class="blue">boolean </span><strong> $checked</strong> <small> = <small>bool</small> FALSE</small> - Checked status</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function checkbox($name, $value = NULL, $checked = FALSE, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;checkbox&#039;;

	if ($checked === TRUE)
	{
		// Make the checkbox active
		$attributes[] = &#039;checked&#039;;
	}

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="close"><small>public static</small>  close()<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates the closing form tag.</p>

<pre><code>echo Form::close();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function close()
{
	return &#039;&lt;/form&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="file"><small>public static</small>  file(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a file upload form input. No input value can be specified.</p>

<pre><code>echo Form::file('image');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function file($name, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;file&#039;;

	return Form::input($name, NULL, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hidden"><small>public static</small>  hidden(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>string</small> <span class="param" title="Input value">$value</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a hidden form input.</p>

<pre><code>echo Form::hidden('csrf', $token);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function hidden($name, $value = NULL, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;hidden&#039;;

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="image"><small>public static</small>  image(<small>string</small> <span class="param" title="Input name">$name</span> , <small>string</small> <span class="param" title="Input value">$value</span> [, <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Add index file to URL?">$index</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a image form input.</p>

<pre><code>echo Form::image(NULL, NULL, array('src' =&gt; 'media/img/login.png'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Add index file to URL?</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function image($name, $value, array $attributes = NULL, $index = FALSE)
{
	if ( ! empty($attributes[&#039;src&#039;]))
	{
		if (strpos($attributes[&#039;src&#039;], &#039;://&#039;) === FALSE AND strncmp($attributes[&#039;src&#039;], &#039;//&#039;, 2))
		{
			// Add the base URL
			$attributes[&#039;src&#039;] = URL::base($index).$attributes[&#039;src&#039;];
		}
	}

	$attributes[&#039;type&#039;] = &#039;image&#039;;

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="input"><small>public static</small>  input(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>string</small> <span class="param" title="Input value">$value</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a form input. If no type is specified, a "text" type input will
be returned.</p>

<pre><code>echo Form::input('username', $username);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
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
<code class="language-php">public static function input($name, $value = NULL, array $attributes = NULL)
{
	// Set the input name
	$attributes[&#039;name&#039;] = $name;

	// Set the input value
	$attributes[&#039;value&#039;] = $value;

	if ( ! isset($attributes[&#039;type&#039;]))
	{
		// Default type is text
		$attributes[&#039;type&#039;] = &#039;text&#039;;
	}

	return &#039;&lt;input&#039;.HTML::attributes($attributes).&#039; /&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="label"><small>public static</small>  label(<small>string</small> <span class="param" title="Target input">$input</span> [, <small>string</small> <span class="param" title="Label text">$text</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a form label. Label text is not automatically translated.</p>

<pre><code>echo Form::label('username', 'Username');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $input</strong> <small>required</small> - Target input</li>
<li>
 <span class="blue">string </span><strong> $text</strong> <small> = <small>NULL</small></small> - Label text</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
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
<code class="language-php">public static function label($input, $text = NULL, array $attributes = NULL)
{
	if ($text === NULL)
	{
		// Use the input name as the text
		$text = ucwords(preg_replace(&#039;/[\W_]+/&#039;, &#039; &#039;, $input));
	}

	// Set the label target
	$attributes[&#039;for&#039;] = $input;

	return &#039;&lt;label&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$text.&#039;&lt;/label&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="open"><small>public static</small>  open([ <small>mixed</small> <span class="param" title="Form action, defaults to the current request URI, or [Request] class to use">$action</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Generates an opening HTML form tag.</p>

<pre><code>// Form will submit back to the current page using POST
echo Form::open();

// Form will submit to 'search' using GET
echo Form::open('search', array('method' =&gt; 'get'));

// When "file" inputs are present, you must include the "enctype"
echo Form::open(NULL, array('enctype' =&gt; 'multipart/form-data'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $action</strong> <small> = <small>NULL</small></small> - Form action, defaults to the current request URI, or [Request] class to use</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="/index.php/">Request</a>, <a href="#site">URL::site</a>, <a href="#attributes">HTML::attributes</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function open($action = NULL, array $attributes = NULL)
{
	if ($action instanceof Request)
	{
		// Use the current URI
		$action = $action-&gt;uri();
	}

	if ( ! $action)
	{
		// Allow empty form actions (submits back to the current url).
		$action = &#039;&#039;;
	}
	elseif (strpos($action, &#039;://&#039;) === FALSE AND strncmp($action, &#039;//&#039;, 2))
	{
		// Make the URI absolute
		$action = URL::site($action);
	}

	// Add the form action to the attributes
	$attributes[&#039;action&#039;] = $action;

	// Only accept the default character set
	$attributes[&#039;accept-charset&#039;] = Kohana::$charset;

	if ( ! isset($attributes[&#039;method&#039;]))
	{
		// Use POST method
		$attributes[&#039;method&#039;] = &#039;post&#039;;
	}

	return &#039;&lt;form&#039;.HTML::attributes($attributes).&#039;&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="password"><small>public static</small>  password(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>string</small> <span class="param" title="Input value">$value</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a password form input.</p>

<pre><code>echo Form::password('password');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function password($name, $value = NULL, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;password&#039;;

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="radio"><small>public static</small>  radio(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>string</small> <span class="param" title="Input value">$value</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Checked status">$checked</span> <small>= <small>bool</small> FALSE</small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a radio form input.</p>

<pre><code>echo Form::radio('like_cats', 1, $cats);
echo Form::radio('like_cats', 0, ! $cats);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Input value</li>
<li>
 <span class="blue">boolean </span><strong> $checked</strong> <small> = <small>bool</small> FALSE</small> - Checked status</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function radio($name, $value = NULL, $checked = FALSE, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;radio&#039;;

	if ($checked === TRUE)
	{
		// Make the radio active
		$attributes[] = &#039;checked&#039;;
	}

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="select"><small>public static</small>  select(<small>string</small> <span class="param" title="Input name">$name</span> [, <small>array</small> <span class="param" title="Available options">$options</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Selected option string, or an array of selected options">$selected</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a select form input.</p>

<pre><code>echo Form::select('country', $countries, $country);
</code></pre>

<p class="note">Support for multiple selected options was added in v3.0.7.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">array </span><strong> $options</strong> <small> = <small>NULL</small></small> - Available options</li>
<li>
 <span class="blue">mixed </span><strong> $selected</strong> <small> = <small>NULL</small></small> - Selected option string, or an array of selected options</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
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
<code class="language-php">public static function select($name, array $options = NULL, $selected = NULL, array $attributes = NULL)
{
	// Set the input name
	$attributes[&#039;name&#039;] = $name;

	if (is_array($selected))
	{
		// This is a multi-select, god save us!
		$attributes[] = &#039;multiple&#039;;
	}

	if ( ! is_array($selected))
	{
		if ($selected === NULL)
		{
			// Use an empty array
			$selected = [];
		}
		else
		{
			// Convert the selected options to an array
			$selected = [ (string) $selected];
		}
	}

	if (empty($options))
	{
		// There are no options
		$options = &#039;&#039;;
	}
	else
	{
		foreach ($options as $value =&gt; $name)
		{
			if (is_array($name))
			{
				// Create a new optgroup
				$group = [&#039;label&#039; =&gt; $value];

				// Create a new list of options
				$_options = [];

				foreach ($name as $_value =&gt; $_name)
				{
					// Force value to be string
					$_value = (string) $_value;

					// Create a new attribute set for this option
					$option = [&#039;value&#039; =&gt; $_value];

					if (in_array($_value, $selected))
					{
						// This option is selected
						$option[] = &#039;selected&#039;;
					}

					// Change the option to the HTML string
					$_options[] = &#039;&lt;option&#039;.HTML::attributes($option).&#039;&gt;&#039;.HTML::chars($_name, FALSE).&#039;&lt;/option&gt;&#039;;
				}

				// Compile the options into a string
				$_options = &quot;\n&quot;.implode(&quot;\n&quot;, $_options).&quot;\n&quot;;

				$options[$value] = &#039;&lt;optgroup&#039;.HTML::attributes($group).&#039;&gt;&#039;.$_options.&#039;&lt;/optgroup&gt;&#039;;
			}
			else
			{
				// Force value to be string
				$value = (string) $value;

				// Create a new attribute set for this option
				$option = [&#039;value&#039; =&gt; $value];

				if (in_array($value, $selected))
				{
					// This option is selected
					$option[] = &#039;selected&#039;;
				}

				// Change the option to the HTML string
				$options[$value] = &#039;&lt;option&#039;.HTML::attributes($option).&#039;&gt;&#039;.HTML::chars($name, FALSE).&#039;&lt;/option&gt;&#039;;
			}
		}

		// Compile the options into a single string
		$options = &quot;\n&quot;.implode(&quot;\n&quot;, $options).&quot;\n&quot;;
	}

	return &#039;&lt;select&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.$options.&#039;&lt;/select&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="submit"><small>public static</small>  submit(<small>string</small> <span class="param" title="Input name">$name</span> , <small>string</small> <span class="param" title="Input value">$value</span> [, <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a submit form input.</p>

<pre><code>echo Form::submit(NULL, 'Login');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Input name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Input value</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#input">Form::input</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function submit($name, $value, array $attributes = NULL)
{
	$attributes[&#039;type&#039;] = &#039;submit&#039;;

	return Form::input($name, $value, $attributes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="textarea"><small>public static</small>  textarea(<small>string</small> <span class="param" title="Textarea name">$name</span> [, <small>string</small> <span class="param" title="Textarea body">$body</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>array</small> <span class="param" title="Html attributes">$attributes</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Encode existing HTML characters">$double_encode</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Form'>Kohana_Form</a>)</small></h3>
<div class='description'><p>Creates a textarea form input.</p>

<pre><code>echo Form::textarea('about', $about);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Textarea name</li>
<li>
 <span class="blue">string </span><strong> $body</strong> <small> = <small>string</small><span>(0)</span> ""</small> - Textarea body</li>
<li>
 <span class="blue">array </span><strong> $attributes</strong> <small> = <small>NULL</small></small> - Html attributes</li>
<li>
 <span class="blue">boolean </span><strong> $double_encode</strong> <small> = <small>bool</small> TRUE</small> - Encode existing HTML characters</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#attributes">HTML::attributes</a>, <a href="#chars">HTML::chars</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function textarea($name, $body = &#039;&#039;, array $attributes = NULL, $double_encode = TRUE)
{
	// Set the input name
	$attributes[&#039;name&#039;] = $name;

	// Add default rows and cols attributes (required)
	$attributes += [&#039;rows&#039; =&gt; 10, &#039;cols&#039; =&gt; 50];

	return &#039;&lt;textarea&#039;.HTML::attributes($attributes).&#039;&gt;&#039;.HTML::chars($body, $double_encode).&#039;&lt;/textarea&gt;&#039;;
}</code>
</pre>
</div>
</div>
</div>