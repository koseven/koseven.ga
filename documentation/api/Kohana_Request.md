---
layout: api
class: Kohana_Request
---
<h1>Kohana_Request</h1>
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/HTTP_Request'>HTTP_Request</a> | <a href='/documentation/api/HTTP_Message'>HTTP_Message</a> | <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a> | <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a></small>
</p>
<p>
<i><p>Request. Uses the <a href="/index.php/">Route</a> class to determine what
<a href="/index.php/">Controller</a> to send the request to.</p>
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
</dl>
<br />
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-GET'>GET</a>
</li>
<li>
<a href='#constant-POST'>POST</a>
</li>
<li>
<a href='#constant-PATCH'>PATCH</a>
</li>
<li>
<a href='#constant-PUT'>PUT</a>
</li>
<li>
<a href='#constant-DELETE'>DELETE</a>
</li>
<li>
<a href='#constant-HEAD'>HEAD</a>
</li>
<li>
<a href='#constant-OPTIONS'>OPTIONS</a>
</li>
<li>
<a href='#constant-TRACE'>TRACE</a>
</li>
<li>
<a href='#constant-CONNECT'>CONNECT</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-client_ip">$client_ip</a>
</li>
<li>
<a href="#property-current">$current</a>
</li>
<li>
<a href="#property-initial">$initial</a>
</li>
<li>
<a href="#property-trusted_proxies">$trusted_proxies</a>
</li>
<li>
<a href="#property-user_agent">$user_agent</a>
</li>
<li>
<a href="#property-_action">$_action</a>
</li>
<li>
<a href="#property-_body">$_body</a>
</li>
<li>
<a href="#property-_client">$_client</a>
</li>
<li>
<a href="#property-_controller">$_controller</a>
</li>
<li>
<a href="#property-_cookies">$_cookies</a>
</li>
<li>
<a href="#property-_directory">$_directory</a>
</li>
<li>
<a href="#property-_external">$_external</a>
</li>
<li>
<a href="#property-_get">$_get</a>
</li>
<li>
<a href="#property-_header">$_header</a>
</li>
<li>
<a href="#property-_method">$_method</a>
</li>
<li>
<a href="#property-_params">$_params</a>
</li>
<li>
<a href="#property-_post">$_post</a>
</li>
<li>
<a href="#property-_protocol">$_protocol</a>
</li>
<li>
<a href="#property-_referrer">$_referrer</a>
</li>
<li>
<a href="#property-_requested_with">$_requested_with</a>
</li>
<li>
<a href="#property-_route">$_route</a>
</li>
<li>
<a href="#property-_routes">$_routes</a>
</li>
<li>
<a href="#property-_secure">$_secure</a>
</li>
<li>
<a href="#property-_uri">$_uri</a>
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
<a href="#accept_encoding">accept_encoding()</a>
</li>
<li>
<a href="#accept_lang">accept_lang()</a>
</li>
<li>
<a href="#accept_type">accept_type()</a>
</li>
<li>
<a href="#action">action()</a>
</li>
<li>
<a href="#body">body()</a>
</li>
<li>
<a href="#client">client()</a>
</li>
<li>
<a href="#content_length">content_length()</a>
</li>
<li>
<a href="#controller">controller()</a>
</li>
<li>
<a href="#cookie">cookie()</a>
</li>
<li>
<a href="#current">current()</a>
</li>
<li>
<a href="#detect_uri">detect_uri()</a>
</li>
<li>
<a href="#directory">directory()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#headers">headers()</a>
</li>
<li>
<a href="#initial">initial()</a>
</li>
<li>
<a href="#is_ajax">is_ajax()</a>
</li>
<li>
<a href="#is_external">is_external()</a>
</li>
<li>
<a href="#is_initial">is_initial()</a>
</li>
<li>
<a href="#method">method()</a>
</li>
<li>
<a href="#param">param()</a>
</li>
<li>
<a href="#post">post()</a>
</li>
<li>
<a href="#post_max_size_exceeded">post_max_size_exceeded()</a>
</li>
<li>
<a href="#process">process()</a>
</li>
<li>
<a href="#protocol">protocol()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#referrer">referrer()</a>
</li>
<li>
<a href="#render">render()</a>
</li>
<li>
<a href="#requested_with">requested_with()</a>
</li>
<li>
<a href="#route">route()</a>
</li>
<li>
<a href="#secure">secure()</a>
</li>
<li>
<a href="#uri">uri()</a>
</li>
<li>
<a href="#url">url()</a>
</li>
<li>
<a href="#user_agent">user_agent()</a>
</li>
<li>
<a href="#_parse_accept">_parse_accept()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-GET'>GET</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(3)</span> "GET"</pre></dd>
<dt>
<h4 id='constant-POST'>POST</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(4)</span> "POST"</pre></dd>
<dt>
<h4 id='constant-PATCH'>PATCH</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "PATCH"</pre></dd>
<dt>
<h4 id='constant-PUT'>PUT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(3)</span> "PUT"</pre></dd>
<dt>
<h4 id='constant-DELETE'>DELETE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(6)</span> "DELETE"</pre></dd>
<dt>
<h4 id='constant-HEAD'>HEAD</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(4)</span> "HEAD"</pre></dd>
<dt>
<h4 id='constant-OPTIONS'>OPTIONS</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(7)</span> "OPTIONS"</pre></dd>
<dt>
<h4 id='constant-TRACE'>TRACE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "TRACE"</pre></dd>
<dt>
<h4 id='constant-CONNECT'>CONNECT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(7)</span> "CONNECT"</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-client_ip'><small>public static</small>  <span class='blue'>string</span> $client_ip</h4>
</dt>
<dd>
 <p>client IP address</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(7)</span> "0.0.0.0"</pre></dd>
