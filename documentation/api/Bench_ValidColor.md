---
layout: api
class: Bench_ValidColor
---
<h1>Bench_ValidColor</h1>
extends <a href='/documentation/api/Codebench'>Codebench</a>
<br />
extends <a href='/documentation/api/Kohana_Codebench'>Kohana_Codebench</a>
<br />
<p>
<i>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Codebench</dd>
<dt>category</dt>
<dd>Tests</dd>
<dt>author</dt>
<dd>Geert De Deckere <geert@idoe.be></dd>
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
<a href="#property-description">$description</a>
</li>
<li>
<a href="#property-grades">$grades</a>
</li>
<li>
<a href="#property-loops">$loops</a>
</li>
<li>
<a href="#property-subjects">$subjects</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#bench_corey_regex_1_invalid">bench_corey_regex_1_invalid()</a>
</li>
<li>
<a href="#bench_corey_regex_2">bench_corey_regex_2()</a>
</li>
<li>
<a href="#bench_geert_regex_1a_invalid">bench_geert_regex_1a_invalid()</a>
</li>
<li>
<a href="#bench_geert_regex_1b_invalid">bench_geert_regex_1b_invalid()</a>
</li>
<li>
<a href="#bench_geert_regex_2a">bench_geert_regex_2a()</a>
</li>
<li>
<a href="#bench_geert_regex_2b">bench_geert_regex_2b()</a>
</li>
<li>
<a href="#bench_geert_str">bench_geert_str()</a>
</li>
<li>
<a href="#bench_salathe_regex_1">bench_salathe_regex_1()</a>
</li>
<li>
<a href="#bench_salathe_regex_2">bench_salathe_regex_2()</a>
</li>
<li>
<a href="#bench_salathe_str">bench_salathe_str()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#run">run()</a>
</li>
<li>
<a href="#_grade">_grade()</a>
</li>
<li>
<a href="#_method_filter">_method_filter()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-description'><small>public</small>  <span class='blue'></span> $description</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(482)</span> "Optimization for &lt;code&gt;Validate::color()&lt;/code&gt;.
		 See: http://forum.kohanaphp.com/comments.php?DiscussionID=2192.

		 Note that the methods with an &lt;em&gt;_invalid&lt;/em&gt; suffix contain flawed regexes and should be
		 completely discarded. I left them in here for educational purposes, and to remind myself
		 to think harder and test more thoroughly. It can't be that I only found out so late in
		 the game. For the regex explanation have a look at the forum topic mentioned earlier."</pre></dd>
