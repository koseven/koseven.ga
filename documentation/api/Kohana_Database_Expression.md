---
layout: api
class: Kohana_Database_Expression
---
<h1>Kohana_Database_Expression</h1>
<p>
<i><p>Database expressions can be used to add unescaped SQL fragments to a
<a href="/index.php/">Database_Query_Builder</a> object.</p>

<p>For example, you can use an expression to generate a column alias:</p>

<pre><code>// SELECT CONCAT(first_name, last_name) AS full_name
$query = DB::select(array(DB::expr('CONCAT(first_name, last_name)'), 'full_name')));
</code></pre>

<p>More examples are available on the <a href="database/query/builder#database-expressions">Query Builder</a> page</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
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
<em>None</em>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-_parameters">$_parameters</a>
</li>
<li>
<a href="#property-_value">$_value</a>
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
<a href="#bind">bind()</a>
</li>
<li>
<a href="#compile">compile()</a>
</li>
<li>
<a href="#param">param()</a>
</li>
<li>
<a href="#parameters">parameters()</a>
</li>
<li>
<a href="#value">value()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
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
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_value'><small>protected</small>  <span class='blue'></span> $_value</h4>
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
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="Raw SQL expression string">$value</span> [, <small>array</small> <span class="param" title="Unquoted parameter values">$parameters</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Sets the expression string.</p>

<pre><code>$expression = new Database_Expression('COUNT(users.id)');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Raw SQL expression string</li>
<li>
 <span class="blue">array </span><strong> $parameters</strong> <small> = <small>array</small><span>(0)</span> </small> - Unquoted parameter values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($value, $parameters = [])
{
	// Set the expression string
	$this-&gt;_value = $value;
	$this-&gt;_parameters = $parameters;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Return the value of the expression as a string.</p>

<pre><code>echo $expression;
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#value">Database_Expression::value</a></li>
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
	return $this-&gt;value();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind"><small>public</small>  bind(<small>string</small> <span class="param" title="Parameter key to replace">$param</span> , <small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Variable to use">$var</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Bind a variable to a parameter.</p>
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
	$this-&gt;_parameters[$param] =&amp; $var;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="compile"><small>public</small>  compile([ <small>mixed</small> <span class="param" title="Database instance or name of instance">$db</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Compile the SQL expression and return it. Replaces any parameters with
their given values.</p>
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

	$value = $this-&gt;value();

	if ( ! empty($this-&gt;_parameters))
	{
		// Quote all of the parameter values
		$params = array_map([$db, &#039;quote&#039;], $this-&gt;_parameters);

		// Replace the values in the expression
		$value = strtr($value, $params);
	}

	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="param"><small>public</small>  param(<small>string</small> <span class="param" title="Parameter key to replace">$param</span> , <small>mixed</small> <span class="param" title="Value to use">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Set the value of a parameter.</p>
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
	$this-&gt;_parameters[$param] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parameters"><small>public</small>  parameters(<small>array</small> <span class="param" title="List of parameter values">$params</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Add multiple parameter values.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $params</strong> <small>required</small> - List of parameter values</li>
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
	$this-&gt;_parameters = $params + $this-&gt;_parameters;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="value"><small>public</small>  value()<small> (defined in <a href='/documentation/api/Kohana_Database_Expression'>Kohana_Database_Expression</a>)</small></h3>
<div class='description'><p>Get the expression value as a string.</p>

<pre><code>$sql = $expression-&gt;value();
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
<code class="language-php">public function value()
{
	return (string) $this-&gt;_value;
}</code>
</pre>
</div>
</div>
</div>