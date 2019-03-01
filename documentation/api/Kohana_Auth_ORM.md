---
layout: api
class: Kohana_Auth_ORM
---
<h1>Kohana_Auth_ORM</h1>
extends <a href='/documentation/api/Auth'>Auth</a>
<br />
extends <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>
<br />
<p>
<i><p>ORM Auth driver.</p>
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
<a href="#auto_login">auto_login()</a>
</li>
<li>
<a href="#check_password">check_password()</a>
</li>
<li>
<a href="#force_login">force_login()</a>
</li>
<li>
<a href="#get_user">get_user()</a>
</li>
<li>
<a href="#logged_in">logged_in()</a>
</li>
<li>
<a href="#logout">logout()</a>
</li>
<li>
<a href="#password">password()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
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
<a href="#login">login()</a>
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
<h3 id="auto_login"><small>public</small>  auto_login()<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Logs a user in, based on the authautologin cookie.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function auto_login()
{
	if ($token = Cookie::get(&#039;authautologin&#039;))
	{
		// Load the token and user
		$token = ORM::factory(&#039;User_Token&#039;, [&#039;token&#039; =&gt; $token]);

		if ($token-&gt;loaded() AND $token-&gt;user-&gt;loaded())
		{
			if ($token-&gt;user_agent === sha1(Request::$user_agent))
			{
				// Save the token to create a new unique token
				$token-&gt;save();

				// Set the new token
				Cookie::set(&#039;authautologin&#039;, $token-&gt;token, $token-&gt;expires - time());

				// Complete the login with the found data
				$this-&gt;complete_login($token-&gt;user);

				// Automatic login was successful
				return $token-&gt;user;
			}

			// Token is invalid
			$token-&gt;delete();
		}
	}

	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check_password"><small>public</small>  check_password(<small>string</small> <span class="param" title="$password">$password</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Compare password with original (hashed). Works for current (logged in) user</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $password</strong> <small>required</small> - $password</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function check_password($password)
{
	$user = $this-&gt;get_user();

	if ( ! $user)
		return FALSE;

	return ($this-&gt;hash($password) === $user-&gt;password);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="force_login"><small>public</small>  force_login(<small>mixed</small> <span class="param" title="Username string, or user ORM object">$user</span> [, <small>boolean</small> <span class="param" title="Mark the session as forced">$mark_session_as_forced</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Forces a user to be logged in, without specifying a password.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $user</strong> <small>required</small> - Username string, or user ORM object</li>
<li>
 <span class="blue">boolean </span><strong> $mark_session_as_forced</strong> <small> = <small>bool</small> FALSE</small> - Mark the session as forced</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function force_login($user, $mark_session_as_forced = FALSE)
{
	if ( ! is_object($user))
	{
		$username = $user;

		// Load the user
		$user = ORM::factory(&#039;User&#039;);
		$user-&gt;where($user-&gt;unique_key($username), &#039;=&#039;, $username)-&gt;find();
	}

	if ($mark_session_as_forced === TRUE)
	{
		// Mark the session as forced, to prevent users from changing account information
		$this-&gt;_session-&gt;set(&#039;auth_forced&#039;, TRUE);
	}

	// Run the standard completion
	$this-&gt;complete_login($user);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_user"><small>public</small>  get_user([ <small>mixed</small> <span class="param" title="To return in case user isn't logged in">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Gets the currently logged in user from the session (with auto_login check).
Returns $default if no user is currently logged in.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - To return in case user isn't logged in</li>
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
	$user = parent::get_user($default);

	if ($user === $default)
	{
		// check for &quot;remembered&quot; login
		if (($user = $this-&gt;auto_login()) === FALSE)
			return $default;
	}

	return $user;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="logged_in"><small>public</small>  logged_in([ <small>mixed</small> <span class="param" title="Role name string, role ORM object, or array with role names">$role</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Checks if a session is active.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $role</strong> <small> = <small>NULL</small></small> - Role name string, role ORM object, or array with role names</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function logged_in($role = NULL)
{
	// Get the user from the session
	$user = $this-&gt;get_user();

	if ( ! $user)
		return FALSE;

	if ($user instanceof Model_User AND $user-&gt;loaded())
	{
		// If we don&#039;t have a roll no further checking is needed
		if ( ! $role)
			return TRUE;

		if (is_array($role))
		{
			// Get all the roles
			$roles = ORM::factory(&#039;Role&#039;)
						-&gt;where(&#039;name&#039;, &#039;IN&#039;, $role)
						-&gt;find_all()
						-&gt;as_array(NULL, &#039;id&#039;);

			// Make sure all the roles are valid ones
			if (count($roles) !== count($role))
				return FALSE;
		}
		else
		{
			if ( ! is_object($role))
			{
				// Load the role
				$roles = ORM::factory(&#039;Role&#039;, [&#039;name&#039; =&gt; $role]);

				if ( ! $roles-&gt;loaded())
					return FALSE;
			}
			else
			{
				$roles = $role;
			}
		}

		return $user-&gt;has(&#039;roles&#039;, $roles);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="logout"><small>public</small>  logout([ <small>boolean</small> <span class="param" title="Completely destroy the session">$destroy</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Remove all tokens for user">$logout_all</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Log a user out and remove any autologin cookies.</p>
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
	// Set by force_login()
	$this-&gt;_session-&gt;delete(&#039;auth_forced&#039;);

	if ($token = Cookie::get(&#039;authautologin&#039;))
	{
		// Delete the autologin cookie to prevent re-login
		Cookie::delete(&#039;authautologin&#039;);

		// Clear the autologin token from the database
		$token = ORM::factory(&#039;User_Token&#039;, [&#039;token&#039; =&gt; $token]);

		if ($token-&gt;loaded() AND $logout_all)
		{
			// Delete all user tokens. This isn&#039;t the most elegant solution but does the job
			$tokens = ORM::factory(&#039;User_Token&#039;)-&gt;where(&#039;user_id&#039;,&#039;=&#039;,$token-&gt;user_id)-&gt;find_all();
			
			foreach ($tokens as $_token)
			{
				$_token-&gt;delete();
			}
		}
		elseif ($token-&gt;loaded())
		{
			$token-&gt;delete();
		}
	}

	return parent::logout($destroy);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="password"><small>public</small>  password(<small>mixed</small> <span class="param" title="Username string, or user ORM object">$user</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Get the stored password for a username.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $user</strong> <small>required</small> - Username string, or user ORM object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function password($user)
{
	if ( ! is_object($user))
	{
		$username = $user;

		// Load the user
		$user = ORM::factory(&#039;User&#039;);
		$user-&gt;where($user-&gt;unique_key($username), &#039;=&#039;, $username)-&gt;find();
	}

	return $user-&gt;password;
}</code>
</pre>
</div>
</div>

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
<h3 id="_login"><small>protected</small>  _login(<small>string</small> <span class="param" title="Name">$user</span> , <small>string</small> <span class="param" title="$password">$password</span> , <small>boolean</small> <span class="param" title="Enable autologin">$remember</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Logs a user in.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $user</strong> <small>required</small> - Name</li>
<li>
 <span class="blue">string </span><strong> $password</strong> <small>required</small> - $password</li>
<li>
 <span class="blue">boolean </span><strong> $remember</strong> <small>required</small> - Enable autologin</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _login($user, $password, $remember)
{
	if ( ! is_object($user))
	{
		$username = $user;

		// Load the user
		$user = ORM::factory(&#039;User&#039;);
		$user-&gt;where($user-&gt;unique_key($username), &#039;=&#039;, $username)-&gt;find();
	}

	if (is_string($password))
	{
		// Create a hashed password
		$password = $this-&gt;hash($password);
	}

	// If the passwords match, perform a login
	if ($user-&gt;has(&#039;roles&#039;, ORM::factory(&#039;Role&#039;, [&#039;name&#039; =&gt; &#039;login&#039;])) AND $user-&gt;password === $password)
	{
		if ($remember === TRUE)
		{
			// Token data
			$data = [
				&#039;user_id&#039;    =&gt; $user-&gt;pk(),
				&#039;expires&#039;    =&gt; time() + $this-&gt;_config[&#039;lifetime&#039;],
				&#039;user_agent&#039; =&gt; sha1(Request::$user_agent),
			];

			// Create a new autologin token
			$token = ORM::factory(&#039;User_Token&#039;)
						-&gt;values($data)
						-&gt;create();

			// Set the autologin cookie
			Cookie::set(&#039;authautologin&#039;, $token-&gt;token, $this-&gt;_config[&#039;lifetime&#039;]);
		}

		// Finish the login
		$this-&gt;complete_login($user);

		return TRUE;
	}

	// Login failed
	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="complete_login"><small>protected</small>  complete_login(<small>object</small> <span class="param" title="User ORM object">$user</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_ORM'>Kohana_Auth_ORM</a>)</small></h3>
<div class='description'><p>Complete the login for a user by incrementing the logins and setting
session data: user_id, username, roles.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">object </span><strong> $user</strong> <small>required</small> - User ORM object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function complete_login($user)
{
	$user-&gt;complete_login();

	return parent::complete_login($user);
}</code>
</pre>
</div>
</div>
</div>