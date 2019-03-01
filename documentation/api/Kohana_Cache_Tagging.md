---
layout: api
class: Kohana_Cache_Tagging
---
<h1>Kohana_Cache_Tagging</h1>
<p>
<i><p>Kohana Cache Tagging Interface</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Cache</dd>
<dt>category</dt>
<dd>Base</dd>
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
<a href="#delete_tag">delete_tag()</a>
</li>
<li>
<a href="#find">find()</a>
</li>
<li>
<a href="#set_with_tags">set_with_tags()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="delete_tag"><small>abstract public</small>  delete_tag(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Tagging'>Kohana_Cache_Tagging</a>)</small></h3>
<div class='description'><p>Delete cache entries based on a tag</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $tag</strong> <small>required</small> - Tag</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete_tag($tag);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find"><small>abstract public</small>  find(<small>string</small> <span class="param" title="Tag">$tag</span> )<small> (defined in <a href='/documentation/api/Kohana_Cache_Tagging'>Kohana_Cache_Tagging</a>)</small></h3>
<div class='description'><p>Find cache entries based on a tag</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $tag</strong> <small>required</small> - Tag</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function find($tag);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_with_tags"><small>abstract public</small>  set_with_tags(<small>string</small> <span class="param" title="Id">$id</span> , <small>mixed</small> <span class="param" title="Data">$data</span> [, <small>integer</small> <span class="param" title="Lifetime [Optional]">$lifetime</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Tags [Optional]">$tags</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Tagging'>Kohana_Cache_Tagging</a>)</small></h3>
<div class='description'><p>Set a value based on an id. Optionally add tags.</p>

<p>Note : Some caching engines do not support
tagging</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id</li>
<li>
 <span class="blue">mixed </span><strong> $data</strong> <small>required</small> - Data</li>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Lifetime [Optional]</li>
<li>
 <span class="blue">array </span><strong> $tags</strong> <small> = <small>NULL</small></small> - Tags [Optional]</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_with_tags($id, $data, $lifetime = NULL, array $tags = NULL);</code>
</pre>
</div>
</div>
</div>