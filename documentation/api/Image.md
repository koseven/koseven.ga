---
layout: api
class: Image
---
<h1>Image</h1>
extends <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>
<br />
<p>
<i><p>Image manipulation support. Allows images to be resized, cropped, etc.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Image</dd>
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
<div class='callout-block callout-info'>
<div class='icon-holder'>
<i class='fas fa-info-circle'></i>
</div>
<div class='content'>
<h4 class='callout-title'>Information</h4>
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Image'>Kohana_Image</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-NONE'>NONE</a>
</li>
<li>
<a href='#constant-WIDTH'>WIDTH</a>
</li>
<li>
<a href='#constant-HEIGHT'>HEIGHT</a>
</li>
<li>
<a href='#constant-AUTO'>AUTO</a>
</li>
<li>
<a href='#constant-INVERSE'>INVERSE</a>
</li>
<li>
<a href='#constant-PRECISE'>PRECISE</a>
</li>
<li>
<a href='#constant-HORIZONTAL'>HORIZONTAL</a>
</li>
<li>
<a href='#constant-VERTICAL'>VERTICAL</a>
</li>
<li>
<a href='#constant-IMAGETYPE_WEBP'>IMAGETYPE_WEBP</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-default_driver">$default_driver</a>
</li>
<li>
<a href="#property-file">$file</a>
</li>
<li>
<a href="#property-height">$height</a>
</li>
<li>
<a href="#property-mime">$mime</a>
</li>
<li>
<a href="#property-type">$type</a>
</li>
<li>
<a href="#property-width">$width</a>
</li>
<li>
<a href="#property-_checked">$_checked</a>
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
<a href="#background">background()</a>
</li>
<li>
<a href="#crop">crop()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#flip">flip()</a>
</li>
<li>
<a href="#reflection">reflection()</a>
</li>
<li>
<a href="#render">render()</a>
</li>
<li>
<a href="#resize">resize()</a>
</li>
<li>
<a href="#rotate">rotate()</a>
</li>
<li>
<a href="#save">save()</a>
</li>
<li>
<a href="#sharpen">sharpen()</a>
</li>
<li>
<a href="#watermark">watermark()</a>
</li>
<li>
<a href="#_do_background">_do_background()</a>
</li>
<li>
<a href="#_do_crop">_do_crop()</a>
</li>
<li>
<a href="#_do_flip">_do_flip()</a>
</li>
<li>
<a href="#_do_reflection">_do_reflection()</a>
</li>
<li>
<a href="#_do_render">_do_render()</a>
</li>
<li>
<a href="#_do_resize">_do_resize()</a>
</li>
<li>
<a href="#_do_rotate">_do_rotate()</a>
</li>
<li>
<a href="#_do_save">_do_save()</a>
</li>
<li>
<a href="#_do_sharpen">_do_sharpen()</a>
</li>
<li>
<a href="#_do_watermark">_do_watermark()</a>
</li>
<li>
<a href="#image_type_to_mime_type">image_type_to_mime_type()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-NONE'>NONE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-WIDTH'>WIDTH</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2</pre></dd>
<dt>
<h4 id='constant-HEIGHT'>HEIGHT</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 3</pre></dd>
<dt>
<h4 id='constant-AUTO'>AUTO</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 4</pre></dd>
<dt>
<h4 id='constant-INVERSE'>INVERSE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 5</pre></dd>
<dt>
<h4 id='constant-PRECISE'>PRECISE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 6</pre></dd>
<dt>
<h4 id='constant-HORIZONTAL'>HORIZONTAL</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 17</pre></dd>
<dt>
<h4 id='constant-VERTICAL'>VERTICAL</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 18</pre></dd>
<dt>
<h4 id='constant-IMAGETYPE_WEBP'>IMAGETYPE_WEBP</h4>
</dt>
<dd><pre class="debug"><small>integer</small> -1</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-default_driver'><small>public static</small>  <span class='blue'>string</span> $default_driver</h4>
</dt>
<dd>
 <p>default driver: GD, ImageMagick, etc</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(2)</span> "GD"</pre></dd>
