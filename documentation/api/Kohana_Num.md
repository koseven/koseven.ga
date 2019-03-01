---
layout: api
class: Kohana_Num
---
<h1>Kohana_Num</h1>
<p>
<i><p>Number helper class. Provides additional formatting methods that for working
with numbers.</p>
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
<a href='#constant-ROUND_HALF_UP'>ROUND_HALF_UP</a>
</li>
<li>
<a href='#constant-ROUND_HALF_DOWN'>ROUND_HALF_DOWN</a>
</li>
<li>
<a href='#constant-ROUND_HALF_EVEN'>ROUND_HALF_EVEN</a>
</li>
<li>
<a href='#constant-ROUND_HALF_ODD'>ROUND_HALF_ODD</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-byte_units">$byte_units</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#bytes">bytes()</a>
</li>
<li>
<a href="#format">format()</a>
</li>
<li>
<a href="#ordinal">ordinal()</a>
</li>
<li>
<a href="#round">round()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-ROUND_HALF_UP'>ROUND_HALF_UP</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-ROUND_HALF_DOWN'>ROUND_HALF_DOWN</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2</pre></dd>
<dt>
<h4 id='constant-ROUND_HALF_EVEN'>ROUND_HALF_EVEN</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 3</pre></dd>
<dt>
<h4 id='constant-ROUND_HALF_ODD'>ROUND_HALF_ODD</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 4</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-byte_units'><small>public static</small>  <span class='blue'>array</span> $byte_units</h4>
</dt>
<dd>
 <p>Valid byte units => power of 2 that defines the unit's size</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(33)</span> <span>(
    "B" => <small>integer</small> 0
    "K" => <small>integer</small> 10
    "Ki" => <small>integer</small> 10
    "KB" => <small>integer</small> 10
    "KiB" => <small>integer</small> 10
    "M" => <small>integer</small> 20
    "Mi" => <small>integer</small> 20
    "MB" => <small>integer</small> 20
    "MiB" => <small>integer</small> 20
    "G" => <small>integer</small> 30
    "Gi" => <small>integer</small> 30
    "GB" => <small>integer</small> 30
    "GiB" => <small>integer</small> 30
    "T" => <small>integer</small> 40
    "Ti" => <small>integer</small> 40
    "TB" => <small>integer</small> 40
    "TiB" => <small>integer</small> 40
    "P" => <small>integer</small> 50
    "Pi" => <small>integer</small> 50
    "PB" => <small>integer</small> 50
    "PiB" => <small>integer</small> 50
    "E" => <small>integer</small> 60
    "Ei" => <small>integer</small> 60
    "EB" => <small>integer</small> 60
    "EiB" => <small>integer</small> 60
    "Z" => <small>integer</small> 70
    "Zi" => <small>integer</small> 70
    "ZB" => <small>integer</small> 70
    "ZiB" => <small>integer</small> 70
    "Y" => <small>integer</small> 80
    "Yi" => <small>integer</small> 80
    "YB" => <small>integer</small> 80
    "YiB" => <small>integer</small> 80
)</span></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="bytes"><small>public static</small>  bytes(<small>string</small> <span class="param" title="$bytes file size in SB format">$size</span> )<small> (defined in <a href='/documentation/api/Kohana_Num'>Kohana_Num</a>)</small></h3>
<div class='description'><p>Converts a file size number to a byte value. File sizes are defined in
the format: SB, where S is the size (1, 8.5, 300, etc.) and B is the
byte unit (K, MiB, GB, etc.). All valid byte units are defined in
Num::$byte_units</p>

