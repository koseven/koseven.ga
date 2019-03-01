---
layout: api
class: Cookie
---
<h1>Cookie</h1>
extends <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>
<br />
<p>
<i><p>Cookie helper.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Helpers</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a></p>
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
<a href="#property-domain">$domain</a>
</li>
<li>
<a href="#property-expiration">$expiration</a>
</li>
<li>
<a href="#property-httponly">$httponly</a>
</li>
<li>
<a href="#property-path">$path</a>
</li>
<li>
<a href="#property-salt">$salt</a>
</li>
<li>
<a href="#property-secure">$secure</a>
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
<a href="#get">get()</a>
</li>
<li>
<a href="#salt">salt()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#_setcookie">_setcookie()</a>
</li>
<li>
<a href="#_time">_time()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-domain'><small>public static</small>  <span class='blue'>string</span> $domain</h4>
</dt>
<dd>
 <p>Restrict the domain that the cookie is available to</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-expiration'><small>public static</small>  <span class='blue'>integer</span> $expiration</h4>
</dt>
<dd>
 <p>Number of seconds before the cookie expires</p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 0</pre></dd>
<dt>
<h4 id='property-httponly'><small>public static</small>  <span class='blue'>boolean</span> $httponly</h4>
</dt>
<dd>
 <p>Only transmit cookies over HTTP, disabling Javascript access</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-path'><small>public static</small>  <span class='blue'>string</span> $path</h4>
</dt>
<dd>
 <p>Restrict the path that the cookie is available to</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(1)</span> "/"</pre></dd>
<dt>
<h4 id='property-salt'><small>public static</small>  <span class='blue'>string</span> $salt</h4>
</dt>
<dd>
 <p>Magic salt to add to the cookie</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-secure'><small>public static</small>  <span class='blue'>boolean</span> $secure</h4>
</dt>
<dd>
 <p>Only transmit cookies over secure connections</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="delete"><small>public static</small>  delete(<small>string</small> <span class="param" title="Cookie name">$name</span> )<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Deletes a cookie by making the value NULL and expiring it.</p>

<pre><code>Cookie::delete('theme');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Cookie name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function delete($name)
{
	// Remove the cookie
	unset($_COOKIE[$name]);

	// Nullify the cookie and make it expire
	return static::_setcookie($name, NULL, -86400, Cookie::$path, Cookie::$domain, Cookie::$secure, Cookie::$httponly);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public static</small>  get(<small>string</small> <span class="param" title="Cookie name">$key</span> [, <small>mixed</small> <span class="param" title="Default value to return">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Gets the value of a signed cookie. Cookies without signatures will not
be returned. If the cookie signature is present, but invalid, the cookie
will be deleted.</p>

<pre><code>// Get the "theme" cookie, or use "blue" if the cookie does not exist
$theme = Cookie::get('theme', 'blue');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Cookie name</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value to return</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function get($key, $default = NULL)
{
	if ( ! isset($_COOKIE[$key]))
	{
		// The cookie does not exist
		return $default;
	}

	// Get the cookie value
	$cookie = $_COOKIE[$key];

	// Find the position of the split between salt and contents
	$split = strlen(Cookie::salt($key, NULL));

	if (isset($cookie[$split]) AND $cookie[$split] === &#039;~&#039;)
	{
		// Separate the salt and the value
		list ($hash, $value) = explode(&#039;~&#039;, $cookie, 2);

		if (Security::slow_equals(Cookie::salt($key, $value), $hash))
		{
			// Cookie signature is valid
			return $value;
		}

		// The cookie signature is invalid, delete it
		static::delete($key);
	}

	return $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="salt"><small>public static</small>  salt(<small>string</small> <span class="param" title="Name of cookie">$name</span> , <small>string</small> <span class="param" title="Value of cookie ">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Generates a salt string for a cookie based on the name and value.</p>

<pre><code>$salt = Cookie::salt('theme', 'red');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Name of cookie</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value of cookie
</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a> if Cookie::$salt is not configured</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function salt($name, $value)
{
	// Require a valid salt
	if ( ! Cookie::$salt)
	{
		throw new Kohana_Exception(&#039;A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation&#039;);
	}

	// Determine the user agent
	$agent = isset($_SERVER[&#039;HTTP_USER_AGENT&#039;]) ? strtolower($_SERVER[&#039;HTTP_USER_AGENT&#039;]) : &#039;unknown&#039;;

	return hash_hmac(&#039;sha1&#039;, $agent.$name.$value.Cookie::$salt, Cookie::$salt);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public static</small>  set(<small>string</small> <span class="param" title="Name of cookie">$name</span> , <small>string</small> <span class="param" title="Value of cookie">$value</span> [, <small>integer</small> <span class="param" title="Lifetime in seconds">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Sets a signed cookie. Note that all cookie values must be strings and no
automatic serialization will be performed!</p>

<p class="note">By default, Cookie::$expiration is 0 - if you skip/pass NULL for the optional
     lifetime argument your cookies will expire immediately unless you have separately
     configured Cookie::$expiration.</p>

<pre><code>// Set the "theme" cookie
Cookie::set('theme', 'red');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Name of cookie</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value of cookie</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Lifetime in seconds</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#salt">Cookie::salt</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function set($name, $value, $lifetime = NULL)
{
	if ($lifetime === NULL)
	{
		// Use the default expiration
		$lifetime = Cookie::$expiration;
	}

	if ($lifetime !== 0)
	{
		// The expiration is expected to be a UNIX timestamp
		$lifetime += static::_time();
	}

	// Add the salt to the cookie value
	$value = Cookie::salt($name, $value).&#039;~&#039;.$value;

	return static::_setcookie($name, $value, $lifetime, Cookie::$path, Cookie::$domain, Cookie::$secure, Cookie::$httponly);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_setcookie"><small>protected static</small>  _setcookie(<small>string</small> <span class="param" title="$name">$name</span> , <small>string</small> <span class="param" title="$value">$value</span> , <small>integer</small> <span class="param" title="$expire">$expire</span> , <small>string</small> <span class="param" title="$path">$path</span> , <small>string</small> <span class="param" title="$domain">$domain</span> , <small>boolean</small> <span class="param" title="$secure">$secure</span> , <small>boolean</small> <span class="param" title=" ">$httponly</span> )<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Proxy for the native setcookie function - to allow mocking in unit tests so that they do not fail when headers
have been sent.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - $name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - $value</li>
<li>
 <span class="blue">integer </span><strong> $expire</strong> <small>required</small> - $expire</li>
<li>
 <span class="blue">string </span><strong> $path</strong> <small>required</small> - $path</li>
<li>
 <span class="blue">string </span><strong> $domain</strong> <small>required</small> - $domain</li>
<li>
 <span class="blue">boolean </span><strong> $secure</strong> <small>required</small> - $secure</li>
<li>
 <span class="blue">boolean </span><strong> $httponly</strong> <small>required</small> - 
</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>See - <a href="/index.php/">setcookie</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _setcookie($name, $value, $expire, $path, $domain, $secure, $httponly)
{
	return setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_time"><small>protected static</small>  _time()<small> (defined in <a href='/documentation/api/Kohana_Cookie'>Kohana_Cookie</a>)</small></h3>
<div class='description'><p>Proxy for the native time function - to allow mocking of time-related logic in unit tests</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>See - <a href="/index.php/">time</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>int</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _time()
{
	return time();
}</code>
</pre>
</div>
</div>
</div>