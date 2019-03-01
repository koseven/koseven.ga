---
layout: api
class: Upload
---
<h1>Upload</h1>
extends <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>
<br />
<p>
<i><p>Upload helper class for working with uploaded files and <a href="/index.php/">Validation</a>.</p>

<pre><code>$array = Validation::factory($_FILES);
</code></pre>

<p class="note">Remember to define your form with "enctype=multipart/form-data" or file
uploading will not work!</p>

<p>The following configuration properties can be set:</p>

<ul>
<li><a href="#property:remove_spaces">Upload::$remove_spaces</a></li>
<li><a href="#property:default_directory">Upload::$default_directory</a></li>
</ul>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana</dd>
<dt>category</dt>
<dd>Helpers</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a></p>
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
<a href="#property-default_directory">$default_directory</a>
</li>
<li>
<a href="#property-remove_spaces">$remove_spaces</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#image">image()</a>
</li>
<li>
<a href="#not_empty">not_empty()</a>
</li>
<li>
<a href="#save">save()</a>
</li>
<li>
<a href="#size">size()</a>
</li>
<li>
<a href="#type">type()</a>
</li>
<li>
<a href="#valid">valid()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-default_directory'><small>public static</small>  <span class='blue'>string</span> $default_directory</h4>
</dt>
<dd>
 <p>default upload directory</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(6)</span> "upload"</pre></dd>
<dt>
<h4 id='property-remove_spaces'><small>public static</small>  <span class='blue'>boolean</span> $remove_spaces</h4>
</dt>
<dd>
 <p>remove spaces in uploaded files</p>
