---
layout: api
class: Kohana_Encrypt_Engine_Openssl
---
<h1>Kohana_Encrypt_Engine_Openssl</h1>
extends <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>
<br />
<p>
<i><p>The Encrypt Openssl engine provides two-way encryption of text and binary strings
using the <a href="http://php.net/openssl">OpenSSL</a> extension, which consists of two
parts: the key and the cipher.</p>

<dl>
<dt>The Key</dt>
<dd>A secret passphrase that is used for encoding and decoding</dd>

<dt>The Cipher</dt>
<dd>A <a href="http://php.net/manual/en/openssl.ciphers.php">cipher</a> determines how the encryption
is mathematically calculated. By default, the "AES-256-CBC" cipher
is used.</dd>
</dl>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Encrypt</dd>
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
<a href="#property-_cipher">$_cipher</a>
</li>
<li>
<a href="#property-_iv_size">$_iv_size</a>
</li>
<li>
<a href="#property-_key">$_key</a>
</li>
<li>
<a href="#property-_mode">$_mode</a>
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
<a href="#create_iv">create_iv()</a>
</li>
<li>
<a href="#decrypt">decrypt()</a>
</li>
<li>
<a href="#encrypt">encrypt()</a>
</li>
<li>
<a href="#hash">hash()</a>
</li>
<li>
<a href="#valid_mac">valid_mac()</a>
</li>
<li>
<a href="#valid_payload">valid_payload()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_cipher'><small>protected</small>  <span class='blue'>string</span> $_cipher</h4>
</dt>
<dd>
 <p>mcrypt cipher</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_iv_size'><small>protected</small>  <span class='blue'>int</span> $_iv_size</h4>
</dt>
<dd>
 <p>the size of the Initialization Vector (IV) in bytes</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_key'><small>protected</small>  <span class='blue'>string</span> $_key</h4>
</dt>
<dd>
 <p>Encryption key</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_mode'><small>protected</small>  <span class='blue'>string</span> $_mode</h4>
