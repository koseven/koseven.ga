---
layout: api
class: HTTP_Exception_Expected
---
<h1>HTTP_Exception_Expected</h1>
extends <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a>
<br />
extends <a href='/documentation/api/HTTP_Exception'>HTTP_Exception</a>
<br />
extends <a href='/documentation/api/Kohana_HTTP_Exception'>Kohana_HTTP_Exception</a>
<br />
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
<i><p>"Expected" HTTP exception class. Used for all <a href="/index.php/">HTTP_Exception</a>'s where a standard
Kohana error page should never be shown.</p>

<p>Eg <a href="/index.php/">HTTP_Exception_301</a>, <a href="/index.php/">HTTP_Exception_302</a> etc</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Exceptions</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a></p>
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
<a href="#property-error_view">$error_view</a>
</li>
<li>
<a href="#property-error_view_content_type">$error_view_content_type</a>
</li>
<li>
<a href="#property-php_errors">$php_errors</a>
</li>
<li>
<a href="#property-_code">$_code</a>
</li>
<li>
<a href="#property-_request">$_request</a>
</li>
<li>
<a href="#property-_response">$_response</a>
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
<a href="#check">check()</a>
</li>
<li>
<a href="#get_response">get_response()</a>
</li>
<li>
<a href="#headers">headers()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#request">request()</a>
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
<h4 id='property-_code'><small>protected</small>  <span class='blue'>int</span> $_code</h4>
</dt>
<dd>
 <p>http status code</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
<dt>
<h4 id='property-_request'><small>protected</small>  <span class='blue'>Request</span> $_request</h4>
</dt>
<dd>
 <p>Request instance that triggered this exception.</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_response'><small>protected</small>  <span class='blue'>Response</span> $_response</h4>
</dt>
<dd>
 <p>Response Object</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
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
<h3 id="__construct"><small>public</small>  __construct([ <small>string</small> <span class="param" title="Status message, custom content to display with error">$message</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Translation variables">$variables</span> <small>= <small>NULL</small></small> , $previous <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a>)</small></h3>
<div class='description'><p>Creates a new translated exception.</p>

<pre><code>throw new Kohana_Exception('Something went terrible wrong, :user',
    array(':user' =&gt; $user));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $message</strong> <small> = <small>NULL</small></small> - Status message, custom content to display with error</li>
<li>
 <span class="blue">array </span><strong> $variables</strong> <small> = <small>NULL</small></small> - Translation variables</li>
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
<code class="language-php">public function __construct($message = NULL, array $variables = NULL, Exception $previous = NULL)
{
	parent::__construct($message, $variables, $previous);

	// Prepare our response object and set the correct status code.
	$this-&gt;_response = Response::factory()
		-&gt;status($this-&gt;_code);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check"><small>public</small>  check()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a>)</small></h3>
<div class='description'><p>Validate this exception contains everything needed to continue.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function check()
{
	return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_response"><small>public</small>  get_response()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a>)</small></h3>
<div class='description'><p>Generate a Response for the current Exception</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#response">Kohana_Exception::response()</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_response()
{
	$this-&gt;check();

	return $this-&gt;_response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="headers"><small>public</small>  headers([ <small>mixed</small> <span class="param" title="$key">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="$value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception_Expected'>Kohana_HTTP_Exception_Expected</a>)</small></h3>
<div class='description'><p>Gets and sets headers to the <a href="/index.php/">Response</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - $key</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - $value</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>See - [Response::headers]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function headers($key = NULL, $value = NULL)
{
	$result = $this-&gt;_response-&gt;headers($key, $value);

	if ( ! $result instanceof Response)
		return $result;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>integer</small> <span class="param" title="The http status code">$code</span> [, <small>string</small> <span class="param" title="Status message, custom content to display with error">$message</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Translation variables">$variables</span> <small>= <small>NULL</small></small> , $previous <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception'>Kohana_HTTP_Exception</a>)</small></h3>
<div class='description'><p>Creates an HTTP_Exception of the specified type.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $code</strong> <small>required</small> - The http status code</li>
<li>
 <span class="blue">string </span><strong> $message</strong> <small> = <small>NULL</small></small> - Status message, custom content to display with error</li>
<li>
 <span class="blue">array </span><strong> $variables</strong> <small> = <small>NULL</small></small> - Translation variables</li>
<li>
 <span class="blue">unknown </span><strong> $previous</strong> <small> = <small>NULL</small></small></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Exception</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($code, $message = NULL, array $variables = NULL, Exception $previous = NULL)
{
	$class = &#039;HTTP_Exception_&#039;.$code;

	return new $class($message, $variables, $previous);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="request"><small>public</small>  request([ <small>Request</small> <span class="param" title="Request object that triggered this exception.">$request</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Exception'>Kohana_HTTP_Exception</a>)</small></h3>
<div class='description'><p>Store the Request that triggered this exception.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small> = <small>NULL</small></small> - Request object that triggered this exception.</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>HTTP_Exception</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function request(Request $request = NULL)
{
	if ($request === NULL)
		return $this-&gt;_request;

	$this-&gt;_request = $request;

	return $this;
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
<h3 id="__clone"><small>final private</small>  __clone()<small> (defined in <a href='/documentation/api/Exception'>Exception</a>)</small></h3>
<div class='description'></div>
</div>
</div>