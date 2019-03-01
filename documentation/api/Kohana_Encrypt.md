---
layout: api
class: Kohana_Encrypt
---
<h1>Kohana_Encrypt</h1>
<p>
<i>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Encrypt</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>copyright</dt>
<dd>(c) 2007-2012 Kohana Team</dd>
<dd>(c) 2016-2018 Koseven Team</dd>
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
<a href="#property-_engine">$_engine</a>
</li>
<li>
<a href="#property-default">$default</a>
</li>
<li>
<a href="#property-instances">$instances</a>
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
<a href="#decode">decode()</a>
</li>
<li>
<a href="#encode">encode()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#_create_iv">_create_iv()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_engine'><small>public</small>  <span class='blue'>engine</span> $_engine</h4>
</dt>
<dd>
 <p>Encryption engine</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-default'><small>public static</small>  <span class='blue'>string</span> $default</h4>
</dt>
<dd>
 <p>default instance name</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(7)</span> "default"</pre></dd>
<dt>
<h4 id='property-instances'><small>public static</small>  <span class='blue'>array</span> $instances</h4>
</dt>
<dd>
 <p>Encrypt class instances</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="Encryption key or config array">$key_config</span> [, <small>string</small> <span class="param" title="Encryption mode">$mode</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Encryption cipher">$cipher</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Encrypt'>Kohana_Encrypt</a>)</small></h3>
<div class='description'><p>Creates a new mcrypt wrapper.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key_config</strong> <small>required</small> - Encryption key or config array</li>
<li>
 <span class="blue">string </span><strong> $mode</strong> <small> = <small>NULL</small></small> - Encryption mode</li>
<li>
 <span class="blue">string </span><strong> $cipher</strong> <small> = <small>NULL</small></small> - Encryption cipher</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($key_config, $mode = NULL, $cipher = NULL)
{
	if (is_string($key_config))
	{
		$this-&gt;_engine = new Encrypt_Engine_Mcrypt($key_config, $mode, $cipher);
	}
	
	else
	{
		if ( ! isset($key_config[&#039;type&#039;]))
		{
			$key_config[&#039;type&#039;] = &#039;mcrypt&#039;;
		}

		// Set the engine class name
		$engine_name = &#039;Encrypt_Engine_&#039;.ucfirst($key_config[&#039;type&#039;]);

		// Create the engine class
		$this-&gt;_engine = new $engine_name($key_config);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decode"><small>public</small>  decode(<small>string</small> <span class="param" title="Encoded string to be decrypted">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt'>Kohana_Encrypt</a>)</small></h3>
<div class='description'><p>Decrypts an encoded string back to its original value.</p>

<pre><code>$data = $encrypt-&gt;decode($data);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Encoded string to be decrypted</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>FALSE</span>  - If decryption fails 
</li><li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function decode($data)
{
	return $this-&gt;_engine-&gt;decrypt($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encode"><small>public</small>  encode(<small>string</small> <span class="param" title="Data to be encrypted">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt'>Kohana_Encrypt</a>)</small></h3>
<div class='description'><p>Encrypts a string and returns an encrypted string that can be decoded.</p>

<pre><code>$data = $encrypt-&gt;encode($data);
</code></pre>

<p>The encrypted binary data is encoded using <a href="http://php.net/base64_encode">base64</a>
to convert it to a string. This string can be stored in a database,
displayed, and passed using most other means without corruption.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data to be encrypted</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function encode($data)
{
	// Get an initialization vector
	$iv = $this-&gt;_create_iv();

	return $this-&gt;_engine-&gt;encrypt($data, $iv);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance([ <small>string</small> <span class="param" title="Configuration group name">$name</span> <small>= <small>NULL</small></small> , $config <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Encrypt'>Kohana_Encrypt</a>)</small></h3>
<div class='description'><p>Returns a singleton instance of Encrypt. An encryption key must be
provided in your "encrypt" configuration file.</p>

<pre><code>$encrypt = Encrypt::instance();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small> = <small>NULL</small></small> - Configuration group name</li>
<li>
 <span class="blue">unknown </span><strong> $config</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Encrypt</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance($name = NULL, array $config = NULL)
{
	if ($name === NULL)
	{
		// Use the default instance name
		$name = Encrypt::$default;
	}

	if ( ! isset(Encrypt::$instances[$name]))
	{
		if ($config === NULL)
		{
			// Load the configuration data
			$config = Kohana::$config-&gt;load(&#039;encrypt&#039;)-&gt;$name;
		}

		if ( ! isset($config[&#039;key&#039;]))
		{
			// No default encryption key is provided!
			throw new Kohana_Exception(&#039;No encryption key is defined in the encryption configuration group: :group&#039;,
				[&#039;:group&#039; =&gt; $name]);
		}

		// Create a new instance
		Encrypt::$instances[$name] = new Encrypt($config);
	}

	return Encrypt::$instances[$name];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_create_iv"><small>protected</small>  _create_iv()<small> (defined in <a href='/documentation/api/Kohana_Encrypt'>Kohana_Encrypt</a>)</small></h3>
<div class='description'><p>Proxy for the mcrypt_create_iv function - to allow mocking and testing against KAT vectors</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The initialization vector or FALSE on error 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _create_iv()
{
	return $this-&gt;_engine-&gt;create_iv();
}</code>
</pre>
</div>
</div>
</div>