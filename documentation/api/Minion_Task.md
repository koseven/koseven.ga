---
layout: api
class: Minion_Task
---
<h1>Minion_Task</h1>
extends <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>
<br />
<p>
<i><p>Interface that all minion tasks must implement</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Minion</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a></p>
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
<a href="#property-task_separator">$task_separator</a>
</li>
<li>
<a href="#property-_accepted_options">$_accepted_options</a>
</li>
<li>
<a href="#property-_errors_file">$_errors_file</a>
</li>
<li>
<a href="#property-_method">$_method</a>
</li>
<li>
<a href="#property-_options">$_options</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#build_validation">build_validation()</a>
</li>
<li>
<a href="#convert_class_to_task">convert_class_to_task()</a>
</li>
<li>
<a href="#convert_task_to_class_name">convert_task_to_class_name()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#get_accepted_options">get_accepted_options()</a>
</li>
<li>
<a href="#get_errors_file">get_errors_file()</a>
</li>
<li>
<a href="#get_options">get_options()</a>
</li>
<li>
<a href="#set_options">set_options()</a>
</li>
<li>
<a href="#valid_option">valid_option()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#_compile_task_list">_compile_task_list()</a>
</li>
<li>
<a href="#_execute">_execute()</a>
</li>
<li>
<a href="#_help">_help()</a>
</li>
<li>
<a href="#_parse_doccomment">_parse_doccomment()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-task_separator'><small>public static</small>  <span class='blue'>string</span> $task_separator</h4>
</dt>
<dd>
 <p>The separator used to separate different levels of tasks</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(1)</span> ":"</pre></dd>
<dt>
<h4 id='property-_accepted_options'><small>protected</small>  <span class='blue'>array</span> $_accepted_options</h4>
</dt>
<dd>
 <p>Populated with the accepted options for this task.
This array is automatically populated based on $_options.</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_errors_file'><small>protected</small>  <span class='blue'>string|NULL</span> $_errors_file</h4>
</dt>
<dd>
 <p>The file that get's passes to Validation::errors() when validation fails</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(10)</span> "validation"</pre></dd>
<dt>
<h4 id='property-_method'><small>protected</small>  <span class='blue'></span> $_method</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(8)</span> "_execute"</pre></dd>
<dt>
<h4 id='property-_options'><small>protected</small>  <span class='blue'>array</span> $_options</h4>
</dt>
<dd>
 <p>The list of options this task accepts and their default values.</p>

<pre><code>protected $_options = array(
    'limit' =&gt; 4,
    'table' =&gt; NULL,
);
</code></pre>
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
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Gets the task name for the task</p>
</div>
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
	static $task_name = NULL;

	if ($task_name === NULL)
	{
		$task_name = Minion_Task::convert_class_to_task($this);
	}

	return $task_name;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="build_validation"><small>public</small>  build_validation(<small>Validation</small> <span class="param" title="The validation object to add rules to ">$validation</span> )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Adds any validation rules/labels for validating _options</p>