</dd>
<dd>
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="image"><small>public static</small>  image(<small>array</small> <span class="param" title="$_FILES item">$file</span> [, <small>integer</small> <span class="param" title="Maximum width of image">$max_width</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Maximum height of image">$max_height</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Match width and height exactly?">$exact</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Validation rule to test if an upload is an image and, optionally, is the correct size.</p>

<pre><code>// The "image" file must be an image
$array-&gt;rule('image', 'Upload::image')

// The "photo" file has a maximum size of 640x480 pixels
$array-&gt;rule('photo', 'Upload::image', array(':value', 640, 480));

// The "image" file must be exactly 100x100 pixels
$array-&gt;rule('image', 'Upload::image', array(':value', 100, 100, TRUE));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - $_FILES item</li>
<li>
 <span class="blue">integer </span><strong> $max_width</strong> <small> = <small>NULL</small></small> - Maximum width of image</li>
<li>
 <span class="blue">integer </span><strong> $max_height</strong> <small> = <small>NULL</small></small> - Maximum height of image</li>
<li>
 <span class="blue">boolean </span><strong> $exact</strong> <small> = <small>bool</small> FALSE</small> - Match width and height exactly?</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function image(array $file, $max_width = NULL, $max_height = NULL, $exact = FALSE)
{
	if (Upload::not_empty($file))
	{
		try
		{
			// Get the width and height from the uploaded image
			list($width, $height) = getimagesize($file[&#039;tmp_name&#039;]);
		}
		catch (ErrorException $e)
		{
			// Ignore read errors
		}

		if (empty($width) OR empty($height))
		{
			// Cannot get image size, cannot validate
			return FALSE;
		}

		if ( ! $max_width)
		{
			// No limit, use the image width
			$max_width = $width;
		}

		if ( ! $max_height)
		{
			// No limit, use the image height
			$max_height = $height;
		}

		if ($exact)
		{
			// Check if dimensions match exactly
			return ($width === $max_width AND $height === $max_height);
		}
		else
		{
			// Check if size is within maximum dimensions
			return ($width &lt;= $max_width AND $height &lt;= $max_height);
		}
	}

	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="not_empty"><small>public static</small>  not_empty(<small>array</small> <span class="param" title="$_FILES item">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Tests if a successful upload has been made.</p>

<pre><code>$array-&gt;rule('file', 'Upload::not_empty');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - $_FILES item</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function not_empty(array $file)
{
	return (isset($file[&#039;error&#039;])
		AND isset($file[&#039;tmp_name&#039;])
		AND $file[&#039;error&#039;] === UPLOAD_ERR_OK
		AND is_uploaded_file($file[&#039;tmp_name&#039;]));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="save"><small>public static</small>  save(<small>array</small> <span class="param" title="Uploaded file data">$file</span> [, <small>string</small> <span class="param" title="New filename">$filename</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="New directory">$directory</span> <small>= <small>NULL</small></small> , <small>integer</small> <span class="param" title="Chmod mask">$chmod</span> <small>= <small>integer</small> 420</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Save an uploaded file to a new location. If no filename is provided,
the original filename will be used, with a unique prefix added.</p>

<p>This method should be used after validating the $_FILES array:</p>

<pre><code>if ($array-&gt;check())
{
    // Upload is valid, save it
    Upload::save($array['file']);
}
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - Uploaded file data</li>
<li>
 <span class="blue">string </span><strong> $filename</strong> <small> = <small>NULL</small></small> - New filename</li>
<li>
 <span class="blue">string </span><strong> $directory</strong> <small> = <small>NULL</small></small> - New directory</li>
<li>
 <span class="blue">integer </span><strong> $chmod</strong> <small> = <small>integer</small> 420</small> - Chmod mask</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - On success, full path to new file 
</li><li>
<span class='blue'>FALSE</span>  - On failure 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function save(array $file, $filename = NULL, $directory = NULL, $chmod = 0644)
{
	if ( ! isset($file[&#039;tmp_name&#039;]) OR ! is_uploaded_file($file[&#039;tmp_name&#039;]))
	{
		// Ignore corrupted uploads
		return FALSE;
	}

	if ($filename === NULL)
	{
		// Use the default filename, with a timestamp pre-pended
		$filename = uniqid().$file[&#039;name&#039;];
	}

	if (Upload::$remove_spaces === TRUE)
	{
		// Remove spaces from the filename
		$filename = preg_replace(&#039;/\s+/u&#039;, &#039;_&#039;, $filename);
	}

	if ($directory === NULL)
	{
		// Use the pre-configured upload directory
		$directory = Upload::$default_directory;
	}

	if ( ! is_dir($directory) OR ! is_writable(realpath($directory)))
	{
		throw new Kohana_Exception(&#039;Directory :dir must be writable&#039;,
			[&#039;:dir&#039; =&gt; Debug::path($directory)]);
	}

	// Make the filename into a complete path
	$filename = realpath($directory).DIRECTORY_SEPARATOR.$filename;

	if (move_uploaded_file($file[&#039;tmp_name&#039;], $filename))
	{
		if ($chmod !== FALSE)
		{
			// Set permissions on filename
			chmod($filename, $chmod);
		}

		// Return new file path
		return $filename;
	}

	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="size"><small>public static</small>  size(<small>array</small> <span class="param" title="$_FILES item">$file</span> , <small>string</small> <span class="param" title="Maximum file size allowed">$size</span> )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Validation rule to test if an uploaded file is allowed by file size.
File sizes are defined as: SB, where S is the size (1, 8.5, 300, etc.)
and B is the byte unit (K, MiB, GB, etc.). All valid byte units are
defined in Num::$byte_units</p>

<pre><code>$array-&gt;rule('file', 'Upload::size', array(':value', '1M'))
$array-&gt;rule('file', 'Upload::size', array(':value', '2.5KiB'))
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - $_FILES item</li>
<li>
 <span class="blue">string </span><strong> $size</strong> <small>required</small> - Maximum file size allowed</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function size(array $file, $size)
{
	if ($file[&#039;error&#039;] === UPLOAD_ERR_INI_SIZE)
	{
		// Upload is larger than PHP allowed size (upload_max_filesize)
		return FALSE;
	}

	if ($file[&#039;error&#039;] !== UPLOAD_ERR_OK)
	{
		// The upload failed, no size to check
		return TRUE;
	}

	// Convert the provided size to bytes for comparison
	$size = Num::bytes($size);

	// Test that the file is under or equal to the max size
	return ($file[&#039;size&#039;] &lt;= $size);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="type"><small>public static</small>  type(<small>array</small> <span class="param" title="$_FILES item">$file</span> , <small>array</small> <span class="param" title="Allowed file extensions">$allowed</span> )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Test if an uploaded file is an allowed file type, by extension.</p>

<pre><code>$array-&gt;rule('file', 'Upload::type', array(':value', array('jpg', 'png', 'gif')));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - $_FILES item</li>
<li>
 <span class="blue">array </span><strong> $allowed</strong> <small>required</small> - Allowed file extensions</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function type(array $file, array $allowed)
{
	if ($file[&#039;error&#039;] !== UPLOAD_ERR_OK)
		return TRUE;

	$ext = strtolower(pathinfo($file[&#039;name&#039;], PATHINFO_EXTENSION));

	return in_array($ext, $allowed);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="valid"><small>public static</small>  valid(<small>array</small> <span class="param" title="$_FILES item">$file</span> )<small> (defined in <a href='/documentation/api/Kohana_Upload'>Kohana_Upload</a>)</small></h3>
<div class='description'><p>Tests if upload data is valid, even if no file was uploaded. If you
<em>do</em> require a file to be uploaded, add the <a href="#not_empty">Upload::not_empty</a> rule
before this rule.</p>

<pre><code>$array-&gt;rule('file', 'Upload::valid')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $file</strong> <small>required</small> - $_FILES item</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function valid($file)
{
	return (isset($file[&#039;error&#039;])
		AND isset($file[&#039;name&#039;])
		AND isset($file[&#039;type&#039;])
		AND isset($file[&#039;tmp_name&#039;])
		AND isset($file[&#039;size&#039;]));
}</code>
</pre>
</div>
</div>
</div>