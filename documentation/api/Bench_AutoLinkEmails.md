---
layout: api
class: Bench_AutoLinkEmails
---
<h1>Bench_AutoLinkEmails</h1>
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
<a href="#bench_match_all_loop">bench_match_all_loop()</a>
</li>
<li>
<a href="#bench_replace_callback_external">bench_replace_callback_external()</a>
</li>
<li>
<a href="#bench_replace_callback_internal">bench_replace_callback_internal()</a>
</li>
<li>
<a href="#bench_replace_e">bench_replace_e()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#run">run()</a>
</li>
<li>
<a href="#_callback_external">_callback_external()</a>
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
 <pre class="debug"><small>string</small><span>(98)</span> "Fixing &lt;a href="http://dev.kohanaphp.com/issues/2772"&gt;#2772&lt;/a&gt;, and comparing some possibilities."</pre></dd>
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
 <pre class="debug"><small>integer</small> 1000</pre></dd>
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
 <pre class="debug"><small>array</small><span>(1)</span> <span>(
    0 => <small>string</small><span>(86)</span> "&lt;ul&gt;
		    &lt;li&gt;voorzitter@xxxx.com&lt;/li&gt;
		    &lt;li&gt;vicevoorzitter@xxxx.com&lt;/li&gt;
		&lt;/ul&gt;"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="bench_match_all_loop"><small>public</small>  bench_match_all_loop()<small> (defined in <a href='/documentation/api/Bench_AutoLinkEmails'>Bench_AutoLinkEmails</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_match_all_loop($subject)
{
	if (preg_match_all(&#039;~\b(?&lt;!href=&quot;mailto:|&quot;&gt;|58;)(?!\.)[-+_a-z0-9.]++(?&lt;!\.)@(?![-.])[-a-z0-9.]+(?&lt;!\.)\.[a-z]{2,6}\b~i&#039;, $subject, $matches))
	{
		foreach ($matches[0] as $match)
		{
			$subject = preg_replace(&#039;!\b&#039;.preg_quote($match).&#039;\b!&#039;, HTML::mailto($match), $subject);
		}
	}

	return $subject;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_replace_callback_external"><small>public</small>  bench_replace_callback_external()<small> (defined in <a href='/documentation/api/Bench_AutoLinkEmails'>Bench_AutoLinkEmails</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_replace_callback_external($subject)
{
	return preg_replace_callback(
		&#039;~\b(?&lt;!href=&quot;mailto:|&quot;&gt;|58;)(?!\.)[-+_a-z0-9.]++(?&lt;!\.)@(?![-.])[-a-z0-9.]+(?&lt;!\.)\.[a-z]{2,6}\b~i&#039;,
		[$this, &#039;_callback_external&#039;],
		$subject
	);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_replace_callback_internal"><small>public</small>  bench_replace_callback_internal()<small> (defined in <a href='/documentation/api/Bench_AutoLinkEmails'>Bench_AutoLinkEmails</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_replace_callback_internal($subject)
{
	return preg_replace_callback(
		&#039;~\b(?&lt;!href=&quot;mailto:|&quot;&gt;|58;)(?!\.)[-+_a-z0-9.]++(?&lt;!\.)@(?![-.])[-a-z0-9.]+(?&lt;!\.)\.[a-z]{2,6}\b~i&#039;,
		function($matches)
		{
			return HTML::mailto($matches[0]);
		}, // Yuck!
		$subject
	);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bench_replace_e"><small>public</small>  bench_replace_e()<small> (defined in <a href='/documentation/api/Bench_AutoLinkEmails'>Bench_AutoLinkEmails</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bench_replace_e($subject)
{
	return preg_replace(
		&#039;~\b(?&lt;!href=&quot;mailto:|&quot;&gt;|58;)(?!\.)[-+_a-z0-9.]++(?&lt;!\.)@(?![-.])[-a-z0-9.]+(?&lt;!\.)\.[a-z]{2,6}\b~ie&#039;,
		&#039;HTML::mailto(&quot;$0&quot;)&#039;, // Yuck!
		$subject
	);
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
<h3 id="_callback_external"><small>protected</small>  _callback_external()<small> (defined in <a href='/documentation/api/Bench_AutoLinkEmails'>Bench_AutoLinkEmails</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _callback_external($matches)
{
	return HTML::mailto($matches[0]);
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