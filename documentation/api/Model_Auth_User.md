---
layout: api
class: Model_Auth_User
---
<h1>Model_Auth_User</h1>
extends <a href='/documentation/api/ORM'>ORM</a>
<br />
extends <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>
<br />
extends <a href='/documentation/api/Model'>Model</a>
<br />
extends <a href='/documentation/api/Kohana_Model'>Kohana_Model</a>
<br />
<p class='interfaces'>
<small>Implements: <a href='/documentation/api/Serializable'>Serializable</a></small>
</p>
<p>
<i><p>Default auth user</p>
</i>
</p>
<dl class='tags'>
<dt>package</dt>
<dd>Kohana/Auth</dd>
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
<a href="#property-_behaviors">$_behaviors</a>
</li>
<li>
<a href="#property-_belongs_to">$_belongs_to</a>
</li>
<li>
<a href="#property-_cast_data">$_cast_data</a>
</li>
<li>
<a href="#property-_changed">$_changed</a>
</li>
<li>
<a href="#property-_column_cache">$_column_cache</a>
</li>
<li>
<a href="#property-_created_column">$_created_column</a>
</li>
<li>
<a href="#property-_db">$_db</a>
</li>
<li>
<a href="#property-_db_applied">$_db_applied</a>
</li>
<li>
<a href="#property-_db_builder">$_db_builder</a>
</li>
<li>
<a href="#property-_db_group">$_db_group</a>
</li>
<li>
<a href="#property-_db_pending">$_db_pending</a>
</li>
<li>
<a href="#property-_db_reset">$_db_reset</a>
</li>
<li>
<a href="#property-_errors_filename">$_errors_filename</a>
</li>
<li>
<a href="#property-_foreign_key_suffix">$_foreign_key_suffix</a>
</li>
<li>
<a href="#property-_has_many">$_has_many</a>
</li>
<li>
<a href="#property-_has_one">$_has_one</a>
</li>
<li>
<a href="#property-_init_cache">$_init_cache</a>
</li>
<li>
<a href="#property-_load_with">$_load_with</a>
</li>
<li>
<a href="#property-_loaded">$_loaded</a>
</li>
<li>
<a href="#property-_object">$_object</a>
</li>
<li>
<a href="#property-_object_name">$_object_name</a>
</li>
<li>
<a href="#property-_object_plural">$_object_plural</a>
</li>
<li>
<a href="#property-_original_values">$_original_values</a>
</li>
<li>
<a href="#property-_primary_key">$_primary_key</a>
</li>
<li>
<a href="#property-_primary_key_value">$_primary_key_value</a>
</li>
<li>
<a href="#property-_private_columns">$_private_columns</a>
</li>
<li>
<a href="#property-_related">$_related</a>
</li>
<li>
<a href="#property-_reload_on_wakeup">$_reload_on_wakeup</a>
</li>
<li>
<a href="#property-_saved">$_saved</a>
</li>
<li>
<a href="#property-_serialize_columns">$_serialize_columns</a>
</li>
<li>
<a href="#property-_sorting">$_sorting</a>
</li>
<li>
<a href="#property-_table_columns">$_table_columns</a>
</li>
<li>
<a href="#property-_table_name">$_table_name</a>
</li>
<li>
<a href="#property-_table_names_plural">$_table_names_plural</a>
</li>
<li>
<a href="#property-_updated_column">$_updated_column</a>
</li>
<li>
<a href="#property-_valid">$_valid</a>
</li>
<li>
<a href="#property-_validation">$_validation</a>
</li>
<li>
<a href="#property-_with_applied">$_with_applied</a>
</li>
</ul>
</div>
<div class='methods col-4'>
<h3>Methods</h3>
<ul>
<li>
<a href="#complete_login">complete_login()</a>
</li>
<li>
<a href="#create_user">create_user()</a>
</li>
<li>
<a href="#filters">filters()</a>
</li>
<li>
<a href="#get_password_validation">get_password_validation()</a>
</li>
<li>
<a href="#labels">labels()</a>
</li>
<li>
<a href="#rules">rules()</a>
</li>
<li>
<a href="#unique_key">unique_key()</a>
</li>
<li>
<a href="#unique_key_exists">unique_key_exists()</a>
</li>
<li>
<a href="#update_user">update_user()</a>
</li>
<li>
<a href="#__construct">__construct()</a>
</li>
<li>
<a href="#__get">__get()</a>
</li>
<li>
<a href="#__isset">__isset()</a>
</li>
<li>
<a href="#__set">__set()</a>
</li>
<li>
<a href="#__toString">__toString()</a>
</li>
<li>
<a href="#__unset">__unset()</a>
</li>
<li>
<a href="#add">add()</a>
</li>
<li>
<a href="#and_having">and_having()</a>
</li>
<li>
<a href="#and_having_close">and_having_close()</a>
</li>
<li>
<a href="#and_having_open">and_having_open()</a>
</li>
<li>
<a href="#and_where">and_where()</a>
</li>
<li>
<a href="#and_where_close">and_where_close()</a>
</li>
<li>
<a href="#and_where_open">and_where_open()</a>
</li>
<li>
<a href="#as_array">as_array()</a>
</li>
<li>
<a href="#as_object">as_object()</a>
</li>
<li>
<a href="#behaviors">behaviors()</a>
</li>
<li>
<a href="#belongs_to">belongs_to()</a>
</li>
<li>
<a href="#cached">cached()</a>
</li>
<li>
<a href="#changed">changed()</a>
</li>
<li>
<a href="#check">check()</a>
</li>
<li>
<a href="#clear">clear()</a>
</li>
<li>
<a href="#count_all">count_all()</a>
</li>
<li>
<a href="#count_relations">count_relations()</a>
</li>
<li>
<a href="#create">create()</a>
</li>
<li>
<a href="#created_column">created_column()</a>
</li>
<li>
<a href="#delete">delete()</a>
</li>
<li>
<a href="#distinct">distinct()</a>
</li>
<li>
<a href="#errors_filename">errors_filename()</a>
</li>
<li>
<a href="#factory">factory()</a>
</li>
<li>
<a href="#find">find()</a>
</li>
<li>
<a href="#find_all">find_all()</a>
</li>
<li>
<a href="#from">from()</a>
</li>
<li>
<a href="#get">get()</a>
</li>
<li>
<a href="#group_by">group_by()</a>
</li>
<li>
<a href="#has">has()</a>
</li>
<li>
<a href="#has_any">has_any()</a>
</li>
<li>
<a href="#has_many">has_many()</a>
</li>
<li>
<a href="#has_one">has_one()</a>
</li>
<li>
<a href="#having">having()</a>
</li>
<li>
<a href="#having_close">having_close()</a>
</li>
<li>
<a href="#having_open">having_open()</a>
</li>
<li>
<a href="#join">join()</a>
</li>
<li>
<a href="#last_query">last_query()</a>
</li>
<li>
<a href="#limit">limit()</a>
</li>
<li>
<a href="#list_columns">list_columns()</a>
</li>
<li>
<a href="#load_with">load_with()</a>
</li>
<li>
<a href="#loaded">loaded()</a>
</li>
<li>
<a href="#object">object()</a>
</li>
<li>
<a href="#object_name">object_name()</a>
</li>
<li>
<a href="#object_plural">object_plural()</a>
</li>
<li>
<a href="#offset">offset()</a>
</li>
<li>
<a href="#on">on()</a>
</li>
<li>
<a href="#or_having">or_having()</a>
</li>
<li>
<a href="#or_having_close">or_having_close()</a>
</li>
<li>
<a href="#or_having_open">or_having_open()</a>
</li>
<li>
<a href="#or_where">or_where()</a>
</li>
<li>
<a href="#or_where_close">or_where_close()</a>
</li>
<li>
<a href="#or_where_open">or_where_open()</a>
</li>
<li>
<a href="#order_by">order_by()</a>
</li>
<li>
<a href="#original_values">original_values()</a>
</li>
<li>
<a href="#param">param()</a>
</li>
<li>
<a href="#pk">pk()</a>
</li>
<li>
<a href="#primary_key">primary_key()</a>
</li>
<li>
<a href="#quote_table">quote_table()</a>
</li>
<li>
<a href="#reload">reload()</a>
</li>
<li>
<a href="#reload_columns">reload_columns()</a>
</li>
<li>
<a href="#remove">remove()</a>
</li>
<li>
<a href="#reset">reset()</a>
</li>
<li>
<a href="#save">save()</a>
</li>
<li>
<a href="#saved">saved()</a>
</li>
<li>
<a href="#select">select()</a>
</li>
<li>
<a href="#serialize">serialize()</a>
</li>
<li>
<a href="#set">set()</a>
</li>
<li>
<a href="#table_column_type">table_column_type()</a>
</li>
<li>
<a href="#table_columns">table_columns()</a>
</li>
<li>
<a href="#table_name">table_name()</a>
</li>
<li>
<a href="#unique">unique()</a>
</li>
<li>
<a href="#unserialize">unserialize()</a>
</li>
<li>
<a href="#update">update()</a>
</li>
<li>
<a href="#updated_column">updated_column()</a>
</li>
<li>
<a href="#using">using()</a>
</li>
<li>
<a href="#validation">validation()</a>
</li>
<li>
<a href="#values">values()</a>
</li>
<li>
<a href="#where">where()</a>
</li>
<li>
<a href="#where_close">where_close()</a>
</li>
<li>
<a href="#where_open">where_open()</a>
</li>
<li>
<a href="#with">with()</a>
</li>
<li>
<a href="#_build">_build()</a>
</li>
<li>
<a href="#_build_select">_build_select()</a>
</li>
<li>
<a href="#_initialize">_initialize()</a>
</li>
<li>
<a href="#_load_result">_load_result()</a>
</li>
<li>
<a href="#_load_values">_load_values()</a>
</li>
<li>
<a href="#_related">_related()</a>
</li>
<li>
<a href="#_serialize_value">_serialize_value()</a>
</li>
<li>
<a href="#_unserialize_value">_unserialize_value()</a>
</li>
<li>
<a href="#_validation">_validation()</a>
</li>
<li>
<a href="#get_typed">get_typed()</a>
</li>
<li>
<a href="#run_filter">run_filter()</a>
</li>

</ul>
</div>
</div>
<h1 id='properties'>Properties</h1>
<div class='properties'>
<dl>
<dt>
<h4 id='property-_behaviors'><small>protected</small>  <span class='blue'>array</span> $_behaviors</h4>
</dt>
<dd>
 <p>List of behaviors</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_belongs_to'><small>protected</small>  <span class='blue'>array</span> $_belongs_to</h4>
