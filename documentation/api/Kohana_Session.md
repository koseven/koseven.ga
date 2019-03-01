---
layout: api
class: Kohana_Session
---
<h1>Kohana_Session</h1>
<p>
<i><p>Base session class.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Session</dd>
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
<a href="#property-default">$default</a>
</li>
<li>
<a href="#property-instances">$instances</a>
</li>
<li>
<a href="#property-_data">$_data</a>
</li>
<li>
<a href="#property-_destroyed">$_destroyed</a>
</li>
<li>
<a href="#property-_encrypted">$_encrypted</a>
</li>
<li>
<a href="#property-_lifetime">$_lifetime</a>
</li>
<li>
<a href="#property-_name">$_name</a>
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
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#as_array">as_array()</a>
</li>
<li>
<a href="#bind">bind()</a>
</li>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#destroy">destroy()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#get_once">get_once()</a>
</li>
<li>
<a href="#id">id()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#name">name()</a>
</li>
<li>
<a href="#read">read()</a>
</li>
<li>
<a href="#regenerate">regenerate()</a>
</li>
<li>
<a href="#restart">restart()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#write">write()</a>
</li>
<li>
<a href="#_decode">_decode()</a>
</li>
<li>
<a href="#_destroy">_destroy()</a>
</li>
<li>
<a href="#_encode">_encode()</a>
</li>
<li>
<a href="#_read">_read()</a>
</li>
<li>
<a href="#_regenerate">_regenerate()</a>
</li>
<li>
<a href="#_restart">_restart()</a>
</li>
<li>
<a href="#_serialize">_serialize()</a>
</li>
<li>
<a href="#_unserialize">_unserialize()</a>
</li>
<li>
<a href="#_write">_write()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-default'><small>public static</small>  <span class='blue'>string</span> $default</h4>
</dt>
<dd>
 <p>default session adapter</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(6)</span> "native"</pre></dd>
<dt>
<h4 id='property-instances'><small>public static</small>  <span class='blue'>array</span> $instances</h4>
</dt>
<dd>
 <p>session instances</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_data'><small>protected</small>  <span class='blue'>array</span> $_data</h4>
</dt>
<dd>
 <p>session data</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_destroyed'><small>protected</small>  <span class='blue'>bool</span> $_destroyed</h4>
</dt>
<dd>
 <p>session destroyed?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_encrypted'><small>protected</small>  <span class='blue'>bool</span> $_encrypted</h4>
</dt>
<dd>
 <p>encrypt session data?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_lifetime'><small>protected</small>  <span class='blue'>int</span> $_lifetime</h4>
</dt>
<dd>
 <p>cookie lifetime</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
<dt>
<h4 id='property-_name'><small>protected</small>  <span class='blue'>string</span> $_name</h4>
</dt>
<dd>
 <p>cookie name</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(7)</span> "session"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Configuration">$config</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Session id">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Overloads the name, lifetime, and encrypted session settings.</p>

