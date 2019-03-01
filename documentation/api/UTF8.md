---
layout: api
class: UTF8
---
<h1>UTF8</h1>
extends <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>
<br />
<p>
<i><p>A port of <a href="http://phputf8.sourceforge.net/">phputf8</a> to a unified set
of files. Provides multi-byte aware replacement string functions.</p>

<p>For UTF-8 support to work correctly, the following requirements must be met:</p>

<ul>
<li>PCRE needs to be compiled with UTF-8 support (--enable-utf8)</li>
<li>Support for <a href="http://php.net/manual/reference.pcre.pattern.modifiers.php">Unicode properties</a>
is highly recommended (--enable-unicode-properties)</li>
<li>The <a href="http://php.net/mbstring">mbstring extension</a> is highly recommended,
but must not be overloading string functions</li>
</ul>

<p class="note">This file is licensed differently from the rest of Kohana. As a port of
<a href="http://phputf8.sourceforge.net/">phputf8</a>, this file is released under the LGPL.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Base</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>copyright</dt>
<dd>(c) Kohana Team</dd>
<dd>(c) 2005 Harry Fuecks</dd>
<dt>license</dt>
<dd>http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt</dd>
</dl>
<br />
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a></p>
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
<a href="#property-called">$called</a>
</li>
<li>
<a href="#property-server_utf8">$server_utf8</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#clean">clean()</a>
</li>
<li>
<a href="#from_unicode">from_unicode()</a>
</li>
<li>
<a href="#is_ascii">is_ascii()</a>
</li>
<li>
<a href="#ltrim">ltrim()</a>
</li>
<li>
<a href="#ord">ord()</a>
</li>
<li>
<a href="#rtrim">rtrim()</a>
</li>
<li>
<a href="#str_ireplace">str_ireplace()</a>
</li>
<li>
<a href="#str_pad">str_pad()</a>
</li>
<li>
<a href="#str_split">str_split()</a>
</li>
<li>
<a href="#strcasecmp">strcasecmp()</a>
</li>
<li>
<a href="#strcspn">strcspn()</a>
</li>
<li>
<a href="#strip_ascii_ctrl">strip_ascii_ctrl()</a>
</li>
<li>
<a href="#strip_non_ascii">strip_non_ascii()</a>
</li>
<li>
<a href="#stristr">stristr()</a>
</li>
<li>
<a href="#strlen">strlen()</a>
</li>
<li>
<a href="#strpos">strpos()</a>
</li>
<li>
<a href="#strrev">strrev()</a>
</li>
<li>
<a href="#strrpos">strrpos()</a>
</li>
<li>
<a href="#strspn">strspn()</a>
</li>
<li>
<a href="#strtolower">strtolower()</a>
</li>
<li>
<a href="#strtoupper">strtoupper()</a>
</li>
<li>
<a href="#substr">substr()</a>
</li>
<li>
<a href="#substr_replace">substr_replace()</a>
</li>
<li>
<a href="#to_unicode">to_unicode()</a>
</li>
<li>
<a href="#transliterate_to_ascii">transliterate_to_ascii()</a>
</li>
<li>
<a href="#trim">trim()</a>
</li>
<li>
<a href="#ucfirst">ucfirst()</a>
</li>
<li>
<a href="#ucwords">ucwords()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-called'><small>public static</small>  <span class='blue'>array</span> $called</h4>
</dt>
<dd>
 <p>List of called methods that have had their required file included.</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-server_utf8'><small>public static</small>  <span class='blue'>boolean</span> $server_utf8</h4>
