ceglys
======

<?xml version="1.0" encoding="utf-8" ?>
<!-- SQL XML created by WWW SQL Designer, http://code.google.com/p/wwwsqldesigner/ -->
<!-- Active URL: http://ondras.zarovi.cz/sql/demo/ -->
<sql>
<datatypes db="mysql">
  <group label="Numeric" color="rgb(238,238,170)">
	 	<type label="TINYINT" length="0" sql="TINYINT" quote=""/>
	 	<type label="SMALLINT" length="0" sql="SMALLINT" quote=""/>
	 	<type label="MEDIUMINT" length="0" sql="MEDIUMINT" quote=""/>
	 	<type label="INT" length="0" sql="INT" quote=""/>
		<type label="Integer" length="0" sql="INTEGER" quote=""/>
		<type label="BIGINT" length="0" sql="BIGINT" quote=""/>
		<type label="Decimal" length="1" sql="DECIMAL" re="DEC" quote=""/>
		<type label="Single precision" length="0" sql="FLOAT" quote=""/>
		<type label="Double precision" length="0" sql="DOUBLE" re="DOUBLE" quote=""/>
	</group>

	<group label="Character" color="rgb(255,200,200)">
		<type label="Char" length="1" sql="CHAR" quote="'"/>
		<type label="Varchar" length="1" sql="VARCHAR" quote="'"/>
		<type label="Text" length="0" sql="MEDIUMTEXT" re="TEXT" quote="'"/>
		<type label="Binary" length="1" sql="BINARY" quote="'"/>
		<type label="Varbinary" length="1" sql="VARBINARY" quote="'"/>
		<type label="BLOB" length="0" sql="BLOB" re="BLOB" quote="'"/>
	</group>

	<group label="Date &amp; Time" color="rgb(200,255,200)">
		<type label="Date" length="0" sql="DATE" quote="'"/>
		<type label="Time" length="0" sql="TIME" quote="'"/>
		<type label="Datetime" length="0" sql="DATETIME" quote="'"/>
		<type label="Year" length="0" sql="YEAR" quote=""/>
		<type label="Timestamp" length="0" sql="TIMESTAMP" quote="'"/>
	</group>
	
	<group label="Miscellaneous" color="rgb(200,200,255)">
		<type label="ENUM" length="1" sql="ENUM" quote=""/>
		<type label="SET" length="1" sql="SET" quote=""/>
		<type label="Bit" length="0" sql="bit" quote=""/>
	</group>
</datatypes><table x="652" y="273" name="evaluaciones">
<row name="id" null="1" autoincrement="1">
<datatype>INT(11)</datatype>
<default>NULL</default></row>
<row name="evaluacion" null="1" autoincrement="0">
<datatype>VARCHAR(255)</datatype>
<default>NULL</default></row>
<row name="grupo" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default></row>
<row name="preguntas" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="409" y="146" name="notas">
<row name="id" null="1" autoincrement="1">
<datatype>TINYINT</datatype>
<default>NULL</default></row>
<row name="usuario_id" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default><relation table="usuarios" row="id" />
</row>
<row name="evaluacion_id" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default><relation table="evaluaciones" row="id" />
</row>
<row name="nota" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default></row>
<row name="estado" null="1" autoincrement="0">
<datatype>INT(11)</datatype>
<default>NULL</default></row>
<row name="fecha" null="1" autoincrement="0">
<datatype>TIMESTAMP</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="654" y="40" name="usuarios">
<row name="id" null="1" autoincrement="1">
<datatype>TINYINT</datatype>
<default>NULL</default></row>
<row name="nombre" null="1" autoincrement="0">
<datatype>VARCHAR(255)</datatype>
<default>NULL</default></row>
<row name="ci" null="1" autoincrement="0">
<datatype>VARCHAR(255)</datatype>
<default>NULL</default></row>
<row name="usuario" null="0" autoincrement="0">
<datatype>VARCHAR(255)</datatype>
<default>'NULL'</default></row>
<row name="password" null="0" autoincrement="0">
<datatype>VARCHAR(255)</datatype>
<default>'NULL'</default></row>
<row name="tipo" null="1" autoincrement="0">
<datatype>TINYINT</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
</sql>
