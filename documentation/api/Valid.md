---
layout: api
class: Valid
---
<h1>Valid</h1>
extends <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>
<br />
<p>
<i><p>Validation rules.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Security</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a></p>
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
<em>None</em>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#alpha">alpha()</a>
</li>
<li>
<a href="#alpha_dash">alpha_dash()</a>
</li>
<li>
<a href="#alpha_numeric">alpha_numeric()</a>
</li>
<li>
<a href="#color">color()</a>
</li>
<li>
<a href="#credit_card">credit_card()</a>
</li>
<li>
<a href="#date">date()</a>
</li>
<li>
<a href="#decimal">decimal()</a>
</li>
<li>
<a href="#digit">digit()</a>
</li>
<li>
<a href="#email">email()</a>
</li>
<li>
<a href="#email_domain">email_domain()</a>
</li>
<li>
<a href="#equals">equals()</a>
</li>
<li>
<a href="#exact_length">exact_length()</a>
</li>
<li>
<a href="#ip">ip()</a>
</li>
<li>
<a href="#luhn">luhn()</a>
</li>
<li>
<a href="#matches">matches()</a>
</li>
<li>
<a href="#max_length">max_length()</a>
</li>
<li>
<a href="#min_length">min_length()</a>
</li>
<li>
<a href="#not_empty">not_empty()</a>
</li>
<li>
<a href="#numeric">numeric()</a>
</li>
<li>
<a href="#phone">phone()</a>
</li>
<li>
<a href="#range">range()</a>
</li>
<li>
<a href="#regex">regex()</a>
</li>
<li>
<a href="#url">url()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="alpha"><small>public static</small>  alpha(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>boolean</small> <span class="param" title="Trigger UTF-8 compatibility">$utf8</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks whether a string consists of alphabetical characters only.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">boolean </span><strong> $utf8</strong> <small> = <small>bool</small> FALSE</small> - Trigger UTF-8 compatibility</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function alpha($str, $utf8 = FALSE)
{
	$str = (string) $str;

	if ($utf8 === TRUE)
	{
		return (bool) preg_match(&#039;/^\pL++$/uD&#039;, $str);
	}
	else
	{
		return ctype_alpha($str);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="alpha_dash"><small>public static</small>  alpha_dash(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>boolean</small> <span class="param" title="Trigger UTF-8 compatibility">$utf8</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks whether a string consists of alphabetical characters, numbers, underscores and dashes only.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">boolean </span><strong> $utf8</strong> <small> = <small>bool</small> FALSE</small> - Trigger UTF-8 compatibility</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function alpha_dash($str, $utf8 = FALSE)
{
	if ($utf8 === TRUE)
	{
		$regex = &#039;/^[-\pL\pN_]++$/uD&#039;;
	}
	else
	{
		$regex = &#039;/^[-a-z0-9_]++$/iD&#039;;
	}

	return (bool) preg_match($regex, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="alpha_numeric"><small>public static</small>  alpha_numeric(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>boolean</small> <span class="param" title="Trigger UTF-8 compatibility">$utf8</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks whether a string consists of alphabetical characters and numbers only.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">boolean </span><strong> $utf8</strong> <small> = <small>bool</small> FALSE</small> - Trigger UTF-8 compatibility</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function alpha_numeric($str, $utf8 = FALSE)
{
	if ($utf8 === TRUE)
	{
		return (bool) preg_match(&#039;/^[\pL\pN]++$/uD&#039;, $str);
	}
	else
	{
		return ctype_alnum($str);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="color"><small>public static</small>  color(<small>string</small> <span class="param" title="Input string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks if a string is a proper hexadecimal HTML color value. The validation
is quite flexible as it does not require an initial "#" and also allows for
the short notation using only three instead of six hexadecimal characters.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function color($str)
{
	return (bool) preg_match(&#039;/^#?+[0-9a-f]{3}(?:[0-9a-f]{3})?$/iD&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="credit_card"><small>public static</small>  credit_card(<small>integer</small> <span class="param" title="Credit card number">$number</span> [, <small>string|array</small> <span class="param" title="Card type, or an array of card types">$type</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validates a credit card number, with a Luhn check if possible.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $number</strong> <small>required</small> - Credit card number</li>
<li>
 <span class="blue">string|array </span><strong> $type</strong> <small> = <small>NULL</small></small> - Card type, or an array of card types</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#luhn">Valid::luhn</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function credit_card($number, $type = NULL)
{
	// Remove all non-digit characters from the number
	if (($number = preg_replace(&#039;/\D+/&#039;, &#039;&#039;, $number)) === &#039;&#039;)
		return FALSE;

	if ($type == NULL)
	{
		// Use the default type
		$type = &#039;default&#039;;
	}
	elseif (is_array($type))
	{
		foreach ($type as $t)
		{
			// Test each type for validity
			if (Valid::credit_card($number, $t))
				return TRUE;
		}

		return FALSE;
	}

	$cards = Kohana::$config-&gt;load(&#039;credit_cards&#039;);

	// Check card type
	$type = strtolower($type);

	if ( ! isset($cards[$type]))
		return FALSE;

	// Check card number length
	$length = strlen($number);

	// Validate the card length by the card type
	if ( ! in_array($length, preg_split(&#039;/\D+/&#039;, $cards[$type][&#039;length&#039;])))
		return FALSE;

	// Check card number prefix
	if ( ! preg_match(&#039;/^&#039;.$cards[$type][&#039;prefix&#039;].&#039;/&#039;, $number))
		return FALSE;

	// No Luhn check required
	if ($cards[$type][&#039;luhn&#039;] == FALSE)
		return TRUE;

	return Valid::luhn($number);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="date"><small>public static</small>  date(<small>string</small> <span class="param" title="Date to check">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Tests if a string is a valid date string.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Date to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function date($str)
{
	return (strtotime($str) !== FALSE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decimal"><small>public static</small>  decimal(<small>string</small> <span class="param" title="Number to check">$str</span> [, <small>integer</small> <span class="param" title="Number of decimal places">$places</span> <small>= <small>integer</small> 2</small> , <small>integer</small> <span class="param" title="Number of digits">$digits</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks if a string is a proper decimal format. Optionally, a specific
number of digits can be checked too.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Number to check</li>
<li>
 <span class="blue">integer </span><strong> $places</strong> <small> = <small>integer</small> 2</small> - Number of decimal places</li>
<li>
 <span class="blue">integer </span><strong> $digits</strong> <small> = <small>NULL</small></small> - Number of digits</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function decimal($str, $places = 2, $digits = NULL)
{
	if ($digits &gt; 0)
	{
		// Specific number of digits
		$digits = &#039;{&#039;.( (int) $digits).&#039;}&#039;;
	}
	else
	{
		// Any number of digits
		$digits = &#039;+&#039;;
	}

	// Get the decimal point for the current locale
	list($decimal) = array_values(localeconv());

	return (bool) preg_match(&#039;/^[+-]?[0-9]&#039;.$digits.preg_quote($decimal).&#039;[0-9]{&#039;.( (int) $places).&#039;}$/D&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="digit"><small>public static</small>  digit(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>boolean</small> <span class="param" title="Trigger UTF-8 compatibility">$utf8</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks whether a string consists of digits only (no dots or dashes).</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">boolean </span><strong> $utf8</strong> <small> = <small>bool</small> FALSE</small> - Trigger UTF-8 compatibility</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function digit($str, $utf8 = FALSE)
{
	if ($utf8 === TRUE)
	{
		return (bool) preg_match(&#039;/^\pN++$/uD&#039;, $str);
	}
	else
	{
		return (is_int($str) AND $str &gt;= 0) OR ctype_digit($str);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="email"><small>public static</small>  email(<small>string</small> <span class="param" title="E-mail address">$email</span> [, <small>bool</small> <span class="param" title="Strict e-mail checking">$strict</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validates e-mail address</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $email</strong> <small>required</small> - E-mail address</li>
<li>
 <span class="blue">bool </span><strong> $strict</strong> <small> = <small>bool</small> FALSE</small> - Strict e-mail checking</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.iamcal.com/publish/articles/php/parsing_email/">http://www.iamcal.com/publish/articles/php/parsing_email/</a>, <a href="http://www.w3.org/Protocols/rfc822/"></a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function email($email, $strict = FALSE)
{
    if ($strict)
    {
        return filter_var(filter_var($email, FILTER_SANITIZE_STRING), FILTER_VALIDATE_EMAIL) !== FALSE;
    }
    else
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE;
    }
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="email_domain"><small>public static</small>  email_domain(<small>string</small> <span class="param" title="Email address">$email</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validate the domain of an email address by checking if the domain has a
valid MX record.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $email</strong> <small>required</small> - Email address</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://php.net/checkdnsrr">not added to Windows until PHP 5.3.0
</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function email_domain($email)
{
	if ( ! Valid::not_empty($email))
		return FALSE; // Empty fields cause issues with checkdnsrr()

	// Check if the email domain has a valid MX record
	return (bool) checkdnsrr(preg_replace(&#039;/^[^@]++@/&#039;, &#039;&#039;, $email), &#039;MX&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="equals"><small>public static</small>  equals(<small>string</small> <span class="param" title="Value">$value</span> , <small>string</small> <span class="param" title="Required value">$required</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks that a field is exactly the value required.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value</li>
<li>
 <span class="blue">string </span><strong> $required</strong> <small>required</small> - Required value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function equals($value, $required)
{
	return ($value === $required);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="exact_length"><small>public static</small>  exact_length(<small>string</small> <span class="param" title="Value">$value</span> , <small>integer|array</small> <span class="param" title="Exact length required, or array of valid lengths">$length</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks that a field is exactly the right length.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value</li>
<li>
 <span class="blue">integer|array </span><strong> $length</strong> <small>required</small> - Exact length required, or array of valid lengths</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function exact_length($value, $length)
{
	if (is_array($length))
	{
		foreach ($length as $strlen)
		{
			if (UTF8::strlen($value) === $strlen)
				return TRUE;
		}
		return FALSE;
	}

	return UTF8::strlen($value) === $length;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ip"><small>public static</small>  ip(<small>string</small> <span class="param" title="IP address">$ip</span> [, <small>boolean</small> <span class="param" title="Allow private IP networks">$allow_private</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validate an IP.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $ip</strong> <small>required</small> - IP address</li>
<li>
 <span class="blue">boolean </span><strong> $allow_private</strong> <small> = <small>bool</small> TRUE</small> - Allow private IP networks</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ip($ip, $allow_private = TRUE)
{
	// Do not allow reserved addresses
	$flags = FILTER_FLAG_NO_RES_RANGE;

	if ($allow_private === FALSE)
	{
		// Do not allow private or reserved addresses
		$flags = $flags | FILTER_FLAG_NO_PRIV_RANGE;
	}

	return (bool) filter_var($ip, FILTER_VALIDATE_IP, $flags);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="luhn"><small>public static</small>  luhn(<small>string</small> <span class="param" title="Number to check">$number</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validate a number against the <a href="http://en.wikipedia.org/wiki/Luhn_algorithm">Luhn</a>
(mod10) formula.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $number</strong> <small>required</small> - Number to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function luhn($number)
{
	// Force the value to be a string as this method uses string functions.
	// Converting to an integer may pass PHP_INT_MAX and result in an error!
	$number = (string) $number;

	if ( ! ctype_digit($number))
	{
		// Luhn can only be used on numbers!
		return FALSE;
	}

	// Check number length
	$length = strlen($number);

	// Checksum of the card number
	$checksum = 0;

	for ($i = $length - 1; $i &gt;= 0; $i -= 2)
	{
		// Add up every 2nd digit, starting from the right
		$checksum += substr($number, $i, 1);
	}

	for ($i = $length - 2; $i &gt;= 0; $i -= 2)
	{
		// Add up every 2nd digit doubled, starting from the right
		$double = substr($number, $i, 1) * 2;

		// Subtract 9 from the double where value is greater than 10
		$checksum += ($double &gt;= 10) ? ($double - 9) : $double;
	}

	// If the checksum is a multiple of 10, the number is valid
	return ($checksum % 10 === 0);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="matches"><small>public static</small>  matches(<small>array</small> <span class="param" title="Array of values">$array</span> , <small>string</small> <span class="param" title="Field name">$field</span> , <small>string</small> <span class="param" title="Field name to match">$match</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks if a field matches the value of another field.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array of values</li>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - Field name</li>
<li>
 <span class="blue">string </span><strong> $match</strong> <small>required</small> - Field name to match</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function matches($array, $field, $match)
{
	return ($array[$field] === $array[$match]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="max_length"><small>public static</small>  max_length(<small>string</small> <span class="param" title="Value">$value</span> , <small>integer</small> <span class="param" title="Maximum length required">$length</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks that a field is short enough.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small>required</small> - Maximum length required</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function max_length($value, $length)
{
	return UTF8::strlen($value) &lt;= $length;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="min_length"><small>public static</small>  min_length(<small>string</small> <span class="param" title="Value">$value</span> , <small>integer</small> <span class="param" title="Minimum length required">$length</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks that a field is long enough.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small>required</small> - Minimum length required</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function min_length($value, $length)
{
	return UTF8::strlen($value) &gt;= $length;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="not_empty"><small>public static</small>  not_empty()<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks if a field is not empty.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function not_empty($value)
{
	if (is_object($value) AND $value instanceof ArrayObject)
	{
		// Get the array from the ArrayObject
		$value = $value-&gt;getArrayCopy();
	}

	// Value cannot be NULL, FALSE, &#039;&#039;, or an empty array
	return ! in_array($value, [NULL, FALSE, &#039;&#039;, []], TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="numeric"><small>public static</small>  numeric(<small>string</small> <span class="param" title="Input string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks whether a string is a valid number (negative and decimal numbers allowed).</p>

<p>Uses {@link http://www.php.net/manual/en/function.localeconv.php locale conversion}
to allow decimal point to be locale specific.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function numeric($str)
{
	// Get the decimal point for the current locale
	list($decimal) = array_values(localeconv());

	// A lookahead is used to make sure the string contains at least one digit (before or after the decimal point)
	return (bool) preg_match(&#039;/^-?+(?=.*[0-9])[0-9]*+&#039;.preg_quote($decimal).&#039;?+[0-9]*+$/D&#039;, (string) $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="phone"><small>public static</small>  phone(<small>string</small> <span class="param" title="Phone number to check">$number</span> [, <small>array</small> <span class="param" title="$lengths">$lengths</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks if a phone number is valid.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $number</strong> <small>required</small> - Phone number to check</li>
<li>
 <span class="blue">array </span><strong> $lengths</strong> <small> = <small>NULL</small></small> - $lengths</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function phone($number, $lengths = NULL)
{
	if ( ! is_array($lengths))
	{
		$lengths = [7,10,11];
	}

	// Remove all non-digit characters from the number
	$number = preg_replace(&#039;/\D+/&#039;, &#039;&#039;, $number);

	// Check if the number is within range
	return in_array(strlen($number), $lengths);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="range"><small>public static</small>  range(<small>string</small> <span class="param" title="Number to check">$number</span> , <small>integer</small> <span class="param" title="Minimum value">$min</span> , <small>integer</small> <span class="param" title="Maximum value">$max</span> [, <small>integer</small> <span class="param" title="Increment size">$step</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Tests if a number is within a range.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $number</strong> <small>required</small> - Number to check</li>
<li>
 <span class="blue">integer </span><strong> $min</strong> <small>required</small> - Minimum value</li>
<li>
 <span class="blue">integer </span><strong> $max</strong> <small>required</small> - Maximum value</li>
<li>
 <span class="blue">integer </span><strong> $step</strong> <small> = <small>NULL</small></small> - Increment size</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function range($number, $min, $max, $step = NULL)
{
	if ($number &lt; $min OR $number &gt; $max)
	{
		// Number is outside of range
		return FALSE;
	}

	if ( ! $step)
	{
		// Default to steps of 1
		$step = 1;
	}

	// Check step requirements
	return (($number - $min) % $step === 0);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="regex"><small>public static</small>  regex(<small>string</small> <span class="param" title="Value">$value</span> , <small>string</small> <span class="param" title="Regular expression to match (including delimiters)">$expression</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Checks a field against a regular expression.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value</li>
<li>
 <span class="blue">string </span><strong> $expression</strong> <small>required</small> - Regular expression to match (including delimiters)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function regex($value, $expression)
{
	return (bool) preg_match($expression, (string) $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="url"><small>public static</small>  url(<small>string</small> <span class="param" title="URL">$url</span> )<small> (defined in <a href='/documentation/api/Kohana_Valid'>Kohana_Valid</a>)</small></h3>
<div class='description'><p>Validate a URL.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $url</strong> <small>required</small> - URL</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function url($url)
{
	// Based on http://www.apps.ietf.org/rfc/rfc1738.html#sec-5
	if ( ! preg_match(
		&#039;~^

		# scheme
		[-a-z0-9+.]++://

		# username:password (optional)
		(?:
			    [-a-z0-9$_.+!*\&#039;(),;?&amp;=%]++   # username
			(?::[-a-z0-9$_.+!*\&#039;(),;?&amp;=%]++)? # password (optional)
			@
		)?

		(?:
			# ip address
			\d{1,3}+(?:\.\d{1,3}+){3}+

			| # or

			# hostname (captured)
			(
				     (?!-)[-a-z0-9]{1,63}+(?&lt;!-)
				(?:\.(?!-)[-a-z0-9]{1,63}+(?&lt;!-)){0,126}+
			)
		)

		# port (optional)
		(?::\d{1,5}+)?

		# path (optional)
		(?:/.*)?

		$~iDx&#039;, $url, $matches))
		return FALSE;

	// We matched an IP address
	if ( ! isset($matches[1]))
		return TRUE;

	// Check maximum length of the whole hostname
	// http://en.wikipedia.org/wiki/Domain_name#cite_note-0
	if (strlen($matches[1]) &gt; 253)
		return FALSE;

	// An extra check for the top level domain
	// It must start with a letter
	$tld = ltrim(substr($matches[1], (int) strrpos($matches[1], &#039;.&#039;)), &#039;.&#039;);
	return ctype_alpha($tld[0]);
}</code>
</pre>
</div>
</div>
</div>