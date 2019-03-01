---
layout: api
class: Kohana_Cache_Memcached
---
<h1>Kohana_Cache_Memcached</h1>
extends <a href='/documentation/api/Cache'>Cache</a>
<br />
extends <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>
<br />
<p>
<i><p>Kohana_Cache_Memcached class</p>

<p>LICENSE: THE WORK (AS DEFINED BELOW) IS PROVIDED UNDER THE TERMS OF THIS
CREATIVE COMMONS PUBLIC LICENSE ("CCPL" OR "LICENSE"). THE WORK IS PROTECTED
BY COPYRIGHT AND/OR OTHER APPLICABLE LAW. ANY USE OF THE WORK OTHER THAN AS
AUTHORIZED UNDER THIS LICENSE OR COPYRIGHT LAW IS PROHIBITED.</p>

<p>BY EXERCISING ANY RIGHTS TO THE WORK PROVIDED HERE, YOU ACCEPT AND AGREE TO
BE BOUND BY THE TERMS OF THIS LICENSE. TO THE EXTENT THIS LICENSE MAY BE
CONSIDERED TO BE A CONTRACT, THE LICENSOR GRANTS YOU THE RIGHTS CONTAINED HERE
IN CONSIDERATION OF YOUR ACCEPTANCE OF SUCH TERMS AND CONDITIONS.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Cache</dd>
<dt>author</dt>
<dd>gimpe <gimpehub@intljaywalkers.com></dd>
<dt>copyright</dt>
<dd>2011 International Jaywalkers</dd>
<dd>(c) 2018 Koseven Team</dd>
<dt>license</dt>
<dd>http://creativecommons.org/licenses/by/3.0/ CC BY 3.0</dd>
<dt>link</dt>
<dd>http://github.com/gimpe/kohana-memcached</dd>
</dl>
<br />
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
<a href="#property-memcached_instance">$memcached_instance</a>
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
<a href="#get">get()</a>
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
<h4 id='property-memcached_instance'><small>protected</small>  <span class='blue'></span> $memcached_instance</h4>
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
<h3 id="delete"><small>public</small>  delete(<small>string</small> <span class="param" title="Id to remove from cache">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcached'>Kohana_Cache_Memcached</a>)</small></h3>
<div class='description'><p>Delete a cache entry based on id</p>

<pre><code>// Delete 'foo' entry from the default group
Cache::instance()-&gt;delete('foo');

// Delete 'foo' entry from the memcache group
Cache::instance('memcache')-&gt;delete('foo')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id to remove from cache</li>
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
    return $this-&gt;memcached_instance-&gt;delete($this-&gt;_sanitize_id($id));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_all"><small>public</small>  delete_all()<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcached'>Kohana_Cache_Memcached</a>)</small></h3>
<div class='description'><p>Delete all cache entries.</p>

<p>Beware of using this method when
using shared memory cache systems, as it will wipe every
entry within the system for all clients.</p>

<pre><code>// Delete all cache entries in the default group
Cache::instance()-&gt;delete_all();

// Delete all cache entries in the memcache group
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
    return $this-&gt;memcached_instance-&gt;flush();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Id of cache to entry">$id</span> [, <small>string</small> <span class="param" title="Default value to return if cache miss">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcached'>Kohana_Cache_Memcached</a>)</small></h3>
<div class='description'><p>Retrieve a cached value entry by id.</p>

<pre><code>// Retrieve cache entry from default group
$data = Cache::instance()-&gt;get('foo');

// Retrieve cache entry from default group and return 'bar' if miss
$data = Cache::instance()-&gt;get('foo', 'bar');

// Retrieve cache entry from memcache group
$data = Cache::instance('memcache')-&gt;get('foo');
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
<li>Throws - <a href="/index.php/">Kohana_Cache_Exception</a></li>
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
    $result = $this-&gt;memcached_instance-&gt;get($this-&gt;_sanitize_id($id));

    if ($this-&gt;memcached_instance-&gt;getResultCode() !== Memcached::RES_SUCCESS)
    {
        $result = $default;
    }

    return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Id of cache entry">$id</span> , <small>string</small> <span class="param" title="Data to set to cache">$data</span> [, <small>integer</small> <span class="param" title="Lifetime in seconds">$lifetime</span> <small>= <small>integer</small> 3600</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcached'>Kohana_Cache_Memcached</a>)</small></h3>
<div class='description'><p>Set a value to cache with id and lifetime</p>

<pre><code>$data = 'bar';

// Set 'bar' to 'foo' in default group, using default expiry
Cache::instance()-&gt;set('foo', $data);

// Set 'bar' to 'foo' in default group for 30 seconds
Cache::instance()-&gt;set('foo', $data, 30);

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
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data to set to cache</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>integer</small> 3600</small> - Lifetime in seconds</li>
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
    return $this-&gt;memcached_instance-&gt;set($this-&gt;_sanitize_id($id), $data, $lifetime);
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
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Memcached'>Kohana_Cache_Memcached</a>)</small></h3>
<div class='description'><p>Ensures singleton pattern is observed, loads the default expiry</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - Configuration</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct(array $config)
{
    if (!extension_loaded(&#039;memcached&#039;))
    {
        // exception missing memcached extension
        throw new Kohana_Cache_Exception(&#039;memcached extension is not loaded&#039;);
    }

    parent::__construct($config);

    $this-&gt;memcached_instance = new Memcached;

    // load servers from configuration
    $servers = Arr::get($this-&gt;_config, &#039;servers&#039;, []);

    if (empty($servers))
    {
        // exception no server found
        throw new Kohana_Cache_Exception(&#039;no Memcached servers in config/cache.php&#039;);
    }

    // load options from configuration
    $options = Arr::get($this-&gt;_config, &#039;options&#039;, []);

    // set options
    foreach ($options as $option =&gt; $value)
    {
        if ($option === Memcached::OPT_SERIALIZER &amp;&amp; $value === Memcached::SERIALIZER_IGBINARY
                &amp;&amp; !Memcached::HAVE_IGBINARY)
        {
            // exception serializer Igbinary not supported
            throw new Kohana_Cache_Exception(&#039;serializer Igbinary not supported, please fix config/cache.php&#039;);
        }

        if ($option === Memcached::OPT_SERIALIZER &amp;&amp; $value === Memcached::SERIALIZER_JSON
                &amp;&amp; !Memcached::HAVE_JSON)
        {
            // exception serializer JSON not supported
            throw new Kohana_Cache_Exception(&#039;serializer JSON not supported, please fix config/cache.php&#039;);
        }

        $this-&gt;memcached_instance-&gt;setOption($option, $value);
    }

    // add servers
    foreach ($servers as $pos =&gt; $server)
    {
        $host   = Arr::get($server, &#039;host&#039;);
        $port   = Arr::get($server, &#039;port&#039;, NULL);
        $weight = Arr::get($server, &#039;weight&#039;, NULL);
        $status = Arr::get($server, &#039;status&#039;, TRUE);

        if (!empty($host))
        {
            // status can be used by an external healthcheck to mark the memcached instance offline
            if ($status === TRUE)
            {
                $this-&gt;memcached_instance-&gt;addServer($host, $port, $weight);
            }
        }
        else
        {
            // exception no server host
            throw new Kohana_Cache_Exception(&#039;no host defined for server[&#039; .$pos . &#039;] in config/cache.php&#039;);
        }
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