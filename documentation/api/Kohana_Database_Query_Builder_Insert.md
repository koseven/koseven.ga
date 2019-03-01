---
layout: api
class: Kohana_Database_Query_Builder_Insert
---
<h1>Kohana_Database_Query_Builder_Insert</h1>
extends <a href='/documentation/api/Database_Query_Builder'>Database_Query_Builder</a>
<br />
extends <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>
<br />
extends <a href='/documentation/api/Database_Query'>Database_Query</a>
<br />
extends <a href='/documentation/api/Kohana_Database_Query'>Kohana_Database_Query</a>
<br />
<p>
<i><p>Database query builder for INSERT statements. See <a href="/database/query/builder">Query Builder</a> for usage and examples.</p>
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
<a href="#property-_columns">$_columns</a>
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
<a href="#property-_table">$_table</a>
</li>
<li>
<a href="#property-_type">$_type</a>
</li>
<li>
<a href="#property-_values">$_values</a>
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
<a href="#columns">columns()</a>
</li>
<li>
<a href="#compile">compile()</a>
</li>
<li>
<a href="#reset">reset()</a>
</li>
<li>
<a href="#select">select()</a>
</li>
<li>
<a href="#table">table()</a>
</li>
<li>
<a href="#values">values()</a>
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
<li>
<a href="#_compile_conditions">_compile_conditions()</a>
</li>
<li>
<a href="#_compile_group_by">_compile_group_by()</a>
</li>
<li>
<a href="#_compile_join">_compile_join()</a>
</li>
<li>
<a href="#_compile_order_by">_compile_order_by()</a>
</li>
<li>
<a href="#_compile_set">_compile_set()</a>
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
<h4 id='property-_columns'><small>protected</small>  <span class='blue'></span> $_columns</h4>
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
<h4 id='property-_table'><small>protected</small>  <span class='blue'></span> $_table</h4>
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
<dt>
<h4 id='property-_values'><small>protected</small>  <span class='blue'></span> $_values</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>mixed</small> <span class="param" title="Table name or array($table, $alias) or object">$table</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Column names">$columns</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Set the table and columns for an insert.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $table</strong> <small> = <small>NULL</small></small> - Table name or array($table, $alias) or object</li>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small> = <small>NULL</small></small> - Column names</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($table = NULL, array $columns = NULL)
{
	if ($table)
	{
		// Set the inital table name
		$this-&gt;table($table);
	}

	if ($columns)
	{
		// Set the column names
		$this-&gt;_columns = $columns;
	}

	// Start the query with no SQL
	return parent::__construct(Database::INSERT, &#039;&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="columns"><small>public</small>  columns(<small>array</small> <span class="param" title="Column names">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Set the columns that will be inserted.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small>required</small> - Column names</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function columns(array $columns)
{
	$this-&gt;_columns = $columns;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="compile"><small>public</small>  compile([ <small>mixed</small> <span class="param" title="Database instance or name of instance">$db</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Compile the SQL query and return it.</p>
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

	// Start an insertion query
	$query = &#039;INSERT INTO &#039;.$db-&gt;quote_table($this-&gt;_table);

	// Add the column names
	$query .= &#039; (&#039;.implode(&#039;, &#039;, array_map([$db, &#039;quote_column&#039;], $this-&gt;_columns)).&#039;) &#039;;

	if (is_array($this-&gt;_values))
	{
		// Callback for quoting values

		$groups = [];
		foreach ($this-&gt;_values as $group)
		{
			foreach ($group as $offset =&gt; $value)
			{
				if ((is_string($value) AND array_key_exists($value, $this-&gt;_parameters)) === FALSE)
				{
					// Quote the value, it is not a parameter
					$group[$offset] = $db-&gt;quote($value);
				}
			}

			$groups[] = &#039;(&#039;.implode(&#039;, &#039;, $group).&#039;)&#039;;
		}

		// Add the values
		$query .= &#039;VALUES &#039;.implode(&#039;, &#039;, $groups);
	}
	else
	{
		// Add the sub-query
		$query .= (string) $this-&gt;_values;
	}

	$this-&gt;_sql = $query;

	return parent::compile($db);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reset"><small>public</small>  reset()<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Reset the current builder status.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function reset()
{
	$this-&gt;_table = NULL;

	$this-&gt;_columns =
	$this-&gt;_values  = [];

	$this-&gt;_parameters = [];

	$this-&gt;_sql = NULL;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="select"><small>public</small>  select(<small>object</small> <span class="param" title="Database_Query of SELECT type">$query</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Use a sub-query to for the inserted values.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $query</strong> <small>required</small> - Database_Query of SELECT type</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function select(Database_Query $query)
{
	if ($query-&gt;type() !== Database::SELECT)
	{
		throw new Kohana_Exception(&#039;Only SELECT queries can be combined with INSERT queries&#039;);
	}

	$this-&gt;_values = $query;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="table"><small>public</small>  table(<small>string</small> <span class="param" title="Table name">$table</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Sets the table to insert into.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $table</strong> <small>required</small> - Table name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function table($table)
{
	if ( ! is_string($table))
		throw new Kohana_Exception(&#039;INSERT INTO syntax does not allow table aliasing&#039;);

	$this-&gt;_table = $table;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="values"><small>public</small>  values(<small>array</small> <span class="param" title="Values list">$values</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder_Insert'>Kohana_Database_Query_Builder_Insert</a>)</small></h3>
<div class='description'><p>Adds or overwrites values. Multiple value sets can be added.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - Values list</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function values(array $values)
{
	if ( ! is_array($this-&gt;_values))
	{
		throw new Kohana_Exception(&#039;INSERT INTO ... SELECT statements cannot be combined with INSERT INTO ... VALUES&#039;);
	}

	// Get all of the passed values
	$values = func_get_args();
	
	foreach ($values as $value)
	{
		$this-&gt;_values[] = $value;
	}

	return $this;
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

<div class='method'>
<h3 id="_compile_conditions"><small>protected</small>  _compile_conditions(<small>object</small> <span class="param" title="Database instance">$db</span> , <small>array</small> <span class="param" title="Condition statements">$conditions</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>)</small></h3>
<div class='description'><p>Compiles an array of conditions into an SQL partial. Used for WHERE
and HAVING.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $db</strong> <small>required</small> - Database instance</li>
<li>
 <span class="blue">array </span><strong> $conditions</strong> <small>required</small> - Condition statements</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_conditions(Database $db, array $conditions)
{
	$last_condition = NULL;

	$sql = &#039;&#039;;
	foreach ($conditions as $group)
	{
		// Process groups of conditions
		foreach ($group as $logic =&gt; $condition)
		{
			if ($condition === &#039;(&#039;)
			{
				if ( ! empty($sql) AND $last_condition !== &#039;(&#039;)
				{
					// Include logic operator
					$sql .= &#039; &#039;.$logic.&#039; &#039;;
				}

				$sql .= &#039;(&#039;;
			}
			elseif ($condition === &#039;)&#039;)
			{
				$sql .= &#039;)&#039;;
			}
			else
			{
				if ( ! empty($sql) AND $last_condition !== &#039;(&#039;)
				{
					// Add the logic operator
					$sql .= &#039; &#039;.$logic.&#039; &#039;;
				}

				// Split the condition
				list($column, $op, $value) = $condition;

				if ($value === NULL)
				{
					if ($op === &#039;=&#039;)
					{
						// Convert &quot;val = NULL&quot; to &quot;val IS NULL&quot;
						$op = &#039;IS&#039;;
					}
					elseif ($op === &#039;!=&#039; OR $op === &#039;&lt;&gt;&#039;)
					{
						// Convert &quot;val != NULL&quot; to &quot;valu IS NOT NULL&quot;
						$op = &#039;IS NOT&#039;;
					}
				}

				// Database operators are always uppercase
				$op = strtoupper($op);

				if ($op === &#039;BETWEEN&#039; AND is_array($value))
				{
					// BETWEEN always has exactly two arguments
					list($min, $max) = $value;

					if ((is_string($min) AND array_key_exists($min, $this-&gt;_parameters)) === FALSE)
					{
						// Quote the value, it is not a parameter
						$min = $db-&gt;quote($min);
					}

					if ((is_string($max) AND array_key_exists($max, $this-&gt;_parameters)) === FALSE)
					{
						// Quote the value, it is not a parameter
						$max = $db-&gt;quote($max);
					}

					// Quote the min and max value
					$value = $min.&#039; AND &#039;.$max;
				}
				elseif ($op === &#039;IN&#039; AND is_array($value) AND count($value) === 0)
				{
					$value = &#039;(NULL)&#039;;
				}
				elseif ((is_string($value) AND array_key_exists($value, $this-&gt;_parameters)) === FALSE)
				{
					// Quote the value, it is not a parameter
					$value = $db-&gt;quote($value);
				}

				if ($column)
				{
					if (is_array($column))
					{
						// Use the column name
						$column = $db-&gt;quote_identifier(reset($column));
					}
					else
					{
						// Apply proper quoting to the column
						$column = $db-&gt;quote_column($column);
					}
				}

				// Append the statement to the query
				$sql .= trim($column.&#039; &#039;.$op.&#039; &#039;.$value);
			}

			$last_condition = $condition;
		}
	}

	return $sql;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_compile_group_by"><small>protected</small>  _compile_group_by(<small>object</small> <span class="param" title="Database instance">$db</span> , <small>array</small> <span class="param" title="$columns">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>)</small></h3>
<div class='description'><p>Compiles an array of GROUP BY columns into an SQL partial.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $db</strong> <small>required</small> - Database instance</li>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small>required</small> - $columns</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_group_by(Database $db, array $columns)
{
	$group = [];

	foreach ($columns as $column)
	{
		if (is_array($column))
		{
			// Use the column alias
			$column = $db-&gt;quote_identifier(end($column));
		}
		else
		{
			// Apply proper quoting to the column
			$column = $db-&gt;quote_column($column);
		}

		$group[] = $column;
	}

	return &#039;GROUP BY &#039;.implode(&#039;, &#039;, $group);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_compile_join"><small>protected</small>  _compile_join(<small>object</small> <span class="param" title="Database instance">$db</span> , <small>array</small> <span class="param" title="Join statements">$joins</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>)</small></h3>
<div class='description'><p>Compiles an array of JOIN statements into an SQL partial.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $db</strong> <small>required</small> - Database instance</li>
<li>
 <span class="blue">array </span><strong> $joins</strong> <small>required</small> - Join statements</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_join(Database $db, array $joins)
{
	$statements = [];

	foreach ($joins as $join)
	{
		// Compile each of the join statements
		$statements[] = $join-&gt;compile($db);
	}

	return implode(&#039; &#039;, $statements);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_compile_order_by"><small>protected</small>  _compile_order_by(<small>Database</small> <span class="param" title="Database instance">$db</span> , <small>array</small> <span class="param" title="Sorting columns ">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>)</small></h3>
<div class='description'><p>Compiles an array of ORDER BY statements into an SQL partial.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Database </span><strong> $db</strong> <small>required</small> - Database instance</li>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small>required</small> - Sorting columns
</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Database_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_order_by(Database $db, array $columns)
{
	$sort = [];
	foreach ($columns as $group)
	{
		list ($column, $direction) = $group;

		if (is_array($column))
		{
			// Use the column alias
			$column = $db-&gt;quote_identifier(end($column));
		}
		else
		{
			// Apply proper quoting to the column
			$column = $db-&gt;quote_column($column);
		}

		if ($direction)
		{
			// Make the direction uppercase
			$direction = &#039; &#039;.strtoupper($direction);

			// Make sure direction is either ASC or DESC to prevent injections
			if ( ! in_array($direction, [&#039; ASC&#039;, &#039; DESC&#039;])) {
				throw new Database_Exception(&#039;Invalid sorting direction: &#039; . $direction);
			}
		}

		$sort[] = $column.$direction;
	}

	return &#039;ORDER BY &#039;.implode(&#039;, &#039;, $sort);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_compile_set"><small>protected</small>  _compile_set(<small>object</small> <span class="param" title="Database instance">$db</span> , <small>array</small> <span class="param" title="Updated values">$values</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Query_Builder'>Kohana_Database_Query_Builder</a>)</small></h3>
<div class='description'><p>Compiles an array of set values into an SQL partial. Used for UPDATE.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $db</strong> <small>required</small> - Database instance</li>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - Updated values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_set(Database $db, array $values)
{
	$set = [];
	foreach ($values as $group)
	{
		// Split the set
		list ($column, $value) = $group;

		// Quote the column name
		$column = $db-&gt;quote_column($column);

		if ((is_string($value) AND array_key_exists($value, $this-&gt;_parameters)) === FALSE)
		{
			// Quote the value, it is not a parameter
			$value = $db-&gt;quote($value);
		}

		$set[$column] = $column.&#039; = &#039;.$value;
	}

	return implode(&#039;, &#039;, $set);
}</code>
</pre>
</div>
</div>
</div>