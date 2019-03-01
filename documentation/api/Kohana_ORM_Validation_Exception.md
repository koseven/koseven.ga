---
layout: api
class: Kohana_ORM_Validation_Exception
---
<h1>Kohana_ORM_Validation_Exception</h1>
extends <a href='/documentation/api/Kohana_Exception'>Kohana_Exception</a>
<br />
extends <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>
<br />
extends <a href='/documentation/api/Exception'>Exception</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Throwable'>Throwable</a></small>
</p>
<p>
<i><p>ORM Validation exceptions.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/ORM</dd>
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
<a href="#property-error_view">$error_view</a>
</li>
<li>
<a href="#property-error_view_content_type">$error_view_content_type</a>
</li>
<li>
<a href="#property-php_errors">$php_errors</a>
</li>
<li>
<a href="#property-_alias">$_alias</a>
</li>
<li>
<a href="#property-_objects">$_objects</a>
</li>
<li>
<a href="#property-code">$code</a>
</li>
<li>
<a href="#property-file">$file</a>
</li>
<li>
<a href="#property-line">$line</a>
</li>
<li>
<a href="#property-message">$message</a>
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
<a href="#add_object">add_object()</a>
</li>
<li>
<a href="#alias">alias()</a>
</li>
<li>
<a href="#errors">errors()</a>
</li>
<li>
<a href="#merge">merge()</a>
</li>
<li>
<a href="#objects">objects()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#_handler">_handler()</a>
</li>
<li>
<a href="#handler">handler()</a>
</li>
<li>
<a href="#log">log()</a>
</li>
<li>
<a href="#response">response()</a>
</li>
<li>
<a href="#text">text()</a>
</li>
<li>
<a href="#__wakeup">__wakeup()</a>
</li>
<li>
<a href="#getCode">getCode()</a>
</li>
<li>
<a href="#getFile">getFile()</a>
</li>
<li>
<a href="#getLine">getLine()</a>
</li>
<li>
<a href="#getMessage">getMessage()</a>
</li>
<li>
<a href="#getPrevious">getPrevious()</a>
</li>
<li>
<a href="#getTrace">getTrace()</a>
</li>
<li>
<a href="#getTraceAsString">getTraceAsString()</a>
</li>
<li>
<a href="#generate_errors">generate_errors()</a>
</li>
<li>
<a href="#__clone">__clone()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-error_view'><small>public static</small>  <span class='blue'>string</span> $error_view</h4>
</dt>
<dd>
 <p>error rendering view</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(12)</span> "kohana/error"</pre></dd>
<dt>
<h4 id='property-error_view_content_type'><small>public static</small>  <span class='blue'>string</span> $error_view_content_type</h4>
</dt>
<dd>
 <p>error view content type</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(9)</span> "text/html"</pre></dd>
<dt>
<h4 id='property-php_errors'><small>public static</small>  <span class='blue'>array</span> $php_errors</h4>
</dt>
<dd>
 <p>PHP error code => human readable name</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(9)</span> <span>(
    1 => <small>string</small><span>(11)</span> "Fatal Error"
    256 => <small>string</small><span>(10)</span> "User Error"
    4 => <small>string</small><span>(11)</span> "Parse Error"
    2 => <small>string</small><span>(7)</span> "Warning"
    512 => <small>string</small><span>(12)</span> "User Warning"
    2048 => <small>string</small><span>(6)</span> "Strict"
    8 => <small>string</small><span>(6)</span> "Notice"
    4096 => <small>string</small><span>(17)</span> "Recoverable Error"
    8192 => <small>string</small><span>(10)</span> "Deprecated"
)</span></pre></dd>
<dt>
<h4 id='property-_alias'><small>protected</small>  <span class='blue'>string</span> $_alias</h4>
</dt>
<dd>
 <p>The alias of the main ORM model this exception was created for</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_objects'><small>protected</small>  <span class='blue'>array</span> $_objects</h4>
</dt>
<dd>
 <p>Array of validation objects</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-code'><small>protected</small>  <span class='blue'></span> $code</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
