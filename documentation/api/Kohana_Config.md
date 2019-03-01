---
layout: api
class: Kohana_Config
---
<h1>Kohana_Config</h1>
<p>
<i><p>Wrapper for configuration arrays. Multiple configuration readers can be
attached to allow loading configuration from files, database, etc.</p>

<p>Configuration directives cascade across config sources in the same way that
files cascade across the filesystem.</p>

<p>Directives from sources high in the sources list will override ones from those
below them.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
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
<a href="#property-_groups">$_groups</a>
</li>
<li>
<a href="#property-_sources">$_sources</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#_write_config">_write_config()</a>
</li>
<li>
<a href="#attach">attach()</a>
</li>
<li>
<a href="#copy">copy()</a>
</li>
<li>
<a href="#detach">detach()</a>
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
<h4 id='property-_groups'><small>protected</small>  <span class='blue'></span> $_groups</h4>
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
<h4 id='property-_sources'><small>protected</small>  <span class='blue'></span> $_sources</h4>
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
<h3 id="_write_config"><small>public</small>  _write_config(<small>string</small> <span class="param" title="Group name">$group</span> , <small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <span class="param" title="The new value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Config'>Kohana_Config</a>)</small></h3>
<div class='description'><p>Callback used by the config group to store changes made to configuration</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Group name</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - The new value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Kohana_Config</span>  - Chainable instance 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function _write_config($group, $key, $value)
{
	foreach ($this-&gt;_sources as $source)
	{
		if ( ! ($source instanceof Kohana_Config_Writer))
		{
			continue;
		}

		// Copy each value in the config
		$source-&gt;write($group, $key, $value);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="attach"><small>public</small>  attach(<small>Kohana_Config_Source</small> <span class="param" title="Instance">$source</span> [, <small>boolean</small> <span class="param" title="Add the reader as the first used object">$first</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Config'>Kohana_Config</a>)</small></h3>
<div class='description'><p>Attach a configuration reader. By default, the reader will be added as
the first used reader. However, if the reader should be used only when
all other readers fail, use <code>FALSE</code> for the second parameter.</p>

<pre><code>$config-&gt;attach($reader);        // Try first
$config-&gt;attach($reader, FALSE); // Try last
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Kohana_Config_Source </span><strong> $source</strong> <small>required</small> - Instance</li>
<li>
 <span class="blue">boolean </span><strong> $first</strong> <small> = <small>bool</small> TRUE</small> - Add the reader as the first used object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function attach(Kohana_Config_Source $source, $first = TRUE)
{
	if ($first === TRUE)
	{
		// Place the log reader at the top of the stack
		array_unshift($this-&gt;_sources, $source);
	}
	else
	{
		// Place the reader at the bottom of the stack
		$this-&gt;_sources[] = $source;
	}

	// Clear any cached _groups
	$this-&gt;_groups = [];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="copy"><small>public</small>  copy(<small>string</small> <span class="param" title="Configuration group name">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config'>Kohana_Config</a>)</small></h3>
<div class='description'><p>Copy one configuration group to all of the other writers.</p>

<pre><code>$config-&gt;copy($name);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Configuration group name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function copy($group)
{
	// Load the configuration group
	$config = $this-&gt;load($group);

	foreach ($config-&gt;as_array() as $key =&gt; $value)
	{
		$this-&gt;_write_config($group, $key, $value);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="detach"><small>public</small>  detach(<small>Kohana_Config_Source</small> <span class="param" title="Instance">$source</span> )<small> (defined in <a href='/documentation/api/Kohana_Config'>Kohana_Config</a>)</small></h3>
<div class='description'><p>Detach a configuration reader.</p>

<pre><code>$config-&gt;detach($reader);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Kohana_Config_Source </span><strong> $source</strong> <small>required</small> - Instance</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function detach(Kohana_Config_Source $source)
{
	if (($key = array_search($source, $this-&gt;_sources)) !== FALSE)
	{
		// Remove the writer
		unset($this-&gt;_sources[$key]);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="load"><small>public</small>  load(<small>string</small> <span class="param" title="Configuration group name">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config'>Kohana_Config</a>)</small></h3>
<div class='description'><p>Load a configuration group. Searches all the config sources, merging all the
directives found into a single config group.  Any changes made to the config
in this group will be mirrored across all writable sources.</p>

<pre><code>$array = $config-&gt;load($name);
</code></pre>

<p>See <a href="/index.php/">Kohana_Config_Group</a> for more info</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Configuration group name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Kohana_Config_Group</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function load($group)
{
	if ( ! count($this-&gt;_sources))
	{
		throw new Kohana_Exception(&#039;No configuration sources attached&#039;);
	}

	if (empty($group))
	{
		throw new Kohana_Exception(&quot;Need to specify a config group&quot;);
	}

	if ( ! is_string($group))
	{
		throw new Kohana_Exception(&quot;Config group must be a string&quot;);
	}

	if (strpos($group, &#039;.&#039;) !== FALSE)
	{
		// Split the config group and path
		list($group, $path) = explode(&#039;.&#039;, $group, 2);
	}

	if (isset($this-&gt;_groups[$group]))
	{
		if (isset($path))
		{
			return Arr::path($this-&gt;_groups[$group], $path, NULL, &#039;.&#039;);
		}
		return $this-&gt;_groups[$group];
	}

	$config = [];

	// We search from the &quot;lowest&quot; source and work our way up
	$sources = array_reverse($this-&gt;_sources);

	foreach ($sources as $source)
	{
		if ($source instanceof Kohana_Config_Reader)
		{
			if ($source_config = $source-&gt;load($group))
			{
				$config = Arr::merge($config, $source_config);
			}
		}
	}

	$this-&gt;_groups[$group] = new Config_Group($this, $group, $config);

	if (isset($path))
	{
		return Arr::path($config, $path, NULL, &#039;.&#039;);
	}

	return $this-&gt;_groups[$group];
}</code>
</pre>
</div>
</div>
</div>