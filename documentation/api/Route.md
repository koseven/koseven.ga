---
layout: api
class: Route
---
<h1>Route</h1>
extends <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>
<br />
<p>
<i><p>Routes are used to determine the controller and action for a requested URI.
Every route generates a regular expression which is used to match a URI
and a route. Routes may also contain keys which can be used to set the
controller, action, and parameters.</p>

<p>Each <key> will be translated to a regular expression using a default
regular expression pattern. You can override the default pattern by providing
a pattern for the key:</p>

<pre><code>// This route will only match when &lt;id&gt; is a digit
Route::set('user', 'user/&lt;action&gt;/&lt;id&gt;', array('id' =&gt; '\d+'));

// This route will match when &lt;path&gt; is anything
Route::set('file', '&lt;path&gt;', array('path' =&gt; '.*'));
</code></pre>

<p>It is also possible to create optional segments by using parentheses in
the URI definition:</p>

<pre><code>// This is the standard default route, and no keys are required
Route::set('default', '(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))');

// This route only requires the &lt;file&gt; key
Route::set('file', '(&lt;path&gt;/)&lt;file&gt;(.&lt;format&gt;)', array('path' =&gt; '.*', 'format' =&gt; '\w+'));
</code></pre>

<p>Routes also provide a way to generate URIs (called "reverse routing"), which
makes them an extremely powerful and flexible way to generate internal links.</p>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Route'>Kohana_Route</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-REGEX_GROUP'>REGEX_GROUP</a>
</li>
<li>
<a href='#constant-REGEX_KEY'>REGEX_KEY</a>
</li>
<li>
<a href='#constant-REGEX_SEGMENT'>REGEX_SEGMENT</a>
</li>
<li>
<a href='#constant-REGEX_ESCAPE'>REGEX_ESCAPE</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-cache">$cache</a>
</li>
<li>
<a href="#property-default_action">$default_action</a>
</li>
<li>
<a href="#property-default_protocol">$default_protocol</a>
</li>
<li>
<a href="#property-localhosts">$localhosts</a>
</li>
<li>
<a href="#property-_defaults">$_defaults</a>
</li>
<li>
<a href="#property-_filters">$_filters</a>
</li>
<li>
<a href="#property-_regex">$_regex</a>
</li>
<li>
<a href="#property-_route_regex">$_route_regex</a>
</li>
<li>
<a href="#property-_routes">$_routes</a>
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
<a href="#all">all()</a>
</li>
<li>
<a href="#cache">cache()</a>
</li>
<li>
<a href="#compile">compile()</a>
</li>
<li>
<a href="#defaults">defaults()</a>
</li>
<li>
<a href="#filter">filter()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#is_external">is_external()</a>
</li>
<li>
<a href="#matches">matches()</a>
</li>
<li>
<a href="#name">name()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#uri">uri()</a>
</li>
<li>
<a href="#url">url()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-REGEX_GROUP'>REGEX_GROUP</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(26)</span> "\(((?:(?&gt;[^()]+)|(?R))*)\)"</pre></dd>
<dt>
<h4 id='constant-REGEX_KEY'>REGEX_KEY</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(18)</span> "&lt;([a-zA-Z0-9_]++)&gt;"</pre></dd>
<dt>
<h4 id='constant-REGEX_SEGMENT'>REGEX_SEGMENT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(12)</span> "[^/.,;?\n]++"</pre></dd>
<dt>
<h4 id='constant-REGEX_ESCAPE'>REGEX_ESCAPE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(17)</span> "[.\+*?[^\]${}=!|]"</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-cache'><small>public static</small>  <span class='blue'>bool</span> $cache</h4>
</dt>
<dd>
 <p>Indicates whether routes are cached</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-default_action'><small>public static</small>  <span class='blue'>string</span> $default_action</h4>
</dt>
<dd>
 <p>default action for all routes</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(5)</span> "index"</pre></dd>
<dt>
<h4 id='property-default_protocol'><small>public static</small>  <span class='blue'>string</span> $default_protocol</h4>
</dt>
<dd>
 <p>default protocol for all routes</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(7)</span> "http://"</pre></dd>