<pre><code>public function build_validation(Validation $validation)
{
    return parent::build_validation($validation)
        -&gt;rule('paramname', 'not_empty'); // Require this param
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Validation </span><strong> $validation</strong> <small>required</small> - The validation object to add rules to
</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Validation</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function build_validation(Validation $validation)
{
	// Add a rule to each key making sure it&#039;s in the task
	foreach ($validation-&gt;data() as $key =&gt; $value)
	{
		$validation-&gt;rule($key, [$this, &#039;valid_option&#039;], [&#039;:validation&#039;, &#039;:field&#039;]);
	}

	return $validation;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="convert_class_to_task"><small>public static</small>  convert_class_to_task(<small>string|Minion_Task</small> <span class="param" title="The task class / object">$class</span> )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Gets the task name of a task class / task object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string|Minion_Task </span><strong> $class</strong> <small>required</small> - The task class / object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The task name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function convert_class_to_task($class)
{
	if (is_object($class))
	{
		$class = get_class($class);
	}

	return strtolower(str_replace(&#039;_&#039;, Minion_Task::$task_separator, substr($class, 5)));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="convert_task_to_class_name"><small>public static</small>  convert_task_to_class_name(<small>string</small> <span class="param" title="Task name">$task</span> )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Converts a task (e.g. db:migrate to a class name)</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $task</strong> <small>required</small> - Task name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Class name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function convert_task_to_class_name($task)
{
	$task = trim($task);

	if (empty($task))
		return &#039;&#039;;

	return &#039;Task_&#039;.implode(&#039;_&#039;, array_map(&#039;ucfirst&#039;, explode(Minion_Task::$task_separator, $task)));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Execute the task with the specified set of options</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>null</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute()
{
	$options = $this-&gt;get_options();

	// Validate $options
	$validation = Validation::factory($options);
	$validation = $this-&gt;build_validation($validation);

	if ( $this-&gt;_method != &#039;_help&#039; AND ! $validation-&gt;check())
	{
		echo View::factory(&#039;minion/error/validation&#039;)
			-&gt;set(&#039;task&#039;, Minion_Task::convert_class_to_task($this))
			-&gt;set(&#039;errors&#039;, $validation-&gt;errors($this-&gt;get_errors_file()));
	}
	else
	{
		// Finally, run the task
		$method = $this-&gt;_method;
		echo $this-&gt;{$method}($options);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>array</small> <span class="param" title="An array of command line options. It should contain the 'task' key">$options</span> )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Factory for loading minion tasks</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $options</strong> <small>required</small> - An array of command line options. It should contain the 'task' key</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Minion_Exception_InvalidTask</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Minion_Task</span>  - The Minion task 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($options)
{
	if (($task = Arr::get($options, &#039;task&#039;)) !== NULL)
	{
		unset($options[&#039;task&#039;]);
	}
	else if (($task = Arr::get($options, 0)) !== NULL)
	{
		// The first positional argument (aka 0) may be the task name
		unset($options[0]);
	}
	else
	{
		// If we didn&#039;t get a valid task, generate the help
		$task = &#039;help&#039;;
	}

	$class = Minion_Task::convert_task_to_class_name($task);

	if ( ! class_exists($class))
	{
		throw new Minion_Exception_InvalidTask(
			&quot;Task &#039;:task&#039; is not a valid minion task&quot;,
			[&#039;:task&#039; =&gt; $class]
		);
	}

	$class = new $class;

	if ( ! $class instanceof Minion_Task)
	{
		throw new Minion_Exception_InvalidTask(
			&quot;Task &#039;:task&#039; is not a valid minion task&quot;,
			[&#039;:task&#039; =&gt; $class]
		);
	}

	$class-&gt;set_options($options);

	// Show the help page for this task if requested
	if (array_key_exists(&#039;help&#039;, $options))
	{
		$class-&gt;_method = &#039;_help&#039;;
	}

	return $class;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_accepted_options"><small>public</small>  get_accepted_options()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Get a set of options that this task can accept</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_accepted_options()
{
	return (array) $this-&gt;_accepted_options;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_errors_file"><small>public</small>  get_errors_file()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Returns $_errors_file</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_errors_file()
{
	return $this-&gt;_errors_file;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_options"><small>public</small>  get_options()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Get the options that were passed into this task with their defaults</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get_options()
{
	return (array) $this-&gt;_options;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_options"><small>public</small>  set_options()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Sets options for this task</p>

<p>$param  array  the array of options to set</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_options(array $options)
{
	foreach ($options as $key =&gt; $value)
	{
		$this-&gt;_options[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid_option"><small>public</small>  valid_option()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function valid_option(Validation $validation, $option)
{
	if ( ! in_array($option, $this-&gt;_accepted_options))
	{
		$validation-&gt;error($option, &#039;minion_option&#039;);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>protected</small>  __construct()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct()
{
	// Populate $_accepted_options based on keys from $_options
	$this-&gt;_accepted_options = array_keys($this-&gt;_options);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_compile_task_list"><small>protected</small>  _compile_task_list(<small>array</small> <span class="param" title="Directory structure of tasks">$files</span> [, <small>string</small> <span class="param" title="Prefix">$prefix</span> <small>= <small>string</small><span>(0)</span> ""</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Compiles a list of available tasks from a directory structure</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $files</strong> <small>required</small> - Directory structure of tasks</li>
<li>
 <span class="blue">string </span><strong> $prefix</strong> <small> = <small>string</small><span>(0)</span> ""</small> - Prefix</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Compiled tasks 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _compile_task_list(array $files, $prefix = &#039;&#039;)
{
	$output = [];

	foreach ($files as $file =&gt; $path)
	{
		$file = substr($file, strrpos($file, DIRECTORY_SEPARATOR) + 1);

		if (is_array($path) AND count($path))
		{
			$task = $this-&gt;_compile_task_list($path, $prefix.$file.Minion_Task::$task_separator);

			if ($task)
			{
				$output = array_merge($output, $task);
			}
		}
		else
		{
			$output[] = strtolower($prefix.substr($file, 0, -strlen(EXT)));
		}
	}

	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_execute"><small>abstract protected</small>  _execute()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _execute(array $params);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_help"><small>protected</small>  _help()<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Outputs help for this task</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>null</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _help(array $params)
{
	$tasks = $this-&gt;_compile_task_list(Kohana::list_files(&#039;classes/task&#039;));

	$inspector = new ReflectionClass($this);

	list($description, $tags) = $this-&gt;_parse_doccomment($inspector-&gt;getDocComment());

	$view = View::factory(&#039;minion/help/task&#039;)
		-&gt;set(&#039;description&#039;, $description)
		-&gt;set(&#039;tags&#039;, (array) $tags)
		-&gt;set(&#039;task&#039;, Minion_Task::convert_class_to_task($this));

	echo $view;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_parse_doccomment"><small>protected</small>  _parse_doccomment(<small>string</small> <span class="param" title="The comment to parse">$comment</span> )<small> (defined in <a href='/documentation/api/Kohana_Minion_Task'>Kohana_Minion_Task</a>)</small></h3>
<div class='description'><p>Parses a doccomment, extracting both the comment and any tags associated</p>

<p>Based on the code in Kodoc::parse()</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $comment</strong> <small>required</small> - The comment to parse</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - First element is the comment, second is an array of tags 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _parse_doccomment($comment)
{
	// Normalize all new lines to \n
	$comment = str_replace([&quot;\r\n&quot;, &quot;\n&quot;], &quot;\n&quot;, $comment);

	// Remove the phpdoc open/close tags and split
	$comment = array_slice(explode(&quot;\n&quot;, $comment), 1, -1);

	// Tag content
	$tags = [];

	foreach ($comment as $i =&gt; $line)
	{
		// Remove all leading whitespace
		$line = preg_replace(&#039;/^\s*\* ?/m&#039;, &#039;&#039;, $line);

		// Search this line for a tag
		if (preg_match(&#039;/^@(\S+)(?:\s*(.+))?$/&#039;, $line, $matches))
		{
			// This is a tag line
			unset($comment[$i]);

			$name = $matches[1];
			$text = isset($matches[2]) ? $matches[2] : &#039;&#039;;

			$tags[$name] = $text;
		}
		else
		{
			$comment[$i] = (string) $line;
		}
	}

	$comment = trim(implode(&quot;\n&quot;, $comment));

	return [$comment, $tags];
}</code>
</pre>
</div>
</div>
</div>