<dt>
<h4 id='property-grades'><small>public</small>  <span class='blue'>array</span> $grades</h4>
</dt>
<dd>
 <p>Grade letters with their maximum scores. Used to color the graphs.</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(6)</span> <span>(
    125 => <small>string</small><span>(1)</span> "A"
    150 => <small>string</small><span>(1)</span> "B"
    200 => <small>string</small><span>(1)</span> "C"
    300 => <small>string</small><span>(1)</span> "D"
    500 => <small>string</small><span>(1)</span> "E"
    "default" => <small>string</small><span>(1)</span> "F"
)</span></pre></dd>
<dt>
<h4 id='property-loops'><small>public</small>  <span class='blue'></span> $loops</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 10000</pre></dd>
<dt>
<h4 id='property-subjects'><small>public</small>  <span class='blue'></span> $subjects</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(10)</span> <span>(
    0 => <small>string</small><span>(3)</span> "aaA"
    1 => <small>string</small><span>(3)</span> "123"
    2 => <small>string</small><span>(6)</span> "000000"
    3 => <small>string</small><span>(7)</span> "#123456"
    4 => <small>string</small><span>(7)</span> "#abcdef"
    5 => <small>string</small><span>(3)</span> "ggg"
    6 => <small>string</small><span>(4)</span> "1234"
    7 => <small>string</small><span>(8)</span> "#1234567"
    8 => <small>string</small><span>(5)</span> "#000
"
    9 => <small>string</small><span>(13)</span> "}§è!çà%$z"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="bench_corey_regex_1_invalid"><small>public</small>  bench_corey_regex_1_invalid()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_corey_regex_1_invalid($subject)
{
	return (bool) preg_match(&#039;/^#?([0-9a-f]{1,2}){3}$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_corey_regex_2"><small>public</small>  bench_corey_regex_2()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_corey_regex_2($subject)
{
	return (bool) preg_match(&#039;/^#?([0-9a-f]){3}(([0-9a-f]){3})?$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_geert_regex_1a_invalid"><small>public</small>  bench_geert_regex_1a_invalid()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_geert_regex_1a_invalid($subject)
{
	return (bool) preg_match(&#039;/^#?(?:[0-9a-f]{1,2}+){3}$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_geert_regex_1b_invalid"><small>public</small>  bench_geert_regex_1b_invalid()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_geert_regex_1b_invalid($subject)
{
	return (bool) preg_match(&#039;/^#?+(?:[0-9a-f]{1,2}+){3}$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_geert_regex_2a"><small>public</small>  bench_geert_regex_2a()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_geert_regex_2a($subject)
{
	return (bool) preg_match(&#039;/^#?[0-9a-f]{3}(?:[0-9a-f]{3})?$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_geert_regex_2b"><small>public</small>  bench_geert_regex_2b()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_geert_regex_2b($subject)
{
	return (bool) preg_match(&#039;/^#?+[0-9a-f]{3}(?:[0-9a-f]{3})?$/iD&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_geert_str"><small>public</small>  bench_geert_str()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_geert_str($subject)
{
	if ($subject[0] === &#039;#&#039;)
	{
		$subject = substr($subject, 1);
	}

	$strlen = strlen($subject);
	return (($strlen === 3 OR $strlen === 6) AND ctype_xdigit($subject));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_salathe_regex_1"><small>public</small>  bench_salathe_regex_1()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_salathe_regex_1($subject)
{
	return (bool) preg_match(&#039;/^#?+[0-9a-f]{3}(?:[0-9a-f]{3})?\z/i&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_salathe_regex_2"><small>public</small>  bench_salathe_regex_2()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_salathe_regex_2($subject)
{
	return (bool) preg_match(&#039;/\A#?+[0-9a-f]{3}(?:[0-9a-f]{3})?\z/i&#039;, $subject);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_salathe_str"><small>public</small>  bench_salathe_str()<small> (defined in <a href='/documentation/api/Bench_ValidColor'>Bench_ValidColor</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_salathe_str($subject)
{
	if ($subject[0] === &#039;#&#039;)
	{
		$subject = substr($subject, 1);
	}

	// TRUE if:
	// 1. $subject is 6 or 3 chars long
	// 2. $subject contains only hexadecimal digits
	return (((isset($subject[5]) AND ! isset($subject[6])) OR
		(isset($subject[2]) AND ! isset($subject[3])))
		AND ctype_xdigit($subject));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct()<small> (defined in <a href='/documentation/api/Kohana_Codebench'>Kohana_Codebench</a>)</small></h3>
<div class='description'><p>Constructor.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct()
{
	// Set the maximum execution time
	set_time_limit(Kohana::$config-&gt;load(&#039;codebench&#039;)-&gt;max_execution_time);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="run"><small>public</small>  run()<small> (defined in <a href='/documentation/api/Kohana_Codebench'>Kohana_Codebench</a>)</small></h3>
<div class='description'><p>Runs Codebench on the extending class.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Benchmark output 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function run()
{
	// Array of all methods to loop over
	$methods = array_filter(get_class_methods($this), [$this, &#039;_method_filter&#039;]);

	// Make sure the benchmark runs at least once,
	// also if no subject data has been provided.
	if (empty($this-&gt;subjects))
	{
		$this-&gt;subjects = [&#039;NULL&#039; =&gt; NULL];
	}

	// Initialize benchmark output
	$codebench = [
		&#039;class&#039;       =&gt; get_class($this),
		&#039;description&#039; =&gt; $this-&gt;description,
		&#039;loops&#039;       =&gt; [
			&#039;base&#039;    =&gt; (int) $this-&gt;loops,
			&#039;total&#039;   =&gt; (int) $this-&gt;loops * count($this-&gt;subjects) * count($methods),
		],
		&#039;subjects&#039;    =&gt; $this-&gt;subjects,
		&#039;benchmarks&#039;  =&gt; [],
	];

	// Benchmark each method
	foreach ($methods as $method)
	{
		// Initialize benchmark output for this method
		$codebench[&#039;benchmarks&#039;][$method] = [&#039;time&#039; =&gt; 0, &#039;memory&#039; =&gt; 0];

		// Using Reflection because simply calling $this-&gt;$method($subject) in the loop below
		// results in buggy benchmark times correlating to the length of the method name.
		$reflection = new ReflectionMethod(get_class($this), $method);

		// Benchmark each subject on each method
		foreach ($this-&gt;subjects as $subject_key =&gt; $subject)
		{
			// Prerun each method/subject combo before the actual benchmark loop.
			// This way relatively expensive initial processes won&#039;t be benchmarked, e.g. autoloading.
			// At the same time we capture the return here so we don&#039;t have to do that in the loop anymore.
			$return = $reflection-&gt;invoke($this, $subject);

			// Start the timer for one subject
			$token = Profiler::start(&#039;codebench&#039;, $method.$subject_key);

			// The heavy work
			for ($i = 0; $i &lt; $this-&gt;loops; ++$i)
			{
				$reflection-&gt;invoke($this, $subject);
			}

			// Stop and read the timer
			$benchmark = Profiler::total($token);

			// Benchmark output specific to the current method and subject
			$codebench[&#039;benchmarks&#039;][$method][&#039;subjects&#039;][$subject_key] = [
				&#039;return&#039; =&gt; $return,
				&#039;time&#039;   =&gt; $benchmark[0],
				&#039;memory&#039; =&gt; $benchmark[1],
			];

			// Update method totals
			$codebench[&#039;benchmarks&#039;][$method][&#039;time&#039;]   += $benchmark[0];
			$codebench[&#039;benchmarks&#039;][$method][&#039;memory&#039;] += $benchmark[1];
		}
	}

	// Initialize the fastest and slowest benchmarks for both methods and subjects, time and memory,
	// these values will be overwritten using min() and max() later on.
	// The 999999999 values look like a hack, I know, but they work,
	// unless your method runs for more than 31 years or consumes over 1GB of memory.
	$fastest_method = $fastest_subject = [&#039;time&#039; =&gt; 999999999, &#039;memory&#039; =&gt; 999999999];
	$slowest_method = $slowest_subject = [&#039;time&#039; =&gt; 0, &#039;memory&#039; =&gt; 0];

	// Find the fastest and slowest benchmarks, needed for the percentage calculations
	foreach ($methods as $method)
	{
		// Update the fastest and slowest method benchmarks
		$fastest_method[&#039;time&#039;]   = min($fastest_method[&#039;time&#039;],   $codebench[&#039;benchmarks&#039;][$method][&#039;time&#039;]);
		$fastest_method[&#039;memory&#039;] = min($fastest_method[&#039;memory&#039;], $codebench[&#039;benchmarks&#039;][$method][&#039;memory&#039;]);
		$slowest_method[&#039;time&#039;]   = max($slowest_method[&#039;time&#039;],   $codebench[&#039;benchmarks&#039;][$method][&#039;time&#039;]);
		$slowest_method[&#039;memory&#039;] = max($slowest_method[&#039;memory&#039;], $codebench[&#039;benchmarks&#039;][$method][&#039;memory&#039;]);

		foreach ($this-&gt;subjects as $subject_key =&gt; $subject)
		{
			// Update the fastest and slowest subject benchmarks
			$fastest_subject[&#039;time&#039;]   = min($fastest_subject[&#039;time&#039;],   $codebench[&#039;benchmarks&#039;][$method][&#039;subjects&#039;][$subject_key][&#039;time&#039;]);
			$fastest_subject[&#039;memory&#039;] = min($fastest_subject[&#039;memory&#039;], $codebench[&#039;benchmarks&#039;][$method][&#039;subjects&#039;][$subject_key][&#039;memory&#039;]);
			$slowest_subject[&#039;time&#039;]   = max($slowest_subject[&#039;time&#039;],   $codebench[&#039;benchmarks&#039;][$method][&#039;subjects&#039;][$subject_key][&#039;time&#039;]);
			$slowest_subject[&#039;memory&#039;] = max($slowest_subject[&#039;memory&#039;], $codebench[&#039;benchmarks&#039;][$method][&#039;subjects&#039;][$subject_key][&#039;memory&#039;]);
		}
	}

	// Percentage calculations for methods
	foreach ($codebench[&#039;benchmarks&#039;] as &amp; $method)
	{
		// Calculate percentage difference relative to fastest and slowest methods
		$method[&#039;percent&#039;][&#039;fastest&#039;][&#039;time&#039;]   = (empty($fastest_method[&#039;time&#039;]))   ? 0 : ($method[&#039;time&#039;]   / $fastest_method[&#039;time&#039;]   * 100);
		$method[&#039;percent&#039;][&#039;fastest&#039;][&#039;memory&#039;] = (empty($fastest_method[&#039;memory&#039;])) ? 0 : ($method[&#039;memory&#039;] / $fastest_method[&#039;memory&#039;] * 100);
		$method[&#039;percent&#039;][&#039;slowest&#039;][&#039;time&#039;]   = (empty($slowest_method[&#039;time&#039;]))   ? 0 : ($method[&#039;time&#039;]   / $slowest_method[&#039;time&#039;]   * 100);
		$method[&#039;percent&#039;][&#039;slowest&#039;][&#039;memory&#039;] = (empty($slowest_method[&#039;memory&#039;])) ? 0 : ($method[&#039;memory&#039;] / $slowest_method[&#039;memory&#039;] * 100);

		// Assign a grade for time and memory to each method
		$method[&#039;grade&#039;][&#039;time&#039;]   = $this-&gt;_grade($method[&#039;percent&#039;][&#039;fastest&#039;][&#039;time&#039;]);
		$method[&#039;grade&#039;][&#039;memory&#039;] = $this-&gt;_grade($method[&#039;percent&#039;][&#039;fastest&#039;][&#039;memory&#039;]);

		// Percentage calculations for subjects
		foreach ($method[&#039;subjects&#039;] as &amp; $subject)
		{
			// Calculate percentage difference relative to fastest and slowest subjects for this method
			$subject[&#039;percent&#039;][&#039;fastest&#039;][&#039;time&#039;]   = (empty($fastest_subject[&#039;time&#039;]))   ? 0 : ($subject[&#039;time&#039;]   / $fastest_subject[&#039;time&#039;]   * 100);
			$subject[&#039;percent&#039;][&#039;fastest&#039;][&#039;memory&#039;] = (empty($fastest_subject[&#039;memory&#039;])) ? 0 : ($subject[&#039;memory&#039;] / $fastest_subject[&#039;memory&#039;] * 100);
			$subject[&#039;percent&#039;][&#039;slowest&#039;][&#039;time&#039;]   = (empty($slowest_subject[&#039;time&#039;]))   ? 0 : ($subject[&#039;time&#039;]   / $slowest_subject[&#039;time&#039;]   * 100);
			$subject[&#039;percent&#039;][&#039;slowest&#039;][&#039;memory&#039;] = (empty($slowest_subject[&#039;memory&#039;])) ? 0 : ($subject[&#039;memory&#039;] / $slowest_subject[&#039;memory&#039;] * 100);

			// Assign a grade letter for time and memory to each subject
			$subject[&#039;grade&#039;][&#039;time&#039;]   = $this-&gt;_grade($subject[&#039;percent&#039;][&#039;fastest&#039;][&#039;time&#039;]);
			$subject[&#039;grade&#039;][&#039;memory&#039;] = $this-&gt;_grade($subject[&#039;percent&#039;][&#039;fastest&#039;][&#039;memory&#039;]);
		}
	}

	return $codebench;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_grade"><small>protected</small>  _grade(<small>integer|double</small> <span class="param" title="Score">$score</span> )<small> (defined in <a href='/documentation/api/Kohana_Codebench'>Kohana_Codebench</a>)</small></h3>
<div class='description'><p>Returns the applicable grade letter for a score.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer|double </span><strong> $score</strong> <small>required</small> - Score</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Grade letter 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _grade($score)
{
	foreach ($this-&gt;grades as $max =&gt; $grade)
	{
		if ($max === &#039;default&#039;)
			continue;

		if ($score &lt;= $max)
			return $grade;
	}

	return $this-&gt;grades[&#039;default&#039;];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_method_filter"><small>protected</small>  _method_filter(<small>string</small> <span class="param" title="Method name">$method</span> )<small> (defined in <a href='/documentation/api/Kohana_Codebench'>Kohana_Codebench</a>)</small></h3>
<div class='description'><p>Callback for array_filter().
Filters out all methods not to benchmark.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $method</strong> <small>required</small> - Method name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _method_filter($method)
{
	// Only benchmark methods with the &quot;bench&quot; prefix
	return (substr($method, 0, 5) === &#039;bench&#039;);
}</code>
</pre>
</div>
</div>
</div>