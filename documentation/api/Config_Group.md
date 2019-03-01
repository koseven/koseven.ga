---
layout: api
class: Config_Group
---
<h1>Config_Group</h1>
extends <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>
<br />
extends <a href='/documentation/api/ArrayObject'>ArrayObject</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/IteratorAggregate'>IteratorAggregate</a> | <a href='/documentation/api/Traversable'>Traversable</a> | <a href='/documentation/api/ArrayAccess'>ArrayAccess</a> | <a href='/documentation/api/Serializable'>Serializable</a> | <a href='/documentation/api/Countable'>Countable</a></small>
</p>
<p>
<i><p>The group wrapper acts as an interface to all the config directives
gathered from across the system.</p>

<p>This is the object returned from Kohana_Config::load</p>

<p>Any modifications to configuration items should be done through an instance of this object</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Configuration</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-STD_PROP_LIST'>STD_PROP_LIST</a>
</li>
<li>
<a href='#constant-ARRAY_AS_PROPS'>ARRAY_AS_PROPS</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-_group_name">$_group_name</a>
</li>
<li>
<a href="#property-_parent_instance">$_parent_instance</a>
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
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#as_array">as_array()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#group_name">group_name()</a>
</li>
<li>
<a href="#offsetSet">offsetSet()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#append">append()</a>
</li>
<li>
<a href="#asort">asort()</a>
</li>
<li>
<a href="#count">count()</a>
</li>
<li>
<a href="#exchangeArray">exchangeArray()</a>
</li>
<li>
<a href="#getArrayCopy">getArrayCopy()</a>
</li>
<li>
<a href="#getFlags">getFlags()</a>
</li>
<li>
<a href="#getIterator">getIterator()</a>
</li>
<li>
<a href="#getIteratorClass">getIteratorClass()</a>
</li>
<li>
<a href="#ksort">ksort()</a>
</li>
<li>
<a href="#natcasesort">natcasesort()</a>
</li>
<li>
<a href="#natsort">natsort()</a>
</li>
<li>
<a href="#offsetExists">offsetExists()</a>
</li>
<li>
<a href="#offsetGet">offsetGet()</a>
</li>
<li>
<a href="#offsetUnset">offsetUnset()</a>
</li>
<li>
<a href="#serialize">serialize()</a>
</li>
<li>
<a href="#setFlags">setFlags()</a>
</li>
<li>
<a href="#setIteratorClass">setIteratorClass()</a>
</li>
<li>
<a href="#uasort">uasort()</a>
</li>
<li>
<a href="#uksort">uksort()</a>
</li>
<li>
<a href="#unserialize">unserialize()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-STD_PROP_LIST'>STD_PROP_LIST</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-ARRAY_AS_PROPS'>ARRAY_AS_PROPS</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_group_name'><small>protected</small>  <span class='blue'>string</span> $_group_name</h4>
</dt>
<dd>
 <p>The group this config is for
Used when updating config items</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(0)</span> ""</pre></dd>
<dt>
<h4 id='property-_parent_instance'><small>protected</small>  <span class='blue'>Kohana_Config</span> $_parent_instance</h4>
</dt>
<dd>
 <p>Reference the config object that created this group
Used when updating config</p>
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
<h3 id="__construct"><small>public</small>  __construct(<small>Kohana_Config</small> <span class="param" title=""Owning" instance of Kohana_Config">$instance</span> , <small>string</small> <span class="param" title="The group name">$group</span> [, <small>array</small> <span class="param" title="Group's config">$config</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Constructs the group object.  Kohana_Config passes the config group
and its config items to the object here.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Kohana_Config </span><strong> $instance</strong> <small>required</small> - "Owning" instance of Kohana_Config</li>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - The group name</li>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>array</small><span>(0)</span> </small> - Group's config</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(Kohana_Config $instance, $group, array $config = [])
{
	$this-&gt;_parent_instance = $instance;
	$this-&gt;_group_name      = $group;

	parent::__construct($config, ArrayObject::ARRAY_AS_PROPS);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Return the current group in serialized form.</p>

<pre><code>echo $config;
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __toString()
{
	return serialize($this-&gt;getArrayCopy());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_array"><small>public</small>  as_array()<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Alias for getArrayCopy()</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Array copy of the group&#039;s config 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_array()
{
	return $this-&gt;getArrayCopy();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Array key">$key</span> [, <small>mixed</small> <span class="param" title="Default value">$default</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Get a variable from the configuration or return the default value.</p>

<pre><code>$value = $config-&gt;get($key);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Array key</li>
<li>
 <span class="blue">mixed </span><strong> $default</strong> <small> = <small>NULL</small></small> - Default value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get($key, $default = NULL)
{
	return $this-&gt;offsetExists($key) ? $this-&gt;offsetGet($key) : $default;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="group_name"><small>public</small>  group_name()<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Returns the config group's name</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - The group name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function group_name()
{
	return $this-&gt;_group_name;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offsetSet"><small>public</small>  offsetSet(<small>string</small> <span class="param" title="The key of the config item we're changing">$key</span> , <small>mixed</small> <span class="param" title="The new array value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Overrides ArrayObject::offsetSet()
This method is called when config is changed via</p>

<pre><code>$config-&gt;var = 'asd';

// OR

$config['var'] = 'asd';
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - The key of the config item we're changing</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - The new array value</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offsetSet($key, $value)
{
	$this-&gt;_parent_instance-&gt;_write_config($this-&gt;_group_name, $key, $value);

	return parent::offsetSet($key, $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Array key">$key</span> , <small>mixed</small> <span class="param" title="Array value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Group'>Kohana_Config_Group</a>)</small></h3>
<div class='description'><p>Sets a value in the configuration array.</p>

<pre><code>$config-&gt;set($key, $new_value);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $key</strong> <small>required</small> - Array key</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Array value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($key, $value)
{
	$this-&gt;offsetSet($key, $value);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="append"><small>public</small>  append()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="asort"><small>public</small>  asort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="count"><small>public</small>  count()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="exchangeArray"><small>public</small>  exchangeArray()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getArrayCopy"><small>public</small>  getArrayCopy()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getFlags"><small>public</small>  getFlags()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getIterator"><small>public</small>  getIterator()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="getIteratorClass"><small>public</small>  getIteratorClass()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="ksort"><small>public</small>  ksort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="natcasesort"><small>public</small>  natcasesort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="natsort"><small>public</small>  natsort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="offsetExists"><small>public</small>  offsetExists()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="offsetGet"><small>public</small>  offsetGet()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="offsetUnset"><small>public</small>  offsetUnset()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="serialize"><small>public</small>  serialize()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="setFlags"><small>public</small>  setFlags()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="setIteratorClass"><small>public</small>  setIteratorClass()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="uasort"><small>public</small>  uasort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="uksort"><small>public</small>  uksort()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>

<div class='method'>
<h3 id="unserialize"><small>public</small>  unserialize()<small> (defined in <a href='/documentation/api/ArrayObject'>ArrayObject</a>)</small></h3>
<div class='description'></div>
</div>
</div>