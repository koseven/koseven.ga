---
layout: api
class: Validation
---
<h1>Validation</h1>
extends <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/ArrayAccess'>ArrayAccess</a></small>
</p>
<p>
<i><p>Array and variable validation.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Security</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a></p>
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
<a href="#property-_bound">$_bound</a>
</li>
<li>
<a href="#property-_data">$_data</a>
</li>
<li>
<a href="#property-_empty_rules">$_empty_rules</a>
</li>
<li>
<a href="#property-_errors">$_errors</a>
</li>
<li>
<a href="#property-_labels">$_labels</a>
</li>
<li>
<a href="#property-_rules">$_rules</a>
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
<a href="#as_array">as_array()</a>
</li>
<li>
<a href="#bind">bind()</a>
</li>
<li>
<a href="#check">check()</a>
</li>
<li>
<a href="#copy">copy()</a>
</li>
<li>
<a href="#data">data()</a>
</li>
<li>
<a href="#error">error()</a>
</li>
<li>
<a href="#errors">errors()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#label">label()</a>
</li>
<li>
<a href="#labels">labels()</a>
</li>
<li>
<a href="#offsetExists">offsetExists()</a>
</li>
<li>
<a href="#offsetGet">offsetGet()</a>
</li>
<li>
<a href="#offsetSet">offsetSet()</a>
</li>
<li>
<a href="#offsetUnset">offsetUnset()</a>
</li>
<li>
<a href="#rule">rule()</a>
</li>
<li>
<a href="#rules">rules()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_bound'><small>protected</small>  <span class='blue'></span> $_bound</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_data'><small>protected</small>  <span class='blue'></span> $_data</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_empty_rules'><small>protected</small>  <span class='blue'></span> $_empty_rules</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(2)</span> <span>(
    0 => <small>string</small><span>(9)</span> "not_empty"
    1 => <small>string</small><span>(7)</span> "matches"
)</span></pre></dd>
<dt>
<h4 id='property-_errors'><small>protected</small>  <span class='blue'></span> $_errors</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_labels'><small>protected</small>  <span class='blue'></span> $_labels</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_rules'><small>protected</small>  <span class='blue'></span> $_rules</h4>
</dt>
<dd>
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
<h3 id="__construct"><small>public</small>  __construct(<small>array</small> <span class="param" title="Array to validate">$array</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Sets the unique "any field" key and creates an ArrayObject from the
passed array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to validate</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(array $array)
{
	$this-&gt;_data = $array;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_array"><small>public</small>  as_array()<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Returns the array representation of the current object.
Deprecated in favor of <a href="#data">Validation::data</a></p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Deprecated - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_array()
{
	return $this-&gt;_data;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bind"><small>public</small>  bind(<small>string</small> <span class="param" title="Variable name or an array of variables">$key</span> [, <small>mixed</small> <span class="param" title="Value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Bind a value to a parameter definition.</p>

<pre><code>// This allows you to use :model in the parameter definition of rules
$validation-&gt;bind(':model', $model)
    -&gt;rule('status', 'valid_status', array(':model'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Variable name or an array of variables</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function bind($key, $value = NULL)
{
	if (is_array($key))
	{
		foreach ($key as $name =&gt; $value)
		{
			$this-&gt;_bound[$name] = $value;
		}
	}
	else
	{
		$this-&gt;_bound[$key] = $value;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check"><small>public</small>  check()<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Executes all validation rules. This should
typically be called within an if/else block.</p>

<pre><code>if ($validation-&gt;check())
{
     // The data is valid, do something here
}
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function check()
{
	if (Kohana::$profiling === TRUE)
	{
		// Start a new benchmark
		$benchmark = Profiler::start(&#039;Validation&#039;, __FUNCTION__);
	}

	// New data set
	$data = $this-&gt;_errors = [];

	// Store the original data because this class should not modify it post-validation
	$original = $this-&gt;_data;

	// Get a list of the expected fields
	$expected = Arr::merge(array_keys($original), array_keys($this-&gt;_labels));

	// Import the rules locally
	$rules = $this-&gt;_rules;

	foreach ($expected as $field)
	{
		// Use the submitted value or NULL if no data exists
		$data[$field] = Arr::get($this, $field);

		if (isset($rules[TRUE]))
		{
			if ( ! isset($rules[$field]))
			{
				// Initialize the rules for this field
				$rules[$field] = [];
			}

			// Append the rules
			$rules[$field] = array_merge($rules[$field], $rules[TRUE]);
		}
	}

	// Overload the current array with the new one
	$this-&gt;_data = $data;

	// Remove the rules that apply to every field
	unset($rules[TRUE]);

	// Bind the validation object to :validation
	$this-&gt;bind(&#039;:validation&#039;, $this);
	// Bind the data to :data
	$this-&gt;bind(&#039;:data&#039;, $this-&gt;_data);

	// Execute the rules
	foreach ($rules as $field =&gt; $set)
	{
		// Get the field value
		$value = $this[$field];

		// Bind the field name and value to :field and :value respectively
		$this-&gt;bind([
			&#039;:field&#039; =&gt; $field,
			&#039;:value&#039; =&gt; $value,
		]);

		foreach ($set as $array)
		{
			// Rules are defined as array($rule, $params)
			list($rule, $params) = $array;

			foreach ($params as $key =&gt; $param)
			{
				if (is_string($param) AND array_key_exists($param, $this-&gt;_bound))
				{
					// Replace with bound value
					$params[$key] = $this-&gt;_bound[$param];
				}
			}

			// Default the error name to be the rule (except array and lambda rules)
			$error_name = $rule;

			if (is_array($rule))
			{
				// Allows rule(&#039;field&#039;, array(&#039;:model&#039;, &#039;some_rule&#039;));
				if (is_string($rule[0]) AND array_key_exists($rule[0], $this-&gt;_bound))
				{
					// Replace with bound value
					$rule[0] = $this-&gt;_bound[$rule[0]];
				}

				// This is an array callback, the method name is the error name
				$error_name = $rule[1];
				$passed = call_user_func_array($rule, $params);
			}
			elseif ( ! is_string($rule))
			{
				// This is a lambda function, there is no error name (errors must be added manually)
				$error_name = FALSE;
				$passed = call_user_func_array($rule, $params);
			}
			elseif (method_exists(&#039;Valid&#039;, $rule))
			{
				// Use a method in this object
				$method = new ReflectionMethod(&#039;Valid&#039;, $rule);

				// Call static::$rule($this[$field], $param, ...) with Reflection
				$passed = $method-&gt;invokeArgs(NULL, $params);
			}
			elseif (strpos($rule, &#039;::&#039;) === FALSE)
			{
				// Use a function call
				$function = new ReflectionFunction($rule);

				// Call $function($this[$field], $param, ...) with Reflection
				$passed = $function-&gt;invokeArgs($params);
			}
			else
			{
				// Split the class and method of the rule
				list($class, $method) = explode(&#039;::&#039;, $rule, 2);

				// Use a static method call
				$method = new ReflectionMethod($class, $method);

				// Call $Class::$method($this[$field], $param, ...) with Reflection
				$passed = $method-&gt;invokeArgs(NULL, $params);
			}

			// Ignore return values from rules when the field is empty
			if ( ! in_array($rule, $this-&gt;_empty_rules) AND ! Valid::not_empty($value))
				continue;

			if ($passed === FALSE AND $error_name !== FALSE)
			{
				// Add the rule to the errors
				$this-&gt;error($field, $error_name, $params);

				// This field has an error, stop executing rules
				break;
			}
			elseif (isset($this-&gt;_errors[$field]))
			{
				// The callback added the error manually, stop checking rules
				break;
			}
		}
	}

	// Unbind all the automatic bindings to avoid memory leaks.
	unset($this-&gt;_bound[&#039;:validation&#039;]);
	unset($this-&gt;_bound[&#039;:data&#039;]);
	unset($this-&gt;_bound[&#039;:field&#039;]);
	unset($this-&gt;_bound[&#039;:value&#039;]);


	// Restore the data to its original form
	$this-&gt;_data = $original;

	if (isset($benchmark))
	{
		// Stop benchmarking
		Profiler::stop($benchmark);
	}

	return empty($this-&gt;_errors);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="copy"><small>public</small>  copy(<small>array</small> <span class="param" title="New data set">$array</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Copies the current rules to a new array.</p>

<pre><code>$copy = $array-&gt;copy($new_data);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - New data set</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.5</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Validation</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function copy(array $array)
{
	// Create a copy of the current validation set
	$copy = clone $this;

	// Replace the data set
	$copy-&gt;_data = $array;

	return $copy;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="data"><small>public</small>  data()<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Returns the array of data to be validated.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function data()
{
	return $this-&gt;_data;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="error"><small>public</small>  error(<small>string</small> <span class="param" title="Field name">$field</span> , <small>string</small> <span class="param" title="Error message">$error</span> [, <small>array</small> <span class="param" title="$params">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Add an error to a field.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - Field name</li>
<li>
 <span class="blue">string </span><strong> $error</strong> <small>required</small> - Error message</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - $params</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function error($field, $error, array $params = NULL)
{
	$this-&gt;_errors[$field] = [$error, $params];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="errors"><small>public</small>  errors([ <small>string</small> <span class="param" title="File to load error messages from">$file</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Translate the message">$translate</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Returns the error messages. If no file is specified, the error message
will be the name of the rule that failed. When a file is specified, the
message will be loaded from "field/rule", or if no rule-specific message
exists, "field/default" will be used. If neither is set, the returned
message will be "file/field/rule".</p>

<p>By default all messages are translated using the default language.
A string can be used as the second parameter to specified the language
that the message was written in.</p>

<pre><code>// Get errors from messages/forms/login.php
$errors = $Validation-&gt;errors('forms/login');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small> = <small>NULL</small></small> - File to load error messages from</li>
<li>
 <span class="blue">mixed </span><strong> $translate</strong> <small> = <small>bool</small> TRUE</small> - Translate the message</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#message">Kohana::message</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function errors($file = NULL, $translate = TRUE)
{
	if ($file === NULL)
	{
		// Return the error list
		return $this-&gt;_errors;
	}

	// Create a new message list
	$messages = [];

	foreach ($this-&gt;_errors as $field =&gt; $set)
	{
		list($error, $params) = $set;

		// Get the label for this field
		$label = $this-&gt;_labels[$field];

		if ($translate)
		{
			if (is_string($translate))
			{
				// Translate the label using the specified language
				$label = __($label, NULL, $translate);
			}
			else
			{
				// Translate the label
				$label = __($label);
			}
		}

		// Start the translation values list
		$values = [
			&#039;:field&#039; =&gt; $label,
			&#039;:value&#039; =&gt; Arr::get($this, $field),
		];

		if (is_array($values[&#039;:value&#039;]))
		{
			// All values must be strings
			$values[&#039;:value&#039;] = implode(&#039;, &#039;, Arr::flatten($values[&#039;:value&#039;]));
		}

		if ($params)
		{
			foreach ($params as $key =&gt; $value)
			{
				if (is_array($value))
				{
					// All values must be strings
					$value = implode(&#039;, &#039;, Arr::flatten($value));
				}
				elseif (is_object($value))
				{
					// Objects cannot be used in message files
					continue;
				}

				// Check if a label for this parameter exists
				if (isset($this-&gt;_labels[$value]))
				{
					// Use the label as the value, eg: related field name for &quot;matches&quot;
					$value = $this-&gt;_labels[$value];

					if ($translate)
					{
						if (is_string($translate))
						{
							// Translate the value using the specified language
							$value = __($value, NULL, $translate);
						}
						else
						{
							// Translate the value
							$value = __($value);
						}
					}
				}

				// Add each parameter as a numbered value, starting from 1
				$values[&#039;:param&#039;.($key + 1)] = $value;
			}
		}

		if ($message = Kohana::message($file, &quot;{$field}.{$error}&quot;) AND is_string($message))
		{
			// Found a message for this field and error
		}
		elseif ($message = Kohana::message($file, &quot;{$field}.default&quot;) AND is_string($message))
		{
			// Found a default message for this field
		}
		elseif ($message = Kohana::message($file, $error) AND is_string($message))
		{
			// Found a default message for this error
		}
		elseif ($message = Kohana::message(&#039;validation&#039;, $error) AND is_string($message))
		{
			// Found a default message for this error
		}
		else
		{
			// No message exists, display the path expected
			$message = &quot;{$file}.{$field}.{$error}&quot;;
		}

		if ($translate)
		{
			if (is_string($translate))
			{
				// Translate the message using specified language
				$message = __($message, $values, $translate);
			}
			else
			{
				// Translate the message using the default language
				$message = __($message, $values);
			}
		}
		else
		{
			// Do not translate, just replace the values
			$message = strtr($message, $values);
		}

		// Set the message for this field
		$messages[$field] = $message;
	}

	return $messages;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>array</small> <span class="param" title="Array to use for validation">$array</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Creates a new Validation instance.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to use for validation</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Validation</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory(array $array)
{
	return new Validation($array);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="label"><small>public</small>  label(<small>string</small> <span class="param" title="Field name">$field</span> , <small>string</small> <span class="param" title="Label">$label</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Sets or overwrites the label name for a field.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - Field name</li>
<li>
 <span class="blue">string </span><strong> $label</strong> <small>required</small> - Label</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function label($field, $label)
{
	// Set the label for this field
	$this-&gt;_labels[$field] = $label;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="labels"><small>public</small>  labels(<small>array</small> <span class="param" title="List of field => label names">$labels</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Sets labels using an array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $labels</strong> <small>required</small> - List of field => label names</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function labels(array $labels)
{
	$this-&gt;_labels = $labels + $this-&gt;_labels;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetExists"><small>public</small>  offsetExists(<small>string</small> <span class="param" title="Key to check">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Checks if key is set in array data.
Implements ArrayAccess method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $offset</strong> <small>required</small> - Key to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  - Whether the key is set 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetExists($offset)
{
	return isset($this-&gt;_data[$offset]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetGet"><small>public</small>  offsetGet(<small>string</small> <span class="param" title="Key to return">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Gets a value from the array data.
Implements ArrayAccess method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $offset</strong> <small>required</small> - Key to return</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Value from array 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetGet($offset)
{
	return $this-&gt;_data[$offset];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetSet"><small>public</small>  offsetSet(<small>string</small> <span class="param" title="Key to set">$offset</span> , <small>mixed</small> <span class="param" title="Value to set">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Throws an exception because Validation is read-only.
Implements ArrayAccess method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $offset</strong> <small>required</small> - Key to set</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value to set</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetSet($offset, $value)
{
	throw new Kohana_Exception(&#039;Validation objects are read-only.&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetUnset"><small>public</small>  offsetUnset(<small>string</small> <span class="param" title="Key to unset">$offset</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Throws an exception because Validation is read-only.
Implements ArrayAccess method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $offset</strong> <small>required</small> - Key to unset</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetUnset($offset)
{
	throw new Kohana_Exception(&#039;Validation objects are read-only.&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rule"><small>public</small>  rule(<small>string</small> <span class="param" title="Field name">$field</span> , <small>callback</small> <span class="param" title="Valid PHP callback or closure">$rule</span> [, <small>array</small> <span class="param" title="Extra parameters for the rule">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Overwrites or appends rules to a field. Each rule will be executed once.
All rules must be string names of functions method names. Parameters must
match the parameters of the callback function exactly</p>

<p>Aliases you can use in callback parameters:
- :validation - the validation object
- :field - the field name
- :value - the value of the field</p>

<pre><code>// The "username" must not be empty and have a minimum length of 4
$validation-&gt;rule('username', 'not_empty')
           -&gt;rule('username', 'min_length', array(':value', 4));

// The "password" field must match the "password_repeat" field
$validation-&gt;rule('password', 'matches', array(':validation', 'password', 'password_repeat'));

// Using closure (anonymous function)
$validation-&gt;rule('index',
    function(Validation $array, $field, $value)
    {
        if ($value &gt; 6 AND $value &lt; 10)
        {
            $array-&gt;error($field, 'custom');
        }
    }
    , array(':validation', ':field', ':value')
);
</code></pre>

<p class="note">Errors must be added manually when using closures!</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - Field name</li>
<li>
 <span class="blue">callback </span><strong> $rule</strong> <small>required</small> - Valid PHP callback or closure</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - Extra parameters for the rule</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rule($field, $rule, array $params = NULL)
{
	if ($params === NULL)
	{
		// Default to array(&#039;:value&#039;)
		$params = [&#039;:value&#039;];
	}

	if ($field !== TRUE AND ! isset($this-&gt;_labels[$field]))
	{
		// Set the field label to the field name
		$this-&gt;_labels[$field] = $field;
	}

	// Store the rule and params for this rule
	$this-&gt;_rules[$field][] = [$rule, $params];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rules"><small>public</small>  rules(<small>string</small> <span class="param" title="Field name">$field</span> , <small>array</small> <span class="param" title="List of callbacks">$rules</span> )<small> (defined in <a href='/documentation/api/Kohana_Validation'>Kohana_Validation</a>)</small></h3>
<div class='description'><p>Add rules using an array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - Field name</li>
<li>
 <span class="blue">array </span><strong> $rules</strong> <small>required</small> - List of callbacks</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rules($field, array $rules)
{
	foreach ($rules as $rule)
	{
		$this-&gt;rule($field, $rule[0], Arr::get($rule, 1));
	}

	return $this;
}</code>
</pre>
</div>
</div>
</div>