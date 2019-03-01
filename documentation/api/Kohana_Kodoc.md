---
layout: api
class: Kohana_Kodoc
---
<h1>Kohana_Kodoc</h1>
<p>
<i><p>Documentation generator.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Userguide</dd>
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
<a href="#property-regex_class_member">$regex_class_member</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#class_methods">class_methods()</a>
</li>
<li>
<a href="#classes">classes()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#format_tag">format_tag()</a>
</li>
<li>
<a href="#is_transparent">is_transparent()</a>
</li>
<li>
<a href="#link_class_member">link_class_member()</a>
</li>
<li>
<a href="#menu">menu()</a>
</li>
<li>
<a href="#parse">parse()</a>
</li>
<li>
<a href="#show_class">show_class()</a>
</li>
<li>
<a href="#source">source()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-regex_class_member'><small>public static</small>  <span class='blue'>string</span> $regex_class_member</h4>
</dt>
<dd>
 <p>PCRE fragment for matching 'Class', 'Class::method', 'Class::method()' or 'Class::$property'</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(33)</span> "((\w++)(?:::(\$?\w++))?(?:\(\))?)"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="class_methods"><small>public static</small>  class_methods()<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Get all classes and methods of files in a list.</p>

<blockquote>
  <p>I personally don't like this as it was used on the index page.  Way too much stuff on one page.  It has potential for a package index page though.
   For example:  class_methods( Kohana::list_files('classes/sprig') ) could make a nice index page for the sprig package in the api browser
      ~bluehawk</p>
