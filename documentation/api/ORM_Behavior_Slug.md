---
layout: api
class: ORM_Behavior_Slug
---
<h1>ORM_Behavior_Slug</h1>
extends <a href='/documentation/api/ORM_Behavior'>ORM_Behavior</a>
<br />
extends <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>
<br />
<p>
<i>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/ORM</dd>
<dt>author</dt>
<dd>Koseven Team</dd>
<dt>copyright</dt>
<dd>(c) 2016-2018 Koseven Team</dd>
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
<a href="#property-_config">$_config</a>
</li>
<li>
<a href="#property-_slug_column">$_slug_column</a>
</li>
<li>
<a href="#property-_slug_source_column">$_slug_source_column</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#on_construct">on_construct()</a>
</li>
<li>
<a href="#on_create">on_create()</a>
</li>
<li>
<a href="#on_update">on_update()</a>
</li>
<li>
<a href="#remove_accents">remove_accents()</a>
</li>
<li>
<a href="#seems_utf8">seems_utf8()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#slugify">slugify()</a>
</li>
<li>
<a href="#create_slug">create_slug()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_config'><small>protected</small>  <span class='blue'>Database_Query_Builder_Select</span> $_config</h4>
</dt>
<dd>
 <p>Database query builder</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_slug_column'><small>protected</small>  <span class='blue'>string</span> $_slug_column</h4>
</dt>
<dd>
 <p>Table column for slug value</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(4)</span> "slug"</pre></dd>
