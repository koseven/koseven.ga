---
layout: api
class: HTTP_Cache
---
<h1>HTTP_Cache</h1>
extends <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>
<br />
<p>
<i><p>HTTP Caching adaptor class that provides caching services to the
<a href="/index.php/">Request_Client</a> class, using HTTP cache control logic as defined in
RFC 2616.</p>
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
<dd>3.2.0</dd>
</dl>
<br />
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-CACHE_STATUS_KEY'>CACHE_STATUS_KEY</a>
</li>
<li>
<a href='#constant-CACHE_STATUS_SAVED'>CACHE_STATUS_SAVED</a>
</li>
<li>
<a href='#constant-CACHE_STATUS_HIT'>CACHE_STATUS_HIT</a>
</li>
<li>
<a href='#constant-CACHE_STATUS_MISS'>CACHE_STATUS_MISS</a>
</li>
<li>
<a href='#constant-CACHE_HIT_KEY'>CACHE_HIT_KEY</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-_allow_private_cache">$_allow_private_cache</a>
</li>
<li>
<a href="#property-_cache">$_cache</a>
</li>
<li>
<a href="#property-_cache_key_callback">$_cache_key_callback</a>
</li>
<li>
<a href="#property-_request_time">$_request_time</a>
</li>
<li>
<a href="#property-_response_time">$_response_time</a>
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
<a href="#allow_private_cache">allow_private_cache()</a>
</li>
<li>
<a href="#basic_cache_key_generator">basic_cache_key_generator()</a>
</li>
<li>
<a href="#cache">cache()</a>
</li>
<li>
<a href="#cache_key_callback">cache_key_callback()</a>
</li>
<li>
<a href="#cache_lifetime">cache_lifetime()</a>
</li>
<li>
<a href="#cache_response">cache_response()</a>
</li>
<li>
<a href="#create_cache_key">create_cache_key()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#invalidate_cache">invalidate_cache()</a>
</li>
<li>
<a href="#request_execution_time">request_execution_time()</a>
</li>
<li>
<a href="#set_cache">set_cache()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-CACHE_STATUS_KEY'>CACHE_STATUS_KEY</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(14)</span> "x-cache-status"</pre></dd>
<dt>
<h4 id='constant-CACHE_STATUS_SAVED'>CACHE_STATUS_SAVED</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "SAVED"</pre></dd>
<dt>
<h4 id='constant-CACHE_STATUS_HIT'>CACHE_STATUS_HIT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(3)</span> "HIT"</pre></dd>
<dt>
<h4 id='constant-CACHE_STATUS_MISS'>CACHE_STATUS_MISS</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(4)</span> "MISS"</pre></dd>
<dt>
<h4 id='constant-CACHE_HIT_KEY'>CACHE_HIT_KEY</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(12)</span> "x-cache-hits"</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_allow_private_cache'><small>protected</small>  <span class='blue'>boolean</span> $_allow_private_cache</h4>
</dt>
<dd>
 <p>Defines whether this client should cache <code>private</code> cache directives</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_cache'><small>protected</small>  <span class='blue'>Cache</span> $_cache</h4>
</dt>
<dd>
 <p>cache driver to use for HTTP caching</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_cache_key_callback'><small>protected</small>  <span class='blue'>callback</span> $_cache_key_callback</h4>
</dt>
<dd>
 <p>Cache key generator callback</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_request_time'><small>protected</small>  <span class='blue'>int</span> $_request_time</h4>
</dt>
<dd>
 <p>The timestamp of the request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_response_time'><small>protected</small>  <span class='blue'>int</span> $_response_time</h4>
</dt>
<dd>
 <p>The timestamp of the response</p>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title=" ">$options</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Constructor method for this class. Allows dependency injection of the
