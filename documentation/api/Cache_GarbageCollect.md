---
layout: api
class: Cache_GarbageCollect
---
<h1>Cache_GarbageCollect</h1>
extends <a href='/documentation/api/Kohana_Cache_GarbageCollect'>Kohana_Cache_GarbageCollect</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Cache_GarbageCollect'>Kohana_Cache_GarbageCollect</a></small>
</p>
<p>
<i><p>Garbage Collection interface for caches that have no GC methods
of their own, such as <a href="/index.php/">Cache_File</a> and <a href="/index.php/">Cache_Sqlite</a>. Memory based
cache systems clean their own caches periodically.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Cache</dd>
<dt>category</dt>
<dd>Base</dd>
<dt>version</dt>
<dd>2.0</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>copyright</dt>
<dd>(c) Kohana Team</dd>
<dt>license</dt>
<dd>https://koseven.ga/LICENSE.md</dd>
<dt>since</dt>
<dd>3.0.8</dd>
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
<a href="#garbage_collect">garbage_collect()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="garbage_collect"><small>abstract public</small>  garbage_collect()<small> (defined in <a href='/documentation/api/Kohana_Cache_GarbageCollect'>Kohana_Cache_GarbageCollect</a>)</small></h3>
<div class='description'><p>Garbage collection method that cleans any expired
cache entries from the cache.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function garbage_collect();</code>
</pre>
</div>
</div>
</div>