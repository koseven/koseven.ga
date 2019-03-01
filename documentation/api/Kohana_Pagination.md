---
layout: api
class: Kohana_Pagination
---
<h1>Kohana_Pagination</h1>
<p>
<i><p>Pagination links generator.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Koseven/Pagination</dd>
<dt>category</dt>
<dd>Base</dd>
<dt>author</dt>
<dd>Koseven Team</dd>
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
<a href="#property-_request">$_request</a>
</li>
<li>
<a href="#property-_route">$_route</a>
</li>
<li>
<a href="#property-_route_params">$_route_params</a>
</li>
<li>
<a href="#property-config">$config</a>
</li>
<li>
<a href="#property-current_first_item">$current_first_item</a>
</li>
<li>
<a href="#property-current_last_item">$current_last_item</a>
</li>
<li>
<a href="#property-current_page">$current_page</a>
</li>
<li>
<a href="#property-first_page">$first_page</a>
</li>
<li>
<a href="#property-items_per_page">$items_per_page</a>
</li>
<li>
<a href="#property-last_page">$last_page</a>
</li>
<li>
<a href="#property-next_page">$next_page</a>
</li>
<li>
<a href="#property-offset">$offset</a>
</li>
<li>
<a href="#property-previous_page">$previous_page</a>
</li>
<li>
<a href="#property-total_items">$total_items</a>
</li>
<li>
<a href="#property-total_pages">$total_pages</a>
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
<a href="#__get">__get()</a>
</li>
<li>
<a href="#__set">__set()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#config_group">config_group()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#render">render()</a>
</li>
<li>
<a href="#request">request()</a>
</li>
<li>
<a href="#route">route()</a>
</li>
<li>
<a href="#route_params">route_params()</a>
</li>
<li>
<a href="#setup">setup()</a>
</li>
<li>
<a href="#url">url()</a>
</li>
<li>
<a href="#valid_page">valid_page()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_request'><small>protected</small>  <span class='blue'></span> $_request</h4>
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
<h4 id='property-_route'><small>protected</small>  <span class='blue'></span> $_route</h4>
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
<h4 id='property-_route_params'><small>protected</small>  <span class='blue'></span> $_route_params</h4>
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
<h4 id='property-config'><small>protected</small>  <span class='blue'></span> $config</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(6)</span> <span>(
    "current_page" => <small>array</small><span>(2)</span> <span>(
        "source" => <small>string</small><span>(12)</span> "query_string"
        "key" => <small>string</small><span>(4)</span> "page"
    )</span>
    "total_items" => <small>integer</small> 0
    "items_per_page" => <small>integer</small> 10
    "view" => <small>string</small><span>(16)</span> "pagination/basic"
    "auto_hide" => <small>bool</small> TRUE
    "first_page_in_url" => <small>bool</small> FALSE
)</span></pre></dd>
<dt>
<h4 id='property-current_first_item'><small>protected</small>  <span class='blue'></span> $current_first_item</h4>
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
<h4 id='property-current_last_item'><small>protected</small>  <span class='blue'></span> $current_last_item</h4>
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
<h4 id='property-current_page'><small>protected</small>  <span class='blue'></span> $current_page</h4>
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
<h4 id='property-first_page'><small>protected</small>  <span class='blue'></span> $first_page</h4>
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
<h4 id='property-items_per_page'><small>protected</small>  <span class='blue'></span> $items_per_page</h4>
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
<h4 id='property-last_page'><small>protected</small>  <span class='blue'></span> $last_page</h4>
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
<h4 id='property-next_page'><small>protected</small>  <span class='blue'></span> $next_page</h4>
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
<h4 id='property-offset'><small>protected</small>  <span class='blue'></span> $offset</h4>
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
<h4 id='property-previous_page'><small>protected</small>  <span class='blue'></span> $previous_page</h4>
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
<h4 id='property-total_items'><small>protected</small>  <span class='blue'></span> $total_items</h4>
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
<h4 id='property-total_pages'><small>protected</small>  <span class='blue'></span> $total_pages</h4>
</dt>
<dd>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Configuration">$config</span> <small>= <small>array</small><span>(0)</span> </small> , $request <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Creates a new Pagination object.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Configuration</li>
<li>
 <span class="blue">unknown </span><strong> $request</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $config = [], Request $request = NULL)
{
	// Overwrite system defaults with application defaults
	$this-&gt;config = $this-&gt;config_group() + $this-&gt;config;

	// Assing Request
	if ($request === NULL)
	{
		$request = Request::current();
	}

	$this-&gt;_request = $request;

	// Assign default Route
	$this-&gt;_route = $request-&gt;route();

	// Assign default route params
	$this-&gt;_route_params = $request-&gt;param();

	// Add controller and action to route params for routes with variable controllers and actions
	$this-&gt;_route_params[&#039;controller&#039;] = $request-&gt;controller();
	$this-&gt;_route_params[&#039;action&#039;] = $request-&gt;action();
	$this-&gt;_route_params[&#039;directory&#039;] = $request-&gt;directory();

	// Pagination setup
	$this-&gt;setup($config);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__get"><small>public</small>  __get(<small>string</small> <span class="param" title="Property name">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Returns a Pagination property.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Property name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Pagination property; NULL if not found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __get($key)
{
	return isset($this-&gt;$key) ? $this-&gt;$key : NULL;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__set"><small>public</small>  __set(<small>string</small> <span class="param" title="Config key">$key</span> , <small>mixed</small> <span class="param" title="Config value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Updates a single config setting, and recalculates pagination if needed.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Config key</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Config value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __set($key, $value)
{
	$this-&gt;setup([$key =&gt; $value]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Renders the pagination links.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Pagination output (HTML) 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __toString()
{
	try
	{
		return $this-&gt;render();
	}
	catch(Exception $e)
	{
		Kohana_Exception::handler($e);
		return &#039;&#039;;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="config_group"><small>public</small>  config_group([ <small>string</small> <span class="param" title="Pagination config group; "default" if none given">$group</span> <small>= <small>string</small><span>(7)</span> "default"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Retrieves a pagination config group from the config file. One config group can
refer to another as its parent, which will be recursively loaded.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small> = <small>string</small><span>(7)</span> "default"</small> - Pagination config group; "default" if none given</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Config settings 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function config_group($group = &#039;default&#039;)
{
	// Load the pagination config file
	$config_file = Kohana::$config-&gt;load(&#039;pagination&#039;);

	// Initialize the $config array
	$config[&#039;group&#039;] = (string) $group;

	// Recursively load requested config groups
	while (isset($config[&#039;group&#039;]) AND isset($config_file-&gt;{$config[&#039;group&#039;]}))
	{
		// Temporarily store config group name
		$group = $config[&#039;group&#039;];
		unset($config[&#039;group&#039;]);

		// Add config group values, not overwriting existing keys
		$config += $config_file-&gt;$group;
	}

	// Get rid of possible stray config group names
	unset($config[&#039;group&#039;]);

	// Return the merged config group settings
	return $config;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory([ <small>array</small> <span class="param" title="Configuration">$config</span> <small>= <small>array</small><span>(0)</span> </small> , $request <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Creates a new Pagination object.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Configuration</li>
<li>
 <span class="blue">unknown </span><strong> $request</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Pagination</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory(array $config = [], Request $request = NULL)
{
	return new Pagination($config, $request);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>public</small>  query([ <small>array</small> <span class="param" title="Parameters to override">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>URL::query() replacement for Pagination use only</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - Parameters to override</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function query(array $params = NULL)
{
	if ($params === NULL)
	{
		// Use only the current parameters
		$params = $this-&gt;_request-&gt;query();
	}
	else
	{
		// Merge the current and new parameters
		$params = array_merge($this-&gt;_request-&gt;query(), $params);
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
<h3 id="render"><small>public</small>  render([ <small>mixed</small> <span class="param" title="String of the view to use, or a Kohana_View object">$view</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Renders the pagination links.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $view</strong> <small> = <small>NULL</small></small> - String of the view to use, or a Kohana_View object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Pagination output (HTML) 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function render($view = NULL)
{
	// Automatically hide pagination whenever it is superfluous
	if ($this-&gt;config[&#039;auto_hide&#039;] === TRUE AND $this-&gt;total_pages &lt;= 1)
		return &#039;&#039;;

	if ($view === NULL)
	{
		// Use the view from config
		$view = $this-&gt;config[&#039;view&#039;];
	}

	if ( ! $view instanceof View)
	{
		// Load the view file
		$view = View::factory($view);
	}

	// Pass on the whole Pagination object
	return $view-&gt;set(get_object_vars($this))-&gt;set(&#039;page&#039;, $this)-&gt;render();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="request"><small>public</small>  request([ <small>Request</small> $request <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Request setter / getter</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Request</span>  - If used as getter 
</li><li>
<span class='blue'>$this</span>  - Chainable as setter 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function request(Request $request = NULL)
{
	if ($request === NULL)
		return $this-&gt;_request;

	$this-&gt;_request = $request;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="route"><small>public</small>  route([ <small>Route</small> $route <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Route setter / getter</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Route </span><strong> $route</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Route</span>  - Route if used as getter 
</li><li>
<span class='blue'>$this</span>  - Chainable as setter 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function route(Route $route = NULL)
{
	if ($route === NULL)
		return $this-&gt;_route;

	$this-&gt;_route = $route;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="route_params"><small>public</small>  route_params([ <small>array</small> <span class="param" title="Route parameters to set">$route_params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Route parameters setter / getter</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $route_params</strong> <small> = <small>NULL</small></small> - Route parameters to set</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Route parameters if used as getter 
</li><li>
<span class='blue'>$this</span>  - Chainable as setter 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function route_params(array $route_params = NULL)
{
	if ($route_params === NULL)
		return $this-&gt;_route_params;

	$this-&gt;_route_params = $route_params;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="setup"><small>public</small>  setup([ <small>array</small> <span class="param" title="Configuration">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Loads configuration settings into the object and (re)calculates pagination if needed.
Allows you to update config settings after a Pagination object has been constructed.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Configuration</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>object</span>  - Pagination 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function setup(array $config = [])
{
	if (isset($config[&#039;group&#039;]))
	{
		// Recursively load requested config groups
		$config += $this-&gt;config_group($config[&#039;group&#039;]);
	}

	// Overwrite the current config settings
	$this-&gt;config = $config + $this-&gt;config;

	// Only (re)calculate pagination when needed
	if ($this-&gt;current_page === NULL
		OR isset($config[&#039;current_page&#039;])
		OR isset($config[&#039;total_items&#039;])
		OR isset($config[&#039;items_per_page&#039;]))
	{
		// Retrieve the current page number
		if ( ! empty($this-&gt;config[&#039;current_page&#039;][&#039;page&#039;]))
		{
			// The current page number has been set manually
			$this-&gt;current_page = (int) $this-&gt;config[&#039;current_page&#039;][&#039;page&#039;];
		}
		else
		{
			$query_key = $this-&gt;config[&#039;current_page&#039;][&#039;key&#039;];

			switch ($this-&gt;config[&#039;current_page&#039;][&#039;source&#039;])
			{
				case &#039;query_string&#039;:
					$this-&gt;current_page = ($this-&gt;_request-&gt;query($query_key) !== NULL)
						? (int) $this-&gt;_request-&gt;query($query_key)
						: 1;
					break;

				case &#039;route&#039;:
					$this-&gt;current_page = (int) $this-&gt;_request-&gt;param($query_key, 1);
					break;
			}
		}

		// Calculate and clean all pagination variables
		$this-&gt;total_items = (int) max(0, $this-&gt;config[&#039;total_items&#039;]);
		$this-&gt;items_per_page = (int) max(1, $this-&gt;config[&#039;items_per_page&#039;]);
		$this-&gt;total_pages = (int) ceil($this-&gt;total_items / $this-&gt;items_per_page);
		$this-&gt;current_page = (int) min(max(1, $this-&gt;current_page), max(1, $this-&gt;total_pages));
		$this-&gt;current_first_item = (int) min((($this-&gt;current_page - 1) * $this-&gt;items_per_page) + 1, $this-&gt;total_items);
		$this-&gt;current_last_item = (int) min($this-&gt;current_first_item + $this-&gt;items_per_page - 1, $this-&gt;total_items);
		$this-&gt;previous_page = ($this-&gt;current_page &gt; 1) ? $this-&gt;current_page - 1 : FALSE;
		$this-&gt;next_page = ($this-&gt;current_page &lt; $this-&gt;total_pages) ? $this-&gt;current_page + 1 : FALSE;
		$this-&gt;first_page = ($this-&gt;current_page === 1) ? FALSE : 1;
		$this-&gt;last_page = ($this-&gt;current_page &gt;= $this-&gt;total_pages) ? FALSE : $this-&gt;total_pages;
		$this-&gt;offset = (int) (($this-&gt;current_page - 1) * $this-&gt;items_per_page);
	}

	// Chainable method
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="url"><small>public</small>  url([ <small>integer</small> <span class="param" title="Page number">$page</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Generates the full URL for a certain page.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $page</strong> <small> = <small>integer</small> 1</small> - Page number</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Page URL 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function url($page = 1)
{
	// Clean the page number
	$page = max(1, (int) $page);

	// No page number in URLs to first page
	if ($page === 1 AND ! $this-&gt;config[&#039;first_page_in_url&#039;])
	{
		$page = NULL;
	}

	switch ($this-&gt;config[&#039;current_page&#039;][&#039;source&#039;])
	{
		case &#039;query_string&#039;:
			return URL::site($this-&gt;_route-&gt;uri($this-&gt;_route_params).
				$this-&gt;query([$this-&gt;config[&#039;current_page&#039;][&#039;key&#039;] =&gt; $page]));

		case &#039;route&#039;:
			return URL::site($this-&gt;_route-&gt;uri(array_merge($this-&gt;_route_params,
				[$this-&gt;config[&#039;current_page&#039;][&#039;key&#039;] =&gt; $page])).$this-&gt;query());
	}

	return &#039;#&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid_page"><small>public</small>  valid_page(<small>integer</small> <span class="param" title="Page number">$page</span> )<small> (defined in <a href='/documentation/api/Kohana_Pagination'>Kohana_Pagination</a>)</small></h3>
<div class='description'><p>Checks whether the given page number exists.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $page</strong> <small>required</small> - Page number</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.7</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function valid_page($page)
{
	// Page number has to be a clean integer
	if ( ! Valid::digit($page))
		return FALSE;

	return $page &gt; 0 AND $page &lt;= $this-&gt;total_pages;
}</code>
</pre>
</div>
</div>
</div>