---
layout: api
class: Kohana_Response
---
<h1>Kohana_Response</h1>
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/HTTP_Response'>HTTP_Response</a> | <a href='/documentation/api/HTTP_Message'>HTTP_Message</a> | <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a> | <a href='/documentation/api/Kohana_HTTP_Response'>Kohana_HTTP_Response</a></small>
</p>
<p>
<i><p>Response wrapper. Created as the result of any <a href="/index.php/">Request</a> execution
or utility method (i.e. Redirect). Implements standard HTTP
response format.</p>
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
<dt>license</dt>
<dd>https://koseven.ga/LICENSE.md</dd>
<dt>since</dt>
<dd>3.1.0</dd>
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
<a href="#property-messages">$messages</a>
</li>
<li>
<a href="#property-_body">$_body</a>
</li>
<li>
<a href="#property-_cookies">$_cookies</a>
</li>
<li>
<a href="#property-_header">$_header</a>
</li>
<li>
<a href="#property-_protocol">$_protocol</a>
</li>
<li>
<a href="#property-_status">$_status</a>
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
<a href="#body">body()</a>
</li>
<li>
<a href="#content_length">content_length()</a>
</li>
<li>
<a href="#cookie">cookie()</a>
</li>
<li>
<a href="#delete_cookie">delete_cookie()</a>
</li>
<li>
<a href="#delete_cookies">delete_cookies()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#generate_etag">generate_etag()</a>
</li>
<li>
<a href="#headers">headers()</a>
</li>
<li>
<a href="#protocol">protocol()</a>
</li>
<li>
<a href="#render">render()</a>
</li>
<li>
<a href="#send_file">send_file()</a>
</li>
<li>
<a href="#send_headers">send_headers()</a>
</li>
<li>
<a href="#status">status()</a>
</li>
<li>
<a href="#_calculate_byte_range">_calculate_byte_range()</a>
</li>
<li>
<a href="#_parse_byte_range">_parse_byte_range()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-messages'><small>public static</small>  <span class='blue'></span> $messages</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(50)</span> <span>(
    100 => <small>string</small><span>(8)</span> "Continue"
    101 => <small>string</small><span>(19)</span> "Switching Protocols"
    102 => <small>string</small><span>(10)</span> "Processing"
    200 => <small>string</small><span>(2)</span> "OK"
    201 => <small>string</small><span>(7)</span> "Created"
    202 => <small>string</small><span>(8)</span> "Accepted"
    203 => <small>string</small><span>(29)</span> "Non-Authoritative Information"
    204 => <small>string</small><span>(10)</span> "No Content"
    205 => <small>string</small><span>(13)</span> "Reset Content"
    206 => <small>string</small><span>(15)</span> "Partial Content"
    207 => <small>string</small><span>(12)</span> "Multi-Status"
    208 => <small>string</small><span>(16)</span> "Already Reported"
    300 => <small>string</small><span>(16)</span> "Multiple Choices"
    301 => <small>string</small><span>(17)</span> "Moved Permanently"
    302 => <small>string</small><span>(5)</span> "Found"
    303 => <small>string</small><span>(9)</span> "See Other"
    304 => <small>string</small><span>(12)</span> "Not Modified"
    305 => <small>string</small><span>(9)</span> "Use Proxy"
    307 => <small>string</small><span>(18)</span> "Temporary Redirect"
    400 => <small>string</small><span>(11)</span> "Bad Request"
    401 => <small>string</small><span>(12)</span> "Unauthorized"
    402 => <small>string</small><span>(16)</span> "Payment Required"
    403 => <small>string</small><span>(9)</span> "Forbidden"
    404 => <small>string</small><span>(9)</span> "Not Found"
    405 => <small>string</small><span>(18)</span> "Method Not Allowed"
    406 => <small>string</small><span>(14)</span> "Not Acceptable"
    407 => <small>string</small><span>(29)</span> "Proxy Authentication Required"
    408 => <small>string</small><span>(15)</span> "Request Timeout"
    409 => <small>string</small><span>(8)</span> "Conflict"
    410 => <small>string</small><span>(4)</span> "Gone"
    411 => <small>string</small><span>(15)</span> "Length Required"
    412 => <small>string</small><span>(19)</span> "Precondition Failed"
    413 => <small>string</small><span>(24)</span> "Request Entity Too Large"
    414 => <small>string</small><span>(20)</span> "Request-URI Too Long"
    415 => <small>string</small><span>(22)</span> "Unsupported Media Type"
    416 => <small>string</small><span>(31)</span> "Requested Range Not Satisfiable"
    417 => <small>string</small><span>(18)</span> "Expectation Failed"
    422 => <small>string</small><span>(20)</span> "Unprocessable Entity"
    423 => <small>string</small><span>(6)</span> "Locked"
    424 => <small>string</small><span>(17)</span> "Failed Dependency"
    429 => <small>string</small><span>(17)</span> "Too Many Requests"
    500 => <small>string</small><span>(21)</span> "Internal Server Error"
    501 => <small>string</small><span>(15)</span> "Not Implemented"
    502 => <small>string</small><span>(11)</span> "Bad Gateway"
    503 => <small>string</small><span>(19)</span> "Service Unavailable"
    504 => <small>string</small><span>(15)</span> "Gateway Timeout"
    505 => <small>string</small><span>(26)</span> "HTTP Version Not Supported"
    507 => <small>string</small><span>(20)</span> "Insufficient Storage"
    508 => <small>string</small><span>(13)</span> "Loop Detected"
    509 => <small>string</small><span>(24)</span> "Bandwidth Limit Exceeded"
)</span></pre></dd>
<dt>
<h4 id='property-_body'><small>protected</small>  <span class='blue'>string</span> $_body</h4>
</dt>
<dd>
 <p>The response body</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