required components such as <code>Cache</code> and the cache key generator.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $options</strong> <small> = <small>array</small><span>(0)</span> </small> -  </li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $options = [])
{
	foreach ($options as $key =&gt; $value)
	{
		if (method_exists($this, $key))
		{
			$this-&gt;$key($value);
		}
	}

	if ($this-&gt;_cache_key_callback === NULL)
	{
		$this-&gt;cache_key_callback(&#039;HTTP_Cache::basic_cache_key_generator&#039;);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="allow_private_cache"><small>public</small>  allow_private_cache([ <small>boolean</small> <span class="param" title="Allow caching of privately marked responses">$setting</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Gets or sets the <a href="#allow_private_cache">Request_Client::allow_private_cache</a> setting.
If set to <code>TRUE</code>, the client will also cache cache-control directives
that have the <code>private</code> setting.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $setting</strong> <small> = <small>NULL</small></small> - Allow caching of privately marked responses</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.9">http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.9</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li><li>
<span class='blue'>[Request_Client]</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function allow_private_cache($setting = NULL)
{
	if ($setting === NULL)
		return $this-&gt;_allow_private_cache;

	$this-&gt;_allow_private_cache = (bool) $setting;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="basic_cache_key_generator"><small>public static</small>  basic_cache_key_generator(<small>Request</small> <span class="param" title="$request">$request</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Basic cache key generator that hashes the entire request and returns
it. This is fine for static content, or dynamic content where user
specific information is encoded into the request.</p>

<pre><code> // Generate cache key
 $cache_key = HTTP_Cache::basic_cache_key_generator($request);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - $request</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function basic_cache_key_generator(Request $request)
{
	$uri     = $request-&gt;uri();
	$query   = $request-&gt;query();
	$headers = $request-&gt;headers()-&gt;getArrayCopy();
	$body    = $request-&gt;body();

	return sha1($uri.&#039;?&#039;.http_build_query($query, NULL, &#039;&amp;&#039;).&#039;~&#039;.implode(&#039;~&#039;, $headers).&#039;~&#039;.$body);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache"><small>public</small>  cache([ <small>Kohana_Cache</small> <span class="param" title="Engine to use for caching">$cache</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Getter and setter for the internal caching engine,
used to cache responses if available and valid.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Kohana_Cache </span><strong> $cache</strong> <small> = <small>NULL</small></small> - Engine to use for caching</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Kohana_Cache</span>  
</li><li>
<span class='blue'>Kohana_Request_Client</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cache(Cache $cache = NULL)
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
<h3 id="cache_key_callback"><small>public</small>  cache_key_callback([ <small>callback</small> <span class="param" title="$callback">$callback</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Sets or gets the cache key generator callback for this caching
class. The cache key generator provides a unique hash based on the
<code>Request</code> object passed to it.</p>

<p>The default generator is <a href="#basic_cache_key_generator">HTTP_Cache::basic_cache_key_generator()</a>, which
serializes the entire <code>HTTP_Request</code> into a unique sha1 hash. This will
provide basic caching for static and simple dynamic pages. More complex
algorithms can be defined and then passed into <code>HTTP_Cache</code> using this
method.</p>

<pre><code> // Get the cache key callback
 $callback = $http_cache-&gt;cache_key_callback();

 // Set the cache key callback
 $http_cache-&gt;cache_key_callback('Foo::cache_key');

 // Alternatively, in PHP 5.3 use a closure
 $http_cache-&gt;cache_key_callback(function (Request $request) {
       return sha1($request-&gt;render());
 });
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">callback </span><strong> $callback</strong> <small> = <small>NULL</small></small> - $callback</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">HTTP_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cache_key_callback($callback = NULL)
{
	if ($callback === NULL)
		return $this-&gt;_cache_key_callback;

	if ( ! is_callable($callback))
		throw new Kohana_Exception(&#039;cache_key_callback must be callable!&#039;);

	$this-&gt;_cache_key_callback = $callback;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache_lifetime"><small>public</small>  cache_lifetime(<small>Response</small> <span class="param" title="Response to evaluate">$response</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Calculates the total Time To Live based on the specification
RFC 2616 cache lifetime rules.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - Response to evaluate</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - TTL value or false if the response should not be cached 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cache_lifetime(Response $response)
{
	// Get out of here if this cannot be cached
	if ( ! $this-&gt;set_cache($response))
		return FALSE;

	// Calculate apparent age
	if ($date = $response-&gt;headers(&#039;date&#039;))
	{
		$apparent_age = max(0, $this-&gt;_response_time - strtotime($date));
	}
	else
	{
		$apparent_age = max(0, $this-&gt;_response_time);
	}

	// Calculate corrected received age
	if ($age = $response-&gt;headers(&#039;age&#039;))
	{
		$corrected_received_age = max($apparent_age, intval($age));
	}
	else
	{
		$corrected_received_age = $apparent_age;
	}

	// Corrected initial age
	$corrected_initial_age = $corrected_received_age + $this-&gt;request_execution_time();

	// Resident time
	$resident_time = time() - $this-&gt;_response_time;

	// Current age
	$current_age = $corrected_initial_age + $resident_time;

	// Prepare the cache freshness lifetime
	$ttl = NULL;

	// Cache control overrides
	if ($cache_control = $response-&gt;headers(&#039;cache-control&#039;))
	{
		// Parse the cache control header
		$cache_control = HTTP_Header::parse_cache_control($cache_control);

		if (isset($cache_control[&#039;max-age&#039;]))
		{
			$ttl = $cache_control[&#039;max-age&#039;];
		}

		if (isset($cache_control[&#039;s-maxage&#039;]) AND isset($cache_control[&#039;private&#039;]) AND $this-&gt;_allow_private_cache)
		{
			$ttl = $cache_control[&#039;s-maxage&#039;];
		}

		if (isset($cache_control[&#039;max-stale&#039;]) AND ! isset($cache_control[&#039;must-revalidate&#039;]))
		{
			$ttl = $current_age + $cache_control[&#039;max-stale&#039;];
		}
	}

	// If we have a TTL at this point, return
	if ($ttl !== NULL)
		return $ttl;

	if ($expires = $response-&gt;headers(&#039;expires&#039;))
		return strtotime($expires) - $current_age;

	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache_response"><small>public</small>  cache_response(<small>string</small> <span class="param" title="The cache key to use">$key</span> , <small>Request</small> <span class="param" title="The HTTP Request">$request</span> [, <small>Response</small> <span class="param" title="The HTTP Response">$response</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Caches a <a href="/index.php/">Response</a> using the supplied <a href="/index.php/">Cache</a>
and the key generated by <a href="#_create_cache_key">Request_Client::_create_cache_key</a>.</p>

<p>If not response is supplied, the cache will be checked for an existing
one that is available.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - The cache key to use</li>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - The HTTP Request</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small> = <small>NULL</small></small> - The HTTP Response</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cache_response($key, Request $request, Response $response = NULL)
{
	if ( ! $this-&gt;_cache instanceof Cache)
		return FALSE;

	// Check for Pragma: no-cache
	if ($pragma = $request-&gt;headers(&#039;pragma&#039;))
	{
		if ($pragma  == &#039;no-cache&#039;)
			return FALSE;
		elseif (is_array($pragma) AND in_array(&#039;no-cache&#039;, $pragma))
			return FALSE;
	}

	// If there is no response, lookup an existing cached response
	if ($response === NULL)
	{
		$response = $this-&gt;_cache-&gt;get($key);

		if ( ! $response instanceof Response)
			return FALSE;

		// Do cache hit arithmetic, using fast arithmetic if available
		if ($this-&gt;_cache instanceof Cache_Arithmetic)
		{
			$hit_count = $this-&gt;_cache-&gt;increment(HTTP_Cache::CACHE_HIT_KEY.$key);
		}
		else
		{
			$hit_count = $this-&gt;_cache-&gt;get(HTTP_Cache::CACHE_HIT_KEY.$key);
			$this-&gt;_cache-&gt;set(HTTP_Cache::CACHE_HIT_KEY.$key, ++$hit_count);
		}

		// Update the header to have correct HIT status and count
		$response-&gt;headers(HTTP_Cache::CACHE_STATUS_KEY,
			HTTP_Cache::CACHE_STATUS_HIT)
			-&gt;headers(HTTP_Cache::CACHE_HIT_KEY, $hit_count);

		return $response;
	}
	else
	{
		if (($ttl = $this-&gt;cache_lifetime($response)) === FALSE)
			return FALSE;

		$response-&gt;headers(HTTP_Cache::CACHE_STATUS_KEY,
			HTTP_Cache::CACHE_STATUS_SAVED);

		// Set the hit count to zero
		$this-&gt;_cache-&gt;set(HTTP_Cache::CACHE_HIT_KEY.$key, 0);

		return $this-&gt;_cache-&gt;set($key, $response, $ttl);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_cache_key"><small>public</small>  create_cache_key(<small>Request</small> <span class="param" title="Request to create key for">$request</span> [, <small>callback</small> <span class="param" title="Optional callback to use instead of built-in method">$callback</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Creates a cache key for the request to use for caching
<a href="/index.php/">Kohana_Response</a> returned by <a href="#execute">Request::execute</a>.</p>

<p>This is the default cache key generating logic, but can be overridden
by setting <a href="#cache_key_callback">HTTP_Cache::cache_key_callback()</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request to create key for</li>
<li>
 <span class="blue">callback </span><strong> $callback</strong> <small> = <small>bool</small> FALSE</small> - Optional callback to use instead of built-in method</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function create_cache_key(Request $request, $callback = FALSE)
{
	if (is_callable($callback))
		return call_user_func($callback, $request);
	else
		return HTTP_Cache::basic_cache_key_generator($request);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute(<small>Request_Client</small> <span class="param" title="Client to execute with Cache-Control">$client</span> , <small>Request</small> <span class="param" title="Request to execute with client">$request</span> , $response )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Executes the supplied <a href="/index.php/">Request</a> with the supplied <a href="/index.php/">Request_Client</a>.
Before execution, the HTTP_Cache adapter checks the request type,
destructive requests such as <code>POST</code>, <code>PUT</code> and <code>DELETE</code> will bypass
cache completely and ensure the response is not cached. All other
Request methods will allow caching, if the rules are met.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request_Client </span><strong> $client</strong> <small>required</small> - Client to execute with Cache-Control</li>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request to execute with client</li>
<li>
 <span class="blue">unknown </span><strong> $response</strong> <small>required</small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>[Response]</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute(Request_Client $client, Request $request, Response $response)
{
	if ( ! $this-&gt;_cache instanceof Cache)
		return $client-&gt;execute_request($request, $response);

	// If this is a destructive request, by-pass cache completely
	if (in_array($request-&gt;method(), [
		HTTP_Request::POST, 
		HTTP_Request::PUT, 
		HTTP_Request::DELETE]))
	{
		// Kill existing caches for this request
		$this-&gt;invalidate_cache($request);

		$response = $client-&gt;execute_request($request, $response);

		$cache_control = HTTP_Header::create_cache_control([
			&#039;no-cache&#039;,
			&#039;must-revalidate&#039;
		]);

		// Ensure client respects destructive action
		return $response-&gt;headers(&#039;cache-control&#039;, $cache_control);
	}

	// Create the cache key
	$cache_key = $this-&gt;create_cache_key($request, $this-&gt;_cache_key_callback);

	// Try and return cached version
	if (($cached_response = $this-&gt;cache_response($cache_key, $request)) instanceof Response)
		return $cached_response;

	// Start request time
	$this-&gt;_request_time = time();

	// Execute the request with the Request client
	$response = $client-&gt;execute_request($request, $response);

	// Stop response time
	$this-&gt;_response_time = (time() - $this-&gt;_request_time);

	// Cache the response
	$this-&gt;cache_response($cache_key, $request, $response);

	$response-&gt;headers(HTTP_Cache::CACHE_STATUS_KEY, 
		HTTP_Cache::CACHE_STATUS_MISS);

	return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>mixed</small> <span class="param" title="Cache engine to use">$cache</span> [, <small>array</small> <span class="param" title="Options to set to this class">$options</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Factory method for HTTP_Cache that provides a convenient dependency
injector for the Cache library.</p>

<pre><code> // Create HTTP_Cache with named cache engine
 $http_cache = HTTP_Cache::factory('memcache', array(
     'allow_private_cache' =&gt; FALSE
     )
 );

 // Create HTTP_Cache with supplied cache engine
 $http_cache = HTTP_Cache::factory(Cache::instance('memcache'),
     array(
         'allow_private_cache' =&gt; FALSE
     )
 );
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $cache</strong> <small>required</small> - Cache engine to use</li>
<li>
 <span class="blue">array </span><strong> $options</strong> <small> = <small>array</small><span>(0)</span> </small> - Options to set to this class</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="/index.php/">Cache</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Cache</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($cache, array $options = [])
{
	if ( ! $cache instanceof Cache)
	{
		$cache = Cache::instance($cache);
	}

	$options[&#039;cache&#039;] = $cache;

	return new HTTP_Cache($options);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="invalidate_cache"><small>public</small>  invalidate_cache(<small>Request</small> <span class="param" title="Response to remove from cache">$request</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Invalidate a cached response for the <a href="/index.php/">Request</a> supplied.
This has the effect of deleting the response from the
<a href="/index.php/">Cache</a> entry.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Response to remove from cache</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function invalidate_cache(Request $request)
{
	if (($cache = $this-&gt;cache()) instanceof Cache)
	{
		$cache-&gt;delete($this-&gt;create_cache_key($request, $this-&gt;_cache_key_callback));
	}

	return;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="request_execution_time"><small>public</small>  request_execution_time()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Returns the duration of the last request execution.
Either returns the time of completed requests or
<code>FALSE</code> if the request hasn't finished executing, or
is yet to be run.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function request_execution_time()
{
	if ($this-&gt;_request_time === NULL OR $this-&gt;_response_time === NULL)
		return FALSE;

	return $this-&gt;_response_time - $this-&gt;_request_time;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_cache"><small>public</small>  set_cache(<small>Response</small> <span class="param" title="The Response">$response</span> )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Cache'>Kohana_HTTP_Cache</a>)</small></h3>
<div class='description'><p>Controls whether the response can be cached. Uses HTTP
protocol to determine whether the response can be cached.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - The Response</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.w3.org/Protocols/rfc2616/rfc2616.html">RFC 2616</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_cache(Response $response)
{
	$headers = $response-&gt;headers()-&gt;getArrayCopy();

	if ($cache_control = Arr::get($headers, &#039;cache-control&#039;))
	{
		// Parse the cache control
		$cache_control = HTTP_Header::parse_cache_control($cache_control);

		// If the no-cache or no-store directive is set, return
		if (array_intersect($cache_control, [&#039;no-cache&#039;, &#039;no-store&#039;]))
			return FALSE;

		// Check for private cache and get out of here if invalid
		if ( ! $this-&gt;_allow_private_cache AND in_array(&#039;private&#039;, $cache_control))
		{
			if ( ! isset($cache_control[&#039;s-maxage&#039;]))
				return FALSE;

			// If there is a s-maxage directive we can use that
			$cache_control[&#039;max-age&#039;] = $cache_control[&#039;s-maxage&#039;];
		}

		// Check that max-age has been set and if it is valid for caching
		if (isset($cache_control[&#039;max-age&#039;]) AND $cache_control[&#039;max-age&#039;] &lt; 1)
			return FALSE;
	}

	if ($expires = Arr::get($headers, &#039;expires&#039;) AND ! isset($cache_control[&#039;max-age&#039;]))
	{
		// Can&#039;t cache things that have expired already
		if (strtotime($expires) &lt;= time())
			return FALSE;
	}

	return TRUE;
}</code>
</pre>
</div>
</div>
</div>