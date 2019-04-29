# Serializer
This library can serialize php objects to JSON format and Yaml format 
## How to use
1.Add your object to console.php  
2.Write
```php
$SerializedObject = $JSON -> serialize($yourobject);
```
if you need JSON or 
```php
$SerializedObject = $Yaml -> serialize($yourobject);
```
if you need Yaml
