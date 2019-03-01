---
layout: api
class: Kohana_Config_File
---
<h1>Kohana_Config_File</h1>
extends <a href='/documentation/api/Kohana_Config_File_Reader'>Kohana_Config_File_Reader</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Config_Source'>Kohana_Config_Source</a> | <a href='/documentation/api/Kohana_Config_Reader'>Kohana_Config_Reader</a></small>
</p>
<p>
<i><p>File-based configuration reader. Multiple configuration directories can be
used by attaching multiple instances of this class to <a href="/index.php/">Config</a>.</p>
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
<a href="#property-_directory">$_directory</a>
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
<h4 id='property-_directory'><small>protected</small>  <span class='blue'>string</span> $_directory</h4>
</dt>
<dd>
 <p>The directory where config files are located</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>string</small> <span class="param" title="Configuration directory to search">$directory</span> <small>= <small>string</small><span>(6)</span> "config"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Config_File_Reader'>Kohana_Config_File_Reader</a>)</small></h3>
<div class='description'><p>Creates a new file reader using the given directory as a config source</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>string</small><span>(6)</span> "config"</small> - Configuration directory to search</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($directory = &#039;config&#039;)
{
	// Set the configuration directory name
	$this-&gt;_directory = trim($directory, &#039;/&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="load"><small>public</small>  load(<small>string</small> <span class="param" title="Configuration group name">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_File_Reader'>Kohana_Config_File_Reader</a>)</small></h3>
<div class='description'><p>Load and merge all of the configuration files in this group.</p>

<pre><code>$config-&gt;load($name);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Configuration group name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#load">Kohana::load</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  - Current object 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function load($group)
{
	$config = [];

	if ($files = Kohana::find_file($this-&gt;_directory, $group, NULL, TRUE))
	{
		foreach ($files as $file)
		{
			// Merge each file to the configuration array
			$config = Arr::merge($config, Kohana::load($file));
		}
	}

	return $config;
}</code>
</pre>
</div>
</div>
</div>