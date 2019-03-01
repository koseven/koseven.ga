---
layout: api
class: Cache_Sqlite
---
<h1>Cache_Sqlite</h1>
extends <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>
<br />
extends <a href='/documentation/api/Cache'>Cache</a>
<br />
extends <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Cache_GarbageCollect'>Kohana_Cache_GarbageCollect</a> | <a href='/documentation/api/Cache_GarbageCollect'>Cache_GarbageCollect</a> | <a href='/documentation/api/Kohana_Cache_Tagging'>Kohana_Cache_Tagging</a> | <a href='/documentation/api/Cache_Tagging'>Cache_Tagging</a></small>
</p>
<p>
<i><p>Kohana Cache Sqlite Driver</p>

<p>Requires SQLite3 and PDO</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Cache</dd>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
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
<a href="#property-_db">$_db</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#delete_all">delete_all()</a>
</li>
<li>
<a href="#delete_tag">delete_tag()</a>
</li>
<li>
<a href="#find">find()</a>
</li>
<li>
<a href="#garbage_collect">garbage_collect()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#set_with_tags">set_with_tags()</a>
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
<a href="#exists">exists()</a>
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
<h4 id='property-_db'><small>protected</small>  <span class='blue'>PDO</span> $_db</h4>
</dt>
<dd>
 <p>Database resource</p>
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
<h3 id="delete"><small>public</small>  delete(<small>string</small> <span class="param" title="Id">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Delete a cache entry based on id</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete($id)
{
	// Prepare statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;DELETE FROM caches WHERE id = :id&#039;);

	// Remove the entry
	try
	{
		$statement-&gt;execute([&#039;:id&#039; =&gt; $this-&gt;_sanitize_id($id)]);
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	return (bool) $statement-&gt;rowCount();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_all"><small>public</small>  delete_all()<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Delete all cache entries</p>
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
	// Prepare statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;DELETE FROM caches&#039;);

	// Remove the entry
	try
	{
		$statement-&gt;execute();
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	return (bool) $statement-&gt;rowCount();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_tag"><small>public</small>  delete_tag(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Delete cache entries based on a tag</p>
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
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_tag($tag)
{
	// Prepare the statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;DELETE FROM caches WHERE tags LIKE :tag&#039;);

	// Try to delete
	try
	{
		$statement-&gt;execute([&#039;:tag&#039; =&gt; &quot;%&lt;{$tag}&gt;%&quot;]);
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	return (bool) $statement-&gt;rowCount();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find"><small>public</small>  find(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
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
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function find($tag)
{
	// Prepare the statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;SELECT id, cache FROM caches WHERE tags LIKE :tag&#039;);

	// Try to find
	try
	{
		if ( ! $statement-&gt;execute([&#039;:tag&#039; =&gt; &quot;%&lt;{$tag}&gt;%&quot;]))
		{
			return [];
		}
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	$result = [];

	while ($row = $statement-&gt;fetchObject())
	{
		// Disable notices for unserializing
		$ER = error_reporting(~E_NOTICE);

		$result[$row-&gt;id] = unserialize($row-&gt;cache);

		// Turn notices back on
		error_reporting($ER);
	}

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="garbage_collect"><small>public</small>  garbage_collect()<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Garbage collection method that cleans any expired
cache entries from the cache.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function garbage_collect()
{
	// Create the sequel statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;DELETE FROM caches WHERE expiration &lt; :expiration&#039;);

	try
	{
		$statement-&gt;execute([&#039;:expiration&#039; =&gt; time()]);
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Id">$id</span> [, <small>string</small> <span class="param" title="Default [Optional] Default value to return if id not found">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Retrieve a value based on an id</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
<li>
 <span class="blue">string </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default [Optional] Default value to return if id not found</li>
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
	// Prepare statement
	$statement = $this-&gt;_db-&gt;prepare(&#039;SELECT id, expiration, cache FROM caches WHERE id = :id LIMIT 0, 1&#039;);

	// Try and load the cache based on id
	try
	{
		$statement-&gt;execute([&#039;:id&#039; =&gt; $this-&gt;_sanitize_id($id)]);
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	if ( ! $result = $statement-&gt;fetch(PDO::FETCH_OBJ))
	{
		return $default;
	}

	// If the cache has expired
	if ($result-&gt;expiration != 0 and $result-&gt;expiration &lt;= time())
	{
		// Delete it and return default value
		$this-&gt;delete($id);
		return $default;
	}
	// Otherwise return cached object
	else
	{
		// Disable notices for unserializing
		$ER = error_reporting(~E_NOTICE);

		// Return the valid cache data
		$data = unserialize($result-&gt;cache);

		// Turn notices back on
		error_reporting($ER);

		// Return the resulting data
		return $data;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Id">$id</span> , <small>mixed</small> <span class="param" title="Data">$data</span> [, <small>integer</small> <span class="param" title="Lifetime [Optional]">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Set a value based on an id. Optionally add tags.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small>required</small> - Data</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Lifetime [Optional]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($id, $data, $lifetime = NULL)
{
	return (bool) $this-&gt;set_with_tags($id, $data, $lifetime);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_with_tags"><small>public</small>  set_with_tags(<small>string</small> <span class="param" title="Id">$id</span> , <small>mixed</small> <span class="param" title="Data">$data</span> [, <small>integer</small> <span class="param" title="Lifetime [Optional]">$lifetime</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Tags [Optional]">$tags</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Set a value based on an id. Optionally add tags.</p>
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
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
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
	// Serialize the data
	$data = serialize($data);

	// Normalise tags
	$tags = (NULL === $tags) ? NULL : (&#039;&lt;&#039;.implode(&#039;&gt;,&lt;&#039;, $tags).&#039;&gt;&#039;);

	// Setup lifetime
	if ($lifetime === NULL)
	{
		$lifetime = (0 === Arr::get($this-&gt;_config, &#039;default_expire&#039;, NULL)) ? 0 : (Arr::get($this-&gt;_config, &#039;default_expire&#039;, Cache::DEFAULT_EXPIRE) + time());
	}
	else
	{
		$lifetime = (0 === $lifetime) ? 0 : ($lifetime + time());
	}

	// Prepare statement
	// $this-&gt;exists() may throw Cache_Exception, no need to catch/rethrow
	$statement = $this-&gt;exists($id) ? $this-&gt;_db-&gt;prepare(&#039;UPDATE caches SET expiration = :expiration, cache = :cache, tags = :tags WHERE id = :id&#039;) : $this-&gt;_db-&gt;prepare(&#039;INSERT INTO caches (id, cache, expiration, tags) VALUES (:id, :cache, :expiration, :tags)&#039;);

	// Try to insert
	try
	{
		$statement-&gt;execute([&#039;:id&#039; =&gt; $this-&gt;_sanitize_id($id), &#039;:cache&#039; =&gt; $data, &#039;:expiration&#039; =&gt; $lifetime, &#039;:tags&#039; =&gt; $tags]);
	}
	catch (PDOException $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	return (bool) $statement-&gt;rowCount();
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
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Sets up the PDO SQLite table and
initialises the PDO connection</p>
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

	$database = Arr::get($this-&gt;_config, &#039;database&#039;, NULL);

	if ($database === NULL)
	{
		throw new Cache_Exception(&#039;Database path not available in Kohana Cache configuration&#039;);
	}

	// Load new Sqlite DB
	$this-&gt;_db = new PDO(&#039;sqlite:&#039;.$database);

	// Test for existing DB
	$result = $this-&gt;_db-&gt;query(&quot;SELECT * FROM sqlite_master WHERE name = &#039;caches&#039; AND type = &#039;table&#039;&quot;)-&gt;fetchAll();

	// If there is no table, create a new one
	if (0 == count($result))
	{
		$database_schema = Arr::get($this-&gt;_config, &#039;schema&#039;, NULL);

		if ($database_schema === NULL)
		{
			throw new Cache_Exception(&#039;Database schema not found in Kohana Cache configuration&#039;);
		}

		try
		{
			// Create the caches table
			$this-&gt;_db-&gt;query(Arr::get($this-&gt;_config, &#039;schema&#039;, NULL));
		}
		catch (PDOException $e)
		{
			throw new Cache_Exception(&#039;Failed to create new SQLite caches table with the following error : :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="exists"><small>protected</small>  exists(<small>string</small> <span class="param" title="Id">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Sqlite'>Kohana_Cache_Sqlite</a>)</small></h3>
<div class='description'><p>Tests whether an id exists or not</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function exists($id)
{
	$statement = $this-&gt;_db-&gt;prepare(&#039;SELECT id FROM caches WHERE id = :id&#039;);
	try
	{
		$statement-&gt;execute([&#039;:id&#039; =&gt; $this-&gt;_sanitize_id($id)]);
	}
	catch (PDOExeption $e)
	{
		throw new Cache_Exception(&#039;There was a problem querying the local SQLite3 cache. :error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()]);
	}

	return (bool) $statement-&gt;fetchAll();
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