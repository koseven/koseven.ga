---
layout: api
class: Kodoc_Class
---
<h1>Kodoc_Class</h1>
extends <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>
<br />
extends <a href='/documentation/api/Kodoc'>Kodoc</a>
<br />
extends <a href='/documentation/api/Kohana_Kodoc'>Kohana_Kodoc</a>
<br />
<p>
<i><p>Class documentation generator.</p>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a></p>
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
<a href="#property-class">$class</a>
</li>
<li>
<a href="#property-constants">$constants</a>
</li>
<li>
<a href="#property-description">$description</a>
</li>
<li>
<a href="#property-modifiers">$modifiers</a>
</li>
<li>
<a href="#property-parents">$parents</a>
</li>
<li>
<a href="#property-regex_class_member">$regex_class_member</a>
</li>
<li>
<a href="#property-tags">$tags</a>
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
<a href="#constants">constants()</a>
</li>
<li>
<a href="#description">description()</a>
</li>
<li>
<a href="#methods">methods()</a>
</li>
<li>
<a href="#properties">properties()</a>
</li>
<li>
<a href="#tags">tags()</a>
</li>
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
<li>
<a href="#_method_sort">_method_sort()</a>
</li>
<li>
<a href="#_prop_sort">_prop_sort()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-class'><small>public</small>  <span class='blue'>ReflectionClass</span> $class</h4>
</dt>
<dd>
 <p>The ReflectionClass for this class</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-constants'><small>public</small>  <span class='blue'>array</span> $constants</h4>
</dt>
<dd>
 <p>array of this classes constants</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-description'><small>public</small>  <span class='blue'>string</span> $description</h4>
</dt>
<dd>
 <p>description of the class from the comment</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-modifiers'><small>public</small>  <span class='blue'>string</span> $modifiers</h4>
</dt>
<dd>
 <p>modifiers like abstract, final</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-parents'><small>public</small>  <span class='blue'>array</span> $parents</h4>
</dt>
<dd>
 <p>Parent classes/interfaces of this class/interface</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-regex_class_member'><small>public static</small>  <span class='blue'>string</span> $regex_class_member</h4>
</dt>
<dd>
 <p>PCRE fragment for matching 'Class', 'Class::method', 'Class::method()' or 'Class::$property'</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(33)</span> "((\w++)(?:::(\$?\w++))?(?:\(\))?)"</pre></dd>
