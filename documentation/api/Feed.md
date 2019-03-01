---
layout: api
class: Feed
---
<h1>Feed</h1>
extends <a href='/documentation/api/Kohana_Feed'>Kohana_Feed</a>
<br />
<p>
<i><p>RSS and Atom feed helper.</p>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Feed'>Kohana_Feed</a></p>
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
<em>None</em>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#create">create()</a>
</li>
<li>
<a href="#parse">parse()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="create"><small>public static</small>  create(<small>array</small> <span class="param" title="Feed information">$info</span> , <small>array</small> <span class="param" title="Items to add to the feed">$items</span> [, <small>string</small> <span class="param" title="Define which encoding to use">$encoding</span> <small>= <small>string</small><span>(5)</span> "UTF-8"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Feed'>Kohana_Feed</a>)</small></h3>
<div class='description'><p>Creates a feed from the given parameters.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $info</strong> <small>required</small> - Feed information</li>
<li>
 <span class="blue">array </span><strong> $items</strong> <small>required</small> - Items to add to the feed</li>
<li>
 <span class="blue">string </span><strong> $encoding</strong> <small> = <small>string</small><span>(5)</span> "UTF-8"</small> - Define which encoding to use</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function create($info, $items, $encoding = &#039;UTF-8&#039;)
{
	$info += [&#039;title&#039; =&gt; &#039;Generated Feed&#039;, &#039;link&#039; =&gt; &#039;&#039;, &#039;generator&#039; =&gt; &#039;KohanaPHP&#039;];

	$feed = &#039;&lt;?xml version=&quot;1.0&quot; encoding=&quot;&#039;.$encoding.&#039;&quot;?&gt;&lt;rss version=&quot;2.0&quot;&gt;&lt;channel&gt;&lt;/channel&gt;&lt;/rss&gt;&#039;;
	$feed = simplexml_load_string($feed);

	foreach ($info as $name =&gt; $value)
	{
		if ($name === &#039;image&#039;)
		{
			// Create an image element
			$image = $feed-&gt;channel-&gt;addChild(&#039;image&#039;);

			if ( ! isset($value[&#039;link&#039;], $value[&#039;url&#039;], $value[&#039;title&#039;]))
			{
				throw new Kohana_Exception(&#039;Feed images require a link, url, and title&#039;);
			}

			if (strpos($value[&#039;link&#039;], &#039;://&#039;) === FALSE)
			{
				// Convert URIs to URLs
				$value[&#039;link&#039;] = URL::site($value[&#039;link&#039;], &#039;http&#039;);
			}

			if (strpos($value[&#039;url&#039;], &#039;://&#039;) === FALSE)
			{
				// Convert URIs to URLs
				$value[&#039;url&#039;] = URL::site($value[&#039;url&#039;], &#039;http&#039;);
			}

			// Create the image elements
			$image-&gt;addChild(&#039;link&#039;, $value[&#039;link&#039;]);
			$image-&gt;addChild(&#039;url&#039;, $value[&#039;url&#039;]);
			$image-&gt;addChild(&#039;title&#039;, $value[&#039;title&#039;]);
		}
		else
		{
			if (($name === &#039;pubDate&#039; OR $name === &#039;lastBuildDate&#039;) AND (is_int($value) OR ctype_digit($value)))
			{
				// Convert timestamps to RFC 822 formatted dates
				$value = date(&#039;r&#039;, $value);
			}
			elseif (($name === &#039;link&#039; OR $name === &#039;docs&#039;) AND strpos($value, &#039;://&#039;) === FALSE)
			{
				// Convert URIs to URLs
				$value = URL::site($value, &#039;http&#039;);
			}

			// Add the info to the channel
			$feed-&gt;channel-&gt;addChild($name, $value);
		}
	}

	foreach ($items as $item)
	{
		// Add the item to the channel
		$row = $feed-&gt;channel-&gt;addChild(&#039;item&#039;);

		foreach ($item as $name =&gt; $value)
		{
			if ($name === &#039;pubDate&#039; AND (is_int($value) OR ctype_digit($value)))
			{
				// Convert timestamps to RFC 822 formatted dates
				$value = date(&#039;r&#039;, $value);
			}
			elseif (($name === &#039;link&#039; OR $name === &#039;guid&#039;) AND strpos($value, &#039;://&#039;) === FALSE)
			{
				// Convert URIs to URLs
				$value = URL::site($value, &#039;http&#039;);
			}

			// Add the info to the row
			$row-&gt;addChild($name, $value);
		}
	}

	if (function_exists(&#039;dom_import_simplexml&#039;))
	{
		// Convert the feed object to a DOM object
		$feed = dom_import_simplexml($feed)-&gt;ownerDocument;

		// DOM generates more readable XML
		$feed-&gt;formatOutput = TRUE;

		// Export the document as XML
		$feed = $feed-&gt;saveXML();
	}
	else
	{
		// Export the document as XML
		$feed = $feed-&gt;asXML();
	}

	return $feed;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parse"><small>public static</small>  parse(<small>string</small> <span class="param" title="Remote feed URL">$feed</span> [, <small>integer</small> <span class="param" title="Item limit to fetch">$limit</span> <small>= <small>integer</small> 0</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Feed'>Kohana_Feed</a>)</small></h3>
<div class='description'><p>Parses a remote feed into an array.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $feed</strong> <small>required</small> - Remote feed URL</li>
<li>
 <span class="blue">integer </span><strong> $limit</strong> <small> = <small>integer</small> 0</small> - Item limit to fetch</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function parse($feed, $limit = 0)
{
	// Check if SimpleXML is installed
	if ( ! function_exists(&#039;simplexml_load_file&#039;))
		throw new Kohana_Exception(&#039;SimpleXML must be installed!&#039;);

	// Make limit an integer
	$limit = (int) $limit;

	// Disable error reporting while opening the feed
	$error_level = error_reporting(0);

	// Allow loading by filename or raw XML string
	if (Valid::url($feed))
	{
		// Use native Request client to get remote contents
		$response = Request::factory($feed)-&gt;execute();
		$feed     = $response-&gt;body();
	}
	elseif (is_file($feed))
	{
		// Get file contents
		$feed = file_get_contents($feed);
	}

	// Load the feed
	$feed = simplexml_load_string($feed, &#039;SimpleXMLElement&#039;, LIBXML_NOCDATA);

	// Restore error reporting
	error_reporting($error_level);

	// Feed could not be loaded
	if ($feed === FALSE)
		return [];

	$namespaces = $feed-&gt;getNamespaces(TRUE);

	// Detect the feed type. RSS 1.0/2.0 and Atom 1.0 are supported.
	$feed = isset($feed-&gt;channel) ? $feed-&gt;xpath(&#039;//item&#039;) : $feed-&gt;entry;

	$i = 0;
	$items = [];

	foreach ($feed as $item)
	{
		if ($limit &gt; 0 AND $i++ === $limit)
			break;
		$item_fields = (array) $item;

		// get namespaced tags
		foreach ($namespaces as $ns)
		{
			$item_fields += (array) $item-&gt;children($ns);
		}
		$items[] = $item_fields;
	}

	return $items;
}</code>
</pre>
</div>
</div>
</div>