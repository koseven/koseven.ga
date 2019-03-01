---
layout: api
class: Date
---
<h1>Date</h1>
extends <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>
<br />
<p>
<i><p>Date helper.</p>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Date'>Kohana_Date</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-YEAR'>YEAR</a>
</li>
<li>
<a href='#constant-MONTH'>MONTH</a>
</li>
<li>
<a href='#constant-WEEK'>WEEK</a>
</li>
<li>
<a href='#constant-DAY'>DAY</a>
</li>
<li>
<a href='#constant-HOUR'>HOUR</a>
</li>
<li>
<a href='#constant-MINUTE'>MINUTE</a>
</li>
<li>
<a href='#constant-MONTHS_LONG'>MONTHS_LONG</a>
</li>
<li>
<a href='#constant-MONTHS_SHORT'>MONTHS_SHORT</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-timestamp_format">$timestamp_format</a>
</li>
<li>
<a href="#property-timezone">$timezone</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#adjust">adjust()</a>
</li>
<li>
<a href="#ampm">ampm()</a>
</li>
<li>
<a href="#days">days()</a>
</li>
<li>
<a href="#dos2unix">dos2unix()</a>
</li>
<li>
<a href="#formatted_time">formatted_time()</a>
</li>
<li>
<a href="#fuzzy_span">fuzzy_span()</a>
</li>
<li>
<a href="#hours">hours()</a>
</li>
<li>
<a href="#minutes">minutes()</a>
</li>
<li>
<a href="#months">months()</a>
</li>
<li>
<a href="#offset">offset()</a>
</li>
<li>
<a href="#seconds">seconds()</a>
</li>
<li>
<a href="#span">span()</a>
</li>
<li>
<a href="#unix2dos">unix2dos()</a>
</li>
<li>
<a href="#years">years()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-YEAR'>YEAR</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 31556926</pre></dd>
<dt>
<h4 id='constant-MONTH'>MONTH</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2629744</pre></dd>
<dt>
<h4 id='constant-WEEK'>WEEK</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 604800</pre></dd>
<dt>
<h4 id='constant-DAY'>DAY</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 86400</pre></dd>
<dt>
<h4 id='constant-HOUR'>HOUR</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 3600</pre></dd>
<dt>
<h4 id='constant-MINUTE'>MINUTE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 60</pre></dd>
<dt>
<h4 id='constant-MONTHS_LONG'>MONTHS_LONG</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(2)</span> "%B"</pre></dd>
<dt>
<h4 id='constant-MONTHS_SHORT'>MONTHS_SHORT</h4>
</dt>
<dd><pre class="debug"><small>string</small><span>(2)</span> "%b"</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-timestamp_format'><small>public static</small>  <span class='blue'>string</span> $timestamp_format</h4>
</dt>
<dd>
 <p>Default timestamp format for formatted_time</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(11)</span> "Y-m-d H:i:s"</pre></dd>
<dt>
<h4 id='property-timezone'><small>public static</small>  <span class='blue'>string</span> $timezone</h4>
</dt>
<dd>
 <p>Timezone for formatted_time</p>
</dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="adjust"><small>public static</small>  adjust(<small>integer</small> <span class="param" title="Hour to adjust">$hour</span> , <small>string</small> <span class="param" title="AM or PM">$ampm</span> )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Adjusts a non-24-hour number into a 24-hour number.</p>

