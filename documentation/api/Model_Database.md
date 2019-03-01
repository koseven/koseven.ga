---
layout: api
class: Model_Database
---
<h1>Model_Database</h1>
extends <a href='/documentation/api/Kohana_Model_Database'>Kohana_Model_Database</a>
<br />
extends <a href='/documentation/api/Model'>Model</a>
<br />
extends <a href='/documentation/api/Kohana_Model'>Kohana_Model</a>
<br />
<p>
<i><p>Database Model base class.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
<dt>category</dt>
<dd>Models</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Model_Database'>Kohana_Model_Database</a></p>
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
<a href="#property-_db">$_db</a>
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
<a href="#factory">factory()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_db'><small>protected</small>  <span class='blue'></span> $_db</h4>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>mixed</small> <span class="param" title="Database instance object or string">$db</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Model_Database'>Kohana_Model_Database</a>)</small></h3>
<div class='description'><p>Loads the database.</p>

<pre><code>$model = new Foo_Model($db);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $db</strong> <small> = <small>NULL</small></small> - Database instance object or string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($db = NULL)
{
	if ($db)
	{
		// Set the instance or name
		$this-&gt;_db = $db;
	}
	elseif ( ! $this-&gt;_db)
	{
		// Use the default name
		$this-&gt;_db = Database::$default;
	}

	if (is_string($this-&gt;_db))
	{
		// Load the database
		$this-&gt;_db = Database::instance($this-&gt;_db);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>string</small> <span class="param" title="Model name">$name</span> [, <small>mixed</small> <span class="param" title="Database instance object or string">$db</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Model_Database'>Kohana_Model_Database</a>)</small></h3>
<div class='description'><p>Create a new model instance. A <a href="/index.php/">Database</a> instance or configuration
group name can be passed to the model. If no database is defined, the
"default" database group will be used.</p>

<pre><code>$model = Model::factory($name);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Model name</li>
<li>
 <span class="blue">mixed </span><strong> $db</strong> <small> = <small>NULL</small></small> - Database instance object or string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Model</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($name, $db = NULL)
{
	// Add the model prefix
	$class = &#039;Model_&#039;.$name;

	return new $class($db);
}</code>
</pre>
</div>
</div>
</div>