---
layout: api
class: Kohana_Core
---
<h1>Kohana_Core</h1>
<p>
<i><p>Contains the most low-level helpers methods in Kohana:</p>

<ul>
<li>Environment initialization</li>
<li>Locating files within the cascading filesystem</li>
<li>Auto-loading and transparent extension of classes</li>
<li>Variable and path debugging</li>
</ul>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
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
<a href='#constant-VERSION'>VERSION</a>
</li>
<li>
<a href='#constant-CODENAME'>CODENAME</a>
</li>
<li>
<a href='#constant-PRODUCTION'>PRODUCTION</a>
</li>
<li>
<a href='#constant-STAGING'>STAGING</a>
</li>
<li>
<a href='#constant-TESTING'>TESTING</a>
</li>
<li>
<a href='#constant-DEVELOPMENT'>DEVELOPMENT</a>
</li>
<li>
<a href='#constant-FILE_CACHE'>FILE_CACHE</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-base_url">$base_url</a>
</li>
<li>
<a href="#property-cache_dir">$cache_dir</a>
</li>
<li>
<a href="#property-cache_life">$cache_life</a>
</li>
<li>
<a href="#property-caching">$caching</a>
</li>
<li>
<a href="#property-charset">$charset</a>
</li>
<li>
<a href="#property-config">$config</a>
</li>
<li>
<a href="#property-content_type">$content_type</a>
</li>
<li>
<a href="#property-environment">$environment</a>
</li>
<li>
<a href="#property-errors">$errors</a>
</li>
<li>
<a href="#property-expose">$expose</a>
</li>
<li>
<a href="#property-hostnames">$hostnames</a>
</li>
<li>
<a href="#property-index_file">$index_file</a>
</li>
<li>
<a href="#property-is_windows">$is_windows</a>
</li>
<li>
<a href="#property-log">$log</a>
</li>
<li>
<a href="#property-profiling">$profiling</a>
</li>
<li>
<a href="#property-server_name">$server_name</a>
</li>
<li>
<a href="#property-shutdown_errors">$shutdown_errors</a>
</li>
<li>
<a href="#property-_files">$_files</a>
</li>
<li>
<a href="#property-_files_changed">$_files_changed</a>
</li>
<li>
<a href="#property-_init">$_init</a>
</li>
<li>
<a href="#property-_modules">$_modules</a>
</li>
<li>
<a href="#property-_paths">$_paths</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#auto_load">auto_load()</a>
</li>
<li>
<a href="#auto_load_lowercase">auto_load_lowercase()</a>
</li>
<li>
<a href="#cache">cache()</a>
</li>
<li>
<a href="#deinit">deinit()</a>
</li>
<li>
<a href="#error_handler">error_handler()</a>
</li>
<li>
<a href="#file_cache">file_cache()</a>
</li>
<li>
<a href="#find_file">find_file()</a>
</li>
<li>
<a href="#include_paths">include_paths()</a>
</li>
<li>
<a href="#init">init()</a>
</li>
<li>
<a href="#list_files">list_files()</a>
</li>
<li>
<a href="#load">load()</a>
</li>
<li>
<a href="#message">message()</a>
</li>
<li>
<a href="#modules">modules()</a>
</li>
<li>
<a href="#sanitize">sanitize()</a>
</li>
<li>
<a href="#shutdown_handler">shutdown_handler()</a>
</li>
<li>
<a href="#version">version()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-VERSION'>VERSION</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "3.3.9"</pre></dd>
<dt>
<h4 id='constant-CODENAME'>CODENAME</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(9)</span> "karlsruhe"</pre></dd>
<dt>
<h4 id='constant-PRODUCTION'>PRODUCTION</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 10</pre></dd>
<dt>
<h4 id='constant-STAGING'>STAGING</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 20</pre></dd>
<dt>
<h4 id='constant-TESTING'>TESTING</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 30</pre></dd>
<dt>
<h4 id='constant-DEVELOPMENT'>DEVELOPMENT</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 40</pre></dd>
<dt>
<h4 id='constant-FILE_CACHE'>FILE_CACHE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(26)</span> ":header 

// :name

:data
"</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-base_url'><small>public static</small>  <span class='blue'>string</span> $base_url</h4>
</dt>
<dd>
 <p>base URL to the application</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(1)</span> "/"</pre></dd>
<dt>
<h4 id='property-cache_dir'><small>public static</small>  <span class='blue'>string</span> $cache_dir</h4>
</dt>
<dd>
 <p>Cache directory, used by <a href="#cache">Kohana::cache</a>. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-cache_life'><small>public static</small>  <span class='blue'>integer</span> $cache_life</h4>
