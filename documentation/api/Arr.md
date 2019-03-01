---
layout: api
class: Arr
---
<h1>Arr</h1>
extends <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>
<br />
<p>
<i><p>Array helper.</p>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a></p>
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
<a href="#property-delimiter">$delimiter</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#callback">callback()</a>
</li>
<li>
<a href="#extract">extract()</a>
</li>
<li>
<a href="#flatten">flatten()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#is_array">is_array()</a>
</li>
<li>
<a href="#is_assoc">is_assoc()</a>
</li>
<li>
<a href="#map">map()</a>
</li>
<li>
<a href="#merge">merge()</a>
</li>
<li>
<a href="#overwrite">overwrite()</a>
</li>
<li>
<a href="#path">path()</a>
</li>
<li>
<a href="#pluck">pluck()</a>
</li>
<li>
<a href="#range">range()</a>
</li>
<li>
<a href="#set_path">set_path()</a>
</li>
<li>
<a href="#unshift">unshift()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-delimiter'><small>public static</small>  <span class='blue'>string</span> $delimiter</h4>
</dt>
<dd>
 <p>default delimiter for path()</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(1)</span> "."</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="callback"><small>public static</small>  callback(<small>string</small> <span class="param" title="Callback string">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Creates a callable function and parameter list from a string representation.
Note that this function does not validate the callback string.</p>

<pre><code>// Get the callback function and parameters
list($func, $params) = Arr::callback('Foo::bar(apple,orange)');

// Get the result of the callback
$result = call_user_func_array($func, $params);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Callback string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Function, params 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function callback($str)
{
	// Overloaded as parts are found
	$command = $params = NULL;

	// command[param,param]
	if (preg_match(&#039;/^([^\(]*+)\((.*)\)$/&#039;, $str, $match))
	{
		// command
		$command = $match[1];

		if ($match[2] !== &#039;&#039;)
		{
			// param,param
			$params = preg_split(&#039;/(?&lt;!\\\\),/&#039;, $match[2]);
			$params = str_replace(&#039;\,&#039;, &#039;,&#039;, $params);
		}
	}
	else
	{
		// command
		$command = $str;
	}

	if (strpos($command, &#039;::&#039;) !== FALSE)
	{
		// Create a static method callable command
		$command = explode(&#039;::&#039;, $command, 2);
	}

	return [$command, $params];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="extract"><small>public static</small>  extract(<small>array</small> <span class="param" title="Array to extract paths from">$array</span> , <small>array</small> <span class="param" title="List of path">$paths</span> [, <small>mixed</small> <span class="param" title="Default value">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Retrieves multiple paths from an array. If the path does not exist in the
array, the default value will be added instead.</p>

<pre><code>// Get the values "username", "password" from $_POST
$auth = Arr::extract($_POST, array('username', 'password'));

// Get the value "level1.level2a" from $data
$data = array('level1' =&gt; array('level2a' =&gt; 'value 1', 'level2b' =&gt; 'value 2'));
Arr::extract($data, array('level1.level2a', 'password'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to extract paths from</li>
<li>
 <span class="blue">array </span><strong> $paths</strong> <small>required</small> - List of path</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function extract($array, array $paths, $default = NULL)
{
	$found = [];
	foreach ($paths as $path)
	{
		Arr::set_path($found, $path, Arr::path($array, $path, $default));
	}

	return $found;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="flatten"><small>public static</small>  flatten(<small>array</small> <span class="param" title="Array to flatten">$array</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Convert a multi-dimensional array into a single-dimensional array.</p>

<pre><code>$array = array('set' =&gt; array('one' =&gt; 'something'), 'two' =&gt; 'other');

// Flatten the array
$array = Arr::flatten($array);

// The array will now be
array('one' =&gt; 'something', 'two' =&gt; 'other');
</code></pre>

<p class="note">The keys of array values will be discarded.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to flatten</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.6</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function flatten($array)
{
	$is_assoc = Arr::is_assoc($array);

	$flat = [];
	foreach ($array as $key =&gt; $value)
	{
		if (is_array($value))
		{
			$flat = array_merge($flat, Arr::flatten($value));
		}
		else
		{
			if ($is_assoc)
			{
				$flat[$key] = $value;
			}
			else
			{
				$flat[] = $value;
			}
		}
	}
	return $flat;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public static</small>  get(<small>array</small> <span class="param" title="Array to extract from">$array</span> , <small>string</small> <span class="param" title="Key name">$key</span> [, <small>mixed</small> <span class="param" title="Default value">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Retrieve a single key from an array. If the key does not exist in the
array, the default value will be returned instead.</p>

<pre><code>// Get the value "username" from $_POST, if it exists
$username = Arr::get($_POST, 'username');

// Get the value "sorting" from $_GET, if it exists
$sorting = Arr::get($_GET, 'sorting');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to extract from</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Key name</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function get($array, $key, $default = NULL)
{
	if ($array instanceof ArrayObject) {
		// This is a workaround for inconsistent implementation of isset between PHP and HHVM
		// See https://github.com/facebook/hhvm/issues/3437
		return $array-&gt;offsetExists($key) ? $array-&gt;offsetGet($key) : $default;
	} else {
		return isset($array[$key]) ? $array[$key] : $default;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_array"><small>public static</small>  is_array(<small>mixed</small> <span class="param" title="Value to check">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Test if a value is an array with an additional check for array-like objects.</p>

<pre><code>// Returns TRUE
Arr::is_array(array());
Arr::is_array(new ArrayObject);

// Returns FALSE
Arr::is_array(FALSE);
Arr::is_array('not an array!');
Arr::is_array(Database::instance());
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function is_array($value)
{
	if (is_array($value))
	{
		// Definitely an array
		return TRUE;
	}
	else
	{
		// Possibly a Traversable object, functionally the same as an array
		return (is_object($value) AND $value instanceof Traversable);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_assoc"><small>public static</small>  is_assoc(<small>array</small> <span class="param" title="Array to check">$array</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Tests if an array is associative or not.</p>

<pre><code>// Returns TRUE
Arr::is_assoc(array('username' =&gt; 'john.doe'));

// Returns FALSE
Arr::is_assoc('foo', 'bar');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function is_assoc(array $array)
{
	// Keys of the array
	$keys = array_keys($array);

	// If the array keys of the keys match the keys, then the array must
	// not be associative (e.g. the keys array looked like {0:0, 1:1...}).
	return array_keys($keys) !== $keys;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="map"><small>public static</small>  map(<small>mixed</small> <span class="param" title="Array of callbacks to apply to every element in the array">$callbacks</span> , <small>array</small> <span class="param" title="Array to map">$array</span> [, <small>array</small> <span class="param" title="Array of keys to apply to">$keys</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Recursive version of <a href="http://php.net/array_map">array_map</a>, applies one or more
callbacks to all elements in an array, including sub-arrays.</p>

<pre><code>// Apply "strip_tags" to every element in the array
$array = Arr::map('strip_tags', $array);

// Apply $this-&gt;filter to every element in the array
$array = Arr::map(array(array($this,'filter')), $array);

// Apply strip_tags and $this-&gt;filter to every element
$array = Arr::map(array('strip_tags',array($this,'filter')), $array);
</code></pre>

<p class="note">Because you can pass an array of callbacks, if you wish to use an array-form callback
you must nest it in an additional array as above. Calling Arr::map(array($this,'filter'), $array)
will cause an error.
[!!] Unlike <code>array_map</code>, this method requires a callback and will only map
a single array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $callbacks</strong> <small>required</small> - Array of callbacks to apply to every element in the array</li>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to map</li>
<li>
 <span class="blue">array </span><strong> $keys</strong> <small> = <small>NULL</small></small> - Array of keys to apply to</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function map($callbacks, $array, $keys = NULL)
{
	foreach ($array as $key =&gt; $val)
	{
		if (is_array($val))
		{
			$array[$key] = Arr::map($callbacks, $array[$key], $keys);
		}
		elseif ( ! is_array($keys) OR in_array($key, $keys))
		{
			if (is_array($callbacks))
			{
				foreach ($callbacks as $cb)
				{
					$array[$key] = call_user_func($cb, $array[$key]);
				}
			}
			else
			{
				$array[$key] = call_user_func($callbacks, $array[$key]);
			}
		}
	}

	return $array;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="merge"><small>public static</small>  merge(<small>array</small> <span class="param" title="Initial array">$array1</span> , <small>array</small> <span class="param" title=",... array to merge">$array2</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Recursively merge two or more arrays. Values in an associative array
overwrite previous values with the same key. Values in an indexed array
are appended, but only when they do not already exist in the result.</p>

<p>Note that this does not work the same as <a href="http://php.net/array_merge_recursive">array_merge_recursive</a>!</p>

<pre><code>$john = array('name' =&gt; 'john', 'children' =&gt; array('fred', 'paul', 'sally', 'jane'));
$mary = array('name' =&gt; 'mary', 'children' =&gt; array('jane'));

// John and Mary are married, merge them together
$john = Arr::merge($john, $mary);

// The output of $john will now be:
array('name' =&gt; 'mary', 'children' =&gt; array('fred', 'paul', 'sally', 'jane'))
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array1</strong> <small>required</small> - Initial array</li>
<li>
 <span class="blue">array </span><strong> $array2</strong> <small>required</small> - ,...  array to merge</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function merge($array1, $array2)
{
	if (Arr::is_assoc($array2))
	{
		foreach ($array2 as $key =&gt; $value)
		{
			if (is_array($value)
				AND isset($array1[$key])
				AND is_array($array1[$key])
			)
			{
				$array1[$key] = Arr::merge($array1[$key], $value);
			}
			else
			{
				$array1[$key] = $value;
			}
		}
	}
	else
	{
		foreach ($array2 as $value)
		{
			if ( ! in_array($value, $array1, TRUE))
			{
				$array1[] = $value;
			}
		}
	}

	if (func_num_args() &gt; 2)
	{
		foreach (array_slice(func_get_args(), 2) as $array2)
		{
			if (Arr::is_assoc($array2))
			{
				foreach ($array2 as $key =&gt; $value)
				{
					if (is_array($value)
						AND isset($array1[$key])
						AND is_array($array1[$key])
					)
					{
						$array1[$key] = Arr::merge($array1[$key], $value);
					}
					else
					{
						$array1[$key] = $value;
					}
				}
			}
			else
			{
				foreach ($array2 as $value)
				{
					if ( ! in_array($value, $array1, TRUE))
					{
						$array1[] = $value;
					}
				}
			}
		}
	}

	return $array1;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="overwrite"><small>public static</small>  overwrite(<small>array</small> <span class="param" title="Master array">$array1</span> , <small>array</small> <span class="param" title="Input arrays that will overwrite existing values">$array2</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Overwrites an array with values from input arrays.
Keys that do not exist in the first array will not be added!</p>

<pre><code>$a1 = array('name' =&gt; 'john', 'mood' =&gt; 'happy', 'food' =&gt; 'bacon');
$a2 = array('name' =&gt; 'jack', 'food' =&gt; 'tacos', 'drink' =&gt; 'beer');

// Overwrite the values of $a1 with $a2
$array = Arr::overwrite($a1, $a2);

// The output of $array will now be:
array('name' =&gt; 'jack', 'mood' =&gt; 'happy', 'food' =&gt; 'tacos')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array1</strong> <small>required</small> - Master array</li>
<li>
 <span class="blue">array </span><strong> $array2</strong> <small>required</small> - Input arrays that will overwrite existing values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function overwrite($array1, $array2)
{
	foreach (array_intersect_key($array2, $array1) as $key =&gt; $value)
	{
		$array1[$key] = $value;
	}

	if (func_num_args() &gt; 2)
	{
		foreach (array_slice(func_get_args(), 2) as $array2)
		{
			foreach (array_intersect_key($array2, $array1) as $key =&gt; $value)
			{
				$array1[$key] = $value;
			}
		}
	}

	return $array1;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="path"><small>public static</small>  path(<small>array</small> <span class="param" title="Array to search">$array</span> , <small>mixed</small> <span class="param" title="Key path string (delimiter separated) or array of keys">$path</span> [, <small>mixed</small> <span class="param" title="Default value if the path is not set">$default</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Key path delimiter">$delimiter</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Gets a value from an array using a dot separated path.</p>

<pre><code>// Get the value of $array['foo']['bar']
$value = Arr::path($array, 'foo.bar');
</code></pre>

<p>Using a wildcard "*" will search intermediate arrays and return an array.</p>

<pre><code>// Get the values of "color" in theme
$colors = Arr::path($array, 'theme.*.color');

// Using an array of keys
$colors = Arr::path($array, array('theme', '*', 'color'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to search</li>
<li>
 <span class="blue">mixed </span><strong> $path</strong> <small>required</small> - Key path string (delimiter separated) or array of keys</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value if the path is not set</li>
<li>
 <span class="blue">string </span><strong> $delimiter</strong> <small> = <small>NULL</small></small> - Key path delimiter</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function path($array, $path, $default = NULL, $delimiter = NULL)
{
	if ( ! Arr::is_array($array))
	{
		// This is not an array!
		return $default;
	}

	if (is_array($path))
	{
		// The path has already been separated into keys
		$keys = $path;
	}
	else
	{
		if (array_key_exists($path, $array))
		{
			// No need to do extra processing
			return $array[$path];
		}

		if ($delimiter === NULL)
		{
			// Use the default delimiter
			$delimiter = Arr::$delimiter;
		}

		// Remove starting delimiters and spaces
		$path = ltrim($path, &quot;{$delimiter} &quot;);

		// Remove ending delimiters, spaces, and wildcards
		$path = rtrim($path, &quot;{$delimiter} *&quot;);

		// Split the keys by delimiter
		$keys = explode($delimiter, $path);
	}

	do
	{
		$key = array_shift($keys);

		if (ctype_digit($key))
		{
			// Make the key an integer
			$key = (int) $key;
		}

		if (isset($array[$key]))
		{
			if ($keys)
			{
				if (Arr::is_array($array[$key]))
				{
					// Dig down into the next part of the path
					$array = $array[$key];
				}
				else
				{
					// Unable to dig deeper
					break;
				}
			}
			else
			{
				// Found the path requested
				return $array[$key];
			}
		}
		elseif ($key === &#039;*&#039;)
		{
			// Handle wildcards

			$values = [];
			foreach ($array as $arr)
			{
				if ($value = Arr::path($arr, implode(&#039;.&#039;, $keys)))
				{
					$values[] = $value;
				}
			}

			if ($values)
			{
				// Found the values requested
				return $values;
			}
			else
			{
				// Unable to dig deeper
				break;
			}
		}
		else
		{
			// Unable to dig deeper
			break;
		}
	}
	while ($keys);

	// Unable to find the value requested
	return $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="pluck"><small>public static</small>  pluck(<small>array</small> <span class="param" title="List of arrays to check">$array</span> , <small>string</small> <span class="param" title="Key to pluck">$key</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Retrieves muliple single-key values from a list of arrays.</p>

<pre><code>// Get all of the "id" values from a result
$ids = Arr::pluck($result, 'id');
</code></pre>

<p class="note">A list of arrays is an array that contains arrays, eg: array(array $a, array $b, array $c, ...)</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $array</strong> <small>required</small> - List of arrays to check</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Key to pluck</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function pluck($array, $key)
{
	$values = [];

	foreach ($array as $row)
	{
		if (isset($row[$key]))
		{
			// Found a value in this row
			$values[] = $row[$key];
		}
	}

	return $values;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="range"><small>public static</small>  range([ <small>integer</small> <span class="param" title="Stepping">$step</span> <small>= <small>integer</small> 10</small> , <small>integer</small> <span class="param" title="Ending number">$max</span> <small>= <small>integer</small> 100</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Fill an array with a range of numbers.</p>

<pre><code>// Fill an array with values 5, 10, 15, 20
$values = Arr::range(5, 20);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $step</strong> <small> = <small>integer</small> 10</small> - Stepping</li>
<li>
 <span class="blue">integer </span><strong> $max</strong> <small> = <small>integer</small> 100</small> - Ending number</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function range($step = 10, $max = 100)
{
	if ($step &lt; 1)
		return [];

	$array = [];
	for ($i = $step; $i &lt;= $max; $i += $step)
	{
		$array[$i] = $i;
	}

	return $array;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_path"><small>public static</small>  set_path(<small>array</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Array to update">$array</span> , <small>string</small> <span class="param" title="Path">$path</span> , <small>mixed</small> <span class="param" title="Value to set">$value</span> [, <small>string</small> <span class="param" title="Path delimiter">$delimiter</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Set a value on an array by path.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
byref  <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to update</li>
<li>
 <span class="blue">string </span><strong> $path</strong> <small>required</small> - Path</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value to set</li>
<li>
 <span class="blue">string </span><strong> $delimiter</strong> <small> = <small>NULL</small></small> - Path delimiter</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>See - <a href="#path">Arr::path()</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function set_path( &amp; $array, $path, $value, $delimiter = NULL)
{
	if ( ! $delimiter)
	{
		// Use the default delimiter
		$delimiter = Arr::$delimiter;
	}

	// The path has already been separated into keys
	$keys = $path;
	if ( ! is_array($path))
	{
		// Split the keys by delimiter
		$keys = explode($delimiter, $path);
	}

	// Set current $array to inner-most array path
	while (count($keys) &gt; 1)
	{
		$key = array_shift($keys);

		if (ctype_digit($key))
		{
			// Make the key an integer
			$key = (int) $key;
		}

		if ( ! isset($array[$key]))
		{
			$array[$key] = [];
		}

		$array = &amp; $array[$key];
	}

	// Set key on inner-most array
	$array[array_shift($keys)] = $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unshift"><small>public static</small>  unshift(<small>array</small> <small><abbr title="passed by reference">&</abbr></small> <span class="param" title="Array to modify">$array</span> , <small>string</small> <span class="param" title="Array key name">$key</span> , <small>mixed</small> <span class="param" title="Array value">$val</span> )<small> (defined in <a href='/documentation/api/Kohana_Arr'>Kohana_Arr</a>)</small></h3>
<div class='description'><p>Adds a value to the beginning of an associative array.</p>

<pre><code>// Add an empty value to the start of a select list
Arr::unshift($array, 'none', 'Select a value');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
byref  <span class="blue">array </span><strong> $array</strong> <small>required</small> - Array to modify</li>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Array key name</li>
<li>
 <span class="blue">mixed </span><strong> $val</strong> <small>required</small> - Array value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function unshift( array &amp; $array, $key, $val)
{
	$array = array_reverse($array, TRUE);
	$array[$key] = $val;
	$array = array_reverse($array, TRUE);

	return $array;
}</code>
</pre>
</div>
</div>
</div>