# Migrations  


#### Naming conventions of migrations  

Name of table is plural of model name.  
*model name:* __FooBar__  
*table name:* __FooBars__  


#### Variations of seeder names  

| Seeder name	| Explanation	|  
| -	|-	|  
| __FooBars<span style="color:#21bf34">Faker</span>Seeder__	| Seed faker data	|  
| __FooBars<span style="color:#00adff">Table</span>Seeder__	| Seed single table with production data	|  
| __FooBars<span style="color:#ffbc00">Database</span>Seeder__	| Seed multiple seeders at once E.G.: All tables of package	|  
  