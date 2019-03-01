---
layout: api
class: Kohana_Profiler
---
<h1>Kohana_Profiler</h1>
<p>
<i><p>Provides simple benchmarking and profiling. To display the statistics that
have been collected, load the <code>profiler/stats</code> <a href="/index.php/">View</a>:</p>

<pre><code>echo View::factory('profiler/stats');
</code></pre>
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
<a href="#property-rollover">$rollover</a>
</li>
<li>
<a href="#property-_marks">$_marks</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#application">application()</a>
</li>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#group_stats">group_stats()</a>
</li>
<li>
<a href="#groups">groups()</a>
</li>
<li>
<a href="#start">start()</a>
</li>
<li>
<a href="#stats">stats()</a>
</li>
<li>
<a href="#stop">stop()</a>
</li>
<li>
<a href="#total">total()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-rollover'><small>public static</small>  <span class='blue'>integer</span> $rollover</h4>
</dt>
<dd>
 <p>maximum number of application stats to keep</p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 1000</pre></dd>
<dt>
<h4 id='property-_marks'><small>protected static</small>  <span class='blue'>array</span> $_marks</h4>
</dt>
<dd>
 <p>collected benchmarks</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="application"><small>public static</small>  application()<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Gets the total application run time and memory usage. Caches the result
so that it can be compared between requests.</p>

