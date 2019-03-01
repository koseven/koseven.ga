---
layout: api
class: Kohana_Database_Query
---
<h1>Kohana_Database_Query</h1>
<p>
<i><p>Database query wrapper.  See <a href="database/query/parameterized">Parameterized Statements</a> for usage and examples.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
<dt>category</dt>
<dd>Query</dd>
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
<a href="#property-_as_object">$_as_object</a>
</li>
<li>
<a href="#property-_force_execute">$_force_execute</a>
</li>
<li>
<a href="#property-_lifetime">$_lifetime</a>
</li>
<li>
<a href="#property-_object_params">$_object_params</a>
</li>
<li>
<a href="#property-_parameters">$_parameters</a>
</li>
<li>
<a href="#property-_sql">$_sql</a>
</li>
<li>
<a href="#property-_type">$_type</a>
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
<a href="#as_assoc">as_assoc()</a>
</li>
<li>
<a href="#as_object">as_object()</a>
</li>
<li>
<a href="#bind">bind()</a>
</li>
<li>
<a href="#cached">cached()</a>
</li>
<li>
<a href="#compile">compile()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#param">param()</a>
</li>
<li>
<a href="#parameters">parameters()</a>
</li>
<li>
<a href="#type">type()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_as_object'><small>protected</small>  <span class='blue'></span> $_as_object</h4>
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
<h4 id='property-_force_execute'><small>protected</small>  <span class='blue'></span> $_force_execute</h4>
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
<h4 id='property-_lifetime'><small>protected</small>  <span class='blue'></span> $_lifetime</h4>
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
<h4 id='property-_object_params'><small>protected</small>  <span class='blue'></span> $_object_params</h4>
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
<h4 id='property-_parameters'><small>protected</small>  <span class='blue'></span> $_parameters</h4>
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
<h4 id='property-_sql'><small>protected</small>  <span class='blue'></span> $_sql</h4>
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
<h4 id='property-_type'><small>protected</small>  <span class='blue'></span> $_type</h4>
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
<h3 id="__construct"><small>public</small>  __construct(<small>integer</small> <span class="param" title="Query type: Database::SELECT, Database::INSERT, etc">$type</span> , <small>string</small> <span class="param" title="Query string">$sql</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Creates a new SQL query of the specified type.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $type</strong> <small>required</small> - Query type: Database::SELECT, Database::INSERT, etc</li>
<li>
 <span class="blue">string </span><strong> $sql</strong> <small>required</small> - Query string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($type, $sql)
{
	$this-&gt;_type = $type;
	$this-&gt;_sql = $sql;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Return the SQL query string.</p>
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
	try
	{
		// Return the SQL string
		return $this-&gt;compile(Database::instance());
	}
	catch (Exception $e)
	{
		return Kohana_Exception::text($e);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_assoc"><small>public</small>  as_assoc()<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Returns results as associative arrays</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_assoc()
{
	$this-&gt;_as_object = FALSE;

	$this-&gt;_object_params = [];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_object"><small>public</small>  as_object([ <small>string</small> <span class="param" title="Classname or TRUE for stdClass">$class</span> <small>= <small>bool</small> TRUE</small> , <small>array</small> <span class="param" title="$params">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Returns results as objects</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $class</strong> <small> = <small>bool</small> TRUE</small> - Classname or TRUE for stdClass</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - $params</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_object($class = TRUE, array $params = NULL)
{
	$this-&gt;_as_object = $class;

	if ($params)
	{
		// Add object parameters
		$this-&gt;_object_params = $params;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind"><small>public</small>  bind(<small>string</small> <span class="param" title="Parameter key to replace">$param</span> , <small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Variable to use">$var</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Bind a variable to a parameter in the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $param</strong> <small>required</small> - Parameter key to replace</li>
<li>
byref  <span class="blue">mixed </span><strong> $var</strong> <small>required</small> - Variable to use</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bind($param, &amp; $var)
{
	// Bind a value to a variable
	$this-&gt;_parameters[$param] =&amp; $var;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cached"><small>public</small>  cached([ <small>integer</small> <span class="param" title="Number of seconds to cache, 0 deletes it from the cache">$lifetime</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Whether or not to execute the query during a cache hit">$force</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Enables the query to be cached for a specified amount of time.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Number of seconds to cache, 0 deletes it from the cache</li>
<li>
 <span class="blue">boolean </span><strong> $force</strong> <small> = <small>bool</small> FALSE</small> - Whether or not to execute the query during a cache hit</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:cache_life">Kohana::$cache_life</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cached($lifetime = NULL, $force = FALSE)
{
	if ($lifetime === NULL)
	{
		// Use the global setting
		$lifetime = Kohana::$cache_life;
	}

	$this-&gt;_force_execute = $force;
	$this-&gt;_lifetime = $lifetime;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="compile"><small>public</small>  compile([ <small>mixed</small> <span class="param" title="Database instance or name of instance">$db</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Compile the SQL query and return it. Replaces any parameters with their
given values.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $db</strong> <small> = <small>NULL</small></small> - Database instance or name of instance</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function compile($db = NULL)
{
	if ( ! is_object($db))
	{
		// Get the database instance
		$db = Database::instance($db);
	}

	// Import the SQL locally
	$sql = $this-&gt;_sql;

	if ( ! empty($this-&gt;_parameters))
	{
		// Quote all of the values
		$values = array_map([$db, &#039;quote&#039;], $this-&gt;_parameters);

		// Replace the values in the SQL
		$sql = strtr($sql, $values);
	}

	return $sql;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute([ <small>mixed</small> <span class="param" title="Database instance or name of instance">$db</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Result object classname, TRUE for stdClass or FALSE for array">$as_object</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Result object constructor arguments">$object_params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Execute the current query on the given database.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $db</strong> <small> = <small>NULL</small></small> - Database instance or name of instance</li>
<li>
 <span class="blue">string </span><strong> $as_object</strong> <small> = <small>NULL</small></small> - Result object classname, TRUE for stdClass or FALSE for array</li>
<li>
 <span class="blue">array </span><strong> $object_params</strong> <small> = <small>NULL</small></small> - Result object constructor arguments</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>object</span>  - Database_Result for SELECT queries 
</li><li>
<span class='blue'>mixed</span>  - The insert id for INSERT queries 
</li><li>
<span class='blue'>integer</span>  - Number of affected rows for all other queries 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute($db = NULL, $as_object = NULL, $object_params = NULL)
{
	if ( ! is_object($db))
	{
		// Get the database instance
		$db = Database::instance($db);
	}

	if ($as_object === NULL)
	{
		$as_object = $this-&gt;_as_object;
	}

	if ($object_params === NULL)
	{
		$object_params = $this-&gt;_object_params;
	}

	// Compile the SQL query
	$sql = $this-&gt;compile($db);

	if ($this-&gt;_lifetime !== NULL AND $this-&gt;_type === Database::SELECT)
	{
		// Set the cache key based on the database instance name and SQL
		$cache_key = &#039;Database::query(&quot;&#039;.$db.&#039;&quot;, &quot;&#039;.$sql.&#039;&quot;)&#039;;

		// Read the cache first to delete a possible hit with lifetime &lt;= 0
		if (($result = Kohana::cache($cache_key, NULL, $this-&gt;_lifetime)) !== NULL
			AND ! $this-&gt;_force_execute)
		{
			// Return a cached result
			return new Database_Result_Cached($result, $sql, $as_object, $object_params);
		}
	}

	// Execute the query
	$result = $db-&gt;query($this-&gt;_type, $sql, $as_object, $object_params);

	if (isset($cache_key) AND $this-&gt;_lifetime &gt; 0)
	{
		// Cache the result array
		Kohana::cache($cache_key, $result-&gt;as_array(), $this-&gt;_lifetime);
	}

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="param"><small>public</small>  param(<small>string</small> <span class="param" title="Parameter key to replace">$param</span> , <small>mixed</small> <span class="param" title="Value to use">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Set the value of a parameter in the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $param</strong> <small>required</small> - Parameter key to replace</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value to use</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function param($param, $value)
{
	// Add or overload a new parameter
	$this-&gt;_parameters[$param] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parameters"><small>public</small>  parameters(<small>array</small> <span class="param" title="List of parameters">$params</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Add multiple parameters to the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small>required</small> - List of parameters</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function parameters(array $params)
{
	// Merge the new parameters in
	$this-&gt;_parameters = $params + $this-&gt;_parameters;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="type"><small>public</small>  type()<small> (defined in <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>)</small></h3>
<div class='description'><p>Get the type of the query.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function type()
{
	return $this-&gt;_type;
}</code>
</pre>
</div>
</div>
</div>