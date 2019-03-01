---
layout: api
class: Controller_Userguide
---
<h1>Controller_Userguide</h1>
extends <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>
<br />
extends <a href='/documentation/api/Controller_Template'>Controller_Template</a>
<br />
extends <a href='/documentation/api/Kohana_Controller_Template'>Kohana_Controller_Template</a>
<br />
extends <a href='/documentation/api/Controller'>Controller</a>
<br />
extends <a href='/documentation/api/Kohana_Controller'>Kohana_Controller</a>
<br />
<p>
<i><p>Kohana user guide and api browser.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Userguide</dd>
<dt>category</dt>
<dd>Controller</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a></p>
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
<li>
<a href="#property-api">$api</a>
</li>
<li>
<a href="#property-guide">$guide</a>
</li>
<li>
<a href="#property-media">$media</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#action_api">action_api()</a>
</li>
<li>
<a href="#action_docs">action_docs()</a>
</li>
<li>
<a href="#action_media">action_media()</a>
</li>
<li>
<a href="#after">after()</a>
</li>
<li>
<a href="#before">before()</a>
</li>
<li>
<a href="#error">error()</a>
</li>
<li>
<a href="#file">file()</a>
</li>
<li>
<a href="#index">index()</a>
</li>
<li>
<a href="#section">section()</a>
</li>
<li>
<a href="#title">title()</a>
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
<a href="#_get_all_menu_markdown">_get_all_menu_markdown()</a>
</li>
<li>
<a href="#_modules">_modules()</a>
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
 <pre class="debug"><small>string</small><span>(18)</span> "userguide/template"</pre></dd>
