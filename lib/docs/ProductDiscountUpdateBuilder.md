# ProductDiscountUpdateBuilder

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
```

## changeIsActive

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->changeIsActive(new ProductDiscountChangeIsActiveAction())->build()
//or
$productDiscountUpdate = $builder->changeIsActive(
    function (ProductDiscountChangeIsActiveAction $action): ProductDiscountChangeIsActiveAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->changeName(new ProductDiscountChangeNameAction())->build()
//or
$productDiscountUpdate = $builder->changeName(
    function (ProductDiscountChangeNameAction $action): ProductDiscountChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changePredicate

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->changePredicate(new ProductDiscountChangePredicateAction())->build()
//or
$productDiscountUpdate = $builder->changePredicate(
    function (ProductDiscountChangePredicateAction $action): ProductDiscountChangePredicateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeSortOrder

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->changeSortOrder(new ProductDiscountChangeSortOrderAction())->build()
//or
$productDiscountUpdate = $builder->changeSortOrder(
    function (ProductDiscountChangeSortOrderAction $action): ProductDiscountChangeSortOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeValue

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->changeValue(new ProductDiscountChangeValueAction())->build()
//or
$productDiscountUpdate = $builder->changeValue(
    function (ProductDiscountChangeValueAction $action): ProductDiscountChangeValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->setDescription(new ProductDiscountSetDescriptionAction())->build()
//or
$productDiscountUpdate = $builder->setDescription(
    function (ProductDiscountSetDescriptionAction $action): ProductDiscountSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setValidFrom

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->setValidFrom(new ProductDiscountSetValidFromAction())->build()
//or
$productDiscountUpdate = $builder->setValidFrom(
    function (ProductDiscountSetValidFromAction $action): ProductDiscountSetValidFromAction {
        // modify action as needed
        return $action;
    })->build();
```
## setValidUntil

```php
use Commercetools\Builder\ProductDiscountUpdateBuilder;

$builder = new ProductDiscountUpdateBuilder();
$productDiscountUpdate = $builder->setValidUntil(new ProductDiscountSetValidUntilAction())->build()
//or
$productDiscountUpdate = $builder->setValidUntil(
    function (ProductDiscountSetValidUntilAction $action): ProductDiscountSetValidUntilAction {
        // modify action as needed
        return $action;
    })->build();
```