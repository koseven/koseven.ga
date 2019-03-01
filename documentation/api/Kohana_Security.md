---
layout: api
class: Kohana_Security
---
<h1>Kohana_Security</h1>
<p>
<i><p>Security helper class.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Security</dd>
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
<a href="#property-token_name">$token_name</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#check">check()</a>
</li>
<li>
<a href="#encode_php_tags">encode_php_tags()</a>
</li>
<li>
<a href="#slow_equals">slow_equals()</a>
</li>
<li>
<a href="#strip_image_tags">strip_image_tags()</a>
</li>
<li>
<a href="#token">token()</a>
</li>
<li>
<a href="#_generate_token">_generate_token()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-token_name'><small>public static</small>  <span class='blue'>string</span> $token_name</h4>
</dt>
<dd>
 <p>key name used for token storage</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(14)</span> "security_token"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="check"><small>public static</small>  check(<small>string</small> <span class="param" title="Token to check">$token</span> )<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Check that the given token matches the currently stored security token.</p>

<pre><code>if (Security::check($token))
{
    // Pass
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $token</strong> <small>required</small> - Token to check</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#token">Security::token</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function check($token)
{
	return Security::slow_equals(Security::token(), $token);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encode_php_tags"><small>public static</small>  encode_php_tags(<small>string</small> <span class="param" title="String to sanitize">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Encodes PHP tags in a string.</p>

<pre><code>$str = Security::encode_php_tags($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to sanitize</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function encode_php_tags($str)
{
	return str_replace([&#039;&lt;?&#039;, &#039;?&gt;&#039;], [&#039;&amp;lt;?&#039;, &#039;?&amp;gt;&#039;], $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="slow_equals"><small>public static</small>  slow_equals(<small>string</small> <span class="param" title="Cryptographic hash">$a</span> , <small>string</small> <span class="param" title="Cryptographic hash">$b</span> )<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Compare two hashes in a time-invariant manner.
Prevents cryptographic side-channel attacks (timing attacks, specifically)</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $a</strong> <small>required</small> - Cryptographic hash</li>
<li>
 <span class="blue">string </span><strong> $b</strong> <small>required</small> - Cryptographic hash</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function slow_equals($a, $b)
{
	$diff = strlen($a) ^ strlen($b);
	for($i = 0; $i &lt; strlen($a) AND $i &lt; strlen($b); $i++)
	{
		$diff |= ord($a[$i]) ^ ord($b[$i]);
	}
	return $diff === 0;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="strip_image_tags"><small>public static</small>  strip_image_tags(<small>string</small> <span class="param" title="String to sanitize">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Deprecated for security reasons.
See https://github.com/kohana/kohana/issues/107</p>

<p>Remove image tags from a string.</p>

<pre><code>$str = Security::strip_image_tags($str);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to sanitize</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - since version 3.3.6</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function strip_image_tags($str)
{
	return preg_replace(&#039;#&lt;img\s.*?(?:src\s*=\s*[&quot;\&#039;]?([^&quot;\&#039;&lt;&gt;\s]*)[&quot;\&#039;]?[^&gt;]*)?&gt;#is&#039;, &#039;$1&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="token"><small>public static</small>  token([ <small>boolean</small> <span class="param" title="Force a new token to be generated?">$new</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Generate and store a unique token which can be used to help prevent
<a href="http://wikipedia.org/wiki/Cross_Site_Request_Forgery">CSRF</a> attacks.</p>

<pre><code>$token = Security::token();
</code></pre>

<p>You can insert this token into your forms as a hidden field:</p>

<pre><code>echo Form::hidden('csrf', Security::token());
</code></pre>

<p>And then check it when using <a href="/index.php/">Validation</a>:</p>

<pre><code>$array-&gt;rules('csrf', array(
    array('not_empty'),
    array('Security::check'),
));
</code></pre>

<p>This provides a basic, but effective, method of preventing CSRF attacks.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $new</strong> <small> = <small>bool</small> FALSE</small> - Force a new token to be generated?</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#instance">Session::instance</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function token($new = FALSE)
{
	$session = Session::instance();

	// Get the current token
	$token = $session-&gt;get(Security::$token_name);

	if ($new === TRUE OR ! $token)
	{
		$token = Security::_generate_token();

		// Store the new token
		$session-&gt;set(Security::$token_name, $token);
	}

	return $token;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_generate_token"><small>protected static</small>  _generate_token()<small> (defined in <a href='/documentation/api/Kohana_Security'>Kohana_Security</a>)</small></h3>
<div class='description'><p>Generate a unique token.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _generate_token()
{
	if (function_exists(&#039;random_bytes&#039;))
	{
		try
		{
			return bin2hex(random_bytes(24));
		}
		catch (Exception $e)
		{
			// Random bytes function is available but no sources of randomness are available
			// so rather than allowing the exception to be thrown - fall back to other methods.
			// @see http://php.net/manual/en/function.random-bytes.php
		}
	}

	if (function_exists(&#039;openssl_random_pseudo_bytes&#039;))
	{
		// Generate a random pseudo bytes token if openssl_random_pseudo_bytes is available
		// This is more secure than uniqid, because uniqid relies on microtime, which is predictable
		return base64_encode(openssl_random_pseudo_bytes(32));
	}
	else
	{
		// Otherwise, fall back to a hashed uniqid
		return sha1(uniqid(NULL, TRUE));
	}
}</code>
</pre>
</div>
</div>
</div>