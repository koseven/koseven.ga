---
layout: api
class: Kohana_Inflector
---
<h1>Kohana_Inflector</h1>
<p>
<i><p>Inflector helper class. Inflection is changing the form of a word based on
the context it is used in. For example, changing a word into a plural form.</p>

<p class="note">Inflection is only tested with English, and is will not work with other languages.</p>
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
<a href="#property-cache">$cache</a>
</li>
<li>
<a href="#property-irregular">$irregular</a>
</li>
<li>
<a href="#property-uncountable">$uncountable</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#camelize">camelize()</a>
</li>
<li>
<a href="#decamelize">decamelize()</a>
</li>
<li>
<a href="#humanize">humanize()</a>
</li>
<li>
<a href="#plural">plural()</a>
</li>
<li>
<a href="#singular">singular()</a>
</li>
<li>
<a href="#uncountable">uncountable()</a>
</li>
<li>
<a href="#underscore">underscore()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-cache'><small>protected static</small>  <span class='blue'>array</span> $cache</h4>
</dt>
<dd>
 <p>cached inflections</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-irregular'><small>protected static</small>  <span class='blue'>array</span> $irregular</h4>
</dt>
<dd>
 <p>irregular words</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-uncountable'><small>protected static</small>  <span class='blue'>array</span> $uncountable</h4>
