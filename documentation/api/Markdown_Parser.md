---
layout: api
class: Markdown_Parser
---
<h1>Markdown_Parser</h1>
<p>
<i>
</i>
</p>
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
<a href="#property-block_gamut">$block_gamut</a>
</li>
<li>
<a href="#property-document_gamut">$document_gamut</a>
</li>
<li>
<a href="#property-em_relist">$em_relist</a>
</li>
<li>
<a href="#property-em_strong_prepared_relist">$em_strong_prepared_relist</a>
</li>
<li>
<a href="#property-em_strong_relist">$em_strong_relist</a>
</li>
<li>
<a href="#property-empty_element_suffix">$empty_element_suffix</a>
</li>
<li>
<a href="#property-escape_chars">$escape_chars</a>
</li>
<li>
<a href="#property-escape_chars_re">$escape_chars_re</a>
</li>
<li>
<a href="#property-html_hashes">$html_hashes</a>
</li>
<li>
<a href="#property-in_anchor">$in_anchor</a>
</li>
<li>
<a href="#property-list_level">$list_level</a>
</li>
<li>
<a href="#property-nested_brackets_depth">$nested_brackets_depth</a>
</li>
<li>
<a href="#property-nested_brackets_re">$nested_brackets_re</a>
</li>
<li>
<a href="#property-nested_url_parenthesis_depth">$nested_url_parenthesis_depth</a>
</li>
<li>
<a href="#property-nested_url_parenthesis_re">$nested_url_parenthesis_re</a>
</li>
<li>
<a href="#property-no_entities">$no_entities</a>
</li>
<li>
<a href="#property-no_markup">$no_markup</a>
</li>
<li>
<a href="#property-predef_titles">$predef_titles</a>
</li>
<li>
<a href="#property-predef_urls">$predef_urls</a>
</li>
<li>
<a href="#property-span_gamut">$span_gamut</a>
</li>
<li>
<a href="#property-strong_relist">$strong_relist</a>
</li>
<li>
<a href="#property-tab_width">$tab_width</a>
</li>
<li>
<a href="#property-titles">$titles</a>
</li>
<li>
<a href="#property-urls">$urls</a>
</li>
<li>
<a href="#property-utf8_strlen">$utf8_strlen</a>
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
<a href="#_detab_callback">_detab_callback()</a>
</li>
<li>
<a href="#_doAnchors_inline_callback">_doAnchors_inline_callback()</a>
</li>
<li>
<a href="#_doAnchors_reference_callback">_doAnchors_reference_callback()</a>
</li>
<li>
<a href="#_doAutoLinks_email_callback">_doAutoLinks_email_callback()</a>
</li>
<li>
<a href="#_doAutoLinks_url_callback">_doAutoLinks_url_callback()</a>
</li>
<li>
<a href="#_doBlockQuotes_callback">_doBlockQuotes_callback()</a>
</li>
<li>
<a href="#_doBlockQuotes_callback2">_doBlockQuotes_callback2()</a>
</li>
<li>
<a href="#_doCodeBlocks_callback">_doCodeBlocks_callback()</a>
</li>
<li>
<a href="#_doHardBreaks_callback">_doHardBreaks_callback()</a>
</li>
<li>
<a href="#_doHeaders_callback_atx">_doHeaders_callback_atx()</a>
</li>
<li>
<a href="#_doHeaders_callback_setext">_doHeaders_callback_setext()</a>
</li>
<li>
<a href="#_doImages_inline_callback">_doImages_inline_callback()</a>
</li>
<li>
<a href="#_doImages_reference_callback">_doImages_reference_callback()</a>
</li>
<li>
<a href="#_doLists_callback">_doLists_callback()</a>
</li>
<li>
<a href="#_hashHTMLBlocks_callback">_hashHTMLBlocks_callback()</a>
</li>
<li>
<a href="#_initDetab">_initDetab()</a>
</li>
<li>
<a href="#_processListItems_callback">_processListItems_callback()</a>
</li>
<li>
<a href="#_stripLinkDefinitions_callback">_stripLinkDefinitions_callback()</a>
</li>
<li>
<a href="#_unhash_callback">_unhash_callback()</a>
</li>
<li>
<a href="#detab">detab()</a>
</li>
<li>
<a href="#doAnchors">doAnchors()</a>
</li>
<li>
<a href="#doAutoLinks">doAutoLinks()</a>
</li>
<li>
<a href="#doBlockQuotes">doBlockQuotes()</a>
</li>
<li>
<a href="#doCodeBlocks">doCodeBlocks()</a>
</li>
<li>
<a href="#doHardBreaks">doHardBreaks()</a>
</li>
<li>
<a href="#doHeaders">doHeaders()</a>
</li>
<li>
<a href="#doHorizontalRules">doHorizontalRules()</a>
</li>
<li>
<a href="#doImages">doImages()</a>
</li>
<li>
<a href="#doItalicsAndBold">doItalicsAndBold()</a>
</li>
<li>
<a href="#doLists">doLists()</a>
</li>
<li>
<a href="#encodeAmpsAndAngles">encodeAmpsAndAngles()</a>
</li>
<li>
<a href="#encodeAttribute">encodeAttribute()</a>
</li>
<li>
<a href="#encodeEmailAddress">encodeEmailAddress()</a>
</li>
<li>
<a href="#formParagraphs">formParagraphs()</a>
</li>
<li>
<a href="#handleSpanToken">handleSpanToken()</a>
</li>
<li>
<a href="#hashBlock">hashBlock()</a>
</li>
<li>
<a href="#hashHTMLBlocks">hashHTMLBlocks()</a>
</li>
<li>
<a href="#hashPart">hashPart()</a>
</li>
<li>
<a href="#makeCodeSpan">makeCodeSpan()</a>
</li>
<li>
<a href="#outdent">outdent()</a>
</li>
<li>
<a href="#parseSpan">parseSpan()</a>
</li>
<li>
<a href="#prepareItalicsAndBold">prepareItalicsAndBold()</a>
</li>
<li>
<a href="#processListItems">processListItems()</a>
</li>
<li>
<a href="#runBasicBlockGamut">runBasicBlockGamut()</a>
</li>
<li>
<a href="#runBlockGamut">runBlockGamut()</a>
</li>
<li>
<a href="#runSpanGamut">runSpanGamut()</a>
</li>
<li>
<a href="#setup">setup()</a>
</li>
<li>
<a href="#stripLinkDefinitions">stripLinkDefinitions()</a>
</li>
<li>
<a href="#teardown">teardown()</a>
</li>
<li>
<a href="#transform">transform()</a>
</li>
<li>
<a href="#unhash">unhash()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-block_gamut'><small>public</small>  <span class='blue'></span> $block_gamut</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(5)</span> <span>(
    "doHeaders" => <small>integer</small> 10
    "doHorizontalRules" => <small>integer</small> 20
    "doLists" => <small>integer</small> 40
    "doCodeBlocks" => <small>integer</small> 50
    "doBlockQuotes" => <small>integer</small> 60
)</span></pre></dd>
<dt>
<h4 id='property-document_gamut'><small>public</small>  <span class='blue'></span> $document_gamut</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(2)</span> <span>(
    "stripLinkDefinitions" => <small>integer</small> 20
    "runBasicBlockGamut" => <small>integer</small> 30
)</span></pre></dd>
<dt>
<h4 id='property-em_relist'><small>public</small>  <span class='blue'></span> $em_relist</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(3)</span> <span>(
    "" => <small>string</small><span>(50)</span> "(?:(?&lt;!\*)\*(?!\*)|(?&lt;!_)_(?!_))(?=\S)(?![.,:;]\s)"
    "*" => <small>string</small><span>(22)</span> "(?&lt;=\S)(?&lt;!\*)\*(?!\*)"
    "_" => <small>string</small><span>(19)</span> "(?&lt;=\S)(?&lt;!_)_(?!_)"
)</span></pre></dd>
<dt>
<h4 id='property-em_strong_prepared_relist'><small>public</small>  <span class='blue'></span> $em_strong_prepared_relist</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-em_strong_relist'><small>public</small>  <span class='blue'></span> $em_strong_relist</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(3)</span> <span>(
    "" => <small>string</small><span>(56)</span> "(?:(?&lt;!\*)\*\*\*(?!\*)|(?&lt;!_)___(?!_))(?=\S)(?![.,:;]\s)"
    "***" => <small>string</small><span>(26)</span> "(?&lt;=\S)(?&lt;!\*)\*\*\*(?!\*)"
    "___" => <small>string</small><span>(21)</span> "(?&lt;=\S)(?&lt;!_)___(?!_)"
)</span></pre></dd>
<dt>
<h4 id='property-empty_element_suffix'><small>public</small>  <span class='blue'></span> $empty_element_suffix</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(3)</span> " /&gt;"</pre></dd>
<dt>
<h4 id='property-escape_chars'><small>public</small>  <span class='blue'></span> $escape_chars</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(16)</span> "\`*_{}[]()&gt;#+-.!"</pre></dd>
<dt>
<h4 id='property-escape_chars_re'><small>public</small>  <span class='blue'></span> $escape_chars_re</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-html_hashes'><small>public</small>  <span class='blue'></span> $html_hashes</h4>
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
<h4 id='property-in_anchor'><small>public</small>  <span class='blue'></span> $in_anchor</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-list_level'><small>public</small>  <span class='blue'></span> $list_level</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 0</pre></dd>
<dt>
<h4 id='property-nested_brackets_depth'><small>public</small>  <span class='blue'></span> $nested_brackets_depth</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 6</pre></dd>
<dt>
<h4 id='property-nested_brackets_re'><small>public</small>  <span class='blue'></span> $nested_brackets_re</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-nested_url_parenthesis_depth'><small>public</small>  <span class='blue'></span> $nested_url_parenthesis_depth</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 4</pre></dd>
<dt>
<h4 id='property-nested_url_parenthesis_re'><small>public</small>  <span class='blue'></span> $nested_url_parenthesis_re</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-no_entities'><small>public</small>  <span class='blue'></span> $no_entities</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-no_markup'><small>public</small>  <span class='blue'></span> $no_markup</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-predef_titles'><small>public</small>  <span class='blue'></span> $predef_titles</h4>
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
<h4 id='property-predef_urls'><small>public</small>  <span class='blue'></span> $predef_urls</h4>
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
<h4 id='property-span_gamut'><small>public</small>  <span class='blue'></span> $span_gamut</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(7)</span> <span>(
    "parseSpan" => <small>integer</small> -30
    "doImages" => <small>integer</small> 10
    "doAnchors" => <small>integer</small> 20
    "doAutoLinks" => <small>integer</small> 30
    "encodeAmpsAndAngles" => <small>integer</small> 40
    "doItalicsAndBold" => <small>integer</small> 50
    "doHardBreaks" => <small>integer</small> 60
)</span></pre></dd>
<dt>
<h4 id='property-strong_relist'><small>public</small>  <span class='blue'></span> $strong_relist</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(3)</span> <span>(
    "" => <small>string</small><span>(53)</span> "(?:(?&lt;!\*)\*\*(?!\*)|(?&lt;!_)__(?!_))(?=\S)(?![.,:;]\s)"
    "**" => <small>string</small><span>(24)</span> "(?&lt;=\S)(?&lt;!\*)\*\*(?!\*)"
    "__" => <small>string</small><span>(20)</span> "(?&lt;=\S)(?&lt;!_)__(?!_)"
)</span></pre></dd>
<dt>
<h4 id='property-tab_width'><small>public</small>  <span class='blue'></span> $tab_width</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>integer</small> 4</pre></dd>
<dt>
<h4 id='property-titles'><small>public</small>  <span class='blue'></span> $titles</h4>
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
<h4 id='property-urls'><small>public</small>  <span class='blue'></span> $urls</h4>
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
<h4 id='property-utf8_strlen'><small>public</small>  <span class='blue'></span> $utf8_strlen</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(9)</span> "mb_strlen"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function __construct() {
#
# Constructor function. Initialize appropriate member variables.
#
	$this-&gt;_initDetab();
	$this-&gt;prepareItalicsAndBold();

	$this-&gt;nested_brackets_re = 
		str_repeat(&#039;(?&gt;[^\[\]]+|\[&#039;, $this-&gt;nested_brackets_depth).
		str_repeat(&#039;\])*&#039;, $this-&gt;nested_brackets_depth);

	$this-&gt;nested_url_parenthesis_re = 
		str_repeat(&#039;(?&gt;[^()\s]+|\(&#039;, $this-&gt;nested_url_parenthesis_depth).
		str_repeat(&#039;(?&gt;\)))*&#039;, $this-&gt;nested_url_parenthesis_depth);
	
	$this-&gt;escape_chars_re = &#039;[&#039;.preg_quote($this-&gt;escape_chars).&#039;]&#039;;
	
	# Sort document, block, and span gamut in ascendent priority order.
	asort($this-&gt;document_gamut);
	asort($this-&gt;block_gamut);
	asort($this-&gt;span_gamut);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_detab_callback"><small>public</small>  _detab_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _detab_callback($matches) {
	$line = $matches[0];
	$strlen = $this-&gt;utf8_strlen; # strlen function for UTF-8.
	
	# Split in blocks.
	$blocks = explode(&quot;\t&quot;, $line);
	# Add each blocks to the line.
	$line = $blocks[0];
	unset($blocks[0]); # Do not add first block twice.
	foreach ($blocks as $block) {
		# Calculate amount of space, insert spaces, insert block.
		$amount = $this-&gt;tab_width - 
			$strlen($line, &#039;UTF-8&#039;) % $this-&gt;tab_width;
		$line .= str_repeat(&quot; &quot;, $amount) . $block;
	}
	return $line;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doAnchors_inline_callback"><small>public</small>  _doAnchors_inline_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doAnchors_inline_callback($matches) {
	$whole_match	=  $matches[1];
	$link_text		=  $this-&gt;runSpanGamut($matches[2]);
	$url			=  $matches[3] == &#039;&#039; ? $matches[4] : $matches[3];
	$title			=&amp; $matches[7];

	$url = $this-&gt;encodeAttribute($url);

	$result = &quot;&lt;a href=\&quot;$url\&quot;&quot;;
	if (isset($title)) {
		$title = $this-&gt;encodeAttribute($title);
		$result .=  &quot; title=\&quot;$title\&quot;&quot;;
	}
	
	$link_text = $this-&gt;runSpanGamut($link_text);
	$result .= &quot;&gt;$link_text&lt;/a&gt;&quot;;

	return $this-&gt;hashPart($result);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doAnchors_reference_callback"><small>public</small>  _doAnchors_reference_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doAnchors_reference_callback($matches) {
	$whole_match =  $matches[1];
	$link_text   =  $matches[2];
	$link_id     =&amp; $matches[3];

	if ($link_id == &quot;&quot;) {
		# for shortcut links like [this][] or [this].
		$link_id = $link_text;
	}
	
	# lower-case and turn embedded newlines into spaces
	$link_id = strtolower($link_id);
	$link_id = preg_replace(&#039;{[ ]?\n}&#039;, &#039; &#039;, $link_id);

	if (isset($this-&gt;urls[$link_id])) {
		$url = $this-&gt;urls[$link_id];
		$url = $this-&gt;encodeAttribute($url);
		
		$result = &quot;&lt;a href=\&quot;$url\&quot;&quot;;
		if ( isset( $this-&gt;titles[$link_id] ) ) {
			$title = $this-&gt;titles[$link_id];
			$title = $this-&gt;encodeAttribute($title);
			$result .=  &quot; title=\&quot;$title\&quot;&quot;;
		}
	
		$link_text = $this-&gt;runSpanGamut($link_text);
		$result .= &quot;&gt;$link_text&lt;/a&gt;&quot;;
		$result = $this-&gt;hashPart($result);
	}
	else {
		$result = $whole_match;
	}
	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doAutoLinks_email_callback"><small>public</small>  _doAutoLinks_email_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doAutoLinks_email_callback($matches) {
	$address = $matches[1];
	$link = $this-&gt;encodeEmailAddress($address);
	return $this-&gt;hashPart($link);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doAutoLinks_url_callback"><small>public</small>  _doAutoLinks_url_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doAutoLinks_url_callback($matches) {
	$url = $this-&gt;encodeAttribute($matches[1]);
	$link = &quot;&lt;a href=\&quot;$url\&quot;&gt;$url&lt;/a&gt;&quot;;
	return $this-&gt;hashPart($link);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doBlockQuotes_callback"><small>public</small>  _doBlockQuotes_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doBlockQuotes_callback($matches) {
	$bq = $matches[1];
	# trim one level of quoting - trim whitespace-only lines
	$bq = preg_replace(&#039;/^[ ]*&gt;[ ]?|^[ ]+$/m&#039;, &#039;&#039;, $bq);
	$bq = $this-&gt;runBlockGamut($bq);		# recurse

	$bq = preg_replace(&#039;/^/m&#039;, &quot;  &quot;, $bq);
	# These leading spaces cause problem with &lt;pre&gt; content, 
	# so we need to fix that:
	$bq = preg_replace_callback(&#039;{(\s*&lt;pre&gt;.+?&lt;/pre&gt;)}sx&#039;, 
		[&amp;$this, &#039;_DoBlockQuotes_callback2&#039;], $bq);

	return &quot;\n&quot;. $this-&gt;hashBlock(&quot;&lt;blockquote&gt;\n$bq\n&lt;/blockquote&gt;&quot;).&quot;\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doBlockQuotes_callback2"><small>public</small>  _doBlockQuotes_callback2()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doBlockQuotes_callback2($matches) {
	$pre = $matches[1];
	$pre = preg_replace(&#039;/^  /m&#039;, &#039;&#039;, $pre);
	return $pre;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doCodeBlocks_callback"><small>public</small>  _doCodeBlocks_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doCodeBlocks_callback($matches) {
	$codeblock = $matches[1];

	$codeblock = $this-&gt;outdent($codeblock);
	$codeblock = htmlspecialchars($codeblock, ENT_NOQUOTES);

	# trim leading newlines and trailing newlines
	$codeblock = preg_replace(&#039;/\A\n+|\n+\z/&#039;, &#039;&#039;, $codeblock);

	$codeblock = &quot;&lt;pre&gt;&lt;code&gt;$codeblock\n&lt;/code&gt;&lt;/pre&gt;&quot;;
	return &quot;\n\n&quot;.$this-&gt;hashBlock($codeblock).&quot;\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doHardBreaks_callback"><small>public</small>  _doHardBreaks_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doHardBreaks_callback($matches) {
	return $this-&gt;hashPart(&quot;&lt;br$this-&gt;empty_element_suffix\n&quot;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doHeaders_callback_atx"><small>public</small>  _doHeaders_callback_atx()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doHeaders_callback_atx($matches) {
	$level = strlen($matches[1]);
	$block = &quot;&lt;h$level&gt;&quot;.$this-&gt;runSpanGamut($matches[2]).&quot;&lt;/h$level&gt;&quot;;
	return &quot;\n&quot; . $this-&gt;hashBlock($block) . &quot;\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doHeaders_callback_setext"><small>public</small>  _doHeaders_callback_setext()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doHeaders_callback_setext($matches) {
	# Terrible hack to check we haven&#039;t found an empty list item.
	if ($matches[2] == &#039;-&#039; &amp;&amp; preg_match(&#039;{^-(?: |$)}&#039;, $matches[1]))
		return $matches[0];
	
	$level = $matches[2]{0} == &#039;=&#039; ? 1 : 2;
	$block = &quot;&lt;h$level&gt;&quot;.$this-&gt;runSpanGamut($matches[1]).&quot;&lt;/h$level&gt;&quot;;
	return &quot;\n&quot; . $this-&gt;hashBlock($block) . &quot;\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doImages_inline_callback"><small>public</small>  _doImages_inline_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doImages_inline_callback($matches) {
	$whole_match	= $matches[1];
	$alt_text		= $matches[2];
	$url			= $matches[3] == &#039;&#039; ? $matches[4] : $matches[3];
	$title			=&amp; $matches[7];

	$alt_text = $this-&gt;encodeAttribute($alt_text);
	$url = $this-&gt;encodeAttribute($url);
	$result = &quot;&lt;img src=\&quot;$url\&quot; alt=\&quot;$alt_text\&quot;&quot;;
	if (isset($title)) {
		$title = $this-&gt;encodeAttribute($title);
		$result .=  &quot; title=\&quot;$title\&quot;&quot;; # $title already quoted
	}
	$result .= $this-&gt;empty_element_suffix;

	return $this-&gt;hashPart($result);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doImages_reference_callback"><small>public</small>  _doImages_reference_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doImages_reference_callback($matches) {
	$whole_match = $matches[1];
	$alt_text    = $matches[2];
	$link_id     = strtolower($matches[3]);

	if ($link_id == &quot;&quot;) {
		$link_id = strtolower($alt_text); # for shortcut links like ![this][].
	}

	$alt_text = $this-&gt;encodeAttribute($alt_text);
	if (isset($this-&gt;urls[$link_id])) {
		$url = $this-&gt;encodeAttribute($this-&gt;urls[$link_id]);
		$result = &quot;&lt;img src=\&quot;$url\&quot; alt=\&quot;$alt_text\&quot;&quot;;
		if (isset($this-&gt;titles[$link_id])) {
			$title = $this-&gt;titles[$link_id];
			$title = $this-&gt;encodeAttribute($title);
			$result .=  &quot; title=\&quot;$title\&quot;&quot;;
		}
		$result .= $this-&gt;empty_element_suffix;
		$result = $this-&gt;hashPart($result);
	}
	else {
		# If there&#039;s no such link ID, leave intact:
		$result = $whole_match;
	}

	return $result;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_doLists_callback"><small>public</small>  _doLists_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _doLists_callback($matches) {
	# Re-usable patterns to match list item bullets and number markers:
	$marker_ul_re  = &#039;[*+-]&#039;;
	$marker_ol_re  = &#039;\d+[.]&#039;;
	$marker_any_re = &quot;(?:$marker_ul_re|$marker_ol_re)&quot;;
	
	$list = $matches[1];
	$list_type = preg_match(&quot;/$marker_ul_re/&quot;, $matches[3]) ? &quot;ul&quot; : &quot;ol&quot;;
	
	$marker_any_re = ( $list_type == &quot;ul&quot; ? $marker_ul_re : $marker_ol_re );
	
	$list .= &quot;\n&quot;;
	$result = $this-&gt;processListItems($list, $marker_any_re);
	
	$result = $this-&gt;hashBlock(&quot;&lt;$list_type&gt;\n&quot; . $result . &quot;&lt;/$list_type&gt;&quot;);
	return &quot;\n&quot;. $result .&quot;\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_hashHTMLBlocks_callback"><small>public</small>  _hashHTMLBlocks_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _hashHTMLBlocks_callback($matches) {
	$text = $matches[1];
	$key  = $this-&gt;hashBlock($text);
	return &quot;\n\n$key\n\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_initDetab"><small>public</small>  _initDetab()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _initDetab() {
#
# Check for the availability of the function in the `utf8_strlen` property
# (initially `mb_strlen`). If the function is not available, create a 
# function that will loosely count the number of UTF-8 characters with a
# regular expression.
#
	if (function_exists($this-&gt;utf8_strlen)) return;
	$this-&gt;utf8_strlen = function($text) {
		return preg_match_all(&#039;/[\x00-\xBF]|[\xC0-\xFF][\x80-\xBF]*/&#039;, $text, $m);
	};
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_processListItems_callback"><small>public</small>  _processListItems_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _processListItems_callback($matches) {
	$item = $matches[4];
	$leading_line =&amp; $matches[1];
	$leading_space =&amp; $matches[2];
	$marker_space = $matches[3];
	$tailing_blank_line =&amp; $matches[5];

	if ($leading_line || $tailing_blank_line || 
		preg_match(&#039;/\n{2,}/&#039;, $item))
	{
		# Replace marker with the appropriate whitespace indentation
		$item = $leading_space . str_repeat(&#039; &#039;, strlen($marker_space)) . $item;
		$item = $this-&gt;runBlockGamut($this-&gt;outdent($item).&quot;\n&quot;);
	}
	else {
		# Recursion for sub-lists:
		$item = $this-&gt;doLists($this-&gt;outdent($item));
		$item = preg_replace(&#039;/\n+$/&#039;, &#039;&#039;, $item);
		$item = $this-&gt;runSpanGamut($item);
	}

	return &quot;&lt;li&gt;&quot; . $item . &quot;&lt;/li&gt;\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_stripLinkDefinitions_callback"><small>public</small>  _stripLinkDefinitions_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _stripLinkDefinitions_callback($matches) {
	$link_id = strtolower($matches[1]);
	$this-&gt;urls[$link_id] = $matches[2];
	$this-&gt;titles[$link_id] =&amp; $matches[3];
	return &#039;&#039;; # String that will replace the block
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_unhash_callback"><small>public</small>  _unhash_callback()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function _unhash_callback($matches) {
	return $this-&gt;html_hashes[$matches[0]];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="detab"><small>public</small>  detab()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function detab($text) {
#
# Replace tabs with the appropriate amount of space.
#
	# For each line we separate the line in blocks delemited by
	# tab characters. Then we reconstruct every line by adding the 
	# appropriate number of space between each blocks.
	
	$text = preg_replace_callback(&#039;/^.*\t.*$/m&#039;,
		[&amp;$this, &#039;_detab_callback&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doAnchors"><small>public</small>  doAnchors()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doAnchors($text) {
#
# Turn Markdown link shortcuts into XHTML &lt;a&gt; tags.
#
	if ($this-&gt;in_anchor) return $text;
	$this-&gt;in_anchor = true;
	
	#
	# First, handle reference-style links: [link text] [id]
	#
	$text = preg_replace_callback(&#039;{
		(					# wrap whole match in $1
		  \[
			(&#039;.$this-&gt;nested_brackets_re.&#039;)	# link text = $2
		  \]

		  [ ]?				# one optional space
		  (?:\n[ ]*)?		# one optional newline followed by spaces

		  \[
			(.*?)		# id = $3
		  \]
		)
		}xs&#039;,
		[&amp;$this, &#039;_doAnchors_reference_callback&#039;], $text);

	#
	# Next, inline-style links: [link text](url &quot;optional title&quot;)
	#
	$text = preg_replace_callback(&#039;{
		(				# wrap whole match in $1
		  \[
			(&#039;.$this-&gt;nested_brackets_re.&#039;)	# link text = $2
		  \]
		  \(			# literal paren
			[ ]*
			(?:
				&lt;(\S*)&gt;	# href = $3
			|
				(&#039;.$this-&gt;nested_url_parenthesis_re.&#039;)	# href = $4
			)
			[ ]*
			(			# $5
			  ([\&#039;&quot;])	# quote char = $6
			  (.*?)		# Title = $7
			  \6		# matching quote
			  [ ]*	# ignore any spaces/tabs between closing quote and )
			)?			# title is optional
		  \)
		)
		}xs&#039;,
		[&amp;$this, &#039;_DoAnchors_inline_callback&#039;], $text);

	#
	# Last, handle reference-style shortcuts: [link text]
	# These must come last in case you&#039;ve also got [link test][1]
	# or [link test](/foo)
	#
/		$text = preg_replace_callback(&#039;{
/			(					# wrap whole match in $1
/			  \[
/				([^\[\]]+)		# link text = $2; can\&#039;t contain [ or ]
/			  \]
/			)
/			}xs&#039;,
/			array(&amp;$this, &#039;_doAnchors_reference_callback&#039;), $text);

	$this-&gt;in_anchor = false;
	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doAutoLinks"><small>public</small>  doAutoLinks()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doAutoLinks($text) {
	$text = preg_replace_callback(&#039;{&lt;((https?|ftp|dict):[^\&#039;&quot;&gt;\s]+)&gt;}i&#039;, 
		[&amp;$this, &#039;_doAutoLinks_url_callback&#039;], $text);

	# Email addresses: &lt;address@domain.foo&gt;
	$text = preg_replace_callback(&#039;{
		&lt;
		(?:mailto:)?
		(
			[-.\w\x80-\xFF]+
			\@
			[-a-z0-9\x80-\xFF]+(\.[-a-z0-9\x80-\xFF]+)*\.[a-z]+
		)
		&gt;
		}xi&#039;,
		[&amp;$this, &#039;_doAutoLinks_email_callback&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doBlockQuotes"><small>public</small>  doBlockQuotes()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doBlockQuotes($text) {
	$text = preg_replace_callback(&#039;/
		  (								# Wrap whole match in $1
			(?&gt;
			  ^[ ]*&gt;[ ]?			# &quot;&gt;&quot; at the start of a line
				.+\n					# rest of the first line
			  (.+\n)*					# subsequent consecutive lines
			  \n*						# blanks
			)+
		  )
		/xm&#039;,
		[&amp;$this, &#039;_doBlockQuotes_callback&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doCodeBlocks"><small>public</small>  doCodeBlocks()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doCodeBlocks($text) {
#
#	Process Markdown `&lt;pre&gt;&lt;code&gt;` blocks.
#
	$text = preg_replace_callback(&#039;{
			(?:\n\n|\A\n?)
			(	            # $1 = the code block -- one or more lines, starting with a space/tab
			  (?&gt;
				[ ]{&#039;.$this-&gt;tab_width.&#039;}  # Lines must start with a tab or a tab-width of spaces
				.*\n+
			  )+
			)
			((?=^[ ]{0,&#039;.$this-&gt;tab_width.&#039;}\S)|\Z)	# Lookahead for non-space at line-start, or end of doc
		}xm&#039;,
		[&amp;$this, &#039;_doCodeBlocks_callback&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doHardBreaks"><small>public</small>  doHardBreaks()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doHardBreaks($text) {
	# Do hard breaks:
	return preg_replace_callback(&#039;/ {2,}\n/&#039;, 
		[&amp;$this, &#039;_doHardBreaks_callback&#039;], $text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doHeaders"><small>public</small>  doHeaders()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doHeaders($text) {
	# Setext-style headers:
	#	  Header 1
	#	  ========
	#  
	#	  Header 2
	#	  --------
	#
	$text = preg_replace_callback(&#039;{ ^(.+?)[ ]*\n(=+|-+)[ ]*\n+ }mx&#039;,
		[&amp;$this, &#039;_doHeaders_callback_setext&#039;], $text);

	# atx-style headers:
	#	# Header 1
	#	## Header 2
	#	## Header 2 with closing hashes ##
	#	...
	#	###### Header 6
	#
	$text = preg_replace_callback(&#039;{
			^(\#{1,6})	# $1 = string of #\&#039;s
			[ ]*
			(.+?)		# $2 = Header text
			[ ]*
			\#*			# optional closing #\&#039;s (not counted)
			\n+
		}xm&#039;,
		[&amp;$this, &#039;_doHeaders_callback_atx&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doHorizontalRules"><small>public</small>  doHorizontalRules()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doHorizontalRules($text) {
	# Do Horizontal Rules:
	return preg_replace(
		&#039;{
			^[ ]{0,3}	# Leading space
			([-*_])		# $1: First marker
			(?&gt;			# Repeated marker group
				[ ]{0,2}	# Zero, one, or two spaces.
				\1			# Marker character
			){2,}		# Group repeated at least twice
			[ ]*		# Tailing spaces
			$			# End of line.
		}mx&#039;,
		&quot;\n&quot;.$this-&gt;hashBlock(&quot;&lt;hr$this-&gt;empty_element_suffix&quot;).&quot;\n&quot;, 
		$text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doImages"><small>public</small>  doImages()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doImages($text) {
#
# Turn Markdown image shortcuts into &lt;img&gt; tags.
#
	#
	# First, handle reference-style labeled images: ![alt text][id]
	#
	$text = preg_replace_callback(&#039;{
		(				# wrap whole match in $1
		  !\[
			(&#039;.$this-&gt;nested_brackets_re.&#039;)		# alt text = $2
		  \]

		  [ ]?				# one optional space
		  (?:\n[ ]*)?		# one optional newline followed by spaces

		  \[
			(.*?)		# id = $3
		  \]

		)
		}xs&#039;, 
		[&amp;$this, &#039;_doImages_reference_callback&#039;], $text);

	#
	# Next, handle inline images:  ![alt text](url &quot;optional title&quot;)
	# Don&#039;t forget: encode * and _
	#
	$text = preg_replace_callback(&#039;{
		(				# wrap whole match in $1
		  !\[
			(&#039;.$this-&gt;nested_brackets_re.&#039;)		# alt text = $2
		  \]
		  \s?			# One optional whitespace character
		  \(			# literal paren
			[ ]*
			(?:
				&lt;(\S*)&gt;	# src url = $3
			|
				(&#039;.$this-&gt;nested_url_parenthesis_re.&#039;)	# src url = $4
			)
			[ ]*
			(			# $5
			  ([\&#039;&quot;])	# quote char = $6
			  (.*?)		# title = $7
			  \6		# matching quote
			  [ ]*
			)?			# title is optional
		  \)
		)
		}xs&#039;,
		[&amp;$this, &#039;_doImages_inline_callback&#039;], $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doItalicsAndBold"><small>public</small>  doItalicsAndBold()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doItalicsAndBold($text) {
	$token_stack = [&#039;&#039;];
	$text_stack = [&#039;&#039;];
	$em = &#039;&#039;;
	$strong = &#039;&#039;;
	$tree_char_em = false;
	
	while (1) {
		#
		# Get prepared regular expression for seraching emphasis tokens
		# in current context.
		#
		$token_re = $this-&gt;em_strong_prepared_relist[&quot;$em$strong&quot;];
		
		#
		# Each loop iteration seach for the next emphasis token. 
		# Each token is then passed to handleSpanToken.
		#
		$parts = preg_split($token_re, $text, 2, PREG_SPLIT_DELIM_CAPTURE);
		$text_stack[0] .= $parts[0];
		$token =&amp; $parts[1];
		$text =&amp; $parts[2];
		
		if (empty($token)) {
			# Reached end of text span: empty stack without emitting.
			# any more emphasis.
			while ($token_stack[0]) {
				$text_stack[1] .= array_shift($token_stack);
				$text_stack[0] .= array_shift($text_stack);
			}
			break;
		}
		
		$token_len = strlen($token);
		if ($tree_char_em) {
			# Reached closing marker while inside a three-char emphasis.
			if ($token_len == 3) {
				# Three-char closing marker, close em and strong.
				array_shift($token_stack);
				$span = array_shift($text_stack);
				$span = $this-&gt;runSpanGamut($span);
				$span = &quot;&lt;strong&gt;&lt;em&gt;$span&lt;/em&gt;&lt;/strong&gt;&quot;;
				$text_stack[0] .= $this-&gt;hashPart($span);
				$em = &#039;&#039;;
				$strong = &#039;&#039;;
			} else {
				# Other closing marker: close one em or strong and
				# change current token state to match the other
				$token_stack[0] = str_repeat($token{0}, 3-$token_len);
				$tag = $token_len == 2 ? &quot;strong&quot; : &quot;em&quot;;
				$span = $text_stack[0];
				$span = $this-&gt;runSpanGamut($span);
				$span = &quot;&lt;$tag&gt;$span&lt;/$tag&gt;&quot;;
				$text_stack[0] = $this-&gt;hashPart($span);
				$$tag = &#039;&#039;; # $$tag stands for $em or $strong
			}
			$tree_char_em = false;
		} else if ($token_len == 3) {
			if ($em) {
				# Reached closing marker for both em and strong.
				# Closing strong marker:
				for ($i = 0; $i &lt; 2; ++$i) {
					$shifted_token = array_shift($token_stack);
					$tag = strlen($shifted_token) == 2 ? &quot;strong&quot; : &quot;em&quot;;
					$span = array_shift($text_stack);
					$span = $this-&gt;runSpanGamut($span);
					$span = &quot;&lt;$tag&gt;$span&lt;/$tag&gt;&quot;;
					$text_stack[0] .= $this-&gt;hashPart($span);
					$$tag = &#039;&#039;; # $$tag stands for $em or $strong
				}
			} else {
				# Reached opening three-char emphasis marker. Push on token 
				# stack; will be handled by the special condition above.
				$em = $token{0};
				$strong = &quot;$em$em&quot;;
				array_unshift($token_stack, $token);
				array_unshift($text_stack, &#039;&#039;);
				$tree_char_em = true;
			}
		} else if ($token_len == 2) {
			if ($strong) {
				# Unwind any dangling emphasis marker:
				if (strlen($token_stack[0]) == 1) {
					$text_stack[1] .= array_shift($token_stack);
					$text_stack[0] .= array_shift($text_stack);
				}
				# Closing strong marker:
				array_shift($token_stack);
				$span = array_shift($text_stack);
				$span = $this-&gt;runSpanGamut($span);
				$span = &quot;&lt;strong&gt;$span&lt;/strong&gt;&quot;;
				$text_stack[0] .= $this-&gt;hashPart($span);
				$strong = &#039;&#039;;
			} else {
				array_unshift($token_stack, $token);
				array_unshift($text_stack, &#039;&#039;);
				$strong = $token;
			}
		} else {
			# Here $token_len == 1
			if ($em) {
				if (strlen($token_stack[0]) == 1) {
					# Closing emphasis marker:
					array_shift($token_stack);
					$span = array_shift($text_stack);
					$span = $this-&gt;runSpanGamut($span);
					$span = &quot;&lt;em&gt;$span&lt;/em&gt;&quot;;
					$text_stack[0] .= $this-&gt;hashPart($span);
					$em = &#039;&#039;;
				} else {
					$text_stack[0] .= $token;
				}
			} else {
				array_unshift($token_stack, $token);
				array_unshift($text_stack, &#039;&#039;);
				$em = $token;
			}
		}
	}
	return $text_stack[0];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="doLists"><small>public</small>  doLists()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function doLists($text) {
#
# Form HTML ordered (numbered) and unordered (bulleted) lists.
#
	$less_than_tab = $this-&gt;tab_width - 1;

	# Re-usable patterns to match list item bullets and number markers:
	$marker_ul_re  = &#039;[*+-]&#039;;
	$marker_ol_re  = &#039;\d+[.]&#039;;
	$marker_any_re = &quot;(?:$marker_ul_re|$marker_ol_re)&quot;;

	$markers_relist = [$marker_ul_re, $marker_ol_re];

	foreach ($markers_relist as $marker_re) {
		# Re-usable pattern to match any entirel ul or ol list:
		$whole_list_re = &#039;
			(								# $1 = whole list
			  (								# $2
				[ ]{0,&#039;.$less_than_tab.&#039;}
				(&#039;.$marker_re.&#039;)			# $3 = first list item marker
				[ ]+
			  )
			  (?s:.+?)
			  (								# $4
				  \z
				|
				  \n{2,}
				  (?=\S)
				  (?!						# Negative lookahead for another list item marker
					[ ]*
					&#039;.$marker_re.&#039;[ ]+
				  )
			  )
			)
		&#039;; // mx
		
		# We use a different prefix before nested lists than top-level lists.
		# See extended comment in _ProcessListItems().
	
		if ($this-&gt;list_level) {
			$text = preg_replace_callback(&#039;{
					^
					&#039;.$whole_list_re.&#039;
				}mx&#039;,
				[&amp;$this, &#039;_doLists_callback&#039;], $text);
		}
		else {
			$text = preg_replace_callback(&#039;{
					(?:(?&lt;=\n)\n|\A\n?) # Must eat the newline
					&#039;.$whole_list_re.&#039;
				}mx&#039;,
				[&amp;$this, &#039;_doLists_callback&#039;], $text);
		}
	}

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encodeAmpsAndAngles"><small>public</small>  encodeAmpsAndAngles()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function encodeAmpsAndAngles($text) {
#
# Smart processing for ampersands and angle brackets that need to 
# be encoded. Valid character entities are left alone unless the
# no-entities mode is set.
#
	if ($this-&gt;no_entities) {
		$text = str_replace(&#039;&amp;&#039;, &#039;&amp;amp;&#039;, $text);
	} else {
		# Ampersand-encoding based entirely on Nat Irons&#039;s Amputator
		# MT plugin: &lt;http://bumppo.net/projects/amputator/&gt;
		$text = preg_replace(&#039;/&amp;(?!#?[xX]?(?:[0-9a-fA-F]+|\w+);)/&#039;, 
							&#039;&amp;amp;&#039;, $text);
	}
	# Encode remaining &lt;&#039;s
	$text = str_replace(&#039;&lt;&#039;, &#039;&amp;lt;&#039;, $text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encodeAttribute"><small>public</small>  encodeAttribute()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function encodeAttribute($text) {
#
# Encode text for a double-quoted HTML attribute. This function
# is *not* suitable for attributes enclosed in single quotes.
#
	$text = $this-&gt;encodeAmpsAndAngles($text);
	$text = str_replace(&#039;&quot;&#039;, &#039;&amp;quot;&#039;, $text);
	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="encodeEmailAddress"><small>public</small>  encodeEmailAddress()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function encodeEmailAddress($addr) {
#
#	Input: an email address, e.g. &quot;foo@example.com&quot;
#
#	Output: the email address as a mailto link, with each character
#		of the address encoded as either a decimal or hex entity, in
#		the hopes of foiling most address harvesting spam bots. E.g.:
#
#	  &lt;p&gt;&lt;a href=&quot;&amp;#109;&amp;#x61;&amp;#105;&amp;#x6c;&amp;#116;&amp;#x6f;&amp;#58;&amp;#x66;o&amp;#111;
#        &amp;#x40;&amp;#101;&amp;#x78;&amp;#97;&amp;#x6d;&amp;#112;&amp;#x6c;&amp;#101;&amp;#46;&amp;#x63;&amp;#111;
#        &amp;#x6d;&quot;&gt;&amp;#x66;o&amp;#111;&amp;#x40;&amp;#101;&amp;#x78;&amp;#97;&amp;#x6d;&amp;#112;&amp;#x6c;
#        &amp;#101;&amp;#46;&amp;#x63;&amp;#111;&amp;#x6d;&lt;/a&gt;&lt;/p&gt;
#
#	Based by a filter by Matthew Wickline, posted to BBEdit-Talk.
#   With some optimizations by Milian Wolff.
#
	$addr = &quot;mailto:&quot; . $addr;
	$chars = preg_split(&#039;/(?&lt;!^)(?!$)/&#039;, $addr);
	$seed = (int)abs(crc32($addr) / strlen($addr)); # Deterministic seed.
	
	foreach ($chars as $key =&gt; $char) {
		$ord = ord($char);
		# Ignore non-ascii chars.
		if ($ord &lt; 128) {
			$r = ($seed * (1 + $key)) % 100; # Pseudo-random function.
			# roughly 10% raw, 45% hex, 45% dec
			# &#039;@&#039; *must* be encoded. I insist.
			if ($r &gt; 90 &amp;&amp; $char != &#039;@&#039;) /* do nothing */;
			else if ($r &lt; 45) $chars[$key] = &#039;&amp;#x&#039;.dechex($ord).&#039;;&#039;;
			else              $chars[$key] = &#039;&amp;#&#039;.$ord.&#039;;&#039;;
		}
	}
	
	$addr = implode(&#039;&#039;, $chars);
	$text = implode(&#039;&#039;, array_slice($chars, 7)); # text without `mailto:`
	$addr = &quot;&lt;a href=\&quot;$addr\&quot;&gt;$text&lt;/a&gt;&quot;;

	return $addr;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="formParagraphs"><small>public</small>  formParagraphs()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function formParagraphs($text) {
#
#	Params:
#		$text - string to process with html &lt;p&gt; tags
#
	# Strip leading and trailing lines:
	$text = preg_replace(&#039;/\A\n+|\n+\z/&#039;, &#039;&#039;, $text);

	$grafs = preg_split(&#039;/\n{2,}/&#039;, $text, -1, PREG_SPLIT_NO_EMPTY);

	#
	# Wrap &lt;p&gt; tags and unhashify HTML blocks
	#
	foreach ($grafs as $key =&gt; $value) {
		if (!preg_match(&#039;/^B\x1A[0-9]+B$/&#039;, $value)) {
			# Is a paragraph.
			$value = $this-&gt;runSpanGamut($value);
			$value = preg_replace(&#039;/^([ ]*)/&#039;, &quot;&lt;p&gt;&quot;, $value);
			$value .= &quot;&lt;/p&gt;&quot;;
			$grafs[$key] = $this-&gt;unhash($value);
		}
		else {
			# Is a block.
			# Modify elements of @grafs in-place...
			$graf = $value;
			$block = $this-&gt;html_hashes[$graf];
			$graf = $block;
/				if (preg_match(&#039;{
/					\A
/					(							# $1 = &lt;div&gt; tag
/					  &lt;div  \s+
/					  [^&gt;]*
/					  \b
/					  markdown\s*=\s*  ([\&#039;&quot;])	#	$2 = attr quote char
/					  1
/					  \2
/					  [^&gt;]*
/					  &gt;
/					)
/					(							# $3 = contents
/					.*
/					)
/					(&lt;/div&gt;)					# $4 = closing tag
/					\z
/					}xs&#039;, $block, $matches))
/				{
/					list(, $div_open, , $div_content, $div_close) = $matches;
/
/					# We can&#039;t call Markdown(), because that resets the hash;
/					# that initialization code should be pulled into its own sub, though.
/					$div_content = $this-&gt;hashHTMLBlocks($div_content);
/					
/					# Run document gamut methods on the content.
/					foreach ($this-&gt;document_gamut as $method =&gt; $priority) {
/						$div_content = $this-&gt;$method($div_content);
/					}
/
/					$div_open = preg_replace(
/						&#039;{\smarkdown\s*=\s*([\&#039;&quot;]).+?\1}&#039;, &#039;&#039;, $div_open);
/
/					$graf = $div_open . &quot;\n&quot; . $div_content . &quot;\n&quot; . $div_close;
/				}
			$grafs[$key] = $graf;
		}
	}

	return implode(&quot;\n\n&quot;, $grafs);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="handleSpanToken"><small>public</small>  handleSpanToken()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function handleSpanToken($token, &amp;$str) {
#
# Handle $token provided by parseSpan by determining its nature and 
# returning the corresponding value that should replace it.
#
	switch ($token{0}) {
		case &quot;\\&quot;:
			return $this-&gt;hashPart(&quot;&amp;#&quot;. ord($token{1}). &quot;;&quot;);
		case &quot;`&quot;:
			# Search for end marker in remaining text.
			if (preg_match(&#039;/^(.*?[^`])&#039;.preg_quote($token).&#039;(?!`)(.*)$/sm&#039;, 
				$str, $matches))
			{
				$str = $matches[2];
				$codespan = $this-&gt;makeCodeSpan($matches[1]);
				return $this-&gt;hashPart($codespan);
			}
			return $token; // return as text since no ending marker found.
		default:
			return $this-&gt;hashPart($token);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hashBlock"><small>public</small>  hashBlock()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function hashBlock($text) {
#
# Shortcut function for hashPart with block-level boundaries.
#
	return $this-&gt;hashPart($text, &#039;B&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hashHTMLBlocks"><small>public</small>  hashHTMLBlocks()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function hashHTMLBlocks($text) {
	if ($this-&gt;no_markup)  return $text;

	$less_than_tab = $this-&gt;tab_width - 1;

	# Hashify HTML blocks:
	# We only want to do this for block-level HTML tags, such as headers,
	# lists, and tables. That&#039;s because we still want to wrap &lt;p&gt;s around
	# &quot;paragraphs&quot; that are wrapped in non-block-level tags, such as anchors,
	# phrase emphasis, and spans. The list of tags we&#039;re looking for is
	# hard-coded:
	#
	# *  List &quot;a&quot; is made of tags which can be both inline or block-level.
	#    These will be treated block-level when the start tag is alone on 
	#    its line, otherwise they&#039;re not matched here and will be taken as 
	#    inline later.
	# *  List &quot;b&quot; is made of tags which are always block-level;
	#
	$block_tags_a_re = &#039;ins|del&#039;;
	$block_tags_b_re = &#039;p|div|h[1-6]|blockquote|pre|table|dl|ol|ul|address|&#039;.
					   &#039;script|noscript|form|fieldset|iframe|math&#039;;

	# Regular expression for the content of a block tag.
	$nested_tags_level = 4;
	$attr = &#039;
		(?&gt;				# optional tag attributes
		  \s			# starts with whitespace
		  (?&gt;
			[^&gt;&quot;/]+		# text outside quotes
		  |
			/+(?!&gt;)		# slash not followed by &quot;&gt;&quot;
		  |
			&quot;[^&quot;]*&quot;		# text inside double quotes (tolerate &quot;&gt;&quot;)
		  |
			\&#039;[^\&#039;]*\&#039;	# text inside single quotes (tolerate &quot;&gt;&quot;)
		  )*
		)?	
		&#039;;
	$content =
		str_repeat(&#039;
			(?&gt;
			  [^&lt;]+			# content without tag
			|
			  &lt;\2			# nested opening tag
				&#039;.$attr.&#039;	# attributes
				(?&gt;
				  /&gt;
				|
				  &gt;&#039;, $nested_tags_level).	# end of opening tag
				  &#039;.*?&#039;.					# last level nested tag content
		str_repeat(&#039;
				  &lt;/\2\s*&gt;	# closing nested tag
				)
			  |				
				&lt;(?!/\2\s*&gt;	# other tags with a different name
			  )
			)*&#039;,
			$nested_tags_level);
	$content2 = str_replace(&#039;\2&#039;, &#039;\3&#039;, $content);

	# First, look for nested blocks, e.g.:
	# 	&lt;div&gt;
	# 		&lt;div&gt;
	# 		tags for inner block must be indented.
	# 		&lt;/div&gt;
	# 	&lt;/div&gt;
	#
	# The outermost tags must start at the left margin for this to match, and
	# the inner nested divs must be indented.
	# We need to do this before the next, more liberal match, because the next
	# match will start at the first `&lt;div&gt;` and stop at the first `&lt;/div&gt;`.
	$text = preg_replace_callback(&#039;{(?&gt;
		(?&gt;
			(?&lt;=\n\n)		# Starting after a blank line
			|				# or
			\A\n?			# the beginning of the doc
		)
		(						# save in $1

		  # Match from `\n&lt;tag&gt;` to `&lt;/tag&gt;\n`, handling nested tags 
		  # in between.
				
					[ ]{0,&#039;.$less_than_tab.&#039;}
					&lt;(&#039;.$block_tags_b_re.&#039;)# start tag = $2
					&#039;.$attr.&#039;&gt;			# attributes followed by &gt; and \n
					&#039;.$content.&#039;		# content, support nesting
					&lt;/\2&gt;				# the matching end tag
					[ ]*				# trailing spaces/tabs
					(?=\n+|\Z)	# followed by a newline or end of document

		| # Special version for tags of group a.

					[ ]{0,&#039;.$less_than_tab.&#039;}
					&lt;(&#039;.$block_tags_a_re.&#039;)# start tag = $3
					&#039;.$attr.&#039;&gt;[ ]*\n	# attributes followed by &gt;
					&#039;.$content2.&#039;		# content, support nesting
					&lt;/\3&gt;				# the matching end tag
					[ ]*				# trailing spaces/tabs
					(?=\n+|\Z)	# followed by a newline or end of document
				
		| # Special case just for &lt;hr /&gt;. It was easier to make a special 
		  # case than to make the other regex more complicated.
		
					[ ]{0,&#039;.$less_than_tab.&#039;}
					&lt;(hr)				# start tag = $2
					&#039;.$attr.&#039;			# attributes
					/?&gt;					# the matching end tag
					[ ]*
					(?=\n{2,}|\Z)		# followed by a blank line or end of document
		
		| # Special case for standalone HTML comments:
		
				[ ]{0,&#039;.$less_than_tab.&#039;}
				(?s:
					&lt;!-- .*? --&gt;
				)
				[ ]*
				(?=\n{2,}|\Z)		# followed by a blank line or end of document
		
		| # PHP and ASP-style processor instructions (&lt;? and &lt;%)
		
				[ ]{0,&#039;.$less_than_tab.&#039;}
				(?s:
					&lt;([?%])			# $2
					.*?
					\2&gt;
				)
				[ ]*
				(?=\n{2,}|\Z)		# followed by a blank line or end of document
				
		)
		)}Sxmi&#039;,
		[&amp;$this, &#039;_hashHTMLBlocks_callback&#039;],
		$text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hashPart"><small>public</small>  hashPart()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function hashPart($text, $boundary = &#039;X&#039;) {
#
# Called whenever a tag must be hashed when a function insert an atomic 
# element in the text stream. Passing $text to through this function gives
# a unique text-token which will be reverted back when calling unhash.
#
# The $boundary argument specify what character should be used to surround
# the token. By convension, &quot;B&quot; is used for block elements that needs not
# to be wrapped into paragraph tags at the end, &quot;:&quot; is used for elements
# that are word separators and &quot;X&quot; is used in the general case.
#
	# Swap back any tag hash found in $text so we do not have to `unhash`
	# multiple times at the end.
	$text = $this-&gt;unhash($text);
	
	# Then hash the block.
	static $i = 0;
	$key = &quot;$boundary\x1A&quot; . ++$i . $boundary;
	$this-&gt;html_hashes[$key] = $text;
	return $key; # String that will replace the tag.
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="makeCodeSpan"><small>public</small>  makeCodeSpan()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function makeCodeSpan($code) {
#
# Create a code span markup for $code. Called from handleSpanToken.
#
	$code = htmlspecialchars(trim($code), ENT_NOQUOTES);
	return $this-&gt;hashPart(&quot;&lt;code&gt;$code&lt;/code&gt;&quot;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="outdent"><small>public</small>  outdent()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function outdent($text) {
#
# Remove one level of line-leading tabs or spaces
#
	return preg_replace(&#039;/^(\t|[ ]{1,&#039;.$this-&gt;tab_width.&#039;})/m&#039;, &#039;&#039;, $text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="parseSpan"><small>public</small>  parseSpan()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function parseSpan($str) {
#
# Take the string $str and parse it into tokens, hashing embeded HTML,
# escaped characters and handling code spans.
#
	$output = &#039;&#039;;
	
	$span_re = &#039;{
			(
				\\\\&#039;.$this-&gt;escape_chars_re.&#039;
			|
				(?&lt;![`\\\\])
				`+						# code span marker
		&#039;.( $this-&gt;no_markup ? &#039;&#039; : &#039;
			|
				&lt;!--    .*?     --&gt;		# comment
			|
				&lt;\?.*?\?&gt; | &lt;%.*?%&gt;		# processing instruction
			|
				&lt;[/!$]?[-a-zA-Z0-9:]+	# regular tags
				(?&gt;
					\s
					(?&gt;[^&quot;\&#039;&gt;]+|&quot;[^&quot;]*&quot;|\&#039;[^\&#039;]*\&#039;)*
				)?
				&gt;
		&#039;).&#039;
			)
			}xs&#039;;

	while (1) {
		#
		# Each loop iteration seach for either the next tag, the next 
		# openning code span marker, or the next escaped character. 
		# Each token is then passed to handleSpanToken.
		#
		$parts = preg_split($span_re, $str, 2, PREG_SPLIT_DELIM_CAPTURE);
		
		# Create token from text preceding tag.
		if ($parts[0] != &quot;&quot;) {
			$output .= $parts[0];
		}
		
		# Check if we reach the end.
		if (isset($parts[1])) {
			$output .= $this-&gt;handleSpanToken($parts[1], $parts[2]);
			$str = $parts[2];
		}
		else {
			break;
		}
	}
	
	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="prepareItalicsAndBold"><small>public</small>  prepareItalicsAndBold()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function prepareItalicsAndBold() {
#
# Prepare regular expressions for seraching emphasis tokens in any
# context.
#
	foreach ($this-&gt;em_relist as $em =&gt; $em_re) {
		foreach ($this-&gt;strong_relist as $strong =&gt; $strong_re) {
			# Construct list of allowed token expressions.
			$token_relist = [];
			if (isset($this-&gt;em_strong_relist[&quot;$em$strong&quot;])) {
				$token_relist[] = $this-&gt;em_strong_relist[&quot;$em$strong&quot;];
			}
			$token_relist[] = $em_re;
			$token_relist[] = $strong_re;
			
			# Construct master expression from list.
			$token_re = &#039;{(&#039;. implode(&#039;|&#039;, $token_relist) .&#039;)}&#039;;
			$this-&gt;em_strong_prepared_relist[&quot;$em$strong&quot;] = $token_re;
		}
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="processListItems"><small>public</small>  processListItems()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function processListItems($list_str, $marker_any_re) {
#
#	Process the contents of a single ordered or unordered list, splitting it
#	into individual list items.
#
	# The $this-&gt;list_level global keeps track of when we&#039;re inside a list.
	# Each time we enter a list, we increment it; when we leave a list,
	# we decrement. If it&#039;s zero, we&#039;re not in a list anymore.
	#
	# We do this because when we&#039;re not inside a list, we want to treat
	# something like this:
	#
	#		I recommend upgrading to version
	#		8. Oops, now this line is treated
	#		as a sub-list.
	#
	# As a single paragraph, despite the fact that the second line starts
	# with a digit-period-space sequence.
	#
	# Whereas when we&#039;re inside a list (or sub-list), that line will be
	# treated as the start of a sub-list. What a kludge, huh? This is
	# an aspect of Markdown&#039;s syntax that&#039;s hard to parse perfectly
	# without resorting to mind-reading. Perhaps the solution is to
	# change the syntax rules such that sub-lists must start with a
	# starting cardinal number; e.g. &quot;1.&quot; or &quot;a.&quot;.
	
	$this-&gt;list_level++;

	# trim trailing blank lines:
	$list_str = preg_replace(&quot;/\n{2,}\\z/&quot;, &quot;\n&quot;, $list_str);

	$list_str = preg_replace_callback(&#039;{
		(\n)?							# leading line = $1
		(^[ ]*)							# leading whitespace = $2
		(&#039;.$marker_any_re.&#039;				# list marker and space = $3
			(?:[ ]+|(?=\n))	# space only required if item is not empty
		)
		((?s:.*?))						# list item text   = $4
		(?:(\n+(?=\n))|\n)				# tailing blank line = $5
		(?= \n* (\z | \2 (&#039;.$marker_any_re.&#039;) (?:[ ]+|(?=\n))))
		}xm&#039;,
		[&amp;$this, &#039;_processListItems_callback&#039;], $list_str);

	$this-&gt;list_level--;
	return $list_str;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="runBasicBlockGamut"><small>public</small>  runBasicBlockGamut()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function runBasicBlockGamut($text) {
#
# Run block gamut tranformations, without hashing HTML blocks. This is 
# useful when HTML blocks are known to be already hashed, like in the first
# whole-document pass.
#
	foreach ($this-&gt;block_gamut as $method =&gt; $priority) {
		$text = $this-&gt;$method($text);
	}
	
	# Finally form paragraph and restore hashed blocks.
	$text = $this-&gt;formParagraphs($text);

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="runBlockGamut"><small>public</small>  runBlockGamut()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function runBlockGamut($text) {
#
# Run block gamut tranformations.
#
	# We need to escape raw HTML in Markdown source before doing anything 
	# else. This need to be done for each block, and not only at the 
	# begining in the Markdown function since hashed blocks can be part of
	# list items and could have been indented. Indented blocks would have 
	# been seen as a code block in a previous pass of hashHTMLBlocks.
	$text = $this-&gt;hashHTMLBlocks($text);
	
	return $this-&gt;runBasicBlockGamut($text);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="runSpanGamut"><small>public</small>  runSpanGamut()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function runSpanGamut($text) {
#
# Run span gamut tranformations.
#
	foreach ($this-&gt;span_gamut as $method =&gt; $priority) {
		$text = $this-&gt;$method($text);
	}

	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="setup"><small>public</small>  setup()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function setup() {
#
# Called before the transformation process starts to setup parser 
# states.
#
	# Clear global hashes.
	$this-&gt;urls = $this-&gt;predef_urls;
	$this-&gt;titles = $this-&gt;predef_titles;
	$this-&gt;html_hashes = [];
	
	$in_anchor = false;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="stripLinkDefinitions"><small>public</small>  stripLinkDefinitions()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function stripLinkDefinitions($text) {
#
# Strips link definitions from text, stores the URLs and titles in
# hash references.
#
	$less_than_tab = $this-&gt;tab_width - 1;

	# Link defs are in the form: ^[id]: url &quot;optional title&quot;
	$text = preg_replace_callback(&#039;{
						^[ ]{0,&#039;.$less_than_tab.&#039;}\[(.+)\][ ]?:	# id = $1
						  [ ]*
						  \n?				# maybe *one* newline
						  [ ]*
						&lt;?(\S+?)&gt;?			# url = $2
						  [ ]*
						  \n?				# maybe one newline
						  [ ]*
						(?:
							(?&lt;=\s)			# lookbehind for whitespace
							[&quot;(]
							(.*?)			# title = $3
							[&quot;)]
							[ ]*
						)?	# title is optional
						(?:\n+|\Z)
		}xm&#039;,
		[&amp;$this, &#039;_stripLinkDefinitions_callback&#039;],
		$text);
	return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="teardown"><small>public</small>  teardown()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function teardown() {
#
# Called after the transformation process to clear any variable 
# which may be taking up memory unnecessarly.
#
	$this-&gt;urls = [];
	$this-&gt;titles = [];
	$this-&gt;html_hashes = [];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="transform"><small>public</small>  transform()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function transform($text) {
#
# Main function. Performs some preprocessing on the input text
# and pass it through the document gamut.
#
	$this-&gt;setup();

	# Remove UTF-8 BOM and marker character in input, if present.
	$text = preg_replace(&#039;{^\xEF\xBB\xBF|\x1A}&#039;, &#039;&#039;, $text);

	# Standardize line endings:
	#   DOS to Unix and Mac to Unix
	$text = preg_replace(&#039;{\r\n?}&#039;, &quot;\n&quot;, $text);

	# Make sure $text ends with a couple of newlines:
	$text .= &quot;\n\n&quot;;

	# Convert all tabs to spaces.
	$text = $this-&gt;detab($text);

	# Turn block-level HTML blocks into hash entries
	$text = $this-&gt;hashHTMLBlocks($text);

	# Strip any lines consisting only of spaces and tabs.
	# This makes subsequent regexen easier to write, because we can
	# match consecutive blank lines with /\n+/ instead of something
	# contorted like /[ ]*\n+/ .
	$text = preg_replace(&#039;/^[ ]+$/m&#039;, &#039;&#039;, $text);

	# Run document gamut methods.
	foreach ($this-&gt;document_gamut as $method =&gt; $priority) {
		$text = $this-&gt;$method($text);
	}
	
	$this-&gt;teardown();

	return $text . &quot;\n&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unhash"><small>public</small>  unhash()<small> (defined in <a href='/documentation/api/Markdown_Parser'>Markdown_Parser</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function unhash($text) {
#
# Swap back in all the tags hashed by _HashHTMLBlocks.
#
	return preg_replace_callback(&#039;/(.)\x1A[0-9]+\1/&#039;, 
		[&amp;$this, &#039;_unhash_callback&#039;], $text);
}</code>
</pre>
</div>
</div>
</div>