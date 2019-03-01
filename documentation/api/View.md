---
layout: api
class: View
---
<h1>View</h1>
extends <a href='/documentation/api/Kohana_View'>Kohana_View</a>
<br />
<p>
<i><p>Acts as an object wrapper for HTML pages with embedded PHP, called "views".
Variables can be assigned with the view object and referenced locally within
the view.</p>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_View'>Kohana_View</a></p>
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
<a href="#property-_data">$_data</a>
</li>
<li>
<a href="#property-_file">$_file</a>
</li>
<li>
<a href="#property-_global_data">$_global_data</a>
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
<a href="#__isset">__isset()</a>
</li>
<li>
<a href="#__set">__set()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#__unset">__unset()</a>
</li>
<li>
<a href="#bind">bind()</a>
</li>
<li>
<a href="#bind_global">bind_global()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#render">render()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#set_filename">set_filename()</a>
</li>
<li>
<a href="#set_global">set_global()</a>
</li>
<li>
<a href="#capture">capture()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_data'><small>protected</small>  <span class='blue'></span> $_data</h4>
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
<h4 id='property-_file'><small>protected</small>  <span class='blue'></span> $_file</h4>
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
<h4 id='property-_global_data'><small>protected static</small>  <span class='blue'></span> $_global_data</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>string</small> <span class="param" title="View filename">$file</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Array of values">$data</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Sets the initial view filename and local data. Views should almost
always only be created using <a href="#factory">View::factory</a>.</p>

