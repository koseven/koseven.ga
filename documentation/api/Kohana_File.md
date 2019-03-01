---
layout: api
class: Kohana_File
---
<h1>Kohana_File</h1>
<p>
<i><p>File helper class.</p>
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
<a href="#ext_by_mime">ext_by_mime()</a>
</li>
<li>
<a href="#exts_by_mime">exts_by_mime()</a>
</li>
<li>
<a href="#join">join()</a>
</li>
<li>
<a href="#mime">mime()</a>
</li>
<li>
<a href="#mime_by_ext">mime_by_ext()</a>
</li>
<li>
<a href="#mimes_by_ext">mimes_by_ext()</a>
</li>
<li>
<a href="#split">split()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="ext_by_mime"><small>public static</small>  ext_by_mime(<small>string</small> <span class="param" title="MIME type to lookup">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Lookup a single file extension by MIME type.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - MIME type to lookup</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string|false</span>  - First file extension matching or false 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ext_by_mime($type)
{
	$exts = File::exts_by_mime($type);

	if ($exts === FALSE)
	{
		return FALSE;
	}

	return current($exts);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="exts_by_mime"><small>public static</small>  exts_by_mime(<small>string</small> <span class="param" title="File MIME type">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Lookup file extensions by MIME type</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - File MIME type</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array|false</span>  - File extensions matching MIME type or false if none 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function exts_by_mime($type)
{
	static $types = [];

	// Fill the static array
	if (empty($types))
	{
		foreach (Kohana::$config-&gt;load(&#039;mimes&#039;) as $ext =&gt; $mimes)
		{
			foreach ($mimes as $mime)
			{
				if ($mime == &#039;application/octet-stream&#039;)
				{
					// octet-stream is a generic binary
					continue;
				}

				if ( ! isset($types[$mime]))
				{
					$types[$mime] = [ (string) $ext];
				}
				elseif ( ! in_array($ext, $types[$mime]))
				{
					$types[$mime][] = (string) $ext;
				}
			}
		}
	}

	return isset($types[$type]) ? $types[$type] : FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="join"><small>public static</small>  join(<small>string</small> <span class="param" title="Split filename, without .000 extension">$filename</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Join a split file into a whole file. Does the reverse of <a href="#split">File::split</a>.</p>

<pre><code>$count = File::join($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $filename</strong> <small>required</small> - Split filename, without .000 extension</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - The number of pieces that were joined. 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function join($filename)
{
	// Open the file
	$file = fopen($filename, &#039;wb+&#039;);

	// Read files in 8k blocks
	$block_size = 1024 * 8;

	// Total number of pieces
	$pieces = 0;

	while (is_file($piece = $filename.&#039;.&#039;.str_pad($pieces + 1, 3, &#039;0&#039;, STR_PAD_LEFT)))
	{
		// Read another piece
		$pieces += 1;

		// Open the piece for reading
		$piece = fopen($piece, &#039;rb&#039;);

		while ( ! feof($piece))
		{
			// Transfer the data in blocks
			fwrite($file, fread($piece, $block_size));
		}

		// Close the piece
		fclose($piece);
	}

	return $pieces;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="mime"><small>public static</small>  mime(<small>string</small> <span class="param" title="File name or path">$filename</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Attempt to get the mime type from a file. This method is horribly
unreliable, due to PHP being horribly unreliable when it comes to
determining the mime type of a file.</p>

<pre><code>$mime = File::mime($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $filename</strong> <small>required</small> - File name or path</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Mime type on success 
</li><li>
<span class='blue'>FALSE</span>  - On failure 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function mime($filename)
{
	// Get the complete path to the file
	$filename = realpath($filename);

	// Get the extension from the filename
	$extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

	if (preg_match(&#039;/^(?:jpe?g|png|[gt]if|bmp|swf)$/&#039;, $extension))
	{
		// Use getimagesize() to find the mime type on images
		$file = getimagesize($filename);

		if (isset($file[&#039;mime&#039;]))
			return $file[&#039;mime&#039;];
	}

	if (class_exists(&#039;finfo&#039;, FALSE))
	{
		if ($info = new finfo(defined(&#039;FILEINFO_MIME_TYPE&#039;) ? FILEINFO_MIME_TYPE : FILEINFO_MIME))
		{
			return $info-&gt;file($filename);
		}
	}

	if (ini_get(&#039;mime_magic.magicfile&#039;) AND function_exists(&#039;mime_content_type&#039;))
	{
		// The mime_content_type function is only useful with a magic file
		return mime_content_type($filename);
	}

	if ( ! empty($extension))
	{
		return File::mime_by_ext($extension);
	}

	// Unable to find the mime-type
	return FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="mime_by_ext"><small>public static</small>  mime_by_ext(<small>string</small> <span class="param" title="Php, pdf, txt, etc">$extension</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Return the mime type of an extension.</p>

<pre><code>$mime = File::mime_by_ext('png'); // "image/png"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $extension</strong> <small>required</small> - Php, pdf, txt, etc</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Mime type on success 
</li><li>
<span class='blue'>FALSE</span>  - On failure 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function mime_by_ext($extension)
{
	// Load all of the mime types
	$mimes = Kohana::$config-&gt;load(&#039;mimes&#039;);

	return isset($mimes[$extension]) ? $mimes[$extension][0] : FALSE;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="mimes_by_ext"><small>public static</small>  mimes_by_ext(<small>string</small> <span class="param" title="Extension to lookup">$extension</span> )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Lookup MIME types for a file</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $extension</strong> <small>required</small> - Extension to lookup</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>See - <a href="#mime_by_ext">Kohana_File::mime_by_ext()</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Array of MIMEs associated with the specified extension 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function mimes_by_ext($extension)
{
	// Load all of the mime types
	$mimes = Kohana::$config-&gt;load(&#039;mimes&#039;);

	return isset($mimes[$extension]) ? ( (array) $mimes[$extension]) : [];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="split"><small>public static</small>  split(<small>string</small> <span class="param" title="File to be split">$filename</span> [, <small>integer</small> <span class="param" title="Size, in MB, for each piece to be">$piece_size</span> <small>= <small>integer</small> 10</small> ] )<small> (defined in <a href='/documentation/api/Kohana_File'>Kohana_File</a>)</small></h3>
<div class='description'><p>Split a file into pieces matching a specific size. Used when you need to
split large files into smaller pieces for easy transmission.</p>

<pre><code>$count = File::split($file);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $filename</strong> <small>required</small> - File to be split</li>
<li>
 <span class="blue">integer </span><strong> $piece_size</strong> <small> = <small>integer</small> 10</small> - Size, in MB, for each piece to be</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  - The number of pieces that were created 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function split($filename, $piece_size = 10)
{
	// Open the input file
	$file = fopen($filename, &#039;rb&#039;);

	// Change the piece size to bytes
	$piece_size = floor($piece_size * 1024 * 1024);

	// Write files in 8k blocks
	$block_size = 1024 * 8;

	// Total number of pieces
	$pieces = 0;

	while ( ! feof($file))
	{
		// Create another piece
		$pieces += 1;

		// Create a new file piece
		$piece = str_pad($pieces, 3, &#039;0&#039;, STR_PAD_LEFT);
		$piece = fopen($filename.&#039;.&#039;.$piece, &#039;wb+&#039;);

		// Number of bytes read
		$read = 0;

		do
		{
			// Transfer the data in blocks
			fwrite($piece, fread($file, $block_size));

			// Another block has been read
			$read += $block_size;
		}
		while ($read &lt; $piece_size);

		// Close the piece
		fclose($piece);
	}

	// Close the file
	fclose($file);

	return $pieces;
}</code>
</pre>
</div>
</div>
</div>