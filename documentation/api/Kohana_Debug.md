---
layout: api
class: Kohana_Debug
---
<h1>Kohana_Debug</h1>
<p>
<i><p>Contains debugging and dumping tools.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Base</dd>
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
<em>None</em>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#dump">dump()</a>
</li>
<li>
<a href="#path">path()</a>
</li>
<li>
<a href="#source">source()</a>
</li>
<li>
<a href="#trace">trace()</a>
</li>
<li>
<a href="#vars">vars()</a>
</li>
<li>
<a href="#_dump">_dump()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="dump"><small>public static</small>  dump(<small>mixed</small> <span class="param" title="Variable to dump">$value</span> [, <small>integer</small> <span class="param" title="Maximum length of strings">$length</span> <small>= <small>integer</small> 128</small> , <small>integer</small> <span class="param" title="Recursion limit">$level_recursion</span> <small>= <small>integer</small> 10</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Returns an HTML string of information about a single variable.</p>

<p>Borrows heavily on concepts from the Debug class of <a href="http://nettephp.com/">Nette</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Variable to dump</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>integer</small> 128</small> - Maximum length of strings</li>
<li>
 <span class="blue">integer </span><strong> $level_recursion</strong> <small> = <small>integer</small> 10</small> - Recursion limit</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function dump($value, $length = 128, $level_recursion = 10)
{
	return Debug::_dump($value, $length, $level_recursion);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="path"><small>public static</small>  path(<small>string</small> <span class="param" title="Path to debug">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Removes application, system, modpath, or docroot from a filename,
replacing them with the plain text equivalents. Useful for debugging
when you want to display a shorter path.</p>

<pre><code>// Displays SYSPATH/classes/kohana.php
echo Debug::path(Kohana::find_file('classes', 'kohana'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - Path to debug</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function path($file)
{
	if (strpos($file, APPPATH) === 0)
	{
		$file = &#039;APPPATH&#039;.DIRECTORY_SEPARATOR.substr($file, strlen(APPPATH));
	}
	elseif (strpos($file, SYSPATH) === 0)
	{
		$file = &#039;SYSPATH&#039;.DIRECTORY_SEPARATOR.substr($file, strlen(SYSPATH));
	}
	elseif (strpos($file, MODPATH) === 0)
	{
		$file = &#039;MODPATH&#039;.DIRECTORY_SEPARATOR.substr($file, strlen(MODPATH));
	}
	elseif (strpos($file, DOCROOT) === 0)
	{
		$file = &#039;DOCROOT&#039;.DIRECTORY_SEPARATOR.substr($file, strlen(DOCROOT));
	}

	return $file;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="source"><small>public static</small>  source(<small>string</small> <span class="param" title="File to open">$file</span> , <small>integer</small> <span class="param" title="Line number to highlight">$line_number</span> [, <small>integer</small> <span class="param" title="Number of padding lines">$padding</span> <small>= <small>integer</small> 5</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Returns an HTML string, highlighting a specific line of a file, with some
number of lines padded above and below.</p>

<pre><code>// Highlights the current line of the current file
echo Debug::source(__FILE__, __LINE__);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - File to open</li>
<li>
 <span class="blue">integer </span><strong> $line_number</strong> <small>required</small> - Line number to highlight</li>
<li>
 <span class="blue">integer </span><strong> $padding</strong> <small> = <small>integer</small> 5</small> - Number of padding lines</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Source of file 
</li><li>
<span class='blue'>FALSE</span>  - File is unreadable 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function source($file, $line_number, $padding = 5)
{
	if ( ! $file OR ! is_readable($file))
	{
		// Continuing will cause errors
		return FALSE;
	}

	// Open the file and set the line position
	$file = fopen($file, &#039;r&#039;);
	$line = 0;

	// Set the reading range
	$range = [&#039;start&#039; =&gt; $line_number - $padding, &#039;end&#039; =&gt; $line_number + $padding];

	// Set the zero-padding amount for line numbers
	$format = &#039;% &#039;.strlen($range[&#039;end&#039;]).&#039;d&#039;;

	$source = &#039;&#039;;
	while (($row = fgets($file)) !== FALSE)
	{
		// Increment the line number
		if (++$line &gt; $range[&#039;end&#039;])
			break;

		if ($line &gt;= $range[&#039;start&#039;])
		{
			// Make the row safe for output
			$row = htmlspecialchars($row, ENT_NOQUOTES, Kohana::$charset);

			// Trim whitespace and sanitize the row
			$row = &#039;&lt;span class=&quot;number&quot;&gt;&#039;.sprintf($format, $line).&#039;&lt;/span&gt; &#039;.$row;

			if ($line === $line_number)
			{
				// Apply highlighting to this row
				$row = &#039;&lt;span class=&quot;line highlight&quot;&gt;&#039;.$row.&#039;&lt;/span&gt;&#039;;
			}
			else
			{
				$row = &#039;&lt;span class=&quot;line&quot;&gt;&#039;.$row.&#039;&lt;/span&gt;&#039;;
			}

			// Add to the captured source
			$source .= $row;
		}
	}

	// Close the file
	fclose($file);

	return &#039;&lt;pre class=&quot;source&quot;&gt;&lt;code&gt;&#039;.$source.&#039;&lt;/code&gt;&lt;/pre&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="trace"><small>public static</small>  trace([ <small>array</small> <span class="param" title="$trace">$trace</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Returns an array of HTML strings that represent each step in the backtrace.</p>

<pre><code>// Displays the entire current backtrace
echo implode('&lt;br/&gt;', Debug::trace());
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $trace</strong> <small> = <small>NULL</small></small> - $trace</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function trace(array $trace = NULL)
{
	if ($trace === NULL)
	{
		// Start a new trace
		$trace = debug_backtrace();
	}

	// Non-standard function calls
	$statements = [&#039;include&#039;, &#039;include_once&#039;, &#039;require&#039;, &#039;require_once&#039;];

	$output = [];
	foreach ($trace as $step)
	{
		if ( ! isset($step[&#039;function&#039;]))
		{
			// Invalid trace step
			continue;
		}

		if (isset($step[&#039;file&#039;]) AND isset($step[&#039;line&#039;]))
		{
			// Include the source of this step
			$source = Debug::source($step[&#039;file&#039;], $step[&#039;line&#039;]);
		}

		if (isset($step[&#039;file&#039;]))
		{
			$file = $step[&#039;file&#039;];

			if (isset($step[&#039;line&#039;]))
			{
				$line = $step[&#039;line&#039;];
			}
		}

		// function()
		$function = $step[&#039;function&#039;];

		if (in_array($step[&#039;function&#039;], $statements))
		{
			if (empty($step[&#039;args&#039;]))
			{
				// No arguments
				$args = [];
			}
			else
			{
				// Sanitize the file path
				$args = [$step[&#039;args&#039;][0]];
			}
		}
		elseif (isset($step[&#039;args&#039;]))
		{
			if ( ! function_exists($step[&#039;function&#039;]) OR strpos($step[&#039;function&#039;], &#039;{closure}&#039;) !== FALSE)
			{
				// Introspection on closures or language constructs in a stack trace is impossible
				$params = NULL;
			}
			else
			{
				if (isset($step[&#039;class&#039;]))
				{
					if (method_exists($step[&#039;class&#039;], $step[&#039;function&#039;]))
					{
						$reflection = new ReflectionMethod($step[&#039;class&#039;], $step[&#039;function&#039;]);
					}
					else
					{
						$reflection = new ReflectionMethod($step[&#039;class&#039;], &#039;__call&#039;);
					}
				}
				else
				{
					$reflection = new ReflectionFunction($step[&#039;function&#039;]);
				}

				// Get the function parameters
				$params = $reflection-&gt;getParameters();
			}

			$args = [];

			foreach ($step[&#039;args&#039;] as $i =&gt; $arg)
			{
				if (isset($params[$i]))
				{
					// Assign the argument by the parameter name
					$args[$params[$i]-&gt;name] = $arg;
				}
				else
				{
					// Assign the argument by number
					$args[$i] = $arg;
				}
			}
		}

		if (isset($step[&#039;class&#039;]))
		{
			// Class-&gt;method() or Class::method()
			$function = $step[&#039;class&#039;].$step[&#039;type&#039;].$step[&#039;function&#039;];
		}

		$output[] = [
			&#039;function&#039; =&gt; $function,
			&#039;args&#039;     =&gt; isset($args)   ? $args : NULL,
			&#039;file&#039;     =&gt; isset($file)   ? $file : NULL,
			&#039;line&#039;     =&gt; isset($line)   ? $line : NULL,
			&#039;source&#039;   =&gt; isset($source) ? $source : NULL,
		];

		unset($function, $args, $file, $line, $source);
	}

	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="vars"><small>public static</small>  vars()<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Returns an HTML string of debugging information about any number of
variables, each wrapped in a "pre" tag:</p>

<pre><code>// Displays the type and value of each variable
echo Debug::vars($foo, $bar, $baz);
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
<code class="language-php">public static function vars()
{
	if (func_num_args() === 0)
		return;

	// Get all passed variables
	$variables = func_get_args();

	$output = [];
	foreach ($variables as $var)
	{
		$output[] = Debug::_dump($var, 1024);
	}

	return &#039;&lt;pre class=&quot;debug&quot;&gt;&#039;.implode(&quot;\n&quot;, $output).&#039;&lt;/pre&gt;&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_dump"><small>protected static</small>  _dump(<small>mixed</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Variable to dump">$var</span> [, <small>integer</small> <span class="param" title="Maximum length of strings">$length</span> <small>= <small>integer</small> 128</small> , <small>integer</small> <span class="param" title="Recursion limit">$limit</span> <small>= <small>integer</small> 10</small> , <small>integer</small> <span class="param" title="Current recursion level (internal usage only!)">$level</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Debug'>Kohana_Debug</a>)</small></h3>
<div class='description'><p>Helper for Debug::dump(), handles recursion in arrays and objects.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
byref  <span class="blue">mixed </span><strong> $var</strong> <small>required</small> - Variable to dump</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>integer</small> 128</small> - Maximum length of strings</li>
<li>
 <span class="blue">integer </span><strong> $limit</strong> <small> = <small>integer</small> 10</small> - Recursion limit</li>
<li>
 <span class="blue">integer </span><strong> $level</strong> <small> = <small>integer</small> 0</small> - Current recursion level (internal usage only!)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _dump( &amp; $var, $length = 128, $limit = 10, $level = 0)
{
	if ($var === NULL)
	{
		return &#039;&lt;small&gt;NULL&lt;/small&gt;&#039;;
	}
	elseif (is_bool($var))
	{
		return &#039;&lt;small&gt;bool&lt;/small&gt; &#039;.($var ? &#039;TRUE&#039; : &#039;FALSE&#039;);
	}
	elseif (is_float($var))
	{
		return &#039;&lt;small&gt;float&lt;/small&gt; &#039;.$var;
	}
	elseif (is_resource($var))
	{
		if (($type = get_resource_type($var)) === &#039;stream&#039; AND $meta = stream_get_meta_data($var))
		{
			$meta = stream_get_meta_data($var);

			if (isset($meta[&#039;uri&#039;]))
			{
				$file = $meta[&#039;uri&#039;];

				if (function_exists(&#039;stream_is_local&#039;))
				{
					// Only exists on PHP &gt;= 5.2.4
					if (stream_is_local($file))
					{
						$file = Debug::path($file);
					}
				}

				return &#039;&lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(&#039;.$type.&#039;)&lt;/span&gt; &#039;.htmlspecialchars($file, ENT_NOQUOTES, Kohana::$charset);
			}
		}
		else
		{
			return &#039;&lt;small&gt;resource&lt;/small&gt;&lt;span&gt;(&#039;.$type.&#039;)&lt;/span&gt;&#039;;
		}
	}
	elseif (is_string($var))
	{
		// Clean invalid multibyte characters. iconv is only invoked
		// if there are non ASCII characters in the string, so this
		// isn&#039;t too much of a hit.
		$var = UTF8::clean($var, Kohana::$charset);

		if (UTF8::strlen($var) &gt; $length)
		{
			// Encode the truncated string
			$str = htmlspecialchars(UTF8::substr($var, 0, $length), ENT_NOQUOTES, Kohana::$charset).&#039;&amp;nbsp;&amp;hellip;&#039;;
		}
		else
		{
			// Encode the string
			$str = htmlspecialchars($var, ENT_NOQUOTES, Kohana::$charset);
		}

		return &#039;&lt;small&gt;string&lt;/small&gt;&lt;span&gt;(&#039;.strlen($var).&#039;)&lt;/span&gt; &quot;&#039;.$str.&#039;&quot;&#039;;
	}
	elseif (is_array($var))
	{
		$output = [];

		// Indentation for this variable
		$space = str_repeat($s = &#039;    &#039;, $level);

		static $marker;

		if ($marker === NULL)
		{
			// Make a unique marker - force it to be alphanumeric so that it is always treated as a string array key
			$marker = uniqid(&quot;\x00&quot;).&quot;x&quot;;
		}

		if (empty($var))
		{
			// Do nothing
		}
		elseif (isset($var[$marker]))
		{
			$output[] = &quot;(\n$space$s*RECURSION*\n$space)&quot;;
		}
		elseif ($level &lt; $limit)
		{
			$output[] = &quot;&lt;span&gt;(&quot;;

			$var[$marker] = TRUE;
			foreach ($var as $key =&gt; &amp; $val)
			{
				if ($key === $marker) continue;
				if ( ! is_int($key))
				{
					$key = &#039;&quot;&#039;.htmlspecialchars($key, ENT_NOQUOTES, Kohana::$charset).&#039;&quot;&#039;;
				}

				$output[] = &quot;$space$s$key =&gt; &quot;.Debug::_dump($val, $length, $limit, $level + 1);
			}
			unset($var[$marker]);

			$output[] = &quot;$space)&lt;/span&gt;&quot;;
		}
		else
		{
			// Depth too great
			$output[] = &quot;(\n$space$s...\n$space)&quot;;
		}

		return &#039;&lt;small&gt;array&lt;/small&gt;&lt;span&gt;(&#039;.count($var).&#039;)&lt;/span&gt; &#039;.implode(&quot;\n&quot;, $output);
	}
	elseif (is_object($var))
	{
		// Copy the object as an array
		$array = (array) $var;

		$output = [];

		// Indentation for this variable
		$space = str_repeat($s = &#039;    &#039;, $level);

		$hash = spl_object_hash($var);

		// Objects that are being dumped
		static $objects = [];

		if (empty($var))
		{
			// Do nothing
		}
		elseif (isset($objects[$hash]))
		{
			$output[] = &quot;{\n$space$s*RECURSION*\n$space}&quot;;
		}
		elseif ($level &lt; $limit)
		{
			$output[] = &quot;&lt;code&gt;{&quot;;

			$objects[$hash] = TRUE;
			foreach ($array as $key =&gt; &amp; $val)
			{
				if ($key[0] === &quot;\x00&quot;)
				{
					// Determine if the access is protected or protected
					$access = &#039;&lt;small&gt;&#039;.(($key[1] === &#039;*&#039;) ? &#039;protected&#039; : &#039;private&#039;).&#039;&lt;/small&gt;&#039;;

					// Remove the access level from the variable name
					$key = substr($key, strrpos($key, &quot;\x00&quot;) + 1);
				}
				else
				{
					$access = &#039;&lt;small&gt;public&lt;/small&gt;&#039;;
				}

				$output[] = &quot;$space$s$access $key =&gt; &quot;.Debug::_dump($val, $length, $limit, $level + 1);
			}
			unset($objects[$hash]);

			$output[] = &quot;$space}&lt;/code&gt;&quot;;
		}
		else
		{
			// Depth too great
			$output[] = &quot;{\n$space$s...\n$space}&quot;;
		}

		return &#039;&lt;small&gt;object&lt;/small&gt; &lt;span&gt;&#039;.get_class($var).&#039;(&#039;.count($array).&#039;)&lt;/span&gt; &#039;.implode(&quot;\n&quot;, $output);
	}
	else
	{
		return &#039;&lt;small&gt;&#039;.gettype($var).&#039;&lt;/small&gt; &#039;.htmlspecialchars(print_r($var, TRUE), ENT_NOQUOTES, Kohana::$charset);
	}
}</code>
</pre>
</div>
</div>
</div>