</dt>
<dd>
 <p>Default lifetime for caching, in seconds, used by <a href="#cache">Kohana::cache</a>. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 60</pre></dd>
<dt>
<h4 id='property-caching'><small>public static</small>  <span class='blue'>boolean</span> $caching</h4>
</dt>
<dd>
 <p>Whether to use internal caching for <a href="#find_file">Kohana::find_file</a>, does not apply to <a href="#cache">Kohana::cache</a>. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-charset'><small>public static</small>  <span class='blue'>string</span> $charset</h4>
</dt>
<dd>
 <p>character set of input and output</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(5)</span> "utf-8"</pre></dd>
<dt>
<h4 id='property-config'><small>public static</small>  <span class='blue'>Config</span> $config</h4>
</dt>
<dd>
 <p>config object</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-content_type'><small>public static</small>  <span class='blue'>string</span> $content_type</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>string</small><span>(9)</span> "text/html"</pre></dd>
<dt>
<h4 id='property-environment'><small>public static</small>  <span class='blue'>string</span> $environment</h4>
</dt>
<dd>
 <p>Current environment name</p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 40</pre></dd>
<dt>
<h4 id='property-errors'><small>public static</small>  <span class='blue'>boolean</span> $errors</h4>
</dt>
<dd>
 <p>Enable Kohana catching and displaying PHP errors and exceptions. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-expose'><small>public static</small>  <span class='blue'>boolean</span> $expose</h4>
</dt>
<dd>
 <p>set the X-Powered-By header</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-hostnames'><small>public static</small>  <span class='blue'>array</span> $hostnames</h4>
</dt>
<dd>
 <p>list of valid host names for this instance</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-index_file'><small>public static</small>  <span class='blue'>string</span> $index_file</h4>
</dt>
<dd>
 <p>Application index file, added to links generated by Kohana. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(9)</span> "index.php"</pre></dd>
<dt>
<h4 id='property-is_windows'><small>public static</small>  <span class='blue'>boolean</span> $is_windows</h4>
</dt>
<dd>
 <p>True if Kohana is running on windows</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-log'><small>public static</small>  <span class='blue'>Log</span> $log</h4>
</dt>
<dd>
 <p>logging object</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-profiling'><small>public static</small>  <span class='blue'>boolean</span> $profiling</h4>
</dt>
<dd>
 <p>Whether to enable <a href="kohana/profiling">profiling</a>. Set by <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-server_name'><small>public static</small>  <span class='blue'>string</span> $server_name</h4>
</dt>
<dd>
 <p>the name of the server Kohana is hosted upon</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
<dt>
<h4 id='property-shutdown_errors'><small>public static</small>  <span class='blue'>array</span> $shutdown_errors</h4>
</dt>
<dd>
 <p>Types of errors to display at shutdown</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(3)</span> <span>(
    0 => <small>integer</small> 4
    1 => <small>integer</small> 1
    2 => <small>integer</small> 256
)</span></pre></dd>
<dt>
<h4 id='property-_files'><small>protected static</small>  <span class='blue'>array</span> $_files</h4>
</dt>
<dd>
 <p>File path cache, used when caching is true in <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_files_changed'><small>protected static</small>  <span class='blue'>boolean</span> $_files_changed</h4>
</dt>
<dd>
 <p>Has the file path cache changed during this execution?  Used internally when when caching is true in <a href="#init">Kohana::init</a></p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_init'><small>protected static</small>  <span class='blue'>boolean</span> $_init</h4>
</dt>
<dd>
 <p>Has <a href="#init">Kohana::init</a> been called?</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_modules'><small>protected static</small>  <span class='blue'>array</span> $_modules</h4>
</dt>
<dd>
 <p>Currently active modules</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_paths'><small>protected static</small>  <span class='blue'>array</span> $_paths</h4>
