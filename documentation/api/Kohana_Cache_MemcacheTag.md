---
layout: api
class: Kohana_Cache_MemcacheTag
---
<h1>Kohana_Cache_MemcacheTag</h1>
extends <a href='/documentation/api/Cache_Memcache'>Cache_Memcache</a>
<br />
extends <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>
<br />
extends <a href='/documentation/api/Cache'>Cache</a>
<br />
extends <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Cache_Arithmetic'>Cache_Arithmetic</a> | <a href='/documentation/api/Kohana_Cache_Arithmetic'>Kohana_Cache_Arithmetic</a> | <a href='/documentation/api/Cache_Tagging'>Cache_Tagging</a> | <a href='/documentation/api/Kohana_Cache_Tagging'>Kohana_Cache_Tagging</a></small>
</p>
<p>
<i><p>See <a href="/index.php/">Kohana_Cache_Memcache</a></p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Cache</dd>
<dt>category</dt>
<dd>Base</dd>
<dt>version</dt>
<dd>2.0</dd>
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
<a href='#constant-CACHE_CEILING'>CACHE_CEILING</a>
</li>
<li>
<a href='#constant-DEFAULT_EXPIRE'>DEFAULT_EXPIRE</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-default">$default</a>
</li>
<li>
<a href="#property-instances">$instances</a>
</li>
<li>
<a href="#property-_config">$_config</a>
</li>
<li>
<a href="#property-_default_config">$_default_config</a>
</li>
<li>
<a href="#property-_flags">$_flags</a>
</li>
<li>
<a href="#property-_memcache">$_memcache</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#delete_tag">delete_tag()</a>
</li>
<li>
<a href="#find">find()</a>
</li>
<li>
<a href="#set_with_tags">set_with_tags()</a>
</li>
<li>
<a href="#_failed_request">_failed_request()</a>
</li>
<li>
<a href="#decrement">decrement()</a>
</li>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#delete_all">delete_all()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#increment">increment()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#__clone">__clone()</a>
</li>
<li>
<a href="#config">config()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#_sanitize_id">_sanitize_id()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-CACHE_CEILING'>CACHE_CEILING</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2592000</pre></dd>
<dt>
<h4 id='constant-DEFAULT_EXPIRE'>DEFAULT_EXPIRE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 3600</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-default'><small>public static</small>  <span class='blue'>string</span> $default</h4>
</dt>
<dd>
 <p>default driver to use</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(4)</span> "file"</pre></dd>
<dt>
<h4 id='property-instances'><small>public static</small>  <span class='blue'>Kohana_Cache</span> $instances</h4>
</dt>
<dd>
 <p>instances</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_config'><small>protected</small>  <span class='blue'>Config</span> $_config</h4>
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
<h4 id='property-_default_config'><small>protected</small>  <span class='blue'>array</span> $_default_config</h4>
</dt>
<dd>
 <p>The default configuration for the memcached server</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_flags'><small>protected</small>  <span class='blue'>string</span> $_flags</h4>
</dt>
<dd>
 <p>Flags to use when storing values</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_memcache'><small>protected</small>  <span class='blue'>Memcache</span> $_memcache</h4>