<pre><code>$hour = Date::adjust(3, 'pm'); // 15
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $hour</strong> <small>required</small> - Hour to adjust</li>
<li>
 <span class="blue">string </span><strong> $ampm</strong> <small>required</small> - AM or PM</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function adjust($hour, $ampm)
{
	$hour = (int) $hour;
	$ampm = strtolower($ampm);

	switch ($ampm)
	{
		case &#039;am&#039;:
			if ($hour == 12)
			{
				$hour = 0;
			}
		break;
		case &#039;pm&#039;:
			if ($hour &lt; 12)
			{
				$hour += 12;
			}
		break;
	}

	return sprintf(&#039;%02d&#039;, $hour);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="ampm"><small>public static</small>  ampm(<small>integer</small> <span class="param" title="Number of the hour">$hour</span> )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns AM or PM, based on a given hour (in 24 hour format).</p>

<pre><code>$type = Date::ampm(12); // PM
$type = Date::ampm(1);  // AM
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $hour</strong> <small>required</small> - Number of the hour</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function ampm($hour)
{
	// Always integer
	$hour = (int) $hour;

	return ($hour &gt; 11) ? &#039;PM&#039; : &#039;AM&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="days"><small>public static</small>  days(<small>integer</small> <span class="param" title="Number of month">$month</span> [, <small>integer</small> <span class="param" title="Number of year to check month, defaults to the current year">$year</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Number of days in a given month and year. Typically used as a shortcut
for generating a list that can be used in a form.</p>

<pre><code>Date::days(4, 2010); // 1, 2, 3, ..., 28, 29, 30
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $month</strong> <small>required</small> - Number of month</li>
<li>
 <span class="blue">integer </span><strong> $year</strong> <small> = <small>bool</small> FALSE</small> - Number of year to check month, defaults to the current year</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - A mirrored (foo =&gt; foo) array of the days. 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function days($month, $year = FALSE)
{
	static $months;

	if ($year === FALSE)
	{
		// Use the current year by default
		$year = date(&#039;Y&#039;);
	}

	// Always integers
	$month = (int) $month;
	$year  = (int) $year;

	// We use caching for months, because time functions are used
	if (empty($months[$year][$month]))
	{
		$months[$year][$month] = [];

		// Use date to find the number of days in the given month
		$total = date(&#039;t&#039;, mktime(1, 0, 0, $month, 1, $year)) + 1;

		for ($i = 1; $i &lt; $total; $i++)
		{
			$months[$year][$month][$i] = (string) $i;
		}
	}

	return $months[$year][$month];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="dos2unix"><small>public static</small>  dos2unix([ <small>integer</small> <span class="param" title="DOS timestamp">$timestamp</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Converts a DOS timestamp to UNIX format.There are very few cases where
this is needed, but some binary formats use it (eg: zip files.)
Converting the other direction is done using {@link Date::unix2dos}.</p>

<pre><code>$unix = Date::dos2unix($dos);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $timestamp</strong> <small> = <small>bool</small> FALSE</small> - DOS timestamp</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function dos2unix($timestamp = FALSE)
{
	$sec  = 2 * ($timestamp &amp; 0x1f);
	$min  = ($timestamp &gt;&gt;  5) &amp; 0x3f;
	$hrs  = ($timestamp &gt;&gt; 11) &amp; 0x1f;
	$day  = ($timestamp &gt;&gt; 16) &amp; 0x1f;
	$mon  = ($timestamp &gt;&gt; 21) &amp; 0x0f;
	$year = ($timestamp &gt;&gt; 25) &amp; 0x7f;

	return mktime($hrs, $min, $sec, $mon, $day, $year + 1980);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="formatted_time"><small>public static</small>  formatted_time([ <small>string</small> <span class="param" title="Datetime string">$datetime_str</span> <small>= <small>string</small><span>(3)</span> "now"</small> , <small>string</small> <span class="param" title="Timestamp format">$timestamp_format</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Timezone identifier">$timezone</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns a date/time string with the specified timestamp format</p>

<pre><code>$time = Date::formatted_time('5 minutes ago');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $datetime_str</strong> <small> = <small>string</small><span>(3)</span> "now"</small> - Datetime string</li>
<li>
 <span class="blue">string </span><strong> $timestamp_format</strong> <small> = <small>NULL</small></small> - Timestamp format</li>
<li>
 <span class="blue">string </span><strong> $timezone</strong> <small> = <small>NULL</small></small> - Timezone identifier</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://www.php.net/manual/datetime.construct">http://www.php.net/manual/datetime.construct</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function formatted_time($datetime_str = &#039;now&#039;, $timestamp_format = NULL, $timezone = NULL)
{
	$timestamp_format = ($timestamp_format == NULL) ? Date::$timestamp_format : $timestamp_format;
	$timezone         = ($timezone === NULL) ? Date::$timezone : $timezone;

	$tz   = new DateTimeZone($timezone ? $timezone : date_default_timezone_get());
	$time = new DateTime($datetime_str, $tz);

	// Convert the time back to the expected timezone if required (in case the datetime_str provided a timezone,
	// offset or unix timestamp. This also ensures that the timezone reported by the object is correct on HHVM
	// (see https://github.com/facebook/hhvm/issues/2302).
	$time-&gt;setTimeZone($tz);

	return $time-&gt;format($timestamp_format);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="fuzzy_span"><small>public static</small>  fuzzy_span(<small>integer</small> <span class="param" title=""remote" timestamp">$timestamp</span> [, <small>integer</small> <span class="param" title=""local" timestamp, defaults to time()">$local_timestamp</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns the difference between a time and now in a "fuzzy" way.
Displaying a fuzzy time instead of a date is usually faster to read and understand.</p>

<pre><code>$span = Date::fuzzy_span(time() - 10); // "moments ago"
$span = Date::fuzzy_span(time() + 20); // "in moments"
</code></pre>

<p>A second parameter is available to manually set the "local" timestamp,
however this parameter shouldn't be needed in normal usage and is only
included for unit tests</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $timestamp</strong> <small>required</small> - "remote" timestamp</li>
<li>
 <span class="blue">integer </span><strong> $local_timestamp</strong> <small> = <small>NULL</small></small> - "local" timestamp, defaults to time()</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function fuzzy_span($timestamp, $local_timestamp = NULL)
{
	$local_timestamp = ($local_timestamp === NULL) ? time() : (int) $local_timestamp;

	// Determine the difference in seconds
	$offset = abs($local_timestamp - $timestamp);

	if ($offset &lt;= Date::MINUTE)
	{
		$span = &#039;moments&#039;;
	}
	elseif ($offset &lt; (Date::MINUTE * 20))
	{
		$span = &#039;a few minutes&#039;;
	}
	elseif ($offset &lt; Date::HOUR)
	{
		$span = &#039;less than an hour&#039;;
	}
	elseif ($offset &lt; (Date::HOUR * 4))
	{
		$span = &#039;a couple of hours&#039;;
	}
	elseif ($offset &lt; Date::DAY)
	{
		$span = &#039;less than a day&#039;;
	}
	elseif ($offset &lt; (Date::DAY * 2))
	{
		$span = &#039;about a day&#039;;
	}
	elseif ($offset &lt; (Date::DAY * 4))
	{
		$span = &#039;a couple of days&#039;;
	}
	elseif ($offset &lt; Date::WEEK)
	{
		$span = &#039;less than a week&#039;;
	}
	elseif ($offset &lt; (Date::WEEK * 2))
	{
		$span = &#039;about a week&#039;;
	}
	elseif ($offset &lt; Date::MONTH)
	{
		$span = &#039;less than a month&#039;;
	}
	elseif ($offset &lt; (Date::MONTH * 2))
	{
		$span = &#039;about a month&#039;;
	}
	elseif ($offset &lt; (Date::MONTH * 4))
	{
		$span = &#039;a couple of months&#039;;
	}
	elseif ($offset &lt; Date::YEAR)
	{
		$span = &#039;less than a year&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 2))
	{
		$span = &#039;about a year&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 4))
	{
		$span = &#039;a couple of years&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 8))
	{
		$span = &#039;a few years&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 12))
	{
		$span = &#039;about a decade&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 24))
	{
		$span = &#039;a couple of decades&#039;;
	}
	elseif ($offset &lt; (Date::YEAR * 64))
	{
		$span = &#039;several decades&#039;;
	}
	else
	{
		$span = &#039;a long time&#039;;
	}

	if ($timestamp &lt;= $local_timestamp)
	{
		// This is in the past
		return $span.&#039; ago&#039;;
	}
	else
	{
		// This in the future
		return &#039;in &#039;.$span;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="hours"><small>public static</small>  hours([ <small>integer</small> <span class="param" title="Amount to increment each step by">$step</span> <small>= <small>integer</small> 1</small> , <small>boolean</small> <span class="param" title="Use 24-hour time">$long</span> <small>= <small>bool</small> FALSE</small> , <small>integer</small> <span class="param" title="The hour to start at">$start</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Number of hours in a day. Typically used as a shortcut for generating a
list that can be used in a form.</p>

<pre><code>$hours = Date::hours(); // 01, 02, 03, ..., 10, 11, 12
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Amount to increment each step by</li>
<li>
 <span class="blue">boolean </span><strong> $long</strong> <small> = <small>bool</small> FALSE</small> - Use 24-hour time</li>
<li>
 <span class="blue">integer </span><strong> $start</strong> <small> = <small>NULL</small></small> - The hour to start at</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - A mirrored (foo =&gt; foo) array from start-12 or start-23. 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function hours($step = 1, $long = FALSE, $start = NULL)
{
	// Default values
	$step = (int) $step;
	$long = (bool) $long;
	$hours = [];

	// Set the default start if none was specified.
	if ($start === NULL)
	{
		$start = ($long === FALSE) ? 1 : 0;
	}

	$hours = [];

	// 24-hour time has 24 hours, instead of 12
	$size = ($long === TRUE) ? 23 : 12;

	for ($i = $start; $i &lt;= $size; $i += $step)
	{
		$hours[$i] = (string) $i;
	}

	return $hours;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="minutes"><small>public static</small>  minutes([ <small>integer</small> <span class="param" title="Amount to increment each step by, 1 to 30">$step</span> <small>= <small>integer</small> 5</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Number of minutes in an hour, incrementing by a step. Typically used as
a shortcut for generating a list that can be used in a form.</p>

<pre><code>$minutes = Date::minutes(); // 05, 10, 15, ..., 50, 55, 60
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $step</strong> <small> = <small>integer</small> 5</small> - Amount to increment each step by, 1 to 30</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#seconds">Date::seconds</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - A mirrored (foo =&gt; foo) array from 1-60. 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function minutes($step = 5)
{
	// Because there are the same number of minutes as seconds in this set,
	// we choose to re-use seconds(), rather than creating an entirely new
	// function. Shhhh, it&#039;s cheating! ;) There are several more of these
	// in the following methods.
	return Date::seconds($step);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="months"><small>public static</small>  months([ <small>string</small> <span class="param" title="The format to use for months">$format</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Number of months in a year. Typically used as a shortcut for generating
a list that can be used in a form.</p>

<p>By default a mirrored array of $month_number => $month_number is returned</p>

<pre><code>Date::months();
// aray(1 =&gt; 1, 2 =&gt; 2, 3 =&gt; 3, ..., 12 =&gt; 12)
</code></pre>

<p>But you can customise this by passing in either Date::MONTHS_LONG</p>

<pre><code>Date::months(Date::MONTHS_LONG);
// array(1 =&gt; 'January', 2 =&gt; 'February', ..., 12 =&gt; 'December')
</code></pre>

<p>Or Date::MONTHS_SHORT</p>

<pre><code>Date::months(Date::MONTHS_SHORT);
// array(1 =&gt; 'Jan', 2 =&gt; 'Feb', ..., 12 =&gt; 'Dec')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $format</strong> <small> = <small>NULL</small></small> - The format to use for months</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#hours">Date::hours</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - An array of months based on the specified format 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function months($format = NULL)
{
	$months = [];

	if ($format === Date::MONTHS_LONG OR $format === Date::MONTHS_SHORT)
	{
		for ($i = 1; $i &lt;= 12; ++$i)
		{
			$months[$i] = strftime($format, mktime(0, 0, 0, $i, 1));
		}
	}
	else
	{
		$months = Date::hours();
	}

	return $months;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offset"><small>public static</small>  offset(<small>string</small> <span class="param" title="Timezone that to find the offset of">$remote</span> [, <small>string</small> <span class="param" title="Timezone used as the baseline">$local</span> <small>= <small>NULL</small></small> , <small>mixed</small> <span class="param" title="UNIX timestamp or date string">$now</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns the offset (in seconds) between two time zones. Use this to
display dates to users in different time zones.</p>

<pre><code>$seconds = Date::offset('America/Chicago', 'GMT');
</code></pre>

<p class="note">A list of time zones that PHP supports can be found at
<a href="http://php.net/timezones">http://php.net/timezones</a>.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $remote</strong> <small>required</small> - Timezone that to find the offset of</li>
<li>
 <span class="blue">string </span><strong> $local</strong> <small> = <small>NULL</small></small> - Timezone used as the baseline</li>
<li>
 <span class="blue">mixed </span><strong> $now</strong> <small> = <small>NULL</small></small> - UNIX timestamp or date string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function offset($remote, $local = NULL, $now = NULL)
{
	if ($local === NULL)
	{
		// Use the default timezone
		$local = date_default_timezone_get();
	}

	if (is_int($now))
	{
		// Convert the timestamp into a string
		$now = date(DateTime::RFC2822, $now);
	}

	// Create timezone objects
	$zone_remote = new DateTimeZone($remote);
	$zone_local  = new DateTimeZone($local);

	// Create date objects from timezones
	$time_remote = new DateTime($now, $zone_remote);
	$time_local  = new DateTime($now, $zone_local);

	// Find the offset
	$offset = $zone_remote-&gt;getOffset($time_remote) - $zone_local-&gt;getOffset($time_local);

	return $offset;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="seconds"><small>public static</small>  seconds([ <small>integer</small> <span class="param" title="Amount to increment each step by, 1 to 30">$step</span> <small>= <small>integer</small> 1</small> , <small>integer</small> <span class="param" title="Start value">$start</span> <small>= <small>integer</small> 0</small> , <small>integer</small> <span class="param" title="End value">$end</span> <small>= <small>integer</small> 60</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Number of seconds in a minute, incrementing by a step. Typically used as
a shortcut for generating a list that can used in a form.</p>

<pre><code>$seconds = Date::seconds(); // 01, 02, 03, ..., 58, 59, 60
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $step</strong> <small> = <small>integer</small> 1</small> - Amount to increment each step by, 1 to 30</li>
<li>
 <span class="blue">integer </span><strong> $start</strong> <small> = <small>integer</small> 0</small> - Start value</li>
<li>
 <span class="blue">integer </span><strong> $end</strong> <small> = <small>integer</small> 60</small> - End value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - A mirrored (foo =&gt; foo) array from 1-60. 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function seconds($step = 1, $start = 0, $end = 60)
{
	// Always integer
	$step = (int) $step;

	$seconds = [];

	for ($i = $start; $i &lt; $end; $i += $step)
	{
		$seconds[$i] = sprintf(&#039;%02d&#039;, $i);
	}

	return $seconds;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="span"><small>public static</small>  span(<small>integer</small> <span class="param" title="Timestamp to find the span of">$remote</span> [, <small>integer</small> <span class="param" title="Timestamp to use as the baseline">$local</span> <small>= <small>NULL</small></small> , <small>string</small> <span class="param" title="Formatting string">$output</span> <small>= <small>string</small><span>(45)</span> "years,months,weeks,days,hours,minutes,seconds"</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns time difference between two timestamps, in human readable format.
If the second timestamp is not given, the current time will be used.
Also consider using <a href="#fuzzy_span">Date::fuzzy_span</a> when displaying a span.</p>

<pre><code>$span = Date::span(60, 182, 'minutes,seconds'); // array('minutes' =&gt; 2, 'seconds' =&gt; 2)
$span = Date::span(60, 182, 'minutes'); // 2
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $remote</strong> <small>required</small> - Timestamp to find the span of</li>
<li>
 <span class="blue">integer </span><strong> $local</strong> <small> = <small>NULL</small></small> - Timestamp to use as the baseline</li>
<li>
 <span class="blue">string </span><strong> $output</strong> <small> = <small>string</small><span>(45)</span> "years,months,weeks,days,hours,minutes,seconds"</small> - Formatting string</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - When only a single output is requested 
</li><li>
<span class='blue'>array</span>  - Associative list of all outputs requested 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function span($remote, $local = NULL, $output = &#039;years,months,weeks,days,hours,minutes,seconds&#039;)
{
	// Normalize output
	$output = trim(strtolower( (string) $output));

	if ( ! $output)
	{
		// Invalid output
		return FALSE;
	}

	// Array with the output formats
	$output = preg_split(&#039;/[^a-z]+/&#039;, $output);

	// Convert the list of outputs to an associative array
	$output = array_combine($output, array_fill(0, count($output), 0));

	// Make the output values into keys
	extract(array_flip($output), EXTR_SKIP);

	if ($local === NULL)
	{
		// Calculate the span from the current time
		$local = time();
	}

	// Calculate timespan (seconds)
	$timespan = abs($remote - $local);

	if (isset($output[&#039;years&#039;]))
	{
		$timespan -= Date::YEAR * ($output[&#039;years&#039;] = (int) floor($timespan / Date::YEAR));
	}

	if (isset($output[&#039;months&#039;]))
	{
		$timespan -= Date::MONTH * ($output[&#039;months&#039;] = (int) floor($timespan / Date::MONTH));
	}

	if (isset($output[&#039;weeks&#039;]))
	{
		$timespan -= Date::WEEK * ($output[&#039;weeks&#039;] = (int) floor($timespan / Date::WEEK));
	}

	if (isset($output[&#039;days&#039;]))
	{
		$timespan -= Date::DAY * ($output[&#039;days&#039;] = (int) floor($timespan / Date::DAY));
	}

	if (isset($output[&#039;hours&#039;]))
	{
		$timespan -= Date::HOUR * ($output[&#039;hours&#039;] = (int) floor($timespan / Date::HOUR));
	}

	if (isset($output[&#039;minutes&#039;]))
	{
		$timespan -= Date::MINUTE * ($output[&#039;minutes&#039;] = (int) floor($timespan / Date::MINUTE));
	}

	// Seconds ago, 1
	if (isset($output[&#039;seconds&#039;]))
	{
		$output[&#039;seconds&#039;] = $timespan;
	}

	if (count($output) === 1)
	{
		// Only a single output was requested, return it
		return array_pop($output);
	}

	// Return array
	return $output;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unix2dos"><small>public static</small>  unix2dos([ <small>integer</small> <span class="param" title="UNIX timestamp">$timestamp</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Converts a UNIX timestamp to DOS format. There are very few cases where
this is needed, but some binary formats use it (eg: zip files.)
Converting the other direction is done using {@link Date::dos2unix}.</p>

<pre><code>$dos = Date::unix2dos($unix);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $timestamp</strong> <small> = <small>bool</small> FALSE</small> - UNIX timestamp</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function unix2dos($timestamp = FALSE)
{
	$timestamp = ($timestamp === FALSE) ? getdate() : getdate($timestamp);

	if ($timestamp[&#039;year&#039;] &lt; 1980)
	{
		return (1 &lt;&lt; 21 | 1 &lt;&lt; 16);
	}

	$timestamp[&#039;year&#039;] -= 1980;

	// What voodoo is this? I have no idea... Geert can explain it though,
	// and that&#039;s good enough for me.
	return ($timestamp[&#039;year&#039;]    &lt;&lt; 25 | $timestamp[&#039;mon&#039;]     &lt;&lt; 21 |
	        $timestamp[&#039;mday&#039;]    &lt;&lt; 16 | $timestamp[&#039;hours&#039;]   &lt;&lt; 11 |
	        $timestamp[&#039;minutes&#039;] &lt;&lt; 5  | $timestamp[&#039;seconds&#039;] &gt;&gt; 1);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="years"><small>public static</small>  years([ <small>integer</small> <span class="param" title="Starting year (default is current year - 5)">$start</span> <small>= <small>bool</small> FALSE</small> , <small>integer</small> <span class="param" title="Ending year (default is current year + 5)">$end</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Date'>Kohana_Date</a>)</small></h3>
<div class='description'><p>Returns an array of years between a starting and ending year. By default,
the the current year - 5 and current year + 5 will be used. Typically used
as a shortcut for generating a list that can be used in a form.</p>

<pre><code>$years = Date::years(2000, 2010); // 2000, 2001, ..., 2009, 2010
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $start</strong> <small> = <small>bool</small> FALSE</small> - Starting year (default is current year - 5)</li>
<li>
 <span class="blue">integer </span><strong> $end</strong> <small> = <small>bool</small> FALSE</small> - Ending year (default is current year + 5)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function years($start = FALSE, $end = FALSE)
{
	// Default values
	$start = ($start === FALSE) ? (date(&#039;Y&#039;) - 5) : (int) $start;
	$end   = ($end   === FALSE) ? (date(&#039;Y&#039;) + 5) : (int) $end;

	$years = [];

	for ($i = $start; $i &lt;= $end; $i++)
	{
		$years[$i] = (string) $i;
	}

	return $years;
}</code>
</pre>
</div>
</div>
</div>