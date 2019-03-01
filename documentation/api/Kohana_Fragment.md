---
layout: api
class: Kohana_Fragment
---
<h1>Kohana_Fragment</h1>
<p>
<i><p>View fragment caching. This is primarily used to cache small parts of a view
that rarely change. For instance, you may want to cache the footer of your
template because it has very little dynamic content. Or you could cache a
user profile page and delete the fragment when the user updates.</p>

<p>For obvious reasons, fragment caching should not be applied to any
content that contains forms.</p>

<p class="note">Multiple language (I18n) support was added in v3.0.4.</p>
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
<dt>uses</dt>
<dd>Kohana::cache</dd>
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
<a href="#property-i18n">$i18n</a>
</li>
<li>
<a href="#property-lifetime">$lifetime</a>
</li>
<li>
<a href="#property-_caches">$_caches</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#load">load()</a>
</li>
<li>
<a href="#save">save()</a>
</li>
<li>
<a href="#_cache_key">_cache_key()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-i18n'><small>public static</small>  <span class='blue'>boolean</span> $i18n</h4>
</dt>
<dd>
 <p>use multilingual fragment support?</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-lifetime'><small>public static</small>  <span class='blue'>integer</span> $lifetime</h4>
</dt>
<dd>
 <p>default number of seconds to cache for</p>
</dd>
<dd>
 <pre class="debug"><small>integer</small> 30</pre></dd>
<dt>
<h4 id='property-_caches'><small>protected static</small>  <span class='blue'>array</span> $_caches</h4>
</dt>
<dd>
 <p>list of buffer => cache key</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="delete"><small>public static</small>  delete(<small>string</small> <span class="param" title="Fragment name">$name</span> [, <small>boolean</small> <span class="param" title="Multilingual fragment support">$i18n</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Fragment'>Kohana_Fragment</a>)</small></h3>
<div class='description'><p>Delete a cached fragment.</p>

<pre><code>Fragment::delete($key);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Fragment name</li>
<li>
 <span class="blue">boolean </span><strong> $i18n</strong> <small> = <small>NULL</small></small> - Multilingual fragment support</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function delete($name, $i18n = NULL)
{
	// Invalid the cache
	Kohana::cache(Fragment::_cache_key($name, $i18n), NULL, -3600);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="load"><small>public static</small>  load(<small>string</small> <span class="param" title="Fragment name">$name</span> [, <small>integer</small> <span class="param" title="Fragment cache lifetime">$lifetime</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Multilingual fragment support">$i18n</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Fragment'>Kohana_Fragment</a>)</small></h3>
<div class='description'><p>Load a fragment from cache and display it. Multiple fragments can
be nested with different life times.</p>

<pre><code>if ( ! Fragment::load('footer')) {
    // Anything that is echo'ed here will be saved
    Fragment::save();
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Fragment name</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Fragment cache lifetime</li>
<li>
 <span class="blue">boolean </span><strong> $i18n</strong> <small> = <small>NULL</small></small> - Multilingual fragment support</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function load($name, $lifetime = NULL, $i18n = NULL)
{
	// Set the cache lifetime
	$lifetime = ($lifetime === NULL) ? Fragment::$lifetime : (int) $lifetime;

	// Get the cache key name
	$cache_key = Fragment::_cache_key($name, $i18n);

	if ($fragment = Kohana::cache($cache_key, NULL, $lifetime))
	{
		// Display the cached fragment now
		echo $fragment;

		return TRUE;
	}
	else
	{
		// Start the output buffer
		ob_start();

		// Store the cache key by the buffer level
		Fragment::$_caches[ob_get_level()] = $cache_key;

		return FALSE;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="save"><small>public static</small>  save()<small> (defined in <a href='/documentation/api/Kohana_Fragment'>Kohana_Fragment</a>)</small></h3>
<div class='description'><p>Saves the currently open fragment in the cache.</p>

<pre><code>Fragment::save();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function save()
{
	// Get the buffer level
	$level = ob_get_level();

	if (isset(Fragment::$_caches[$level]))
	{
		// Get the cache key based on the level
		$cache_key = Fragment::$_caches[$level];

		// Delete the cache key, we don&#039;t need it anymore
		unset(Fragment::$_caches[$level]);

		// Get the output buffer and display it at the same time
		$fragment = ob_get_flush();

		// Cache the fragment
		Kohana::cache($cache_key, $fragment);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_cache_key"><small>protected static</small>  _cache_key(<small>string</small> <span class="param" title="Fragment name">$name</span> [, <small>boolean</small> <span class="param" title="Multilingual fragment support">$i18n</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Fragment'>Kohana_Fragment</a>)</small></h3>
<div class='description'><p>Generate the cache key name for a fragment.</p>

<pre><code>$key = Fragment::_cache_key('footer', TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small>required</small> - Fragment name</li>
<li>
 <span class="blue">boolean </span><strong> $i18n</strong> <small> = <small>NULL</small></small> - Multilingual fragment support</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#lang">I18n::lang</a></li>
<li>Since - 3.0.4</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _cache_key($name, $i18n = NULL)
{
	if ($i18n === NULL)
	{
		// Use the default setting
		$i18n = Fragment::$i18n;
	}

	// Language prefix for cache key
	$i18n = ($i18n === TRUE) ? I18n::lang() : &#039;&#039;;

	// Note: $i18n and $name need to be delimited to prevent naming collisions
	return &#039;Fragment::cache(&#039;.$i18n.&#039;+&#039;.$name.&#039;)&#039;;
}</code>
</pre>
</div>
</div>
</div>