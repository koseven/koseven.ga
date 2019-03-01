---
layout: api
class: Kohana_Config_Reader
---
<h1>Kohana_Config_Reader</h1>
extends <a href='/documentation/api/Kohana_Config_Source'>Kohana_Config_Source</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Config_Source'>Kohana_Config_Source</a></small>
</p>
<p>
<i><p>Interface for config readers</p>
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
<a href="#load">load()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="load"><small>abstract public</small>  load(<small>string</small> <span class="param" title="Configuration group">$group</span> )<small> (defined in <a href='/documentation/api/Kohana_Config_Reader'>Kohana_Config_Reader</a>)</small></h3>
<div class='description'><p>Tries to load the specified configuration group</p>

<p>Returns FALSE if group does not exist or an array if it does</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $group</strong> <small>required</small> - Configuration group</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean|array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function load($group);</code>
</pre>
</div>
</div>
</div>