</dt>
<dd>
 <p>"Belongs to" relationships</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_cast_data'><small>protected</small>  <span class='blue'>array</span> $_cast_data</h4>
</dt>
<dd>
 <p>Data to be loaded into the model from a database call cast</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_changed'><small>protected</small>  <span class='blue'>array</span> $_changed</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_column_cache'><small>protected static</small>  <span class='blue'>array</span> $_column_cache</h4>
</dt>
<dd>
 <p>Stores column information for ORM models</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_created_column'><small>protected</small>  <span class='blue'>string</span> $_created_column</h4>
</dt>
<dd>
 <p>Auto-update columns for creation</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_db'><small>protected</small>  <span class='blue'>Database</span> $_db</h4>
</dt>
<dd>
 <p>Database Object</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_db_applied'><small>protected</small>  <span class='blue'>array</span> $_db_applied</h4>
</dt>
<dd>
 <p>Database methods applied</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_db_builder'><small>protected</small>  <span class='blue'>Database_Query_Builder_Select</span> $_db_builder</h4>
</dt>
<dd>
 <p>Database query builder</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_db_group'><small>protected</small>  <span class='blue'>String</span> $_db_group</h4>
</dt>
<dd>
 <p>Database config group</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_db_pending'><small>protected</small>  <span class='blue'>array</span> $_db_pending</h4>
</dt>
<dd>
 <p>Database methods pending</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_db_reset'><small>protected</small>  <span class='blue'>bool</span> $_db_reset</h4>
</dt>
<dd>
 <p>Reset builder</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-_errors_filename'><small>protected</small>  <span class='blue'>string</span> $_errors_filename</h4>
</dt>
<dd>
 <p>The message filename used for validation errors.
Defaults to ORM::$_object_name</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_foreign_key_suffix'><small>protected</small>  <span class='blue'>string</span> $_foreign_key_suffix</h4>
</dt>
<dd>
 <p>Foreign key suffix</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(3)</span> "_id"</pre></dd>
<dt>
<h4 id='property-_has_many'><small>protected</small>  <span class='blue'>array</span> $_has_many</h4>
</dt>
<dd>
 <p>Relationhips</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(2)</span> <span>(
    "user_tokens" => <small>array</small><span>(1)</span> <span>(
        "model" => <small>string</small><span>(10)</span> "User_Token"
    )</span>
    "roles" => <small>array</small><span>(2)</span> <span>(
        "model" => <small>string</small><span>(4)</span> "Role"
        "through" => <small>string</small><span>(11)</span> "roles_users"
    )</span>
)</span></pre></dd>
<dt>
<h4 id='property-_has_one'><small>protected</small>  <span class='blue'>array</span> $_has_one</h4>
</dt>
<dd>
 <p>"Has one" relationships</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_init_cache'><small>protected static</small>  <span class='blue'>array</span> $_init_cache</h4>
</dt>
<dd>
 <p>Initialization storage for ORM models</p>
</dd>
<dd>
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_load_with'><small>protected</small>  <span class='blue'>array</span> $_load_with</h4>
</dt>
<dd>
 <p>Relationships that should always be joined</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_loaded'><small>protected</small>  <span class='blue'>bool</span> $_loaded</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_object'><small>protected</small>  <span class='blue'>array</span> $_object</h4>
</dt>
<dd>
 <p>Current object</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_object_name'><small>protected</small>  <span class='blue'>string</span> $_object_name</h4>
</dt>
<dd>
 <p>Model name</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_object_plural'><small>protected</small>  <span class='blue'>string</span> $_object_plural</h4>
</dt>
<dd>
 <p>Plural model name</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_original_values'><small>protected</small>  <span class='blue'>array</span> $_original_values</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_primary_key'><small>protected</small>  <span class='blue'>string</span> $_primary_key</h4>
</dt>
<dd>
 <p>Table primary key</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>string</small><span>(2)</span> "id"</pre></dd>
<dt>
<h4 id='property-_primary_key_value'><small>protected</small>  <span class='blue'>mixed</span> $_primary_key_value</h4>
</dt>
<dd>
 <p>Primary key value</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_private_columns'><small>protected</small>  <span class='blue'>array</span> $_private_columns</h4>
</dt>
<dd>
 <p>List of private columns that will not appear in array or object</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_related'><small>protected</small>  <span class='blue'>array</span> $_related</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_reload_on_wakeup'><small>protected</small>  <span class='blue'>bool</span> $_reload_on_wakeup</h4>
</dt>
<dd>
 <p>Model configuration, reload on wakeup?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-_saved'><small>protected</small>  <span class='blue'>bool</span> $_saved</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_serialize_columns'><small>protected</small>  <span class='blue'>array</span> $_serialize_columns</h4>
</dt>
<dd>
 <p>Auto-serialize and unserialize columns on get/set</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
<dt>
<h4 id='property-_sorting'><small>protected</small>  <span class='blue'>array</span> $_sorting</h4>
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
<h4 id='property-_table_columns'><small>protected</small>  <span class='blue'>array</span> $_table_columns</h4>
</dt>
<dd>
 <p>Table columns</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_table_name'><small>protected</small>  <span class='blue'>string</span> $_table_name</h4>
</dt>
<dd>
 <p>Table name</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_table_names_plural'><small>protected</small>  <span class='blue'>bool</span> $_table_names_plural</h4>
</dt>
<dd>
 <p>Model configuration, table names plural?</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> TRUE</pre></dd>
<dt>
<h4 id='property-_updated_column'><small>protected</small>  <span class='blue'>string</span> $_updated_column</h4>
</dt>
<dd>
 <p>Auto-update columns for updates</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_valid'><small>protected</small>  <span class='blue'>bool</span> $_valid</h4>
</dt>
<dd>
 </dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>bool</small> FALSE</pre></dd>
<dt>
<h4 id='property-_validation'><small>protected</small>  <span class='blue'>Validation</span> $_validation</h4>
</dt>
<dd>
 <p>Validation object created before saving/updating</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>NULL</small></pre></dd>
<dt>
<h4 id='property-_with_applied'><small>protected</small>  <span class='blue'>array</span> $_with_applied</h4>
</dt>
<dd>
 <p>With calls already applied</p>
</dd>
<dd>
 </dd>
<dd>
<small>Default value:</small>
<br />
 <pre class="debug"><small>array</small><span>(0)</span> </pre></dd>
</dl>
</div>
<h1 id='methods'>Methods</h1>
<div class='methods'>