<dt>
<h4 id='property-_cookies'><small>protected</small>  <span class='blue'>array</span> $_cookies</h4>
</dt>
<dd>
 <p>Cookies to be returned in the response</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_header'><small>protected</small>  <span class='blue'>HTTP_Header</span> $_header</h4>
</dt>
<dd>
 <p>Headers returned in the response</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_protocol'><small>protected</small>  <span class='blue'>string</span> $_protocol</h4>
</dt>
<dd>
 <p>The response protocol</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_status'><small>protected</small>  <span class='blue'>integer</span> $_status</h4>
</dt>
<dd>
 <p>The response http status</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 200</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Setup the response object">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Sets up the response object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Setup the response object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $config = [])
{
	$this-&gt;_header = new HTTP_Header;

	foreach ($config as $key =&gt; $value)
	{
		if (property_exists($this, $key))
		{
			if ($key == &#039;_header&#039;)
			{
				$this-&gt;headers($value);
			}
			else
			{
				$this-&gt;$key = $value;
			}
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Outputs the body when cast to string</p>
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
	return $this-&gt;_body;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="body"><small>public</small>  body()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Gets or sets the body of the response</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function body($content = NULL)
{
	if ($content === NULL)
		return $this-&gt;_body;

	$this-&gt;_body = (string) $content;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="content_length"><small>public</small>  content_length()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Returns the length of the body for use with
content header</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function content_length()
{
	return strlen($this-&gt;body());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cookie"><small>public</small>  cookie([ <small>mixed</small> <span class="param" title="Cookie name, or array of cookie values">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to cookie">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Set and get cookies values for this response.</p>

<pre><code>// Get the cookies set to the response
$cookies = $response-&gt;cookie();

// Set a cookie to the response
$response-&gt;cookie('session', array(
     'value' =&gt; $value,
     'expiration' =&gt; 12352234
));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Cookie name, or array of cookie values</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to cookie</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li><li>
<span class='blue'>void</span>  
</li><li>
<span class='blue'>[Response]</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cookie($key = NULL, $value = NULL)
{
	// Handle the get cookie calls
	if ($key === NULL)
		return $this-&gt;_cookies;
	elseif ( ! is_array($key) AND ! $value)
		return Arr::get($this-&gt;_cookies, $key);

	// Handle the set cookie calls
	if (is_array($key))
	{
		reset($key);
		foreach ($key as $_key =&gt; $_value)
		{
			$this-&gt;cookie($_key, $_value);
		}
	}
	else
	{
		if ( ! is_array($value))
		{
			$value = [
				&#039;value&#039; =&gt; $value,
				&#039;expiration&#039; =&gt; Cookie::$expiration
			];
		}
		elseif ( ! isset($value[&#039;expiration&#039;]))
		{
			$value[&#039;expiration&#039;] = Cookie::$expiration;
		}

		$this-&gt;_cookies[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_cookie"><small>public</small>  delete_cookie(<small>string</small> <span class="param" title="$name">$name</span> )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Deletes a cookie set to the response</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - $name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_cookie($name)
{
	unset($this-&gt;_cookies[$name]);
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_cookies"><small>public</small>  delete_cookies()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Deletes all cookies from this response</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_cookies()
{
	$this-&gt;_cookies = [];
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory([ <small>array</small> <span class="param" title="Setup the response object">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Factory method to create a new <a href="/index.php/">Response</a>. Pass properties
in using an associative array.</p>

<pre><code> // Create a new response
 $response = Response::factory();

 // Create a new response with headers
 $response = Response::factory(array('status' =&gt; 200));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Setup the response object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory(array $config = [])
{
	return new Response($config);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="generate_etag"><small>public</small>  generate_etag()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Generate ETag
Generates an ETag from the response ready to be returned</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Request_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>String</span>  - Generated ETag 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function generate_etag()
{
    if ($this-&gt;_body === &#039;&#039;)
	{
		throw new Request_Exception(&#039;No response yet associated with request - cannot auto generate resource ETag&#039;);
	}

	// Generate a unique hash for the response
	return &#039;&quot;&#039;.sha1($this-&gt;render()).&#039;&quot;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="headers"><small>public</small>  headers([ <small>mixed</small> <span class="param" title="$key">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="$value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Gets and sets headers to the <a href="/index.php/">Response</a>, allowing chaining
of response methods. If chaining isn't required, direct
access to the property should be used instead.</p>

<pre><code>  // Get a header
  $accept = $response-&gt;headers('Content-Type');

  // Set a header
  $response-&gt;headers('Content-Type', 'text/html');

  // Get all headers
  $headers = $response-&gt;headers();

  // Set multiple headers
  $response-&gt;headers(array('Content-Type' =&gt; 'text/html', 'Cache-Control' =&gt; 'no-cache'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - $key</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - $value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function headers($key = NULL, $value = NULL)
{
	if ($key === NULL)
	{
		return $this-&gt;_header;
	}
	elseif (is_array($key))
	{
		$this-&gt;_header-&gt;exchangeArray($key);
		return $this;
	}
	elseif ($value === NULL)
	{
		return Arr::get($this-&gt;_header, $key);
	}
	else
	{
		$this-&gt;_header[$key] = $value;
		return $this;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="protocol"><small>public</small>  protocol([ <small>string</small> <span class="param" title="Protocol to set to the request/response">$protocol</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP protocol. The standard protocol to use
is <code>HTTP/1.1</code>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to set to the request/response</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function protocol($protocol = NULL)
{
	if ($protocol)
	{
		$this-&gt;_protocol = strtoupper($protocol);
		return $this;
	}

	if ($this-&gt;_protocol === NULL)
	{
		$this-&gt;_protocol = HTTP::$protocol;
	}

	return $this-&gt;_protocol;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="render"><small>public</small>  render()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Renders the HTTP_Interaction to a string, producing</p>

<ul>
<li>Protocol</li>
<li>Headers</li>
<li>Body</li>
</ul>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function render()
{
	if ( ! $this-&gt;_header-&gt;offsetExists(&#039;content-type&#039;))
	{
		// Add the default Content-Type header if required
		$this-&gt;_header[&#039;content-type&#039;] = Kohana::$content_type.&#039;; charset=&#039;.Kohana::$charset;
	}

	// Set the content length
	$this-&gt;headers(&#039;content-length&#039;, (string) $this-&gt;content_length());

	// If Kohana expose, set the user-agent
	if (Kohana::$expose)
	{
		$this-&gt;headers(&#039;user-agent&#039;, Kohana::version());
	}

	// Prepare cookies
	if ($this-&gt;_cookies)
	{
		if (extension_loaded(&#039;http&#039;))
		{
			$cookies = version_compare(phpversion(&#039;http&#039;), &#039;2.0.0&#039;, &#039;&gt;=&#039;) ?
				(string) new \http\Cookie($this-&gt;_cookies) :
				http_build_cookie($this-&gt;_cookies);
			$this-&gt;_header[&#039;set-cookie&#039;] = $cookies;
		}
		else
		{
			$cookies = [];

			// Parse each
			foreach ($this-&gt;_cookies as $key =&gt; $value)
			{
				$string = $key.&#039;=&#039;.$value[&#039;value&#039;].&#039;; expires=&#039;.date(&#039;l, d M Y H:i:s T&#039;, $value[&#039;expiration&#039;]);
				$cookies[] = $string;
			}

			// Create the cookie string
			$this-&gt;_header[&#039;set-cookie&#039;] = $cookies;
		}
	}

	$output = $this-&gt;_protocol.&#039; &#039;.$this-&gt;_status.&#039; &#039;.Response::$messages[$this-&gt;_status].&quot;\r\n&quot;;
	$output .= (string) $this-&gt;_header;
	$output .= $this-&gt;_body;

	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="send_file"><small>public</small>  send_file(<small>string|resource|bool</small> <span class="param" title="Filename with path, file stream, or TRUE for the current response">$filename</span> [, <small>string</small> <span class="param" title="Downloaded file name">$download</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Additional options">$options</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Send file download as the response. All execution will be halted when
this method is called! Use TRUE for the filename to send the current
response as the file content. The third parameter allows the following
options to be set:</p>

<table>
<thead>
<tr>
  <th>Type</th>
  <th>Option</th>
  <th>Description</th>
  <th>Default Value</th>
</tr>
</thead>
<tbody>
<tr>
  <td><code>boolean</code></td>
  <td>inline</td>
  <td>Display inline instead of download</td>
  <td><code>FALSE</code></td>
</tr>
<tr>
  <td><code>string</code></td>
  <td>mime_type</td>
  <td>Manual mime type</td>
  <td>Automatic</td>
</tr>
<tr>
  <td><code>boolean</code></td>
  <td>delete</td>
  <td>Delete the file after sending</td>
  <td><code>FALSE</code></td>
</tr>
</tbody>
</table>

<p>Download a file that already exists:</p>

<pre><code>$request-&gt;send_file('media/packages/kohana.zip');
</code></pre>

<p>Download a generated file:</p>

<pre><code>$csv = tmpfile();
fputcsv($csv, ['label1', 'label2']);
$request-&gt;send_file($csv, $filename);
</code></pre>

<p>Download generated content as a file:</p>

<pre><code>$request-&gt;response($content);
$request-&gt;send_file(TRUE, $filename);
</code></pre>

<p class="note">No further processing can be done after this method is called!</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|resource|bool </span><strong> $filename</strong> <small>required</small> - Filename with path, file stream, or TRUE for the current response</li>
<li>
 <span class="blue">string </span><strong> $download</strong> <small> = <small>NULL</small></small> - Downloaded file name</li>
<li>
 <span class="blue">array </span><strong> $options</strong> <small> = <small>NULL</small></small> - Additional options</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Uses - <a href="#mime_by_ext">File::mime_by_ext</a>, <a href="#mime">File::mime</a>, <a href="#send_headers">Request::send_headers</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function send_file($filename, $download = NULL, array $options = NULL)
{
	if ( ! empty($options[&#039;mime_type&#039;]))
	{
		// The mime-type has been manually set
		$mime = $options[&#039;mime_type&#039;];
	}

	if ($filename === TRUE)
	{
		if (empty($download))
		{
			throw new Kohana_Exception(&#039;Download name must be provided for streaming files&#039;);
		}

		// Temporary files will automatically be deleted
		$options[&#039;delete&#039;] = FALSE;

		if ( ! isset($mime))
		{
			// Guess the mime using the file extension
			$mime = File::mime_by_ext(strtolower(pathinfo($download, PATHINFO_EXTENSION)));
		}

		// Force the data to be rendered if
		$file_data = (string) $this-&gt;_body;

		// Get the content size
		$size = strlen($file_data);

		// Create a temporary file to hold the current response
		$file = tmpfile();

		// Write the current response into the file
		fwrite($file, $file_data);

		// File data is no longer needed
		unset($file_data);
	}
	else if (is_resource($filename) &amp;&amp; get_resource_type($filename) === &#039;stream&#039;)
	{
		if (empty($download))
		{
			throw new Kohana_Exception(&#039;Download name must be provided for streaming files&#039;);
		}

		// Make sure this is a file handle
		$file_meta = stream_get_meta_data($filename);
		if ($file_meta[&#039;seekable&#039;] === FALSE)
		{
			throw new Kohana_Exception(&#039;Resource must be a file handle&#039;);
		}

		// Handle file streams passed in as resources
		$file = $filename;
		$size = fstat($file)[&#039;size&#039;];
	}
	else
	{
		// Get the complete file path
		$filename = realpath($filename);

		if (empty($download))
		{
			// Use the file name as the download file name
			$download = pathinfo($filename, PATHINFO_BASENAME);
		}

		// Get the file size
		$size = filesize($filename);

		if ( ! isset($mime))
		{
			// Get the mime type from the extension of the download file
			$mime = File::mime_by_ext(pathinfo($download, PATHINFO_EXTENSION));
		}

		// Open the file for reading
		$file = fopen($filename, &#039;rb&#039;);
	}

	if ( ! is_resource($file))
	{
		throw new Kohana_Exception(&#039;Could not read file to send: :file&#039;, [
			&#039;:file&#039; =&gt; $download,
		]);
	}

	// Inline or download?
	$disposition = empty($options[&#039;inline&#039;]) ? &#039;attachment&#039; : &#039;inline&#039;;

	// Calculate byte range to download.
	list($start, $end) = $this-&gt;_calculate_byte_range($size);

	if ( ! empty($options[&#039;resumable&#039;]))
	{
		if ($start &gt; 0 OR $end &lt; ($size - 1))
		{
			// Partial Content
			$this-&gt;_status = 206;
		}

		// Range of bytes being sent
		$this-&gt;_header[&#039;content-range&#039;] = &#039;bytes &#039;.$start.&#039;-&#039;.$end.&#039;/&#039;.$size;
		$this-&gt;_header[&#039;accept-ranges&#039;] = &#039;bytes&#039;;
	}

	// Set the headers for a download
	$this-&gt;_header[&#039;content-disposition&#039;] = $disposition.&#039;; filename=&quot;&#039;.$download.&#039;&quot;&#039;;
	$this-&gt;_header[&#039;content-type&#039;]        = $mime;
	$this-&gt;_header[&#039;content-length&#039;]      = (string) (($end - $start) + 1);

	if (Request::user_agent(&#039;browser&#039;) === &#039;Internet Explorer&#039;)
	{
		// Naturally, IE does not act like a real browser...
		if (Request::$initial-&gt;secure())
		{
			// http://support.microsoft.com/kb/316431
			$this-&gt;_header[&#039;pragma&#039;] = $this-&gt;_header[&#039;cache-control&#039;] = &#039;public&#039;;
		}

		if (version_compare(Request::user_agent(&#039;version&#039;), &#039;8.0&#039;, &#039;&gt;=&#039;))
		{
			// http://ajaxian.com/archives/ie-8-security
			$this-&gt;_header[&#039;x-content-type-options&#039;] = &#039;nosniff&#039;;
		}
	}

	// Send all headers now
	$this-&gt;send_headers();

	while (ob_get_level())
	{
		// Flush all output buffers
		ob_end_flush();
	}

	// Manually stop execution
	ignore_user_abort(TRUE);

	// Send data in 16kb blocks
	$block = 1024 * 16;

	fseek($file, $start);

	while ( ! feof($file) AND ($pos = ftell($file)) &lt;= $end)
	{
		if (connection_aborted())
			break;

		if ($pos + $block &gt; $end)
		{
			// Don&#039;t read past the buffer.
			$block = $end - $pos + 1;
		}

		// Output a block of the file
		echo fread($file, $block);

		// Send the data now
		flush();
	}

	// Close the file
	fclose($file);

	if ( ! empty($options[&#039;delete&#039;]))
	{
		try
		{
			// Attempt to remove the file
			unlink($filename);
		}
		catch (Exception $e)
		{
			// Create a text version of the exception
			$error = Kohana_Exception::text($e);

			if (is_object(Kohana::$log))
			{
				// Add this exception to the log
				Kohana::$log-&gt;add(Log::ERROR, $error);

				// Make sure the logs are written
				Kohana::$log-&gt;write();
			}

			// Do NOT display the exception, it will corrupt the output!
		}
	}

	// Stop execution
	exit;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="send_headers"><small>public</small>  send_headers([ <small>boolean</small> <span class="param" title="Replace existing headers">$replace</span> <small>= <small>bool</small> FALSE</small> , <small>callback</small> <span class="param" title="Function to handle header output">$callback</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Sends the response status and all set headers.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $replace</strong> <small> = <small>bool</small> FALSE</small> - Replace existing headers</li>
<li>
 <span class="blue">callback </span><strong> $callback</strong> <small> = <small>NULL</small></small> - Function to handle header output</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function send_headers($replace = FALSE, $callback = NULL)
{
	return $this-&gt;_header-&gt;send_headers($this, $replace, $callback);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="status"><small>public</small>  status([ <small>integer</small> <span class="param" title="Status to set to this response">$status</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Sets or gets the HTTP status from this response.</p>

<pre><code> // Set the HTTP status to 404 Not Found
 $response = Response::factory()
         -&gt;status(404);

 // Get the current status
 $status = $response-&gt;status();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $status</strong> <small> = <small>NULL</small></small> - Status to set to this response</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function status($status = NULL)
{
	if ($status === NULL)
	{
		return $this-&gt;_status;
	}
	elseif (array_key_exists($status, Response::$messages))
	{
		$this-&gt;_status = (int) $status;
		return $this;
	}
	else
	{
		throw new Kohana_Exception(__METHOD__.&#039; unknown status value : :value&#039;, [&#039;:value&#039; =&gt; $status]);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_calculate_byte_range"><small>protected</small>  _calculate_byte_range(<small>integer</small> <span class="param" title="$size">$size</span> )<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Calculates the byte range to use with send_file. If HTTP_RANGE doesn't
exist then the complete byte range is returned</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $size</strong> <small>required</small> - $size</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _calculate_byte_range($size)
{
	// Defaults to start with when the HTTP_RANGE header doesn&#039;t exist.
	$start = 0;
	$end = $size - 1;

	if ($range = $this-&gt;_parse_byte_range())
	{
		// We have a byte range from HTTP_RANGE
		$start = $range[1];

		if ($start[0] === &#039;-&#039;)
		{
			// A negative value means we start from the end, so -500 would be the
			// last 500 bytes.
			$start = $size - abs($start);
		}

		if (isset($range[2]))
		{
			// Set the end range
			$end = $range[2];
		}
	}

	// Normalize values.
	$start = abs(intval($start));

	// Keep the the end value in bounds and normalize it.
	$end = min(abs(intval($end)), $size - 1);

	// Keep the start in bounds.
	$start = ($end &lt; $start) ? 0 : max($start, 0);

	return [$start, $end];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_parse_byte_range"><small>protected</small>  _parse_byte_range()<small> (defined in <a href='/documentation/api/Kohana_Response'>Kohana_Response</a>)</small></h3>
<div class='description'><p>Parse the byte ranges from the HTTP_RANGE header used for
resumable downloads.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array|FALSE</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _parse_byte_range()
{
	if ( ! isset($_SERVER[&#039;HTTP_RANGE&#039;]))
	{
		return FALSE;
	}

	// TODO, speed this up with the use of string functions.
	preg_match_all(&#039;/(-?[0-9]++(?:-(?![0-9]++))?)(?:-?([0-9]++))?/&#039;, $_SERVER[&#039;HTTP_RANGE&#039;], $matches, PREG_SET_ORDER);

	return $matches[0];
}</code>
</pre>
</div>
</div>
</div>