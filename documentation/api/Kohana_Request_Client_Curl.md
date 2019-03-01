---
layout: api
class: Kohana_Request_Client_Curl
---
<h1>Kohana_Request_Client_Curl</h1>
extends <a href='/documentation/api/Request_Client_External'>Request_Client_External</a>
<br />
extends <a href='/documentation/api/Kohana_Request_Client_External'>Kohana_Request_Client_External</a>
<br />
extends <a href='/documentation/api/Request_Client'>Request_Client</a>
<br />
extends <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>
<br />
<p>
<i><p><a href="/index.php/">Request_Client_External</a> Curl driver performs external requests using the
php-curl extention. This is the default driver for all external requests.</p>
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
<dt>uses</dt>
<dd>[PHP cURL](http://php.net/manual/en/book.curl.php)</dd>
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
<a href="#property-client">$client</a>
</li>
<li>
<a href="#property-_cache">$_cache</a>
</li>
<li>
<a href="#property-_callback_depth">$_callback_depth</a>
</li>
<li>
<a href="#property-_callback_params">$_callback_params</a>
</li>
<li>
<a href="#property-_follow">$_follow</a>
</li>
<li>
<a href="#property-_follow_headers">$_follow_headers</a>
</li>
<li>
<a href="#property-_header_callbacks">$_header_callbacks</a>
</li>
<li>
<a href="#property-_max_callback_depth">$_max_callback_depth</a>
</li>
<li>
<a href="#property-_options">$_options</a>
</li>
<li>
<a href="#property-_strict_redirect">$_strict_redirect</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#_send_message">_send_message()</a>
</li>
<li>
<a href="#_set_curl_request_method">_set_curl_request_method()</a>
</li>
<li>
<a href="#execute_request">execute_request()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#options">options()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#assign_client_properties">assign_client_properties()</a>
</li>
<li>
<a href="#cache">cache()</a>
</li>
<li>
<a href="#callback_depth">callback_depth()</a>
</li>
<li>
<a href="#callback_params">callback_params()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#follow">follow()</a>
</li>
<li>
<a href="#follow_headers">follow_headers()</a>
</li>
<li>
<a href="#header_callbacks">header_callbacks()</a>
</li>
<li>
<a href="#max_callback_depth">max_callback_depth()</a>
</li>
<li>
<a href="#on_header_location">on_header_location()</a>
</li>
<li>
<a href="#strict_redirect">strict_redirect()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-client'><small>public static</small>  <span class='blue'>string</span> $client</h4>
</dt>
<dd>
 <p>defines the external client to use by default</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(19)</span> "Request_Client_Curl"</pre></dd>
<dt>
<h4 id='property-_cache'><small>protected</small>  <span class='blue'>Cache</span> $_cache</h4>
</dt>
<dd>
 <p>Caching library for request caching</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_callback_depth'><small>protected</small>  <span class='blue'>int</span> $_callback_depth</h4>
</dt>
<dd>
 <p>Tracks the callback depth of the currently executing request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='property-_callback_params'><small>protected</small>  <span class='blue'>array</span> $_callback_params</h4>
</dt>
<dd>
 <p>Arbitrary parameters that are shared with header callbacks through their Request_Client object</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_follow'><small>protected</small>  <span class='blue'>bool</span> $_follow</h4>
</dt>
<dd>
 <p>Should redirects be followed?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_follow_headers'><small>protected</small>  <span class='blue'>array</span> $_follow_headers</h4>
</dt>
<dd>
 <p>Headers to preserve when following a redirect</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(1)</span> <span>(
    0 => <small>string</small><span>(13)</span> "authorization"
)</span></pre></dd>
<dt>
<h4 id='property-_header_callbacks'><small>protected</small>  <span class='blue'>array</span> $_header_callbacks</h4>
</dt>
<dd>
 <p>Callbacks to use when response contains given headers</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(1)</span> <span>(
    "Location" => <small>string</small><span>(34)</span> "Request_Client::on_header_location"
)</span></pre></dd>
<dt>
<h4 id='property-_max_callback_depth'><small>protected</small>  <span class='blue'>int</span> $_max_callback_depth</h4>
</dt>
<dd>
 <p>Maximum number of requests that header callbacks can trigger before the request is aborted</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 5</pre></dd>
<dt>
<h4 id='property-_options'><small>protected</small>  <span class='blue'>array</span> $_options</h4>
</dt>
<dd>
 <p>curl options</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_strict_redirect'><small>protected</small>  <span class='blue'>bool</span> $_strict_redirect</h4>
</dt>
<dd>
 <p>Follow 302 redirect with original request method?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="_send_message"><small>public</small>  _send_message(<small>Request</small> <span class="param" title="Request to send">$request</span> , <small>Response</small> <span class="param" title="$request response to send">$response</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client_Curl'>Kohana_Request_Client_Curl</a>)</small></h3>
<div class='description'><p>Sends the HTTP message <a href="/index.php/">Request</a> to a remote server and processes
the response.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request to send</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - $request  response to send</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function _send_message(Request $request, Response $response)
{
	$options = [];

	// Set the request method
	$options = $this-&gt;_set_curl_request_method($request, $options);

	// Set the request body. This is perfectly legal in CURL even
	// if using a request other than POST. PUT does support this method
	// and DOES NOT require writing data to disk before putting it, if
	// reading the PHP docs you may have got that impression. SdF
	// This will also add a Content-Type: application/x-www-form-urlencoded header unless you override it
	if ($body = $request-&gt;body()) {
		$options[CURLOPT_POSTFIELDS] = $body;
	}

	// Process headers
	if ($headers = $request-&gt;headers())
	{
		$http_headers = [];

		foreach ($headers as $key =&gt; $value)
		{
			$http_headers[] = $key.&#039;: &#039;.$value;
		}

		$options[CURLOPT_HTTPHEADER] = $http_headers;
	}

	// Process cookies
	if ($cookies = $request-&gt;cookie())
	{
		$options[CURLOPT_COOKIE] = http_build_query($cookies, NULL, &#039;; &#039;);
	}

	// Get any exisiting response headers
	$response_header = $response-&gt;headers();

	// Implement the standard parsing parameters
	$options[CURLOPT_HEADERFUNCTION]        = [$response_header, &#039;parse_header_string&#039;];
	$this-&gt;_options[CURLOPT_RETURNTRANSFER] = TRUE;
	$this-&gt;_options[CURLOPT_HEADER]         = FALSE;

	// Apply any additional options set to
	$options += $this-&gt;_options;

	$uri = $request-&gt;uri();

	if ($query = $request-&gt;query())
	{
		$uri .= &#039;?&#039;.http_build_query($query, NULL, &#039;&amp;&#039;);
	}

	// Open a new remote connection
	$curl = curl_init($uri);

	// Set connection options
	if ( ! curl_setopt_array($curl, $options))
	{
		throw new Request_Exception(&#039;Failed to set CURL options, check CURL documentation: :url&#039;,
			[&#039;:url&#039; =&gt; &#039;http://php.net/curl_setopt_array&#039;]);
	}

	// Get the response body
	$body = curl_exec($curl);

	// Get the response information
	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	if ($body === FALSE)
	{
		$error = curl_error($curl);
	}

	// Close the connection
	curl_close($curl);

	if (isset($error))
	{
		throw new Request_Exception(&#039;Error fetching remote :url [ status :code ] :error&#039;,
			[&#039;:url&#039; =&gt; $request-&gt;url(), &#039;:code&#039; =&gt; $code, &#039;:error&#039; =&gt; $error]);
	}

	$response-&gt;status($code)
		-&gt;body($body);

	return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_set_curl_request_method"><small>public</small>  _set_curl_request_method(<small>Request</small> <span class="param" title="$request">$request</span> , <small>array</small> <span class="param" title="$options">$options</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client_Curl'>Kohana_Request_Client_Curl</a>)</small></h3>
<div class='description'><p>Sets the appropriate curl request options. Uses the responding option
for POST or CURLOPT_CUSTOMREQUEST otherwise</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - $request</li>
<li>
 <span class="blue">array </span><strong> $options</strong> <small>required</small> - $options</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function _set_curl_request_method(Request $request, array $options)
{
	switch ($request-&gt;method()) {
		case Request::POST:
			$options[CURLOPT_POST] = TRUE;
			break;
		default:
			$options[CURLOPT_CUSTOMREQUEST] = $request-&gt;method();
			break;
	}
	return $options;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute_request"><small>public</small>  execute_request(<small>Request</small> <span class="param" title="A request object">$request</span> , <small>Response</small> <span class="param" title="A response object">$response</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client_External'>Kohana_Request_Client_External</a>)</small></h3>
<div class='description'><p>Processes the request, executing the controller action that handles this
request, determined by the <a href="/index.php/">Route</a>.</p>

<ol>
<li>Before the controller action is called, the <a href="#before">Controller::before</a> method
will be called.</li>
<li>Next the controller action will be called.</li>
<li>After the controller action is called, the <a href="#after">Controller::after</a> method
will be called.</li>
</ol>

<p>By default, the output from the controller is captured and returned, and
no headers are sent.</p>

<pre><code>$request-&gt;execute();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - A request object</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - A response object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Uses - [Kohana::$profiling], [Profiler]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute_request(Request $request, Response $response)
{
	if (Kohana::$profiling)
	{
		// Set the benchmark name
		$benchmark = &#039;&quot;&#039;.$request-&gt;uri().&#039;&quot;&#039;;

		if ($request !== Request::$initial AND Request::$current)
		{
			// Add the parent request uri
			$benchmark .= &#039; « &quot;&#039;.Request::$current-&gt;uri().&#039;&quot;&#039;;
		}

		// Start benchmarking
		$benchmark = Profiler::start(&#039;Requests&#039;, $benchmark);
	}

	// Store the current active request and replace current with new request
	$previous = Request::$current;
	Request::$current = $request;

	// Resolve the POST fields
	if ($post = $request-&gt;post())
	{
		$request-&gt;body(http_build_query($post, NULL, &#039;&amp;&#039;))
			-&gt;headers(&#039;content-type&#039;, &#039;application/x-www-form-urlencoded; charset=&#039;.Kohana::$charset);
	}

	$request-&gt;headers(&#039;content-length&#039;, (string) $request-&gt;content_length());

	// If Kohana expose, set the user-agent
	if (Kohana::$expose)
	{
		$request-&gt;headers(&#039;user-agent&#039;, Kohana::version());
	}

	try
	{
		$response = $this-&gt;_send_message($request, $response);
	}
	catch (Exception $e)
	{
		// Restore the previous request
		Request::$current = $previous;

		if (isset($benchmark))
		{
			// Delete the benchmark, it is invalid
			Profiler::delete($benchmark);
		}

		// Re-throw the exception
		throw $e;
	}

	// Restore the previous request
	Request::$current = $previous;

	if (isset($benchmark))
	{
		// Stop the benchmark
		Profiler::stop($benchmark);
	}

	// Return the response
	return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory([ <small>array</small> <span class="param" title="Parameters to pass to the client">$params</span> <small>= <small>array</small><span>(0)</span> </small> , <small>string</small> <span class="param" title="External client to use">$client</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client_External'>Kohana_Request_Client_External</a>)</small></h3>
<div class='description'><p>Factory method to create a new Request_Client_External object based on
the client name passed, or defaulting to Request_Client_External::$client
by default.</p>

<p>Request_Client_External::$client can be set in the application bootstrap.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>array</small><span>(0)</span> </small> - Parameters to pass to the client</li>
<li>
 <span class="blue">string </span><strong> $client</strong> <small> = <small>NULL</small></small> - External client to use</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Request_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client_External</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory(array $params = [], $client = NULL)
{
	if ($client === NULL)
	{
		$client = Request_Client_External::$client;
	}

	$client = new $client($params);

	if ( ! $client instanceof Request_Client_External)
	{
		throw new Request_Exception(&#039;Selected client is not a Request_Client_External object.&#039;);
	}

	return $client;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="options"><small>public</small>  options([ <small>mixed</small> <span class="param" title="Option name, or array of options">$key</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Option value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client_External'>Kohana_Request_Client_External</a>)</small></h3>
<div class='description'><p>Set and get options for this request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Option name, or array of options</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Option value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li><li>
<span class='blue'>Request_Client_External</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function options($key = NULL, $value = NULL)
{
	if ($key === NULL)
		return $this-&gt;_options;

	if (is_array($key))
	{
		$this-&gt;_options = $key;
	}
	elseif ($value === NULL)
	{
		return Arr::get($this-&gt;_options, $key);
	}
	else
	{
		$this-&gt;_options[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Params">$params</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Creates a new <code>Request_Client</code> object,
allows for dependency injection.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>array</small><span>(0)</span> </small> - Params</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $params = [])
{
	foreach ($params as $key =&gt; $value)
	{
		if (method_exists($this, $key))
		{
			$this-&gt;$key($value);
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="assign_client_properties"><small>public</small>  assign_client_properties(<small>Request_Client</small> <span class="param" title="$client">$client</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Assigns the properties of the current Request_Client to another
Request_Client instance - used when setting up a subsequent request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request_Client </span><strong> $client</strong> <small>required</small> - $client</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function assign_client_properties(Request_Client $client)
{
	$client-&gt;cache($this-&gt;cache());
	$client-&gt;follow($this-&gt;follow());
	$client-&gt;follow_headers($this-&gt;follow_headers());
	$client-&gt;header_callbacks($this-&gt;header_callbacks());
	$client-&gt;max_callback_depth($this-&gt;max_callback_depth());
	$client-&gt;callback_params($this-&gt;callback_params());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache"><small>public</small>  cache([ <small>HTTP_Cache</small> <span class="param" title="Engine to use for caching">$cache</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the internal caching engine,
used to cache responses if available and valid.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">HTTP_Cache </span><strong> $cache</strong> <small> = <small>NULL</small></small> - Engine to use for caching</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Cache</span>  
</li><li>
<span class='blue'>Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cache(HTTP_Cache $cache = NULL)
{
	if ($cache === NULL)
		return $this-&gt;_cache;

	$this-&gt;_cache = $cache;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="callback_depth"><small>public</small>  callback_depth([ <small>int</small> <span class="param" title="Current recursion depth">$depth</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter/Setter for the callback depth property, which is used to track
how many recursions have been executed within the current request execution.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $depth</strong> <small> = <small>NULL</small></small> - Current recursion depth</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client|int</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function callback_depth($depth = NULL)
{
	if ($depth === NULL)
		return $this-&gt;_callback_depth;

	$this-&gt;_callback_depth = $depth;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="callback_params"><small>public</small>  callback_params([ <small>string|array</small> <span class="param" title="$param">$param</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="$value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter/Setter for the callback_params array, which allows additional
application-specific parameters to be shared with callbacks.</p>

<p>As with other Kohana setter/getters, usage is:</p>

<pre><code>// Set full array
$client-&gt;callback_params(array('foo'=&gt;'bar'));

// Set single key
$client-&gt;callback_params('foo','bar');

// Get full array
$params = $client-&gt;callback_params();

// Get single key
$foo = $client-&gt;callback_params('foo');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|array </span><strong> $param</strong> <small> = <small>NULL</small></small> - $param</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - $value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client|mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function callback_params($param = NULL, $value = NULL)
{
	// Getter for full array
	if ($param === NULL)
		return $this-&gt;_callback_params;

	// Setter for full array
	if (is_array($param))
	{
		$this-&gt;_callback_params = $param;
		return $this;
	}
	// Getter for single value
	elseif ($value === NULL)
	{
		return Arr::get($this-&gt;_callback_params, $param);
	}
	// Setter for single value
	else
	{
		$this-&gt;_callback_params[$param] = $value;
		return $this;
	}

}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute(<small>Request</small> <span class="param" title="$request">$request</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Processes the request, executing the controller action that handles this
request, determined by the <a href="/index.php/">Route</a>.</p>

<ol>
<li>Before the controller action is called, the <a href="#before">Controller::before</a> method
will be called.</li>
<li>Next the controller action will be called.</li>
<li>After the controller action is called, the <a href="#after">Controller::after</a> method
will be called.</li>
</ol>

<p>By default, the output from the controller is captured and returned, and
no headers are sent.</p>

<pre><code>$request-&gt;execute();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - $request</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Uses - [Kohana::$profiling], [Profiler]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute(Request $request)
{
	// Prevent too much recursion of header callback requests
	if ($this-&gt;callback_depth() &gt; $this-&gt;max_callback_depth())
		throw new Request_Client_Recursion_Exception(
				&quot;Could not execute request to :uri - too many recursions after :depth requests&quot;,
				[
					&#039;:uri&#039; =&gt; $request-&gt;uri(),
					&#039;:depth&#039; =&gt; $this-&gt;callback_depth() - 1,
				]);

	// Execute the request and pass the currently used protocol
	$orig_response = $response = Response::factory([&#039;_protocol&#039; =&gt; $request-&gt;protocol()]);

	if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
		return $cache-&gt;execute($this, $request, $response);

	$response = $this-&gt;execute_request($request, $response);

	// Execute response callbacks
	foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
	{
		if ($response-&gt;headers($header))
		{
			$cb_result = call_user_func($callback, $request, $response, $this);

			if ($cb_result instanceof Request)
			{
				// If the callback returns a request, automatically assign client params
				$this-&gt;assign_client_properties($cb_result-&gt;client());
				$cb_result-&gt;client()-&gt;callback_depth($this-&gt;callback_depth() + 1);

				// Execute the request
				$response = $cb_result-&gt;execute();
			}
			elseif ($cb_result instanceof Response)
			{
				// Assign the returned response
				$response = $cb_result;
			}

			// If the callback has created a new response, do not process any further
			if ($response !== $orig_response)
				break;
		}
	}

	return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="follow"><small>public</small>  follow([ <small>bool</small> <span class="param" title="Boolean indicating if redirects should be followed">$follow</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the follow redirects
setting.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">bool </span><strong> $follow</strong> <small> = <small>NULL</small></small> - Boolean indicating if redirects should be followed</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li><li>
<span class='blue'>Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function follow($follow = NULL)
{
	if ($follow === NULL)
		return $this-&gt;_follow;

	$this-&gt;_follow = $follow;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="follow_headers"><small>public</small>  follow_headers([ <small>array</small> <span class="param" title="Array of headers to be re-used when following a Location header">$follow_headers</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the follow redirects
headers array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $follow_headers</strong> <small> = <small>NULL</small></small> - Array of headers to be re-used when following a Location header</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li><li>
<span class='blue'>Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function follow_headers($follow_headers = NULL)
{
	if ($follow_headers === NULL)
		return $this-&gt;_follow_headers;

	$this-&gt;_follow_headers = array_map(&#039;strtolower&#039;, $follow_headers);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="header_callbacks"><small>public</small>  header_callbacks([ <small>array</small> <span class="param" title="Array of callbacks to trigger on presence of given headers">$header_callbacks</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the header callbacks array.</p>

<p>Accepts an array with HTTP response headers as keys and a PHP callback
function as values. These callbacks will be triggered if a response contains
the given header and can either issue a subsequent request or manipulate
the response as required.</p>

<p>By default, the <a href="#on_header_location">Request_Client::on_header_location</a> callback is assigned
to the Location header to support automatic redirect following.</p>

<pre><code>$client-&gt;header_callbacks(array(
    'Location' =&gt; 'Request_Client::on_header_location',
    'WWW-Authenticate' =&gt; function($request, $response, $client) {return $new_response;},
);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $header_callbacks</strong> <small> = <small>NULL</small></small> - Array of callbacks to trigger on presence of given headers</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function header_callbacks($header_callbacks = NULL)
{
	if ($header_callbacks === NULL)
		return $this-&gt;_header_callbacks;

	$this-&gt;_header_callbacks = $header_callbacks;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="max_callback_depth"><small>public</small>  max_callback_depth([ <small>int</small> <span class="param" title="Maximum number of callback requests to execute before aborting">$depth</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the maximum callback depth property.</p>

<p>This protects the main execution from recursive callback execution (eg
following infinite redirects, conflicts between callbacks causing loops
etc). Requests will only be allowed to nest to the level set by this
param before execution is aborted with a Request_Client_Recursion_Exception.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $depth</strong> <small> = <small>NULL</small></small> - Maximum number of callback requests to execute before aborting</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client|int</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function max_callback_depth($depth = NULL)
{
	if ($depth === NULL)
		return $this-&gt;_max_callback_depth;

	$this-&gt;_max_callback_depth = $depth;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_header_location"><small>public static</small>  on_header_location(<small>Request</small> <span class="param" title="$request">$request</span> , <small>Response</small> <span class="param" title="$response">$response</span> , <small>Request_Client</small> <span class="param" title="$client">$client</span> )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>The default handler for following redirects, triggered by the presence of
a Location header in the response.</p>

<p>The client's follow property must be set TRUE and the HTTP response status
one of 201, 301, 302, 303 or 307 for the redirect to be followed.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - $request</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - $response</li>
<li>
 <span class="blue">Request_Client </span><strong> $client</strong> <small>required</small> - $client</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function on_header_location(Request $request, Response $response, Request_Client $client)
{
	// Do we need to follow a Location header ?
	if ($client-&gt;follow() AND in_array($response-&gt;status(), [201, 301, 302, 303, 307]))
	{
		// Figure out which method to use for the follow request
		switch ($response-&gt;status())
		{
			default:
			case 301:
			case 307:
				$follow_method = $request-&gt;method();
				break;
			case 201:
			case 303:
				$follow_method = Request::GET;
				break;
			case 302:
				// Cater for sites with broken HTTP redirect implementations
				if ($client-&gt;strict_redirect())
				{
					$follow_method = $request-&gt;method();
				}
				else
				{
					$follow_method = Request::GET;
				}
				break;
		}

		// Prepare the additional request, copying any follow_headers that were present on the original request
		$orig_headers = $request-&gt;headers()-&gt;getArrayCopy();
		$follow_header_keys = array_intersect(array_keys($orig_headers), $client-&gt;follow_headers());
		$follow_headers = \Arr::extract($orig_headers, $follow_header_keys);

		$follow_request = Request::factory($response-&gt;headers(&#039;Location&#039;))
		                         -&gt;method($follow_method)
		                         -&gt;headers($follow_headers);

		if ($follow_method !== Request::GET)
		{
			$follow_request-&gt;body($request-&gt;body());
		}

		return $follow_request;
	}

	return NULL;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strict_redirect"><small>public</small>  strict_redirect([ <small>bool</small> <span class="param" title="Boolean indicating if 302 redirects should be followed with the original method">$strict_redirect</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request_Client'>Kohana_Request_Client</a>)</small></h3>
<div class='description'><p>Getter and setter for the strict redirects setting</p>

<p class="note">HTTP/1.1 specifies that a 302 redirect should be followed using the
original request method. However, the vast majority of clients and servers
get this wrong, with 302 widely used for 'POST - 302 redirect - GET' patterns.
By default, Kohana's client is fully compliant with the HTTP spec. Some
non-compliant third party sites may require that strict_redirect is set
FALSE to force the client to switch to GET following a 302 response.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">bool </span><strong> $strict_redirect</strong> <small> = <small>NULL</small></small> - Boolean indicating if 302 redirects should be followed with the original method</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function strict_redirect($strict_redirect = NULL)
{
	if ($strict_redirect === NULL)
		return $this-&gt;_strict_redirect;

	$this-&gt;_strict_redirect = $strict_redirect;

	return $this;
}</code>
</pre>
</div>
</div>
</div>