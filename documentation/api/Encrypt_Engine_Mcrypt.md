---
layout: api
class: Encrypt_Engine_Mcrypt
---
<h1>Encrypt_Engine_Mcrypt</h1>
extends <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>
<br />
extends <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>
<br />
<p>
<i><p>The Encrypt Mcrypt engine provides two-way encryption of text and binary strings
using the <a href="http://php.net/mcrypt">Mcrypt</a> extension, which consists of three
parts: the key, the cipher, and the mode.</p>

<dl>
<dt>The Key</dt>
<dd>A secret passphrase that is used for encoding and decoding</dd>

<dt>The Cipher</dt>
<dd>A <a href="http://php.net/mcrypt.ciphers">cipher</a> determines how the encryption
is mathematically calculated. By default, the "rijndael-128" cipher
is used. This is commonly known as "AES-128" and is an industry standard.</dd>

<dt>The Mode</dt>
<dd>The <a href="http://php.net/mcrypt.constants">mode</a> determines how the encrypted
data is written in binary form. By default, the "nofb" mode is used,
which produces short output with high entropy.</dd>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a></p>
</div>
</div>
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
<li>
<a href="#property-_rand">$_rand</a>
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
<a href="#_normalize_key">_normalize_key()</a>
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
<dt>
<h4 id='property-_rand'><small>protected static</small>  <span class='blue'>string</span> $_rand</h4>
</dt>
<dd>
 <p>RAND type to use</p>

<p>Only MCRYPT_DEV_URANDOM and MCRYPT_DEV_RANDOM are considered safe.
Using MCRYPT_RAND will silently revert to MCRYPT_DEV_URANDOM</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(18)</span> "MCRYPT_DEV_URANDOM"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>mixed</small> <span class="param" title="Mcrypt key or config array">$key_config</span> [, <small>string</small> <span class="param" title="Mcrypt mode">$mode</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Mcrypt cipher">$cipher</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>)</small></h3>
<div class='description'><p>Creates a new mcrypt wrapper.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key_config</strong> <small>required</small> - Mcrypt key or config array</li>
<li>
 <span class="blue">string </span><strong> $mode</strong> <small> = <small>NULL</small></small> - Mcrypt mode</li>
<li>
 <span class="blue">string </span><strong> $cipher</strong> <small> = <small>NULL</small></small> - Mcrypt cipher</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($key_config, $mode = NULL, $cipher = NULL)
{
	if ($mode === NULL)
	{
		// Add the default mode
		$mode = MCRYPT_MODE_NOFB;
	}

	if ($cipher === NULL)
	{
		// Add the default cipher
		$cipher = MCRYPT_RIJNDAEL_128;
	}

	parent::__construct($key_config, $mode, $cipher);

	// Find the max length of the key, based on cipher and mode
	$size = mcrypt_get_key_size($this-&gt;_cipher, $this-&gt;_mode);

	if (isset($this-&gt;_key[$size]))
	{
		// Shorten the key to the maximum size
		$this-&gt;_key = substr($this-&gt;_key, 0, $size);
	}
	else
	{
		$this-&gt;_key = $this-&gt;_normalize_key($this-&gt;_key, $this-&gt;_cipher, $this-&gt;_mode);
	}

	/*
	 * Silently use MCRYPT_DEV_URANDOM when the chosen random number generator
	 * is not one of those that are considered secure.
	 */
	if ((Encrypt_Engine_Mcrypt::$_rand !== MCRYPT_DEV_URANDOM) AND (Encrypt_Engine_Mcrypt::$_rand !== MCRYPT_DEV_RANDOM))
	{
		Encrypt_Engine_Mcrypt::$_rand = MCRYPT_DEV_URANDOM;
	}

	// Store the IV size
	$this-&gt;_iv_size = mcrypt_get_iv_size($this-&gt;_cipher, $this-&gt;_mode);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_iv"><small>public</small>  create_iv()<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>)</small></h3>
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
<code class="language-php">public function create_iv()
{
	// Create a random initialization vector of the proper size for the current cipher
	return mcrypt_create_iv($this-&gt;_iv_size, Encrypt_Engine_Mcrypt::$_rand);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decrypt"><small>public</small>  decrypt(<small>string</small> <span class="param" title="Encoded string to be decrypted">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>)</small></h3>
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
<code class="language-php">public function decrypt($data)
{
	// Convert the data back to binary
	$data = base64_decode($data, TRUE);

	if ( ! $data)
	{
		// Invalid base64 data
		return FALSE;
	}

	// Extract the initialization vector from the data
	$iv = substr($data, 0, $this-&gt;_iv_size);

	if ($this-&gt;_iv_size !== strlen($iv))
	{
		// The iv is not the expected size
		return FALSE;
	}

	// Remove the iv from the data
	$data = substr($data, $this-&gt;_iv_size);

	// Return the decrypted data, trimming the \0 padding bytes from the end of the data
	return rtrim(mcrypt_decrypt($this-&gt;_cipher, $this-&gt;_key, $data, $this-&gt;_mode, $iv), &quot;\0&quot;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encrypt"><small>public</small>  encrypt(<small>string</small> <span class="param" title="Data to be encrypted">$data</span> , $iv )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>)</small></h3>
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
	// Encrypt the data using the configured options and generated iv
	$data = mcrypt_encrypt($this-&gt;_cipher, $this-&gt;_key, $data, $this-&gt;_mode, $iv);

	// Use base64 encoding to convert to a string
	return base64_encode($iv.$data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_normalize_key"><small>protected</small>  _normalize_key(<small>string</small> <span class="param" title="Encryption key">$key</span> , <small>string</small> <span class="param" title="Mcrypt cipher">$cipher</span> , <small>string</small> <span class="param" title="Mcrypt mode">$mode</span> )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine_Mcrypt'>Kohana_Encrypt_Engine_Mcrypt</a>)</small></h3>
<div class='description'><p>Normalize key for PHP 5.6 for backwards compatibility</p>

<p>This method is a shim to make PHP 5.6 behave in a B/C way for
legacy key padding when shorter-than-supported keys are used</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Encryption key</li>
<li>
 <span class="blue">string </span><strong> $cipher</strong> <small>required</small> - Mcrypt cipher</li>
<li>
 <span class="blue">string </span><strong> $mode</strong> <small>required</small> - Mcrypt mode</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _normalize_key($key, $cipher, $mode)
{
	// open the cipher
	$td = mcrypt_module_open($cipher, &#039;&#039;, $mode, &#039;&#039;);

	// loop through the supported key sizes
	foreach (mcrypt_enc_get_supported_key_sizes($td) as $supported) {
		// if key is short, needs padding
		if (strlen($key) &lt;= $supported)
		{
			return str_pad($key, $supported, &quot;\0&quot;);
		}
	}

	// at this point key must be greater than max supported size, shorten it
	return substr($key, 0, mcrypt_get_key_size($cipher, $mode));
}</code>
</pre>
</div>
</div>
</div>