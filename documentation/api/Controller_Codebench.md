---
layout: api
class: Controller_Codebench
---
<h1>Controller_Codebench</h1>
extends <a href='/documentation/api/Kohana_Controller_Template'>Kohana_Controller_Template</a>
<br />
extends <a href='/documentation/api/Controller'>Controller</a>
<br />
extends <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>
<br />
<p>
<i><p>Codebench — A benchmarking module.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Codebench</dd>
<dt>category</dt>
<dd>Controllers</dd>
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
<a href="#property-auto_render">$auto_render</a>
</li>
<li>
<a href="#property-request">$request</a>
</li>
<li>
<a href="#property-response">$response</a>
</li>
<li>
<a href="#property-template">$template</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#action_index">action_index()</a>
</li>
<li>
<a href="#after">after()</a>
</li>
<li>
<a href="#before">before()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#execute">execute()</a>
</li>
<li>
<a href="#redirect">redirect()</a>
</li>
<li>
<a href="#check_cache">check_cache()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-auto_render'><small>public</small>  <span class='blue'>boolean</span> $auto_render</h4>
</dt>
<dd>
 <p>auto render template</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-request'><small>public</small>  <span class='blue'>Request</span> $request</h4>
</dt>
<dd>
 <p>Request that created the controller</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-response'><small>public</small>  <span class='blue'>Response</span> $response</h4>
</dt>
<dd>
 <p>The response that will be returned from controller</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-template'><small>public</small>  <span class='blue'></span> $template</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(9)</span> "codebench"</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="action_index"><small>public</small>  action_index()<small> (defined in <a href='/documentation/api/Controller_Codebench'>Controller_Codebench</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function action_index()
{
	$class = $this-&gt;request-&gt;param(&#039;class&#039;);

	// Convert submitted class name to URI segment
	if (isset($_POST[&#039;class&#039;]))
	{
		throw HTTP_Exception::factory(302)-&gt;location(&#039;codebench/&#039;.trim($_POST[&#039;class&#039;]));
	}

	// Pass the class name on to the view
	$this-&gt;template-&gt;class = (string) $class;

	// Try to load the class, then run it
	if (Kohana::auto_load($class) === TRUE)
	{
		$codebench = new $class;
		$this-&gt;template-&gt;codebench = $codebench-&gt;run();
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="after"><small>public</small>  after()<small> (defined in <a href='/documentation/api/Kohana_Controller_Template'>Kohana_Controller_Template</a>)</small></h3>
<div class='description'><p>Assigns the template <a href="/index.php/">View</a> as the request response.</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function after()
{
	if ($this-&gt;auto_render === TRUE)
	{
		$this-&gt;response-&gt;body($this-&gt;template-&gt;render());
	}

	parent::after();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="before"><small>public</small>  before()<small> (defined in <a href='/documentation/api/Kohana_Controller_Template'>Kohana_Controller_Template</a>)</small></h3>
<div class='description'><p>Loads the template <a href="/index.php/">View</a> object.</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function before()
{
	parent::before();

	if ($this-&gt;auto_render === TRUE)
	{
		// Load the template
		$this-&gt;template = View::factory($this-&gt;template);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>Request</small> <span class="param" title="Request that created the controller">$request</span> , <small>Response</small> <span class="param" title="The request's response">$response</span> )<small> (defined in <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>)</small></h3>
<div class='description'><p>Creates a new controller instance. Each controller must be constructed
with the request object that created it.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Request </span><strong> $request</strong> <small>required</small> - Request that created the controller</li>
<li>
 <span class="blue">Response </span><strong> $response</strong> <small>required</small> - The request's response</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct(Request $request, Response $response)
{
	// Assign the request to the controller
	$this-&gt;request = $request;

	// Assign a response to the controller
	$this-&gt;response = $response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="execute"><small>public</small>  execute()<small> (defined in <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>)</small></h3>
<div class='description'><p>Executes the given action and calls the <a href="#before">Controller::before</a> and <a href="#after">Controller::after</a> methods.</p>

<p>Can also be used to catch exceptions from actions in a single place.</p>

<ol>
<li>Before the controller action is called, the <a href="#before">Controller::before</a> method
will be called.</li>
<li>Next the controller action will be called.</li>
<li>After the controller action is called, the <a href="#after">Controller::after</a> method
will be called.</li>
</ol>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">HTTP_Exception_404</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function execute()
{
	// Execute the &quot;before action&quot; method
	$this-&gt;before();

	// Determine the action to use
	$action = &#039;action_&#039;.$this-&gt;request-&gt;action();

	// If the action doesn&#039;t exist, it&#039;s a 404
	if ( ! method_exists($this, $action))
	{
		throw HTTP_Exception::factory(404,
			&#039;The requested URL :uri was not found on this server.&#039;,
			[&#039;:uri&#039; =&gt; $this-&gt;request-&gt;uri()]
		)-&gt;request($this-&gt;request);
	}

	// Execute the action itself
	$this-&gt;{$action}();

	// Execute the &quot;after action&quot; method
	$this-&gt;after();

	// Return the response
	return $this-&gt;response;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="redirect"><small>public static</small>  redirect([ <small>string</small> <span class="param" title="URI to redirect to">$uri</span> <small>= <small>string</small><span>(0)</span> ""</small> , <small>int</small> <span class="param" title="HTTP Status code to use for the redirect">$code</span> <small>= <small>integer</small> 302</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>)</small></h3>
<div class='description'><p>Issues a HTTP redirect.</p>

<p>Proxies to the <a href="#redirect">HTTP::redirect</a> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $uri</strong> <small> = <small>string</small><span>(0)</span> ""</small> - URI to redirect to</li>
<li>
 <span class="blue">int </span><strong> $code</strong> <small> = <small>integer</small> 302</small> - HTTP Status code to use for the redirect</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">HTTP_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function redirect($uri = &#039;&#039;, $code = 302)
{
	return HTTP::redirect( (string) $uri, $code);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check_cache"><small>protected</small>  check_cache([ <small>string</small> <span class="param" title="Resource Etag">$etag</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>)</small></h3>
<div class='description'><p>Checks the browser cache to see the response needs to be returned,
execution will halt and a 304 Not Modified will be sent if the
browser cache is up to date.</p>

<pre><code>$this-&gt;check_cache(sha1($content));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $etag</strong> <small> = <small>NULL</small></small> - Resource Etag</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Response</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function check_cache($etag = NULL)
{
	return HTTP::check_cache($this-&gt;request, $this-&gt;response, $etag);
}</code>
</pre>
</div>
</div>
</div>