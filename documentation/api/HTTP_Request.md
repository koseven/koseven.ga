---
layout: api
class: HTTP_Request
---
<h1>HTTP_Request</h1>
extends <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a>
<br />
extends <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a>
<br />
extends <a href='/documentation/api/HTTP_Message'>HTTP_Message</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a> | <a href='/documentation/api/Kohana_HTTP_Message'>Kohana_HTTP_Message</a> | <a href='/documentation/api/HTTP_Message'>HTTP_Message</a></small>
</p>
<p>
<i><p>A HTTP Request specific interface that adds the methods required
by HTTP requests. Over and above <a href="/index.php/">Kohana_HTTP_Interaction</a>, this
interface provides method, uri, get and post methods.</p>
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
<a href='#constant-GET'>GET</a>
</li>
<li>
<a href='#constant-POST'>POST</a>
</li>
<li>
<a href='#constant-PATCH'>PATCH</a>
</li>
<li>
<a href='#constant-PUT'>PUT</a>
</li>
<li>
<a href='#constant-DELETE'>DELETE</a>
</li>
<li>
<a href='#constant-HEAD'>HEAD</a>
</li>
<li>
<a href='#constant-OPTIONS'>OPTIONS</a>
</li>
<li>
<a href='#constant-TRACE'>TRACE</a>
</li>
<li>
<a href='#constant-CONNECT'>CONNECT</a>
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
<a href="#method">method()</a>
</li>
<li>
<a href="#post">post()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#uri">uri()</a>
</li>
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
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-GET'>GET</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(3)</span> "GET"</pre></dd>
<dt>
<h4 id='constant-POST'>POST</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(4)</span> "POST"</pre></dd>
<dt>
<h4 id='constant-PATCH'>PATCH</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "PATCH"</pre></dd>
<dt>
<h4 id='constant-PUT'>PUT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(3)</span> "PUT"</pre></dd>
<dt>
<h4 id='constant-DELETE'>DELETE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(6)</span> "DELETE"</pre></dd>
<dt>
<h4 id='constant-HEAD'>HEAD</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(4)</span> "HEAD"</pre></dd>
<dt>
<h4 id='constant-OPTIONS'>OPTIONS</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(7)</span> "OPTIONS"</pre></dd>
<dt>
<h4 id='constant-TRACE'>TRACE</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(5)</span> "TRACE"</pre></dd>
<dt>
<h4 id='constant-CONNECT'>CONNECT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(7)</span> "CONNECT"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="method"><small>abstract public</small>  method([ <small>string</small> <span class="param" title="Method to use for this request">$method</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a>)</small></h3>
<div class='description'><p>Gets or sets the HTTP method. Usually GET, POST, PUT or DELETE in
traditional CRUD applications.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $method</strong> <small> = <small>NULL</small></small> - Method to use for this request</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function method($method = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="post"><small>abstract public</small>  post([ <small>mixed</small> <span class="param" title="Key or key value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to a key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP POST parameters to the request.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or key value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to a key</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function post($key = NULL, $value = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>abstract public</small>  query([ <small>mixed</small> <span class="param" title="Key or key value pairs to set">$key</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Value to set to a key">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a>)</small></h3>
<div class='description'><p>Gets or sets HTTP query string.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $key</strong> <small> = <small>NULL</small></small> - Key or key value pairs to set</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small> = <small>NULL</small></small> - Value to set to a key</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function query($key = NULL, $value = NULL);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="uri"><small>abstract public</small>  uri()<small> (defined in <a href='/documentation/api/Kohana_HTTP_Request'>Kohana_HTTP_Request</a>)</small></h3>
<div class='description'><p>Gets the URI of this request, optionally allows setting
of <a href="/index.php/">Route</a> specific parameters during the URI generation.
If no parameters are passed, the request will use the
default values defined in the Route.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function uri();</code>
</pre>
</div>
</div>

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