<dt>
<h4 id='property-file'><small>public</small>  <span class='blue'>string</span> $file</h4>
</dt>
<dd>
 <p>image file path</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-height'><small>public</small>  <span class='blue'>integer</span> $height</h4>
</dt>
<dd>
 <p>image height</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-mime'><small>public</small>  <span class='blue'>string</span> $mime</h4>
</dt>
<dd>
 <p>mime type of the image</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-type'><small>public</small>  <span class='blue'>integer</span> $type</h4>
</dt>
<dd>
 <p>one of the IMAGETYPE_* constants</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-width'><small>public</small>  <span class='blue'>integer</span> $width</h4>
</dt>
<dd>
 <p>image width</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_checked'><small>protected static</small>  <span class='blue'></span> $_checked</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct(<small>string</small> <span class="param" title="Image file path">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Loads information about the image. Will throw an exception if the image
does not exist or is not an image.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - Image file path</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($file)
{
	try
	{
		// Get the real path to the file
		$file = realpath($file);

		// Get the image information
		$info = getimagesize($file);
	}
	catch (Exception $e)
	{
		// Ignore all errors while reading the image
	}

	if (empty($file) OR empty($info))
	{
		throw new Kohana_Exception(&#039;Not an image or invalid image: :file&#039;,
			[&#039;:file&#039; =&gt; Debug::path($file)]);
	}

	// Store the image information
	$this-&gt;file   = $file;
	$this-&gt;width  = $info[0];
	$this-&gt;height = $info[1];
	$this-&gt;type   = $info[2];
	$this-&gt;mime   = image_type_to_mime_type($this-&gt;type);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Render the current image.</p>

<pre><code>echo $image;
</code></pre>

<p class="note">The output of this function is binary and must be rendered with the
appropriate Content-Type header or it will not be displayed correctly!</p>
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
	try
	{
		// Render the current image
		return $this-&gt;render();
	}
	catch (Exception $e)
	{
		if (is_object(Kohana::$log))
		{
			// Get the text of the exception
			$error = Kohana_Exception::text($e);

			// Add this exception to the log
			Kohana::$log-&gt;add(Log::ERROR, $error);
		}

		// Showing any kind of error will be &quot;inside&quot; image data
		return &#039;&#039;;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="background"><small>public</small>  background(<small>string</small> <span class="param" title="Hexadecimal color value">$color</span> [, <small>integer</small> <span class="param" title="Background opacity: 0-100">$opacity</span> <small>= <small>integer</small> 100</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Set the background color of an image. This is only useful for images
with alpha transparency.</p>

<pre><code>// Make the image background black
$image-&gt;background('#000');

// Make the image background black with 50% opacity
$image-&gt;background('#000', 50);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $color</strong> <small>required</small> - Hexadecimal color value</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small> = <small>integer</small> 100</small> - Background opacity: 0-100</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_background">Image::_do_background</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function background($color, $opacity = 100)
{
	if ($color[0] === &#039;#&#039;)
	{
		// Remove the pound
		$color = substr($color, 1);
	}

	if (strlen($color) === 3)
	{
		// Convert shorthand into longhand hex notation
		$color = preg_replace(&#039;/./&#039;, &#039;$0$0&#039;, $color);
	}

	// Convert the hex into RGB values
	list ($r, $g, $b) = array_map(&#039;hexdec&#039;, str_split($color, 2));

	// The opacity must be in the range of 0 to 100
	$opacity = min(max($opacity, 0), 100);

	$this-&gt;_do_background($r, $g, $b, $opacity);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="crop"><small>public</small>  crop(<small>integer</small> <span class="param" title="New width">$width</span> , <small>integer</small> <span class="param" title="New height">$height</span> [, <small>mixed</small> <span class="param" title="Offset from the left">$offset_x</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="Offset from the top">$offset_y</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Crop an image to the given size. Either the width or the height can be
omitted and the current width or height will be used.</p>

<p>If no offset is specified, the center of the axis will be used.
If an offset of TRUE is specified, the bottom of the axis will be used.</p>

<pre><code>// Crop the image to 200x200 pixels, from the center
$image-&gt;crop(200, 200);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $width</strong> <small>required</small> - New width</li>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small>required</small> - New height</li>
<li>
 <span class="blue">mixed </span><strong> $offset_x</strong> <small> = <small>NULL</small></small> - Offset from the left</li>
<li>
 <span class="blue">mixed </span><strong> $offset_y</strong> <small> = <small>NULL</small></small> - Offset from the top</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_crop">Image::_do_crop</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function crop($width, $height, $offset_x = NULL, $offset_y = NULL)
{
	if ($width &gt; $this-&gt;width)
	{
		// Use the current width
		$width = $this-&gt;width;
	}

	if ($height &gt; $this-&gt;height)
	{
		// Use the current height
		$height = $this-&gt;height;
	}

	if ($offset_x === NULL)
	{
		// Center the X offset
		$offset_x = round(($this-&gt;width - $width) / 2);
	}
	elseif ($offset_x === TRUE)
	{
		// Bottom the X offset
		$offset_x = $this-&gt;width - $width;
	}
	elseif ($offset_x &lt; 0)
	{
		// Set the X offset from the right
		$offset_x = $this-&gt;width - $width + $offset_x;
	}

	if ($offset_y === NULL)
	{
		// Center the Y offset
		$offset_y = round(($this-&gt;height - $height) / 2);
	}
	elseif ($offset_y === TRUE)
	{
		// Bottom the Y offset
		$offset_y = $this-&gt;height - $height;
	}
	elseif ($offset_y &lt; 0)
	{
		// Set the Y offset from the bottom
		$offset_y = $this-&gt;height - $height + $offset_y;
	}

	// Determine the maximum possible width and height
	$max_width  = $this-&gt;width  - $offset_x;
	$max_height = $this-&gt;height - $offset_y;

	if ($width &gt; $max_width)
	{
		// Use the maximum available width
		$width = $max_width;
	}

	if ($height &gt; $max_height)
	{
		// Use the maximum available height
		$height = $max_height;
	}

	$this-&gt;_do_crop($width, $height, $offset_x, $offset_y);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>string</small> <span class="param" title="Image file path">$file</span> [, <small>string</small> <span class="param" title="Driver type: GD, ImageMagick, etc">$driver</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Loads an image and prepares it for manipulation.</p>

<pre><code>$image = Image::factory('upload/test.jpg');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - Image file path</li>
<li>
 <span class="blue">string </span><strong> $driver</strong> <small> = <small>NULL</small></small> - Driver type: GD, ImageMagick, etc</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:default_driver">Image::$default_driver</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Image</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($file, $driver = NULL)
{
	if ($driver === NULL)
	{
		// Use the driver from configuration file or default one
		$configured_driver = Kohana::$config-&gt;load(&#039;image.default_driver&#039;);
		$driver = ($configured_driver) ? $configured_driver : Image::$default_driver;
	}

	// Set the class name
	$class = &#039;Image_&#039;.$driver;

	return new $class($file);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="flip"><small>public</small>  flip(<small>integer</small> <span class="param" title="Direction: Image::HORIZONTAL, Image::VERTICAL">$direction</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Flip the image along the horizontal or vertical axis.</p>

<pre><code>// Flip the image from top to bottom
$image-&gt;flip(Image::HORIZONTAL);

// Flip the image from left to right
$image-&gt;flip(Image::VERTICAL);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $direction</strong> <small>required</small> - Direction: Image::HORIZONTAL, Image::VERTICAL</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_flip">Image::_do_flip</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function flip($direction)
{
	if ($direction !== Image::HORIZONTAL)
	{
		// Flip vertically
		$direction = Image::VERTICAL;
	}

	$this-&gt;_do_flip($direction);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reflection"><small>public</small>  reflection([ <small>integer</small> <span class="param" title="Reflection height">$height</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Reflection opacity: 0-100">$opacity</span> <small>= <small>integer</small> 100</small> , <small>boolean</small> <span class="param" title="TRUE to fade in, FALSE to fade out">$fade_in</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Add a reflection to an image. The most opaque part of the reflection
will be equal to the opacity setting and fade out to full transparent.
Alpha transparency is preserved.</p>

<pre><code>// Create a 50 pixel reflection that fades from 0-100% opacity
$image-&gt;reflection(50);

// Create a 50 pixel reflection that fades from 100-0% opacity
$image-&gt;reflection(50, 100, TRUE);

// Create a 50 pixel reflection that fades from 0-60% opacity
$image-&gt;reflection(50, 60, TRUE);
</code></pre>

<p class="note">By default, the reflection will be go from transparent at the top
to opaque at the bottom.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small> = <small>NULL</small></small> - Reflection height</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small> = <small>integer</small> 100</small> - Reflection opacity: 0-100</li>
<li>
 <span class="blue">boolean </span><strong> $fade_in</strong> <small> = <small>bool</small> FALSE</small> - TRUE to fade in, FALSE to fade out</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_reflection">Image::_do_reflection</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function reflection($height = NULL, $opacity = 100, $fade_in = FALSE)
{
	if ($height === NULL OR $height &gt; $this-&gt;height)
	{
		// Use the current height
		$height = $this-&gt;height;
	}

	// The opacity must be in the range of 0 to 100
	$opacity = min(max($opacity, 0), 100);

	$this-&gt;_do_reflection($height, $opacity, $fade_in);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="render"><small>public</small>  render([ <small>string</small> <span class="param" title="Image type to return: png, jpg, gif, etc">$type</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Quality of image: 1-100">$quality</span> <small>= <small>integer</small> 100</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Render the image and return the binary string.</p>

<pre><code>// Render the image at 50% quality
$data = $image-&gt;render(NULL, 50);

// Render the image as a PNG
$data = $image-&gt;render('png');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - Image type to return: png, jpg, gif, etc</li>
<li>
 <span class="blue">integer </span><strong> $quality</strong> <small> = <small>integer</small> 100</small> - Quality of image: 1-100</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_render">Image::_do_render</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function render($type = NULL, $quality = 100)
{
	if ($type === NULL)
	{
		// Use the current image type
		$type = image_type_to_extension($this-&gt;type, FALSE);
	}

	return $this-&gt;_do_render($type, $quality);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="resize"><small>public</small>  resize([ <small>integer</small> <span class="param" title="New width">$width</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="New height">$height</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Master dimension">$master</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Resize the image to the given size. Either the width or the height can
be omitted and the image will be resized proportionally.</p>

<pre><code>// Resize to 200 pixels on the shortest side
$image-&gt;resize(200, 200);

// Resize to 200x200 pixels, keeping aspect ratio
$image-&gt;resize(200, 200, Image::INVERSE);

// Resize to 500 pixel width, keeping aspect ratio
$image-&gt;resize(500, NULL);

// Resize to 500 pixel height, keeping aspect ratio
$image-&gt;resize(NULL, 500);

// Resize to 200x500 pixels, ignoring aspect ratio
$image-&gt;resize(200, 500, Image::NONE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $width</strong> <small> = <small>NULL</small></small> - New width</li>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small> = <small>NULL</small></small> - New height</li>
<li>
 <span class="blue">integer </span><strong> $master</strong> <small> = <small>NULL</small></small> - Master dimension</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_resize">Image::_do_resize</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function resize($width = NULL, $height = NULL, $master = NULL)
{
	if ($master === NULL)
	{
		// Choose the master dimension automatically
		$master = Image::AUTO;
	}
	// Image::WIDTH and Image::HEIGHT deprecated. You can use it in old projects,
	// but in new you must pass empty value for non-master dimension
	elseif ($master == Image::WIDTH AND ! empty($width))
	{
		$master = Image::AUTO;

		// Set empty height for backward compatibility
		$height = NULL;
	}
	elseif ($master == Image::HEIGHT AND ! empty($height))
	{
		$master = Image::AUTO;

		// Set empty width for backward compatibility
		$width = NULL;
	}

	if (empty($width))
	{
		if ($master === Image::NONE)
		{
			// Use the current width
			$width = $this-&gt;width;
		}
		else
		{
			// If width not set, master will be height
			$master = Image::HEIGHT;
		}
	}

	if (empty($height))
	{
		if ($master === Image::NONE)
		{
			// Use the current height
			$height = $this-&gt;height;
		}
		else
		{
			// If height not set, master will be width
			$master = Image::WIDTH;
		}
	}

	switch ($master)
	{
		case Image::AUTO:
			// Choose direction with the greatest reduction ratio
			$master = ($this-&gt;width / $width) &gt; ($this-&gt;height / $height) ? Image::WIDTH : Image::HEIGHT;
		break;
		case Image::INVERSE:
			// Choose direction with the minimum reduction ratio
			$master = ($this-&gt;width / $width) &gt; ($this-&gt;height / $height) ? Image::HEIGHT : Image::WIDTH;
		break;
	}

	switch ($master)
	{
		case Image::WIDTH:
			// Recalculate the height based on the width proportions
			$height = $this-&gt;height * $width / $this-&gt;width;
		break;
		case Image::HEIGHT:
			// Recalculate the width based on the height proportions
			$width = $this-&gt;width * $height / $this-&gt;height;
		break;
		case Image::PRECISE:
			// Resize to precise size
			$ratio = $this-&gt;width / $this-&gt;height;

			if ($width / $height &gt; $ratio)
			{
				$height = $this-&gt;height * $width / $this-&gt;width;
			}
			else
			{
				$width = $this-&gt;width * $height / $this-&gt;height;
			}
		break;
	}

	// Convert the width and height to integers, minimum value is 1px
	$width  = max(round($width), 1);
	$height = max(round($height), 1);

	$this-&gt;_do_resize($width, $height);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rotate"><small>public</small>  rotate(<small>integer</small> <span class="param" title="Degrees to rotate: -360-360">$degrees</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Rotate the image by a given amount.</p>

<pre><code>// Rotate 45 degrees clockwise
$image-&gt;rotate(45);

// Rotate 90% counter-clockwise
$image-&gt;rotate(-90);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $degrees</strong> <small>required</small> - Degrees to rotate: -360-360</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_rotate">Image::_do_rotate</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rotate($degrees)
{
	// Make the degrees an integer
	$degrees = (int) $degrees;

	if ($degrees &gt; 180)
	{
		do
		{
			// Keep subtracting full circles until the degrees have normalized
			$degrees -= 360;
		}
		while ($degrees &gt; 180);
	}

	if ($degrees &lt; -180)
	{
		do
		{
			// Keep adding full circles until the degrees have normalized
			$degrees += 360;
		}
		while ($degrees &lt; -180);
	}

	$this-&gt;_do_rotate($degrees);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="save"><small>public</small>  save([ <small>string</small> <span class="param" title="New image path">$file</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Quality of image: 1-100">$quality</span> <small>= <small>integer</small> 100</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Save the image. If the filename is omitted, the original image will
be overwritten.</p>

<pre><code>// Save the image as a PNG
$image-&gt;save('saved/cool.png');

// Overwrite the original image
$image-&gt;save();
</code></pre>

<p class="note">If the file exists, but is not writable, an exception will be thrown.</p>

<p class="note">If the file does not exist, and the directory is not writable, an
exception will be thrown.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small> = <small>NULL</small></small> - New image path</li>
<li>
 <span class="blue">integer </span><strong> $quality</strong> <small> = <small>integer</small> 100</small> - Quality of image: 1-100</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_save">Image::_save</a></li>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function save($file = NULL, $quality = 100)
{
	if ($file === NULL)
	{
		// Overwrite the file
		$file = $this-&gt;file;
	}

	if (is_file($file))
	{
		if ( ! is_writable($file))
		{
			throw new Kohana_Exception(&#039;File must be writable: :file&#039;,
				[&#039;:file&#039; =&gt; Debug::path($file)]);
		}
	}
	else
	{
		// Get the directory of the file
		$directory = realpath(pathinfo($file, PATHINFO_DIRNAME));

		if ( ! is_dir($directory) OR ! is_writable($directory))
		{
			throw new Kohana_Exception(&#039;Directory must be writable: :directory&#039;,
				[&#039;:directory&#039; =&gt; Debug::path($directory)]);
		}
	}

	// The quality must be in the range of 1 to 100
	$quality = min(max($quality, 1), 100);

	return $this-&gt;_do_save($file, $quality);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="sharpen"><small>public</small>  sharpen(<small>integer</small> <span class="param" title="Amount to sharpen: 1-100">$amount</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Sharpen the image by a given amount.</p>

<pre><code>// Sharpen the image by 20%
$image-&gt;sharpen(20);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $amount</strong> <small>required</small> - Amount to sharpen: 1-100</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_sharpen">Image::_do_sharpen</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function sharpen($amount)
{
	// The amount must be in the range of 1 to 100
	$amount = min(max($amount, 1), 100);

	$this-&gt;_do_sharpen($amount);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="watermark"><small>public</small>  watermark(<small>Image</small> <span class="param" title="Watermark Image instance">$watermark</span> [, <small>integer</small> <span class="param" title="Offset from the left">$offset_x</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Offset from the top">$offset_y</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Opacity of watermark: 1-100">$opacity</span> <small>= <small>integer</small> 100</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Add a watermark to an image with a specified opacity. Alpha transparency
will be preserved.</p>

<p>If no offset is specified, the center of the axis will be used.
If an offset of TRUE is specified, the bottom of the axis will be used.</p>

<pre><code>// Add a watermark to the bottom right of the image
$mark = Image::factory('upload/watermark.png');
$image-&gt;watermark($mark, TRUE, TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Image </span><strong> $watermark</strong> <small>required</small> - Watermark Image instance</li>
<li>
 <span class="blue">integer </span><strong> $offset_x</strong> <small> = <small>NULL</small></small> - Offset from the left</li>
<li>
 <span class="blue">integer </span><strong> $offset_y</strong> <small> = <small>NULL</small></small> - Offset from the top</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small> = <small>integer</small> 100</small> - Opacity of watermark: 1-100</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#_do_watermark">Image::_do_watermark</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>$this</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function watermark(Image $watermark, $offset_x = NULL, $offset_y = NULL, $opacity = 100)
{
	if ($offset_x === NULL)
	{
		// Center the X offset
		$offset_x = round(($this-&gt;width - $watermark-&gt;width) / 2);
	}
	elseif ($offset_x === TRUE)
	{
		// Bottom the X offset
		$offset_x = $this-&gt;width - $watermark-&gt;width;
	}
	elseif ($offset_x &lt; 0)
	{
		// Set the X offset from the right
		$offset_x = $this-&gt;width - $watermark-&gt;width + $offset_x;
	}

	if ($offset_y === NULL)
	{
		// Center the Y offset
		$offset_y = round(($this-&gt;height - $watermark-&gt;height) / 2);
	}
	elseif ($offset_y === TRUE)
	{
		// Bottom the Y offset
		$offset_y = $this-&gt;height - $watermark-&gt;height;
	}
	elseif ($offset_y &lt; 0)
	{
		// Set the Y offset from the bottom
		$offset_y = $this-&gt;height - $watermark-&gt;height + $offset_y;
	}

	// The opacity must be in the range of 1 to 100
	$opacity = min(max($opacity, 1), 100);

	$this-&gt;_do_watermark($watermark, $offset_x, $offset_y, $opacity);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_background"><small>abstract protected</small>  _do_background(<small>integer</small> <span class="param" title="Red">$r</span> , <small>integer</small> <span class="param" title="Green">$g</span> , <small>integer</small> <span class="param" title="Blue">$b</span> , <small>integer</small> <span class="param" title="Opacity">$opacity</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a background.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $r</strong> <small>required</small> - Red</li>
<li>
 <span class="blue">integer </span><strong> $g</strong> <small>required</small> - Green</li>
<li>
 <span class="blue">integer </span><strong> $b</strong> <small>required</small> - Blue</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small>required</small> - Opacity</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_background($r, $g, $b, $opacity);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_crop"><small>abstract protected</small>  _do_crop(<small>integer</small> <span class="param" title="New width">$width</span> , <small>integer</small> <span class="param" title="New height">$height</span> , <small>integer</small> <span class="param" title="Offset from the left">$offset_x</span> , <small>integer</small> <span class="param" title="Offset from the top">$offset_y</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a crop.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $width</strong> <small>required</small> - New width</li>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small>required</small> - New height</li>
<li>
 <span class="blue">integer </span><strong> $offset_x</strong> <small>required</small> - Offset from the left</li>
<li>
 <span class="blue">integer </span><strong> $offset_y</strong> <small>required</small> - Offset from the top</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_crop($width, $height, $offset_x, $offset_y);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_flip"><small>abstract protected</small>  _do_flip(<small>integer</small> <span class="param" title="Direction to flip">$direction</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a flip.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $direction</strong> <small>required</small> - Direction to flip</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_flip($direction);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_reflection"><small>abstract protected</small>  _do_reflection(<small>integer</small> <span class="param" title="Reflection height">$height</span> , <small>integer</small> <span class="param" title="Reflection opacity">$opacity</span> , <small>boolean</small> <span class="param" title="TRUE to fade out, FALSE to fade in">$fade_in</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a reflection.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small>required</small> - Reflection height</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small>required</small> - Reflection opacity</li>
<li>
 <span class="blue">boolean </span><strong> $fade_in</strong> <small>required</small> - TRUE to fade out, FALSE to fade in</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_reflection($height, $opacity, $fade_in);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_render"><small>abstract protected</small>  _do_render(<small>string</small> <span class="param" title="Image type: png, jpg, gif, etc">$type</span> , <small>integer</small> <span class="param" title="Quality">$quality</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a render.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - Image type: png, jpg, gif, etc</li>
<li>
 <span class="blue">integer </span><strong> $quality</strong> <small>required</small> - Quality</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_render($type, $quality);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_resize"><small>abstract protected</small>  _do_resize(<small>integer</small> <span class="param" title="New width">$width</span> , <small>integer</small> <span class="param" title="New height">$height</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a resize.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $width</strong> <small>required</small> - New width</li>
<li>
 <span class="blue">integer </span><strong> $height</strong> <small>required</small> - New height</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_resize($width, $height);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_rotate"><small>abstract protected</small>  _do_rotate(<small>integer</small> <span class="param" title="Degrees to rotate">$degrees</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a rotation.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $degrees</strong> <small>required</small> - Degrees to rotate</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_rotate($degrees);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_save"><small>abstract protected</small>  _do_save(<small>string</small> <span class="param" title="New image filename">$file</span> , <small>integer</small> <span class="param" title="Quality">$quality</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a save.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $file</strong> <small>required</small> - New image filename</li>
<li>
 <span class="blue">integer </span><strong> $quality</strong> <small>required</small> - Quality</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_save($file, $quality);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_sharpen"><small>abstract protected</small>  _do_sharpen(<small>integer</small> <span class="param" title="Amount to sharpen">$amount</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a sharpen.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $amount</strong> <small>required</small> - Amount to sharpen</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_sharpen($amount);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_do_watermark"><small>abstract protected</small>  _do_watermark(<small>Image</small> <span class="param" title="Watermarking Image">$image</span> , <small>integer</small> <span class="param" title="Offset from the left">$offset_x</span> , <small>integer</small> <span class="param" title="Offset from the top">$offset_y</span> , <small>integer</small> <span class="param" title="Opacity of watermark">$opacity</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Execute a watermarking.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Image </span><strong> $image</strong> <small>required</small> - Watermarking Image</li>
<li>
 <span class="blue">integer </span><strong> $offset_x</strong> <small>required</small> - Offset from the left</li>
<li>
 <span class="blue">integer </span><strong> $offset_y</strong> <small>required</small> - Offset from the top</li>
<li>
 <span class="blue">integer </span><strong> $opacity</strong> <small>required</small> - Opacity of watermark</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">abstract protected function _do_watermark(Image $image, $offset_x, $offset_y, $opacity);</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="image_type_to_mime_type"><small>protected</small>  image_type_to_mime_type(<small>string</small> <span class="param" title="Image type: png, jpg, gif, etc">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_Image'>Kohana_Image</a>)</small></h3>
<div class='description'><p>Returns the image mime type
Adds support for webp image type, which is not known by php</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - Image type: png, jpg, gif, etc</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function image_type_to_mime_type($type)
{
	if ($type === self::IMAGETYPE_WEBP)
		return &#039;image/webp&#039;;

	return image_type_to_mime_type($type);
}</code>
</pre>
</div>
</div>
</div>