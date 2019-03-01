---
layout: api
class: Kohana_ORM_Behavior
---
<h1>Kohana_ORM_Behavior</h1>
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
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#factory">factory()</a>
</li>
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
<a href="#__construct">__construct()</a>
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
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

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
<h3 id="on_construct"><small>public</small>  on_construct()<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_construct($model, $id) { return TRUE; }</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_create"><small>public</small>  on_create()<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_create($model) { }</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_update"><small>public</small>  on_update()<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_update($model) { }</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>protected</small>  __construct()<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior'>Kohana_ORM_Behavior</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct($config)
{
	$this-&gt;_config = $config;
}</code>
</pre>
</div>
</div>
</div>