<dt>
<h4 id='property-tags'><small>public</small>  <span class='blue'>array</span> $tags</h4>
</dt>
<dd>
 <p>array of tags, retrieved from the comment</p>
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
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="Class name">$class</span> )<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Loads a class and uses <a href="http://php.net/reflection">reflection</a> to parse
the class. Reads the class modifiers, constants and comment. Parses the
comment to find the description and tags.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $class</strong> <small>required</small> - Class name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($class)
{
	$this-&gt;class = new ReflectionClass($class);

	if ($modifiers = $this-&gt;class-&gt;getModifiers())
	{
		$this-&gt;modifiers = &#039;&lt;small&gt;&#039;.implode(&#039; &#039;, Reflection::getModifierNames($modifiers)).&#039;&lt;/small&gt; &#039;;
	}

	$this-&gt;constants = $this-&gt;class-&gt;getConstants();

	// If ReflectionClass::getParentClass() won&#039;t work if the class in
	// question is an interface
	if ($this-&gt;class-&gt;isInterface())
	{
		$this-&gt;parents = $this-&gt;class-&gt;getInterfaces();
	}
	else
	{
		$parent = $this-&gt;class;

		while ($parent = $parent-&gt;getParentClass())
		{
			$this-&gt;parents[] = $parent;
		}
	}

	if ( ! $comment = $this-&gt;class-&gt;getDocComment())
	{
		foreach ($this-&gt;parents as $parent)
		{
			if ($comment = $parent-&gt;getDocComment())
			{
				// Found a description for this class
				break;
			}
		}
	}

	list($this-&gt;description, $this-&gt;tags) = Kodoc::parse($comment, FALSE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="constants"><small>public</small>  constants()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Gets the constants of this class as HTML.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function constants()
{
	$result = [];

	foreach ($this-&gt;constants as $name =&gt; $value)
	{
		$result[$name] = Debug::vars($value);
	}

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="description"><small>public</small>  description()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Get the description of this class as HTML. Includes a warning when the
class or one of its parents could not be found.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - HTML 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function description()
{
	$result = $this-&gt;description;

	// If this class extends Kodoc_Missing, add a warning about possible
	// incomplete documentation
	foreach ($this-&gt;parents as $parent)
	{
		if ($parent-&gt;name == &#039;Kodoc_Missing&#039;)
		{
			$result .= &quot;[!!] **This class, or a class parent, could not be
			           found or loaded. This could be caused by a missing
			           module or other dependancy. The documentation for
			           class may not be complete!**&quot;;
		}
	}

	return Kodoc_Markdown::markdown($result);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="methods"><small>public</small>  methods()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Gets a list of the class properties as <a href="/index.php/">Kodoc_Method</a> objects.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function methods()
{
	$methods = $this-&gt;class-&gt;getMethods();

	usort($methods, [$this,&#039;_method_sort&#039;]);

	foreach ($methods as $key =&gt; $method)
	{
		$methods[$key] = new Kodoc_Method($this-&gt;class-&gt;name, $method-&gt;name);
	}

	return $methods;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="properties"><small>public</small>  properties()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Gets a list of the class properties as <a href="/index.php/">Kodoc_Property</a> objects.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function properties()
{
	$props = $this-&gt;class-&gt;getProperties();

	$defaults = $this-&gt;class-&gt;getDefaultProperties();

	usort($props, [$this,&#039;_prop_sort&#039;]);

	foreach ($props as $key =&gt; $property)
	{
		// Create Kodoc Properties for each property
		$props[$key] = new Kodoc_Property($this-&gt;class-&gt;name, $property-&gt;name,  Arr::get($defaults, $property-&gt;name));
	}

	return $props;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="tags"><small>public</small>  tags()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Get the tags of this class as HTML.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function tags()
{
	$result = [];

	foreach ($this-&gt;tags as $name =&gt; $set)
	{
		foreach ($set as $text)
		{
			$result[$name][] = Kodoc::format_tag($name, $text);
		}
	}

	return $result;
}</code>
</pre>
</div>
</div>

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

<div class='method'>
<h3 id="_method_sort"><small>protected</small>  _method_sort()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'><p>Sort methods based on their visibility and declaring class based on:</p>

<ul>
<li>methods will be sorted public, protected, then private.</li>
<li>methods that are declared by an ancestor will be after classes
declared by the current class</li>
<li>lastly, they will be sorted alphabetically</li>
</ul>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _method_sort($a, $b)
{
	// If one method is public, and the other is not, it goes on top
	if ($a-&gt;isPublic() AND ( ! $b-&gt;isPublic()))
		return -1;
	if ($b-&gt;isPublic() AND ( ! $a-&gt;isPublic()))
		return 1;

	// If one method is protected and the other is private, it goes on top
	if ($a-&gt;isProtected() AND $b-&gt;isPrivate())
		return -1;
	if ($b-&gt;isProtected() AND $a-&gt;isPrivate())
		return 1;

	// The methods have the same visibility, so check the declaring class depth:


	/*
	echo Debug::vars(&#039;a is &#039;.$a-&gt;class.&#039;::&#039;.$a-&gt;name,&#039;b is &#039;.$b-&gt;class.&#039;::&#039;.$b-&gt;name,
					   &#039;are the classes the same?&#039;, $a-&gt;class == $b-&gt;class,&#039;if they are, the result is:&#039;,strcmp($a-&gt;name, $b-&gt;name),
					   &#039;is a this class?&#039;, $a-&gt;name == $this-&gt;class-&gt;name,-1,
					   &#039;is b this class?&#039;, $b-&gt;name == $this-&gt;class-&gt;name,1,
					   &#039;otherwise, the result is:&#039;,strcmp($a-&gt;class, $b-&gt;class)
					   );
	*/

	// If both methods are defined in the same class, just compare the method names
	if ($a-&gt;class == $b-&gt;class)
		return strcmp($a-&gt;name, $b-&gt;name);

	// If one of them was declared by this class, it needs to be on top
	if ($a-&gt;name == $this-&gt;class-&gt;name)
		return -1;
	if ($b-&gt;name == $this-&gt;class-&gt;name)
		return 1;

	// Otherwise, get the parents of each methods declaring class, then compare which function has more &quot;ancestors&quot;
	$adepth = 0;
	$bdepth = 0;

	$parent = $a-&gt;getDeclaringClass();
	do
	{
		$adepth++;
	}
	while ($parent = $parent-&gt;getParentClass());

	$parent = $b-&gt;getDeclaringClass();
	do
	{
		$bdepth++;
	}
	while ($parent = $parent-&gt;getParentClass());

	return $bdepth - $adepth;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_prop_sort"><small>protected</small>  _prop_sort()<small> (defined in <a href='/documentation/api/Kohana_Kodoc_Class'>Kohana_Kodoc_Class</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _prop_sort($a, $b)
{
	// If one property is public, and the other is not, it goes on top
	if ($a-&gt;isPublic() AND ( ! $b-&gt;isPublic()))
		return -1;
	if ($b-&gt;isPublic() AND ( ! $a-&gt;isPublic()))
		return 1;

	// If one property is protected and the other is private, it goes on top
	if ($a-&gt;isProtected() AND $b-&gt;isPrivate())
		return -1;
	if ($b-&gt;isProtected() AND $a-&gt;isPrivate())
		return 1;

	// Otherwise just do alphabetical
	return strcmp($a-&gt;name, $b-&gt;name);
}</code>
</pre>
</div>
</div>
</div>