</blockquote>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function class_methods(array $list = NULL)
{
	$list = Kodoc::classes($list);

	$classes = [];

	foreach ($list as $class)
	{
		// Skip transparent extension classes
		if (Kodoc::is_transparent($class))
			continue;

		$_class = new ReflectionClass($class);

		$methods = [];

		foreach ($_class-&gt;getMethods() as $_method)
		{
			$declares = $_method-&gt;getDeclaringClass()-&gt;name;

			// Remove the transparent prefix from declaring classes
			if ($child = Kodoc::is_transparent($declares))
			{
				$declares = $child;
			}

			if ($declares === $_class-&gt;name OR $declares === &quot;Core&quot;)
			{
				$methods[] = $_method-&gt;name;
			}
		}

		sort($methods);

		$classes[$_class-&gt;name] = $methods;
	}

	return $classes;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="classes"><small>public static</small>  classes([ <small>array</small> <span class="param" title="Array of files, obtained using Kohana::list_files">$list</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Returns an array of all the classes available, built by listing all files in the classes folder.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $list</strong> <small> = <small>NULL</small></small> - Array of files, obtained using Kohana::list_files</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - An array of all the class names 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function classes(array $list = NULL)
{
	if ($list === NULL)
	{
		$list = Kohana::list_files(&#039;classes&#039;);
	}

	$classes = [];

	// This will be used a lot!
	$ext_length = strlen(EXT);

	foreach ($list as $name =&gt; $path)
	{
		if (is_array($path))
		{
			$classes += Kodoc::classes($path);
		}
		elseif (substr($name, -$ext_length) === EXT)
		{
			// Remove &quot;classes/&quot; and the extension
			$class = substr($name, 8, -$ext_length);

			// Convert slashes to underscores
			$class = str_replace(DIRECTORY_SEPARATOR, &#039;_&#039;, $class);

			$classes[$class] = $class;
		}
	}

	return $classes;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory()<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($class)
{
	return new Kodoc_Class($class);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="format_tag"><small>public static</small>  format_tag(<small>string</small> <span class="param" title="Name of the tag without @">$tag</span> , <small>string</small> <span class="param" title="Content of the tag">$text</span> )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Generate HTML for the content of a tag.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $tag</strong> <small>required</small> - Name of the tag without @</li>
<li>
 <span class="blue">string </span><strong> $text</strong> <small>required</small> - Content of the tag</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - HTML 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function format_tag($tag, $text)
{
	if ($tag === &#039;license&#039;)
	{
		if (strpos($text, &#039;://&#039;) !== FALSE)
			return HTML::anchor($text);
	}
	elseif ($tag === &#039;link&#039;)
	{
		$split = preg_split(&#039;/\s+/&#039;, $text, 2);

		return HTML::anchor(
			$split[0],
			isset($split[1]) ? $split[1] : $split[0]
		);
	}
	elseif ($tag === &#039;copyright&#039;)
	{
		// Convert the copyright symbol
		return str_replace(&#039;(c)&#039;, &#039;&amp;copy;&#039;, $text);
	}
	elseif ($tag === &#039;throws&#039;)
	{
		$route = Route::get(&#039;docs/api&#039;);

		if (preg_match(&#039;/^(\w+)\W(.*)$/D&#039;, $text, $matches))
		{
			return HTML::anchor(
				$route-&gt;uri([&#039;class&#039; =&gt; $matches[1]]),
				$matches[1]
			).&#039; &#039;.$matches[2];
		}

		return HTML::anchor(
			$route-&gt;uri([&#039;class&#039; =&gt; $text]),
			$text
		);
	}
	elseif ($tag === &#039;see&#039; OR $tag === &#039;uses&#039;)
	{
		if (preg_match(&#039;/^&#039;.Kodoc::$regex_class_member.&#039;/&#039;, $text, $matches))
			return Kodoc::link_class_member($matches);
	}

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="is_transparent"><small>public static</small>  is_transparent(<small>string</small> <span class="param" title="The name of the class to check for transparency">$class</span> [, <small>array</small> <span class="param" title="An optional list of all defined classes">$classes</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Checks whether a class is a transparent extension class or not.</p>

<p>This method takes an optional $classes parameter, a list of all defined
class names. If provided, the method will return false unless the extension
class exists. If not, the method will only check known transparent class
prefixes.</p>

<p>Transparent prefixes are defined in the userguide.php config file:</p>

<pre><code>'transparent_prefixes' =&gt; array(
    'Kohana' =&gt; TRUE,
);
</code></pre>

<p>Module developers can therefore add their own transparent extension
namespaces and exclude them from the userguide.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $class</strong> <small>required</small> - The name of the class to check for transparency</li>
<li>
 <span class="blue">array </span><strong> $classes</strong> <small> = <small>NULL</small></small> - An optional list of all defined classes</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">InvalidArgumentException</a>  If the $classes array is provided and the $class variable is not lowercase</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>false</span>  - If this is not a transparent extension class 
</li><li>
<span class='blue'>string</span>  - The name of the class that extends this (in the case provided) 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function is_transparent($class, $classes = NULL)
{

	static $transparent_prefixes = NULL;

	if ( ! $transparent_prefixes)
	{
		$transparent_prefixes = Kohana::$config-&gt;load(&#039;userguide.transparent_prefixes&#039;);
	}

	// Split the class name at the first underscore
	$segments = explode(&#039;_&#039;,$class,2);

	if ((count($segments) == 2) AND (isset($transparent_prefixes[$segments[0]])))
	{
		if ($segments[1] === &#039;Core&#039;)
		{
			// Cater for Module extends Module_Core naming
			$child_class = $segments[0];
		}
		else
		{
			// Cater for Foo extends Module_Foo naming
			$child_class = $segments[1];
		}

		// It is only a transparent class if the unprefixed class also exists
		if ($classes AND ! isset($classes[$child_class]))
			return FALSE;

		// Return the name of the child class
		return $child_class;
	}
	else
	{
		// Not a transparent class
		return FALSE;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="link_class_member"><small>public static</small>  link_class_member(<small>array</small> <span class="param" title="Array( 1 => link text, 2 => class name, [3 => member name] )">$matches</span> )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Make a class#member API link using an array of matches from <a href="#property:regex_class_member">Kodoc::$regex_class_member</a></p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $matches</strong> <small>required</small> - Array( 1 => link text, 2 => class name, [3 => member name] )</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function link_class_member($matches)
{
	$link = $matches[1];
	$class = $matches[2];
	$member = NULL;

	if (isset($matches[3]))
	{
		// If the first char is a $ it is a property, e.g. Kohana::$base_url
		if ($matches[3][0] === &#039;$&#039;)
		{
			$member = &#039;#property:&#039;.substr($matches[3], 1);
		}
		elseif (preg_match(&#039;/^[A-Z_\x7f-\xff][A-Z0-9_\x7f-\xff]*$/&#039;, $matches[3]))
		{
			$member = &#039;#constant:&#039;.substr($matches[3],0);
		}
		else
		{
			$member = &#039;#&#039;.$matches[3];
		}
	}

	return HTML::anchor(Route::get(&#039;docs/api&#039;)-&gt;uri([&#039;class&#039; =&gt; $class]).$member, $link, NULL, NULL, TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="menu"><small>public static</small>  menu()<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Creates an html list of all classes sorted by category (or package if no category)</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The html for the menu 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function menu()
{
	$classes = Kodoc::classes();

	ksort($classes);

	$menu = [];

	$route = Route::get(&#039;docs/api&#039;);

	foreach ($classes as $class)
	{
		if (Kodoc::is_transparent($class, $classes))
			continue;

		$class = Kodoc_Class::factory($class);

		// Test if we should show this class
		if ( ! Kodoc::show_class($class))
			continue;

		$link = HTML::anchor($route-&gt;uri([&#039;class&#039; =&gt; $class-&gt;class-&gt;name]), $class-&gt;class-&gt;name);

		if (isset($class-&gt;tags[&#039;package&#039;]))
		{
			foreach ($class-&gt;tags[&#039;package&#039;] as $package)
			{
				if (isset($class-&gt;tags[&#039;category&#039;]))
				{
					foreach ($class-&gt;tags[&#039;category&#039;] as $category)
					{
						$menu[$package][$category][] = $link;
					}
				}
				else
				{
					$menu[$package][&#039;Base&#039;][] = $link;
				}
			}
		}
		else
		{
			$menu[&#039;[Unknown]&#039;][&#039;Base&#039;][] = $link;
		}
	}

	// Sort the packages
	ksort($menu);

	return View::factory(&#039;userguide/api/menu&#039;)
		-&gt;bind(&#039;menu&#039;, $menu);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse"><small>public static</small>  parse(<small>string</small> <span class="param" title="The DocBlock to parse">$comment</span> [, <small>boolean</small> <span class="param" title="Whether or not to convert the return values to HTML (deprecated)">$html</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Parse a comment to extract the description and the tags</p>

<p class="note">Converting the output to HTML in this method is deprecated in 3.3</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $comment</strong> <small>required</small> - The DocBlock to parse</li>
<li>
 <span class="blue">boolean </span><strong> $html</strong> <small> = <small>bool</small> TRUE</small> - Whether or not to convert the return values
  to HTML (deprecated)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Array(string $description, array $tags) 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse($comment, $html = TRUE)
{
	// Normalize all new lines to \n
	$comment = str_replace([&quot;\r\n&quot;, &quot;\n&quot;], &quot;\n&quot;, $comment);

	// Split into lines while capturing without leading whitespace
	preg_match_all(&#039;/^\s*\* ?(.*)\n/m&#039;, $comment, $lines);

	// Tag content
	$tags = [];

	/**
	 * Process a tag and add it to $tags
	 *
	 * @param   string  $tag    Name of the tag without @
	 * @param   string  $text   Content of the tag
	 * @return  void
	 */
	$add_tag = function ($tag, $text) use ($html, &amp; $tags)
	{
		// Don&#039;t show @access lines, they are shown elsewhere
		if ($tag !== &#039;access&#039;)
		{
			if ($html)
			{
				$text = Kodoc::format_tag($tag, $text);
			}

			// Add the tag
			$tags[$tag][] = $text;
		}
	};

	$comment = $tag = NULL;
	$end = count($lines[1]) - 1;

	foreach ($lines[1] as $i =&gt; $line)
	{
		// Search this line for a tag
		if (preg_match(&#039;/^@(\S+)\s*(.+)?$/&#039;, $line, $matches))
		{
			if ($tag)
			{
				// Previous tag is finished
				$add_tag($tag, $text);
			}

			$tag = $matches[1];
			$text = isset($matches[2]) ? $matches[2] : &#039;&#039;;

			if ($i === $end)
			{
				// No more lines
				$add_tag($tag, $text);
			}
		}
		elseif ($tag)
		{
			// This is the continuation of the previous tag
			$text .= &quot;\n&quot;.$line;

			if ($i === $end)
			{
				// No more lines
				$add_tag($tag, $text);
			}
		}
		else
		{
			$comment .= &quot;\n&quot;.$line;
		}
	}

	$comment = trim($comment, &quot;\n&quot;);

	if ($comment AND $html)
	{
		// Parse the comment with Markdown
		$comment = Kodoc_Markdown::markdown($comment);
	}

	return [$comment, $tags];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="show_class"><small>public static</small>  show_class(<small>Kodoc_Class</small> <span class="param" title="The class to test">$class</span> )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Test whether a class should be shown, based on the api_packages config option</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Kodoc_Class </span><strong> $class</strong> <small>required</small> - The class to test</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  - Whether this class should be shown 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function show_class(Kodoc_Class $class)
{
	$api_packages = Kohana::$config-&gt;load(&#039;userguide.api_packages&#039;);

	// If api_packages is true, all packages should be shown
	if ($api_packages === TRUE)
		return TRUE;

	// Get the package tags for this class (as an array)
	$packages = Arr::get($class-&gt;tags, &#039;package&#039;, [&#039;None&#039;]);

	$show_this = FALSE;

	// Loop through each package tag
	foreach ($packages as $package)
	{
		// If this package is in the allowed packages, set show this to true
		if (in_array($package, explode(&#039;,&#039;, $api_packages)))
			$show_this = TRUE;
	}

	return $show_this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="source"><small>public static</small>  source(<small>string</small> <span class="param" title="The filename">$file</span> , <small>int</small> <span class="param" title="Start line?">$start</span> , <small>int</small> <span class="param" title="End line?">$end</span> )<small> (defined in <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>)</small></h3>
<div class='description'><p>Get the source of a function</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - The filename</li>
<li>
 <span class="blue">int </span><strong> $start</strong> <small>required</small> - Start line?</li>
<li>
 <span class="blue">int </span><strong> $end</strong> <small>required</small> - End line?</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function source($file, $start, $end)
{
	if ( ! $file) return FALSE;

	$file = file($file, FILE_IGNORE_NEW_LINES);

	$file = array_slice($file, $start - 1, $end - $start + 1);

	if (preg_match(&#039;/^(\s+)/&#039;, $file[0], $matches))
	{
		$padding = strlen($matches[1]);

		foreach ($file as &amp; $line)
		{
			$line = substr($line, $padding);
		}
	}

	return implode(&quot;\n&quot;, $file);
}</code>
</pre>
</div>
</div>
</div>