</dt>
<dd>
 <p>mcrypt mode</p>
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
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="$key encryption key">$key_config</span> [, <small>string</small> <span class="param" title="Openssl mode">$mode</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Openssl cipher">$cipher</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Creates a new openssl wrapper.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key_config</strong> <small>required</small> - $key    encryption key</li>
<li>
 <span class="blue">string </span><strong> $mode</strong> <small> = <small>NULL</small></small> - Openssl mode</li>
<li>
 <span class="blue">string </span><strong> $cipher</strong> <small> = <small>NULL</small></small> - Openssl cipher</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($key_config, $mode = NULL, $cipher = NULL)
{
	if ($cipher === NULL)
	{
		// Add the default cipher
		$cipher = &#039;AES-256-CBC&#039;;
	}

	parent::__construct($key_config, $mode, $cipher);

	$this-&gt;_iv_size = openssl_cipher_iv_length($this-&gt;_cipher);

	$length = mb_strlen($this-&gt;_key, &#039;8bit&#039;);

	// Validate configuration
	if ($this-&gt;_cipher === &#039;AES-128-CBC&#039;)
	{
		if ($length !== 16)
		{
			// No valid encryption key is provided!
			throw new Kohana_Exception(&#039;No valid encryption key is defined in the encryption configuration: length should be 16 for AES-128-CBC&#039;);
		}
	}
		
	elseif ($this-&gt;_cipher === &#039;AES-256-CBC&#039;)
	{
		if ($length !== 32)
		{
			// No valid encryption key is provided!
			throw new Kohana_Exception(&#039;No valid encryption key is defined in the encryption configuration: length should be 32 for AES-256-CBC&#039;);
		}
	}
	
	else
	{
		// No valid encryption cipher is provided!
		throw new Kohana_Exception(&#039;No valid encryption cipher is defined in the encryption configuration.&#039;);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_iv"><small>public</small>  create_iv()<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Proxy for the random_bytes function - to allow mocking and testing against KAT vectors</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The initialization vector or FALSE on error 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function create_iv()
{
	if (function_exists(&#039;random_bytes&#039;))
	{
		return random_bytes($this-&gt;_iv_size);
	}

	if (function_exists(&#039;mcrypt_create_iv&#039;))
	{
		$key = mcrypt_create_iv($this-&gt;_iv_size, MCRYPT_DEV_URANDOM);
		if (mb_strlen($key, &#039;8bit&#039;) === $this-&gt;_iv_size)
		{
			return $key;
		}
	}

	throw new Kohana_Exception(&#039;Could not create initialization vector.&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decrypt"><small>public</small>  decrypt(<small>string</small> <span class="param" title="Encoded string to be decrypted">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Decrypts an encoded string back to its original value.</p>
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
<code class="language-php">public function decrypt($data)
{
	// Convert the data back to binary
	$data = json_decode(base64_decode($data), TRUE);

	// If the payload is not valid JSON or does not have the proper keys set we will
	// assume it is invalid and bail out of the routine since we will not be able
	// to decrypt the given value. We&#039;ll also check the MAC for this encryption.
	if ( ! $this-&gt;valid_payload($data))
	{
		// Decryption failed
		return FALSE;
	}

	if ( ! $this-&gt;valid_mac($data))
	{
		// Decryption failed
		return FALSE;
	}

	$iv = base64_decode($data[&#039;iv&#039;]);
	if ( ! $iv)
	{
		// Invalid base64 data
		return FALSE;
	}

	// Here we will decrypt the value. If we are able to successfully decrypt it
	// we will then unserialize it and return it out to the caller. If we are
	// unable to decrypt this value we will throw out an exception message.
	$decrypted = \openssl_decrypt($data[&#039;value&#039;], $this-&gt;_cipher, $this-&gt;_key, 0, $iv);

	if ($decrypted === FALSE)
	{
		return FALSE;
	}

	return $decrypted;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encrypt"><small>public</small>  encrypt(<small>string</small> <span class="param" title="Data to be encrypted">$data</span> , $iv )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Encrypts a string and returns an encrypted string that can be decoded.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - Data to be encrypted</li>
<li>
 <span class="blue">unknown </span><strong> $iv</strong> <small>required</small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function encrypt($data, $iv)
{
	// First we will encrypt the value using OpenSSL. After this is encrypted we
	// will proceed to calculating a MAC for the encrypted value so that this
	// value can be verified later as not having been changed by the users.
	$value = \openssl_encrypt($data, $this-&gt;_cipher, $this-&gt;_key, 0, $iv);

	if ($value === FALSE)
	{
		// Encryption failed
		return FALSE;
	}

	// Once we have the encrypted value we will go ahead base64_encode the input
	// vector and create the MAC for the encrypted value so we can verify its
	// authenticity. Then, we&#039;ll JSON encode the data in a &quot;payload&quot; array.
	$mac = $this-&gt;hash($iv = base64_encode($iv), $value);

	$json = json_encode(compact(&#039;iv&#039;, &#039;value&#039;, &#039;mac&#039;));

	if (! is_string($json))
	{
		// Encryption failed
		return FALSE;
	}

	return base64_encode($json);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hash"><small>protected</small>  hash(<small>string</small> <span class="param" title="$iv">$iv</span> , <small>mixed</small> <span class="param" title="$value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Create a MAC for the given value.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $iv</strong> <small>required</small> - $iv</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - $value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function hash($iv, $value)
{
	return hash_hmac(&#039;sha256&#039;, $iv.$value, $this-&gt;_key);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid_mac"><small>protected</small>  valid_mac(<small>array</small> <span class="param" title="$payload">$payload</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Determine if the MAC for the given payload is valid.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $payload</strong> <small>required</small> - $payload</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function valid_mac(array $payload)
{
	$bytes = $this-&gt;create_iv($this-&gt;_iv_size);
	$calculated = hash_hmac(&#039;sha256&#039;, $this-&gt;hash($payload[&#039;iv&#039;], $payload[&#039;value&#039;]), $bytes, TRUE);

	return hash_equals(hash_hmac(&#039;sha256&#039;, $payload[&#039;mac&#039;], $bytes, TRUE), $calculated);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid_payload"><small>protected</small>  valid_payload(<small>mixed</small> <span class="param" title="$payload">$payload</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Openssl'>Kohana_Encrypt_Engine_Openssl</a>)</small></h3>
<div class='description'><p>Verify that the encryption payload is valid.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $payload</strong> <small>required</small> - $payload</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function valid_payload($payload)
{
	return is_array($payload) AND
			isset($payload[&#039;iv&#039;], $payload[&#039;value&#039;], $payload[&#039;mac&#039;]) AND
			strlen(base64_decode($payload[&#039;iv&#039;], TRUE)) === $this-&gt;_iv_size;
}</code>
</pre>
</div>
</div>
</div>