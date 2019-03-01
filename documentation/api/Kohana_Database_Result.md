---
layout: api
class: Kohana_Database_Result
---
<h1>Kohana_Database_Result</h1>
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Countable'>Countable</a> | <a href='/documentation/api/Iterator'>Iterator</a> | <a href='/documentation/api/Traversable'>Traversable</a> | <a href='/documentation/api/SeekableIterator'>SeekableIterator</a> | <a href='/documentation/api/ArrayAccess'>ArrayAccess</a></small>
</p>
<p>
<i><p>Database result wrapper.  See <a href="/database/results">Results</a> for usage and examples.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
<dt>category</dt>
<dd>Query/Result</dd>
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
<a href="#property-_current_row">$_current_row</a>
</li>
<li>
<a href="#property-_object_params">$_object_params</a>
</li>
<li>
<a href="#property-_query">$_query</a>
</li>
<li>
<a href="#property-_result">$_result</a>
</li>
<li>
<a href="#property-_total_rows">$_total_rows</a>
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
<a href="#__destruct">__destruct()</a>
</li>
<li>
<a href="#as_array">as_array()</a>
</li>
<li>
<a href="#cached">cached()</a>
</li>
<li>
<a href="#count">count()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#next">next()</a>
</li>
<li>
<a href="#offsetExists">offsetExists()</a>
</li>
<li>
<a href="#offsetGet">offsetGet()</a>
</li>
<li>
<a href="#current">current()</a>
</li>
<li>
<a href="#key">key()</a>
</li>
<li>
<a href="#offsetSet">offsetSet()</a>
</li>
<li>
<a href="#offsetUnset">offsetUnset()</a>
</li>
<li>
<a href="#prev">prev()</a>
</li>
<li>
<a href="#rewind">rewind()</a>
</li>
<li>
<a href="#valid">valid()</a>
</li>
<li>
<a href="#seek">seek()</a>
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
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_current_row'><small>protected</small>  <span class='blue'></span> $_current_row</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
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
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_query'><small>protected</small>  <span class='blue'></span> $_query</h4>
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
<h4 id='property-_result'><small>protected</small>  <span class='blue'></span> $_result</h4>
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
<h4 id='property-_total_rows'><small>protected</small>  <span class='blue'></span> $_total_rows</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>mixed</small> <span class="param" title="Query result">$result</span> , <small>string</small> <span class="param" title="SQL query">$sql</span> [, <small>mixed</small> <span class="param" title="$as_object">$as_object</span> <small>= <small>bool</small> FALSE</small> , <small>array</small> <span class="param" title="$params">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Sets the total number of rows and stores the result locally.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $result</strong> <small>required</small> - Query result</li>
<li>
 <span class="blue">string </span><strong> $sql</strong> <small>required</small> - SQL query</li>
<li>
 <span class="blue">mixed </span><strong> $as_object</strong> <small> = <small>bool</small> FALSE</small> - $as_object</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - $params</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($result, $sql, $as_object = FALSE, array $params = NULL)
{
	// Store the result locally
	$this-&gt;_result = $result;

	// Store the SQL locally
	$this-&gt;_query = $sql;

	if (is_object($as_object))
	{
		// Get the object class name
		$as_object = get_class($as_object);
	}

	// Results as objects or associative arrays
	$this-&gt;_as_object = $as_object;

	if ($params)
	{
		// Object constructor params
		$this-&gt;_object_params = $params;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__destruct"><small>abstract public</small>  __destruct()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Result destruction cleans up all open result sets.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract public function __destruct();</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_array"><small>public</small>  as_array([ <small>string</small> <span class="param" title="Column for associative keys">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Column for values">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Return all of the rows in the result as an array.</p>

<pre><code>// Indexed array of all rows
$rows = $result-&gt;as_array();

// Associative array of rows by "id"
$rows = $result-&gt;as_array('id');

// Associative array of rows, "id" =&gt; "name"
$rows = $result-&gt;as_array('id', 'name');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small> = <small>NULL</small></small> - Column for associative keys</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Column for values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_array($key = NULL, $value = NULL)
{
	$results = [];

	if ($key === NULL AND $value === NULL)
	{
		// Indexed rows

		foreach ($this as $row)
		{
			$results[] = $row;
		}
	}
	elseif ($key === NULL)
	{
		// Indexed columns

		if ($this-&gt;_as_object)
		{
			foreach ($this as $row)
			{
				$results[] = $row-&gt;$value;
			}
		}
		else
		{
			foreach ($this as $row)
			{
				$results[] = $row[$value];
			}
		}
	}
	elseif ($value === NULL)
	{
		// Associative rows

		if ($this-&gt;_as_object)
		{
			foreach ($this as $row)
			{
				$results[$row-&gt;$key] = $row;
			}
		}
		else
		{
			foreach ($this as $row)
			{
				$results[$row[$key]] = $row;
			}
		}
	}
	else
	{
		// Associative columns

		if ($this-&gt;_as_object)
		{
			foreach ($this as $row)
			{
				$results[$row-&gt;$key] = $row-&gt;$value;
			}
		}
		else
		{
			foreach ($this as $row)
			{
				$results[$row[$key]] = $row[$value];
			}
		}
	}

	$this-&gt;rewind();

	return $results;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cached"><small>public</small>  cached()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Get a cached database result from the current result iterator.</p>

<pre><code>$cachable = serialize($result-&gt;cached());
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.5</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Result_Cached</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cached()
{
	return new Database_Result_Cached($this-&gt;as_array(), $this-&gt;_query, $this-&gt;_as_object);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="count"><small>public</small>  count()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#count">Countable::count</a>, returns the total number of rows.</p>

<pre><code>echo count($result);
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function count()
{
	return $this-&gt;_total_rows;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Column to get">$name</span> [, <small>mixed</small> <span class="param" title="Default value if the column does not exist">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Return the named column from the current row.</p>

<pre><code>// Get the "id" value
$id = $result-&gt;get('id');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Column to get</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value if the column does not exist</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get($name, $default = NULL)
{
	$row = $this-&gt;current();

	if ($this-&gt;_as_object)
	{
		if (isset($row-&gt;$name))
			return $row-&gt;$name;
	}
	else
	{
		if (isset($row[$name]))
			return $row[$name];
	}

	return $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="next"><small>public</small>  next()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#next">Iterator::next</a>, moves to the next row.</p>

<pre><code>next($result);
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function next()
{
	++$this-&gt;_current_row;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetExists"><small>public</small>  offsetExists(<small>int</small> <span class="param" title="$offset">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#offsetExists">ArrayAccess::offsetExists</a>, determines if row exists.</p>

<pre><code>if (isset($result[10]))
{
    // Row 10 exists
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $offset</strong> <small>required</small> - $offset</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetExists($offset)
{
	return ($offset &gt;= 0 AND $offset &lt; $this-&gt;_total_rows);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetGet"><small>public</small>  offsetGet(<small>int</small> <span class="param" title="$offset">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#offsetGet">ArrayAccess::offsetGet</a>, gets a given row.</p>

<pre><code>$row = $result[10];
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $offset</strong> <small>required</small> - $offset</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetGet($offset)
{
	if ( ! $this-&gt;seek($offset))
		return NULL;

	return $this-&gt;current();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="current"><small>abstract public</small>  current()<small> (defined in <a href='/documentation/api/Iterator'>Iterator</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="key"><small>public</small>  key()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#key">Iterator::key</a>, returns the current row number.</p>

<pre><code>echo key($result);
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function key()
{
	return $this-&gt;_current_row;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetSet"><small>final public</small>  offsetSet(<small>int</small> <span class="param" title="$offset">$offset</span> , <small>mixed</small> <span class="param" title="$value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#offsetSet">ArrayAccess::offsetSet</a>, throws an error.</p>

<p class="note">You cannot modify a database result.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $offset</strong> <small>required</small> - $offset</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - $value</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">final public function offsetSet($offset, $value)
{
	throw new Kohana_Exception(&#039;Database results are read-only&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetUnset"><small>final public</small>  offsetUnset(<small>int</small> <span class="param" title="$offset">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#offsetUnset">ArrayAccess::offsetUnset</a>, throws an error.</p>

<p class="note">You cannot modify a database result.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $offset</strong> <small>required</small> - $offset</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">final public function offsetUnset($offset)
{
	throw new Kohana_Exception(&#039;Database results are read-only&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="prev"><small>public</small>  prev()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#prev">Iterator::prev</a>, moves to the previous row.</p>

<pre><code>prev($result);
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function prev()
{
	--$this-&gt;_current_row;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rewind"><small>public</small>  rewind()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#rewind">Iterator::rewind</a>, sets the current row to zero.</p>

<pre><code>rewind($result);
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rewind()
{
	$this-&gt;_current_row = 0;
	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid"><small>public</small>  valid()<small> (defined in <a href='/documentation/api/Kohana_Database_Result'>Kohana_Database_Result</a>)</small></h3>
<div class='description'><p>Implements <a href="#valid">Iterator::valid</a>, checks if the current row exists.</p>

<p class="note">This method is only used internally.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function valid()
{
	return $this-&gt;offsetExists($this-&gt;_current_row);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="seek"><small>abstract public</small>  seek()<small> (defined in <a href='/documentation/api/SeekableIterator'>SeekableIterator</a>)</small></h3>
<div class='description'></div>
</div>
</div>