<pre><code>echo Num::bytes('200K');  // 204800
echo Num::bytes('5MiB');  // 5242880
echo Num::bytes('1000');  // 1000
echo Num::bytes('2.5GB'); // 2684354560
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $size</strong> <small>required</small> - $bytes  file size in SB format</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>float</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function bytes($size)
{
	// Prepare the size
	$size = trim( (string) $size);

	// Construct an OR list of byte units for the regex
	$accepted = implode(&#039;|&#039;, array_keys(Num::$byte_units));

	// Construct the regex pattern for verifying the size format
	$pattern = &#039;/^([0-9]+(?:\.[0-9]+)?)(&#039;.$accepted.&#039;)?$/Di&#039;;

	// Verify the size format and store the matching parts
	if ( ! preg_match($pattern, $size, $matches))
		throw new Kohana_Exception(&#039;The byte unit size, &quot;:size&quot;, is improperly formatted.&#039;, [
			&#039;:size&#039; =&gt; $size,
		]);

	// Find the float value of the size
	$size = (float) $matches[1];

	// Find the actual unit, assume B if no unit specified
	$unit = Arr::get($matches, 2, &#039;B&#039;);

	// Convert the size into bytes
	$bytes = $size * pow(2, Num::$byte_units[$unit]);

	return $bytes;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="format"><small>public static</small>  format(<small>float</small> <span class="param" title="Number to format">$number</span> , <small>integer</small> <span class="param" title="Decimal places">$places</span> [, <small>boolean</small> <span class="param" title="Monetary formatting?">$monetary</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Num'>Kohana_Num</a>)</small></h3>
<div class='description'><p>Locale-aware number and monetary formatting.</p>

<pre><code>// In English, "1,200.05"
// In Spanish, "1200,05"
// In Portuguese, "1 200,05"
echo Num::format(1200.05, 2);

// In English, "1,200.05"
// In Spanish, "1.200,05"
// In Portuguese, "1.200.05"
echo Num::format(1200.05, 2, TRUE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">float </span><strong> $number</strong> <small>required</small> - Number to format</li>
<li>
 <span class="blue">integer </span><strong> $places</strong> <small>required</small> - Decimal places</li>
<li>
 <span class="blue">boolean </span><strong> $monetary</strong> <small> = <small>bool</small> FALSE</small> - Monetary formatting?</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Since - 3.0.2</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function format($number, $places, $monetary = FALSE)
{
	$info = localeconv();

	if ($monetary)
	{
		$decimal   = $info[&#039;mon_decimal_point&#039;];
		$thousands = $info[&#039;mon_thousands_sep&#039;];
	}
	else
	{
		$decimal   = $info[&#039;decimal_point&#039;];
		$thousands = $info[&#039;thousands_sep&#039;];
	}

	return number_format($number, $places, $decimal, $thousands);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ordinal"><small>public static</small>  ordinal(<small>integer</small> <span class="param" title="$number">$number</span> )<small> (defined in <a href='/documentation/api/Kohana_Num'>Kohana_Num</a>)</small></h3>
<div class='description'><p>Returns the English ordinal suffix (th, st, nd, etc) of a number.</p>

<pre><code>echo 2, Num::ordinal(2);   // "2nd"
echo 10, Num::ordinal(10); // "10th"
echo 33, Num::ordinal(33); // "33rd"
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $number</strong> <small>required</small> - $number</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ordinal($number)
{
	if ($number % 100 &gt; 10 AND $number % 100 &lt; 14)
	{
		return &#039;th&#039;;
	}

	switch ($number % 10)
	{
		case 1:
			return &#039;st&#039;;
		case 2:
			return &#039;nd&#039;;
		case 3:
			return &#039;rd&#039;;
		default:
			return &#039;th&#039;;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="round"><small>public static</small>  round(<small>float</small> <span class="param" title="Number to round">$value</span> [, <small>integer</small> <span class="param" title="Desired precision">$precision</span> <small>= <small>integer</small> 0</small> , <small>integer</small> <span class="param" title="Tie breaking mode, accepts the PHP_ROUND_HALF_* constants">$mode</span> <small>= <small>integer</small> 1</small> , <small>boolean</small> <span class="param" title="Set to false to force use of the userland implementation">$native</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Num'>Kohana_Num</a>)</small></h3>
<div class='description'><p>Round a number to a specified precision, using a specified tie breaking technique</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">float </span><strong> $value</strong> <small>required</small> - Number to round</li>
<li>
 <span class="blue">integer </span><strong> $precision</strong> <small> = <small>integer</small> 0</small> - Desired precision</li>
<li>
 <span class="blue">integer </span><strong> $mode</strong> <small> = <small>integer</small> 1</small> - Tie breaking mode, accepts the PHP_ROUND_HALF_* constants</li>
<li>
 <span class="blue">boolean </span><strong> $native</strong> <small> = <small>bool</small> TRUE</small> - Set to false to force use of the userland implementation</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>float</span>  - Rounded number 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function round($value, $precision = 0, $mode = self::ROUND_HALF_UP, $native = TRUE)
{
	if ($native)
	{
		return round($value, $precision, $mode);
	}

	if ($mode === self::ROUND_HALF_UP)
	{
		return round($value, $precision);
	}
	else
	{
		$factor = ($precision === 0) ? 1 : pow(10, $precision);

		switch ($mode)
		{
			case self::ROUND_HALF_DOWN:
			case self::ROUND_HALF_EVEN:
			case self::ROUND_HALF_ODD:
				// Check if we have a rounding tie, otherwise we can just call round()
				if (($value * $factor) - floor($value * $factor) === 0.5)
				{
					if ($mode === self::ROUND_HALF_DOWN)
					{
						// Round down operation, so we round down unless the value
						// is -ve because up is down and down is up down there. ;)
						$up = ($value &lt; 0);
					}
					else
					{
						// Round up if the integer is odd and the round mode is set to even
						// or the integer is even and the round mode is set to odd.
						// Any other instance round down.
						$up = ( ! ( ! (floor($value * $factor) &amp; 1)) === ($mode === self::ROUND_HALF_EVEN));
					}

					if ($up)
					{
						$value = ceil($value * $factor);
					}
					else
					{
						$value = floor($value * $factor);
					}
					return $value / $factor;
				}
				else
				{
					return round($value, $precision);
				}
			break;
		}
	}
}</code>
</pre>
</div>
</div>
</div>