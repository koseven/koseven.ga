---
layout: api
class: Config_Database_Writer
---
<h1>Config_Database_Writer</h1>
extends <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a>
<br />
extends <a href='/documentation/api/Config_Database_Reader'>Config_Database_Reader</a>
<br />
extends <a href='/documentation/api/Kohana_Config_Database_Reader'>Kohana_Config_Database_Reader</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Config_Writer'>Kohana_Config_Writer</a> | <a href='/documentation/api/Kohana_Config_Source'>Kohana_Config_Source</a> | <a href='/documentation/api/Kohana_Config_Reader'>Kohana_Config_Reader</a></small>
</p>
<p>
<i><p>Transparent extension for the Kohana_Config_Database_Writer class</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
<dt>category</dt>
<dd>Configuration</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a></p>
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
<a href="#property-_db_instance">$_db_instance</a>
</li>
<li>
<a href="#property-_loaded_keys">$_loaded_keys</a>
</li>
<li>
<a href="#property-_table_name">$_table_name</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#load">load()</a>
</li>
<li>
<a href="#write">write()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#_insert">_insert()</a>
</li>
<li>
<a href="#_update">_update()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_db_instance'><small>protected</small>  <span class='blue'></span> $_db_instance</h4>
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
<h4 id='property-_loaded_keys'><small>protected</small>  <span class='blue'></span> $_loaded_keys</h4>
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
<h4 id='property-_table_name'><small>protected</small>  <span class='blue'></span> $_table_name</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(6)</span> "config"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="load"><small>public</small>  load(<small>string</small> <span class="param" title="Configuration group">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a>)</small></h3>
<div class='description'><p>Tries to load the specificed configuration group</p>

<p>Returns FALSE if group does not exist or an array if it does</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Configuration group</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean|array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function load($group)
{
	$config = parent::load($group);

	if ($config !== FALSE)
	{
		$this-&gt;_loaded_keys[$group] = array_combine(array_keys($config), array_keys($config));
	}

	return $config;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write"><small>public</small>  write(<small>string</small> <span class="param" title="The config group">$group</span> , <small>string</small> <span class="param" title="The config key to write to">$key</span> , <small>array</small> <span class="param" title="The configuration to write">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a>)</small></h3>
<div class='description'><p>Writes the passed config for $group</p>

<p>Returns chainable instance on success or throws 
Kohana_Config_Exception on failure</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - The config group</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - The config key to write to</li>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - The configuration to write</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function write($group, $key, $config)
{
	$config = serialize($config);

	// Check to see if we&#039;ve loaded the config from the table already
	if (isset($this-&gt;_loaded_keys[$group][$key]))
	{
		$this-&gt;_update($group, $key, $config);
	}
	else
	{
		// Attempt to run an insert query
		// This may fail if the config key already exists in the table
		// and we don&#039;t know about it
		try
		{
			$this-&gt;_insert($group, $key, $config);
		}
		catch (Database_Exception $e)
		{
			// Attempt to run an update instead
			$this-&gt;_update($group, $key, $config);
		}
	}

	return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Configuration for the reader">$config</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Reader'>Kohana_Config_Database_Reader</a>)</small></h3>
<div class='description'><p>Constructs the database reader object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>NULL</small></small> - Configuration for the reader</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $config = NULL)
{
	if (isset($config[&#039;instance&#039;]))
	{
		$this-&gt;_db_instance = $config[&#039;instance&#039;];
	}
	elseif ($this-&gt;_db_instance === NULL)
	{
		$this-&gt;_db_instance = Database::$default;
	}

	if (isset($config[&#039;table_name&#039;]))
	{
		$this-&gt;_table_name = $config[&#039;table_name&#039;];
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_insert"><small>protected</small>  _insert(<small>string</small> <span class="param" title="The config group">$group</span> , <small>string</small> <span class="param" title="The config key to write to">$key</span> , <small>array</small> <span class="param" title="The serialized configuration to write">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a>)</small></h3>
<div class='description'><p>Insert the config values into the table</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - The config group</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - The config key to write to</li>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - The serialized configuration to write</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _insert($group, $key, $config)
{
	DB::insert($this-&gt;_table_name, [&#039;group_name&#039;, &#039;config_key&#039;, &#039;config_value&#039;])
		-&gt;values([$group, $key, $config])
		-&gt;execute($this-&gt;_db_instance);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_update"><small>protected</small>  _update(<small>string</small> <span class="param" title="The config group">$group</span> , <small>string</small> <span class="param" title="The config key to write to">$key</span> , <small>array</small> <span class="param" title="The serialized configuration to write">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Writer'>Kohana_Config_Database_Writer</a>)</small></h3>
<div class='description'><p>Update the config values in the table</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - The config group</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - The config key to write to</li>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - The serialized configuration to write</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _update($group, $key, $config)
{
	DB::update($this-&gt;_table_name)
		-&gt;set([&#039;config_value&#039; =&gt; $config])
		-&gt;where(&#039;group_name&#039;, &#039;=&#039;, $group)
		-&gt;where(&#039;config_key&#039;, &#039;=&#039;, $key)
		-&gt;execute($this-&gt;_db_instance);

	return $this;
}</code>
</pre>
</div>
</div>
</div>