<dt>
<h4 id='property-localhosts'><small>public static</small>  <span class='blue'>array</span> $localhosts</h4>
</dt>
<dd>
 <p>list of valid localhost entries</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(4)</span> <span>(
    0 => <small>bool</small> FALSE
    1 => <small>string</small><span>(0)</span> ""
    2 => <small>string</small><span>(5)</span> "local"
    3 => <small>string</small><span>(9)</span> "localhost"
)</span></pre></dd>
<dt>
<h4 id='property-_defaults'><small>protected</small>  <span class='blue'>array</span> $_defaults</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(2)</span> <span>(
    "action" => <small>string</small><span>(5)</span> "index"
    "host" => <small>bool</small> FALSE
)</span></pre></dd>
<dt>
<h4 id='property-_filters'><small>protected</small>  <span class='blue'>array</span> $_filters</h4>
</dt>
<dd>
 <p>route filters</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_regex'><small>protected</small>  <span class='blue'>array</span> $_regex</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_route_regex'><small>protected</small>  <span class='blue'>string</span> $_route_regex</h4>
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
<h4 id='property-_routes'><small>protected static</small>  <span class='blue'>array</span> $_routes</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(1)</span> <span>(
    "docs/api" => <small>object</small> <span>Route(5)</span> <code>{
        <small>protected</small> _filters => <small>array</small><span>(0)</span> 
        <small>protected</small> _uri => <small>string</small><span>(0)</span> ""
        <small>protected</small> _regex => <small>array</small><span>(1)</span> <span>(
            "class" => <small>string</small><span>(13)</span> "[a-zA-Z0-9_]+"
        )</span>
        <small>protected</small> _defaults => <small>array</small><span>(2)</span> <span>(
            "action" => <small>string</small><span>(5)</span> "index"
            "host" => <small>bool</small> FALSE
        )</span>
        <small>protected</small> _route_regex => <small>string</small><span>(6)</span> "#^$#uD"
    }</code>
)</span></pre></dd>
<dt>
<h4 id='property-_uri'><small>protected</small>  <span class='blue'>string</span> $_uri</h4>
</dt>
<dd>
 <p>route URI</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>string</small> <span class="param" title="Route URI pattern">$uri</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Key patterns">$regex</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Creates a new route. Sets the URI and regular expressions for keys.
Routes should always be created with <a href="#set">Route::set</a> or they will not
be properly stored.</p>

<pre><code>$route = new Route($uri, $regex);
</code></pre>

