---
layout: api
class: Kohana_HTTP_Message
---
<h1>Kohana_HTTP_Message</h1>
<p>
<i><p>The HTTP Interaction interface providing the core HTTP methods that
should be implemented by any HTTP request or response class.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>HTTP</dd>
<dt>author</dt>
<dd>Kohana Team</dd>
<dt>since</dt>
<dd>3.1.0</dd>
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
<a href="#body">body()</a>
</li>
<li>
<a href="#headers">headers()</a>
</li>
<li>
<a href="#protocol">protocol()</a>
</li>
<li>
<a href="#render">render()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="body"><small>abstract public</small>  body([ <small>string</small> <span class="param" title="Content to set to the object">$content</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP body to the request or response. The body is
included after the header, separated by a single empty new line.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $content</strong> <small> = <small>NULL</small></small> - Content to set to the object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li><li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function body($content = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="headers"><small>abstract public</small>  headers([ <small>mixed</small> <span class="param" title="Key or array of key/value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to the supplied key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP headers to the request or response. All headers
are included immediately after the HTTP protocol definition during
transmission. This method provides a simple array or key/value
interface to the headers.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or array of key/value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to the supplied key</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function headers($key = NULL, $value = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="protocol"><small>abstract public</small>  protocol([ <small>string</small> <span class="param" title="Protocol to set to the request/response">$protocol</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP protocol. The standard protocol to use
is <code>HTTP/1.1</code>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $protocol</strong> <small> = <small>NULL</small></small> - Protocol to set to the request/response</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function protocol($protocol = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="render"><small>abstract public</small>  render()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a>)</small></h3>
<div class='description'><p>Renders the HTTP_Interaction to a string, producing</p>

<ul>
<li>Protocol</li>
<li>Headers</li>
<li>Body</li>
</ul>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function render();</code>
</pre>
</div>
</div>
</div>