---
layout: api
class: Kohana_Config_Database_Reader
---
<h1>Kohana_Config_Database_Reader</h1>
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Config_Reader'>Kohana_Config_Reader</a> | <a href='/documentation/api/Kohana_Config_Source'>Kohana_Config_Source</a></small>
</p>
<p>
<i><p>Database reader for the kohana config system</p>
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
<a href="#property-_table_name">$_table_name</a>
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
<a href="#load">load()</a>
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
<h3 id="load"><small>public</small>  load(<small>string</small> <span class="param" title="Configuration group">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Database_Reader'>Kohana_Config_Database_Reader</a>)</small></h3>
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
	/**
	 * Prevents the catch-22 scenario where the database config reader attempts to load the 
	 * database connections details from the database.
	 *
	 * @link http://dev.kohanaframework.org/issues/4316
	 */
	if ($group === &#039;database&#039;)
		return FALSE;

	$query = DB::select(&#039;config_key&#039;, &#039;config_value&#039;)
		-&gt;from($this-&gt;_table_name)
		-&gt;where(&#039;group_name&#039;, &#039;=&#039;, $group)
		-&gt;execute($this-&gt;_db_instance);

	return count($query) ? array_map(&#039;unserialize&#039;, $query-&gt;as_array(&#039;config_key&#039;, &#039;config_value&#039;)) : FALSE;
}</code>
</pre>
</div>
</div>
</div>