<p>The $uri parameter should be a string for basic regex matching.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>NULL</small></small> - Route URI pattern</li>
<li>
 <span class="blue">array </span><strong> $regex</strong> <small> = <small>NULL</small></small> - Key patterns</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_compile">Route::_compile</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($uri = NULL, $regex = NULL)
{
	if ($uri === NULL)
	{
		// Assume the route is from cache
		return;
	}

	if ( ! empty($uri))
	{
		$this-&gt;_uri = $uri;
	}

	if ( ! empty($regex))
	{
		$this-&gt;_regex = $regex;
	}

	// Store the compiled regex locally
	$this-&gt;_route_regex = Route::compile($uri, $regex);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="all"><small>public static</small>  all()<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Retrieves all named routes.</p>

<pre><code>$routes = Route::all();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Routes by name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function all()
{
	return Route::$_routes;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache"><small>public static</small>  cache([ <small>boolean</small> <span class="param" title="Cache the current routes">$save</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Append, rather than replace, cached routes when loading">$append</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Saves or loads the route cache. If your routes will remain the same for
a long period of time, use this to reload the routes from the cache
rather than redefining them on every page load.</p>

<pre><code>if ( ! Route::cache())
{
    // Set routes here
    Route::cache(TRUE);
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $save</strong> <small> = <small>bool</small> FALSE</small> - Cache the current routes</li>
<li>
 <span class="blue">boolean </span><strong> $append</strong> <small> = <small>bool</small> FALSE</small> - Append, rather than replace, cached routes when loading</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#cache">Kohana::cache</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  - When saving routes 
</li><li>
<span class='blue'>boolean</span>  - When loading routes 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function cache($save = FALSE, $append = FALSE)
{
	if ($save === TRUE)
	{
		try
		{
			// Cache all defined routes
			Kohana::cache(&#039;Route::cache()&#039;, Route::$_routes);
		}
		catch (Exception $e)
		{
			// We most likely have a lambda in a route, which cannot be cached
			throw new Kohana_Exception(&#039;One or more routes could not be cached (:message)&#039;, [
					&#039;:message&#039; =&gt; $e-&gt;getMessage(),
				], 0, $e);
		}
	}
	else
	{
		if ($routes = Kohana::cache(&#039;Route::cache()&#039;))
		{
			if ($append)
			{
				// Append cached routes
				Route::$_routes += $routes;
			}
			else
			{
				// Replace existing routes
				Route::$_routes = $routes;
			}

			// Routes were cached
			return Route::$cache = TRUE;
		}
		else
		{
			// Routes were not cached
			return Route::$cache = FALSE;
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="compile"><small>public static</small>  compile()<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Returns the compiled regular expression for the route. This translates
keys and optional groups to a proper PCRE regular expression.</p>

<pre><code>$compiled = Route::compile(
   '&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;))',
    array(
      'controller' =&gt; '[a-z]+',
      'id' =&gt; '\d+',
    )
);
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#constant:REGEX_ESCAPE">Route::REGEX_ESCAPE</a>, <a href="#constant:REGEX_SEGMENT">Route::REGEX_SEGMENT</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function compile($uri, array $regex = NULL)
{
	// The URI should be considered literal except for keys and optional parts
	// Escape everything preg_quote would escape except for : ( ) &lt; &gt;
	$expression = preg_replace(&#039;#&#039;.Route::REGEX_ESCAPE.&#039;#&#039;, &#039;\\\\$0&#039;, $uri);

	if (strpos($expression, &#039;(&#039;) !== FALSE)
	{
		// Make optional parts of the URI non-capturing and optional
		$expression = str_replace([&#039;(&#039;, &#039;)&#039;], [&#039;(?:&#039;, &#039;)?&#039;], $expression);
	}

	// Insert default regex for keys
	$expression = str_replace([&#039;&lt;&#039;, &#039;&gt;&#039;], [&#039;(?P&lt;&#039;, &#039;&gt;&#039;.Route::REGEX_SEGMENT.&#039;)&#039;], $expression);

	if ($regex)
	{
		$search = $replace = [];
		foreach ($regex as $key =&gt; $value)
		{
			$search[]  = &quot;&lt;$key&gt;&quot;.Route::REGEX_SEGMENT;
			$replace[] = &quot;&lt;$key&gt;$value&quot;;
		}

		// Replace the default regex with the user-specified regex
		$expression = str_replace($search, $replace, $expression);
	}

	return &#039;#^&#039;.$expression.&#039;$#uD&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="defaults"><small>public</small>  defaults([ <small>array</small> <span class="param" title="Key values">$defaults</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Provides default values for keys when they are not present. The default
action will always be "index" unless it is overloaded here.</p>

<pre><code>$route-&gt;defaults(array(
    'controller' =&gt; 'welcome',
    'action'     =&gt; 'index'
));
</code></pre>

<p>If no parameter is passed, this method will act as a getter.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $defaults</strong> <small> = <small>NULL</small></small> - Key values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  - Or array 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function defaults(array $defaults = NULL)
{
	if ($defaults === NULL)
	{
		return $this-&gt;_defaults;
	}

	$this-&gt;_defaults = $defaults;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="filter"><small>public</small>  filter(<small>array</small> <span class="param" title="Callback string, array, or closure">$callback</span> )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Filters to be run before route parameters are returned:</p>

<pre><code>$route-&gt;filter(
    function(Route $route, $params, Request $request)
    {
        if ($request-&gt;method() !== HTTP_Request::POST)
        {
            return FALSE; // This route only matches POST requests
        }
        if ($params AND $params['controller'] === 'welcome')
        {
            $params['controller'] = 'home';
        }

        return $params;
    }
);
</code></pre>

<p>To prevent a route from matching, return <code>FALSE</code>. To replace the route
parameters, return an array.</p>

<p class="note">Default parameters are added before filters are called!</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $callback</strong> <small>required</small> - Callback string, array, or closure</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function filter($callback)
{
	if ( ! is_callable($callback))
	{
		throw new Kohana_Exception(&#039;Invalid Route::callback specified&#039;);
	}

	$this-&gt;_filters[] = $callback;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public static</small>  get(<small>string</small> <span class="param" title="Route name">$name</span> )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Retrieves a named route.</p>

<pre><code>$route = Route::get('default');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Route name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Route</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function get($name)
{
	if ( ! isset(Route::$_routes[$name]))
	{
		throw new Kohana_Exception(&#039;The requested route does not exist: :route&#039;,
			[&#039;:route&#039; =&gt; $name]);
	}

	return Route::$_routes[$name];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_external"><small>public</small>  is_external()<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Returns whether this route is an external route
to a remote controller.</p>
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
	return ! in_array(Arr::get($this-&gt;_defaults, &#039;host&#039;, FALSE), Route::$localhosts);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="matches"><small>public</small>  matches(<small>Request</small> <span class="param" title="Request object to match">$request</span> )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Tests if the route matches a given Request. A successful match will return
all of the routed parameters as an array. A failed match will return
boolean FALSE.</p>

<pre><code>// Params: controller = users, action = edit, id = 10
$params = $route-&gt;matches(Request::factory('users/edit/10'));
</code></pre>

<p>This method should almost always be used within an if/else block:</p>

<pre><code>if ($params = $route-&gt;matches($request))
{
    // Parse the parameters
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request object to match</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - On success 
</li><li>
<span class='blue'>FALSE</span>  - On failure 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function matches(Request $request)
{
	// Get the URI from the Request
	$uri = trim($request-&gt;uri(), &#039;/&#039;);

	if ( ! preg_match($this-&gt;_route_regex, $uri, $matches))
		return FALSE;

	$params = [];
	foreach ($matches as $key =&gt; $value)
	{
		if (is_int($key))
		{
			// Skip all unnamed keys
			continue;
		}

		// Set the value for all matched keys
		$params[$key] = $value;
	}

	foreach ($this-&gt;_defaults as $key =&gt; $value)
	{
		if ( ! isset($params[$key]) OR $params[$key] === &#039;&#039;)
		{
			// Set default values for any key that was not matched
			$params[$key] = $value;
		}
	}

	if ( ! empty($params[&#039;controller&#039;]))
	{
		// PSR-0: Replace underscores with spaces, run ucwords, then replace underscore
		$params[&#039;controller&#039;] = str_replace(&#039; &#039;, &#039;_&#039;, ucwords(str_replace(&#039;_&#039;, &#039; &#039;, $params[&#039;controller&#039;])));
	}

	if ( ! empty($params[&#039;directory&#039;]))
	{
		// PSR-0: Replace underscores with spaces, run ucwords, then replace underscore
		$params[&#039;directory&#039;] = str_replace(&#039; &#039;, &#039;_&#039;, ucwords(str_replace(&#039;_&#039;, &#039; &#039;, $params[&#039;directory&#039;])));
	}

	if ($this-&gt;_filters)
	{
		foreach ($this-&gt;_filters as $callback)
		{
			// Execute the filter giving it the route, params, and request
			$return = call_user_func($callback, $this, $params, $request);

			if ($return === FALSE)
			{
				// Filter has aborted the match
				return FALSE;
			}
			elseif (is_array($return))
			{
				// Filter has modified the parameters
				$params = $return;
			}
		}
	}

	return $params;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="name"><small>public static</small>  name(<small>Route</small> <span class="param" title="Instance">$route</span> )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Get the name of a route.</p>

<pre><code>$name = Route::name($route)
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Route </span><strong> $route</strong> <small>required</small> - Instance</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function name(Route $route)
{
	return array_search($route, Route::$_routes);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public static</small>  set(<small>string</small> <span class="param" title="Route name">$name</span> [, <small>string</small> <span class="param" title="URI pattern">$uri</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Regex patterns for route keys">$regex</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Stores a named route and returns it. The "action" will always be set to
"index" if it is not defined.</p>

<pre><code>Route::set('default', '(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))')
    -&gt;defaults(array(
        'controller' =&gt; 'welcome',
    ));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Route name</li>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>NULL</small></small> - URI pattern</li>
<li>
 <span class="blue">array </span><strong> $regex</strong> <small> = <small>NULL</small></small> - Regex patterns for route keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Route</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function set($name, $uri = NULL, $regex = NULL)
{
	return Route::$_routes[$name] = new Route($uri, $regex);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="uri"><small>public</small>  uri([ <small>array</small> <span class="param" title="URI parameters">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Generates a URI for the current route based on the parameters given.</p>

<pre><code>// Using the "default" route: "users/profile/10"
$route-&gt;uri(array(
    'controller' =&gt; 'users',
    'action'     =&gt; 'profile',
    'id'         =&gt; '10'
));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - URI parameters</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Uses - <a href="#constant:REGEX_GROUP">Route::REGEX_GROUP</a>, <a href="#constant:REGEX_KEY">Route::REGEX_KEY</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function uri(array $params = NULL)
{
	if ($params)
	{
		// @issue #4079 rawurlencode parameters
		$params = array_map(&#039;rawurlencode&#039;, $params);
		// decode slashes back, see Apache docs about AllowEncodedSlashes and AcceptPathInfo
		$params = str_replace([&#039;%2F&#039;, &#039;%5C&#039;], [&#039;/&#039;, &#039;\\&#039;], $params);
	}

	$defaults = $this-&gt;_defaults;

	/**
	 * Recursively compiles a portion of a URI specification by replacing
	 * the specified parameters and any optional parameters that are needed.
	 *
	 * @param   string  $portion    Part of the URI specification
	 * @param   boolean $required   Whether or not parameters are required (initially)
	 * @return  array   Tuple of the compiled portion and whether or not it contained specified parameters
	 */
	$compile = function ($portion, $required) use (&amp;$compile, $defaults, $params)
	{
		$missing = [];

		$pattern = &#039;#(?:&#039;.Route::REGEX_KEY.&#039;|&#039;.Route::REGEX_GROUP.&#039;)#&#039;;
		$result = preg_replace_callback($pattern, function ($matches) use (&amp;$compile, $defaults, &amp;$missing, $params, &amp;$required)
		{
			if ($matches[0][0] === &#039;&lt;&#039;)
			{
				// Parameter, unwrapped
				$param = $matches[1];

				if (isset($params[$param]))
				{
					// This portion is required when a specified
					// parameter does not match the default
					$required = ($required OR ! isset($defaults[$param]) OR $params[$param] !== $defaults[$param]);

					// Add specified parameter to this result
					return $params[$param];
				}

				// Add default parameter to this result
				if (isset($defaults[$param]))
					return $defaults[$param];

				// This portion is missing a parameter
				$missing[] = $param;
			}
			else
			{
				// Group, unwrapped
				$result = $compile($matches[2], FALSE);

				if ($result[1])
				{
					// This portion is required when it contains a group
					// that is required
					$required = TRUE;

					// Add required groups to this result
					return $result[0];
				}

				// Do not add optional groups to this result
			}
		}, $portion);

		if ($required AND $missing)
		{
			throw new Kohana_Exception(
				&#039;Required route parameter not passed: :param&#039;,
				[&#039;:param&#039; =&gt; reset($missing)]
			);
		}

		return [$result, $required];
	};

	list($uri) = $compile($this-&gt;_uri, TRUE);

	// Trim all extra slashes from the URI
	$uri = preg_replace(&#039;#//+#&#039;, &#039;/&#039;, rtrim($uri, &#039;/&#039;));

	if ($this-&gt;is_external())
	{
		// Need to add the host to the URI
		$host = $this-&gt;_defaults[&#039;host&#039;];

		if (strpos($host, &#039;://&#039;) === FALSE)
		{
			// Use the default defined protocol
			$host = Route::$default_protocol.$host;
		}

		// Clean up the host and prepend it to the URI
		$uri = rtrim($host, &#039;/&#039;).&#039;/&#039;.$uri;
	}

	return $uri;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="url"><small>public static</small>  url(<small>string</small> <span class="param" title="Route name">$name</span> [, <small>array</small> <span class="param" title="URI parameters">$params</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Protocol string or boolean, adds protocol and domain">$protocol</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Route'>Kohana_Route</a>)</small></h3>
<div class='description'><p>Create a URL from a route name. This is a shortcut for:</p>

<pre><code>echo URL::site(Route::get($name)-&gt;uri($params), $protocol);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Route name</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - URI parameters</li>
<li>
 <span class="blue">mixed </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol string or boolean, adds protocol and domain</li>
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
<code class="language-php">public static function url($name, array $params = NULL, $protocol = NULL)
{
	$route = Route::get($name);

	// Create a URI with the route and convert it to a URL
	if ($route-&gt;is_external())
		return $route-&gt;uri($params);
	else
		return URL::site($route-&gt;uri($params), $protocol);
}</code>
</pre>
</div>
</div>
</div>