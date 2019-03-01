---
layout: api
class: Cache_Arithmetic
---
<h1>Cache_Arithmetic</h1>
extends <a href='/documentation/api/Kohana_Cache_Arithmetic'>Kohana_Cache_Arithmetic</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_Cache_Arithmetic'>Kohana_Cache_Arithmetic</a></small>
</p>
<p>
<i><p>Kohana Cache Arithmetic Interface, for basic cache integer based
arithmetic, addition and subtraction</p>
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
<dt>since</dt>
<dd>3.2.0</dd>
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
<a href="#decrement">decrement()</a>
</li>
<li>
<a href="#increment">increment()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="decrement"><small>abstract public</small>  decrement(<small>string</small> <span class="param" title="Id of cache entry to decrement">$id</span> [, <small>int</small> <span class="param" title="Step value to decrement by">$step</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Arithmetic'>Kohana_Cache_Arithmetic</a>)</small></h3>
<div class='description'><p>Decrements a given value by the step value supplied.
Useful for shared counters and other persistent integer based
tracking.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry to decrement</li>
<li>
 <span class="blue">int </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Step value to decrement by</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li><li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function decrement($id, $step = 1);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="increment"><small>abstract public</small>  increment(<small>string</small> <span class="param" title="Id of cache entry to increment">$id</span> [, <small>int</small> <span class="param" title="Step value to increment by">$step</span> <small>= <small>integer</small> 1</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Cache_Arithmetic'>Kohana_Cache_Arithmetic</a>)</small></h3>
<div class='description'><p>Increments a given value by the step value supplied.
Useful for shared counters and other persistent integer based
tracking.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $id</strong> <small>required</small> - Id of cache entry to increment</li>
<li>
 <span class="blue">int </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Step value to increment by</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li><li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function increment($id, $step = 1);</code>
</pre>
</div>
</div>
</div>