---
layout: api
class: Log
---
<h1>Log</h1>
extends <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>
<br />
<p>
<i><p>Message logging with observer-based log writing.</p>

<p class="note">This class does not support extensions, only additional writers.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Logging</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Log'>Kohana_Log</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-EMERGENCY'>EMERGENCY</a>
</li>
<li>
<a href='#constant-ALERT'>ALERT</a>
</li>
<li>
<a href='#constant-CRITICAL'>CRITICAL</a>
</li>
<li>
<a href='#constant-ERROR'>ERROR</a>
</li>
<li>
<a href='#constant-WARNING'>WARNING</a>
</li>
<li>
<a href='#constant-NOTICE'>NOTICE</a>
</li>
<li>
<a href='#constant-INFO'>INFO</a>
</li>
<li>
<a href='#constant-DEBUG'>DEBUG</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-write_on_add">$write_on_add</a>
</li>
<li>
<a href="#property-_instance">$_instance</a>
</li>
<li>
<a href="#property-_messages">$_messages</a>
</li>
<li>
<a href="#property-_writers">$_writers</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#add">add()</a>
</li>
<li>
<a href="#attach">attach()</a>
</li>
<li>
<a href="#detach">detach()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#write">write()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-EMERGENCY'>EMERGENCY</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-ALERT'>ALERT</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-CRITICAL'>CRITICAL</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-ERROR'>ERROR</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 4</pre></dd>
<dt>
<h4 id='constant-WARNING'>WARNING</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 5</pre></dd>
<dt>
<h4 id='constant-NOTICE'>NOTICE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 6</pre></dd>
<dt>
<h4 id='constant-INFO'>INFO</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 6</pre></dd>
<dt>
<h4 id='constant-DEBUG'>DEBUG</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 6</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-write_on_add'><small>public static</small>  <span class='blue'>boolean</span> $write_on_add</h4>
</dt>
<dd>
 <p>immediately write when logs are added</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_instance'><small>protected static</small>  <span class='blue'>Log</span> $_instance</h4>
</dt>
<dd>
 <p>Singleton instance container</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_messages'><small>protected</small>  <span class='blue'>array</span> $_messages</h4>
</dt>
<dd>
 <p>list of added messages</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_writers'><small>protected</small>  <span class='blue'>array</span> $_writers</h4>
