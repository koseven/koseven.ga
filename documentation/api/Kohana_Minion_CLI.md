---
layout: api
class: Kohana_Minion_CLI
---
<h1>Kohana_Minion_CLI</h1>
<p>
<i>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Minion</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>copyright</dt>
<dd>(c) 2015 Kohana Team</dd>
<dd>(c) 2016-2018 Koseven Team</dd>
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
<a href="#property-wait_msg">$wait_msg</a>
</li>
<li>
<a href="#property-background_colors">$background_colors</a>
</li>
<li>
<a href="#property-foreground_colors">$foreground_colors</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#color">color()</a>
</li>
<li>
<a href="#options">options()</a>
</li>
<li>
<a href="#password">password()</a>
</li>
<li>
<a href="#read">read()</a>
</li>
<li>
<a href="#wait">wait()</a>
</li>
<li>
<a href="#write">write()</a>
</li>
<li>
<a href="#write_replace">write_replace()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-wait_msg'><small>public static</small>  <span class='blue'></span> $wait_msg</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>string</small><span>(28)</span> "Press any key to continue..."</pre></dd>
<dt>
<h4 id='property-background_colors'><small>protected static</small>  <span class='blue'></span> $background_colors</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(8)</span> <span>(
    "black" => <small>string</small><span>(2)</span> "40"
    "red" => <small>string</small><span>(2)</span> "41"
    "green" => <small>string</small><span>(2)</span> "42"
    "yellow" => <small>string</small><span>(2)</span> "43"
    "blue" => <small>string</small><span>(2)</span> "44"
    "magenta" => <small>string</small><span>(2)</span> "45"
    "cyan" => <small>string</small><span>(2)</span> "46"
    "light_gray" => <small>string</small><span>(2)</span> "47"
)</span></pre></dd>
<dt>
<h4 id='property-foreground_colors'><small>protected static</small>  <span class='blue'></span> $foreground_colors</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(16)</span> <span>(
    "black" => <small>string</small><span>(4)</span> "0;30"
    "dark_gray" => <small>string</small><span>(4)</span> "1;30"
    "blue" => <small>string</small><span>(4)</span> "0;34"
    "light_blue" => <small>string</small><span>(4)</span> "1;34"
    "green" => <small>string</small><span>(4)</span> "0;32"
    "light_green" => <small>string</small><span>(4)</span> "1;32"
    "cyan" => <small>string</small><span>(4)</span> "0;36"
    "light_cyan" => <small>string</small><span>(4)</span> "1;36"
    "red" => <small>string</small><span>(4)</span> "0;31"
    "light_red" => <small>string</small><span>(4)</span> "1;31"
    "purple" => <small>string</small><span>(4)</span> "0;35"
    "light_purple" => <small>string</small><span>(4)</span> "1;35"
    "brown" => <small>string</small><span>(4)</span> "0;33"
    "yellow" => <small>string</small><span>(4)</span> "1;33"
    "light_gray" => <small>string</small><span>(4)</span> "0;37"
    "white" => <small>string</small><span>(4)</span> "1;37"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="color"><small>public static</small>  color(<small>string</small> <span class="param" title="The text to color">$text</span> , <small>string</small> <span class="param" title="The foreground color">$foreground</span> [, <small>string</small> <span class="param" title="The background color">$background</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Returns the given text with the correct color codes for a foreground and
optionally a background color.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small>required</small> - The text to color</li>
<li>
 <span class="blue">string </span><strong> $foreground</strong> <small>required</small> - The foreground color</li>
<li>
 <span class="blue">string </span><strong> $background</strong> <small> = <small>NULL</small></small> - The background color</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Fuel Development Team</li>
<li>License - MIT License</li>
<li>Copyright - 2010 - 2011 Fuel Development Team</li>
<li>Link - <a href="http://fuelphp.com">http://fuelphp.com</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The color coded string 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function color($text, $foreground, $background = null)
{
	if (Kohana::$is_windows)
		return $text;

	if ( ! array_key_exists($foreground, Minion_CLI::$foreground_colors))
		throw new Kohana_Exception(&#039;Invalid CLI foreground color: &#039;.$foreground);

	if ($background !== NULL AND ! array_key_exists($background, Minion_CLI::$background_colors))
		throw new Kohana_Exception(&#039;Invalid CLI background color: &#039;.$background);

	$string = &quot;\033[&quot;.Minion_CLI::$foreground_colors[$foreground].&quot;m&quot;;

	if ($background !== NULL)
	{
		$string .= &quot;\033[&quot;.Minion_CLI::$background_colors[$background].&quot;m&quot;;
	}

	$string .= $text.&quot;\033[0m&quot;;

	return $string;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="options"><small>public static</small>  options([ <small>string</small> <span class="param" title=",... option name">$options</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Returns one or more command-line options. Options are specified using
standard CLI syntax:</p>

<pre><code>php index.php --username=john.smith --password=secret --var="some value with spaces"

// Get the values of "username" and "password"
$auth = Minion_CLI::options('username', 'password');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $options</strong> <small> = <small>NULL</small></small> - ,...    option name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function options($options = NULL)
{
	// Get all of the requested options
	$options = func_get_args();

	// Found option values
	$values = [];

	// Skip the first option, it is always the file executed
	for ($i = 1; $i &lt; $_SERVER[&#039;argc&#039;]; ++$i)
	{
		if ( ! isset($_SERVER[&#039;argv&#039;][$i]))
		{
			// No more args left
			break;
		}

		// Get the option
		$opt = $_SERVER[&#039;argv&#039;][$i];

		if (substr($opt, 0, 2) !== &#039;--&#039;)
		{
			// This is a positional argument
			$values[] = $opt;
			continue;
		}

		// Remove the &quot;--&quot; prefix
		$opt = substr($opt, 2);

		if (strpos($opt, &#039;=&#039;))
		{
			// Separate the name and value
			list ($opt, $value) = explode(&#039;=&#039;, $opt, 2);
		}
		else
		{
			$value = NULL;
		}

		$values[$opt] = $value;
	}

	if ($options)
	{
		foreach ($values as $opt =&gt; $value)
		{
			if ( ! in_array($opt, $options))
			{
				// Set the given value
				unset($values[$opt]);
			}
		}
	}

	return count($options) == 1 ? array_pop($values) : $values;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="password"><small>public static</small>  password()<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Experimental feature.</p>

<p>Reads hidden input from the user</p>

<p>Usage:</p>

<p>$password = Minion_CLI::password('Enter your password');</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Mathew Davies.</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function password($text = &#039;&#039;)
{
	$text .= &#039;: &#039;;

	if (Kohana::$is_windows)
	{
		$vbscript = sys_get_temp_dir().&#039;Minion_CLI_Password.vbs&#039;;

		// Create temporary file
		file_put_contents($vbscript, &#039;wscript.echo(InputBox(&quot;&#039;.addslashes($text).&#039;&quot;))&#039;);

		$password = shell_exec(&#039;cscript //nologo &#039;.escapeshellarg($vbscript));

		// Remove temporary file.
		unlink($vbscript);
	}
	else
	{
		$password = shell_exec(&#039;/usr/bin/env bash -c \&#039;read -s -p &quot;&#039;.escapeshellcmd($text).&#039;&quot; var &amp;&amp; echo $var\&#039;&#039;);
	}

	Minion_CLI::write();

	return trim($password);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="read"><small>public static</small>  read([ <small>string</small> <span class="param" title="Text to show user before waiting for input">$text</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>array</small> <span class="param" title="Array of options the user is shown">$options</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Reads input from the user. This can have either 1 or 2 arguments.</p>

<p>Usage:</p>

<p>// Waits for any key press
Minion_CLI::read();</p>

<p>// Takes any input
$color = Minion_CLI::read('What is your favorite color?');</p>

<p>// Will only accept the options in the array
$ready = Minion_CLI::read('Are you ready?', array('y','n'));</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small> = <small>string</small><span>(0)</span> ""</small> - Text to show user before waiting for input</li>
<li>
 <span class="blue">array </span><strong> $options</strong> <small> = <small>NULL</small></small> - Array of options the user is shown</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The user input 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function read($text = &#039;&#039;, array $options = NULL)
{
	// If a question has been asked with the read
	$options_output = &#039;&#039;;
	if ( ! empty($options))
	{
		$options_output = &#039; [ &#039;.implode(&#039;, &#039;, $options).&#039; ]&#039;;
	}

	fwrite(STDOUT, $text.$options_output.&#039;: &#039;);

	// Read the input from keyboard.
	$input = trim(fgets(STDIN));

	// If options are provided and the choice is not in the array, tell them to try again
	if ( ! empty($options) &amp;&amp; ! in_array($input, $options))
	{
		Minion_CLI::write(&#039;This is not a valid option. Please try again.&#039;);

		$input = Minion_CLI::read($text, $options);
	}

	// Read the input
	return $input;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="wait"><small>public static</small>  wait([ <small>int</small> <span class="param" title="Number of seconds">$seconds</span> <small>= <small>integer</small> 0</small> , <small>bool</small> <span class="param" title="Show a countdown or not">$countdown</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Waits a certain number of seconds, optionally showing a wait message and
waiting for a key press.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">int </span><strong> $seconds</strong> <small> = <small>integer</small> 0</small> - Number of seconds</li>
<li>
 <span class="blue">bool </span><strong> $countdown</strong> <small> = <small>bool</small> FALSE</small> - Show a countdown or not</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Author - Fuel Development Team</li>
<li>License - MIT License</li>
<li>Copyright - 2010 - 2011 Fuel Development Team</li>
<li>Link - <a href="http://fuelphp.com">http://fuelphp.com</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function wait($seconds = 0, $countdown = false)
{
	if ($countdown === TRUE)
	{
		$time = $seconds;

		while ($time &gt; 0)
		{
			fwrite(STDOUT, $time.&#039;... &#039;);
			sleep(1);
			--$time;
		}

		Minion_CLI::write();
	}
	else
	{
		if ($seconds &gt; 0)
		{
			sleep($seconds);
		}
		else
		{
			Minion_CLI::write(Minion_CLI::$wait_msg);
			Minion_CLI::read();
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write"><small>public static</small>  write([ <small>string|array</small> <span class="param" title="The text to output, or array of lines">$text</span> <small>= <small>string</small><span>(0)</span> ""</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Outputs a string to the cli. If you send an array it will implode them
with a line break.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|array </span><strong> $text</strong> <small> = <small>string</small><span>(0)</span> ""</small> - The text to output, or array of lines</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function write($text = &#039;&#039;)
{
	if (is_array($text))
	{
		foreach ($text as $line)
		{
			Minion_CLI::write($line);
		}
	}
	else
	{
		fwrite(STDOUT, $text.PHP_EOL);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="write_replace"><small>public static</small>  write_replace([ <small>string</small> <span class="param" title="The text to output">$text</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>boolean</small> <span class="param" title="Whether the line is done being replaced">$end_line</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_CLI'>Kohana_Minion_CLI</a>)</small></h3>
<div class='description'><p>Outputs a replacable line to the cli. You can continue replacing the
line until <code>TRUE</code> is passed as the second parameter in order to indicate
you are done modifying the line.</p>

<pre><code>// Sample progress indicator
Minion_CLI::write_replace('0%');
Minion_CLI::write_replace('25%');
Minion_CLI::write_replace('50%');
Minion_CLI::write_replace('75%');
// Done writing this line
Minion_CLI::write_replace('100%', TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small> = <small>string</small><span>(0)</span> ""</small> - The text to output</li>
<li>
 <span class="blue">boolean </span><strong> $end_line</strong> <small> = <small>bool</small> FALSE</small> - Whether the line is done being replaced</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function write_replace($text = &#039;&#039;, $end_line = FALSE)
{
	// Append a newline if $end_line is TRUE
	$text = $end_line ? $text.PHP_EOL : $text;
	fwrite(STDOUT, &quot;\r\033[K&quot;.$text);
}</code>
</pre>
</div>
</div>
</div>