<p class="note">Sessions can only be created using the <a href="#instance">Session::instance</a> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>NULL</small></small> - Configuration</li>
<li>
 <span class="blue">string </span><strong> $id</strong> <small> = <small>NULL</small></small> - Session id</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#read">Session::read</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $config = NULL, $id = NULL)
{
	if (isset($config[&#039;name&#039;]))
	{
		// Cookie name to store the session id in
		$this-&gt;_name = (string) $config[&#039;name&#039;];
	}

	if (isset($config[&#039;lifetime&#039;]))
	{
		// Cookie lifetime
		$this-&gt;_lifetime = (int) $config[&#039;lifetime&#039;];
	}

	if (isset($config[&#039;encrypted&#039;]))
	{
		if ($config[&#039;encrypted&#039;] === TRUE)
		{
			// Use the default Encrypt instance
			$config[&#039;encrypted&#039;] = &#039;default&#039;;
		}

		// Enable or disable encryption of data
		$this-&gt;_encrypted = $config[&#039;encrypted&#039;];
	}

	// Load the session
	$this-&gt;read($id);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Session object is rendered to a serialized string. If encryption is
enabled, the session will be encrypted. If not, the output string will
be encoded.</p>

<pre><code>echo $session;
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#encode">Encrypt::encode</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __toString()
{
	// Serialize the data array
	$data = $this-&gt;_serialize($this-&gt;_data);

	if ($this-&gt;_encrypted)
	{
		// Encrypt the data using the default key
		$data = Encrypt::instance($this-&gt;_encrypted)-&gt;encode($data);
	}
	else
	{
		// Encode the data
		$data = $this-&gt;_encode($data);
	}

	return $data;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_array"><small>public</small>  as_array()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Returns the current session array. The returned array can also be
assigned by reference.</p>

<pre><code>// Get a copy of the current session data
$data = $session-&gt;as_array();

// Assign by reference for modification
$data =&amp; $session-&gt;as_array();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function &amp; as_array()
{
	return $this-&gt;_data;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind"><small>public</small>  bind(<small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Referenced value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Set a variable by reference.</p>

<pre><code>$session-&gt;bind('foo', $foo);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
byref  <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Referenced value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bind($key, &amp; $value)
{
	$this-&gt;_data[$key] =&amp; $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete"><small>public</small>  delete(<small>string</small> <span class="param" title=",... variable name">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Removes a variable in the session array.</p>

<pre><code>$session-&gt;delete('foo');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - ,...    variable name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete($key)
{
	$args = func_get_args();

	foreach ($args as $key)
	{
		unset($this-&gt;_data[$key]);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="destroy"><small>public</small>  destroy()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Completely destroy the current session.</p>

<pre><code>$success = $session-&gt;destroy();
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
<code class="language-php">public function destroy()
{
	if ($this-&gt;_destroyed === FALSE)
	{
		if ($this-&gt;_destroyed = $this-&gt;_destroy())
		{
			// The session has been destroyed, clear all data
			$this-&gt;_data = [];
		}
	}

	return $this-&gt;_destroyed;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Variable name">$key</span> [, <small>mixed</small> <span class="param" title="Default value to return">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Get a variable from the session array.</p>

<pre><code>$foo = $session-&gt;get('foo');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value to return</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get($key, $default = NULL)
{
	return array_key_exists($key, $this-&gt;_data) ? $this-&gt;_data[$key] : $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_once"><small>public</small>  get_once(<small>string</small> <span class="param" title="Variable name">$key</span> [, <small>mixed</small> <span class="param" title="Default value to return">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Get and delete a variable from the session array.</p>

<pre><code>$bar = $session-&gt;get_once('bar');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value to return</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_once($key, $default = NULL)
{
	$value = $this-&gt;get($key, $default);

	unset($this-&gt;_data[$key]);

	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="id"><small>public</small>  id()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Get the current session id, if the session supports it.</p>

<pre><code>$id = $session-&gt;id();
</code></pre>

<p class="note">Not all session types have ids.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function id()
{
	return NULL;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance([ <small>string</small> <span class="param" title="Type of session (native, cookie, etc)">$type</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Session identifier">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Creates a singleton session of the given type. Some session types
(native, database) also support restarting a session by passing a
session id as the second parameter.</p>

<pre><code>$session = Session::instance();
</code></pre>

<p class="note"><a href="#write">Session::write</a> will automatically be called when the request ends.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - Type of session (native, cookie, etc)</li>
<li>
 <span class="blue">string </span><strong> $id</strong> <small> = <small>NULL</small></small> - Session identifier</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:config">Kohana::$config</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Session</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance($type = NULL, $id = NULL)
{
	if ($type === NULL)
	{
		// Use the default type
		$type = Session::$default;
	}

	if ( ! isset(Session::$instances[$type]))
	{
		// Load the configuration for this type
		$config = Kohana::$config-&gt;load(&#039;session&#039;)-&gt;get($type);

		// Set the session class name
		$class = &#039;Session_&#039;.ucfirst($type);

		// Create a new session instance
		Session::$instances[$type] = $session = new $class($config, $id);

		// Write the session at shutdown
		register_shutdown_function([$session, &#039;write&#039;]);
	}

	return Session::$instances[$type];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="name"><small>public</small>  name()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Get the current session cookie name.</p>

<pre><code>$name = $session-&gt;name();
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function name()
{
	return $this-&gt;_name;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="read"><small>public</small>  read([ <small>string</small> <span class="param" title="Session id">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Loads existing session data.</p>

<pre><code>$session-&gt;read();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small> = <small>NULL</small></small> - Session id</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function read($id = NULL)
{
	$data = NULL;

	try
	{
		if (is_string($data = $this-&gt;_read($id)))
		{
			if ($this-&gt;_encrypted)
			{
				// Decrypt the data using the default key
				$data = Encrypt::instance($this-&gt;_encrypted)-&gt;decode($data);
			}
			else
			{
				// Decode the data
				$data = $this-&gt;_decode($data);
			}

			// Unserialize the data
			$data = $this-&gt;_unserialize($data);
		}
		else
		{
			// Ignore these, session is valid, likely no data though.
		}
	}
	catch (Exception $e)
	{
		// Error reading the session, usually a corrupt session.
		throw new Session_Exception(&#039;Error reading session data.&#039;, NULL, Session_Exception::SESSION_CORRUPT);
	}

	if (is_array($data))
	{
		// Load the data locally
		$this-&gt;_data = $data;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="regenerate"><small>public</small>  regenerate()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Generates a new session id and returns it.</p>

<pre><code>$id = $session-&gt;regenerate();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function regenerate()
{
	return $this-&gt;_regenerate();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="restart"><small>public</small>  restart()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Restart the session.</p>

<pre><code>$success = $session-&gt;restart();
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
<code class="language-php">public function restart()
{
	if ($this-&gt;_destroyed === FALSE)
	{
		// Wipe out the current session.
		$this-&gt;destroy();
	}

	// Allow the new session to be saved
	$this-&gt;_destroyed = FALSE;

	return $this-&gt;_restart();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Variable name">$key</span> , <small>mixed</small> <span class="param" title="Value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Set a variable in the session array.</p>

<pre><code>$session-&gt;set('foo', 'bar');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($key, $value)
{
	$this-&gt;_data[$key] = $value;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write"><small>public</small>  write()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Sets the last_active timestamp and saves the session.</p>

<pre><code>$session-&gt;write();
</code></pre>

<p class="note">Any errors that occur during session writing will be logged,
but not displayed, because sessions are written after output has
been sent.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:log">Kohana::$log</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function write()
{
	if (headers_sent() OR $this-&gt;_destroyed)
	{
		// Session cannot be written when the headers are sent or when
		// the session has been destroyed
		return FALSE;
	}

	// Set the last active timestamp
	$this-&gt;_data[&#039;last_active&#039;] = time();

	try
	{
		return $this-&gt;_write();
	}
	catch (Exception $e)
	{
		// Log &amp; ignore all errors when a write fails
		Kohana::$log-&gt;add(Log::ERROR, Kohana_Exception::text($e))-&gt;write();

		return FALSE;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_decode"><small>protected</small>  _decode(<small>string</small> <span class="param" title="Data">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Decodes the session data using <a href="/index.php/">base64_decode</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _decode($data)
{
	return base64_decode($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_destroy"><small>abstract protected</small>  _destroy()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Destroys the current session.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _destroy();</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_encode"><small>protected</small>  _encode(<small>string</small> <span class="param" title="Data">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Encodes the session data using <a href="/index.php/">base64_encode</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _encode($data)
{
	return base64_encode($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_read"><small>abstract protected</small>  _read([ <small>string</small> <span class="param" title="Session id">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Loads the raw session data string and returns it.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small> = <small>NULL</small></small> - Session id</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _read($id = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_regenerate"><small>abstract protected</small>  _regenerate()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Generate a new session id and return it.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _regenerate();</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_restart"><small>abstract protected</small>  _restart()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Restarts the current session.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _restart();</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_serialize"><small>protected</small>  _serialize(<small>array</small> <span class="param" title="Data">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Serializes the session data.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $data</strong> <small>required</small> - Data</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _serialize($data)
{
	return serialize($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_unserialize"><small>protected</small>  _unserialize(<small>string</small> <span class="param" title="Data">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Unserializes the session data.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _unserialize($data)
{
	return unserialize($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_write"><small>abstract protected</small>  _write()<small> (defined in <a href='/documentation/api/Kohana_Session'>Kohana_Session</a>)</small></h3>
<div class='description'><p>Writes the current session.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _write();</code>
</pre>
</div>
</div>
</div>