</dt>
<dd>
 <p>list of log writers</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="add"><small>public</small>  add(<small>string</small> <span class="param" title="Level of message">$level</span> , <small>string</small> <span class="param" title="Message body">$message</span> [, <small>array</small> <span class="param" title="Values to replace in the message">$values</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Additional custom parameters to supply to the log writer">$additional</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>)</small></h3>
<div class='description'><p>Adds a message to the log. Replacement values must be passed in to be
replaced using <a href="http://php.net/strtr">strtr</a>.</p>

<pre><code>$log-&gt;add(Log::ERROR, 'Could not locate user: :user', array(
    ':user' =&gt; $username,
));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $level</strong> <small>required</small> - Level of message</li>
<li>
 <span class="blue">string </span><strong> $message</strong> <small>required</small> - Message body</li>
<li>
 <span class="blue">array </span><strong> $values</strong> <small> = <small>NULL</small></small> - Values to replace in the message</li>
<li>
 <span class="blue">array </span><strong> $additional</strong> <small> = <small>NULL</small></small> - Additional custom parameters to supply to the log writer</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Log</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function add($level, $message, array $values = NULL, array $additional = NULL)
{
	if ($values)
	{
		// Insert the values into the message
		$message = strtr($message, $values);
	}

	// Grab a copy of the trace
	if (isset($additional[&#039;exception&#039;]))
	{
		$trace = $additional[&#039;exception&#039;]-&gt;getTrace();
	}
	else
	{
		// Older php version don&#039;t have &#039;DEBUG_BACKTRACE_IGNORE_ARGS&#039;, so manually remove the args from the backtrace
		if ( ! defined(&#039;DEBUG_BACKTRACE_IGNORE_ARGS&#039;))
		{
			$trace = array_map(function ($item) {
				unset($item[&#039;args&#039;]);
				return $item;
			}, array_slice(debug_backtrace(FALSE), 1));
		}
		else
		{
			$trace = array_slice(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS), 1);
		}
	}

	if ($additional == NULL)
	{
		$additional = [];
	}

	// Create a new message
	$this-&gt;_messages[] = [
		&#039;time&#039;       =&gt; time(),
		&#039;level&#039;      =&gt; $level,
		&#039;body&#039;       =&gt; $message,
		&#039;trace&#039;      =&gt; $trace,
		&#039;file&#039;       =&gt; isset($trace[0][&#039;file&#039;]) ? $trace[0][&#039;file&#039;] : NULL,
		&#039;line&#039;       =&gt; isset($trace[0][&#039;line&#039;]) ? $trace[0][&#039;line&#039;] : NULL,
		&#039;class&#039;      =&gt; isset($trace[0][&#039;class&#039;]) ? $trace[0][&#039;class&#039;] : NULL,
		&#039;function&#039;   =&gt; isset($trace[0][&#039;function&#039;]) ? $trace[0][&#039;function&#039;] : NULL,
		&#039;additional&#039; =&gt; $additional,
	];

	if (Log::$write_on_add)
	{
		// Write logs as they are added
		$this-&gt;write();
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="attach"><small>public</small>  attach(<small>Log_Writer</small> <span class="param" title="Instance">$writer</span> [, <small>mixed</small> <span class="param" title="Array of messages levels to write OR max level to write">$levels</span> <small>= <small>array</small><span>(0)</span> </small> , <small>integer</small> <span class="param" title="Min level to write IF $levels is not an array">$min_level</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>)</small></h3>
<div class='description'><p>Attaches a log writer, and optionally limits the levels of messages that
will be written by the writer.</p>

<pre><code>$log-&gt;attach($writer);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Log_Writer </span><strong> $writer</strong> <small>required</small> - Instance</li>
<li>
 <span class="blue">mixed </span><strong> $levels</strong> <small> = <small>array</small><span>(0)</span> </small> - Array of messages levels to write OR max level to write</li>
<li>
 <span class="blue">integer </span><strong> $min_level</strong> <small> = <small>integer</small> 0</small> - Min level to write IF $levels is not an array</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Log</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function attach(Log_Writer $writer, $levels = [], $min_level = 0)
{
	if ( ! is_array($levels))
	{
		$levels = range($min_level, $levels);
	}

	$this-&gt;_writers[&quot;{$writer}&quot;] = [
		&#039;object&#039; =&gt; $writer,
		&#039;levels&#039; =&gt; $levels
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="detach"><small>public</small>  detach(<small>Log_Writer</small> <span class="param" title="Instance">$writer</span> )<small> (defined in <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>)</small></h3>
<div class='description'><p>Detaches a log writer. The same writer object must be used.</p>

<pre><code>$log-&gt;detach($writer);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Log_Writer </span><strong> $writer</strong> <small>required</small> - Instance</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Log</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function detach(Log_Writer $writer)
{
	// Remove the writer
	unset($this-&gt;_writers[&quot;{$writer}&quot;]);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance()<small> (defined in <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>)</small></h3>
<div class='description'><p>Get the singleton instance of this class and enable writing at shutdown.</p>

<pre><code>$log = Log::instance();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Log</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance()
{
	if (Log::$_instance === NULL)
	{
		// Create a new instance
		Log::$_instance = new Log;

		// Write the logs at shutdown
		register_shutdown_function([Log::$_instance, &#039;write&#039;]);
	}

	return Log::$_instance;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write"><small>public</small>  write()<small> (defined in <a href='/documentation/api/Kohana_Log'>Kohana_Log</a>)</small></h3>
<div class='description'><p>Write and clear all of the messages.</p>

<pre><code>$log-&gt;write();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function write()
{
	if (empty($this-&gt;_messages))
	{
		// There is nothing to write, move along
		return;
	}

	// Import all messages locally
	$messages = $this-&gt;_messages;

	// Reset the messages array
	$this-&gt;_messages = [];

	foreach ($this-&gt;_writers as $writer)
	{
		if (empty($writer[&#039;levels&#039;]))
		{
			// Write all of the messages
			$writer[&#039;object&#039;]-&gt;write($messages);
		}
		else
		{
			// Filtered messages
			$filtered = [];

			foreach ($messages as $message)
			{
				if (in_array($message[&#039;level&#039;], $writer[&#039;levels&#039;]))
				{
					// Writer accepts this kind of message
					$filtered[] = $message;
				}
			}

			// Write the filtered messages
			$writer[&#039;object&#039;]-&gt;write($filtered);
		}
	}
}</code>
</pre>
</div>
</div>
</div>