<dt>
<h4 id='property-_slug_source_column'><small>protected</small>  <span class='blue'>string</span> $_slug_source_column</h4>
</dt>
<dd>
 <p>Prefered column to generate slug</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(4)</span> "name"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="on_construct"><small>public</small>  on_construct(<small>ORM</small> <span class="param" title="The model">$model</span> , <small>mixed</small> <span class="param" title="Parameter for find or object to load">$id</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>Constructs a new model and loads a record if given</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">ORM </span><strong> $model</strong> <small>required</small> - The model</li>
<li>
 <span class="blue">mixed </span><strong> $id</strong> <small>required</small> - Parameter for find or object to load</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_construct($model, $id)
{
	if (($id !== NULL) AND ! is_array($id) AND ! ctype_digit($id))
   {
     $model-&gt;where($this-&gt;_slug_column, &#039;=&#039;, $id)-&gt;find();

     // Prevent further record loading
     return FALSE;
   }
   
   return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_create"><small>public</small>  on_create(<small>ORM</small> <span class="param" title="The model">$model</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>A new model is created, add a slug value</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">ORM </span><strong> $model</strong> <small>required</small> - The model</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_create($model)
{
  $this-&gt;create_slug($model);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_update"><small>public</small>  on_update(<small>ORM</small> <span class="param" title="The model">$model</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>The model is updated, add a slug value if empty</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">ORM </span><strong> $model</strong> <small>required</small> - The model</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_update($model)
{
  $this-&gt;create_slug($model);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="remove_accents"><small>public</small>  remove_accents()<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>Replace the accents</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function remove_accents($string)
{
  if ( ! preg_match(&#039;/[\x80-\xff]/&#039;, $string))
    return $string;

  if ($this-&gt;seems_utf8($string)) {
    $chars = [
    // Decompositions for Latin-1 Supplement
    chr(195).chr(128) =&gt; &#039;A&#039;, chr(195).chr(129) =&gt; &#039;A&#039;,
    chr(195).chr(130) =&gt; &#039;A&#039;, chr(195).chr(131) =&gt; &#039;A&#039;,
    chr(195).chr(132) =&gt; &#039;A&#039;, chr(195).chr(133) =&gt; &#039;A&#039;,
    chr(195).chr(134) =&gt; &#039;AE&#039;,chr(195).chr(135) =&gt; &#039;C&#039;,
    chr(195).chr(136) =&gt; &#039;E&#039;, chr(195).chr(137) =&gt; &#039;E&#039;,
    chr(195).chr(138) =&gt; &#039;E&#039;, chr(195).chr(139) =&gt; &#039;E&#039;,
    chr(195).chr(140) =&gt; &#039;I&#039;, chr(195).chr(141) =&gt; &#039;I&#039;,
    chr(195).chr(142) =&gt; &#039;I&#039;, chr(195).chr(143) =&gt; &#039;I&#039;,
    chr(195).chr(144) =&gt; &#039;D&#039;, chr(195).chr(145) =&gt; &#039;N&#039;,
    chr(195).chr(146) =&gt; &#039;O&#039;, chr(195).chr(147) =&gt; &#039;O&#039;,
    chr(195).chr(148) =&gt; &#039;O&#039;, chr(195).chr(149) =&gt; &#039;O&#039;,
    chr(195).chr(150) =&gt; &#039;O&#039;, chr(195).chr(153) =&gt; &#039;U&#039;,
    chr(195).chr(154) =&gt; &#039;U&#039;, chr(195).chr(155) =&gt; &#039;U&#039;,
    chr(195).chr(156) =&gt; &#039;U&#039;, chr(195).chr(157) =&gt; &#039;Y&#039;,
    chr(195).chr(158) =&gt; &#039;TH&#039;,chr(195).chr(159) =&gt; &#039;s&#039;,
    chr(195).chr(160) =&gt; &#039;a&#039;, chr(195).chr(161) =&gt; &#039;a&#039;,
    chr(195).chr(162) =&gt; &#039;a&#039;, chr(195).chr(163) =&gt; &#039;a&#039;,
    chr(195).chr(164) =&gt; &#039;a&#039;, chr(195).chr(165) =&gt; &#039;a&#039;,
    chr(195).chr(166) =&gt; &#039;ae&#039;,chr(195).chr(167) =&gt; &#039;c&#039;,
    chr(195).chr(168) =&gt; &#039;e&#039;, chr(195).chr(169) =&gt; &#039;e&#039;,
    chr(195).chr(170) =&gt; &#039;e&#039;, chr(195).chr(171) =&gt; &#039;e&#039;,
    chr(195).chr(172) =&gt; &#039;i&#039;, chr(195).chr(173) =&gt; &#039;i&#039;,
    chr(195).chr(174) =&gt; &#039;i&#039;, chr(195).chr(175) =&gt; &#039;i&#039;,
    chr(195).chr(176) =&gt; &#039;d&#039;, chr(195).chr(177) =&gt; &#039;n&#039;,
    chr(195).chr(178) =&gt; &#039;o&#039;, chr(195).chr(179) =&gt; &#039;o&#039;,
    chr(195).chr(180) =&gt; &#039;o&#039;, chr(195).chr(181) =&gt; &#039;o&#039;,
    chr(195).chr(182) =&gt; &#039;o&#039;, chr(195).chr(184) =&gt; &#039;o&#039;,
    chr(195).chr(185) =&gt; &#039;u&#039;, chr(195).chr(186) =&gt; &#039;u&#039;,
    chr(195).chr(187) =&gt; &#039;u&#039;, chr(195).chr(188) =&gt; &#039;u&#039;,
    chr(195).chr(189) =&gt; &#039;y&#039;, chr(195).chr(190) =&gt; &#039;th&#039;,
    chr(195).chr(191) =&gt; &#039;y&#039;,
    // Decompositions for Latin Extended-A
    chr(196).chr(128) =&gt; &#039;A&#039;, chr(196).chr(129) =&gt; &#039;a&#039;,
    chr(196).chr(130) =&gt; &#039;A&#039;, chr(196).chr(131) =&gt; &#039;a&#039;,
    chr(196).chr(132) =&gt; &#039;A&#039;, chr(196).chr(133) =&gt; &#039;a&#039;,
    chr(196).chr(134) =&gt; &#039;C&#039;, chr(196).chr(135) =&gt; &#039;c&#039;,
    chr(196).chr(136) =&gt; &#039;C&#039;, chr(196).chr(137) =&gt; &#039;c&#039;,
    chr(196).chr(138) =&gt; &#039;C&#039;, chr(196).chr(139) =&gt; &#039;c&#039;,
    chr(196).chr(140) =&gt; &#039;C&#039;, chr(196).chr(141) =&gt; &#039;c&#039;,
    chr(196).chr(142) =&gt; &#039;D&#039;, chr(196).chr(143) =&gt; &#039;d&#039;,
    chr(196).chr(144) =&gt; &#039;D&#039;, chr(196).chr(145) =&gt; &#039;d&#039;,
    chr(196).chr(146) =&gt; &#039;E&#039;, chr(196).chr(147) =&gt; &#039;e&#039;,
    chr(196).chr(148) =&gt; &#039;E&#039;, chr(196).chr(149) =&gt; &#039;e&#039;,
    chr(196).chr(150) =&gt; &#039;E&#039;, chr(196).chr(151) =&gt; &#039;e&#039;,
    chr(196).chr(152) =&gt; &#039;E&#039;, chr(196).chr(153) =&gt; &#039;e&#039;,
    chr(196).chr(154) =&gt; &#039;E&#039;, chr(196).chr(155) =&gt; &#039;e&#039;,
    chr(196).chr(156) =&gt; &#039;G&#039;, chr(196).chr(157) =&gt; &#039;g&#039;,
    chr(196).chr(158) =&gt; &#039;G&#039;, chr(196).chr(159) =&gt; &#039;g&#039;,
    chr(196).chr(160) =&gt; &#039;G&#039;, chr(196).chr(161) =&gt; &#039;g&#039;,
    chr(196).chr(162) =&gt; &#039;G&#039;, chr(196).chr(163) =&gt; &#039;g&#039;,
    chr(196).chr(164) =&gt; &#039;H&#039;, chr(196).chr(165) =&gt; &#039;h&#039;,
    chr(196).chr(166) =&gt; &#039;H&#039;, chr(196).chr(167) =&gt; &#039;h&#039;,
    chr(196).chr(168) =&gt; &#039;I&#039;, chr(196).chr(169) =&gt; &#039;i&#039;,
    chr(196).chr(170) =&gt; &#039;I&#039;, chr(196).chr(171) =&gt; &#039;i&#039;,
    chr(196).chr(172) =&gt; &#039;I&#039;, chr(196).chr(173) =&gt; &#039;i&#039;,
    chr(196).chr(174) =&gt; &#039;I&#039;, chr(196).chr(175) =&gt; &#039;i&#039;,
    chr(196).chr(176) =&gt; &#039;I&#039;, chr(196).chr(177) =&gt; &#039;i&#039;,
    chr(196).chr(178) =&gt; &#039;IJ&#039;,chr(196).chr(179) =&gt; &#039;ij&#039;,
    chr(196).chr(180) =&gt; &#039;J&#039;, chr(196).chr(181) =&gt; &#039;j&#039;,
    chr(196).chr(182) =&gt; &#039;K&#039;, chr(196).chr(183) =&gt; &#039;k&#039;,
    chr(196).chr(184) =&gt; &#039;k&#039;, chr(196).chr(185) =&gt; &#039;L&#039;,
    chr(196).chr(186) =&gt; &#039;l&#039;, chr(196).chr(187) =&gt; &#039;L&#039;,
    chr(196).chr(188) =&gt; &#039;l&#039;, chr(196).chr(189) =&gt; &#039;L&#039;,
    chr(196).chr(190) =&gt; &#039;l&#039;, chr(196).chr(191) =&gt; &#039;L&#039;,
    chr(197).chr(128) =&gt; &#039;l&#039;, chr(197).chr(129) =&gt; &#039;L&#039;,
    chr(197).chr(130) =&gt; &#039;l&#039;, chr(197).chr(131) =&gt; &#039;N&#039;,
    chr(197).chr(132) =&gt; &#039;n&#039;, chr(197).chr(133) =&gt; &#039;N&#039;,
    chr(197).chr(134) =&gt; &#039;n&#039;, chr(197).chr(135) =&gt; &#039;N&#039;,
    chr(197).chr(136) =&gt; &#039;n&#039;, chr(197).chr(137) =&gt; &#039;N&#039;,
    chr(197).chr(138) =&gt; &#039;n&#039;, chr(197).chr(139) =&gt; &#039;N&#039;,
    chr(197).chr(140) =&gt; &#039;O&#039;, chr(197).chr(141) =&gt; &#039;o&#039;,
    chr(197).chr(142) =&gt; &#039;O&#039;, chr(197).chr(143) =&gt; &#039;o&#039;,
    chr(197).chr(144) =&gt; &#039;O&#039;, chr(197).chr(145) =&gt; &#039;o&#039;,
    chr(197).chr(146) =&gt; &#039;OE&#039;,chr(197).chr(147) =&gt; &#039;oe&#039;,
    chr(197).chr(148) =&gt; &#039;R&#039;,chr(197).chr(149) =&gt; &#039;r&#039;,
    chr(197).chr(150) =&gt; &#039;R&#039;,chr(197).chr(151) =&gt; &#039;r&#039;,
    chr(197).chr(152) =&gt; &#039;R&#039;,chr(197).chr(153) =&gt; &#039;r&#039;,
    chr(197).chr(154) =&gt; &#039;S&#039;,chr(197).chr(155) =&gt; &#039;s&#039;,
    chr(197).chr(156) =&gt; &#039;S&#039;,chr(197).chr(157) =&gt; &#039;s&#039;,
    chr(197).chr(158) =&gt; &#039;S&#039;,chr(197).chr(159) =&gt; &#039;s&#039;,
    chr(197).chr(160) =&gt; &#039;S&#039;, chr(197).chr(161) =&gt; &#039;s&#039;,
    chr(197).chr(162) =&gt; &#039;T&#039;, chr(197).chr(163) =&gt; &#039;t&#039;,
    chr(197).chr(164) =&gt; &#039;T&#039;, chr(197).chr(165) =&gt; &#039;t&#039;,
    chr(197).chr(166) =&gt; &#039;T&#039;, chr(197).chr(167) =&gt; &#039;t&#039;,
    chr(197).chr(168) =&gt; &#039;U&#039;, chr(197).chr(169) =&gt; &#039;u&#039;,
    chr(197).chr(170) =&gt; &#039;U&#039;, chr(197).chr(171) =&gt; &#039;u&#039;,
    chr(197).chr(172) =&gt; &#039;U&#039;, chr(197).chr(173) =&gt; &#039;u&#039;,
    chr(197).chr(174) =&gt; &#039;U&#039;, chr(197).chr(175) =&gt; &#039;u&#039;,
    chr(197).chr(176) =&gt; &#039;U&#039;, chr(197).chr(177) =&gt; &#039;u&#039;,
    chr(197).chr(178) =&gt; &#039;U&#039;, chr(197).chr(179) =&gt; &#039;u&#039;,
    chr(197).chr(180) =&gt; &#039;W&#039;, chr(197).chr(181) =&gt; &#039;w&#039;,
    chr(197).chr(182) =&gt; &#039;Y&#039;, chr(197).chr(183) =&gt; &#039;y&#039;,
    chr(197).chr(184) =&gt; &#039;Y&#039;, chr(197).chr(185) =&gt; &#039;Z&#039;,
    chr(197).chr(186) =&gt; &#039;z&#039;, chr(197).chr(187) =&gt; &#039;Z&#039;,
    chr(197).chr(188) =&gt; &#039;z&#039;, chr(197).chr(189) =&gt; &#039;Z&#039;,
    chr(197).chr(190) =&gt; &#039;z&#039;, chr(197).chr(191) =&gt; &#039;s&#039;,
    // Decompositions for Latin Extended-B
    chr(200).chr(152) =&gt; &#039;S&#039;, chr(200).chr(153) =&gt; &#039;s&#039;,
    chr(200).chr(154) =&gt; &#039;T&#039;, chr(200).chr(155) =&gt; &#039;t&#039;,
    // Euro Sign
    chr(226).chr(130).chr(172) =&gt; &#039;E&#039;,
    // GBP (Pound) Sign
    chr(194).chr(163) =&gt; &#039;&#039;];

    $string = strtr($string, $chars);
  } else {
    // Assume ISO-8859-1 if not UTF-8
    $chars[&#039;in&#039;] = chr(128).chr(131).chr(138).chr(142).chr(154).chr(158)
      .chr(159).chr(162).chr(165).chr(181).chr(192).chr(193).chr(194)
      .chr(195).chr(196).chr(197).chr(199).chr(200).chr(201).chr(202)
      .chr(203).chr(204).chr(205).chr(206).chr(207).chr(209).chr(210)
      .chr(211).chr(212).chr(213).chr(214).chr(216).chr(217).chr(218)
      .chr(219).chr(220).chr(221).chr(224).chr(225).chr(226).chr(227)
      .chr(228).chr(229).chr(231).chr(232).chr(233).chr(234).chr(235)
      .chr(236).chr(237).chr(238).chr(239).chr(241).chr(242).chr(243)
      .chr(244).chr(245).chr(246).chr(248).chr(249).chr(250).chr(251)
      .chr(252).chr(253).chr(255);

    $chars[&#039;out&#039;] = &quot;EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy&quot;;

    $string = strtr($string, $chars[&#039;in&#039;], $chars[&#039;out&#039;]);
    $double_chars[&#039;in&#039;] = [chr(140), chr(156), chr(198), chr(208), chr(222), chr(223), chr(230), chr(240), chr(254)];
    $double_chars[&#039;out&#039;] = [&#039;OE&#039;, &#039;oe&#039;, &#039;AE&#039;, &#039;DH&#039;, &#039;TH&#039;, &#039;ss&#039;, &#039;ae&#039;, &#039;dh&#039;, &#039;th&#039;];
    $string = str_replace($double_chars[&#039;in&#039;], $double_chars[&#039;out&#039;], $string);
  }

  return $string;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="seems_utf8"><small>public</small>  seems_utf8()<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>Check if the input file looks like an utf8 string</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">function seems_utf8($str)
{
  $length = strlen($str);
  for ($i=0; $i &lt; $length; $i++) {
    $c = ord($str[$i]);
    if ($c &lt; 0x80) { $n = 0; } // 0bbbbbbb
    elseif (($c &amp; 0xE0) == 0xC0) { $n=1; } // 110bbbbb
    elseif (($c &amp; 0xF0) == 0xE0) { $n=2; } // 1110bbbb
    elseif (($c &amp; 0xF8) == 0xF0) { $n=3; } // 11110bbb
    elseif (($c &amp; 0xFC) == 0xF8) { $n=4; } // 111110bb
    elseif (($c &amp; 0xFE) == 0xFC) { $n=5; } // 1111110b
    else return FALSE; // Does not match any model

    for ($j=0; $j&lt;$n; $j++)
    { // n bytes matching 10bbbbbb follow ?
      if ((++$i == $length) OR ((ord($str[$i]) &amp; 0xC0) != 0x80))
        return FALSE;
    }
  }
  return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>string</small> <span class="param" title="$type Type name">$behavior</span> [, <small>mixed</small> <span class="param" title="$id Parameter for find()">$config</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>)</small></h3>
<div class='description'><p>Creates and returns a new ORM behavior.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $behavior</strong> <small>required</small> - $type   Type name</li>
<li>
 <span class="blue">mixed </span><strong> $config</strong> <small> = <small>NULL</small></small> - $id     Parameter for find()</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($behavior, $config = NULL)
{
	if ( ! is_string($behavior) AND is_array($config))
	{
		if ( ! is_callable($config))
			throw new Kohana_Exception(&#039;Behavior cannot be created: function does not exists&#039;);

		// This is either a callback as an array or a lambda
		return new ORM_Behavior_LocalBehavior($config);
	}

	// Set class name
	$behavior_name = &#039;ORM_Behavior_&#039;.ucfirst($behavior);

	return new $behavior_name($config);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration parameters">$config</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>Constructs a behavior object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $config</strong> <small>required</small> - Configuration parameters</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct($config)
{
  parent::__construct($config);

  $this-&gt;_slug_source_column = Arr::get($config, &#039;source&#039;, $this-&gt;_slug_source_column);
  $this-&gt;_slug_column = Arr::get($config, &#039;column&#039;, $this-&gt;_slug_column);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="slugify"><small>protected</small>  slugify()<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'><p>Create a safe pathname</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function slugify($text, $strict=TRUE)
{
  $text = $this-&gt;remove_accents($text);
  
  // replace non letter or digits by -
  $text = preg_replace(&#039;~[^\\pL\d.]+~u&#039;, &#039;-&#039;, $text);

  // trim
  $text = trim($text, &#039;-&#039;);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace(&#039;~[^-\w.]+~&#039;, &#039;&#039;, $text);

  if ($strict)
  {
    $text = str_replace(&#039;.&#039;, &#039;&#039;, $text);
  }

  return $text;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_slug"><small>private</small>  create_slug()<small> (defined in <a href='/documentation/api/ORM_Behavior_Slug'>ORM_Behavior_Slug</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">private function create_slug($model)
{
  $index = 0;
  $current_slug = $model-&gt;get($this-&gt;_slug_column);

  // Create a valid slug name
  $source = $model-&gt;get($this-&gt;_slug_source_column);
  if (empty($source))
  {
    $source = $model-&gt;object_name();
  }

  // Prepare the query
  $query = DB::select()-&gt;from($model-&gt;table_name())
    -&gt;where($this-&gt;_slug_column, &#039;=&#039;, &#039;:slug&#039;)
    -&gt;where($model-&gt;primary_key(), &#039;!=&#039;, $model-&gt;pk())
    -&gt;limit(1);

  // Create a slugged value
  $slug_base = $this-&gt;slugify($source);

  if ($current_slug !== $slug_base)
  {
    // Just the base slug
    $current_slug = $slug_base;
    $query-&gt;param(&#039;:slug&#039;, $current_slug);

    // Default slug invalid, add index
    if ($query-&gt;execute()-&gt;get($model-&gt;primary_key(), FALSE) !== FALSE)
    {

      // Base slug string with an index
      do
      {
        $current_slug = sprintf(&#039;%s-%d&#039;, $slug_base, $index);

        $query-&gt;param(&#039;:slug&#039;, $current_slug);
        if ($query-&gt;execute()-&gt;get($model-&gt;primary_key(), FALSE) !== FALSE)
        {
          $index++;
          $current_slug = &#039;&#039;;
        }
      }
      while (empty($current_slug));
    }
  
    $model-&gt;set($this-&gt;_slug_column, $current_slug);
  }
}</code>
</pre>
</div>
</div>
</div>