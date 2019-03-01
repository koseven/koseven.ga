---
layout: api
class: Kohana_HTTP_Header
---
<h1>Kohana_HTTP_Header</h1>
extends <a href='/documentation/api/ArrayObject'>ArrayObject</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Countable'>Countable</a> | <a href='/documentation/api/Serializable'>Serializable</a> | <a href='/documentation/api/ArrayAccess'>ArrayAccess</a> | <a href='/documentation/api/Traversable'>Traversable</a> | <a href='/documentation/api/IteratorAggregate'>IteratorAggregate</a></small>
</p>
<p>
<i><p>The Kohana_HTTP_Header class provides an Object-Orientated interface
to HTTP headers. This can parse header arrays returned from the
PHP functions <code>apache_request_headers()</code> or the <code>http_parse_headers()</code>
function available within the PECL HTTP library.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>HTTP</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>since</dt>
<dd>3.1.0</dd>
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
<a href='#constant-DEFAULT_QUALITY'>DEFAULT_QUALITY</a>
</li>
<li>
<a href='#constant-STD_PROP_LIST'>STD_PROP_LIST</a>
</li>
<li>
<a href='#constant-ARRAY_AS_PROPS'>ARRAY_AS_PROPS</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-_accept_charset">$_accept_charset</a>
</li>
<li>
<a href="#property-_accept_content">$_accept_content</a>
</li>
<li>
<a href="#property-_accept_encoding">$_accept_encoding</a>
</li>
<li>
<a href="#property-_accept_language">$_accept_language</a>
</li>
<li>
<a href="#property-_accept_language_list">$_accept_language_list</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#accept_quality">accept_quality()</a>
</li>
<li>
<a href="#accepts_at_quality">accepts_at_quality()</a>
</li>
<li>
<a href="#accepts_charset_at_quality">accepts_charset_at_quality()</a>
</li>
<li>
<a href="#accepts_encoding_at_quality">accepts_encoding_at_quality()</a>
</li>
<li>
<a href="#accepts_language_at_quality">accepts_language_at_quality()</a>
</li>
<li>
<a href="#create_cache_control">create_cache_control()</a>
</li>
<li>
<a href="#exchangeArray">exchangeArray()</a>
</li>
<li>
<a href="#offsetExists">offsetExists()</a>
</li>
<li>
<a href="#offsetGet">offsetGet()</a>
</li>
<li>
<a href="#offsetSet">offsetSet()</a>
</li>
<li>
<a href="#offsetUnset">offsetUnset()</a>
</li>
<li>
<a href="#parse_accept_header">parse_accept_header()</a>
</li>
<li>
<a href="#parse_cache_control">parse_cache_control()</a>
</li>
<li>
<a href="#parse_charset_header">parse_charset_header()</a>
</li>
<li>
<a href="#parse_encoding_header">parse_encoding_header()</a>
</li>
<li>
<a href="#parse_header_string">parse_header_string()</a>
</li>
<li>
<a href="#parse_language_header">parse_language_header()</a>
</li>
<li>
<a href="#preferred_accept">preferred_accept()</a>
</li>
<li>
<a href="#preferred_charset">preferred_charset()</a>
</li>
<li>
<a href="#preferred_encoding">preferred_encoding()</a>
</li>
<li>
<a href="#preferred_language">preferred_language()</a>
</li>
<li>
<a href="#send_headers">send_headers()</a>
</li>
<li>
<a href="#append">append()</a>
</li>
<li>
<a href="#asort">asort()</a>
</li>
<li>
<a href="#count">count()</a>
</li>
<li>
<a href="#getArrayCopy">getArrayCopy()</a>
</li>
<li>
<a href="#getFlags">getFlags()</a>
</li>
<li>
<a href="#getIterator">getIterator()</a>
</li>
<li>
<a href="#getIteratorClass">getIteratorClass()</a>
</li>
<li>
<a href="#ksort">ksort()</a>
</li>
<li>
<a href="#natcasesort">natcasesort()</a>
</li>
<li>
<a href="#natsort">natsort()</a>
</li>
<li>
<a href="#serialize">serialize()</a>
</li>
<li>
<a href="#setFlags">setFlags()</a>
</li>
<li>
<a href="#setIteratorClass">setIteratorClass()</a>
</li>
<li>
<a href="#uasort">uasort()</a>
</li>
<li>
<a href="#uksort">uksort()</a>
</li>
<li>
<a href="#unserialize">unserialize()</a>
</li>
<li>
<a href="#_order_languages_as_received">_order_languages_as_received()</a>
</li>
<li>
<a href="#_parse_language_header_as_list">_parse_language_header_as_list()</a>
</li>
<li>
<a href="#_send_headers_to_php">_send_headers_to_php()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-DEFAULT_QUALITY'>DEFAULT_QUALITY</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-STD_PROP_LIST'>STD_PROP_LIST</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-ARRAY_AS_PROPS'>ARRAY_AS_PROPS</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_accept_charset'><small>protected</small>  <span class='blue'>array</span> $_accept_charset</h4>
</dt>
<dd>
 <p>Accept-Charset: parsed header</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_accept_content'><small>protected</small>  <span class='blue'>array</span> $_accept_content</h4>
