---
layout: api
class: Kohana_Cache_File
---
<h1>Kohana_Cache_File</h1>
extends <a href='/documentation/api/Cache'>Cache</a>
<br />
extends <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Cache_GarbageCollect'>Cache_GarbageCollect</a> | <a href='/documentation/api/Kohana_Cache_GarbageCollect'>Kohana_Cache_GarbageCollect</a></small>
</p>
<p>
<i><p><a href="api/Kohana_Cache">Kohana Cache</a> File driver. Provides a file based
driver for the Kohana Cache library. This is one of the slowest
caching methods.</p>

<h3 id="configuration-example">Configuration example</h3>

<p>Below is an example of a <em>file</em> server configuration.</p>

<pre><code>return array(
     'file'   =&gt; array(                          // File driver group
             'driver'         =&gt; 'file',         // using File driver
             'cache_dir'     =&gt; APPPATH.'cache/.kohana_cache', // Cache location
      ),
)
</code></pre>

<p>In cases where only one cache group is required, if the group is named <code>default</code> there is
no need to pass the group name when instantiating a cache instance.</p>

<h4 id="general-cache-group-configuration-settings">General cache group configuration settings</h4>

<p>Below are the settings available to all types of cache driver.</p>

<table>
<thead>
<tr>
  <th>Name</th>
  <th>Required</th>
  <th>Description</th>
</tr>
</thead>
<tbody>
<tr>
  <td>driver</td>
  <td><strong>YES</strong></td>
  <td>(<em>string</em>) The driver type to use</td>
</tr>
<tr>
  <td>cache_dir</td>
  <td><strong>NO</strong></td>
  <td>(<em>string</em>) The cache directory to use for this cache instance</td>
</tr>
</tbody>
</table>

<h3 id="system-requirements">System requirements</h3>

<ul>
<li>Kohana 3.0.x</li>
<li>PHP 5.2.4 or greater</li>
</ul>
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
<a href="#property-_cache_dir">$_cache_dir</a>
</li>
<li>
<a href="#property-_cache_dir_usable">$_cache_dir_usable</a>
</li>
<li>
<a href="#property-_config">$_config</a>
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
<a href="#garbage_collect">garbage_collect()</a>
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
<a href="#_check_cache_dir">_check_cache_dir()</a>
</li>
<li>
<a href="#_delete_file">_delete_file()</a>
</li>
<li>
<a href="#_is_expired">_is_expired()</a>
</li>
<li>
<a href="#_make_directory">_make_directory()</a>
</li>
<li>
<a href="#_resolve_directory">_resolve_directory()</a>
</li>
<li>
<a href="#filename">filename()</a>
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
<h4 id='property-_cache_dir'><small>protected</small>  <span class='blue'>string</span> $_cache_dir</h4>
</dt>
<dd>
 <p>the caching directory</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_cache_dir_usable'><small>protected</small>  <span class='blue'>boolean</span> $_cache_dir_usable</h4>
