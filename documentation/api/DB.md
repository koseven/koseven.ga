---
layout: api
class: DB
---
<h1>DB</h1>
extends <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>
<br />
<p>
<i><p>Provides a shortcut to get Database related objects for <a href="../database/query">making queries</a>.</p>

<table>
<thead>
<tr>
  <th>Shortcut</th>
  <th>Returned Object</th>
</tr>
</thead>
<tbody>
<tr>
  <td><a href="#query"><code>DB::query()</code></a></td>
  <td><a href="/index.php/">Database_Query</a></td>
</tr>
<tr>
  <td><a href="#insert"><code>DB::insert()</code></a></td>
  <td><a href="/index.php/">Database_Query_Builder_Insert</a></td>
</tr>
<tr>
  <td><a href="#select"><code>DB::select()</code></a>,<br /><a href="#select_array"><code>DB::select_array()</code></a></td>
  <td><a href="/index.php/">Database_Query_Builder_Select</a></td>
</tr>
<tr>
  <td><a href="#update"><code>DB::update()</code></a></td>
  <td><a href="/index.php/">Database_Query_Builder_Update</a></td>
</tr>
<tr>
  <td><a href="#delete"><code>DB::delete()</code></a></td>
  <td><a href="/index.php/">Database_Query_Builder_Delete</a></td>
</tr>
<tr>
  <td><a href="#expr"><code>DB::expr()</code></a></td>
  <td><a href="/index.php/">Database_Expression</a></td>
</tr>
</tbody>
</table>

<p>You pass the same parameters to these functions as you pass to the objects they return.</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Database</dd>
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
<p>This class is a transparent base class for <a href='/documentation/api/Kohana_DB'>Kohana_DB</a></p>
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
<em>None</em>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#expr">expr()</a>
</li>
<li>
<a href="#insert">insert()</a>
</li>
<li>
<a href="#query">query()</a>
</li>
<li>
<a href="#select">select()</a>
</li>
<li>
<a href="#select_array">select_array()</a>
</li>
<li>
<a href="#update">update()</a>
</li>

</ul>
</div>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="delete"><small>public static</small>  delete([ <small>string</small> <span class="param" title="Table to delete from">$table</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query_Builder_Delete</a>.</p>

<pre><code>// DELETE FROM users
$query = DB::delete('users');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $table</strong> <small> = <small>NULL</small></small> - Table to delete from</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query_Builder_Delete</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function delete($table = NULL)
{
	return new Database_Query_Builder_Delete($table);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="expr"><small>public static</small>  expr(<small>string</small> <span class="param" title="Expression">$string</span> [, <small>array</small> <span class="param" title="Parameters">$parameters</span> <small>= <small>array</small><span>(0)</span> </small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Expression</a> which is not escaped. An expression
is the only way to use SQL functions within query builders.</p>

<pre><code>$expression = DB::expr('COUNT(users.id)');
$query = DB::update('users')-&gt;set(array('login_count' =&gt; DB::expr('login_count + 1')))-&gt;where('id', '=', $id);
$users = ORM::factory('user')-&gt;where(DB::expr("BINARY `hash`"), '=', $hash)-&gt;find();
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $string</strong> <small>required</small> - Expression</li>
<li>
 <span class="blue">array </span><strong> $parameters</strong> <small> = <small>array</small><span>(0)</span> </small> - Parameters</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Expression</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function expr($string, $parameters = [])
{
	return new Database_Expression($string, $parameters);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="insert"><small>public static</small>  insert([ <small>string</small> <span class="param" title="Table to insert into">$table</span> <small>= <small>NULL</small></small> , <small>array</small> <span class="param" title="List of column names or array($column, $alias) or object">$columns</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query_Builder_Insert</a>.</p>

<pre><code>// INSERT INTO users (id, username)
$query = DB::insert('users', array('id', 'username'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $table</strong> <small> = <small>NULL</small></small> - Table to insert into</li>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small> = <small>NULL</small></small> - List of column names or array($column, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query_Builder_Insert</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function insert($table = NULL, array $columns = NULL)
{
	return new Database_Query_Builder_Insert($table, $columns);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="query"><small>public static</small>  query(<small>integer</small> <span class="param" title="Type: Database::SELECT, Database::UPDATE, etc">$type</span> , <small>string</small> <span class="param" title="SQL statement">$sql</span> )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query</a> of the given type.</p>

<pre><code>// Create a new SELECT query
$query = DB::query(Database::SELECT, 'SELECT * FROM users');

// Create a new DELETE query
$query = DB::query(Database::DELETE, 'DELETE FROM users WHERE id = 5');
</code></pre>

<p>Specifying the type changes the returned result. When using
<code>Database::SELECT</code>, a <a href="/index.php/">Database_Query_Result</a> will be returned.
<code>Database::INSERT</code> queries will return the insert id and number of rows.
For all other queries, the number of affected rows is returned.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $type</strong> <small>required</small> - Type: Database::SELECT, Database::UPDATE, etc</li>
<li>
 <span class="blue">string </span><strong> $sql</strong> <small>required</small> - SQL statement</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function query($type, $sql)
{
	return new Database_Query($type, $sql);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="select"><small>public static</small>  select([ <small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$columns</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query_Builder_Select</a>. Each argument will be
treated as a column. To generate a <code>foo AS bar</code> alias, use an array.</p>

<pre><code>// SELECT id, username
$query = DB::select('id', 'username');

// SELECT id AS user_id
$query = DB::select(array('id', 'user_id'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $columns</strong> <small> = <small>NULL</small></small> - Column name or array($column, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query_Builder_Select</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function select($columns = NULL)
{
	return new Database_Query_Builder_Select(func_get_args());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="select_array"><small>public static</small>  select_array([ <small>array</small> <span class="param" title="Columns to select">$columns</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query_Builder_Select</a> from an array of columns.</p>

<pre><code>// SELECT id, username
$query = DB::select_array(array('id', 'username'));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $columns</strong> <small> = <small>NULL</small></small> - Columns to select</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query_Builder_Select</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function select_array(array $columns = NULL)
{
	return new Database_Query_Builder_Select($columns);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="update"><small>public static</small>  update([ <small>string</small> <span class="param" title="Table to update">$table</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_DB'>Kohana_DB</a>)</small></h3>
<div class='description'><p>Create a new <a href="/index.php/">Database_Query_Builder_Update</a>.</p>

<pre><code>// UPDATE users
$query = DB::update('users');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $table</strong> <small> = <small>NULL</small></small> - Table to update</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Query_Builder_Update</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function update($table = NULL)
{
	return new Database_Query_Builder_Update($table);
}</code>
</pre>
</div>
</div>
</div>