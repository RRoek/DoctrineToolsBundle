# DoctrineToolsBundle
### Features

- Give you some traits to build faster yours Doctrine2 Entities
- Give you a listener that override `Gedmo\Loggable\LoggableListener`  (in `stof/doctrine-extensions-bundle`) which make that all fields of your entity is loggable without declare them one peer one manually. 

## Introduction
This small bundle give you the ability to build faster your Doctrine2 Entities with some PHP Traits.
This bundle depends on 
* `stof/doctrine-extensions-bundle` (& `gedmo/doctrine-extensions included with`) -> in Dependencies ;
* `ramsey/uuid-doctrine` -> in Dependencies ;
* `vich/uploader-bundle` ( for traits with files) -> Caution this bundle is not included in dependencies to not force users that don't need it. 

## List of traits
* GenderTrait -> for gender Mr, Mrs, Mister, etc.
* IdTrait -> for id
* UuidTrait -> for uuid field (use ramsey/uuid-doctrine)
* IsActiveTrait -> for a boolean active/inactive
* IsEnabledTrait -> for a boolean enabled/disabled
* LabelTrait -> for classic label
* NameTrait -> for classic fields firstname & lastname
* IntegerNumberTrait -> for a int number field
* FloatNumberTrait -> for a float number field
* TitleTrait -> for classic title field
* TypeTrait -> for classic type
* YearTrait -> for year field
* VichUploaderFileTrait -> for a file with its upload (use VichUploaderBundle)
* VichUploaderImageTrait -> for a image file with its upload (use VichUploaderBundle)
* SingleImageFileUploadTrait -> Same but if you don't want to use VichUploaderBundle.
* SingleFileUploadTrait -> Same but if you don't want to use VichUploaderBundle.

## Share yours
Feel free to share yours to add its in this bundle :)

## Uses
### Activate bundle
To use it, simply `composer require rroek/doctrine-tools-bundle`
### Use it in your Entity

```php
<?php
    
    namespace Acme\MyBundle\Manager;
    
    use RRoek\DoctrineToolsBundle\Traits\Entity\IdTrait;
    
    /**
     * @ORM\Entity()
     */
    class MyAwesomeEntity
    {
        use IdTrait;
    }
    
```

Give you this in your entity :
```php
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * JMS\Expose
     */
    private $id;
```
And it's Getter & Setter

And its all ! Your entity have auto-increment Id without rewrite another time that common field.
### Use the LoggableListener
The LoggableListener simply extends `Gedmo\Loggable\LoggableListener`  of `stof/doctrine-extensions-bundle`.
It just override one method to permit to write  this :
```php

/**
 * Parameter.
 *
 * @ORM\Entity()
 * @Gedmo\Loggable
 */
class MyEntity
{...}
```
Instead of this :
```php
/**
 * Parameter.
 *
 * @ORM\Entity()
 * @Gedmo\Loggable
 */
class MyEntity
{
    /**
     * @ORM\Column(type="text")
     * @Gedmo\Versioned()
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Gedmo\Versioned()
     */
    private $label;

    /**
     * @ORM\Column(type="text")
     * @Gedmo\Versioned()
     */
    private $type;

    [...]
}
```
 
## Enjoy !