<pre><code>$view = new View($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small> = <small>NULL</small></small> - View filename</li>
<li>
 <span class="blue">array </span><strong> $data</strong> <small> = <small>NULL</small></small> - Array of values</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#set_filename">View::set_filename</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($file = NULL, array $data = NULL)
{
	if ($file !== NULL)
	{
		$this-&gt;set_filename($file);
	}

	if ($data !== NULL)
	{
		// Add the values to the current data
		$this-&gt;_data = $data + $this-&gt;_data;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__get"><small>public</small>  __get(<small>string</small> <span class="param" title="Variable name">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Magic method, searches for the given variable and returns its value.
Local variables will be returned before global variables.</p>

<pre><code>$value = $view-&gt;foo;
</code></pre>

<p class="note">If the variable has not yet been set, an exception will be thrown.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function &amp; __get($key)
{
	if (array_key_exists($key, $this-&gt;_data))
	{
		return $this-&gt;_data[$key];
	}
	elseif (array_key_exists($key, View::$_global_data))
	{
		return View::$_global_data[$key];
	}
	else
	{
		throw new Kohana_Exception(&#039;View variable is not set: :var&#039;,
			[&#039;:var&#039; =&gt; $key]);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__isset"><small>public</small>  __isset(<small>string</small> <span class="param" title="Variable name">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Magic method, determines if a variable is set.</p>

<pre><code>isset($view-&gt;foo);
</code></pre>

<p class="note"><code>NULL</code> variables are not considered to be set by <a href="http://php.net/isset">isset</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __isset($key)
{
	return (isset($this-&gt;_data[$key]) OR isset(View::$_global_data[$key]));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__set"><small>public</small>  __set(<small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <span class="param" title="Value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Magic method, calls <a href="#set">View::set</a> with the same parameters.</p>

<pre><code>$view-&gt;foo = 'something';
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value</li>
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
	$this-&gt;set($key, $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Magic method, returns the output of <a href="#render">View::render</a>.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#render">View::render</a></li>
</ul>
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
	try
	{
		return $this-&gt;render();
	}
	catch (Exception $e)
	{
		/**
		 * Display the exception message.
		 *
		 * We use this method here because it&#039;s impossible to throw an
		 * exception from __toString().
		 */
		$error_response = Kohana_Exception::_handler($e);

		return $error_response-&gt;body();
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__unset"><small>public</small>  __unset(<small>string</small> <span class="param" title="Variable name">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Magic method, unsets a given variable.</p>

<pre><code>unset($view-&gt;foo);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __unset($key)
{
	unset($this-&gt;_data[$key], View::$_global_data[$key]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind"><small>public</small>  bind(<small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Referenced variable">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Assigns a value by reference. The benefit of binding is that values can
be altered without re-setting them. It is also possible to bind variables
before they have values. Assigned values will be available as a
variable within the view file:</p>

<pre><code>// This reference can be accessed as $ref within the view
$view-&gt;bind('ref', $bar);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
byref  <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Referenced variable</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bind($key, &amp; $value)
{
	$this-&gt;_data[$key] =&amp; $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind_global"><small>public static</small>  bind_global(<small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Referenced variable">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Assigns a global variable by reference, similar to <a href="#bind">View::bind</a>, except
that the variable will be accessible to all views.</p>

<pre><code>View::bind_global($key, $value);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
byref  <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Referenced variable</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function bind_global($key, &amp; $value)
{
	View::$_global_data[$key] =&amp; $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory([ <small>string</small> <span class="param" title="View filename">$file</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Array of values">$data</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Returns a new View object. If you do not define the "file" parameter,
you must call <a href="#set_filename">View::set_filename</a>.</p>

<pre><code>$view = View::factory($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small> = <small>NULL</small></small> - View filename</li>
<li>
 <span class="blue">array </span><strong> $data</strong> <small> = <small>NULL</small></small> - Array of values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>View</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($file = NULL, array $data = NULL)
{
	return new View($file, $data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="render"><small>public</small>  render([ <small>string</small> <span class="param" title="View filename">$file</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Renders the view object to a string. Global and local data are merged
and extracted to create local variables within the view file.</p>

<pre><code>$output = $view-&gt;render();
</code></pre>

<p class="note">Global variables with the same key name as local variables will be
overwritten by the local variable.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small> = <small>NULL</small></small> - View filename</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">View_Exception</a></li>
<li>Uses - <a href="#capture">View::capture</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function render($file = NULL)
{
	if ($file !== NULL)
	{
		$this-&gt;set_filename($file);
	}

	if (empty($this-&gt;_file))
	{
		throw new View_Exception(&#039;You must set the file to use within your view before rendering&#039;);
	}

	// Combine local and global data and capture the output
	return View::capture($this-&gt;_file, $this-&gt;_data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string|array|Traversable</small> <span class="param" title="Variable name or an array of variables">$key</span> [, <small>mixed</small> <span class="param" title="Value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Assigns a variable by name. Assigned values will be available as a
variable within the view file:</p>

<pre><code>// This value can be accessed as $foo within the view
$view-&gt;set('foo', 'my value');
</code></pre>

<p>You can also use an array or Traversable object to set several values at once:</p>

<pre><code>// Create the values $food and $beverage in the view
$view-&gt;set(array('food' =&gt; 'bread', 'beverage' =&gt; 'water'));
</code></pre>

<p class="note">Note: When setting with using Traversable object we're not attaching the whole object to the view,
i.e. the object's standard properties will not be available in the view context.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|array|Traversable </span><strong> $key</strong> <small>required</small> - Variable name or an array of variables</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($key, $value = NULL)
{
	if (is_array($key) OR $key instanceof Traversable)
	{
		foreach ($key as $name =&gt; $value)
		{
			$this-&gt;_data[$name] = $value;
		}
	}
	else
	{
		$this-&gt;_data[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_filename"><small>public</small>  set_filename(<small>string</small> <span class="param" title="View filename">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Sets the view filename.</p>

<pre><code>$view-&gt;set_filename($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - View filename</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">View_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>View</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_filename($file)
{
	if (($path = Kohana::find_file(&#039;views&#039;, $file)) === FALSE)
	{
		throw new View_Exception(&#039;The requested view :file could not be found&#039;, [
			&#039;:file&#039; =&gt; $file,
		]);
	}

	// Store the file path locally
	$this-&gt;_file = $path;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_global"><small>public static</small>  set_global(<small>string|array|Traversable</small> <span class="param" title="Variable name or an array of variables">$key</span> [, <small>mixed</small> <span class="param" title="Value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Sets a global variable, similar to <a href="#set">View::set</a>, except that the
variable will be accessible to all views.</p>

<pre><code>View::set_global($name, $value);
</code></pre>

<p>You can also use an array or Traversable object to set several values at once:</p>

<pre><code>// Create the values $food and $beverage in the view
View::set_global(array('food' =&gt; 'bread', 'beverage' =&gt; 'water'));
</code></pre>

<p class="note">Note: When setting with using Traversable object we're not attaching the whole object to the view,
i.e. the object's standard properties will not be available in the view context.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|array|Traversable </span><strong> $key</strong> <small>required</small> - Variable name or an array of variables</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function set_global($key, $value = NULL)
{
	if (is_array($key) OR $key instanceof Traversable)
	{
		foreach ($key as $name =&gt; $value)
		{
			View::$_global_data[$name] = $value;
		}
	}
	else
	{
		View::$_global_data[$key] = $value;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="capture"><small>protected static</small>  capture(<small>string</small> <span class="param" title="Filename">$kohana_view_filename</span> , <small>array</small> <span class="param" title="Variables">$kohana_view_data</span> )<small> (defined in <a href='/documentation/api/Kohana_View'>Kohana_View</a>)</small></h3>
<div class='description'><p>Captures the output that is generated when a view is included.
The view data will be extracted to make local variables. This method
is static to prevent object scope resolution.</p>

<pre><code>$output = View::capture($file, $data);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $kohana_view_filename</strong> <small>required</small> - Filename</li>
<li>
 <span class="blue">array </span><strong> $kohana_view_data</strong> <small>required</small> - Variables</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function capture($kohana_view_filename, array $kohana_view_data)
{
	// Import the view variables to local namespace
	extract($kohana_view_data, EXTR_SKIP);

	if (View::$_global_data)
	{
		// Import the global view variables to local namespace
		extract(View::$_global_data, EXTR_SKIP | EXTR_REFS);
	}

	// Capture the view output
	ob_start();

	try
	{
		// Load the view within the current scope
		include $kohana_view_filename;
	}
	catch (Exception $e)
	{
		// Delete the output buffer
		ob_end_clean();

		// Re-throw the exception
		throw $e;
	}

	// Get the captured output and close the buffer
	return ob_get_clean();
}</code>
</pre>
</div>
</div>
</div>