<pre><code>list($time, $memory) = Profiler::application();
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#cache">Kohana::cache</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Execution time, memory 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function application()
{
	// Load the stats from cache, which is valid for 1 day
	$stats = Kohana::cache(&#039;profiler_application_stats&#039;, NULL, 3600 * 24);

	if ( ! is_array($stats) OR $stats[&#039;count&#039;] &gt; Profiler::$rollover)
	{
		// Initialize the stats array
		$stats = [
			&#039;min&#039;   =&gt; [
				&#039;time&#039;   =&gt; NULL,
				&#039;memory&#039; =&gt; NULL],
			&#039;max&#039;   =&gt; [
				&#039;time&#039;   =&gt; NULL,
				&#039;memory&#039; =&gt; NULL],
			&#039;total&#039; =&gt; [
				&#039;time&#039;   =&gt; NULL,
				&#039;memory&#039; =&gt; NULL],
			&#039;count&#039; =&gt; 0];
	}

	// Get the application run time
	$time = microtime(TRUE) - KOHANA_START_TIME;

	// Get the total memory usage
	$memory = memory_get_usage() - KOHANA_START_MEMORY;

	// Calculate max time
	if ($stats[&#039;max&#039;][&#039;time&#039;] === NULL OR $time &gt; $stats[&#039;max&#039;][&#039;time&#039;])
	{
		$stats[&#039;max&#039;][&#039;time&#039;] = $time;
	}

	// Calculate min time
	if ($stats[&#039;min&#039;][&#039;time&#039;] === NULL OR $time &lt; $stats[&#039;min&#039;][&#039;time&#039;])
	{
		$stats[&#039;min&#039;][&#039;time&#039;] = $time;
	}

	// Add to total time
	$stats[&#039;total&#039;][&#039;time&#039;] += $time;

	// Calculate max memory
	if ($stats[&#039;max&#039;][&#039;memory&#039;] === NULL OR $memory &gt; $stats[&#039;max&#039;][&#039;memory&#039;])
	{
		$stats[&#039;max&#039;][&#039;memory&#039;] = $memory;
	}

	// Calculate min memory
	if ($stats[&#039;min&#039;][&#039;memory&#039;] === NULL OR $memory &lt; $stats[&#039;min&#039;][&#039;memory&#039;])
	{
		$stats[&#039;min&#039;][&#039;memory&#039;] = $memory;
	}

	// Add to total memory
	$stats[&#039;total&#039;][&#039;memory&#039;] += $memory;

	// Another mark has been added to the stats
	$stats[&#039;count&#039;]++;

	// Determine the averages
	$stats[&#039;average&#039;] = [
		&#039;time&#039;   =&gt; $stats[&#039;total&#039;][&#039;time&#039;] / $stats[&#039;count&#039;],
		&#039;memory&#039; =&gt; $stats[&#039;total&#039;][&#039;memory&#039;] / $stats[&#039;count&#039;]];

	// Cache the new stats
	Kohana::cache(&#039;profiler_application_stats&#039;, $stats);

	// Set the current application execution time and memory
	// Do NOT cache these, they are specific to the current request only
	$stats[&#039;current&#039;][&#039;time&#039;]   = $time;
	$stats[&#039;current&#039;][&#039;memory&#039;] = $memory;

	// Return the total application run time and memory usage
	return $stats;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete"><small>public static</small>  delete(<small>string</small> <span class="param" title="$token">$token</span> )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Deletes a benchmark. If an error occurs during the benchmark, it is
recommended to delete the benchmark to prevent statistics from being
adversely affected.</p>

<pre><code>Profiler::delete($token);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $token</strong> <small>required</small> - $token</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function delete($token)
{
	// Remove the benchmark
	unset(Profiler::$_marks[$token]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="group_stats"><small>public static</small>  group_stats([ <small>mixed</small> <span class="param" title="Single group name string, or array with group names; all groups by default">$groups</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Gets the min, max, average and total of profiler groups as an array.</p>

<pre><code>$stats = Profiler::group_stats('test');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $groups</strong> <small> = <small>NULL</small></small> - Single group name string, or array with group names; all groups by default</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#groups">Profiler::groups</a>, <a href="#stats">Profiler::stats</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Min, max, average, total 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function group_stats($groups = NULL)
{
	// Which groups do we need to calculate stats for?
	$groups = ($groups === NULL)
		? Profiler::groups()
		: array_intersect_key(Profiler::groups(), array_flip( (array) $groups));

	// All statistics
	$stats = [];

	foreach ($groups as $group =&gt; $names)
	{
		foreach ($names as $name =&gt; $tokens)
		{
			// Store the stats for each subgroup.
			// We only need the values for &quot;total&quot;.
			$_stats = Profiler::stats($tokens);
			$stats[$group][$name] = $_stats[&#039;total&#039;];
		}
	}

	// Group stats
	$groups = [];

	foreach ($stats as $group =&gt; $names)
	{
		// Min and max are unknown by default
		$groups[$group][&#039;min&#039;] = $groups[$group][&#039;max&#039;] = [
			&#039;time&#039; =&gt; NULL,
			&#039;memory&#039; =&gt; NULL];

		// Total values are always integers
		$groups[$group][&#039;total&#039;] = [
			&#039;time&#039; =&gt; 0,
			&#039;memory&#039; =&gt; 0];

		foreach ($names as $total)
		{
			if ( ! isset($groups[$group][&#039;min&#039;][&#039;time&#039;]) OR $groups[$group][&#039;min&#039;][&#039;time&#039;] &gt; $total[&#039;time&#039;])
			{
				// Set the minimum time
				$groups[$group][&#039;min&#039;][&#039;time&#039;] = $total[&#039;time&#039;];
			}
			if ( ! isset($groups[$group][&#039;min&#039;][&#039;memory&#039;]) OR $groups[$group][&#039;min&#039;][&#039;memory&#039;] &gt; $total[&#039;memory&#039;])
			{
				// Set the minimum memory
				$groups[$group][&#039;min&#039;][&#039;memory&#039;] = $total[&#039;memory&#039;];
			}

			if ( ! isset($groups[$group][&#039;max&#039;][&#039;time&#039;]) OR $groups[$group][&#039;max&#039;][&#039;time&#039;] &lt; $total[&#039;time&#039;])
			{
				// Set the maximum time
				$groups[$group][&#039;max&#039;][&#039;time&#039;] = $total[&#039;time&#039;];
			}
			if ( ! isset($groups[$group][&#039;max&#039;][&#039;memory&#039;]) OR $groups[$group][&#039;max&#039;][&#039;memory&#039;] &lt; $total[&#039;memory&#039;])
			{
				// Set the maximum memory
				$groups[$group][&#039;max&#039;][&#039;memory&#039;] = $total[&#039;memory&#039;];
			}

			// Increase the total time and memory
			$groups[$group][&#039;total&#039;][&#039;time&#039;]   += $total[&#039;time&#039;];
			$groups[$group][&#039;total&#039;][&#039;memory&#039;] += $total[&#039;memory&#039;];
		}

		// Determine the number of names (subgroups)
		$count = count($names);

		// Determine the averages
		$groups[$group][&#039;average&#039;][&#039;time&#039;]   = $groups[$group][&#039;total&#039;][&#039;time&#039;] / $count;
		$groups[$group][&#039;average&#039;][&#039;memory&#039;] = $groups[$group][&#039;total&#039;][&#039;memory&#039;] / $count;
	}

	return $groups;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="groups"><small>public static</small>  groups()<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Returns all the benchmark tokens by group and name as an array.</p>

<pre><code>$groups = Profiler::groups();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function groups()
{
	$groups = [];

	foreach (Profiler::$_marks as $token =&gt; $mark)
	{
		// Sort the tokens by the group and name
		$groups[$mark[&#039;group&#039;]][$mark[&#039;name&#039;]][] = $token;
	}

	return $groups;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="start"><small>public static</small>  start(<small>string</small> <span class="param" title="Group name">$group</span> , <small>string</small> <span class="param" title="Benchmark name">$name</span> )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Starts a new benchmark and returns a unique token. The returned token
<em>must</em> be used when stopping the benchmark.</p>

<pre><code>$token = Profiler::start('test', 'profiler');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Group name</li>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Benchmark name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function start($group, $name)
{
	static $counter = 0;

	// Create a unique token based on the counter
	$token = &#039;kp/&#039;.base_convert($counter++, 10, 32);

	Profiler::$_marks[$token] = [
		&#039;group&#039; =&gt; strtolower($group),
		&#039;name&#039;  =&gt; (string) $name,

		// Start the benchmark
		&#039;start_time&#039;   =&gt; microtime(TRUE),
		&#039;start_memory&#039; =&gt; memory_get_usage(),

		// Set the stop keys without values
		&#039;stop_time&#039;    =&gt; FALSE,
		&#039;stop_memory&#039;  =&gt; FALSE,
	];

	return $token;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="stats"><small>public static</small>  stats(<small>array</small> <span class="param" title="Profiler tokens">$tokens</span> )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Gets the min, max, average and total of a set of tokens as an array.</p>

<pre><code>$stats = Profiler::stats($tokens);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $tokens</strong> <small>required</small> - Profiler tokens</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#total">Profiler::total</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Min, max, average, total 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function stats(array $tokens)
{
	// Min and max are unknown by default
	$min = $max = [
		&#039;time&#039; =&gt; NULL,
		&#039;memory&#039; =&gt; NULL];

	// Total values are always integers
	$total = [
		&#039;time&#039; =&gt; 0,
		&#039;memory&#039; =&gt; 0];

	foreach ($tokens as $token)
	{
		// Get the total time and memory for this benchmark
		list($time, $memory) = Profiler::total($token);

		if ($max[&#039;time&#039;] === NULL OR $time &gt; $max[&#039;time&#039;])
		{
			// Set the maximum time
			$max[&#039;time&#039;] = $time;
		}

		if ($min[&#039;time&#039;] === NULL OR $time &lt; $min[&#039;time&#039;])
		{
			// Set the minimum time
			$min[&#039;time&#039;] = $time;
		}

		// Increase the total time
		$total[&#039;time&#039;] += $time;

		if ($max[&#039;memory&#039;] === NULL OR $memory &gt; $max[&#039;memory&#039;])
		{
			// Set the maximum memory
			$max[&#039;memory&#039;] = $memory;
		}

		if ($min[&#039;memory&#039;] === NULL OR $memory &lt; $min[&#039;memory&#039;])
		{
			// Set the minimum memory
			$min[&#039;memory&#039;] = $memory;
		}

		// Increase the total memory
		$total[&#039;memory&#039;] += $memory;
	}

	// Determine the number of tokens
	$count = count($tokens);

	// Determine the averages
	$average = [
		&#039;time&#039; =&gt; $total[&#039;time&#039;] / $count,
		&#039;memory&#039; =&gt; $total[&#039;memory&#039;] / $count];

	return [
		&#039;min&#039; =&gt; $min,
		&#039;max&#039; =&gt; $max,
		&#039;total&#039; =&gt; $total,
		&#039;average&#039; =&gt; $average];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="stop"><small>public static</small>  stop(<small>string</small> <span class="param" title="$token">$token</span> )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Stops a benchmark.</p>

<pre><code>Profiler::stop($token);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $token</strong> <small>required</small> - $token</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function stop($token)
{
	// Stop the benchmark
	Profiler::$_marks[$token][&#039;stop_time&#039;]   = microtime(TRUE);
	Profiler::$_marks[$token][&#039;stop_memory&#039;] = memory_get_usage();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="total"><small>public static</small>  total(<small>string</small> <span class="param" title="$token">$token</span> )<small> (defined in <a href='/documentation/api/Kohana_Profiler'>Kohana_Profiler</a>)</small></h3>
<div class='description'><p>Gets the total execution time and memory usage of a benchmark as a list.</p>

<pre><code>list($time, $memory) = Profiler::total($token);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $token</strong> <small>required</small> - $token</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Execution time, memory 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function total($token)
{
	// Import the benchmark data
	$mark = Profiler::$_marks[$token];

	if ($mark[&#039;stop_time&#039;] === FALSE)
	{
		// The benchmark has not been stopped yet
		$mark[&#039;stop_time&#039;]   = microtime(TRUE);
		$mark[&#039;stop_memory&#039;] = memory_get_usage();
	}

	return [
		// Total time in seconds
		$mark[&#039;stop_time&#039;] - $mark[&#039;start_time&#039;],

		// Amount of memory in bytes
		$mark[&#039;stop_memory&#039;] - $mark[&#039;start_memory&#039;],
	];
}</code>
</pre>
</div>
</div>
</div>