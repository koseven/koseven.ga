---
layout: api
class: Database_MySQLi
---
<h1>Database_MySQLi</h1>
extends <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>
<br />
extends <a href='/documentation/api/Database'>Database</a>
<br />
extends <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>
<br />
<p>
<i><p>MySQLi database connection.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
<dt>category</dt>
<dd>Drivers</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a></p>
</div>
</div>
<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>
<div class='constants col-4'>
<h3>Constants</h3>
<ul>
<li>
<a href='#constant-SELECT'>SELECT</a>
</li>
<li>
<a href='#constant-INSERT'>INSERT</a>
</li>
<li>
<a href='#constant-UPDATE'>UPDATE</a>
</li>
<li>
<a href='#constant-DELETE'>DELETE</a>
</li>
</ul>
</div>
<div class='properties col-4'>
<h3>Properties</h3>
<ul>
<li>
<a href="#property-default">$default</a>
</li>
<li>
<a href="#property-instances">$instances</a>
</li>
<li>
<a href="#property-last_query">$last_query</a>
</li>
<li>
<a href="#property-_config">$_config</a>
</li>
<li>
<a href="#property-_connection">$_connection</a>
</li>
<li>
<a href="#property-_connection_id">$_connection_id</a>
</li>
<li>
<a href="#property-_current_databases">$_current_databases</a>
</li>
<li>
<a href="#property-_identifier">$_identifier</a>
</li>
<li>
<a href="#property-_instance">$_instance</a>
</li>
<li>
<a href="#property-_set_names">$_set_names</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#begin">begin()</a>
</li>
<li>
<a href="#commit">commit()</a>
</li>
<li>
<a href="#connect">connect()</a>
</li>
<li>
<a href="#datatype">datatype()</a>
</li>
<li>
<a href="#disconnect">disconnect()</a>
</li>
<li>
<a href="#escape">escape()</a>
</li>
<li>
<a href="#list_columns">list_columns()</a>
</li>
<li>
<a href="#list_tables">list_tables()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#rollback">rollback()</a>
</li>
<li>
<a href="#set_charset">set_charset()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#__destruct">__destruct()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#count_records">count_records()</a>
</li>
<li>
<a href="#instance">instance()</a>
</li>
<li>
<a href="#quote">quote()</a>
</li>
<li>
<a href="#quote_column">quote_column()</a>
</li>
<li>
<a href="#quote_identifier">quote_identifier()</a>
</li>
<li>
<a href="#quote_table">quote_table()</a>
</li>
<li>
<a href="#table_prefix">table_prefix()</a>
</li>
<li>
<a href="#_parse_type">_parse_type()</a>
</li>

</ul>
</div>
</div>
<div class='constant'>
<h1 id='constants'>Constants</h1>
<dl>
<dt>
<h4 id='constant-SELECT'>SELECT</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 1</pre></dd>
<dt>
<h4 id='constant-INSERT'>INSERT</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 2</pre></dd>
<dt>
<h4 id='constant-UPDATE'>UPDATE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 3</pre></dd>
<dt>
<h4 id='constant-DELETE'>DELETE</h4>
</dt>
<dd><pre class="debug"><small>integer</small> 4</pre></dd>
</dl>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-default'><small>public static</small>  <span class='blue'>string</span> $default</h4>
</dt>
<dd>
 <p>default instance name</p>
</dd>
<dd>
 <pre class="debug"><small>string</small><span>(7)</span> "default"</pre></dd>
<dt>
<h4 id='property-instances'><small>public static</small>  <span class='blue'>array</span> $instances</h4>
</dt>
<dd>
 <p>Database instances</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-last_query'><small>public</small>  <span class='blue'>string</span> $last_query</h4>
</dt>
<dd>
 <p>the last query executed</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_config'><small>protected</small>  <span class='blue'></span> $_config</h4>
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
<h4 id='property-_connection'><small>protected</small>  <span class='blue'></span> $_connection</h4>
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
<h4 id='property-_connection_id'><small>protected</small>  <span class='blue'></span> $_connection_id</h4>
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
<h4 id='property-_current_databases'><small>protected static</small>  <span class='blue'></span> $_current_databases</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_identifier'><small>protected</small>  <span class='blue'></span> $_identifier</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(1)</span> "`"</pre></dd>
<dt>
<h4 id='property-_instance'><small>protected</small>  <span class='blue'></span> $_instance</h4>
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
<h4 id='property-_set_names'><small>protected static</small>  <span class='blue'></span> $_set_names</h4>
</dt>
<dd>
 </dd>
