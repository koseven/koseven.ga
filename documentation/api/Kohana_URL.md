---
layout: api
class: Kohana_URL
---
<h1>Kohana_URL</h1>
<p>
<i><p>URL helper class.</p>

<p class="note">You need to setup the list of trusted hosts in the <code>url.php</code> config file, before starting using this helper class.</p>
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
<a href="#base">base()</a>
</li>
<li>
<a href="#is_trusted_host">is_trusted_host()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#site">site()</a>
</li>
<li>
<a href="#title">title()</a>
</li>
<li>
<a href="#_rawurlencode_callback">_rawurlencode_callback()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="base"><small>public static</small>  base([ <small>mixed</small> <span class="param" title="Protocol string, [Request], or boolean">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Add index file to URL?">$index</span> <small>= <small>bool</small> FALSE</small> , <small>string</small> <span class="param" title="Subdomain string">$subdomain</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Gets the base URL to the application.
To specify a protocol, provide the protocol as a string or request object.
If a protocol is used, a complete URL will be generated using the
<code>$_SERVER['HTTP_HOST']</code> variable, which will be validated against RFC 952
and RFC 2181, as well as against the list of trusted hosts you have set
in the <code>url.php</code> config file.</p>

<pre><code>// Absolute URL path with no host or protocol
echo URL::base();

// Absolute URL path with host, https protocol and index.php if set
echo URL::base('https', TRUE);

// Absolute URL path with host, https protocol and subdomain part
// prepended or replaced with given value
echo URL::base('https', FALSE, 'subdomain');

// Absolute URL path with host and protocol from $request
echo URL::base($request);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol string, [Request], or boolean</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> FALSE</small> - Add index file to URL?</li>
<li>
 <span class="blue">string </span><strong> $subdomain</strong> <small> = <small>NULL</small></small> - Subdomain string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:index_file">Kohana::$index_file</a>, <a href="#protocol">Request::protocol()</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function base($protocol = NULL, $index = FALSE, $subdomain = NULL)
{
	// Start with the configured base URL
	$base_url = Kohana::$base_url;

	if ($protocol === TRUE)
	{
		// Use the initial request to get the protocol
		$protocol = Request::$initial;
	}

	if ($protocol instanceof Request)
	{
		if ( ! $protocol-&gt;secure())
		{
			// Use the current protocol
			list($protocol) = explode(&#039;/&#039;, strtolower($protocol-&gt;protocol()));
		}
		else
		{
			$protocol = &#039;https&#039;;
		}
	}

	if ( ! $protocol)
	{
		// Use the configured default protocol
		$protocol = parse_url($base_url, PHP_URL_SCHEME);
	}

	if ($index === TRUE AND ! empty(Kohana::$index_file))
	{
		// Add the index file to the URL
		$base_url .= Kohana::$index_file.&#039;/&#039;;
	}

	if (is_string($protocol))
	{
		if ($port = parse_url($base_url, PHP_URL_PORT))
		{
			// Found a port, make it usable for the URL
			$port = &#039;:&#039;.$port;
		}

		if ($host = parse_url($base_url, PHP_URL_HOST))
		{
			// Remove everything but the path from the URL
			$base_url = parse_url($base_url, PHP_URL_PATH);
		}
		else
		{
			// Attempt to use HTTP_HOST and fallback to SERVER_NAME
			$host = isset($_SERVER[&#039;HTTP_HOST&#039;]) ? $_SERVER[&#039;HTTP_HOST&#039;] : $_SERVER[&#039;SERVER_NAME&#039;];
		}

		// If subdomain passed, then prepend to host or replace existing subdomain
		if (NULL !== $subdomain)
		{
			if (FALSE === strstr($host, &#039;.&#039;))
			{
				$host = $subdomain.&#039;.&#039;.$host;
			}
			else
			{
				// Get the domain part of host eg. example.com, then prepend subdomain
				$host = $subdomain.&#039;.&#039;.implode(&#039;.&#039;, array_slice(explode(&#039;.&#039;, $host), -2));
			}
		}

		// make $host lowercase
		$host = strtolower($host);

		// check that host does not contain forbidden characters (see RFC 952 and RFC 2181)
		// use preg_replace() instead of preg_match() to prevent DoS attacks with long host names
		if ($host &amp;&amp; &#039;&#039; !== preg_replace(&#039;/(?:^\[)?[a-zA-Z0-9-:\]_]+\.?/&#039;, &#039;&#039;, $host)) {
			throw new Kohana_Exception(
				&#039;Invalid host :host&#039;,
				[&#039;:host&#039; =&gt; $host]
			);
		}

		// Validate $host, see if it matches trusted hosts
		if ( ! static::is_trusted_host($host))
		{
			throw new Kohana_Exception(
				&#039;Untrusted host :host. If you trust :host, add it to the trusted hosts in the `url` config file.&#039;,
				[&#039;:host&#039; =&gt; $host]
			);
		}

		// Add the protocol and domain to the base URL
		$base_url = $protocol.&#039;://&#039;.$host.$port.$base_url;
	}

	return $base_url;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_trusted_host"><small>public static</small>  is_trusted_host(<small>string</small> <span class="param" title="$host">$host</span> [, <small>array</small> <span class="param" title="$trusted_hosts">$trusted_hosts</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Test if given $host should be trusted.</p>

<p>Tests against given $trusted_hosts
or looks for key <code>trusted_hosts</code> in <code>url</code> config</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $host</strong> <small>required</small> - $host</li>
<li>
 <span class="blue">array </span><strong> $trusted_hosts</strong> <small> = <small>NULL</small></small> - $trusted_hosts</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  - TRUE if $host is trustworthy 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function is_trusted_host($host, array $trusted_hosts = NULL)
{

	// If list of trusted hosts is not directly provided read from config
	if (empty($trusted_hosts))
	{
		$trusted_hosts = (array) Kohana::$config-&gt;load(&#039;url&#039;)-&gt;get(&#039;trusted_hosts&#039;);
	}

	// loop through the $trusted_hosts array for a match
	foreach ($trusted_hosts as $trusted_host)
	{

		// make sure we fully match the trusted hosts
		$pattern = &#039;#^&#039;.$trusted_host.&#039;$#uD&#039;;

		// return TRUE if there is match
		if (preg_match($pattern, $host)) {
			return TRUE;
		}

	}

	// return FALSE as nothing is matched
	return FALSE;

}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>public static</small>  query([ <small>array</small> <span class="param" title="Array of GET parameters">$params</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include current request GET parameters">$use_get</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Merges the current GET parameters with an array of new or overloaded
parameters and returns the resulting query string.</p>

<pre><code>// Returns "?sort=title&amp;limit=10" combined with any existing GET values
$query = URL::query(array('sort' =&gt; 'title', 'limit' =&gt; 10));
</code></pre>

<p>Typically you would use this when you are sorting query results,
or something similar.</p>

<p class="note">Parameters with a NULL value are left out.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - Array of GET parameters</li>
<li>
 <span class="blue">boolean </span><strong> $use_get</strong> <small> = <small>bool</small> TRUE</small> - Include current request GET parameters</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function query(array $params = NULL, $use_get = TRUE)
{
	if ($use_get)
	{
		if ($params === NULL)
		{
			// Use only the current parameters
			$params = $_GET;
		}
		else
		{
			// Merge the current and new parameters
			$params = Arr::merge($_GET, $params);
		}
	}

	if (empty($params))
	{
		// No query parameters
		return &#039;&#039;;
	}

	// Note: http_build_query returns an empty string for a params array with only NULL values
	$query = http_build_query($params, &#039;&#039;, &#039;&amp;&#039;);

	// Don&#039;t prepend &#039;?&#039; to an empty string
	return ($query === &#039;&#039;) ? &#039;&#039; : (&#039;?&#039;.$query);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="site"><small>public static</small>  site([ <small>string</small> <span class="param" title="Site URI to convert">$uri</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>mixed</small> <span class="param" title="Protocol string or [Request] class to use protocol from">$protocol</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Include the index_page in the URL">$index</span> <small>= <small>bool</small> TRUE</small> , <small>string</small> <span class="param" title="Subdomain string">$subdomain</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Fetches an absolute site URL based on a URI segment.</p>

<pre><code>echo URL::site('foo/bar');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>string</small><span>(0)</span> ""</small> - Site URI to convert</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol string or [Request] class to use protocol from</li>
<li>
 <span class="blue">boolean </span><strong> $index</strong> <small> = <small>bool</small> TRUE</small> - Include the index_page in the URL</li>
<li>
 <span class="blue">string </span><strong> $subdomain</strong> <small> = <small>NULL</small></small> - Subdomain string</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#base">URL::base</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function site($uri = &#039;&#039;, $protocol = NULL, $index = TRUE, $subdomain = NULL)
{
	// Chop off possible scheme, host, port, user and pass parts
	$path = preg_replace(&#039;~^[-a-z0-9+.]++://[^/]++/?~&#039;, &#039;&#039;, trim($uri, &#039;/&#039;));

	if ( ! UTF8::is_ascii($path))
	{
		// Encode all non-ASCII characters, as per RFC 1738
		$path = preg_replace_callback(&#039;~([^/#]+)~&#039;, &#039;URL::_rawurlencode_callback&#039;, $path);
	}

	// Concat the URL
	return URL::base($protocol, $index, $subdomain).$path;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="title"><small>public static</small>  title(<small>string</small> <span class="param" title="Phrase to convert">$title</span> [, <small>string</small> <span class="param" title="Word separator (any single character)">$separator</span> <small>= <small>string</small><span>(1)</span> "-"</small> , <small>boolean</small> <span class="param" title="Transliterate to ASCII?">$ascii_only</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Convert a phrase to a URL-safe title.</p>

<pre><code>echo URL::title('My Blog Post'); // "my-blog-post"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $title</strong> <small>required</small> - Phrase to convert</li>
<li>
 <span class="blue">string </span><strong> $separator</strong> <small> = <small>string</small><span>(1)</span> "-"</small> - Word separator (any single character)</li>
<li>
 <span class="blue">boolean </span><strong> $ascii_only</strong> <small> = <small>bool</small> FALSE</small> - Transliterate to ASCII?</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#transliterate_to_ascii">UTF8::transliterate_to_ascii</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function title($title, $separator = &#039;-&#039;, $ascii_only = FALSE)
{
	if ($ascii_only)
	{
		// Transliterate non-ASCII characters
		if (extension_loaded(&#039;intl&#039;))
		{
			$title = transliterator_transliterate(&#039;Any-Latin;Latin-ASCII&#039;, $title);
		} 
		else
		{
			$title = UTF8::transliterate_to_ascii($title);
		}

		// Remove all characters that are not the separator, a-z, 0-9, or whitespace
		$title = preg_replace(&#039;![^&#039;.preg_quote($separator).&#039;a-z0-9\s]+!&#039;, &#039;&#039;, strtolower($title));
	}
	else
	{
		// Remove all characters that are not the separator, letters, numbers, or whitespace
		$title = preg_replace(&#039;![^&#039;.preg_quote($separator).&#039;\pL\pN\s]+!u&#039;, &#039;&#039;, UTF8::strtolower($title));
	}

	// Replace all separator characters and whitespace by a single separator
	$title = preg_replace(&#039;![&#039;.preg_quote($separator).&#039;\s]+!u&#039;, $separator, $title);

	// Trim separators from the beginning and end
	return trim($title, $separator);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_rawurlencode_callback"><small>protected static</small>  _rawurlencode_callback(<small>array</small> <span class="param" title="Array of matches from preg_replace_callback()">$matches</span> )<small> (defined in <a href='/documentation/api/Kohana_URL'>Kohana_URL</a>)</small></h3>
<div class='description'><p>Callback used for encoding all non-ASCII characters, as per RFC 1738
Used by URL::site()</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $matches</strong> <small>required</small> - Array of matches from preg_replace_callback()</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Encoded string 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _rawurlencode_callback($matches)
{
	return rawurlencode($matches[0]);
}</code>
</pre>
</div>
</div>
</div>