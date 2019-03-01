---
layout: api
class: Auth
---
<h1>Auth</h1>
extends <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>
<br />
<p>
<i><p>User authorization library. Handles user login and logout, as well as secure
password hashing.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Auth</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a></p>
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
<a href="#property-_config">$_config</a>
</li>
<li>
<a href="#property-_instance">$_instance</a>
</li>
<li>
<a href="#property-_session">$_session</a>
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
<a href="#check_password">check_password()</a>
</li>
<li>
<a href="#get_user">get_user()</a>
</li>
<li>
<a href="#hash">hash()</a>
</li>
<li>
<a href="#hash_password">hash_password()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#logged_in">logged_in()</a>
</li>
<li>
<a href="#login">login()</a>
</li>
<li>
<a href="#logout">logout()</a>
</li>
<li>
<a href="#password">password()</a>
</li>
<li>
<a href="#_login">_login()</a>
</li>
<li>
<a href="#complete_login">complete_login()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_config'><small>protected</small>  <span class='blue'></span> $_config</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_instance'><small>protected static</small>  <span class='blue'></span> $_instance</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_session'><small>protected</small>  <span class='blue'></span> $_session</h4>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Config Options">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Loads Session and configuration options.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Config Options</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($config = [])
{
	// Save the config in the object
	$this-&gt;_config = $config;

	$this-&gt;_session = Session::instance($this-&gt;_config[&#039;session_type&#039;]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check_password"><small>abstract public</small>  check_password()<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract public function check_password($password);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_user"><small>public</small>  get_user([ <small>mixed</small> <span class="param" title="Default value to return if the user is currently not logged in.">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Gets the currently logged in user from the session.
Returns NULL if no user is currently logged in.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value to return if the user is currently not logged in.</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_user($default = NULL)
{
	return $this-&gt;_session-&gt;get($this-&gt;_config[&#039;session_key&#039;], $default);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hash"><small>public</small>  hash(<small>string</small> <span class="param" title="String to hash">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Perform a hmac hash, using the configured method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to hash</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function hash($str)
{
	if ( ! $this-&gt;_config[&#039;hash_key&#039;])
		throw new Kohana_Exception(&#039;A valid hash key must be set in your auth config.&#039;);

	return hash_hmac($this-&gt;_config[&#039;hash_method&#039;], $str, $this-&gt;_config[&#039;hash_key&#039;]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hash_password"><small>public</small>  hash_password(<small>string</small> <span class="param" title="Plaintext password">$password</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Creates a hashed hmac password from a plaintext password. This
method is deprecated, <a href="#hash">Auth::hash</a> should be used instead.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $password</strong> <small>required</small> - Plaintext password</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - </li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function hash_password($password)
{
	return $this-&gt;hash($password);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance()<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Singleton pattern</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Auth</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance()
{
	if ( ! isset(Auth::$_instance))
	{
		// Load the configuration for this type
		$config = Kohana::$config-&gt;load(&#039;auth&#039;);

		if ( ! $type = $config-&gt;get(&#039;driver&#039;))
		{
			$type = &#039;file&#039;;
		}

		// Set the session class name
		$class = &#039;Auth_&#039;.ucfirst($type);

		// Create a new session instance
		Auth::$_instance = new $class($config);
	}

	return Auth::$_instance;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="logged_in"><small>public</small>  logged_in([ <small>string</small> <span class="param" title="Role name">$role</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Check if there is an active session. Optionally allows checking for a
specific role.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $role</strong> <small> = <small>NULL</small></small> - Role name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function logged_in($role = NULL)
{
	return ($this-&gt;get_user() !== NULL);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="login"><small>public</small>  login(<small>string</small> <span class="param" title="Username to log in">$username</span> , <small>string</small> <span class="param" title="Password to check against">$password</span> [, <small>boolean</small> <span class="param" title="Enable autologin">$remember</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Attempt to log in a user by using an ORM object and plain-text password.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $username</strong> <small>required</small> - Username to log in</li>
<li>
 <span class="blue">string </span><strong> $password</strong> <small>required</small> - Password to check against</li>
<li>
 <span class="blue">boolean </span><strong> $remember</strong> <small> = <small>bool</small> FALSE</small> - Enable autologin</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function login($username, $password, $remember = FALSE)
{
	if (empty($password))
		return FALSE;

	return $this-&gt;_login($username, $password, $remember);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="logout"><small>public</small>  logout([ <small>boolean</small> <span class="param" title="Completely destroy the session">$destroy</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Remove all tokens for user">$logout_all</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'><p>Log out a user by removing the related session variables.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $destroy</strong> <small> = <small>bool</small> FALSE</small> - Completely destroy the session</li>
<li>
 <span class="blue">boolean </span><strong> $logout_all</strong> <small> = <small>bool</small> FALSE</small> - Remove all tokens for user</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function logout($destroy = FALSE, $logout_all = FALSE)
{
	if ($destroy === TRUE)
	{
		// Destroy the session completely
		$this-&gt;_session-&gt;destroy();
	}
	else
	{
		// Remove the user from the session
		$this-&gt;_session-&gt;delete($this-&gt;_config[&#039;session_key&#039;]);

		// Regenerate session_id
		$this-&gt;_session-&gt;regenerate();
	}

	// Double check
	return ! $this-&gt;logged_in();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="password"><small>abstract public</small>  password()<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract public function password($username);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_login"><small>abstract protected</small>  _login()<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _login($username, $password, $remember);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="complete_login"><small>protected</small>  complete_login()<small> (defined in <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function complete_login($user)
{
	// Regenerate session_id
	$this-&gt;_session-&gt;regenerate();

	// Store username in session
	$this-&gt;_session-&gt;set($this-&gt;_config[&#039;session_key&#039;], $user);

	return TRUE;
}</code>
</pre>
</div>
</div>
</div>