<div class='method'>
<h3 id="complete_login"><small>public</small>  complete_login()<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Complete the login for a user by incrementing the logins and saving login timestamp</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function complete_login()
{
	if ($this-&gt;_loaded)
	{
		// Update the number of logins
		$this-&gt;logins = new Database_Expression(&#039;logins + 1&#039;);

		// Set the last login date
		$this-&gt;last_login = time();

		// Save the user
		$this-&gt;update();
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create_user"><small>public</small>  create_user(<small>array</small> <span class="param" title="$values">$values</span> , <small>array</small> <span class="param" title="$expected">$expected</span> )<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Create a new user</p>

<p>Example usage:</p>

<pre><code>$user = ORM::factory('User')-&gt;create_user($_POST, array(
    'username',
    'password',
    'email',
);
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - $values</li>
<li>
 <span class="blue">array </span><strong> $expected</strong> <small>required</small> - $expected</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">ORM_Validation_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function create_user($values, $expected)
{
	// Validation for passwords
	$extra_validation = Model_User::get_password_validation($values)
		-&gt;rule(&#039;password&#039;, &#039;not_empty&#039;);

	return $this-&gt;values($values, $expected)-&gt;create($extra_validation);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="filters"><small>public</small>  filters()<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Filters to run when data is set in this model. The password filter
automatically hashes the password when it's set in the model.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Filters 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function filters()
{
	return [
		&#039;password&#039; =&gt; [
			[[Auth::instance(), &#039;hash&#039;]]
		]
	];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_password_validation"><small>public static</small>  get_password_validation(<small>array</small> <span class="param" title="$values">$values</span> )<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Password validation for plain passwords.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - $values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Validation</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function get_password_validation($values)
{
	return Validation::factory($values)
		-&gt;rule(&#039;password&#039;, &#039;min_length&#039;, [&#039;:value&#039;, 8])
		-&gt;rule(&#039;password_confirm&#039;, &#039;matches&#039;, [&#039;:validation&#039;, &#039;:field&#039;, &#039;password&#039;]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="labels"><small>public</small>  labels()<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Labels for fields in this model</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Labels 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function labels()
{
	return [
		&#039;username&#039;         =&gt; &#039;username&#039;,
		&#039;email&#039;            =&gt; &#039;email address&#039;,
		&#039;password&#039;         =&gt; &#039;password&#039;,
	];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="rules"><small>public</small>  rules()<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Rules for the user model. Because the password is <em>always</em> a hash
when it's set,you need to run an additional not_empty rule in your controller
to make sure you didn't hash an empty string. The password rules
should be enforced outside the model or with a model helper method.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Rules 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function rules()
{
	return [
		&#039;username&#039; =&gt; [
			[&#039;not_empty&#039;],
			[&#039;max_length&#039;, [&#039;:value&#039;, 32]],
			[[$this, &#039;unique&#039;], [&#039;username&#039;, &#039;:value&#039;]],
		],
		&#039;password&#039; =&gt; [
			[&#039;not_empty&#039;],
		],
		&#039;email&#039; =&gt; [
			[&#039;not_empty&#039;],
			[&#039;email&#039;],
			[[$this, &#039;unique&#039;], [&#039;email&#039;, &#039;:value&#039;]],
		],
	];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unique_key"><small>public</small>  unique_key(<small>string</small> <span class="param" title="Unique value">$value</span> )<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Allows a model use both email and username as unique identifiers for login</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - Unique value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Field name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function unique_key($value)
{
	return Valid::email($value) ? &#039;email&#039; : &#039;username&#039;;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unique_key_exists"><small>public</small>  unique_key_exists(<small>mixed</small> <span class="param" title="The value to test">$value</span> [, <small>string</small> <span class="param" title="Field name">$field</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Tests if a unique key value exists in the database.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - The value to test</li>
<li>
 <span class="blue">string </span><strong> $field</strong> <small> = <small>NULL</small></small> - Field name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function unique_key_exists($value, $field = NULL)
{
	if ($field === NULL)
	{
		// Automatically determine field by looking at the value
		$field = $this-&gt;unique_key($value);
	}

	return (bool) DB::select([DB::expr(&#039;COUNT(*)&#039;), &#039;total_count&#039;])
		-&gt;from($this-&gt;_table_name)
		-&gt;where($field, &#039;=&#039;, $value)
		-&gt;where($this-&gt;_primary_key, &#039;!=&#039;, $this-&gt;pk())
		-&gt;execute($this-&gt;_db)
		-&gt;get(&#039;total_count&#039;);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="update_user"><small>public</small>  update_user(<small>array</small> <span class="param" title="$values">$values</span> [, <small>array</small> <span class="param" title="$expected">$expected</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Model_Auth_User'>Model_Auth_User</a>)</small></h3>
<div class='description'><p>Update an existing user</p>

<p class="note">We make the assumption that if a user does not supply a password, that they do not wish to update their password.</p>

<p>Example usage:</p>

<pre><code>$user = ORM::factory('User')
    -&gt;where('username', '=', 'kiall')
    -&gt;find()
    -&gt;update_user($_POST, array(
        'username',
        'password',
        'email',
    );
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - $values</li>
<li>
 <span class="blue">array </span><strong> $expected</strong> <small> = <small>NULL</small></small> - $expected</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">ORM_Validation_Exception</a></li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function update_user($values, $expected = NULL)
{
	if (empty($values[&#039;password&#039;]))
	{
		unset($values[&#039;password&#039;], $values[&#039;password_confirm&#039;]);
	}

	// Validation for passwords
	$extra_validation = Model_User::get_password_validation($values);

	return $this-&gt;values($values, $expected)-&gt;update($extra_validation);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__construct"><small>public</small>  __construct([ <small>mixed</small> <span class="param" title="Parameter for find or object to load">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Constructs a new model and loads a record if given</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $id</strong> <small> = <small>NULL</small></small> - Parameter for find or object to load</li>
</ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __construct($id = NULL)
{
	$this-&gt;_initialize();

	// Invoke all behaviors
	foreach ($this-&gt;_behaviors as $behavior)
	{
		if (( ! $behavior-&gt;on_construct($this, $id)) OR $this-&gt;_loaded)
			return;
	}

	if ($id !== NULL)
	{
		if (is_array($id))
		{
			foreach ($id as $column =&gt; $value)
			{
				// Passing an array of column =&gt; values
				$this-&gt;where($column, &#039;=&#039;, $value);
			}

			$this-&gt;find();
		}
		else
		{
			// Passing the primary key
			$this-&gt;where($this-&gt;_object_name.&#039;.&#039;.$this-&gt;_primary_key, &#039;=&#039;, $id)-&gt;find();
		}
	}
	elseif ( ! empty($this-&gt;_cast_data))
	{
		// Load preloaded data from a database call cast
		$this-&gt;_load_values($this-&gt;_cast_data);

		$this-&gt;_cast_data = [];
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__get"><small>public</small>  __get(<small>string</small> <span class="param" title="Column name">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Handles retrieval of all model values, relationships, and metadata.
[!!] This should not be overridden.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __get($column)
{
	return $this-&gt;get($column);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__isset"><small>public</small>  __isset(<small>string</small> <span class="param" title="Column name">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Checks if object data is set.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __isset($column)
{
	return (isset($this-&gt;_object[$column]) OR
		isset($this-&gt;_related[$column]) OR
		isset($this-&gt;_has_one[$column]) OR
		isset($this-&gt;_belongs_to[$column]) OR
		isset($this-&gt;_has_many[$column]));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__set"><small>public</small>  __set(<small>string</small> <span class="param" title="Column name">$column</span> , <small>mixed</small> <span class="param" title="Column value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Base set method.
[!!] This should not be overridden.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __set($column, $value)
{
	$this-&gt;set($column, $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__toString"><small>public</small>  __toString()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Displays the primary key of a model when it is converted to a string.</p>
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
	return (string) $this-&gt;pk();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="__unset"><small>public</small>  __unset(<small>string</small> <span class="param" title="Column name">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Unsets object data.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function __unset($column)
{
	unset($this-&gt;_object[$column], $this-&gt;_changed[$column], $this-&gt;_related[$column]);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="add"><small>public</small>  add(<small>string</small> <span class="param" title="Alias of the has_many "through" relationship">$alias</span> , <small>mixed</small> <span class="param" title="Related model, primary key, or an array of primary keys">$far_keys</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Adds a new relationship to between this model and another.</p>

<pre><code>// Add the login role using a model instance
$model-&gt;add('roles', ORM::factory('role', array('name' =&gt; 'login')));
// Add the login role if you know the roles.id is 5
$model-&gt;add('roles', 5);
// Add multiple roles (for example, from checkboxes on a form)
$model-&gt;add('roles', array(1, 2, 3, 4));
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias of the has_many "through" relationship</li>
<li>
 <span class="blue">mixed </span><strong> $far_keys</strong> <small>required</small> - Related model, primary key, or an array of primary keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function add($alias, $far_keys)
{
	$far_keys = ($far_keys instanceof ORM) ? $far_keys-&gt;pk() : $far_keys;

	$columns = [$this-&gt;_has_many[$alias][&#039;foreign_key&#039;], $this-&gt;_has_many[$alias][&#039;far_key&#039;]];
	$foreign_key = $this-&gt;pk();

	$query = DB::insert($this-&gt;_has_many[$alias][&#039;through&#039;], $columns);

	foreach ( (array) $far_keys as $key)
	{
		$query-&gt;values([$foreign_key, $key]);
	}

	$query-&gt;execute($this-&gt;_db);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_having"><small>public</small>  and_having(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> [, <small>mixed</small> <span class="param" title="Column value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates a new "AND HAVING" condition for the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_having($column, $op, $value = NULL)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_having&#039;,
		&#039;args&#039; =&gt; [$column, $op, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_having_close"><small>public</small>  and_having_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "AND HAVING (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_having_close()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_having_close&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_having_open"><small>public</small>  and_having_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Opens a new "AND HAVING (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_having_open()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_having_open&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_where"><small>public</small>  and_where(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> , <small>mixed</small> <span class="param" title="Column value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates a new "AND WHERE" condition for the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_where($column, $op, $value)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_where&#039;,
		&#039;args&#039; =&gt; [$column, $op, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_where_close"><small>public</small>  and_where_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "AND WHERE (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_where_close()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_where_close&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="and_where_open"><small>public</small>  and_where_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Opens a new "AND WHERE (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function and_where_open()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;and_where_open&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_array"><small>public</small>  as_array()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns the values of this object as an array, including any related one-one
models that have already been loaded using with()</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_array($show_all=FALSE)
{
	$object = [];

	if ($show_all OR !is_array($this-&gt;_private_columns))
	{
		foreach ($this-&gt;_object as $column =&gt; $value)
		{
			// Call __get for any user processing
			$object[$column] = $this-&gt;__get($column);
		}
	}
	else
	{
		foreach ($this-&gt;_object as $column =&gt; $value)
		{
			// Call __get for any user processing
			if (!in_array($column, $this-&gt;_private_columns))
				$object[$column] = $this-&gt;__get($column);
		}
	}

	foreach ($this-&gt;_related as $column =&gt; $model)
	{
		// Include any related objects that are already loaded
		$object[$column] = $model-&gt;as_array();
	}

	return $object;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="as_object"><small>public</small>  as_object()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns the values of this object as an new object, including any related 
one-one models that have already been loaded using with(). Removes private
columns.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function as_object($show_all=FALSE)
{
	$object = new stdClass;

	if ($show_all OR !is_array($this-&gt;_private_columns))
	{
		foreach ($this-&gt;_object as $column =&gt; $value)
		{
			$object-&gt;{$column} = $this-&gt;get_typed($column);
		}
	}
	else
	{
		foreach ($this-&gt;_object as $column =&gt; $value)
		{
			if (!in_array($column, $this-&gt;_private_columns))
			{
				$object-&gt;{$column} = $this-&gt;get_typed($column);
			}
		}
	}

	foreach ($this-&gt;_related as $column =&gt; $model)
	{
		// Include any related objects that are already loaded
		$object-&gt;{$column} = $model-&gt;as_object();
	}
   
	return $object;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="behaviors"><small>public</small>  behaviors()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Behavior definitions</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function behaviors()
{
	return [];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="belongs_to"><small>public</small>  belongs_to()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function belongs_to()
{
	return $this-&gt;_belongs_to;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="cached"><small>public</small>  cached([ <small>integer</small> <span class="param" title="Number of seconds to cache">$lifetime</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Enables the query to be cached for a specified amount of time.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $lifetime</strong> <small> = <small>NULL</small></small> - Number of seconds to cache</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Uses - <a href="#property:cache_life">Kohana::$cache_life</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function cached($lifetime = NULL)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;cached&#039;,
		&#039;args&#039; =&gt; [$lifetime],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="changed"><small>public</small>  changed([ <small>string</small> <span class="param" title="Field to check for changes">$field</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Check whether the model data has been modified.
If $field is specified, checks whether that field was modified.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small> = <small>NULL</small></small> - Field to check for changes</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  - Whether or not the field has changed 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function changed($field = NULL)
{
	return ($field === NULL)
		? $this-&gt;_changed
		: Arr::get($this-&gt;_changed, $field);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="check"><small>public</small>  check([ <small>Validation</small> <span class="param" title="Validation object">$extra_validation</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Validates the current model's data</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Validation </span><strong> $extra_validation</strong> <small> = <small>NULL</small></small> - Validation object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">ORM_Validation_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function check(Validation $extra_validation = NULL)
{
	// Determine if any external validation failed
	$extra_errors = ($extra_validation AND ! $extra_validation-&gt;check());

	// Always build a new validation object
	$this-&gt;_validation();

	$array = $this-&gt;_validation;

	if (($this-&gt;_valid = $array-&gt;check()) === FALSE OR $extra_errors)
	{
		$exception = new ORM_Validation_Exception($this-&gt;errors_filename(), $array);

		if ($extra_errors)
		{
			// Merge any possible errors from the external object
			$exception-&gt;add_object(&#039;_external&#039;, $extra_validation);
		}
		throw $exception;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="clear"><small>public</small>  clear()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Unloads the current object and clears the status.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function clear()
{
	// Create an array with all the columns set to NULL
	$values = array_combine(array_keys($this-&gt;_table_columns), array_fill(0, count($this-&gt;_table_columns), NULL));

	// Replace the object and reset the object status
	$this-&gt;_object = $this-&gt;_changed = $this-&gt;_related = $this-&gt;_original_values = [];

	// Replace the current object with an empty one
	$this-&gt;_load_values($values);

	// Reset primary key
	$this-&gt;_primary_key_value = NULL;
	
	// Reset the loaded state
	$this-&gt;_loaded = FALSE;

	$this-&gt;reset();

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="count_all"><small>public</small>  count_all()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Count the number of records in the table.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function count_all()
{
	$selects = [];

	foreach ($this-&gt;_db_pending as $key =&gt; $method)
	{
		if ($method[&#039;name&#039;] == &#039;select&#039;)
		{
			// Ignore any selected columns for now
			$selects[$key] = $method;
			unset($this-&gt;_db_pending[$key]);
		}
	}

	if ( ! empty($this-&gt;_load_with))
	{
		foreach ($this-&gt;_load_with as $alias)
		{
			// Bind relationship
			$this-&gt;with($alias);
		}
	}

	$this-&gt;_build(Database::SELECT);

	$records = $this-&gt;_db_builder-&gt;from([$this-&gt;_table_name, $this-&gt;_object_name])
		-&gt;select([DB::expr(&#039;COUNT(&#039;.$this-&gt;_db-&gt;quote_column($this-&gt;_object_name.&#039;.&#039;.$this-&gt;_primary_key).&#039;)&#039;), &#039;records_found&#039;])
		-&gt;execute($this-&gt;_db)
		-&gt;get(&#039;records_found&#039;);

	// Add back in selected columns
	$this-&gt;_db_pending += $selects;

	$this-&gt;reset();

	// Return the total number of records in a table
	return (int) $records;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="count_relations"><small>public</small>  count_relations(<small>string</small> <span class="param" title="Alias of the has_many "through" relationship">$alias</span> [, <small>mixed</small> <span class="param" title="Related model, primary key, or an array of primary keys">$far_keys</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns the number of relationships</p>

<pre><code>// Counts the number of times the login role is attached to $model
$model-&gt;count_relations('roles', ORM::factory('role', array('name' =&gt; 'login')));
// Counts the number of times role 5 is attached to $model
$model-&gt;count_relations('roles', 5);
// Counts the number of times any of roles 1, 2, 3, or 4 are attached to
// $model
$model-&gt;count_relations('roles', array(1, 2, 3, 4));
// Counts the number roles attached to $model
$model-&gt;count_relations('roles')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias of the has_many "through" relationship</li>
<li>
 <span class="blue">mixed </span><strong> $far_keys</strong> <small> = <small>NULL</small></small> - Related model, primary key, or an array of primary keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>integer</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function count_relations($alias, $far_keys = NULL)
{
	if ($far_keys === NULL)
	{
		return (int) DB::select([DB::expr(&#039;COUNT(*)&#039;), &#039;records_found&#039;])
			-&gt;from($this-&gt;_has_many[$alias][&#039;through&#039;])
			-&gt;where($this-&gt;_has_many[$alias][&#039;foreign_key&#039;], &#039;=&#039;, $this-&gt;pk())
			-&gt;execute($this-&gt;_db)-&gt;get(&#039;records_found&#039;);
	}

	$far_keys = ($far_keys instanceof ORM) ? $far_keys-&gt;pk() : $far_keys;

	// We need an array to simplify the logic
	$far_keys = (array) $far_keys;

	// Nothing to check if the model isn&#039;t loaded or we don&#039;t have any far_keys
	if ( ! $far_keys OR ! $this-&gt;_loaded)
		return 0;

	$count = (int) DB::select([DB::expr(&#039;COUNT(*)&#039;), &#039;records_found&#039;])
		-&gt;from($this-&gt;_has_many[$alias][&#039;through&#039;])
		-&gt;where($this-&gt;_has_many[$alias][&#039;foreign_key&#039;], &#039;=&#039;, $this-&gt;pk())
		-&gt;where($this-&gt;_has_many[$alias][&#039;far_key&#039;], &#039;IN&#039;, $far_keys)
		-&gt;execute($this-&gt;_db)-&gt;get(&#039;records_found&#039;);

	// Rows found need to match the rows searched
	return (int) $count;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="create"><small>public</small>  create([ <small>Validation</small> <span class="param" title="Validation object">$validation</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Insert a new object to the database</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Validation </span><strong> $validation</strong> <small> = <small>NULL</small></small> - Validation object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function create(Validation $validation = NULL)
{
	if ($this-&gt;_loaded)
		throw new Kohana_Exception(&#039;Cannot create :model model because it is already loaded.&#039;, [&#039;:model&#039; =&gt; $this-&gt;_object_name]);

	// Invoke all behaviors
	foreach ($this-&gt;_behaviors as $behavior)
	{
		$behavior-&gt;on_create($this);
	}

	// Require model validation before saving
	if ( ! $this-&gt;_valid OR $validation)
	{
		$this-&gt;check($validation);
	}

	$data = [];
	foreach ($this-&gt;_changed as $column)
	{
		// Generate list of column =&gt; values
		$data[$column] = $this-&gt;_object[$column];
	}

	if (is_array($this-&gt;_created_column))
	{
		// Fill the created column
		$column = $this-&gt;_created_column[&#039;column&#039;];
		$format = $this-&gt;_created_column[&#039;format&#039;];

		$data[$column] = $this-&gt;_object[$column] = ($format === TRUE) ? time() : date($format);
	}

	$result = DB::insert($this-&gt;_table_name)
		-&gt;columns(array_keys($data))
		-&gt;values(array_values($data))
		-&gt;execute($this-&gt;_db);

	if ( ! array_key_exists($this-&gt;_primary_key, $data) OR ($this-&gt;_object[$this-&gt;_primary_key] === NULL))
	{
		// Load the insert id as the primary key if it was left out
		$this-&gt;_object[$this-&gt;_primary_key] = $this-&gt;_primary_key_value = $result[0];
	}
	else
	{
		$this-&gt;_primary_key_value = $this-&gt;_object[$this-&gt;_primary_key];
	}

	// Object is now loaded and saved
	$this-&gt;_loaded = $this-&gt;_saved = TRUE;

	// All changes have been saved
	$this-&gt;_changed = [];
	$this-&gt;_original_values = $this-&gt;_object;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="created_column"><small>public</small>  created_column()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function created_column()
{
	return $this-&gt;_created_column;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="delete"><small>public</small>  delete()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Deletes a single record while ignoring relationships.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function delete()
{
	if ( ! $this-&gt;_loaded)
		throw new Kohana_Exception(&#039;Cannot delete :model model because it is not loaded.&#039;, [&#039;:model&#039; =&gt; $this-&gt;_object_name]);

	// Use primary key value
	$id = $this-&gt;pk();

	// Delete the object
	DB::delete($this-&gt;_table_name)
		-&gt;where($this-&gt;_primary_key, &#039;=&#039;, $id)
		-&gt;execute($this-&gt;_db);

	return $this-&gt;clear();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="distinct"><small>public</small>  distinct(<small>boolean</small> <span class="param" title="Enable or disable distinct columns">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Enables or disables selecting only unique columns using "SELECT DISTINCT"</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $value</strong> <small>required</small> - Enable or disable distinct columns</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function distinct($value)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;distinct&#039;,
		&#039;args&#039; =&gt; [$value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="errors_filename"><small>public</small>  errors_filename()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function errors_filename()
{
	return $this-&gt;_errors_filename;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="factory"><small>public static</small>  factory(<small>string</small> <span class="param" title="Model name">$model</span> [, <small>mixed</small> <span class="param" title="Parameter for find()">$id</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates and returns a new model. 
Model name must be passed with its' original casing, e.g.</p>

<p>$model = ORM::factory('User_Token');</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $model</strong> <small>required</small> - Model name</li>
<li>
 <span class="blue">mixed </span><strong> $id</strong> <small> = <small>NULL</small></small> - Parameter for find()</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function factory($model, $id = NULL)
{
	// Set class name
	$model = &#039;Model_&#039;.$model;

	return new $model($id);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find"><small>public</small>  find()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Finds and loads a single database row into the object.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function find()
{
	if ($this-&gt;_loaded)
		throw new Kohana_Exception(&#039;Method find() cannot be called on loaded objects&#039;);

	if ( ! empty($this-&gt;_load_with))
	{
		foreach ($this-&gt;_load_with as $alias)
		{
			// Bind auto relationships
			$this-&gt;with($alias);
		}
	}

	$this-&gt;_build(Database::SELECT);

	return $this-&gt;_load_result(FALSE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="find_all"><small>public</small>  find_all()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Finds multiple database rows and returns an iterator of the rows found.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Database_Result</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function find_all()
{
	if ($this-&gt;_loaded)
		throw new Kohana_Exception(&#039;Method find_all() cannot be called on loaded objects&#039;);

	if ( ! empty($this-&gt;_load_with))
	{
		foreach ($this-&gt;_load_with as $alias)
		{
			// Bind auto relationships
			$this-&gt;with($alias);
		}
	}

	$this-&gt;_build(Database::SELECT);

	return $this-&gt;_load_result(TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="from"><small>public</small>  from(<small>mixed</small> <span class="param" title="Table name or array($table, $alias) or object">$tables</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Choose the tables to select "FROM ..."</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $tables</strong> <small>required</small> - Table name or array($table, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function from(...$tables)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;from&#039;,
		&#039;args&#039; =&gt; $tables,
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get"><small>public</small>  get(<small>string</small> <span class="param" title="Column name">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Handles getting of column
Override this method to add custom get behavior</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function get($column)
{
	if (array_key_exists($column, $this-&gt;_object))
	{
		return (in_array($column, $this-&gt;_serialize_columns))
			? $this-&gt;_unserialize_value($this-&gt;_object[$column])
			: $this-&gt;_object[$column];
	}
	elseif (isset($this-&gt;_related[$column]))
	{
		// Return related model that has already been fetched
		return $this-&gt;_related[$column];
	}
	elseif (isset($this-&gt;_belongs_to[$column]))
	{
		$model = $this-&gt;_related($column);

		// Use this model&#039;s column and foreign model&#039;s primary key
		$col = $model-&gt;_object_name.&#039;.&#039;.$model-&gt;_primary_key;
		$val = $this-&gt;_object[$this-&gt;_belongs_to[$column][&#039;foreign_key&#039;]];

		// Make sure we don&#039;t run WHERE &quot;AUTO_INCREMENT column&quot; = NULL queries. This would
		// return the last inserted record instead of an empty result.
		// See: http://mysql.localhost.net.ar/doc/refman/5.1/en/server-session-variables.html#sysvar_sql_auto_is_null
		if ($val !== NULL)
		{
			$model-&gt;where($col, &#039;=&#039;, $val)-&gt;find();
		}

		return $this-&gt;_related[$column] = $model;
	}
	elseif (isset($this-&gt;_has_one[$column]))
	{
		$model = $this-&gt;_related($column);

		// Use this model&#039;s primary key value and foreign model&#039;s column
		$col = $model-&gt;_object_name.&#039;.&#039;.$this-&gt;_has_one[$column][&#039;foreign_key&#039;];
		$val = $this-&gt;pk();

		$model-&gt;where($col, &#039;=&#039;, $val)-&gt;find();

		return $this-&gt;_related[$column] = $model;
	}
	elseif (isset($this-&gt;_has_many[$column]))
	{
		$model = ORM::factory($this-&gt;_has_many[$column][&#039;model&#039;]);

		if (isset($this-&gt;_has_many[$column][&#039;through&#039;]))
		{
			// Grab has_many &quot;through&quot; relationship table
			$through = $this-&gt;_has_many[$column][&#039;through&#039;];

			// Join on through model&#039;s target foreign key (far_key) and target model&#039;s primary key
			$join_col1 = $through.&#039;.&#039;.$this-&gt;_has_many[$column][&#039;far_key&#039;];
			$join_col2 = $model-&gt;_object_name.&#039;.&#039;.$model-&gt;_primary_key;

			$model-&gt;join($through)-&gt;on($join_col1, &#039;=&#039;, $join_col2);

			// Through table&#039;s source foreign key (foreign_key) should be this model&#039;s primary key
			$col = $through.&#039;.&#039;.$this-&gt;_has_many[$column][&#039;foreign_key&#039;];
			$val = $this-&gt;pk();
		}
		else
		{
			// Simple has_many relationship, search where target model&#039;s foreign key is this model&#039;s primary key
			$col = $model-&gt;_object_name.&#039;.&#039;.$this-&gt;_has_many[$column][&#039;foreign_key&#039;];
			$val = $this-&gt;pk();
		}

		return $model-&gt;where($col, &#039;=&#039;, $val);
	}
	else
	{
		throw new Kohana_Exception(&#039;The :property property does not exist in the :class class&#039;,
			[&#039;:property&#039; =&gt; $column, &#039;:class&#039; =&gt; get_class($this)]);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="group_by"><small>public</small>  group_by(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates a "GROUP BY ..." filter.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $columns</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function group_by(...$columns)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;group_by&#039;,
		&#039;args&#039; =&gt; $columns,
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="has"><small>public</small>  has(<small>string</small> <span class="param" title="Alias of the has_many "through" relationship">$alias</span> [, <small>mixed</small> <span class="param" title="Related model, primary key, or an array of primary keys">$far_keys</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Tests if this object has a relationship to a different model,
or an array of different models. When providing far keys, the number
of relations must equal the number of keys.</p>

<pre><code>// Check if $model has the login role
$model-&gt;has('roles', ORM::factory('role', array('name' =&gt; 'login')));
// Check for the login role if you know the roles.id is 5
$model-&gt;has('roles', 5);
// Check for all of the following roles
$model-&gt;has('roles', array(1, 2, 3, 4));
// Check if $model has any roles
$model-&gt;has('roles')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias of the has_many "through" relationship</li>
<li>
 <span class="blue">mixed </span><strong> $far_keys</strong> <small> = <small>NULL</small></small> - Related model, primary key, or an array of primary keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function has($alias, $far_keys = NULL)
{
	$count = $this-&gt;count_relations($alias, $far_keys);

	if ($far_keys === NULL)
	{
		return (bool) $count;
	}
	else
	{
		if (is_array($far_keys) OR $far_keys instanceof Countable)
		{
			$keys = count($far_keys);
		}
		else
		{
			$keys = 1;
		}

		return $keys === $count;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="has_any"><small>public</small>  has_any(<small>string</small> <span class="param" title="Alias of the has_many "through" relationship">$alias</span> [, <small>mixed</small> <span class="param" title="Related model, primary key, or an array of primary keys">$far_keys</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Tests if this object has a relationship to a different model,
or an array of different models. When providing far keys, this function
only checks that at least one of the relationships is satisfied.</p>

<pre><code>// Check if $model has the login role
$model-&gt;has('roles', ORM::factory('role', array('name' =&gt; 'login')));
// Check for the login role if you know the roles.id is 5
$model-&gt;has('roles', 5);
// Check for any of the following roles
$model-&gt;has('roles', array(1, 2, 3, 4));
// Check if $model has any roles
$model-&gt;has('roles')
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias of the has_many "through" relationship</li>
<li>
 <span class="blue">mixed </span><strong> $far_keys</strong> <small> = <small>NULL</small></small> - Related model, primary key, or an array of primary keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>boolean</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function has_any($alias, $far_keys = NULL)
{
	return (bool) $this-&gt;count_relations($alias, $far_keys);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="has_many"><small>public</small>  has_many()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function has_many()
{
	return $this-&gt;_has_many;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="has_one"><small>public</small>  has_one()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function has_one()
{
	return $this-&gt;_has_one;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="having"><small>public</small>  having(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> [, <small>mixed</small> <span class="param" title="Column value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Alias of and_having()</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function having($column, $op, $value = NULL)
{
	return $this-&gt;and_having($column, $op, $value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="having_close"><small>public</small>  having_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "AND HAVING (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function having_close()
{
	return $this-&gt;and_having_close();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="having_open"><small>public</small>  having_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Alias of and_having_open()</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function having_open()
{
	return $this-&gt;and_having_open();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="join"><small>public</small>  join(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$table</span> [, <small>string</small> <span class="param" title="Join type (LEFT, RIGHT, INNER, etc)">$type</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Adds addition tables to "JOIN ...".</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $table</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $type</strong> <small> = <small>NULL</small></small> - Join type (LEFT, RIGHT, INNER, etc)</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function join($table, $type = NULL)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;join&#039;,
		&#039;args&#039; =&gt; [$table, $type],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="last_query"><small>public</small>  last_query()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns last executed query</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function last_query()
{
	return $this-&gt;_db-&gt;last_query;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="limit"><small>public</small>  limit(<small>integer</small> <span class="param" title="Maximum results to return">$number</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Return up to "LIMIT ..." results</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $number</strong> <small>required</small> - Maximum results to return</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function limit($number)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;limit&#039;,
		&#039;args&#039; =&gt; [$number],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="list_columns"><small>public</small>  list_columns()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Proxy method to Database list_columns.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function list_columns()
{
	// Proxy to database
	return $this-&gt;_db-&gt;list_columns($this-&gt;_table_name);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="load_with"><small>public</small>  load_with()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function load_with()
{
	return $this-&gt;_load_with;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="loaded"><small>public</small>  loaded()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function loaded()
{
	return $this-&gt;_loaded;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="object"><small>public</small>  object()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>object</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function object()
{
	return $this-&gt;_object;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="object_name"><small>public</small>  object_name()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function object_name()
{
	return $this-&gt;_object_name;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="object_plural"><small>public</small>  object_plural()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>object</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function object_plural()
{
	return $this-&gt;_object_plural;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="offset"><small>public</small>  offset(<small>integer</small> <span class="param" title="Starting result number">$number</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Start returning results after "OFFSET ..."</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $number</strong> <small>required</small> - Starting result number</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function offset($number)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;offset&#039;,
		&#039;args&#039; =&gt; [$number],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="on"><small>public</small>  on(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$c1</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> , <small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$c2</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Adds "ON ..." conditions for the last created JOIN statement.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $c1</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $c2</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function on($c1, $op, $c2)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;on&#039;,
		&#039;args&#039; =&gt; [$c1, $op, $c2],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_having"><small>public</small>  or_having(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> [, <small>mixed</small> <span class="param" title="Column value">$value</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates a new "OR HAVING" condition for the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small> = <small>NULL</small></small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_having($column, $op, $value = NULL)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_having&#039;,
		&#039;args&#039; =&gt; [$column, $op, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_having_close"><small>public</small>  or_having_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "OR HAVING (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_having_close()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_having_close&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_having_open"><small>public</small>  or_having_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Opens a new "OR HAVING (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_having_open()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_having_open&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_where"><small>public</small>  or_where(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> , <small>mixed</small> <span class="param" title="Column value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Creates a new "OR WHERE" condition for the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_where($column, $op, $value)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_where&#039;,
		&#039;args&#039; =&gt; [$column, $op, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_where_close"><small>public</small>  or_where_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "OR WHERE (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_where_close()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_where_close&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="or_where_open"><small>public</small>  or_where_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Opens a new "OR WHERE (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function or_where_open()
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;or_where_open&#039;,
		&#039;args&#039; =&gt; [],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="order_by"><small>public</small>  order_by(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> [, <small>string</small> <span class="param" title="Direction of sorting">$direction</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Applies sorting with "ORDER BY ..."</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $direction</strong> <small> = <small>NULL</small></small> - Direction of sorting</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function order_by($column, $direction = NULL)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;order_by&#039;,
		&#039;args&#039; =&gt; [$column, $direction],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="original_values"><small>public</small>  original_values()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function original_values()
{
	return $this-&gt;_original_values;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="param"><small>public</small>  param(<small>string</small> <span class="param" title="Parameter key to replace">$param</span> , <small>mixed</small> <span class="param" title="Value to use">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Set the value of a parameter in the query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $param</strong> <small>required</small> - Parameter key to replace</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Value to use</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function param($param, $value)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;param&#039;,
		&#039;args&#039; =&gt; [$param, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="pk"><small>public</small>  pk()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns the value of the primary key</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  - Primary key 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function pk()
{
	return $this-&gt;_primary_key_value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="primary_key"><small>public</small>  primary_key()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function primary_key()
{
	return $this-&gt;_primary_key;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="quote_table"><small>public static</small>  quote_table(<small>string</small> <span class="param" title="Model name">$orm_model</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Get the quoted table name from the model name</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $orm_model</strong> <small>required</small> - Model name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  - Quoted table name 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public static function quote_table($orm_model)
{
	return Database::instance()-&gt;quote_table(strtolower($orm_model));
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reload"><small>public</small>  reload()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Reloads the current object from the database.</p>
</div>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function reload()
{
	$primary_key = $this-&gt;pk();

	// Replace the object and reset the object status
	$this-&gt;_object = $this-&gt;_changed = $this-&gt;_related = $this-&gt;_original_values = [];

	// Only reload the object if we have one to reload
	if ($this-&gt;_loaded)
		return $this-&gt;clear()
			-&gt;where($this-&gt;_object_name.&#039;.&#039;.$this-&gt;_primary_key, &#039;=&#039;, $primary_key)
			-&gt;find();
	else
		return $this-&gt;clear();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reload_columns"><small>public</small>  reload_columns([ <small>boolean</small> <span class="param" title="Force reloading">$force</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Reload column definitions.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">boolean </span><strong> $force</strong> <small> = <small>bool</small> FALSE</small> - Force reloading</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function reload_columns($force = FALSE)
{
	if ($force === TRUE OR empty($this-&gt;_table_columns))
	{
		if (isset(ORM::$_column_cache[$this-&gt;_object_name]))
		{
			// Use cached column information
			$this-&gt;_table_columns = ORM::$_column_cache[$this-&gt;_object_name];
		}
		else
		{
			// Grab column information from database
			$this-&gt;_table_columns = $this-&gt;list_columns();

			// Load column cache
			ORM::$_column_cache[$this-&gt;_object_name] = $this-&gt;_table_columns;
		}
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="remove"><small>public</small>  remove(<small>string</small> <span class="param" title="Alias of the has_many "through" relationship">$alias</span> [, <small>mixed</small> <span class="param" title="Related model, primary key, or an array of primary keys">$far_keys</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Removes a relationship between this model and another.</p>

<pre><code>// Remove a role using a model instance
$model-&gt;remove('roles', ORM::factory('role', array('name' =&gt; 'login')));
// Remove the role knowing the primary key
$model-&gt;remove('roles', 5);
// Remove multiple roles (for example, from checkboxes on a form)
$model-&gt;remove('roles', array(1, 2, 3, 4));
// Remove all related roles
$model-&gt;remove('roles');
</code></pre>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias of the has_many "through" relationship</li>
<li>
 <span class="blue">mixed </span><strong> $far_keys</strong> <small> = <small>NULL</small></small> - Related model, primary key, or an array of primary keys</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function remove($alias, $far_keys = NULL)
{
	$far_keys = ($far_keys instanceof ORM) ? $far_keys-&gt;pk() : $far_keys;

	$query = DB::delete($this-&gt;_has_many[$alias][&#039;through&#039;])
		-&gt;where($this-&gt;_has_many[$alias][&#039;foreign_key&#039;], &#039;=&#039;, $this-&gt;pk());

	if ($far_keys !== NULL)
	{
		// Remove all the relationships in the array
		$query-&gt;where($this-&gt;_has_many[$alias][&#039;far_key&#039;], &#039;IN&#039;, (array) $far_keys);
	}

	$query-&gt;execute($this-&gt;_db);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="reset"><small>public</small>  reset([ <small>bool</small> <span class="param" title="Pass FALSE to avoid resetting on the next call">$next</span> <small>= <small>bool</small> TRUE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Clears query builder.  Passing FALSE is useful to keep the existing
query conditions for another query.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">bool </span><strong> $next</strong> <small> = <small>bool</small> TRUE</small> - Pass FALSE to avoid resetting on the next call</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function reset($next = TRUE)
{
	if ($next AND $this-&gt;_db_reset)
	{
		$this-&gt;_db_pending   = [];
		$this-&gt;_db_applied   = [];
		$this-&gt;_db_builder   = NULL;
		$this-&gt;_with_applied = [];
	}

	// Reset on the next call?
	$this-&gt;_db_reset = $next;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="save"><small>public</small>  save([ <small>Validation</small> <span class="param" title="Validation object">$validation</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Updates or Creates the record depending on loaded()</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Validation </span><strong> $validation</strong> <small> = <small>NULL</small></small> - Validation object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function save(Validation $validation = NULL)
{
	return $this-&gt;loaded() ? $this-&gt;update($validation) : $this-&gt;create($validation);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="saved"><small>public</small>  saved()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function saved()
{
	return $this-&gt;_saved;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="select"><small>public</small>  select(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Choose the columns to select from.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $columns</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function select(...$columns)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;select&#039;,
		&#039;args&#039; =&gt; $columns,
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="serialize"><small>public</small>  serialize()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Allows serialization of only the object data and state, to prevent
"stale" objects being unserialized, which also requires less memory.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function serialize()
{
	// Store only information about the object
	foreach ([&#039;_primary_key_value&#039;, &#039;_object&#039;, &#039;_changed&#039;, &#039;_loaded&#039;, &#039;_saved&#039;, &#039;_sorting&#039;, &#039;_original_values&#039;] as $var)
	{
		$data[$var] = $this-&gt;{$var};
	}

	return serialize($data);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="set"><small>public</small>  set(<small>string</small> <span class="param" title="Column name">$column</span> , <small>mixed</small> <span class="param" title="Column value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Handles setting of columns
Override this method to add custom set behavior</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - Column name</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Column value</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function set($column, $value)
{
	if ( ! isset($this-&gt;_object_name))
	{
		// Object not yet constructed, so we&#039;re loading data from a database call cast
		$this-&gt;_cast_data[$column] = $value;
		
		return $this;
	}
	
	if (in_array($column, $this-&gt;_serialize_columns))
	{
		$value = $this-&gt;_serialize_value($value);
	}

	if (array_key_exists($column, $this-&gt;_object))
	{
		// Filter the data
		$value = $this-&gt;run_filter($column, $value);

		// See if the data really changed
		if ($value !== $this-&gt;_object[$column])
		{
			$this-&gt;_object[$column] = $value;

			// Data has changed
			$this-&gt;_changed[$column] = $column;

			// Object is no longer saved or valid
			$this-&gt;_saved = $this-&gt;_valid = FALSE;
		}
	}
	elseif (isset($this-&gt;_belongs_to[$column]))
	{
		// Update related object itself
		$this-&gt;_related[$column] = $value;

		// Update the foreign key of this model
		$this-&gt;_object[$this-&gt;_belongs_to[$column][&#039;foreign_key&#039;]] = ($value instanceof ORM)
			? $value-&gt;pk()
			: NULL;

		$this-&gt;_changed[$column] = $this-&gt;_belongs_to[$column][&#039;foreign_key&#039;];
	}
	elseif (isset($this-&gt;_has_many[$column]))
	{
		if (Arr::get($this-&gt;_has_many[$column], &#039;update&#039;, FALSE))
		{
			$model = $this-&gt;_has_many[$column][&#039;model&#039;];
			$pk = ORM::factory($model)-&gt;primary_key();
		 
			$current_ids = $this-&gt;get($column)-&gt;find_all()-&gt;as_array(NULL, &#039;id&#039;);

			$new_ids = array_diff($value, $current_ids);
			if (count($new_ids) &gt; 0)
			{
				$objects = ORM::factory($model)-&gt;where($pk, &#039;IN&#039;, $new_ids)-&gt;find_all();
				foreach ($objects as $object)
				{
					$this-&gt;add($column, $object);
				}
			}

			$delete_ids = array_diff($current_ids, $value);
			if (count($delete_ids) &gt; 0)
			{
				$objects = ORM::factory($model)-&gt;where($pk, &#039;IN&#039;, $delete_ids)-&gt;find_all();
				foreach ($objects as $object)
				{
					$this-&gt;remove($column, $object);
				}
			}
		}
		else
		{
			throw new Kohana_Exception(&#039;The :property: property is a to many relation in the :class: class&#039;,
				[&#039;:property:&#039; =&gt; $column, &#039;:class:&#039; =&gt; get_class($this)]);
		}
	}
	else
	{
		throw new Kohana_Exception(&#039;The :property: property does not exist in the :class: class&#039;,
			[&#039;:property:&#039; =&gt; $column, &#039;:class:&#039; =&gt; get_class($this)]);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="table_column_type"><small>public</small>  table_column_type(<small>string</small> <span class="param" title="$column">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns the type of the column</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - $column</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function table_column_type($column)
{
	if ( ! array_key_exists($column, $this-&gt;_table_columns))
		return FALSE;
	
	return $this-&gt;_table_columns[$column][&#039;type&#039;];
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="table_columns"><small>public</small>  table_columns()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function table_columns()
{
	return $this-&gt;_table_columns;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="table_name"><small>public</small>  table_name()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function table_name()
{
	return $this-&gt;_table_name;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unique"><small>public</small>  unique(<small>string</small> <span class="param" title="The field to check for uniqueness">$field</span> , <small>mixed</small> <span class="param" title="The value to check for uniqueness">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Checks whether a column value is unique.
Excludes itself if loaded.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - The field to check for uniqueness</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - The value to check for uniqueness</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>bool</span>  - Whteher the value is unique 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function unique($field, $value)
{
	$model = ORM::factory($this-&gt;object_name())
		-&gt;where($field, &#039;=&#039;, $value)
		-&gt;find();

	if ($this-&gt;loaded())
	{
		return ( ! ($model-&gt;loaded() AND $model-&gt;pk() != $this-&gt;pk()));
	}

	return ( ! $model-&gt;loaded());
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="unserialize"><small>public</small>  unserialize(<small>string</small> <span class="param" title="String for unserialization">$data</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Prepares the database connection and reloads the object.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $data</strong> <small>required</small> - String for unserialization</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function unserialize($data)
{
	// Initialize model
	$this-&gt;_initialize();

	foreach (unserialize($data) as $name =&gt; $var)
	{
		$this-&gt;{$name} = $var;
	}

	if ($this-&gt;_reload_on_wakeup === TRUE)
	{
		// Reload the object
		$this-&gt;reload();
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="update"><small>public</small>  update([ <small>Validation</small> <span class="param" title="Validation object">$validation</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Updates a single record or multiple records</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">Validation </span><strong> $validation</strong> <small> = <small>NULL</small></small> - Validation object</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
<li>Throws - <a href="/index.php/">Kohana_Exception</a></li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function update(Validation $validation = NULL)
{
	if ( ! $this-&gt;_loaded)
		throw new Kohana_Exception(&#039;Cannot update :model model because it is not loaded.&#039;, [&#039;:model&#039; =&gt; $this-&gt;_object_name]);

   	// Invoke all behaviors
	foreach ($this-&gt;_behaviors as $behavior)
	{
		$behavior-&gt;on_update($this);
	}

	// Run validation if the model isn&#039;t valid or we have additional validation rules.
	if ( ! $this-&gt;_valid OR $validation)
	{
		$this-&gt;check($validation);
	}

	if (empty($this-&gt;_changed))
	{
		// Nothing to update
		return $this;
	}

	$data = [];
	foreach ($this-&gt;_changed as $column)
	{
		// Compile changed data
		$data[$column] = $this-&gt;_object[$column];
	}

	if (is_array($this-&gt;_updated_column))
	{
		// Fill the updated column
		$column = $this-&gt;_updated_column[&#039;column&#039;];
		$format = $this-&gt;_updated_column[&#039;format&#039;];

		$data[$column] = $this-&gt;_object[$column] = ($format === TRUE) ? time() : date($format);
	}

	// Use primary key value
	$id = $this-&gt;pk();

	// Update a single record
	DB::update($this-&gt;_table_name)
		-&gt;set($data)
		-&gt;where($this-&gt;_primary_key, &#039;=&#039;, $id)
		-&gt;execute($this-&gt;_db);

	if (isset($data[$this-&gt;_primary_key]))
	{
		// Primary key was changed, reflect it
		$this-&gt;_primary_key_value = $data[$this-&gt;_primary_key];
	}

	// Object has been saved
	$this-&gt;_saved = TRUE;

	// All changes have been saved
	$this-&gt;_changed = [];
	$this-&gt;_original_values = $this-&gt;_object;

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="updated_column"><small>public</small>  updated_column()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function updated_column()
{
	return $this-&gt;_updated_column;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="using"><small>public</small>  using(<small>mixed</small> <span class="param" title="Column names">$columns</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Adds "USING ..." conditions for the last created JOIN statement.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $columns</strong> <small>required</small> - Column names</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function using(...$columns)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;using&#039;,
		&#039;args&#039; =&gt; $columns,
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="validation"><small>public</small>  validation()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>Validation</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function validation()
{
	if ( ! isset($this-&gt;_validation))
	{
		// Initialize the validation object
		$this-&gt;_validation();
	}

	return $this-&gt;_validation;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="values"><small>public</small>  values(<small>array</small> <span class="param" title="Array of column => val">$values</span> [, <small>array</small> <span class="param" title="Array of keys to take from $values">$expected</span> <small>= <small>NULL</small></small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Set values from an array with support for one-one relationships.  This method should be used
for loading in post data, etc.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - Array of column => val</li>
<li>
 <span class="blue">array </span><strong> $expected</strong> <small> = <small>NULL</small></small> - Array of keys to take from $values</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function values(array $values, array $expected = NULL)
{
	// Default to expecting everything except the primary key
	if ($expected === NULL)
	{
		$expected = array_keys($this-&gt;_table_columns);

		// Don&#039;t set the primary key by default
		unset($values[$this-&gt;_primary_key]);
	}

	foreach ($expected as $key =&gt; $column)
	{
		if (is_string($key))
		{
			// isset() fails when the value is NULL (we want it to pass)
			if ( ! array_key_exists($key, $values))
				continue;

			// Try to set values to a related model
			$this-&gt;{$key}-&gt;values($values[$key], $column);
		}
		else
		{
			// isset() fails when the value is NULL (we want it to pass)
			if ( ! array_key_exists($column, $values))
				continue;

			// Update the column, respects __set()
			$this-&gt;$column = $values[$column];
		}
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="where"><small>public</small>  where(<small>mixed</small> <span class="param" title="Column name or array($column, $alias) or object">$column</span> , <small>string</small> <span class="param" title="Logic operator">$op</span> , <small>mixed</small> <span class="param" title="Column value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Alias of and_where()</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $column</strong> <small>required</small> - Column name or array($column, $alias) or object</li>
<li>
 <span class="blue">string </span><strong> $op</strong> <small>required</small> - Logic operator</li>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - Column value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function where($column, $op, $value)
{
	// Add pending database call which is executed after query type is determined
	$this-&gt;_db_pending[] = [
		&#039;name&#039; =&gt; &#039;where&#039;,
		&#039;args&#039; =&gt; [$column, $op, $value],
	];

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="where_close"><small>public</small>  where_close()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Closes an open "AND WHERE (...)" grouping.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function where_close()
{
	return $this-&gt;and_where_close();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="where_open"><small>public</small>  where_open()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Alias of and_where_open()</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function where_open()
{
	return $this-&gt;and_where_open();
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="with"><small>public</small>  with(<small>string</small> <span class="param" title="Target model to bind to">$target_path</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Binds another one-to-one object to this model.  One-to-one objects
can be nested using 'object1:object2' syntax</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $target_path</strong> <small>required</small> - Target model to bind to</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">public function with($target_path)
{
	if (isset($this-&gt;_with_applied[$target_path]))
	{
		// Don&#039;t join anything already joined
		return $this;
	}

	// Split object parts
	$aliases = explode(&#039;:&#039;, $target_path);
	$target = $this;
	foreach ($aliases as $alias)
	{
		// Go down the line of objects to find the given target
		$parent = $target;
		$target = $parent-&gt;_related($alias);

		if ( ! $target)
		{
			// Can&#039;t find related object
			return $this;
		}
	}

	// Target alias is at the end
	$target_alias = $alias;

	// Pop-off top alias to get the parent path (user:photo:tag becomes user:photo - the parent table prefix)
	array_pop($aliases);
	$parent_path = implode(&#039;:&#039;, $aliases);

	if (empty($parent_path))
	{
		// Use this table name itself for the parent path
		$parent_path = $this-&gt;_object_name;
	}
	else
	{
		if ( ! isset($this-&gt;_with_applied[$parent_path]))
		{
			// If the parent path hasn&#039;t been joined yet, do it first (otherwise LEFT JOINs fail)
			$this-&gt;with($parent_path);
		}
	}

	// Add to with_applied to prevent duplicate joins
	$this-&gt;_with_applied[$target_path] = TRUE;

	// Use the keys of the empty object to determine the columns
	foreach (array_keys($target-&gt;_object) as $column)
	{
		$name = $target_path.&#039;.&#039;.$column;
		$alias = $target_path.&#039;:&#039;.$column;

		// Add the prefix so that load_result can determine the relationship
		$this-&gt;select([$name, $alias]);
	}

	if (isset($parent-&gt;_belongs_to[$target_alias]))
	{
		// Parent belongs_to target, use target&#039;s primary key and parent&#039;s foreign key
		$join_col1 = $target_path.&#039;.&#039;.$target-&gt;_primary_key;
		$join_col2 = $parent_path.&#039;.&#039;.$parent-&gt;_belongs_to[$target_alias][&#039;foreign_key&#039;];
	}
	else
	{
		// Parent has_one target, use parent&#039;s primary key as target&#039;s foreign key
		$join_col1 = $parent_path.&#039;.&#039;.$parent-&gt;_primary_key;
		$join_col2 = $target_path.&#039;.&#039;.$parent-&gt;_has_one[$target_alias][&#039;foreign_key&#039;];
	}

	// Join the related object into the result
	$this-&gt;join([$target-&gt;_table_name, $target_path], &#039;LEFT&#039;)-&gt;on($join_col1, &#039;=&#039;, $join_col2);

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_build"><small>protected</small>  _build(<small>integer</small> <span class="param" title="Type of Database query">$type</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Initializes the Database Builder to given query type</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">integer </span><strong> $type</strong> <small>required</small> - Type of Database query</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _build($type)
{
	// Construct new builder object based on query type
	switch ($type)
	{
		case Database::SELECT:
			$this-&gt;_db_builder = DB::select();
		break;
		case Database::UPDATE:
			$this-&gt;_db_builder = DB::update([$this-&gt;_table_name, $this-&gt;_object_name]);
		break;
		case Database::DELETE:
			// Cannot use an alias for DELETE queries
			$this-&gt;_db_builder = DB::delete($this-&gt;_table_name);
	}

	// Process pending database method calls
	foreach ($this-&gt;_db_pending as $method)
	{
		$name = $method[&#039;name&#039;];
		$args = $method[&#039;args&#039;];

		$this-&gt;_db_applied[$name] = $name;

		call_user_func_array([$this-&gt;_db_builder, $name], $args);
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_build_select"><small>protected</small>  _build_select()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns an array of columns to include in the select query. This method
can be overridden to change the default select behavior.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  - Columns to select 
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _build_select()
{
	$columns = [];

	foreach ($this-&gt;_table_columns as $column =&gt; $_)
	{
		$columns[] = [$this-&gt;_object_name.&#039;.&#039;.$column, $column];
	}

	return $columns;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_initialize"><small>protected</small>  _initialize()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Prepares the model database connection, determines the table name,
and loads column information.</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _initialize()
{
	// Set the object name if none predefined
	if (empty($this-&gt;_object_name))
	{
		$this-&gt;_object_name = strtolower(substr(get_class($this), 6));
	}
	
	// Check if this model has already been initialized
	if ( ! $init = Arr::get(ORM::$_init_cache, $this-&gt;_object_name, FALSE))
	{
		$init = [
			&#039;_belongs_to&#039; =&gt; [],
			&#039;_has_one&#039;    =&gt; [],
			&#039;_has_many&#039;   =&gt; [],
		];
		
		// Set the object plural name if none predefined
		if ( ! isset($this-&gt;_object_plural))
		{
			$init[&#039;_object_plural&#039;] = Inflector::plural($this-&gt;_object_name);
		}

		if ( ! $this-&gt;_errors_filename)
		{
			$init[&#039;_errors_filename&#039;] = $this-&gt;_object_name;
		}

		if ( ! is_object($this-&gt;_db))
		{
			// Get database instance
			$init[&#039;_db&#039;] = Database::instance($this-&gt;_db_group);
		}

		if (empty($this-&gt;_table_name))
		{
			// Table name is the same as the object name
			$init[&#039;_table_name&#039;] = $this-&gt;_object_name;

			if ($this-&gt;_table_names_plural === TRUE)
			{
				// Make the table name plural
				$init[&#039;_table_name&#039;] = Arr::get($init, &#039;_object_plural&#039;, $this-&gt;_object_plural);
			}
		}
		
		$defaults = [];

		foreach ($this-&gt;_belongs_to as $alias =&gt; $details)
		{
			if ( ! isset($details[&#039;model&#039;]))
			{
				$defaults[&#039;model&#039;] = str_replace(&#039; &#039;, &#039;_&#039;, ucwords(str_replace(&#039;_&#039;, &#039; &#039;, $alias)));
			}
			
			$defaults[&#039;foreign_key&#039;] = $alias.$this-&gt;_foreign_key_suffix;

			$init[&#039;_belongs_to&#039;][$alias] = array_merge($defaults, $details);
		}

		foreach ($this-&gt;_has_one as $alias =&gt; $details)
		{
			if ( ! isset($details[&#039;model&#039;]))
			{
				$defaults[&#039;model&#039;] = str_replace(&#039; &#039;, &#039;_&#039;, ucwords(str_replace(&#039;_&#039;, &#039; &#039;, $alias)));
			}
			
			$defaults[&#039;foreign_key&#039;] = $this-&gt;_object_name.$this-&gt;_foreign_key_suffix;

			$init[&#039;_has_one&#039;][$alias] = array_merge($defaults, $details);
		}

		foreach ($this-&gt;_has_many as $alias =&gt; $details)
		{
			if ( ! isset($details[&#039;model&#039;]))
			{
				$defaults[&#039;model&#039;] = str_replace(&#039; &#039;, &#039;_&#039;, ucwords(str_replace(&#039;_&#039;, &#039; &#039;, Inflector::singular($alias))));
			}
			
			$defaults[&#039;foreign_key&#039;] = $this-&gt;_object_name.$this-&gt;_foreign_key_suffix;
			$defaults[&#039;through&#039;] = NULL;
			
			if ( ! isset($details[&#039;far_key&#039;]))
			{
				$defaults[&#039;far_key&#039;] = Inflector::singular($alias).$this-&gt;_foreign_key_suffix;
			}
			
			$init[&#039;_has_many&#039;][$alias] = array_merge($defaults, $details);
		}
		
		ORM::$_init_cache[$this-&gt;_object_name] = $init;
	}
	
	// Assign initialized properties to the current object
	foreach ($init as $property =&gt; $value)
	{
		$this-&gt;{$property} = $value;
	}
	
	// Load column information
	$this-&gt;reload_columns();

	// Clear initial model state
	$this-&gt;clear();
   
	// Create the behaviors classes
	foreach ($this-&gt;behaviors() as $behavior =&gt; $behavior_config)
	{
		$this-&gt;_behaviors[] = ORM_Behavior::factory($behavior, $behavior_config);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_load_result"><small>protected</small>  _load_result([ <small>bool</small> <span class="param" title="Return an iterator or load a single row">$multiple</span> <small>= <small>bool</small> FALSE</small> ] )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Loads a database result, either as a new record for this model, or as
an iterator for multiple rows.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">bool </span><strong> $multiple</strong> <small> = <small>bool</small> FALSE</small> - Return an iterator or load a single row</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM|Database_Result</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _load_result($multiple = FALSE)
{
	$this-&gt;_db_builder-&gt;from([$this-&gt;_table_name, $this-&gt;_object_name]);

	if ($multiple === FALSE)
	{
		// Only fetch 1 record
		$this-&gt;_db_builder-&gt;limit(1);
	}

	// Select all columns by default
	$this-&gt;_db_builder-&gt;select_array($this-&gt;_build_select());

	if ( ! isset($this-&gt;_db_applied[&#039;order_by&#039;]) AND ! empty($this-&gt;_sorting))
	{
		foreach ($this-&gt;_sorting as $column =&gt; $direction)
		{
			if (strpos($column, &#039;.&#039;) === FALSE)
			{
				// Sorting column for use in JOINs
				$column = $this-&gt;_object_name.&#039;.&#039;.$column;
			}

			$this-&gt;_db_builder-&gt;order_by($column, $direction);
		}
	}

	if ($multiple === TRUE)
	{
		// Return database iterator casting to this object type
		$result = $this-&gt;_db_builder-&gt;as_object(get_class($this))-&gt;execute($this-&gt;_db);

		$this-&gt;reset();

		return $result;
	}
	else
	{
		// Load the result as an associative array
		$result = $this-&gt;_db_builder-&gt;as_assoc()-&gt;execute($this-&gt;_db);

		$this-&gt;reset();

		if ($result-&gt;count() === 1)
		{
			// Load object values
			$this-&gt;_load_values($result-&gt;current());
		}
		else
		{
			// Clear the object, nothing was found
			$this-&gt;clear();
		}

		return $this;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_load_values"><small>protected</small>  _load_values(<small>array</small> <span class="param" title="Values to load">$values</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Loads an array of values into into the current object.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">array </span><strong> $values</strong> <small>required</small> - Values to load</li>
</ul>
<h4>Tags</h4>
<ul class='tags'>
<li>Chainable - </li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _load_values(array $values)
{
	if (array_key_exists($this-&gt;_primary_key, $values))
	{
		if ($values[$this-&gt;_primary_key] !== NULL)
		{
			// Flag as loaded and valid
			$this-&gt;_loaded = $this-&gt;_valid = TRUE;

			// Store primary key
			$this-&gt;_primary_key_value = $values[$this-&gt;_primary_key];
		}
		else
		{
			// Not loaded or valid
			$this-&gt;_loaded = $this-&gt;_valid = FALSE;
		}
	}

	// Related objects
	$related = [];

	foreach ($values as $column =&gt; $value)
	{
		if (strpos($column, &#039;:&#039;) === FALSE)
		{
			// Load the value to this model
			$this-&gt;_object[$column] = $value;
		}
		else
		{
			// Column belongs to a related model
			list ($prefix, $column) = explode(&#039;:&#039;, $column, 2);

			$related[$prefix][$column] = $value;
		}
	}

	if ( ! empty($related))
	{
		foreach ($related as $object =&gt; $values)
		{
			// Load the related objects with the values in the result
			$this-&gt;_related($object)-&gt;_load_values($values);
		}
	}

	if ($this-&gt;_loaded)
	{
		// Store the object in its original state
		$this-&gt;_original_values = $this-&gt;_object;
	}

	return $this;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_related"><small>protected</small>  _related(<small>string</small> <span class="param" title="Alias name">$alias</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns an ORM model for the given one-one related alias</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $alias</strong> <small>required</small> - Alias name</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>ORM</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _related($alias)
{
	if (isset($this-&gt;_related[$alias]))
	{
		return $this-&gt;_related[$alias];
	}
	elseif (isset($this-&gt;_has_one[$alias]))
	{
		return $this-&gt;_related[$alias] = ORM::factory($this-&gt;_has_one[$alias][&#039;model&#039;]);
	}
	elseif (isset($this-&gt;_belongs_to[$alias]))
	{
		return $this-&gt;_related[$alias] = ORM::factory($this-&gt;_belongs_to[$alias][&#039;model&#039;]);
	}
	else
	{
		return FALSE;
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_serialize_value"><small>protected</small>  _serialize_value(<small>mixed</small> <span class="param" title="$value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">mixed </span><strong> $value</strong> <small>required</small> - $value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _serialize_value($value)
{
	return json_encode($value);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_unserialize_value"><small>protected</small>  _unserialize_value(<small>string</small> <span class="param" title="$value">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'></div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - $value</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>array</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _unserialize_value($value)
{
	return json_decode($value, TRUE);
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="_validation"><small>protected</small>  _validation()<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Initializes validation rules, and labels</p>
</div>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>void</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function _validation()
{
	// Build the validation object with its rules
	$this-&gt;_validation = Validation::factory($this-&gt;_object)
		-&gt;bind(&#039;:model&#039;, $this)
		-&gt;bind(&#039;:original_values&#039;, $this-&gt;_original_values)
		-&gt;bind(&#039;:changed&#039;, $this-&gt;_changed);

	foreach ($this-&gt;rules() as $field =&gt; $rules)
	{
		$this-&gt;_validation-&gt;rules($field, $rules);
	}

	// Use column names by default for labels
	$columns = array_keys($this-&gt;_table_columns);

	// Merge user-defined labels
	$labels = array_merge(array_combine($columns, $columns), $this-&gt;labels());

	foreach ($labels as $field =&gt; $label)
	{
		$this-&gt;_validation-&gt;label($field, $label);
	}
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="get_typed"><small>protected</small>  get_typed(<small>string</small> <span class="param" title="$column">$column</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Returns a value as the native type, will return FALSE if the
value could not be casted.</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $column</strong> <small>required</small> - $column</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>mixed</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function get_typed($column)
{
	$value = $this-&gt;get($column);
	
	if ($value === NULL)
		return NULL;

	// Call __get for any user processing
	switch($this-&gt;table_column_type($column))
	{
		case &#039;float&#039;:  return floatval($this-&gt;__get($column));
		case &#039;int&#039;:    return intval($this-&gt;__get($column));
		case &#039;string&#039;: return strval($this-&gt;__get($column));
	}
	
	return $value;
}</code>
</pre>
</div>
</div>

<div class='method'>
<h3 id="run_filter"><small>protected</small>  run_filter(<small>string</small> <span class="param" title="The column name">$field</span> , <small>string</small> <span class="param" title="The value to filter">$value</span> )<small> (defined in <a href='/documentation/api/Kohana_ORM'>Kohana_ORM</a>)</small></h3>
<div class='description'><p>Filters a value for a specific column</p>
</div>
<h4>Parameters</h4>
<ul>
<li>
 <span class="blue">string </span><strong> $field</strong> <small>required</small> - The column name</li>
<li>
 <span class="blue">string </span><strong> $value</strong> <small>required</small> - The value to filter</li>
</ul>
<h4>Return Values</h4>
<ul class='return'>
<li>
<span class='blue'>string</span>  
</li></ul>
<div class="method-source">
<h4>Source Code</h4>
<pre>
<code class="language-php">protected function run_filter($field, $value)
{
	$filters = $this-&gt;filters();

	// Get the filters for this column
	$wildcards = empty($filters[TRUE]) ? [] : $filters[TRUE];

	// Merge in the wildcards
	$filters = empty($filters[$field]) ? $wildcards : array_merge($wildcards, $filters[$field]);

	// Bind the field name and model so they can be used in the filter method
	$_bound = [
		&#039;:field&#039; =&gt; $field,
		&#039;:model&#039; =&gt; $this,
	];

	foreach ($filters as $array)
	{
		// Value needs to be bound inside the loop so we are always using the
		// version that was modified by the filters that already ran
		$_bound[&#039;:value&#039;] = $value;

		// Filters are defined as array($filter, $params)
		$filter = $array[0];
		$params = Arr::get($array, 1, [&#039;:value&#039;]);

		foreach ($params as $key =&gt; $param)
		{
			if (is_string($param) AND array_key_exists($param, $_bound))
			{
				// Replace with bound value
				$params[$key] = $_bound[$param];
			}
		}

		if (is_array($filter) OR ! is_string($filter))
		{
			// This is either a callback as an array or a lambda
			$value = call_user_func_array($filter, $params);
		}
		elseif (strpos($filter, &#039;::&#039;) === FALSE)
		{
			// Use a function call
			$function = new ReflectionFunction($filter);

			// Call $function($this[$field], $param, ...) with Reflection
			$value = $function-&gt;invokeArgs($params);
		}
		else
		{
			// Split the class and method of the rule
			list($class, $method) = explode(&#039;::&#039;, $filter, 2);

			// Use a static method call
			$method = new ReflectionMethod($class, $method);

			// Call $Class::$method($this[$field], $param, ...) with Reflection
			$value = $method-&gt;invokeArgs(NULL, $params);
		}
	}

	return $value;
}</code>
</pre>
</div>
</div>
</div>