<dt>
<h4 id='property-api'><small>protected</small>  <span class='blue'></span> $api</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-guide'><small>protected</small>  <span class='blue'></span> $guide</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-media'><small>protected</small>  <span class='blue'></span> $media</h4>
</dt>
<dd>
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
<h3 id="action_api"><small>public</small>  action_api()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function action_api()
{
	// Enable the missing class autoloader.  If a class cannot be found a
	// fake class will be created that extends Kodoc_Missing
	spl_autoload_register([&#039;Kodoc_Missing&#039;, &#039;create_class&#039;]);

	// Get the class from the request
	$class = $this-&gt;request-&gt;param(&#039;class&#039;);

	// If no class was passed to the url, display the API index page
	if ( ! $class)
	{
		$this-&gt;template-&gt;title = &#039;Table of Contents&#039;;

		$this-&gt;template-&gt;content = View::factory(&#039;userguide/api/toc&#039;)
			-&gt;set(&#039;classes&#039;, Kodoc::class_methods())
			-&gt;set(&#039;route&#039;, $this-&gt;request-&gt;route());
	}
	else
	{
		// Create the Kodoc_Class version of this class.
		$_class = Kodoc_Class::factory($class);
		
		// If the class requested and the actual class name are different
		// (different case, orm vs ORM, auth vs Auth) redirect
		if ($_class-&gt;class-&gt;name != $class)
		{
			$this-&gt;redirect($this-&gt;request-&gt;route()-&gt;uri([&#039;class&#039;=&gt;$_class-&gt;class-&gt;name]));
		}

		// If this classes immediate parent is Kodoc_Missing, then it should 404
		if ($_class-&gt;class-&gt;getParentClass() AND $_class-&gt;class-&gt;getParentClass()-&gt;name == &#039;Kodoc_Missing&#039;)
			return $this-&gt;error(&#039;That class was not found. Check your url and make sure that the module with that class is enabled.&#039;);

		// If this classes package has been disabled via the config, 404
		if ( ! Kodoc::show_class($_class))
			return $this-&gt;error(&#039;That class is in package that is hidden.  Check the &lt;code&gt;api_packages&lt;/code&gt; config setting.&#039;);
	
		// Everything is fine, display the class.
		$this-&gt;template-&gt;title = $class;

		$this-&gt;template-&gt;content = View::factory(&#039;userguide/api/class&#039;)
			-&gt;set(&#039;doc&#039;, $_class)
			-&gt;set(&#039;route&#039;, $this-&gt;request-&gt;route());
	}

	// Attach the menu to the template
	$this-&gt;template-&gt;menu = Kodoc::menu();

	// Bind the breadcrumb
	$this-&gt;template-&gt;bind(&#039;breadcrumb&#039;, $breadcrumb);

	// Add the breadcrumb
	$breadcrumb = [];
	$breadcrumb[$this-&gt;guide-&gt;uri([&#039;page&#039; =&gt; NULL])] = &#039;User Guide&#039;;
	$breadcrumb[$this-&gt;request-&gt;route()-&gt;uri()] = &#039;API Browser&#039;;
	$breadcrumb[] = $this-&gt;template-&gt;title;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="action_docs"><small>public</small>  action_docs()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function action_docs()
{
	$module = $this-&gt;request-&gt;param(&#039;module&#039;);
	$page = $this-&gt;request-&gt;param(&#039;page&#039;);

	// Trim trailing slash
	$page = rtrim($page, &#039;/&#039;);

	// If no module provided in the url, show the user guide index page, which lists the modules.
	if ( ! $module)
	{
		return $this-&gt;index();
	}
	
	// If this module&#039;s userguide pages are disabled, show the error page
	if ( ! Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.enabled&#039;))
	{
		return $this-&gt;error(&#039;That module doesn\&#039;t exist, or has userguide pages disabled.&#039;);
	}
	
	// Prevent &quot;guide/module&quot; and &quot;guide/module/index&quot; from having duplicate content
	if ($page == &#039;index&#039;)
	{
		return $this-&gt;error(&#039;Userguide page not found&#039;);
	}
	
	// If a module is set, but no page was provided in the url, show the index page
	if ( ! $page)
	{
		$page = &#039;index&#039;;
	}

	// Find the markdown file for this page
	$file = $this-&gt;file($module.&#039;/&#039;.$page);

	// If it&#039;s not found, show the error page
	if ( ! $file)
	{
		return $this-&gt;error(&#039;Userguide page not found&#039;);
	}
	
	// Namespace the markdown parser
	Kodoc_Markdown::$base_url  = URL::site($this-&gt;guide-&gt;uri()).&#039;/&#039;.$module.&#039;/&#039;;
	Kodoc_Markdown::$image_url = URL::site($this-&gt;media-&gt;uri()).&#039;/&#039;.$module.&#039;/&#039;;

	// Set the page title
	$this-&gt;template-&gt;title = ($page == &#039;index&#039;)
		? Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.name&#039;)
		: $this-&gt;title($page);

	// Parse the page contents into the template
	Kodoc_Markdown::$show_toc = TRUE;
	$this-&gt;template-&gt;content = Kodoc_Markdown::markdown(file_get_contents($file));
	Kodoc_Markdown::$show_toc = FALSE;

	// Attach this module&#039;s menu to the template
	$this-&gt;template-&gt;menu = Kodoc_Markdown::markdown($this-&gt;_get_all_menu_markdown());

	// Bind the breadcrumb
	$this-&gt;template-&gt;bind(&#039;breadcrumb&#039;, $breadcrumb);
	
	// Bind the copyright
	$this-&gt;template-&gt;copyright = Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.copyright&#039;);

	// Add the breadcrumb trail
	$breadcrumb = [];
	$breadcrumb[$this-&gt;guide-&gt;uri()] = &#039;User Guide&#039;;
	$breadcrumb[$this-&gt;guide-&gt;uri([&#039;module&#039; =&gt; $module])] = Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.name&#039;);
	
	// TODO try and get parent category names (from menu).  Regex magic or javascript dom stuff perhaps?
	
	// Only add the current page title to breadcrumbs if it isn&#039;t the index, otherwise we get repeats.
	if ($page != &#039;index&#039;)
	{
		$breadcrumb[] = $this-&gt;template-&gt;title;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="action_media"><small>public</small>  action_media()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function action_media()
{
	// Get the file path from the request
	$file = $this-&gt;request-&gt;param(&#039;file&#039;);

	// Find the file extension
	$ext = pathinfo($file, PATHINFO_EXTENSION);

	// Remove the extension from the filename
	$file = substr($file, 0, -(strlen($ext) + 1));

	if ($file = Kohana::find_file(&#039;media/guide&#039;, $file, $ext))
	{
		// Check if the browser sent an &quot;if-none-match: &lt;etag&gt;&quot; header, and tell if the file hasn&#039;t changed
		$this-&gt;check_cache(sha1($this-&gt;request-&gt;uri()).filemtime($file));
		
		// Send the file content as the response
		$this-&gt;response-&gt;body(file_get_contents($file));

		// Set the proper headers to allow caching
		$this-&gt;response-&gt;headers(&#039;content-length&#039;, filesize($file));
		$this-&gt;response-&gt;headers(&#039;content-type&#039;,  File::mime_by_ext($ext));
		$this-&gt;response-&gt;headers(&#039;last-modified&#039;, date(&#039;r&#039;, filemtime($file)));
	}
	else
	{
		// Return a 404 status
		$this-&gt;response-&gt;status(404);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="after"><small>public</small>  after()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'><p>Assigns the template <a href="/index.php/">View</a> as the request response.</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function after()
{
	if ($this-&gt;auto_render)
	{
		// Get the media route
		$media = Route::get(&#039;docs/media&#039;);

		// Add styles
		$this-&gt;template-&gt;styles = [
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;css/print.css&#039;])  =&gt; &#039;print&#039;,
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;css/screen.css&#039;]) =&gt; &#039;screen&#039;,
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;css/kodoc.css&#039;])  =&gt; &#039;screen&#039;,
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;css/shCore.css&#039;]) =&gt; &#039;screen&#039;,
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;css/shThemeKodoc.css&#039;]) =&gt; &#039;screen&#039;,
		];

		// Add scripts
		$this-&gt;template-&gt;scripts = [
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;js/jquery.min.js&#039;]),
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;js/jquery.cookie.js&#039;]),
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;js/kodoc.js&#039;]),
			// Syntax Highlighter
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;js/shCore.js&#039;]),
			$media-&gt;uri([&#039;file&#039; =&gt; &#039;js/shBrushPhp.js&#039;]),
		];

		// Add languages
		$this-&gt;template-&gt;translations = Kohana::message(&#039;userguide&#039;, &#039;translations&#039;);
	}

	return parent::after();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="before"><small>public</small>  before()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'><p>Loads the template <a href="/index.php/">View</a> object.</p>
</div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function before()
{
	parent::before();

	if ($this-&gt;request-&gt;action() === &#039;media&#039;)
	{
		// Do not template media files
		$this-&gt;auto_render = FALSE;
	}
	else
	{
		// Grab the necessary routes
		$this-&gt;media = Route::get(&#039;docs/media&#039;);
		$this-&gt;guide = Route::get(&#039;docs/guide&#039;);

		// Set the base URL for links and images
		Kodoc_Markdown::$base_url  = URL::site($this-&gt;guide-&gt;uri()).&#039;/&#039;;
		Kodoc_Markdown::$image_url = URL::site($this-&gt;media-&gt;uri()).&#039;/&#039;;
	}

	// Default show_comments to config value
	$this-&gt;template-&gt;show_comments = Kohana::$config-&gt;load(&#039;userguide.show_comments&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="error"><small>public</small>  error()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function error($message)
{
	$this-&gt;response-&gt;status(404);
	$this-&gt;template-&gt;title = &quot;Userguide - Error&quot;;
	$this-&gt;template-&gt;content = View::factory(&#039;userguide/error&#039;,[&#039;message&#039; =&gt; $message]);
	
	// Don&#039;t show disqus on error pages
	$this-&gt;template-&gt;show_comments = FALSE;

	// If we are in a module and that module has a menu, show that
	if ($module = $this-&gt;request-&gt;param(&#039;module&#039;) AND $menu = $this-&gt;file($module.&#039;/menu&#039;) AND Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.enabled&#039;))
	{
		// Namespace the markdown parser
		Kodoc_Markdown::$base_url  = URL::site($this-&gt;guide-&gt;uri()).&#039;/&#039;.$module.&#039;/&#039;;
		Kodoc_Markdown::$image_url = URL::site($this-&gt;media-&gt;uri()).&#039;/&#039;.$module.&#039;/&#039;;

		$this-&gt;template-&gt;menu = Kodoc_Markdown::markdown($this-&gt;_get_all_menu_markdown());
		$this-&gt;template-&gt;breadcrumb = [
			$this-&gt;guide-&gt;uri() =&gt; &#039;User Guide&#039;,
			$this-&gt;guide-&gt;uri([&#039;module&#039; =&gt; $module]) =&gt; Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$module.&#039;.name&#039;),
			&#039;Error&#039;
		];
	}
	// If we are in the api browser, show the menu and show the api browser in the breadcrumbs
	elseif (Route::name($this-&gt;request-&gt;route()) == &#039;docs/api&#039;)
	{
		$this-&gt;template-&gt;menu = Kodoc::menu();

		// Bind the breadcrumb
		$this-&gt;template-&gt;breadcrumb = [
			$this-&gt;guide-&gt;uri([&#039;page&#039; =&gt; NULL]) =&gt; &#039;User Guide&#039;,
			$this-&gt;request-&gt;route()-&gt;uri() =&gt; &#039;API Browser&#039;,
			&#039;Error&#039;
		];
	}
	// Otherwise, show the userguide module menu on the side
	else
	{
		$this-&gt;template-&gt;menu = View::factory(&#039;userguide/menu&#039;,[&#039;modules&#039; =&gt; $this-&gt;_modules()]);
		$this-&gt;template-&gt;breadcrumb = [$this-&gt;request-&gt;route()-&gt;uri() =&gt; &#039;User Guide&#039;,&#039;Error&#039;];
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="file"><small>public</small>  file(<small>string</small> <span class="param" title="The relative URL of the guide page">$page</span> )<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'><p>Locates the appropriate markdown file for a given guide page. Page URLS
can be specified in one of three forms:</p>

<ul>
<li>userguide/adding</li>
<li>userguide/adding.md</li>
<li>userguide/adding.markdown</li>
</ul>

<p>In every case, the userguide will search the cascading file system paths
for the file guide/userguide/adding.md.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $page</strong> <small>required</small> - The relative URL of the guide page</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function file($page)
{

	// Strip optional .md or .markdown suffix from the passed filename
	$info = pathinfo($page);
	if (isset($info[&#039;extension&#039;])
		AND (($info[&#039;extension&#039;] === &#039;md&#039;) OR ($info[&#039;extension&#039;] === &#039;markdown&#039;)))
	{
		$page = $info[&#039;dirname&#039;].DIRECTORY_SEPARATOR.$info[&#039;filename&#039;];
	}
	return Kohana::find_file(&#039;guide&#039;, $page, &#039;md&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="index"><small>public</small>  index()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function index()
{
	$this-&gt;template-&gt;title = &quot;Userguide&quot;;
	$this-&gt;template-&gt;breadcrumb = [&#039;User Guide&#039;];
	$this-&gt;template-&gt;content = View::factory(&#039;userguide/index&#039;, [&#039;modules&#039; =&gt; $this-&gt;_modules()]);
	$this-&gt;template-&gt;menu = View::factory(&#039;userguide/menu&#039;, [&#039;modules&#039; =&gt; $this-&gt;_modules()]);
	
	// Don&#039;t show disqus on the index page
	$this-&gt;template-&gt;show_comments = FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="section"><small>public</small>  section()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function section($page)
{
	$markdown = $this-&gt;_get_all_menu_markdown();
	
	if (preg_match(&#039;~\*{2}(.+?)\*{2}[^*]+\[[^\]]+\]\(&#039;.preg_quote($page).&#039;\)~mu&#039;, $markdown, $matches))
	{
		return $matches[1];
	}
	
	return $page;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="title"><small>public</small>  title()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function title($page)
{
	$markdown = $this-&gt;_get_all_menu_markdown();
	
	if (preg_match(&#039;~\[([^\]]+)\]\(&#039;.preg_quote($page).&#039;\)~mu&#039;, $markdown, $matches))
	{
		// Found a title for this link
		return $matches[1];
	}
	
	return $page;
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
<h3 id="_get_all_menu_markdown"><small>protected</small>  _get_all_menu_markdown()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _get_all_menu_markdown()
{
	// Only do this once per request...
	static $markdown = &#039;&#039;;
	
	if (empty($markdown))
	{
		// Get menu items
		$file = $this-&gt;file($this-&gt;request-&gt;param(&#039;module&#039;).&#039;/menu&#039;);

		if ($file AND $text = file_get_contents($file))
		{
			// Add spans around non-link categories. This is a terrible hack.
			$text = preg_replace(&#039;/^(\s*[\-\*\+]\s*)([^\[\]]+)$/m&#039;,&#039;$1&lt;span&gt;$2&lt;/span&gt;&#039;,$text);
			$markdown .= $text;
		}
		
	}
	
	return $markdown;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_modules"><small>protected</small>  _modules()<small> (defined in <a href='/documentation/api/Kohana_Controller_Userguide'>Kohana_Controller_Userguide</a>)</small></h3>
<div class='description'></div>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _modules()
{
	$modules = array_reverse(Kohana::$config-&gt;load(&#039;userguide.modules&#039;));
	
	if (isset($modules[&#039;kohana&#039;]))
	{
		$kohana = $modules[&#039;kohana&#039;];
		unset($modules[&#039;kohana&#039;]);
		$modules = array_merge([&#039;kohana&#039; =&gt; $kohana], $modules);
	}
	
	// Remove modules that have been disabled via config
	foreach ($modules as $key =&gt; $value)
	{
		if ( ! Kohana::$config-&gt;load(&#039;userguide.modules.&#039;.$key.&#039;.enabled&#039;))
		{
			unset($modules[$key]);
		}
	}
	
	return $modules;
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