<dd>
 <pre class="debug"><small>NULL</small></pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="begin"><small>public</small>  begin([ <small>string</small> <span class="param" title="Isolation level">$mode</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Start a SQL transaction</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $mode</strong> <small> = <small>NULL</small></small> - Isolation level</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Link - <a href="http://dev.mysql.com/doc/refman/5.0/en/set-transaction.html"></a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function begin($mode = NULL)
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	if ($mode AND ! $this-&gt;_connection-&gt;query(&quot;SET TRANSACTION ISOLATION LEVEL $mode&quot;))
	{
		throw new Database_Exception(&#039;:error&#039;, [
			&#039;:error&#039; =&gt; $this-&gt;_connection-&gt;error
		], $this-&gt;_connection-&gt;errno);
	}

	return (bool) $this-&gt;_connection-&gt;query(&#039;START TRANSACTION&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="commit"><small>public</small>  commit()<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Commit a SQL transaction</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function commit()
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	return (bool) $this-&gt;_connection-&gt;query(&#039;COMMIT&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="connect"><small>public</small>  connect()<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Connect to the database. This is called automatically when the first
query is executed.</p>

<pre><code>$db-&gt;connect();
</code></pre>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Database_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function connect()
{
	if ($this-&gt;_connection)
		return;

	if (Database_MySQLi::$_set_names === NULL)
	{
		// Determine if we can use mysqli_set_charset(), which is only
		// available on PHP 5.2.3+ when compiled against MySQL 5.0+
		Database_MySQLi::$_set_names = ! function_exists(&#039;mysqli_set_charset&#039;);
	}

	// Extract the connection parameters, adding required variabels
	extract($this-&gt;_config[&#039;connection&#039;] + [
		&#039;database&#039; =&gt; &#039;&#039;,
		&#039;hostname&#039; =&gt; &#039;&#039;,
		&#039;username&#039; =&gt; &#039;&#039;,
		&#039;password&#039; =&gt; &#039;&#039;,
		&#039;socket&#039;   =&gt; &#039;&#039;,
		&#039;port&#039;     =&gt; 3306,
		&#039;ssl&#039;      =&gt; NULL,
	]);

	// Prevent this information from showing up in traces
	unset($this-&gt;_config[&#039;connection&#039;][&#039;username&#039;], $this-&gt;_config[&#039;connection&#039;][&#039;password&#039;]);

	try
	{
		if(is_array($ssl))
		{
			$this-&gt;_connection = mysqli_init();
			$this-&gt;_connection-&gt;ssl_set(
				Arr::get($ssl, &#039;client_key_path&#039;),
				Arr::get($ssl, &#039;client_cert_path&#039;),
				Arr::get($ssl, &#039;ca_cert_path&#039;),
				Arr::get($ssl, &#039;ca_dir_path&#039;),
				Arr::get($ssl, &#039;cipher&#039;)
			);
			$this-&gt;_connection-&gt;real_connect($hostname, $username, $password, $database, $port, $socket, MYSQLI_CLIENT_SSL);
		}
		else
		{
			$this-&gt;_connection = new mysqli($hostname, $username, $password, $database, $port, $socket);
		}
	}
	catch (Exception $e)
	{
		// No connection exists
		$this-&gt;_connection = NULL;

		throw new Database_Exception(&#039;:error&#039;, [&#039;:error&#039; =&gt; $e-&gt;getMessage()], $e-&gt;getCode());
	}

	// \xFF is a better delimiter, but the PHP driver uses underscore
	$this-&gt;_connection_id = sha1($hostname.&#039;_&#039;.$username.&#039;_&#039;.$password);

	if ( ! empty($this-&gt;_config[&#039;charset&#039;]))
	{
		// Set the character set
		$this-&gt;set_charset($this-&gt;_config[&#039;charset&#039;]);
	}

	if ( ! empty($this-&gt;_config[&#039;connection&#039;][&#039;variables&#039;]))
	{
		// Set session variables
		$variables = [];

		foreach ($this-&gt;_config[&#039;connection&#039;][&#039;variables&#039;] as $var =&gt; $val)
		{
			$variables[] = &#039;SESSION &#039;.$var.&#039; = &#039;.$this-&gt;quote($val);
		}

		$this-&gt;_connection-&gt;query(&#039;SET &#039;.implode(&#039;, &#039;, $variables));
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="datatype"><small>public</small>  datatype(<small>string</small> <span class="param" title="SQL data type">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Returns a normalized array describing the SQL data type</p>

<pre><code>$db-&gt;datatype('char');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - SQL data type</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function datatype($type)
{
	static $types = [
		&#039;blob&#039;                      =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE, &#039;character_maximum_length&#039; =&gt; &#039;65535&#039;],
		&#039;bool&#039;                      =&gt; [&#039;type&#039; =&gt; &#039;bool&#039;],
		&#039;bigint unsigned&#039;           =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;18446744073709551615&#039;],
		&#039;datetime&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
		&#039;decimal unsigned&#039;          =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;exact&#039; =&gt; TRUE, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;double&#039;                    =&gt; [&#039;type&#039; =&gt; &#039;float&#039;],
		&#039;double precision unsigned&#039; =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;double unsigned&#039;           =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;enum&#039;                      =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
		&#039;fixed&#039;                     =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;exact&#039; =&gt; TRUE],
		&#039;fixed unsigned&#039;            =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;exact&#039; =&gt; TRUE, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;float unsigned&#039;            =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;geometry&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE],
		&#039;int unsigned&#039;              =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;4294967295&#039;],
		&#039;integer unsigned&#039;          =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;4294967295&#039;],
		&#039;longblob&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE, &#039;character_maximum_length&#039; =&gt; &#039;4294967295&#039;],
		&#039;longtext&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;character_maximum_length&#039; =&gt; &#039;4294967295&#039;],
		&#039;mediumblob&#039;                =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE, &#039;character_maximum_length&#039; =&gt; &#039;16777215&#039;],
		&#039;mediumint&#039;                 =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;-8388608&#039;, &#039;max&#039; =&gt; &#039;8388607&#039;],
		&#039;mediumint unsigned&#039;        =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;16777215&#039;],
		&#039;mediumtext&#039;                =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;character_maximum_length&#039; =&gt; &#039;16777215&#039;],
		&#039;national varchar&#039;          =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
		&#039;numeric unsigned&#039;          =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;exact&#039; =&gt; TRUE, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;nvarchar&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
		&#039;point&#039;                     =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE],
		&#039;real unsigned&#039;             =&gt; [&#039;type&#039; =&gt; &#039;float&#039;, &#039;min&#039; =&gt; &#039;0&#039;],
		&#039;set&#039;                       =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
		&#039;smallint unsigned&#039;         =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;65535&#039;],
		&#039;text&#039;                      =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;character_maximum_length&#039; =&gt; &#039;65535&#039;],
		&#039;tinyblob&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;binary&#039; =&gt; TRUE, &#039;character_maximum_length&#039; =&gt; &#039;255&#039;],
		&#039;tinyint&#039;                   =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;-128&#039;, &#039;max&#039; =&gt; &#039;127&#039;],
		&#039;tinyint unsigned&#039;          =&gt; [&#039;type&#039; =&gt; &#039;int&#039;, &#039;min&#039; =&gt; &#039;0&#039;, &#039;max&#039; =&gt; &#039;255&#039;],
		&#039;tinytext&#039;                  =&gt; [&#039;type&#039; =&gt; &#039;string&#039;, &#039;character_maximum_length&#039; =&gt; &#039;255&#039;],
		&#039;year&#039;                      =&gt; [&#039;type&#039; =&gt; &#039;string&#039;],
	];

	$type = str_replace(&#039; zerofill&#039;, &#039;&#039;, $type);

	if (isset($types[$type]))
		return $types[$type];

	return parent::datatype($type);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="disconnect"><small>public</small>  disconnect()<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Disconnect from the database. This is called automatically by <a href="#__destruct">Database::__destruct</a>.
Clears the database instance from <a href="#property:instances">Database::$instances</a>.</p>

<pre><code>$db-&gt;disconnect();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function disconnect()
{
	try
	{
		// Database is assumed disconnected
		$status = TRUE;

		if (is_resource($this-&gt;_connection))
		{
			if ($status = $this-&gt;_connection-&gt;close())
			{
				// Clear the connection
				$this-&gt;_connection = NULL;

				// Clear the instance
				parent::disconnect();
			}
		}
	}
	catch (Exception $e)
	{
		// Database is probably not disconnected
		$status = ! is_resource($this-&gt;_connection);
	}

	return $status;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="escape"><small>public</small>  escape(<small>string</small> <span class="param" title="Value to quote">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Sanitize a string by escaping characters that could cause an SQL
injection attack.</p>

<pre><code>$value = $db-&gt;escape('any string');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Value to quote</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function escape($value)
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	if (($value = $this-&gt;_connection-&gt;real_escape_string( (string) $value)) === FALSE)
	{
		throw new Database_Exception(&#039;:error&#039;, [
			&#039;:error&#039; =&gt; $this-&gt;_connection-&gt;error,
		], $this-&gt;_connection-&gt;errno);
	}

	// SQL standard is to use single-quotes for all values
	return &quot;&#039;$value&#039;&quot;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="list_columns"><small>public</small>  list_columns(<small>string</small> <span class="param" title="Table to get columns from">$table</span> [, <small>string</small> <span class="param" title="Column to search for">$like</span> <small>= <small>NULL</small></small> , <small>boolean</small> <span class="param" title="Whether to add the table prefix automatically or not">$add_prefix</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Lists all of the columns in a table. Optionally, a LIKE string can be
used to search for specific fields.</p>

<pre><code>// Get all columns from the "users" table
$columns = $db-&gt;list_columns('users');

// Get all name-related columns
$columns = $db-&gt;list_columns('users', '%name%');

// Get the columns from a table that doesn't use the table prefix
$columns = $db-&gt;list_columns('users', NULL, FALSE);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $table</strong> <small>required</small> - Table to get columns from</li>
<li>
 <span class="blue">string </span><strong> $like</strong> <small> = <small>NULL</small></small> - Column to search for</li>
<li>
 <span class="blue">boolean </span><strong> $add_prefix</strong> <small> = <small>bool</small> TRUE</small> - Whether to add the table prefix automatically or not</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function list_columns($table, $like = NULL, $add_prefix = TRUE)
{
	// Quote the table name
	$table = ($add_prefix === TRUE) ? $this-&gt;quote_table($table) : $table;

	if (is_string($like))
	{
		// Search for column names
		$result = $this-&gt;query(Database::SELECT, &#039;SHOW FULL COLUMNS FROM &#039;.$table.&#039; LIKE &#039;.$this-&gt;quote($like), FALSE);
	}
	else
	{
		// Find all column names
		$result = $this-&gt;query(Database::SELECT, &#039;SHOW FULL COLUMNS FROM &#039;.$table, FALSE);
	}

	$count = 0;
	$columns = [];
	foreach ($result as $row)
	{
		list($type, $length) = $this-&gt;_parse_type($row[&#039;Type&#039;]);

		$column = $this-&gt;datatype($type);

		$column[&#039;column_name&#039;]      = $row[&#039;Field&#039;];
		$column[&#039;column_default&#039;]   = $row[&#039;Default&#039;];
		$column[&#039;data_type&#039;]        = $type;
		$column[&#039;is_nullable&#039;]      = ($row[&#039;Null&#039;] == &#039;YES&#039;);
		$column[&#039;ordinal_position&#039;] = ++$count;

		switch ($column[&#039;type&#039;])
		{
			case &#039;float&#039;:
				if (isset($length))
				{
					list($column[&#039;numeric_precision&#039;], $column[&#039;numeric_scale&#039;]) = explode(&#039;,&#039;, $length);
				}
			break;
			case &#039;int&#039;:
				if (isset($length))
				{
					// MySQL attribute
					$column[&#039;display&#039;] = $length;
				}
			break;
			case &#039;string&#039;:
				switch ($column[&#039;data_type&#039;])
				{
					case &#039;binary&#039;:
					case &#039;varbinary&#039;:
						$column[&#039;character_maximum_length&#039;] = $length;
					break;
					case &#039;char&#039;:
					case &#039;varchar&#039;:
						$column[&#039;character_maximum_length&#039;] = $length;
					case &#039;text&#039;:
					case &#039;tinytext&#039;:
					case &#039;mediumtext&#039;:
					case &#039;longtext&#039;:
						$column[&#039;collation_name&#039;] = $row[&#039;Collation&#039;];
					break;
					case &#039;enum&#039;:
					case &#039;set&#039;:
						$column[&#039;collation_name&#039;] = $row[&#039;Collation&#039;];
						$column[&#039;options&#039;] = explode(&#039;\&#039;,\&#039;&#039;, substr($length, 1, -1));
					break;
				}
			break;
		}

		// MySQL attributes
		$column[&#039;comment&#039;]      = $row[&#039;Comment&#039;];
		$column[&#039;extra&#039;]        = $row[&#039;Extra&#039;];
		$column[&#039;key&#039;]          = $row[&#039;Key&#039;];
		$column[&#039;privileges&#039;]   = $row[&#039;Privileges&#039;];

		$columns[$row[&#039;Field&#039;]] = $column;
	}

	return $columns;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="list_tables"><small>public</small>  list_tables([ <small>string</small> <span class="param" title="Table to search for">$like</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>List all of the tables in the database. Optionally, a LIKE string can
be used to search for specific tables.</p>

<pre><code>// Get all tables in the current database
$tables = $db-&gt;list_tables();

// Get all user-related tables
$tables = $db-&gt;list_tables('user%');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $like</strong> <small> = <small>NULL</small></small> - Table to search for</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function list_tables($like = NULL)
{
	if (is_string($like))
	{
		// Search for table names
		$result = $this-&gt;query(Database::SELECT, &#039;SHOW TABLES LIKE &#039;.$this-&gt;quote($like), FALSE);
	}
	else
	{
		// Find all table names
		$result = $this-&gt;query(Database::SELECT, &#039;SHOW TABLES&#039;, FALSE);
	}

	$tables = [];
	foreach ($result as $row)
	{
		$tables[] = reset($row);
	}

	return $tables;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>public</small>  query(<small>integer</small> <span class="param" title="Database::SELECT, Database::INSERT, etc">$type</span> , <small>string</small> <span class="param" title="SQL query">$sql</span> [, <small>mixed</small> <span class="param" title="Result object class string, TRUE for stdClass, FALSE for assoc array">$as_object</span> <small>= <small>bool</small> FALSE</small> , <small>array</small> <span class="param" title="Object construct parameters for result class">$params</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Perform an SQL query of the given type.</p>

<pre><code>// Make a SELECT query and use objects for results
$db-&gt;query(Database::SELECT, 'SELECT * FROM groups', TRUE);

// Make a SELECT query and use "Model_User" for the results
$db-&gt;query(Database::SELECT, 'SELECT * FROM users LIMIT 1', 'Model_User');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $type</strong> <small>required</small> - Database::SELECT, Database::INSERT, etc</li>
<li>
 <span class="blue">string </span><strong> $sql</strong> <small>required</small> - SQL query</li>
<li>
 <span class="blue">mixed </span><strong> $as_object</strong> <small> = <small>bool</small> FALSE</small> - Result object class string, TRUE for stdClass, FALSE for assoc array</li>
<li>
 <span class="blue">array </span><strong> $params</strong> <small> = <small>NULL</small></small> - Object construct parameters for result class</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>object</span>  - Database_Result for SELECT queries 
</li><li>
<span class='blue'>array</span>  - List (insert id, row count) for INSERT queries 
</li><li>
<span class='blue'>integer</span>  - Number of affected rows for all other queries 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function query($type, $sql, $as_object = FALSE, array $params = NULL)
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	if (Kohana::$profiling)
	{
		// Benchmark this query for the current instance
		$benchmark = Profiler::start(&quot;Database ({$this-&gt;_instance})&quot;, $sql);
	}

	// Execute the query
	if (($result = $this-&gt;_connection-&gt;query($sql)) === FALSE)
	{
		if (isset($benchmark))
		{
			// This benchmark is worthless
			Profiler::delete($benchmark);
		}

		throw new Database_Exception(&#039;:error [ :query ]&#039;, [
			&#039;:error&#039; =&gt; $this-&gt;_connection-&gt;error,
			&#039;:query&#039; =&gt; $sql
		], $this-&gt;_connection-&gt;errno);
	}

	if (isset($benchmark))
	{
		Profiler::stop($benchmark);
	}

	// Set the last query
	$this-&gt;last_query = $sql;

	if ($type === Database::SELECT)
	{
		// Return an iterator of results
		return new Database_MySQLi_Result($result, $sql, $as_object, $params);
	}
	elseif ($type === Database::INSERT)
	{
		// Return a list of insert id and rows created
		return [
			$this-&gt;_connection-&gt;insert_id,
			$this-&gt;_connection-&gt;affected_rows,
		];
	}
	else
	{
		// Return the number of rows affected
		return $this-&gt;_connection-&gt;affected_rows;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rollback"><small>public</small>  rollback()<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Rollback a SQL transaction</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rollback()
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	return (bool) $this-&gt;_connection-&gt;query(&#039;ROLLBACK&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set_charset"><small>public</small>  set_charset(<small>string</small> <span class="param" title="Character set name">$charset</span> )<small> (defined in <a href='/documentation/api/Kohana_Database_MySQLi'>Kohana_Database_MySQLi</a>)</small></h3>
<div class='description'><p>Set the connection character set. This is called automatically by <a href="#connect">Database::connect</a>.</p>

<pre><code>$db-&gt;set_charset('utf8');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $charset</strong> <small>required</small> - Character set name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Database_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set_charset($charset)
{
	// Make sure the database is connected
	$this-&gt;_connection or $this-&gt;connect();

	if (Database_MySQLi::$_set_names === TRUE)
	{
		// PHP is compiled against MySQL 4.x
		$status = (bool) $this-&gt;_connection-&gt;query(&#039;SET NAMES &#039;.$this-&gt;quote($charset));
	}
	else
	{
		// PHP is compiled against MySQL 5.x
		$status = $this-&gt;_connection-&gt;set_charset($charset);
	}

	if ($status === FALSE)
	{
		throw new Database_Exception(&#039;:error&#039;, [&#039;:error&#039; =&gt; $this-&gt;_connection-&gt;error], $this-&gt;_connection-&gt;errno);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct()<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Stores the database configuration locally and name the instance.</p>

<p class="note">This method cannot be accessed directly, you must use <a href="#instance">Database::instance</a>.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($name, array $config)
{
	// Set the instance name
	$this-&gt;_instance = $name;

	// Store the config locally
	$this-&gt;_config = $config;

	if (empty($this-&gt;_config[&#039;table_prefix&#039;]))
	{
		$this-&gt;_config[&#039;table_prefix&#039;] = &#039;&#039;;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__destruct"><small>public</small>  __destruct()<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Disconnect from the database when the object is destroyed.</p>

<pre><code>// Destroy the database instance
unset(Database::instances[(string) $db], $db);
</code></pre>

<p class="note">Calling <code>unset($db)</code> is not enough to destroy the database, as it
will still be stored in <code>Database::$instances</code>.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __destruct()
{
	$this-&gt;disconnect();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Returns the database instance name.</p>

<pre><code>echo (string) $db;
</code></pre>
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
	return $this-&gt;_instance;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="count_records"><small>public</small>  count_records(<small>mixed</small> <span class="param" title="Table name string or array(query, alias)">$table</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Count the number of records in a table.</p>

<pre><code>// Get the total number of records in the "users" table
$count = $db-&gt;count_records('users');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $table</strong> <small>required</small> - Table name string or array(query, alias)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function count_records($table)
{
	// Quote the table name
	$table = $this-&gt;quote_table($table);

	return $this-&gt;query(Database::SELECT, &#039;SELECT COUNT(*) AS total_row_count FROM &#039;.$table, FALSE)
		-&gt;get(&#039;total_row_count&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="instance"><small>public static</small>  instance([ <small>string</small> <span class="param" title="Instance name">$name</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="Configuration parameters">$config</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Get a singleton Database instance. If configuration is not specified,
it will be loaded from the database configuration file using the same
group as the name.</p>

<pre><code>// Load the default database
$db = Database::instance();

// Create a custom configured instance
$db = Database::instance('custom', $config);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $name</strong> <small> = <small>NULL</small></small> - Instance name</li>
<li>
 <span class="blue">array </span><strong> $config</strong> <small> = <small>NULL</small></small> - Configuration parameters</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function instance($name = NULL, array $config = NULL)
{
	if ($name === NULL)
	{
		// Use the default instance name
		$name = Database::$default;
	}

	if ( ! isset(Database::$instances[$name]))
	{
		if ($config === NULL)
		{
			// Load the configuration for this database
			$config = Kohana::$config-&gt;load(&#039;database&#039;)-&gt;$name;
		}

		if ( ! isset($config[&#039;type&#039;]))
		{
			throw new Kohana_Exception(&#039;Database type not defined in :name configuration&#039;,
				[&#039;:name&#039; =&gt; $name]);
		}

		// Set the driver class name
		$driver = &#039;Database_&#039;.ucfirst($config[&#039;type&#039;]);

		// Create the database connection instance
		$driver = new $driver($name, $config);

		// Store the database instance
		Database::$instances[$name] = $driver;
	}

	return Database::$instances[$name];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="quote"><small>public</small>  quote(<small>mixed</small> <span class="param" title="Any value to quote">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Quote a value for an SQL query.</p>

<pre><code>$db-&gt;quote(NULL);   // 'NULL'
$db-&gt;quote(10);     // 10
$db-&gt;quote('fred'); // 'fred'
</code></pre>

<p>Objects passed to this function will be converted to strings.
<a href="/index.php/">Database_Expression</a> objects will be compiled.
<a href="/index.php/">Database_Query</a> objects will be compiled and converted to a sub-query.
All other objects will be converted using the <code>__toString</code> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Any value to quote</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#escape">Database::escape</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function quote($value)
{
	if ($value === NULL)
	{
		return &#039;NULL&#039;;
	}
	elseif ($value === TRUE)
	{
		return &quot;&#039;1&#039;&quot;;
	}
	elseif ($value === FALSE)
	{
		return &quot;&#039;0&#039;&quot;;
	}
	elseif (is_object($value))
	{
		if ($value instanceof Database_Query)
		{
			// Create a sub-query
			return &#039;(&#039;.$value-&gt;compile($this).&#039;)&#039;;
		}
		elseif ($value instanceof Database_Expression)
		{
			// Compile the expression
			return $value-&gt;compile($this);
		}
		else
		{
			// Convert the object to a string
			return $this-&gt;quote( (string) $value);
		}
	}
	elseif (is_array($value))
	{
		return &#039;(&#039;.implode(&#039;, &#039;, array_map([$this, __FUNCTION__], $value)).&#039;)&#039;;
	}
	elseif (is_int($value))
	{
		return (int) $value;
	}
	elseif (is_float($value))
	{
		// Convert to non-locale aware float to prevent possible commas
		return sprintf(&#039;%F&#039;, $value);
	}

	return $this-&gt;escape($value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="quote_column"><small>public</small>  quote_column(<small>mixed</small> <span class="param" title="Column name or array(column, alias)">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Quote a database column name and add the table prefix if needed.</p>

<pre><code>$column = $db-&gt;quote_column($column);
</code></pre>

<p>You can also use SQL methods within identifiers.</p>

<pre><code>$column = $db-&gt;quote_column(DB::expr('COUNT(`column`)'));
</code></pre>

<p>Objects passed to this function will be converted to strings.
<a href="/index.php/">Database_Expression</a> objects will be compiled.
<a href="/index.php/">Database_Query</a> objects will be compiled and converted to a sub-query.
All other objects will be converted using the <code>__toString</code> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array(column, alias)</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#quote_identifier">Database::quote_identifier</a>, <a href="#table_prefix">Database::table_prefix</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function quote_column($column)
{
	// Identifiers are escaped by repeating them
	$escaped_identifier = $this-&gt;_identifier.$this-&gt;_identifier;

	if (is_array($column))
	{
		list($column, $alias) = $column;
		$alias = str_replace($this-&gt;_identifier, $escaped_identifier, $alias);
	}

	if ($column instanceof Database_Query)
	{
		// Create a sub-query
		$column = &#039;(&#039;.$column-&gt;compile($this).&#039;)&#039;;
	}
	elseif ($column instanceof Database_Expression)
	{
		// Compile the expression
		$column = $column-&gt;compile($this);
	}
	else
	{
		// Convert to a string
		$column = (string) $column;

		$column = str_replace($this-&gt;_identifier, $escaped_identifier, $column);

		if ($column === &#039;*&#039;)
		{
			return $column;
		}
		elseif (strpos($column, &#039;.&#039;) !== FALSE)
		{
			$parts = explode(&#039;.&#039;, $column);

			if ($prefix = $this-&gt;table_prefix())
			{
				// Get the offset of the table name, 2nd-to-last part
				$offset = count($parts) - 2;

				// Add the table prefix to the table name
				$parts[$offset] = $prefix.$parts[$offset];
			}

			foreach ($parts as &amp; $part)
			{
				if ($part !== &#039;*&#039;)
				{
					// Quote each of the parts
					$part = $this-&gt;_identifier.$part.$this-&gt;_identifier;
				}
			}

			$column = implode(&#039;.&#039;, $parts);
		}
		else
		{
			$column = $this-&gt;_identifier.$column.$this-&gt;_identifier;
		}
	}

	if (isset($alias))
	{
		$column .= &#039; AS &#039;.$this-&gt;_identifier.$alias.$this-&gt;_identifier;
	}

	return $column;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="quote_identifier"><small>public</small>  quote_identifier(<small>mixed</small> <span class="param" title="Any identifier">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Quote a database identifier</p>

<p>Objects passed to this function will be converted to strings.
<a href="/index.php/">Database_Expression</a> objects will be compiled.
<a href="/index.php/">Database_Query</a> objects will be compiled and converted to a sub-query.
All other objects will be converted using the <code>__toString</code> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Any identifier</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function quote_identifier($value)
{
	// Identifiers are escaped by repeating them
	$escaped_identifier = $this-&gt;_identifier.$this-&gt;_identifier;

	if (is_array($value))
	{
		list($value, $alias) = $value;
		$alias = str_replace($this-&gt;_identifier, $escaped_identifier, $alias);
	}

	if ($value instanceof Database_Query)
	{
		// Create a sub-query
		$value = &#039;(&#039;.$value-&gt;compile($this).&#039;)&#039;;
	}
	elseif ($value instanceof Database_Expression)
	{
		// Compile the expression
		$value = $value-&gt;compile($this);
	}
	else
	{
		// Convert to a string
		$value = (string) $value;

		$value = str_replace($this-&gt;_identifier, $escaped_identifier, $value);

		if (strpos($value, &#039;.&#039;) !== FALSE)
		{
			$parts = explode(&#039;.&#039;, $value);

			foreach ($parts as &amp; $part)
			{
				// Quote each of the parts
				$part = $this-&gt;_identifier.$part.$this-&gt;_identifier;
			}

			$value = implode(&#039;.&#039;, $parts);
		}
		else
		{
			$value = $this-&gt;_identifier.$value.$this-&gt;_identifier;
		}
	}

	if (isset($alias))
	{
		$value .= &#039; AS &#039;.$this-&gt;_identifier.$alias.$this-&gt;_identifier;
	}

	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="quote_table"><small>public</small>  quote_table(<small>mixed</small> <span class="param" title="Table name or array(table, alias)">$table</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Quote a database table name and adds the table prefix if needed.</p>

<pre><code>$table = $db-&gt;quote_table($table);
</code></pre>

<p>Objects passed to this function will be converted to strings.
<a href="/index.php/">Database_Expression</a> objects will be compiled.
<a href="/index.php/">Database_Query</a> objects will be compiled and converted to a sub-query.
All other objects will be converted using the <code>__toString</code> method.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $table</strong> <small>required</small> - Table name or array(table, alias)</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#quote_identifier">Database::quote_identifier</a>, <a href="#table_prefix">Database::table_prefix</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function quote_table($table)
{
	// Identifiers are escaped by repeating them
	$escaped_identifier = $this-&gt;_identifier.$this-&gt;_identifier;

	if (is_array($table))
	{
		list($table, $alias) = $table;
		$alias = str_replace($this-&gt;_identifier, $escaped_identifier, $alias);
	}

	if ($table instanceof Database_Query)
	{
		// Create a sub-query
		$table = &#039;(&#039;.$table-&gt;compile($this).&#039;)&#039;;
	}
	elseif ($table instanceof Database_Expression)
	{
		// Compile the expression
		$table = $table-&gt;compile($this);
	}
	else
	{
		// Convert to a string
		$table = (string) $table;

		$table = str_replace($this-&gt;_identifier, $escaped_identifier, $table);

		if (strpos($table, &#039;.&#039;) !== FALSE)
		{
			$parts = explode(&#039;.&#039;, $table);

			if ($prefix = $this-&gt;table_prefix())
			{
				// Get the offset of the table name, last part
				$offset = count($parts) - 1;

				// Add the table prefix to the table name
				$parts[$offset] = $prefix.$parts[$offset];
			}

			foreach ($parts as &amp; $part)
			{
				// Quote each of the parts
				$part = $this-&gt;_identifier.$part.$this-&gt;_identifier;
			}

			$table = implode(&#039;.&#039;, $parts);
		}
		else
		{
			// Add the table prefix
			$table = $this-&gt;_identifier.$this-&gt;table_prefix().$table.$this-&gt;_identifier;
		}
	}

	if (isset($alias))
	{
		// Attach table prefix to alias
		$table .= &#039; AS &#039;.$this-&gt;_identifier.$this-&gt;table_prefix().$alias.$this-&gt;_identifier;
	}

	return $table;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="table_prefix"><small>public</small>  table_prefix()<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Return the table prefix defined in the current configuration.</p>

<pre><code>$prefix = $db-&gt;table_prefix();
</code></pre>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function table_prefix()
{
	return $this-&gt;_config[&#039;table_prefix&#039;];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_parse_type"><small>protected</small>  _parse_type(<small>string</small> <span class="param" title="$type">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_Database'>Kohana_Database</a>)</small></h3>
<div class='description'><p>Extracts the text between parentheses, if any.</p>

<pre><code>// Returns: array('CHAR', '6')
list($type, $length) = $db-&gt;_parse_type('CHAR(6)');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $type</strong> <small>required</small> - $type</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - List containing the type and length, if any 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _parse_type($type)
{
	if (($open = strpos($type, &#039;(&#039;)) === FALSE)
	{
		// No length specified
		return [$type, NULL];
	}

	// Closing parenthesis
	$close = strrpos($type, &#039;)&#039;, $open);

	// Length without parentheses
	$length = substr($type, $open + 1, $close - 1 - $open);

	// Type without the length
	$type = substr($type, 0, $open).substr($type, $close + 1);

	return [$type, $length];
}</code>
</pre>
</div>
</div>
</div>