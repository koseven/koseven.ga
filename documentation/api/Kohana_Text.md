---
layout: api
class: Kohana_Text
---
<h1>Kohana_Text</h1>
<p>
<i><p>Text helper class. Provides simple methods for working with text.</p>
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
<a href="#property-units">$units</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#alternate">alternate()</a>
</li>
<li>
<a href="#auto_link">auto_link()</a>
</li>
<li>
<a href="#auto_link_emails">auto_link_emails()</a>
</li>
<li>
<a href="#auto_link_urls">auto_link_urls()</a>
</li>
<li>
<a href="#auto_p">auto_p()</a>
</li>
<li>
<a href="#bytes">bytes()</a>
</li>
<li>
<a href="#censor">censor()</a>
</li>
<li>
<a href="#limit_chars">limit_chars()</a>
</li>
<li>
<a href="#limit_words">limit_words()</a>
</li>
<li>
<a href="#number">number()</a>
</li>
<li>
<a href="#random">random()</a>
</li>
<li>
<a href="#reduce_slashes">reduce_slashes()</a>
</li>
<li>
<a href="#similar">similar()</a>
</li>
<li>
<a href="#ucfirst">ucfirst()</a>
</li>
<li>
<a href="#user_agent">user_agent()</a>
</li>
<li>
<a href="#widont">widont()</a>
</li>
<li>
<a href="#_auto_link_emails_callback">_auto_link_emails_callback()</a>
</li>
<li>
<a href="#_auto_link_urls_callback1">_auto_link_urls_callback1()</a>
</li>
<li>
<a href="#_auto_link_urls_callback2">_auto_link_urls_callback2()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-units'><small>public static</small>  <span class='blue'>array</span> $units</h4>
</dt>
<dd>
 <p>number units and text equivalents</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(31)</span> <span>(
    1000000000 => <small>string</small><span>(7)</span> "billion"
    1000000 => <small>string</small><span>(7)</span> "million"
    1000 => <small>string</small><span>(8)</span> "thousand"
    100 => <small>string</small><span>(7)</span> "hundred"
    90 => <small>string</small><span>(6)</span> "ninety"
    80 => <small>string</small><span>(6)</span> "eighty"
    70 => <small>string</small><span>(7)</span> "seventy"
    60 => <small>string</small><span>(5)</span> "sixty"
    50 => <small>string</small><span>(5)</span> "fifty"
    40 => <small>string</small><span>(6)</span> "fourty"
    30 => <small>string</small><span>(6)</span> "thirty"
    20 => <small>string</small><span>(6)</span> "twenty"
    19 => <small>string</small><span>(8)</span> "nineteen"
    18 => <small>string</small><span>(8)</span> "eighteen"
    17 => <small>string</small><span>(9)</span> "seventeen"
    16 => <small>string</small><span>(7)</span> "sixteen"
    15 => <small>string</small><span>(7)</span> "fifteen"
    14 => <small>string</small><span>(8)</span> "fourteen"
    13 => <small>string</small><span>(8)</span> "thirteen"
    12 => <small>string</small><span>(6)</span> "twelve"
    11 => <small>string</small><span>(6)</span> "eleven"
    10 => <small>string</small><span>(3)</span> "ten"
    9 => <small>string</small><span>(4)</span> "nine"
    8 => <small>string</small><span>(5)</span> "eight"
    7 => <small>string</small><span>(5)</span> "seven"
    6 => <small>string</small><span>(3)</span> "six"
    5 => <small>string</small><span>(4)</span> "five"
    4 => <small>string</small><span>(4)</span> "four"
    3 => <small>string</small><span>(5)</span> "three"
    2 => <small>string</small><span>(3)</span> "two"
    1 => <small>string</small><span>(3)</span> "one"
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="alternate"><small>public static</small>  alternate()<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Alternates between two or more strings.</p>

<pre><code>echo Text::alternate('one', 'two'); // "one"
echo Text::alternate('one', 'two'); // "two"
echo Text::alternate('one', 'two'); // "one"
</code></pre>

<p>Note that using multiple iterations of different strings may produce
unexpected results.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function alternate()
{
	static $i;

	if (func_num_args() === 0)
	{
		$i = 0;
		return &#039;&#039;;
	}

	$args = func_get_args();
	return $args[($i++ % count($args))];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_link"><small>public static</small>  auto_link(<small>string</small> <span class="param" title="Text to auto link">$text</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Converts text email addresses and anchors into links. Existing links
will not be altered.</p>

<pre><code>echo Text::auto_link($text);
</code></pre>

<p class="note">This method is not foolproof since it uses regex to parse HTML.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small>required</small> - Text to auto link</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#auto_link_urls">Text::auto_link_urls</a>, <a href="#auto_link_emails">Text::auto_link_emails</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_link($text)
{
	// Auto link emails first to prevent problems with &quot;www.domain.com@example.com&quot;
	return Text::auto_link_urls(Text::auto_link_emails($text));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_link_emails"><small>public static</small>  auto_link_emails(<small>string</small> <span class="param" title="Text to auto link">$text</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Converts text email addresses into links. Existing links will not
be altered.</p>

<pre><code>echo Text::auto_link_emails($text);
</code></pre>

<p class="note">This method is not foolproof since it uses regex to parse HTML.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small>required</small> - Text to auto link</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#mailto">HTML::mailto</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_link_emails($text)
{
	// Find and replace all email addresses that are not part of an existing html mailto anchor
	// Note: The &quot;58;&quot; negative lookbehind prevents matching of existing encoded html mailto anchors
	//       The html entity for a colon (:) is &amp;#58; or &amp;#058; or &amp;#0058; etc.
	return preg_replace_callback(&#039;~\b(?&lt;!href=&quot;mailto:|58;)(?!\.)[-+_a-z0-9.]++(?&lt;!\.)@(?![-.])[-a-z0-9.]+(?&lt;!\.)\.[a-z]{2,6}\b(?!&lt;/a&gt;)~i&#039;, &#039;Text::_auto_link_emails_callback&#039;, $text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_link_urls"><small>public static</small>  auto_link_urls(<small>string</small> <span class="param" title="Text to auto link">$text</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Converts text anchors into links. Existing links will not be altered.</p>

<pre><code>echo Text::auto_link_urls($text);
</code></pre>

<p class="note">This method is not foolproof since it uses regex to parse HTML.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $text</strong> <small>required</small> - Text to auto link</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#anchor">HTML::anchor</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_link_urls($text)
{
	// Find and replace all http/https/ftp/ftps links that are not part of an existing html anchor
	$text = preg_replace_callback(&#039;~\b(?&lt;!href=&quot;|&quot;&gt;)(?:ht|f)tps?://[^&lt;\s]+(?:/|\b)~i&#039;, &#039;Text::_auto_link_urls_callback1&#039;, $text);

	// Find and replace all naked www.links.com (without http://)
	return preg_replace_callback(&#039;~\b(?&lt;!://|&quot;&gt;)www(?:\.[a-z0-9][-a-z0-9]*+)+\.[a-z]{2,6}[^&lt;\s]*\b~i&#039;, &#039;Text::_auto_link_urls_callback2&#039;, $text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="auto_p"><small>public static</small>  auto_p(<small>string</small> <span class="param" title="Subject">$str</span> [, <small>boolean</small> <span class="param" title="Convert single linebreaks to <br />">$br</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Automatically applies "p" and "br" markup to text.
Basically <a href="http://php.net/nl2br">nl2br</a> on steroids.</p>

<pre><code>echo Text::auto_p($text);
</code></pre>

<p class="note">This method is not foolproof since it uses regex to parse HTML.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Subject</li>
<li>
 <span class="blue">boolean </span><strong> $br</strong> <small> = <small>bool</small> TRUE</small> - Convert single linebreaks to <br /></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function auto_p($str, $br = TRUE)
{
	// Trim whitespace
	if (($str = trim($str)) === &#039;&#039;)
		return &#039;&#039;;

	// Standardize newlines
	$str = str_replace([&quot;\r\n&quot;, &quot;\r&quot;], &quot;\n&quot;, $str);

	// Trim whitespace on each line
	$str = preg_replace(&#039;~^[ \t]+~m&#039;, &#039;&#039;, $str);
	$str = preg_replace(&#039;~[ \t]+$~m&#039;, &#039;&#039;, $str);

	// The following regexes only need to be executed if the string contains html
	if ($html_found = (strpos($str, &#039;&lt;&#039;) !== FALSE))
	{
		// Elements that should not be surrounded by p tags
		$no_p = &#039;(?:p|div|h[1-6r]|ul|ol|li|blockquote|d[dlt]|pre|t[dhr]|t(?:able|body|foot|head)|c(?:aption|olgroup)|form|s(?:elect|tyle)|a(?:ddress|rea)|ma(?:p|th))&#039;;

		// Put at least two linebreaks before and after $no_p elements
		$str = preg_replace(&#039;~^&lt;&#039;.$no_p.&#039;[^&gt;]*+&gt;~im&#039;, &quot;\n$0&quot;, $str);
		$str = preg_replace(&#039;~&lt;/&#039;.$no_p.&#039;\s*+&gt;$~im&#039;, &quot;$0\n&quot;, $str);
	}

	// Do the &lt;p&gt; magic!
	$str = &#039;&lt;p&gt;&#039;.trim($str).&#039;&lt;/p&gt;&#039;;
	$str = preg_replace(&#039;~\n{2,}~&#039;, &quot;&lt;/p&gt;\n\n&lt;p&gt;&quot;, $str);

	// The following regexes only need to be executed if the string contains html
	if ($html_found !== FALSE)
	{
		// Remove p tags around $no_p elements
		$str = preg_replace(&#039;~&lt;p&gt;(?=&lt;/?&#039;.$no_p.&#039;[^&gt;]*+&gt;)~i&#039;, &#039;&#039;, $str);
		$str = preg_replace(&#039;~(&lt;/?&#039;.$no_p.&#039;[^&gt;]*+&gt;)&lt;/p&gt;~i&#039;, &#039;$1&#039;, $str);
	}

	// Convert single linebreaks to &lt;br /&gt;
	if ($br === TRUE)
	{
		$str = preg_replace(&#039;~(?&lt;!\n)\n(?!\n)~&#039;, &quot;&lt;br /&gt;\n&quot;, $str);
	}

	return $str;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="bytes"><small>public static</small>  bytes(<small>integer</small> <span class="param" title="Size in bytes">$bytes</span> [, <small>string</small> <span class="param" title="A definitive unit">$force_unit</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="The return string format">$format</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Whether to use SI prefixes or IEC">$si</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Returns human readable sizes. Based on original functions written by
<a href="http://aidanlister.com/repos/v/function.size_readable.php">Aidan Lister</a>
and <a href="http://www.phpriot.com/d/code/strings/filesize-format/">Quentin Zervaas</a>.</p>

<pre><code>echo Text::bytes(filesize($file));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $bytes</strong> <small>required</small> - Size in bytes</li>
<li>
 <span class="blue">string </span><strong> $force_unit</strong> <small> = <small>NULL</small></small> - A definitive unit</li>
<li>
 <span class="blue">string </span><strong> $format</strong> <small> = <small>NULL</small></small> - The return string format</li>
<li>
 <span class="blue">boolean </span><strong> $si</strong> <small> = <small>bool</small> TRUE</small> - Whether to use SI prefixes or IEC</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function bytes($bytes, $force_unit = NULL, $format = NULL, $si = TRUE)
{
	// Format string
	$format = ($format === NULL) ? &#039;%01.2f %s&#039; : (string) $format;

	// IEC prefixes (binary)
	if ($si == FALSE OR strpos($force_unit, &#039;i&#039;) !== FALSE)
	{
		$units = [&#039;B&#039;, &#039;KiB&#039;, &#039;MiB&#039;, &#039;GiB&#039;, &#039;TiB&#039;, &#039;PiB&#039;];
		$mod   = 1024;
	}
	// SI prefixes (decimal)
	else
	{
		$units = [&#039;B&#039;, &#039;kB&#039;, &#039;MB&#039;, &#039;GB&#039;, &#039;TB&#039;, &#039;PB&#039;];
		$mod   = 1000;
	}

	// Determine unit to use
	if (($power = array_search( (string) $force_unit, $units)) === FALSE)
	{
		$power = ($bytes &gt; 0) ? floor(log($bytes, $mod)) : 0;
	}

	return sprintf($format, $bytes / pow($mod, $power), $units[$power]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="censor"><small>public static</small>  censor(<small>string</small> <span class="param" title="Phrase to replace words in">$str</span> , <small>array</small> <span class="param" title="Words to replace">$badwords</span> [, <small>string</small> <span class="param" title="Replacement string">$replacement</span> <small>= <small>string</small><span>(1)</span> "#"</small> , <small>boolean</small> <span class="param" title="Replace words across word boundaries (space, period, etc)">$replace_partial_words</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Replaces the given words with a string.</p>

<pre><code>// Displays "What the #####, man!"
echo Text::censor('What the frick, man!', array(
    'frick' =&gt; '#####',
));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to replace words in</li>
<li>
 <span class="blue">array </span><strong> $badwords</strong> <small>required</small> - Words to replace</li>
<li>
 <span class="blue">string </span><strong> $replacement</strong> <small> = <small>string</small><span>(1)</span> "#"</small> - Replacement string</li>
<li>
 <span class="blue">boolean </span><strong> $replace_partial_words</strong> <small> = <small>bool</small> TRUE</small> - Replace words across word boundaries (space, period, etc)</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#strlen">UTF8::strlen</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function censor($str, $badwords, $replacement = &#039;#&#039;, $replace_partial_words = TRUE)
{
	foreach ( (array) $badwords as $key =&gt; $badword)
	{
		$badwords[$key] = str_replace(&#039;\*&#039;, &#039;\S*?&#039;, preg_quote( (string) $badword));
	}

	$regex = &#039;(&#039;.implode(&#039;|&#039;, $badwords).&#039;)&#039;;

	if ($replace_partial_words === FALSE)
	{
		// Just using \b isn&#039;t sufficient when we need to replace a badword that already contains word boundaries itself
		$regex = &#039;(?&lt;=\b|\s|^)&#039;.$regex.&#039;(?=\b|\s|$)&#039;;
	}

	$regex = &#039;!&#039;.$regex.&#039;!ui&#039;;

	// if $replacement is a single character: replace each of the characters of the badword with $replacement
	if (UTF8::strlen($replacement) == 1)
	{
		return preg_replace_callback($regex, function($matches) use ($replacement) {
			return str_repeat($replacement, UTF8::strlen($matches[1]));
		}, $str);
	}

	// if $replacement is not a single character, fully replace the badword with $replacement
	return preg_replace($regex, $replacement, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="limit_chars"><small>public static</small>  limit_chars(<small>string</small> <span class="param" title="Phrase to limit characters of">$str</span> [, <small>integer</small> <span class="param" title="Number of characters to limit to">$limit</span> <small>= <small>integer</small> 100</small> , <small>string</small> <span class="param" title="End character or entity">$end_char</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Enable or disable the preservation of words while limiting">$preserve_words</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Limits a phrase to a given number of characters.</p>

<pre><code>$text = Text::limit_chars($text);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to limit characters of</li>
<li>
 <span class="blue">integer </span><strong> $limit</strong> <small> = <small>integer</small> 100</small> - Number of characters to limit to</li>
<li>
 <span class="blue">string </span><strong> $end_char</strong> <small> = <small>NULL</small></small> - End character or entity</li>
<li>
 <span class="blue">boolean </span><strong> $preserve_words</strong> <small> = <small>bool</small> FALSE</small> - Enable or disable the preservation of words while limiting</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#strlen">UTF8::strlen</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function limit_chars($str, $limit = 100, $end_char = NULL, $preserve_words = FALSE)
{
	$end_char = ($end_char === NULL) ? &#039;…&#039; : $end_char;

	$limit = (int) $limit;

	if (trim($str) === &#039;&#039; OR UTF8::strlen($str) &lt;= $limit)
		return $str;

	if ($limit &lt;= 0)
		return $end_char;

	if ($preserve_words === FALSE)
		return rtrim(UTF8::substr($str, 0, $limit)).$end_char;

	// Don&#039;t preserve words. The limit is considered the top limit.
	// No strings with a length longer than $limit should be returned.
	if ( ! preg_match(&#039;/^.{0,&#039;.$limit.&#039;}\s/us&#039;, $str, $matches))
		return $end_char;

	return rtrim($matches[0]).((strlen($matches[0]) === strlen($str)) ? &#039;&#039; : $end_char);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="limit_words"><small>public static</small>  limit_words(<small>string</small> <span class="param" title="Phrase to limit words of">$str</span> [, <small>integer</small> <span class="param" title="Number of words to limit to">$limit</span> <small>= <small>integer</small> 100</small> , <small>string</small> <span class="param" title="End character or entity">$end_char</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Limits a phrase to a given number of words.</p>

<pre><code>$text = Text::limit_words($text);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Phrase to limit words of</li>
<li>
 <span class="blue">integer </span><strong> $limit</strong> <small> = <small>integer</small> 100</small> - Number of words to limit to</li>
<li>
 <span class="blue">string </span><strong> $end_char</strong> <small> = <small>NULL</small></small> - End character or entity</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function limit_words($str, $limit = 100, $end_char = NULL)
{
	$limit = (int) $limit;
	$end_char = ($end_char === NULL) ? &#039;…&#039; : $end_char;

	if (trim($str) === &#039;&#039;)
		return $str;

	if ($limit &lt;= 0)
		return $end_char;

	preg_match(&#039;/^\s*+(?:\S++\s*+){1,&#039;.$limit.&#039;}/u&#039;, $str, $matches);

	// Only attach the end character if the matched string is shorter
	// than the starting string.
	return rtrim($matches[0]).((strlen($matches[0]) === strlen($str)) ? &#039;&#039; : $end_char);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="number"><small>public static</small>  number(<small>integer</small> <span class="param" title="Number to format">$number</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Format a number to human-readable text.</p>

<pre><code>// Display: one thousand and twenty-four
echo Text::number(1024);

// Display: five million, six hundred and thirty-two
echo Text::number(5000632);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $number</strong> <small>required</small> - Number to format</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.8</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function number($number)
{
	// The number must always be an integer
	$number = (int) $number;

	// Uncompiled text version
	$text = [];

	// Last matched unit within the loop
	$last_unit = NULL;

	// The last matched item within the loop
	$last_item = &#039;&#039;;

	foreach (Text::$units as $unit =&gt; $name)
	{
		if ($number / $unit &gt;= 1)
		{
			// $value = the number of times the number is divisible by unit
			$number -= $unit * ($value = (int) floor($number / $unit));
			// Temporary var for textifying the current unit
			$item = &#039;&#039;;

			if ($unit &lt; 100)
			{
				if ($last_unit &lt; 100 AND $last_unit &gt;= 20)
				{
					$last_item .= &#039;-&#039;.$name;
				}
				else
				{
					$item = $name;
				}
			}
			else
			{
				$item = Text::number($value).&#039; &#039;.$name;
			}

			// In the situation that we need to make a composite number (i.e. twenty-three)
			// then we need to modify the previous entry
			if (empty($item))
			{
				array_pop($text);

				$item = $last_item;
			}

			$last_item = $text[] = $item;
			$last_unit = $unit;
		}
	}

	if (count($text) &gt; 1)
	{
		$and = array_pop($text);
	}

	$text = implode(&#039;, &#039;, $text);

	if (isset($and))
	{
		$text .= &#039; and &#039;.$and;
	}

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="random"><small>public static</small>  random([ <small>string</small> <span class="param" title="A type of pool, or a string of characters to use as the pool">$type</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Length of string to return">$length</span> <small>= <small>integer</small> 8</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Generates a random string of a given type and length.</p>

<pre><code>$str = Text::random(); // 8 character random string
</code></pre>

<p>The following types are supported:</p>

<dl>
<dt>alnum</dt>
<dd>Upper and lower case a-z, 0-9 (default)</dd>

<dt>alpha</dt>
<dd>Upper and lower case a-z</dd>

<dt>hexdec</dt>
<dd>Hexadecimal characters a-f, 0-9</dd>

<dt>distinct</dt>
<dd>Uppercase characters and numbers that cannot be confused</dd>
</dl>

<p>You can also create a custom type by providing the "pool" of characters
as the type.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - A type of pool, or a string of characters to use as the pool</li>
<li>
 <span class="blue">integer </span><strong> $length</strong> <small> = <small>integer</small> 8</small> - Length of string to return</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#split">UTF8::split</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function random($type = NULL, $length = 8)
{
	if ($type === NULL)
	{
		// Default is to generate an alphanumeric string
		$type = &#039;alnum&#039;;
	}

	$utf8 = FALSE;

	switch ($type)
	{
		case &#039;alnum&#039;:
			$pool = &#039;0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;;
		break;
		case &#039;alpha&#039;:
			$pool = &#039;abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ&#039;;
		break;
		case &#039;hexdec&#039;:
			$pool = &#039;0123456789abcdef&#039;;
		break;
		case &#039;numeric&#039;:
			$pool = &#039;0123456789&#039;;
		break;
		case &#039;nozero&#039;:
			$pool = &#039;123456789&#039;;
		break;
		case &#039;distinct&#039;:
			$pool = &#039;2345679ACDEFHJKLMNPRSTUVWXYZ&#039;;
		break;
		default:
			$pool = (string) $type;
			$utf8 = ! UTF8::is_ascii($pool);
		break;
	}

	// Split the pool into an array of characters
	$pool = ($utf8 === TRUE) ? UTF8::str_split($pool, 1) : str_split($pool, 1);

	// Largest pool key
	$max = count($pool) - 1;

	$str = &#039;&#039;;
	for ($i = 0; $i &lt; $length; $i++)
	{
		// Select a random character from the pool and add it to the string
		$str .= $pool[mt_rand(0, $max)];
	}

	// Make sure alnum strings contain at least one letter and one digit
	if ($type === &#039;alnum&#039; AND $length &gt; 1)
	{
		if (ctype_alpha($str))
		{
			// Add a random digit
			$str[mt_rand(0, $length - 1)] = chr(mt_rand(48, 57));
		}
		elseif (ctype_digit($str))
		{
			// Add a random letter
			$str[mt_rand(0, $length - 1)] = chr(mt_rand(65, 90));
		}
	}

	return $str;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reduce_slashes"><small>public static</small>  reduce_slashes(<small>string</small> <span class="param" title="String to reduce slashes of">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Reduces multiple slashes in a string to single slashes.</p>

<pre><code>$str = Text::reduce_slashes('foo//bar/baz'); // "foo/bar/baz"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - String to reduce slashes of</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function reduce_slashes($str)
{
	return preg_replace(&#039;#(?&lt;!:)//+#&#039;, &#039;/&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="similar"><small>public static</small>  similar(<small>array</small> <span class="param" title="Words to find similar text of">$words</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Finds the text that is similar between a set of words.</p>

<pre><code>$match = Text::similar(array('fred', 'fran', 'free'); // "fr"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $words</strong> <small>required</small> - Words to find similar text of</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function similar(array $words)
{
	// First word is the word to match against
	$word = current($words);

	for ($i = 0, $max = strlen($word); $i &lt; $max; ++$i)
	{
		foreach ($words as $w)
		{
			// Once a difference is found, break out of the loops
			if ( ! isset($w[$i]) OR $w[$i] !== $word[$i])
				break 2;
		}
	}

	// Return the similar text
	return substr($word, 0, $i);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ucfirst"><small>public static</small>  ucfirst(<small>string</small> <span class="param" title="String to transform">$string</span> [, <small>string</small> <span class="param" title="Delimiter to use">$delimiter</span> <small>= <small>string</small><span>(1)</span> "-"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Uppercase words that are not separated by spaces, using a custom
delimiter or the default.</p>

<pre><code> $str = Text::ucfirst('content-type'); // returns "Content-Type"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $string</strong> <small>required</small> - String to transform</li>
<li>
 <span class="blue">string </span><strong> $delimiter</strong> <small> = <small>string</small><span>(1)</span> "-"</small> - Delimiter to use</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#ucfirst">UTF8::ucfirst</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ucfirst($string, $delimiter = &#039;-&#039;)
{
	// Put the keys back the Case-Convention expected
	return implode($delimiter, array_map(&#039;UTF8::ucfirst&#039;, explode($delimiter, $string)));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="user_agent"><small>public static</small>  user_agent(<small>string</small> <span class="param" title="User_agent">$agent</span> , <small>mixed</small> <span class="param" title="Array or string to return: browser, version, robot, mobile, platform">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Returns information about the client user agent.</p>

<pre><code>// Returns "Chrome" when using Google Chrome
$browser = Text::user_agent($agent, 'browser');
</code></pre>

<p>Multiple values can be returned at once by using an array:</p>

<pre><code>// Get the browser and platform with a single call
$info = Text::user_agent($agent, array('browser', 'platform'));
</code></pre>

<p>When using an array for the value, an associative array will be returned.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $agent</strong> <small>required</small> - User_agent</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Array or string to return: browser, version, robot, mobile, platform</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:config">Kohana::$config</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Requested information, FALSE if nothing is found 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function user_agent($agent, $value)
{
	if (is_array($value))
	{
		$data = [];
		foreach ($value as $part)
		{
			// Add each part to the set
			$data[$part] = Text::user_agent($agent, $part);
		}

		return $data;
	}

	if ($value === &#039;browser&#039; OR $value == &#039;version&#039;)
	{
		// Extra data will be captured
		$info = [];

		// Load browsers
		$browsers = Kohana::$config-&gt;load(&#039;user_agents&#039;)-&gt;browser;

		foreach ($browsers as $search =&gt; $name)
		{
			if (stripos($agent, $search) !== FALSE)
			{
				// Set the browser name
				$info[&#039;browser&#039;] = $name;

				if (preg_match(&#039;#&#039;.preg_quote($search).&#039;[^0-9.]*+([0-9.][0-9.a-z]*)#i&#039;, $agent, $matches))
				{
					// Set the version number
					$info[&#039;version&#039;] = $matches[1];
				}
				else
				{
					// No version number found
					$info[&#039;version&#039;] = FALSE;
				}

				return $info[$value];
			}
		}
	}
	else
	{
		// Load the search group for this type
		$group = Kohana::$config-&gt;load(&#039;user_agents&#039;)-&gt;$value;

		foreach ($group as $search =&gt; $name)
		{
			if (stripos($agent, $search) !== FALSE)
			{
				// Set the value name
				return $name;
			}
		}
	}

	// The value requested could not be found
	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="widont"><small>public static</small>  widont(<small>string</small> <span class="param" title="Text to remove widows from">$str</span> )<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'><p>Prevents <a href="http://www.shauninman.com/archive/2006/08/22/widont_wordpress_plugin">widow words</a>
by inserting a non-breaking space between the last two words.</p>

<pre><code>echo Text::widont($text);
</code></pre>

<p>regex courtesy of the Typogrify project</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $str</strong> <small>required</small> - Text to remove widows from</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://code.google.com/p/typogrify/"></a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function widont($str)
{
	// use &#039;%&#039; as delimiter and &#039;x&#039; as modifier 
		$widont_regex = &quot;%
		((?:&lt;/?(?:a|em|span|strong|i|b)[^&gt;]*&gt;)|[^&lt;&gt;\s]) # must be proceeded by an approved inline opening or closing tag or a nontag/nonspace
		\s+                                             # the space to replace
		([^&lt;&gt;\s]+                                       # must be flollowed by non-tag non-space characters
		\s*                                             # optional white space!
		(&lt;/(a|em|span|strong|i|b)&gt;\s*)*                 # optional closing inline tags with optional white space after each
		((&lt;/(p|h[1-6]|li|dt|dd)&gt;)|$))                   # end with a closing p, h1-6, li or the end of the string
	%x&quot;;
	return preg_replace($widont_regex, &#039;$1&amp;nbsp;$2&#039;, $str);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_auto_link_emails_callback"><small>protected static</small>  _auto_link_emails_callback()<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _auto_link_emails_callback($matches)
{
	return HTML::mailto($matches[0]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_auto_link_urls_callback1"><small>protected static</small>  _auto_link_urls_callback1()<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _auto_link_urls_callback1($matches)
{
	return HTML::anchor($matches[0]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_auto_link_urls_callback2"><small>protected static</small>  _auto_link_urls_callback2()<small> (defined in <a href='/documentation/api/Kohana_Text'>Kohana_Text</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected static function _auto_link_urls_callback2($matches)
{
	return HTML::anchor(&#039;http://&#039;.$matches[0], $matches[0]);
}</code>
</pre>
</div>
</div>
</div>