</dt>
<dd>
 <p>Accept: (content) types</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_accept_encoding'><small>protected</small>  <span class='blue'>array</span> $_accept_encoding</h4>
</dt>
<dd>
 <p>Accept-Encoding: parsed header</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_accept_language'><small>protected</small>  <span class='blue'>array</span> $_accept_language</h4>
</dt>
<dd>
 <p>Accept-Language: parsed header</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_accept_language_list'><small>protected</small>  <span class='blue'>array</span> $_accept_language_list</h4>
</dt>
<dd>
 <p>Accept-Language: language list of parsed header</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>mixed</small> <span class="param" title="Input array">$input</span> <small>= <small>array</small><span>(0)</span> </small> , <small>int</small> <span class="param" title="Flags">$flags</span> <small>= <small>integer</small> 0</small> , <small>string</small> <span class="param" title="The iterator class to use">$iterator_class</span> <small>= <small>string</small><span>(13)</span> "ArrayIterator"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Constructor method for <a href="/index.php/">Kohana_HTTP_Header</a>. Uses the standard constructor
of the parent <code>ArrayObject</code> class.</p>

<pre><code>$header_object = new HTTP_Header(array('x-powered-by' =&gt; 'Kohana 3.1.x', 'expires' =&gt; '...'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $input</strong> <small> = <small>array</small><span>(0)</span> </small> - Input array</li>
<li>
 <span class="blue">int </span><strong> $flags</strong> <small> = <small>integer</small> 0</small> - Flags</li>
<li>
 <span class="blue">string </span><strong> $iterator_class</strong> <small> = <small>string</small><span>(13)</span> "ArrayIterator"</small> - The iterator class to use</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $input = [], $flags = 0, $iterator_class = &#039;ArrayIterator&#039;)
{
	/**
	 * @link http://www.w3.org/Protocols/rfc2616/rfc2616.html
	 *
	 * HTTP header declarations should be treated as case-insensitive
	 */
	$input = array_change_key_case( (array) $input, CASE_LOWER);

	parent::__construct($input, $flags, $iterator_class);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the header object as a string, including
the terminating new line</p>

<pre><code>// Return the header as a string
echo (string) $request-&gt;headers();
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
<code class="language-php">public function __toString()
{
	$header = &#039;&#039;;

	foreach ($this as $key =&gt; $value)
	{
		// Put the keys back the Case-Convention expected
		$key = Text::ucfirst($key);

		if (is_array($value))
		{
			$header .= $key.&#039;: &#039;.(implode(&#039;, &#039;, $value)).&quot;\r\n&quot;;
		}
		else
		{
			$header .= $key.&#039;: &#039;.$value.&quot;\r\n&quot;;
		}
	}

	return $header.&quot;\r\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accept_quality"><small>public static</small>  accept_quality(<small>array</small> <span class="param" title="Accept header parts">$parts</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses an Accept(-*) header and detects the quality</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $parts</strong> <small>required</small> - Accept header parts</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function accept_quality(array $parts)
{
	$parsed = [];

	// Resource light iteration
	$parts_keys = array_keys($parts);
	foreach ($parts_keys as $key)
	{
		$value = trim(str_replace([&quot;\r&quot;, &quot;\n&quot;], &#039;&#039;, $parts[$key]));

		$pattern = &#039;~\b(\;\s*+)?q\s*+=\s*+([.0-9]+)~&#039;;

		// If there is no quality directive, return default
		if ( ! preg_match($pattern, $value, $quality))
		{
			$parsed[$value] = (float) HTTP_Header::DEFAULT_QUALITY;
		}
		else
		{
			$quality = $quality[2];

			if ($quality[0] === &#039;.&#039;)
			{
				$quality = &#039;0&#039;.$quality;
			}

			// Remove the quality value from the string and apply quality
			$parsed[trim(preg_replace($pattern, &#039;&#039;, $value, 1), &#039;; &#039;)] = (float) $quality;
		}
	}

	return $parsed;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accepts_at_quality"><small>public</small>  accepts_at_quality(<small>string</small> <span class="param" title="$type">$type</span> [, <small>boolean</small> <span class="param" title="Explicit check, excludes `*`">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the accept quality of a submitted mime type based on the
request <code>Accept:</code> header. If the <code>$explicit</code> argument is <code>TRUE</code>,
only precise matches will be returned, excluding all wildcard (<code>*</code>)
directives.</p>

<pre><code>// Accept: application/xml; application/json; q=.5; text/html; q=.2, text/*
// Accept quality for application/json

// $quality = 0.5
$quality = $request-&gt;headers()-&gt;accepts_at_quality('application/json');

// $quality_explicit = FALSE
$quality_explicit = $request-&gt;headers()-&gt;accepts_at_quality('text/plain', TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - $type</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - Explicit check, excludes `*`</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function accepts_at_quality($type, $explicit = FALSE)
{
	// Parse Accept header if required
	if ($this-&gt;_accept_content === NULL)
	{
		if ($this-&gt;offsetExists(&#039;Accept&#039;))
		{
			$accept = $this-&gt;offsetGet(&#039;Accept&#039;);
		}
		else
		{
			$accept = &#039;*/*&#039;;
		}

		$this-&gt;_accept_content = HTTP_Header::parse_accept_header($accept);
	}

	// If not a real mime, try and find it in config
	if (strpos($type, &#039;/&#039;) === FALSE)
	{
		$mime = Kohana::$config-&gt;load(&#039;mimes.&#039;.$type);

		if ($mime === NULL)
			return FALSE;

		$quality = FALSE;

		foreach ($mime as $_type)
		{
			$quality_check = $this-&gt;accepts_at_quality($_type, $explicit);
			$quality = ($quality_check &gt; $quality) ? $quality_check : $quality;
		}

		return $quality;
	}

	$parts = explode(&#039;/&#039;, $type, 2);

	if (isset($this-&gt;_accept_content[$parts[0]][$parts[1]]))
	{
		return $this-&gt;_accept_content[$parts[0]][$parts[1]];
	}
	elseif ($explicit === TRUE)
	{
		return FALSE;
	}
	else
	{
		if (isset($this-&gt;_accept_content[$parts[0]][&#039;*&#039;]))
		{
			return $this-&gt;_accept_content[$parts[0]][&#039;*&#039;];
		}
		elseif (isset($this-&gt;_accept_content[&#039;*&#039;][&#039;*&#039;]))
		{
			return $this-&gt;_accept_content[&#039;*&#039;][&#039;*&#039;];
		}
		else
		{
			return FALSE;
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accepts_charset_at_quality"><small>public</small>  accepts_charset_at_quality(<small>string</small> <span class="param" title="Charset to examine">$charset</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the quality of the supplied <code>$charset</code> argument. This method
will automatically parse the <code>Accept-Charset</code> header if present and
return the associated resolved quality value.</p>

<pre><code> // Accept-Charset: utf-8, utf-16; q=.8, iso-8859-1; q=.5
 $quality = $header-&gt;accepts_charset_at_quality('utf-8');
       // $quality = (float) 1
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $charset</strong> <small>required</small> - Charset to examine</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>float</span>  - The quality of the charset 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function accepts_charset_at_quality($charset)
{
	if ($this-&gt;_accept_charset === NULL)
	{
		if ($this-&gt;offsetExists(&#039;Accept-Charset&#039;))
		{
			$charset_header = strtolower($this-&gt;offsetGet(&#039;Accept-Charset&#039;));
			$this-&gt;_accept_charset = HTTP_Header::parse_charset_header($charset_header);
		}
		else
		{
			$this-&gt;_accept_charset = HTTP_Header::parse_charset_header(NULL);
		}
	}

	$charset = strtolower($charset);

	if (isset($this-&gt;_accept_charset[$charset]))
	{
		return $this-&gt;_accept_charset[$charset];
	}
	elseif (isset($this-&gt;_accept_charset[&#039;*&#039;]))
	{
		return $this-&gt;_accept_charset[&#039;*&#039;];
	}
	elseif ($charset === &#039;iso-8859-1&#039;)
	{
		return (float) 1;
	}

	return (float) 0;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accepts_encoding_at_quality"><small>public</small>  accepts_encoding_at_quality(<small>string</small> <span class="param" title="Encoding type to interrogate">$encoding</span> [, <small>boolean</small> <span class="param" title="Explicit check, ignoring wildcards and `identity`">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the quality of the <code>$encoding</code> type passed to it. Encoding
is usually compression such as <code>gzip</code>, but could be some other
message encoding algorithm. This method allows explicit checks to be
done ignoring wildcards.</p>

<pre><code> // Accept-Encoding: compress, gzip, *; q=.5
 $encoding = $header-&gt;accepts_encoding_at_quality('gzip');
 // $encoding = (float) 1.0s
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $encoding</strong> <small>required</small> - Encoding type to interrogate</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - Explicit check, ignoring wildcards and `identity`</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>float</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function accepts_encoding_at_quality($encoding, $explicit = FALSE)
{
	if ($this-&gt;_accept_encoding === NULL)
	{
		if ($this-&gt;offsetExists(&#039;Accept-Encoding&#039;))
		{
			$encoding_header = $this-&gt;offsetGet(&#039;Accept-Encoding&#039;);
		}
		else
		{
			$encoding_header = NULL;
		}

		$this-&gt;_accept_encoding = HTTP_Header::parse_encoding_header($encoding_header);
	}

	// Normalize the encoding
	$encoding = strtolower($encoding);

	if (isset($this-&gt;_accept_encoding[$encoding]))
	{
		return $this-&gt;_accept_encoding[$encoding];
	}

	if ($explicit === FALSE)
	{
		if (isset($this-&gt;_accept_encoding[&#039;*&#039;]))
		{
			return $this-&gt;_accept_encoding[&#039;*&#039;];
		}
		elseif ($encoding === &#039;identity&#039;)
		{
			return (float) HTTP_Header::DEFAULT_QUALITY;
		}
	}

	return (float) 0;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accepts_language_at_quality"><small>public</small>  accepts_language_at_quality(<small>string</small> <span class="param" title="Language to interrogate">$language</span> [, <small>boolean</small> <span class="param" title="Explicit interrogation, `TRUE` ignores wildcards">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the quality of <code>$language</code> supplied, optionally ignoring
wildcards if <code>$explicit</code> is set to a non-<code>FALSE</code> value. If the quality
is not found, <code>0.0</code> is returned.</p>

<pre><code>// Accept-Language: en-us, en-gb; q=.7, en; q=.5
$lang = $header-&gt;accepts_language_at_quality('en-gb');
// $lang = (float) 0.7

$lang2 = $header-&gt;accepts_language_at_quality('en-au');
// $lang2 = (float) 0.5

$lang3 = $header-&gt;accepts_language_at_quality('en-au', TRUE);
// $lang3 = (float) 0.0
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $language</strong> <small>required</small> - Language to interrogate</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - Explicit interrogation, `TRUE` ignores wildcards</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>float</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function accepts_language_at_quality($language, $explicit = FALSE)
{
	if ($this-&gt;_accept_language === NULL)
	{
		if ($this-&gt;offsetExists(&#039;Accept-Language&#039;))
		{
			$language_header = strtolower($this-&gt;offsetGet(&#039;Accept-Language&#039;));
		}
		else
		{
			$language_header = NULL;
		}

		$this-&gt;_accept_language = HTTP_Header::parse_language_header($language_header);
	}

	// Normalize the language
	$language_parts = explode(&#039;-&#039;, strtolower($language), 2);

	if (isset($this-&gt;_accept_language[$language_parts[0]]))
	{
		if (isset($language_parts[1]))
		{
			if (isset($this-&gt;_accept_language[$language_parts[0]][$language_parts[1]]))
			{
				return $this-&gt;_accept_language[$language_parts[0]][$language_parts[1]];
			}
			elseif ($explicit === FALSE AND isset($this-&gt;_accept_language[$language_parts[0]][&#039;*&#039;]))
			{
				return $this-&gt;_accept_language[$language_parts[0]][&#039;*&#039;];
			}
		}
		elseif (isset($this-&gt;_accept_language[$language_parts[0]][&#039;*&#039;]))
		{
			return $this-&gt;_accept_language[$language_parts[0]][&#039;*&#039;];
		}
	}

	if ($explicit === FALSE AND isset($this-&gt;_accept_language[&#039;*&#039;]))
	{
		return $this-&gt;_accept_language[&#039;*&#039;];
	}

	return (float) 0;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_cache_control"><small>public static</small>  create_cache_control(<small>array</small> <span class="param" title="Cache-Control to render to string">$cache_control</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Generates a Cache-Control HTTP header based on the supplied array.</p>

<pre><code>// Set the cache control headers you want to use
$cache_control = array(
    'max-age'          =&gt; 3600,
    'must-revalidate',
    'public'
);

// Create the cache control header, creates :
// cache-control: max-age=3600, must-revalidate, public
$response-&gt;headers('Cache-Control', HTTP_Header::create_cache_control($cache_control);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $cache_control</strong> <small>required</small> - Cache-Control to render to string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html#sec13">http://www.w3.org/Protocols/rfc2616/rfc2616-sec13.html#sec13</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function create_cache_control(array $cache_control)
{
	$parts = [];

	foreach ($cache_control as $key =&gt; $value)
	{
		$parts[] = (is_int($key)) ? $value : ($key.&#039;=&#039;.$value);
	}

	return implode(&#039;, &#039;, $parts);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="exchangeArray"><small>public</small>  exchangeArray(<small>mixed</small> <span class="param" title="$input">$input</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Overloads the <code>ArrayObject::exchangeArray()</code> method to ensure that
all keys are changed to lowercase.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $input</strong> <small>required</small> - $input</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function exchangeArray($input)
{
	/**
	 * @link http://www.w3.org/Protocols/rfc2616/rfc2616.html
	 *
	 * HTTP header declarations should be treated as case-insensitive
	 */
	$input = array_change_key_case( (array) $input, CASE_LOWER);

	return parent::exchangeArray($input);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetExists"><small>public</small>  offsetExists(<small>string</small> <span class="param" title="$index">$index</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Overloads the <code>ArrayObject::offsetExists()</code> method to ensure keys
are lowercase.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $index</strong> <small>required</small> - $index</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetExists($index)
{
	return parent::offsetExists(strtolower($index));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetGet"><small>public</small>  offsetGet(<small>string</small> <span class="param" title="Index to retrieve">$index</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Overload the <code>ArrayObject::offsetGet()</code> method to ensure that all
keys passed to it are formatted correctly for this object.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $index</strong> <small>required</small> - Index to retrieve</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetGet($index)
{
	return parent::offsetGet(strtolower($index));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetSet"><small>public</small>  offsetSet(<small>mixed</small> <span class="param" title="Index to set `$newval` to">$index</span> , <small>mixed</small> <span class="param" title="New value to set">$newval</span> [, <small>boolean</small> <span class="param" title="Replace existing value">$replace</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Overloads <code>ArrayObject::offsetSet()</code> to enable handling of header
with multiple instances of the same directive. If the <code>$replace</code> flag
is <code>FALSE</code>, the header will be appended rather than replacing the
original setting.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $index</strong> <small>required</small> - Index to set `$newval` to</li>
<li>
 <span class="blue">mixed </span><strong> $newval</strong> <small>required</small> - New value to set</li>
<li>
 <span class="blue">boolean </span><strong> $replace</strong> <small> = <small>bool</small> TRUE</small> - Replace existing value</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetSet($index, $newval, $replace = TRUE)
{
	// Ensure the index is lowercase
	$index = strtolower($index);

	if ($replace OR ! $this-&gt;offsetExists($index))
	{
		return parent::offsetSet($index, $newval);
	}

	$current_value = $this-&gt;offsetGet($index);

	if (is_array($current_value))
	{
		$current_value[] = $newval;
	}
	else
	{
		$current_value = [$current_value, $newval];
	}

	return parent::offsetSet($index, $current_value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetUnset"><small>public</small>  offsetUnset(<small>string</small> <span class="param" title="$index">$index</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Overloads the <code>ArrayObject::offsetUnset()</code> method to ensure keys
are lowercase.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $index</strong> <small>required</small> - $index</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetUnset($index)
{
	return parent::offsetUnset(strtolower($index));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_accept_header"><small>public static</small>  parse_accept_header([ <small>string</small> <span class="param" title="Accept content header string to parse">$accepts</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the accept header to provide the correct quality values
for each supplied accept type.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $accepts</strong> <small> = <small>NULL</small></small> - Accept content header string to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.1">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.1</a></li>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_accept_header($accepts = NULL)
{
	$accepts = explode(&#039;,&#039;, (string) $accepts);

	// If there is no accept, lets accept everything
	if ($accepts === NULL)
		return [&#039;*&#039; =&gt; [&#039;*&#039; =&gt; (float) HTTP_Header::DEFAULT_QUALITY]];

	// Parse the accept header qualities
	$accepts = HTTP_Header::accept_quality($accepts);

	$parsed_accept = [];

	// This method of iteration uses less resource
	$keys = array_keys($accepts);
	foreach ($keys as $key)
	{
		// Extract the parts
		$parts = explode(&#039;/&#039;, $key, 2);

		// Invalid content type- bail
		if ( ! isset($parts[1]))
			continue;

		// Set the parsed output
		$parsed_accept[$parts[0]][$parts[1]] = $accepts[$key];
	}

	return $parsed_accept;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_cache_control"><small>public static</small>  parse_cache_control(<small>array</small> <span class="param" title="Array of headers">$cache_control</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the Cache-Control header and returning an array representation of the Cache-Control
header.</p>

<pre><code>// Create the cache control header
$response-&gt;headers('cache-control', 'max-age=3600, must-revalidate, public');

// Parse the cache control header
if ($cache_control = HTTP_Header::parse_cache_control($response-&gt;headers('cache-control')))
{
     // Cache-Control header was found
     $maxage = $cache_control['max-age'];
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $cache_control</strong> <small>required</small> - Array of headers</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_cache_control($cache_control)
{
	$directives = explode(&#039;,&#039;, strtolower($cache_control));

	if ($directives === FALSE)
		return FALSE;

	$output = [];

	foreach ($directives as $directive)
	{
		if (strpos($directive, &#039;=&#039;) !== FALSE)
		{
			list($key, $value) = explode(&#039;=&#039;, trim($directive), 2);

			$output[$key] = ctype_digit($value) ? (int) $value : $value;
		}
		else
		{
			$output[] = trim($directive);
		}
	}

	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_charset_header"><small>public static</small>  parse_charset_header([ <small>string</small> <span class="param" title="Charset string to parse">$charset</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the <code>Accept-Charset:</code> HTTP header and returns an array containing
the charset and associated quality.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $charset</strong> <small> = <small>NULL</small></small> - Charset string to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.2">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.2</a></li>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_charset_header($charset = NULL)
{
	if ($charset === NULL)
	{
		return [&#039;*&#039; =&gt; (float) HTTP_Header::DEFAULT_QUALITY];
	}

	return HTTP_Header::accept_quality(explode(&#039;,&#039;, (string) $charset));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_encoding_header"><small>public static</small>  parse_encoding_header([ <small>string</small> <span class="param" title="Charset string to parse">$encoding</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the <code>Accept-Encoding:</code> HTTP header and returns an array containing
the charsets and associated quality.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $encoding</strong> <small> = <small>NULL</small></small> - Charset string to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.3">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.3</a></li>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_encoding_header($encoding = NULL)
{
	// Accept everything
	if ($encoding === NULL)
	{
		return [&#039;*&#039; =&gt; (float) HTTP_Header::DEFAULT_QUALITY];
	}
	elseif ($encoding === &#039;&#039;)
	{
		return [&#039;identity&#039; =&gt; (float) HTTP_Header::DEFAULT_QUALITY];
	}
	else
	{
		return HTTP_Header::accept_quality(explode(&#039;,&#039;, (string) $encoding));
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_header_string"><small>public</small>  parse_header_string(<small>resource</small> <span class="param" title="The resource (required by Curl API)">$resource</span> , <small>string</small> <span class="param" title="The line from the header to parse">$header_line</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses a HTTP Message header line and applies it to this HTTP_Header</p>

<pre><code>$header = $response-&gt;headers();
$header-&gt;parse_header_string(NULL, 'content-type: application/json');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">resource </span><strong> $resource</strong> <small>required</small> - The resource (required by Curl API)</li>
<li>
 <span class="blue">string </span><strong> $header_line</strong> <small>required</small> - The line from the header to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>int</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function parse_header_string($resource, $header_line)
{
	if (preg_match_all(&#039;/(\w[^\s:]*):[ ]*([^\r\n]*(?:\r\n[ \t][^\r\n]*)*)/&#039;, $header_line, $matches))
	{
		foreach ($matches[0] as $key =&gt; $value)
		{
			$this-&gt;offsetSet($matches[1][$key], $matches[2][$key], FALSE);
		}
	}

	return strlen($header_line);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_language_header"><small>public static</small>  parse_language_header([ <small>string</small> <span class="param" title="Charset string to parse">$language</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the <code>Accept-Language:</code> HTTP header and returns an array containing
the languages and associated quality.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $language</strong> <small> = <small>NULL</small></small> - Charset string to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4</a></li>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_language_header($language = NULL)
{
	if ($language === NULL)
	{
		return [&#039;*&#039; =&gt; [&#039;*&#039; =&gt; (float) HTTP_Header::DEFAULT_QUALITY]];
	}

	$language = HTTP_Header::accept_quality(explode(&#039;,&#039;, (string) $language));

	$parsed_language = [];

	$keys = array_keys($language);
	foreach ($keys as $key)
	{
		// Extract the parts
		$parts = explode(&#039;-&#039;, $key, 2);

		// Invalid content type- bail
		if ( ! isset($parts[1]))
		{
			$parsed_language[$parts[0]][&#039;*&#039;] = $language[$key];
		}
		else
		{
			// Set the parsed output
			$parsed_language[$parts[0]][$parts[1]] = $language[$key];
		}
	}

	return $parsed_language;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="preferred_accept"><small>public</small>  preferred_accept(<small>array</small> <span class="param" title="The content types to examine">$types</span> [, <small>boolean</small> <span class="param" title="Only allow explicit references, no wildcards">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the preferred response content type based on the accept header
quality settings. If items have the same quality value, the first item
found in the array supplied as <code>$types</code> will be returned.</p>

<pre><code>// Get the preferred acceptable content type
// Accept: text/html, application/json; q=.8, text/*
$result = $header-&gt;preferred_accept(array(
    'text/html'
    'text/rtf',
    'application/json'
)); // $result = 'application/json'

$result = $header-&gt;preferred_accept(array(
    'text/rtf',
    'application/xml'
), TRUE); // $result = FALSE (none matched explicitly)
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $types</strong> <small>required</small> - The content types to examine</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - Only allow explicit references, no wildcards</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Name of the preferred content type 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function preferred_accept(array $types, $explicit = FALSE)
{
	$preferred = FALSE;
	$ceiling = 0;

	foreach ($types as $type)
	{
		$quality = $this-&gt;accepts_at_quality($type, $explicit);

		if ($quality &gt; $ceiling)
		{
			$preferred = $type;
			$ceiling = $quality;
		}
	}

	return $preferred;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="preferred_charset"><small>public</small>  preferred_charset(<small>array</small> <span class="param" title="Charsets to test">$charsets</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the preferred charset from the supplied array <code>$charsets</code> based
on the <code>Accept-Charset</code> header directive.</p>

<pre><code> // Accept-Charset: utf-8, utf-16; q=.8, iso-8859-1; q=.5
 $charset = $header-&gt;preferred_charset(array(
     'utf-10', 'ascii', 'utf-16', 'utf-8'
 )); // $charset = 'utf-8'
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $charsets</strong> <small>required</small> - Charsets to test</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Preferred charset or `FALSE` 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function preferred_charset(array $charsets)
{
	$preferred = FALSE;
	$ceiling = 0;

	foreach ($charsets as $charset)
	{
		$quality = $this-&gt;accepts_charset_at_quality($charset);

		if ($quality &gt; $ceiling)
		{
			$preferred = $charset;
			$ceiling = $quality;
		}
	}

	return $preferred;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="preferred_encoding"><small>public</small>  preferred_encoding(<small>array</small> <span class="param" title="Encodings to test against">$encodings</span> [, <small>boolean</small> <span class="param" title="Explicit check, if `TRUE` wildcards are excluded">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the preferred message encoding type based on quality, and can
optionally ignore wildcard references. If two or more encodings have the
same quality, the first listed in <code>$encodings</code> will be returned.</p>

<pre><code>// Accept-Encoding: compress, gzip, *; q.5
$encoding = $header-&gt;preferred_encoding(array(
     'gzip', 'bzip', 'blowfish'
));
// $encoding = 'gzip';
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $encodings</strong> <small>required</small> - Encodings to test against</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - Explicit check, if `TRUE` wildcards are excluded</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function preferred_encoding(array $encodings, $explicit = FALSE)
{
	$ceiling = 0;
	$preferred = FALSE;

	foreach ($encodings as $encoding)
	{
		$quality = $this-&gt;accepts_encoding_at_quality($encoding, $explicit);

		if ($quality &gt; $ceiling)
		{
			$ceiling = $quality;
			$preferred = $encoding;
		}
	}

	return $preferred;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="preferred_language"><small>public</small>  preferred_language(<small>array</small> <span class="param" title="$languages">$languages</span> [, <small>boolean</small> <span class="param" title="$explicit">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the preferred language from the supplied array <code>$languages</code> based
on the <code>Accept-Language</code> header directive.</p>

<pre><code> // Accept-Language: en-us, en-gb; q=.7, en; q=.5
 $lang = $header-&gt;preferred_language(array(
     'en-gb', 'en-au', 'fr', 'es'
 )); // $lang = 'en-gb'
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $languages</strong> <small>required</small> - $languages</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - $explicit</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function preferred_language(array $languages, $explicit = FALSE)
{
	$ceiling   = 0;
	$preferred = FALSE;
	$languages = $this-&gt;_order_languages_as_received($languages, $explicit);

	foreach ($languages as $language)
	{
		$quality = $this-&gt;accepts_language_at_quality($language, $explicit);

		if ($quality &gt; $ceiling)
		{
			$ceiling = $quality;
			$preferred = $language;
		}
	}

	return $preferred;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="send_headers"><small>public</small>  send_headers([ <small>HTTP_Response</small> <span class="param" title="Header to send">$response</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Replace existing value">$replace</span> <small>= <small>bool</small> FALSE</small> , <small>callback</small> <span class="param" title="Optional callback to replace PHP header function">$callback</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Sends headers to the php processor, or supplied <code>$callback</code> argument.
This method formats the headers correctly for output, re-instating their
capitalization for transmission.</p>

<p class="note">if you supply a custom header handler via <code>$callback</code>, it is
 recommended that <code>$response</code> is returned</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">HTTP_Response </span><strong> $response</strong> <small> = <small>NULL</small></small> - Header to send</li>
<li>
 <span class="blue">boolean </span><strong> $replace</strong> <small> = <small>bool</small> FALSE</small> - Replace existing value</li>
<li>
 <span class="blue">callback </span><strong> $callback</strong> <small> = <small>NULL</small></small> - Optional callback to replace PHP header function</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function send_headers(HTTP_Response $response = NULL, $replace = FALSE, $callback = NULL)
{
	$protocol = $response-&gt;protocol();
	$status = $response-&gt;status();

	// Create the response header
	$processed_headers = [$protocol.&#039; &#039;.$status.&#039; &#039;.Response::$messages[$status]];

	// Get the headers array
	$headers = $response-&gt;headers()-&gt;getArrayCopy();

	foreach ($headers as $header =&gt; $value)
	{
		if (is_array($value))
		{
			$value = implode(&#039;, &#039;, $value);
		}

		$processed_headers[] = Text::ucfirst($header).&#039;: &#039;.$value;
	}

	if ( ! isset($headers[&#039;content-type&#039;]))
	{
		$processed_headers[] = &#039;Content-Type: &#039;.Kohana::$content_type.&#039;; charset=&#039;.Kohana::$charset;
	}

	if (Kohana::$expose AND ! isset($headers[&#039;x-powered-by&#039;]))
	{
		$processed_headers[] = &#039;X-Powered-By: &#039;.Kohana::version();
	}

	// Get the cookies and apply
	if ($cookies = $response-&gt;cookie())
	{
		$processed_headers[&#039;Set-Cookie&#039;] = $cookies;
	}

	if (is_callable($callback))
	{
		// Use the callback method to set header
		return call_user_func($callback, $response, $processed_headers, $replace);
	}
	else
	{
		$this-&gt;_send_headers_to_php($processed_headers, $replace);
		return $response;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="append"><small>public</small>  append()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="asort"><small>public</small>  asort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="count"><small>public</small>  count()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getArrayCopy"><small>public</small>  getArrayCopy()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getFlags"><small>public</small>  getFlags()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getIterator"><small>public</small>  getIterator()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getIteratorClass"><small>public</small>  getIteratorClass()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="ksort"><small>public</small>  ksort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="natcasesort"><small>public</small>  natcasesort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="natsort"><small>public</small>  natsort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="serialize"><small>public</small>  serialize()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="setFlags"><small>public</small>  setFlags()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="setIteratorClass"><small>public</small>  setIteratorClass()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="uasort"><small>public</small>  uasort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="uksort"><small>public</small>  uksort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="unserialize"><small>public</small>  unserialize()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="_order_languages_as_received"><small>protected</small>  _order_languages_as_received(<small>array</small> <span class="param" title="Languages to order">$languages</span> [, <small>boolean</small> <span class="param" title="$explicit">$explicit</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Returns the reordered list of supplied <code>$languages</code> using the order
from the <code>Accept-Language:</code> HTTP header.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $languages</strong> <small>required</small> - Languages to order</li>
<li>
 <span class="blue">boolean </span><strong> $explicit</strong> <small> = <small>bool</small> FALSE</small> - $explicit</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.3.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _order_languages_as_received(array $languages, $explicit = FALSE)
{
	if ($this-&gt;_accept_language_list === NULL)
	{
		if ($this-&gt;offsetExists(&#039;Accept-Language&#039;))
		{
			$language_header = strtolower($this-&gt;offsetGet(&#039;Accept-Language&#039;));
		}
		else
		{
			$language_header = NULL;
		}

		$this-&gt;_accept_language_list = HTTP_Header::_parse_language_header_as_list($language_header);
	}

	$new_order = [];

	foreach ($this-&gt;_accept_language_list as $accept_language)
	{
		foreach ($languages as $key =&gt; $language)
		{
			if (($explicit AND $accept_language == $language) OR
				( ! $explicit AND substr($accept_language, 0, 2) == substr($language, 0, 2)))
			{
				$new_order[] = $language;

				unset($languages[$key]);
			}
		}
	}

	foreach ($languages as $language)
	{
		$new_order[] = $language;
	}

	return $new_order;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_parse_language_header_as_list"><small>protected static</small>  _parse_language_header_as_list([ <small>string</small> <span class="param" title="Charset string to parse">$language</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Parses the <code>Accept-Language:</code> HTTP header and returns an array containing
the language names.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $language</strong> <small> = <small>NULL</small></small> - Charset string to parse</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.3.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _parse_language_header_as_list($language = NULL)
{
	$languages = [];
	$language  = explode(&#039;,&#039;, strtolower($language));

	foreach ($language as $lang)
	{
		$matches = [];

		if (preg_match(&#039;/([\w-]+)\s*(;.*q.*)?/&#039;, $lang, $matches))
		{
			$languages[] = $matches[1];
		}
	}

	return $languages;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_send_headers_to_php"><small>protected</small>  _send_headers_to_php(<small>array</small> <span class="param" title="Headers to send to php">$headers</span> , <small>boolean</small> <span class="param" title="Replace existing headers">$replace</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Header'>Kohana_HTTP_Header</a>)</small></h3>
<div class='description'><p>Sends the supplied headers to the PHP output buffer. If cookies
are included in the message they will be handled appropriately.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $headers</strong> <small>required</small> - Headers to send to php</li>
<li>
 <span class="blue">boolean </span><strong> $replace</strong> <small>required</small> - Replace existing headers</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.2.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>self</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _send_headers_to_php(array $headers, $replace)
{
	// If the headers have been sent, get out
	if (headers_sent())
		return $this;

	foreach ($headers as $key =&gt; $line)
	{
		if ($key == &#039;Set-Cookie&#039; AND is_array($line))
		{
			// Send cookies
			foreach ($line as $name =&gt; $value)
			{
				Cookie::set($name, $value[&#039;value&#039;], $value[&#039;expiration&#039;]);
			}

			continue;
		}

		header($line, $replace);
	}

	return $this;
}</code>
</pre>
</div>
</div>
</div>