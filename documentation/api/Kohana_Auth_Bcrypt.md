---
layout: api
class: Kohana_Auth_Bcrypt
---
<h1>Kohana_Auth_Bcrypt</h1>
extends <a href='/documentation/api/Auth'>Auth</a>
<br />
extends <a href='/documentation/api/Kohana_Auth'>Kohana_Auth</a>
<br />
<p>
<i><p>Bcrypt Auth driver.</p>
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
<dd>http://kohanaframework.org/license</dd>
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
<a href="#__construct">__construct()</a>
</li>
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
<a href="#hash">hash()</a>
</li>
<li>
<a href="#logout">logout()</a>
</li>
<li>
<a href="#password">password()</a>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>array</small> <span class="param" title="Config Options">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
    if ( ! isset($config[&#039;cost&#039;]) OR ! is_numeric($config[&#039;cost&#039;]) OR $config[&#039;cost&#039;] &lt; 10)
    {
        throw new Kohana_Exception(__CLASS__ . &#039; cost parameter must be set and must be integer &gt;= 10&#039;);
    }
    parent::__construct($config);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_login"><small>public</small>  auto_login()<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
            if ($token-&gt;user_agent === hash(&#039;sha256&#039;, Request::$user_agent))
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
<h3 id="check_password"><small>public</small>  check_password(<small>string</small> <span class="param" title="$password">$password</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
    {
        return false;
    }

    return password_verify($password, $user-&gt;password);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="force_login"><small>public</small>  force_login(<small>mixed</small> <span class="param" title="Username string, or user ORM object">$user</span> [, <small>boolean</small> <span class="param" title="Mark the session as forced">$mark_session_as_forced</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
<h3 id="get_user"><small>public</small>  get_user([ <small>mixed</small> <span class="param" title="To return in case user isn't logged in">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
<h3 id="hash"><small>public</small>  hash()<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
<div class='description'></div>
<h4>Tags</h4>
<ul class='tags'>
<li>Inheritdoc - </li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function hash($str)
{
    return password_hash($str, PASSWORD_BCRYPT, [
        &#039;cost&#039; =&gt; $this-&gt;_config[&#039;cost&#039;]
    ]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="logout"><small>public</small>  logout([ <small>boolean</small> <span class="param" title="Completely destroy the session">$destroy</span> <small>= <small>bool</small> FALSE</small> , <small>boolean</small> <span class="param" title="Remove all tokens for user">$logout_all</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
            $tokens = ORM::factory(&#039;User_Token&#039;)-&gt;where(&#039;user_id&#039;, &#039;=&#039;, $token-&gt;user_id)-&gt;find_all();

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
<h3 id="password"><small>public</small>  password(<small>mixed</small> <span class="param" title="Username string, or user ORM object">$user</span> )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
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
<h3 id="_login"><small>protected</small>  _login(<small>string</small> <span class="param" title="Username">$username</span> , <small>string</small> <span class="param" title="Password">$password</span> [, <small>bool</small> <span class="param" title="Remembers login">$remember</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Auth_Bcrypt'>Kohana_Auth_Bcrypt</a>)</small></h3>
<div class='description'><p>Performs login on user</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $username</strong> <small>required</small> - Username</li>
<li>
 <span class="blue">string </span><strong> $password</strong> <small>required</small> - Password</li>
<li>
 <span class="blue">bool </span><strong> $remember</strong> <small> = <small>bool</small> FALSE</small> - Remembers login</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _login($username, $password, $remember = FALSE)
{
    if ( ! is_string($username) OR ! is_string($password) OR ! is_bool($remember))
    {
        throw new Kohana_Exception(&#039;Username and password must be strings, remember must be bool&#039;);
    }

    // Load the user
    $user = ORM::factory(&#039;User&#039;);
    $user-&gt;where($user-&gt;unique_key($username), &#039;=&#039;, $username)-&gt;find();

    if ($user-&gt;loaded() AND $user-&gt;has(&#039;roles&#039;, ORM::factory(&#039;Role&#039;, [&#039;name&#039; =&gt; &#039;login&#039;])) AND password_verify($password, $user-&gt;password))
    {
        if ($remember === TRUE)
        {
            // Token data
            $data = [
                &#039;user_id&#039; =&gt; $user-&gt;pk(),
                &#039;expires&#039; =&gt; time() + $this-&gt;_config[&#039;lifetime&#039;],
                &#039;user_agent&#039; =&gt; hash(&#039;sha256&#039;, Request::$user_agent),
            ];

            // Create a new autologin token
            $token = ORM::factory(&#039;User_Token&#039;)
                    -&gt;values($data)
                    -&gt;create();

            // Set the autologin cookie
            Cookie::set(&#039;authautologin&#039;, $token-&gt;token, $this-&gt;_config[&#039;lifetime&#039;]);
        }

        $this-&gt;complete_login($user);
        $user-&gt;complete_login();

        if (password_needs_rehash($user-&gt;password, PASSWORD_BCRYPT, [&#039;cost&#039; =&gt; $this-&gt;_config[&#039;cost&#039;]]))
        {
            $user-&gt;password = $password;
            $user-&gt;save();
        }

        return TRUE;
    }
    
    return FALSE;
}</code>
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