<dt>
<h4 id='property-current'><small>public static</small>  <span class='blue'>Request</span> $current</h4>
</dt>
<dd>
 <p>currently executing request instance</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-initial'><small>public static</small>  <span class='blue'>Request</span> $initial</h4>
</dt>
<dd>
 <p>main request instance</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-trusted_proxies'><small>public static</small>  <span class='blue'>string</span> $trusted_proxies</h4>
</dt>
<dd>
 <p>trusted proxy server IPs</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(3)</span> <span>(
    0 => <small>string</small><span>(9)</span> "127.0.0.1"
    1 => <small>string</small><span>(9)</span> "localhost"
    2 => <small>string</small><span>(21)</span> "localhost.localdomain"
)</span></pre></dd>
<dt>
<h4 id='property-user_agent'><small>public static</small>  <span class='blue'>string</span> $user_agent</h4>
</dt>
<dd>
 <p>client user agent</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
<dt>
<h4 id='property-_action'><small>protected</small>  <span class='blue'>string</span> $_action</h4>
</dt>
<dd>
 <p>action to be executed in the controller</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_body'><small>protected</small>  <span class='blue'>string</span> $_body</h4>
</dt>
<dd>
 <p>the body</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_client'><small>protected</small>  <span class='blue'>Kohana_Request_Client</span> $_client</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_controller'><small>protected</small>  <span class='blue'>string</span> $_controller</h4>
</dt>
<dd>
 <p>controller to be executed</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_cookies'><small>protected</small>  <span class='blue'>array</span> $_cookies</h4>
</dt>
<dd>
 <p>cookies to send with the request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_directory'><small>protected</small>  <span class='blue'>string</span> $_directory</h4>
</dt>
<dd>
 <p>controller directory</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
<dt>
<h4 id='property-_external'><small>protected</small>  <span class='blue'>boolean</span> $_external</h4>
</dt>
<dd>
 <p>external request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_get'><small>protected</small>  <span class='blue'>array</span> $_get</h4>
</dt>
<dd>
 <p>query parameters</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_header'><small>protected</small>  <span class='blue'>Kohana_HTTP_Header</span> $_header</h4>
</dt>
<dd>
 <p>headers to sent as part of the request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_method'><small>protected</small>  <span class='blue'>string</span> $_method</h4>
</dt>
<dd>
 <p>method: GET, POST, PUT, DELETE, HEAD, etc</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(3)</span> "GET"</pre></dd>
<dt>
<h4 id='property-_params'><small>protected</small>  <span class='blue'>array</span> $_params</h4>
</dt>
<dd>
 <p>parameters from the route</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_post'><small>protected</small>  <span class='blue'>array</span> $_post</h4>
</dt>
<dd>
 <p>post parameters</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_protocol'><small>protected</small>  <span class='blue'>string</span> $_protocol</h4>
</dt>
<dd>
 <p>protocol: HTTP/1.1, FTP, CLI, etc</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_referrer'><small>protected</small>  <span class='blue'>string</span> $_referrer</h4>
</dt>
<dd>
 <p>referring URL</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_requested_with'><small>protected</small>  <span class='blue'>string</span> $_requested_with</h4>
</dt>
<dd>
 <p>the x-requested-with header which most likely
              will be xmlhttprequest</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_route'><small>protected</small>  <span class='blue'>Route</span> $_route</h4>
</dt>
<dd>
 <p>route matched for this request</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_routes'><small>protected</small>  <span class='blue'>Route</span> $_routes</h4>
</dt>
<dd>
 <p>array of routes to manually look at instead of the global namespace</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_secure'><small>protected</small>  <span class='blue'>boolean</span> $_secure</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_uri'><small>protected</small>  <span class='blue'>string</span> $_uri</h4>
