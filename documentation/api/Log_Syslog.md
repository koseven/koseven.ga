---
layout: api
class: Log_Syslog
---
<h1>Log_Syslog</h1>
extends <a href='/documentation/api/Kohana_Log_Syslog'>Kohana_Log_Syslog</a>
<br />
extends <a href='/documentation/api/Log_Writer'>Log_Writer</a>
<br />
extends <a href='/documentation/api/Kohana_Log_Writer'>Kohana_Log_Writer</a>
<br />
<p>
<i><p>Syslog log writer.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Logging</dd>
<dt>author</dt>
<dd>Jeremy Bush</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Log_Syslog'>Kohana_Log_Syslog</a></p>
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
<a href="#property-strace_level">$strace_level</a>
</li>
<li>
<a href="#property-timestamp">$timestamp</a>
</li>
<li>
<a href="#property-timezone">$timezone</a>
</li>
<li>
<a href="#property-_ident">$_ident</a>
</li>
<li>
<a href="#property-_log_levels">$_log_levels</a>
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
<a href="#__destruct">__destruct()</a>
</li>
<li>
<a href="#write">write()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#format_message">format_message()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-strace_level'><small>public static</small>  <span class='blue'>int</span> $strace_level</h4>
</dt>
<dd>
 <p>Level to use for stack traces</p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 6</pre></dd>
<dt>
<h4 id='property-timestamp'><small>public static</small>  <span class='blue'>string</span> $timestamp</h4>
</dt>
<dd>
 <p>timestamp format for log entries.</p>

<p>Defaults to Date::$timestamp_format</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-timezone'><small>public static</small>  <span class='blue'>string</span> $timezone</h4>
</dt>
<dd>
 <p>timezone for log entries</p>

<p>Defaults to Date::$timezone, which defaults to date_default_timezone_get()</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_ident'><small>protected</small>  <span class='blue'>string</span> $_ident</h4>
</dt>
<dd>
 <p>The syslog identifier</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_log_levels'><small>protected</small>  <span class='blue'>array</span> $_log_levels</h4>
</dt>
<dd>
 <p>Numeric log level to string lookup table.</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(4)</span> <span>(
    1 => <small>string</small><span>(8)</span> "CRITICAL"
    4 => <small>string</small><span>(5)</span> "ERROR"
    5 => <small>string</small><span>(7)</span> "WARNING"
    6 => <small>string</small><span>(5)</span> "DEBUG"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>string</small> <span class="param" title="Syslog identifier">$ident</span> <small>= <small>string</small><span>(9)</span> "KohanaPHP"</small> , <small>int</small> <span class="param" title="Facility to log to">$facility</span> <small>= <small>integer</small> 8</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Log_Syslog'>Kohana_Log_Syslog</a>)</small></h3>
<div class='description'><p>Creates a new syslog logger.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $ident</strong> <small> = <small>string</small><span>(9)</span> "KohanaPHP"</small> - Syslog identifier</li>
<li>
 <span class="blue">int </span><strong> $facility</strong> <small> = <small>integer</small> 8</small> - Facility to log to</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.php.net/manual/function.openlog"></a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($ident = &#039;KohanaPHP&#039;, $facility = LOG_USER)
{
	$this-&gt;_ident = $ident;

	// Open the connection to syslog
	openlog($this-&gt;_ident, LOG_CONS, $facility);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__destruct"><small>public</small>  __destruct()<small> (defined in <a href='/documentation/api/Kohana_Log_Syslog'>Kohana_Log_Syslog</a>)</small></h3>
<div class='description'><p>Closes the syslog connection</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __destruct()
{
	// Close connection to syslog
	closelog();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write"><small>public</small>  write(<small>array</small> <span class="param" title="$messages">$messages</span> )<small> (defined in <a href='/documentation/api/Kohana_Log_Syslog'>Kohana_Log_Syslog</a>)</small></h3>
<div class='description'><p>Writes each of the messages into the syslog.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $messages</strong> <small>required</small> - $messages</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function write(array $messages)
{
	foreach ($messages as $message)
	{
		syslog($message[&#039;level&#039;], $message[&#039;body&#039;]);

		if (isset($message[&#039;additional&#039;][&#039;exception&#039;]))
		{
			syslog(Log_Writer::$strace_level, $message[&#039;additional&#039;][&#039;exception&#039;]-&gt;getTraceAsString());
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>final public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Log_Writer'>Kohana_Log_Writer</a>)</small></h3>
<div class='description'><p>Allows the writer to have a unique key when stored.</p>

<pre><code>echo $writer;
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">final public function __toString()
{
	return spl_object_hash($this);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="format_message"><small>public</small>  format_message(<small>array</small> <span class="param" title="$message">$message</span> [, <small>string</small> <span class="param" title="$format">$format</span> <small>= <small>string</small><span>(33)</span> "time --- level: body in file:line"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Log_Writer'>Kohana_Log_Writer</a>)</small></h3>
<div class='description'><p>Formats a log entry.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $message</strong> <small>required</small> - $message</li>
<li>
 <span class="blue">string </span><strong> $format</strong> <small> = <small>string</small><span>(33)</span> "time --- level: body in file:line"</small> - $format</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function format_message(array $message, $format = &quot;time --- level: body in file:line&quot;)
{
	$message[&#039;time&#039;] = Date::formatted_time(&#039;@&#039;.$message[&#039;time&#039;], Log_Writer::$timestamp, Log_Writer::$timezone, TRUE);
	$message[&#039;level&#039;] = $this-&gt;_log_levels[$message[&#039;level&#039;]];

	$string = strtr($format, array_filter($message, &#039;is_scalar&#039;));

	if (isset($message[&#039;additional&#039;][&#039;exception&#039;]))
	{
		// Re-use as much as possible, just resetting the body to the trace
		$message[&#039;body&#039;] = $message[&#039;additional&#039;][&#039;exception&#039;]-&gt;getTraceAsString();
		$message[&#039;level&#039;] = $this-&gt;_log_levels[Log_Writer::$strace_level];

		$string .= PHP_EOL.strtr($format, array_filter($message, &#039;is_scalar&#039;));
	}

	return $string;
}</code>
</pre>
</div>
</div>
</div>