</dt>
<dd>
 <p>Include paths that are used to find files</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(2)</span> <span>(
    0 => <small>string</small><span>(40)</span> "C:\xampp\tmp\koseven-master\application\"
    1 => <small>string</small><span>(35)</span> "C:\xampp\tmp\koseven-master\system\"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="auto_load"><small>public static</small>  auto_load(<small>string</small> <span class="param" title="Class name">$class</span> [, <small>string</small> <span class="param" title="Directory to load from">$directory</span> <small>= <small>string</small><span>(7)</span> "classes"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Provides auto-loading support of classes that follow Kohana's <a href="kohana/conventions#class-names-and-file-location">class
naming conventions</a>.
See <a href="kohana/autoloading">Loading Classes</a> for more information.</p>

<pre><code>// Loads classes/My/Class/Name.php
Kohana::auto_load('My_Class_Name');
</code></pre>

<p>or with a custom directory:</p>

<pre><code>// Loads vendor/My/Class/Name.php
Kohana::auto_load('My_Class_Name', 'vendor');
</code></pre>

<p>You should never have to call this function, as simply calling a class
will cause it to be called.</p>

<p>This function must be enabled as an autoloader in the bootstrap:</p>

<pre><code>spl_autoload_register(array('Kohana', 'auto_load'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $class</strong> <small>required</small> - Class name</li>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>string</small><span>(7)</span> "classes"</small> - Directory to load from</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_load($class, $directory = &#039;classes&#039;)
{
	// Transform the class name according to PSR-0
	$class     = ltrim($class, &#039;\\&#039;);
	$file      = &#039;&#039;;
	$namespace = &#039;&#039;;

	if ($last_namespace_position = strripos($class, &#039;\\&#039;))
	{
		$namespace = substr($class, 0, $last_namespace_position);
		$class     = substr($class, $last_namespace_position + 1);
		$file      = str_replace(&#039;\\&#039;, DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
	}

	$file .= str_replace(&#039;_&#039;, DIRECTORY_SEPARATOR, $class);

	if ($path = Kohana::find_file($directory, $file))
	{
		// Load the class file
		require $path;

		// Class has been found
		return TRUE;
	}

	// Class is not in the filesystem
	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_load_lowercase"><small>public static</small>  auto_load_lowercase(<small>string</small> <span class="param" title="Class name">$class</span> [, <small>string</small> <span class="param" title="Directory to load from">$directory</span> <small>= <small>string</small><span>(7)</span> "classes"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Provides auto-loading support of classes that follow Kohana's old class
naming conventions.</p>

<p>This is included for compatibility purposes with older modules.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $class</strong> <small>required</small> - Class name</li>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>string</small><span>(7)</span> "classes"</small> - Directory to load from</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_load_lowercase($class, $directory = &#039;classes&#039;)
{
	// Transform the class name into a path
	$file = str_replace(&#039;_&#039;, DIRECTORY_SEPARATOR, strtolower($class));

	if ($path = Kohana::find_file($directory, $file))
	{
		// Load the class file
		require $path;

		// Class has been found
		return TRUE;
	}

	// Class is not in the filesystem
	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cache"><small>public static</small>  cache(<small>string</small> <span class="param" title="Name of the cache">$name</span> [, <small>mixed</small> <span class="param" title="Data to cache">$data</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Number of seconds the cache is valid for">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Cache variables using current cache module if enabled, if not uses Kohana::file_cache</p>

<pre><code>// Set the "foo" cache
Kohana::cache('foo', 'hello, world');

// Get the "foo" cache
$foo = Kohana::cache('foo');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Name of the cache</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small> = <small>NULL</small></small> - Data to cache</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Number of seconds the cache is valid for</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - For getting 
</li><li>
<span class='blue'>boolean</span>  - For setting 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function cache($name, $data = NULL, $lifetime = NULL)
{
    //in case the Kohana_Cache is not yet loaded we need to use the normal cache...sucks but happens onload
    if (class_exists(&#039;Kohana_Cache&#039;))
    {
        //deletes the cache
        if ($lifetime===0)
            return Cache::instance()-&gt;delete($name);

        //no data provided we read
        if ($data===NULL)
            return Cache::instance()-&gt;get($name);
        //saves data
        else
            return Cache::instance()-&gt;set($name,$data, $lifetime);
    }
    else
        return self::file_cache($name, $data, $lifetime);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="deinit"><small>public static</small>  deinit()<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Cleans up the environment:</p>

<ul>
<li>Restore the previous error and exception handlers</li>
<li>Destroy the Kohana::$log and Kohana::$config objects</li>
</ul>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function deinit()
{
	if (Kohana::$_init)
	{
		// Removed the autoloader
		spl_autoload_unregister([&#039;Kohana&#039;, &#039;auto_load&#039;]);

		if (Kohana::$errors)
		{
			// Go back to the previous error handler
			restore_error_handler();

			// Go back to the previous exception handler
			restore_exception_handler();
		}

		// Destroy objects created by init
		Kohana::$log = Kohana::$config = NULL;

		// Reset internal storage
		Kohana::$_modules = Kohana::$_files = [];
		Kohana::$_paths   = [APPPATH, SYSPATH];

		// Reset file cache status
		Kohana::$_files_changed = FALSE;

		// Kohana is no longer initialized
		Kohana::$_init = FALSE;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="error_handler"><small>public static</small>  error_handler()<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>PHP error handler, converts all errors into ErrorExceptions. This handler
respects error_reporting settings.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">ErrorException</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>TRUE</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function error_handler($code, $error, $file = NULL, $line = NULL)
{
	if (error_reporting() &amp; $code)
	{
		// This error is not suppressed by current error reporting settings
		// Convert the error into an ErrorException
		throw new ErrorException($error, $code, 0, $file, $line);
	}

	// Do not execute the PHP error handler
	return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="file_cache"><small>public static</small>  file_cache(<small>string</small> <span class="param" title="Name of the cache">$name</span> [, <small>mixed</small> <span class="param" title="Data to cache">$data</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Number of seconds the cache is valid for">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Provides simple file-based caching for strings and arrays:</p>

<pre><code>// Set the "foo" cache
Kohana::file_cache('foo', 'hello, world');

// Get the "foo" cache
$foo = Kohana::file_cache('foo');
</code></pre>

<p>All caches are stored as PHP code, generated with <a href="http://php.net/var_export">var_export</a>.
Caching objects may not work as expected. Storing references or an
object or array that has recursion will cause an E_FATAL.</p>

<p>The cache directory and default cache lifetime is set by <a href="#init">Kohana::init</a></p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Name of the cache</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small> = <small>NULL</small></small> - Data to cache</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Number of seconds the cache is valid for</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - For getting 
</li><li>
<span class='blue'>boolean</span>  - For setting 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function file_cache($name, $data = NULL, $lifetime = NULL)
{
    // Cache file is a hash of the name
    $file = sha1($name).&#039;.txt&#039;;

    // Cache directories are split by keys to prevent filesystem overload
    $dir = Kohana::$cache_dir.DIRECTORY_SEPARATOR.$file[0].$file[1].DIRECTORY_SEPARATOR;

    if ($lifetime === NULL)
    {
        // Use the default lifetime
        $lifetime = Kohana::$cache_life;
    }

    if ($data === NULL)
    {
        if (is_file($dir.$file))
        {
            if ((time() - filemtime($dir.$file)) &lt; $lifetime)
            {
                // Return the cache
                try
                {
                    return unserialize(file_get_contents($dir.$file));
                }
                catch (Exception $e)
                {
                    // Cache is corrupt, let return happen normally.
                }
            }
            else
            {
                try
                {
                    // Cache has expired
                    unlink($dir.$file);
                }
                catch (Exception $e)
                {
                    // Cache has mostly likely already been deleted,
                    // let return happen normally.
                }
            }
        }

        // Cache not found
        return NULL;
    }

    if ( ! is_dir($dir))
    {
        // Create the cache directory
        mkdir($dir, 0777, TRUE);

        // Set permissions (must be manually set to fix umask issues)
        chmod($dir, 0777);
    }

    // Force the data to be a string
    $data = serialize($data);

    try
    {
        // Write the cache
        return (bool) file_put_contents($dir.$file, $data, LOCK_EX);
    }
    catch (Exception $e)
    {
        // Failed to write cache
        return FALSE;
    }
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find_file"><small>public static</small>  find_file(<small>string</small> <span class="param" title="Directory name (views, i18n, classes, extensions, etc.)">$dir</span> , <small>string</small> <span class="param" title="Filename with subdirectory">$file</span> [, <small>string</small> <span class="param" title="Extension to search for">$ext</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Return an array of files?">$array</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Searches for a file in the <a href="kohana/files">Cascading Filesystem</a>, and
returns the path to the file that has the highest precedence, so that it
can be included.</p>

<p>When searching the "config", "messages", or "i18n" directories, or when
the <code>$array</code> flag is set to true, an array of all the files that match
that path in the <a href="kohana/files">Cascading Filesystem</a> will be returned.
These files will return arrays which must be merged together.</p>

<p>If no extension is given, the default extension (<code>EXT</code> set in
<code>index.php</code>) will be used.</p>

<pre><code>// Returns an absolute path to views/template.php
Kohana::find_file('views', 'template');

// Returns an absolute path to media/css/style.css
Kohana::find_file('media', 'css/style', 'css');

// Returns an array of all the "mimes" configuration files
Kohana::find_file('config', 'mimes');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $dir</strong> <small>required</small> - Directory name (views, i18n, classes, extensions, etc.)</li>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - Filename with subdirectory</li>
<li>
 <span class="blue">string </span><strong> $ext</strong> <small> = <small>NULL</small></small> - Extension to search for</li>
<li>
 <span class="blue">boolean </span><strong> $array</strong> <small> = <small>bool</small> FALSE</small> - Return an array of files?</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - A list of files when $array is TRUE 
</li><li>
<span class='blue'>string</span>  - Single file path 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function find_file($dir, $file, $ext = NULL, $array = FALSE)
{
	if ($ext === NULL)
	{
		// Use the default extension
		$ext = EXT;
	}
	elseif ($ext)
	{
		// Prefix the extension with a period
		$ext = &quot;.{$ext}&quot;;
	}
	else
	{
		// Use no extension
		$ext = &#039;&#039;;
	}

	// Create a partial path of the filename
	$path = $dir.DIRECTORY_SEPARATOR.$file.$ext;

	if (Kohana::$caching === TRUE AND isset(Kohana::$_files[$path.($array ? &#039;_array&#039; : &#039;_path&#039;)]))
	{
		// This path has been cached
		return Kohana::$_files[$path.($array ? &#039;_array&#039; : &#039;_path&#039;)];
	}

	if (Kohana::$profiling === TRUE AND class_exists(&#039;Profiler&#039;, FALSE))
	{
		// Start a new benchmark
		$benchmark = Profiler::start(&#039;Kohana&#039;, __FUNCTION__);
	}

	if ($array OR $dir === &#039;config&#039; OR $dir === &#039;i18n&#039; OR $dir === &#039;messages&#039;)
	{
		// Include paths must be searched in reverse
		$paths = array_reverse(Kohana::$_paths);

		// Array of files that have been found
		$found = [];

		foreach ($paths as $dir)
		{
			if (is_file($dir.$path))
			{
				// This path has a file, add it to the list
				$found[] = $dir.$path;
			}
		}
	}
	else
	{
		// The file has not been found yet
		$found = FALSE;

		foreach (Kohana::$_paths as $dir)
		{
			if (is_file($dir.$path))
			{
				// A path has been found
				$found = $dir.$path;

				// Stop searching
				break;
			}
		}
	}

	if (Kohana::$caching === TRUE)
	{
		// Add the path to the cache
		Kohana::$_files[$path.($array ? &#039;_array&#039; : &#039;_path&#039;)] = $found;

		// Files have been changed
		Kohana::$_files_changed = TRUE;
	}

	if (isset($benchmark))
	{
		// Stop the benchmark
		Profiler::stop($benchmark);
	}

	return $found;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="include_paths"><small>public static</small>  include_paths()<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Returns the the currently active include paths, including the
application, system, and each module's path.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function include_paths()
{
	return Kohana::$_paths;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="init"><small>public static</small>  init([ <small>array</small> <span class="param" title="Array of settings. See above.">$settings</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Initializes the environment:</p>

<ul>
<li>Determines the current environment</li>
<li>Set global settings</li>
<li>Sanitizes GET, POST, and COOKIE variables</li>
<li>Converts GET, POST, and COOKIE variables to the global character set</li>
</ul>

<p>The following settings can be set:</p>

<table>
<thead>
<tr>
  <th>Type</th>
  <th>Setting</th>
  <th>Description</th>
  <th>Default Value</th>
</tr>
</thead>
<tbody>
<tr>
  <td><code>string</code></td>
  <td>base_url</td>
  <td>The base URL for your application.  This should be the <em>relative</em> path from your DOCROOT to your <code>index.php</code> file, in other words, if Kohana is in a subfolder, set this to the subfolder name, otherwise leave it as the default.  <strong>The leading slash is required</strong>, trailing slash is optional.</td>
  <td><code>"/"</code></td>
</tr>
<tr>
  <td><code>string</code></td>
  <td>index_file</td>
  <td>The name of the <a href="http://en.wikipedia.org/wiki/Front_Controller_pattern">front controller</a>.  This is used by Kohana to generate relative urls like <a href="#anchor">HTML::anchor()</a> and <a href="#base">URL::base()</a>. This is usually <code>index.php</code>.  To <a href="tutorials/clean-urls">remove index.php from your urls</a>, set this to <code>FALSE</code>.</td>
  <td><code>"index.php"</code></td>
</tr>
<tr>
  <td><code>string</code></td>
  <td>charset</td>
  <td>Character set used for all input and output</td>
  <td><code>"utf-8"</code></td>
</tr>
<tr>
  <td><code>string</code></td>
  <td>cache_dir</td>
  <td>Kohana's cache directory.  Used by <a href="#cache">Kohana::cache</a> for simple internal caching, like <a href="kohana/fragments">Fragments</a> and <strong>&#91;caching database queries](this should link somewhere)</strong>.  This has nothing to do with the <a href="cache">Cache module</a>.</td>
  <td><code>APPPATH."cache"</code></td>
</tr>
<tr>
  <td><code>integer</code></td>
  <td>cache_life</td>
  <td>Lifetime, in seconds, of items cached by <a href="#cache">Kohana::cache</a></td>
  <td><code>60</code></td>
</tr>
<tr>
  <td><code>boolean</code></td>
  <td>errors</td>
  <td>Should Kohana catch PHP errors and uncaught Exceptions and show the <code>error_view</code>. See <a href="kohana/errors">Error Handling</a> for more info. <br /> <br /> Recommended setting: <code>TRUE</code> while developing, <code>FALSE</code> on production servers.</td>
  <td><code>TRUE</code></td>
</tr>
<tr>
  <td><code>boolean</code></td>
  <td>profile</td>
  <td>Whether to enable the <a href="kohana/profiling">Profiler</a>. <br /> <br />Recommended setting: <code>TRUE</code> while developing, <code>FALSE</code> on production servers.</td>
  <td><code>TRUE</code></td>
</tr>
<tr>
  <td><code>boolean</code></td>
  <td>caching</td>
  <td>Cache file locations to speed up <a href="#find_file">Kohana::find_file</a>.  This has nothing to do with <a href="#cache">Kohana::cache</a>, <a href="kohana/fragments">Fragments</a> or the <a href="cache">Cache module</a>.  <br /> <br />  Recommended setting: <code>FALSE</code> while developing, <code>TRUE</code> on production servers.</td>
  <td><code>FALSE</code></td>
</tr>
<tr>
  <td><code>boolean</code></td>
  <td>expose</td>
  <td>Set the X-Powered-By header</td>
  <td></td>
</tr>
</tbody>
</table>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $settings</strong> <small> = <small>NULL</small></small> - Array of settings.  See above.</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
<li>Uses - <a href="#sanitize">Kohana::sanitize</a>, <a href="#cache">Kohana::cache</a>, <a href="/index.php/">Profiler</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function init(array $settings = NULL)
{
	if (Kohana::$_init)
	{
		// Do not allow execution twice
		return;
	}

	// Kohana is now initialized
	Kohana::$_init = TRUE;

	if (isset($settings[&#039;profile&#039;]))
	{
		// Enable profiling
		Kohana::$profiling = (bool) $settings[&#039;profile&#039;];
	}

	// Start an output buffer
	ob_start();

	if (isset($settings[&#039;errors&#039;]))
	{
		// Enable error handling
		Kohana::$errors = (bool) $settings[&#039;errors&#039;];
	}

	if (Kohana::$errors === TRUE)
	{
		// Enable Kohana exception handling, adds stack traces and error source.
		set_exception_handler([&#039;Kohana_Exception&#039;, &#039;handler&#039;]);

		// Enable Kohana error handling, converts all PHP errors to exceptions.
		set_error_handler([&#039;Kohana&#039;, &#039;error_handler&#039;]);
	}

	/**
	 * Enable xdebug parameter collection in development mode to improve fatal stack traces.
	 */
	if (Kohana::$environment == Kohana::DEVELOPMENT AND extension_loaded(&#039;xdebug&#039;))
	{
	    ini_set(&#039;xdebug.collect_params&#039;, 3);
	}

	// Enable the Kohana shutdown handler, which catches E_FATAL errors.
	register_shutdown_function([&#039;Kohana&#039;, &#039;shutdown_handler&#039;]);

	if (isset($settings[&#039;expose&#039;]))
	{
		Kohana::$expose = (bool) $settings[&#039;expose&#039;];
	}

	// Determine if we are running in a Windows environment
	Kohana::$is_windows = (DIRECTORY_SEPARATOR === &#039;\\&#039;);

	if (isset($settings[&#039;cache_dir&#039;]))
	{
		if ( ! is_dir($settings[&#039;cache_dir&#039;]))
		{
			try
			{
				// Create the cache directory
				mkdir($settings[&#039;cache_dir&#039;], 0755, TRUE);

				// Set permissions (must be manually set to fix umask issues)
				chmod($settings[&#039;cache_dir&#039;], 0755);
			}
			catch (Exception $e)
			{
				throw new Kohana_Exception(&#039;Could not create cache directory :dir&#039;,
					[&#039;:dir&#039; =&gt; Debug::path($settings[&#039;cache_dir&#039;])]);
			}
		}

		// Set the cache directory path
		Kohana::$cache_dir = realpath($settings[&#039;cache_dir&#039;]);
	}
	else
	{
		// Use the default cache directory
		Kohana::$cache_dir = APPPATH.&#039;cache&#039;;
	}

	if ( ! is_writable(Kohana::$cache_dir))
	{
		throw new Kohana_Exception(&#039;Directory :dir must be writable&#039;,
			[&#039;:dir&#039; =&gt; Debug::path(Kohana::$cache_dir)]);
	}

	if (isset($settings[&#039;cache_life&#039;]))
	{
		// Set the default cache lifetime
		Kohana::$cache_life = (int) $settings[&#039;cache_life&#039;];
	}

	if (isset($settings[&#039;caching&#039;]))
	{
		// Enable or disable internal caching
		Kohana::$caching = (bool) $settings[&#039;caching&#039;];
	}

	if (Kohana::$caching === TRUE)
	{
		// Load the file path cache
		Kohana::$_files = Kohana::cache(&#039;Kohana::find_file()&#039;);
	}

	if (isset($settings[&#039;charset&#039;]))
	{
		// Set the system character set
		Kohana::$charset = strtolower($settings[&#039;charset&#039;]);
	}

	if (function_exists(&#039;mb_internal_encoding&#039;))
	{
		// Set the MB extension encoding to the same character set
		mb_internal_encoding(Kohana::$charset);
	}

	if (isset($settings[&#039;base_url&#039;]))
	{
		// Set the base URL
		Kohana::$base_url = rtrim($settings[&#039;base_url&#039;], &#039;/&#039;).&#039;/&#039;;
	}

	if (isset($settings[&#039;index_file&#039;]))
	{
		// Set the index file
		Kohana::$index_file = trim($settings[&#039;index_file&#039;], &#039;/&#039;);
	}

	// Sanitize all request variables
	$_GET    = Kohana::sanitize($_GET);
	$_POST   = Kohana::sanitize($_POST);
	$_COOKIE = Kohana::sanitize($_COOKIE);

	// Load the logger if one doesn&#039;t already exist
	if ( ! Kohana::$log instanceof Log)
	{
		Kohana::$log = Log::instance();
	}

	// Load the config if one doesn&#039;t already exist
	if ( ! Kohana::$config instanceof Config)
	{
		Kohana::$config = new Config;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="list_files"><small>public static</small>  list_files([ <small>string</small> <span class="param" title="Directory name">$directory</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="List of paths to search">$paths</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Recursively finds all of the files in the specified directory at any
location in the <a href="kohana/files">Cascading Filesystem</a>, and returns an
array of all the files found, sorted alphabetically.</p>

<pre><code>// Find all view files.
$views = Kohana::list_files('views');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>NULL</small></small> - Directory name</li>
<li>
 <span class="blue">array </span><strong> $paths</strong> <small> = <small>NULL</small></small> - List of paths to search</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function list_files($directory = NULL, array $paths = NULL)
{
	if ($directory !== NULL)
	{
		// Add the directory separator
		$directory .= DIRECTORY_SEPARATOR;
	}

	if ($paths === NULL)
	{
		// Use the default paths
		$paths = Kohana::$_paths;
	}

	// Create an array for the files
	$found = [];

	foreach ($paths as $path)
	{
		if (is_dir($path.$directory))
		{
			// Create a new directory iterator
			$dir = new DirectoryIterator($path.$directory);

			foreach ($dir as $file)
			{
				// Get the file name
				$filename = $file-&gt;getFilename();

				if ($filename[0] === &#039;.&#039; OR $filename[strlen($filename)-1] === &#039;~&#039;)
				{
					// Skip all hidden files and UNIX backup files
					continue;
				}

				// Relative filename is the array key
				$key = $directory.$filename;

				if ($file-&gt;isDir())
				{
					if ($sub_dir = Kohana::list_files($key, $paths))
					{
						if (isset($found[$key]))
						{
							// Append the sub-directory list
							$found[$key] += $sub_dir;
						}
						else
						{
							// Create a new sub-directory list
							$found[$key] = $sub_dir;
						}
					}
				}
				else
				{
					if ( ! isset($found[$key]))
					{
						// Add new files to the list
						$found[$key] = realpath($file-&gt;getPathname());
					}
				}
			}
		}
	}

	// Sort the results alphabetically
	ksort($found);

	return $found;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="load"><small>public static</small>  load(<small>string</small> <span class="param" title="$file">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Loads a file within a totally empty scope and returns the output:</p>

<pre><code>$foo = Kohana::load('foo.php');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - $file</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function load($file)
{
	return include $file;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="message"><small>public static</small>  message(<small>string</small> <span class="param" title="File name">$file</span> [, <small>string</small> <span class="param" title="Key path to get">$path</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Default value if the path does not exist">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Get a message from a file. Messages are arbitrary strings that are stored
in the <code>messages/</code> directory and reference by a key. Translation is not
performed on the returned values.  See <a href="kohana/files/messages">message files</a>
for more information.</p>

<pre><code>// Get "username" from messages/text.php
$username = Kohana::message('text', 'username');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - File name</li>
<li>
 <span class="blue">string </span><strong> $path</strong> <small> = <small>NULL</small></small> - Key path to get</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value if the path does not exist</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#merge">Arr::merge</a>, <a href="#path">Arr::path</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Message string for the given path 
</li><li>
<span class='blue'>array</span>  - Complete message list, when no path is specified 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function message($file, $path = NULL, $default = NULL)
{
	static $messages;

	if ( ! isset($messages[$file]))
	{
		// Create a new message list
		$messages[$file] = [];

		if ($files = Kohana::find_file(&#039;messages&#039;, $file))
		{
			foreach ($files as $f)
			{
				// Combine all the messages recursively
				$messages[$file] = Arr::merge($messages[$file], Kohana::load($f));
			}
		}
	}

	if ($path === NULL)
	{
		// Return all of the messages
		return $messages[$file];
	}
	else
	{
		// Get a message using the path
		return Arr::path($messages[$file], $path, $default);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="modules"><small>public static</small>  modules([ <small>array</small> <span class="param" title="List of module paths">$modules</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Changes the currently enabled modules. Module paths may be relative
or absolute, but must point to a directory:</p>

<pre><code>Kohana::modules(array('modules/foo', MODPATH.'bar'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $modules</strong> <small> = <small>NULL</small></small> - List of module paths</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Enabled modules 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function modules(array $modules = NULL)
{
	if ($modules === NULL)
	{
		// Not changing modules, just return the current set
		return Kohana::$_modules;
	}

	// Start a new list of include paths, APPPATH first
	$paths = [APPPATH];

	foreach ($modules as $name =&gt; $path)
	{
		if (is_dir($path))
		{
			// Add the module to include paths
			$paths[] = $modules[$name] = realpath($path).DIRECTORY_SEPARATOR;
		}
		else
		{
			// This module is invalid, remove it
			throw new Kohana_Exception(&#039;Attempted to load an invalid or missing module \&#039;:module\&#039; at \&#039;:path\&#039;&#039;, [
				&#039;:module&#039; =&gt; $name,
				&#039;:path&#039;   =&gt; Debug::path($path),
			]);
		}
	}

	// Finish the include paths by adding SYSPATH
	$paths[] = SYSPATH;

	// Set the new include paths
	Kohana::$_paths = $paths;

	// Set the current module list
	Kohana::$_modules = $modules;

	foreach (Kohana::$_modules as $path)
	{
		$init = $path.&#039;init&#039;.EXT;

		if (is_file($init))
		{
			// Include the module initialization file once
			require_once $init;
		}
	}

	return Kohana::$_modules;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="sanitize"><small>public static</small>  sanitize(<small>mixed</small> <span class="param" title="Any variable">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Recursively sanitizes an input variable:</p>

<ul>
<li>Normalizes all newlines to LF</li>
</ul>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Any variable</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Sanitized variable 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function sanitize($value)
{
	if (is_array($value) OR is_object($value))
	{
		foreach ($value as $key =&gt; $val)
		{
			// Recursively clean each value
			$value[$key] = Kohana::sanitize($val);
		}
	}
	elseif (is_string($value))
	{
		if (strpos($value, &quot;\r&quot;) !== FALSE)
		{
			// Standardize newlines
			$value = str_replace([&quot;\r\n&quot;, &quot;\r&quot;], &quot;\n&quot;, $value);
		}
	}

	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="shutdown_handler"><small>public static</small>  shutdown_handler()<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Catches errors that are not caught by the error handler, such as E_PARSE.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#handler">Kohana_Exception::handler</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function shutdown_handler()
{
	if ( ! Kohana::$_init)
	{
		// Do not execute when not active
		return;
	}

	try
	{
		if (Kohana::$caching === TRUE AND Kohana::$_files_changed === TRUE)
		{
			// Write the file path cache
			Kohana::cache(&#039;Kohana::find_file()&#039;, Kohana::$_files);
		}
	}
	catch (Exception $e)
	{
		// Pass the exception to the handler
		Kohana_Exception::handler($e);
	}

	if (Kohana::$errors AND $error = error_get_last() AND in_array($error[&#039;type&#039;], Kohana::$shutdown_errors))
	{
		// Clean the output buffer
		ob_get_level() AND ob_clean();

		// Fake an exception for nice debugging
		Kohana_Exception::handler(new ErrorException($error[&#039;message&#039;], $error[&#039;type&#039;], 0, $error[&#039;file&#039;], $error[&#039;line&#039;]));

		// Shutdown now to avoid a &quot;death loop&quot;
		exit(1);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="version"><small>public static</small>  version()<small> (defined in <a href='/documentation/api/Kohana_Core'>Kohana_Core</a>)</small></h3>
<div class='description'><p>Generates a version string based on the variables defined above.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function version()
{
	return &#039;Koseven &#039;.Kohana::VERSION.&#039; (&#039;.Kohana::CODENAME.&#039;)&#039;;
}</code>
</pre>
</div>
</div>
</div>