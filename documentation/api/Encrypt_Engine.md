---
layout: api
class: Encrypt_Engine
---
<h1>Encrypt_Engine</h1>
extends <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>
<br />
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a></p>
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
<a href="#decrypt">decrypt()</a>
</li>
<li>
<a href="#encrypt">encrypt()</a>
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
<h3 id="__construct"><small>public</small>  __construct(<small>mixed</small> <span class="param" title="Mcrypt key or config array">$key_config</span> [, <small>string</small> <span class="param" title="Mcrypt mode">$mode</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Mcrypt cipher">$cipher</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>)</small></h3>
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
	if (is_array($key_config))
	{
		if (isset($key_config[&#039;key&#039;]))
		{
			$this-&gt;_key = $key_config[&#039;key&#039;];
		}
		else
		{
			// No default encryption key is provided!
			throw new Kohana_Exception(&#039;No encryption key is defined in the encryption configuration&#039;);
		}

		if (isset($key_config[&#039;mode&#039;]))
		{
			$this-&gt;_mode = $key_config[&#039;mode&#039;];
		}
		// Mode not specified in config array, use argument
		else if ($mode !== NULL)
		{
			$this-&gt;_mode = $mode;
		}
		
		if (isset($key_config[&#039;cipher&#039;]))
		{
			$this-&gt;_cipher = $key_config[&#039;cipher&#039;];
		}
		// Cipher not specified in config array, use argument
		else if ($cipher !== NULL)
		{
			$this-&gt;_cipher = $cipher;
		}
	}
	else if (is_string($key_config))
	{
		// Store the key, mode, and cipher
		$this-&gt;_key = $key_config;
		$this-&gt;_mode = $mode;
		$this-&gt;_cipher = $cipher;
	}
	else
	{
		// No default encryption key is provided!
		throw new Kohana_Exception(&#039;No encryption key is defined in the encryption configuration&#039;);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decrypt"><small>abstract public</small>  decrypt()<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract public function decrypt($data);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encrypt"><small>abstract public</small>  encrypt()<small> (defined in <a href='/documentation/api/Kohana_Encrypt_Engine'>Kohana_Encrypt_Engine</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract public function encrypt($data, $iv);</code>
</pre>
</div>
</div>
</div>