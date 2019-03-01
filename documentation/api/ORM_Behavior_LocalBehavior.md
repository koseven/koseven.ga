---
layout: api
class: ORM_Behavior_LocalBehavior
---
<h1>ORM_Behavior_LocalBehavior</h1>
extends <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a>
<br />
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a></p>
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
<a href="#property-_callback">$_callback</a>
</li>
<li>
<a href="#property-_config">$_config</a>
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
<a href="#factory">factory()</a>
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
<h4 id='property-_callback'><small>protected</small>  <span class='blue'>array</span> $_callback</h4>
</dt>
<dd>
 <p>Callback to execute</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
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
<h3 id="on_construct"><small>public</small>  on_construct(<small>ORM</small> <span class="param" title="The model">$model</span> , <small>mixed</small> <span class="param" title="Parameter for find or object to load">$id</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a>)</small></h3>
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
	$params = [&#039;construct&#039;, $id];
	$result = call_user_func_array($this-&gt;_callback, $params);
	
	if (is_bool($result))
		return $result;

	// Continue loading the record
	return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_create"><small>public</small>  on_create(<small>ORM</small> <span class="param" title="The model">$model</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a>)</small></h3>
<div class='description'><p>A new model is created</p>
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
$params = [&#039;create&#039;];
call_user_func_array($this-&gt;_callback, $params);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_update"><small>public</small>  on_update()<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a>)</small></h3>
<div class='description'><p>The model is updated</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on_update($model)
{
$params = [&#039;update&#039;];
call_user_func_array($this-&gt;_callback, $params);
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
<h3 id="__construct"><small>protected</small>  __construct(<small>mixed</small> <span class="param" title="Callback to execute">$callback</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM_Behavior_LocalBehavior'>Kohana_ORM_Behavior_LocalBehavior</a>)</small></h3>
<div class='description'><p>Constructs a behavior object</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $callback</strong> <small>required</small> - Callback to execute</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function __construct($callback)
{
  $this-&gt;_callback = $callback;
}</code>
</pre>
</div>
</div>
</div>