</dt>
<dd>
 <p>does the cache directory exists and writeable</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
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
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="delete"><small>public</small>  delete(<small>string</small> <span class="param" title="Id to remove from cache">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Delete a cache entry based on id</p>

<pre><code>// Delete 'foo' entry from the file group
Cache::instance('file')-&gt;delete('foo');
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
	$this-&gt;_cache_dir_usable or $this-&gt;_check_cache_dir();

	$filename = Cache_File::filename($this-&gt;_sanitize_id($id));
	$directory = $this-&gt;_resolve_directory($filename);

	return $this-&gt;_delete_file(new SplFileInfo($directory.$filename), FALSE, TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete_all"><small>public</small>  delete_all()<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Delete all cache entries.</p>

<p>Beware of using this method when
using shared memory cache systems, as it will wipe every
entry within the system for all clients.</p>

<pre><code>// Delete all cache entries in the file group
Cache::instance('file')-&gt;delete_all();
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
	$this-&gt;_cache_dir_usable or $this-&gt;_check_cache_dir();

	return $this-&gt;_delete_file($this-&gt;_cache_dir, TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="garbage_collect"><small>public</small>  garbage_collect()<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
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
	$this-&gt;_cache_dir_usable or $this-&gt;_check_cache_dir();

	$this-&gt;_delete_file($this-&gt;_cache_dir, TRUE, FALSE, TRUE);
	return;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Id of cache to entry">$id</span> [, <small>string</small> <span class="param" title="Default value to return if cache miss">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Retrieve a cached value entry by id.</p>

<pre><code>// Retrieve cache entry from file group
$data = Cache::instance('file')-&gt;get('foo');

// Retrieve cache entry from file group and return 'bar' if miss
$data = Cache::instance('file')-&gt;get('foo', 'bar');
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
	$this-&gt;_cache_dir_usable or $this-&gt;_check_cache_dir();

	$filename = Cache_File::filename($this-&gt;_sanitize_id($id));
	$directory = $this-&gt;_resolve_directory($filename);

	// Wrap operations in try/catch to handle notices
	try
	{
		// Open file
		$file = new SplFileInfo($directory.$filename);

		// If file does not exist
		if ( ! $file-&gt;isFile())
		{
			// Return default value
			return $default;
		}
		else
		{
			// Test the expiry
			if ($this-&gt;_is_expired($file))
			{
				// Delete the file
				$this-&gt;_delete_file($file, FALSE, TRUE);
				return $default;
			}

			// open the file to read data
			$data = $file-&gt;openFile();

			// Run first fgets(). Cache data starts from the second line
			// as the first contains the lifetime timestamp
			$data-&gt;fgets();

			$cache = &#039;&#039;;

			while ($data-&gt;eof() === FALSE)
			{
				$cache .= $data-&gt;fgets();
			}

			return unserialize($cache);
		}

	}
	catch (ErrorException $e)
	{
		// Handle ErrorException caused by failed unserialization
		if ($e-&gt;getCode() === E_NOTICE)
		{
			throw new Cache_Exception(__METHOD__.&#039; failed to unserialize cached object with message : &#039;.$e-&gt;getMessage());
		}

		// Otherwise throw the exception
		throw $e;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Id of cache entry">$id</span> , <small>string</small> <span class="param" title="Data to set to cache">$data</span> [, <small>integer</small> <span class="param" title="Lifetime in seconds">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Set a value to cache with id and lifetime</p>

<pre><code>$data = 'bar';

// Set 'bar' to 'foo' in file group, using default expiry
Cache::instance('file')-&gt;set('foo', $data);

// Set 'bar' to 'foo' in file group for 30 seconds
Cache::instance('file')-&gt;set('foo', $data, 30);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry</li>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data to set to cache</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Lifetime in seconds</li>
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
	$this-&gt;_cache_dir_usable or $this-&gt;_check_cache_dir();

	$filename = Cache_File::filename($this-&gt;_sanitize_id($id));
	$directory = $this-&gt;_resolve_directory($filename);

	// If lifetime is NULL
	if ($lifetime === NULL)
	{
		// Set to the default expiry
		$lifetime = Arr::get($this-&gt;_config, &#039;default_expire&#039;, Cache::DEFAULT_EXPIRE);
	}

	// Open directory
	$dir = new SplFileInfo($directory);

	// If the directory path is not a directory
	if ( ! $dir-&gt;isDir())
	{
		$this-&gt;_make_directory($directory, 0777, TRUE);
	}

	// Open file to inspect
	$resouce = new SplFileInfo($directory.$filename);
	$file = $resouce-&gt;openFile(&#039;w&#039;);

	try
	{
		$data = $lifetime.&quot;\n&quot;.serialize($data);
		$file-&gt;fwrite($data, strlen($data));
		return (bool) $file-&gt;fflush();
	}
	catch (ErrorException $e)
	{
		// If serialize through an error exception
		if ($e-&gt;getCode() === E_NOTICE)
		{
			// Throw a caching error
			throw new Cache_Exception(__METHOD__.&#039; failed to serialize data for caching with message : &#039;.$e-&gt;getMessage());
		}

		// Else rethrow the error exception
		throw $e;
	}
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
<h3 id="_check_cache_dir"><small>protected</small>  _check_cache_dir()<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Check that the cache directory exists and writeable. Attempts to create
it if not exists.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _check_cache_dir()
{
	try
	{
		$directory = Arr::get($this-&gt;_config, &#039;cache_dir&#039;, Kohana::$cache_dir);
		$this-&gt;_cache_dir = new SplFileInfo($directory);
	}
	catch (UnexpectedValueException $e)
	{
		$this-&gt;_cache_dir = $this-&gt;_make_directory($directory, 0777, TRUE);
	}

	// If the defined directory is a file, get outta here
	if ($this-&gt;_cache_dir-&gt;isFile())
	{
		throw new Cache_Exception(&#039;Unable to create cache directory as a file already exists : :resource&#039;, [&#039;:resource&#039; =&gt; $this-&gt;_cache_dir-&gt;getRealPath()]);
	}

	// Check the read status of the directory
	if ( ! $this-&gt;_cache_dir-&gt;isReadable())
	{
		throw new Cache_Exception(&#039;Unable to read from the cache directory :resource&#039;, [&#039;:resource&#039; =&gt; $this-&gt;_cache_dir-&gt;getRealPath()]);
	}

	// Check the write status of the directory
	if ( ! $this-&gt;_cache_dir-&gt;isWritable())
	{
		throw new Cache_Exception(&#039;Unable to write to the cache directory :resource&#039;, [&#039;:resource&#039; =&gt; $this-&gt;_cache_dir-&gt;getRealPath()]);
	}

	$this-&gt;_cache_dir_usable = TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_delete_file"><small>protected</small>  _delete_file(<small>SplFileInfo</small> <span class="param" title="File">$file</span> [, <small>boolean</small> <span class="param" title="Retain the parent directory">$retain_parent_directory</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Ignore_errors to prevent all exceptions interrupting exec">$ignore_errors</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Only expired files">$only_expired</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Deletes files recursively and returns FALSE on any errors</p>

<pre><code>// Delete a file or folder whilst retaining parent directory and ignore all errors
$this-&gt;_delete_file($folder, TRUE, TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">SplFileInfo </span><strong> $file</strong> <small>required</small> - File</li>
<li>
 <span class="blue">boolean </span><strong> $retain_parent_directory</strong> <small> = <small>bool</small> FALSE</small> - Retain the parent directory</li>
<li>
 <span class="blue">boolean </span><strong> $ignore_errors</strong> <small> = <small>bool</small> FALSE</small> - Ignore_errors to prevent all exceptions interrupting exec</li>
<li>
 <span class="blue">boolean </span><strong> $only_expired</strong> <small> = <small>bool</small> FALSE</small> - Only expired files</li>
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
<code class="language-php">protected function _delete_file(SplFileInfo $file, $retain_parent_directory = FALSE, $ignore_errors = FALSE, $only_expired = FALSE)
{
	// Allow graceful error handling
	try
	{
		// If is file
		if ($file-&gt;isFile())
		{
			try
			{
				// Handle ignore files
				if (in_array($file-&gt;getFilename(), $this-&gt;config(&#039;ignore_on_delete&#039;)))
				{
					$delete = FALSE;
				}
				// If only expired is not set
				elseif ($only_expired === FALSE)
				{
					// We want to delete the file
					$delete = TRUE;
				}
				// Otherwise...
				else
				{
					// Assess the file expiry to flag it for deletion
					$delete = $this-&gt;_is_expired($file);
				}

				// If the delete flag is set delete file
				if ($delete === TRUE)
					return unlink($file-&gt;getRealPath());
				else
					return FALSE;
			}
			catch (ErrorException $e)
			{
				// Catch any delete file warnings
				if ($e-&gt;getCode() === E_WARNING)
				{
					throw new Cache_Exception(__METHOD__.&#039; failed to delete file : :file&#039;, [&#039;:file&#039; =&gt; $file-&gt;getRealPath()]);
				}
			}
		}
		// Else, is directory
		elseif ($file-&gt;isDir())
		{
			// Create new DirectoryIterator
			$files = new DirectoryIterator($file-&gt;getPathname());

			// Iterate over each entry
			while ($files-&gt;valid())
			{
				// Extract the entry name
				$name = $files-&gt;getFilename();

				// If the name is not a dot
				if ($name != &#039;.&#039; AND $name != &#039;..&#039;)
				{
					// Create new file resource
					$fp = new SplFileInfo($files-&gt;getRealPath());
					// Delete the file
					$this-&gt;_delete_file($fp, $retain_parent_directory, $ignore_errors, $only_expired);
				}

				// Move the file pointer on
				$files-&gt;next();
			}

			// If set to retain parent directory, return now
			if ($retain_parent_directory)
			{
				return TRUE;
			}

			try
			{
				// Remove the files iterator
				// (fixes Windows PHP which has permission issues with open iterators)
				unset($files);

				// Try to remove the parent directory
				return rmdir($file-&gt;getRealPath());
			}
			catch (ErrorException $e)
			{
				// Catch any delete directory warnings
				if ($e-&gt;getCode() === E_WARNING)
				{
					throw new Cache_Exception(__METHOD__.&#039; failed to delete directory : :directory&#039;, [&#039;:directory&#039; =&gt; $file-&gt;getRealPath()]);
				}
				throw $e;
			}
		}
		else
		{
			// We get here if a file has already been deleted
			return FALSE;
		}
	}
	// Catch all exceptions
	catch (Exception $e)
	{
		// If ignore_errors is on
		if ($ignore_errors === TRUE)
		{
			// Return
			return FALSE;
		}
		// Throw exception
		throw $e;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_is_expired"><small>protected</small>  _is_expired(<small>SplFileInfo</small> <span class="param" title="The cache file">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Test if cache file is expired</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">SplFileInfo </span><strong> $file</strong> <small>required</small> - The cache file</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  - TRUE if expired false otherwise 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _is_expired(SplFileInfo $file)
{
	// Open the file and parse data
	$created = $file-&gt;getMTime();
	$data = $file-&gt;openFile(&quot;r&quot;);
	$lifetime = (int) $data-&gt;fgets();

	// If we&#039;re at the EOF at this point, corrupted!
	if ($data-&gt;eof())
	{
		throw new Cache_Exception(__METHOD__ . &#039; corrupted cache file!&#039;);
	}

	//close file
	$data = null;

	// test for expiry and return
	return (($lifetime !== 0) AND ( ($created + $lifetime) &lt; time()));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_make_directory"><small>protected</small>  _make_directory(<small>string</small> <span class="param" title="Directory path">$directory</span> [, <small>integer</small> <span class="param" title="Chmod mode">$mode</span> <small>= <small>integer</small> 511</small> , <small>boolean</small> <span class="param" title="Allows nested directories creation">$recursive</span> <small>= <small>bool</small> FALSE</small> , <small>resource</small> <span class="param" title="A stream context">$context</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Makes the cache directory if it doesn't exist. Simply a wrapper for
<code>mkdir</code> to ensure DRY principles</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small>required</small> - Directory path</li>
<li>
 <span class="blue">integer </span><strong> $mode</strong> <small> = <small>integer</small> 511</small> - Chmod mode</li>
<li>
 <span class="blue">boolean </span><strong> $recursive</strong> <small> = <small>bool</small> FALSE</small> - Allows nested directories creation</li>
<li>
 <span class="blue">resource </span><strong> $context</strong> <small> = <small>NULL</small></small> - A stream context</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://php.net/manual/en/function.mkdir.php">http://php.net/manual/en/function.mkdir.php</a></li>
<li>Throws - <a href="/index.php/">Cache_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>SplFileInfo</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _make_directory($directory, $mode = 0777, $recursive = FALSE, $context = NULL)
{
	// call mkdir according to the availability of a passed $context param
	$mkdir_result = $context ?
		mkdir($directory, $mode, $recursive, $context) :
		mkdir($directory, $mode, $recursive);

	// throw an exception if unsuccessful
	if ( ! $mkdir_result)
	{
		throw new Cache_Exception(&#039;Failed to create the defined cache directory : :directory&#039;, [&#039;:directory&#039; =&gt; $directory]);
	}

	// chmod to solve potential umask issues
	chmod($directory, $mode);

	return new SplFileInfo($directory);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_resolve_directory"><small>protected</small>  _resolve_directory(<small>string</small> <span class="param" title="Filename to resolve">$filename</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Resolves the cache directory real path from the filename</p>

<pre><code> // Get the realpath of the cache folder
 $realpath = $this-&gt;_resolve_directory($filename);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $filename</strong> <small>required</small> - Filename to resolve</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _resolve_directory($filename)
{
	return $this-&gt;_cache_dir-&gt;getRealPath().DIRECTORY_SEPARATOR.$filename[0].$filename[1].DIRECTORY_SEPARATOR;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="filename"><small>protected static</small>  filename(<small>string</small> <span class="param" title="String to hash into filename">$string</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_File'>Kohana_Cache_File</a>)</small></h3>
<div class='description'><p>Creates a hashed filename based on the string. This is used
to create shorter unique IDs for each cache filename.</p>

<pre><code>// Create the cache filename
$filename = Cache_File::filename($this-&gt;_sanitize_id($id));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $string</strong> <small>required</small> - String to hash into filename</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function filename($string)
{
	return sha1($string).&#039;.cache&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration">$config</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache'>Kohana_Cache</a>)</small></h3>
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
	$this-&gt;config($config);
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