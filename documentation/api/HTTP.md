---
layout: api
class: HTTP
---
<h1>HTTP</h1>
extends <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>
<br />
<p>
<i><p>Contains the most low-level helpers methods in Kohana:</p>

<ul>
<li>Environment initialization</li>
<li>Locating files within the cascading filesystem</li>
<li>Auto-loading and transparent extension of classes</li>
<li>Variable and path debugging</li>
</ul>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a></p>
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
<a href="#property-protocol">$protocol</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#check_cache">check_cache()</a>
</li>
<li>
<a href="#parse_header_string">parse_header_string()</a>
</li>
<li>
<a href="#redirect">redirect()</a>
</li>
<li>
<a href="#request_headers">request_headers()</a>
</li>
<li>
<a href="#www_form_urlencode">www_form_urlencode()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-protocol'><small>public static</small>  <span class='blue'>The</span> $protocol</h4>
</dt>
<dd>
 <p>default protocol to use if it cannot be detected</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(8)</span> "HTTP/1.1"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="check_cache"><small>public static</small>  check_cache(<small>Request</small> <span class="param" title="Request">$request</span> , <small>Response</small> <span class="param" title="Response">$response</span> [, <small>string</small> <span class="param" title="Resource ETag">$etag</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>)</small></h3>
<div class='description'><p>Checks the browser cache to see the response needs to be returned,
execution will halt and a 304 Not Modified will be sent if the
browser cache is up to date.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - Response</li>
<li>
 <span class="blue">string </span><strong> $etag</strong> <small> = <small>NULL</small></small> - Resource ETag</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">HTTP_Exception_304</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function check_cache(Request $request, Response $response, $etag = NULL)
{
	// Generate an etag if necessary
	if ($etag == NULL)
	{
		$etag = $response-&gt;generate_etag();
	}

	// Set the ETag header
	$response-&gt;headers(&#039;etag&#039;, $etag);

	// Add the Cache-Control header if it is not already set
	// This allows etags to be used with max-age, etc
	if ($response-&gt;headers(&#039;cache-control&#039;))
	{
		$response-&gt;headers(&#039;cache-control&#039;, $response-&gt;headers(&#039;cache-control&#039;).&#039;, must-revalidate&#039;);
	}
	else
	{
		$response-&gt;headers(&#039;cache-control&#039;, &#039;must-revalidate&#039;);
	}

	// Check if we have a matching etag
	if ($request-&gt;headers(&#039;if-none-match&#039;) AND (string) $request-&gt;headers(&#039;if-none-match&#039;) === $etag)
	{
		// No need to send data again
		throw HTTP_Exception::factory(304)-&gt;headers(&#039;etag&#039;, $etag);
	}

	return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse_header_string"><small>public static</small>  parse_header_string(<small>string</small> <span class="param" title="Header string to parse">$header_string</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>)</small></h3>
<div class='description'><p>Parses a HTTP header string into an associative array</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $header_string</strong> <small>required</small> - Header string to parse</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Header</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse_header_string($header_string)
{
	// If the PECL HTTP extension is loaded
	if (extension_loaded(&#039;http&#039;))
	{
		// Use the fast method to parse header string
		$headers = version_compare(phpversion(&#039;http&#039;), &#039;2.0.0&#039;, &#039;&gt;=&#039;) ?
			\http\Header::parse($header_string) :
			http_parse_headers($header_string);
		return new HTTP_Header($headers);
	}

	// Otherwise we use the slower PHP parsing
	$headers = [];

	// Match all HTTP headers
	if (preg_match_all(&#039;/(\w[^\s:]*):[ ]*([^\r\n]*(?:\r\n[ \t][^\r\n]*)*)/&#039;, $header_string, $matches))
	{
		// Parse each matched header
		foreach ($matches[0] as $key =&gt; $value)
		{
			// If the header has not already been set
			if ( ! isset($headers[$matches[1][$key]]))
			{
				// Apply the header directly
				$headers[$matches[1][$key]] = $matches[2][$key];
			}
			// Otherwise there is an existing entry
			else
			{
				// If the entry is an array
				if (is_array($headers[$matches[1][$key]]))
				{
					// Apply the new entry to the array
					$headers[$matches[1][$key]][] = $matches[2][$key];
				}
				// Otherwise create a new array with the entries
				else
				{
					$headers[$matches[1][$key]] = [
						$headers[$matches[1][$key]],
						$matches[2][$key],
					];
				}
			}
		}
	}

	// Return the headers
	return new HTTP_Header($headers);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="redirect"><small>public static</small>  redirect([ <small>string</small> <span class="param" title="URI to redirect to">$uri</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>int</small> <span class="param" title="HTTP Status code to use for the redirect">$code</span> <small>= <small>integer</small> 302</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>)</small></h3>
<div class='description'><p>Issues a HTTP redirect.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>string</small><span>(0)</span> ""</small> - URI to redirect to</li>
<li>
 <span class="blue">int </span><strong> $code</strong> <small> = <small>integer</small> 302</small> - HTTP Status code to use for the redirect</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">HTTP_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function redirect($uri = &#039;&#039;, $code = 302)
{
	$e = HTTP_Exception::factory($code);

	if ( ! $e instanceof HTTP_Exception_Redirect)
		throw new Kohana_Exception(&#039;Invalid redirect code \&#039;:code\&#039;&#039;, [
			&#039;:code&#039; =&gt; $code
		]);

	throw $e-&gt;location($uri);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="request_headers"><small>public static</small>  request_headers()<small> (defined in <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>)</small></h3>
<div class='description'><p>Parses the the HTTP request headers and returns an array containing
key value pairs. This method is slow, but provides an accurate
representation of the HTTP request.</p>

<pre><code> // Get http headers into the request
 $request-&gt;headers = HTTP::request_headers();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Header</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function request_headers()
{
	// If running on apache server
	if (function_exists(&#039;apache_request_headers&#039;))
	{
		// Return the much faster method
		return new HTTP_Header(apache_request_headers());
	}
	// If the PECL HTTP tools are installed
	elseif (extension_loaded(&#039;http&#039;))
	{
		// Return the much faster method
		$headers = version_compare(phpversion(&#039;http&#039;), &#039;2.0.0&#039;, &#039;&gt;=&#039;) ?
			\http\Env::getRequestHeader() :
			http_get_request_headers();
		return new HTTP_Header($headers);
	}

	// Setup the output
	$headers = [];

	// Parse the content type
	if ( ! empty($_SERVER[&#039;CONTENT_TYPE&#039;]))
	{
		$headers[&#039;content-type&#039;] = $_SERVER[&#039;CONTENT_TYPE&#039;];
	}

	// Parse the content length
	if ( ! empty($_SERVER[&#039;CONTENT_LENGTH&#039;]))
	{
		$headers[&#039;content-length&#039;] = $_SERVER[&#039;CONTENT_LENGTH&#039;];
	}

	foreach ($_SERVER as $key =&gt; $value)
	{
		// If there is no HTTP header here, skip
		if (strpos($key, &#039;HTTP_&#039;) !== 0)
		{
			continue;
		}

		// This is a dirty hack to ensure HTTP_X_FOO_BAR becomes X-FOO-BAR
		$headers[str_replace(&#039;_&#039;, &#039;-&#039;, substr($key, 5))] = $value;
	}

	return new HTTP_Header($headers);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="www_form_urlencode"><small>public static</small>  www_form_urlencode([ <small>array</small> <span class="param" title="Params">$params</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP'>Kohana_HTTP</a>)</small></h3>
<div class='description'><p>Processes an array of key value pairs and encodes
the values to meet RFC 3986</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>array</small><span>(0)</span> </small> - Params</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function www_form_urlencode(array $params = [])
{
	if ( ! $params)
		return;

	$encoded = [];

	foreach ($params as $key =&gt; $value)
	{
		$encoded[] = $key.&#039;=&#039;.rawurlencode($value);
	}

	return implode(&#039;&amp;&#039;, $encoded);
}</code>
</pre>
</div>
</div>
</div>