<dt>
<h4 id='property-file'><small>protected</small>  <span class='blue'></span> $file</h4>
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
<h4 id='property-line'><small>protected</small>  <span class='blue'></span> $line</h4>
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
<h4 id='property-message'><small>protected</small>  <span class='blue'></span> $message</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="The alias to use when looking for error messages">$alias</span> , <small>Validation</small> <span class="param" title="The Validation object of the model">$object</span> [, <small>string</small> <span class="param" title="The error message">$message</span> <small>= <small>string</small><span>(24)</span> "Failed to validate array"</small> , <small>array</small> <span class="param" title="The array of values for the error message">$values</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="The error code for the exception">$code</span> <small>= <small>integer</small> 0</small> , $previous <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Constructs a new exception for the specified model</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - The alias to use when looking for error messages</li>
<li>
 <span class="blue">Validation </span><strong> $object</strong> <small>required</small> - The Validation object of the model</li>
<li>
 <span class="blue">string </span><strong> $message</strong> <small> = <small>string</small><span>(24)</span> "Failed to validate array"</small> - The error message</li>
<li>
 <span class="blue">array </span><strong> $values</strong> <small> = <small>NULL</small></small> - The array of values for the error message</li>
<li>
 <span class="blue">integer </span><strong> $code</strong> <small> = <small>integer</small> 0</small> - The error code for the exception</li>
<li>
 <span class="blue">unknown </span><strong> $previous</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($alias, Validation $object, $message = &#039;Failed to validate array&#039;, array $values = NULL, $code = 0, Exception $previous = NULL)
{
	$this-&gt;_alias = $alias;
	$this-&gt;_objects[&#039;_object&#039;] = $object;
	$this-&gt;_objects[&#039;_has_many&#039;] = FALSE;

	parent::__construct($message, $values, $code, $previous);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="add_object"><small>public</small>  add_object(<small>string</small> <span class="param" title="The relationship alias from the model">$alias</span> , <small>Validation</small> <span class="param" title="The Validation object to merge">$object</span> [, <small>mixed</small> <span class="param" title="The array key to use if this exception can be merged multiple times">$has_many</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Adds a Validation object to this exception</p>

<pre><code>// The following will add a validation object for a profile model
// inside the exception for a user model.
$e-&gt;add_object('profile', $validation);
// The errors array will now look something like this
// array
// (
//   'username' =&gt; 'This field is required',
//   'profile'  =&gt; array
//   (
//     'first_name' =&gt; 'This field is required',
//   ),
// );
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - The relationship alias from the model</li>
<li>
 <span class="blue">Validation </span><strong> $object</strong> <small>required</small> - The Validation object to merge</li>
<li>
 <span class="blue">mixed </span><strong> $has_many</strong> <small> = <small>bool</small> FALSE</small> - The array key to use if this exception can be merged multiple times</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM_Validation_Exception</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function add_object($alias, Validation $object, $has_many = FALSE)
{
	// We will need this when generating errors
	$this-&gt;_objects[$alias][&#039;_has_many&#039;] = ($has_many !== FALSE);

	if ($has_many === TRUE)
	{
		// This is most likely a has_many relationship
		$this-&gt;_objects[$alias][][&#039;_object&#039;] = $object;
	}
	elseif ($has_many)
	{
		// This is most likely a has_many relationship
		$this-&gt;_objects[$alias][$has_many][&#039;_object&#039;] = $object;
	}
	else
	{
		$this-&gt;_objects[$alias][&#039;_object&#039;] = $object;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="alias"><small>public</small>  alias()<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Returns the protected _alias property from this exception</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function alias()
{
	return $this-&gt;_alias;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="errors"><small>public</small>  errors([ <small>string</small> <span class="param" title="Directory to load error messages from">$directory</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Translate the message">$translate</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Returns a merged array of the errors from all the Validation objects in this exception</p>

<pre><code>// Will load Model_User errors from messages/orm-validation/user.php
$e-&gt;errors('orm-validation');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>NULL</small></small> - Directory to load error messages from</li>
<li>
 <span class="blue">mixed </span><strong> $translate</strong> <small> = <small>bool</small> TRUE</small> - Translate the message</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>See - <a href="/index.php/">generate_errors()</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function errors($directory = NULL, $translate = TRUE)
{
	return $this-&gt;generate_errors($this-&gt;_alias, $this-&gt;_objects, $directory, $translate);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="merge"><small>public</small>  merge(<small>ORM_Validation_Exception</small> <span class="param" title="The exception to merge">$object</span> [, <small>mixed</small> <span class="param" title="The array key to use if this exception can be merged multiple times">$has_many</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Merges an ORM_Validation_Exception object into the current exception
Useful when you want to combine errors into one array</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">ORM_Validation_Exception </span><strong> $object</strong> <small>required</small> - The exception to merge</li>
<li>
 <span class="blue">mixed </span><strong> $has_many</strong> <small> = <small>bool</small> FALSE</small> - The array key to use if this exception can be merged multiple times</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM_Validation_Exception</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function merge(ORM_Validation_Exception $object, $has_many = FALSE)
{
	$alias = $object-&gt;alias();

	// We will need this when generating errors
	$this-&gt;_objects[$alias][&#039;_has_many&#039;] = ($has_many !== FALSE);

	if ($has_many === TRUE)
	{
		// This is most likely a has_many relationship
		$this-&gt;_objects[$alias][] = $object-&gt;objects();
	}
	elseif ($has_many)
	{
		// This is most likely a has_many relationship
		$this-&gt;_objects[$alias][$has_many] = $object-&gt;objects();
	}
	else
	{
		$this-&gt;_objects[$alias] = $object-&gt;objects();
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="objects"><small>public</small>  objects()<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Returns the protected _objects property from this exception</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function objects()
{
	return $this-&gt;_objects;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Magic object-to-string method.</p>

<pre><code>echo $exception;
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#text">Kohana_Exception::text</a></li>
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
    return Kohana_Exception::text($this);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_handler"><small>public static</small>  _handler(<small>Exception</small> <span class="param" title="$e">$e</span> )<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Exception handler, logs the exception and generates a Response object
for display.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Exception </span><strong> $e</strong> <small>required</small> - $e</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#response">Kohana_Exception::response</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function _handler($e)
{
    try
    {
        // Log the exception
        Kohana_Exception::log($e);

        // Generate the response
        $response = Kohana_Exception::response($e);

        return $response;
    }
    catch (Exception $e)
    {
        /**
         * Things are going *really* badly for us, We now have no choice
         * but to bail. Hard.
         */
        // Clean the output buffer if one exists
        ob_get_level() AND ob_clean();

        // Set the Status code to 500, and Content-Type to text/plain.
        header(&#039;Content-Type: text/plain; charset=&#039;.Kohana::$charset, TRUE, 500);

        echo Kohana_Exception::text($e);

        exit(1);
    }
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="handler"><small>public static</small>  handler(<small>Exception</small> <span class="param" title="$e">$e</span> )<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Inline exception handler, displays the error message, source of the
exception, and the stack trace of the error.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Exception </span><strong> $e</strong> <small>required</small> - $e</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#response">Kohana_Exception::response</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function handler($e)
{
    $response = Kohana_Exception::_handler($e);

    // Send the response to the browser
    echo $response-&gt;send_headers()-&gt;body();

    exit(1);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="log"><small>public static</small>  log(<small>Exception</small> <span class="param" title="$e">$e</span> [, <small>int</small> <span class="param" title="$level">$level</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Logs an exception.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Exception </span><strong> $e</strong> <small>required</small> - $e</li>
<li>
 <span class="blue">int </span><strong> $level</strong> <small> = <small>integer</small> 1</small> - $level</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#text">Kohana_Exception::text</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function log($e, $level = Log::EMERGENCY)
{
    if (is_object(Kohana::$log))
    {
        // Create a text version of the exception
        $error = Kohana_Exception::text($e);

        // Add this exception to the log
        Kohana::$log-&gt;add($level, $error, NULL, [&#039;exception&#039; =&gt; $e]);

        // Make sure the logs are written
        Kohana::$log-&gt;write();
    }
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="response"><small>public static</small>  response(<small>Exception</small> <span class="param" title="$e">$e</span> )<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Get a Response object representing the exception</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Exception </span><strong> $e</strong> <small>required</small> - $e</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#text">Kohana_Exception::text</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function response($e)
{
    if ( ! $e instanceof Exception AND ! $e instanceof Throwable )
        throw InvalidArgumentException;

    try
    {
        // Get the exception information
        $class   = get_class($e);
        $code    = $e-&gt;getCode();
        $message = $e-&gt;getMessage();
        $file    = $e-&gt;getFile();
        $line    = $e-&gt;getLine();
        $trace   = $e-&gt;getTrace();

        /**
         * HTTP_Exceptions are constructed in the HTTP_Exception::factory()
         * method. We need to remove that entry from the trace and overwrite
         * the variables from above.
         */
        if ($e instanceof HTTP_Exception AND $trace[0][&#039;function&#039;] == &#039;factory&#039;)
        {
            extract(array_shift($trace));
        }


        if ($e instanceof ErrorException)
        {
            /**
             * If XDebug is installed, and this is a fatal error,
             * use XDebug to generate the stack trace
             */
            if (function_exists(&#039;xdebug_get_function_stack&#039;) AND $code == E_ERROR)
            {
                $trace = array_slice(array_reverse(xdebug_get_function_stack()), 4);

                foreach ($trace as &amp; $frame)
                {
                    /**
                     * XDebug pre 2.1.1 doesn&#039;t currently set the call type key
                     * http://bugs.xdebug.org/view.php?id=695
                     */
                    if ( ! isset($frame[&#039;type&#039;]))
                    {
                        $frame[&#039;type&#039;] = &#039;??&#039;;
                    }

                    // Xdebug returns the words &#039;dynamic&#039; and &#039;static&#039; instead of using &#039;-&gt;&#039; and &#039;::&#039; symbols
                    if (&#039;dynamic&#039; === $frame[&#039;type&#039;])
                    {
                        $frame[&#039;type&#039;] = &#039;-&gt;&#039;;
                    }
                    elseif (&#039;static&#039; === $frame[&#039;type&#039;])
                    {
                        $frame[&#039;type&#039;] = &#039;::&#039;;
                    }

                    // XDebug also has a different name for the parameters array
                    if (isset($frame[&#039;params&#039;]) AND ! isset($frame[&#039;args&#039;]))
                    {
                        $frame[&#039;args&#039;] = $frame[&#039;params&#039;];
                    }
                }
            }

            if (isset(Kohana_Exception::$php_errors[$code]))
            {
                // Use the human-readable error name
                $code = Kohana_Exception::$php_errors[$code];
            }
        }

        /**
         * The stack trace becomes unmanageable inside PHPUnit.
         *
         * The error view ends up several GB in size, taking
         * serveral minutes to render.
         */
        if (
            defined(&#039;PHPUnit_MAIN_METHOD&#039;)
            OR
            defined(&#039;PHPUNIT_COMPOSER_INSTALL&#039;)
            OR
            defined(&#039;__PHPUNIT_PHAR__&#039;)
        )
        {
            $trace = array_slice($trace, 0, 2);
        }

        // Instantiate the error view.
        $view = View::factory(Kohana_Exception::$error_view, get_defined_vars());

        // Prepare the response object.
        $response = Response::factory();

        // Set the response status
        $response-&gt;status(($e instanceof HTTP_Exception) ? $e-&gt;getCode() : 500);

        // Set the response headers
        $response-&gt;headers(&#039;Content-Type&#039;, Kohana_Exception::$error_view_content_type.&#039;; charset=&#039;.Kohana::$charset);

        // Set the response body
        $response-&gt;body($view-&gt;render());
    }
    catch (Exception $e)
    {
        /**
         * Things are going badly for us, Lets try to keep things under control by
         * generating a simpler response object.
         */
        $response = Response::factory();
        $response-&gt;status(500);
        $response-&gt;headers(&#039;Content-Type&#039;, &#039;text/plain&#039;);
        $response-&gt;body(Kohana_Exception::text($e));
    }

    return $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="text"><small>public static</small>  text(<small>Exception</small> <span class="param" title="$e">$e</span> )<small> (defined in <a href='/documentation/api/Kohana_Kohana_Exception'>Kohana_Kohana_Exception</a>)</small></h3>
<div class='description'><p>Get a single line of text representing the exception:</p>

<p>Error [ Code ]: Message ~ File [ Line ]</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Exception </span><strong> $e</strong> <small>required</small> - $e</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function text($e)
{
    if ( ! $e instanceof Exception AND ! $e instanceof Throwable )
        throw InvalidArgumentException;

    return sprintf(&#039;%s [ %s ]: %s ~ %s [ %d ]&#039;,
        get_class($e), $e-&gt;getCode(), strip_tags($e-&gt;getMessage()), Debug::path($e-&gt;getFile()), $e-&gt;getLine());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__wakeup"><small>public</small>  __wakeup()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getCode"><small>final public</small>  getCode()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getFile"><small>final public</small>  getFile()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getLine"><small>final public</small>  getLine()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getMessage"><small>final public</small>  getMessage()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getPrevious"><small>final public</small>  getPrevious()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getTrace"><small>final public</small>  getTrace()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getTraceAsString"><small>final public</small>  getTraceAsString()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="generate_errors"><small>protected</small>  generate_errors(<small>string</small> <span class="param" title="Alias to use for messages file">$alias</span> , <small>array</small> <span class="param" title="Array of Validation objects to get errors from">$array</span> , <small>string</small> <span class="param" title="Directory to load error messages from">$directory</span> , <small>mixed</small> <span class="param" title="Translate the message">$translate</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM_Validation_Exception'>Kohana_ORM_Validation_Exception</a>)</small></h3>
<div class='description'><p>Recursive method to fetch all the errors in this exception</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias to use for messages file</li>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array of Validation objects to get errors from</li>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small>required</small> - Directory to load error messages from</li>
<li>
 <span class="blue">mixed </span><strong> $translate</strong> <small>required</small> - Translate the message</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function generate_errors($alias, array $array, $directory, $translate)
{
	$errors = [];

	foreach ($array as $key =&gt; $object)
	{
		if (is_array($object))
		{
			$errors[$key] = ($key === &#039;_external&#039;)
				// Search for errors in $alias/_external.php
				? $this-&gt;generate_errors($alias.&#039;/&#039;.$key, $object, $directory, $translate)
				// Regular models get their own file not nested within $alias
				: $this-&gt;generate_errors($key, $object, $directory, $translate);
		}
		elseif ($object instanceof Validation)
		{
			if ($directory === NULL)
			{
				// Return the raw errors
				$file = NULL;
			}
			else
			{
				$file = trim($directory.&#039;/&#039;.$alias, &#039;/&#039;);
			}

			// Merge in this array of errors
			$errors += $object-&gt;errors($file, $translate);
		}
	}

	return $errors;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__clone"><small>final private</small>  __clone()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>
</div>