</dt>
<dd>
 <p>Memcache resource</p>
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
<h3 id="delete_tag"><small>public</small>  delete_tag(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_MemcacheTag'>Kohana_Cache_MemcacheTag</a>)</small></h3>
<div class='description'><p>Delete cache entries based on a tag</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $tag</strong> <small>required</small> - Tag</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_tag($tag)
{
	return $this-&gt;_memcache-&gt;tag_delete($tag);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find"><small>public</small>  find(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_MemcacheTag'>Kohana_Cache_MemcacheTag</a>)</small></h3>
<div class='description'><p>Find cache entries based on a tag</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $tag</strong> <small>required</small> - Tag</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function find($tag)
{
	throw new Cache_Exception(&#039;Memcached-tags does not support finding by tag&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_with_tags"><small>public</small>  set_with_tags(<small>string</small> <span class="param" title="Id">$id</span> , <small>mixed</small> <span class="param" title="Data">$data</span> [, <small>integer</small> <span class="param" title="Lifetime [Optional]">$lifetime</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Tags [Optional]">$tags</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_MemcacheTag'>Kohana_Cache_MemcacheTag</a>)</small></h3>
<div class='description'><p>Set a value based on an id with tags</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small>required</small> - Data</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Lifetime [Optional]</li>
<li>
 <span class="blue">array </span><strong> $tags</strong> <small> = <small>NULL</small></small> - Tags [Optional]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_with_tags($id, $data, $lifetime = NULL, array $tags = NULL)
{
	$id = $this-&gt;_sanitize_id($id);

	$result = $this-&gt;set($id, $data, $lifetime);

	if ($result and $tags)
	{
		foreach ($tags as $tag)
		{
			$this-&gt;_memcache-&gt;tag_add($tag, $id);
		}
	}

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_failed_request"><small>public</small>  _failed_request(<small>string</small> <span class="param" title="$hostname">$hostname</span> , <small>integer</small> <span class="param" title="$port">$port</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Callback method for Memcache::failure_callback to use if any Memcache call
on a particular server fails. This method switches off that instance of the
server if the configuration setting <code>instant_death</code> is set to <code>TRUE</code>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $hostname</strong> <small>required</small> - $hostname</li>
<li>
 <span class="blue">integer </span><strong> $port</strong> <small>required</small> - $port</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void|boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function _failed_request($hostname, $port)
{
	if ( ! $this-&gt;_config[&#039;instant_death&#039;])
		return;

	// Setup non-existent host
	$host = FALSE;

	// Get host settings from configuration
	foreach ($this-&gt;_config[&#039;servers&#039;] as $server)
	{
		// Merge the defaults, since they won&#039;t always be set
		$server += $this-&gt;_default_config;
		// We&#039;re looking at the failed server
		if ($hostname == $server[&#039;host&#039;] and $port == $server[&#039;port&#039;])
		{
			// Server to disable, since it failed
			$host = $server;
			continue;
		}
	}

	if ( ! $host)
		return;
	else
	{
		return $this-&gt;_memcache-&gt;setServerParams(
			$host[&#039;host&#039;],
			$host[&#039;port&#039;],
			$host[&#039;timeout&#039;],
			$host[&#039;retry_interval&#039;],
			FALSE, // Server is offline
			[$this, &#039;_failed_request&#039;
			]);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decrement"><small>public</small>  decrement(<small>string</small> <span class="param" title="Id of cache entry to decrement">$id</span> [, <small>int</small> <span class="param" title="Step value to decrement by">$step</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Decrements a given value by the step value supplied.
Useful for shared counters and other persistent integer based
tracking.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry to decrement</li>
<li>
 <span class="blue">int </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Step value to decrement by</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li><li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function decrement($id, $step = 1)
{
	return $this-&gt;_memcache-&gt;decrement($id, $step);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete"><small>public</small>  delete(<small>string</small> <span class="param" title="Id of entry to delete">$id</span> [, <small>integer</small> <span class="param" title="Timeout of entry, if zero item is deleted immediately, otherwise the item will delete after the specified value in seconds">$timeout</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Delete a cache entry based on id</p>

<pre><code>// Delete the 'foo' cache entry immediately
Cache::instance('memcache')-&gt;delete('foo');

// Delete the 'bar' cache entry after 30 seconds
Cache::instance('memcache')-&gt;delete('bar', 30);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of entry to delete</li>
<li>
 <span class="blue">integer </span><strong> $timeout</strong> <small> = <small>integer</small> 0</small> - Timeout of entry, if zero item is deleted immediately, otherwise the item will delete after the specified value in seconds</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete($id, $timeout = 0)
{
	// Delete the id
	return $this-&gt;_memcache-&gt;delete($this-&gt;_sanitize_id($id), $timeout);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_all"><small>public</small>  delete_all()<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Delete all cache entries.</p>

<p>Beware of using this method when
using shared memory cache systems, as it will wipe every
entry within the system for all clients.</p>

<pre><code>// Delete all cache entries in the default group
Cache::instance('memcache')-&gt;delete_all();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_all()
{
	$result = $this-&gt;_memcache-&gt;flush();

	// We must sleep after flushing, or overwriting will not work!
	// @see http://php.net/manual/en/function.memcache-flush.php#81420
	sleep(1);

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Id of cache to entry">$id</span> [, <small>string</small> <span class="param" title="Default value to return if cache miss">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Retrieve a cached value entry by id.</p>

<pre><code>// Retrieve cache entry from memcache group
$data = Cache::instance('memcache')-&gt;get('foo');

// Retrieve cache entry from memcache group and return 'bar' if miss
$data = Cache::instance('memcache')-&gt;get('foo', 'bar');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache to entry</li>
<li>
 <span class="blue">string </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value to return if cache miss</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get($id, $default = NULL)
{
	// Get the value from Memcache
	$value = $this-&gt;_memcache-&gt;get($this-&gt;_sanitize_id($id));

	// If the value wasn&#039;t found, normalise it
	if ($value === FALSE)
	{
		$value = (NULL === $default) ? NULL : $default;
	}

	// Return the value
	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="increment"><small>public</small>  increment(<small>string</small> <span class="param" title="Id of cache entry to increment">$id</span> [, <small>int</small> <span class="param" title="Step value to increment by">$step</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Increments a given value by the step value supplied.
Useful for shared counters and other persistent integer based
tracking.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry to increment</li>
<li>
 <span class="blue">int </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Step value to increment by</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li><li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function increment($id, $step = 1)
{
	return $this-&gt;_memcache-&gt;increment($id, $step);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Id of cache entry">$id</span> , <small>mixed</small> <span class="param" title="Data to set to cache">$data</span> [, <small>integer</small> <span class="param" title="Lifetime in seconds, maximum value 2592000">$lifetime</span> <small>= <small>integer</small> 3600</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcache'>Kohana_Cache_Memcache</a>)</small></h3>
<div class='description'><p>Set a value to cache with id and lifetime</p>

<pre><code>$data = 'bar';

// Set 'bar' to 'foo' in memcache group for 10 minutes
if (Cache::instance('memcache')-&gt;set('foo', $data, 600))
{
     // Cache was set successfully
     return
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small>required</small> - Data to set to cache</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>integer</small> 3600</small> - Lifetime in seconds, maximum value 2592000</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($id, $data, $lifetime = 3600)
{
	// If the lifetime is greater than the ceiling
	if ($lifetime &gt; Cache_Memcache::CACHE_CEILING)
	{
		// Set the lifetime to maximum cache time
		$lifetime = Cache_Memcache::CACHE_CEILING + time();
	}
	// Else if the lifetime is greater than zero
	elseif ($lifetime &gt; 0)
	{
		$lifetime += time();
	}
	// Else
	else
	{
		// Normalise the lifetime
		$lifetime = 0;
	}

	// Set the data to memcache
	return $this-&gt;_memcache-&gt;set($this-&gt;_sanitize_id($id), $data, $this-&gt;_flags, $lifetime);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__clone"><small>final public</small>  __clone()<small> (defined in <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>)</small></h3>
<div class='description'><p>Overload the __clone() method to prevent cloning</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">final public function __clone()
{
	throw new Cache_Exception(&#039;Cloning of Kohana_Cache objects is forbidden&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="config"><small>public</small>  config([ <small>mixed</small> <span class="param" title="Key to set to array, either array or config path">$key</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Value to associate with key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>)</small></h3>
<div class='description'><p>Getter and setter for the configuration. If no argument provided, the
current configuration is returned. Otherwise the configuration is set
to this class.</p>

<pre><code>// Overwrite all configuration
$cache-&gt;config(array('driver' =&gt; 'memcache', '...'));

// Set a new configuration setting
$cache-&gt;config('servers', array(
     'foo' =&gt; 'bar',
     '...'
     ));

// Get a configuration setting
$servers = $cache-&gt;config('servers);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key to set to array, either array or config path</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to associate with key</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function config($key = NULL, $value = NULL)
{
	if ($key === NULL)
		return $this-&gt;_config;

	if (is_array($key))
	{
		$this-&gt;_config = $key;
	}
	else
	{
		if ($value === NULL)
			return Arr::get($this-&gt;_config, $key);

		$this-&gt;_config[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance([ <small>string</small> <span class="param" title="The name of the cache group to use [Optional]">$group</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>)</small></h3>
<div class='description'><p>Creates a singleton of a Kohana Cache group. If no group is supplied
the <strong>default</strong> cache group is used.</p>

<pre><code>// Create an instance of the default group
$default_group = Cache::instance();

// Create an instance of a group
$foo_group = Cache::instance('foo');

// Access an instantiated group directly
$foo_group = Cache::$instances['default'];
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small> = <small>NULL</small></small> - The name of the cache group to use [Optional]</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Cache</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance($group = NULL)
{
       // If there is no group supplied, try to get it from the config
       if ($group === NULL)
       {
           $group = Kohana::$config-&gt;load(&#039;cache.default&#039;);
       }

	// If there is no group supplied
	if ($group === NULL)
	{
		// Use the default setting
		$group = Cache::$default;
	}

	if (isset(Cache::$instances[$group]))
	{
		// Return the current group if initiated already
		return Cache::$instances[$group];
	}

	$config = Kohana::$config-&gt;load(&#039;cache&#039;);

	if ( ! $config-&gt;offsetExists($group))
	{
		throw new Cache_Exception(
			&#039;Failed to load Kohana Cache group: :group&#039;,
			[&#039;:group&#039; =&gt; $group]
		);
	}

	$config = $config-&gt;get($group);

	// Create a new cache type instance
	$cache_class = &#039;Cache_&#039;.ucfirst($config[&#039;driver&#039;]);
	Cache::$instances[$group] = new $cache_class($config);

	// Return the instance
	return Cache::$instances[$group];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_MemcacheTag'>Kohana_Cache_MemcacheTag</a>)</small></h3>
<div class='description'><p>Constructs the memcache object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - Configuration</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct(array $config)
{
	parent::__construct($config);

	if ( ! method_exists($this-&gt;_memcache, &#039;tag_add&#039;))
	{
		throw new Cache_Exception(&#039;Memcached-tags PHP plugin not present. Please see http://code.google.com/p/memcached-tags/ for more information&#039;);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_sanitize_id"><small>protected</small>  _sanitize_id(<small>string</small> <span class="param" title="Id of cache to sanitize">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>)</small></h3>
<div class='description'><p>Replaces troublesome characters with underscores and adds prefix to avoid duplicates</p>

<pre><code>// Sanitize a cache id
$id = $this-&gt;_sanitize_id($id);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache to sanitize</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _sanitize_id($id)
{

    // adding cache prefix to avoid duplicates
    $prefix = &#039;&#039;;
    // configuration for the specific cache group
    if (isset($this-&gt;_config[&#039;prefix&#039;]) AND $this-&gt;_config[&#039;prefix&#039;] !== NULL)
    {
        $prefix = $this-&gt;_config[&#039;prefix&#039;];
    }
    // prefix general configuration cache
    else
    {
        $prefix = Kohana::$config-&gt;load(&#039;cache.prefix&#039;);
    }

    // sha1 the id makes sure name is not too long and has not any not allowed characters
    return $prefix.sha1($id);
}</code>
</pre>
</div>
</div>
</div>