---
layout: api
class: ORM_Behavior_Guid
---
<h1>ORM_Behavior_Guid</h1>
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
<a href="#property-_guid_column">$_guid_column</a>
</li>
<li>
<a href="#property-_guid_only">$_guid_only</a>
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
<li>
<a href="#create_guid">create_guid()</a>
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
<h4 id='property-_guid_column'><small>protected</small>  <span class='blue'>string</span> $_guid_column</h4>
</dt>
<dd>
 <p>Table column for GUID value</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(4)</span> "guid"</pre></dd>
<dt>
<h4 id='property-_guid_only'><small>protected</small>  <span class='blue'>boolean</span> $_guid_only</h4>
</dt>
<dd>
 <p>Allow model creaton on guid key only</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="on_construct"><small>public</small>  on_construct(<small>ORM</small> <span class="param" title="The model">$model</span> , <small>mixed</small> <span class="param" title="Parameter for find or object to load">$id</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Guid'>ORM_Behavior_Guid</a>)</small></h3>
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
     if (UUID::valid($id))
     {
       $model-&gt;where($this-&gt;_guid_column, &#039;=&#039;, $id)-&gt;find();
       
       // Prevent further record loading
       return FALSE;
     }
   }
   
   return TRUE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_create"><small>public</small>  on_create(<small>ORM</small> <span class="param" title="The model">$model</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Guid'>ORM_Behavior_Guid</a>)</small></h3>
<div class='description'><p>A new model is created, add a guid value</p>
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
  $this-&gt;create_guid($model);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on_update"><small>public</small>  on_update(<small>ORM</small> <span class="param" title="The model">$model</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Guid'>ORM_Behavior_Guid</a>)</small></h3>
<div class='description'><p>The model is updated, add a guid value if empty</p>
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
  $this-&gt;create_guid($model);
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
<h3 id="__construct"><small>protected</small>  __construct(<small>array</small> <span class="param" title="Configuration parameters">$config</span> )<small> (defined in <a href='/documentation/api/ORM_Behavior_Guid'>ORM_Behavior_Guid</a>)</small></h3>
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
  
  $this-&gt;_guid_column = Arr::get($config, &#039;column&#039;, $this-&gt;_guid_column);
  $this-&gt;_guid_only = Arr::get($config, &#039;guid_only&#039;, $this-&gt;_guid_only);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_guid"><small>private</small>  create_guid()<small> (defined in <a href='/documentation/api/ORM_Behavior_Guid'>ORM_Behavior_Guid</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">private function create_guid($model)
{
  $current_guid = $model-&gt;get($this-&gt;_guid_column);

  // Try to create a new GUID
  $query = DB::select()-&gt;from($model-&gt;table_name())
    -&gt;where($this-&gt;_guid_column, &#039;=&#039;, &#039;:guid&#039;)
    -&gt;limit(1);

  while (empty($current_guid))
  {
    $current_guid = sprintf(&#039;%04x%04x-%04x-%04x-%04x-%04x%04x%04x&#039;,
      // 32 bits for &quot;time_low&quot;
      mt_rand(0, 0xffff), mt_rand(0, 0xffff),

      // 16 bits for &quot;time_mid&quot;
      mt_rand(0, 0xffff),

      // 16 bits for &quot;time_hi_and_version&quot;,
      // four most significant bits holds version number 4
      mt_rand(0, 0x0fff) | 0x4000,

      // 16 bits, 8 bits for &quot;clk_seq_hi_res&quot;,
      // 8 bits for &quot;clk_seq_low&quot;,
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand(0, 0x3fff) | 0x8000,

      // 48 bits for &quot;node&quot;
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );

    $query-&gt;param(&#039;:guid&#039;, $current_guid);
    if ($query-&gt;execute()-&gt;get($model-&gt;primary_key(), FALSE) !== FALSE)
    {
      Log::instance()-&gt;add(Log::NOTICE, &#039;Duplicate GUID created for &#039;.$model-&gt;table_name());
      $current_guid = &#039;&#039;;
    }
  }

  $model-&gt;set($this-&gt;_guid_column, $current_guid);
}</code>
</pre>
</div>
</div>
</div>