</dt>
<dd>
 <p>the URI of the request</p>
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
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="URI of the request">$uri</span> [, <small>array</small> <span class="param" title="Array of params to pass to the request client">$client_params</span> <small>= <small>array</small><span>(0)</span> </small> , <small>bool</small> <span class="param" title="Allow external requests? (deprecated in 3.3)">$allow_external</span> <small>= <small>bool</small> TRUE</small> , <small>array</small> <span class="param" title="An array of routes to use, for testing">$injected_routes</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Creates a new request object for the given URI. New requests should be
Created using the <a href="#factory">Request::factory</a> method.</p>

<pre><code>$request = new Request($uri);
</code></pre>

<p>If $cache parameter is set, the response for the request will attempt to
be retrieved from the cache.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small>required</small> - URI of the request</li>
<li>
 <span class="blue">array </span><strong> $client_params</strong> <small> = <small>array</small><span>(0)</span> </small> - Array of params to pass to the request client</li>
<li>
 <span class="blue">bool </span><strong> $allow_external</strong> <small> = <small>bool</small> TRUE</small> - Allow external requests? (deprecated in 3.3)</li>
<li>
 <span class="blue">array </span><strong> $injected_routes</strong> <small> = <small>array</small><span>(0)</span> </small> - An array of routes to use, for testing</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Request_Exception</a></li>
<li>Uses - <a href="#all">Route::all</a>, <a href="#matches">Route::matches</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($uri, $client_params = [], $allow_external = TRUE, $injected_routes = [])
{
	$client_params = is_array($client_params) ? $client_params : [];

	// Initialise the header
	$this-&gt;_header = new HTTP_Header([]);

	// Assign injected routes
	$this-&gt;_routes = $injected_routes;

	// Cleanse query parameters from URI (faster that parse_url())
	$split_uri = explode(&#039;?&#039;, $uri);
	$uri = array_shift($split_uri);

	if ($split_uri)
	{
		parse_str($split_uri[0], $this-&gt;_get);
	}

	// Detect protocol (if present)
	// $allow_external = FALSE prevents the default index.php from
	// being able to proxy external pages.
	if ( ! $allow_external OR (strpos($uri, &#039;://&#039;) === FALSE AND strncmp($uri, &#039;//&#039;, 2)))
	{
		// Remove leading and trailing slashes from the URI
		$this-&gt;_uri = trim($uri, &#039;/&#039;);

		// Apply the client
		$this-&gt;_client = new Request_Client_Internal($client_params);
	}
	else
	{
		// Create a route
		$this-&gt;_route = new Route($uri);

		// Store the URI
		$this-&gt;_uri = $uri;

		// Set the security setting if required
		if (strpos($uri, &#039;https://&#039;) === 0)
		{
			$this-&gt;secure(TRUE);
		}

		// Set external state
		$this-&gt;_external = TRUE;

		// Setup the client
		$this-&gt;_client = Request_Client_External::factory($client_params);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns the response as the string representation of a request.</p>

<pre><code>echo $request;
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
	return $this-&gt;render();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accept_encoding"><small>public static</small>  accept_encoding([ <small>string</small> <span class="param" title="Encoding type">$type</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns the accepted encodings. If a specific encoding is defined,
the quality of that encoding will be returned. If the encoding is not
accepted, FALSE will be returned.</p>

<pre><code>$encodings = Request::accept_encoding();
</code></pre>

<p class="note">Deprecated in favor of using <a href="#accepts_encoding_at_quality">HTTP_Header::accepts_encoding_at_quality</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - Encoding type</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - since version 3.3.0</li>
<li>Uses - <a href="#_parse_accept">Request::_parse_accept</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - An array of all types or a specific type as a string 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function accept_encoding($type = NULL)
{
	static $accepts;

	if ($accepts === NULL)
	{
		// Parse the HTTP_ACCEPT_LANGUAGE header
		$accepts = Request::_parse_accept($_SERVER[&#039;HTTP_ACCEPT_ENCODING&#039;]);
	}

	if (isset($type))
	{
		// Return the quality setting for this type
		return isset($accepts[$type]) ? $accepts[$type] : FALSE;
	}

	return $accepts;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accept_lang"><small>public static</small>  accept_lang([ <small>string</small> <span class="param" title="Language code">$lang</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns the accepted languages. If a specific language is defined,
the quality of that language will be returned. If the language is not
accepted, FALSE will be returned.</p>

<pre><code>$langs = Request::accept_lang();
</code></pre>

<p class="note">Deprecated in favor of using <a href="#accepts_language_at_quality">HTTP_Header::accepts_language_at_quality</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $lang</strong> <small> = <small>NULL</small></small> - Language code</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - since version 3.3.0</li>
<li>Uses - <a href="#_parse_accept">Request::_parse_accept</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - An array of all types or a specific type as a string 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function accept_lang($lang = NULL)
{
	static $accepts;

	if ($accepts === NULL)
	{
		// Parse the HTTP_ACCEPT_LANGUAGE header
		$accepts = Request::_parse_accept($_SERVER[&#039;HTTP_ACCEPT_LANGUAGE&#039;]);
	}

	if (isset($lang))
	{
		// Return the quality setting for this lang
		return isset($accepts[$lang]) ? $accepts[$lang] : FALSE;
	}

	return $accepts;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="accept_type"><small>public static</small>  accept_type([ <small>string</small> <span class="param" title="Content MIME type">$type</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns the accepted content types. If a specific type is defined,
the quality of that type will be returned.</p>

<pre><code>$types = Request::accept_type();
</code></pre>

<p class="note">Deprecated in favor of using <a href="#accepts_at_quality">HTTP_Header::accepts_at_quality</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - Content MIME type</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - since version 3.3.0</li>
<li>Uses - <a href="#_parse_accept">Request::_parse_accept</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - An array of all types or a specific type as a string 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function accept_type($type = NULL)
{
	static $accepts;

	if ($accepts === NULL)
	{
		// Parse the HTTP_ACCEPT header
		$accepts = Request::_parse_accept($_SERVER[&#039;HTTP_ACCEPT&#039;], [&#039;*/*&#039; =&gt; 1.0]);
	}

	if (isset($type))
	{
		// Return the quality setting for this type
		return isset($accepts[$type]) ? $accepts[$type] : $accepts[&#039;*/*&#039;];
	}

	return $accepts;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="action"><small>public</small>  action([ <small>string</small> <span class="param" title="Action to execute the controller from">$action</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the action for the controller.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $action</strong> <small> = <small>NULL</small></small> - Action to execute the controller from</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function action($action = NULL)
{
	if ($action === NULL)
	{
		// Act as a getter
		return $this-&gt;_action;
	}

	// Act as a setter
	$this-&gt;_action = (string) $action;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="body"><small>public</small>  body([ <small>string</small> <span class="param" title="Content to set to the object">$content</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP body of the request. The body is
included after the header, separated by a single empty new line.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $content</strong> <small> = <small>NULL</small></small> - Content to set to the object</li>
</ul>
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
	{
		// Act as a getter
		return $this-&gt;_body;
	}

	// Act as a setter
	$this-&gt;_body = $content;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="client"><small>public</small>  client()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Provides access to the <a href="/index.php/">Request_Client</a>.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request_Client</span>  
</li><li>
<span class='blue'>self</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function client(Request_Client $client = NULL)
{
	if ($client === NULL)
		return $this-&gt;_client;
	else
	{
		$this-&gt;_client = $client;
		return $this;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="content_length"><small>public</small>  content_length()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
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
<h3 id="controller"><small>public</small>  controller([ <small>string</small> <span class="param" title="Controller to execute the action">$controller</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the controller for the matched route.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $controller</strong> <small> = <small>NULL</small></small> - Controller to execute the action</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function controller($controller = NULL)
{
	if ($controller === NULL)
	{
		// Act as a getter
		return $this-&gt;_controller;
	}

	// Act as a setter
	$this-&gt;_controller = (string) $controller;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cookie"><small>public</small>  cookie([ <small>mixed</small> <span class="param" title="Cookie name, or array of cookie values">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to cookie">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Set and get cookies values for this request.</p>
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
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cookie($key = NULL, $value = NULL)
{
	if (is_array($key))
	{
		// Act as a setter, replace all cookies
		$this-&gt;_cookies = $key;
		return $this;
	}
	elseif ($key === NULL)
	{
		// Act as a getter, all cookies
		return $this-&gt;_cookies;
	}
	elseif ($value === NULL)
	{
		// Act as a getting, single cookie
		return isset($this-&gt;_cookies[$key]) ? $this-&gt;_cookies[$key] : NULL;
	}

	// Act as a setter for a single cookie
	$this-&gt;_cookies[$key] = (string) $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="current"><small>public static</small>  current()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Return the currently executing request. This is changed to the current
request when <a href="#execute">Request::execute</a> is called and restored when the request
is completed.</p>

<pre><code>$request = Request::current();
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.5</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function current()
{
	return Request::$current;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="detect_uri"><small>public static</small>  detect_uri()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Automatically detects the URI of the main request using PATH_INFO,
REQUEST_URI, PHP_SELF or REDIRECT_URL.</p>

<pre><code>$uri = Request::detect_uri();
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Since - 3.0.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - URI of the main request 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function detect_uri()
{
	if ( ! empty($_SERVER[&#039;PATH_INFO&#039;]))
	{
		// PATH_INFO does not contain the docroot or index
		$uri = $_SERVER[&#039;PATH_INFO&#039;];
	}
	else
	{
		// REQUEST_URI and PHP_SELF include the docroot and index

		if (isset($_SERVER[&#039;REQUEST_URI&#039;]))
		{
			/**
			 * We use REQUEST_URI as the fallback value. The reason
			 * for this is we might have a malformed URL such as:
			 *
			 *  http://localhost/http://example.com/judge.php
			 *
			 * which parse_url can&#039;t handle. So rather than leave empty
			 * handed, we&#039;ll use this.
			 */
			$uri = $_SERVER[&#039;REQUEST_URI&#039;];

			if ($request_uri = parse_url($_SERVER[&#039;REQUEST_URI&#039;], PHP_URL_PATH))
			{
				// Valid URL path found, set it.
				$uri = $request_uri;
			}

			// Decode the request URI
			$uri = rawurldecode($uri);
		}
		elseif (isset($_SERVER[&#039;PHP_SELF&#039;]))
		{
			$uri = $_SERVER[&#039;PHP_SELF&#039;];
		}
		elseif (isset($_SERVER[&#039;REDIRECT_URL&#039;]))
		{
			$uri = $_SERVER[&#039;REDIRECT_URL&#039;];
		}
		else
		{
			// If you ever see this error, please report an issue at http://dev.kohanaphp.com/projects/kohana3/issues
			// along with any relevant information about your web server setup. Thanks!
			throw new Kohana_Exception(&#039;Unable to detect the URI using PATH_INFO, REQUEST_URI, PHP_SELF or REDIRECT_URL&#039;);
		}

		// Get the path from the base URL, including the index file
		$base_url = parse_url(Kohana::$base_url, PHP_URL_PATH);

		if (strpos($uri, $base_url) === 0)
		{
			// Remove the base URL from the URI
			$uri = (string) substr($uri, strlen($base_url));
		}

		if (Kohana::$index_file AND strpos($uri, Kohana::$index_file) === 0)
		{
			// Remove the index file from the URI
			$uri = (string) substr($uri, strlen(Kohana::$index_file));
		}
	}

	return $uri;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="directory"><small>public</small>  directory([ <small>string</small> <span class="param" title="Directory to execute the controller from">$directory</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the directory for the controller.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>NULL</small></small> - Directory to execute the controller from</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function directory($directory = NULL)
{
	if ($directory === NULL)
	{
		// Act as a getter
		return $this-&gt;_directory;
	}

	// Act as a setter
	$this-&gt;_directory = (string) $directory;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
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
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Request_Exception</a>, <a href="/index.php/">HTTP_Exception_404</a></li>
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
<code class="language-php">public function execute()
{
	if ( ! $this-&gt;_external)
	{
		$processed = Request::process($this, $this-&gt;_routes);

		if ($processed)
		{
			// Store the matching route
			$this-&gt;_route = $processed[&#039;route&#039;];
			$params = $processed[&#039;params&#039;];

			// Is this route external?
			$this-&gt;_external = $this-&gt;_route-&gt;is_external();

			if (isset($params[&#039;directory&#039;]))
			{
				// Controllers are in a sub-directory
				$this-&gt;_directory = $params[&#039;directory&#039;];
			}

			// Store the controller
			$this-&gt;_controller = $params[&#039;controller&#039;];

			// Store the action
			$this-&gt;_action = (isset($params[&#039;action&#039;]))
				? $params[&#039;action&#039;]
				: Route::$default_action;

			// These are accessible as public vars and can be overloaded
			unset($params[&#039;controller&#039;], $params[&#039;action&#039;], $params[&#039;directory&#039;]);

			// Params cannot be changed once matched
			$this-&gt;_params = $params;
		}
	}

	if ( ! $this-&gt;_route instanceof Route)
	{
		return HTTP_Exception::factory(404, &#039;Unable to find a route to match the URI: :uri&#039;, [
			&#039;:uri&#039; =&gt; $this-&gt;_uri,
		])-&gt;request($this)
			-&gt;get_response();
	}

	if ( ! $this-&gt;_client instanceof Request_Client)
	{
		throw new Request_Exception(&#039;Unable to execute :uri without a Kohana_Request_Client&#039;, [
			&#039;:uri&#039; =&gt; $this-&gt;_uri,
		]);
	}

	return $this-&gt;_client-&gt;execute($this);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory([ <small>string</small> <span class="param" title="URI of the request">$uri</span> <small>= <small>bool</small> TRUE</small> , <small>array</small> <span class="param" title="An array of params to pass to the request client">$client_params</span> <small>= <small>array</small><span>(0)</span> </small> , <small>bool</small> <span class="param" title="Allow external requests? (deprecated in 3.3)">$allow_external</span> <small>= <small>bool</small> TRUE</small> , <small>array</small> <span class="param" title="An array of routes to use, for testing">$injected_routes</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Creates a new request object for the given URI. New requests should be
Created using the <a href="#factory">Request::factory</a> method.</p>

<pre><code>$request = Request::factory($uri);
</code></pre>

<p>If $cache parameter is set, the response for the request will attempt to
be retrieved from the cache.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>bool</small> TRUE</small> - URI of the request</li>
<li>
 <span class="blue">array </span><strong> $client_params</strong> <small> = <small>array</small><span>(0)</span> </small> - An array of params to pass to the request client</li>
<li>
 <span class="blue">bool </span><strong> $allow_external</strong> <small> = <small>bool</small> TRUE</small> - Allow external requests? (deprecated in 3.3)</li>
<li>
 <span class="blue">array </span><strong> $injected_routes</strong> <small> = <small>array</small><span>(0)</span> </small> - An array of routes to use, for testing</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Request_Exception</a></li>
<li>Uses - <a href="#all">Route::all</a>, <a href="#matches">Route::matches</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void|Request</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($uri = TRUE, $client_params = [], $allow_external = TRUE, $injected_routes = [])
{
	// If this is the initial request
	if ( ! Request::$initial)
	{
		$protocol = HTTP::$protocol;

		if (isset($_SERVER[&#039;REQUEST_METHOD&#039;]))
		{
			// Use the server request method
			$method = $_SERVER[&#039;REQUEST_METHOD&#039;];
		}
		else
		{
			// Default to GET requests
			$method = HTTP_Request::GET;
		}

		if (( ! empty($_SERVER[&#039;HTTPS&#039;]) AND filter_var($_SERVER[&#039;HTTPS&#039;], FILTER_VALIDATE_BOOLEAN))
		   OR (isset($_SERVER[&#039;HTTP_X_FORWARDED_PROTO&#039;])
		   	   AND $_SERVER[&#039;HTTP_X_FORWARDED_PROTO&#039;] === &#039;https&#039;)
		       AND in_array($_SERVER[&#039;REMOTE_ADDR&#039;], Request::$trusted_proxies))
		{
			// This request is secure
			$secure = TRUE;
		}

		if (isset($_SERVER[&#039;HTTP_REFERER&#039;]))
		{
			// There is a referrer for this request
			$referrer = $_SERVER[&#039;HTTP_REFERER&#039;];
		}

		if (isset($_SERVER[&#039;HTTP_USER_AGENT&#039;]))
		{
			// Browser type
			Request::$user_agent = $_SERVER[&#039;HTTP_USER_AGENT&#039;];
		}

		if (isset($_SERVER[&#039;HTTP_X_REQUESTED_WITH&#039;]))
		{
			// Typically used to denote AJAX requests
			$requested_with = $_SERVER[&#039;HTTP_X_REQUESTED_WITH&#039;];
		}

		if (isset($_SERVER[&#039;HTTP_CF_CONNECTING_IP&#039;])
			AND isset($_SERVER[&#039;REMOTE_ADDR&#039;])
			AND in_array($_SERVER[&#039;REMOTE_ADDR&#039;], Request::$trusted_proxies)) {

			// If using CloudFlare, client IP address is sent with this header
			Request::$client_ip = $_SERVER[&#039;HTTP_CF_CONNECTING_IP&#039;];
		}
		elseif (isset($_SERVER[&#039;HTTP_X_FORWARDED_FOR&#039;])
		    AND isset($_SERVER[&#039;REMOTE_ADDR&#039;])
		    AND in_array($_SERVER[&#039;REMOTE_ADDR&#039;], Request::$trusted_proxies))
		{
			// Use the forwarded IP address, typically set when the
			// client is using a proxy server.
			// Format: &quot;X-Forwarded-For: client1, proxy1, proxy2&quot;
			$client_ips = explode(&#039;,&#039;, $_SERVER[&#039;HTTP_X_FORWARDED_FOR&#039;]);

			Request::$client_ip = array_shift($client_ips);

			unset($client_ips);
		}
		elseif (isset($_SERVER[&#039;HTTP_CLIENT_IP&#039;])
		        AND isset($_SERVER[&#039;REMOTE_ADDR&#039;])
		        AND in_array($_SERVER[&#039;REMOTE_ADDR&#039;], Request::$trusted_proxies))
		{
			// Use the forwarded IP address, typically set when the
			// client is using a proxy server.
			$client_ips = explode(&#039;,&#039;, $_SERVER[&#039;HTTP_CLIENT_IP&#039;]);

			Request::$client_ip = trim(end($client_ips));

			unset($client_ips);
		}
		elseif (isset($_SERVER[&#039;REMOTE_ADDR&#039;]))
		{
			// The remote IP address
			Request::$client_ip = $_SERVER[&#039;REMOTE_ADDR&#039;];
		}

		if ($method !== HTTP_Request::GET)
		{
			// Ensure the raw body is saved for future use
			$body = file_get_contents(&#039;php://input&#039;);
		}

		if ($uri === TRUE)
		{
			// Attempt to guess the proper URI
			$uri = Request::detect_uri();
		}

		$cookies = [];

		if (($cookie_keys = array_keys($_COOKIE)))
		{
			foreach ($cookie_keys as $key)
			{
				$cookies[$key] = Cookie::get($key);
			}
		}

		// Create the instance singleton
		Request::$initial = $request = new Request($uri, $client_params, $allow_external, $injected_routes);

		// Store global GET and POST data in the initial request only
		$request-&gt;protocol($protocol)
			-&gt;query($_GET)
			-&gt;post($_POST);

		if (isset($secure))
		{
			// Set the request security
			$request-&gt;secure($secure);
		}

		if (isset($method))
		{
			// Set the request method
			$request-&gt;method($method);
		}

		if (isset($referrer))
		{
			// Set the referrer
			$request-&gt;referrer($referrer);
		}

		if (isset($requested_with))
		{
			// Apply the requested with variable
			$request-&gt;requested_with($requested_with);
		}

		if (isset($body))
		{
			// Set the request body (probably a PUT type)
			$request-&gt;body($body);
		}

		if (isset($cookies))
		{
			$request-&gt;cookie($cookies);
		}
	}
	else
	{
		$request = new Request($uri, $client_params, $allow_external, $injected_routes);
	}

	return $request;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="headers"><small>public</small>  headers([ <small>mixed</small> <span class="param" title="Key or array of key/value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to the supplied key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP headers oo the request. All headers
are included immediately after the HTTP protocol definition during
transmission. This method provides a simple array or key/value
interface to the headers.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or array of key/value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to the supplied key</li>
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
	if ($key instanceof HTTP_Header)
	{
		// Act a setter, replace all headers
		$this-&gt;_header = $key;

		return $this;
	}

	if (is_array($key))
	{
		// Act as a setter, replace all headers
		$this-&gt;_header-&gt;exchangeArray($key);

		return $this;
	}

	if ($this-&gt;_header-&gt;count() === 0 AND $this-&gt;is_initial())
	{
		// Lazy load the request headers
		$this-&gt;_header = HTTP::request_headers();
	}

	if ($key === NULL)
	{
		// Act as a getter, return all headers
		return $this-&gt;_header;
	}
	elseif ($value === NULL)
	{
		// Act as a getter, single header
		return ($this-&gt;_header-&gt;offsetExists($key)) ? $this-&gt;_header-&gt;offsetGet($key) : NULL;
	}

	// Act as a setter for a single header
	$this-&gt;_header[$key] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="initial"><small>public static</small>  initial()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns the first request encountered by this framework. This will should
only be set once during the first <a href="#factory">Request::factory</a> invocation.</p>

<pre><code>// Get the first request
$request = Request::initial();

// Test whether the current request is the first request
if (Request::initial() === Request::current())
     // Do something useful
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.1.0</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function initial()
{
	return Request::$initial;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_ajax"><small>public</small>  is_ajax()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns whether this is an ajax request (as used by JS frameworks)</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function is_ajax()
{
	return ($this-&gt;requested_with() === &#039;xmlhttprequest&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_external"><small>public</small>  is_external()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Readonly access to the <a href="#property:_external">Request::$_external</a> property.</p>

<pre><code>if ( ! $request-&gt;is_external())
     // This is an internal request
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function is_external()
{
	return $this-&gt;_external;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_initial"><small>public</small>  is_initial()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns whether this request is the initial request Kohana received.
Can be used to test for sub requests.</p>

<pre><code>if ( ! $request-&gt;is_initial())
    // This is a sub request
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function is_initial()
{
	return ($this === Request::$initial);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="method"><small>public</small>  method([ <small>string</small> <span class="param" title="Method to use for this request">$method</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP method. Usually GET, POST, PUT or DELETE in
traditional CRUD applications.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $method</strong> <small> = <small>NULL</small></small> - Method to use for this request</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function method($method = NULL)
{
	if ($method === NULL)
	{
		// Act as a getter
		return $this-&gt;_method;
	}

	// Act as a setter
	$this-&gt;_method = strtoupper($method);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="param"><small>public</small>  param([ <small>string</small> <span class="param" title="Key of the value">$key</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Default value if the key is not set">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Retrieves a value from the route parameters.</p>

<pre><code>$id = $request-&gt;param('id');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key of the value</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value if the key is not set</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function param($key = NULL, $default = NULL)
{
	if ($key === NULL)
	{
		// Return the full array
		return $this-&gt;_params;
	}

	return isset($this-&gt;_params[$key]) ? $this-&gt;_params[$key] : $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="post"><small>public</small>  post([ <small>mixed</small> <span class="param" title="Key or key value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to a key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP POST parameters to the request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or key value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to a key</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#path">Arr::path</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function post($key = NULL, $value = NULL)
{
	if (is_array($key))
	{
		// Act as a setter, replace all fields
		$this-&gt;_post = $key;

		return $this;
	}

	if ($key === NULL)
	{
		// Act as a getter, all fields
		return $this-&gt;_post;
	}
	elseif ($value === NULL)
	{
		// Act as a getter, single field
		return Arr::path($this-&gt;_post, $key);
	}

	// Act as a setter, single field
	$this-&gt;_post[$key] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="post_max_size_exceeded"><small>public static</small>  post_max_size_exceeded()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Determines if a file larger than the post_max_size has been uploaded. PHP
does not handle this situation gracefully on its own, so this method
helps to solve that problem.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#bytes">Num::bytes</a>, <a href="#get">Arr::get</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function post_max_size_exceeded()
{
	// Make sure the request method is POST
	if (Request::$initial-&gt;method() !== HTTP_Request::POST)
		return FALSE;

	// Get the post_max_size in bytes
	$max_bytes = Num::bytes(ini_get(&#039;post_max_size&#039;));

	// Error occurred if method is POST, and content length is too long
	return (Arr::get($_SERVER, &#039;CONTENT_LENGTH&#039;) &gt; $max_bytes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="process"><small>public static</small>  process(<small>object</small> <span class="param" title="Request">$request</span> [, <small>array</small> <span class="param" title="Route">$routes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Process a request to find a matching route</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $request</strong> <small>required</small> - Request</li>
<li>
 <span class="blue">array </span><strong> $routes</strong> <small> = <small>NULL</small></small> - Route</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function process(Request $request, $routes = NULL)
{
	// Load routes
	$routes = (empty($routes)) ? Route::all() : $routes;
	$params = NULL;

	foreach ($routes as $route)
	{
		// Use external routes for reverse routing only
		if ($route-&gt;is_external())
		{
			continue;
		}

		// We found something suitable
		if ($params = $route-&gt;matches($request))
		{
			return [
				&#039;params&#039; =&gt; $params,
				&#039;route&#039; =&gt; $route,
			];
		}
	}

	return NULL;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="protocol"><small>public</small>  protocol([ <small>string</small> <span class="param" title="Protocol to set to the request">$protocol</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP protocol. If there is no current protocol set,
it will use the default set in HTTP::$protocol</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to set to the request</li>
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
	if ($protocol === NULL)
	{
		if ($this-&gt;_protocol)
			return $this-&gt;_protocol;
		else
			return $this-&gt;_protocol = HTTP::$protocol;
	}

	// Act as a setter
	$this-&gt;_protocol = strtoupper($protocol);
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>public</small>  query([ <small>mixed</small> <span class="param" title="Key or key value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to a key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP query string.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or key value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to a key</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#path">Arr::path</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function query($key = NULL, $value = NULL)
{
	if (is_array($key))
	{
		// Act as a setter, replace all query strings
		$this-&gt;_get = $key;

		return $this;
	}

	if ($key === NULL)
	{
		// Act as a getter, all query strings
		return $this-&gt;_get;
	}
	elseif ($value === NULL)
	{
		// Act as a getter, single query string
		return Arr::path($this-&gt;_get, $key);
	}

	// Act as a setter, single query string
	$this-&gt;_get[$key] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="referrer"><small>public</small>  referrer([ <small>string</small> <span class="param" title="$referrer">$referrer</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the referrer from the request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $referrer</strong> <small> = <small>NULL</small></small> - $referrer</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function referrer($referrer = NULL)
{
	if ($referrer === NULL)
	{
		// Act as a getter
		return $this-&gt;_referrer;
	}

	// Act as a setter
	$this-&gt;_referrer = (string) $referrer;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="render"><small>public</small>  render()<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Renders the HTTP_Interaction to a string, producing</p>

<ul>
<li>Protocol</li>
<li>Headers</li>
<li><p>Body</p>

<p>If there are variables set to the <code>Kohana_Request::$_post</code>
they will override any values set to body.</p></li>
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
	if ( ! $post = $this-&gt;post())
	{
		$body = $this-&gt;body();
	}
	else
	{
		$body = http_build_query($post, NULL, &#039;&amp;&#039;);
		$this-&gt;body($body)
			-&gt;headers(&#039;content-type&#039;, &#039;application/x-www-form-urlencoded; charset=&#039;.Kohana::$charset);
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
		$cookie_string = [];

		// Parse each
		foreach ($this-&gt;_cookies as $key =&gt; $value)
		{
			$cookie_string[] = $key.&#039;=&#039;.$value;
		}

		// Create the cookie string
		$this-&gt;_header[&#039;cookie&#039;] = implode(&#039;; &#039;, $cookie_string);
	}

	$output = $this-&gt;method().&#039; &#039;.$this-&gt;uri().&#039; &#039;.$this-&gt;protocol().&quot;\r\n&quot;;
	$output .= (string) $this-&gt;_header;
	$output .= $body;

	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="requested_with"><small>public</small>  requested_with([ <small>string</small> <span class="param" title="Requested with value">$requested_with</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Gets and sets the requested with property, which should
be relative to the x-requested-with pseudo header.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $requested_with</strong> <small> = <small>NULL</small></small> - Requested with value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function requested_with($requested_with = NULL)
{
	if ($requested_with === NULL)
	{
		// Act as a getter
		return $this-&gt;_requested_with;
	}

	// Act as a setter
	$this-&gt;_requested_with = strtolower($requested_with);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="route"><small>public</small>  route([ <small>string</small> <span class="param" title="$route">$route</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the route from the request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $route</strong> <small> = <small>NULL</small></small> - $route</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function route(Route $route = NULL)
{
	if ($route === NULL)
	{
		// Act as a getter
		return $this-&gt;_route;
	}

	// Act as a setter
	$this-&gt;_route = $route;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="secure"><small>public</small>  secure([ <small>boolean</small> <span class="param" title="Is this request secure?">$secure</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Getter/Setter to the security settings for this request. This
method should be treated as immutable.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $secure</strong> <small> = <small>NULL</small></small> - Is this request secure?</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function secure($secure = NULL)
{
	if ($secure === NULL)
		return $this-&gt;_secure;

	// Act as a setter
	$this-&gt;_secure = (bool) $secure;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="uri"><small>public</small>  uri([ <small>string</small> <span class="param" title="$uri">$uri</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Sets and gets the uri from the request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>NULL</small></small> - $uri</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function uri($uri = NULL)
{
	if ($uri === NULL)
	{
		// Act as a getter
		return ($this-&gt;_uri === &#039;&#039;) ? &#039;/&#039; : $this-&gt;_uri;
	}

	// Act as a setter
	$this-&gt;_uri = $uri;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="url"><small>public</small>  url([ <small>mixed</small> <span class="param" title="Protocol string or Request object">$protocol</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Create a URL string from the current request. This is a shortcut for:</p>

<pre><code>echo URL::site($this-&gt;request-&gt;uri(), $protocol);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol string or Request object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.7</li>
<li>Uses - <a href="#site">URL::site</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function url($protocol = NULL)
{
	if ($this-&gt;is_external())
	{
		// If it&#039;s an external request return the URI
		return $this-&gt;uri();
	}

	// Create a URI with the current route, convert to a URL and returns
	return URL::site($this-&gt;uri(), $protocol);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="user_agent"><small>public static</small>  user_agent(<small>mixed</small> <span class="param" title="Array or string to return: browser, version, robot, mobile, platform">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Returns information about the initial user agent.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Array or string to return: browser, version, robot, mobile, platform</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:user_agent">Request::$user_agent</a>, <a href="#user_agent">Text::user_agent</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Requested information, FALSE if nothing is found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function user_agent($value)
{
	return Text::user_agent(Request::$user_agent, $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_parse_accept"><small>protected static</small>  _parse_accept(<small>string</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Header to parse">$header</span> [, <small>array</small> <span class="param" title="Default values">$accepts</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Request'>Kohana_Request</a>)</small></h3>
<div class='description'><p>Parses an accept header and returns an array (type => quality) of the
accepted types, ordered by quality.</p>

<pre><code>$accept = Request::_parse_accept($header, $defaults);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
byref  <span class="blue">string </span><strong> $header</strong> <small>required</small> - Header to parse</li>
<li>
 <span class="blue">array </span><strong> $accepts</strong> <small> = <small>NULL</small></small> - Default values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _parse_accept( &amp; $header, array $accepts = NULL)
{
	if ( ! empty($header))
	{
		// Get all of the types
		$types = explode(&#039;,&#039;, $header);

		foreach ($types as $type)
		{
			// Split the type into parts
			$parts = explode(&#039;;&#039;, $type);

			// Make the type only the MIME
			$type = trim(array_shift($parts));

			// Default quality is 1.0
			$quality = 1.0;

			foreach ($parts as $part)
			{
				// Prevent undefined $value notice below
				if (strpos($part, &#039;=&#039;) === FALSE)
					continue;

				// Separate the key and value
				list ($key, $value) = explode(&#039;=&#039;, trim($part));

				if ($key === &#039;q&#039;)
				{
					// There is a quality for this type
					$quality = (float) trim($value);
				}
			}

			// Add the accept type and quality
			$accepts[$type] = $quality;
		}
	}

	// Make sure that accepts is an array
	$accepts = (array) $accepts;

	// Order by quality
	arsort($accepts);

	return $accepts;
}</code>
</pre>
</div>
</div>
</div>