</dt>
<dd>
 <p>uncountable words</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="camelize"><small>public static</small>  camelize(<small>string</small> <span class="param" title="Phrase to camelize">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Makes a phrase camel case. Spaces and underscores will be removed.</p>

<pre><code>$str = Inflector::camelize('mother cat');     // "motherCat"
$str = Inflector::camelize('kittens in bed'); // "kittensInBed"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to camelize</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function camelize($str)
{
	$str = &#039;x&#039;.strtolower(trim($str));
	$str = ucwords(preg_replace(&#039;/[\s_]+/&#039;, &#039; &#039;, $str));

	return substr(str_replace(&#039; &#039;, &#039;&#039;, $str), 1);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="decamelize"><small>public static</small>  decamelize(<small>string</small> <span class="param" title="Phrase to camelize">$str</span> [, <small>string</small> <span class="param" title="Word separator">$sep</span> <small>= <small>string</small><span>(1)</span> " "</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Converts a camel case phrase into a spaced phrase.</p>

<pre><code>$str = Inflector::decamelize('houseCat');    // "house cat"
$str = Inflector::decamelize('kingAllyCat'); // "king ally cat"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to camelize</li>
<li>
 <span class="blue">string </span><strong> $sep</strong> <small> = <small>string</small><span>(1)</span> " "</small> - Word separator</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function decamelize($str, $sep = &#039; &#039;)
{
	return strtolower(preg_replace(&#039;/([a-z])([A-Z])/&#039;, &#039;$1&#039;.$sep.&#039;$2&#039;, trim($str)));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="humanize"><small>public static</small>  humanize(<small>string</small> <span class="param" title="Phrase to make human-readable">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Makes an underscored or dashed phrase human-readable.</p>

<pre><code>$str = Inflector::humanize('kittens-are-cats'); // "kittens are cats"
$str = Inflector::humanize('dogs_as_well');     // "dogs as well"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to make human-readable</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function humanize($str)
{
	return preg_replace(&#039;/[_-]+/&#039;, &#039; &#039;, trim($str));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="plural"><small>public static</small>  plural(<small>string</small> <span class="param" title="Word to pluralize">$str</span> [, <small>integer</small> <span class="param" title="Count of thing">$count</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Makes a singular word plural.</p>

<pre><code>echo Inflector::plural('fish'); // "fish", uncountable
echo Inflector::plural('cat');  // "cats"
</code></pre>

<p>You can also provide the count to make inflection more intelligent.
In this case, it will only return the plural value if the count is
not one.</p>

<pre><code>echo Inflector::singular('cats', 3); // "cats"
</code></pre>

<p class="note">Special inflections are defined in <code>config/inflector.php</code>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Word to pluralize</li>
<li>
 <span class="blue">integer </span><strong> $count</strong> <small> = <small>NULL</small></small> - Count of thing</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#uncountable">Inflector::uncountable</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function plural($str, $count = NULL)
{
	// $count should always be a float
	$count = ($count === NULL) ? 0.0 : (float) $count;

	// Do nothing with singular
	if ($count == 1)
		return $str;

	// Remove garbage
	$str = trim($str);

	// Cache key name
	$key = &#039;plural_&#039;.$str.$count;

	// Check uppercase
	$is_uppercase = ctype_upper($str);

	if (isset(Inflector::$cache[$key]))
		return Inflector::$cache[$key];

	if (Inflector::uncountable($str))
		return Inflector::$cache[$key] = $str;

	if (empty(Inflector::$irregular))
	{
		// Cache irregular words
		Inflector::$irregular = Kohana::$config-&gt;load(&#039;inflector&#039;)-&gt;irregular;
	}

	if (isset(Inflector::$irregular[$str]))
	{
		$str = Inflector::$irregular[$str];
	}
	elseif (in_array($str, Inflector::$irregular))
	{
		// Do nothing
	}
	elseif (preg_match(&#039;/[sxz]$/&#039;, $str) OR preg_match(&#039;/[^aeioudgkprt]h$/&#039;, $str))
	{
		$str .= &#039;es&#039;;
	}
	elseif (preg_match(&#039;/[^aeiou]y$/&#039;, $str))
	{
		// Change &quot;y&quot; to &quot;ies&quot;
		$str = substr_replace($str, &#039;ies&#039;, -1);
	}
	else
	{
		$str .= &#039;s&#039;;
	}

	// Convert to uppercase if necessary
	if ($is_uppercase)
	{
		$str = strtoupper($str);
	}

	// Set the cache and return
	return Inflector::$cache[$key] = $str;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="singular"><small>public static</small>  singular(<small>string</small> <span class="param" title="Word to make singular">$str</span> [, <small>integer</small> <span class="param" title="Count of thing">$count</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Makes a plural word singular.</p>

<pre><code>echo Inflector::singular('cats'); // "cat"
echo Inflector::singular('fish'); // "fish", uncountable
</code></pre>

<p>You can also provide the count to make inflection more intelligent.
In this case, it will only return the singular value if the count is
greater than one and not zero.</p>

<pre><code>echo Inflector::singular('cats', 2); // "cats"
</code></pre>

<p class="note">Special inflections are defined in <code>config/inflector.php</code>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Word to make singular</li>
<li>
 <span class="blue">integer </span><strong> $count</strong> <small> = <small>NULL</small></small> - Count of thing</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#uncountable">Inflector::uncountable</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function singular($str, $count = NULL)
{
	// $count should always be a float
	$count = ($count === NULL) ? 1.0 : (float) $count;

	// Do nothing when $count is not 1
	if ($count != 1)
		return $str;

	// Remove garbage
	$str = strtolower(trim($str));

	// Cache key name
	$key = &#039;singular_&#039;.$str.$count;

	if (isset(Inflector::$cache[$key]))
		return Inflector::$cache[$key];

	if (Inflector::uncountable($str))
		return Inflector::$cache[$key] = $str;

	if (empty(Inflector::$irregular))
	{
		// Cache irregular words
		Inflector::$irregular = Kohana::$config-&gt;load(&#039;inflector&#039;)-&gt;irregular;
	}

	if ($irregular = array_search($str, Inflector::$irregular))
	{
		$str = $irregular;
	}
	elseif (preg_match(&#039;/us$/&#039;, $str))
	{
		// http://en.wikipedia.org/wiki/Plural_form_of_words_ending_in_-us
		// Already singular, do nothing
	}
	elseif (preg_match(&#039;/[sxz]es$/&#039;, $str) OR preg_match(&#039;/[^aeioudgkprt]hes$/&#039;, $str))
	{
		// Remove &quot;es&quot;
		$str = substr($str, 0, -2);
	}
	elseif (preg_match(&#039;/[^aeiou]ies$/&#039;, $str))
	{
		// Replace &quot;ies&quot; with &quot;y&quot;
		$str = substr($str, 0, -3).&#039;y&#039;;
	}
	elseif (substr($str, -1) === &#039;s&#039; AND substr($str, -2) !== &#039;ss&#039;)
	{
		// Remove singular &quot;s&quot;
		$str = substr($str, 0, -1);
	}

	return Inflector::$cache[$key] = $str;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="uncountable"><small>public static</small>  uncountable(<small>string</small> <span class="param" title="Word to check">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Checks if a word is defined as uncountable. An uncountable word has a
single form. For instance, one "fish" and many "fish", not "fishes".</p>

<pre><code>Inflector::uncountable('fish'); // TRUE
Inflector::uncountable('cat');  // FALSE
</code></pre>

<p>If you find a word is being pluralized improperly, it has probably not
been defined as uncountable in <code>config/inflector.php</code>. If this is the
case, please report <a href="http://dev.kohanaphp.com/projects/kohana3/issues">an issue</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Word to check</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function uncountable($str)
{
	if (Inflector::$uncountable === NULL)
	{
		// Cache uncountables
		Inflector::$uncountable = Kohana::$config-&gt;load(&#039;inflector&#039;)-&gt;uncountable;

		// Make uncountables mirrored
		Inflector::$uncountable = array_combine(Inflector::$uncountable, Inflector::$uncountable);
	}

	return isset(Inflector::$uncountable[strtolower($str)]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="underscore"><small>public static</small>  underscore(<small>string</small> <span class="param" title="Phrase to underscore">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Inflector'>Kohana_Inflector</a>)</small></h3>
<div class='description'><p>Makes a phrase underscored instead of spaced.</p>

<pre><code>$str = Inflector::underscore('five cats'); // "five_cats";
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to underscore</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function underscore($str)
{
	return preg_replace(&#039;/\s+/&#039;, &#039;_&#039;, trim($str));
}</code>
</pre>
</div>
</div>
</div>