</dt>
<dd>
 <p>Does the server support UTF-8 natively?</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="clean"><small>public static</small>  clean(<small>mixed</small> <span class="param" title="Variable to clean">$var</span> [, <small>string</small> <span class="param" title="Character set, defaults to Kohana::$charset">$charset</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Recursively cleans arrays, objects, and strings. Removes ASCII control
codes and converts to the requested charset while silently discarding
incompatible characters.</p>

<pre><code>UTF8::clean($_GET); // Clean GET data
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $var</strong> <small>required</small> - Variable to clean</li>
<li>
 <span class="blue">string </span><strong> $charset</strong> <small> = <small>NULL</small></small> - Character set, defaults to Kohana::$charset</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#clean">UTF8::clean</a>, <a href="#strip_ascii_ctrl">UTF8::strip_ascii_ctrl</a>, <a href="#is_ascii">UTF8::is_ascii</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function clean($var, $charset = NULL)
{
	if ( ! $charset)
	{
		// Use the application character set
		$charset = Kohana::$charset;
	}

	if (is_array($var) OR is_object($var))
	{
		foreach ($var as $key =&gt; $val)
		{
			// Recursion!
			$var[UTF8::clean($key)] = UTF8::clean($val);
		}
	}
	elseif (is_string($var) AND $var !== &#039;&#039;)
	{
		// Remove control characters
		$var = UTF8::strip_ascii_ctrl($var);

		if ( ! UTF8::is_ascii($var))
		{
			// Temporarily save the mb_substitute_character() value into a variable
			$mb_substitute_character = mb_substitute_character();

			// Disable substituting illegal characters with the default &#039;?&#039; character
			mb_substitute_character(&#039;none&#039;);

			// convert encoding, this is expensive, used when $var is not ASCII
			$var = mb_convert_encoding($var, $charset, $charset);

			// Reset mb_substitute_character() value back to the original setting
			mb_substitute_character($mb_substitute_character);
		}
	}

	return $var;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="from_unicode"><small>public static</small>  from_unicode(<small>array</small> <span class="param" title="$str unicode code points representing a string">$arr</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Takes an array of ints representing the Unicode characters and returns a UTF-8 string.
Astral planes are supported i.e. the ints in the input can be > 0xFFFF.
Occurrences of the BOM are ignored. Surrogates are not allowed.</p>

<pre><code>$str = UTF8::to_unicode($array);
</code></pre>

<p>The Original Code is Mozilla Communicator client code.
The Initial Developer of the Original Code is Netscape Communications Corporation.
Portions created by the Initial Developer are Copyright (C) 1998 the Initial Developer.
Ported to PHP by Henri Sivonen <a href="&#109;&#x61;i&#108;&#x74;&#111;&#58;&#x68;&#115;&#105;&#x76;&#111;&#110;&#x65;&#110;&#x40;&#x69;&#107;&#x69;&#x2e;&#102;&#x69;">&#x68;&#115;&#105;&#x76;&#111;&#110;&#x65;&#110;&#x40;&#x69;&#107;&#x69;&#x2e;&#102;&#x69;</a>, see http://hsivonen.iki.fi/php-utf8/
Slight modifications to fit with phputf8 library by Harry Fuecks <a href="&#109;&#97;&#x69;&#x6c;&#116;&#111;&#58;&#x68;&#x66;&#117;&#101;&#x63;&#x6b;s&#64;&#103;&#x6d;&#x61;&#105;&#108;&#x2e;&#x63;o&#109;">&#x68;&#x66;&#117;&#101;&#x63;&#x6b;s&#64;&#103;&#x6d;&#x61;&#105;&#108;&#x2e;&#x63;o&#109;</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $arr</strong> <small>required</small> - $str    unicode code points representing a string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Utf8 string of characters 
</li><li>
<span class='blue'>boolean</span>  - FALSE if a code point cannot be found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function from_unicode($arr)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _from_unicode($arr);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_ascii"><small>public static</small>  is_ascii(<small>mixed</small> <span class="param" title="String or array of strings to check">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Tests whether a string contains only 7-bit ASCII bytes. This is used to
determine when to use native functions or UTF-8 functions.</p>

<pre><code>$ascii = UTF8::is_ascii($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $str</strong> <small>required</small> - String or array of strings to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function is_ascii($str)
{
	if (is_array($str))
	{
		$str = implode($str);
	}

	return ! preg_match(&#039;/[^\x00-\x7F]/S&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ltrim"><small>public static</small>  ltrim(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>string</small> <span class="param" title="String of characters to remove">$charlist</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Strips whitespace (or other UTF-8 characters) from the beginning of
a string. This is a UTF8-aware version of <a href="http://php.net/ltrim">ltrim</a>.</p>

<pre><code>$str = UTF8::ltrim($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $charlist</strong> <small> = <small>NULL</small></small> - String of characters to remove</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ltrim($str, $charlist = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _ltrim($str, $charlist);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ord"><small>public static</small>  ord(<small>string</small> <span class="param" title="UTF-8 encoded character">$chr</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Returns the unicode ordinal for a character. This is a UTF8-aware
version of <a href="http://php.net/ord">ord</a>.</p>

<pre><code>$digit = UTF8::ord($character);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $chr</strong> <small>required</small> - UTF-8 encoded character</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ord($chr)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _ord($chr);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rtrim"><small>public static</small>  rtrim(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>string</small> <span class="param" title="String of characters to remove">$charlist</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Strips whitespace (or other UTF-8 characters) from the end of a string.
This is a UTF8-aware version of <a href="http://php.net/rtrim">rtrim</a>.</p>

<pre><code>$str = UTF8::rtrim($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $charlist</strong> <small> = <small>NULL</small></small> - String of characters to remove</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function rtrim($str, $charlist = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _rtrim($str, $charlist);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="str_ireplace"><small>public static</small>  str_ireplace(<small>string|array</small> <span class="param" title="Text to replace">$search</span> , <small>string|array</small> <span class="param" title="Replacement text">$replace</span> , <small>string|array</small> <span class="param" title="Subject text">$str</span> [, <small>integer</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Number of matched and replaced needles will be returned via this parameter which is passed by reference">$count</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Returns a string or an array with all occurrences of search in subject
(ignoring case) and replaced with the given replace value. This is a
UTF8-aware version of <a href="http://php.net/str_ireplace">str_ireplace</a>.</p>

<p class="note">This function is very slow compared to the native version. Avoid
using it when possible.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|array </span><strong> $search</strong> <small>required</small> - Text to replace</li>
<li>
 <span class="blue">string|array </span><strong> $replace</strong> <small>required</small> - Replacement text</li>
<li>
 <span class="blue">string|array </span><strong> $str</strong> <small>required</small> - Subject text</li>
<li>
byref  <span class="blue">integer </span><strong> $count</strong> <small> = <small>NULL</small></small> - Number of matched and replaced needles will be returned via this parameter which is passed by reference</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - If the input was a string 
</li><li>
<span class='blue'>array</span>  - If the input was an array 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function str_ireplace($search, $replace, $str, &amp; $count = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _str_ireplace($search, $replace, $str, $count);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="str_pad"><small>public static</small>  str_pad(<small>string</small> <span class="param" title="Input string">$str</span> , <small>integer</small> <span class="param" title="Desired string length after padding">$final_str_length</span> [, <small>string</small> <span class="param" title="String to use as padding">$pad_str</span> <small>= <small>string</small><span>(1)</span> " "</small> , <small>string</small> <span class="param" title="Padding type: STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH">$pad_type</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Pads a UTF-8 string to a certain length with another string. This is a
UTF8-aware version of <a href="http://php.net/str_pad">str_pad</a>.</p>

<pre><code>$str = UTF8::str_pad($str, $length);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">integer </span><strong> $final_str_length</strong> <small>required</small> - Desired string length after padding</li>
<li>
 <span class="blue">string </span><strong> $pad_str</strong> <small> = <small>string</small><span>(1)</span> " "</small> - String to use as padding</li>
<li>
 <span class="blue">string </span><strong> $pad_type</strong> <small> = <small>integer</small> 1</small> - Padding type: STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function str_pad($str, $final_str_length, $pad_str = &#039; &#039;, $pad_type = STR_PAD_RIGHT)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _str_pad($str, $final_str_length, $pad_str, $pad_type);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="str_split"><small>public static</small>  str_split(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>integer</small> <span class="param" title="Maximum length of each chunk">$split_length</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Converts a UTF-8 string to an array. This is a UTF8-aware version of
<a href="http://php.net/str_split">str_split</a>.</p>

<pre><code>$array = UTF8::str_split($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">integer </span><strong> $split_length</strong> <small> = <small>integer</small> 1</small> - Maximum length of each chunk</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function str_split($str, $split_length = 1)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _str_split($str, $split_length);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strcasecmp"><small>public static</small>  strcasecmp(<small>string</small> <span class="param" title="String to compare">$str1</span> , <small>string</small> <span class="param" title="String to compare">$str2</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Case-insensitive UTF-8 string comparison. This is a UTF8-aware version
of <a href="http://php.net/strcasecmp">strcasecmp</a>.</p>

<pre><code>$compare = UTF8::strcasecmp($str1, $str2);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str1</strong> <small>required</small> - String to compare</li>
<li>
 <span class="blue">string </span><strong> $str2</strong> <small>required</small> - String to compare</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - Less than 0 if str1 is less than str2 
</li><li>
<span class='blue'>integer</span>  - Greater than 0 if str1 is greater than str2 
</li><li>
<span class='blue'>integer</span>  - 0 if they are equal 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strcasecmp($str1, $str2)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strcasecmp($str1, $str2);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strcspn"><small>public static</small>  strcspn(<small>string</small> <span class="param" title="Input string">$str</span> , <small>string</small> <span class="param" title="Mask for search">$mask</span> [, <small>integer</small> <span class="param" title="Start position of the string to examine">$offset</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Length of the string to examine">$length</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Finds the length of the initial segment not matching mask. This is a
UTF8-aware version of <a href="http://php.net/strcspn">strcspn</a>.</p>

<pre><code>$found = UTF8::strcspn($str, $mask);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $mask</strong> <small>required</small> - Mask for search</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small> = <small>NULL</small></small> - Start position of the string to examine</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>NULL</small></small> - Length of the string to examine</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - Length of the initial segment that contains characters not in the mask 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strcspn($str, $mask, $offset = NULL, $length = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strcspn($str, $mask, $offset, $length);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strip_ascii_ctrl"><small>public static</small>  strip_ascii_ctrl(<small>string</small> <span class="param" title="String to clean">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Strips out device control codes in the ASCII range.</p>

<pre><code>$str = UTF8::strip_ascii_ctrl($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to clean</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strip_ascii_ctrl($str)
{
	return preg_replace(&#039;/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S&#039;, &#039;&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strip_non_ascii"><small>public static</small>  strip_non_ascii(<small>string</small> <span class="param" title="String to clean">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Strips out all non-7bit ASCII bytes.</p>

<pre><code>$str = UTF8::strip_non_ascii($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to clean</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strip_non_ascii($str)
{
	return preg_replace(&#039;/[^\x00-\x7F]+/S&#039;, &#039;&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="stristr"><small>public static</small>  stristr(<small>string</small> <span class="param" title="Input string">$str</span> , <small>string</small> <span class="param" title="Needle">$search</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Case-insensitive UTF-8 version of strstr. Returns all of input string
from the first occurrence of needle to the end. This is a UTF8-aware
version of <a href="http://php.net/stristr">stristr</a>.</p>

<pre><code>$found = UTF8::stristr($str, $search);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $search</strong> <small>required</small> - Needle</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Matched substring if found 
</li><li>
<span class='blue'>FALSE</span>  - If the substring was not found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function stristr($str, $search)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _stristr($str, $search);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strlen"><small>public static</small>  strlen(<small>string</small> <span class="param" title="String being measured for length">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Returns the length of the given string. This is a UTF8-aware version
of <a href="http://php.net/strlen">strlen</a>.</p>

<pre><code>$length = UTF8::strlen($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String being measured for length</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a>, <a href="#property:charset">Kohana::$charset</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strlen($str)
{
	if (UTF8::$server_utf8)
		return mb_strlen($str, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strlen($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strpos"><small>public static</small>  strpos(<small>string</small> <span class="param" title="Haystack">$str</span> , <small>string</small> <span class="param" title="Needle">$search</span> [, <small>integer</small> <span class="param" title="Offset from which character in haystack to start searching">$offset</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Finds position of first occurrence of a UTF-8 string. This is a
UTF8-aware version of <a href="http://php.net/strpos">strpos</a>.</p>

<pre><code>$position = UTF8::strpos($str, $search);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Haystack</li>
<li>
 <span class="blue">string </span><strong> $search</strong> <small>required</small> - Needle</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small> = <small>integer</small> 0</small> - Offset from which character in haystack to start searching</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a>, <a href="#property:charset">Kohana::$charset</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - Position of needle 
</li><li>
<span class='blue'>boolean</span>  - FALSE if the needle is not found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strpos($str, $search, $offset = 0)
{
	if (UTF8::$server_utf8)
		return mb_strpos($str, $search, $offset, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strpos($str, $search, $offset);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strrev"><small>public static</small>  strrev(<small>string</small> <span class="param" title="String to be reversed">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Reverses a UTF-8 string. This is a UTF8-aware version of <a href="http://php.net/strrev">strrev</a>.</p>

<pre><code>$str = UTF8::strrev($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to be reversed</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strrev($str)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strrev($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strrpos"><small>public static</small>  strrpos(<small>string</small> <span class="param" title="Haystack">$str</span> , <small>string</small> <span class="param" title="Needle">$search</span> [, <small>integer</small> <span class="param" title="Offset from which character in haystack to start searching">$offset</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Finds position of last occurrence of a char in a UTF-8 string. This is
a UTF8-aware version of <a href="http://php.net/strrpos">strrpos</a>.</p>

<pre><code>$position = UTF8::strrpos($str, $search);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Haystack</li>
<li>
 <span class="blue">string </span><strong> $search</strong> <small>required</small> - Needle</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small> = <small>integer</small> 0</small> - Offset from which character in haystack to start searching</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - Position of needle 
</li><li>
<span class='blue'>boolean</span>  - FALSE if the needle is not found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strrpos($str, $search, $offset = 0)
{
	if (UTF8::$server_utf8)
		return mb_strrpos($str, $search, $offset, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strrpos($str, $search, $offset);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strspn"><small>public static</small>  strspn(<small>string</small> <span class="param" title="Input string">$str</span> , <small>string</small> <span class="param" title="Mask for search">$mask</span> [, <small>integer</small> <span class="param" title="Start position of the string to examine">$offset</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Length of the string to examine">$length</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Finds the length of the initial segment matching mask. This is a
UTF8-aware version of <a href="http://php.net/strspn">strspn</a>.</p>

<pre><code>$found = UTF8::strspn($str, $mask);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $mask</strong> <small>required</small> - Mask for search</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small> = <small>NULL</small></small> - Start position of the string to examine</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>NULL</small></small> - Length of the string to examine</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - Length of the initial segment that contains characters in the mask 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strspn($str, $mask, $offset = NULL, $length = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strspn($str, $mask, $offset, $length);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strtolower"><small>public static</small>  strtolower(<small>string</small> <span class="param" title="Mixed case string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Makes a UTF-8 string lowercase. This is a UTF8-aware version
of <a href="http://php.net/strtolower">strtolower</a>.</p>

<pre><code>$str = UTF8::strtolower($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Mixed case string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a>, <a href="#property:charset">Kohana::$charset</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strtolower($str)
{
	if (UTF8::$server_utf8)
		return mb_strtolower($str, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strtolower($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strtoupper"><small>public static</small>  strtoupper(<small>string</small> <span class="param" title="Mixed case string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Makes a UTF-8 string uppercase. This is a UTF8-aware version
of <a href="http://php.net/strtoupper">strtoupper</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Mixed case string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a>, <a href="#property:charset">Kohana::$charset</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strtoupper($str)
{
	if (UTF8::$server_utf8)
		return mb_strtoupper($str, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _strtoupper($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="substr"><small>public static</small>  substr(<small>string</small> <span class="param" title="Input string">$str</span> , <small>integer</small> <span class="param" title="Offset">$offset</span> [, <small>integer</small> <span class="param" title="Length limit">$length</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Returns part of a UTF-8 string. This is a UTF8-aware version
of <a href="http://php.net/substr">substr</a>.</p>

<pre><code>$sub = UTF8::substr($str, $offset);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small>required</small> - Offset</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>NULL</small></small> - Length limit</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Chris Smith <chris@jalakai.co.uk></li>
<li>Uses - <a href="#property:server_utf8">UTF8::$server_utf8</a>, <a href="#property:charset">Kohana::$charset</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function substr($str, $offset, $length = NULL)
{
	if (UTF8::$server_utf8)
		return ($length === NULL)
			? mb_substr($str, $offset, mb_strlen($str), Kohana::$charset)
			: mb_substr($str, $offset, $length, Kohana::$charset);

	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _substr($str, $offset, $length);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="substr_replace"><small>public static</small>  substr_replace(<small>string</small> <span class="param" title="Input string">$str</span> , <small>string</small> <span class="param" title="Replacement string">$replacement</span> , <small>integer</small> <span class="param" title="Offset">$offset</span> [, $length <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Replaces text within a portion of a UTF-8 string. This is a UTF8-aware
version of <a href="http://php.net/substr_replace">substr_replace</a>.</p>

<pre><code>$str = UTF8::substr_replace($str, $replacement, $offset);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $replacement</strong> <small>required</small> - Replacement string</li>
<li>
 <span class="blue">integer </span><strong> $offset</strong> <small>required</small> - Offset</li>
<li>
 <span class="blue">unknown </span><strong> $length</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function substr_replace($str, $replacement, $offset, $length = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _substr_replace($str, $replacement, $offset, $length);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="to_unicode"><small>public static</small>  to_unicode(<small>string</small> <span class="param" title="UTF-8 encoded string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Takes an UTF-8 string and returns an array of ints representing the Unicode characters.
Astral planes are supported i.e. the ints in the output can be > 0xFFFF.
Occurrences of the BOM are ignored. Surrogates are not allowed.</p>

<pre><code>$array = UTF8::to_unicode($str);
</code></pre>

<p>The Original Code is Mozilla Communicator client code.
The Initial Developer of the Original Code is Netscape Communications Corporation.
Portions created by the Initial Developer are Copyright (C) 1998 the Initial Developer.
Ported to PHP by Henri Sivonen <a href="&#109;&#x61;i&#108;&#x74;&#111;&#58;&#x68;&#115;&#105;&#x76;&#111;&#110;&#x65;&#110;&#x40;&#x69;&#107;&#x69;&#x2e;&#102;&#x69;">&#x68;&#115;&#105;&#x76;&#111;&#110;&#x65;&#110;&#x40;&#x69;&#107;&#x69;&#x2e;&#102;&#x69;</a>, see <a href="http://hsivonen.iki.fi/php-utf8/">http://hsivonen.iki.fi/php-utf8/</a>
Slight modifications to fit with phputf8 library by Harry Fuecks <a href="&#109;&#97;&#x69;&#x6c;&#116;&#111;&#58;&#x68;&#x66;&#117;&#101;&#x63;&#x6b;s&#64;&#103;&#x6d;&#x61;&#105;&#108;&#x2e;&#x63;o&#109;">&#x68;&#x66;&#117;&#101;&#x63;&#x6b;s&#64;&#103;&#x6d;&#x61;&#105;&#108;&#x2e;&#x63;o&#109;</a></p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - UTF-8 encoded string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Unicode code points 
</li><li>
<span class='blue'>FALSE</span>  - If the string is invalid 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function to_unicode($str)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _to_unicode($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="transliterate_to_ascii"><small>public static</small>  transliterate_to_ascii(<small>string</small> <span class="param" title="String to transliterate">$str</span> [, <small>integer</small> <span class="param" title="-1 lowercase only, +1 uppercase only, 0 both cases">$case</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Replaces special/accented UTF-8 characters by ASCII-7 "equivalents".</p>

<pre><code>$ascii = UTF8::transliterate_to_ascii($utf8);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to transliterate</li>
<li>
 <span class="blue">integer </span><strong> $case</strong> <small> = <small>integer</small> 0</small> - -1 lowercase only, +1 uppercase only, 0 both cases</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function transliterate_to_ascii($str, $case = 0)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _transliterate_to_ascii($str, $case);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="trim"><small>public static</small>  trim(<small>string</small> <span class="param" title="Input string">$str</span> [, <small>string</small> <span class="param" title="String of characters to remove">$charlist</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Strips whitespace (or other UTF-8 characters) from the beginning and
end of a string. This is a UTF8-aware version of <a href="http://php.net/trim">trim</a>.</p>

<pre><code>$str = UTF8::trim($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Input string</li>
<li>
 <span class="blue">string </span><strong> $charlist</strong> <small> = <small>NULL</small></small> - String of characters to remove</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Andreas Gohr <andi@splitbrain.org></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function trim($str, $charlist = NULL)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _trim($str, $charlist);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ucfirst"><small>public static</small>  ucfirst(<small>string</small> <span class="param" title="Mixed case string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Makes a UTF-8 string's first character uppercase. This is a UTF8-aware
version of <a href="http://php.net/ucfirst">ucfirst</a>.</p>

<pre><code>$str = UTF8::ucfirst($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Mixed case string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ucfirst($str)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _ucfirst($str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ucwords"><small>public static</small>  ucwords(<small>string</small> <span class="param" title="Mixed case string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_UTF8'>Kohana_UTF8</a>)</small></h3>
<div class='description'><p>Makes the first character of every word in a UTF-8 string uppercase.
This is a UTF8-aware version of <a href="http://php.net/ucwords">ucwords</a>.</p>

<pre><code>$str = UTF8::ucwords($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Mixed case string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Harry Fuecks <hfuecks@gmail.com></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ucwords($str)
{
	if ( ! isset(UTF8::$called[__FUNCTION__]))
	{
		require Kohana::find_file(&#039;utf8&#039;, __FUNCTION__);

		// Function has been called
		UTF8::$called[__FUNCTION__] = TRUE;
	}

	return _ucwords($str);
}</code>
</pre>
</div>
</div>
</div>